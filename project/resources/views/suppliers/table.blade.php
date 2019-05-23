<div class="table-responsive">
    <table class="table" id="suppliers-table">
        <thead>
            <tr>
                <th>Companyname</th>
        <th>Contactname</th>
        <th>Contacttitle</th>
        <th>Adress</th>
        <th>City</th>
        <th>Region</th>
        <th>Postalcode</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Fax</th>
        <th>Homepage</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $suppliers)
            <tr>
                <td>{!! $suppliers->CompanyName !!}</td>
            <td>{!! $suppliers->ContactName !!}</td>
            <td>{!! $suppliers->ContactTitle !!}</td>
            <td>{!! $suppliers->Adress !!}</td>
            <td>{!! $suppliers->City !!}</td>
            <td>{!! $suppliers->Region !!}</td>
            <td>{!! $suppliers->PostalCode !!}</td>
            <td>{!! $suppliers->Country !!}</td>
            <td>{!! $suppliers->Phone !!}</td>
            <td>{!! $suppliers->Fax !!}</td>
            <td>{!! $suppliers->HomePage !!}</td>
                <td>
                    {!! Form::open(['route' => ['suppliers.destroy', $suppliers->SupplierID], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('suppliers.show', [$suppliers->SupplierID]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('suppliers.edit', [$suppliers->SupplierID]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
