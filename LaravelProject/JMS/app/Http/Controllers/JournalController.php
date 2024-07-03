<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;

class JournalController extends Controller
{
    public function index()
    {
        // Retrieve all the posts
        $journals = Journal::all();
        $journals = Journal::paginate(100);
        // $categories = Category::orderBy('created_at', 'desc')->paginate(100);
        // Pass the posts data to the view
        return view('journals.index', ['journals' => $journals]);
    }

    public function create()
    {
        // Just return the view
        return view('journals.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            // 'ma_tloai' => 'required|max:255',
            'Title' => 'required',
            'Editor' => 'required',
            'ISSN' => 'required',
            'PublicationDate' => 'required',
        ]);
        // Create a new post instance and save it to the database
        $journal = new Journal;
        // $category->ma_tloai = $request->input('ma_tlo1ai');
        $journal->Title = $request->Title;
        $journal->Editor = $request->input('Editor');
        $journal->ISSN = $request->ISSN;
        $journal->PublicationDate = $request->PublicationDate;
        $journal->save();
        // Redirect the user to the index view
        return redirect('/journals');
    }

    public function show(Journal $journal)
    {
        return view('journals.show', compact('journal'));
    }

    public function edit(Journal $journal)
    {
        return view('journals.edit', compact('journal'));
    }

    public function update(Request $request, Journal $journal)
    {
        // $category->ma_tloai = $request->input('ma_tloai');
        // $category->ten_tloai = $request->input('ten_tloai');
        $journal->Title = $request->Title;
        $journal->Editor = $request->Editor;
        $journal->ISSN = $request->ISSN;
        $journal->PublicationDate = $request->PublicationDate;
        $journal->save();
        return redirect('/journals');
    }

    public function destroy(Journal $journal)
    {
        $journal->delete();
        return redirect('/journals');
    }

    // public function destroy(Journal $journal)
    // {
    //     // $journal->delete();
    //     return view('journals.destroy', compact('journal'));
    // }
}
