<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Vehicle;
use Illuminate\Support\Str;
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
        $applications = Applicant::get();
        return view('admin.applications.index')->with('applications', $applications);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applications = Applicant::findOrFail($id);
        $vehicles = Vehicle::get();
        return view('admin.applications.show')
            ->with('vehicles', $vehicles)
            ->with('applications', $applications);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $applications = Applicant::find($id);
        return view('admin.applications.edit')
            ->with('applications', $applications);
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
        $applicant->application_status = $request->application_status;
        $applicant->loan_status = $request->loan_status;
        $applicant->save();
        flash()->success('Update Successful');
        return redirect('admin-applications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $application = Applicant::find($id);
        $application->delete();
        flash()->success('Applicant Deleted Successfully');
        return redirect('admin-applications');
    }
}
