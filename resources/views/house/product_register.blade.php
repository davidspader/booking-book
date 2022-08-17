@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card text-center">
                    <div class="card-header">Register new house</div>
                    <div class="card-body">
                        <form action="{{ route('house_store') }}" method="POST" class="form-inline">
                            @csrf
                            <label class="sr-only" for="inlineFormInputName2">House name</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" d="house_name" name="house_name"
                                   placeholder="House name">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
