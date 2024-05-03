@extends('base')

@section('content')
    <div class="row mb-2">
        <div class="col-md-4 mx-auto">
            <img src="{{ url("storage/{$studio->image}") }}" class="img-fluid rounded-start" alt="">
        </div>
        <div class="col">
            <h3>{{ $studio->name }}</h3>
            <hr>
            <div>
                <strong>Description:</strong> <br>
                <span>{{ $studio->description }}</span>
            </div>
            <div class="mt-2">
                <strong>Created:</strong> <br>
                 <span>{{ $studio->established }}</span>
            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a href="{{ route('studios.index') }}" class="button-18 color-default">Show</a>
                </li>

                    &nbsp;
                    <li class="nav-item">
                        <a class="button-18 color-default" href="{{ route('studios.edit', $studio->id) }}">Edit</a>
                    </li>
                    &nbsp;
                    <li class="nav-item">
                        <form action="{{ route('studios.destroy', $studio->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input class="button-18 color-remove" type="submit" value="Delete">
                        </form>
                    </li>

            </ul>
        </div>
    </div>
@endsection
