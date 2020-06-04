@extends('layout.app')

@section('content')
    <h1 class="text-center mt-5">Edit a Plat</h1>

    <form action="{{route('plats.update',$plat->id)}}" method="post">
            @csrf
            @method('put')
        <div class="form-group">
            <label for="name">Name of the plat</label>
            <input type="text" name="name" class="form-control" id="" value="{{$plat->name}}">
        </div>
    
        <div class="form-group">
            <label for="saveur_id">Saveurs</label>
            <select class="form-control" name="saveur_id">
                @foreach ($saveurs as $saveur)
                    <option value="{{$saveur->id}}">{{$saveur->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantite">Quantité</label>
            <input type="text" name="quantite" class="form-control" id="" value="{{$plat->quantite}}">
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection