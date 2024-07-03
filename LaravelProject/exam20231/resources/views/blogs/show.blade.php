@extends('blogs.layout')

@section('content')

<div class="row">
    <div class="row justify-content-between mb-4">
        <div class="col-4 text-center">
            <h2>Detail blog</h2>
        </div>
        <div class="col-4 text-center">
            <a href="{{ route('blogs.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{ $blog->Title }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Content:</strong>
            {{ $blog->Content }}
        </div>
    </div>
    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author Name:</strong>
            {{ $author->Username }}
        </div>
    </div> --}}
</div>

@endsection