<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\product;
use DB;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=category::all();

        return view('product.categories_index')->withcategories($categories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'title'=>'required',
              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);

        $input=$request->all();
         $input['image'] = time().''.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/category_images'), $input['image']);

        category::create($input);
          return redirect()->route('category.index')
                ->with('success','product title/categoty added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$products=product::find($id)->get();
       //$products=product::paginate(8);
         // $products=product::all();

               // $products = product::where('category_id', $id);

            // $products = DB::table('products')->get();


      // rr $products = DB::table('products')->where('category_id',$id)->get();

        $products=Category::find($id)->product;
   //$products = DB::table('products')->pluck('category_id');

        //dd($products);
       return view('product.show_categories',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         category::find($id)->delete();
       return redirect()->route('category.index')->
       with('success','category deleted sucessfully');
    }
}
