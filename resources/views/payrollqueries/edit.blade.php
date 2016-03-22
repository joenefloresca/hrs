@extends('app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Payroll Queries/Concern Form</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Payroll Queries/Concern Form</strong>
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
                            <h5><small>Payroll Queries/Concern Form</small></h5>
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
                            {!! Form::model($payroll, array('route' => array('payrollqueries.update', $payroll->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10"><input type="text" name="name" class="form-control" value="{{$payroll->name}}"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10"><input type="text" name="date" id="date" class="form-control" value="{{$payroll->date}}"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Department/Program</label>
                                    <div class="col-sm-10">
                                        {!! Form::select('department', [
                                        '' => 'Choose One', 
                                        'MIS' => 'MIS', 
                                        'IT' => 'IT',
                                        'Finance' => 'Finance',
                                        'Operations' => 'Operations'
                                        ],
                                         $payroll->department, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Payroll Period</label>
                                    <div class="col-sm-10"><input type="text" name="payroll" class="form-control" value="{{$payroll->payroll}}"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Inquiry/Concern Details</label>
                                    <div class="col-sm-10"><textarea class="form-control" name="inquiry"  id="textArea">{{$payroll->inquiry}}</textarea></div>
                                </div>

                                 <div class="hr-line-dashed"></div>

                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">Recieved by:</label>
                                    <div class="col-sm-10"><input type="text" name="recieved_by" class="form-control" value="{{$payroll->recieved_by}}"></div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-10"><input type="text" name="date_recieved_by" id="date_recieved_by" class="form-control" value="{{$payroll->date_recieved_by}}"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Action Taken</label>
                                    <div class="col-sm-10"><textarea class="form-control" name="action_taken"  id="textArea">{{$payroll->action_taken}}</textarea></div>
                                </div>

                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">Feedback Given by:</label>
                                    <div class="col-sm-10"><input type="text" name="feedback_given" class="form-control" value="{{$payroll->feedback_given}}"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-10"><input type="text" name="date_feedback_given" id="date_feedback_given" class="form-control" value="{{$payroll->date_feedback_given}}"></div>
                                </div>

                                 <div class="hr-line-dashed"></div>

                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">Acknowledge by:</label>
                                    <div class="col-sm-10"><input type="text" name="acknowledge" class="form-control" value="{{$payroll->acknowledge}}"></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-10"><input type="text" name="date_acknowledge" id="date_acknowledge" class="form-control" value="{{$payroll->date_acknowledge}}"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        {!! Form::select('status', [
                                        '' => 'Choose One', 
                                        '0' => 'Pending', 
                                        '1' => 'Approved',
                                        ],
                                         $payroll->status, array('class' => 'form-control')) !!}
                                        
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('payrollqueries-create')
<script>
$(document).ready(function(){
    $('#date_recieved_by, #date_acknowledge, #date_feedback_given, #date').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: "yyyy-mm-dd"
    });
}); 
</script>           
@endsection