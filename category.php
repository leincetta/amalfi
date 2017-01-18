<?php get_header(); ?>

<!-- The loop starts here -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <p class="date">
  	<?php the_date( 'F j, Y' ); ?>
  </p>

  <h3 class="list-heading">
    <?php the_title(); ?>
  </h3>

  <?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>
<!-- The loop ends here -->

<?php get_footer(); ?>
