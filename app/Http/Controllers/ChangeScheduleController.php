<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Models\ChangeScheduleH;
use App\Http\Models\ChangeScheduleI;
use App\Http\Models\Log;
use Auth;
use Validator;
use Redirect;
use Input;
use Session;
use Datatables;

class ChangeScheduleController extends Controller
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
        return view('changeschedule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('changeschedule.create');
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
            'department'    => 'required',
            'change_type'   => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('changeschedule/create')->withInput()->withErrors($validator);
        }
        else
        {
            $sched_h = new ChangeScheduleH();
            $sched_h->employee_name     = Input::get('employee_name');
            $sched_h->department        = Input::get('department');
            $sched_h->change_type       = Input::get('change_type');
            $sched_h->submitted_by_id   = Auth::user()->id;
            $sched_h->save();

            $date_affected              = Input::get('date_affected');
            $current_schedule           = Input::get('current_schedule');
            $new_schedule               = Input::get('new_schedule');
            $reason                     = Input::get('reason');
            $changeschedules_header_id  = $sched_h->id;

            foreach ($date_affected as $key => $value) {
                $sched_i                                = new ChangeScheduleI();
                $sched_i->changeschedules_header_id     = $changeschedules_header_id;
                $sched_i->date_affected                 = $date_affected[$key];
                $sched_i->current_schedule              = $current_schedule[$key];
                $sched_i->new_schedule                  = $new_schedule[$key];
                $sched_i->reason                        = $reason[$key];
                $sched_i->save();
            }

            $log = new Log();
            $log->description   = Auth::user()->name." submitted new Change Schedule";
            $log->save();

            Session::flash('alert-success', 'Change Schedule request submitted.');
            return Redirect::to('changeschedule/create');

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
        $header = ChangeScheduleH::find($id);
        $items = ChangeScheduleI::where('changeschedules_header_id', '=', $id)->get();
        return view('changeschedule.show')->with(array('header' => $header, 'items' => $items));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $header = ChangeScheduleH::find($id);
        return view('changeschedule.edit')->with(array('header'=>$header));
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
            'department'    => 'required',
            'change_type'   => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('changeschedule/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        else
        {
            $header                 = ChangeScheduleH::find($id);
            $header->employee_name  = Input::get('employee_name');
            $header->department     = Input::get('department');
            $header->change_type    = Input::get('change_type');
            $header->status         = Input::get('status');
            $header->save();

            Session::flash('alert-success', 'Change schedule request updated.');
            return Redirect::to('changeschedule/'.$id.'/edit');
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

    public function getScheduleList()
    {
        $sched = ChangeScheduleH::select(['id','employee_name','department','change_type','status', 'created_at'])->get();
        return Datatables::of($sched)
        ->addColumn('action', function ($sched) {
                return '<a href="changeschedule/'.$sched->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="changeschedule/'.$sched->id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> View</a>';
            })
        ->make(true);
    }
}
