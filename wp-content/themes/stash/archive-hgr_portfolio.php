 <?php
/**
 * Stash Theme: Portfolio Page
 * @package WordPress
 * @subpackage Stash Theme
 * @since 1.0
 */
	
	get_header();

 ?>
 
<!-- Header Image -->
<?php if (get_header_image() != '') : ?>

<div class="header_image_container"> <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="header image" class="header_image" />
  <div class="headerWelcome">
    <h1>
      <?php bloginfo('name'); ?>
    </h1>
    <h2><a href="#" class="readTheBlogBtn"><?php esc_html_e( 'Read the blog', 'stash' );?></a></h2>
  </div>
</div>
<?php endif;?>
<!-- Header Image End --> 

<!-- archive-hgr_portfolio.php -->

<?php
	/*
	* Get portfolio layout by Theme Options - Default portfolio_grid
	*
	* @hooked stash_portfolio_layout_display - 5
	*/
	do_action('portfolio_get_layout');
?>

<!-- portfolio content end -->

 <?php 
 	get_footer();
 ?>