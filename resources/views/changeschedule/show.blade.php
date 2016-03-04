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

                            
                            <div class="form-horizontal">

                                <div class="form-group"><label class="col-sm-2 control-label">Employee Name</label>
                                    <div class="col-sm-10"><input type="text" name="employee_name" id="employee_name" class="form-control" value="{{$header->employee_name}}"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Department</label>
                                    <div class="col-sm-10"><input type="text" name="department" id="department" class="form-control" value="{{$header->department}}"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Change Type</label>
                                    <div class="col-sm-10"><input type="text" name="change_type" id="change_type" class="form-control" value="{{$header->change_type}}"></div>
                                    
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Change Details</label>
                                    <div class="col-sm-10">
                                        <table id="ChangeDetailList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Date Affected</th>
                                                    <th>Current Schedule</th>
                                                    <th>New Schedule</th>
                                                    <th>Reason</th>
                                                </tr>

                                                @foreach($items as $key => $value)
                                                <tr>
                                                    <td><input type="text" name="date_affected[]" class="form-control" id="date-affected" value="{{$value->date_affected}}" /></td>
                                                    <td><input type="text" name="current_schedule[]" class="form-control"  value="{{$value->current_schedule}}" /></td>
                                                    <td><input type="text" name="new_schedule[]" class="form-control" value="{{$value->new_schedule}}" /></td>
                                                    <td><input type="text" name="reason[]" class="form-control" value="{{$value->reason}}" /></td>
                                                </tr>
                                                @endforeach

                                                
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection