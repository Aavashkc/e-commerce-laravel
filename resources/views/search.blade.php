@extends('master')      <!--wrapper to handle protocol-->
@section('content')
<div class="custom-search">
<div class="col-sm-4">
    <a href="#">Filter</a>
</div>
<div class="com-sm-4">
    <div class="trending-wrapper">
        <h3 style="text-align: center;margin-bottom:20px">Searched products</h3>
        @foreach ($products as $item)
        <div class="searched-item">
          <a href="detail/{{$item['id']}}">
         <img class='trending-img' src="{{$item['gallary']}}" class="d-block w-100" >
         <div>
           <h2>{{$item['name']}}</h2>
           <h5>{{$item['description']}}</h5>
          </a>
        </div>
        </div>
        @endforeach
</div>
</div>
</div>
    @endsection
