@extends ('layouts.master')

@section('title', 'Κατηγορίες')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <button type="button" class="btn btn-primary" title="New" style="margin:10px 0px;"><i class="fa fa-plus"></i></button>
        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Ενέργειες</th>
            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <button type="button" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection

@yield('modals')