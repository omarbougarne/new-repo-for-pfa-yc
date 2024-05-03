@extends('base')


@section('content')
<h1>Manga List</h1>

<ul>
    @foreach ($mangas as $manga)
        <li><a href="{{ route('mangas.show', $manga) }}">{{ $manga->name }}</a></li>
    @endforeach
</ul>
@endsection
