@extends ('layouts.master')

@section ('title')
    {{$category->name}}
@endsection

@section ('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <table class="table table-hover">    
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
            </tr> 
            @foreach ($category->recipes as $recipe)    
            <tr>
                <div>
                    <td>{{$recipe->id}}</td>
                    <td>{{$recipe->title}}</a></td>
                    <td>{{$recipe->body}}</td>
                </div>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection

