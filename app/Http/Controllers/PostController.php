<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Morilog\Jalali\Jalalian;

class PostController extends Controller
{
       public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'previous_post_id'=>'nullable|exists:posts,id',
            'next_post_id' =>'nullable|exists:posts,id'
            // Add more validation rules as needed
        ]);

        // Create the post
        $post = new Post([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category_id' => $request->input('category_id'),
            'user_id'=>auth()->user()->id,
            'previous_post_id'=>$request->input('previous_post_id'),
            'next_post_id'=>$request->input('next_post_id'),

            // Set other attributes as needed
        ]);

        $post->save();

        flash()->success("ثبت موفق","ایجاد پست با موفقیت انجام شد.");
        

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
       
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
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

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // Validate the input
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            // Add more validation rules as needed
        ]);

        // Update the post
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');
        // Update other attributes as needed

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
