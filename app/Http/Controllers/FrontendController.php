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
        $vehicles = Vehicle::get();
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
        $vehicles = Vehicle::get();

        return view('frontend.cars')
            ->with('vehicles', $vehicles);
    }

    public function vehicles()
    {
        return Vehicle::get();
    }

    public function search(Request $request)
    {

        $key = trim($request->get('q'));

        $vehicles = Vehicle::query()
            ->where('make', 'like', "%{$key}%")
            ->orWhere('model', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();


        return view('frontend.search', [
            'vehicles' => $vehicles,
        ]);
    }

    public function viewcar($id)
    {
        $vehicle_details = Vehicle::find($id);
        return view('frontend.viewcar')
            ->with('details', $vehicle_details);
    }

    public function create($id)
    {
        $car_details = Vehicle::find($id);
        return view('auth.register')->with('car_details', $car_details);
    }

    public function store(Request $request)
    {

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

        //dd($applicant);

        // $password = Str::random(20);
        // $applicant->password = bcrypt($password);


        // $this->mpesa->STKPushPayment($request);

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

        $applicant->save();
        $request->session()->flash('success_message', 'Application Added Successfully.');
        return redirect('/');
    }
}
