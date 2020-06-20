<?php

namespace App\Http\Controllers;

use App\Photos;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function logoStore(Request $request)
    {
        $this->validate($request, [
            'logo'=>'required|mimes:png,svg|max:300'
        ]);
        $image = $request->file('logo');
        if (isset($image)) {
            $imagename = 'logo.png';
            if (!file_exists('images') ) {
                mkdir('images', 0777, true);
            }
            $image->move('images', $imagename);
        }
        return [
            'msg'=>'You have successfully changed your logo'
        ];
    }

    public function backgroundOne(Request $request)
    {
        $this->validate($request, [
            'bg_1'=>'required|mimes:jpg,jpeg|max:1500'
        ]);
        $image = $request->file('bg_1');
        if (isset($image)) {
            $imagename = 'bg_1.jpg';
            if (!file_exists('images') ) {
                mkdir('images', 0777, true);
            }
            $image->move('images', $imagename);
        }
        return [
            'success'=>'You have successfully changed your Main Background Image'
        ];

    }
    public function backgroundTwo(Request $request)
    {
        $this->validate($request, [
            'bg_2'=>'required|mimes:jpg,jpeg|max:1500'
        ]);
        $image = $request->file('bg_2');
        if (isset($image)) {
            $imagename = 'bg_2.jpg';
            if (!file_exists('images') ) {
                mkdir('images', 0777, true);
            }
            $image->move('images', $imagename);
        }
        return [
            'msg'=>'You have successfully changed your Second Background Image'
        ];

    }
    public function backgroundThree(Request $request)
    {
        $this->validate($request, [
            'bg_3'=>'required|mimes:jpg,jpeg|max:1500'
        ]);
        $image = $request->file('bg_3');
        if (isset($image)) {
            $imagename = 'bg_3.jpg';
            if (!file_exists('images') ) {
                mkdir('images', 0777, true);
            }
            $image->move('images', $imagename);
        }
        return [
            'msg'=>'You have successfully changed your Third Background Image'
        ];

    }
    public function backgroundFour(Request $request)
    {
        $this->validate($request, [
            'bg_4'=>'required|mimes:jpg,jpeg|max:1500'
        ]);
        $image = $request->file('bg_4');
        if (isset($image)) {
            $imagename = 'bg_4.jpg';
            if (!file_exists('images') ) {
                mkdir('images', 0777, true);
            }
            $image->move('images', $imagename);
        }
        return [
            'msg'=>'You have successfully changed your Fourth Background Image'
        ];

    }
    public function testimonial(Request $request)
    {
        $this->validate($request, [
            'testimonial'=>'required|mimes:jpg,jpeg|max:1500'
        ]);
        $image = $request->file('testimonial');
        if (isset($image)) {
            $imagename = 'testimonial.jpg';
            if (!file_exists('images') ) {
                mkdir('images', 0777, true);
            }
            $image->move('images', $imagename);
        }
        return [
            'msg'=>'You have successfully changed your Testimonials Background Image'
        ];

    }
}
