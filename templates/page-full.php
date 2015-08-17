<?php
/*
Template Name: Full Width
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

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<<?php
			//Let's just take this out for now, since we don't really want comments on pages, per say
			//comments_template();
			?>
		</article>
	
		</div>
	</div>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
