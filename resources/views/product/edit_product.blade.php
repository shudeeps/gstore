@extends('layouts.mmaster')

@section('ctitle')
Edit product
@endsection


@section('content')
<div class="panel-body">
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                   @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

<h3>Edit products</h3>
<div class="well" style="width: 700px;">

   <div class="row">
     <div class="col-md-10">

{!! Form::model($product, ['method' => 'PATCH','files'=>true,'class'=>'form-horizontal','route' => ['product.update', $product->id]]) !!}



@include('product.product_form')


 <div class="col-md-6"  style="float: right;">
          <button type="submit" class="btn btn-primary btn-lg active">Edit</button>
  </div>
  

   {!! Form::close() !!}
</div></div>

</div>
</div>


@endsection