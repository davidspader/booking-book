@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card text-center">
                    <div class="card-header">Register new rent to {{ $house->house_name }}</div>
                    <div class="card-body">
                        <form action="{{ route('rent_store', [$user->id, $house->id]) }}" method="POST" class="form-inline">
                            @csrf
                            <label class="sr-only" for="inlineFormInputName2">Initial date</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="initial_date" name="initial_date"
                                   placeholder="Initial date">
                            @error('initial_date')
                            <div class="text-sm-start text-danger">{{ $message }}</div>
                            @endif
                            <label class="sr-only" for="inlineFormInputName2">Final date</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="final_date" name="final_date"
                                   placeholder="Final date">
                            @error('final_date')
                            <div class="text-sm-start text-danger">{{ $message }}</div>
                            @endif
                            <label class="sr-only" for="inlineFormInputName2">Daily price</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="daily_price" name="daily_price"
                                   placeholder="Daily price">
                            @error('daily_price')
                            <div class="text-sm-start text-danger">{{ $message }}</div>
                            @endif
                            <label class="sr-only" for="inlineFormInputName2">Cleaning price</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="cleaning_price" name="cleaning_price"
                                   placeholder="Cleaning price">
                            @error('cleaning_price')
                            <div class="text-sm-start text-danger">{{ $message }}</div>
                            @endif
                            <label class="sr-only" for="inlineFormInputName2">Discount</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="discount" name="discount"
                                   placeholder="Discount">
                            @error('discount')
                            <div class="text-sm-start text-danger">{{ $message }}</div>
                            @endif
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
