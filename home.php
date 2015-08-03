<?php
//Lets add our typical WordPress stuff, then fill it all in with some bad-ass layouts inspired by the awesome building blocks Zurb provides

get_header();
?>


<section class="hero">
  
  <div class="row intro">
    
    <div class="small-centered medium-uncentered medium-6 large-7 columns">
      <?php
      if ( ! dynamic_sidebar('home-hero') ) :
        dynamic_sidebar('home-hero');
      endif;
      ?>
    </div>
    
    <div class="small-centered medium-uncentered medium-6 large-5 columns">
      <div class="tech-img"
      <?php if( get_theme_mod( 'squarefoot_home_hero') ) :
        echo 'style=background-image:url("' . esc_url( get_theme_mod( 'squarefoot_home_hero' ) ) . '")';
      endif; ?>
        >
      </div>
    </div>
    
    <div class="button-group" data-grouptype="OR">
      <button href="#" class="small button primary radius">See the Details</button>
      <button href="#" class="small button success radius">Schedule a Tour</button>
    </div>
      
  </div>
  
</section>


<?php
get_footer();
?>