@extends ('layouts.master')

@section ('title', "Συστατικά")

@section ('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
         <button type="button" id="scriptbtn" class="btn btn-primary" style="margin:10px 0px;" data-toggle="modal" data-target="#ingredientModal" data-form-url="{{route('ingredient.insert')}}">
            <i class="fa fa-plus"></i>
        </button>
        <table class="table table-hover">    
            <tr>
                <th></th>
                <th>Id</th>
                <th>Όνομα</th>
                <th>Μέτρηση</th>
            </tr> 
            @foreach($ingredients as $ingredient)    
                <tr>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" title="Επεξεργασία" data-toggle="modal" data-target="#ingredientModal" data-ingredient="{{$ingredient}}" data-form-url="{{route('ingredient.update', $ingredient) }}"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-sm" title="Διαγραφή" data-toggle="modal" data-target="#deleteingredient" data-ingredient="{{$ingredient}}" data-form-url="{{route('ingredient.delete', $ingredient) }}"><i class="fa fa-trash"></i></button>
                    </td>
                    <td>{{$ingredient->id}}</td>
                    <td>{{$ingredient->name}}</td>
                    <td>{{$ingredient->measure_unit}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection