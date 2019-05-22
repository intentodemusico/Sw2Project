<!-- Companyname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CompanyName', 'Companyname:') !!}
    {!! Form::text('CompanyName', null, ['class' => 'form-control']) !!}
</div>

<!-- Contactname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ContactName', 'Contactname:') !!}
    {!! Form::text('ContactName', null, ['class' => 'form-control']) !!}
</div>

<!-- Contacttitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ContactTitle', 'Contacttitle:') !!}
    {!! Form::text('ContactTitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Adress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Adress', 'Adress:') !!}
    {!! Form::text('Adress', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('City', 'City:') !!}
    {!! Form::text('City', null, ['class' => 'form-control']) !!}
</div>

<!-- Region Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Region', 'Region:') !!}
    {!! Form::text('Region', null, ['class' => 'form-control']) !!}
</div>

<!-- Postalcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PostalCode', 'Postalcode:') !!}
    {!! Form::text('PostalCode', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Country', 'Country:') !!}
    {!! Form::text('Country', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Phone', 'Phone:') !!}
    {!! Form::text('Phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Fax', 'Fax:') !!}
    {!! Form::text('Fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Homepage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('HomePage', 'Homepage:') !!}
    {!! Form::text('HomePage', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('suppliers.index') !!}" class="btn btn-default">Cancel</a>
</div>
