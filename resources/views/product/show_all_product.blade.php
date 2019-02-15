@extends('layouts.mmaster')

@section('ctitle')

 product 

@endsection

@section('content')

 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>	list of products </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New product</a>
            </div>
        </div>
  
   
    <table class="table table-bordered" style="background-color: #ffffff;">
        <tr>
            <th>No</th>
            <th>Title</th>
           
            <th>Name</th>
             <th>price</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->category->title}}</td>

        <td>{{ $product->pro_name}}</td>
           <td>{{ $product->pro_price}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('product.show',$product->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $product->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
   
    </table>
 {!! $products->links() !!}

@endsection