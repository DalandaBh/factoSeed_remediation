@extends('layout.app')

@section('content')
    <h1 class="text-center mt-5">Add a saveur</h1>

    <form action="{{route('saveurs.store')}}" method="post">
            @csrf
        <div class="form-group">
            <label for="name">Name of the saveur</label>
            <input type="text" name="name" class="form-control" id="">
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection