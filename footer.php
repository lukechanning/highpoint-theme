<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>

</section>

<footer class="footer">
  <div class="row">
    <div class="small-12 medium-6 large-5 columns">
      <?php if ( ! dynamic_sidebar('footer-widget-one')) :
      		dynamic_sidebar('footer-widget-one');
		endif;
		?>
    </div>
    <div class="small-12 medium-6 large-4 columns">
    	<?php if ( ! dynamic_sidebar('footer-widget-two')) :
      		dynamic_sidebar('footer-widget-two');
		endif;
		?>
      </div>
    <div class="small-12 medium-12 large-3 columns">
    	<?php if ( ! dynamic_sidebar('footer-widget-three')) :
      	dynamic_sidebar('footer-widget-three');
		endif;
		?>
    </div>
  </div>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

<!-- Let's add the Owl Carousel -->
<script src="/wp-content/themes/squarefoot/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
<script type="text/javascript">
    	jQuery(document).ready(function() {
	    		jQuery('.owl-carousel').owlCarousel({
	            loop:true,
	            items: 1,
	            center: true,
	            margin:10
	        });	
    	});
</script>

</body>
</html>