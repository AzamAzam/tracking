<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    function index()
    {
    	if(!session()->has('adminEmail'))
        {
            return redirect('admin/login');
        }
    	return view('admin/index'); 
    }
}
