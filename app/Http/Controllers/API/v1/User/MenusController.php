<?php

namespace App\Http\Controllers\API\v1\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Str;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Menu::paginate(5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image|file|mimes:png,svg,jpg,jpeg,bmp|max:300',
            'price'=>'required',
            'category'=>'required'
        ]);
        $image = $request->file('image');
        if (isset($image)){
            $slug = Str::slug($request->title);
            $imagename = $slug.'.'.$image->getClientOriginalExtension();
            if(!file_exists('images/menus')){
                mkdir('images/menus');
            }
            $image->move('images/menus', $imagename);
        }else{
            $imagename = 'default.jpg';
        }

        $menuItem = new Menu();
        $menuItem->title = $request->title;
        $menuItem->description = $request->description;
        $menuItem->image = $imagename;
        $menuItem->price = $request->price;
        $menuItem->category = $request->category;
        $menuItem->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Menu::find($id);
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
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image|file|mimes:png,svg,jpg,jpeg,bmp|max:300',
            'price'=>'required',
            'category'=>'required'
        ]);
        $menuItem = Menu::find($id);
        $image = $request->file('image');
        if (isset($image)){
            $slug = Str::slug($request->title);
            $imagename = $slug.'.'.$image->getClientOriginalExtension();
            if(!file_exists('images/menu')){
                mkdir('images/menus');
            }
            $image->move('images/menus', $imagename);
        }else{
            $imagename = 'default.jpg';
        }

        $menuItem = new Menu();
        $menuItem->title = $request->title;
        $menuItem->description = $request->description;
        $menuItem->image = $request->image;
        $menuItem->price = $request->price;
        $menuItem->category = $request->category;
        $menuItem->save();

        return Response('Successfully Updated your Menu Item', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return Response('Successfully Deleted your Menu Item',200);
    }
}
