<div class="image-wrapper">
    <div class="row">

      <div class="small-12 medium-6 columns">
        <div class="callout-card alert radius">
          <div class="card-label">
            <div class="label-text">
              info
            </div>
          </div>
              
            <?php
            if ( ! dynamic_sidebar('home-cta-content')) :
                dynamic_sidebar('home-cta-content');
            endif;
            ?>
        </div>
      </div>

</div>