<?php
//Lets add our typical WordPress stuff, then fill it all in with some bad-ass layouts inspired by the awesome building blocks Zurb provides

get_header();
?>

<?php //Let's add our Hero section ?>

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
    
    <?php
      if ( ! dynamic_sidebar('home-hero-buttons') ) :
        dynamic_sidebar('home-hero-buttons');
      endif;
    ?>
      
  </div>
  
</section>

<?php //Now, let's throw in our middle text & photo section ?>

<section class="home-middle">
  
  <div class="row middle">
    <h2>This is the Title Block</h2>
    <p>Add anything you want. It can go here, it can go there, it can go just about anywhere. No worries, whatever you want! Just put it in this text block.</p>
  </div>
  
  <?php //Add the fancy cards section that we're going to use for more info ?>
  <div class="row cards">
    
    <?php //First card ?>
  <div class="large-4 columns">

    <div class="image-wrapper overlay-slide-in-left">
      
      <img src="/wp-content/themes/squarefoot/assets/img/move-in.jpg" />
      
      <div class="image-overlay-content">
        <h2>View Floorplans</h2>
        <p class="price">move-in specials</p>
        <a href="#" class="button">See Now</a>
      </div>
    
    </div>
  
    </div>
    
    <?php //Second Card ?>
    <div class="large-4 columns">
  
      <div class="image-wrapper overlay-slide-in-left">
        
        <img src="/wp-content/themes/squarefoot/assets/img/amens.jpg" />
        
        <div class="image-overlay-content">
          <h2>World-Class Amenities</h2>
          <p class="price">all the works</p>
          <a href="#" class="button">See Now</a>
        </div>
      
      </div>
    
    </div> 
    
    <?php //Third Card ?>
    <div class="large-4 columns">
  
      <div class="image-wrapper overlay-slide-in-left">
        
        <img src="/wp-content/themes/squarefoot/assets/img/neighborhood.jpg" />
        
        <div class="image-overlay-content">
          <h2>The Neighborhood</h2>
          <p class="price">a prime location</p>
          <a href="#" class="button">Want!</a>
        </div>
      
      </div>
    
    </div>
      <?php //End cards ?>
  </div>

  
</section>



<?php
get_footer();
?>