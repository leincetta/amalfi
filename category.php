<?php get_header(); ?>

<h1 class="heading-first">
  <?php single_cat_title(); ?>
</h1>

<!-- The loop starts here -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="section-plus">
  <p class="date">
  	<?php the_date( 'F j, Y' ); ?>
  </p>
</div>

  <h3 class="list-heading">
    <?php the_title(); ?>
  </h3>

  <p>
    <?php the_field('project_subtitle'); ?>
  </p>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>
<!-- The loop ends here -->

<?php get_footer(); ?>