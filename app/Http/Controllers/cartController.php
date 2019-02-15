<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\product;
use App\category;
use App\customer;
use App\Order;
use Session;

class cartController extends Controller
{
    public function index(){


    	$category=category::all();

        return view('cart.home',compact('category'));
    }

    public function addToCart(Request $request ) {

      $ckbox=$request->ckbox;
      //dd($ckbox);
      if (count($ckbox)>0) {
      
      
      foreach ($ckbox as $id) {
         $product=product::find($id);

        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        
        $cart->add($product, $product->id,$request->$id); 

        $request->Session()->put('cart',$cart);
      }}
       
       //dd($request->session()->get('cart'));
    	return redirect()->route('cart.index');
    }

    public function getCart(){
     
       if (!Session::has('cart')) {
           return view('cart.bill_pad');
       }

   
       $oldCart = Session::get('cart');
       $cart = new Cart($oldCart);
       $totalPrice =$cart->totalPrice ; 
       $products=$cart->items;
      
       return view('cart.bill_pad',compact('products','totalPrice'));

    }

    public function update(Request $request,$id){

      $oldCart=Session::has('cart')?Session::get('cart'):null;
      $cart= new Cart($oldCart);
      $cart->update($id,$request->qty);


       if (count($cart->items) > 0) {
        Session::put('cart',$cart);
      }else {
        Session::forget('cart');
      }
      return redirect()->route('cart.viewCart');
    }

   public function delete($id){
      $oldCart=Session::has('cart')? Session::get('cart'): null;
      $cart=new Cart($oldCart);
      $cart->delete($id);
      if(count($cart->items)>0){
        Session::put('cart',$cart);
      }else{
        session::forget('cart');

      }
      return redirect()->route('cart.viewCart');
   }

   public function select_customer(){
    $customers=customer::all();
    return view('cart.customer_select',compact('customers'));
   }

   public function checkout_view($id){
    $cid=$id;
    //dd($cid);
 // return view('cart.checkout',compact($cid));
    return view('cart.checkout',['cid'=>$cid]);
   }


   public function save_order(Request $request){

  if (!Session::has('cart')) {
           return view('cart.bill_pad');
       }
        $this->validate($request,
            [
            'amount'=>'required|numeric',
         
            ]);
   
       $oldCart = Session::get('cart');
    
       $cart = new Cart($oldCart);

       $order= new Order();
       $order->cart=serialize($cart);
       $order->customer_id=$request->input('customer_id');
       $order->amount=$request->input('amount');
       $order->status=$request->input('status');
       
       $order->save();
       return view('body.dashboard');
     }
}
