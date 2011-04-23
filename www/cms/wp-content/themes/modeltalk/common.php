<?php
/**
 * Template Name: common

 */

get_header(); ?>
			<div id="content">
				<div class="main">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				</div>
			</div>
<?php get_footer(); ?>
