@extends('layout')

@section('content')
    <div class="page-header">
        <form action="{{ route('car-models.destroy', $carModel->id) }}" class="pull-right" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <div class="btn-group">
                <a href="{{ route('car-model.edit', $carModel->id, ['redirect_route' => route('car-models.show', $carModel->id)]) }}"
                   class="btn btn-primary">
                    <i class="fa fa-fw fa-pencil"></i> Edit
                </a>
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-fw fa-trash-o"></i> Delete
                </button>
            </div>
        </form>
        <h1>
            <a href="{{ route('manufacturers.index') }}">Car models</a> / {{ $carModel->name }}
        </h1>
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>General info</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $carModel->name }}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{{ $carModel->type }}</td>
                        </tr>
                        <tr>
                            <th>Year</th>
                            <td>{{ $carModel->year }}</td>
                        </tr>
                        <tr>
                            <th>Horsepower</th>
                            <td>{{ $carModel->hosepower }}</td>
                        </tr>
                        <tr>
                            <th>MPG (miles per gallon)</th>
                            <td>{{ $carModel->mpg }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>General info {{ $carModel->manufacturer->name }}</h3>
                </div>
                @include('manufacturers.partials.general-info-table', ['manufacturer' => $carModel->manufacturer])
            </div>
        </div>
    </div>
@endsection