<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Order;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index()
    {
        return view('user.cart');
    }
    public function getAddToCart(Request $request, $id)
    {
        $menu = Menu::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Order($oldCart);
        $cart->add($menu, $menu->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('menu');

    }
}
