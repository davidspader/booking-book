@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card text-center">
                    <div class="card-header">Edit rent</div>
                    <div class="card-body">
                        <form action="{{ route('rent_update', [$user->id, $rent->id]) }}" method="POST" class="form-inline">
                            @csrf
                            @method('put')
                            <label class="sr-only" for="inlineFormInputName2">Initial date</label>
                            <input type="text" value="{{ $rent->initial_date }}"  class="form-control mb-2 mr-sm-2" id="initial_date" name="initial_date"
                                   placeholder="Initial date">
                            @error('initial_date')
                            <div class="text-sm-start text-danger">{{ $message }}</div>
                            @endif
                            <label class="sr-only" for="inlineFormInputName2">Final date</label>
                            <input type="text" value="{{ $rent->final_date }}" class="form-control mb-2 mr-sm-2" id="final_date" name="final_date"
                                   placeholder="Final date">
                            @error('final_date')
                            <div class="text-sm-start text-danger">{{ $message }}</div>
                            @endif
                            <label class="sr-only" for="inlineFormInputName2">Daily price</label>
                            <input type="text" value="{{ $rent->daily_price }}" class="form-control mb-2 mr-sm-2" id="daily_price" name="daily_price"
                                   placeholder="Daily price">
                            @error('daily_price')
                            <div class="text-sm-start text-danger">{{ $message }}</div>
                            @endif
                            <label class="sr-only" for="inlineFormInputName2">Cleaning price</label>
                            <input type="text" value="{{ $rent->cleaning_price }}" class="form-control mb-2 mr-sm-2" id="cleaning_price" name="cleaning_price"
                                   placeholder="Cleaning price">
                            @error('cleaning_price')
                            <div class="text-sm-start text-danger">{{ $message }}</div>
                            @endif
                            <label class="sr-only" for="inlineFormInputName2">Discount</label>
                            <input type="text" value="{{ $rent->discount }}" class="form-control mb-2 mr-sm-2" id="discount" name="discount"
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
