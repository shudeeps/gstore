@extends('layouts.mmaster')

@section('ctitle')
cart
@endsection

@section('content')
<div class="content">
<div class="col-md-4"> 



  <table class="table table-hover" style="background-color: #ffffff">
        <tr>
            <th>No</th>
            
            <th>Name</th>
            <th>address</th>
             <th>Word No</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($customers as $customer)
    <tr>
        <td>{{ $customer->id}}</td>
        <td>{{ $customer->name}}</td>
        <td>{{ $customer->address}}</td>
           <td>{{ $customer->wordno}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('cart.checkout_view',$customer->id) }}">Add</a>
        </td>
    </tr>
    @endforeach
    </table>



</div>
</div>

@endsection