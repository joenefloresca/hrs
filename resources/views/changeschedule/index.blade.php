@extends('app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Change Schedule</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Change Schedule List</strong>
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
                            <h5>Change Schedule</small></h5>
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
                            <table id="SchedList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Employee Name</th>
                                        <th>Department</th>
                                        <th>Change Type</th>
                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('overtime-list')
<script>
$(document).ready(function(){
    $('#SchedList').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'schedule-list',
         "createdRow": function ( row, data, index ) {
            if ( data.status == 0 ) {
                $('td', row).eq(4).addClass('text-danger');
                $('td', row).eq(4).addClass('text-danger').text('Pending');
            }
            else
            {
                $('td', row).eq(4).addClass('text-success');
                $('td', row).eq(4).addClass('text-success').text('Approved');
            }
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'employee_name', name: 'employee_name'},
            {data: 'department', name: 'department'},
            {data: 'change_type', name: 'change_type'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: true, searchable: true}
        ]
    });
}); 
</script>           
@endsection