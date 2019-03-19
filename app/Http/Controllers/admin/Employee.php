<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Departments_;
use App\Models\Designations_;
use App\Models\Employees_;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{
    function index()
    {
        if (!session()->has('adminEmail')) {
            redirect('admin/login');
        }
        $employee = new Employees_;
        $Employee = $employee->orderBy('employeeID', 'DESC')->get();

        return view('admin/employees')->withdata($Employee);
    }

    function EmployeeNew()
    {
        $designation = new Designations_;
        $Designation = $designation->get();

        $department = new Departments_;
        $Department = $department->get();

        return view('admin/employee_new')->withdesignation($Designation)->withdepartment($Department);
    }

    public function add(Request $request)
    {
        $employee = new Employees_;

        $employee->name = $request->name;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->salary = $request->salary;
        $employee->email = $request->email;
        $employee->password = $request->password;
        $employee->contactNo = $request->contact;
        $employee->hireDate = $request->hireDate;
        $employee->designation = $request->designation;
        $employee->department = $request->department;
        $employee->address = $request->address;
        $employee->bankName = $request->bankName;
        $employee->accountName = $request->accountName;
        $employee->accountNo = $request->accountNo;
        $employee->iban = $request->iban;
        $employee->branchName = $request->branchName;
        $employee->branchCode = $request->branchCode;
        $employee->bankAddress = $request->bankAddress;

        $employee->save();
        return redirect('admin/employee_new');
    }

    function view(Request $request)
    {
        $id = $request->id;
        $employee = new Employees_;

        $data = $employee->get()->where('employeeID', $id);
        foreach ($data as $row) {
            $name = $row['name'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $salary = $row['salary'];
            $email = $row['email'];
            $password = $row['password'];
            $contactNo = $row['contactNo'];
            $hireDate = $row['hireDate'];
            $designation = $row['designation'];
            $department = $row['department'];
            $address = $row['address'];
            $bankName = $row['bankName'];
            $accountName = $row['accountName'];
            $accountNo = $row['accountNo'];
            $iban = $row['iban'];
            $branchName = $row['branchName'];
            $branchCode = $row['branchCode'];
            $bankAddress = $row['bankAddress'];
        }

        return response()->json(['name' => $name, 'dob' => $dob, 'gender' => $gender, 'salary' => $salary, 'email' => $email, 'password' => $password, 'contactNo' => $contactNo, 'hireDate' => $hireDate, 'designation' => $designation, 'department' => $department, 'address' => $address, 'bankName' => $bankName, 'accountName' => $accountName, 'accountNo' => $accountNo, 'iban' => $iban, 'branchName' => $branchName, 'branchCode' => $branchCode, 'bankAddress' => $bankAddress]);
    }

    function edit(Request $request)
    {
        $employee = new Employees_;
        $employee->exists = true;
        $employee->employeeID = $request->editID; //already exists in database.
        $employee->name = $request->editName;
        $employee->dob = $request->editDOB;
        $employee->gender = $request->editGender;
        $employee->salary = $request->editSalary;
        $employee->email = $request->editEmail;
        $employee->contactNo = $request->editContact;
        $employee->hireDate = $request->editHireDate;
        $employee->designation = $request->editDesignation;
        $employee->department = $request->editDepartment;
        $employee->address = $request->editAddress;
        $employee->bankName = $request->editBankName;
        $employee->accountName = $request->editAccountName;
        $employee->accountNo = $request->editAccountNo;
        $employee->iban = $request->editIBAN;
        $employee->branchName = $request->editBranchName;
        $employee->branchCode = $request->editBranchCode;
        $employee->bankAddress = $request->editBankAddress;
        $employee->save();

        return redirect('admin/employees');
    }

    function delete(Request $request)
    {
        $employee = new Employees_;
        $employee->where('employeeID', $request->id)->delete();

        return response()->json(['reply' => 'Success']);
    }

    function Users()
    {
        if (!session()->has('adminEmail')) {
            redirect('admin/login');
        }
        $employee = new Employees_;
        $Employee = $employee->orderBy('employeeID', 'DESC')->get();

        return view('admin/users')->withdata($Employee);
    }

    function userView(Request $request)
    {
        $id = $request->id;
        $employee = new Employees_;

        $data = $employee->get()->where('employeeID', $id);
        foreach ($data as $row) {
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            $designation = $row['designation'];
            $department = $row['department'];
        }

        return response()->json(['name' => $name, 'email' => $email, 'password' => $password, 'designation' => $designation, 'department' => $department]);
    }

    function userEdit(Request $request)
    {
        $id = $request->id;
        $employee = new Employees_;
        $employee->exists = true;
        $employee->employeeID = $request->editID; //already exists in database.
        $employee->password = $request->editPassword;
        $employee->save();

        return redirect('admin/users');
    }

    function monthly_report()
    {
        if (!session()->has('adminEmail')) {
            redirect('admin/login');
        }
        $empoyees = Employees_::select('employeeID as id', 'name', 'email')->get();

        return view('admin/monthly_report')
            ->with('employees', $empoyees);
    }

    function getEmployeeData()
    {
        if (!session()->has('adminEmail')) {
            redirect('admin/login');
        }
        $request_data = request()->all();
        $month = $request_data["month"];
        $year = $request_data["year"];
        $empid = $request_data["employee"];
        if ($month <= 9) $month = "0" . $month;
        $year_month = $year . "-" . $month;
//        dd($year_month);
        $reports = DB::table('timings')
            ->where(DB::raw(" DATE_FORMAT(dateofattendance, '%Y-%m')"), "=", $year_month)
            ->where('userid', $empid)
            ->orderBy('dateofattendance')
            ->get();
//        dd($reports);
        $employees = Employees_::select('employeeID as id', 'name', 'email')
            ->get();
        $emp = Employees_::where('employeeID', $empid)->first();
        return view('admin.monthly_report')
            ->with('employees', $employees)
            ->with('reports', $reports)
            ->with('y', $year)
            ->with('m', $month)
//            ->with('e', $empid)
            ->with('employee', $emp);
    }
}