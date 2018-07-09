<div class="row">
	<p class="date">
		<?php the_date( 'M Y' ); ?>
	</p>
	<div class="excerpt">
		  <h3 class="list-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		  <p class="subtitle"><?php the_field('project_subtitle'); ?></p>
	</div>
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a>
	</div>
</div>
