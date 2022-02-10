@extends ('layouts.master')

@section ('title', "Κατηγορίες προϊόντων")

@section ('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <button type="button" class="btn" style="border-radius:50%; background-color:#007AFF; color:white;" data-toggle="modal" data-target="#editRecipe"><i class="fa fa-plus"></i></button>    
            <div></br></div>
        
            <table class="table table-hover">    
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th></th>
                </tr> 
                @foreach($recipes as $recipe)         
                    <tr href="#showRecipe" data-toggle="modal" data-target="#showRecipe{{$recipe->id}}">
                        <div>
                            <td>{{$recipe->id}}</td>
                            <td>{{$recipe->title}}</td>
                            <td>{{$recipe->category}}</td>
                            <td>{{$recipe->body}}</td>
                        </div>
                        <td >
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editRecipe" data-recipe="{{$recipe}}"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#showRecipe" data-recipe="{{$recipe}}"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('modal-forms')

<!--/////////////////////////////////////////////////////////////////////////
///////////////////////////// Modal - Edit Recipe /////////////////////////////
///////////////////////////////////////////////////////////////////////////-->

<div class="modal fade" id="editRecipe" tabindex="-1" role="dialog" aria-labelledby="editRecipeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editRecipeLabel">Edit Recipe</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div><h5>Id:</h5><input type="" name="recipeId" value=""/></div>
                <div><h5>Title:</h5><input type=""  name="recipeTitle" value=""/></div>
                <div><h5>Category:</h5><input type="" name="recipeCategory" value=""/></div>
                <div><h5>Description:</h5><input type="" name="recipeDescription" value=""/></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!--/////////////////////////////////////////////////////////////////////////
///////////////////////////// Modal - Show Recipe /////////////////////////////
///////////////////////////////////////////////////////////////////////////-->

<div class="modal fade" id="showRecipe" tabindex="-1" role="dialog" aria-labelledby="showRecipeLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="showRecipeLabel">Show recipe: 
                    <span style="color:green;">SHOW</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>
            </div>
            <div class="modal-body">
                
                <p><h4>ID: </h4><input type="text" name="recipeId" value=""/></p>
                <p><h4>TITLE: </h4><input type="text" name="recipeTitle" value=""/></p>
                <p><h4>CATEGORY: </h4>{{$recipe->category}}</p>
                <p><h4>DESCRIPTION: </h4>{{$recipe->body}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>


    <!--/////////////////////////////////////////////////////////////////////////
///////////////////////////// Modal - Add Recipe /////////////////////////////
///////////////////////////////////////////////////////////////////////////-->

<div class="modal fade" id="addRecipe" tabindex="-1" role="dialog" aria-labelledby="addRecipeLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addRecipeLabel">New Recipe</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div><h5>Id:</h5><input type="" name="recipeId" value=""/></div>
                <div><h5>Title:</h5><input type="" name="recipeTitle" value=""/></div>
                <div><h5>Category:</h5><input type="" name="recipeCategory" value=""/></div>
                <div><h5>Description:</h5><input type="" name="recipeDescription" value=""/></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Add recipe</button>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('js-scripts')
<script>
    $(document).on('show.bs.modal', '#editRecipe', function(e) {
        //get data of the clicked element
        var recipe = $(e.relatedTarget).data('recipe');
        if (recipe) {
            //post data attributes to the textboxes
            $(e.currentTarget)
                .find('input[name="recipeId"]').val(recipe.id).end()
                .find('input[name="recipeTitle"]').val(recipe.title).end()
                .find('input[name="recipeCategory"]').val(recipe.category).end()
                .find('input[name="recipeDescription"]').val(recipe.body).end();

            // $(e.currentTarget).find('input[name="recipeId"]').val(recipe.id);
        }
    })
</script>
@endsection