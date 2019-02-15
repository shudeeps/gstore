@extends('layouts.master')



@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add user
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">adduser</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">


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
</div>
        

    <div class="well"  style="width: 700px;">
<div class="row">
     <div class="col-md-10">


    
   {!! Form::open(['action' => 'customerController@store','files'=>true,'class'=>'form-horizontal']) !!}

  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
       @include('customer.customer_add_form')
    {!! Form::close() !!}

</div>
</div>

</div>
    




  
@endsection