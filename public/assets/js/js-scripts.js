// RECIPE PAGE //
    // Add or Edit recipe modal
    $(document).on('show.bs.modal', '#recipeModal', function(e){
        //get data of the clicked element
        var formUrl = $(e.relatedTarget).data('form-url');
        var recipe = $(e.relatedTarget).data('recipe');
        var ingredients, category = null;
        $.ajax({
            url:'/get/ingredients',
            method:'GET',
            async: false,
            success: function(response){
                ingredients = response;
            }
        });

        $.ajax({
            url:'/get/category',
            method:'GET',
            async: false,
            success: function(response){
                category = response;
            }
        });
        $(this).find('#recipeModalForm').attr('action',formUrl);
        if (recipe)
        {
            //post data attributes to the textboxes
            $.each(recipe, function(key,value){
                $(e.currentTarget).find('#'+key).val(value)
            });
            $(e.currentTarget).find('#select_ingredient').val(ingredients);
            $.each(ingredients, function(key,value){
                // console.log($(e.currentTarget).find('#select_ingredient option[value='+value.id+']'));
                $(e.currentTarget).find('#select_ingredient option[value='+value.id+']').prop('selected', true);
            });
    
            $(e.currentTarget).find('#select_ingredient').change();
            $(this).find('#recipeModalForm').prepend('<input type="hidden" name="_method" value="PATCH">').end();
            $(this).find('.modal-header').html('<strong">Edit Recipe</strong>').end();
        }
        else
        {
            //initialize ingredients
            $('#select_ingredient').children().remove();
            //initialize categories
            $('#category_id').children().remove();
            $.each(ingredients, function(key,value){
                $('#select_ingredient').append($('<option>').attr('value',value.id).text(value.name));
            });
            $.each(category, function(key,value){
                $('#category_id').append($('<option>').attr('value',value.id).text(value.name));
            }); 
            $(this).find('#recipeModalForm').prepend($('<input>').attr('type','hidden').attr('name','_method').val("POST")).end();
            $(this).find('.modal-header').html('<strong>New Recipe</strong>').end();
        }
    });
    
    // delete modal
    $(document).on('show.bs.modal', '#deleterecipe', function(e){
        var formUrl = $(e.relatedTarget).data('form-url');
        var recipe = $(e.relatedTarget).data('recipe');
        $(this).find("#deleterecipeForm").attr('action',formUrl).end();
        $(this).find('#deleterecipeForm').prepend('<input type="hidden" name="_method" value="DELETE">').end();
        $(this).find(".modal-body span").text(recipe.title).end();  
    });
    // ingredients selection on modal
    $(document).on('change', '#select_ingredient', function(e){
        var $parent = $(this).parents('.modal-content').find('.amountsdiv');
        $(this).find('option:selected').each(function(){
            var optionName = $(this).text();
            var optionValue = $(this).val();
            if(optionValue && $parent.find('input[name="amount['+optionValue+']"]').length==0) {
                $parent.append([
                        $('<div>').addClass('col-sm-2 form-group').attr('id','ingredient['+optionValue+']').append([
                            $('<label>').addClass('control-label').text(optionName), // < > creates new node to add the elements class and text. Without! tries to find ex. all labels to append the elements class and text 
                            $('<input>').addClass('form-control input-sm').attr('name','amount['+optionValue+']').attr('id','amount')
                        ])
                ]);
            }
        });
        $(this).find('option:not(:selected)').each(function(){
            var optionValue = $(this).attr('value');
            $parent.find('div[id="ingredient['+optionValue+']"]').remove();
        });
    });
           
// CATEGROY PAGE //
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

    // Validation script //
    $(document).on('show.bs.modal' , '#newPopUpModal' , function(e){
        $(this)
            .find('.form-group').removeClass('has-success has-error').end()
            .find('.control-label span').removeClass('ok').addClass('required').end()
            .find('input').attr('aria-invalid',false).val('').end()
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

// INGREDIENTS PAGE //
    $(document).on('show.bs.modal', '#ingredientModal', function(e){
        var formUrl = $(e.relatedTarget).data('form-url');
        var ingredient = $(e.relatedTarget).data('ingredient');
        $(this).find('#ingredientModalForm').attr('action',formUrl);
        if (ingredient) {
            //post data attributes to the textboxes
            $.each(ingredient, function(key,value){
                $(e.currentTarget).find('#'+key).val(value)
            });
            $(this).find('#ingredientModalForm').prepend('<input id="formmethod" type="hidden" name="_method" value="PATCH">');
        }
        else
        {
            $(this).find('#ingredientModalForm').prepend('<input id="formmethod" type="hidden" name="_method" value="POST">');
        }
    });

    // Delete Ingredient Modal //
    $(document).on('show.bs.modal', '#deleteingredient', function(e){
        var formUrl = $(e.relatedTarget).data('form-url');
        var ingredient = $(e.relatedTarget).data('ingredient');
        $(this).find("#deleteingredientForm").attr('action',formUrl).end();
        $(this).find('#deleteingredientForm').prepend('<input id="formmethod" type="hidden" name="_method" value="DELETE">').end();
        $(this).find('.modal-body span').text(ingredient.name).end();
        $(this).find('.modal-header').html('<strong style="color:white;">Διαγραφή συστατικού</strong>').end();
    });