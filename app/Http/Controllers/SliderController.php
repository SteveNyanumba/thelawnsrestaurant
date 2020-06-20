<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function newSlider(Request $request)
    {
        $this->validate($request, [
            'heading_1'=>'required',
            'heading_2'=>'required',
            'image'=>'required|mimes:jpg,jpeg,bmp'
        ]);

        $slider = new Slider();
        $slider->heading_1 = $request->heading_1;
        $slider->heading_2 = $request->heading_2;
        $slider->image = $request->image;
        $slider->save();

        return ['msg'=>'Successfully Created your new Slider'];
    }
}
