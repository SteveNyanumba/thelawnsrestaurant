<?php

namespace App\Http\Controllers;

use App\SliderCategory;
use Illuminate\Http\Request;

class SliderCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SliderCategory::all();
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
            'category'=>'required'
        ]);
        $category = new SliderCategory();
        $category->category = $request->category;
        $category->save();

        return response('Successfully Created a new Slider Category', 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SliderCategory  $sliderCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SliderCategory $sliderCategory)
    {
        return $sliderCategory;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SliderCategory  $sliderCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SliderCategory $sliderCategory)
    {
        $this->validate($request, [
            'category'=>'required'
        ]);
        $category = SliderCategory::find($sliderCategory);
        $category->category = $request->category;
        $category->save();

        return response('Successfully Updated your Slider Category', 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SliderCategory  $sliderCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SliderCategory $sliderCategory)
    {
        $sliderCategory->delete();
        return response('Successfully Deleted your Slider Category');
    }
}
