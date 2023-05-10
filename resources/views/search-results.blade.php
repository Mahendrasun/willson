<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   
  <div class="py-12">
      <div class="container">
        <div class="row" style="margin-top:20px;margin-bottom:20px;">
        <div class="col-md-8">All Posts</div>
<div class="col-md-4">

<!-- <form action="{{ route('search.post')}}" method="POST" >
@csrf 
<input
    type="search"
    class="form-control"
    placeholder="Find user here"
    name="search"
    value="{{ request('search') }}"
>
  
  <button type="submit" class="btn btn-primary">Search</button>
</form> -->


</div>

        </div>
        <div class="row">
   


<div class="col-md-12">
    <div class="card">
      
  

        <div class="card-header">
        All Posts
        </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      
    </tr>
@php($i = 1)
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$i++}}</th>
      <th >{{$post->title}}</th>
      <th >{{$post->content}}</th>
    </tr>
@endforeach


@if(count($posts)==0)
<tr>
      <th style="background-color: red;">No Post found with the title you searched</th>
    </tr>
@endif

  </thead>
  <tbody>
  </tbody>
</table>
</div>
</div>
</div>
        </div>
      </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
