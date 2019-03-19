<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Designations_;

class Designation extends Controller
{
    function index()
    {
    	if(!session()->has('adminEmail'))
        {
            return redirect('admin/login');
        }

        $designation = new Designations_;

    	return view('admin/designations')->withdata($designation->orderBy('designationID', 'DESC')->get());
    }

    public function add(Request $request)
    {
    	$designation = new Designations_;

    	$designation->name = $request->addName;
    	$designation->save();

    	return redirect('admin/designations');
    }

    function view(Request $request)
    {
    	$id = $request->id;
        $designation = new Designations_;

        $data = $designation->get()->where('designationID', $id);
        foreach ($data as $row)
        {
        	$name = $row['name'];
        }

        return response()->json(['name' => $name]);
    }

    public function edit(Request $request)
    {
        $designation = new Designations_;
        $designation->exists = true;
        $designation->designationID =$request->id; //already exists in database.
        $designation->name = $request->name;
        $designation->save();

        return response()->json(['reply' => 'Sucess']);
    }

    public function delete(Request $request)
    {
    	$designation = new Designations_;
    	$designation->where('designationID',$request->id)->delete();

    	return response()->json(['reply' => 'Success']);
    }
}