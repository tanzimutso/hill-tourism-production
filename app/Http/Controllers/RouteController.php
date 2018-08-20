<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;

class RouteController extends Controller
{

    public function show($id){
        $route = Route::find($id);
        return $route;
        //return view('Admin.bus_show',compact('vehicle','id'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'travelling_from' => 'required',
            'travelling_to'  => 'required',
            'travelling_time' => 'required',
            'fare'       => 'required',
            'service_charge'       => 'required',
            'parking_fare'   => 'required'
        ]);

        $data = $request->all();

     
        $route = new Route;

        $route->travelling_from = $data['travelling_from'];
        $route->travelling_to  = $data['travelling_to'];
        $route->travelling_time = $data['travelling_time'];
        $route->fare = $data['fare'];
        $route->service_charge = $data['service_charge'];
        $route->parking_fare = $data['parking_fare'];
    
        if($route->save()) 
        {
            return 
    
            redirect()
                   ->route('all_route')
                   ->with('status', 'success')
                   ->with('message', 'Route Added Successfully!');
        }

        else
        {
            return 
    
            redirect()
                   ->route('add_route')
                   ->with('status', 'danger')
                   ->with('message', 'Route can not be added!!');
        }

    }

    public function index()
    {
        $routes = Route::all();
        return view('Admin.route_view_all', compact('routes'));
    }

    public function edit($id){
        $route = Route::find($id);
        return view('Admin.route_edit',compact('route','id'));
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'travelling_from' => 'required',
            'travelling_to'  => 'required',
            'travelling_time' => 'required',
            'fare'       => 'required',
            'service_charge'   => 'required',
            'parking_fare'   => 'required'

        ]);

        $data = $request->all();

     
        $route = Route::find($id);

        $route->travelling_from = $data['travelling_from'];
        $route->travelling_to  = $data['travelling_to'];
        $route->travelling_time = $data['travelling_time'];
        $route->fare = $data['fare'];
        $route->service_charge = $data['service_charge'];
        $route->parking_fare = $data['parking_fare'];
    
        if($route->update()) 
        {
            return redirect()
                   ->route('all_route')
                   ->with('status', 'success')
                   ->with('message', 'Route Updated Successfully!');
        }

        else
        {
            return redirect()
                   ->route('edit_route')
                   ->with('status', 'danger')
                   ->with('message', 'Route can not be updated!!');
        }
    }

    public function destroy($id)
    {
        $route = Route::find($id);

        if ($route->delete()) 
        {
                return redirect()
                   ->route('all_route')
                   ->with('status', 'success')
                   ->with('message', 'Route Deleted Successfully!');
        }
    }


}
