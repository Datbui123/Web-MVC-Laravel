<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 CRUD Application</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-primary mt-3 mb-4 text-center"><b></b></h1>
        <!-- yield được dùng để hiển thị nội dung qua tham số content -->
        @yield('content')
    </div>

    <script src="{{asset('css/bootstrap.bundle.js')}}"></script>

</body>

</html>