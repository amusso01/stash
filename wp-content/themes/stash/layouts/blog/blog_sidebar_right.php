 <div class="row blogPosts <?php echo esc_attr( (isset($hgr_options['blog_color_scheme']) ? $hgr_options['blog_color_scheme'] : '') );?>" id="blogPosts">
          <div class="container"> 
            <!-- posts -->
            <div class="vc_col-md-9 vc_col-sm-12 vc_col-xs-12">
              
              <?php
					/*
					* Display Blog Content
					*
					* @hooked stash_display_blog_content - 5
					*/
					do_action('blog_get_content');
				?>
           
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