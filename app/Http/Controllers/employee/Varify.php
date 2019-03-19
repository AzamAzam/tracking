<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Employees_;
use Illuminate\Http\Request;

class Varify extends Controller
{
    function index()
    {
//    	return view('admin/varify')->withadminEmail(session()->get('adminEmail'));
    }

    function login()
    {
        if (session()->has('employeeEmail')) {
            return redirect('employee/index');
        }
        return view('employee/login');
    }

    function employeeLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->pass;

        $empEmail = '';
        $empPass = '';
        $user_id = '';
        $varify = new Employees_;
        if ($varify->get() == True) {
//            $data = $varify->get()->where('employeeID', '1');
            $data = $varify->get()->where('email', $email)->where('password', $password);
            foreach ($data as $key) {
                $empEmail = $key['email'];
                $empPass = $key['password'];
                $user_id = $key["employeeID"];
            }
        }

        if ($empEmail == $email && $empPass == $password) {
            session()->put('employeeEmail', $empEmail);
            session()->put('id', $user_id);
            return redirect('employee/index');
        } else {
            return back();
        }
    }
    /*
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
        */
}