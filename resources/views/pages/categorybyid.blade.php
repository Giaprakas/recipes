@extends ('layouts.master')

@section ('title', "{{$category->name}}")

@section ('content')
        <p>
            <a href="/categorybyid/{{ $recipe->category->id }}">{{$category->recipe->title}}</a>
        </p>
@endsection