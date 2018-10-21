
<?php
	$prev_link = get_previous_posts_link( esc_html__('&larr; Previous', 'stash') );
	$next_link = get_next_posts_link( esc_html__('Next &rarr;', 'stash') );
	if ($prev_link || $next_link) : ?>
	  <div class="navigation">
		<div class="alignleft">
		  <?php echo( !empty($prev_link) ? $prev_link : '' ); ?>
		</div>
		<div class="alignright">
		  <?php echo ( !empty($next_link) ? $next_link : ''); ?>
		</div>
	  </div>
<?php endif;?>