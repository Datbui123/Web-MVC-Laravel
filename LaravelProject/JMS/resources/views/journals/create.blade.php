@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Journal</h1>

    <form method="POST" action="/journals">
        @csrf
        <!-- <label for="title">JID</label>
        <input type="text" class="form-control" name="JID" id="JID">
        <br> -->
        <label for="name">Title:</label>
        <input type="text" class="form-control" name="Title" id="Title">
        <br>
        <label for="name">Editor:</label>
        <input type="text" class="form-control" name="Editor" id="Editor">
        <br>
        <label for="name">ISSN:</label>
        <input type="text" class="form-control" name="ISSN" id="ISSN">
        <br>
        <label for="name">PublicationDate:</label>
        <input type="text" class="form-control" name="PublicationDate" id="PublicationDate">
        <br>
        <button type="submit">Create</button>
    </form>
</div>
@endsection