<?php
/*
Template Name: Floor Plans
*/

get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		
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
								<h4><?php the_title(); ?></h4>
								<p><?php the_content(); ?></p>
								<div class="floorplan-info">
									<p><span class="info-header">Price: </span><?php echo floor_plan_details_get_meta( "floor_plan_details_price" ); ?></p>
									<p><span class="info-header">Squarefeet: </span><?php echo floor_plan_details_get_meta( "floor_plan_details_squarefeet" ); ?></p>
									<p><span class="info-header">Bedrooms: </span><?php echo floor_plan_details_get_meta( "floor_plan_details_bed" ); ?></p>
									<p><span class="info-header">Bathrooms: </span><?php echo floor_plan_details_get_meta( "floor_plan_details_bath" ); ?></p>
								</div>
							</div>
							<div class="large-4 columns">
								<?php echo the_post_thumbnail('medium'); ?>
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
	<?php endwhile; // End the loop ?>
	
	</div>
</div>

<?php get_footer(); ?>
