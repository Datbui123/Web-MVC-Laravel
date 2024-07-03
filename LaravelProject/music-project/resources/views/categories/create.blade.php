@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Category</h1>

    <form method="POST" action="/categories">
        @csrf
        <!-- <label for="title">Mã thể loại</label>
        <input type="text" class="form-control" name="ma_tloai" id="ma_tloai">
        <br> -->
        <label for="name">Tên thể loại:</label>
        <input type="text" class="form-control" name="ten_tloai" id="ten_tloai">
        <br>
        <button type="submit">Create</button>
    </form>
</div>
@endsection