@extends('layout.app')

@section('content')
    <h1 class="text-center mt-5">Edit a saveur</h1>

    <form action="{{route('saveurs.update',$saveur->id)}}" method="post">
            @csrf
            @method('put')
        <div class="form-group">
            <label for="name">Name of the saveur</label>
            <input type="text" name="name" class="form-control" id="" value="{{$saveur->name}}">
        </div>
  
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection