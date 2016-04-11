<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Datatables;
use Validator;
use Input;
use Redirect;
use Image;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles', ['only' => ['index', 'edit', 'show']]);   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show')->with(array('user'=>$user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit')->with(array('user'=>$user));
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
            'name' => 'required',
            'file' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('user/'.$id.'/edit')->withInput()->withErrors($validator);
        }
        else
        {

            /*Upload Profile Picture to File System*/
            $image = Input::file('file');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('img/users/' . $filename);
            Image::make($image->getRealPath())->resize(60, 60)->save($path);

            /* Save profile details */

            $user = User::find($id);
            $user->name         = Input::get('name');
            $user->department   = Input::get('department');
            $user->pic_path     = $filename;
            $user->save();

            Session::flash('alert-success', 'Profile Updated Successfully!');
            return Redirect::to('user/'.$id.'/edit');
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


    public function getUserList()
    {
        $user = User::select(['id','name','id_number','department'])->get();
        return Datatables::of($user)
        ->addColumn('action', function ($user) {
                return '<a href="user/'.$user->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }
}
