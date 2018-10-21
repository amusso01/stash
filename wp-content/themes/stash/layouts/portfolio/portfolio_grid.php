<?php

	/*
	*	Get theme options for portfolio grid display
	*/
	$hgr_options = get_option( 'redux_options' );

	$grid_columns	=	( isset($hgr_options['portfolio_grid_columns']) && !empty($hgr_options['portfolio_grid_columns']) ? $hgr_options['portfolio_grid_columns'] : '3' );
	$item_image		=	( isset($hgr_options['portfolio_grid_image']) && !empty($hgr_options['portfolio_grid_image']) ? $hgr_options['portfolio_grid_image'] : 'portfolio_grid_image_on' );
	//var_dump($grid_columns);
	//var_dump($item_image);
	
	$grid_types	=	 array( '1' => 'vc_col-md-12',
						  	'2' => 'vc_col-md-6',
						   	'3' => 'vc_col-md-4',
						   	'4' => 'vc_col-md-3',
						  );

	$item_grid_size = ( isset($grid_types[$grid_columns]) ? $grid_types[$grid_columns] : 'vc_col-md-4' );
	//var_dump($item_grid_size);

?>

<div id="blogGridItems">
<div class="grid-sizer <?php echo ($item_grid_size);?> vc_col-sm-12 vc_col-xs-12"></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- item start-->
	<div class="blogGridItem <?php echo ($item_grid_size);?> vc_col-sm-12 vc_col-xs-12">
		<div <?php post_class( 'postEntry shadow' ); ?>>
			<?php
				/*
				*	 Item image if available and turned on in Theme Options
				*/
				if ( has_post_thumbnail() && $item_image == 'portfolio_grid_image_on' ) {
				  the_post_thumbnail('full', array('class' => 'img-responsive'));
				} 
			 ?>
			<div class="blogItemContent">
				

				 <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php esc_html_e('Permanent Link to', 'stash');?> <?php the_title_attribute(); ?>">
					<?php the_title(); ?>
					</a></h4>

				 <span class="blog_grid_date" style="display: block"><?php the_time('F jS, Y') ?></span>

				<?php the_excerpt(); ?>
				</div>
			 <div class="clearfix"></div>
		</div>
	</div>
	<!-- item end-->
<?php endwhile; ?>

<div class="clearfix"></div>
</div>

<!-- posts pagination -->
<?php
get_template_part( 'layouts/blog/posts_pagination');
?>

<?php else: ?>
<p>
<?php esc_html_e('Sorry, no posts matched your criteria.', 'stash'); ?>
</p>
<?php endif; ?>
<?php wp_reset_postdata();?>