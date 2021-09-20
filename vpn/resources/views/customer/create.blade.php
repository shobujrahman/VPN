@extends('layouts.admin_layout.admin_layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('customer/index') }}">Users</a></li>
            <li class="breadcrumb-item active">Add User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Add New User</h3>
              </div>
              <br>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form name="customerForm" id="customerForm"  action="{{ url('/customer/submit') }}"   method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">User Name*</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter user name" >
                  </div>

                  <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter email" >
                  </div>

                    <div class="form-group">
                        <label for="password">Password*</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                            placeholder="Enter newPassword" required>
                    </div>

                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="enabled" name="enabled" value="1">
                    <label for="enabled">
                      Enabled
                    </label>
                  </div>
                    <br>
                    <br>
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark" style="max-width: 150px; float:right; display:inline-block;">Submit</button>
                </div>
              </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
</div>
<!-- /.content-wrapper -->

@endsection