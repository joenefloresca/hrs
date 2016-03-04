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
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('changeschedule') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group"><label class="col-sm-2 control-label">Employee Name</label>
                                    <div class="col-sm-10"><input type="text" name="employee_name" id="employee_name" class="form-control"></div>
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

                                <div class="form-group"><label class="col-sm-2 control-label">Change Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="change_type" id="change_type">
                                            <option value="">Choose One</option>
                                            <option value="Change in work schedule">Change in work schedule</option>
                                            <option value="Change of Day off">Change of Day off</option>
                                        </select>
                                    </div>
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
                                                <tr>
                                                    <td><input type="text" name="date_affected[]" class="form-control" id="date-affected" placeholder="yyyy-mm-dd" /></td>
                                                    <td><input type="text" name="current_schedule[]" class="form-control"  /></td>
                                                    <td><input type="text" name="new_schedule[]" class="form-control"  /></td>
                                                    <td><input type="text" name="reason[]" class="form-control"  /></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        
                        
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-warning" type="button" id="addDetails">Add Change Details</button>
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
@section('changeschedule-create')
<script>
$(document).on("click", "#addDetails", function() {
  $('#ChangeDetailList tr:last').after('<tr><td><input type="text" name="date_affected[]" class="form-control" id="date-affected" placeholder="yyyy-mm-dd" /></td><td><input type="text" name="current_schedule[]" class="form-control" /></td><td><input type="text" name="new_schedule[]" class="form-control" /></td><td><input type="text" name="reason[]" class="form-control" /></td></tr>');
});

$(document).on("load", "#date-affected", function() {
  $('#date-affected').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: "yyyy-mm-dd"
    });
});



$("#date-affected").delegate( "#date-affected", "load",
    function(e) {
        alert("photo loaded");
});
</script>
@endsection