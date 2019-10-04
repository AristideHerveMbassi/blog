jQuery(document).ready(function(){


    // Function te create an instance of categorie
    jQuery('.kt-form').submit(function(e){
        //We append a spinner to the submit button
        $('.submit').addClass('kt-spinner kt-spinner--right kt-spinner--md kt-spinner--light');
        e.preventDefault();
        //Wen remove div with invalid error message
        $('.invalid-feedback').remove();
        //remove class invalid before form submiting
        $( 'input' ).removeClass( 'is-invalid' )
        $('textarea').removeClass('is-invalid')




        let action_route = $(this).attr('action')
        //We make ajax request to store the data
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //We lauch ajax with a timeout of 1000ms
        setTimeout(function(){



        jQuery.ajax({
            url: action_route,
            type: 'POST',
            data: {
                name: jQuery('#name').val(),
                description: jQuery('#description').val(),


            },
            success: function(result){
                //If success, we show a success toastr

                Swal.fire({
                    type: 'success',
                    title: 'Catégorie crée',
                    showConfirmButton: false,
                    timer: 1500
                })

                console.log(result);

                $('.kt-form')[0].reset();
               ;
                setTimeout(function(){
                    location.reload(true); // We reload the page
                    }, 1000);



            },
            error:function(error){
                if (error.status===422){
                    var errors = error.responseJSON
                    toastr.error(errors.message);
                    $.each(errors.errors , function (key, value) {
                        var input = '.kt-form input[id=' + key + ']';
                        var textarea = '.kt-form textarea[id=' + key + ']';
                        $(input + '+small').text(value);
                        $(input).addClass('is-invalid');
                        $(input).after(' <div class="invalid-feedback">'+value+'.</div> ');
                        $(textarea + '+small').text(value);
                        $(textarea).addClass('is-invalid');
                        $(textarea).after(' <div class="invalid-feedback">'+value+'.</div> ');
                    })

                }
                else {
                    toastr.error('Internal system error please contact administrator');
                }

            }




        });


        //At the end we remove the spinner
            $('.submit').removeClass('kt-spinner kt-spinner--right kt-spinner--md kt-spinner--light');

        }, 600);
    });






    /**
     * Start edit action to categorie element
     */
    $(document).on('click', '.edit', function(event) {


        //We get the id of the entity
        var dataSlug = $(this).attr('data-slug')
        let editAction = "category/"+dataSlug+"/edit"

        console.log(dataSlug)
        console.log(editAction)


        $.ajax({
            url: "/category/"+dataSlug+"/edit",
            type: 'GET',
            data: {
                id: dataSlug,
            },
            success: function(result){
                toastr.success("Categorie found !");
                console.log(result);

                $('#name').val(result.name)
                $('#description').val(result.description)

                //We show the update button and append it the id of the current entity
                $('.invisible').removeClass('invisible').addClass(['visible', 'update']).attr('data-slug', dataSlug)

                $('html, body').animate(
                    {
                        scrollTop: $('.kt-portlet__head-label').offset().top,

                    },
                    500,
                    'linear'
                );
                $("#name").focus();




            },
            error:function(error){
                toastr.error("Categorie not found !");
            }


        });
        // End if
    });

    /**
     * End edit action to categorie element
     */




    /**
     * Start update action to categorie element
     */

    jQuery(document).on('click','.update', function(e){
        //We append a spinner to the submit button
        $('.update').addClass('kt-spinner kt-spinner--right kt-spinner--md kt-spinner--light');
        e.preventDefault();
        //Wen remove div with invalid error message
        $('.invalid-feedback').remove();
        //remove class invalid before form submiting
        $( 'input' ).removeClass( 'is-invalid' )
        $('textarea').removeClass('is-invalid')

        var dataSlug = $(this).attr('data-slug');

        console.log(dataSlug, )

        let action_route = "/category/";
        console.log(dataSlug, action_route )
        //We make ajax request to store the data
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //We lauch ajax with a timeout of 1000ms
        setTimeout(function(){



            jQuery.ajax({
                url: action_route,
                type: 'POST',
                data: {
                    name: jQuery('#name').val(),
                    description: jQuery('#description').val(),
                    slug:dataSlug


                },
                success: function(result){

                    $('.visible').removeClass(['visible', 'update']).addClass('invisible').attr('data-slug', dataSlug)

                    //If success, we show a success toastr
                    toastr.success("Catégorie successfuly saved !");
                    console.log(result);

                    $('.kt-form')[0].reset();
                    ;
                    setTimeout(function(){
                        location.reload(true); // We reload the page
                    }, 1000);



                },
                error:function(error){
                    if (error.status===422){
                        var errors = error.responseJSON
                        toastr.error(errors.message);
                        $.each(errors.errors , function (key, value) {
                            var input = '.kt-form input[id=' + key + ']';
                            var textarea = '.kt-form textarea[id=' + key + ']';
                            $(input + '+small').text(value);
                            $(input).addClass('is-invalid');
                            $(input).after(' <div class="invalid-feedback">'+value+'.</div> ');
                            $(textarea + '+small').text(value);
                            $(textarea).addClass('is-invalid');
                            $(textarea).after(' <div class="invalid-feedback">'+value+'.</div> ');
                        })

                    }
                    else {
                        toastr.error('Internal system error please contact administrator');
                    }

                }




            });


            //At the end we remove the spinner
            $('.submit').removeClass('kt-spinner kt-spinner--right kt-spinner--md kt-spinner--light');

        }, 600);
    });


    /**
     * end Update action to categorie element
     */





    /**
     * Start Delete action to categorie element
     */
    $(document).on('click', '.remove', function(event) {
        var dataSlug = $(this).attr('data-slug')
        let deleteAction = "/category/"+dataSlug+""

        swal.fire({
            title: 'Êtes vous sur ?',
            text: "Cette opération sera irréversible!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Oui je confirme!',
            cancelButtonText:'Annuler'
        }).then(function(result) {
            if (result.value) {

                //We get the id of the entity


                console.log($(this))
                console.log(deleteAction)

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: deleteAction,
                    type: 'DELETE',
                    data: {
                        slug: dataSlug,
                    },
                    success: function(result){
                        swal.fire(
                            'Supprimé!',
                            'La catégorie a été supprimée.',
                            'success',
                            'Done'
                        );

                        setTimeout(function(){
                           location.reload(true); // We reload the page
                        }, 1000);




                    },
                    error:function(error){
                        swal.fire(
                            'Oops...!',
                            'Une erreur s\'est\' produite.',
                            'error',
                            'Done'
                        );

                    }


                });
                swal.fire(
                    'Supprimé!',
                    'La catégorie a été supprimée.',
                    'success',
                    1500,
                );
            }
        });
    });
    /**
     * End Delete action to categorie element
     */
/**

    $(document).on('click', '.remove', function(event) {

            alert('Are your sure ?')
        //We get the id of the entity
        var dataSlug = $(this).attr('data-slug')
        let deleteAction = "/category/"+dataSlug+""

        console.log(dataSlug)
        console.log(deleteAction)

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: deleteAction,
            type: 'DELETE',
            data: {
                slug: dataSlug,
            },
            success: function(result){
                toastr.success("Categorie deleted !");
                console.log(result);

                location.reload(true); // We reload the page



            },
            error:function(error){
                toastr.error("Categorie not found !");
            }


        });
        // End if
    });**/
});