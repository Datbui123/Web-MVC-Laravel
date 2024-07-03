<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Your Blog</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Bootstrap CSS -->

</head>
<body>
    @include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">JMS</a>
<div class="collapse navbar-collapse">- <ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="/journals">Journals</a>
</li>
</ul>
</div>
</nav>

<main class="py-4">
@yield('content')
</main>

@include('layouts.footer')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script> <!-- Bootstrap JS -->
</body>
</html>
