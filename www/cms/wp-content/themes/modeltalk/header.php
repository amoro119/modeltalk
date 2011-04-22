<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" src="/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/fg.menu.js"></script>
    	 <script type="text/javascript">    
    $(function(){      	
    	// MENUS    	
		$('#nav-brand').menu({ 
			content: $('#nav-brand').next().html(), // grab content from this page
			width: 157
		});
		
		$('#nav-promate').menu({
			content: $('#nav-promate').next().html(),
			width: 157,
		});
		
		$('#nav-school').menu({
			content: $('#nav-school').next().html(),
			width: 157,
		});
		$('#nav-news').menu({
			content: $('#nav-news').next().html(),
			width: 160,
		});
		$('li.item:last').addClass('last');
    });
    </script>
</head>
	<body>
		<div id="wrap">
			<div id="header">
				<div id="banner">
					<img src="/images/logo.gif" width="950" height="48" alt="Logo">
				</div>
				<ul  id="nav">
				   <li class="item" id="nav-home"><a href="#">首页</a></li>
				   <li class="item" id="nav-brand"><a href="#">名模品牌</a></li>
				   <div class="hidden submenu">
					   <ul>
					   	   <li><a href="#">名模故事</a></li>
					   	   <li><a href="#">品牌个性</a></li>
				   		</ul>
			   		</div>
				   <li class="item" id="nav-promate"><a href="#">名模推荐</a></li>
				   <div  class="hidden submenu">
				   <ul>
				   	   <li><a href="#">BB霜</a></li>
				   	   <li><a href="#">洁面慕丝</a></li>
				   	   <li><a href="#">3D水胶原</a></li>
				   	   <li><a href="#">矿泥净化面膜</a></li>
				   	</ul>
				   </div>
				   <li class="item" id="nav-product"><a href="#">名模商品</a></li>
				   <li class="item" id="nav-school" ><a href="#">名模学堂</a></li>
				   <div  class="hidden submenu">
				   <ul>
				   	   <li><a href="#">F&Q</a></li>
				   	   <li><a href="#">美容教学</a></li>
				   	   <li><a href="#">视频展示</a></li>
				   </ul>
				   </div>
				   <li class="item" id="nav-news"><a href="#">名模动态</a></li>
				   <div  class="hidden submenu">
				   <ul>
				   	   <li><a href="#">公司新闻动态</a></li>
				   	</ul>
				   </div>
				</ul>
			</div>
