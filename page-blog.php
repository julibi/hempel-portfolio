<?php
/*
Template Name: Blog Posts
*/

get_header();

$args = array(
    'post_type' => 'post'
);

$post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    ?>
    <div class="blog-post">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_date(); ?></p>
      <p><?php the_excerpt(); ?></p>
    </div>
    <?php
  }
}
?>

<?php get_footer(); ?>

