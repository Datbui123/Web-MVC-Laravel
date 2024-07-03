<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all()->reverse();

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::all();

        return view('blogs.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $blog = new Blog();

        $blog->Title = $request->title;
        $blog->Content = $request->content;
        $blog->Author_id = $request->author;
        $blog->save();

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Create new success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
        $authorId = $blog->Author_id;
        $author = User::where('User_id', $authorId);
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        $users = User::all();
        return view('blogs.edit', compact('blog', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Blog::where('Blog_id', $id)->update([
            'Title' => $request->title,
            'Content' => $request->content,
            'Author_id' => $request->author,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Delete success');
    }
}
