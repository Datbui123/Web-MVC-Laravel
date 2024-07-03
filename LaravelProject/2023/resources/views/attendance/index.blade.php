<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

<body>
    
    <div style="display: flex; justify-content: space-between;" class="my-3">
            <h3>Attendance Detail</h3>
            <a href="{{route('attendance.create')}} " class="btn btn-success btn-sm"> Add </a>
        </div>

    @if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif


    <div class="card-header">
        <div class="row">
            <div class="col col-md-12">
            
    
            </div>
        </div>
        </div>

    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Attendance_ID</th>
                <th scope="col">Employee_ID</th>
                <th scope="col">Date</th>
                <th scope="col">Check-in Time</th>
                <th scope="col">Check-out Time</th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>

            @foreach($attendance as $item)
            <tr>
                <th scope="row">{{$item->Attendance_ID }}</th>
                <td>{{$item->Employee_ID }}</td>
                <td>{{$item->Date}}</td>
                <td>{{$item->Check_in_Time}}</td>
                <td>{{$item->Check_out_Time}}</td>
                
              
 
                <td>
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('attendance.show', $item->Attendance_ID) }}" class="btn btn-primary btn-sm me-1 ">View</a>
                        <a href="{{ route('attendance.edit', $item->Attendance_ID) }}"  class="btn btn-warning btn-sm me-1">Edit</a>
                        <form action="{{ route('attendance.destroy', $item->Attendance_ID) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" value="Delete" />
                        </form>
                    </div>
                </td>
                
            </tr>
            @endforeach
        </tbody>
        
    </table>
    <div class="pagination justify-content-center">
 
    {!! $attendance->appends(['search' => request()->input('search')])->links() !!}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>