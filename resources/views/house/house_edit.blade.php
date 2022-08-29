@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card text-center">
                    <div class="card-header">Update house name</div>
                    <div class="card-body">
                        <form action="{{ route('house_update', [Auth::id(), $house->id]) }}" method="POST" class="form-inline">
                            @csrf
                            @method('put')
                            <label class="sr-only" for="inlineFormInputName2">House name</label>
                            <input type="text" value="{{ $house->house_name }}" class="form-control mb-2 mr-sm-2" id="house_name" name="house_name"
                                   placeholder="House name">
                            @error('house_name')
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
