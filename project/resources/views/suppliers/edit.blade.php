@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Suppliers
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($suppliers, ['route' => ['suppliers.update', $suppliers->SupplierID], 'method' => 'patch']) !!}

                        @include('suppliers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection