<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('Admin.index2');
    }

    public function booking(){
        return view('Admin.booking');
    }

    public function addNewBus(){
        return view('Admin.bus_add_new');
    }


    public function addNewCancellation(){
        return view('Admin.cancellation_add_new');
    }

    public function cancellation(){
        return view('Admin.cancellation');
    }

    public function addNewDriver(){
        return view('Admin.driver_add_new');
    }

    public function addNewRoute(){
        return view('Admin.route_add_new');
    }

    public function viewAllRoute(){
        return view('Admin.route_view_all');
    }
}
