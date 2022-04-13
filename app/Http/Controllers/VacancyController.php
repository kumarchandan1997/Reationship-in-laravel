<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancy=Vacancy::all();
        return view('backend.vacancy.index',compact('vacancy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancy=new Vacancy;
        $vacancy->name=$request->input('name');
        $vacancy->no_vacancy=$request->input('no_vacancy');
        $vacancy->des=$request->input('des');
        
   
        if($request->hasfile('image'))
           {
               $file = $request->file('image');
               $extention = $file->getClientOriginalExtension();
               $filename = time().'.'.$extention;
               $file->move('vacancy/image/', $filename);
               $vacancy->image = $filename;
           }
           $vacancy->save();
        return redirect('vacancy_index')->with('status','Vacancy data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy ,$id)
    {
        $vacancy=Vacancy::find($id);
        return view('backend.vacancy.show',compact('vacancy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $vacancy ,$id)
    {
        $vacancy=Vacancy::find($id);
        return view('backend.vacancy.edit',compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy ,$id)
    {
        $vacancy=Vacancy::find($id);
        $vacancy->des=$request->input('name');
        $vacancy->no_vacancy=$request->input('no_vacancy');
        $vacancy->des=$request->input('des');
        
   
        if($request->hasfile('image'))
           {
            $destination = 'vacancy/image/'.$vacancy->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

               $file = $request->file('image');
               $extention = $file->getClientOriginalExtension();
               $filename = time().'.'.$extention;
               $file->move('vacancy/image/', $filename);
               $vacancy->image = $filename;
           }
           $vacancy->update();
        return redirect('vacancy_index')->with('status','Vacancy Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy ,$id)
    {
        $vacancy = Vacancy::find($id);
        $destination = 'vacancy/image/'.$vacancy->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $vacancy->delete();
        return redirect()->back()->with('status','Vacancy Image Deleted Successfully');
    }
}
