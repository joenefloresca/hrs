<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\OvertimeForm;
use App\Http\Models\Log;
use App\Http\Models\OvertimeFormH;
use App\Http\Models\OvertimeFormI;
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
        return view('overtimeform.index');
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
            'name'               => 'required',
            'employee_no'        => 'required',
            'department'         => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('overtimeform/create')->withInput()->withErrors($validator);
        }
        else
        {
            $overtime = new OvertimeFormH();
            $overtime->name               = Input::get('name');
            $overtime->employee_no        = Input::get('employee_no');
            $overtime->department         = Input::get('department');
            $overtime->submitted_by_id    = Auth::user()->id;
            $overtime->save();

            $date                       = Input::get('date');
            $from                       = Input::get('from');
            $to                         = Input::get('to');
            $no_of_hours                = Input::get('no_of_hours');
            $reason                     = Input::get('reason');
            $overtime_application_header_id  = $overtime->id;

            foreach ($date as $key => $value) {
                $overtime_i                                   = new OvertimeFormI();
                $overtime_i->overtime_application_header_id   = $overtime_application_header_id;
                $overtime_i->date                             = $date[$key];
                $overtime_i->from                             = $from[$key];
                $overtime_i->to                               = $to[$key];
                $overtime_i->no_of_hours                      = $no_of_hours[$key];
                $overtime_i->reason                           = $reason[$key];
                $overtime_i->save();
            }

            $log = new Log();
            $log->description   = Auth::user()->name." Submitted Overtime Request";
            $log->save();

            Session::flash('alert-success', 'Overtime Request Submitted.');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'               => 'required',
            'employee_no'        => 'required',
            'department'         => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('overtimeform/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        else
        {
            $overtime = OvertimeFormH::find($id);
            $overtime->name               = Input::get('name');
            $overtime->employee_no        = Input::get('employee_no');
            $overtime->department         = Input::get('department');
            $overtime->submitted_by_id    = Auth::user()->id;
            $overtime->status             = Input::get('status');
            $overtime->save();

            $log = new Log();
            $log->description   = Auth::user()->name." Updated Overtime Request ID ".$id;
            $log->save();

            Session::flash('alert-success', 'Overtime Request Updated ID '.$id);
            return Redirect::to('overtimeform/create');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function edit($id)
     {
         $header = OvertimeFormH::find($id);
         return view('overtimeform.edit')->with(array('header'=>$header));
     }

       public function getOvertimeList()
    {
        $sched = OvertimeFormH::select(['id','name', 'employee_no', 'department', 'status', 'created_at'])->get();
        return Datatables::of($sched)
        ->addColumn('action', function ($sched) {
                return '<a href="overtimeform/'.$sched->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="overtimeform/'.$sched->id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> View</a>';
            })
        ->make(true);
    }
}
