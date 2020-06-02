@extends('layout.app')

@section('content')
    <h1 class="text-center mt-5">Add a Book</h1>

    <form action="{{route('livres.store')}}" method="post">
            @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" name="year" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection