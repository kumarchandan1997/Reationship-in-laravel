<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::all();
        return view('backend.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider=new Slider;
        $slider->des=$request->input('des');
        $slider->short_des=$request->input('short_des');
        $slider->slider_alt=$request->input('slider_alt');
   
        if($request->hasfile('image'))
           {
               $file = $request->file('image');
               $extention = $file->getClientOriginalExtension();
               $filename = time().'.'.$extention;
               $file->move('slider/image/', $filename);
               $slider->image = $filename;
           }
           $slider->save();
        return redirect('slider_index')->with('status','Product data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider ,$id)
    {
        $slider=Slider::find($id);
        return view('backend.slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider ,$id)
    {
        $slider=Slider::find($id);
        return view('backend.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider ,$id)
    {
        $slider =Slider::find($id);
        $slider->des = $request->input('des');
        $slider->short_des = $request->input('short_des');
        $slider->slider_alt = $request->input('slider_alt');
   
        if($request->hasfile('image'))
           {
            $destination = 'slider/image/'.$slider->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

               $file = $request->file('image');
               $extention = $file->getClientOriginalExtension();
               $filename = time().'.'.$extention;
               $file->move('slider/image/', $filename);
               $slider->image = $filename;
           }
        
           
           $slider->update();
        return redirect('slider_index')->with('status','Blog Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider ,$id)
    {
        $slider = Slider::find($id);
        $destination = 'slider/image/'.$slider->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $slider->delete();
        return redirect()->back()->with('status','Product Image Deleted Successfully');
    }
}
