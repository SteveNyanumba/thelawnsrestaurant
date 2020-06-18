<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');

    }

    public function cart()
    {
        return view('user.cart');

    }

    public function contact()
    {
        return view('user.contact');
    }

    public function events()
    {
        return view('user.events');

    }

    public function blog()
    {
        return view('user.blog');

    }

    public function menu()
    {
        return view('user.menu');
    }
}
