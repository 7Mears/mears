<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mears
 */

get_header(); ?>

  </div>
  <div class="website-post-head">
    <h2>Portfolio</h2>
    <p>I've built websites for musicians, bloggers, professionals, and communities. Here is some of my recent work.</p>
    <h1 class="back-portfolio">Websites</h1>
  </div>
  <div id="content" class="site-content">

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">



    <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="portfolio-post">
        <h2 class="portfolio-post--title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        <div class="portfolio-post--image">
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?></a>
        </div>

        <div class="portfolio-post--links">
          <a href="<?php the_permalink(); ?>"><span class="button">More info</span></a>
          <a href="<?php the_field('website_link'); ?>"><span class="button">Live site <i class="fa fa-external-link"></i></span></a>
        </div>


      </div>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
