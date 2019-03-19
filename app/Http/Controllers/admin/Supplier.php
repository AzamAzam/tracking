<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Suppliers_;

class Supplier extends Controller
{
    function index()
    {
    	if(!session()->has('adminEmail'))
        {
            return redirect('admin/login');
        }

        $supplier = new Suppliers_;
    	return view('admin/departments')->withdata($supplier->orderBy('supplierID', 'DESC')->get());
    }
    
    function SupplierNew()
    {
    	return view('admin/department_new');
    }

    function SupplierAdd(Request $request)
    {
    	$supplier = new Suppliers_;

    	$supplier->name = $request->name;
    	$supplier->gender = $request->gender;
    	$supplier->email = $request->email;
    	$supplier->contactNo = $request->contactNo;
    	$supplier->landline = $request->landline;
    	$supplier->address = $request->businessAddress;
    	$supplier->bankName = $request->bankName;
    	$supplier->accountName = $request->accountName;
    	$supplier->accountNo = $request->accountNumber;
    	$supplier->iban = $request->iban;
    	$supplier->brachCode = $request->branchCode;
    	$supplier->bankAddress = $request->bankAddress;
    	$supplier->payable = 0;
    	$supplier->createID = 0;
    	$supplier->editID = 0;
    	$supplier->save();

    	return view('admin/supplier_new');
    }

    function view(Request $request)
    {
        $id = $request->id;
        $supplier = new Suppliers_;

        $data = $supplier->get()->where('supplierID', $id);
        foreach ($data as $row) 
        {
            $name = $row['name'];
            $gender = $row['gender'];
            $email   = $row['email'];
            $contactNo = $row['contactNo'];
            $landline = $row['landline'];
            $address   = $row['address'];
            $bankName = $row['bankName'];
            $accountName = $row['accountName'];
            $accountNo   = $row['accountNo'];
            $iban = $row['iban'];
            $brachCode = $row['brachCode'];
            $bankAddress   = $row['bankAddress'];
            $payable = $row['payable'] ."";
            $createID = $row['createID'] ."";
            $editID = $row['createID'] ."";
        }

        if($createID == 0)
        {
            $createID = 1;
            $createName = 'admin';
        }
        else
        {
            $createName = 'user';
        }

        if($editID == 0)
        {
            $editID = 1;
            $editName = 'admin';
        }
        else
        {
            $createName = 'user';
        }

        return response()->json(['name' => $name, 'gender' => $gender,
            'email' => $email, 'contactNo' => $contactNo, 'landline' => $landline,
            'address' => $address, 'bankName' => $bankName, 'accountName' => $accountName,
            'accountNo' => $accountNo, 'iban' => $iban, 'brachCode' => $brachCode,
            'bankAddress' => $bankAddress, 'payable' => $payable, 
            'createID' => $createID, 'createName' => $createName,
            'editID' => $editID, 'editName' => $editName]);
    }

    public function edit(Request $request)
    {
        $supplier = new Suppliers_;
        $supplier->exists = true;
        $supplier->supplierID =$request->id; //already exists in database.
        $supplier->name = $request->name;
        $supplier->gender = $request->gender;
        $supplier->email = $request->email;
        $supplier->contactNo = $request->contact;
        $supplier->landline = $request->landline;
        $supplier->address = $request->address;
        $supplier->bankName = $request->bankName;
        $supplier->accountName = $request->accountName;
        $supplier->accountNo = $request->accountNo;
        $supplier->iban = $request->iban;
        $supplier->brachCode = $request->branchCode;
        $supplier->bankAddress = $request->bankAddress;
        $supplier->payable = $request->remaining;
        $supplier->editID = 0;
        $supplier->save();

        return response()->json(['reply' => 'Sucess']);
    }

    function delete(Request $request)
    {
        $supplier = new Suppliers_;
        $supplier->where('supplierID',$request->id)->delete();

        return response()->json(['reply' => 'Success']);
    }
}