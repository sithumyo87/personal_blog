@extends('admin.master')
@section('title','Coding Skill')
@section('content')
    <div class="card mt-5 p-4">
        <div class="card-header bg-primary text-white"><h4>Edit Portfolio Form</h4></div>
        <div class="card-body">
            <form action="{{route('portfolio.update',$portfolio->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
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
                <div class="form-group mt-3">
                    <label for="name">Other Knowledge</label>
                    <input type="text" placeholder="Enter your Other Knowledge" name="name" class="form-control" value="{{$portfolio->name}}">
                </div>
                <div class="form-group mt-3">
                    <label for="url">URL Name</label>
                    <input type="text" placeholder="Enter Url" name="url" class="form-control" value="{{$portfolio->url}}">
                </div>
                <div class="form-group mt-3">
                    <label for="name">Image</label>
                    <input type="file"  name="image" class="form-control" >
                </div>
                <div>
                    <img src="{{Storage::url($portfolio->image)}}" width="140px" alt="" class="mt-3">
                </div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Updated</i></button>
            </form>
        </div>
    </div>
@endsection
