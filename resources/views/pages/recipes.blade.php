@extends ('layouts.master')

@section ('title', "Συνταγές")

@section ('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <button type="button" class="btn btn-primary" style="color:white;" data-toggle="modal" data-target="#recipeModal" data-form-url="{{route('recipe.insert')}}"><i class="fa fa-plus"></i></button>    
            <div></br></div>
            <table class="table table-hover">    
                <tr>
                    <!-- <th>Id</th> -->
                    <th>Τίτλος</th>
                    <th>Κατηγορία</th>
                    <th>Συστατικά</th>
                    <th>Περιγραφή</th>
                    <th>Ενέργειες</th>
                </tr> 
                @foreach($recipes as $recipe)    
                    <tr>
                        <!-- <td>{{$recipe->id}}</td> -->
                        <td>{{$recipe->title}}</td>
                        <td><a href="/category/{{$recipe->category->id}}">{{$recipe->category->name}}</a></td>
                        <td>
                            @foreach ($recipe->ingredients as $ingredient)
                                <span class="label label-info">{{$ingredient->name}}: {{$ingredient->pivot->amount}}</span>
                            @endforeach
                        </td>
                        <td>{{$recipe->body}}</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#recipeModal" data-recipe="{{$recipe}}" data-ingredients="{{$recipe->ingredients}}" data-form-url="{{route('recipe.update', $recipe) }}"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleterecipe" data-recipe="{{$recipe}}" data-ingredients="{{$recipe->ingredients}}" data-form-url="{{route('recipe.delete', $recipe) }}"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection