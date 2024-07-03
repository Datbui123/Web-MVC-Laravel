@extends('blogs.layout')

@section('content')

<div class="row">
    <div class="row justify-content-between mb-4">
        <div class="col-4 text-center">
            <h2>Edit blog</h2>
        </div>
        <div class="col-4 text-center">
            <a href="{{ route("blogs.index") }}" class="btn btn-primary">Back</a>
        </div>
    </div>  
</div>


<form action="{{ route('blogs.update', $blog->Blog_id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title: </strong>
                <input type="text" name="title" class="form-control" value="{{ $blog->Title }}" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content: </strong>
                <textarea type="text" name="content" class="form-control" style="height: 200px" placeholder="Content">{{ $blog->Content }}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author: </strong>
                <select class="my-2" name="author" id="">
                    @foreach ($users as $user )
                        <option value="{{ $user->User_id }}">{{ $user->Username  }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


@endsection