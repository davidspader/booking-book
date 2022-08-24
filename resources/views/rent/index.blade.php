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
                                <?php
                                    $initial_date = new DateTime($rent->initial_date);
                                    $final_date = new DateTime($rent->final_date);
                                ?>
                                <tr>
                                    <th>{{ $rent->id }}</th>
                                    <td>{{ $initial_date->format('d/m/Y') }}</td>
                                    <td>{{ $final_date->format('d/m/Y') }}</td>
                                    <td>R$ {{ number_format($rent->daily_price, 2, ',', '.') }}</td>
                                    <td>R$ {{ number_format($rent->cleaning_price, 2, ',', '.') }}</td>
                                    <td>R$ {{ number_format($rent->discount, 2, ',', '.') }}</td>
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
