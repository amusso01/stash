<?php
/**
 * Stash Theme: Home page for site or blog
 * @package WordPress
 * @subpackage Stash Theme
 * @since 1.0
 */

$detect = new Mobile_Detect;
 
 	// Include framework options
 	$hgr_options = get_option( 'redux_options' );
 
 	// Get metaboxes values from database
 	$this_page_id 			=	esc_attr( get_option('page_for_posts') );
 	$hgr_page_color_scheme	=	esc_attr( get_post_meta( $this_page_id, '_hgr_page_color_scheme', true ) );

	get_header();
 ?>

<?php if( is_home() ) : ?>

		<?php if (get_header_image() != '') : ?>
        <!-- Header Image -->
        <div class="header_image_container"> <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="header image" class="header_image" />
          <div class="headerWelcome">
            <h1>
              <?php bloginfo('name'); ?>
            </h1>
            <h2><a href="#" class="readTheBlogBtn"><?php esc_attr( 'Read the blog', 'stash' );?></a></h2>
          </div>
        </div>
        <!-- Header Image End -->
        <?php endif;?>
        
        
        <!-- blog content start (front-page.php) -->
        <?php

			/*
			* Blog Display
			*
			* @hooked stash_blog_layout_display - 5
			*/
			do_action('blog_get_layout');
        ?>
        <!-- blog content end -->
        
        

<?php else : ?>

<!-- Site home page -->

<?php while ( have_posts() ) : the_post(); ?>

<?php
// Get metaboxes values from database
	$hgr_page_bgcolor			=	get_post_meta( get_the_ID(), '_hgr_page_bgcolor', true );
	$hgr_page_top_padding		=	get_post_meta( get_the_ID(), '_hgr_page_top_padding', true );
	$hgr_page_btm_padding		=	get_post_meta( get_the_ID(), '_hgr_page_btm_padding', true );
	$hgr_page_color_scheme		=	get_post_meta( get_the_ID(), '_hgr_page_color_scheme', true );
	$hgr_page_height			=	get_post_meta( get_the_ID(), '_hgr_page_height', true );

	$hgr_page_title				=	get_post_meta( get_the_ID(), '_hgr_page_title', true );
	$hgr_page_title_color		=	get_post_meta( get_the_ID(), '_hgr_page_title_color', true );
	$page_title_color			=	( !empty($hgr_page_title_color) ? ' style="color: '.$hgr_page_title_color.'; "' : ( isset($hgr_options['page_title_h1']['color']) && !empty($hgr_options['page_title_h1']['color']) ? '' : ' style="color: #000; "' ) );

	$page_title_top_padding = ( isset($hgr_options['page_title_padding']['padding-top']) ? $hgr_options['page_title_padding']['padding-top'] : '0');
	$page_title_btm_padding = ( isset($hgr_options['page_title_padding']['padding-bottom']) ? $hgr_options['page_title_padding']['padding-bottom'] : '0');
	$page_title_lft_padding = ( isset($hgr_options['page_title_padding']['padding-left']) ? $hgr_options['page_title_padding']['padding-left'] : '0');
	$page_title_rgt_padding = ( isset($hgr_options['page_title_padding']['padding-right']) ? $hgr_options['page_title_padding']['padding-right'] : '0');
	
	$page_offset			= ( isset($hgr_options['page_top_offset']['height']) && ( !$detect->isMobile() ) ? $hgr_options['page_top_offset']['height'] : '0');


	
	
	// Does this page have a featured image to be used as row background with paralax?!
 	$src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( 5600,1000 ), false, '' );

 	if( !empty($src[0]) ) {
		$parallaxImageUrl 	=	" background-image:url('".$src[0]."'); ";
		$parallaxClass		=	' parallax ';
		$backgroundColor	=	'';
	} elseif( !empty($hgr_page_bgcolor) ) {
		$parallaxImageUrl =	'';
		$parallaxClass		=	' ';
		$backgroundColor	=	' background-color:'.$hgr_page_bgcolor.'!important; ';
	}else {
		$parallaxImageUrl =	'';
		$parallaxClass		=	'';
		$backgroundColor	=	'';
	}
 ?>
 
 <?php if( isset($hgr_options['enable_page_title']) && $hgr_options['enable_page_title'] == 1) : ?>
	  <?php if( isset($hgr_page_title) && empty($hgr_page_title) ): ?>
        <div class="page_title_container" style=" <?php echo esc_attr($parallaxImageUrl);?> margin-bottom: <?php echo esc_attr($page_title_btm_padding/2);?>px; padding: <?php echo esc_attr($page_title_top_padding);?> <?php echo esc_attr($page_title_rgt_padding);?> <?php echo esc_attr($page_title_btm_padding);?> <?php echo esc_attr($page_title_lft_padding);?>; ">
            <div class="container">
                <h1 <?php echo esc_attr($page_title_color);?> ><?php the_title(); ?></h1>
            </div>
        </div>
      <?php endif;?>
  <?php endif;?>
  
  
 <div id="<?php echo esc_html($post->post_name);?>" class="pagesection row <?php echo esc_attr($parallaxClass);?> "  style=" <?php echo esc_attr($parallaxImageUrl);?> <?php echo esc_attr($backgroundColor);?> <?php echo ( !empty($hgr_page_height) ? ' height:'.esc_attr($hgr_page_height).'px!important; ' : '');?> <?php echo ( !empty($hgr_page_top_padding) ? ' padding-top:'.esc_attr($hgr_page_top_padding).'px!important;' : '' );?> <?php echo ( !empty($hgr_page_btm_padding) ? ' padding-bottom:'.esc_attr($hgr_page_btm_padding).'px!important;' : '' );?> ">
  <div class="vc_col-md-12" <?php echo ( isset($page_offset) && $page_offset	!= 0 && $hgr_options['header_floating'] == '6' ? 'style="margin-top:'.$page_offset	.';"' : '');?> >
    <div class="container">
      <div class="slideContent gu12">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
<?php endwhile; ?>





<?php endif;?>
<?php 
 	get_footer();
 ?>
