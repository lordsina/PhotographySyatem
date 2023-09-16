<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places=Place::all();
        return view('places.index',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('places.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Place $place)
    {
        // Validate the input
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $place->name=$request->name;
        $place->description=$request->description;
        $place->save();

        return redirect()->route('places.index')->with('ایجاد شد', 'تالار با موفقیت ایحاد شد.');
    }

    /**
     * Display the specified resource.
     */
   public function show($id)
    {
        $place = Place::findOrFail($id);
        return view('places.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $place = Place::findOrFail($id);
        return view('places.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        // Validate the input
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $place = Place::findOrFail($id);

        // Update the post
        $place->name=$request->name;
        $place->description=$request->description;
        $place->save();
        // Update other attributes as needed

        $place->save();

        return redirect()->route('places.index')->with('ایجاد شد', 'تالار با موفقیت بروزرسانی شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();

        return redirect()->route('places.index')->with('حذف شد', 'تالار با موفقیت حذف شد.');
    }
}
