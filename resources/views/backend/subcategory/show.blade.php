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
                <a href="{{ url('subcategory_index')}}"><button class="btn btn-primary btn-sm float-right">Back</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>ID</th>
                    <!-- <th>Category Name</th> -->
                    <th>Slug Name</th>
                    <th>Description</th>
                    <th>Subcategory Name</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  
                  <tr>
                  <td>{{$subcategory->id}}</td>   
                
                    <td>{{$subcategory->slug_name}}</td>
                    <td>{{$subcategory->des}}</td>
                    <td>{{$subcategory->subcategory_name}}</td>
                                
            
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