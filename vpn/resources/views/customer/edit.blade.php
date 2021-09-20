@extends('layouts.admin_layout.admin_layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('customer/index') }}">Languages</a></li>
            <li class="breadcrumb-item active">Edit User</li>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <br>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form name="customerForm" id="customerForm"   action="{{ url('/customer/update/'.$data->id) }}"   method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">User Name*</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $data->name}}" placeholder="Enter user name" >
                  </div>

                  <div class="form-group">
                    <label for="email">User Email*</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $data->email }}" placeholder="Enter email">
                  </div>

                    <!-- <div class="form-group">
                        <label for="password"> New Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter newPassword" >
                    </div> -->

                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="enabled" name="enabled" value="1" {{$data->enabled=='1' ? 'checked' : ''}}>
                    <label for="enabled">
                      Enabled
                    </label>
                  </div>
                </div>
                <!-- /.card-body -->
                

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
</div>
<!-- /.content-wrapper -->

@endsection