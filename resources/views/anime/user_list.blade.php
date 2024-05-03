@extends('base')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Anime List</h1>
        <div class="row">
            @foreach ($animes as $anime)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $anime->image) }}" class="card-img-top" alt="{{ $anime->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $anime->title }}</h5>
                            <p class="card-text">{{ $anime->synopsis }}</p>
                            <a href="{{ route('animes.show', $anime->id) }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


{{-- @extends('base')

@section('content')
    <style>
        .card-img-top {
            height: 450px;
            object-fit: cover;
        }

        .card-title {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .anime-card {
            height: 100%;
        }

    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>My list</h2>
                <h6 class="text-muted"><strong>Anime</strong> that you added appear here!</h6>
                <hr>
            </div>
            <div class="col-12 py-2">
                <form action="{{ route('animes.user_list.search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->query('search') }}">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> &nbsp; Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-3">
            @if ($animes->count() > 0)
                @foreach ($animes as $anime)
                    @if ($anime->users->contains(Auth::id()))
                        <div class="col">
                            <div class="card anime-card">
                                <div class="position-relative">
                                    <img src="{{ url("storage/{$anime->image}") }}" class="card-img-top" alt="Image {{ $anime->title }}">
                                    <div class="card-img-overlay d-flex flex-column justify-content-between text-white">
                                        <h3 class="card-title">{{ $anime->title }}</h3>
                                        <div>
                                            <span class="badge {{ $anime->statu->color }} mb-1" style="width:100%">{{ $anime->statu->name }}</span>
                                            <p class="m-0"><i class="fa fa-star text-warning"></i> {{ $anime->score }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex mt-3">
                                        <a href="{{ route('animes.show', $anime->id) }}" class="btn btn-primary me-2" style="width: 49%">
                                            <i class="fa fa-circle-info"></i>
                                        </a>
                                        <a href="{{ url('/animes/remove/' . $anime->id) }}" class="btn btn-danger" style="width: 49%">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <div class="col-12" style="width: 100% !important;">
                    <div class="alert alert-warning mt-2" role="alert">
                        @if( request()->query('search'))
                            No anime with "{{ request()->query('search') }}" was found!
                        @else
                            Your list is empty
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection --}}
