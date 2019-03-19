<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/index', 'admin\Index@index');

// ********** Admin Login ******************
Route::get('admin/login','admin\Varify@login');
Route::post('admin/Login/','admin\Varify@adminLogin')->name('adminLogin');

// ********** Admin Departments *****************
// show departments record
Route::get('admin/departments','admin\Department@index')->name('adminDepartments');
// saving departments information, call from jason
Route::post('admin/Department_Add','admin\Department@add')->name('adminDepartment_new');
// supplier show record on View Popup, call from jason
Route::get('admin/Department_View', 'admin\Department@view');
// supplier edit record, call from jason
Route::get('admin/Department_Edit', 'admin\Department@edit');
// supplier delete record, call from jason
Route::get('admin/Department_Delete', 'admin\Department@delete');


// ********** Admin Employees *****************

Route::get('admin/employees','admin\Employee@index')->name('adminEmployees');
Route::get('admin/employee_new','admin\Employee@EmployeeNew')->name('adminEmployeeNew');
// saving employee information
Route::post('admin/Employee_New','admin\Employee@add')->name('adminEmployee_new');
// employee show record on View Popup, call from json
Route::get('admin/Employee_View', 'admin\Employee@view');
// edit employee record
Route::post('admin/Employee_Edit','admin\Employee@edit')->name('adminEmployee_edit');
// supplier employee record, call from jason
Route::get('admin/Employee_Delete', 'admin\Employee@delete');

// ********** Admin Designations *****************
// show designations record
Route::get('admin/designations','admin\Designation@index')->name('adminDesignations');
// saving departments information, call from jason
Route::post('admin/Designation_Add','admin\Designation@add')->name('adminDesignation_new');
// department show record on View Popup, call from jason
Route::get('admin/Designation_View', 'admin\Designation@view');
// department edit record, call from jason
Route::get('admin/Designation_Edit', 'admin\Designation@edit');
// department delete record, call from jason
Route::get('admin/Designation_Delete', 'admin\Designation@delete');

// user accounts

Route::get('admin/users','admin\Employee@Users')->name('adminUseraccounts');
// user show record on View Popup, call from json
Route::get('admin/user_View', 'admin\Employee@userView');
// saving users information
Route::post('admin/user_Edit','admin\Employee@userEdit')->name('adminUsers_edit');

// admin varify first to change password
Route::get('admin/varify','admin\Varify@index')->name('adminVarify');
// confirmation of admin carification
Route::post('admin/user_Varify','admin\Varify@adminVarify')->name('admin_Varify');
// admin
Route::get('admin/changeCredentials','admin\Varify@change');
Route::post('admin/change_Credentials','admin\Varify@changeCredentials')->name('changeCredentials');

Route::get('admin/profile','admin\Profile@index')->name('adminProfile');
Route::post('admin/profile_Update','admin\Profile@update')->name('admin_profileUpdate');
Route::post('admin/profile_Question','admin\Profile@question')->name('admin_Question');


Route::get('admin/logout', function(){
	session()->flush();
	return redirect('admin/index');
})->name('adminLogout');



Route::get('employee/index', 'employee\Index@index');
Route::any('employee/settime', 'employee\Index@settime');
Route::get('employee/gettime', 'employee\Index@gettime');
Route::get('admin/generate_monthly_report','admin\Employee@monthly_report')->name('monthly_report');
Route::post('admin/generate_monthly_report','admin\Employee@getEmployeeData')->name('getEmployeeData');
// ********** Employee Login ******************
Route::get('employee/login','employee\Varify@login');
Route::post('employee/Login/','employee\Varify@employeeLogin')->name('employeeLogin');
Route::get('employee/logout', function(){
    session()->flush();
    return redirect('employee/index');
})->name('employeeLogout');