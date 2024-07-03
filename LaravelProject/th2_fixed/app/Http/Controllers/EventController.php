<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $event = $request->search ? Event::where('id', 'REGEXP', $request->search)->simplePaginate(10) : Event::latest()->simplePaginate(10);
        // $event = Event::orderBy('id', 'desc')->paginate(10);
        return view('events.index', compact('event'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id' => 'required',
            'Title' => 'required',
            'Description' => 'required',
            'Date' => 'required',
            'Location' => 'required',
            
        ]);

        $event = new Event;
        $event->id = $request->id;
        $event->Title = $request->Title;
        $event->Description = $request->Description;
        $event->Date = $request->Date;
        $event->Location = $request->Location;
        $event->save();
        
        return redirect()->route('events.index')->with('success', 'Event Added successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate([
            // 'id' => 'required',
            'Title' => 'required',
            'Description' => 'required',
            'Date' => 'required',
            'Location' => 'required',
        ]);
    
        $event = Event::find($request->hidden_id);
        $event->Title = $request->Title;
        $event->Description = $request->Description;
        $event->Date = $request->Date;
        $event->Location = $request->Location;
           
            $event->save();
              
            return redirect()->route('events.index')->with('success', 'Event Data has been updated successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event Data deleted successfully!');
    }
}
