<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Category;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $products=product::paginate(3);
      // return view('product.show_all_product',compact('products'));
        // return view('product.add_product');


         return view('product.show_all_product')
        ->with('products', product::paginate(6));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories=category::all();
        return view('product.add_product')->withcategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,
            [
            'pro_name'=>'required',
         
              'pro_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
              'pro_price'=>'required',
            ]);
         $input=$request->all();
         $input['pro_image'] = time().''.$request->pro_image->getClientOriginalExtension();
        $request->pro_image->move(public_path('images/product_images'), $input['pro_image']);
        product::create($input);
         return redirect()->route('product.index')
                        ->with('success','product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product=product::find($id);
       return view('product.edit_product',compact('product'));
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
        $this->validate($request,[

            ]);

         $input = $request->all();
      if ($request->hasFile('pro_image')) {
    
        $input['pro_image'] = time().'.'.$request->pro_image->getClientOriginalExtension();
        $request->pro_image->move(public_path('images/product_images'), $input['pro_image']);
         }
        product::find($id)->update($input);
               return redirect()->route('product.index')
                        ->with('success','product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       product::find($id)->delete();
       return redirect()->route('product.index')->
       with('success','product deleted sucessfully');
    }

    public function postCheckout(){
        
    }
}
