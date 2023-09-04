@extends('master')      <!--wrapper to handle protocol-->
@section('content')
<div class="container details">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallary']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a style="background-color:rgb(82, 146, 160)" href="/">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>Descriptions: {{$product['description']}}</h4>
            <h4>Category: {{$product['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br>
            <button class="btn btn-success">Buy now</button>
            <br><br>
        </div>
    </div>
</div>
    @endsection
