@extends ('layouts.master')

@section('title', 'Προϊόντα')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="col-md-offset-1">
            <button type="button" class="btn btn-primary" style="display:flex; align-items:center;" data-toggle="modal" data-target="#productsModal" data-form-url="{{route('product.insert')}}">
                <div><i class="fa fa-plus"></i><span>&nbsp Νέο Προϊόν</span></div>
            </button>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Προϊόν</th>
                <th>Ποσότητα</th>
                <th>Τιμή Λιανικής</th>
                <th>Περιγραφή</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->retail_price}}</td>
                <td>{{$product->description}}</td>
                <td>
                        <!-- buttons Edit & Delete -->
                </td>
            </tr>   
            @endforeach
        </table>
    </div>
</div>
@endsection

@section ('modal-forms')
<!-- ////////////////////////// -->
<!-- ////// PRODUCTS MODAL ////// -->
<!-- ////////////////////////// -->
<div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-labelledby="productsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="productsModalForm" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header border border-top-right-left-0">
                    <h2 class="container pt-3">Στοιχεία Υποπροϊόντος</h2>
                </div>
                <div class="modal-body">
                    <div class="row pt-1" id="inforow">
                        <div class="col-sm-6 form-group">
                            <label class="control-label" for="proion">Προϊόν/Εργασία 
                                <span class="symbol required" aria-required="true"></span>
                            </label>
                            <input name="title" type="text" class="form-control input-sm validate" aria-required="true" aria-describedby="proion-error" aria-invalid>
                            <span id="proion-error" class="help-block"></span>
                        </div>
                        <div class="col-sm-2 form-group">
                            <label class="control-label"for="monada_metrisis" >Μον.Μέτρησης <span class="symbol required" aria-required="true"></span></label>
                            <select class="form-control input-sm validate" name="quantity">   
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
                            <select class="form-control input-sm validate" name="accounting_type">
                                <!-- <option style="display:none;" value="selected hidden" id="logist">Εμπόρευμα</option>      -->
                                <option value>&nbsp;</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-sm-2 form-group">
                            <label class="control-label">Φ.Π.Α <span class="symbol required" aria-required="true"></span></label>    
                            <select name="tax" class="form-control input-sm validate">
                                <!-- <option style="display:none;" value="selected hidden" id="fpa">24.00% - Φ.Π.Α</option>     -->
                                <option>&nbsp;</option>
                                <option>4%</option>
                                <option>6%</option>
                                <option>9%</option>
                                <option>13%</option>
                                <option>17%</option>
                                <option>24%</option>
                            </select>
                        </div> 
                    </div>
                    &nbsp;
                    <div class="row pt-1" id="pricesrow">
                        <div class="col-sm-2">
                            <label for="timi_agoras">Τιμή Αγοράς</label>
                            <div class="input-group">
                                <input name="buying_price" type="text" class="form-control input-sm pricelist">
                                <span class="input-group-addon">€</span>
                            </div>
                            
                        </div> 
                        <div class="col-sm-2">
                            <label for="posoto_kerdous">Ποσοστό Κέρδους</label>
                            <div class="input-group">
                                <input name="gain_rate" type="text" class="form-control input-sm pricelist">
                                <span class="input-group-addon">%</span>
                            </div>
                            
                        </div> 
                        <div class="col-sm-2">
                            <label for="timi_polisis">Τιμή Πώλησης</label>
                            <div class="input-group">
                                <input name="selling_price" type="text" class="form-control input-sm pricelist">
                                <span class="input-group-addon">€</span>
                            </div>
                            
                        </div>
                        <div class="col-sm-2">
                            <label for="timi_lianikis">Τιμή Λιανικής</label>
                            <div class="input-group">
                                <input name="retail_price" type="text" class="form-control input-sm pricelist">
                                <span class="input-group-addon">€</span>
                            </div>
                        </div> 
                    </div>
                    &nbsp;
                    <div class="row pt-1">
                        <div class="col-sm-10">
                            <label>Περιγραφή προϊόντος</label>
                            <textarea class="form-control input-sm" rows="4" name="description"></textarea>
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
@endsection

@section('js-scripts')
<script>
///////////////////
// Product Modal //
///////////////////
$(document).on('show.bs.modal', '#productsModal', function(e){
    var formUrl = $(e.relatedTarget).data('form-url');
    var product = $(e.relatedTarget).data('product');
    $(this).find('#productsModalForm').attr('action',formUrl);
    if (product) {
        //post data attributes to the textboxes
        $.each(product, function(key,value){
            $(e.currentTarget).find('#'+key).val(value)
        });
        $(this).find('#productsModalForm').prepend('<input id="formmethod" type="hidden" name="_method" value="PATCH">');
    }
    else
    {
        $(this).find('#productsModalForm').prepend('<input id="formmethod" type="hidden" name="_method" value="POST">');
    } 
});

//////////////////////////
// Delete Product Modal //
//////////////////////////
$(document).on('show.bs.modal', '#deleteCategory', function(e){
    var formUrl = $(e.relatedTarget).data('form-url');
    var category = $(e.relatedTarget).data('category');
    $(this).find("#deleteCategoryForm").attr('action',formUrl).end();
    $(this).find('#deleteCategoryForm').prepend('<input id="formmethod" type="hidden" name="_method" value="DELETE">').end();
    $(this).find('.modal-body span').text(category.name).end();
    $(this).find('.modal-header').html('<strong style="color:white;">Delete Category</strong>').end();
});


///////////////////////
// Validation script //
///////////////////////
$(document).on('hidden.bs.modal' , '#productsModal' , function(e){
    $(this)
        .find('.form-group').removeClass('has-success has-error').end()
        .find('.control-label span').removeClass('ok').addClass('required').end()
        .find('#formmethod').remove().end()
        .find('.form-group span').removeClass('valid').text('').end();
    $(this).find('.modal-footer .btn-success').prop('disabled',true); 
});

$(document).on('keyup change' , '.validate' , function(e){
    var $modal = $(this).parents('.modal-content');
    var flag = false;
    if (!$(this).val()){ // empty or null input #proion
        $(this).parent().removeClass('has-success').addClass('has-error');
        $(this).parent().find('span:first').removeClass('ok').addClass('required');
        $(this).parent().find('span:last').removeClass('valid');
        $(this).parent().attr('aria-invalid',true);
    }
    else{
        $(this).parent().removeClass('has-error').addClass('has-success');
        $(this).parent().find('span:first').removeClass('required').addClass('ok');
        $(this).parent().children('span').addClass('valid').text('');
        $(this).attr('aria-invalid',false);
    }

    $('.validate').each(function(){
        if ($(this).val().length == 0) {
            flag = true;
        }
    });
    $modal.find('.modal-footer .btn-success').prop('disabled',flag);    
});

///////////////////////////
// Product prices script //
///////////////////////////
$(document).on('keyup', '#productsModal .pricelist', function(e){
    var $parent = $('#e');
    var bp = parseFloat($('input[name="buying_price"]').val());
    var gr = $('input[name="gain_rate"]').val();
    var sp;
    var rp;
    // var tax = $parent.find('select[name="tax"] option:selected').text();
    // console.log(tax);
    var tax = parseFloat('6%');
    if (gr){
        sp = (bp + (bp*gr/100));
    }
    else{
        sp = bp;   
    }
    rp = bp + (bp*tax/100);
    $('input[name="retail_price"]').val(rp);
    $('input[name="selling_price"]').val(sp);
});
</script>
@endsection