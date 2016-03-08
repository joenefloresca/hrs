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
                            <h5>Time In-Out Chang</h5>
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
                            <table id="PayrollQueries" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Employee Name</th>
                                        <th>Date to Change</th>
                                        <th>Work Schedule</th>
                                        <th>Clock In</th>
                                        <th>Clock Out</th>
                                        <th>Created At</th>
                                        <th>Status</th>
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

@section('payroll-queries')
<script>
$(document).ready(function(){
    $('#PayrollQueries').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'timechange-list',
         "createdRow": function ( row, data, index ) {
            if ( data.status == 0 ) {
                $('td', row).eq(7).addClass('text-danger');
                $('td', row).eq(7).addClass('text-danger').text('Pending');
            }
            else
            {
                $('td', row).eq(7).addClass('text-success');
                $('td', row).eq(7).addClass('text-success').text('Approved');
            }
        },
        
        columns: [
            {data: 'id', name: 'id'},
            {data: 'employee_name', name: 'employee_name'},
            {data: 'dateto_change', name: 'dateto_change'},
            {data: 'work_schedule', name: 'work_schedule'},
            {data: 'clock_in', name: 'clock_in'},
            {data: 'clock_out', name: 'clock_out'},
            {data: 'created_at', name: 'created_at'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: true, searchable: true}
        ]
    });
   
}); 
</script>           
@endsection
