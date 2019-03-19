<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Varify_;

class Varify extends Controller
{
    function index()
    {
    	return view('admin/varify')->withadminEmail(session()->get('adminEmail'));
    }

    function login()
    {
        if(session()->has('adminEmail'))
        {
            return redirect('admin/index');
        }
    	return view('admin/login');
    }

    function adminLogin(Request $request)
    {
     	$email = $request->email;
     	$password = $request->pass;

     	$varify = new Varify_;
     	if($varify->get() == True)
     	{
            $data = $varify->get()->where('adminID', '1');
     		foreach ($data as $key) 
    		{
    			$adminEmail = $key['email'];
    	 		$adminPassword = $key['password'];
    		}
     	}
     	
     	if($adminEmail == $email && $adminPassword == $password)
     	{
     		session()->put('adminEmail', $adminEmail);
     		return redirect('admin/index');
     	}
     	else
     	{
     		return back();
     	}     	
    }

    function adminVarify(Request $request)
    {
        $varify = new Varify_;

        $email = session()->get('adminEmail');
        $password = $request->password;

        $data = $varify->get()->where('adminID', '1');
        foreach ($data as $row)
        {
            $pass = $row['password'];
        }
        if($password == $pass)
        {
            return redirect('admin/changeCredentials');
        }
        else
        {
            return back();
        }
    }

    function change()
    {
        return view('admin/setting')->withadminEmail(session()->get('adminEmail'));
    }

    function changeCredentials(Request $request)
    {
        $varify = new Varify_;
        $varify->exists = true;
        $varify->adminID = 1; //already exists in database.
        $varify->password = $request->password;
        $varify->save();
        session()->flush();
        return redirect('admin/index');
    }
}