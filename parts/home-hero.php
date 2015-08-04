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
    
    <?php
      if ( ! dynamic_sidebar('home-hero-buttons') ) :
        dynamic_sidebar('home-hero-buttons');
      endif;
    ?>
      
  </div>