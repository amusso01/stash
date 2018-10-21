
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
$format = get_post_format();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
<?php 
	if ( has_post_thumbnail() ) {
	  the_post_thumbnail('full', array('class' => 'img-responsive'));
	} 
 ?>
<?php if($format != 'aside') : ?>
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php esc_html_e('Permanent Link to', 'stash');?> <?php the_title_attribute(); ?>">
  <?php the_title(); ?>
  </a></h1>
<?php endif;?>
<small> <span class="highlight"><i class="icon blog-date"></i>
<?php the_time( get_option( 'date_format' ) ); ?>
</span> <span class="highlight"><i class="icon blog-user"></i>
<?php esc_html_e('Posted by ', 'stash');?>
<?php the_author_posts_link() ?>
</span> <span class="highlight"><i class="icon blog-category"></i>
<?php the_category(', '); ?>
</span> <span class="highlight"><i class="icon blog-comments"></i>
<?php
	$comments_number = get_comments_number();
	if ( 1 === $comments_number ) {
		/* translators: %s: post title */
		printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'stash' ), get_the_title() );
	} else {
		printf(
			/* translators: 1: number of comments, 2: post title */
			_nx(
				'%1$s thought on &ldquo;%2$s&rdquo;',
				'%1$s thoughts on &ldquo;%2$s&rdquo;',
				$comments_number,
				'comments title',
				'stash'
			),
			number_format_i18n( $comments_number ),
			get_the_title()
		);
	}
?>
</span> </small>
<div class="entry">
  <?php if(has_excerpt()) : ?>
  <?php the_excerpt(); ?>
  <?php else : ?>
  <?php the_content(); ?>
  <?php endif;?>
</div>
<div class="entry-meta">
  <?php the_tags(); ?>
</div>
</div>
<?php endwhile; ?>

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