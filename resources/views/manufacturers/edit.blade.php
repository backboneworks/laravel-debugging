@extends('layout')

@section('content')
    <div class="page-header">
        <h1>
            <a href="{{ route('manufacturers.index') }}">Manufacturers</a> /
            <a href="{{ route('manufacturers.show', $manufacturer->id) }}">{{ $manufacturer->name }}</a> /
            edit
        </h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('manufacturers.update', $manufacturer->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" value="{{ $manufacturer->name }}" type="text" class="form-control" id="name" placeholder="Enter the name" required>
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input name="name" value="{{ $manufacturer->website }}" type="text" class="form-control" id="website" placeholder="Enter the website" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="name" id="address" rows="3" class="form-control" required>{{ $manufacturer->address }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection