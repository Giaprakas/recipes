@extends ('layouts.master')

@section('title', 'Κατηγορίες')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <button type="button" class="btn btn-primary" title="New" style="margin:10px 0px;" data-toggle="modal" data-target="#categoryModal" data-form-url="{{route('recipe.insert')}}"><i class="fa fa-plus"></i></button>
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
                    <button type="button" class="btn btn-warning btn-sm" title="Edit" data-toggle="modal" data-target="#newPopUpModal" data-category="{{$category}}" data-form-url="{{route('recipe.update', $category)}}"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#deleteCategory" data-category="{{$category}}"data-form-url="{{route('recipe.delete', $category)}}"><i class="fa fa-trash"></i></button>
                </td>
            </tr>   
            @endforeach
        </table>
    </div>
</div>
@endsection

@section ('modal-forms')
<!-- ////////////////////////// -->
<!-- ////// NewPOPUP MODAL ////// -->
<!-- ////////////////////////// -->
<div class="modal fade" id="newPopUpModal" tabindex="-1" role="dialog" aria-labelledby="newPopUpLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="categoryModalForm" method="post" data-toggle="validator">
            @csrf
            <div class="modal-content">
                <div class="modal-header border border-top-right-left-0">
                    <h2 class="container pt-3">Υποπροϊόντος</h2>
                </div>
                <div class="modal-body">
                    <div class="row pt-1">
                        <div class="col-sm-6 form-group">
                            <label class="control-label" for="proion">Προϊόν/Εργασία</label>
                            <input id="proion" type="text" class="form-control input-sm" required="true" data-minlength="1">
                        </div>
                        <div class="col-sm-2">
                            <label for="monada_metrisis">Μον.Μέτρησης</label>
                            <select class="form-control input-sm" id="monada_metrisis">
                                <option style="display:none;" value="selected hidden">Τεμάχια</option>     
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="logist">Λογιστ.Χαρ/σμός</label>
                            <select class="form-control input-sm">
                                <option style="display:none;" value="selected hidden" id="logist">Εμπόρευμα</option>     
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label>Φ.Π.Α</label>    
                            <select for="fpa" class="form-control input-sm">
                                <option style="display:none;" value="selected hidden" id="fpa">24.00% - Φ.Π.Α</option>    
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div> 
                    </div>
                    &nbsp;
                    <div class="row pt-1">
                        <div class="col-sm-2">
                            <label for="timi_agoras">Τιμή Αγοράς</label>
                            <input id="timi_agoras" type="text" class="form-control input-sm">
                        </div> 
                        <div class="col-sm-2">
                            <label for="posoto_kerdous">Ποσοστό Κέρδους</label>
                            <input id="posoto_kerdous" type="text" class="form-control input-sm">
                        </div> 
                        <div class="col-sm-2">
                            <label for="timi_polisis">Τιμή Πώλησης</label>
                            <input id="timi_polisis" type="text" class="form-control input-sm">
                        </div>
                        <div class="col-sm-2">
                            <label for="timi_lianikis">Τιμή Λιανικής</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon1">€</span>
                                </div>
                                <input id="timi_lianikis" type="text" class="form-control input-sm">
                            </div>
                            <!-- <input id="timi_lianikis" type="text" class="form-control input-sm"> -->
                        </div> 
                    </div>
                    &nbsp;
                    <div class="row pt-1">
                        <div class="col-sm-10">
                            <label>Περιγραφή προϊόντος</label>
                            <textarea class="form-control input-sm" rows="4" id="comment"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="padding:5px;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Κλείσιμο</button>
                    <button type="submit" class="btn btn-success">Αποθήκευση</button>
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
                <div class="modal-header bg-primary" id="categoryLabel"></div>
                <div class="modal-body">
                    <div><h5>Category:</h5><input id="name" type="" name="name" value=""/></div>
                </div>
                <div class="modal-footer" style="padding:5px;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Κλείσιμο</button>
                    <button type="submit" class="btn btn-success">Αποθήκευση</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- ////////////////////////// -->
<!-- ////// DELETE MODAL ////// -->
<!-- ////////////////////////// -->
<div class="modal fade" id="deleteCategory" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deletecategory" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form id="deleteCategoryForm" method="post" class="form-group">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color:#d9534f;" id="categoryLabel"></div>
                <div class="modal-body" id="deletemodalbody">
                    Are you sure you want to delete: <span></span> ?
                </div>
                <div class="modal-footer" style="padding:5px;">
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
    $(document).on('show.bs.modal', '#categoryModal', function(e){
        var formUrl = $(e.relatedTarget).data('form-url');
        var category = $(e.relatedTarget).data('category');
        $(this).find('#categoryModalForm').attr('action',formUrl);
        if (category)
        {
            $(this).find('.modal-body input').val(category.name).end();
            $(this).find('#categoryModalForm').prepend('<input type="hidden" name="_method" value="PATCH">').end();
            $(this).find('.modal-header').html('<strong style="white;">Edit Recipe</strong>').end();
        }
        else
        {
            $(this).find('#categoryModalForm').prepend('<input type="hidden" name="_method" value="POST">').end();
            $(this).find('.modal-header').html('<strong style="white;">New Recipe</strong>').end();
        }
    });

    $(document).on('show.bs.modal', '#deleteCategory', function(e){
        var formUrl = $(e.relatedTarget).data('form-url');
        var category = $(e.relatedTarget).data('category');
        $(this).find("#deleteCategoryForm").attr('action',formUrl).end();
        $(this).find('#deleteCategoryForm').prepend('<input type="hidden" name="_method" value="DELETE">').end();
        $(this).find('.modal-body span').text(category.name).end();
        $(this).find('.modal-header').html('<strong style="color:white;">Delete Category</strong>').end();
    });
</script>
@endsection