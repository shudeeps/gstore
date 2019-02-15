@extends('layouts.mmaster')

@section('ctitle')
Account Detail
@endsection

@section('content')

<div class="container">

<div class="well" style="width: 50%; height: 300px">
<strong>
<h3>ACcount Holder Info</h3>
  <div style="float: left;">
  <img src="../images/customer_images/{{$customers->image_file }}" alt="" style="width: 150px;height: 150px"> 
  </div>
  <div style="padding-left: 200px;">
     <ul>
    <li> Name-{{ $customers->name }}</li>
    <li> Contact No-{{ $customers->phone }}</li>
    <li> Address-{{ $customers->address }}</li>
    <li> Word No-{{ $customers->wordno }}</li>

</ul>
  </div>

 
   </strong>
   
 


  

</div>

<div class="col-md-6 col-md-offfset-2">
    <hr>
    <h2>
        Your transaction
    </h2>
    <?php $i=1; ?>
    @foreach($orders as $order)
<div class="panel panel-default">
  <div class="panel-body">
Bill no.{{$i++ }}<strong style="float: right;">Date  :{{$order['created_at']}}</strong>
 <ul class="list-group">

 <table class="table table-bordered">
<tr>
<th>Name</th>
<th>Rate</th>
<th>Quantity</th>
<th>Price</th>
</tr>
@foreach($order->cart->items as $item)



<tr>
    <td>{{   $item['item']['pro_name']}}</td>
    <td>{{  $item['item']['pro_price']  }}</td>
    <td>{{  $item['qty']    }}</td>
    <td>{{  $item['price']  }}</td>
</tr>

 
 
  

</ul>
@endforeach
</table>
  </div>
  <div class="panel-footer"><strong>Total amount : Rs.</strong>{{$order->cart->totalPrice}}
<strong style="float: right;">cash amount : Rs.{{$order['amount']}}</strong>
  </div>
</div>

   
      {{-- expr --}}
    @endforeach



</div>
</div>

@endsection