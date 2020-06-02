@extends('layout.app')

@section('content')
    

<div class="container">
   
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header ">
                <h3 class="card-title">Saveurs</h3>
                <a href="{{route('saveurs.create')}}">
                    <button class="btn btn-success d-block mx-auto mt-3">Add a saveur</button>
                </a>

                <a href="{{route('plats.index')}}">
                    <button class="btn btn-success d-block mx-auto mt-3">See plats</button>
                </a>
        
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-wrap">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Saveurs</th>
                        <th scope="col">Plats</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($saveurs as $saveur)
                        <tr>
                            <td>{{$saveur->id}}</td>
                            <td>{{$saveur->name}}</td>
                            <td>
                                {{-- <p>{{$saveur->plat->name}}</p> --}}
                            </td>
      
                            <td class="d-flex">
                                <a href="{{route('saveurs.edit', $saveur->id)}}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{route('saveurs.destroy',$saveur->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{route('saveurs.show', $saveur->id)}}">
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