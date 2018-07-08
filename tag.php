<?php get_header(); ?>

<h1 class="heading-first">
	<?php single_tag_title(); ?><br>
	<small>
		<?php if (category_description() ) : ?>
			<div><?php echo category_description(); ?></div>
		<?php endif; ?>
	</small>
</h1>

<!-- The Loop -->
<h2>Articles</h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('/includes/post-preview'); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<!-- End of The Loop -->

<?php get_footer(); ?>
