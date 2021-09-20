@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users Table</h3>
                        <a href="{{ url('/customer/create') }}"
                style="max-width: 150px; float:right; display:inline-block;" 
                class="btn btn-block btn-dark"><i class="fas fa-plus"></i>  New Customer</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="category" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Name</th>
                                    
                                    
                                    <th>Status</th>
                                    
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $user)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$user->name}}</td>
                                    
                                    
                                    
                                    <td>
                                        @if($user->enabled==1)
                                        
                                         <label class="label" style=" background-color: #25ce2a;">Active</label>
                                        @else
                                        
                                        <label class="label" style=" background-color: #F92D2D;">Blocked</label>
                                        @endif
                                    </td>
                                    

                                    <td>
                                        
                                        <a href="{{url('/customer/edit/'.$user->id)}}" class=" btn btn-success"
                                            role="button"><i class="material-icons option-icon">mode_edit</i></a>
                                            &nbsp;
                                        <a href="{{url('customer/delete/'.$user->id)}}" onclick="return confirm('Are you sure want to delete this Customer?')" class="btn btn-danger" role="button"><i class="material-icons option-icon">delete</i></a>
                                        

                                    </td>
                                </tr>


                                <br>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection