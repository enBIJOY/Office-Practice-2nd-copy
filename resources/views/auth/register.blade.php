@extends('frontend.layout.master')
@section('title','Register now')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-6 my-5">
                <h1>Registration Page :</h1>
                <form action="{{ route ('auth.post.register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="mt-2" >name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name">
                        @error ('name') <span class="text danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="mt-2" >email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email">
                        @error ('email') <span class="text danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="mt-2" >password <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="password" >
                        @error ('password') <span class="text danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="mt-2" >confirm password <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="confirm_password" >
                        @error ('confirm_password') <span class="text danger">{{$message}}</span>@enderror
                    </div>
                    <button class="btn btn-success mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection