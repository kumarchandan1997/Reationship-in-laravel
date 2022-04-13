<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory=Subcategory::where('flag','0')->with('category')->get();
        // dd($subcategory);
        return view('backend.subcategory.index',compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subcategory::create([
            'category_id'   => $request->category_id,
            'slug_name'     => $request->slug_name,
            'des'           => $request->des,
            'subcategory_name' => $request->subcategory_name,
        ]);
        return redirect('subcategory_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory ,$id)
    {
        $subcategory=Subcategory::find($id);
        return view('backend.subcategory.show',compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory ,$id)
    {
        $categories = Category::all();
        $subcategory=Subcategory::find($id);
        return view('backend.subcategory.edit',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory ,$id)
    {
        $subcategory=Subcategory::find($id);
        // $subcategory->category_name=$request->input('category_name');
        $subcategory->slug_name=$request->input('slug_name');
        $subcategory->des=$request->input('des');
        $subcategory->subcategory_name=$request->input('subcategory_name');
        $subcategory->save();
        return redirect('subcategory_index')->with('status','Subcategory Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory ,$id)
    {
        $subcategory = Subcategory::find($id);
        
        $subcategory->delete();
        return redirect()->back()->with('status','Vacancy Image Deleted Successfully');
    }
}
