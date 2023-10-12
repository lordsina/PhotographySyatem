<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Melipayamak\MelipayamakApi;



class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//  $adminRole = Role::where('name', 'editor')->first();

// if ($adminRole) {
//     $adminPermissions = $adminRole->permissions;

//     // You can now work with the $adminPermissions collection
//     foreach ($adminPermissions as $permission) {
//         echo $permission->name;
//     }
// } else {
//     echo "Admin role not found.";
// }
        $users=User::with('roles','permissions')->get();
        return view('users.index',compact('users'));
    }

    public function sms(){

    try{
        $username = '9364900199';
        $password = '@Sina123456';
        $api = new MelipayamakApi($username,$password);
        $sms = $api->sms();
        $to = '09364900199';
        $from = '50004001900199';
        $text = 'تست وب سرویس ملی پیامک';
        $response = $sms->send($to,$from,$text);
        $json = json_decode($response);
        return $json->Value; //RecId or Error Number 
    }
    catch(Exception $e){
        return $e->getMessage();
    }

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
    public function show(User $user)
    { 
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('users.edit', compact('user','roles','permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->syncRoles($request->roles);
        $user->syncPermissions($request->permissions);
        $user->update($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
