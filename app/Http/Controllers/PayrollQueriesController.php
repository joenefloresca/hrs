<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Payrollqueries;
use App\Http\Models\Log;
use Auth;
use Validator;
use Redirect;
use Input;
use Session;
use Datatables;

class PayrollQueriesController extends Controller
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
        return view('payrollqueries.create');
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
            'name'                          => 'required',
            'date'                          => 'required',
            'department'                    => 'required',
            'payroll'                       => 'required',
            'inquiry'                       => 'required',
            'recieved_by'                   => 'required',
            'date_recieved_by'              => 'required',
            'action_taken'                  => 'required',
            'feedback_given'                => 'required',
            'date_feedback_given'           => 'required',
            'acknowledge'                   => 'required',
            'date_acknowledge'              => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('payrollqueries/create')->withInput()->withErrors($validator);
        }
        else
        {
            $payrollqueries = new Payrollqueries();
            $payrollqueries->name                   = Input::get('name');
            $payrollqueries->date                   = Input::get('date');
            $payrollqueries->department             = Input::get('department');
            $payrollqueries->payroll                = Input::get('payroll');
            $payrollqueries->inquiry                = Input::get('inquiry');
            $payrollqueries->recieved_by            = Input::get('recieved_by');
            $payrollqueries->date_recieved_by       = Input::get('name');
            $payrollqueries->action_taken           = Input::get('action_taken');
            $payrollqueries->feedback_given         = Input::get('feedback_given');
            $payrollqueries->date_feedback_given    = Input::get('date_feedback_given');
            $payrollqueries->acknowledge            = Input::get('acknowledge');
            $payrollqueries->date_acknowledge       = Input::get('date_acknowledge');
                 
            $payrollqueries->submitted_by_id = Auth::user()->id;
            $payrollqueries->save();

            $log = new Log();
            $log->description   = Auth::user()->name." submitted new Payroll Queries";
            $log->save();

            Session::flash('alert-success', 'Leave request submitted.');
            return Redirect::to('payrollqueries/create');

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
