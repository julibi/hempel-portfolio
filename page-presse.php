<?php
/*
Template Name: Presse
*/

get_header();

query_posts(array('category_name' => 'rezension'));
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="rezension-post">
    <a href="<?php echo home_url(); ?>">Back</a>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
  </div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<!-- Next task is to create a custom post_type for REZENSIONEN, maybe check out this link: http://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/
It would also be good to find out how to save blank lines ans spaces inside of posts: http://brentgrossman.com/291/stop-wordpress-from-removing-html/
 -->
<?php get_footer(); ?>