<?php

namespace App\Http\Controllers;

use App\Libraries\Mpesa\MpesaMethods;
use App\Models\Vehicle;
use App\Models\Applicant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ReservationConfirmation;

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
        $applicant_details = array($request->all());


        $applicant = new Applicant();
        $applicant->vehicle_id = $request->vehicle_id;
        $applicant->name = $request->name;
        $applicant->middlename = $request->middlename;
        $applicant->surname = $request->surname;
        $applicant->email = $request->email;
        $applicant->application_status = 0;
        $applicant->loan_status = 2;

        //natioanal_id
        if ($file = $request->file('national_id')) {
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->national_id = $img;
        }

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
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->bank_statements = $img;
        }

        //mpesa_statements
        if ($file = $request->file('mpesa_statements')) {
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->mpesa_statements = $img;
        }


        //cr12 certificate
        if ($file = $request->file('cr12_certificate')) {
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->cr12_certificate = $img;
        }

        //kra_certificate
        if ($file = $request->file('kra_certificate')) {
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->kra_certificate = $img;
        }

        //incorporation certificate
        if ($file = $request->file('incorporation_certificate')) {
            $img = $file->getClientOriginalName();
            $file->move('uploads/applications/' . strtolower(str_replace(' ', '', $request->name . $request->middlename . $request->surname)), $img);
            $applicant->incorporation_certificate = $img;
        }

        // $password = Str::random(20);
        // $applicant->password = bcrypt($password);

        $this->mpesa->STKPushPayment($request);

        return view('frontend.payment')->with('applicant_details', $applicant_details);

        // //successful Notification for successful Submission
        // $applicant = $request->email;
        // $details = [
        //     'greeting' => 'Hello!',
        //     'subject' > 'Kommute Car Reservation',
        //     'body' => 'You have successfully reserved ' . $applicant->make . $applicant->model .  $applicant->model . 'and attached is your invoice',
        //     'thanks' => 'Thank you for working with Kommute!'
        // ];
        // Notification::route('mail', $applicant)->notify(new AdminReservationConfirmation($details));
        // Notification::route('mail', $applicant)->notify(new ApplicantReservationConfirmation($details));

        // $applicant->save();
        // $request->session()->flash('success_message', 'Application Added Successfully.');
        // return redirect('/');
    }

    public function confirm_payment()
    {
        return view('frontend.payment');
    }

    public function submit_payment(Request $request)
    {
        //$this->mpesa->confirm_payment();
        $mobile_number = "254" . substr($request->mobile_number, 1);
        $transaction_id = $request->transaction_id;

        $callback_file_contents =  file_get_contents('https://kommute.africa/safdaraja/stkCallbackResponse.json');
        $payments = json_decode($callback_file_contents, TRUE);

        dump($payments);

        // foreach ($payments as $payment) {
        //     if ($payment['stkCallback']['ResultCode'] == 0) {
        //         if (count($payment['stkCallback']['CallbackMetadata']['Item']) == (int) 4) {
        //             $callback_phone = $payment['stkCallback']['CallbackMetadata']['Item'][3]['Value'];
        //             $callback_transaction = $payment['stkCallback']['CallbackMetadata']['Item'][1]['Value'];

        //             if ($mobile_number == $callback_phone && $transaction_id == $callback_transaction) {
        //                 $applicant = new Applicant();
        //                 $applicant->name = $request['name'];
        //                 $applicant->middlename = $request['middlename'];
        //                 $applicant->surname = $request['surname'];
        //                 $applicant->national_id = $request['national_id'];
        //                 $applicant->dob = $request['dob'];
        //                 $applicant->phone = $request['phone'];
        //                 $applicant->email = $request['email'];
        //                 $applicant->id_number = $request['id_number'];
        //                 $applicant->kra_pin = $request['kra_pin'];
        //                 $applicant->county = $request['county'];
        //                 $applicant->locality = $request['locality'];
        //                 $applicant->street = $request['street'];
        //                 $applicant->apartment = $request['apartment'];
        //                 $applicant->employer = $request['employer'];
        //                 $applicant->net_income = $request['net_income'];
        //                 $applicant->expenses = $request['expenses'];
        //                 $applicant->bank_statements = $request['bank_statements'];
        //                 $applicant->mpesa_statements = $request['mpesa_statements'];
        //                 $applicant->business_name = $request['business_name'];
        //                 $applicant->gross_business_income = $request['gross_business_income'];
        //                 $applicant->cr12_certificate = $request['cr12_certificate'];
        //                 $applicant->kra_certificate = $request['kra_certificate'];
        //                 $applicant->incorporation_certificate = $request['incorporation_certificate'];
        //                 $applicant->vehicle_id = $request['vehicle_id'];
        //                 $applicant->save();
        //                 session()->flash('success_message', 'Reservation Successful! We will get in touch with you with more details.');
        //                 return redirect('/cars');
        //             } else {
        //                 session()->flash('error_message', 'Payment confirmation failed! Check if the transaction code is properly entered and try again');
        //                 return back();
        //             }
        //         }
        //     }
        // }
    }

    public function invoice(Request $request)
    {
        $applicant_details = $request->get($request);
        return view('frontend.invoice')->with('applicant_details', $applicant_details);
    }
}
