<?php
/**
 * 

 */

get_header(); ?>
			<div id="content">
				<div class="main">
				<ul  class="productlist">
					<?php $posts = query_posts($query_string . '&orderby=date&showposts=30'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li><a href="<?php the_permalink() ?>" target="_top"><?php the_post_thumbnail('thumbnail');?></a>				
						<h1><a href="<?php the_permalink() ?>" target="_top"><?php the_title(); ?></a></h1>
					</li>
					   <?php endwhile; endif; ?>
		</ul>
				</div>
			</div>
<?php get_footer(); ?>
