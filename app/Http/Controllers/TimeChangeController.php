<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\TimeChange;
use App\Http\Models\Log;
use Auth;
use Validator;
use Redirect;
use Input;
use Session;
use Datatables;

class TimeChangeController extends Controller
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
        return view('timechange.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('timechange.create');
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
            'employee_name'     => 'required',
            'dateto_change'     => 'required',
            'work_schedule'     => 'required',
            'clock_in'          => 'required',
            'clock_out'         => 'required',
            'change_reason'     => 'required',
            'no_inout_reason'   => 'required',
            'form_required'     => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('timechange/create')->withInput()->withErrors($validator);
        }
        else
        {
            $timechange = new TimeChange();
            $timechange->employee_name      = Input::get('employee_name');
            $timechange->dateto_change      = Input::get('dateto_change');
            $timechange->work_schedule      = Input::get('work_schedule');
            $timechange->clock_in           = Input::get('clock_in');
            $timechange->clock_out          = Input::get('clock_out');
            $timechange->change_reason      = Input::get('change_reason');
            $timechange->no_inout_reason    = Input::get('no_inout_reason');
            $timechange->form_required      = Input::get('form_required');
            $timechange->submitted_by_id    = Auth::user()->id;
            $timechange->save();

            $log = new Log();
            $log->description   = Auth::user()->name." Submitted Time Change Request";
            $log->save();

            Session::flash('alert-success', 'Time Change Request Submitted.');
            return Redirect::to('timechange/create');
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
        $timechange = TimeChange::find($id);
        return view('timechange.edit')->with(array('timechange'=>$timechange));
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
        $rules = array(
            'employee_name'     => 'required',
            'dateto_change'     => 'required',
            'work_schedule'     => 'required',
            'clock_in'          => 'required',
            'clock_out'         => 'required',
            'change_reason'     => 'required',
            'no_inout_reason'   => 'required',
            'form_required'     => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('timechange/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        else
        {
            $timechange = TimeChange::find($id);
            $timechange->employee_name      = Input::get('employee_name');
            $timechange->dateto_change      = Input::get('dateto_change');
            $timechange->work_schedule      = Input::get('work_schedule');
            $timechange->clock_in           = Input::get('clock_in');
            $timechange->clock_out          = Input::get('clock_out');
            $timechange->change_reason      = Input::get('change_reason');
            $timechange->no_inout_reason    = Input::get('no_inout_reason');
            $timechange->form_required      = Input::get('form_required');
            $timechange->submitted_by_id    = Auth::user()->id;
            $timechange->save();

            $log = new Log();
            $log->description   = Auth::user()->name." Updated Time Change Request ID ".$id;
            $log->save();

            Session::flash('alert-success', 'Time Change Request Updated ID '.$id);
            return Redirect::to('timechange/'.$id.'/edit');
        }
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

    public function getTimeChangeList()
    {
        if(Auth::check())
        {
            if(Auth::user()->role_id != 1)
            {
                $timechange = TimeChange::select(['id','employee_name','dateto_change','work_schedule','clock_in', 'clock_out', 'change_reason', 'no_inout_reason', 'form_required', 'status', 'created_at'])->where('submitted_by_id', '=', Auth::user()->id)->get();
            }
            else
            {
                 $timechange = TimeChange::select(['id','employee_name','dateto_change','work_schedule','clock_in', 'clock_out', 'change_reason', 'no_inout_reason', 'form_required', 'status', 'created_at'])->get();
            }

                return Datatables::of($timechange)
                ->addColumn('action', function ($timechange) {
                        return '<a href="timechange/'.$timechange->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                    })
                 ->editColumn('created_at', function ($timechange) {
                        return $timechange->created_at->format('Y-m-d');
                    })
                ->make(true);
        }
        else
        {
          Auth::logout(); 
          return Redirect::to('auth/login');
        }
    }
}