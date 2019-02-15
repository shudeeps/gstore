@extends('layouts.mmaster')

@section('ctitle')

 product 

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

<h3>Add products</h3>
    <div class="col-md-7">

     <div class="well">

 
 

 {!! Form::open(array('route' => 'product.store','files'=>true,'class'=>'form-horizontal')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

  <fieldset>
  <div class="form-group form-group-lg">


    <label class="col-sm-4 control-label" for="Product Code">Product Code</label>
    <div class="col-sm-8">
      <input class="form-control" type="text" id="pro_code" placeholder="" name="pro_code" >
    </div>

  </div>
   <div class="form-group form-group-lg">
       <label class="col-sm-4 control-label" for="formGroupInputLarge">Product Title</label>
    <div class="col-sm-8">
        <select name="category_id" class="form-control">
          @foreach($categories as $category)
       <option value="{{ $category->id}}">{{ $category->title }} </option>

          @endforeach
        </select>

    </div>
  </div>
   <div class="form-group form-group-lg">
    <label class="col-sm-4 control-label" for="pro_name">Product Name</label>
    <div class="col-sm-8">
      <input class="form-control" type="text" id="pro_name" placeholder="sawa"  name="pro_name" required="">
    </div>
  </div>
   <div class="form-group form-group-lg">
    <label class="col-sm-4 control-label" for="formGroupInputLarge">Product price</label>
    <div class="col-sm-8">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="" name="pro_price" required="">
    </div>
  </div>

  <div class="form-group form-group-lg">
    <label class="col-sm-4 control-label" for="formGroupInputLarge">Product Image</label>
    <div class="col-sm-8">
      <input class="form-control" type="file" id="formGroupInputLarge" placeholder="" name="pro_image">
    </div>
  </div>

<div class="form-group form-group-lg">
    <label class="col-sm-4 control-label" for="formGroupInputLarge">Product Quantity</label>
    <div class="col-sm-8">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="" name="pro_qty">
    </div>
  </div> 

 <div class="col-md-6"  style="float: right;">
          <button type="submit" class="btn btn-primary btn-lg active">Upload</button>
  </div>
  
  </fieldset>
   {!! Form::close() !!}
</div></div>









</div>




@endsection