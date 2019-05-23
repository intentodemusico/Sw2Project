<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
            <tr>
                <th>Categoryname</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $categories)
            <tr>
                <td>{!! $categories->CategoryName !!}</td>
            <td>{!! $categories->Description !!}</td>
                <td>
                    {!! Form::open(['route' => ['categories.destroy', $categories->CategoryID], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('categories.show', [$categories->CategoryID]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('categories.edit', [$categories->CategoryID]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
