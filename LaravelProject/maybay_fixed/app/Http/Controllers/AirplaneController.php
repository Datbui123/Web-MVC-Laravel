<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airplane;

class AirplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $airplane = $request->search ? Airplane::where('id', 'REGEXP', $request->search)->simplePaginate(5) : Airplane::latest()->simplePaginate(5);
        // $airplane = Airplane::orderBy('id', 'desc')->paginate(5);
        return view('airplanes.index', compact('airplane'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('airplanes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id' => 'required',
            // 'RegistrationNumber' => 'required',
            'ModelNumber' => 'required',
            'Capacity' => 'required',
            
        ]);

        $airplane = new Airplane;
        $airplane->id = $request->id;
        $airplane->ModelNumber = $request->ModelNumber;
        $airplane->Capacity = $request->Capacity;
        $airplane->save();
        
        return redirect()->route('airplanes.index')->with('success', 'Airplane Added successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Airplane $airplane)
    {
        return view('airplanes.show', compact('airplane'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airplane $airplane)
    {
        return view('airplanes.edit', compact('airplane'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate([
            // 'id' => 'required',
            // 'RegistrationNumber' => 'required',
            'ModelNumber' => 'required',
            'Capacity' => 'required',
        ]);
    
        $airplane = Airplane::find($request->hidden_id);
        // $airplane->id = $request->id;
        $airplane->ModelNumber = $request->ModelNumber;
        $airplane->Capacity = $request->Capacity;
           
            $airplane->save();
              
            return redirect()->route('airplanes.index')->with('success', 'Airplane Data has been updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airplane $airplane)
    {
        $airplane->delete();
        return redirect()->route('airplanes.index')->with('success', 'Airplane Data deleted successfully');
    }
}

