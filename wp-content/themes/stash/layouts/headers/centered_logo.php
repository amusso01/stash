<?php
 $hgr_options = get_option( 'redux_options' );
?>
 
  <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" style="z-index:1000;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>" style="position: absolute;width: 100%;left: 0;top: 0;text-align: center;margin: auto;">
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
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
     
      <?php
				// LEFT MENU
				$defaults = array(
					'theme_location'  => 'left-menu',
					'menu'            => 'header-menu',
					'container'       => false,
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'nav navbar-nav navbar-left',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => '', //stash_menu_fallback OR 'hgr_navwalker::fallback'
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="mainNavUlLeft" class="%2$s">%3$s</ul>',
					'depth'           => 4,
					'walker'          => new hgr_navwalker()
				);
				wp_nav_menu( $defaults );
		?>
        
	<?php 
    /*
    * Display OR Hide the minicart, depending on woocommerce support enabled or not in Theme Options
    */
    if( class_exists( 'WooCommerce' ) && !empty($hgr_options['woo_support']) && $hgr_options['woo_support'] == 1 ) :
    ?>
    <!-- woocommerce minicart -->
    <div class="hgr_woo_minicart sage-cart-icon">
    <div class="woo_bubble"><a class="hgr_woo_minicart_content" href="<?php global $woocommerce; echo esc_url($woocommerce->cart->get_cart_url()); ?>" title="<?php esc_html_e('View your shopping cart', 'stash'); ?>"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'stash'), $woocommerce->cart->cart_contents_count);?></a><?php echo ( class_exists('HGR_QCV') ? do_shortcode( '[hgr_quick_cart]' ) : '' );?></div>
    </div>
    <!-- end woocommerce minicart -->
    <?php
    endif;
    ?>

      <?php
				// RIGHT MENU
				$defaults = array(
					'theme_location'  => 'right-menu',
					'menu'            => 'header-menu',
					'container'       => false,
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'nav navbar-nav navbar-right',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => '', //stash_menu_fallback OR 'hgr_navwalker::fallback'
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="mainNavUlRight" class="%2$s">%3$s</ul>',
					'depth'           => 4,
					'walker'          => new hgr_navwalker()
				);
				wp_nav_menu( $defaults );
		?>
        
        
    </div><!-- /.navbar-collapse -->
</nav>


