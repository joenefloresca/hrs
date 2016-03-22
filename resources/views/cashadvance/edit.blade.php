@extends('app')
@section('content')
<style>
div#datepicker {
    padding-left: 15px;
}
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Edit Cash Advance</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Edit Cash Advance</strong>
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
                            <h5>Edit Cash Advance</small></h5>
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
                            {!! Form::model($cashadvance, array('route' => array('cashadvance.update', $cashadvance->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
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
                                <fieldset>
                                    <legend>Requester Personal Information</legend>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Employee's Name</label>
                                        <div class="col-sm-10"><input type="text" name="employees_name" value="{{$cashadvance->employees_name}}" class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Complete Home Address</label>
                                        <div class="col-sm-10"><input type="text" name="home_address" value="{{$cashadvance->home_address}}" class="form-control"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email Address</label>
                                        <div class="col-sm-10"><input type="email" name="email" value="{{$cashadvance->email}}" class="form-control email"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Contact Details</label>
                                        <div class="col-sm-10"><input type="text" name="contact_details" value="{{$cashadvance->contact_details}}"  class="form-control"></div>
                                    </div>
                                </fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Requested Amount:</label>
                                        <div class="col-sm-10"><input type="number" name="requested_amount" value="{{$cashadvance->requested_amount}}"  class="form-control"></div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="col-sm-2 control-label">Reason/s:</label>
                                        <div class="col-sm-10"><textarea class="form-control" name="reason" id="textArea">{{$cashadvance->reason}}</textarea></div>
                                    </div>
                            
                                    <div class="hr-line-dashed"></div>
                                <fieldset>
                                    <legend>Repayment Detail</legend>
                                    <div class="form-group">
                                      <label for="select" class="col-lg-2 control-label">Terms</label>
                                          <div class="col-lg-10">
                                                <select class="form-control" name="terms"  value="{{$cashadvance->terms}}" id="select">
                                                  <option>Monthly</option>
                                                  <option>Semi Monthly</option>
                                                </select>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Amount</label>
                                        <div class="col-sm-10"><input type="number" name="amount" value="{{$cashadvance->amount}}"  class="form-control"></div>
                                    </div>      
                                </fieldset>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">I hereby authorize <span class="text-danger">Quinn Data Facilities, Inc. Human Resource Department</span> to deduct my repayment amount from salary starting on</label>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-10 col-md-offset-2"><input type="text" name="repayment_date" value="{{$cashadvance->repayment_date}}" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('cashadvance-create')
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
