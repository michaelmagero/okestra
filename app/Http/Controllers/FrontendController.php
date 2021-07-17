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
        return view('frontend.home');
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

    public function viewvehicle($id)
    {
        return Vehicle::find($id);
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
        $this->mpesa->STKPushPayment($request);
        $applicant_details = array($request->all());
        return view('frontend.payment')->with('applicant_details', $applicant_details);
    }

    // public function confirm_payment()
    // {
    //     return view('frontend.payment');
    // }

    public function submit_payment(Request $request)
    {
        $this->mpesa->confirm_payment($request);

        if (!empty($request->employer)) {
            $applicant = new Applicant();
            $applicant->name = $request->name;
            $applicant->middlename = $request->middlename;
            $applicant->surname = $request->surname;

            if ($request->hasFile('national_id')) {
                $vehicle_image = $request->file('national_id');
                $filename = $vehicle_image->getClientOriginalName();
                $lowercase_string = strtolower($request->name . $request->middlename . $request->surname);
                $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);
                $vehicle_image->move('uploads/applications/natioanalid/' . $string_without_characters,  $filename);
                $applicant->national_id = $filename;
            }

            $applicant->dob = $request->dob;
            $applicant->phone = $request->phone;
            $applicant->email = $request->email;
            $applicant->id_number = $request->id_number;
            $applicant->kra_pin = $request->kra_pin;
            $applicant->county = $request->county;
            $applicant->locality = $request->locality;
            $applicant->street = $request->street;
            $applicant->apartment = $request->apartment;
            $applicant->employer = $request->employer;
            $applicant->employed_net_income = $request->employed_net_income;
            $applicant->expenses = $request->expenses;

            if ($request->hasFile('employed_bank_statements')) {
                $vehicle_image = $request->file('employed_bank_statements');
                $filename = $vehicle_image->getClientOriginalName();
                $lowercase_string = strtolower($request->name . $request->middlename . $request->surname);
                $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);
                $vehicle_image->move('uploads/applications/employedbankstatements/' . $string_without_characters,  $filename);
                $applicant->employed_bank_statements = $filename;
            }


            if ($request->hasFile('employed_mpesa_statements')) {
                $vehicle_image = $request->file('employed_mpesa_statements');
                $filename = $vehicle_image->getClientOriginalName();
                $lowercase_string = strtolower($request->name . $request->middlename . $request->surname);
                $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);
                $vehicle_image->move('uploads/applications/employedmpesastatements/' . $string_without_characters,  $filename);
                $applicant->employed_mpesa_statements = $filename;
            }


            $applicant->vehicle_id = $request->vehicle_id;
            $request->session()->put('reservation_details', $request->all());
            //$this->invoice($request);
            $applicant->save();
            //successful Notification for successful Submission
            // $applicant = $request->email;
            // $admin = 'info@kommute.africa';
            // $sales = 'sales@kommute.africa';
            // $accounts = 'finance@kommute.africa';
            // $robert = 'robert@kommute.africa';
            // $details = [
            //     'greeting' => 'Congratulations!',
            //     'subject' > 'Kommute Car Reservation',
            //     'body' => 'You have successfully reserved ' . $request['vehicle_id'] . 'and attached is your invoice',
            //     'thanks' => 'Thank you for choosing Kommute!'
            // ];
            // Notification::route('mail', $admin)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $sales)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $admin)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $accounts)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $robert)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $applicant)->notify(new ApplicantReservationConfirmation($details));

            session()->flash('success_message', 'Reservation Successful! We will get in touch with you with more details.');
            return redirect('/cars');
        }

        if (!empty($request->business_name)) {
            $applicant = new Applicant();
            $applicant->name = $request->name;
            $applicant->middlename = $request->middlename;
            $applicant->surname = $request->surname;

            if ($request->hasFile('national_id')) {
                $vehicle_image = $request->file('national_id');
                $filename = $vehicle_image->getClientOriginalName();
                $lowercase_string = strtolower($request->name . $request->middlename . $request->surname);
                $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);
                $vehicle_image->move('uploads/applications/selfnationalid/' . $string_without_characters,  $filename);
                $applicant->national_id = $filename;
            }

            $applicant->dob = $request->dob;
            $applicant->phone = $request->phone;
            $applicant->email = $request->email;
            $applicant->id_number = $request->id_number;
            $applicant->kra_pin = $request->kra_pin;
            $applicant->county = $request->county;
            $applicant->locality = $request->locality;
            $applicant->street = $request->street;
            $applicant->apartment = $request->apartment;
            $applicant->business_name = $request->business_name;
            $applicant->gross_business_income = $request->gross_business_income;
            $applicant->self_net_income = $request->self_net_income;


            if ($request->hasFile('cr12_certificate')) {
                $vehicle_image = $request->file('cr12_certificate');
                $filename = $vehicle_image->getClientOriginalName();
                $lowercase_string = strtolower($request->name . $request->middlename . $request->surname);
                $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);
                $vehicle_image->move('uploads/applications/cr12certificate/' . $string_without_characters,  $filename);
                $applicant->cr12_certificate = $filename;
            }


            if ($request->hasFile('kra_certificate')) {
                $vehicle_image = $request->file('kra_certificate');
                $filename = $vehicle_image->getClientOriginalName();
                $lowercase_string = strtolower($request->name . $request->middlename . $request->surname);
                $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);
                $vehicle_image->move('uploads/applications/kracertificate/' . $string_without_characters,  $filename);
                $applicant->kra_certificate = $filename;
            }


            if ($request->hasFile('incorporation_certificate')) {
                $vehicle_image = $request->file('incorporation_certificate');
                $filename = $vehicle_image->getClientOriginalName();
                $lowercase_string = strtolower($request->name . $request->middlename . $request->surname);
                $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);
                $vehicle_image->move('uploads/applications/incorporationcertificate/' . $string_without_characters,  $filename);
                $applicant->incorporation_certificate = $filename;
            }


            if ($request->hasFile('self_bank_statements')) {
                $vehicle_image = $request->file('self_bank_statements');
                $filename = $vehicle_image->getClientOriginalName();
                $lowercase_string = strtolower($request->name . $request->middlename . $request->surname);
                $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);
                $vehicle_image->move('uploads/applications/selfbankstatements/' . $string_without_characters,  $filename);
                $applicant->self_bank_statements = $filename;
            }


            $applicant->vehicle_id = $request->vehicle_id;
            $request->session()->put('reservation_details', $request->all());
            //dump($request->all());
            $applicant->save();
            //successful Notification for successful Submission
            // $applicant = $request->email;
            // $admin = 'info@kommute.africa';
            // $sales = 'sales@kommute.africa';
            // $accounts = 'finance@kommute.africa';
            // $robert = 'robert@kommute.africa';
            // $details = [
            //     'greeting' => 'Congratulations!',
            //     'subject' > 'Kommute Car Reservation',
            //     'body' => 'You have successfully reserved ' . $request['vehicle_id'] . 'and attached is your invoice',
            //     'thanks' => 'Thank you for choosing Kommute!'
            // ];
            // Notification::route('mail', $admin)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $sales)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $admin)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $accounts)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $robert)->notify(new AdminReservationConfirmation($details));
            // Notification::route('mail', $applicant)->notify(new ApplicantReservationConfirmation($details));

            session()->flash('success_message', 'Reservation Successful! We will get in touch with you with more details.');
            return redirect('/cars');
        }
    }

    public function invoice(Request $request)
    {
        $reservation_details = session()->get('reservation_details');
        return view('frontend.invoice')->with('reservation_details', $reservation_details);
    }
}
