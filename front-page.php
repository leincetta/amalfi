<?php get_header(); ?>

<h1 class="heading-first">
	<?php bloginfo('name'); ?><br>
	<small><?php echo get_bloginfo ( 'description' );  ?></small>
</h1>

<h2 class="home-section">Projects</h2>

<!-- Work loop -->
<?php query_posts('showposts=1'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<p class="date"><?php the_date( 'F j, Y' ); ?></p>

<h3 class="list-heading">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h3>

<p><?php echo strip_tags( get_the_excerpt() ); ?></p>

<?php if(get_the_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
	</a>
<?php endif; ?>

<?php endwhile; endif; wp_reset_postdata(); ?>

<!-- Link to category -->
<?php
  $category_id = get_cat_ID( 'Projects' );
  $category_link = get_category_link( $category_id );
?>
<p><a href="<?php echo esc_url( $category_link ); ?>" title="Projects">Browse all projects</a></p>

<!-- Work loop end -->

<!-- About -->
<h2 class="home-section">About</h2>

<p>I have specialized in design for websites and apps since 2008. Since then I have been continuously learning new technologies with a focus on user experience, communication theory, and the understanding of human behavior.</p>

<p>I am passionate about finding ways to improve communications and empathy through design. My collaborations with cross-functional teams dispersed around the globe have given me unique insight into how design can bridge cultural gaps.</p>

<p><a href="#">More about me</a></p>

<?php get_footer(); ?>
