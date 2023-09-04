@extends('master')      <!--wrapper to handle protocol-->
@section('content')
<div class="custom-products">
<div class="com-sm-10">
    <div class="trending-wrapper">
        <div style="text-align: center">

            <h3>Cart products</h3>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
        </div>
        @foreach ($products as $item)
        <div class="row searched-item cart-list-divider">
          <div class="col-sm-4">
            <a href="detail/{{$item->id}}">
                <img class='trending-img' src="{{$item->gallary}}">
                 </a>
        </div>
        <div class="col-sm-4">
            <a href="detail/{{$item->id}}">
                  <h2>{{$item->name}}</h2>
                  <h5>{{$item->description}}</h5>
                 </a>
        </div>
        <div class="col-sm-4">
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
        </div>
        </div>
        @endforeach
</div>
</div>
</div>
    @endsection
