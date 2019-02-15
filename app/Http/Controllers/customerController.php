<?php

namespace App\Http\Controllers;
use App\customer;
use App\Order;
use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=customer::paginate(4);
        return view('customer.show_all_customer',compact('customers'));   

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
          'email'=>'required',
            'phone'=>'required',
              'image_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            
        ]);




        $input = $request->all();
        $input['image_file'] = time().'.'.$request->image_file->getClientOriginalExtension();
        $request->image_file->move(public_path('images/customer_images'), $input['image_file']);

        customer::create($input);
      
         return redirect()->route('customer.index')
                        ->with('success','user added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $customer= customer::find($id);

         $orders=customer::find($id)->orders;
         $orders=$orders->sortByDesc('created_at');

         $orders->transform(function($order,$key){
            $order->cart=unserialize($order->cart);
            return $order;

         });

//dd($orders);
        return view('customer.show',['orders'=>$orders,'customers'=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $customer= customer::find($id);
        return view('customer.editcustomer',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

         
           
        ]);


         $input = $request->all();
         if ($request->hasFile('image_file')) {
    

        $input['image_file'] = time().'.'.$request->image_file->getClientOriginalExtension();
        $request->image_file->move(public_path('images/customer_images'), $input['image_file']);
}
        customer::find($id)->update($input);
        return redirect()->route('customer.index')
                        ->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         customer::find($id)->delete();
        return redirect()->route('customer.index')
                        ->with('success','user deleted successfully');
    }
}
