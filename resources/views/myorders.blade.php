@extends('master')      <!--wrapper to handle protocol-->
@section('content')
<div class="custom-products">
<div class="com-sm-10">
    <div class="trending-wrapper">
        <div style="text-align: center">

            <h3>My orders</h3>
        </div>
        @foreach ($orders as $item)
        <div class="row searched-item cart-list-divider">
          <div class="col-sm-4">
            <a href="detail/{{$item->id}}">
                <img class='trending-img' src="{{$item->gallary}}">
                 </a>
        </div>
        <div class="col-sm-4">
            
                  <h2>Name: {{$item->name}}</h2>
                  <h5>Delivery status: {{$item->status}}</h5>
                  <h5>Address : {{$item->address}}</h5>
                  <h5>Payment Status:  {{$item->payment_status}}</h5>
                  <h5>Payment method : {{$item->payment_method}}</h5>
                 
        </div>
        </div>
        @endforeach
</div>
</div>
</div>
    @endsection
