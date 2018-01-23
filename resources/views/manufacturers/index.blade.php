@extends('layout')

@section('content')
    <div class="page-header">
        <h1>
            Manufacturers
            <a href="{{ route('manufacturers.create') }}" class="btn btn-success pull-right">
                <i class="fa fa-plus"></i> add new
            </a>
        </h1>
    </div>

    <div class="panel panel-default">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Cars</th>
                    <th>Website</th>
                    <th>Address</th>
                    <th class="text-right">Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($manufacturers as $manufacturer)
                    <tr>
                        <td>{{ $manufacturer->name }}</td>
                        <td>{{ $manufacturer->carModels()->count() }}</td>
                        <td>{{ $manufacturer->website }}</td>
                        <td>{{ $manufacturer->address }}</td>
                        <td class="text-right">
                            <form action="{{ route('manufacturers.destroy', $manufacturer->id) }}" method="post">
                                {{ method_field('delete') }}
                                <div class="btn-group">
                                    <a href="{{ route('manufacturers.show', $manufacturer->id) }}"
                                       class="btn btn-xs btn-primary">
                                        <i class="fa fa-fw fa-search"></i>
                                    </a>
                                    <a href="{{ route('manufacturers.edit', $manufacturer->id) }}"
                                       class="btn btn-xs btn-success">
                                        <i class="fa fa-fw fa-pencil"></i>
                                    </a>
                                    <button type="submit" class="btn btn-xs btn-danger">
                                        <i class="fa fa-fw fa-trash-o"></i>
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection