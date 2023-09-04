@extends('master')      <!--wrapper to handle protocol-->
@section('content')
<div class="custom-products">
<div class="com-sm-10">
    <table class="table">
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Amount</td>
            <td>${{$total}}</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Tax</td>
            <td>$ 0</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Delivery charges</td>
            <td>$ 10</td>
          </tr>
            <th scope="row">3</th>
            <td>Total</td>
            <td>
               $ {{$total+10}}
            </td>
          </tr>
        </tbody>
      </table>
      <div>
        <form action="/orderplace" method="POST">
          @csrf
            <div class="form-group">
              <textarea class="form-control"  name='address' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your address"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">payment method</label><br>
              <input type="radio" value="cash" name="payment"><span>Online Payment</span><br>
              <input type="radio" value="cash" name="payment"><span>On delivery</span><br>
              <input type="radio" value="cash" name="payment"><span>Khalti</span><br>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
      </div>
</div>
</div>
    @endsection
