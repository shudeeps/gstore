@extends('layouts.mmaster')

@section('ctitle')
cart
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

<h3>Check Out</h3>
    <div class="col-md-4">

     <div class="well">
 


 {!! Form::open(array('route' => 'cart.save','files'=>true,'class'=>'form-horizontal')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="customer_id" value="{{$cid}}">

  <fieldset>
  <div class="form-group form-group-md">


    <label class="col-sm-4 control-label" for="amount">Amount</label>
    <div class="col-sm-8">
      <input class="form-control" type="text" id="amount" placeholder="" name="amount" >
    </div>

  </div>
  
   <div class="form-group form-group-md">
    <label class="col-sm-4 control-label" for="status">Status</label>
    <div class="col-sm-8">
      <select name="status">
      	<option value="y">All Delivered </option>
      	<option value="n"> Not Delivered</option>
      </select>
    </div>
  </div>
  

 <div class="col-md-6"  style="float: right;">
          <button type="submit" class="btn btn-primary btn-lg active">Save</button>
  </div>
  
  </fieldset>
   {!! Form::close() !!}
</div></div>









</div>



@endsection
