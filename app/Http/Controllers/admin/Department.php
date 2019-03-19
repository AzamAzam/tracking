<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Departments_;

class Department extends Controller
{
	function index()
    {
    	if(!session()->has('adminEmail'))
        {
            return redirect('admin/login');
        }
 
        $department = new Departments_;
    	return view('admin/departments')->withdata($department->orderBy('departmentID', 'DESC')->get());
    }

    function add(Request $request)
    {
    	$department = new Departments_;

    	$department->name = $request->addName;
    	$department->hours = $request->addHours;
    	$department->save();

    	return redirect('admin/departments');
    }

    function view(Request $request)
    {
    	$id = $request->id;
        $department = new Departments_;

        $data = $department->get()->where('departmentID', $id);
        foreach ($data as $row)
        {
        	$name = $row['name'];
            $hours = $row['hours'];
        }

        return response()->json(['name' => $name, 'hours' => $hours]);
    }

    public function edit(Request $request)
    {
        $department = new Departments_;
        $department->exists = true;
        $department->departmentID =$request->id; //already exists in database.
        $department->name = $request->name;
        $department->hours = $request->hours;
        $department->save();

        return response()->json(['reply' => 'Sucess']);
    }

    public function delete(Request $request)
    {
    	$department = new Departments_;
    	$department->where('departmentID',$request->id)->delete();

    	return response()->json(['reply' => 'Success']);
    }
}