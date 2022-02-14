@section('modals')
<!-- ////////////////////////// -->
<!-- ////// RECIPE MODAL ////// -->
<!-- ////////////////////////// -->
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
<!-- ////// CATEGORY MODAL ////// -->
<!-- ////////////////////////// -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <form id="categoryModalForm" method="post" class="form-group">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="categoryLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div><h5>Title:</h5><input id="title" type="" name="title" value=""/></div>
                    <div><input id="category_id" type="" name="category_id" value=""></div>
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
@endsection