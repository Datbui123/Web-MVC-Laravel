@extends('master')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
    <div class="card-header">
        <h2 style="color: rgb(51, 12, 223)">Add Flight</h2>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('Flights.store') }}" enctype="multipart/form-data">
            @csrf()
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Flight_ID</label>
                <div class="col-sm-10">
                    <input type="number" name="Flight_ID" class="form-control" />
                </div>
            </div>
            <!--  -->
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Aircraft_ID</label>
                <div class="col-sm-10">
                    <input type="number" name="Aircraft_ID" class="form-control" />
                </div>
            </div>
            <!--  -->
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Departure_Airport</label>
                <div class="col-sm-10">
                    <input type="text" name="Departure_Airport" class="form-control" />
                </div>
            </div>
            <!--  -->
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Arrival_Airport</label>
                <div class="col-sm-10">
                    <input type="text" name="Arrival_Airport" class="form-control" />
                </div>
            </div>
            <!--  -->

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Departure_Time</label>
                <div class="col-sm-10">
                    <input type="date" name="Departure_Time" class="form-control" />
                </div>
            </div>

            {{--  --}}

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Arrival_Time</label>
                <div class="col-sm-10">
                    <input type="date" name="Arrival_Time" class="form-control" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Fright_Duration</label>
                <div class="col-sm-10">
                    <input type="time" name="Fright_Duration" class="form-control" />
                </div>
            </div>

            <div class="text-center">
                <input class="btn  btn-primary" type="submit" value="ADD">
            </div>

        </form>
    </div>
</div>
@endsection('content')