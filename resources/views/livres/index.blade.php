@extends('layout.app')

@section('content')
    

<div class="container">
   
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header ">
                <h3 class="card-title">Books</h3>
                <a href="{{route('livres.create')}}">
                    <button class="btn btn-success d-block mx-auto">Add</button>
                </a>
        
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-wrap">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Book's Title</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($livres as $livre)
                        <tr>
                            <td>{{$livre->id}}</td>
                            <td>{{$livre->title}}</td>
      
                            <td class="d-flex">
                                <a href="{{route('livres.edit', $livre->id)}}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{route('livres.destroy',$livre->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{route('livres.show', $livre->id)}}">
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