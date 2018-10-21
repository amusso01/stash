
<!-- Mobile Header --> 

   <?php
 $hgr_options = get_option( 'redux_options' );
?>
   <div id="hgr_top_navbar_container" class="hgr_navbar hgr_mobile_header">
    
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
        <a class="cd-primary-nav-trigger" href="#"><i class="icon fa fa-bars"></i></a>
        <?php if( isset($hgr_options['enable_full_screen_search']) && $hgr_options['enable_full_screen_search'] == '1') : ?>
    	<a class="fssearch mobileFsSearch" href="#"><i class="icon fa fa-search"></i></a>
        <?php endif;?>
    </div>
    
    
    <ul id="mainNavUl" class="cd-primary-nav">
    <?php
       	$mobile_left = array(
            'theme_location'  => 'header-menu',
            'menu'            => 'left-menu',
            'container'       => 'nav',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => '',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '%3$s',
            'depth'           => 4,
            'walker'          => new hgr_mobile_navwalker()
        );
		$mobile_right = array(
            'theme_location'  => 'header-menu',
            'menu'            => 'header-menu',
            'container'       => 'nav',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => '',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '%3$s',
            'depth'           => 4,
            'walker'          => new hgr_mobile_navwalker()
        );
		if( isset($hgr_options['header_floating']) && 
				$hgr_options['header_floating'] == '7' || 
				$hgr_options['header_floating'] == '8' || 
				$hgr_options['header_floating'] == '9' || 
				$hgr_options['header_floating'] == '10' || 
				$hgr_options['header_floating'] == '11'
		  ){
			wp_nav_menu( $mobile_left );
		}

		wp_nav_menu( $mobile_right );
    ?>
    </ul>
    
</div> <!-- #hgr_top_navbar_container -->