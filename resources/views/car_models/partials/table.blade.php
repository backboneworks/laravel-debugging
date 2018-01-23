<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            @unless(isset($excludeManufacturer) && $excludeManufacturer)
                <th>Manufacturer</th>
            @endunless
            <th>Name</th>
            <th>Type</th>
            <th>Year</th>
            <th>Horsepower</th>
            <th>MPG</th>
            <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($carModels as $carModel)
            <tr>
                @unless(isset($excludeManufacturer) && $excludeManufacturer)
                    <td>{{ $carModel->manufacturer->name }}</td>
                @endunless
                <td>{{ $carModel->name }}</td>
                <td>{{ $carModel->type }}</td>
                <td>{{ $carModel->year }}</td>
                <td>{{ $carModel->horsepower }}</td>
                <td>{{ $carModel->mpg }}</td>
                <td class="text-right">
                    <form action="{{ route('car-models.destroy', $carModel->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="btn-group">
                            <a href="{{ route('car-models.show', $carModel->id) }}"
                               class="btn btn-xs btn-primary">
                                <i class="fa fa-fw fa-search"></i>
                            </a>
                            <a href="{{ route('car-models.edit', $carModel->id) }}"
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