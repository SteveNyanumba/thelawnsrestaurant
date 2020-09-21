<?php

namespace App\Http\Controllers;

use App\FoodCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FoodCategory::all();
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

        $category = new FoodCategory();
        $category->category = $request->category;
        $category->save();
        return Response('Successfully Created your Category', 201);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return FoodCategory::find($id);
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
            'category'=>'required'
        ]);
        $category = FoodCategory::find($id);
        if ($category->category == $request->category){
            return Response('category input is still the same as the old', 409);
        }else{
            $category->category = $request->category;
            $category->save();
            return Response('Successfully Updated your Category', 202);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FoodCategory::find($id)->delete();
        return Response('Successfully deleted Category', 202);
    }
}
