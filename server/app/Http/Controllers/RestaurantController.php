<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        // $restaurants = DB::table('restaurants')
        // ->orderByRaw('recommend IS NULL ASC')
        // ->orderBy('recommend', 'ASC')
        // ->get();


        $name = $request->name;
        $category = $request->category;
        $query = Restaurant::query();

        if($name){
            $query -> where('name','like','%'.$name.'%');
        }if ($category){
            $query -> whereHas('category',function($q) use ($category){
                $q->where('name','like','%'.$category.'%');
            });
        }

        $restaurants = $query->simplePaginate(5);
        $restaurants->appends(compact('name','category'));
        // if(!empty($name)){
        //     $restaurants = Restaurant::where('name','like','%'.$name.'%');
        // } else {
        //     $restaurants = Restaurant::all();
        // }

        //$restaurants = Restaurant::simplepaginate(10);
        
        return view('restaurants.index', compact('restaurants'));
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurants.show', compact('restaurant'));
    }
}
