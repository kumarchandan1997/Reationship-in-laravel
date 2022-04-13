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
                <a href="{{ url('vacancy_create')}}"><button class="btn btn-primary btn-sm float-right">Add Vacancy</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>SNO</th>
                    <th>Name</th>
                    <th>No Of Vacancy</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($vacancy as $products)
                  <tr>
                  <td>{{$products->id}}</td>   
                    <td>{{$products->name}}</td>
                    <td>{{$products->no_vacancy}}</td>
                    <td>{{$products->des}}</td>
                    <td>
           <img height="100" width="100" src="{{ asset('vacancy/image/'.$products->image) }}">
            </td>                  
            <td>
        <a href="{{ url('vacancy_show/'.$products->id) }}" class="btn btn-primary btn-sm">Show</a>
         </td>
         <td>
        <a href="{{ url('vacancy_edit/'.$products->id) }}" class="btn btn-primary btn-sm">Edit</a>
        </td>
        <td>
        <form action="{{ url('vacancy_delete/'.$products->id) }}" method="POST">
          @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
       </td>
                  </tr>
                 
                  @endforeach
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