<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|unique:categories'
            // Add more validation rules as needed
        ]);

        // Create the category
        $category = new Category([
            'name' => $request->input('name')
            // Set other attributes as needed
        ]);

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }
    
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        // Validate the input
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id
            // Add more validation rules as needed
        ]);

        // Update the category
        $category->name = $request->input('name');
        // Update other attributes as needed

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
    $category = Category::findOrFail($id);
    $category->delete();

    return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
    
}
