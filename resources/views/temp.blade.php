<li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">


            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">  </span>
            </a>
           
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              


            </ul>
          </li>

<strong>Customer Name:</strong>  {{$customer->name}}<br>
<strong>Customer Address:</strong>{{$customer->address}}<br>
<strong>Customer Word no:</strong>{{$customer->wordno}}<br>

<style>
#myDIV {
   
    padding: 50px 0;
    background-color: lightblue;
    margin-top:20px;
}

.myDIV1 {
   
    padding: 50px 0;
    background-color: lightblue;
    margin-top:20px;
}
</style>

	@section('content')



			
	      <div class="col-sm-4 col-md-4">
	         <div class="thumbnail">


<a href="#"  onclick="myFunction()"><div >sadfgg</div></a>


<div  class="myDIV1" id="myDIV" style="display: none;">
gwg
</div>

	</div></div>


 <div class="col-sm-4 col-md-4">
             <div class="thumbnail">


<a href="#"  onclick="myFunction()"><div >sadfgg</div></a>


<div  class="myDIV1" id="myDIV" style="display: none;">
gwg
</div>

    </div></div>






<script>
function myFunction() {
    var x = document.getElementById('myDIV');

    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</script>










<table>
   <tr>
      <td>
         <div style="border: 1px solid blue; background-color: #99CCFF; padding: 5px;">
            <a id="myHeader1-2" href="javascript:showonlyonev2('newboxes1-2');" >toggle</a>
         </div>
         <div class="newboxes-2" id="newboxes1-2" style="border: 1px solid black; background-color: #CCCCCC; display: block;padding: 5px;">Div #1</div>
      </td>
      <td>
         <div style="border: 1px solid blue; background-color: #99CCFF; padding: 5px;">
            <a id="myHeader2-2" href="javascript:showonlyonev2('newboxes2-2');" >toggle</a>
         </div>
         <div class="newboxes-2" id="newboxes2-2" style="border: 1px solid black; background-color: #CCCCCC; display: none;padding: 5px;">Div #2</div>
      </td>
      <td>
         <div style="border: 1px solid blue; background-color: #99CCFF; padding: 5px;">
            <a id="myHeader3-2" href="javascript:showonlyonev2('newboxes3-2');" >toggle</a>
         </div>
         <div class="newboxes-2" id="newboxes3-2" style="border: 1px solid black; background-color: #CCCCCC; display: none;padding: 5px;">Div #3</div>
      </td>
   </tr>
</table>




function showonlyonev2(thechosenone) {
      var newboxes = document.getElementsByTagName("div");
      for(var x=0; x<newboxes.length; x++) {
            name = newboxes[x].getAttribute("class");
            if (name == 'newboxes-2') {
                  if (newboxes[x].id == thechosenone) {
                        if (newboxes[x].style.display == 'block') {
                              newboxes[x].style.display = 'none';
                        }
                        else {
                              newboxes[x].style.display = 'block';
                        }
                  }else {
                        newboxes[x].style.display = 'none';
                  }
            }
      }
}






<table>
   <tr>
      <td>
         <div style="border: 1px solid blue; background-color: #99CCFF; padding: 5px;">
            <a id="myHeader1" href="javascript:showonlyone('newboxes1');" >collapse</a>
         </div>
         <div class="newboxes" id="newboxes1" style="border: 1px solid black; background-color: #CCCCCC; display: block;padding: 5px;">Div #1</div>
      </td>
      <td>
         <div style="border: 1px solid blue; background-color: #99CCFF; padding: 5px;">
            <a id="myHeader2" href="javascript:showonlyone('newboxes2');" >collapse</a>
         </div>
         <div class="newboxes" id="newboxes2" style="border: 1px solid black; background-color: #CCCCCC; display: none;padding: 5px;">Div #2</div>
      </td>
      <td>
         <div style="border: 1px solid blue; background-color: #99CCFF; padding: 5px;">
            <a id="myHeader3" href="javascript:showonlyone('newboxes3');" >collapse</a>
         </div>
         <div class="newboxes" id="newboxes3" style="border: 1px solid black; background-color: #CCCCCC; display: none;padding: 5px;">Div #3</div>
      </td>
   </tr>
</table>

new



<?php $i=0; ?>

 
 @foreach($category->chunk(3) as $categoryChunks)
 <div class="container">
    <div class="row">
        @foreach($categoryChunks as $category)

 <div class="col-sm-4 col-md-4">
            <div class="thumbnail">


  <div class="caption">
    
            <a id="myHeader{{$i}}" href="javascript:showonlyone('newboxes{{$i}}');" ><h3>{{$category->title}}</h3></a>
         
         <div class="newboxes" id="newboxes{{$i}}" style=" display: none;">

 <table class="table table-condensed">
                            <tr>
                              <th>name</th>
                              <th>price</th>
                              <th>qty</th>
                              <th>action</th>
                         </tr>
                           @foreach($category->product as $name)


                            <tr>
                                <td>  {{$name->pro_name}}</td>
                                <td> Rs.{{$name->pro_price}}</td>
                                <td>
                                <form action="{{  route('cart.addToCart',['id'=>$name->id])  }}">
                                  
                                <input type="text" name="qty" size="4" value="1" >
                                </td>
                                <td>
                               
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">Add</span></button>
                                 </form>
                                </td>
                           </tr>
              

                                 @endforeach                    
                      </table>




         </div>
    <?php $i++; ?>
</div></div>   
  </div>

@endforeach

</div>
</div>
@endforeach


<script type="text/javascript">
    
   function showonlyone(thechosenone) {
      var newboxes = document.getElementsByTagName("div");
            for(var x=0; x<newboxes.length; x++) {
                  name = newboxes[x].getAttribute("class");
                  if (name == 'newboxes') {
                        if (newboxes[x].id == thechosenone) {
                           
                        newboxes[x].style.display = 'block';
                  }
                  else {
                        newboxes[x].style.display = 'none';
                  }
            }
      }
}



</script>