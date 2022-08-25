@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card text-center">
                    <div class="card-header">{{ $house->house_name }} Rents</div>
                    <div class="card-body">
                        <div class="mt-2 mb-2 d-flex flex-row-reverse">
                            <a href="{{ route('rent_create', [Auth::id(), $house->id] )}}" type="button" class="btn btn-primary">Register new rent</a>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>Initial date</td>
                                <td>Final date</td>
                                <td>Daily Price</td>
                                <td>Cleaning Price</td>
                                <td>discount</td>
                                <td>total receivable</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rents as $rent)
                                <?php
                                    $initial_date = new DateTime($rent->initial_date);
                                    $final_date = new DateTime($rent->final_date);
                                    $dateInterval = $initial_date->diff($final_date);
                                    $total_receivable = (($dateInterval->days * $rent->daily_price) + $rent->cleaning_price) - $rent->discount;
                                ?>
                                <tr>
                                    <td>{{ $initial_date->format('d/m/Y') }}</td>
                                    <td>{{ $final_date->format('d/m/Y') }}</td>
                                    <td>R$ {{ number_format($rent->daily_price, 2, ',', '.') }}</td>
                                    <td>R$ {{ number_format($rent->cleaning_price, 2, ',', '.') }}</td>
                                    <td>R$ {{ number_format($rent->discount, 2, ',', '.') }}</td>
                                    <td>R$ {{ number_format($total_receivable, 2, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ route('rent_edit', [Auth::id(), $rent->id]) }}" type="button" class="btn btn-primary">Edit</a>
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
