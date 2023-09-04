<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
  $total=ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/">Home</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="myorders">Orders</a>
        </li>
         
      </ul>
      <form action="/search" class="d-flex navbar-left" role="search">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav navbar-right">
      <li class="nav-item">
          <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
        </li> 
        @if(Session::has('user'))
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['name']}}
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </div>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li> 
        <li>
          <a class="nav-link" href="/register">Register</a>

        </li>
        @endif

</ul>

    </div>
  </div>
</nav>