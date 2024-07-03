@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit Category</h1>

    <form method="POST" action="/categories/{{ $category->ma_tloai }}">
        @csrf
        @method('PUT')
        <label for="ma_tloai">Mã thể loại:</label>
        <input type="text" name="ma_tloai" id="ma_tloai" value="{{ $category->ma_tloai }}">
        <br>
        <label for="ten_tloai">Tên thể loại:</label>
        <textarea name="ten_tloai" id="ten_tloai">{{ $category->ten_tloai }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</div>
@endsection