<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group form-group-lg">
 {!! Form::label('pro_name', 'Product code:',['class'=>'col-sm-4 control-label']) !!}
   <div class="col-sm-8">
 {!! Form::text('pro_name',null, ['class' => 'form-control']) !!}
 </div>
</div>


<div class="form-group form-group-lg">
 {!! Form::label('pro_title', 'Product title:',['class'=>'col-sm-4 control-label']) !!}
<div class="col-sm-8">
 {!! Form::text('pro_title', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('pro_name', 'Product name:',['class'=>'col-sm-4 control-label']) !!}
<div class="col-sm-8">

 {!! Form::text('pro_name', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('pro_price', 'Product price:',['class'=>'col-sm-4 control-label']) !!}
<div class="col-sm-8">

 {!! Form::text('pro_price', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('pro_image', 'Upload image:',['class'=>'col-sm-4 control-label']) !!}
 <div class="col-sm-8">
 {!!  Form::file('pro_image', null, ['class' => 'form-control']); !!}
</div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('pro_qty', 'Product Quantity:',['class'=>'col-sm-4 control-label']) !!}
 <div class="col-sm-8">
 {!! Form::text('pro_qty', null, ['class' => 'form-control']) !!}
</div>
</div>

