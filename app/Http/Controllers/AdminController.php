<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     *
     * Return admin index view
     *
     * @param Request $request
     *
     *
     **/
    public function index(Request $request)
    {
        $user = $request->user()->role;

        switch ($user) {
            case 0:
                return view('admin.index')
                    ->with('vehicles', Vehicle::get())
                    ->with('applications', Applicant::get());
                break;
            case 1:
                return view('admin.vehicles.index')
                    ->with('vehicles', Vehicle::get())
                    ->with('applications', Applicant::get());
                break;
            default:
                break;
        }
    }
}
