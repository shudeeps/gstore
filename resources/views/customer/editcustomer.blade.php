@extends('layouts.master')



@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit user
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
  <div class="row">
      
     <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </div>
        </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


   
   <div class="well" style="width: 700px;">
   <div class="row">
     <div class="col-md-10">
    

    {!! Form::model($customer, ['method' => 'PATCH','files'=>true,'class'=>'form-horizontal','route' => ['customer.update', $customer->id]]) !!}

        @include('customer.customer_add_form')

    {!! Form::close() !!}

    </div>
    </div>

     </div>



@endsection