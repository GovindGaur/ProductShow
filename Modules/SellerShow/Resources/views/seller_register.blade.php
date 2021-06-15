@extends('sellershow::layouts.master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/sellerregister" method="POST">
                @csrf
                <h2>Seller SignUp</h2>
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" name="name" placeholder="Enter Name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="name">Mobile Number</label>
                    <input type="text" name="mobilenumber" placeholder="Enter Name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>

        </div>
    </div>
</div>
@endsection