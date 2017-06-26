<?php
/*
	Template Name: Homepage
*/
?>
<?php get_header(); ?>

<h1 class="heading-first">
	<?php bloginfo('name'); ?><br>
	<small><?php echo get_bloginfo ( 'description' );  ?></small>
</h1>

<h2>Projects</h2>

<?php
  $query = new WP_Query( array( 'category_name' => 'projects', 'posts_per_page' => 3 ) );
?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <!-- <div class="section-plus">
    <p class="date">
      <?php the_date( 'M Y' ); ?>
    </p>
  </div> -->

<?php get_template_part('/includes/post-preview'); ?>

<?php endwhile; endif; wp_reset_postdata(); ?>

<div class="clear"></div>

<!-- Link to category -->
<?php
  $category_id = get_cat_ID( 'Projects' );
  $category_link = get_category_link( $category_id );
?>
<p><a href="<?php echo esc_url( $category_link ); ?>" title="Projects">Browse all <?php echo wp_count_posts()->publish; ?> projects</a></p>


<!-- About -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; endif; wp_reset_postdata(); ?>

<!-- <?php the_content(); ?> -->

<?php get_footer(); ?>
