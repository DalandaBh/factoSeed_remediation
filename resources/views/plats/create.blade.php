@extends('layout.app')

@section('content')
    <h1 class="text-center mt-5">Add a Plat</h1>

    <form action="{{route('plats.store')}}" method="post">
            @csrf
        <div class="form-group">
            <label for="name">Name of the plat</label>
            <input type="text" name="name" class="form-control" id="">
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
            <input type="text" name="quantite" class="form-control" id="">
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection