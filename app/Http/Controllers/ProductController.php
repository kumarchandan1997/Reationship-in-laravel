<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return view('backend.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $product=new Product;
     $product->product_name=$request->input('product_name');
     $product->slag=$request->input('slag');
     $product->des=$request->input('des');
     $product->short_des=$request->input('short_des');

     if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('product/image/', $filename);
            $product->image = $filename;
        }
        $product->meta_title=$request->input('meta_title');
        $product->meta_des=$request->input('meta_des');
        $product->meta_keyword=$request->input('meta_keyword');
        $product->og_title=$request->input('og_title');
        if($request->hasfile('og_image'))
        {
            $file = $request->file('og_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('product/og_image/', $filename);
            $product->og_image = $filename;
        }
        $product->save();
        return redirect('product_index')->with('status','Product data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product ,$id)
    {
        $product=Product::find($id);
        return view('backend.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product ,$id)
    {
        $product = Product::find($id);
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product ,$id)
    {
        $product =Product::find($id);
        // $product->product_name = $request->input('product_name');
        // $product->slag=$request->input('slag');
        // $product->des=$request->input('des');
        // $product->short_des=$request->input('short_des');
        $product->product_name = $request->input('product_name');
        $product->slag = $request->input('slag');
        $product->des = $request->input('des');
        $product->short_des = $request->input('short_des');
   
        if($request->hasfile('image'))
           {
            $destination = 'product/image/'.$product->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

               $file = $request->file('image');
               $extention = $file->getClientOriginalExtension();
               $filename = time().'.'.$extention;
               $file->move('product/image/', $filename);
               $product->image = $filename;
           }
           $product->meta_title = $request->input('meta_title');
           $product->meta_des = $request->input('meta_des');
           $product->meta_keyword = $request->input('meta_keyword');
           $product->og_title = $request->input('og_title');
           if($request->hasfile('og_image'))
           {
            $destination = 'product/og_image/'.$product->og_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
             
               $file = $request->file('og_image');
               $extention = $file->getClientOriginalExtension();
               $filename = time().'.'.$extention;
               $file->move('product/og_image/', $filename);
               $product->og_image = $filename;
           }
           $product->update();
        return redirect('product_index')->with('status','Blog Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product ,$id)
    {
        $product = Product::find($id);
        $destination = 'product/image/'.$product->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $product->delete();
        return redirect()->back()->with('status','Product Image Deleted Successfully');
    }
}
