@extends('app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Time In-Out Change</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Time In-Out Change</strong>
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
                            <h5>Time In-Out Change.</small></h5>
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
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('timechange') }}">

                                <div class="form-group"><label class="col-sm-2 control-label">Employee Name</label>
                                    <div class="col-sm-10"><input type="text" name="employee_name" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Date to changed</label>
                                    <div class="col-sm-10"><input type="text" name="dateto_change" id="dateto_change" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Work Schedule</label>
                                    <div class="col-sm-10"><input type="text" name="work_schedule" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Clock in Time:</label>
                                    <div class="col-sm-10"><input type="text" name="clock_in" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Clock out Time:</label>
                                    <div class="col-sm-10"><input type="text" name="clock_out" class="form-control"></div>
                                </div>
                            
                                <div class="hr-line-dashed"></div>

                                <fieldset>
                                    <legend>Reason for time clock change request:</legend>
                                    <div class="form-group">
                                      <label for="select" class="col-lg-2 control-label">Select</label>
                                          <div class="col-lg-10">
                                                <select class="form-control" name="change_reason" id="select">
                                                  <option value="Biometrics malfunction">Biometrics malfunction</option>
                                                  <option value="Change of Schedule">Change of Schedule</option>
                                                  <option value="Official Business">Official Business</option>
                                                  <option value="Office was locked">Office was locked</option>
                                                </select>
                                          </div>
                                    </div>
                                </fieldset>

                                <div class="hr-line-dashed"></div>

                                <fieldset>
                                    <legend>No Log-in/No Log-out:</legend>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Reason</label> 
                                        <div class="col-sm-10"><textarea class="form-control" name="no_inout_reason" rows="3" id="textArea"></textarea></div>
                                    </div>
                                 </fieldset>

                                 <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-10 col-sm-offset-2">attachments: <i>(For Example attachments. This form will be returned to employee.)</i></label>
                                </div>

                                <div class="form-group">
                                  <label for="select" class="col-lg-2 control-label">Select</label>
                                      <div class="col-lg-10">
                                            <select class="form-control" name="form_required" id="select">
                                              <option value="Employees explanation letter">Employee's explanation letter</option>
                                              <option value="Dialer logged hours report from Technical Department">Dialer logged hours report from Technical Department</option>
                                              <option value="Production report immediate supervisor">Production report immediate supervisor</option>
                                            </select>
                                      </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-10 col-sm-offset-2"><i>Note: This request form should be submitted a week before the covered cut-off. Non compliance with the scheduled submission would mean processing of "time clock change" the following cut-off.</i></label>
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
@section('timechange-create')
<script>
$(document).ready(function(){
    $('#dateto_change').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: "yyyy-mm-dd"
    });
}); 
</script>           
@endsection
