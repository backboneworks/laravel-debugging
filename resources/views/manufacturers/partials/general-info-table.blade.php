<div class="table-responsive">
    <table class="table table-hover">
        <tbody>
        <tr>
            <th>Name</th>
            <td>{{ $manufacturer->name }}</td>
        </tr>
        <tr>
            <th>Cars</th>
            <td>{{ $manufacturer->carModels()->count() }}</td>
        </tr>
        <tr>
            <th>Website</th>
            <td>{{ $manufacturer->website }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $manufacturer->address }}</td>
        </tr>
        </tbody>
    </table>
</div>