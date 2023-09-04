<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="card">
        <div class="card-header">View</div>
        <div class="card-body">
            <form method="post" action="{{ route('attendance.show', $attendance->Attendance_ID) }}" enctype="multipart/form-data">
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Attendance_ID</label>
                    <div class="col-sm-10">
                        <input type="number" name="Attendance_ID" class="form-control" 
                        value="{{ $attendance->Attendance_ID }}" readonly />
                    </div>
                </div> 

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Employee_ID</label>
                    <div class="col-sm-10">
                        <input type="number" name="Employee_ID" class="form-control" 
                        value="{{ $attendance->Employee_ID }}" readonly />
                    </div>
                </div> 

                
                

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Date</label>
                    <div class="col-sm-10">
                        <input type="text" name="Date" class="form-control" 
                        value="{{ $attendance->Date}}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Check-in Time</label>
                    <div class="col-sm-10">
                        <input type="text" name="Check_in_Time" class="form-control" 
                        value="{{ $attendance->Check_in_Time }}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Check-out Time</label>
                    <div class="col-sm-10">
                        <input type="text" name="Check_out_Time" class="form-control" 
                        value="{{ $attendance->Check_out_Time }}" readonly />
                    </div>
                </div>



                <div class="text-center">
                    <a href="{{ route('attendance.index') }}" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
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
