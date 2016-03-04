<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\LeaveRequest;
use App\Http\Models\Log;
use Auth;
use Validator;
use Redirect;
use Input;
use Session;
use Datatables;

class LeaveRequestController extends Controller
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
        return view('leaverequest.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leaverequest.create');
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
            'employee_name' => 'required',
            'employee_id'   => 'required',
            'from_date'     => 'required',
            'to_date'       => 'required',
            'leave_type'    => 'required',
            'department'    => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('leaverequest/create')->withInput()->withErrors($validator);
        }
        else
        {
            $leave = new LeaveRequest();
            $leave->employee_name   = Input::get('employee_name');
            $leave->employee_id     = Input::get('employee_id');
            $leave->from_date       = Input::get('from_date');
            $leave->to_date         = Input::get('to_date');
            $leave->leave_type      = Input::get('leave_type');
            $leave->department      = Input::get('department');
            $leave->notes           = Input::get('notes');
            $leave->submitted_by_id = Auth::user()->id;
            $leave->save();

            $log = new Log();
            $log->description   = Auth::user()->name." submitted new Leave Request";
            $log->save();

            Session::flash('alert-success', 'Leave request submitted.');
            return Redirect::to('leaverequest/create');

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
        $leave = LeaveRequest::find($id);
        return view('leaverequest.edit')->with('leave', $leave);
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
            'employee_name' => 'required',
            'employee_id'   => 'required',
            'from_date'     => 'required',
            'to_date'       => 'required',
            'leave_type'    => 'required',
            'department'    => 'required',
            'status'        => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('leaverequest/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        else
        {
            $leave = LeaveRequest::find($id);
            $leave->employee_name   = Input::get('employee_name');
            $leave->employee_id     = Input::get('employee_id');
            $leave->from_date       = Input::get('from_date');
            $leave->to_date         = Input::get('to_date');
            $leave->leave_type      = Input::get('leave_type');
            $leave->department      = Input::get('department');
            $leave->notes           = Input::get('notes');
            $leave->status          = Input::get('status');
            $leave->submitted_by_id = Auth::user()->id;
            $leave->save();

            Session::flash('alert-success', 'Leave request updated.');
            return Redirect::to('leaverequest/'.$id.'/edit');
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

    public function getLeaveList()
    {
        $leave = LeaveRequest::select(['id','employee_name','employee_id','from_date','to_date', 'leave_type', 'department', 'status', 'created_at'])->get();
        return Datatables::of($leave)
        ->addColumn('action', function ($leave) {
                return '<a href="leaverequest/'.$leave->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }

    public function approveLeave()
    {
        return "Hello";
    }
}
