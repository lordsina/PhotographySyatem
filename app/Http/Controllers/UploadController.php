<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Upload;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function upload(Request $request,$id){
        $this->validate($request,[
            'file'=>'required|mimes:png,jpg'
        ]);
       $post = Post::findOrFail($id);
       $file=$request->file('file');
       $name=time().$file->getClientOriginalName();
       $file->move('upload/pictures/',$name);
       $post->uploads()->create(['image_path'=>"/upload/pictures/{$name}"]);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $upload = Upload::findOrFail($id);
        if(FILE::exists(public_path().$upload->image_path)){
            unlink(public_path().$upload->image_path);
        }
        $upload->delete();
        
        return back()->with('success', 'Post deleted successfully.');
    }
}
