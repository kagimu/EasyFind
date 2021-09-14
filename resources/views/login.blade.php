@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                    <label for="exampleemail"> Email Address</label>
                    <input type="email" name="email" class="form-control" id= "exampleemail" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="password"> Password</label>
                    <input type="password" name="password" class="form-control" id= "password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>
@endsection