<!-- Productname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProductName', 'Productname:') !!}
    {!! Form::text('ProductName', null, ['class' => 'form-control']) !!}
</div>

<!-- Supplierid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SupplierID', 'Supplierid:') !!}
    {!! Form::number('SupplierID', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoryid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CategoryID', 'Categoryid:') !!}
    {!! Form::number('CategoryID', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantityperunity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('QuantityPerUnity', 'Quantityperunity:') !!}
    {!! Form::text('QuantityPerUnity', null, ['class' => 'form-control']) !!}
</div>

<!-- Unitprice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnitPrice', 'Unitprice:') !!}
    {!! Form::text('UnitPrice', null, ['class' => 'form-control']) !!}
</div>

<!-- Unitsinstock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnitsInStock', 'Unitsinstock:') !!}
    {!! Form::number('UnitsInStock', null, ['class' => 'form-control']) !!}
</div>

<!-- Unitsonorder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnitsOnOrder', 'Unitsonorder:') !!}
    {!! Form::number('UnitsOnOrder', null, ['class' => 'form-control']) !!}
</div>

<!-- Reorderlevel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ReorderLevel', 'Reorderlevel:') !!}
    {!! Form::number('ReorderLevel', null, ['class' => 'form-control']) !!}
</div>

<!-- Discontinued Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Discontinued', 'Discontinued:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('Discontinued', 0) !!}
        {!! Form::checkbox('Discontinued', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
