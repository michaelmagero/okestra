<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Applicant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Libraries\Mpesa\MpesaMethods;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ReservationConfirmation;
use App\Notifications\AdminReservationConfirmation;
use App\Notifications\ApplicantReservationConfirmation;

class FrontendController extends Controller
{
    protected $mpesa;


    public function __construct(MpesaMethods $mpesa)
    {
        $this->mpesa = $mpesa;
    }

    public function home()
    {
        $vehicles = Vehicle::orderBy('created_at', 'desc')->get();
        return view('frontend.home')
            ->with('vehicles', $vehicles);
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function cars()
    {
        return view('frontend.cars');
    }

    public function vehicles()
    {
        return Vehicle::orderBy('created_at', 'desc')->get();
    }

    public function viewcar($id)
    {
        $vehicle_details = Vehicle::find($id);
        return view('frontend.viewcar')
            ->with('details', $vehicle_details);
    }

    public function get_registration_form($id)
    {
        $car_details = Vehicle::find($id);
        return view('auth.register')->with('car_details', $car_details);
    }

    public function submit_registration_form(Request $request)
    {
        //$applicant_details = array($request->all());


        $applicant = new Applicant();
        $applicant->vehicle_id = $request->vehicle_id;
        $applicant->name = $request->name;
        $applicant->middlename = $request->middlename;
        $applicant->surname = $request->surname;
        $applicant->email = $request->email;
        $applicant->application_status = 0;
        $applicant->loan_status = 2;

        //national_id
        $images = array();
        if ($files = $request->file('natioanal_id')) {
            foreach ($files as $file) {
                $img = $file->getClientOriginalName();
                $file->move('uploads/applications/nationalid/' . preg_replace('/[^a-zA-Z0-9\s]/', '', strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img));
                $images[] = $img;
            }
        }
        $applicant->national_id = json_encode($images);

        $applicant->dob = $request->dob;
        $applicant->phone = $request->phone;
        $applicant->id_number = $request->id_number;
        $applicant->kra_pin = $request->kra_pin;
        $applicant->county = $request->county;
        $applicant->locality = $request->locality;
        $applicant->street = $request->street;
        $applicant->apartment = $request->apartment;
        $applicant->employer = $request->employer;
        $applicant->expenses = $request->expenses;
        $applicant->business_name = $request->business_name;
        $applicant->gross_business_income = $request->gross_business_income;
        $applicant->net_income = $request->net_income;

        //bank_statements
        if ($file = $request->file('bank_statements')) {
            $bankstatements = $file->getClientOriginalName();
            $file->move('uploads/applications/bankstatements/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $bankstatements);
            $applicant->bank_statements = $bankstatements;
        }

        //mpesa_statements
        if ($file = $request->file('mpesa_statements')) {
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/mpesastatements/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->mpesa_statements = $img;
        }


        //cr12 certificate
        if ($file = $request->file('cr12_certificate')) {
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/cr12certificate/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->cr12_certificate = $img;
        }

        //kra_certificate
        if ($file = $request->file('kra_certificate')) {
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/kracertificate/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->kra_certificate = $img;
        }

        //incorporation certificate
        if ($file = $request->file('incorporation_certificate')) {
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/incorporationcertificate/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->incorporation_certificate = $img;
        }

        // $password = Str::random(20);
        // $applicant->password = bcrypt($password);

        dump($applicant);
        dump($applicant_details);

        // $this->mpesa->STKPushPayment($request);
        // return view('frontend.payment')->with('applicant_details', $applicant_details);
    }

    public function confirm_payment()
    {
        return view('frontend.payment');
    }

    public function submit_payment(Request $request)
    {
        $this->mpesa->confirm_payment($request);
        $applicant = new Applicant();
        $applicant->name = $request['name'];
        $applicant->middlename = $request['middlename'];
        $applicant->surname = $request['surname'];
        $applicant->national_id = $request['national_id'];
        $applicant->dob = $request['dob'];
        $applicant->phone = $request['phone'];
        $applicant->email = $request['email'];
        $applicant->id_number = $request['id_number'];
        $applicant->kra_pin = $request['kra_pin'];
        $applicant->county = $request['county'];
        $applicant->locality = $request['locality'];
        $applicant->street = $request['street'];
        $applicant->apartment = $request['apartment'];
        $applicant->employer = $request['employer'];
        $applicant->net_income = $request['net_income'];
        $applicant->expenses = $request['expenses'];
        $applicant->bank_statements = $request['bank_statements'];
        $applicant->mpesa_statements = $request['mpesa_statements'];
        $applicant->business_name = $request['business_name'];
        $applicant->gross_business_income = $request['gross_business_income'];
        $applicant->cr12_certificate = $request['cr12_certificate'];
        $applicant->kra_certificate = $request['kra_certificate'];
        $applicant->incorporation_certificate = $request['incorporation_certificate'];
        $applicant->vehicle_id = $request['vehicle_id'];
        $applicant->save();
        //successful Notification for successful Submission
        $applicant = $request->email;
        $admin = 'info@kommute.africa';
        $sales = 'sales@kommute.africa';
        $accounts = 'finance@kommute.africa';
        $robert = 'robert@kommute.africa';
        $details = [
            'greeting' => 'Congratulations!',
            'subject' > 'Kommute Car Reservation',
            'body' => 'You have successfully reserved ' . $request['vehicle_id'] . 'and attached is your invoice',
            'thanks' => 'Thank you for choosing Kommute!'
        ];
        Notification::route('mail', $admin)->notify(new AdminReservationConfirmation($details));
        Notification::route('mail', $sales)->notify(new AdminReservationConfirmation($details));
        Notification::route('mail', $admin)->notify(new AdminReservationConfirmation($details));
        Notification::route('mail', $accounts)->notify(new AdminReservationConfirmation($details));
        Notification::route('mail', $robert)->notify(new AdminReservationConfirmation($details));
        Notification::route('mail', $applicant)->notify(new ApplicantReservationConfirmation($details));

        session()->flash('success_message', 'Reservation Successful! We will get in touch with you with more details.');
        return redirect('/cars');
    }

    public function invoice(Request $request)
    {
        $applicant_details = $request->get($request);
        return view('frontend.invoice')->with('applicant_details', $applicant_details);
    }
}
