@extends('layouts.mmaster')

@section('ctitle')
cart
@endsection

@section('content')

<div class="col-md-12"> 

 @if(Session::has('cart'))
<?php  $i = 1; ?>

   <div class="col-md-7">
<table class="table table-bordered" style="background-color: #ffffff;">
        <tr>
            <th>No</th>
            <th>Name</th>
             <th>Rate</th>
             <th>Quantity</th>
             <th>Price</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($products as $product)
    <tr>
    	<td>{{$i++}}</td>
       <td>{{$product['item']['pro_name']}}</td>
          <td>{{$product['item']['pro_price']}}</td>
                              <td>
                                <form action="{{  route('cart.update',['id'=>$product['item']['id']])  }}">
                                <input type="text" name="qty" size="4" value="{{ $product['qty']}}" >
                                </td>
                               
       
        <td>{{ $product['price']}}</td>   
        <td>
                <button type="submit" name="update" class="btn btn-info">Update</button>
                </form>
         <a class="btn btn-danger" href="{{ route('cart.delete',['id'=>$product['item']['id']])}}">Delete</a>
        </td>    
         </tr>

                     @endforeach

               </table>
   


        <div class="row">
           <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                 <strong>Total: Rs. {{$totalPrice}}</strong>
           </div>
        </div>
           <hr>
        <div class="row">
           <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
             <a href="{{route('cart.select_customer')}}" type="button" class="btn btn-success">Checkout</a>
           </div>
        </div>

        </div>
<div class="col-md-4">
  <div class="well">
    <form class="form-controll">
    <label for="pro_code" class="form-controll">Code</label>
    <input type="text" name="pro_code" class="form-controll">
    <input type="submit" name="submit">
      
    </form>

  </div>
</div>





     @else
     <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <h2 class="title-page">No Items In the Cart!</h2>
        </div>
     </div>
     @endif

    


</div>
@endsection