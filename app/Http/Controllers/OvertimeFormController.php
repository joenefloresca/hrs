<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\OvertimeForm;
use App\Http\Models\Log;
use Auth;
use Validator;
use Redirect;
use Input;
use Session;
use Datatables;

class OvertimeFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('overtimeform.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'employees_name'   => 'required',
            'home_address'     => 'required',
            'email'            => 'required',
            'contact_details'  => 'required',
            'requested_amount' => 'required',
            'reason'           => 'required',
            'terms'            => 'required',
            'amount'           => 'required',
            'repayment_date'   => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('overtimeform/create')->withInput()->withErrors($validator);
        }
        else
        {
            
            $cashadvance = new CashAdvance();
            $cashadvance->employees_name     = Input::get('employees_name');
            $cashadvance->home_address       = Input::get('home_address');
            $cashadvance->email              = Input::get('email');
            $cashadvance->contact_details    = Input::get('contact_details');
            $cashadvance->requested_amount   = Input::get('requested_amount');
            $cashadvance->reason             = Input::get('reason');
            $cashadvance->terms              = Input::get('terms');
            $cashadvance->amount             = Input::get('amount');
            $cashadvance->repayment_date     = Input::get('repayment_date');
            $cashadvance->submitted_by_id    = Auth::user()->id;
            $cashadvance->save();

            $log = new Log();
            $log->description   = Auth::user()->name." submitted new Cash Advance";
            $log->save();

            Session::flash('alert-success', 'Leave request submitted.');
            return Redirect::to('overtimeform/create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
