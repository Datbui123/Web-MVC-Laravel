@extends('master')

<!-- gọi ra yeild content -->
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Flight Details</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('Flights.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Flight_ID</th>
                    <th>Aircraft_ID</th>
                    <th>Departure_Airport</th>
                    <th>Arrival_Airport</th>
                    <th>Departure_Time</th>
                    <th>Arrival_Time</th>
                    <th>Fright_Duration</th>
                    <th style="width: 60dx">Action</th>
                </tr>
                @if (count($data) > 0)
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->Flight_ID }}</td>
                            <td>{{ $row->Aircraft_ID }}</td>
                            <td>{{ $row->Departure_Airport }}</td>
                            <td>{{ $row->Arrival_Airport }}</td>
                            <td>{{ $row->Departure_Time }}</td>
                            <td>{{ $row->Departure_Airport }}</td>
                            <td>{{ $row->Fright_Duration }}</td>

                            <td class="td1" style="white-space: nowrap;">
                                <td>
                                    <form method="post" action="{{ route('Flights.destroy', $row->Flight_ID) }}">
                                        @csrf
                                        @method('DELETE')
                                        <!--  -->
                                        <a href="{{ route('Flights.show', $row->Flight_ID) }}" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{ route('Flights.edit', $row->Flight_ID) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                                    </form>
                                </td>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Data Found</td>
                    </tr>
                @endif
            </table>
            {!! $data->links() !!}
        </div>
    </div>
@endsection
