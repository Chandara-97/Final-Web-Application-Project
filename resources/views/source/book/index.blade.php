@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <a href="{{route('book.create')}}" class="btn btn-success">Add New Post</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Book Name</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($allbook as $books)
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
        <a href="{{route('book.delete', $books->id)}}">Delete</a>
      </div>
    </div>
  </div>
</div>
            <tr>
                <td>{{$books->id}}</td>
                <td>{{$books->book_name}}</td>
                <!-- <td>{{$books->category}}</td> -->
                <td width = 300px>
                    <img src="{{asset("BookImages/".$books->image)}}" alt="Image" class="img-responsive" width="100">
                </td>
{{--                <td><?php echo $books->description ?></td>--}}
{{--                <td>{{Str::limit($books->description,$limit = 20)}}</td>--}}
                <td><?php echo Str::limit($books->description,$limit = 20)?></td>
                <td>{{$books->author}}</td>
                <td>{{$books->created_at}}</td>
                <td width = 300px>
                    <a href="{{route('book.show')}}" class="btn btn-warning">Show</a>
                    <a href="{{route('book.edit', $books->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('book.delete', $books->id)}}" class="btn btn-danger" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
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
