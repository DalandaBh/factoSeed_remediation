@extends('layout.app')

@section('content')
    <h1 class="text-center mt-5">Edit a Book</h1>

    <form action="{{route('livres.update',$livre->id)}}" method="post">
            @csrf
            @method('put')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="" value="{{$livre->title}}">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" id="" value="{{$livre->author}}">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" name="year" class="form-control" id="" value="{{$livre->year}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection