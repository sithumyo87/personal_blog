@extends('admin.master')
@section('title','Coding Skill')
@section('content')
    <div class="card mt-5 p-4">
        <div class="card-header bg-primary text-white"><h4>Blog Create Form</h4></div>
        <div class="card-body">
            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @foreach($errors->all() as $error)
                    <div class="alert alert-dismissible fade show alert-danger" role="alert"  id="customxD">
                        <strong>{{$error}}</strong>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
                <div class="form-group mt-3">
                    <label for="title">Blog Title</label>
                    <input type="text" placeholder="Enter Title Name" name="title" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="description">Blog Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>

                <select name="category_id" id="" class="form-control mt-3">
                    @foreach($categories as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>

                <div class="form-group mt-3">
                    <label for="name">Image</label>
                    <input type="file"  name="image" class="form-control">
                </div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Submit</i></button>
            </form>
        </div>
    </div>
@endsection
