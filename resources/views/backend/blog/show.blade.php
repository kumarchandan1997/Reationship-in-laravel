<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Show</title>
</head>
<body>
<a href="{{ url('blog_index') }}" class="btn btn-danger float-end">BACK</a>
<table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Slag</th>
      <th scope="col">Image</th>
      <th scope="col">Short Des</th>
      <th scope="col">Meta Title</th>
      <th scope="col">Meta des</th>
      <th scope="col">Meta Keyword</th>
      <th scope="col">Og Title</th>
      <th scope="col">Og Des</th>
      <th scope="col">Og Image</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
       <td>{{$blog->id}}</td>
       <td>{{$blog->title}}</td>
       <td>{{$blog->des}}</td>
       <td>{{$blog->slag}}</td>
       <td>
       <img src="{{ asset('blog/image/'.$blog->image) }}" width="70px" height="70px" alt="Image">
       </td>
       <td>{{$blog->short_des}}</td>
       <td>{{$blog->meta_title}}</td>
       <td>{{$blog->meta_des}}</td>
       <td>{{$blog->meta_keyword}}</td>
       <td>
       <img src="{{ asset('blog/og_image/'.$blog->og_image) }}" width="70px" height="70px" alt="Image">
       </td>
       <td>{{$blog->og_des}}</td>
       <td>{{$blog->og_image}}</td>
       <td>{{$blog->date}}</td>
    </tr>
    
  </tbody>
</table>

</body>
</html>