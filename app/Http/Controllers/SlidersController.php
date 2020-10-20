<?php

namespace App\Http\Controllers;

use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Slider::all();
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
            'heading'=>'required',
            'short'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
            'category'=>'required'
        ]);

        $image = $request->file('image');
        if (isset($image)){
            $slug = Str::slug($request->title);
            $currdate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currdate.'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/sliders')){
                mkdir('images/sliders');
            }
            $image->move('images/sliders', $imagename);
        }else{
            $imagename = 'default.png';
        }

        $slider = new Slider();
        $slider->heading = $request->heading;
        $slider->short = $request->short;
        $slider->category = $request->category;
        $slider->image = $imagename;

        $slider->save();

        return response('Successfully Created a new Slider Item', 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Slider::find($id);
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
            'heading'=>'required',
            'short'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
            'category'=>'required'
        ]);

        $image = $request->file('image');
        if (isset($image)){
            $slug = Str::slug($request->title);
            $currdate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currdate.'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/sliders')){
                mkdir('images/sliders');
            }
            $image->move('images/sliders', $imagename);
        }else{
            $imagename = 'default.png';
        }

        $slider = Slider::find($id);
        $slider->heading = $request->heading;
        $slider->short = $request->short;
        $slider->category = $request->category;
        $slider->image = $imagename;

        $slider->save();

        return response('Successfully Updated a Slider Item', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::find($id)->delete();
        return response('Successfully Deleted a Slider Item');
    }
}
