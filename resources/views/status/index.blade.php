inherit from view base
@extends('base')

{{-- create a section to specific code --}}
@section('content')
    @if (!is_null($status))
        <table id="tabelaStatus" class="table table-striped" style="padding-top: 10px;">
            <thead>
                <tr class="table-dark" style="background: linear-gradient(to right, #494f55, #3355b0);">
                    <th colspan="2" style="padding-left: 90px;">Studio</th>
                    <th colspan="2" class=" text-white pl-5">Options</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($status as $status)
                    <tr>
                        <td class="align-middle fw-bold text-white">{{ $status->name }}</td>
                        <td class="align-middle text-end">
                            <a href="{{ route('status.edit', $status->id) }}" class="btn btn-link " style="text-decoration: none; color: white; ">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                        </td>
                        <td class="align-middle text-end">
                            <form action="{{ route('status.destroy', $status->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-link text-danger" style="text-decoration: none" type="submit">
                                    <i class="fa-solid fa-trash"></i> Delete
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

