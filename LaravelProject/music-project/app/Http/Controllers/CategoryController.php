<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Retrieve all the posts
        $categories = Category::all();
        $categories = Category::paginate(100);
        // $categories = Category::orderBy('created_at', 'desc')->paginate(100);
        // Pass the posts data to the view
        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        // Just return the view
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            // 'ma_tloai' => 'required|max:255',
            'ten_tloai' => 'required',
        ]);
        // Create a new post instance and save it to the database
        $category = new Category;
        // $category->ma_tloai = $request->input('ma_tlo1ai');
        $category->ten_tloai = $request->ten_tloai;
        // $category->ten_tloai = $request->input('ten_tloai');
        $category->save();
        // Redirect the user to the index view
        return redirect('/categories');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // $category->ma_tloai = $request->input('ma_tloai');
        // $category->ten_tloai = $request->input('ten_tloai');
        $category->ten_tloai = $request->ten_tloai;
        $category->save();
        return redirect('/categories')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories')->with('success', 'Category deleted successfully');
    }
}
