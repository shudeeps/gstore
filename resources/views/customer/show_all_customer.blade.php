@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show all customer
        <small>table</small>
      </h1>
     
    </section>

    <!-- Main content -->



    <section class="content">
      <div class="row">
        <!-- left column -->


 			

          <!-- general form elements -->

 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>customer </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customer.create') }}"> Create New customer</a>
            </div>
        </div>
    

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
           <!-- <td><img src="images/customer_images/{{$customer->image_file}}" style="height: 200px;width: 200px;"></td> -->
        <td>{{ $customer->name}}</td>
        <td>{{ $customer->address}}</td>
           <td>{{ $customer->wordno}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('customer.show',$customer->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('customer.edit',$customer->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['customer.destroy', $customer->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
{!! $customers->links() !!}

     

@endsection