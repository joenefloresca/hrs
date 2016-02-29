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
                            <form method="get" class="form-horizontal">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10"><input type="text" name=-"" class="form-control"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10"><input type="text" name=-"" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Department/Program</label>
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

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Payroll Period</label>
                                    <div class="col-sm-10"><input type="text" name=-"" class="form-control"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Inquiry/Concern Details</label>
                                    <div class="col-sm-10"><textarea class="form-control" name=-""  id="textArea"></textarea></div>
                                </div>

                                 <div class="hr-line-dashed"></div>

                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">Recieved by:</label>
                                    <div class="col-sm-10"><input type="text" name=-"" class="form-control"></div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-10"><input type="text" name=-"" class="form-control"></div>
                                </div>

                         

                                <div class="hr-line-dashed"></div>

                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Action Taken</label>
                                    <div class="col-sm-10"><textarea class="form-control" name=-""  id="textArea"></textarea></div>
                                </div>

                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">Feedback Given by:</label>
                                    <div class="col-sm-10"><input type="text" name=-"" class="form-control"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-10"><input type="text" name=-"" class="form-control"></div>
                                </div>

                                 <div class="hr-line-dashed"></div>

                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">Acknowledge by:</label>
                                    <div class="col-sm-10"><input type="text" name=-"" class="form-control"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-10"><input type="text" name=-"" class="form-control"></div>
                                </div>


                        
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
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


@section('payroll-create')
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