<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Productname</th>
        <th>Supplierid</th>
        <th>Categoryid</th>
        <th>Quantityperunity</th>
        <th>Unitprice</th>
        <th>Unitsinstock</th>
        <th>Unitsonorder</th>
        <th>Reorderlevel</th>
        <th>Discontinued</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $products)
            <tr>
                <td>{!! $products->ProductName !!}</td>
            <td>{!! $products->SupplierID !!}</td>
            <td>{!! $products->CategoryID !!}</td>
            <td>{!! $products->QuantityPerUnity !!}</td>
            <td>{!! $products->UnitPrice !!}</td>
            <td>{!! $products->UnitsInStock !!}</td>
            <td>{!! $products->UnitsOnOrder !!}</td>
            <td>{!! $products->ReorderLevel !!}</td>
            <td>{!! $products->Discontinued !!}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('products.show', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('products.edit', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
