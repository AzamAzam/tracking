<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Varify_;

class Profile extends Controller
{
    function index()
    {
    	if(!session()->has('adminEmail'))
        {
            return redirect('admin/login');
        }

        $profile = new Varify_;
        $data = $profile->get();
        foreach ($data as $row) 
        {
        	$name = $row['name'];
        	$email = $row['email'];
        	$contact = $row['contactNo'];
        	$address = $row['address'];
            $question = $row['question'];
            $answer = $row['answer'];
        }

    	return view('admin/profile')->with(['name'=>$name , 'email'=>$email, 'contact'=>$contact , 'address'=>$address, 'question'=>$question, 'answer'=>$answer]);
    }

    function update(Request $request)
    {
    	$profile = new Varify_;
    	
    	$profile->exists = true;
    	$profile->adminID = 1; //already exists in database.
    	$profile->name = $request->name;
    	$profile->email = $request->email;
    	$profile->contactNo = $request->contact;
    	$profile->address = $request->address;
    	$profile->save();

    	return redirect('admin/profile');
    }

    function question(Request $request)
    {
        $profile = new Varify_;
        
        $profile->exists = true;
        $profile->adminID = 1; //already exists in database.
        $profile->question = $request->question;
        $profile->answer = $request->answer;
        $profile->save();

        return redirect('admin/profile');
    }
}