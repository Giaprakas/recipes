@extends ('layouts.master')

@section('title', 'Κατηγορίες')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
            @foreach $categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
