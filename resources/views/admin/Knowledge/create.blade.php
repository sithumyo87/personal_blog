@extends('admin.master')
@section('title','Coding Skill')
@section('content')
    <div class="card mt-5 p-4">
        <div class="card-header bg-primary text-white"><h4>Knowledge Create Form</h4></div>
        <div class="card-body">
            <form action="{{route('knowledge.store')}}" method="post">
                @csrf
                @foreach($errors->all() as $error)
                    <div class="alert alert-dismissible fade show alert-danger" role="alert"  id="customxD">
                        <strong>{{$error}}</strong>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
                <div class="form-group ">
                    <label for="name">Other Knowledge</label>
                    <input type="text" placeholder="Enter your Other Knowledge" name="name" class="form-control">
                </div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Submit</i></button>
            </form>
        </div>
    </div>
@endsection
