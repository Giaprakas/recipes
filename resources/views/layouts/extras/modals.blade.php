<Recipepage>
    <!-- ////// NEW OR EDIT MODAL ////// -->
    <div class="modal fade" id="recipeModal" tabindex="-1" role="dialog" aria-labelledby="recipeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <form id="recipeModalForm" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="recipeLabel"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row pt-1">
                            <div class="col-sm-7 form-group">
                                <label class="control-label">Τίτλος</label>
                                <input class="form-control input-sm" id="title" type="" name="title" value=""/>
                            </div>
                            <div class="col-sm-5 form-group">
                                <label class="control-label">Tag</label>
                                <input class="form-control input-sm" id="slug" type="" name="slug" value=""/>
                            </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col-sm-4 form-group">
                                <label class="control-label">Κατηγορία</label>
                                <select class="form-control input-sm" id="category_id" name="category_id">
                                    {{-- @isset($categories)
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option> 
                                        @endforeach
                                    @endisset --}}
                                </select>
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="select_ingredient">Συστατικά</label>
                                <select multiple="multiple" id="select_ingredient" multiple name="ingredient_id[]" class="form-control search-select" style="width:100%">
                                    {{-- @isset($ingredients) --}}
                                        {{-- @foreach ($ingredients as $ingredient) --}}
                                            {{-- <option value="{{$ingredient->id}}">{{$ingredient->name}}</option> --}}
                                        {{-- @endforeach --}}
                                    {{-- @endisset --}}
                                </select>
                            </div>
                        </div>
                        <div class="row pt-1">
                                <div class="amountsdiv">
                                    {{-- selected ingredients amounts --}}
                                </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col-sm-12 form-group">
                                <label class="control-label">Περιγραφή</label>
                                <input class="form-control input-sm" id="body" type="" name="body" value=""/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- ////// DELETE MODAL ////// -->
    <div class="modal fade" id="deleterecipe" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deleterecipe" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form id="deleterecipeForm" method="post" class="form-group">
                @csrf    
                <div class="modal-content">
                    <div class="modal-header"></div>
                    <div class="modal-body">
                        Are you sure you want to delete: <span></span> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</Recipepage>

<categorypage>
    <!-- ////// CATEGORY MODAL ////// -->
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
</categorypage>

<ingredientspage>
    <div class="modal fade" id="ingredientModal" tabindex="-1" role="dialog" aria-labelledby="ingredientModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <form id="ingredientModalForm" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="ingredientModal"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row pt-1">
                            <div class="col-sm-6 form-group">
                                <label class="control-label">Συστατικό</label>
                                <input class="form-control input-sm" id="name" type="text" name="name" value=""/>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label class="control-label">Μονάδα μέτρησης</label>
                                <select name="measure_unit" id="measure_unit" class="form-control input-sm validate">   
                                    <option value>&nbsp;</option>
                                    <option>τεμάχια</option>
                                    <option>γραμμάρια</option>
                                    <option>milliliter</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Άκυρο</button>
                        <button type="submit" class="btn btn-success">Αποθήκευση</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- ////////////////////////// -->
    <!-- ////// DELETE MODAL ////// -->
    <!-- ////////////////////////// -->
    <div class="modal fade" id="deleteingredient" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deleteingredient" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form id="deleteingredientForm" method="post" class="form-group">
                @csrf    
                <div class="modal-content">
                    <div class="modal-header"></div>
                    <div class="modal-body">
                        Are you sure you want to delete: <span></span> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</ingredientspage>

<productpage>
    <!-- ////// PORDUCT MODAL ////// -->
    <div class="modal fade" id="newPopUpModal" tabindex="-1" role="dialog" aria-labelledby="newPopUpLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form action="#" id="categoryModalForm" novalidate="novalidate">
                @csrf
                <div class="modal-content">
                    <div class="modal-header border border-top-right-left-0">
                        <h2 class="container pt-3">Υποπροϊόντος</h2>
                        <div class="errorHandler alert alert-danger no-display" style="display:block;">
                            <i class="fa fa-times-sign"></i>
                            " Υπάρχουν λάθη στη φόρμα. Παρακαλώ ελέξτε τα στοιχεία παρακάτω "
                        </div>
                        <div class="successHandler alert alert-success no-display" style="display:none;">
                            <i class="fa fa-ok"></i>
                            " Όλα καλά "
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row pt-1">
                            <!-- error -->
                            <div class="col-sm-6 form-group">
                                <label class="control-label" for="proion">Προϊόν/Εργασία 
                                    <span class="symbol required" aria-required="true"></span>
                                </label>
                                <input id="proion" type="text" class="form-control input-sm validate" aria-required="true" aria-describedby="proion-error" aria-invalid>
                                <span id="proion-error" class="help-block"></span>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label class="control-label"for="monada_metrisis">Μον.Μέτρησης <span class="symbol required" aria-required="true"></span></label>
                                <select class="form-control input-sm validate" id="monada_metrisis">   
                                <!-- <option style="display:none;" value="selected hidden" id="monada_metrisis">Τεμάχια</option>  -->
                                    <option value>&nbsp;</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label class="control-label" for="logist">Λογιστ.Χαρ/σμός <span class="symbol required" aria-required="true"></span></label>
                                <select class="form-control input-sm validate">
                                    <!-- <option style="display:none;" value="selected hidden" id="logist">Εμπόρευμα</option>      -->
                                    <option value>&nbsp;</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label class="control-label">Φ.Π.Α <span class="symbol required" aria-required="true"></span></label>    
                                <select for="fpa" class="form-control input-sm validate">
                                    <!-- <option style="display:none;" value="selected hidden" id="fpa">24.00% - Φ.Π.Α</option>     -->
                                    <option>&nbsp;</option>
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
                                <div class="input-group">
                                    <input id="timi_agoras" type="text" class="form-control input-sm">
                                    <span class="input-group-addon">€</span>
                                </div>
                                
                            </div> 
                            <div class="col-sm-2">
                                <label for="posoto_kerdous">Ποσοστό Κέρδους</label>
                                <div class="input-group">
                                    <input id="posoto_kerdous" type="text" class="form-control input-sm">
                                    <span class="input-group-addon">%</span>
                                </div>
                                
                            </div> 
                            <div class="col-sm-2">
                                <label for="timi_polisis">Τιμή Πώλησης</label>
                                <div class="input-group">
                                    <input id="timi_polisis" type="text" class="form-control input-sm">
                                    <span class="input-group-addon">€</span>
                                </div>
                                
                            </div>
                            <div class="col-sm-2">
                                <label for="timi_lianikis">Τιμή Λιανικής</label>
                                <div class="input-group">
                                    <input id="timi_lianikis" type="text" class="form-control input-sm">
                                    <span class="input-group-addon">€</span>
                                </div>
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
</productpage>
