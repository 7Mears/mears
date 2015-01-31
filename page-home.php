<?php
/**
* Template Name: Homepage
* Description: The home page.
*
* @package Mears
*/

get_header(); ?>

<main id="main" class="site-main" role="main">

  <?php if ( is_active_sidebar( 'hometop' ) ) : ?>
  <section id="home-top" class="home-top">
    <?php dynamic_sidebar( 'hometop' ); ?>
  </section>
  <!-- /home-top - /hero -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'homemiddle' ) ) : ?>
  </div><!-- #site-content -->
    <section id="home-middle" class="home-middle">
        <?php dynamic_sidebar( 'homemiddle' ); ?>
    </section>
    <!-- /home-middle - /about -->
  <div id="content" class="site-content">
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'homebottom' ) ) : ?>
  <section id="home-bottom" class="home-bottom">
    <?php dynamic_sidebar( 'homebottom' ); ?>
  </section>
  <!-- /home-bottom - /portfolio -->
  <?php endif; ?>

</main><!-- /main -->
<?php get_footer(); ?>
