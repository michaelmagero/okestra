<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class FrontendController extends Controller
{
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
}
