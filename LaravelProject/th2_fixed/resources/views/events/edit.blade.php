<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   
    </head>

<body>

    <div class="card">
        <div class="card-header">Edit</div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <form method="post" action="{{ route('events.update', $event) }}" enctype="multipart/form-data">
            @method('PUT')    
            @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">ID</label>
                    <div class="col-sm-10">
                        <input type="number" name="id " class="form-control" 
                        value="{{ $event->id}}" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="Title" class="form-control" 
                        value="{{ $event-> Title}}"  />
                    </div>
                </div>

                
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="Description" class="form-control" 
                        value="{{ $event->Description }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Date</label>
                    <div class="col-sm-10">
                        <input type="date" name="Date" class="form-control" 
                        value="{{ $event->Date }}"  />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Location</label>
                    <div class="col-sm-10">
                        <input type="text" name="Location" class="form-control" 
                        value="{{ $event->Location }}"  />
                    </div>
                </div>

                
                

     

                <div class="text-center">
                    <a href="{{ route('events.index') }}" class="btn btn-primary">Back</a>
                    <input type="hidden" name="hidden_id" value="{{$event->id}}" />
                    <input type="submit" class="btn btn-primary" value="Save" />
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