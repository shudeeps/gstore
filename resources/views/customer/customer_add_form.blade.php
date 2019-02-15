<div class="form-group form-group-lg">
 {!! Form::label('name', 'Name:',['class'=>'col-sm-4 control-label']) !!}
   <div class="col-sm-8">
 {!! Form::text('name',null, ['class' => 'form-control']) !!}
 </div>
</div>


<div class="form-group form-group-lg">
 {!! Form::label('email', 'Email:',['class'=>'col-sm-4 control-label']) !!}
<div class="col-sm-8">
 {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('phone', 'Phone:',['class'=>'col-sm-4 control-label']) !!}
<div class="col-sm-8">

 {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('image', 'Upload image:',['class'=>'col-sm-4 control-label']) !!}
 <div class="col-sm-8">
 {!!  Form::file('image_file'); !!}
</div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('address', 'address:',['class'=>'col-sm-4 control-label']) !!}
 <div class="col-sm-8">
 {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('wordno', 'word no:',['class'=>'col-sm-4 control-label']) !!}
 <div class="col-sm-8">
 {!! Form::text('wordno', null, ['class' => 'form-control']) !!}
</div>
</div>


<div class="col-md-6"  style="float: right;">
{!!    Form::submit('submit',['class'=>'btn btn-primary btn-lg active '	]);  !!}
</div>
