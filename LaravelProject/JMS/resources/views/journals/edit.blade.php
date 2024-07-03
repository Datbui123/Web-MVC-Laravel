@extends('layouts.app')
 
@section('content')
<div class="container">

    <h1>Edit Journal</h1>

    <form method="POST" action="/journals/{{ $journal->JID }}">
        @csrf
        @method('PUT')
        <label for="JID">JID:</label>
        <input type="text" name="JID" id="JID" value="{{ $journal->JID }}">
        <br>
        <label for="Title">Title:</label>
        <textarea name="Title" id="Title">{{ $journal->Title }}</textarea>
        <br>
        <label for="Editor">Editor:</label>
        <textarea name="Editor" id="Editor">{{ $journal->Editor }}</textarea>
        <br>
        <label for="ISSN">ISSN:</label>
        <textarea name="ISSN" id="ISSN">{{ $journal->ISSN }}</textarea>
        <br>
        <label for="PublicationDate">PublicationDate:</label>
        <textarea name="PublicationDate" id="PublicationDate">{{ $journal->PublicationDate }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</div>
@endsection