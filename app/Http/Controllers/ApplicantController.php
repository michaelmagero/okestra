<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Applicant::get();
        return view('admin.applicants.index')->with('applicants', $applicants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_email = Applicant::where('email', $request->email)->value('email');
        if ($user_email) {
            flash()->error('User with Similar email Exists!');
            return redirect('all-users');
        } else {
            $applicant = new Applicant();
            $applicant->name = $request->name;
            $applicant->middlename = $request->middlename;
            $applicant->surname = $request->surname;
            $applicant->email = $request->email;
            $applicant->role = $request->role;
            $applicant->status = $request->status;
            $applicant->password = $request->password;

            //natioanal_id
            if ($file = $request->file('national_id')) {
                $img = $file->getClientOriginalName();
                $file->move('uploads/cars/' . $request->name . $request->middlename . $request->surname, $img);
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
            $applicant->employment_type = $request->employment_type;
            $applicant->net_income = $request->net_income;
            $applicant->expenses = $request->expenses;

            //bank_statements
            if ($file = $request->file('bank_statements')) {
                $img = $file->getClientOriginalName();
                $file->move('uploads/applications/' . $request->name . $request->middlename . $request->surname, $img);
                $applicant->bank_statements = $img;
            }

            //mpesa_statements
            if ($file = $request->file('mpesa_statements')) {
                $img = $file->getClientOriginalName();
                $file->move('uploads/applications/' . $request->name . $request->middlename . $request->surname, $img);
                $applicant->mpesa_statements = $img;
            }

            $applicant->business_name = $request->business_name;
            $applicant->gross_business_income = $request->gross_business_income;

            //cr12 certificate
            if ($file = $request->file('cr12_certificate')) {
                $img = $file->getClientOriginalName();
                $file->move('uploads/applications/' . $request->name . $request->middlename . $request->surname, $img);
                $applicant->cr12_certificate = $img;
            }

            //kra_certificate
            if ($file = $request->file('kra_certificate')) {
                $img = $file->getClientOriginalName();
                $file->move('uploads/applications/' . $request->name . $request->middlename . $request->surname, $img);
                $applicant->kra_certificate = $img;
            }

            //incorporation certificate
            if ($file = $request->file('incorporation_certificate')) {
                $img = $file->getClientOriginalName();
                $file->move('uploads/applications/' . $request->name . $request->middlename . $request->surname, $img);
                $applicant->incorporation_certificate = $img;
            }

            $password = Str::random(20);
            $applicant->password = bcrypt($password);
            $applicant->save();
            flash('Applicant Added Successfully')->success();
            return redirect('all-applicants');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applicant = Applicant::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $applicant = Applicant::find($id);
        return view('admin.applicants.edit')
            ->with('applicant', $applicant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->name = $request->name;
        $applicant->middlename = $request->middlename;
        $applicant->surname = $request->surname;
        $applicant->national_id = $request->national_id;
        $applicant->dob = $request->dob;
        $applicant->phone = $request->phone;
        $applicant->id_number = $request->id_number;
        $applicant->kra_pin = $request->kra_pin;
        $applicant->county = $request->county;
        $applicant->locality = $request->locality;
        $applicant->street = $request->street;
        $applicant->apartment = $request->apartment;
        $applicant->employer = $request->employer;
        $applicant->employment_type = $request->employment_type;
        $applicant->net_income = $request->net_income;
        $applicant->expenses = $request->expenses;
        $applicant->bank_statements = $request->bank_statements;
        $applicant->mpesa_statements = $request->mpesa_statements;
        $applicant->business_name = $request->business_name;
        $applicant->gross_business_income = $request->gross_business_income;
        $applicant->cr12_certificate = $request->cr12_certificate;
        $applicant->kra_certificate = $request->kra_certificate;
        $applicant->incorporation_certificate = $request->incorporation_certificate;
        $applicant->email = $request->email;
        $applicant->role = $request->role;
        $applicant->status = $request->status;
        $applicant->password = $request->password;
        $applicant->save();
        flash()->success('Update Successful');
        return redirect('all-applicants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $applicant = Applicant::find($id);
        $applicant->delete();
        flash()->success('Applicant Deleted Successfully');
        return redirect('all-applicants');
    }
}
