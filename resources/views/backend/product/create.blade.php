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
              <form action="{{url('product_store')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control"  name="product_name" value="{{old('product_name')}}">
                    </div>
                  </div>
                  
                  <div class="col-6">
                    <div class="form-group">
                        <label>Slag</label>
                        <input type="text" class="form-control"  name="slag" value="{{old('slag')}}">
                    </div>
                  </div>

                  
                  <div class="col-6">
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control"  name="des" value="{{old('des')}}" >
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                        <label>Short Description</label>
                        <input type="text" class="form-control"  name="short_des"  value="{{old('short_des')}}">
                    </div>
                  </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> 
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label> Meta Title</label>
                        <input type="text" class="form-control"  name="meta_title" value="{{old('meta_title')}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control"  name="meta_des" value="{{old('meta_des')}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label>Meta Keyword</label>
                        <input type="text" class="form-control"  name="meta_keyword" value="{{old('meta_keyword')}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label>Og Title</label>
                        <input type="text" class="form-control"  name="og_title" value="{{old('og_title')}}">
                    </div>
                  </div>
                  
                  <div class="col-6">
                  <div class="form-group">
                    <label for="exampleInputFile"> og Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="og_image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
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