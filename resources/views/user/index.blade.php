@extends('app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>User</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>User List</strong>
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
                            <h5>User</small></h5>
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
                            <table id="CashAdvance" class="table table-striped table-bordered" cellspacing="0" width="100%">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Employee Name</th>
                                        <th>Email</th>
                                        <th>Requested Amount:</th>
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
@section('user-list')
<script>
$(document).ready(function(){
    $('#CashAdvance').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'cash-advance',
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
            {data: 'employees_name', name: 'employees_name'},
            {data: 'email', name: 'email'},
            {data: 'requested_amount', name: 'requested_amount'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: true, searchable: true}
        ]
    });
   
}); 
</script>           
@endsection
