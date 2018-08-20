<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Http\Request;
use App\Driver;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('Admin.driver_view_all', compact('drivers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'contact_no'  => 'required',
            'address' => 'required',
            'license_no'       => 'required',
            'vehicle_reg_no'       => 'required',
            'NID_no'   => 'required',
            'vehicle_type_no'    => 'required',
            'driver_image'    => 'required',
            'vehicle_image'      => 'required'
        ]);

        $data = $request->all();

        // Image Upload...
        if($request->file('driver_image') && $request->file('vehicle_image') )
        {
            $file1 = $request->file('driver_image');
            $file2 = $request->file('vehicle_image');

            $ext1 = $file1->getClientOriginalExtension();
            $ext2 = $file2->getClientOriginalExtension();
            $token1 = sha1(time());
            $token2 = sha1(time());

            $prefix1 = 'driver';
            $prefix2 = 'vehicle';

            $name1 = $prefix1.'_'.$token1.'.'.$ext1;
            $name2 = $prefix2.'_'.$token2.'.'.$ext2;
            $path1 = 'uploads/driver';
            $path2 = 'uploads/vehicle';

            $file1->move($path1, $name1);
            $file2->move($path2, $name2);

            $image1 = $name1;
            $image2 = $name2;

        }
        else
        {
            $image1 = 'driver.jpg';
            $image2 = 'vehicle.jpg';
        }

        $driver = new Driver;

        $driver->name = $data['name'];
        $driver->contact_no  = $data['contact_no'];
        $driver->address = $data['address'];
        $driver->license_no       = $data['license_no'];
        $driver->vehicle_reg_no       = $data['vehicle_reg_no'];
        $driver->NID_no   = $data['NID_no'];
        $driver->vehicle_type_no    = $data['vehicle_type_no'];
        $driver->driver_image  = $image1;
        $driver->vehicle_image = $image2;

        if ($driver->save())
        {
            return redirect()
                ->route('all_driver')
                ->with('status', 'success')
                ->with('message', 'Driver Added Successfully!');
        }

        else
        {
            return redirect()
                ->route('add_driver')
                ->with('status', 'danger')
                ->with('message', 'Driver can not be added!!');
        }

    }

    public function show($id)
    {
        $driver = Driver::find($id);
        return view('Admin.show_driver',compact('driver','id'));
    }

    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('Admin.edit_driver',compact('driver','id'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'contact_no'  => 'required',
            'address' => 'required',
            'license_no'       => 'required',
            'vehicle_reg_no'       => 'required',
            'NID_no'   => 'required',
            'vehicle_type_no'    => 'required',
            'driver_image'    => 'required',
            'vehicle_image'      => 'required'
        ]);

        $data = $request->all();
        // Image Upload...
        if($request->file('driver_image') && $request->file('vehicle_image') )
        {
            $file1 = $request->file('driver_image');
            $file2 = $request->file('vehicle_image');

            $ext1 = $file1->getClientOriginalExtension();
            $ext2 = $file2->getClientOriginalExtension();
            $token1 = sha1(time());
            $token2 = sha1(time());

            $prefix1 = 'driver';
            $prefix2 = 'vehicle';

            $name1 = $prefix1.'_'.$token1.'.'.$ext1;
            $name2 = $prefix2.'_'.$token2.'.'.$ext2;
            $path1 = 'uploads/driver';
            $path2 = 'uploads/vehicle';

            $file1->move($path1, $name1);
            $file2->move($path2, $name2);

            $image1 = $name1;
            $image2 = $name2;

        }
        else
        {
            $image1 = 'driver.jpg';
            $image2 = 'vehicle.jpg';
        }


        $driver = Driver::find($id);

        $driver->name = $data['name'];
        $driver->contact_no  = $data['contact_no'];
        $driver->address = $data['address'];
        $driver->license_no = $data['license_no'];
        $driver->vehicle_reg_no = $data['vehicle_reg_no'];
        $driver->NID_no  = $data['NID_no'];
        $driver->vehicle_type_no = $data['vehicle_type_no'];
        $driver->driver_image  = $image1;
        $driver->vehicle_image = $image2;

        if ($driver->update())
        {
            return redirect()
                ->route('all_driver')
                ->with('status', 'success')
                ->with('message', 'Driver Updated Successfully!');
        }

        else
        {
            return redirect()
                ->route('edit_driver')
                ->with('status', 'danger')
                ->with('message', 'Driver can not be edited!!');
        }

    }

    public function destroy($id)
    {
        $driver = Driver::find($id);

        if ($driver->delete())
        {
            $path1 = "uploads/driver";
            $path2 = "uploads/vehicle";

            $image1 = $driver->driver_image;
            $image2 = $driver->vehicle_image;

            $deletable1 = $path1."/".$image1;
            $deletable2 = $path2."/".$image2;

            if(File::exists($deletable1) && File::exists($deletable2) )
            {
                File::delete($deletable1);
                File::delete($deletable2);
                return redirect()
                    ->route('all_driver')
                    ->with('status', 'success')
                    ->with('message', 'Driver Deleted Successfully!');
            }


        }
    }
}
