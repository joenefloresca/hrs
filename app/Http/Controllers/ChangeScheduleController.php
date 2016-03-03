<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Models\ChangeScheduleH;
use App\Http\Models\ChangeScheduleI;
use Auth;
use Validator;
use Redirect;
use Input;
use Session;


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
        //
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
