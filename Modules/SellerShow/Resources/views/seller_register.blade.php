@extends('sellershow::layouts.master')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Seller SignUp</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">SellerShow</a></li>
                        <li class="breadcrumb-item active">Seller SignUp</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">

            <div class="container custom-login">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <form action="/sellerregister" method="POST" style="margin-left: 250px;margin-top: 22px;">
                            @csrf

                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input type="text" name="name" style="width: 500px; placeholder=" Enter Name"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" style="width: 500px; placeholder=" Enter email">
                            </div>
                            <div class="form-group">
                                <label for="name">Mobile Number</label>
                                <input type="text" name="mobilenumber" style="width: 500px; placeholder=" Enter Name"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    style="width: 500px; placeholder=" Password">
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /.container-fluid -->

</div>

@endsection