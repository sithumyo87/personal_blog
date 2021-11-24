@extends('admin.master')
@section('title','Coding Skill')
@section('content')
    <div class="card mt-5 p-4">
        <div class="card-header bg-primary text-white"><h4>Coding Skill Crate Form</h4></div>
        <div class="card-body">
            <form action="{{route('codingskill.store')}}" method="post">
                @csrf
                @foreach($errors->all() as $error)
                    <div class="alert alert-dismissible fade show alert-danger" role="alert"  id="customxD">
                        <strong>{{$error}}</strong>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
                <div class="form-group ">
                    <label for="name">Programming Name</label>
                    <input type="text" placeholder="Enter Programming Name" name="name" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="name">Percentage</label>
                    <input type="number" placeholder="Enter Your Skill Percentage" name="percentage" class="form-control">
                </div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Submit</i></button>
            </form>
        </div>
    </div>
@endsection
