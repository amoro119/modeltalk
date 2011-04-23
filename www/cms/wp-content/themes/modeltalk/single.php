<?php if ( in_category( 'products' ) ) {
 include(TEMPLATEPATH . '/single-products.php');
} elseif( in_category( 'news' ) ) {
 include(TEMPLATEPATH . '/single-news.php');}
?>