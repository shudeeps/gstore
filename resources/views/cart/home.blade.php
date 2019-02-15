	@extends('layouts.mmaster')

	@section('ctitle')

	list of product
	@endsection



@section('content')

<style>

/* Grow */

.hvr-grow:hover
 {
    
    transform: scale(1.7);
    cursor: pointer;
    color: green;
  

}
input[type=checkbox] {
  transform: scale(1.5);
  width: 20px;
  height: 20px;
    cursor: pointer;
     -ms-transform: scale(2); /* IE */
 -moz-transform: scale(2); /* FF */
 -webkit-transform: scale(2); /* Safari and Chrome */
 -o-transform: scale(2); /* Opera */
  padding: 10px;
}

.myDIV {
   
    padding: 50px 0;
    background-color: lightblue;
    margin-top:20px;
}
</style>

   @section('content')

<?php $i=1; ?>

 @foreach($category->chunk(3) as $categoryChunks)
 <div class="container">
    <div class="row">
              @foreach($categoryChunks as $category)
         <div class="col-sm-4 col-md-4">
         
           <a onclick="  myFunction('{{$i}}')"> 
            <div class="thumbnail">
            
                     <h4 class="hvr-grow" style="text-align: center; ">{{$category->title}}
                        </h4>

                        </a>


                             <div  id="{{$i}}" style="display: none;">
                             <table class="table table-hover">
                            <tr>
                              <th>name</th>
                              <th>price</th>
                              <th>qty</th>
                              <th>ckbox</th>
                              </tr>
                           
                           @foreach($category->product as $name)

                            <tr>
                                <td> {{$name->pro_name}}</td>
                                <td> Rs.{{$name->pro_price}}</td>
                                <td>
                                <form action="{{  route('cart.addToCart')  }}">
                                  
                                <input type="text" name="{{$name->id}}" size="4" value="1" >
                                </td>
                                <td>
                               <input type="checkbox" name="ckbox[]" value="{{$name->id}}">
                               </td> 
                           </tr>
                         
                                 @endforeach
                                 
              
                                   </table>      
                     
                 <div style="padding-left: 150px; padding-bottom: 20px;">
                  <button  type="submit" class="btn btn-primary btn-lg active"><span class="glyphicon glyphicon-shopping-cart"        aria-hidden="true">Add
                    </span>
                        </button>
                    </div>
                  </form>
    
                 </div>

                <?php $i++; ?>
                   </div>
                 </div>
                      @endforeach
                       </div>
                         </div>
                      @endforeach





                              <script language="javascript" type="text/javascript">
                              function myFunction(id) {
                                  var x = document.getElementById(id);
                                  if (x.style.display === 'none') {
                                      x.style.display = 'block';
                                  } else {
                                      x.style.display = 'none';
                                  }
                              }
                              </script>






	@endsection