<?php

	/*
	*	Get theme options for grid display
	*/
	$hgr_options = get_option( 'redux_options' );

	$metro_columns	=	( isset($hgr_options['blog_metro_columns']) && !empty($hgr_options['blog_metro_columns']) ? $hgr_options['blog_metro_columns'] : '3' );

	//var_dump($metro_columns);
	
	$metro_types	=	 array( '1' => 'vc_col-md-12',
						  	'2' => 'vc_col-md-6',
						   	'3' => 'vc_col-md-4',
						   	'4' => 'vc_col-md-3',
						  );

	$item_metro_size = ( isset($metro_types[$metro_columns]) ? $metro_types[$metro_columns] : 'vc_col-md-4' );
	//var_dump($item_metro_size);


?>

<div id="metroGridItems">
<div class="metro-sizer <?php echo ($item_metro_size);?> vc_col-sm-12 vc_col-xs-12"></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php
		// Does this post have a featured image to be used as row background?!
		$src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( 5600,1000 ), false, '' );

		if( !empty($src[0]) ) {
			$parallaxImageUrl 	=	' background-image:url('.$src[0].'); background-size: cover; ';
		} else{
			$parallaxImageUrl 	=	"";
		}
	?>
	<!-- item start-->
	<div class="metroGridItem <?php echo ($item_metro_size);?> vc_col-sm-12 vc_col-xs-12">
		<div <?php post_class( 'postEntry shadow' ); ?> style="<?php echo ($parallaxImageUrl);?>">
			
			 <?php if ( has_post_format('quote') ) : ?>
				 <i class="fa fa-quote-right fa-5x alignright displayblock" aria-hidden="true"></i>
				<?php endif;?>
			
			<div class="metroItemContent">
				 <span class="metro_grid_date" style="display: block"><?php the_time('F jS, Y') ?></span>
				 
				 <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php esc_html_e('Permanent Link to', 'stash');?> <?php the_title_attribute(); ?>">
					<?php the_title(); ?>
					</a>
				</h4>

				 

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