<?php if ( in_category( 'products' ) ) {
 include(TEMPLATEPATH . '/single-common.php');
} elseif( in_category( 'news' ) ) {
 include(TEMPLATEPATH . '/single-common.php');}
 else {
 include(TEMPLATEPATH . '/single-common.php');}
?>