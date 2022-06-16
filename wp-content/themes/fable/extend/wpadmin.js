
jQuery(window).load(function(){

	/* Config for Page with Full Width Template */
	var main_layout = jQuery(".cmb2-id-fable-met-main-layout");
	var page_heading_settings = jQuery("#page_heading_settings");

	main_layout.bind("toggle_showhide",function(){
		var template = 	jQuery('#page_template :selected').text();
		if(template == "Visual Composer Template"){
			//jQuery(main_layout).css("display","none")
			//jQuery('#page_heading_settings').css("display","none");
		}else{
			// jQuery(main_layout).css("display","block");
			// jQuery('#page_heading_settings').css("display","block");
		}

	});
	main_layout.trigger("toggle_showhide");
	jQuery('#page_template').change(function(){
		main_layout.trigger("toggle_showhide");
	});
	/* /Config for Page with Full Width Template */

	/* Config for post format */
	var embed_media = jQuery(".cmb2-id-fable-met-embed-media");
	

	embed_media.bind("toggle_showhide",function(){
		var post_format_radio = jQuery('input[name=post_format]:checked').val();

		if(String(post_format_radio) == String('audio') || String(post_format_radio) == String('video')){
			jQuery(embed_media).css("display","block");
		}else{
			jQuery(embed_media).css("display","none");
		}
	});

	embed_media.trigger("toggle_showhide");
	jQuery('#post-formats-select input').change(function(){
		embed_media.trigger("toggle_showhide");
	});
	

	
});

