@extends('layout')

@section('content')
    <div class="page-header">
        <h1>
            <a href="{{ route('manufacturers.index') }}">Manufacturers</a> / create
        </h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('manufacturers.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter the name" required>
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input name="website" type="text" class="form-control" id="website" placeholder="Enter the website" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" rows="3" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection