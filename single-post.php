<?php
/**
 * The template for displaying all single posts.
 *
 * @package Mears
 */

get_header(); ?>

</div><!-- /site-content -->
<?php while ( have_posts() ) : the_post(); ?>
<div class="website-post-head">
  <h2><?php the_title(); ?></h2>
  <p><?php the_field('tagline'); ?></p>
</div>

<div id="content" class="site-content">
  <div class="website-entry">
    <div class="website-post">
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
      <a class="button" href="<?php the_field('website_link'); ?>">Let's see the real thing</a>
    </div><!-- /website-post -->

    <div class="website-image">
      <?php
      if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
        echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
        the_post_thumbnail( 'large' );
        echo '</a>';
      }
      ?>
  </div>
  <!-- /website-image -->

  <?php
  $image1 = get_field('website_screenshot_1');

  if( !empty($image1) ): ?>
  <div class="website-image">
    <a href="<?php echo $image1['url']; ?>"><img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" /></a>
  </div>
  <!-- /website-image1 -->
  <?php endif; ?>

  <?php
  $image2 = get_field('website_screenshot_2');

  if( !empty($image2) ): ?>
  <div class="website-image">
    <a href="<?php echo $image2['url']; ?>"><img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" /></a>
  </div>
  <!-- /website-image2 -->
  <?php endif; ?>

  <?php
  $image3 = get_field('website_screenshot_3');

  if( !empty($image3) ): ?>
  <div class="website-image">
    <a href="<?php echo $image3['url']; ?>"><img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" /></a>
  </div>
  <!-- /website-image3 -->
  <?php endif; ?>

  <?php
  $image4 = get_field('website_screenshot_4');

  if( !empty($image4) ): ?>
  <div class="website-image">
    <a href="<?php echo $image4['url']; ?>"><img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" /></a>
  </div>
  <!-- /website-image4 -->
  <?php endif; ?>


</div><!-- /website-entry -->
<?php get_footer(); ?>
