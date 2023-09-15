<?php

namespace App\Http\Controllers;


use Session;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CustomAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view("home");
    }
    public function index()
    {

        if(Auth::check()){
            $users=User::all();

            return view("dashboard",[
                "users"=>$users,

            ]);
        }
        return view("login");
    }
    public function logincheck(Request $request)
    {
        $request->validate([
            'phone_number'=>'required',
            'password'=>'required',
        ]);
        $credentials=$request->only('phone_number','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard')
            ->with('message','خوش آمدید');
        }
        return redirect('/login')->with('message','اطلاعات وارد شده معتبر نمیباشد!');
    }

    public function register(){
        if(Auth::check()){
            $users=User::all();
            return view("dashboard",[
                "users"=>$users,
            ]);
        }
        return view('register');
    }

    public function registercheck(Request $request)
    {
        
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users',
            'phone'=>'required|unique:users',
            'password'=>'required|min:6',
            're-password'=>'required|min:6',
        ]);
        $data=$request->all();
        $check=$this->create($data);

        return redirect("dashboard");
    }

    public function dashboard()
    {
        if(Auth::check()){
            $users=User::all();
            $posts=Post::all();
            return view("dashboard",[
                "users"=>$users,
                "posts"=>$posts,
            ]);
        }
        return redirect('/login');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return User::create([
            'firstname'=>$data['firstname'],
            'lastname'=>$data['lastname'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'password'=>Hash::make($data['password']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("edit");
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
