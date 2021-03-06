@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <a href="{{route('website.create')}}" class="btn btn-success">Add New Post</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Website Name</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($allweb as $webs)
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
        <a href="{{route('website.delete', $webs->id)}}">Delete</a>
      </div>
    </div>
  </div>
</div>
            <tr>
                <td>{{$webs->id}}</td>
                <td>{{$webs->website_name}}</td>
                <td width = 300px>
                    <img src="{{asset("WebsiteImages/".$webs->image)}}" alt="Image" class="img-responsive" width="100">
                </td>
                <td><?php echo Str::limit($webs->description,$limit = 20)?></td>
                <td>{{$webs->author}}</td>
                <td>{{$webs->created_at}}</td>
                <td width = 300px>
                    <a href="{{route('website.show')}}" class="btn btn-primary">show</a>
                    <a href="{{route('website.edit', $webs->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('website.delete', $webs->id)}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
