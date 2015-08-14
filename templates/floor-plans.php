<?php
/*
Template Name: Floor Plans
*/

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<header
      <?php if( get_theme_mod( 'squarefoot_hero_bg') ) :
        echo 'style=background-image:url("' . esc_url( get_theme_mod( 'squarefoot_hero_bg' ) ) . '")';
      endif; ?>
    >
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
		
	<div class="row">
		<div class="small-12 large-12 columns" role="main">
		
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<?php
		// Let's start our custom loop set for the slider and vertical nav
		
		// The args
		$args = array (
			'post_type'              => array( 'floor_plans' ),
			'order'                  => 'DESC',
			'orderby'                => 'date',
		);
		
		// The Query
		$floorplan_query = new WP_Query( $args );
		?>
		<div class="slider-nav">
		<?php
			// The Loop for Navigation
			if ( $floorplan_query->have_posts() ) {
				while ( $floorplan_query->have_posts() ) {
					$floorplan_query->the_post();
				?>
					<div class="article">
						<h4><?php the_title(); ?></h4>
						<?php echo the_post_thumbnail('medium'); ?>
					</div>
				<?php
				}
			} else {
				echo '<h3>I am afraid, Dave</h3>';
			}
			?>
		</div>
		
		<?php
		// Reset the post data before we do our second loop for actual content
		wp_reset_postdata();
		?>
		
		<div class="slider-for">
			<?php
			// The Loop for Content
				if ( $floorplan_query->have_posts() ) {
					while ( $floorplan_query->have_posts() ) {
						$floorplan_query->the_post();
					?>
						<div class="article">
							<div class="large-8 columns">
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
								<div class="floorplan-info">
									<p><span class="info-header">Price: </span><?php echo floor_plan_details_get_meta( "floor_plan_details_price" ); ?></p>
									<p><span class="info-header">Squarefeet: </span><?php echo floor_plan_details_get_meta( "floor_plan_details_squarefeet" ); ?></p>
									<p><span class="info-header">Bedrooms: </span><?php echo floor_plan_details_get_meta( "floor_plan_details_bed" ); ?></p>
									<p><span class="info-header">Bathrooms: </span><?php echo floor_plan_details_get_meta( "floor_plan_details_bath" ); ?></p>
								</div>
							</div>
							<div class="large-4 columns">
								<a class="plan-image-link" target="_blank" href="<?php
								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								echo $url;?>
								">
									<?php echo the_post_thumbnail('large'); ?>
								</a>
								<a href="/contact" class="gradButton">Availability</a>
							</div>
						</div>
					<?php
					}
				} else {
					echo '<h3>I am afraid, Dave</h3>';
				}
			?>
		</div>
			
		</article> 
		
		</div>
	</div>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
