<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookcomment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookCommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        #$this->middleware('auth',['only'=>['index']]);
        #$this->middleware('auth',['except'=>['index']]);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request,Book $book)
    {
        //$bookcomment=new Bookcomment(['fullname'=>$request->fullname,'description'=>$request->description]);
        //$book->bookcomments()->save($bookcomment);
        //----------------------------------------------------------------------------------------------------
        //$book->bookcomments()->create(['fullname'=>$request->fullname,'description'=>$request->description]);

        //return $request->all();
        $this->validate($request,['fullname'=>'required',
                                  'description'=>'required' 
                                ]);
        $bookcomment=new Bookcomment( $request->all() );
        $bookcomment->user_id=Auth::id();
        $book->bookcomments()->save($bookcomment);
        //$book->bookcomments()->create($request->all());
        
        flash("باموفقیت نظر شما ثبت شد.",'success');
      
        return back();
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
    public function edit(Bookcomment $bookcomment)
    {
        //$tags=Tag::all();
        if(Gate::denies('edit-bookcomment',$bookcomment)){
            abort(403,'متاسفانه شما اجازه ویرایش این بخش را ندارید.');
        }
        return view('bookcomments.edit',compact('bookcomment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bookcomment $bookcomment)
    {
        $bookcomment->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
