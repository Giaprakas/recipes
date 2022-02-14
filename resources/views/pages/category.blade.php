@extends ('layouts.master')

@section ('title', "Συνταγές")

@section ('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <button type="button" class="btn" style="border-radius:50%; background-color:#007AFF; color:white;" data-toggle="modal" data-target="#recipeModal" data-form-url="{{route('category.insert')}}"><i class="fa fa-plus"></i></button>    
            <div></br></div>
            <table class="table table-hover">    
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Category_id</th>
                    <th>Description</th>
                    <th></th>
                </tr> 
                @foreach($recipes as $recipe)    
                    <tr data-toggle="modal" data-target="#recipeModal" data-recipe="{{$recipe}}" data-form-url="{{route('category.update', $recipe) }}">
                        <div>
                            <td>{{$recipe->id}}</td>
                            <td>{{$recipe->title}}</td>
                            <td>{{$recipe->category->name}}</td>
                            <td>{{$recipe->body}}</td>
                        </div>
                        <td >
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#recipeModal" data-recipe="{{$recipe}}" data-form-url="{{route('category.update', $recipe) }}"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleterecipe" data-recipe="{{$recipe}}" data-form-url="{{route('category.delete', $recipe) }}"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('modal-forms')
<div class="modal fade" id="recipeModal" tabindex="-1" role="dialog" aria-labelledby="recipeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <form id="recipeModalForm" method="post" class="form-group">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="recipeLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div><h5>Title:</h5><input id="title" type="" name="title" value=""/></div>
                    <div>
                        <h5>Category:</h5>
                        <select name="category_id">
                            @isset($categories)
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option> 
                                @endforeach
                            @endisset
                            <!-- <input id="category_id" type="" name="category_id" value=""> -->
                        </select>
                    </div>
                    <div><h5>Description:</h5><input id="body" type="" name="body" value=""/></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- ////////////////////////// -->
<!-- ////// DELETE MODAL ////// -->
<!-- ////////////////////////// -->
<div class="modal fade" id="deleterecipe" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deleterecipe" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form id="deleterecipeForm" method="post" class="form-group">
            @csrf    
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                    Are you sure you want to delete <span id="modal-category_name"></span>?
                    <input type="hidden" id="category" name="category_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
 
@section('js-scripts')

<script>
    $(function(){
        console.log('tesaazadsda');
    })
    $(document).on('show.bs.modal', '#recipeModal',function(e) {
        console.log($(e.currentTarget).find('input[name="_token"]').val());
        //get data of the clicked element
        var recipe = $(e.relatedTarget).data('recipe');
        var formUrl = $(e.relatedTarget).data('form-url');
        $(e.currentTarget).find('#recipeModalForm').attr('action',formUrl);
        if (recipe) {
            //post data attributes to the textboxes
            $.each(recipe, function(key,value){
                $(e.currentTarget).find('#'+key).val(value)
            });
            //     .find('input[name="title"]').val(recipe.title).end()
                //  .find('input[name="category_id"]').val(recipe.category.name).end();
            //     .find('input[name="body"]').val(recipe.body).end()
            $(e.currentTarget).find('#recipeLabel').html('<strong>Edit Recipe</strong>');
        }
        else
        {
            $(e.currentTarget).find('#recipeLabel').html('<strong>New Recipe</strong>');
        }
    });

    $(document).on('show.bs.modal', '#deleterecipe', function(e){
        var formUrl = $(e.relatedTarget).data('form-url');
        $(e.currentTarget).find("#deleterecipeForm").attr('action',formUrl);
    });
</script>
@endsection