@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/posts">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- <a class="btn btn-primary" href="http://127.0.0.1:8000/posts/index" target="_blank">Submit &raquo;</a> -->
    </form>
</div>
@endsection