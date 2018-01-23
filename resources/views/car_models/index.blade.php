@extends('layout')

@section('content')
    <div class="page-header">
        <h1>
            Car models
            <a href="{{ route('car-models.create') }}" class="btn btn-success pull-right">
                <i class="fa fa-plus"></i> add new
            </a>
        </h1>
    </div>

    <div class="panel panel-default">
        @include('car_models.partials.table')
    </div>
@endsection