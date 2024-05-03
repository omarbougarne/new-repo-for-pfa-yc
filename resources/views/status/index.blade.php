inherit from view base
@extends('base')

{{-- create a section to specific code --}}
@section('content')
    @if (!is_null($status))
        <table id="tabelaStatus" class="table table-striped" style="padding-top: 10px;">
            <thead>
                <tr class="table-dark">
                    <th colspan="2" class="text-center">Status</th>
                    <th colspan="2" class="text-center">Options</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Desc</th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($status as $status)
                    <tr>
                        <td class="align-middle">{{ $status->name }}</td>
                        <td class="align-middle">{{ $status->description }}</td>
                        <td class="align-middle">
                            <a href="{{ route('status.edit', $status->id) }}" class="btn btn-link" style="text-decoration: none">
                                <i class="fa-solid fa-pen-to-square text-primary"></i> Edit
                            </a>
                        </td>
                        <td class="align-middle">
                            <form action="{{ route('status.destroy', $status->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-link" style="text-decoration: none" type="submit">
                                    <i class="fa-solid fa-trash text-danger"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
    <h3>There are no <strong>statuses</strong> registered!</h3>
    @endif
@endsection













{{-- <span class="badge {{ $status->color }}"> --}}
