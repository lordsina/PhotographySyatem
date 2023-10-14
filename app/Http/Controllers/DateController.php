<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use App\Models\Place;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dates = Date::all();
        return view('dates.index', compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Date $date)
    {
        $georgianCarbonDate=Jalalian::fromFormat('Y/m/d', $request->date)->toCarbon();
        $date->date=$georgianCarbonDate;
        $date->save();
        return redirect()->route('dates.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Date $date)
    {
        $places=Place::all();
        return view('dates.show', compact('date','places'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Date $date)
    {
        return view('dates.edit', compact('date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Date $date)
    {
        $georgianCarbonDate=Jalalian::fromFormat('Y/m/d', $request->date)->toCarbon();
        $date->update(['date'=>$georgianCarbonDate]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Date $date)
    {
        $date->delete();
        return redirect()->route('dates.index');
    }
}
