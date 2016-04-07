@extends('app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Change Schedule Form</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Change Schedule Form</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Change Schedule Form</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                                
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                  @if(Session::has('alert-' . $msg))
                                  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                                  @endif
                                @endforeach
                            </div>
                            {!! Form::model($header, array('route' => array('changeschedule.update', $header->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}    
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group"><label class="col-sm-2 control-label">Employee Name</label>
                                    <div class="col-sm-10"><input type="text" name="employee_name" id="employee_name" class="form-control" value="{{$header->employee_name}}"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Department</label>
                                    <div class="col-sm-10">
                                        {!! Form::select('department', [
                                        '' => 'Choose One', 
                                        'MIS' => 'MIS', 
                                        'IT' => 'IT',
                                        'Finance' => 'Finance',
                                        'Paternity' => 'Paternity',
                                        'Operations' => 'Operations',
                                        ],
                                         $header->department, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Change Type</label>
                                    <div class="col-sm-10">
                                        
                                         {!! Form::select('change_type', [
                                        '' => 'Choose One', 
                                        'Change in work schedule' => 'Change in work schedule', 
                                        'Change of Day off' => 'Change of Day off',
                                        ],
                                         $header->change_type, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                @if(Auth::user()->role_id == 1)
                                <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        {!! Form::select('status', [
                                        '' => 'Choose One', 
                                        '0' => 'Pending', 
                                        '1' => 'Approved',
                                        ],
                                         $header->status, array('class' => 'form-control')) !!}
                                        
                                    </div>
                                </div>
                                @endif
                        
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
