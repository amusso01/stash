 <?php
/**
 * Stash Theme: Pages sidebar
 * @package WordPress
 * @subpackage Stash Theme
 * @since 1.0
 * TO BE INCLUDED ON PAGES WITH SIDEBAR: BLOG
 */
 ?>


<?php 
if ( is_active_sidebar( 'page-widgets' ) ) { 
	dynamic_sidebar('page-widgets');
}