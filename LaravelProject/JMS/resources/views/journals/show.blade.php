@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>Journal Details</h1>

    <p><strong>JID:</strong> {{ $journal->JID }}</p>
    <p><strong>Title:</strong> {{ $journal->Title }}</p>
    <p><strong>Editor:</strong> {{ $journal->Editor }}</p>
    <p><strong>ISSN:</strong> {{ $journal->ISSN }}</p>
    <p><strong>PublicationDate:</strong> {{ $journal->PublicationDate }}</p>

    <form method="POST" action="/journals/{{ $journal->JID }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</i></button>
    </form>

    <a href="/journals">Back to Journal List</a>
</div>
@endsection