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
              <form action="{{url('subcategory_store')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                        <label>Name</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="Selected"> Choose Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  
                  <div class="col-6">
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control"  name="slug_name"  value="{{old('slug')}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label> Description</label>
                        <input type="text" class="form-control"  name="des"  value="{{old('des')}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label>Subcategory Name</label>
                        <input type="text" class="form-control"  name="subcategory_name"  >
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