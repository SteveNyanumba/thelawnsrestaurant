<?php

namespace App\Http\Controllers;

use App\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return $menu;
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'image'=>'required|mimes:jpg,jpeg,png,bmp',
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'category'=>'required'
        ]);
        $image = $request->file('image');
        if (isset($image)) {
            $date = Carbon::now()->toDateString();
            $imagetitle = Str::slug($request->title);
            $ext = $image->getClientOriginalExtension();
            $imagename = $imagetitle.'-'.$date.'.'.$ext;
            if(!fileExists('images/menu')){
                mkdir('images/menu');
            }
            $image->move('images/menu', $imagename);
        }else{
            $imagename = 'default.png';
        }
        $menu = new Menu();
        $menu->image = $imagename;
        $menu->title = $request->title;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->category = $request->category;
        $menu->save();

        return [
            'msg'=>'Successfully Created a New Menu Item!',
            'success'=>true
        ];
    }
}
