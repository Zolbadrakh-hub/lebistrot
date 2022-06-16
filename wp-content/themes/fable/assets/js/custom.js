(function($) {
    
    'use strict';

    	$(document).ready(function () {

			/* ========================================================== */
			/*   Popup-Gallery                                            */
			/* ========================================================== */
			$('.popup-gallery').find('a.popup1').magnificPopup({
				type: 'image',
				gallery: {
				  enabled:true
				}
			}); 
			
			$('.popup-gallery').find('a.popup2').magnificPopup({
				type: 'image',
				gallery: {
				  enabled:true
				}
			}); 
		 
			$('.popup-gallery').find('a.popup3').magnificPopup({
				type: 'image',
				gallery: {
				  enabled:true
				}
			}); 
		 
			$('.popup-gallery').find('a.popup4').magnificPopup({
				type: 'iframe',
				gallery: {
				  enabled:false
				}
			}); 
		 
		 
			/* ========================================================== */
			/*   Navigation Background Color                              */
			/* ========================================================== */
			
			$(window).scroll(function() {
				if($(this).scrollTop() > 10) {
					$('.navbar-fixed-top').addClass('opaque');
				} else {
					$('.navbar-fixed-top').removeClass('opaque');
				}
			});


			/* ========================================================== */
			/*   SmoothScroll                                             */
			/* ========================================================== */
			
			$(".nav li a, a.scrool").click(function(e){
				
				var full_url = this.href;
				var parts = full_url.split("#");
				var trgt = parts[1];
				var target_offset = $("#"+trgt).offset();
				var target_top = target_offset.top;
				
				$('html,body').animate({scrollTop:target_top -69}, 1000);
					return false;
				
			});

			
			/* ========================================================== */
			/*   Contact                                                  */
			/* ========================================================== */
			$('#contact-form').each( function(){
				var form = $(this);
				//form.validate();
				form.submit(function(e) {
					if (!e.isDefaultPrevented()) {
						jQuery.post(this.action,{
							'names':$('input[name="contact_names"]').val(),
							'email':$('input[name="contact_email"]').val(),
							'phone':$('input[name="contact_phone"]').val(),
							'message':$('textarea[name="contact_message"]').val(),
						},function(data){
							form.fadeOut('fast', function() {
								$(this).siblings('p').show();
							});
						});
						e.preventDefault();
					}
				});
			})


			/* ========================================================== */
			/*   Register                                                 */
			/* ========================================================== */
			
			$('#register-form').each( function(){
				var form = $(this);
				//form.validate();
				form.submit(function(e) {
					if (!e.isDefaultPrevented()) {
						jQuery.post(this.action,{
							'names':$('input[name="register_names"]').val(),
							'phone':$('input[name="register_phone"]').val(),
							'date':$('input[name="register_date"]').val(),
							'email':$('input[name="register_email"]').val(),
							'ticket':$('select[name="register_ticket"]').val(),
							'time':$('select[name="register_time"]').val(),
						},function(data){
							form.fadeOut('fast', function() {
								$(this).siblings('p.register_success_box').show();
							});
						});
						e.preventDefault();
					}
				});
			})
	
		});
		
		if($('#instafeed').length > 0){
			var userFeed = new Instafeed({
			        get: 'user',
			        userId: $('#instafeed').data('userid'),
			        
			        accessToken: '3465678363.d0db726.458623f011b74f26af154f39da5a0f2a',
			        // accessToken: $('#instafeed').data('accesstoken'),
					resolution: 'thumbnail',
					limit: '16',
					template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /></a>'
			    });
			    userFeed.run();

		}


		

		$(window).load(function() {
	        $('#loader').fadeOut();
	    });

})(jQuery);