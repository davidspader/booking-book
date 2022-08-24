@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card text-center">
                    <div class="card-header">Houses</div>
                    <div class="card-body">
                        <div class="mt-2 mb-2 d-flex flex-row-reverse">
                            <a href="{{ route('house_create') }}" type="button" class="btn btn-primary">Register new house</a>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" colspan="2">Identification</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($houses as $house)
                                <tr>
                                    <th scope="row">{{ $house->id }}</th>
                                    <td colspan="2"><a href="{{ route('rents', [Auth::id(), $house->id]) }}"> {{ $house->house_name }}</a></td>
                                    <td>
                                        <a href="{{ route('house_edit', $house->id) }}" type="button" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('house_destroy', $house->id) }}" type="button" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
