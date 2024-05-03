@extends('base')

@section('content')
    <div class="container-fluid" style="margin-bottom: 100px;">
        <div class="row">
            <div class="col-12">

                <h4 class="text-center text-light display-4 fw-bold mb-5 text-primary">Best <strong class="text-danger">animes</strong> DataBase you can create 🌟</h4>
            </div>
            <div class="col-12 py-2">
                <form action="{{ route('animes.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search for an anime..." value="{{ request()->query('search') }}">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> &nbsp; Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            @if ($animes->count() > 0)
                @foreach ($animes as $anime)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card h-99">
                            <img src="{{ url("storage/{$anime->image}") }}" class="card-img card-img-top" alt="Cover of the anime {{ $anime->title }}">
                            <div class="card-img-overlay d-flex flex-column justify-content-between">
                                <div>
                                    <span class="badge {{ $anime->statu->color }} mb-1">{{ $anime->statu->name }}</span>
                                    <h4 class="text-white">{{ $anime->title }}</h4>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('animes.show', $anime->id) }}" class="btn btn-primary btn-round" style="width: 49%">
                                        <i class="fa fa-eye"></i>
                                    </a> &nbsp;
                                    <!-- Inside your foreach loop -->
                                    @if(Auth::check())
                                    <a href="{{ url('/animes/add/' . $anime->id) }}" class="btn btn-success btn-round" style="width: 49%">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                @endif



                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-sm"> <!-- Use pagination-lg for larger buttons -->
                                {{ $animes->links() }}
                            </ul>
                        </nav>
                    </div>
                </div> --}}

            @else
                <div class="alert alert-warning mt-2" role="alert">
                    No anime with "{{ request()->query('search') }}" was found!
                </div>
            @endif
        </div>

    </div>
@endsection
