<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use \Datatables;
use App\Http\Models\Log;
use \Auth;
use \Redirect;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
		return view('home');
	});
	Route::get('home', function () {
		return view('home');
	});
});


Route::get('config', function () {
    return view('config');
});

Route::get('logs', function () {
	$logs = Log::select(['id','description','created_at'])->get();
    return Datatables::of($logs)->make();
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('changeschedule', 'ChangeScheduleController');
Route::resource('timechange', 'TimeChangeController');
Route::resource('leaverequest', 'LeaveRequestController');
Route::resource('paydescrepancies', 'PayDescrepanciesController');
Route::resource('payrollqueries', 'PayrollQueriesController');
Route::resource('cashadvance', 'CashAdvanceController');
Route::resource('overtimeform', 'OvertimeFormController');

Route::group(['middleware' => ['auth', 'roles'], 'roles' => ['Administrator']], function()
{
	Route::resource('user', 'UserController', ['only' => ['index']]);
});


/* Ajax routes */
Route::get('leave-list', 'LeaveRequestController@getLeaveList');
Route::get('timechange-list', 'TimeChangeController@getTimeChangeList');
Route::get('payroll-queries', 'PayrollQueriesController@getPayrollQueries');
Route::get('cash-advance', 'CashAdvanceController@getCashAdvance');
Route::get('schedule-list', 'ChangeScheduleController@getScheduleList');
Route::get('approve-leave/{id}', 'LeaveRequestController@approveLeave');
Route::get('overtime-list', 'OvertimeFormController@getOvertimeList');
Route::get('user-list', 'UserController@getUserList');
