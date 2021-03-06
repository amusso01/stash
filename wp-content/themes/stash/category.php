 <?php
/**
 * Stash Theme: Blog page, posts by category
 * @package WordPress
 * @subpackage Stash Theme
 * @since 1.0
 */
	get_header();

	$hgr_options = get_option( 'redux_options' );
 ?>

<div class="row blog blogPosts <?php echo (isset($hgr_options['blog_color_scheme']) ? esc_attr( $hgr_options['blog_color_scheme'] ) : '');?>">
  <div class="container"> 
    <!-- posts -->
    <div class="vc_col-md-9 vc_col-sm-12 vc_col-xs-12">
      <?php 
		$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
	?>
      <h1 class="titleSep"><?php esc_html_e( 'Posts in', 'stash' );?> <?php single_cat_title(); ?></h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post">
        <?php 
             if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('full', array('class' => 'img-responsive'));
             } 
        ?>
        <!-- Display the Title as a link to the Post's permalink. -->
        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php esc_html_e('Permanent Link to', 'stash');?> <?php the_title_attribute(); ?>">
          <?php the_title(); ?>
          </a></h1>
        <small><span class="highlight"><i class="icon blog-date"></i>
        <?php the_time( get_option( 'date_format' ) ); ?>
        </span> <span class="highlight"><i class="icon blog-user"></i><?php esc_html_e( 'Posted by', 'stash' );?>
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
        </span></small> 
        <!-- Display the Post's content in a div box. -->
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
      
      <?php
        $prev_link = get_previous_posts_link( esc_html__('&larr; Previous', 'stash') );
        $next_link = get_next_posts_link( esc_html__('Next &rarr;', 'stash') );
    
        if ($prev_link || $next_link) : ?>
    
      <div class="navigation">
        <div class="alignleft">
          <?php if ($prev_link) { echo esc_url($prev_link); } ?>
        </div>
        <div class="alignright">
          <?php if ($next_link) { echo esc_url($next_link); } ?>
        </div>
      </div>
    
    <?php endif;?>
    
      <?php else: ?>
      <p>
        <?php esc_html_e('Sorry, no posts matched your criteria.', 'stash'); ?>
      </p>
      <?php endif; ?>
    </div>
    <!-- / posts --> 
    
    <!-- sidebar -->
    <div class="vc_col-md-3 vc_col-sm-12 vc_col-xs-12">
      <?php 
		get_sidebar();
	 ?>
    </div>
    <!-- / sidebar --> 
    <div class="clearfix"></div>
  </div>
</div>
<?php 
 	get_footer();
 ?>