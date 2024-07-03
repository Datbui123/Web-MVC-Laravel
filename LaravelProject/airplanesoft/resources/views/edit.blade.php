@extends('master')

@section('content')
    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Edit Flights</b></div>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('Flights.update',$flight->Flight_ID) }}" enctype="multipart/form-data">
                @csrf()
                @method('PUT')
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
                <!-- sử dụng kiểu input là hiden dùng để gửi giá trị sang server thông qua name là hidden_id với id xác định -->
                    <input type="hidden" name="hidden_id" value="{{ $flight->Flight_ID }}" />
                    <input class="btn  btn-primary" type="submit" value="EDIT">
                </div>

            </form>
        </div>
    </div>

    <!-- for gender -->
@endsection('content')
