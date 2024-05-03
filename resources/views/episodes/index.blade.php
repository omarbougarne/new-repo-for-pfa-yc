@extends('base')


@section('content')
    <h1>Episodes List</h1>
    <a href="{{ route('episodes.create', ['anime_id' => $anime->id]) }}" class="btn btn-success">Add New Episode</a>


    <ul>
        @foreach ($episodes as $episode)
            <li>
                {{ $episode->title }} (Episode {{ $episode->number }})
                <a href="{{ route('episodes.edit', $episode->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('episodes.destroy', $episode->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Destroy</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
