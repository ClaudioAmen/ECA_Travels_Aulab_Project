<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Travel;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class TravelController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */

    public static function middleware() : array {
        return [new Middleware("auth" , only:["create"])];
    }

    public function index()
    {
        $travels = Travel::where('is_accepted', true)->orderBy('created_at','desc')->paginate(4);
        return view('travel.index',compact('travels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('travel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        return view('travel.show',compact('travel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        //
    }

    public function byCategory(Category $category)
    {

        $travels = $category->travels()->where('is_accepted', true)->get();
        return view('travel.category', compact('travels', 'category'));

        // return view('travel.category',['travels'=>$category->travels,'category'=>$category]);

    }

    public function region(Region $region)
    {

        $travels = $region->travels()->where('is_accepted', true)->get();
        return view('travel.region', compact('travels', 'region'));

        // return view('travel.category',['travels'=>$category->travels,'category'=>$category]);

    }
}
