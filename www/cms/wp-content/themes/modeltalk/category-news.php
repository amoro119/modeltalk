<?php
/**
 * 

 */

get_header(); ?>
			<div id="content">
				<div class="main">
				<ul  class="newslist">
					<?php $my_query = new WP_Query( array('category_name' => news , 'posts_per_page'=>5 ,'paged' => get_query_var('paged') ) ); ?>
					<?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					<li>				
						<h1><a href="<?php the_permalink() ?>" target="_top"><?php the_title(); ?></a></h1>
					</li>
					   <?php endwhile; endif; ?>
		</ul>
				<div class="pagination">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $my_query )); } 
			wp_reset_postdata();
			?>
		</div>
				</div>
			</div>
<?php get_footer(); ?>
