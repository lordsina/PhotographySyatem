<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\Place;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dates.invoices.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        
        $places=Place::all();

        return view('dates.invoices.create',compact('places','date'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Invoice $invoice)
    {
        $invoice->place_id=$request->place_id;
        $invoice->date_id=$request->date_id;
        $invoice->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
