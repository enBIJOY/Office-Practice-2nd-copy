@extends('frontend.layout.master')
@section('title','login Page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 my-5">
                <h1>Login Here:</h1>
                <form action="{{ route('auth.post.login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="mt-2" >Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label class="mt-2" >Password</label>
                        <input type="text" class="form-control" name="password" >
                    </div>
                    
                    <button class="btn btn-success mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection