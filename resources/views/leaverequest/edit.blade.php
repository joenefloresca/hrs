@extends('app')
@section('content')
<style>
div#datepicker {
    padding-left: 15px;
}
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Edit Leave Request</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Edit Leave Request</strong>
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
                            <h5>Edit Leave Request</small></h5>
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
                            {!! Form::model($leave, array('route' => array('leaverequest.update', $leave->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
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

                                <div class="form-group"><label class="col-sm-2 control-label">Employee Name</label>
                                    <div class="col-sm-10"><input type="text" name="employee_name" id="employee_name" value="{{$leave->employee_name}}" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Employee ID</label>
                                    <div class="col-sm-10"><input type="text" name="employee_id" id="employee_id" value="{{$leave->employee_id}}" class="form-control"></div>
                                </div>

                                <div class="form-group" id="data_5">
                                    <label class="col-sm-2 control-label">Leave Duration</label>

                                    <div class="input-daterange input-group" id="datepicker">
                                        <input type="text" class="input-sm form-control" name="from_date" value="{{$leave->from_date}}"/>
                                        <span class="input-group-addon">to</span>
                                        <input type="text" class="input-sm form-control" name="to_date" value="{{$leave->to_date}}" />
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Leave Type</label>
                                    <div class="col-sm-10">
                                        {!! Form::select('leave_type', [
                                        '' => 'Choose One', 
                                        'Sick' => 'Sick', 
                                        'Vacation' => 'Vacation',
                                        'Maternity' => 'Maternity',
                                        'Paternity' => 'Paternity',
                                        'Others' => 'Others',
                                        ],
                                         $leave->leave_type, array('class' => 'form-control')) !!}
                                        
                                    </div>
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
                                         $leave->department, array('class' => 'form-control')) !!}
                                        
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Notes</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="notes">{{$leave->notes}}</textarea>
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
                                         $leave->status, array('class' => 'form-control')) !!}
                                        
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

@section('leave-create')
<script>
$(document).ready(function(){
    $('#data_5 .input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: "yyyy-mm-dd"
    });
}); 
</script>           
@endsection
