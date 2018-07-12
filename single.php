<?php get_header(); ?>

<h1 class="heading-first">
	<?php the_title(); ?><br>
	<small><?php the_field('project_subtitle'); ?></small>
</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_post_thumbnail('full');?>

<p><?php the_time('F, Y') ?>. <br><?php the_tags( '',', ','.' ); ?></p>

<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
