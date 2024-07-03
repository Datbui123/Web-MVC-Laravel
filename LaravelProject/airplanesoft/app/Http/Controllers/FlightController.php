<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get data from csdl and put into index
        // paginate hiển thị tối da 5 bản ghi trên một trang
        $data = Flight::latest()->paginate(10);
        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Flight_ID' => 'required',
            'Aircraft_ID' => 'required',
            'Departure_Airport' => 'required',
            'Arrival_Airport' => 'required',
            'Departure_Time' => 'required',
            'Arrival_Time' => 'required',
            'Fright_Duration' => 'required',
            ]);
    
            $flight = new Flight();
            $flight->Flight_ID = $request->Flight_ID;
            $flight->Aircraft_ID = $request->Aircraft_ID;
            $flight->Departure_Airport = $request->Departure_Airport;
            $flight->Arrival_Airport = $request->Arrival_Airport;
            $flight->Departure_Time = $request->Departure_Time;
            $flight->Arrival_Time = $request->Arrival_Time;
            $flight->Fright_Duration = $request->Fright_Duration;

            $flight->save();
            return redirect()->route('Flights.index')->with('success', 'Student Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flight $flight)
    {
        return view('show',compact('flight'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {
        //
        return view('edit',compact('flight'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $flight)
    {
        
        $request->validate([
            'Flight_ID' => 'required',
            'Aircraft_ID' => 'required',
            'Departure_Airport' => 'required',
            'Arrival_Airport' => 'required',
            'Departure_Time' => 'required',
            'Arrival_Time' => 'required',
            'Fright_Duration' => 'required',
            ]);
            
            // thông qua name=hidden_id sẽ lấy ra các giá trị và gán lại giá trị cho Student
            $student = Flight::find($request->hidden_id);
            $flight->Flight_ID = $request->Flight_ID;
            $flight->Aircraft_ID = $request->Aircraft_ID;
            $flight->Departure_Airport = $request->Departure_Airport;
            $flight->Arrival_Airport = $request->Arrival_Airport;
            $flight->Departure_Time = $request->Departure_Time;
            $flight->Arrival_Time = $request->Arrival_Time;
            $flight->Fright_Duration = $request->Fright_Duration;
            $flight->save();
            // routing to index and alert to monitor
            return redirect()->route('Flights.index')->with('success', 'Flights
           Data has been updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $data= Flight::where('Flight_ID',$id)->first();
        // $data->delete();

        // Flight::where('Flight_ID', $id)->first();
        // $flight->delete();
        
        DB::delete('delete from flights where Flight_ID = '.$id);
        // $flight->delete();
        return redirect()->route('Flights.index')->with('success', 'Flights 
        Data deleted successfully');
    }

}