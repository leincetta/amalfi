<?php get_header(); ?>

<h1 class="heading-first">
  <?php single_cat_title(); ?>
</h1>

<!-- The loop starts here -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('/includes/post-preview'); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>
<!-- The loop ends here -->

<?php get_footer(); ?>
