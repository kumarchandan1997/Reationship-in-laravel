@extends('backend.layouts.main')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                <a href="{{ url('slider_index')}}"><button class="btn btn-primary btn-sm float-right">Back</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>SNO</th>
                    <th>Discription</th>
                    <th>Short Description</th>
                    <th>Slag Alt</th>
                    <th>Image</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <tr>
                  <td>{{$slider->id}}</td>
                    
                    <td>{{$slider->des}}</td>
                    <td>{{$slider->short_des}}</td>
                    <td>{{$slider->slider_alt}}</td>
                    <td>
           <img height="100" width="100" src="{{ asset('slider/image/'.$slider->image) }}">
            </td>
            </td>
                  </tr>     
                  </tbody>
                  <tfoot>
                    
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection