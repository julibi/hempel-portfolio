<?php get_header(); ?>

<!-- Could the upper be… the "header"?? -->

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="single-post">
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'blog' ) ) ); ?>">Back to all Posts</a>
        <h2><?php the_title(); ?></h2> <p><?php the_date(); the_author(); ?></p>
        <?php if ( has_post_thumbnail() ) :  the_post_thumbnail(); endif; ?>
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>


<?php get_footer(); ?>