@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>Category Details</h1>

    <p><strong>Mã thể loại:</strong> {{ $category->ma_tloai }}</p>
    <p><strong>Tên thể loại:</strong> {{ $category->ten_tloai }}</p>

    <a href="/categories">Back to Category List</a>
</div>
@endsection