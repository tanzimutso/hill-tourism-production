<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function show($id){
        $vehicle = Vehicle::find($id);
        return $vehicle;
        return view('Admin.bus_show',compact('vehicle','id'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'vehicle_type' => 'required',
            'vehicle_type_id'  => 'required',
            'vehicle_serial_no' => 'required',
            'vehicle_reg_no'       => 'required',
            'seat_capacity'       => 'required',
            'status'   => 'required'
        ]);

        $data = $request->all();

     
        $vehicle = new Vehicle;

        $vehicle->vehicle_type = $data['vehicle_type'];
        $vehicle->vehicle_type_id  = $data['vehicle_type_id'];
        $vehicle->vehicle_serial_no = $data['vehicle_serial_no'];
        $vehicle->vehicle_reg_no = $data['vehicle_reg_no'];
        $vehicle->seat_capacity = $data['seat_capacity'];
        $vehicle->status = $data['status'];
    
        if($vehicle->save()) 
        {
            return redirect()
                   ->route('all_bus')
                   ->with('status', 'success')
                   ->with('message', 'Vehicle Added Successfully!');
        }

        else
        {
            return redirect()
                   ->route('add_bus')
                   ->with('status', 'danger')
                   ->with('message', 'Vehicle can not be added!!');
        }

    }

    public function index()
    {
        $vehicles = Vehicle::all();
        return view('Admin.bus_view_all', compact('vehicles'));
    }

    public function edit($id){
        $vehicle = Vehicle::find($id);
        return view('Admin.bus_edit',compact('vehicle','id'));
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'vehicle_type' => 'required',
            'vehicle_type_id'  => 'required',
            'vehicle_serial_no' => 'required',
            'vehicle_reg_no'       => 'required',
            'seat_capacity'       => 'required',
            'status'   => 'required'
        ]);

        $data = $request->all();

     
        $vehicle = Vehicle::find($id);

        $vehicle->vehicle_type = $data['vehicle_type'];
        $vehicle->vehicle_type_id  = $data['vehicle_type_id'];
        $vehicle->vehicle_serial_no = $data['vehicle_serial_no'];
        $vehicle->vehicle_reg_no = $data['vehicle_reg_no'];
        $vehicle->seat_capacity = $data['seat_capacity'];
        $vehicle->status = $data['status'];
    
        if($vehicle->update()) 
        {
            return redirect()
                   ->route('all_bus')
                   ->with('status', 'success')
                   ->with('message', 'Vehicle Updated Successfully!');
        }

        else
        {
            return redirect()
                   ->route('edit_bus')
                   ->with('status', 'danger')
                   ->with('message', 'Vehicle can not be updated!!');
        }
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);

        if ($vehicle->delete()) 
        {
                return redirect()
                   ->route('all_bus')
                   ->with('status', 'success')
                   ->with('message', 'Vehicle Deleted Successfully!');
        }
    }


}
