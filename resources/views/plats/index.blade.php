@extends('layout.app')

@section('content')
    

<div class="container">
   
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header ">
                <h3 class="card-title">Plats</h3>
                <a href="{{route('plats.create')}}">
                    <button class="btn btn-success d-block mx-auto">Add a plat</button>
                </a>
                <a href="{{route('saveurs.index')}}">
                        <button class="btn btn-success d-block mx-auto mt-3">See de saveurs</button>
                    </a>
        
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-wrap">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Plats</th>
                        <th scope="col">Saveur</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($plats as $plat)
                        <tr>
                            <td>{{$plat->id}}</td>
                            <td>{{$plat->name}}</td>
                            <td>
                                <p>{{$plat->saveur->name}}</p>
                            </td>
                            <td>x {{$plat->quantite}}</td>
                            <td class="d-flex">
                                <a href="{{route('plats.edit', $plat->id)}}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{route('plats.destroy',$plat->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{route('plats.show', $plat->id)}}">
                                    <button class="btn btn-info">Show</button>
                                </a>
                            </td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection