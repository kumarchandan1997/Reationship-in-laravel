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
                <a href="{{ url('blog_create')}}"><button class="btn btni-info float-right">add Blog</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Slag</th> 
       <th scope="col">Image</th>
      <!-- <th scope="col">Short Des</th> -->
      <!-- <th scope="col">Meta Title</th>
      <th scope="col">Meta des</th>
      <th scope="col">Meta Keyword</th>
      <th scope="col">Og Title</th>
      <th scope="col">Og Des</th> -->
      <th scope="col">Og Image</th>
      <th scope="col">Date</th>
      <th scope="col">action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($blog as $item)
                  <tr>
                  <td>{{$item->id}}</td>
       <td>{{$item->title}}</td>
       <td>{{$item->des}}</td>
       <td>{{$item->slag}}</td>
       <td>
       <img src="{{ asset('blog/image/'.$item->image) }}" width="70px" height="70px" alt="Image">
       </td>
       <td>{{$item->short_des}}</td>
       <!-- <td>{{$item->meta_title}}</td>
       <td>{{$item->meta_des}}</td>
       <td>{{$item->meta_keyword}}</td> -->
       <td>
       <img src="{{ asset('blog/og_image/'.$item->og_image) }}" width="70px" height="70px" alt="Image">
       </td>
       <!-- <td>{{$item->og_des}}</td> -->
       <td>{{$item->og_image}}</td>
       <td>{{$item->date}}</td>
       <td>
        <a href="{{ url('blog_show/'.$item->id) }}" class="btn btn-primary btn-sm">Show</a>
          
        <a href="{{ url('blog_edit/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
          
          {{-- <a href="{{ url('blog_delete/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
          <form action="{{ url('blog_delete/'.$item->id) }}" method="POST">
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