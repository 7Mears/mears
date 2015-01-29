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
  <h1 class="back-portfolio"><?php the_field('tagline'); ?></h1>
</div>

<div id="content" class="site-content">
  <div class="website-entry">

<div class="website-grid">
    <div class="website-post">
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
      <a href="<?php the_field('website_link'); ?>"><span class="button">Let's see the real thing</span></a>
    </div><!-- /website-post -->

      <?php
      if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
        echo '<a rel="lightbox-0" href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
        the_post_thumbnail( 'large' );
        echo '</a>';
      }
      ?>
  <!-- /website-image -->

  <?php
  $image1 = get_field('website_screenshot_1');

  if( !empty($image1) ): ?>
    <a rel="lightbox-0" href="<?php echo $image1['url']; ?>" ><img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" /></a>
  <!-- /website-image1 -->
  <?php endif; ?>

  <?php
  $image2 = get_field('website_screenshot_2');

  if( !empty($image2) ): ?>
    <a rel="lightbox-0" href="<?php echo $image2['url']; ?>"><img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" /></a>
  <!-- /website-image2 -->
  <?php endif; ?>

  <?php
  $image3 = get_field('website_screenshot_3');

  if( !empty($image3) ): ?>
    <a rel="lightbox-0" href="<?php echo $image3['url']; ?>"><img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" /></a>
  <!-- /website-image3 -->
  <?php endif; ?>

  <?php
  $image4 = get_field('website_screenshot_4');

  if( !empty($image4) ): ?>
    <a rel="lightbox-0" href="<?php echo $image4['url']; ?>"><img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" /></a>
  <!-- /website-image4 -->
  <?php endif; ?>

</div>
</div><!-- /website-entry -->
<?php get_footer(); ?>
