@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
     
    </section>

    <!-- Main content -->



    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

 			

          <!-- general form elements -->


          @if($action=='add')


			  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> add</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{URL::to('/destination',['action'=>'add'])}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="value1">value1</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="value2">value2</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" >
                </div>
               
                </div>
             
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">add</button>
              </div>
            </form>
          </div>

			
          
        
		@elseif($action=='list')


	

			  <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> list</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{URL::to('/destination',['action'=>'list'])}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="value1">value1</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="value2">value2</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" >
                </div>
               
                </div>
             
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">list</button>
              </div>
            </form>
          </div>
			


			@endif





@endsection