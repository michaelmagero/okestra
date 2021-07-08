<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::orderBy('created_at', 'desc')->paginate(30);
        return view('admin.vehicles.index')->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vehicle = new Vehicle();
        $vehicle->registration = $request->registration;
        $vehicle->make = ucfirst($request->make);
        $vehicle->model = ucfirst($request->model);
        $vehicle->year = $request->year;
        $vehicle->color = $request->color;
        $vehicle->location = $request->location;
        $vehicle->mileage = $request->mileage;
        $vehicle->fuel_type = $request->fuel_type;
        $vehicle->transmission = $request->transmission;
        $vehicle->engine_capacity = $request->engine_capacity;
        $vehicle->price = $request->price;
        $vehicle->engine_number = $request->engine_number;
        $vehicle->chasis_number = $request->chasis_number;

        $interior_features = explode(",", $request->interior_features);
        $exterior_features = explode(",", $request->exterior_features);
        $safety_features = explode(",", $request->safety_features);
        $performance_features = explode(",", $request->performance_features);

        $vehicle->interior_features = json_encode($interior_features);
        $vehicle->exterior_features = json_encode($exterior_features);
        $vehicle->safety_features = json_encode($safety_features);
        $vehicle->performance_features = json_encode($performance_features);

        $images = array();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $lowercase_string = strtolower($request->make . $request->model . $request->year);
                $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);

                $file->move('uploads/cars/' . $string_without_characters, $name);
                // $file->move('uploads/cars/' . strtolower(str_replace(' ', '', $request->make . $request->model . $request->year)), $name);
                $images[] = $name;
            }
        }
        $vehicle->images = json_encode($images);


        if ($file = $request->hasFile('display_image')) {
            $vehicle_image = $request->file('display_image');
            $filename = $vehicle_image->getClientOriginalName();
            // $vehicle_image->move('uploads/displayimage/' . str_replace(' ', '', strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $request->make . $request->model . $request->year)),  $filename));

            $lowercase_string = strtolower($request->make . $request->model . $request->year);
            $string_without_characters = preg_replace('/[@\.\;\'\`\" "]+/', '', $lowercase_string);

            $vehicle_image->move('uploads/displayimage/' . $string_without_characters,  $filename);
            $vehicle->display_image = $filename;
        }

        $vehicle->save();
        flash('Vehicle Added Successfully')->success();
        return redirect('admin-vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicles = Vehicle::findOrFail($id);
        return view('admin.vehicles.show')->with('vehicles', $vehicles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicles = Vehicle::findOrFail($id);
        return view('admin.vehicles.edit')
            ->with('vehicles', $vehicles);
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
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->registration = str_replace(' ', '', strtoupper($request->registration));
        $vehicle->make = strtoupper($request->make);
        $vehicle->model = strtoupper($request->model);
        $vehicle->year = $request->year;
        $vehicle->color = $request->color;
        $vehicle->location = $request->location;
        $vehicle->mileage = $request->mileage;
        $vehicle->fuel_type = $request->fuel_type;
        $vehicle->transmission = $request->transmission;
        $vehicle->engine_capacity = $request->engine_capacity;
        $vehicle->price = $request->price;
        $vehicle->engine_number = $request->engine_number;
        $vehicle->chasis_number = $request->chasis_number;


        $interior_features = explode(",", $request->interior_features);
        $exterior_features = explode(",", $request->exterior_features);
        $safety_features = explode(",", $request->safety_features);
        $performance_features = explode(",", $request->performance_features);

        $vehicle->interior_features = json_encode($interior_features);
        $vehicle->exterior_features = json_encode($exterior_features);
        $vehicle->safety_features = json_encode($safety_features);
        $vehicle->performance_features = json_encode($performance_features);

        $images = array();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('uploads/cars/' . preg_replace('/[^a-zA-Z0-9\s]/', '', strtolower(str_replace(' ', '', $request->make . $request->model . $request->year)), $name));
                $images[] = $name;
            }
        }
        $vehicle->images = json_encode($images);

        if ($file = $request->hasFile('display_image')) {
            $vehicle_image = $request->file('display_image');
            $filename = $vehicle_image->getClientOriginalName();
            $vehicle_image->move('uploads/displayimage/' . preg_replace('/[^a-zA-Z0-9\s]/', '', strtolower(str_replace(' ', '', $request->make . $request->model . $request->year)),  $filename));
            $vehicle->display_image = $filename;
        }
        $vehicle->save();
        flash('Update Successful')->success();
        return redirect('admin-vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        flash()->success('Vehicle Deleted Successfully');
        return redirect('admin-vehicles');
    }
}
