@extends('layouts.mmaster')

@section('ctitle')

cart
@endsection

@section('content')

 @foreach($category->chunk(3) as $categoryChunks)
 <div class="container">
    <div class="row">
        @foreach($categoryChunks as $category)

        <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
      
                <div class="caption">
                     <h3>{{$category->title}}
                        </h3>
                 
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
                                  
                                <input type="text" name="qty{{$name->id}}" size="4" value="1" >
                                </td>
                                <td>
                               
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">Add</span></button>
                                 </form>
                                </td>
                           </tr>
              

                                 @endforeach                    
                      </table>

                  
                </div>
            </div>
         </div>
        @endforeach
    </div>
    </div>
    @endforeach


@endsection