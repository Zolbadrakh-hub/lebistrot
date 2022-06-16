	 <div class="footer">
	    <div class="container">

	        <div class="row footer-top">
	        	<?php if( is_active_sidebar('widget_footer1') ){?>
	            <div class="col-md-4 padding-bottom-50">
	                <?php dynamic_sidebar('widget_footer1'); ?>
	            </div>
	            <?php } ?>

	            <?php if( is_active_sidebar('widget_footer2') ){?>
	            <div class="col-md-4 padding-bottom-50">
	                <?php dynamic_sidebar('widget_footer2'); ?>
	            </div>
	            <?php } ?>

	            <?php if( is_active_sidebar('widget_footer3') ){?>
	            <div class="col-md-4 padding-bottom-50">
	                <?php dynamic_sidebar('widget_footer3'); ?>
	            </div>
	            <?php } ?>
	        </div>

	        

	        <div class="row">
	            <div class="footer-bottom">
	                <div class="col-md-5">
	                    <div class="copyright ">
	                    	<?php  if( is_active_sidebar('footer_bottom_left') ){ dynamic_sidebar('footer_bottom_left'); } ?>
	                    </div>
	                </div>

	                <div class="col-md-2 text-center">
	                	<?php if( is_active_sidebar('footer_bottom_center') ){ dynamic_sidebar('footer_bottom_center'); } ?>
	                </div>

	                <div class="col-md-5">
	                	<?php if( is_active_sidebar('footer_bottom_right') ){ dynamic_sidebar('footer_bottom_right'); } ?>
	                </div>

	            </div>
	        </div>


	    </div>
	</div>

	</div> <!-- /Wrapper -->
</div> <!-- /container_boxed -->
    
<?php wp_footer(); ?>
</body>
</html>