<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $attendance = $request->search ? Attendance::where('Attendance_ID', 'REGEXP', $request->search)->simplePaginate(10) : Attendance::latest()->simplePaginate(10);
        // $attendance = Attendance::orderBy('Attendance_ID', 'asc')->paginate(10);
        return view('attendance.index', compact('attendance'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Employee_ID' => 'Employee_ID',
            'Date' => 'required',
            'Check_in_Time' => 'required',
            'Check_out_Time' => 'required',
            
        ]);

        $attendance = new Attendance;
        $attendance->Attendance_ID = $request->Attendance_ID;
        $attendance->Employee_ID = $request->Employee_ID;
        $attendance->Date = $request->Date;
        $attendance->Check_in_Time = $request->Check_in_Time;
        $attendance->Check_out_Time = $request->Check_out_Time;
        $attendance->save();
        
        return redirect()->route('attendance.index')->with('success', 'Attendance Added successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        return view('attendance.show', compact('attendance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        return view('attendance.edit', compact('attendance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $Attendance_ID)
    {
        $request->validate([
            // 'id' => 'required',
            'Date' => 'required',
            'Check_in_Time' => 'required',
            'Check_out_Time' => 'required',
        ]);
    
        $attendance = Attendance::find($request->hidden_Attendance_ID);
        $attendance = Attendance::find($request->hidden_Employee_ID);
        $attendance->Date = $request->Date;
        $attendance->Check_in_Time = $request->Check_in_Time;
        $attendance->Check_out_Time = $request->Check_out_Time;
        $attendance->save();
              
        return redirect()->route('attendance.index')->with('success', 'Attendance Data has been updated successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return redirect()->route('attendance.index')->with('success', 'Attendance Data deleted successfully!');
    }
}
