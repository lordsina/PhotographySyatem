<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user= User::findOrFail(auth()->id());
        return view("profile",compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
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
    public function update(Request $request)
    {
        $id=auth()->id();
            // Validate the input
        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'username' => 'required|string|unique:users,username,'.$id,
            'email' => 'required|string|email|unique:users,email,'.$id,
            'phone_number' => 'nullable|string|unique:users,phone_number,'.$id,
            'address' => 'nullable|string|max:255',
            'credit_card_number' => 'nullable|string|max:16',
            'active' => 'required|boolean',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user with the validated data
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->phone_number=$request->phone_number;
        $user->address=$request->address;
        $user->credit_card_number=$request->credit_card_number;
        $user->active=$request->active;
        $user->save();


        // Redirect to the user's profile or another page
        return redirect()->route('profile')->with('success', 'User updated successfully.');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
