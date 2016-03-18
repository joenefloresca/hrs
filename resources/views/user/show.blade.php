@extends('app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Your Profile</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Your Profile</strong>
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
                            <h5>Your Profile</small></h5>
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
                            <div class="form-horizontal">
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

                                <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10"><input type="text" name="name" id="name" value="{{$user->name}}" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">ID Number</label>
                                    <div class="col-sm-10"><input type="text" name="id_number" id="id_number" value="{{$user->id_number}}" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Ameyo Login</label>
                                    <div class="col-sm-10"><input type="text" name="ameyo_login" id="ameyo_login" value="{{$user->ameyo_login}}" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Department</label>
                                    <div class="col-sm-10"><input type="text" name="department" id="department" value="{{$user->department}}" class="form-control"></div>
                                </div>
                        
                               
                                
                            </div>
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
