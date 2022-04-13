@extends('backend.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('category_update/'.$category->id)}}"  method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control"  name="name" value="{{$category->name}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control"  name="slug"  value="{{$category->slug}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label> Description</label>
                        <input type="text" class="form-control"  name="des"  value="{{$category->des}}">
                    </div>
                  </div>
                  
                  
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection