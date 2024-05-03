@extends('base')

@section('content')
    <h1>Add New Episode</h1>
    <form action="{{ route('episodes.store', ['anime_id' => $anime->id]) }}" method="POST">


        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="number">Episode Number:</label>
            <input type="number" id="number" name="number" required>
        </div>
        <div>
            <label for="summary">Episode Summary:</label>
            <input type="text" id="summary" name="summary" required>
        </div>
        <div>
            <label for="air_date">Air Date:</label>
            <input type="date" id="air_date" name="air_date">
        </div>

        <button type="submit" class="btn btn-success">Create Episode</button>
    </form>
@endsection
