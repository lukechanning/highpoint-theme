<?php
//Lets add our typical WordPress stuff, then fill it all in with some bad-ass layouts inspired by the awesome building blocks Zurb provides

get_header();
?>

<?php //Let's add our Hero section ?>

<section class="hero">
  
  <?php get_template_part( 'parts/home-hero' ); ?>
  
</section>

<?php //Now, let's throw in our middle text & photo section ?>

<section class="home-middle">
  
  <?php get_template_part( 'parts/home-middle' ); ?>
  
</section>

<?php
  get_footer();
?>