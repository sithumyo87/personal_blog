@extends('admin.master')
@section('title','Coding Skill')
@section('content')
    <div class="card mt-5 p-4">
        <div class="card-header bg-primary text-white">
            <h4>Blog Form List</h4>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{route('blog.create')}}"><button class="btn btn-success float-right"><i class="fas fa-plus-circle"></i>Add Blog</button></a>
            </div>
            @foreach($errors->all() as $error)
                <div class="alert alert-dismissible fade show alert-danger" role="alert"  id="customxD">
                    <strong>{{$error}}</strong>
                    <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
            @if(session('msg'))
                <div class="alert alert-dismissible fade show alert-success" role="alert"  id="customxD">
                    <strong>{{session('msg')}}</strong>
                    <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
                @if(session('delmsg'))
                    <div class="alert alert-dismissible fade show alert-danger" role="alert"  id="customxD">
                        <strong>{{session('delmsg')}}</strong>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif



           <table class="table table-striped">
               <thead>
               <tr>
                   <th>Id</th>
                   <th>Image</th>
                   <th>Name</th>
                   <th>Description</th>
                   <th>Category</th>
                   <th>Action</th>
               </tr>
               </thead>
               <tbody>
               @foreach($blogs as $b)
               <tr>
                   <td>{{$b->id}}</td>
                   <td>
                       <img src="{{Storage::url($b->image)}}" width="100px" alt="">
                   </td>
                   <td>{{$b->name}} </td>
                   <td>{{$b->description}}</td>
                   <td>{{$b->category->name}}</td>
                   <td>
                       <form action="{{route('blog.destroy',$b->id)}}" method="post">
                           @csrf
                           @method('DELETE')
                       <a href="{{route('blog.edit',$b->id)}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i>Edit</a>
                           <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt"></i> Delete</button>
                       </form>
                   </td>
               </tr>
               @endforeach
               </tbody>
           </table>
            <div class="d-flex ">
                {!! $blogs->links() !!}
            </div>
        </div>
    </div>

    @endsection
