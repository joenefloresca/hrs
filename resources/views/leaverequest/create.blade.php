@extends('app')
@section('content')
<style>
div#datepicker {
    padding-left: 15px;
}
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Leave Request</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Submit Leave Request</strong>
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
                            <h5>Leave Request</small></h5>
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
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('leaverequest') }}">
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

                                <div class="form-group"><label class="col-sm-2 control-label">Employee Name</label>
                                    <div class="col-sm-10"><input type="text" name="employee_name" id="employee_name" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Employee ID</label>
                                    <div class="col-sm-10"><input type="text" name="employee_id" id="employee_id" class="form-control"></div>
                                </div>

                                <div class="form-group" id="data_5">
                                    <label class="col-sm-2 control-label">Leave Duration</label>

                                    <div class="input-daterange input-group" id="datepicker">
                                        <input type="text" class="input-sm form-control" name="from_date" value=""/>
                                        <span class="input-group-addon">to</span>
                                        <input type="text" class="input-sm form-control" name="to_date" value="" />
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Leave Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="leave_type">
                                            <option value="">Choose One</option>
                                            <option value="Sick">Sick</option>
                                            <option value="Vacation">Vacation</option>
                                            <option value="Maternity">Maternity</option>
                                            <option value="Paternity">Paternity</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Department</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="department">
                                            <option value="">Choose One</option>
                                            <option value="MIS">MIS</option>
                                            <option value="IT">IT</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Operations">Operations</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Notes</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="notes"></textarea>
                                    </div>
                                </div>

                                
                        
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
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
