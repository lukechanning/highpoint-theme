<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<div class="top-bar-container contain-to-grid show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
        <?php if( get_theme_mod( 'squarefoot_logo') ) : ?>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>'
            title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>
            'rel='home'>
            <img src='<?php echo esc_url( get_theme_mod( 'squarefoot_logo' ) ); ?>
            'alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
            </a>
            </div>
        <?php else: ?>
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
        <?php endif; ?>
             <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
</div>

