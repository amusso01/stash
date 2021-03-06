
<!-- Fixed Header -->

<?php
 $hgr_options = get_option( 'redux_options' );
?>

<div id="hgr_top_navbar_container" class="hgr_fixed_header hgr_navbar <?php echo ( !is_front_page() ? '' : ( $hgr_options['header_floating'] == 2 ? 'hidden' : '') ); ?>">
	<?php echo ( isset($hgr_options['menu_bar_width']) && $hgr_options['menu_bar_width'] == 'menu_contained' ? ' <div class="container"> ' : '');?>
    
    <div class="hgr_identity">
    	<a href="<?php echo esc_url( home_url( '/' ) );?>" title="<?php echo get_bloginfo('name');?>">
    		<?php 
				if( !empty($hgr_options['retina_logo']['url']) ) :
			?>
			<img src="<?php echo ($hgr_options['retina_logo']['url']);?>" width="<?php echo ($hgr_options['retina_logo']['width']/2);?>" height="<?php echo ($hgr_options['retina_logo']['height']/2);?>" alt="<?php echo get_bloginfo('name');?>" class="logo" />
			<?php 
				elseif( !empty($hgr_options['logo']['url']) ) :
			?>
			<img src="<?php echo ($hgr_options['logo']['url']);?>" width="<?php echo ($hgr_options['logo']['width']);?>" height="<?php echo ($hgr_options['logo']['height']);?>" alt="<?php echo get_bloginfo('name');?>" class="logo" />
			<?php
				else :
			?>
			<img src="<?php echo esc_url( get_template_directory_uri() );?>/highgrade/images/logo@2x.png" width="50%" height="50%" alt="<?php echo get_bloginfo('name');?>" class="logo" />
			<?php
				endif;
			?>
    	</a>
    </div>
    
    <div id="hgr_top_navbar_extras">
    	
		<?php if( isset($hgr_options['enable_full_screen_search']) && $hgr_options['enable_full_screen_search'] == '1') : ?>
    	<a class="fssearch mobileFsSearch" href="#"><i class="icon fa fa-search"></i></a>
        <?php endif;?>
        
        <?php 
			/*
			* Display OR Hide the minicart, depending on woocommerce support enabled or not in Theme Options
			*/
			if( class_exists( 'WooCommerce' ) && !empty($hgr_options['woo_support']) && $hgr_options['woo_support'] == 1 ) : 
			global $woocommerce; 
		?>
        <a class="hgr_minicart" href="<?php global $woocommerce; echo esc_url($woocommerce->cart->get_cart_url()); ?>"><i class="icon sage-cart-icon"></i></a>
        <?php
			   endif;
		  ?> 
        <a class="cd-primary-nav-trigger" href="#0"><i class="icon fa fa-bars"></i></a>  
    </div>
    
	<?php
        $defaults = array(
            'theme_location'  => 'header-menu',
            'menu'            => 'header-menu',
            'container'       => 'div',
            'container_class' => 'main_navbar_container',
            'container_id'    => 'main_navbar_container',
            'menu_class'      => 'main_navbar',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => '', //stash_menu_fallback OR 'hgr_navwalker::fallback'
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="main_navbar" class="%2$s">%3$s</ul>',
            'depth'           => 4,
            'walker'          => new hgr_navwalker()
        );
        wp_nav_menu( $defaults );
    ?>
    
    <?php
       	$mobile = array(
            'theme_location'  => 'header-menu',
            'menu'            => 'header-menu',
            'container'       => 'nav',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'cd-primary-nav',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => '',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="mainNavUl" class="%2$s"> %3$s</ul>',
            'depth'           => 4,
            'walker'          => new hgr_mobile_navwalker()
        );
		wp_nav_menu( $mobile );
    ?>
    
    <?php echo ( isset($hgr_options['menu_bar_width']) && $hgr_options['menu_bar_width'] == 'menu_contained' ? ' </div> <!--.container--> ' : '');?>
</div> <!-- #hgr_top_navbar_container -->

<div id="megamenus_wrapper">
	
<div class="clearfix"></div>
</div>
