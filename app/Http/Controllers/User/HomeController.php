<?php

namespace App\Http\Controllers\User;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function menu()
    {
        return view('menu');
    }
    public function contactUs()
    {
        return view('contact-us');
    }
    public function events()
    {
        return view('events');
    }
    public function services()
    {
        return view('services');
    }



}
