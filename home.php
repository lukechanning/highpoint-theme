<?php
//Lets add our typical WordPress stuff, then fill it all in with some bad-ass layouts inspired by the awesome building blocks Zurb provides

get_header();
?>

<?php //Let's add our Hero section ?>
  
  <section class="hero" style="
  <?php
  if( get_theme_mod( 'squarefoot_hero_bg') ) :
      echo 'background-image:url(' . esc_url( get_theme_mod( 'squarefoot_hero_bg' ) ) . ');';
    else : 
      echo 'background-image: url(https://download.unsplash.com/38/HBzQnOQ6CWhlNi1YwAxZ_italy.jpg);"';
    endif;
    ?>
    ">
    <?php get_template_part( 'parts/home-hero' ); ?>
    
  </section>

<?php //Now, let's throw in our middle text & photo section ?>

  <section class="home-middle">
    
    <?php get_template_part( 'parts/home-middle' ); ?>
    
  </section>
  
<?php //Time to round it all out with a Home CTA section ?>

  <section class="home-cta" style="
  <?php
  if( get_theme_mod( 'squarefoot_cta') ) :
      echo 'background-image:url(' . esc_url( get_theme_mod( 'squarefoot_cta' ) ) . ');';
    else : 
      echo 'background-image: url(/wp-content/themes/squarefoot/assets/img/cta-bg.jpg);"';
    endif;
    ?>
    ">
    <?php get_template_part('parts/home-cta'); ?>
  </section>

<?php
  get_footer();
?>