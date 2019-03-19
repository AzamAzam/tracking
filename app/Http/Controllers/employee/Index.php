<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Timing;
use Carbon\Carbon;

class Index extends Controller
{
    function index()
    {
        if (!session()->has('employeeEmail')) {
            return redirect('employee/login');
        }
        return view('employee/index');
    }

    function settime()
    {
        $today = Carbon::today();
        $request_data = request()->all();
        $hours = $request_data["time"];
        $userid = session('id');
        $timing = Timing::where('dateofattendance', $today)->where('userid', $userid)->first();
        if ($timing) {
            $timing->hours = $hours;
            $timing->update();
        } else {
            Timing::create(['userid' => $userid,
                'hours' => $hours,
                'dateofattendance' => $today
            ]);
        }
        return "success";
    }

    function gettime()
    {
        $today = Carbon::today();
        $userid = session('id');
        $timing = Timing::where('dateofattendance', $today)->where('userid', $userid)->first();
        if ($timing)
            return $timing["hours"];
        else return "0:0:0";
    }
}
