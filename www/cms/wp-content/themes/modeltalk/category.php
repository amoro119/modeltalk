<?php
/**
 * 

 */

get_header(); ?>
			<div id="content">
				<div class="main">
				<h1 class="title"><?php single_cat_title(); ?><h1>
				<ul  class="newslist">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li>				
						·<a href="<?php the_permalink() ?>" target="_top"><?php the_title(); ?></a>
					</li>
					   <?php endwhile; endif; ?>
		</ul>
				<div class="pagination">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		</div>
				</div>
			</div>
<?php get_footer(); ?>
