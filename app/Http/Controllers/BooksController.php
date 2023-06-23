<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('admin');
    }
    
    public function index()
    {
        
        //First Way DB Data Featching
 
        //$books=\DB::table('books')->get();  or   use Illuminate\Support\Facades\DB
        $books=DB::table('books')->get();

        $tags=Tag::all();
        return view('books.index',compact('books','tags'));
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
        //return $request->all();
        $book->name=$request->name;
        $book->title=$request->title;
        $book->save();
        $book->tags()->attach($request->input('tags'));
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {

        //$book=Book::find($id);
        //return $book;


        //this stacture is alocoant
       
       // $book=Book::find($id);
        //return view('books.show',compact('book'));


        // good way add model class in function { public function show(Book $book) } - Route Model Binding - * same name at in route direction {Route::get('books/{book}','App\Http\Controllers\BooksController@show');}
        //return view('books.show',compact('book'));

        //$book=Book::findOrFail($id);
        //return view('books.show',compact('book'));

        //$t=Book::with('bookcomments.user')->get();
        //$t=Book::with('bookcomments.user')->get()->find(1);
        $book->load('bookcomments.user');
        return view('books.show',compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Book $book,Request $request)
    {
        $book->update($request->all());
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
