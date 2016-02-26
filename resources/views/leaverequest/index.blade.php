@extends('app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Leave Request</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Leave Request List</strong>
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
                        <table id="LeaveList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Employee Name</th>
                                    <th>Employee ID</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Leave Type</th>
                                    <!-- <th>Department</th> -->
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
@endsection

@section('leave-list')
        <script>
        $(document).ready(function(){
            $('#LeaveList').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'leave-list',
                 "createdRow": function ( row, data, index ) {
                    if ( data.status == 0 ) {
                        $('td', row).eq(6).addClass('text-danger');
                    }
                    else
                    {
                        $('td', row).eq(6).addClass('text-success');
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'employee_name', name: 'employee_name'},
                    {data: 'employee_id', name: 'employee_id'},
                    {data: 'from_date', name: 'from_date'},
                    {data: 'to_date', name: 'to_date'},
                    {data: 'leave_type', name: 'leave_type'},
                   // {data: 'department', name: 'department'},
                    {data: 'status', name: 'status'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: true, searchable: true}
                ]
            });
           
        }); 
        </script>           
@endsection
