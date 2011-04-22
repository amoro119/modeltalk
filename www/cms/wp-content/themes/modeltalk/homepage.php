<?php
/**
 * Template Name: homepage

 */

get_header(); ?>
			<div id="content">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
<?php get_footer(); ?>
