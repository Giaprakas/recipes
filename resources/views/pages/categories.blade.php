@extends ('layouts.master')

@section ('title', "Κατηγορίες προϊόντων")

@section ('content')
    @foreach($recipes as $recipe)
        <div>{{$recipe->id}} - {{$recipe->title}} - {{$recipe->category}} - {{$recipe->body}}</div>
    @endforeach
@endsection
 