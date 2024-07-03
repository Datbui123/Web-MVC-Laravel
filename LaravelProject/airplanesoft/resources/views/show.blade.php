@extends('master')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Flights Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('Flights.index') }}" class="btn btn-primary btn-sm float-end">View All</a </div>
            </div>
        </div>
        
        <!--  -->
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Flights_ID :</b></label>
                <div class="col-sm-10">
                    {{-- {{$flight->Flight_ID }} --}}
                    {{$flight -> Flight_ID}}
                    {{-- {{ $flight->Flight_ID}} --}}
                </div>
            </div>
            <!--  -->

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Aircraft_ID :</b></label>
                <div class="col-sm-10">
                    {{ $flight->Aircraft_ID }}
                </div>
            </div>

            <!--  -->

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Departure_Time</b></label>
                <div class="col-sm-10">
                    {{ $flight->Departure_Airport }}
                </div>
            </div>

            <!--  -->

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Arrival_Airport</b></label>
                <div class="col-sm-10">
                    {{ $flight->Arrival_Airport }}
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Departure_Time</b></label>
                <div class="col-sm-10">
                    {{ $flight->Departure_Time }}
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Arrival_Time</b></label>
                <div class="col-sm-10">
                    {{ $flight->Arrival_Time }}
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Fright_Duration</b></label>
                <div class="col-sm-10">
                    {{ $flight->Fright_Duration}}
                </div>
            </div>
        </div>
    </div>


    @endsection('content')