@extends('master')      <!--wrapper to handle protocol-->
@section('content')
<div class="container custom-login">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-3 col-sm-offset-4">
      <form action="register" method="POST">
          @csrf
          <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="name" class="form-control" placeholder="Username" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3 ">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>
</div>
    @endsection
