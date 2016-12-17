//------------------------------------------------------------------------
//								PRELOADER SCRIPT
//------------------------------------------------------------------------
$(window).load(function() { // makes sure the whole site is loaded

	"use strict";
    
    $('#preloader').delay(400).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('.clock').fadeOut(); // will first fade out the loading animation
	
	new WOW().init();
	
	$.stellar();
	
})




$(document).ready(function(){
	
	"use strict";	
	
//------------------------------------------------------------------------
//						TESTIMONIALS SLIDER SETTINGS
//------------------------------------------------------------------------
    var owl = $("#testimonials-slider");
    owl.owlCarousel({
        items : 5, 
        itemsDesktop : [1400,4], 
        itemsDesktopSmall : [1200,3], 
        itemsTablet: [900,2], 
        itemsMobile : [600,1],
		autoPlay : 4000,
		stopOnHover:true
    });
	
	
	 
	 
//------------------------------------------------------------------------
//						INTRO SUPERSLIDER SETTINGS
//------------------------------------------------------------------------
	$("#slides").superslides({
		play: 8000,
		animation: "fade",
		pagination: false,
		inherit_height_from:"#intro"
	});
		


	
//------------------------------------------------------------------------
//					SUBSCRIBE FORM VALIDATION'S SETTINGS
//------------------------------------------------------------------------          
    $('#subscribe_form').validate({
        onfocusout: false,
        onkeyup: false,
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        errorPlacement: function(error, element) {
            error.appendTo( element.closest("form"));
        },
        messages: {
            email: {
                required: "We need your email address to contact you",
                email: "Please, enter a valid email"
            }
        },
					
        highlight: function(element) {
            $(element)
        },                    
					
        success: function(element) {
            element
            .text('').addClass('valid')
        }
    }); 
	

		
				
//------------------------------------------------------------------------------------
//						SUBSCRIBE FORM MAILCHIMP INTEGRATIONS SCRIPT
//------------------------------------------------------------------------------------		
    $('#subscribe_form').submit(function() {
        $('.error').hide();
        $('.error').fadeIn();
        // submit the form
        if($(this).valid()){
            $('#subscribe_submit').button('loading'); 
            var action = $(this).attr('action');
            $.ajax({
                url: action,
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    $('#subscribe_submit').button('reset');
					if(data.state){
                        $('#modalSubscribe .modal-title').html('<i class="icon-envelope-letter"></i>Well done!<br>You are subscribed!');
                        $('#modalSubscribe').modal('show');
                    }else{
                        $('#subscribe_form').append(
                            '<label for="subscribe_email" generated="true" class="error" style="display: block;">'+data.info+'</label>'
                        );
                    }

                },
                error: function() {
                    $('#subscribe_submit').button('reset');
					
                    //Use labels to display messages
                   	//$('.error').html('Oops! Something went wrong!');
					
					//Use modal popups to display messages
					$('#modalSubscribe .modal-title').html('<i class="icon-ban"></i>Oops!<br>Something went wrong!');
					$('#modalSubscribe').modal('show');
					
                }
            });
        // return false to prevent normal browser submit and page navigation 
        }
        return false; 
    });
	  
	


//------------------------------------------------------------------------------------
//						REGISTRATION FORM VALIDATION'S SETTINGS
//------------------------------------------------------------------------------------		  
    $('#activity_form').validate({
        onfocusout: false,
        onkeyup: false,
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            order_id: "required",
            order_date: 'required',
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        messages: {
            email: {
                email: "Please, enter a valid email"
            },
        },

        highlight: function(element) {
            $(element)
            .text('').addClass('error')
        },                    
					
        success: function(element) {
            element
            .text('').addClass('valid')
        }
    });

    //------------------------------------------------------------------------------------
    //						REGISTRATION FORM SUBMIT SETTINGS
    //------------------------------------------------------------------------------------
    $('#activity_form').submit(function() {

        if($(this).valid()){
            $('#activity_submit').button('Submit...');
            var action = $(this).attr('action');
            $.ajax({
                url: action,
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    if(data.state){
                        $('#modalActivity .modal-title').html('<i class="icon-envelope-letter"></i>Well done!<br>Submit a successful thank you !');
                        $('#modalActivity').modal('show');
                        $('#activity_form').find('input').val('');
                        $('.screenshot .text').text('Order Screenshot');
                    }else{
                        $('#modalActivity .modal-title').html('<i class="icon-ban"></i>Oops!<br>'+data.info);
                        $('#modalActivity').modal('show');
                    }
                },
                error: function() {
                    $('#modalActivity .modal-title').html('<i class="icon-ban"></i>Oops!<br>Please subscribe and we will keep you updated!');
                    $('#modalActivity').modal('show');
                }
            });
        }
        return false;
    });
    //------------------------------------------------------------------------------------
    //						Image Upload Init
    //------------------------------------------------------------------------------------
    var uploader = WebUploader.create({
        auto: true,

        server: '/upload',

        pick: {
            id:'#order-screenshot',
            multiple:false
        },

        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/*'
        }
    });
    uploader.on( 'uploadProgress', function( file, percentage ) {
        $('.screenshot .text').text('Uploading');
    });
    uploader.on( 'uploadSuccess', function( file,data) {
        if(data.state){
            $('.screenshot input[name=order_screenshot]').val(data.path);
            var name=file.name.split('.'),
                fileName='';
            if(name.length>1){
                if(name[0].length>20){
                    name[0]=name[0].substring(0,20);
                }
                fileName=name[0]+'.'+name[1];
            }else{
                fileName='Done';
            }
            $('.screenshot .text').text(fileName);
        }else{
            $('.screenshot .text').text('Failed');
        }
    });
    uploader.on( 'uploadError', function( file ) {
        $('.screenshot .text').text('Failed');
    });

    $('#enjoin_submit').click(function () {
        $('#modalActivity .modal-title').html('<i class="icon-ban"></i>Oops!<br>Please subscribe and we will keep you updated!');
        $('#modalActivity').modal('show');
    });
});