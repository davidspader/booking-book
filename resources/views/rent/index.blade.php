@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card text-center">
                    <div class="card-header">{{ $house->house_name }} Rents</div>
                    <div class="card-body">
                        <div class="mt-2 mb-2 d-flex flex-row-reverse">
                            <a href="" type="button" class="btn btn-primary">Register new rent</a>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <td>Initial date</td>
                                <td>Final date</td>
                                <td>Daily Price</td>
                                <td>Cleaning Price</td>
                                <td>discount</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rents as $rent)
                                <tr>
                                    <th>{{ $rent->id }}</th>
                                    <td>{{ $rent->initial_date }}</td>
                                    <td>{{ $rent->final_date }}</td>
                                    <td>{{ $rent->daily_price }}</td>
                                    <td>{{ $rent->cleaning_price }}</td>
                                    <td>{{ $rent->discount }}</td>
                                    <td>
                                        <a href="" type="button" class="btn btn-primary">Edit</a>
                                        <a href="" type="button" class="btn btn-danger">Delete</a>
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
