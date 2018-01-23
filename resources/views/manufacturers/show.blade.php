@extends('layout')

@section('content')
    <div class="page-header">
        <form action="{{ route('manufacturers.destroy', $manufacturer->id) }}" class="pull-right" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <div class="btn-group">
                <a href="{{ route('manufacturers.edit', $manufacturer->id) }}"
                   class="btn btn-primary">
                    <i class="fa fa-fw fa-pencil"></i> Edit
                </a>
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-fw fa-trash-o"></i> Delete
                </button>
            </div>
        </form>
        <h1>
            <a href="{{ route('manufacturers.index') }}">Manufacturers</a> / {{ $manufacturer->name }}
        </h1>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>General info</h3>
                </div>
                @include('manufacturers.partials.general-info-table')
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>
                        Car models
                        <a href="{{ route('car-models.create', $manufacturer->id) }}" class="btn btn-success pull-right">
                            <i class="fa fa-fw fa-plus"></i> add new
                        </a>
                    </h3>
                </div>
                @if($manufacturer->carModels()->count())
                    @include('car_models.partials.table', [
                        'carModels' => $manufacturer->carModels,
                        'excludeManufacturer' => true,
                    ])
                @else
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <p>{{ $manufacturer->name }} does not have any car models.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection