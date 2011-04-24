<?php
/**
 * 

 */
get_header(); ?>
			<div id="content">
				<div class="main">
					<div class="breadcrumbs">
<?php
if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
</div>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				</div>
			</div>
<?php get_footer(); ?>
