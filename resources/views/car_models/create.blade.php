@extends('layout')

@section('content')
    <div class="page-header">
        <h1>
            <a href="{{ route('car-models.index') }}">Car models</a> / create
        </h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('car-models.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="manufacturer_id">Manufacturer *</label>
                    <select name="manufacturer_id" id="manufacturer_id" class="form-control">
                        <option value="" selected>Select a manufacturer</option>
                        @foreach($manufacturers as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Name *</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter the name" required>
                </div>

                <div class="form-group">
                    <label for="type">Type *</label>
                    <select name="type" id="type" class="form-control">
                        <option value="" disabled selected>Select a type</option>
                        <option value="Economy car">Economy car</option>
                        <option value="Luxury vehicle">Luxury vehicle</option>
                        <option value="Sports car">Sports car</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="year">Year</label>
                    <input name="year" type="number" min="1808" class="form-control" id="year" placeholder="Enter the year">
                </div>

                <div class="form-group">
                    <label for="horsepower">Horsepower</label>
                    <input name="horsepower" type="number" min="0" class="form-control" id="year" placeholder="Enter the year">
                </div>

                <div class="form-group">
                    <label for="mpg">MPG (miles per gallon)</label>
                    <input name="mpg" type="number" step="0.1" min="0" class="form-control" id="year" placeholder="Enter the year">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('manufacturers.index') }}" class="btn btn-default pull-right">Cancel</a>
            </form>
        </div>
    </div>
@endsection