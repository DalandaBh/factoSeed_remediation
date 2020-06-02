@extends('layout.app')

@section('content')
    

<div class="container">
   
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header ">
                <h3 class="card-title">Books's Details</h3>
        
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-wrap">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Book's Title</th>
                        <th scope="col">Book's Author</th>
                        <th scope="col">Book's Yeay</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                   
                        <tr>
                            <td>{{$livre->id}}</td>
                            <td>{{$livre->title}}</td>
                            <td>{{$livre->author}}</td>
                            <td>{{$livre->year}}</td>
      
                            <td class="d-flex">
                                <a href="{{route('livres.index')}}">
                                    <button class="btn btn-info">Return back</button>
                                </a>
                            </td>
                        </tr>
                        
                 
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