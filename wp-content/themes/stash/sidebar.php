 <?php
/**
 * Stash Theme: Blog section, sidebar
 * @package WordPress
 * @subpackage Stash Theme
 * @since 1.0
 * TO BE INCLUDED ON PAGES WITH SIDEBAR: BLOG
 */
 ?>


<?php 
if ( is_active_sidebar( 'blog-widgets' ) ) { 
	dynamic_sidebar('blog-widgets');
}