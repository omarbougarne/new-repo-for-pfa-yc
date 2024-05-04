@extends('base')

@section('content')
    <h2 class="text-center fw-bold">Edit</h2>
    <hr>
    <div class="row">
        <form method="POST" action="{{ route('status.update', $status->id) }}">
            @csrf
            @method("PUT")
            <div class="mb-2 col-6 mx-auto">
                <label for="name" class="form-label fw-bold text-info">➤ Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ? old('name') : $status->name }}">
                @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="text-center my-4 col-12 mx-auto">
                <input type="submit" class="btn btn-primary col-6 my-1" value="Add">
            </div>
        </form>
    </div>
@endsection
