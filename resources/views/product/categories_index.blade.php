@extends('layouts.mmaster')

@section('ctitle')

 Categories 

@endsection

@section('content')

 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>	list of categories </h2>
            </div>
        
        </div>
  
   <div class="col-md-7">
    <table class="table table-bordered" style="background-color: #ffffff;">
        <tr>
            <th>Id</th>
            <th>Title</th>
    
            <th width="280px">Action</th>
        </tr>
    @foreach ($categories as $category)
    <tr>
        <td>{{ $category->id}}</td>
        <td>{{ $category->title}}</td>

       
     
        <td>
            <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $category->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
   
    </table>
</div>



 <div class="col-md-4">

<div class="well">

<h2>Add title</h2>

 {!! Form::open(array('route' => 'category.store','files'=>true,'class'=>'form-horizontal')) !!}
                {!! csrf_field() !!}
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Title</label>
                        <div class="col-md-9">
                            <input id="title" name="title" type="text" placeholder="Eg chamal" class="form-control input-md" required="">

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Image</label>
                        <div class="col-md-9">
                            <input id="title" name="image" type="file"  class="form-control input-md" >

                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-success">Insert</button>
                        </div>
                    </div>

                </fieldset>
   {!! Form::close() !!}
         </div>  </div>


@endsection