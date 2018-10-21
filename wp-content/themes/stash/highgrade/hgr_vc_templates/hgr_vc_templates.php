<?php
/*
* 	Visual Composer: Custom Templates Implementation 
*	Documentation: https://wpbakery.atlassian.net/wiki/pages/viewpage.action?pageId=524300
*	Extra doc: https://github.com/khromov/wp-vc-template-manager/blob/master/wp-vc-template-manager.php
*/


add_filter( 'vc_load_default_templates', 'hgr_templates_modify_array' );
function hgr_templates_modify_array( $data ) {
    return array(); 
}

add_action( 'vc_load_default_templates_action','load_hgr_templates' ); 
function load_hgr_templates() {
	


	
	
	$data = array();
	$data['name'] = __( 'About 01', 'stash' );
	$data['custom_class'] = 'hgr_template about-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section el_id="about-1" el_class="light-scheme"][vc_row css=".vc_custom_1489576565150{padding-top: 100px !important;}" el_class="light-scheme"][vc_column][vc_column_text css_animation="fadeIn"]
<h3>There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.</h3>
[/vc_column_text][vc_separator color="custom" css_animation="fadeIn" accent_color="#eeeeef" css=".vc_custom_1496244670315{padding-top: 50px !important;padding-bottom: 20px !important;}"][/vc_column][/vc_row][vc_row css=".vc_custom_1489576571889{padding-top: 30px !important;padding-bottom: 100px !important;}" el_class="light-scheme"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h4>40+ Demos</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496244777470{margin-top: -20px !important;}"]
Because you have better things to do, like create,
sell and grow your business.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h4>200+ Sections</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496244783707{margin-top: -20px !important;}"]
<div class="page" title="Page 2">
<div class="layoutArea">
<div class="column">

Stash is a bundle of 200+ proven template designs,
created to get you online fast.

</div>
</div>
</div>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	

	
	
	$data = array();
	$data['name'] = __( 'Split Section 01', 'stash' );
	$data['custom_class'] = 'hgr_template split-section-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/split-section/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="split-section-1" el_class="light-scheme"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle" el_class="light-scheme"][vc_column width="1/2" css=".vc_custom_1488986624869{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn"]
<h2>e-Commerce – no problem!</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]We have included full WooCommerce Integration and all pages are custom styled and ready to use. There is also a dedicated tab in theme options that gives you full control when styling your shop.
[/vc_column_text][vc_btn title="SEE IT IN ACTION" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="left" css_animation="fadeIn" css=".vc_custom_1496245060256{padding-top: 10px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1490775588856{padding-top: 300px !important;background: #1c46f2 url(http://highgradelab.com/stash/multi-purpose/wp-content/uploads/sites/24/2017/03/woo-commerce.jpg?id=168) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle" el_class="light-scheme"][vc_column width="1/2" css=".vc_custom_1490775618199{background: #1c46f2 url(http://highgradelab.com/stash/multi-purpose/wp-content/uploads/sites/24/2017/03/one-click-install.jpg?id=167) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" offset="vc_hidden-xs"][/vc_column][vc_column width="1/2" css=".vc_custom_1488986245171{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn"]
<h2>OneClick Install</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p class="p1">As a professional, you want to show the world you have arrived and are going places. You need your web presence to be seamless, reliable and easy to create and maintain.</p>
[/vc_column_text][vc_btn title="SEE IT IN ACTION" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="left" css_animation="fadeIn" css=".vc_custom_1496245052780{padding-top: 10px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Skills 01', 'stash' );
	$data['custom_class'] = 'hgr_template skills-1';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/skills/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
    [vc_section full_width="stretch_row" el_id="skills-1" el_class="light-scheme"][vc_row full_width="stretch_row" css=".vc_custom_1489576649554{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_class="light-scheme"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>About Us</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.

There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_column_text]
<h2>Skills</h2>
[/vc_column_text][hgr_progressbar hgr_progressbar_icontype="no_icon" hgr_progressbar_title="Marketing" hgr_progressbar_title_format="h6" hgr_progressbar_title_color="#292929" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#1c46f2" hgr_progressbar_value="75" hgr_progressbar_filltime="3" hgr_progressbar_weight="3" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="no_icon" hgr_progressbar_title="Design" hgr_progressbar_title_format="h6" hgr_progressbar_title_color="#292929" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#1c46f2" hgr_progressbar_value="95" hgr_progressbar_filltime="3" hgr_progressbar_weight="3" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="no_icon" hgr_progressbar_title="Development" hgr_progressbar_title_format="h6" hgr_progressbar_title_color="#292929" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#1c46f2" hgr_progressbar_value="95" hgr_progressbar_filltime="3" hgr_progressbar_weight="3" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="no_icon" hgr_progressbar_title="Content Strategy" hgr_progressbar_title_format="h6" hgr_progressbar_title_color="#292929" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#1c46f2" hgr_progressbar_value="80" hgr_progressbar_filltime="3" hgr_progressbar_weight="3" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
		
	
	

	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 01', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
   [vc_section el_id="testimonials-1" el_class="light-scheme"][vc_row css=".vc_custom_1490023753191{padding-top: 100px !important;}"][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">A Huge <em>Thank You</em> to Our Customers
For Their Support &amp; Appreciation</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1490023759768{padding-top: 50px !important;padding-bottom: 100px !important;}"][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]"Needless to say we are extremely satisfied with the results. Stash is worth much more than I paid. Stash is the most valuable business resource we have EVER purchased. We were treated like royalty."[/vc_column_text][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/6" css=".vc_custom_1490023702071{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="231" img_size="100x100" style="vc_box_circle_2" css_animation="fadeIn"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text css_animation="fadeIn"]
<h6><span style="color: #1c46f2;">Brandon Andrews
CEO @ Navy</span></h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]"It's incredible. The service was excellent. I just can't get enough of Stash. I want to get a T-Shirt with Stash on it so I can show it off to everyone. I couldn't have asked for more than this. Stash is the real deal! Thanks for the great service. Stash is the most valuable business resource we have EVER purchased. Stash is both attractive and highly adaptable."[/vc_column_text][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/6" css=".vc_custom_1490023702071{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="235" img_size="100x100" style="vc_box_circle_2" css_animation="fadeIn"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text css_animation="fadeIn"]
<h6><span style="color: #1c46f2;">Anna Lucas
Web Designer @ Sage</span></h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]"We've seen amazing results already. It's the perfect solution for our business. No matter where you go, Stash is the coolest, most happening thing around! Stash is the most valuable business resource we have EVER purchased."[/vc_column_text][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/6" css=".vc_custom_1490023702071{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="233" img_size="100x100" style="vc_box_circle_2" css_animation="fadeIn"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text css_animation="fadeIn"]
<h6><span style="color: #1c46f2;">Larry Morris
CFO @ Attractor</span></h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Team 01', 'stash' );
	$data['custom_class'] = 'hgr_template team-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
   [vc_section el_id="team-1" el_class="dark-scheme"][vc_row full_width="stretch_row_content_no_spaces" gap="2" css_animation="fadeIn"][vc_column width="1/6"][hgr_advimage hgr_advimage_image="224" hgr_advimage_height="320" hgr_advimage_title="Victoria Alvarado" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(0,0,0,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016674213{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Founder, CEO
<a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="225" hgr_advimage_height="320" hgr_advimage_title="Jonathan Romero" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495012872860{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Founder, CFO
<a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-instagram"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="226" hgr_advimage_height="320" hgr_advimage_title="Lisa Wheeler" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016680743{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Marketing Manager
<a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-instagram"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="227" hgr_advimage_height="320" hgr_advimage_title="Phillip Hudson" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016710311{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]PR Manager
<a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-instagram"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="228" hgr_advimage_height="320" hgr_advimage_title="Phillip Jordan" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016737939{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Web Developer
<a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="229" hgr_advimage_height="320" hgr_advimage_title="Craig Elliott" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016768014{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Web Designer
<a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-instagram"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" gap="2" css_animation="fadeIn" css=".vc_custom_1496245422143{padding-bottom: 1px !important;}"][vc_column width="1/6"][hgr_advimage hgr_advimage_image="230" hgr_advimage_height="320" hgr_advimage_title="Benjamin Griffin" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016795136{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Web Designer
<a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-instagram"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="231" hgr_advimage_height="320" hgr_advimage_title="Justin Anderson" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016818019{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Account Manager
<a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-instagram"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="232" hgr_advimage_height="320" hgr_advimage_title="Dennis Andrews" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016841832{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Account Manager
<a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-instagram"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="233" hgr_advimage_height="320" hgr_advimage_title="Adam James" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016863740{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Support Manager
<a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="234" hgr_advimage_height="320" hgr_advimage_title="Stephanie Carlson" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016887972{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Support Staff
<a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-instagram"]</a>[/hgr_advimage][/vc_column][vc_column width="1/6"][hgr_advimage hgr_advimage_image="235" hgr_advimage_height="320" hgr_advimage_title="Laura Collins" hgr_advimage_title_padding="35" hgr_advimage_title_h="h4" hgr_advimage_title_color="#292929" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="#f8f8f8" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.01)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1495016914658{padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;}"]Support Staff
<a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>[/hgr_advimage][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Clients 01', 'stash' );
	$data['custom_class'] = 'hgr_template clients-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/clients/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
   [vc_section full_width="stretch_row" el_id="clients-1" el_class="dark-scheme" css=".vc_custom_1498819422772{padding-top: 100px !important;padding-bottom: 120px !important;background-color: #1c46f2 !important;}"][vc_row full_width="stretch_row"][vc_column width="1/3" css=".vc_custom_1489420065250{padding-right: 20px !important;}"][vc_row_inner][vc_column_inner width="5/6"][vc_column_text css_animation="fadeIn"]
<h2>Clients</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3" css=".vc_custom_1489419965257{padding-right: 20px !important;padding-left: 20px !important;}"][vc_row_inner gap="35"][vc_column_inner width="1/2" css=".vc_custom_1489584895224{border-left-width: 1px !important;padding-top: 0px !important;padding-left: 35px !important;border-left-color: rgba(255,255,255,0.2) !important;border-left-style: solid !important;}"][vc_single_image image="139" img_size="full" css_animation="none" el_class="image-opacity"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496245501540{margin-bottom: 0px !important;}"]On the other hand, we denounce with righteous indignation and dislike men who are so beguiled by the charms of pleasure.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1489584914349{border-left-width: 1px !important;padding-top: 0px !important;padding-left: 35px !important;border-left-color: rgba(255,255,255,0.2) !important;border-left-style: solid !important;}"][vc_single_image image="147" img_size="full" css_animation="none" el_class="image-opacity"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496245520238{margin-bottom: 0px !important;}"]No one rejects pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1489422686724{padding-top: 20px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1489584919636{border-left-width: 1px !important;padding-top: 0px !important;padding-left: 35px !important;border-left-color: rgba(255,255,255,0.2) !important;border-left-style: solid !important;}"][vc_single_image image="141" img_size="full" css_animation="none" el_class="image-opacity"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496245525660{margin-bottom: 0px !important;}"]On the other hand, we denounce with righteous indignation and dislike men who are so beguiled by the charms of pleasure.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1489584928176{border-left-width: 1px !important;padding-top: 0px !important;padding-left: 35px !important;border-left-color: rgba(255,255,255,0.2) !important;border-left-style: solid !important;}"][vc_single_image image="145" img_size="full" css_animation="none" el_class="image-opacity"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496245530051{margin-bottom: 0px !important;}"]No one rejects pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 02', 'stash' );
	$data['custom_class'] = 'hgr_template features-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="features-2" el_class="light-scheme" css=".vc_custom_1498820890057{padding-top: 50px !important;padding-bottom: 50px !important;background-color: #ffffff !important;}"][vc_row gap="35"][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1495098732361{padding-bottom: 20px !important;}"][vc_column_text css=".vc_custom_1488985322853{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1490794684863{margin-top: -30px !important;}"]
<p style="text-align: center;">You will love our theme options panel, every layout or styling option can be set.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="si-shipment" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1495098753747{padding-bottom: 20px !important;}"][vc_column_text css=".vc_custom_1488985781198{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Security and peace of mind</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1490794791164{margin-top: -30px !important;}"]
<p style="text-align: center;">You can relax knowing Stash<strong> </strong>is managed by a team of 4 professionals.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1495098799866{padding-bottom: 20px !important;}"][vc_column_text css=".vc_custom_1488985915637{margin-top: -20px !important;}"]
<h4 style="text-align: center;">It's personal</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1490794748990{margin-top: -30px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'About 02', 'stash' );
	$data['custom_class'] = 'hgr_template about-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="about-2" el_class="light-scheme" css=".vc_custom_1498820751846{padding-top: 70px !important;padding-bottom: 50px !important;background-color: #f8f8f8 !important;}"][vc_row gap="35" content_placement="top"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>Great minds discuss ideas; average minds discuss events; small minds discuss people.</h2>
[/vc_column_text][vc_btn title="CONTACT US" style="custom" custom_background="#1c46f2" custom_text="#ffffff" css_animation="fadeIn"][/vc_column][vc_column width="1/2" css=".vc_custom_1488978243653{padding-right: 25px !important;padding-left: 25px !important;}"][vc_column_text css_animation="fadeIn"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.

No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally.[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496244813334{margin-top: -20px !important;}" el_class="underline after first"]<strong><a class="link-curtain" href="#">View More</a></strong>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	

	
	
		$data = array();
	$data['name'] = __( 'Quote 01', 'stash' );
	$data['custom_class'] = 'hgr_template quote-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/quote/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section parallax="content-moving" parallax_image="69" el_id="quote-1" el_class="light-scheme" css=".vc_custom_1498820784953{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}"][vc_row][vc_column width="1/2"][vc_icon icon_fontawesome="fa fa-quote-left" color="custom" size="lg" css_animation="fadeInDown" custom_color="#f2f2f2" css=".vc_custom_1496245079862{margin-left: -10px !important;}"][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496245084856{margin-top: -30px !important;}"]
<h2>If your actions inspire others to dream more, learn more, do more and become more, you are a leader.</h2>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496245089220{margin-top: -20px !important;}"]
<h4>John Quincy Adams</h4>
[/vc_column_text][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	


		$data = array();
	$data['name'] = __( 'Case Study 01', 'stash' );
	$data['custom_class'] = 'hgr_template case-study-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/case-study/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="case-study-1" el_class="light-scheme" css=".vc_custom_1498820767527{padding-top: 70px !important;padding-bottom: 50px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Our Case Studies</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496244864858{margin-top: -20px !important;margin-bottom: 0px !important;padding-bottom: 0px !important;}"]
<p style="text-align: center;">You can relax knowing Stash<strong> </strong>is managed
by a team of 4 professionals.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column css=".vc_custom_1490803213062{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner gap="35" css=".vc_custom_1490803169030{padding-top: 50px !important;}"][vc_column_inner width="1/3"][vc_single_image image="1969" img_size="full" alignment="center" css_animation="fadeIn" el_class="column-shadow"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496244887539{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Republic</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="1970" img_size="full" alignment="center" css_animation="fadeIn" el_class="column-shadow"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496244898935{margin-top: -20px !important;}"]
<h4 style="text-align: center;">South Central</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="1971" img_size="full" alignment="center" css_animation="fadeIn" el_class="column-shadow"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496244910658{margin-top: -20px !important;}"]
<h4 style="text-align: center;">State Union</h4>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_btn title="ASK FOR A FREE QUOTE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	

	$data = array();
	$data['name'] = __( 'Testimonials 02', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="testimonials-2" css=".vc_custom_1498820792605{padding-top: 50px !important;padding-bottom: 50px !important;background-color: #ffffff !important;}" el_class="light-scheme"][vc_row gap="35"][vc_column width="1/6"][vc_single_image image="1911" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="1912" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="1913" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="1914" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="1915" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="1916" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][/vc_row][vc_row][vc_column][vc_tta_pageable no_fill_content_area="1" autoplay="5" active_section="1" pagination_style="" tab_position="top"][vc_tta_section title="Section 1" tab_id="logop01"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn"]
<h3 style="text-align: center;">Thanks to stash, we've just launched our 5th website with your theme! We've used stash for the last five years. I wish I would have thought of it for the last five years first.</h3>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h5 style="text-align: center;">Randy Collins</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496245021113{margin-top: -30px !important;margin-bottom: 0px !important;padding-bottom: 0px !important;}"]
<p style="text-align: center;"><em>WebDesigner</em></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Section 2" tab_id="logop02"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h3 style="text-align: center;">I just can't get enough of stash. I want to get a T-Shirt with stash on it so I can show it off to everyone. Thanks guys, keep up the good work!</h3>
[/vc_column_text][vc_column_text]
<h5 style="text-align: center;">Randy Collins</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495100345945{margin-top: -30px !important;margin-bottom: 0px !important;padding-bottom: 0px !important;}"]
<p style="text-align: center;"><em>WebDesigner</em></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_pageable][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Contact 01', 'stash' );
	$data['custom_class'] = 'hgr_template contact-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="contact-1" el_class="light-scheme" css=".vc_custom_1498820815103{padding-top: 70px !important;background-color: #ffffff !important;}"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Get in <em>touch</em> Now</h2>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row css=".vc_custom_1490885814504{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column css_animation="fadeIn"][vc_column_text el_class="horizontal"][contact-form-7 id="4" title="ContactStash"][/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1490886062935{margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important;border-right-width: 0px !important;border-left-width: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_column css_animation="fadeIn" css=".vc_custom_1496245053025{margin-right: 0px !important;margin-left: 0px !important;border-right-width: 0px !important;border-left-width: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][hgr_gmap gmap_name="Stash" google_maps_apikey="" gmap_latitude="-33.8814454" gmap_longitude="151.2226494" gmap_zoom="18" gmap_style="gmap_style_greyscale" gmap_marker_settings="gmap_marker_default" gmap_width="100%" gmap_height="450px" gmap_disablezoom="yes" gmap_disabledraggable="yes" gmap_extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 03', 'stash' );
	$data['custom_class'] = 'hgr_template hero-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_height="yes" content_placement="middle" el_id="hero-3" el_class="light-scheme" css=".vc_custom_1498822113570{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_row][vc_column width="1/3" offset="vc_hidden-xs"][vc_separator color="custom" align="align_right" border_width="2" el_width="30" css_animation="fadeIn" accent_color="#292929" css=".vc_custom_1491236195633{padding-top: 60px !important;}"][/vc_column][vc_column width="2/3"][vc_custom_heading text="Be the change that you wish to see in the world." font_container="tag:h1|font_size:90|text_align:left|color:%23292929|line_height:1" google_fonts="font_family:Playfair-Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic|font_style:700-bold-regular%3A700%3Anormal" css_animation="fadeIn"][vc_custom_heading text="Mahatma Gandhi" font_container="tag:h2|font_size:40|text_align:left|color:%231c46f2|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400-regular%3A400%3Anormal" css_animation="fadeIn" css=".vc_custom_1491236190093{padding-top: 20px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Skills 03', 'stash' );
	$data['custom_class'] = 'hgr_template skills-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/skills/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="skills-3" el_class="light-scheme"][vc_row full_width="stretch_row_content" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1492509105109{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;}"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h4>We're a goal oriented creative agency.</h4>
[/vc_column_text][vc_column_text]Salvia PBR&amp;B tacos knausgaard gluten-free, +1 raclette 3 wolf moon prism kogi. Bushwick authentic venmo ennui post-ironic banjo. Vice yuccie photo booth occupy, ramps iceland taxidermy hashtag. Butcher copper mug quinoa iPhone migas artisan.

Readymade ethical bicycle rights, seitan organic fanny pack 3 wolf moon. 90's XOXO crucifix, hoodie vinyl cornhole woke small batch blog shabby chic lomo kogi trust fund godard. Vexillologist taxidermy listicle lumbersexual, chicharrones tumblr viral.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1492509142333{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Building Awesome Products" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#3055ee" hgr_progressbar_color="#7b91ea" hgr_progressbar_value="95" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Helping our Clients" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#3055ee" hgr_progressbar_color="#7b91ea" hgr_progressbar_value="99" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Leaving Work Early" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#3055ee" hgr_progressbar_color="#7b91ea" hgr_progressbar_value="30" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Having Fun While Working" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#3055ee" hgr_progressbar_color="#7b91ea" hgr_progressbar_value="85" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Being Grateful Every Day" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#3055ee" hgr_progressbar_color="#7b91ea" hgr_progressbar_value="95" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Content 01', 'stash' );
	$data['custom_class'] = 'hgr_template content-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/content/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="content-1" el_class="dark-scheme"][vc_row full_width="stretch_row_content" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1492520863621{padding-top: 100px !important;padding-bottom: 100px !important;background: #1c46f2 url(http://highgradelab.com/stash/creative-agency/wp-content/uploads/sites/29/2017/04/project-1.jpg?id=35) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_text]
<h5 style="text-align: center;">IMAGE STACK</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491076138842{margin-top: -30px !important;}"]
<h2 style="text-align: center;">Burning Time</h2>
[/vc_column_text][vc_btn title="VIEW PROJECT" style="custom" custom_background="#000000" custom_text="#ffffff" shape="round" size="sm" align="center"][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1492520867489{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}"][vc_column_text]
<h5 style="text-align: center;">PABLO PICASSO</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491076349592{margin-top: -30px !important;}"]
<h2 style="text-align: center;">“Everything you can imagine is real.”</h2>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1492520872012{padding-top: 100px !important;padding-bottom: 100px !important;background: #000000 url(http://highgradelab.com/stash/creative-agency/wp-content/uploads/sites/29/2017/04/team-1.jpg?id=43) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row_inner content_placement="middle"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h5 style="text-align: left;">FOUNDER &amp; CEO</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491230482834{margin-top: -30px !important;}"]
<h2 style="text-align: left;">Kyle Bryant</h2>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Content 02', 'stash' );
	$data['custom_class'] = 'hgr_template content-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/content/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section el_id="content-2" el_class="dark-scheme"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="top"][vc_column css_animation="fadeIn" width="1/4"][vc_row_inner content_placement="middle" css=".vc_custom_1491230381243{padding-top: 80px !important;padding-bottom: 80px !important;background: #1c46f2 url(http://highgradelab.com/stash/creative-agency/wp-content/uploads/sites/29/2017/04/project-2.jpg?id=67) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;">IMAGE STACK</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491076138842{margin-top: -30px !important;}"]
<h2 style="text-align: center;">Burning Time</h2>
[/vc_column_text][vc_btn title="VIEW PROJECT" style="custom" custom_background="#000000" custom_text="#ffffff" shape="round" size="sm" align="center"][/vc_column_inner][/vc_row_inner][vc_row_inner content_placement="middle" css=".vc_custom_1491236436743{padding-top: 80px !important;padding-bottom: 68px !important;background-color: #1c46f2 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_inner css=".vc_custom_1491235760702{padding-right: 75px !important;padding-left: 75px !important;}"][vc_column_text]
<h5 style="text-align: center;">BEST EVER</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491236034420{margin-top: -30px !important;}"]
<h2 style="text-align: center;">Our Clients</h2>
[/vc_column_text][vc_images_carousel images="123,124,125,126" img_size="full" onclick="link_no" speed="2000" autoplay="yes" hide_pagination_control="yes" hide_prev_next_buttons="yes" wrap="yes" el_class="centered-content"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1492509214963{background: #e8e8e8 url(http://highgradelab.com/stash/creative-agency/wp-content/uploads/sites/29/2017/04/team-2.jpg?id=69) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row_inner css=".vc_custom_1491219460723{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;"><span style="color: #292929;">CFO</span></h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491230756333{margin-top: -30px !important;}"]
<h2 style="text-align: center;"><span style="color: #292929;">Nicole Sims</span></h2>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_row_inner content_placement="middle" css=".vc_custom_1491233716877{padding-top: 80px !important;padding-bottom: 138px !important;background: #1c46f2 url(http://highgradelab.com/stash/creative-agency/wp-content/uploads/sites/29/2017/04/team-3.jpg?id=76) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="box"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;">PR MANAGER</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491230781116{margin-top: -30px !important;}"]
<h2 style="text-align: center;">Rachel Hudson</h2>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner content_placement="middle" css=".vc_custom_1491232424875{background-color: #f8f8f8 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_inner css=".vc_custom_1491231787400{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_basic_grid post_type="post" max_items="1" element_width="12" gap="0" item="79" grid_id="vc_gid:1498822103841-997549f7-7a89-4" css=".vc_custom_1491231802270{margin-bottom: 0px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1492509222541{background: #f8f8f8 url(http://highgradelab.com/stash/creative-agency/wp-content/uploads/sites/29/2017/04/project-3.jpg?id=90) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row_inner css=".vc_custom_1491219460723{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;">LANDSCAPES</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491232976153{margin-top: -30px !important;}"]
<h2 style="text-align: center;">Phare du Petit Minou</h2>
[/vc_column_text][vc_btn title="VIEW PROJECT" style="custom" custom_background="#000000" custom_text="#ffffff" shape="round" size="sm" align="center"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Contact 02', 'stash' );
	$data['custom_class'] = 'hgr_template contact-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section el_id="contact-2"][vc_row full_width="stretch_row_content" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1491236250801{padding-top: 100px !important;padding-bottom: 100px !important;background: #f8f8f8 url(http://highgradelab.com/stash/creative-agency/wp-content/uploads/sites/29/2017/04/contact.jpg?id=111) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="light-scheme"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h4>Contact Information</h4>
[/vc_column_text][vc_column_text]<strong>ADDRESS</strong>: 104 Doney St, Duquesne, PA, 15110
<strong>PHONE</strong>: (515) 989-3630
<strong>EMAIL</strong>: hello@stash.com[/vc_column_text][vc_column_text]
<h4>Follow Us</h4>
[/vc_column_text][vc_column_text]
<p style="text-align: left;"><a href="#">[icon name="fa fa-facebook" size="24px"]</a>      <a href="#">[icon name="fa fa-linkedin" size="24px"]</a>      <a href="#">[icon name="fa fa-instagram" size="24px"]</a>      <a href="#">[icon name="fa fa-google-plus" size="24px"]</a></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1491236254142{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}" el_class="dark-scheme"][vc_row_inner el_class="dark-scheme"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner el_class="dark-scheme" width="2/3"][vc_column_text]
<h5 style="text-align: center;">ARE YOU READY?</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491234207487{margin-top: -30px !important;}"]
<h2 style="text-align: center;">Let's work together!</h2>
[/vc_column_text][vc_btn title="GET A QUOTE" style="custom" custom_background="#000000" custom_text="#ffffff" shape="round" size="sm" align="center"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 04', 'stash' );
	$data['custom_class'] = 'hgr_template hero-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" el_id="hero-4" el_class="dark-scheme" css=".vc_custom_1498822499055{padding-top: 100px !important;padding-bottom: 50px !important;background-image: url(http://highgradelab.com/stash/classic-business/wp-content/uploads/sites/30/2017/04/hero.jpg?id=9) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row gap="35"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Classic Bussines
<em>Stash</em> Demo</h1>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers.</p>
[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#000000" custom_text="#ffffff" size="lg" align="center"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'About 03', 'stash' );
	$data['custom_class'] = 'hgr_template about-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" el_id="about-3" el_class="light-scheme" css=".vc_custom_1498822513311{padding-top: 120px !important;padding-bottom: 90px !important;background-color: #ffffff !important;}"][vc_row gap="35" equal_height="yes" content_placement="top"][vc_column width="1/2" css=".vc_custom_1491383157660{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeIn"]
<h2>Visual Page Builder with
80+ Page Elements</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code or avoids pleasure itself, because it is pleasure.[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>Awesome Header Styles</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655556384{margin-top: -20px !important;}"]You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][vc_column_text css_animation="fadeIn"]<span style="color: #1c46f2;"><a class="link-curtain" style="color: #1c46f2;" href="#"><strong>Learn More</strong></a></span>[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1491383246026{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_single_image image="127" img_size="full" alignment="center" onclick="zoom" css_animation="fadeIn" css=".vc_custom_1496655593836{padding-bottom: 0px !important;}"][/vc_column][vc_column width="1/4" offset="vc_hidden-sm vc_hidden-xs" css=".vc_custom_1491383252151{padding-top: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_single_image image="128" img_size="full" alignment="center" onclick="zoom" css_animation="fadeIn" css=".vc_custom_1496655599210{padding-bottom: 0px !important;}"][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1491306791105{padding-top: 80px !important;}"][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Awesome Header Styles</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn"]Thanks to one of the most popular plugins on the market (Visual Composer), you can build almost any type of layout.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Drag &amp; Drop Footer Builder</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn"]Manage multiple footers easily using WP Custom Posts. No widgets, no pre-formatted elements, no fixed layouts.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Powerful Theme Options</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn"]Based on the already popular Redux framework, Falcon’s Theme Options panel gives you total customisation freedom.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Quote 03', 'stash' );
	$data['custom_class'] = 'hgr_template quote-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/quote/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" el_id="quote-3" el_class="light-scheme" css=".vc_custom_1498822523088{margin-bottom: 0px !important;border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 50px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row css=".vc_custom_1491307996720{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_column width="1/2" css=".vc_custom_1491307990241{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_single_image image="147" img_size="full" alignment="center" css_animation="fadeIn" css=".vc_custom_1496655608540{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655613035{padding-top: 150px !important;}"]
<h2>There is always space for improvement, no matter how long
you've been in the business.</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>Oscar De La Hoya</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655912315{margin-top: -30px !important;padding-bottom: 100px !important;}"]
<h5>-Quote of the day</h5>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	

	
	
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 03', 'stash' );
	$data['custom_class'] = 'hgr_template features-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1498822565931{padding-top: 100px !important;padding-bottom: 90px !important;background-color: #ffffff !important;}" el_id="features-3"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">All the great features
you get with<em> Stash</em></h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1491384388880{padding-top: 30px !important;}"][vc_column width="1/4"][hgr_animicon animicon_icon="bi-display" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495534337358{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Responsive Design</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655715110{margin-top: -20px !important;}"]A website eligible for the “mobile friendly” label will perform better in mobile search results.[/vc_column_text][/vc_column][vc_column width="1/4"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495534056782{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>SEO Friendly</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655723237{margin-top: -20px !important;}"]A website eligible for the “mobile friendly” label will perform better in mobile search results.[/vc_column_text][/vc_column][vc_column width="1/4"][hgr_animicon animicon_icon="bi-gear" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495534345845{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Very Customisable</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655730882{margin-top: -20px !important;}"]A website eligible for the “mobile friendly” label will perform better in mobile search results.[/vc_column_text][/vc_column][vc_column width="1/4"][hgr_animicon animicon_icon="bi-globe" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495534371799{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Security And Peace Of Mind</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655739290{margin-top: -20px !important;}"]A website eligible for the “mobile friendly” label will perform better in mobile search results.[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1491317021903{padding-top: 20px !important;}"][vc_column width="1/4"][hgr_animicon animicon_icon="bi-summit" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495534397036{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>It’s Personal</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655748749{margin-top: -20px !important;}"]A website eligible for the “mobile friendly” label will perform better in mobile search results.[/vc_column_text][/vc_column][vc_column width="1/4"][hgr_animicon animicon_icon="bi-mouse" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495534413623{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>OneClick Install</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655755993{margin-top: -20px !important;}"]A website eligible for the “mobile friendly” label will perform better in mobile search results.[/vc_column_text][/vc_column][vc_column width="1/4"][hgr_animicon animicon_icon="bi-bullseye" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495534461412{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h4>Drag &amp; Drop Footer Builder</h4>
</div>
</div>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655772114{margin-top: -20px !important;}"]A website eligible for the “mobile friendly” label will perform better in mobile search results.[/vc_column_text][/vc_column][vc_column width="1/4"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495534468010{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Powerful Theme Options</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496655766189{margin-top: -20px !important;}"]A website eligible for the “mobile friendly” label will perform better in mobile search results.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Contact 03', 'stash' );
	$data['custom_class'] = 'hgr_template contact-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" el_id="contact-3" el_class="light-scheme" css=".vc_custom_1498822578317{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Get in <em>touch</em> Now</h2>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row css=".vc_custom_1490885814504{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column][vc_column_text css_animation="fadeIn" el_class="horizontal"][contact-form-7  title="ContactClassicBusiness"][/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 05', 'stash' );
	$data['custom_class'] = 'hgr_template hero-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section el_id="hero-5" el_class="light-scheme" css=".vc_custom_1498826870105{padding-top: 250px !important;padding-bottom: 180px !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h1 style="text-align: center;">You will love our <em>powerful</em> theme options panel, because, every layout or styling option can be set using the intuitive settings panel.</h1>
[/vc_column_text][vc_btn title="VIEW PORTFOLIO" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn" css=".vc_custom_1496655736542{padding-top: 50px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	

	
	
	
	$data = array();
	$data['name'] = __( 'Features 04', 'stash' );
	$data['custom_class'] = 'hgr_template features-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section el_id="features-4" el_class="light-scheme" css=".vc_custom_1498826896963{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}"][vc_row css=".vc_custom_1491390627712{padding-bottom: 50px !important;}"][vc_column width="1/4"][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_column_text]
<h5 style="text-align: center;">DETAILS</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495542271540{margin-top: -25px !important;}"]
<h2 style="text-align: center;">Awesome features</h2>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1491391487566{margin-top: -16px !important;padding-top: 0px !important;}"][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-gear" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1488985479780{margin-top: -30px !important;}"]
<div class="page" title="Page 2">
<div class="layoutArea">
<div class="column">
<p style="text-align: center;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-globe" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Security and peace of mind</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1488985827912{margin-top: -30px !important;}"]
<div class="page" title="Page 2">
<div class="layoutArea">
<div class="column">
<div class="page" title="Page 2">
<div class="layoutArea">
<div class="column">
<p style="text-align: center;">You can relax knowing MAKR is managed by a team of 4 professionals who got more than seven years of experience in wordpress.</p>

</div>
</div>
</div>
</div>
</div>
</div>
[/vc_column_text][vc_btn title="VIEW FEATURES" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="none" css=".vc_custom_1496655889343{padding-top: 50px !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-summit" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">It's personal</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1488985957201{margin-top: -30px !important;}"]
<div class="page" title="Page 2">
<div class="layoutArea">
<div class="column">
<div class="page" title="Page 3">
<div class="layoutArea">
<div class="column">
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.</p>

</div>
</div>
</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 05', 'stash' );
	$data['custom_class'] = 'hgr_template features-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section el_id="features-5" el_class="light-scheme" css=".vc_custom_1498826906206{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #ffffff !important;}"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle" css=".vc_custom_1491395879806{margin-top: 0px !important;margin-bottom: 0px !important;border-top-width: 1px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496655783975{padding-top: 400px !important;background-image: url(http://highgradelab.com/stash/classic-agency/wp-content/uploads/sites/31/2017/04/features-1.jpg?id=1860) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3" css=".vc_custom_1486555996716{padding-top: 60px !important;padding-bottom: 35px !important;}"][vc_column_text]
<h2 style="text-align: center;">Motivated</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1495541549966{margin-top: -10px !important;}"]
<p style="text-align: center;">Disrupt waistcoat enamel pin four dollar toast. Coloring book af gochujang, brooklyn woke.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1496655576554{margin-top: -10px !important;}"]
<p style="text-align: center;"><a class="link-curtain" href="#"><strong><span style="color: #1c46f2;">Learn More</span></strong></a></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496655787666{padding-top: 400px !important;background-image: url(http://highgradelab.com/stash/classic-agency/wp-content/uploads/sites/31/2017/04/features-2.jpg?id=1865) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle" css=".vc_custom_1491395885615{margin-top: 0px !important;margin-bottom: 0px !important;border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3" css=".vc_custom_1486556021715{padding-top: 60px !important;padding-bottom: 35px !important;}"][vc_column_text]
<h2 style="text-align: right;">Focused</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1495541566065{margin-top: -10px !important;}"]
<p style="text-align: right;">Disrupt waistcoat enamel pin four dollar toast. Coloring book af gochujang, brooklyn woke.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1496655588588{margin-top: -10px !important;}"]
<p style="text-align: right;"><a class="link-curtain" href="#"><strong><span style="color: #1c46f2;">Learn More</span></strong></a></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496655791693{padding-top: 400px !important;background-image: url(http://highgradelab.com/stash/classic-agency/wp-content/uploads/sites/31/2017/04/features-3.jpg?id=1866) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3" css=".vc_custom_1486556028137{padding-top: 60px !important;padding-bottom: 35px !important;}"][vc_column_text]
<h2 style="text-align: left;">Passionate</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1495541557795{margin-top: -10px !important;}"]
<p style="text-align: left;">Disrupt waistcoat enamel pin four dollar toast. Coloring book af gochujang, brooklyn woke.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1496655596373{margin-top: -10px !important;}"]
<p style="text-align: left;"><a class="link-curtain" href="#"><strong><span style="color: #1c46f2;">Learn More</span></strong></a></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1491395931351{padding-top: 40px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}"][vc_column css_animation="fadeIn" width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="756" counter_number_format="h1" counter_number_color="#292929" counter_units="" counter_units_color="" counter_text="Cups Of Coffe" counter_text_format="h4" counter_text_color="#292929" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][vc_column css_animation="fadeIn" width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="6000" counter_number_format="h1" counter_number_color="#292929" counter_units="" counter_units_color="" counter_text="Happy Clients" counter_text_format="h4" counter_text_color="#292929" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][vc_column css_animation="fadeIn" width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="10000" counter_number_format="h1" counter_number_color="#292929" counter_units="" counter_units_color="" counter_text="Hours of Coding" counter_text_format="h4" counter_text_color="#292929" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][vc_column css_animation="fadeIn" width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="950" counter_number_format="h1" counter_number_color="#292929" counter_units="" counter_units_color="" counter_text="Completed Projects" counter_text_format="h4" counter_text_color="#292929" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	

	
	
	
	
	
	$data = array();
	$data['name'] = __( 'News 02', 'stash' );
	$data['custom_class'] = 'hgr_template news-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/news/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section el_id="news-2" el_class="light-scheme" css=".vc_custom_1498826947473{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column css_animation="fadeIn"][hgr_blog_posts posts_number="3" posts_columns="3" display_order="img_title_txt" display_by="none" order="ASC" blog_post_title_size="h4" blogpost_footer="simple" links_color="#292929" hgr_bg_color="" extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Contact 04', 'stash' );
	$data['custom_class'] = 'hgr_template contact-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" el_id="contact-4" el_class="light-scheme" css=".vc_custom_1498826958283{padding-bottom: 100px !important;}"][vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][hgr_gmap gmap_name="Sydney" google_maps_apikey="" gmap_latitude="-33.8814454" gmap_longitude="151.2226494" gmap_zoom="18" gmap_style="gmap_style_greyscale" gmap_marker_settings="gmap_marker_default" gmap_width="" gmap_height="400px" gmap_disablezoom="yes" gmap_disabledraggable="yes" gmap_extra_class=""][/vc_column][/vc_row][vc_row css=".vc_custom_1496655669495{padding-top: 150px !important;}"][vc_column css_animation="none" width="1/2"][vc_column_text]
<h5>SAY HELLO</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495543335871{margin-top: -25px !important;padding-bottom: 10px !important;}"]
<h2>Ask a question</h2>
[/vc_column_text][vc_column_text el_class="full"][contact-form-7  title="ClassicAgency Contact"][/vc_column_text][/vc_column][vc_column css_animation="none" width="1/2"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="3/4" css=".vc_custom_1491471446290{margin-top: 0px !important;padding-top: 0px !important;}"][vc_column_text]
<h5>REACH US</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495543356122{margin-top: -25px !important;}"]
<h2>Our contact</h2>
[/vc_column_text][vc_column_text]
<h4>Adress</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491470715509{margin-top: -35px !important;}"]77 Winchester Lane
Coachella, CA 92236[/vc_column_text][vc_column_text css=".vc_custom_1491470832343{margin-top: -5px !important;}"]
<h4>Phone</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491470723772{margin-top: -35px !important;}"]+207 3159 9845[/vc_column_text][vc_column_text css=".vc_custom_1491470838862{margin-top: -5px !important;}"]
<h4>Email</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491470730035{margin-top: -35px !important;}"]office@stash.com[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 07', 'stash' );
	$data['custom_class'] = 'hgr_template hero-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="178" el_id="hero-7" el_class="dark-scheme" css=".vc_custom_1498831344938{padding-top: 200px !important;padding-bottom: 50px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column css_animation="fadeIn" width="2/3"][vc_column_text]
<h1>Every creator painfully experiences the chasm between his <em>inner</em> vision and its ultimate <em>expression</em>.</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491817004254{margin-top: -30px !important;}"]
<h4><em>Isaac Bashevis Singer</em></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491817149668{padding-top: 100px !important;}"]<a href="#">[icon name="fa fa-facebook" size="18px"]</a>      <a href="#">[icon name="fa fa-twitter" size="18px"]</a>     <a href="#"> [icon name="fa fa-linkedin" size="18px"] </a>     <a href="#">[icon name="fa fa-instagram" size="18px"]</a>     <a href="#"> [icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column][vc_column width="1/3"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'About 06', 'stash' );
	$data['custom_class'] = 'hgr_template about-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" el_id="about-6" el_class="light-scheme" css=".vc_custom_1498831355029{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column css_animation="fadeIn" width="1/3"][vc_column_text]
<h2>Danielle Taylor</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1491817721998{margin-top: -35px !important;}"]Graphic &amp; Web Designer[/vc_column_text][vc_column_text css=".vc_custom_1491818541759{padding-top: 10px !important;}"]<strong>Birthday</strong> : 02 Aug 1986[/vc_column_text][vc_column_text css=".vc_custom_1491817737163{margin-top: -30px !important;}"]<strong>Job</strong> : Freelancer[/vc_column_text][vc_column_text css=".vc_custom_1491817890663{margin-top: -30px !important;}"]<strong>Website</strong> : www.HighGradeLab.com[/vc_column_text][vc_column_text css=".vc_custom_1495617721845{margin-top: -30px !important;}"]<strong>Email</strong> : danielle@stash.com[/vc_column_text][vc_column_text css=".vc_custom_1495617736131{margin-top: -30px !important;}"]<strong>Facebook</strong> : fb.com/DanielleTaylor[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="2/3"][vc_column_text]
<h2>The <span style="color: #1c46f2;"><strong>past</strong> </span>is really almost as much a work of the imagination as the <span style="color: #1c46f2;"><strong>future</strong></span>.</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1491818568282{margin-top: -10px !important;}"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row" equal_height="yes" content_placement="middle" css=".vc_custom_1495617930745{padding-top: 150px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496656957897{margin-right: 10px !important;margin-left: 10px !important;padding-right: 35px !important;padding-left: 35px !important;background: #1c46f2 url(http://highgradelab.com/stash/personal-page/wp-content/uploads/sites/34/2017/04/about.jpg?id=180) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_text]
<h2 style="text-align: center;"><span style="color: #ffffff;"><strong>People grow through experience if they meet life honestly and courageously. This is how character is built.</strong></span></h2>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="2/3"][vc_row_inner gap="35" css=".vc_custom_1491821283938{margin-left: -17.5px !important;padding-top: 30px !important;padding-left: 0px !important;}"][vc_column_inner width="1/2"][vc_column_text css=".vc_custom_1491821144153{padding-left: 0px !important;}"]
<h6><span style="color: #d1d1d1;">02.06.2016 - present</span></h6>
[/vc_column_text][vc_column_text css=".vc_custom_1491820266190{margin-top: -30px !important;}"]
<h4>WebDesigner @ Adobe</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491820278735{margin-top: -10px !important;}"]To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h6><span style="color: #d1d1d1;">26.01.2013 - 02.06.2016</span></h6>
[/vc_column_text][vc_column_text css=".vc_custom_1491820452414{margin-top: -30px !important;}"]
<h4>WebDesigner @ Creative</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491820284397{margin-top: -10px !important;}"]To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1491821289183{margin-left: -17.5px !important;padding-top: 20px !important;padding-left: 0px !important;}"][vc_column_inner width="1/2"][vc_column_text]
<h6><span style="color: #d1d1d1;">15.08.2012 - 26.01.2013</span></h6>
[/vc_column_text][vc_column_text css=".vc_custom_1491820467474{margin-top: -30px !important;}"]
<h4>WebDesigner @ HGR Lab</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491820278735{margin-top: -10px !important;}"]To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h6><span style="color: #d1d1d1;">20.07.2006- 15.08.2012</span></h6>
[/vc_column_text][vc_column_text css=".vc_custom_1491820479622{margin-top: -30px !important;}"]
<h4>SeniorWebDesigner @ HGR Lab</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491820284397{margin-top: -10px !important;}"]To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Services 02', 'stash' );
	$data['custom_class'] = 'hgr_template services-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/services/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" el_id="services-2" el_class="light-scheme" css=".vc_custom_1498831373345{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 150px !important;padding-bottom: 150px !important;background-color: #ffffff !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h2 style="text-align: center;">My Services</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1491404342418{padding-top: 30px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496657017515{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][vc_row_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-mouse" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="72" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495542823596{margin-top: -5px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4>OneClick Install</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495542737846{margin-top: -30px !important;}"]Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496657021316{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][vc_row_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-display" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="72" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495542932525{margin-top: -5px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4>Layout Builder</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495542737846{margin-top: -30px !important;}"]Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496657025104{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][vc_row_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-bullseye" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="72" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495542953428{margin-top: -5px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4>Awesome Header Styles</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495542737846{margin-top: -30px !important;}"]Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1491404342418{padding-top: 30px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496657028550{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][vc_row_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="si-diamond" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="72" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495542965418{margin-top: -5px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4>Drag &amp; Drop Footer Builder</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495542737846{margin-top: -30px !important;}"]Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496657032472{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][vc_row_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="72" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495542970911{margin-top: -5px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4>Powerful Theme Options</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495542737846{margin-top: -30px !important;}"]Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496657036216{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][vc_row_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="72" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495543263064{margin-top: -5px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4>Approved By Google</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495542737846{margin-top: -30px !important;}"]Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 05', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="187" css=".vc_custom_1498831395864{padding-top: 150px !important;background-color: #1c46f2 !important;}" el_id="testimonials-5"][vc_row el_class="dark-scheme"][vc_column width="1/4"][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_column_text]
<h2 style="text-align: center;">A Huge <em>Thank You</em> to My Customers
For Their Support &amp; Appreciation</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1491821508022{margin-top: -30px !important;}"]
<p style="text-align: center;">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row gap="20" css=".vc_custom_1495623525773{padding-top: 50px !important;padding-bottom: 150px !important;}" el_class="light-scheme"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496657052160{padding-top: 35px !important;padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_column_text]"Needless to say we are extremely satisfied with the results. Stash is worth much more than I paid. Stash is the most valuable business resource we have EVER purchased. We were treated like royalty."[/vc_column_text][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/4" css=".vc_custom_1495623379046{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="194" img_size="75x75" style="vc_box_circle_2"][/vc_column_inner][vc_column_inner width="3/4" css=".vc_custom_1495623383917{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<h5>Anna Lucas</h5>
<em>Web Designer @ Sage</em>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496657055718{padding-top: 35px !important;padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_column_text]"It's incredible. The service was excellent. I just can't get enough of Stash. I want to get a T-Shirt with Stash on it so I can show it off to everyone. I couldn't have asked for more than this. Stash is the real deal!"[/vc_column_text][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/4" css=".vc_custom_1495623379046{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="195" img_size="75x75" style="vc_box_circle_2"][/vc_column_inner][vc_column_inner width="3/4" css=".vc_custom_1495623383917{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<h5>Larry Morris</h5>
<em>CFO @ Attractor</em>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496657059878{padding-top: 35px !important;padding-right: 35px !important;padding-bottom: 10px !important;padding-left: 35px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_column_text]"We've seen amazing results already. It's the perfect solution for our business. No matter where you go, Stash is the coolest, most happening thing around! Stash is the most we have EVER purchased."[/vc_column_text][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/4" css=".vc_custom_1495623379046{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="196" img_size="75x75" style="vc_box_circle_2"][/vc_column_inner][vc_column_inner width="3/4" css=".vc_custom_1495623383917{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<h5>John Collins</h5>
<em>Web Developer @ SouthCentral</em>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1495624647470{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-bottom: 10px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_class="light-scheme"][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657064356{margin-top: 0px !important;padding-top: 20px !important;padding-bottom: 20px !important;}"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="2589" counter_number_format="h1" counter_number_color="#1c46f2" counter_units="" counter_units_color="#222222" counter_text="CUPS OF COFFE" counter_text_format="h5" counter_text_color="#4b555f" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657067620{padding-top: 20px !important;}"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="4365" counter_number_format="h1" counter_number_color="#1c46f2" counter_units="" counter_units_color="#222222" counter_text="AWARDS WON" counter_text_format="h5" counter_text_color="#4b555f" counter_speed="6" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657072068{padding-top: 20px !important;}"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="7550" counter_number_format="h1" counter_number_color="#1c46f2" counter_units="" counter_units_color="#222222" counter_text="HAPPY CUSTOMERS" counter_text_format="h5" counter_text_color="#4b555f" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657075636{padding-top: 20px !important;}"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="2589" counter_number_format="h1" counter_number_color="#1c46f2" counter_units="" counter_units_color="#222222" counter_text="CUPS OF COFFE" counter_text_format="h5" counter_text_color="#4b555f" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Clients 04', 'stash' );
	$data['custom_class'] = 'hgr_template clients-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/clients/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section css=".vc_custom_1498831420030{padding-top: 150px !important;padding-bottom: 150px !important;}" el_id="clients-4" el_class="light-scheme"][vc_row][vc_column width="1/4"][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_column_text]
<h2 style="text-align: center;">Some of My Clients</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1491821508022{margin-top: -30px !important;}"]
<p style="text-align: center;">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row css=".vc_custom_1491828728746{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657085935{border-right-width: 1px !important;border-bottom-width: 1px !important;padding-top: 45px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_single_image image="160" img_size="full" alignment="center" el_class="image-hover"][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657089143{border-right-width: 1px !important;border-bottom-width: 1px !important;padding-top: 45px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_single_image image="161" img_size="full" alignment="center" el_class="image-hover"][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657092785{border-right-width: 1px !important;border-bottom-width: 1px !important;padding-top: 45px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_single_image image="162" img_size="full" alignment="center" el_class="image-hover"][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657096121{border-bottom-width: 1px !important;padding-top: 45px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_single_image image="163" img_size="full" alignment="center" el_class="image-hover"][/vc_column][/vc_row][vc_row][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657100085{border-right-width: 1px !important;padding-top: 45px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;border-right-color: #e9ecef !important;border-right-style: solid !important;}"][vc_single_image image="158" img_size="full" alignment="center" el_class="image-hover"][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657104083{border-right-width: 1px !important;padding-top: 45px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;border-right-color: #e9ecef !important;border-right-style: solid !important;}"][vc_single_image image="159" img_size="full" alignment="center" el_class="image-hover"][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657108041{border-right-width: 1px !important;padding-top: 45px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;border-right-color: #e9ecef !important;border-right-style: solid !important;}"][vc_single_image image="160" img_size="full" alignment="center" el_class="image-hover"][/vc_column][vc_column css_animation="fadeIn" width="1/4" css=".vc_custom_1496657112104{border-right-width: 1px !important;padding-top: 45px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;border-right-color: #ffffff !important;border-right-style: solid !important;}"][vc_single_image image="158" img_size="full" alignment="center" el_class="image-hover"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	$data = array();
	$data['name'] = __( 'Clients 02', 'stash' );
	$data['custom_class'] = 'hgr_template clients-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/clients/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" el_id="clients-2" el_class="light-scheme" css=".vc_custom_1498833533792{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 70px !important;padding-bottom: 50px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row gap="35" content_placement="middle"][vc_column width="1/2" css=".vc_custom_1491916918416{margin-left: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<h2>A Huge <em>Thank You</em> to My Customers For Their Support &amp; Appreciation</h2>
[/vc_column_text][/vc_column][vc_column width="1/2"][vc_row_inner gap="10"][vc_column_inner width="1/3"][vc_single_image image="1817" img_size="full" el_class="image-opacity"][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="1818" img_size="full" el_class="image-opacity"][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="1819" img_size="full" el_class="image-opacity"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="10"][vc_column_inner width="1/3"][vc_single_image image="1820" img_size="full" el_class="image-opacity"][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="1821" img_size="full" el_class="image-opacity"][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="1822" img_size="full" el_class="image-opacity"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 08', 'stash' );
	$data['custom_class'] = 'hgr_template hero-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" parallax="content-moving" parallax_image="1854" el_id="hero-8" el_class="dark-scheme" css=".vc_custom_1498833795051{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h5 style="text-align: center;">WELCOME</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491916611794{margin-top: -20px !important;}"]
<h1 style="text-align: center;">We’re passionate about using good design
to <em>enrich</em> people’s lives.</h1>
[/vc_column_text][vc_column_text]
<h5 style="text-align: center;">E: Creative@Stash.Com | Skype: Cstash</h5>
[/vc_column_text][vc_separator color="white" el_width="10"][vc_column_text]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>      <a href="#">[icon name="fa fa-facebook" size="24px"]</a>      <a href="#">[icon name="fa fa-twitter" size="24px"]</a></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Split Section 02', 'stash' );
	$data['custom_class'] = 'hgr_template split-section-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/split-section/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row_content" el_id="split-section-2" el_class="light-scheme" css=".vc_custom_1498833838471{border-top-width: 1px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;}"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle" css=".vc_custom_1491904791131{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column width="1/2" css=".vc_custom_1491904759025{padding-top: 250px !important;background-image: url(http://highgradelab.com/stash/classic-studio/wp-content/uploads/sites/36/2017/04/split-1.jpg?id=35) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner gap="35" css=".vc_custom_1491904854323{padding-top: 150px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h2>Stash Studio</h2>
[/vc_column_text][vc_column_text]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-bullseye" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495627265010{margin-left: -20px !important;}"][vc_column_text]Because you have better things to do, like create, sell and grow your business.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-gear" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495627280760{margin-left: -20px !important;}"][vc_column_text]Stash is a bundle of 200+ proven template designs.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1491904859521{padding-top: 10px !important;padding-bottom: 150px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_btn title="DROP US A LINE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="left"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 06', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section el_id="testimonials-6" el_class="light-scheme" css=".vc_custom_1498833878760{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column width="1/6"][/vc_column][vc_column css_animation="fadeIn" width="2/3"][vc_column_text]
<h3 style="text-align: center;">"Stash should be nominated for theme of the year. You guys rock! No matter where you go, Stash is the coolest, most happening thing around!"</h3>
[/vc_column_text][vc_column_text]
<h5 style="text-align: center;"><span style="color: #1c46f2;">Chris P. - Envato</span></h5>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1491909460678{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="54" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="55" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="56" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="57" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="58" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="59" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'News 03', 'stash' );
	$data['custom_class'] = 'hgr_template news-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/news/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section el_id="news-3" el_class="light-scheme" css=".vc_custom_1498833899319{padding-top: 150px !important;padding-bottom: 120px !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_basic_grid post_type="post" max_items="3" item="1810" grid_id="vc_gid:1498833744204-a8511798-6d91-4"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Contact 06', 'stash' );
	$data['custom_class'] = 'hgr_template contact-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" el_id="contact-6" el_class="light-scheme" css=".vc_custom_1498833916048{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496661937037{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h2>Contact</h2>
[/vc_column_text][vc_column_text]+1 (229) 346-9923[/vc_column_text][vc_column_text css=".vc_custom_1491915124540{margin-top: -30px !important;}"]+1 (619) 303-2419[/vc_column_text][vc_column_text css=".vc_custom_1496662315053{margin-top: -30px !important;}"]creative@stash.com[/vc_column_text][vc_column_text]
<h2>Address</h2>
[/vc_column_text][vc_column_text]2514 Glebe Rd, Lemon Grove[/vc_column_text][vc_column_text css=".vc_custom_1491915293886{margin-top: -30px !important;}"]CA, 91945[/vc_column_text][vc_btn title="GET DIRECTIONS" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="sm" align="left"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2"][hgr_gmap gmap_name="Stash" google_maps_apikey="" gmap_latitude="-33.8814454" gmap_longitude="151.2226494" gmap_zoom="17" gmap_style="gmap_style_normal" gmap_marker_settings="gmap_marker_default" gmap_width="100%" gmap_height="820px" gmap_disablezoom="yes" gmap_disabledraggable="yes" gmap_extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 10', 'stash' );
	$data['custom_class'] = 'hgr_template hero-10';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
      [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" parallax="content-moving" parallax_image="10" el_id="hero-10" el_class="dark-scheme" css=".vc_custom_1499080742616{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}"][vc_row content_placement="middle"][vc_column css_animation="fadeIn"][vc_row_inner][vc_column_inner offset="vc_hidden-xs"][vc_custom_heading text="Stunning" font_container="tag:h1|font_size:200|text_align:center|color:%23ffffff|line_height:1" use_theme_fonts="yes" css=".vc_custom_1491990517873{padding-bottom: 50px !important;}"][/vc_column_inner][/vc_row_inner][vc_column_text css=".vc_custom_1491998254968{padding-top: 30px !important;}"]
<h3 style="text-align: center;">We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.</h3>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 06', 'stash' );
	$data['custom_class'] = 'hgr_template features-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="features-6" el_class="dark-scheme" css=".vc_custom_1499080767968{padding-top: 150px !important;padding-bottom: 120px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column css_animation="fadeIn" width="1/6"][hgr_icon icon_type="selector" icntxt_icon="outline outline-target" icntxt_iconcolor="#c2edff" icntxt_iconcolor_hover="#ffffff" icntxt_icnsize="48" icon_alignment="center" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491990908512{padding-top: 20px !important;}"]
<h6 style="text-align: center;">Great Design</h6>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/6"][hgr_icon icon_type="selector" icntxt_icon="outline outline-smartphone-shake" icntxt_iconcolor="#c2edff" icntxt_iconcolor_hover="#ffffff" icntxt_icnsize="48" icon_alignment="center" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491991005396{padding-top: 20px !important;}"]
<h6 style="text-align: center;">40+ Demos</h6>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/6"][hgr_icon icon_type="selector" icntxt_icon="outline outline-trophy" icntxt_iconcolor="#c2edff" icntxt_iconcolor_hover="#ffffff" icntxt_icnsize="48" icon_alignment="center" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491991052408{padding-top: 20px !important;}"]
<h6 style="text-align: center;">Premium Plugins</h6>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/6"][hgr_icon icon_type="selector" icntxt_icon="outline outline-cube" icntxt_iconcolor="#c2edff" icntxt_iconcolor_hover="#ffffff" icntxt_icnsize="48" icon_alignment="center" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491991090557{padding-top: 20px !important;}"]
<h6 style="text-align: center;">OneClick Install™</h6>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/6"][hgr_icon icon_type="selector" icntxt_icon="outline outline-smartphone-calibrate-location" icntxt_iconcolor="#c2edff" icntxt_iconcolor_hover="#ffffff" icntxt_icnsize="48" icon_alignment="center" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491991123825{padding-top: 20px !important;}"]
<h6 style="text-align: center;">80+ Page Elements</h6>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/6"][hgr_icon icon_type="selector" icntxt_icon="outline outline-archery-target" icntxt_iconcolor="#c2edff" icntxt_iconcolor_hover="#ffffff" icntxt_icnsize="48" icon_alignment="center" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491991156753{padding-top: 20px !important;}"]
<h6 style="text-align: center;">Niched Layouts</h6>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="20" css=".vc_custom_1491991526036{padding-top: 30px !important;}"][vc_column css_animation="fadeIn" width="1/2"][vc_column_text]
<h3 style="text-align: right;"><span style="color: #ffffff;"><strong>There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers.</strong></span></h3>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_column_text]We have included full WooCommerce Integration and all pages are custom styled and ready to use.[/vc_column_text][vc_column_text]As a professional, you want to show the world you have arrived and are going places.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_column_text]There is also a dedicated tab in theme options that gives you full control when styling your shop.[/vc_column_text][vc_column_text]You need your web presence to be seamless, reliable and easy to create and maintain.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Team 07', 'stash' );
	$data['custom_class'] = 'hgr_template team-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="team-7" el_class="light-scheme" css=".vc_custom_1499080785032{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h2 style="text-align: center;">Meet our <em>amazing</em> team</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="5" css=".vc_custom_1491996105332{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996256615{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="46" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491994251857{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Helen Porter</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491996815849{margin-top: -35px !important;}"]
<h5>CEO, Co-Founder</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996274591{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="49" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491996825252{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Ronald Johnson</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491996851320{margin-top: -35px !important;}"]
<h5>CFO, Co-Founder</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996279812{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="48" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491996870247{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Ethan Pena</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491996896150{margin-top: -35px !important;}"]
<h5>Marketing Manager</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row gap="5" css=".vc_custom_1491996291515{padding-top: 35px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996256615{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="51" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491997021430{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Matthew Green</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491997241536{margin-top: -35px !important;}"]
<h5>PR Manager</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996274591{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="52" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491997031449{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Joshua Phillips</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491997251809{margin-top: -35px !important;}"]
<h5>Web Developer</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996279812{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="53" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491997041719{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Jerry Fox</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491997262000{margin-top: -35px !important;}"]
<h5>Web Developer</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row gap="5" css=".vc_custom_1491996291515{padding-top: 35px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996256615{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="54" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491997051907{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Jacob Walker</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491997273554{margin-top: -35px !important;}"]
<h5>Designer</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996274591{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="55" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491997059140{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Joseph Perez</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491997283568{margin-top: -35px !important;}"]
<h5>Web Designer</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996279812{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="56" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491997066873{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Amanda Richards</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491997298780{margin-top: -35px !important;}"]
<h5>Account Manager</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row gap="5" css=".vc_custom_1491996291515{padding-top: 35px !important;}"][vc_column css_animation="fadeIn" width="2/3"][vc_row_inner css=".vc_custom_1496662559863{padding-top: 41px !important;padding-right: 35px !important;padding-bottom: 50px !important;padding-left: 35px !important;background-image: url(http://highgradelab.com/stash/modern-business/wp-content/uploads/sites/38/2017/04/join-us.jpg?id=87) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]
<h2 style="text-align: center;"><span style="color: #ffffff;">Want to <em>join</em> us?</span></h2>
[/vc_column_text][vc_btn title="SEE OPEN POSITIONS" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="middle" css=".vc_custom_1491996279812{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="47" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491997079659{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Donald Stanley</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491997310478{margin-top: -35px !important;}"]
<h5>Account Manager</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner content_placement="middle" css=".vc_custom_1491996717947{margin-top: 35px !important;border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/4" css=".vc_custom_1491994353202{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][vc_single_image image="50" img_size="full" alignment="center" style="vc_box_circle_2" css=".vc_custom_1491997089898{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4><strong><em>Kathy Weber</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491997320266{margin-top: -35px !important;}"]
<h5>Support Manager</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 01', 'stash' );
	$data['custom_class'] = 'hgr_template promo-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="promo-1" el_class="light-scheme" css=".vc_custom_1499080801648{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner css=".vc_custom_1492000258268{padding-bottom: 30px !important;}"][vc_column_inner][vc_column_text]
<h2>Easy to <em>get</em> started</h2>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/6"][hgr_icon icon_type="selector" icntxt_icon="outline outline-num-1" icntxt_iconcolor="#d4d8db" icntxt_iconcolor_hover="#1c46f2" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text css=".vc_custom_1491999990754{padding-top: 7px !important;}"]
<h4>OneClick Import™</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492000191421{margin-top: -30px !important;}"]As a professional, you want to show the world you have arrived and are going places. You need your web presence to be seamless.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/6"][hgr_icon icon_type="selector" icntxt_icon="outline outline-num-2" icntxt_iconcolor="#d4d8db" icntxt_iconcolor_hover="#1c46f2" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text css=".vc_custom_1492000060304{padding-top: 7px !important;}"]
<h4>80+ Page Elements</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492000142349{margin-top: -30px !important;}"]It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/6"][hgr_icon icon_type="selector" icntxt_icon="outline outline-num-3" icntxt_iconcolor="#d4d8db" icntxt_iconcolor_hover="#1c46f2" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text css=".vc_custom_1492000097191{padding-top: 7px !important;}"]
<h4>Powerful Theme Options</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492000121166{margin-top: -30px !important;}"]You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_single_image image="119" img_size="full" alignment="center"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 07', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" css=".vc_custom_1499080823754{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;}" el_id="testimonials-7" el_class="light-scheme"][vc_row][vc_column width="1/6"][/vc_column][vc_column css_animation="fadeIn" width="2/3"][vc_column_text]
<h3 style="text-align: center;">"I was amazed at the quality of Stash. I like Stash more and more each day because it makes my life a lot easier. Stash is exactly what our business has been lacking."</h3>
[/vc_column_text][vc_single_image image="51" img_size="75x75" alignment="center" style="vc_box_circle_2"][vc_column_text css=".vc_custom_1492002155832{margin-top: -20px !important;}"]
<h4 style="text-align: center;"><strong><em>Bryan Wilson</em></strong></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492002577947{margin-top: -35px !important;}"]
<h5 style="text-align: center;">CEO@Attractor</h5>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	

	
	
	
	
	$data = array();
	$data['name'] = __( 'Split Section 04', 'stash' );
	$data['custom_class'] = 'hgr_template split-section-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/split-section/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_id="split-section-4" el_class="light-scheme" css=".vc_custom_1499082983847{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2" css=".vc_custom_1492509178744{padding-top: 150px !important;padding-bottom: 150px !important;background-image: url(http://highgradelab.com/stash/creative-studio/wp-content/uploads/sites/40/2017/04/split-bg-1.jpg?id=16) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column width="1/2"][vc_row_inner css=".vc_custom_1496664112939{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h2>Design websites that make a difference.</h2>
[/vc_column_text][vc_column_text]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">

There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.

</div>
</div>
</div>
[/vc_column_text][vc_btn title="GET STARTED" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="left"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Split Section 05', 'stash' );
	$data['custom_class'] = 'hgr_template split-section-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/split-section/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="light-scheme" css=".vc_custom_1499082988313{padding-top: 0px !important;padding-bottom: 0px !important;}" el_id="split-section-5"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_row_inner css=".vc_custom_1495705545742{padding-top: 150px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495705492115{margin-left: -20px !important;}"][vc_column_text]
<h4>40+ Demos</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495705346576{margin-top: -30px !important;}"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495705522955{margin-left: -20px !important;}"][vc_column_text]
<h4>200+ Sections</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495705351703{margin-top: -30px !important;}"]You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1495705562571{padding-bottom: 150px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-clock" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495705620300{margin-left: -20px !important;}"][vc_column_text]
<h4>Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495705346576{margin-top: -30px !important;}"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495705650373{margin-left: -20px !important;}"][vc_column_text]
<h4>Security And Peace Of Mind</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495705351703{margin-top: -30px !important;}"]You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1492512860274{padding-top: 150px !important;padding-bottom: 150px !important;background-image: url(http://highgradelab.com/stash/creative-studio/wp-content/uploads/sites/40/2017/04/split-bg-2.jpg?id=22) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Team 09', 'stash' );
	$data['custom_class'] = 'hgr_template team-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" el_id="team-9" el_class="light-scheme" css=".vc_custom_1499083005639{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_row full_width="stretch_row_content_no_spaces" gap="2" equal_height="yes" content_placement="bottom"][vc_column width="1/6" css=".vc_custom_1495641318253{padding-top: 50px !important;background-color: #f8f8f8 !important;}"][hgr_advimage hgr_advimage_image="332" hgr_advimage_height="580" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(248,248,248,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1495641190008{padding-right: 35px !important;padding-bottom: 220px !important;padding-left: 35px !important;}"]
<h5 style="text-align: center;">Vincent Jensen</h5>
<p style="text-align: center;"><em>CEO, Founder</em></p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-youtube"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a></p>
[/hgr_advimage][/vc_column][vc_column width="1/6" css=".vc_custom_1495641321706{padding-top: 50px !important;background-color: #f8f8f8 !important;}"][hgr_advimage hgr_advimage_image="338" hgr_advimage_height="580" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(248,248,248,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1495641200334{padding-right: 35px !important;padding-bottom: 220px !important;padding-left: 35px !important;}"]
<h5 style="text-align: center;">Emma Freeman</h5>
<p style="text-align: center;"><em>Marketing Manager</em></p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-youtube"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a></p>
[/hgr_advimage][/vc_column][vc_column width="1/6" css=".vc_custom_1495641325194{padding-top: 50px !important;background-color: #f8f8f8 !important;}"][hgr_advimage hgr_advimage_image="339" hgr_advimage_height="580" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(248,248,248,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1495641209218{padding-right: 35px !important;padding-bottom: 220px !important;padding-left: 35px !important;}"]
<h5 style="text-align: center;">Beverly Vasquez</h5>
<p style="text-align: center;"><em>Web Designer</em></p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-youtube"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a></p>
[/hgr_advimage][/vc_column][vc_column width="1/2"][vc_row_inner gap="35" css=".vc_custom_1496664151137{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h2>We’re passionate about using good design to enrich people’s lives.</h2>
[/vc_column_text][vc_column_text]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][vc_column_text]<a class="link-curtain" href="#"><strong>Learn More</strong></a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Quote 04', 'stash' );
	$data['custom_class'] = 'hgr_template quote-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/quote/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="light-scheme" css=".vc_custom_1499083029284{padding-top: 0px !important;padding-bottom: 0px !important;}" el_id="quote-4"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_row_inner css=".vc_custom_1492508592679{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][hgr_icon icon_type="selector" icntxt_icon="fa fa-quote-left" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#292929" icntxt_icnsize="36" icon_alignment="left" icon_background_type="none" custom_link="no-link" css=".vc_custom_1492517246250{padding-bottom: 30px !important;}"][vc_column_text]
<h2>"I wish I would have thought of it first. If you want real marketing that works and effective implementation - Stash's got you covered. It's just amazing."</h2>
[/vc_column_text][vc_separator color="custom" accent_color="rgba(0,0,0,0.05)" css=".vc_custom_1492513080743{padding-top: 20px !important;}"][vc_column_text]<strong>Larry Jason, CEO@Hatch</strong>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1492517390433{padding-top: 150px !important;padding-bottom: 150px !important;background-image: url(http://highgradelab.com/stash/creative-studio/wp-content/uploads/sites/40/2017/04/split-bg-3.jpg?id=55) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Clients 06', 'stash' );
	$data['custom_class'] = 'hgr_template clients-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/clients/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="light-scheme" css=".vc_custom_1499083043440{padding-top: 0px !important;padding-bottom: 0px !important;}" el_id="clients-6"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2" css=".vc_custom_1492518191550{padding-top: 150px !important;padding-bottom: 150px !important;background-image: url(http://highgradelab.com/stash/creative-studio/wp-content/uploads/sites/40/2017/04/split-bg-4.jpg?id=57) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column width="1/2"][vc_row_inner gap="35" css=".vc_custom_1492518416552{padding-top: 150px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="58" img_size="full" el_class="image-opacity"][vc_column_text]Because you have better things to do, like create, sell and grow your business.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="59" img_size="full" el_class="image-opacity"][vc_column_text]Stash is a bundle of 200+ proven template designs, created to get you online fast.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1492518420309{padding-bottom: 150px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="60" img_size="full" el_class="image-opacity"][vc_column_text]As a professional, you want to show the world you have arrived and are going places.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="61" img_size="full" el_class="image-opacity"][vc_column_text]You need your web presence to be seamless, reliable and easy to create and maintain.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Contact 07', 'stash' );
	$data['custom_class'] = 'hgr_template contact-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" el_id="contact-7" el_class="light-scheme" css=".vc_custom_1499083070924{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_row_inner gap="35" css=".vc_custom_1496664410684{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h2>Contact</h2>
[/vc_column_text][vc_column_text]
<h5>ADDRESS</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492521717730{margin-top: -20px !important;}"]1419 Colony Park Dr
Johnson City
TN, 37604[/vc_column_text][vc_column_text]
<h5>EMAIL</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492521799599{margin-top: -20px !important;}"]creative@stash.com[/vc_column_text][vc_column_text]
<h5>PHONE</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492521818027{margin-top: -20px !important;}"](423) 928-6851[/vc_column_text][vc_column_text]<a href="#">[icon name="fa fa-linkedin" size="18px"]</a>     <a href="#">[icon name="fa fa-facebook" size="18px"]</a>     <a href="#">[icon name="fa fa-twitter" size="18px"]</a>     <a href="#">[icon name="fa fa-youtube" size="18px"]</a>     <a href="#">[icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][hgr_gmap gmap_name="Stash" google_maps_apikey="" gmap_latitude="-33.8814454" gmap_longitude="151.2226494" gmap_zoom="18" gmap_style="gmap_style_greyscale" gmap_marker_settings="gmap_marker_plugin" gmap_width="100%" gmap_height="800px" gmap_disablezoom="yes" gmap_disabledraggable="" gmap_extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 14', 'stash' );
	$data['custom_class'] = 'hgr_template hero-14';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" parallax="content-moving" parallax_image="14" el_id="hero-14" el_class="dark-scheme" css=".vc_custom_1499084737888{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column][vc_row_inner][vc_column_inner][vc_column_text css_animation="fadeIn"]
<h1>Future Website Building</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665091280{padding-top: 50px !important;}"]
<h3>We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.</h3>
[/vc_column_text][vc_btn title="BUY TICKETS" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="lg" align="left" css_animation="fadeIn" css=".vc_custom_1496665098206{padding-top: 25px !important;}"][vc_separator color="custom" accent_color="rgba(255,255,255,0.2)" css=".vc_custom_1492698098598{padding-top: 50px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1492698386273{padding-top: 30px !important;}"][vc_column_inner width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Day 1</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665110856{margin-top: -20px !important;}"]Because you have better things to do, like create, sell and grow your business.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Day 2</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665119053{margin-top: -20px !important;}"]As a professional, you want to show the world you have arrived and are going places.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Day 3</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665128794{margin-top: -20px !important;}"]Stash is a bundle of 200+ proven template designs, created to get you online fast.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	

	$data = array();
	$data['name'] = __( 'Countdown 01', 'stash' );
	$data['custom_class'] = 'hgr_template countdown-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/countdown/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="countdown-1" el_class="dark-scheme" css=".vc_custom_1499084750074{padding-top: 50px !important;padding-bottom: 60px !important;background-color: #1c46f2 !important;}"][vc_row css_animation="fadeIn"][vc_column][hgr_countdown countdown_day="10" countdown_month="March" countdown_year="2020" countdown_hour="10" countdown_minute="10" counter_font_tag="h1" counter_font_color="#ffffff" label_font_tag="h4" label_font_color="#ffffff" extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	

	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Content 04', 'stash' );
	$data['custom_class'] = 'hgr_template content-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/content/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="57" el_id="content-4" el_class="dark-scheme" css=".vc_custom_1499084819987{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h2>Event Schedule</h2>
[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>08:00 - 10:00</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665297542{margin-top: -20px !important;}"]
<p class="TimeblockItem-title">Registration
Breakfast

[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>10:00 - 11:30</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665311762{margin-top: -20px !important;}"]Keynote[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>11:30 - 12:30</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665320986{margin-top: -20px !important;}"]Lunch[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>12:30 - 13:30</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665329795{margin-top: -20px !important;}"]Introduction to the Camera Effects PlatformRoom G (Room G)
Growth Marketing: Best Practices for Getting and Keeping an Audience (Room C)
Litho: A Declarative Framework for Efficient UIs (Room F)
WebVR: Enabling Developers to Build Engaging Cross-Platform VR Content (Room LL)
Boost Your Business With Messenger (Room B)
Media and Facebook (Room A)
Demos, Developer Garage[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>13:30 - 14:30</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665357318{margin-top: -20px !important;}"]How to Build a Great Bot[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>14:30 - 15:00</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665404774{margin-top: -20px !important;}"]The Evolution of React and GraphQL at Facebook and Beyond (Room F)
Bringing VR Experiences to Everyone: Scripting, Producing and Planning (Room LL)
Building Native Games for Facebook Gameroom (Room B)[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>15:00 - 16:00</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665448780{margin-top: -20px !important;}"]What's Next for Workplace by Facebook? (Room C)
A Startup Journey from an Emerging Market (Room A)[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>16:00 - 17:00</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665457017{margin-top: -20px !important;}"]Happy Hour[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>17:00 - 18:00</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665466510{margin-top: -20px !important;}"]Closing Party[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Video 04', 'stash' );
	$data['custom_class'] = 'hgr_template video-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/video/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="video-4" el_class="light-scheme" css=".vc_custom_1499084839844{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Last year's after movie</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>

[/vc_column_text][/vc_column][/vc_row][vc_row equal_height="yes" content_placement="middle" css=".vc_custom_1493030091524{padding-top: 50px !important;}"][vc_column width="2/3"][vc_single_image image="65" img_size="750x499" css_animation="fadeIn"][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h2>Powerful Options</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665520490{margin-top: -10px !important;}"]<a class="link-curtain" href="#"><strong>Register Now</strong></a>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'News 01', 'stash' );
	$data['custom_class'] = 'hgr_template news-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/news/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="news-1" el_class="light-scheme" css=".vc_custom_1499084866595{padding-bottom: 150px !important;}"][vc_row css_animation="fadeIn"][vc_column][hgr_blog_posts posts_number="3" posts_columns="3" display_order="title_txt" display_by="none" order="ASC" blog_post_title_size="h4" blogpost_footer="simple" links_color="#292929" hgr_bg_color="" extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	

	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Pricing 02', 'stash' );
	$data['custom_class'] = 'hgr_template pricing-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/pricing/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="pricing-2" css=".vc_custom_1499084911262{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row el_class="light-scheme"][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Choose Your Pass Type</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1496665859763{padding-top: 20px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496665845255{padding-top: 30px !important;}"][vc_row_inner css=".vc_custom_1496665599425{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 25px !important;padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="light-scheme"][vc_column_inner][vc_column_text]
<h2 style="text-align: center;">One Day</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1493037762882{margin-top: -30px !important;}"]
<h3 style="text-align: center;"><span style="color: #1c46f2;">99$</span></h3>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>

[/vc_column_text][vc_column_text]
<p style="text-align: center;"><a class="underline after first" href="#"><strong>Purchase Now</strong></a></p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496665849719{padding-top: 30px !important;}"][vc_row_inner css=".vc_custom_1496665058482{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 25px !important;padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;background-color: #1c46f2 !important;border-left-color: #1c46f2 !important;border-left-style: solid !important;border-right-color: #1c46f2 !important;border-right-style: solid !important;border-top-color: #1c46f2 !important;border-top-style: solid !important;border-bottom-color: #1c46f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="dark-scheme"][vc_column_inner][vc_column_text]
<h2 style="text-align: center;">Full Pass</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1493038908008{margin-top: -30px !important;}"]
<h3 style="text-align: center;">399$</h3>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>

[/vc_column_text][vc_column_text]
<p style="text-align: center;"><a class="underline after first" href="#"><strong>Purchase Now</strong></a></p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496665853637{padding-top: 30px !important;}"][vc_row_inner css=".vc_custom_1496665614532{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 25px !important;padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="light-scheme"][vc_column_inner][vc_column_text]
<h2 style="text-align: center;">One Event</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1493038405767{margin-top: -30px !important;}"]
<h3 style="text-align: center;"><span style="color: #1c46f2;">29$</span></h3>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>

[/vc_column_text][vc_column_text]
<p style="text-align: center;"><a class="underline after first" href="#"><strong>Purchase Now</strong></a></p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Subscribe 02', 'stash' );
	$data['custom_class'] = 'hgr_template subscribe-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/subscribe/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="subscribe-2" el_class="dark-scheme" css=".vc_custom_1499084928619{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text css=".vc_custom_1493038663731{padding-bottom: 25px !important;}"]
<h2 style="text-align: center;">Subscribe for News &amp; Updates</h2>
[/vc_column_text][hgr_mailchimpcollector hgr_mc_apikey="Ae032327dcef42ef538c2c39e88eef3f-us8" hgr_mc_listid="Fbd729b62e" hgr_mc_enable_disclaimer="yes" hgr_mc_collect_name="yes" hgr_mc_collect_lastname="yes" hgr_mc_collect_inputbgcolor="rgba(0,0,0,0.15)" hgr_mc_collect_inputstextcolor="#ffffff" hgr_mc_collect_btnbgcolor="#ffffff" hgr_mc_collect_btntextcolor="#292929" hgr_mc_collect_nstextcolor="#dcdff2" extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 15', 'stash' );
	$data['custom_class'] = 'hgr_template hero-15';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" full_height="yes" content_placement="bottom" parallax="content-moving" parallax_image="13" el_id="hero-15" el_class="dark-scheme" css=".vc_custom_1499085300781{padding-top: 150px !important;padding-bottom: 0px !important;background-color: #1c46f2 !important;}"][vc_row content_placement="bottom" css=".vc_custom_1493115586937{margin-bottom: 0px !important;}"][vc_column][vc_column_text css_animation="fadeIn"]
<h1 style="text-align: center;">Create your perfect website
using <em>Stash</em>.</h1>
[/vc_column_text][vc_row_inner css=".vc_custom_1493116236041{padding-top: 25px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6"][vc_btn title="LEARN MORE" style="custom" custom_background="#ffffff" custom_text="#1c46f2" align="center" css_animation="fadeIn" button_block="true"][/vc_column_inner][vc_column_inner width="1/6"][vc_btn title="REGISTER NOW" style="custom" custom_background="#1738c1" custom_text="#ffffff" align="center" css_animation="fadeIn" button_block="true"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_single_image image="15" img_size="full" alignment="center" css_animation="fadeInUp" css=".vc_custom_1496666251889{margin-bottom: 0px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Services 05', 'stash' );
	$data['custom_class'] = 'hgr_template services-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/services/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="services-5" el_class="light-scheme" css=".vc_custom_1499085322364{padding-top: 150px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">We're the Best in Our Field</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.

[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1493119810556{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1496666848012{margin-bottom: 50px !important;padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #ffffff !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner css=".vc_custom_1493119924246{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 25px !important;padding-left: 0px !important;}"][vc_single_image image="29" img_size="full" alignment="center" css_animation="fadeIn"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666398427{padding-right: 15px !important;padding-left: 15px !important;}"]
<h4 style="text-align: center;">Marketing Strategy</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666405043{margin-top: -20px !important;padding-right: 15px !important;padding-left: 15px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create,
sell and grow your business.

[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1496666853940{margin-bottom: 50px !important;padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #ffffff !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner css=".vc_custom_1493119924246{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 25px !important;padding-left: 0px !important;}"][vc_single_image image="30" img_size="full" alignment="center" css_animation="fadeIn"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666746843{padding-right: 15px !important;padding-left: 15px !important;}"]
<h4 style="text-align: center;">Growth Hacking</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666753603{margin-top: -20px !important;padding-right: 15px !important;padding-left: 15px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create,
sell and grow your business.

[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1496666858846{margin-bottom: 50px !important;padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #ffffff !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner css=".vc_custom_1493119924246{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 25px !important;padding-left: 0px !important;}"][vc_single_image image="31" img_size="full" alignment="center" css_animation="fadeIn"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666765293{padding-right: 15px !important;padding-left: 15px !important;}"]
<h4 style="text-align: center;">Content Strategy</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666770444{margin-top: -20px !important;padding-right: 15px !important;padding-left: 15px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create,
sell and grow your business.

[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Features 08', 'stash' );
	$data['custom_class'] = 'hgr_template features-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="features-8" el_class="light-scheme" css=".vc_custom_1499085342348{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">We’re a pioneering influencer marketing agency connecting <em>brands</em> and businesses with the most creative voices on social media.</h2>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1493120994940{padding-top: 50px !important;}"][vc_column width="1/3"][vc_single_image image="46" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]
<h4 style="text-align: left;">Very Customisable</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665955241{margin-top: -20px !important;}"]
<p style="text-align: left;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>

[/vc_column_text][vc_column_text css_animation="fadeIn"]
<ul>
	<li><strong><span style="color: #1c46f2;">Facebook Ads</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Email Templates</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Abandoned Cart</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Marketing Automation</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Product Recommendations</span></strong></li>
</ul>
[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image image="47" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]
<h4>Security And Peace Of Mind</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496665975849{margin-top: -20px !important;}"]
<p style="text-align: left;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>

[/vc_column_text][vc_column_text css_animation="fadeIn"]
<ul>
	<li><strong><span style="color: #1c46f2;">Facebook Ads</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Email Templates</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Abandoned Cart</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Marketing Automation</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Product Recommendations</span></strong></li>
</ul>
[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image image="48" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]
<h4>It’s Personal</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666000825{margin-top: -20px !important;}"]
<p style="text-align: left;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>

[/vc_column_text][vc_column_text css_animation="fadeIn"]
<ul>
	<li><strong><span style="color: #1c46f2;">Facebook Ads</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Email Templates</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Abandoned Cart</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Marketing Automation</span></strong></li>
	<li><strong><span style="color: #1c46f2;">Product Recommendations</span></strong></li>
</ul>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Features 07', 'stash' );
	$data['custom_class'] = 'hgr_template features-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" el_id="features-7" el_class="dark-scheme" css=".vc_custom_1499178628371{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496664823637{padding-top: 75px !important;padding-right: 50px !important;padding-bottom: 50px !important;padding-left: 50px !important;background: #1c46f2 url(http://highgradelab.com/stash/consulting/wp-content/uploads/sites/41/2017/04/features-1.jpg?id=45) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row_inner][vc_column_inner][hgr_animicon animicon_icon="si-diamond" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Niched Layouts</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492606262545{margin-top: -20px !important;}"]
<p style="text-align: center;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496664826990{padding-top: 75px !important;padding-right: 50px !important;padding-bottom: 50px !important;padding-left: 50px !important;background: #1c46f2 url(http://highgradelab.com/stash/consulting/wp-content/uploads/sites/41/2017/04/features-2.jpg?id=46) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row_inner][vc_column_inner][hgr_animicon animicon_icon="si-cart-nine" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Security And Peace Of Mind</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492606412767{margin-top: -20px !important;}"]
<p style="text-align: center;">You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience in wordpress.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496664830579{padding-top: 75px !important;padding-right: 50px !important;padding-bottom: 50px !important;padding-left: 50px !important;background: #1c46f2 url(http://highgradelab.com/stash/consulting/wp-content/uploads/sites/41/2017/04/features-3.jpg?id=47) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row_inner][vc_column_inner][hgr_animicon animicon_icon="si-star" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">It’s Personal</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492606282389{margin-top: -20px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Pricing 03', 'stash' );
	$data['custom_class'] = 'hgr_template pricing-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/pricing/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="pricing-3" el_class="light-scheme" css=".vc_custom_1499085385750{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Choose the <em>Best</em> Pricing Option
for Your Business</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1493126562262{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496666290321{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 35px !important;padding-right: 35px !important;padding-bottom: 45px !important;padding-left: 35px !important;background-color: #ffffff !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Personal</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666086455{margin-top: -20px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements and 200+ sections.</p>

[/vc_column_text][vc_separator color="custom" css_animation="fadeIn" accent_color="rgba(0,0,0,0.05)"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text css_animation="fadeIn"]
<h3 style="text-align: center;"><span style="color: #1c46f2;">Free</span></h3>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn"]
<h6>For 30 days then $250 from month to month.</h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_btn title="TRY NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn" button_block="true" css=".vc_custom_1496666107866{margin-bottom: 0px !important;padding-right: 15px !important;padding-left: 15px !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496666293360{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 35px !important;padding-right: 35px !important;padding-bottom: 45px !important;padding-left: 35px !important;background-color: #ffffff !important;border-left-color: #1c46f2 !important;border-left-style: solid !important;border-right-color: #1c46f2 !important;border-right-style: solid !important;border-top-color: #1c46f2 !important;border-top-style: solid !important;border-bottom-color: #1c46f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Agency</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666117633{margin-top: -20px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements and 200+ sections.</p>

[/vc_column_text][vc_separator color="custom" css_animation="fadeIn" accent_color="rgba(0,0,0,0.05)"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text css_animation="fadeIn"]
<h3 style="text-align: center;"><span style="color: #1c46f2;">$199</span></h3>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn"]
<h6>Per month billed annually or $250 from month to month.</h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_btn title="TRY NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn" button_block="true" css=".vc_custom_1496666137024{margin-bottom: 0px !important;padding-right: 15px !important;padding-left: 15px !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496666296905{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 35px !important;padding-right: 35px !important;padding-bottom: 45px !important;padding-left: 35px !important;background-color: #ffffff !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Enterprise</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496666147145{margin-top: -20px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements and 200+ sections.</p>

[/vc_column_text][vc_separator color="custom" css_animation="fadeIn" accent_color="rgba(0,0,0,0.05)"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text css_animation="fadeIn"]
<h3 style="text-align: center;"><span style="color: #1c46f2;">$299</span></h3>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn"]
<h6>Per month billed annually or $350 from month to month.</h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_btn title="TRY NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn" button_block="true" css=".vc_custom_1496666165095{margin-bottom: 0px !important;padding-right: 15px !important;padding-left: 15px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Case Study 03', 'stash' );
	$data['custom_class'] = 'hgr_template case-study-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/case-study/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="case-study-3" el_class="light-scheme" css=".vc_custom_1499085398858{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Case Studies</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1493127194055{padding-top: 50px !important;}"][vc_column][vc_tta_tour style="modern" color="white" spacing="10" controls_size="lg" active_section="1" css_animation="fadeIn" no_fill_content_area="true"][vc_tta_section title="Changeling Of The World" tab_id="1493126845611-61b6b464-c3ab"][vc_video link="https://vimeo.com/173280276" align="center"][/vc_tta_section][vc_tta_section title="Butcher Of The Eclipse" tab_id="1493127700498-f07b0474-811a"][vc_video align="center"][/vc_tta_section][vc_tta_section title="Enemies Of Sorrow" tab_id="1493127699281-1a731d77-e659"][vc_video align="center"][/vc_tta_section][vc_tta_section title="Soldiers Of Desire" tab_id="1493127698530-ebe7c6ed-2cb5"][vc_video align="center"][/vc_tta_section][vc_tta_section title="Enemies And Wolves" tab_id="1493127722043-b4b26066-7b45"][vc_video align="center"][/vc_tta_section][vc_tta_section title="Culmination Without Flaws" tab_id="1493127697685-f8c1624b-f840"][vc_video align="center"][/vc_tta_section][vc_tta_section title="Strife Of The River" tab_id="1493127768667-ca39ab39-3af0"][vc_video align="center"][/vc_tta_section][/vc_tta_tour][/vc_column][/vc_row][vc_row css=".vc_custom_1493127938829{padding-top: 35px !important;}"][vc_column width="1/6"][vc_single_image image="92" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="93" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="94" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="95" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="96" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="97" img_size="full" alignment="center" css_animation="fadeIn" el_class="image-opacity"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'About 08', 'stash' );
	$data['custom_class'] = 'hgr_template about-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_class="dark-scheme" css=".vc_custom_1499086346913{border-bottom-width: 1px !important;padding-top: 80px !important;padding-bottom: 50px !important;background-color: #1c46f2 !important;border-bottom-color: #e9ecef !important;}" el_id="about-8"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/6"][vc_single_image image="48" img_size="full" style="vc_box_circle_2" onclick="link_image" css_animation="fadeIn"][/vc_column][vc_column width="5/6"][vc_column_text css_animation="fadeIn"]
<h2>Catherine Reed</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668810877{margin-top: -30px !important;}"]<em>WebDesigner, Freelancer</em>[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h3 style="text-align: justify;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</h3>
[/vc_column_text][/vc_column][/vc_row][vc_row equal_height="yes" content_placement="top" css=".vc_custom_1495713570487{margin-top: -30px !important;}"][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>New York, USA</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668824871{margin-top: -30px !important;}"]<em>My Address</em>[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>+2073 458 879</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668834532{margin-top: -30px !important;}"]<em>Telephone</em>[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>contact@stash.com</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668842433{margin-top: -30px !important;}"]<em>My Email</em>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'About 09', 'stash' );
	$data['custom_class'] = 'hgr_template about-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499086362592{border-bottom-width: 1px !important;padding-top: 50px !important;padding-bottom: 25px !important;background-color: #ffffff !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="about-9"][vc_row gap="35" css=".vc_custom_1493046414175{margin-bottom: 0px !important;}"][vc_column][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668923914{margin-bottom: 10px !important;padding-bottom: 0px !important;}"]
<h2>About Me</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" equal_height="yes" content_placement="top"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<p style="text-align: justify;">Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.</p>

[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<p style="text-align: justify;">There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.Well then, you will be glad you found Stash.</p>

[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Content 05', 'stash' );
	$data['custom_class'] = 'hgr_template content-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/content/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499086386601{border-bottom-width: 1px !important;padding-top: 50px !important;padding-bottom: 25px !important;background-color: #ffffff !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="content-5"][vc_row gap="35" css=".vc_custom_1493046414175{margin-bottom: 0px !important;}"][vc_column][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668937845{padding-bottom: 0px !important;}"]
<h2>My Experience</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: justify;">Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.</p>

[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" equal_height="yes" content_placement="top" css=".vc_custom_1493116886531{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Web Designer @HighGrade</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668953377{margin-top: -30px !important;}"]<em>2013 - Present</em>[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Sales Manager @Apple</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668962590{margin-top: -30px !important;}"]<em>2012 - 2013</em>[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Web Designer @Adobe</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668970960{margin-top: -30px !important;}"]<em>2010 - 2012</em>[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" equal_height="yes" content_placement="top" css=".vc_custom_1493116914597{margin-top: -30px !important;}"][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Web Designer @Republic</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668979866{margin-top: -30px !important;}"]<em>2009 - 2010</em>[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Support Manager @Attractor</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668988311{margin-top: -30px !important;}"]<em>2008 - 2009</em>[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Suport Engineer @Attractor</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496668996071{margin-top: -30px !important;}"]<em>2006 - 2008</em>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Skills 04', 'stash' );
	$data['custom_class'] = 'hgr_template skills-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/skills/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499086403652{border-bottom-width: 1px !important;padding-top: 50px !important;padding-bottom: 40px !important;background-color: #ffffff !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="skills-4"][vc_row gap="35" css=".vc_custom_1495714153877{margin-bottom: 0px !important;}"][vc_column css_animation="fadeIn"][vc_column_text css_animation="none" css=".vc_custom_1496669017399{padding-bottom: 0px !important;}"]
<h2>My Skills</h2>
[/vc_column_text][vc_column_text css_animation="none"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#000000" hgr_progressbar_title="Building Awesome Products" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#000000" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="70" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass="" css=".vc_custom_1493122621652{padding-top: 30px !important;}"][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#000000" hgr_progressbar_title="Helping our Clients" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#000000" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="99" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#000000" hgr_progressbar_title="Leaving Work Early" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#000000" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="30" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#000000" hgr_progressbar_title="Having Fun While Working" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#000000" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="85" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#000000" hgr_progressbar_title="Being Grateful Every Day" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#000000" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="95" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Content 06', 'stash' );
	$data['custom_class'] = 'hgr_template content-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/content/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499086453939{border-bottom-width: 1px !important;padding-top: 50px !important;padding-bottom: 25px !important;background-color: #ffffff !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="content-6"][vc_row gap="35" css=".vc_custom_1493046414175{margin-bottom: 0px !important;}"][vc_column][vc_column_text css_animation="fadeIn" css=".vc_custom_1496669094218{padding-bottom: 0px !important;}"]
<h2>Online Portfolios</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: justify;">There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.</p>

[/vc_column_text][/vc_column][/vc_row][vc_row gap="35"][vc_column width="1/6"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496669103466{margin-top: -20px !important;}"]<a class="link-curtain" href="#"><strong>Behance</strong></a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496669107391{margin-top: -20px !important;}"]<a class="link-curtain" href="#"><strong>Dribbble</strong></a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496669112498{margin-top: -20px !important;}"]<a class="link-curtain" href="#"><strong>ThemeForest</strong></a>[/vc_column_text][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 16', 'stash' );
	$data['custom_class'] = 'hgr_template hero-16';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" el_class="light-scheme" css=".vc_custom_1499086927840{background-color: #f8f8f8 !important;}" el_id="hero-16"][vc_row][vc_column css=".vc_custom_1493134067708{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670333854{padding-top: 100px !important;}"]
<h1 style="text-align: center;">Create your perfect website
using Stash.</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496669985279{margin-top: -10px !important;}"]
<p style="text-align: center;">We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.

[/vc_column_text][vc_btn title="VIEW MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="lg" align="center" css_animation="fadeIn" css=".vc_custom_1496669994134{padding-top: 20px !important;padding-bottom: 50px !important;}"][vc_single_image image="11" img_size="full" alignment="center" css_animation="fadeInUp" css=".vc_custom_1496670120508{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 09', 'stash' );
	$data['custom_class'] = 'hgr_template features-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" el_id="features-9" css=".vc_custom_1499086966906{border-bottom-width: 1px !important;padding-bottom: 15px !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row full_width="stretch_row_content_no_spaces"][vc_column width="1/4" css=".vc_custom_1493134999769{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][hgr_animicon animicon_icon="bi-bullseye" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670002214{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1493135004781{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][hgr_animicon animicon_icon="bi-summit" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670007612{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Security And Peace Of Mind</h4>
[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1493135012969{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670070124{margin-top: -20px !important;}"]
<h4 style="text-align: center;">It’s Personal</h4>
[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1493135019229{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670074173{margin-top: -20px !important;}"]
<h4 style="text-align: center;">200+ Sections</h4>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 03', 'stash' );
	$data['custom_class'] = 'hgr_template promo-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" el_id="promo-3" el_class="light-scheme" css=".vc_custom_1499086993577{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #ffffff !important;}"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_single_image image="29" img_size="full" css_animation="fadeInLeft"][/vc_column][vc_column width="1/2"][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn"]
<h2>40+ Demos</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.[/vc_column_text][vc_column_text css_animation="fadeIn"]<a class="link-curtain" href="#"><strong>Learn More</strong></a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 05', 'stash' );
	$data['custom_class'] = 'hgr_template promo-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" parallax="content-moving" parallax_image="32" el_id="promo-5" el_class="light-scheme" css=".vc_custom_1499087005352{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/4"][vc_column_text css_animation="fadeIn"]
<h2>200+ Sections</h2>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-globe" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495722241901{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Specialised Parts</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670143717{margin-top: -20px !important;}"]In a day or month, you can upgrade your online presence to something else.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-umbrella" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495722246221{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>New Ways to Work</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670147842{margin-top: -20px !important;}"]There is enough in this kit to grow with you, so there is nothing more to spend.[/vc_column_text][/vc_column_inner][vc_column_inner width="2/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1493123301403{padding-right: 0px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 10', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-10';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="testimonials-10" el_class="light-scheme" css=".vc_custom_1499087039411{padding-top: 150px !important;padding-bottom: 100px !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Recommended by Many
Creative Professionals</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" equal_height="yes"][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="46" img_size="full" alignment="center" el_class="image-opacity"][vc_column_text]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>

[/vc_column_text][vc_single_image image="49" img_size="50x50" alignment="center" style="vc_box_circle_2" css=".vc_custom_1493292814100{padding-top: 10px !important;}"][vc_column_text css=".vc_custom_1495722444969{margin-top: -15px !important;}"]
<h5 style="text-align: center;">Pamela Mason</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495787837981{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>Designer</em></p>

[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="45" img_size="full" alignment="center" el_class="image-opacity"][vc_column_text]
<p style="text-align: center;">Stash is a bundle of 200+ proven template designs, created to get you online fast.</p>

[/vc_column_text][vc_single_image image="50" img_size="50x50" alignment="center" style="vc_box_circle_2" css=".vc_custom_1493292782848{padding-top: 10px !important;}"][vc_column_text css=".vc_custom_1495722449255{margin-top: -15px !important;}"]
<h5 style="text-align: center;">Jason Clark</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495787851222{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>We Developer</em></p>

[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="44" img_size="full" alignment="center" el_class="image-opacity"][vc_column_text]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>

[/vc_column_text][vc_single_image image="51" img_size="50x50" alignment="center" style="vc_box_circle_2" css=".vc_custom_1493292804599{padding-top: 10px !important;}"][vc_column_text css=".vc_custom_1495722453754{margin-top: -15px !important;}"]
<h5 style="text-align: center;">Sally Taylor</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495787856318{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>Freelancer</em></p>

[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'FAQ 02', 'stash' );
	$data['custom_class'] = 'hgr_template faq-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/faq/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="faq-2" el_class="light-scheme" css=".vc_custom_1499087077572{padding-top: 100px !important;padding-bottom: 80px !important;}"][vc_row full_width="stretch_row"][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Knowledge Base</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670204959{margin-top: -15px !important;}"]This mistaken idea of denouncing
pleasure and praising pain.[/vc_column_text][vc_btn title="READ MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" css_animation="fadeIn"][/vc_column][vc_column width="1/2" css=".vc_custom_1491234914135{margin-top: 0px !important;padding-top: 0px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670219905{margin-top: 0px !important;padding-top: 0px !important;}"]
<h4>How Do I Install The Theme?</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670224884{margin-top: -20px !important;padding-bottom: 20px !important;}"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>How can I import the demo content?</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670233861{margin-top: -20px !important;padding-bottom: 20px !important;}"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>Do I need to activate the plugins?</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670244901{margin-top: -20px !important;}"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'CTA 05', 'stash' );
	$data['custom_class'] = 'hgr_template cta-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="102" el_class="dark-scheme" css=".vc_custom_1499087112886{padding-top: 75px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}" el_id="call-to-action-5"][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="3412"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Stash has really helped our business. Wow what great service, I love it! This is simply unbelievable!</h2>
[/vc_column_text][vc_btn title="PURCHASE NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeInUp"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	

	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 10', 'stash' );
	$data['custom_class'] = 'hgr_template features-10';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="features-10" el_class="dark-scheme" css=".vc_custom_1499089873730{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_row gap="20" equal_height="yes"][vc_column css_animation="fadeIn" width="2/3"][vc_row_inner content_placement="bottom" el_class="column-hover" css=".vc_custom_1493724185497{padding-top: 200px !important;padding-right: 25px !important;padding-bottom: 0px !important;padding-left: 25px !important;background: #000000 url(http://highgradelab.com/stash/classic-shop/wp-content/uploads/sites/46/2017/05/automatic.jpg?id=26) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]
<h4>The Automatic Collection</h4>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner content_placement="bottom" el_class="column-hover" css=".vc_custom_1493724192833{padding-top: 200px !important;padding-right: 25px !important;padding-bottom: 0px !important;padding-left: 25px !important;background: #000000 url(http://highgradelab.com/stash/classic-shop/wp-content/uploads/sites/46/2017/05/limited-edition.jpg?id=27) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]
<h4>The Limited Edition</h4>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 06', 'stash' );
	$data['custom_class'] = 'hgr_template promo-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="promo-6" el_class="light-scheme" css=".vc_custom_1499089894815{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_single_image image="29" img_size="full" alignment="center" css_animation="fadeIn"][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner][vc_column_inner][vc_column_text css_animation="none"]
<h2>Perfect <em>match</em> for
your day to day outfit.</h2>
[/vc_column_text][vc_column_text css_animation="none"]There is enough in this kit to grow with you, so there is nothing more to spend.
Today, you can have a landing page and connect with customers.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1493726572419{padding-top: 35px !important;}"][vc_column_inner width="1/2"][hgr_animicon animicon_icon="bi-clock" animicon_iconcolor="#292929" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496670706341{margin-left: -20px !important;}"][vc_column_text]
<h4>40+ Demos</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1493726275509{margin-top: -30px !important;}"]Because you have better things to do, like create, sell and grow your business.[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="left"][/vc_column_inner][vc_column_inner width="1/2"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#292929" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496670714283{margin-left: -20px !important;}"][vc_column_text]
<h4>200+ Sections</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1493726711752{margin-top: -30px !important;}"]Stash is a bundle of 200+ proven template designs, created to get you online fast.[/vc_column_text][vc_btn title="LEARN MORE" style="outline-custom" outline_custom_color="#1c46f2" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" align="left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'CTA 06', 'stash' );
	$data['custom_class'] = 'hgr_template cta-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="call-to-action-6" el_class="dark-scheme" css=".vc_custom_1499089917733{margin-top: 150px !important;margin-bottom: 150px !important;}"][vc_row equal_height="yes" content_placement="middle" parallax="content-moving" parallax_image="68" css_animation="fadeIn" css=".vc_custom_1496670563820{padding-top: 5px !important;padding-bottom: 15px !important;background-color: #000000 !important;}"][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;"><span style="color: #ffffff;">Purchase Stash and Build Your Awesome Website!</span></h3>
[/vc_column_text][/vc_column][vc_column width="1/3"][vc_btn title="PURCHASE NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Split Section 06', 'stash' );
	$data['custom_class'] = 'hgr_template split-section-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/split-section/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="dark-scheme" css=".vc_custom_1499091420804{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #1c46f2 !important;}" el_id="split-section-6"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeInLeft" width="1/2"][vc_row_inner gap="35" css=".vc_custom_1496671907704{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h2>Create your
perfect website using
<em>Stash</em> theme.</h2>
[/vc_column_text][vc_column_text]
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">

We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.</div>
</div>
</div>
[/vc_column_text][vc_column_text]<a href="#">[icon name="fa fa-facebook" size="18px"]</a>      <a href="#">[icon name="fa fa-twitter" size="18px"]</a>     <a href="#"> [icon name="fa fa-linkedin" size="18px"] </a>     <a href="#">[icon name="fa fa-instagram" size="18px"]</a>     <a href="#"> [icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496671120864{background-image: url(http://highgradelab.com/stash/freelancer/wp-content/uploads/sites/47/2017/05/foto-1.jpg?id=10) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="700px"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Split Section 07', 'stash' );
	$data['custom_class'] = 'hgr_template split-section-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/split-section/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="dark-scheme" css=".vc_custom_1499091434370{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #000000 !important;}" el_id="split-section-7"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496671116616{background-image: url(http://highgradelab.com/stash/freelancer/wp-content/uploads/sites/47/2017/05/foto-2.jpg?id=19) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="700px"][/vc_column][vc_column css_animation="fadeInRight" width="1/2"][vc_row_inner gap="35" css=".vc_custom_1496671921193{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h2>OneClick Install</h2>
[/vc_column_text][vc_column_text]
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">

As a professional, you want to show the world you have arrived and are going places. You need your web presence to be seamless, reliable and easy to create and maintain.</div>
</div>
</div>
[/vc_column_text][vc_column_text]<a class="underline after first" href="#">View More</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Split Section 03', 'stash' );
	$data['custom_class'] = 'hgr_template split-section-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/split-section/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="dark-scheme" css=".vc_custom_1499091446828{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #000000 !important;}" el_id="split-section-3"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeInLeft" width="1/2"][vc_row_inner gap="35" css=".vc_custom_1496671926721{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css=".vc_custom_1493725707873{padding-bottom: 20px !important;}"]
<h2>My Skills</h2>
[/vc_column_text][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Building Awesome Products" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="95" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Helping our Clients" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="99" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Leaving Work Early" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="30" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Being Grateful Every Day" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="95" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-caret-right" hgr_progressbar_icnsize="18" hgr_progressbar_icncolor="#ffffff" hgr_progressbar_title="Having Fun While Working" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#ffffff" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#3055ee" hgr_progressbar_value="85" hgr_progressbar_filltime="3" hgr_progressbar_weight="5" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496671110230{background-image: url(http://highgradelab.com/stash/freelancer/wp-content/uploads/sites/47/2017/05/foto-3.jpg?id=23) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="700px"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Quote 05', 'stash' );
	$data['custom_class'] = 'hgr_template quote-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/quote/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="dark-scheme" css=".vc_custom_1499091467313{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #000000 !important;}" el_id="quote-5"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496671106162{background-image: url(http://highgradelab.com/stash/freelancer/wp-content/uploads/sites/47/2017/05/foto-4.jpg?id=27) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="700px"][/vc_column][vc_column css_animation="fadeInRight" width="1/2"][vc_row_inner gap="35" css=".vc_custom_1496671933290{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="30" img_size="full"][vc_column_text]
<h2>Stash has really helped our business. Wow what great service, I love it! This is simply unbelievable!</h2>
[/vc_column_text][vc_column_text]
<h3><span style="color: #4d4d4d;"><em>Gerald Taylor</em></span></h3>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Split Section 08', 'stash' );
	$data['custom_class'] = 'hgr_template split-section-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/split-section/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="dark-scheme" css=".vc_custom_1499091501189{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #000000 !important;}" el_id="split-section-8"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeInLeft" width="1/2"][vc_row_inner gap="35" css=".vc_custom_1496672018002{padding-top: 100px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h2>Awards</h2>
[/vc_column_text][vc_column_text]As a professional, you want to show the world you have arrived and are going places. You need your web presence to be seamless, reliable and easy to create and maintain.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/4"][hgr_icon icon_type="selector" icntxt_icon="fa fa-dribbble" icntxt_iconcolor="#f8f8f8" icntxt_icnsize="100" icon_alignment="left" icon_background_type="none" custom_link="no-link"][/vc_column_inner][vc_column_inner width="1/4"][hgr_icon icon_type="selector" icntxt_icon="fa fa-qrcode" icntxt_iconcolor="#f8f8f8" icntxt_icnsize="100" icon_alignment="left" icon_background_type="none" custom_link="no-link"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1496672027220{padding-top: 30px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/4"][hgr_icon icon_type="selector" icntxt_icon="fa fa-html5" icntxt_iconcolor="#f8f8f8" icntxt_icnsize="100" icon_alignment="left" icon_background_type="none" custom_link="no-link"][/vc_column_inner][vc_column_inner width="1/4"][hgr_icon icon_type="selector" icntxt_icon="fa fa-lemon-o" icntxt_iconcolor="#f8f8f8" icntxt_icnsize="100" icon_alignment="left" icon_background_type="none" custom_link="no-link"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496671652739{background-image: url(http://highgradelab.com/stash/freelancer/wp-content/uploads/sites/47/2017/05/foto-4.jpg?id=27) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="700px"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Contact 08', 'stash' );
	$data['custom_class'] = 'hgr_template contact-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="dark-scheme" css=".vc_custom_1499091520987{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #000000 !important;}" el_id="contact-8"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496671646460{background: #3a3a3a url(http://highgradelab.com/stash/freelancer/wp-content/uploads/sites/47/2017/05/foto-5.jpg?id=3356) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row_inner gap="35" css=".vc_custom_1496672032870{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text][contact-form-7  title="Freelancer Contact"][/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeInRight" width="1/2" css=".vc_custom_1496672435735{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1496672585874{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1496672802162{margin-bottom: 0px !important;padding-bottom: 0px !important;}"]
<h2>Contact</h2>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1496672756600{margin-top: 0px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6" offset="vc_hidden-sm vc_hidden-xs"][vc_column_text]
<p style="text-align: right;">[icon name="fa fa-phone" size="36px" color="#454545"]</p>

[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1496672655414{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column_text]+1 (229) 346-9923[/vc_column_text][vc_column_text css=".vc_custom_1496672808244{margin-top: -30px !important;margin-bottom: 0px !important;padding-bottom: 0px !important;}"]+1 (619) 303-2419[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1496672752924{margin-top: 0px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6" offset="vc_hidden-sm vc_hidden-xs"][vc_column_text]
<p style="text-align: right;">[icon name="fa fa-envelope" size="30px" color="#454545"]</p>

[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1496672598949{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1496672812152{margin-bottom: 0px !important;padding-bottom: 0px !important;}"]creative@stash.com[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1496672748617{margin-top: 0px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1496672605316{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1496672816775{margin-bottom: 0px !important;padding-bottom: 0px !important;}"]
<h2>Address</h2>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1496672739518{margin-top: 0px !important;padding-top: 0px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6" offset="vc_hidden-sm vc_hidden-xs"][vc_column_text]
<p style="text-align: right;">[icon name="fa fa-map-marker" size="36px" color="#454545"]</p>

[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1496672534041{margin-top: 0px !important;padding-top: 0px !important;}"][vc_column_text]2514 Glebe Rd, Lemon Grove[/vc_column_text][vc_column_text css=".vc_custom_1491915293886{margin-top: -30px !important;}"]CA, 91945[/vc_column_text][vc_btn title="GET DIRECTIONS" style="outline-custom" outline_custom_color="#cfd4d6" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#f8f8f8" size="sm" align="left"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 17', 'stash' );
	$data['custom_class'] = 'hgr_template hero-17';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section parallax="content-moving" parallax_image="73" el_id="hero-17" css=".vc_custom_1499091880613{background-color: #1c46f2 !important;}"][vc_row content_placement="middle" parallax="content-moving" parallax_image="109" css=".vc_custom_1494840609892{padding-top: 200px !important;padding-bottom: 200px !important;}"][vc_column width="2/3" el_class="dark-scheme"][vc_column_text css_animation="fadeIn"]
<h1 style="text-align: left;">Create your perfect website using <em>Stash</em>.</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h3>We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.</h3>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1495796661954{padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;background-color: #ffffff !important;border-radius: 10px !important;}" el_class="light-scheme"][vc_column_inner][vc_column_text]
<h2>Join now the member list !</h2>
[/vc_column_text][vc_column_text][contact-form-7 title="Join Member List"][/vc_column_text][vc_column_text css=".vc_custom_1490374136008{margin-top: -50px !important;}"]
<h6 style="text-align: left;">Have Any Questions? <span style="text-decoration: underline;"><a href="#">Contact us</a></span>.</h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Features 11', 'stash' );
	$data['custom_class'] = 'hgr_template features-11';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_class="light-scheme" css=".vc_custom_1499091901567{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="features-11"][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Taking an image, freezing a moment, reveals how rich reality truly is.</h2>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1494236745312{padding-top: 30px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496671401507{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-gear" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="OneClick Install" content_title_format="h4" content_title_color="#323c47" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#4b555f" custom_link=""][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496671405580{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-list-alt" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Layout Builder" content_title_format="h4" content_title_color="#323c47" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#4b555f" custom_link=""][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496671408784{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-laptop" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Awesome Header Styles" content_title_format="h4" content_title_color="#323c47" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#4b555f" custom_link=""][/vc_column][/vc_row][vc_row css=".vc_custom_1491404353665{padding-top: 20px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496671412575{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-download" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Drag &amp; Drop Footer Builder" content_title_format="h4" content_title_color="#323c47" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#4b555f" custom_link=""][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496671415803{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-flask" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Powerful Theme Options" content_title_format="h4" content_title_color="#323c47" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#4b555f" custom_link=""][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496671419507{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-check" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Approved by Google" content_title_format="h4" content_title_color="#323c47" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#4b555f" custom_link=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	

	
	
	
	$data = array();
	$data['name'] = __( 'Quote 06', 'stash' );
	$data['custom_class'] = 'hgr_template quote-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/quote/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section parallax="content-moving" parallax_image="65" el_class="dark-scheme" css=".vc_custom_1499091939474{padding-top: 150px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}" el_id="quote-6"][vc_row][vc_column][vc_column_text css_animation="fadeInDown"]
<h2 style="text-align: center;">If your actions inspire others to dream more, learn more, do more and become more, you are a leader.</h2>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496671463612{margin-top: -30px !important;}"]
<h4 style="text-align: center;"><em>John Quincy Adams</em></h4>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Pricing 01', 'stash' );
	$data['custom_class'] = 'hgr_template pricing-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/pricing/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="pricing-1" el_class="light-scheme" css=".vc_custom_1499091956700{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Simple Pricing</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">As a professional, you want to show the world you have arrived and are going places.
You need your web presence to be seamless, reliable and easy to create and maintain.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1494241834518{padding-top: 20px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1495811633137{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 35px !important;padding-left: 20px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;">BASIC</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491823167696{margin-top: -35px !important;}"]
<h1 style="text-align: center;">$10</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491823137127{margin-top: -30px !important;}"]
<h6 style="text-align: center;">per month</h6>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Drag &amp; Drop Builder</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   1,000 Templates</p>
<p style="text-align: center;"><span style="color: #d7d9db;">[icon name="fa fa-close" color="#d7d9db"]   Blog Tools</span></p>
<p style="text-align: center;"><span style="color: #d7d9db;">[icon name="fa fa-close" color="#d7d9db"]   Photo Galleries</span></p>
[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#1c46f2" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" size="sm" align="center"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1495811628740{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 35px !important;padding-left: 20px !important;background: #000000 url(http://highgradelab.com/stash/landing-page/wp-content/uploads/sites/48/2017/05/pricing.jpg?id=81) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="dark-scheme"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;"><span style="color: #ffffff;">AGENCY</span></h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491824000580{margin-top: -35px !important;}"]
<h1 style="text-align: center;"><span style="color: #ffffff;">$29</span></h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491823915434{margin-top: -30px !important;}"]
<h6 style="text-align: center;"><span style="color: #ffffff;">per month</span></h6>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">[icon name="fa fa-check"]   Drag &amp; Drop Builder</p>
<p style="text-align: center;">[icon name="fa fa-check"]   2,000 Templates</p>
<p style="text-align: center;">[icon name="fa fa-check"]   Blog Tools</p>
<p style="text-align: center;">[icon name="fa fa-close"]   Photo Galleries</p>
[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" size="sm" align="center"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1495811636693{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 35px !important;padding-left: 20px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;">ENTERPRISE</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491824196523{margin-top: -35px !important;}"]
<h1 style="text-align: center;">$59</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491823137127{margin-top: -30px !important;}"]
<h6 style="text-align: center;">per month</h6>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Drag &amp; Drop Builder</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   5,000 Templates</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Blog Tools</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Photo Galleries</p>
[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#1c46f2" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" size="sm" align="center"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 07', 'stash' );
	$data['custom_class'] = 'hgr_template promo-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section parallax="content-moving" parallax_image="78" el_class="dark-scheme" css=".vc_custom_1499091983041{padding-top: 150px !important;padding-bottom: 120px !important;background-color: #1c46f2 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_id="promo-7"][vc_row][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>Create your <em>perfect</em> website using Stash theme.</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#ffffff" outline_custom_hover_text="#1c46f2" size="sm" align="left" css_animation="fadeIn"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 18', 'stash' );
	$data['custom_class'] = 'hgr_template hero-18';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" full_height="yes" content_placement="bottom" parallax="content-moving" parallax_image="18" el_id="hero-18" el_class="dark-scheme" css=".vc_custom_1499092455744{padding-top: 150px !important;padding-bottom: 0px !important;background-color: #1c46f2 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row content_placement="bottom"][vc_column width="1/2" css=".vc_custom_1494333808673{padding-bottom: 250px !important;}"][vc_column_text css_animation="fadeIn"]
<h1>Amazing Experience</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496673418929{padding-bottom: 15px !important;}"]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.[/vc_column_text][vc_btn title="LEARN MORE" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#ffffff" outline_custom_hover_text="#1c46f2" css_animation="fadeIn" css=".vc_custom_1496673423807{padding-right: 20px !important;}"][vc_btn title="PURCHASE NOW" style="custom" custom_background="#ffffff" custom_text="#1c46f2" css_animation="fadeIn"][/vc_column][vc_column width="1/2"][vc_single_image image="22" img_size="full" alignment="center" css_animation="fadeIn" css=".vc_custom_1496673437504{margin-bottom: 0px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 01', 'stash' );
	$data['custom_class'] = 'hgr_template features-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="features-1" el_class="dark-scheme" css=".vc_custom_1499092478310{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #292929 !important;}"][vc_row][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494335669642{margin-top: -20px !important;}"]
<p style="text-align: center;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-globe" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Security And Peace Of Mind</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494335782088{margin-top: -20px !important;}"]
<p style="text-align: center;">You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience in wordpress.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">It’s Personal</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494335801346{margin-top: -20px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 08', 'stash' );
	$data['custom_class'] = 'hgr_template promo-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="promo-8" el_class="light-scheme" css=".vc_custom_1499092498384{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column][vc_row_inner equal_height="yes" content_placement="top"][vc_column_inner width="3/4"][vc_column_text css_animation="fadeIn"]
<h3>We urge you to take one of our impressive demos for a test drive.
Click away, and see which one suits your needs.</h3>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496673474583{margin-top: -20px !important;}"]6 months of included support. Premium plugins included.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_btn title="PURCHASE NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="left" css_animation="fadeIn" css=".vc_custom_1496673749844{padding-top: 15px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1495811401560{padding-top: 100px !important;padding-bottom: 75px !important;}"][vc_column_inner][vc_separator color="custom" accent_color="#e9ecef"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/3"][vc_column_text css_animation="fadeIn"]
<h4>Your Workflow</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496673490130{margin-top: -20px !important;}"]We have included full WooCommerce Integration and all pages are custom styled and ready to use. There is also a dedicated tab in theme options that gives you full control when styling your shop.[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>Threads</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496673499276{margin-top: -20px !important;}"]As a professional, you want to show the world you have arrived and are going places. You need your web presence to be seamless, reliable and easy to create and maintain.[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>Your Customers</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496673507748{margin-top: -20px !important;}"]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers.[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][vc_single_image image="77" img_size="full" alignment="right" css_animation="fadeIn"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Video 05', 'stash' );
	$data['custom_class'] = 'hgr_template video-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/video/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="79" el_id="video-5" el_class="dark-scheme" css=".vc_custom_1499092519112{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeInDown"]
<h2 style="text-align: center;">Visual Page Builder with
80+ Page Elements</h2>
[/vc_column_text][vc_column_text css_animation="fadeInDown"]
<p style="text-align: center;">Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code.</p>
[/vc_column_text][vc_single_image image="83" img_size="100x100" alignment="center" css_animation="fadeInDown" css=".vc_custom_1496673551788{padding-top: 10px !important;}"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 09', 'stash' );
	$data['custom_class'] = 'hgr_template promo-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="promo-9" el_class="light-scheme" css=".vc_custom_1499092533248{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 class="hide-large" style="text-align: center;">Connect to your visitors.
No complications, no limits.</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row equal_height="yes" content_placement="middle" css=".vc_custom_1494343118747{padding-top: 30px !important;}"][vc_column css_animation="fadeIn" width="1/3"][hgr_icon icon_type="selector" icntxt_icon="outline outline-smartphone-shake" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#292929" icntxt_icnsize="48" icon_alignment="right" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1494342998521{padding-top: 30px !important;}"]
<h4 style="text-align: right;">Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494343003898{margin-top: -20px !important;}"]
<p style="text-align: right;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][hgr_icon icon_type="selector" icntxt_icon="outline outline-target" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#292929" icntxt_icnsize="48" icon_alignment="right" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1494343658404{padding-top: 30px !important;}"]
<h4 style="text-align: right;">Awesome Header Styles</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494343003898{margin-top: -20px !important;}"]
<p style="text-align: right;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="91" img_size="full" alignment="center"][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_icon icon_type="selector" icntxt_icon="outline outline-smartphone-calibrate-location" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#292929" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1494343669092{padding-top: 30px !important;}"]
<h4>Drag &amp; Drop Footer Builder</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494343085237{margin-top: -20px !important;}"]
<p style="text-align: left;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][hgr_icon icon_type="selector" icntxt_icon="outline outline-archery-target" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#292929" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1494343677259{padding-top: 30px !important;}"]
<h4>Powerful Theme Options</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494343085237{margin-top: -20px !important;}"]
<p style="text-align: left;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 11', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-11';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="testimonials-11" el_class="light-scheme" css=".vc_custom_1499092572024{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">A Huge <em>Thank You</em> to Our Customers
For Their Support &amp; Appreciation</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1494345771140{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1494344983899{padding-right: 25px !important;padding-left: 25px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]“Needless to say we are extremely satisfied with the results. Stash is worth much more than I paid. Stash is the most valuable business resource we have EVER purchased. We were treated like royalty.”[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_single_image image="122" img_size="75x75" alignment="center" style="vc_box_circle_2" css=".vc_custom_1494345735804{padding-top: 30px !important;}"][vc_column_text css=".vc_custom_1494345694950{margin-top: -20px !important;}"]
<h5 style="text-align: center;">MARIA JENKINS</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1494345700113{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>CEO, Co-Founder</em></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1494344983899{padding-right: 25px !important;padding-left: 25px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]“It’s incredible. The service was excellent. I just can’t get enough of Stash. I want to get a T-Shirt with Stash on it so I can show it off to everyone. I couldn’t have asked for more than this. Stash is the real deal! Thanks for the great service. Stash is the most valuable business resource we have EVER purchased. Stash is both attractive and highly adaptable.”[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_single_image image="123" img_size="75x75" alignment="center" style="vc_box_circle_2" css=".vc_custom_1494345930725{padding-top: 30px !important;}"][vc_column_text css=".vc_custom_1494345942779{margin-top: -20px !important;}"]
<h5 style="text-align: center;">JOSHUA BREWER</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1494345970362{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>CFO, Co-Founder</em></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1494344983899{padding-right: 25px !important;padding-left: 25px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]“We’ve seen amazing results already. It’s the perfect solution for our business. No matter where you go, Stash is the coolest, most happening thing around! Stash is the most valuable business resource we have EVER purchased.”[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_single_image image="124" img_size="75x75" alignment="center" style="vc_box_circle_2" css=".vc_custom_1494345937023{padding-top: 30px !important;}"][vc_column_text css=".vc_custom_1494345959720{margin-top: -20px !important;}"]
<h5 style="text-align: center;">ROY LITTLE</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1494345977967{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>PR Manager</em></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 10', 'stash' );
	$data['custom_class'] = 'hgr_template promo-10';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="promo-10" el_class="light-scheme" css=".vc_custom_1499092588795{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_single_image image="147" img_size="full" alignment="center" css_animation="fadeIn"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>In a day or month, you can upgrade your online presence to something amazing.</h2>
[/vc_column_text][vc_btn title="DOWNLOAD <em>from</em> APP STORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="left" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]
<h6><span style="color: #dcdee0;">Free for first 100 users.</span></h6>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 19', 'stash' );
	$data['custom_class'] = 'hgr_template hero-19';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="51" el_class="light-scheme" css=".vc_custom_1499092981897{padding-top: 200px !important;padding-bottom: 45px !important;}" el_id="hero-19"][vc_row css=".vc_custom_1496046149416{padding-bottom: 50px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]
<h1 style="text-align: center;">Create your perfect website!</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496673647927{padding-top: 20px !important;padding-bottom: 20px !important;}"]
<p style="text-align: center;">But I must explain to you how all this mistaken idea of denouncing pleasure and
praising pain was born and I will give you a complete account of the system.</p>
[/vc_column_text][vc_btn title="PURCHASE NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="lg" align="center" css_animation="fadeInUp"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_separator color="custom" accent_color="#e9ecef"][/vc_column][/vc_row][vc_row css=".vc_custom_1496046041066{padding-top: 15px !important;padding-bottom: 0px !important;}"][vc_column width="1/3"][hgr_animicon animicon_icon="bi-clock" animicon_iconcolor="#292929" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn"]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496673668717{margin-top: -30px !important;}"]
<p style="text-align: center;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][/vc_column][vc_column width="1/3"][hgr_animicon animicon_icon="bi-summit" animicon_iconcolor="#292929" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn"]
<h4 style="text-align: center;">Security and peace of mind</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496673676836{margin-top: -30px !important;}"]
<p style="text-align: center;">You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience in wordpress.</p>
[/vc_column_text][/vc_column][vc_column width="1/3"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#292929" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn"]
<h4 style="text-align: center;">It's personal</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496673691055{margin-top: -30px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Content 03', 'stash' );
	$data['custom_class'] = 'hgr_template content-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/content/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="content-3" el_class="light-scheme" css=".vc_custom_1499093213120{padding-top: 100px !important;padding-bottom: 75px !important;background-color: #ffffff !important;}"][vc_row gap="35" content_placement="top"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.</h2>
[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1488978243653{padding-right: 25px !important;padding-left: 25px !important;}"][vc_column_text css_animation="fadeIn"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.

No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 12', 'stash' );
	$data['custom_class'] = 'hgr_template features-12';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="features-12" el_class="light-scheme" css=".vc_custom_1499093302162{border-top-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;border-top-color: #e9ecef !important;border-top-style: solid !important;}"][vc_row css=".vc_custom_1491390627712{padding-bottom: 50px !important;}"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Awesome features</h2>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1494332039950{padding-top: 0px !important;}"][vc_column css_animation="fadeIn" width="1/4"][hgr_icon icon_type="selector" icntxt_icon="outline outline-num-1" icntxt_iconcolor="#a5a5a5" icntxt_iconcolor_hover="#636363" icntxt_icnsize="32" icon_alignment="left" icon_background_type="icon-background-select" icntxt_icnbackcolor="#ffffff" icntxt_icnbacksize="32" icntxt_icnbackroundness="100" icon_border_type="none" custom_link="no-link" css=".vc_custom_1494332018088{margin-top: -66px !important;}"][vc_column_text css=".vc_custom_1494331790680{padding-top: 20px !important;}"]
<h4>Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494331809770{margin-top: -30px !important;}"]You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][hgr_icon icon_type="selector" icntxt_icon="outline outline-num-2" icntxt_iconcolor="#a5a5a5" icntxt_iconcolor_hover="#686868" icntxt_icnsize="32" icon_alignment="left" icon_background_type="icon-background-select" icntxt_icnbackcolor="#ffffff" icntxt_icnbacksize="32" icntxt_icnbackroundness="100" icon_border_type="none" custom_link="no-link" css=".vc_custom_1494331819868{margin-top: -50px !important;}"][vc_column_text css=".vc_custom_1494331825056{padding-top: 20px !important;}"]
<h4>Security and peace of mind</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494332186532{margin-top: -30px !important;}"]
<p style="text-align: left;">You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][hgr_icon icon_type="selector" icntxt_icon="outline outline-num-3" icntxt_iconcolor="#a5a5a5" icntxt_iconcolor_hover="#666666" icntxt_icnsize="32" icon_alignment="left" icon_background_type="icon-background-select" icntxt_icnbackcolor="#ffffff" icntxt_icnbacksize="32" icntxt_icnbackroundness="100" icon_border_type="none" custom_link="no-link" css=".vc_custom_1494331836310{margin-top: -50px !important;}"][vc_column_text css=".vc_custom_1494331841362{padding-top: 20px !important;}"]
<h4 style="text-align: left;">It's personal</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494331846254{margin-top: -30px !important;}"]
<p style="text-align: left;">It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][hgr_icon icon_type="selector" icntxt_icon="outline outline-num-4" icntxt_iconcolor="#a5a5a5" icntxt_iconcolor_hover="#666666" icntxt_icnsize="32" icon_alignment="left" icon_background_type="icon-background-select" icntxt_icnbackcolor="#ffffff" icntxt_icnbacksize="32" icntxt_icnbackroundness="100" icon_border_type="none" custom_link="no-link" css=".vc_custom_1494332165619{margin-top: -50px !important;}"][vc_column_text css=".vc_custom_1494332151485{padding-top: 20px !important;}"]
<h4 style="text-align: left;">Easy to use</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494332195149{margin-top: -30px !important;}"]
<p style="text-align: left;">You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 20', 'stash' );
	$data['custom_class'] = 'hgr_template hero-20';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" el_class="light-scheme" css=".vc_custom_1499093658182{border-bottom-width: 25px !important;padding-top: 60px !important;background-color: #f8f8f8 !important;border-bottom-color: #ffffff !important;border-bottom-style: solid !important;}" el_id="hero-20"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h1 style="text-align: center;">Product Promo <em>Stash</em> Theme Demo</h1>
[/vc_column_text][vc_single_image image="77" img_size="full" alignment="center" css_animation="fadeIn" css=".vc_custom_1496674766688{padding-top: 50px !important;}"][/vc_column][/vc_row][vc_row full_width="stretch_row" gap="30"][vc_column width="1/4"][vc_column_text css_animation="fadeIn"]
<h4>Clean Design</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674775900{margin-top: -20px !important;}"]Because you have better things to do, like create, sell and grow your business.[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text css_animation="fadeIn"]
<h4>OneClick Install™</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674784677{margin-top: -20px !important;}"]Because you have better things to do, like create, sell and grow your business.[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text css_animation="fadeIn"]
<h4>Very Customisable</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674793135{margin-top: -20px !important;}"]Because you have better things to do, like create, sell and grow your business.[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text css_animation="fadeIn"]
<h4>Premium Plugins</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674801060{margin-top: -20px !important;}"]Because you have better things to do, like create, sell and grow your business.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 04', 'stash' );
	$data['custom_class'] = 'hgr_template promo-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" content_placement="middle" el_class="light-scheme" css=".vc_custom_1499093677563{border-bottom-width: 25px !important;padding-top: 80px !important;padding-bottom: 30px !important;background-color: #f8f8f8 !important;border-bottom-color: #ffffff !important;border-bottom-style: solid !important;}" el_id="promo-4"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>200+ Sections</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_single_image image="23" img_size="full" alignment="right" css_animation="fadeIn" css=".vc_custom_1496674830954{padding-top: 30px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Counters 03', 'stash' );
	$data['custom_class'] = 'hgr_template counters-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/counters/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" el_class="light-scheme" css=".vc_custom_1499093715946{border-bottom-width: 25px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-bottom-color: #ffffff !important;border-bottom-style: solid !important;}" el_id="counters-3"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2" css=".vc_custom_1494341557109{border-right-width: 12.5px !important;border-right-color: #ffffff !important;border-right-style: solid !important;}"][vc_row_inner css=".vc_custom_1496049817981{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>Very Customisable</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496674861681{border-left-width: 12.5px !important;padding-top: 100px !important;padding-bottom: 100px !important;border-left-color: #ffffff !important;border-left-style: solid !important;}"][vc_row_inner][vc_column_inner width="1/2"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="40" counter_number_format="h1" counter_number_color="#222222" counter_units="+" counter_units_color="#222222" counter_text="DEMOS" counter_text_format="h4" counter_text_color="#222222" counter_speed="3" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column_inner][vc_column_inner width="1/2"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="8000" counter_number_format="h1" counter_number_color="#222222" counter_units="+" counter_units_color="#222222" counter_text="CUSTOMERS" counter_text_format="h4" counter_text_color="#222222" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 13', 'stash' );
	$data['custom_class'] = 'hgr_template features-13';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" el_class="light-scheme" css=".vc_custom_1499093726595{border-bottom-width: 25px !important;padding-top: 50px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-bottom-color: #ffffff !important;border-bottom-style: solid !important;}" el_id="features-13"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_single_image image="83" img_size="full" alignment="center" css_animation="fadeIn"][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none" icntxt_icon="" icntxt_iconcolor="#000000" icntxt_icnsize="50" icon_alignment="center" icon_background_type="none"][vc_column_text css=".vc_custom_1496050733896{margin-top: -10px !important;}"]
<h4 style="text-align: center;">Customisable</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none" icntxt_icon="" icntxt_iconcolor="#000000" icntxt_icnsize="50" icon_alignment="center" icon_background_type="none"][vc_column_text css=".vc_custom_1496050780626{margin-top: -10px !important;}"]
<h4 style="text-align: center;">Design</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1496049808679{padding-top: 30px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-bullseye" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none" icntxt_icon="" icntxt_iconcolor="#000000" icntxt_icnsize="50" icon_alignment="center" icon_background_type="none"][vc_column_text css=".vc_custom_1496050907093{margin-top: -10px !important;}"]
<h4 style="text-align: center;">ThemeForest</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-clock" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none" icntxt_icon="" icntxt_iconcolor="#000000" icntxt_icnsize="50" icon_alignment="center" icon_background_type="none"][vc_column_text css=".vc_custom_1496050916403{margin-top: -10px !important;}"]
<h4 style="text-align: center;">HighGrade</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1496049878421{padding-top: 30px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-globe" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none" icntxt_icon="" icntxt_iconcolor="#000000" icntxt_icnsize="50" icon_alignment="center" icon_background_type="none"][vc_column_text css=".vc_custom_1496050893468{margin-top: -10px !important;}"]
<h4 style="text-align: center;">Stash</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none" icntxt_icon="" icntxt_iconcolor="#000000" icntxt_icnsize="50" icon_alignment="center" icon_background_type="none"][vc_column_text css=".vc_custom_1496050901494{margin-top: -10px !important;}"]
<h4 style="text-align: center;">Theme</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 12', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-12';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" el_class="light-scheme" css=".vc_custom_1499093741807{border-bottom-width: 25px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-bottom-color: #ffffff !important;border-bottom-style: solid !important;}" el_id="testimonials-12"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2" css=".vc_custom_1496050035631{border-right-width: 12.5px !important;padding-top: 100px !important;padding-bottom: 100px !important;border-right-color: #ffffff !important;border-right-style: solid !important;}"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="43" img_size="75x75" css_animation="fadeIn"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674911756{margin-top: -15px !important;}"]
<h4>Nicole Hernandez</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674915913{margin-top: -38px !important;}"]<em>HR Director</em>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674919699{margin-top: -25px !important;}"]I  like to say thank you to all your staff. Wow what great service.Without it, we would have gone bankrupt by now.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1496050006873{border-left-width: 12.5px !important;padding-top: 100px !important;padding-bottom: 100px !important;border-left-color: #ffffff !important;border-left-style: solid !important;}"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="54" img_size="75x75" css_animation="fadeIn"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674930604{margin-top: -15px !important;}"]
<h4>Debra Estrada</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674935213{margin-top: -38px !important;}"]<em>HR Director</em>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674939027{margin-top: -25px !important;}"]We've used Stash for the last five years. Stash is the real deal! Thank you so much for your help. We have no regrets![/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'CTA 07', 'stash' );
	$data['custom_class'] = 'hgr_template cta-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499093760962{border-bottom-width: 25px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;border-bottom-color: #ffffff !important;border-bottom-style: solid !important;}" el_id="call-to-action-7"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Create your perfect website</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496674952381{margin-top: -20px !important;}"]
<p style="text-align: center;">You will love our <em>powerful</em> theme options panel, because, every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][vc_btn title="PURCHASE NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeInUp" css=".vc_custom_1496674958835{padding-top: 30px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675076491{padding-top: 50px !important;}"]
<p style="text-align: center;"><em>Trusted by manny important brand on market!</em></p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="62" img_size="full" alignment="center" css_animation="none" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="61" img_size="full" alignment="center" css_animation="none" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="60" img_size="full" alignment="center" css_animation="none" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="59" img_size="full" alignment="center" css_animation="none" el_class="image-opacity"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Contact 09', 'stash' );
	$data['custom_class'] = 'hgr_template contact-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" el_class="light-scheme" css=".vc_custom_1499093771198{border-bottom-width: 25px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-bottom-color: #ffffff !important;border-bottom-style: solid !important;}" el_id="contact-9"][vc_row equal_height="yes" content_placement="middle"][vc_column css_animation="none" width="1/2" css=".vc_custom_1496675141549{border-right-width: 12.5px !important;padding-top: 60px !important;padding-bottom: 60px !important;border-right-color: #ffffff !important;border-right-style: solid !important;}"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h2>Send us your review
about our products</h2>
[/vc_column_text][hgr_minimal_form form_size="large" form_style="advanced" label_text_size="18" label_text_color="" input_text_color="" next_icon_color="#1c46f2" confirmation_text="Form has been submitted. Thank you for your time!" confirmation_text_size="18" confirmation_text_color="#1c46f2" steps_text_color="" form_input_color="#ffffff" progress_bar_bgcolor="#1c46f2"][hgr_minimal_input label_text="Name" input_type="text"][hgr_minimal_input label_text="Addres" input_type="text"][hgr_minimal_input label_text="Price Review" input_type="text"][hgr_minimal_input label_text="Design Review" input_type="text"][/hgr_minimal_form][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1496050078842{border-left-width: 12.5px !important;padding-top: 100px !important;padding-bottom: 100px !important;border-left-color: #ffffff !important;border-left-style: solid !important;}"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css_animation="none"]
<h2>Contact us and
ask a question</h2>
[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1496675113841{margin-top: -5px !important;}"]
<h4>Phone</h4>
[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1496675119475{margin-top: -35px !important;}"]+207 3159 9845[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1496675124191{margin-top: -35px !important;}"]+423 9228 6851[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1496675128737{margin-top: -35px !important;}"]+207 3159 9845[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1496675133432{margin-top: -5px !important;}"]
<h4>Email</h4>
[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1496675137354{margin-top: -35px !important;}"]office@stash.com[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 21', 'stash' );
	$data['custom_class'] = 'hgr_template hero-21';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="8" el_class="dark-scheme" css=".vc_custom_1499095287940{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #1c46f2 !important;}" el_id="hero-21"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h1 class="hero-text" style="text-align: center;">Stash helps you build simple
yet <em>stunning</em> websites. No fuss.</h1>
[/vc_column_text][vc_btn title="PURCHASE NOW" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#ffffff" outline_custom_hover_text="#1c46f2" align="center" css_animation="fadeInUp" css=".vc_custom_1496675610015{padding-top: 25px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	

	
	
	

	
	
	
	
	$data = array();
	$data['name'] = __( 'Team 11', 'stash' );
	$data['custom_class'] = 'hgr_template team-11';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="team-11" el_class="light-scheme" css=".vc_custom_1499095377490{border-top-width: 1px !important;padding-top: 100px !important;padding-bottom: 150px !important;border-top-color: #e9ecef !important;border-top-style: solid !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">You're in good company</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1494410259236{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="23" img_size="full" alignment="center" style="vc_box_rounded"][vc_column_text]
<h4 style="text-align: center;">Ryan Holiday</h4>
<p style="text-align: center;"><em>Best-selling author</em></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="24" img_size="full" alignment="center" style="vc_box_rounded"][vc_column_text]
<h4 style="text-align: center;">Casey Neistat</h4>
<p style="text-align: center;"><em>Filmmaker</em></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="25" img_size="full" alignment="center" style="vc_box_rounded"][vc_column_text]
<h4 style="text-align: center;">Jason Fried</h4>
<p style="text-align: center;"><em><span class="speaker-position">Co-founder Basecamp</span></em></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="26" img_size="full" alignment="center" style="vc_box_rounded"][vc_column_text]
<h4 style="text-align: center;">Kevin Rose</h4>
<p style="text-align: center;"><em><span class="speaker-position">Co-founder Digg</span></em></p>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1494410263776{padding-top: 30px !important;}"][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="27" img_size="full" alignment="center" style="vc_box_rounded"][vc_column_text]
<h4 style="text-align: center;">Joe Gebbia</h4>
<p style="text-align: center;"><em><span class="speaker-position">Co-founder Airbnb</span></em></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="28" img_size="full" alignment="center" style="vc_box_rounded"][vc_column_text]
<h4 style="text-align: center;">Werner Vogels</h4>
<p style="text-align: center;"><em><span class="speaker-position">CTO </span><span class="speaker-company">Amazon</span></em></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="29" img_size="full" alignment="center" style="vc_box_rounded"][vc_column_text]
<h4 style="text-align: center;">Travis Kalanick</h4>
<p style="text-align: center;"><em><span class="speaker-position">Co-founder &amp; CEO </span><span class="speaker-company">Uber</span></em></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="30" img_size="full" alignment="center" style="vc_box_rounded"][vc_column_text]
<h4 style="text-align: center;">Steve Huffman</h4>
<p style="text-align: center;"><em><span class="speaker-position">Co-founder &amp; CEO </span><span class="speaker-company">Reddit</span></em></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 03', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" css=".vc_custom_1499095431983{border-top-width: 1px !important;padding-top: 100px !important;padding-bottom: 75px !important;background-color: #ffffff !important;border-top-color: #e9ecef !important;border-top-style: solid !important;}" el_id="testimonials-3" el_class="light-scheme"][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]
<h3 style="text-align: center;">"I was amazed at the quality of Stash. I like Stash more and more each day because it makes my life a lot easier. Stash is exactly what our business has been lacking."</h3>
[/vc_column_text][vc_single_image image="29" img_size="75x75" alignment="center" style="vc_box_circle_2" css_animation="fadeIn"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675862171{margin-top: -20px !important;}"]
<h4 style="text-align: center;"><strong><em>Bryan Wilson</em></strong></h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675875290{margin-top: -35px !important;}"]
<h5 style="text-align: center;">CEO@Attractor</h5>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Contact 05', 'stash' );
	$data['custom_class'] = 'hgr_template contact-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" css=".vc_custom_1499095452409{padding-top: 100px !important;padding-bottom: 75px !important;background-color: #f8f8f8 !important;}" el_class="light-scheme" el_id="contact-5"][vc_row][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner][vc_column_inner width="3/4"][vc_column_text]
<h2>Contact Us</h2>
[/vc_column_text][vc_column_text]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers.[/vc_column_text][vc_column_text]<strong>+1 (229) 346-9923</strong>[/vc_column_text][vc_column_text css=".vc_custom_1494414596309{margin-top: -30px !important;}"]<strong>creative@stash.com</strong>[/vc_column_text][vc_column_text]<a href="#">[icon name="fa fa-facebook" size="18px"]</a>    <a href="#">[icon name="fa fa-twitter" size="18px"]</a>   <a href="#"> [icon name="fa fa-linkedin" size="18px"] </a>   <a href="#">[icon name="fa fa-instagram" size="18px"]</a>   <a href="#"> [icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn" el_class="full" css=".vc_custom_1496675889132{padding-top: 20px !important;}"][contact-form-7 title="Contact Tech Company"][/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'CTA 08', 'stash' );
	$data['custom_class'] = 'hgr_template cta-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="call-to-action-8" css=".vc_custom_1499095520808{padding-top: 30px !important;padding-bottom: 40px !important;background-color: #1c46f2 !important;}"][vc_row full_width="stretch_row" equal_height="yes" content_placement="middle" el_class="dark-scheme"][vc_column width="2/3" css=".vc_custom_1496676081319{padding-top: 10px !important;}"][vc_column_text css=".vc_custom_1496675926855{margin-bottom: 0px !important;padding-bottom: 0px !important;}"]
<h3>We urge you to take one of our impressive demos for a test-drive.</h3>
[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1496676089916{padding-top: 10px !important;}"][vc_btn title="PURCHASE NOW" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#ffffff" outline_custom_hover_text="#1c46f2" align="center" css=".vc_custom_1496675972251{margin-bottom: 0px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Subscribe 03', 'stash' );
	$data['custom_class'] = 'hgr_template subscribe-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/subscribe/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="subscribe-3" el_class="light-scheme" css=".vc_custom_1499111500200{padding-bottom: 150px !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h4 style="text-align: center;">Subscribe for latest news &amp; updates</h4>
[/vc_column_text][hgr_mailchimpcollector hgr_mc_apikey="Ae032327dcef42ef538c2c39e88eef3f-us8" hgr_mc_listid="Fbd729b62e" hgr_mc_enable_disclaimer="yes" hgr_mc_collect_name="yes" hgr_mc_collect_lastname="yes" hgr_mc_collect_inputbgcolor="#f8f8f8" hgr_mc_collect_inputstextcolor="#292929" hgr_mc_collect_btnbgcolor="#1c46f2" hgr_mc_collect_btntextcolor="#ffffff" hgr_mc_collect_nstextcolor="#cecece" extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 22', 'stash' );
	$data['custom_class'] = 'hgr_template hero-22';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section parallax="content-moving" parallax_image="1839" el_id="hero-22" el_class="light-scheme" css=".vc_custom_1499112455994{padding-top: 140px !important;padding-bottom: 100px !important;}"][vc_row full_width="stretch_row" el_class="light-scheme"][vc_column][vc_column_text css_animation="fadeIn"]
<h1 style="text-align: center;">Create your
perfect website using
<em>Stash</em> theme.</h1>
[/vc_column_text][vc_row_inner css=".vc_custom_1488980827718{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1488980823498{padding-right: 0px !important;padding-left: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css_animation="fadeInUp" css=".vc_custom_1496678959293{padding-top: 32px !important;}"]
<p style="text-align: center;"><strong><a class="underline-after-first" href="#">[icon name="fa fa-play"] VIEW ALL SECTIONS</a></strong></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Features 14', 'stash' );
	$data['custom_class'] = 'hgr_template features-14';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="features-14" el_class="light-scheme" css=".vc_custom_1499112474611{padding-top: 75px !important;padding-bottom: 75px !important;background-color: #ffffff !important;}"][vc_row full_width="stretch_row" css=".vc_custom_1494503731432{padding-top: 0px !important;background-color: #ffffff !important;}"][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-pen" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="icon-background-select" animicon_backcolor="" animicon_backcolor_hover="" animicon_backroundness="50%" animicon_bordertype="icon-border-select" animicon_bordercolor="#d6d6d6" animicon_bordercolor_hover="#d6d6d6" animicon_borderwidth="2" custom_link="none" css=".vc_custom_1494499369400{padding-bottom: 30px !important;}"][vc_column_text css=".vc_custom_1488985322853{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494503784271{margin-top: -30px !important;}"]
<p style="text-align: center;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][vc_column_text]
<p style="text-align: center;"><strong><a class="link-curtain" href="#">Learn More</a></strong></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="icon-background-select" animicon_backcolor="" animicon_backcolor_hover="" animicon_backroundness="50%" animicon_bordertype="icon-border-select" animicon_bordercolor="#d6d6d6" animicon_bordercolor_hover="#d6d6d6" animicon_borderwidth="2" custom_link="none" css=".vc_custom_1494503839645{padding-bottom: 30px !important;}"][vc_column_text css=".vc_custom_1488985781198{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Security and peace of mind</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494503775291{margin-top: -30px !important;}"]
<p style="text-align: center;">You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience in wordpress.</p>
[/vc_column_text][vc_column_text]
<p style="text-align: center;"><strong><a class="link-curtain" href="#">Learn More</a></strong></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-summit" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="icon-background-select" animicon_backcolor="" animicon_backcolor_hover="" animicon_backroundness="50%" animicon_bordertype="icon-border-select" animicon_bordercolor="#d6d6d6" animicon_bordercolor_hover="#d6d6d6" animicon_borderwidth="2" custom_link="none" css=".vc_custom_1494503865133{padding-bottom: 30px !important;}"][vc_column_text css=".vc_custom_1488985915637{margin-top: -20px !important;}"]
<h4 style="text-align: center;">It's personal</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494503793513{margin-top: -30px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.</p>
[/vc_column_text][vc_column_text]
<p style="text-align: center;"><strong><a class="link-curtain" href="#">Learn More</a></strong></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	

	
	
	
	$data = array();
	$data['name'] = __( 'Video 03', 'stash' );
	$data['custom_class'] = 'hgr_template video-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/video/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="video-3" el_class="light-scheme" css=".vc_custom_1499112522761{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}"][vc_row][vc_column width="1/6"][/vc_column][vc_column css_animation="fadeIn" width="2/3"][vc_column_text css_animation="none"]
<h3 style="text-align: center;">As a professional, you want to show the world you have arrived and are going places. You need your web presence to be reliable and easy to create.</h3>
[/vc_column_text][hgr_icon icon_type="selector" icntxt_icon="fa fa-play-circle" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#1338a0" icntxt_icnsize="100" icon_alignment="center" icon_background_type="none" custom_link="yes-link" icntxt_link="url:https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DnrJtHemSPW4|||" icntxt_extraclass="venoboxDiv"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1494506172580{padding-top: 40px !important;}"][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="33" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="32" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="31" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="30" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 23', 'stash' );
	$data['custom_class'] = 'hgr_template hero-23';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" video_bg="yes" video_bg_url="https://www.youtube.com/watch?v=lLOJzH5V220&amp;feature=youtu.be" css=".vc_custom_1499113069458{padding-top: 250px !important;padding-bottom: 180px !important;background-color: #292929 !important;}" el_class="dark-scheme" el_id="hero-23"][vc_row][vc_column][vc_column_text css_animation="fadeInDown"]
<h1 style="text-align: center;">We work with those
we truly admire.</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.</p>
[/vc_column_text][vc_btn title="REQUEST A <em>free</em> QUOTE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeInUp" css=".vc_custom_1496679591112{padding-top: 10px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 15', 'stash' );
	$data['custom_class'] = 'hgr_template features-15';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="features-15" el_class="light-scheme" css=".vc_custom_1499113105129{border-top-width: 1px !important;border-bottom-width: 1px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row full_width="stretch_row" gap="35" equal_height="yes" css=".vc_custom_1494581538507{padding-top: 60px !important;padding-bottom: 60px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496679610095{padding-top: 40px !important;background-color: #ffffff !important;}"][vc_column_text]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][hgr_animicon animicon_icon="bi-gear" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1494581690690{margin-top: -25px !important;padding-bottom: 35px !important;}"][vc_column_text css=".vc_custom_1494581724128{margin-top: -30px !important;}"]
<p style="text-align: center;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>
[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="sm" align="center" css=".vc_custom_1494581504331{padding-top: 10px !important;padding-bottom: 30px !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496679614422{padding-top: 40px !important;background-color: #ffffff !important;}"][vc_column_text]
<h4 style="text-align: center;">Security and peace of mind</h4>
[/vc_column_text][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1494581739276{margin-top: -25px !important;padding-bottom: 35px !important;}"][vc_column_text css=".vc_custom_1494581712761{margin-top: -30px !important;}"]
<p style="text-align: center;">You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience in wordpress.</p>
[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="sm" align="center" css=".vc_custom_1494581504331{padding-top: 10px !important;padding-bottom: 30px !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496679618795{padding-top: 40px !important;background-color: #ffffff !important;}"][vc_column_text]
<h4 style="text-align: center;">It's personal</h4>
[/vc_column_text][hgr_animicon animicon_icon="bi-globe" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1494581745021{margin-top: -25px !important;padding-bottom: 35px !important;}"][vc_column_text css=".vc_custom_1494581734053{margin-top: -30px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.</p>
[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="sm" align="center" css=".vc_custom_1494581504331{padding-top: 10px !important;padding-bottom: 30px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'About 10', 'stash' );
	$data['custom_class'] = 'hgr_template about-10';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499113123333{padding-top: 100px !important;padding-bottom: 100px !important;}" el_id="about-10"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Why Choose Stash ?</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496679717696{margin-top: -25px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create,
sell and grow your business.</p>
[/vc_column_text][vc_single_image image="23" img_size="full" alignment="center" css_animation="fadeIn"][/vc_column][/vc_row][vc_row gap="35"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else. You will love our powerful theme options panel.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Team 12', 'stash' );
	$data['custom_class'] = 'hgr_template team-12';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499113139867{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="team-12"][vc_row gap="35" css_animation="fadeIn"][vc_column width="1/4"][hgr_advimage hgr_advimage_image="75" hgr_advimage_height="390" hgr_advimage_title="" hgr_advimage_title_padding="120" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(248,248,248,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496055305793{padding-right: 35px !important;padding-bottom: 120px !important;padding-left: 35px !important;}"]
<h5 style="text-align: center;">Vincent Jensen</h5>
<p style="text-align: center;"><em>CEO, Founder</em></p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-youtube"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a></p>
[/hgr_advimage][/vc_column][vc_column width="1/4"][hgr_advimage hgr_advimage_image="76" hgr_advimage_height="390" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(248,248,248,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496055316716{padding-right: 35px !important;padding-bottom: 120px !important;padding-left: 35px !important;}"]
<h5 style="text-align: center;">Julie Cooper</h5>
<p style="text-align: center;"><em>President</em></p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-youtube"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a></p>
[/hgr_advimage][/vc_column][vc_column width="1/4"][hgr_advimage hgr_advimage_image="77" hgr_advimage_height="390" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(248,248,248,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496055326300{padding-right: 35px !important;padding-bottom: 120px !important;padding-left: 35px !important;}"]
<h5 style="text-align: center;">Marie Reyes</h5>
<p style="text-align: center;"><em>PR Manager</em></p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-youtube"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a></p>
[/hgr_advimage][/vc_column][vc_column width="1/4"][hgr_advimage hgr_advimage_image="78" hgr_advimage_height="390" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(248,248,248,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496055335133{padding-right: 35px !important;padding-bottom: 120px !important;padding-left: 35px !important;}"]
<h5 style="text-align: center;">Kimberly Freeman</h5>
<p style="text-align: center;"><em>HR Manager</em></p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>     <a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-youtube"]</a>     <a href="#">[icon name="fa fa-google-plus"]</a></p>
[/hgr_advimage][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 04', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="43" el_class="dark-scheme" css=".vc_custom_1499113165564{padding-top: 100px !important;padding-bottom: 70px !important;}" el_id="testimonials-4"][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">I wish I would have thought of it first. If you want real marketing that works and effective implementation Stash’s got you covered.</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496679766806{margin-top: -20px !important;}"]
<h4 style="text-align: center;"><span style="color: #1c46f2;">Larry Jason</span></h4>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Clients 05', 'stash' );
	$data['custom_class'] = 'hgr_template clients-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/clients/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" css=".vc_custom_1499113184985{border-top-width: 1px !important;border-bottom-width: 1px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-bottom-color: #e9ecef !important;}" el_id="clients-5"][vc_row gap="20" css_animation="fadeIn"][vc_column width="1/6"][vc_single_image image="51" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="56" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="52" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="53" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="54" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column width="1/6"][vc_single_image image="57" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Contact 10', 'stash' );
	$data['custom_class'] = 'hgr_template contact-10';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="contact-10" el_class="light-scheme" css=".vc_custom_1499113218958{padding-top: 100px !important;background-color: #ffffff !important;}"][vc_row][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>Contact Us</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]Because you have better things to do, like create,
sell and grow your business.[/vc_column_text][vc_column_text css_animation="fadeIn"]<strong>327 Daniels Way, Geneva, IL, 60134</strong>
<strong>(630) 232-6893</strong>
<strong>office@stash.com</strong>[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn" el_class="full"]
<p style="text-align: center;">[contact-form-7 title="Company Presentation Contact"]</p>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1494588320503{padding-top: 50px !important;}"][vc_column][hgr_gmap gmap_name="Sydney" google_maps_apikey="" gmap_latitude="-33.8814454" gmap_longitude="151.2226494" gmap_zoom="18" gmap_style="gmap_style_normal" gmap_marker_settings="gmap_marker_default" gmap_width="100%" gmap_height="400px" gmap_disablezoom="yes" gmap_disabledraggable="yes" gmap_extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Features 17', 'stash' );
	$data['custom_class'] = 'hgr_template features-17';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="features-17" el_class="dark-scheme" css=".vc_custom_1499114146025{padding-top: 50px !important;padding-bottom: 50px !important;background-color: #292929 !important;}"][vc_row gap="35"][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1490794684863{margin-top: -30px !important;}"]
<p style="text-align: center;">You will love our theme options panel, every layout or styling option can be set.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-summit" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Security and peace of mind</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1490794791164{margin-top: -30px !important;}"]
<p style="text-align: center;">You can relax knowing Stash<strong> </strong>is managed by a team of 4 professionals.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">It's personal</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1490794748990{margin-top: -30px !important;}"]
<p style="text-align: center;">It is all about you and your needs, so we have over 80 design elements.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'About 11', 'stash' );
	$data['custom_class'] = 'hgr_template about-11';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="about-11" el_class="dark-scheme" css=".vc_custom_1499114169979{border-top-width: 1px !important;padding-top: 70px !important;padding-bottom: 50px !important;background-color: #292929 !important;border-top-color: #141414 !important;border-top-style: solid !important;}"][vc_row gap="35" content_placement="top"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>Visual Page Builder with
80+ Page Elements</h2>
[/vc_column_text][vc_btn title="CONTACT US" style="custom" custom_background="#1c46f2" custom_text="#ffffff" css_animation="fadeInUp"][/vc_column][vc_column width="1/2" css=".vc_custom_1488978243653{padding-right: 25px !important;padding-left: 25px !important;}"][vc_column_text css_animation="fadeIn"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.

No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496683253681{margin-top: -20px !important;}" el_class="underline after first"]<strong><a class="link-curtain" href="#">View More</a></strong>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Quote 07', 'stash' );
	$data['custom_class'] = 'hgr_template quote-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/quote/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section parallax="content-moving" parallax_image="1904" el_id="quote-7" el_class="dark-scheme" css=".vc_custom_1499114196901{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #292929 !important;}"][vc_row][vc_column width="1/2"][vc_icon icon_fontawesome="fa fa-quote-left" color="custom" size="lg" css_animation="fadeInDown" custom_color="#1c46f2" css=".vc_custom_1496683261796{margin-left: -10px !important;}"][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496683269984{margin-top: -30px !important;}"]
<h2>If your actions inspire others to dream more, learn more, do more and become more, you are a leader.</h2>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496683274732{margin-top: -20px !important;}"]
<h4>John Quincy Adams</h4>
[/vc_column_text][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Case Study 04', 'stash' );
	$data['custom_class'] = 'hgr_template case-study-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/case-study/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="case-study-4" el_class="dark-scheme" css=".vc_custom_1499114217815{padding-top: 70px !important;padding-bottom: 70px !important;background-color: #292929 !important;}"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Our Case Studies</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496683288188{margin-top: -20px !important;margin-bottom: 0px !important;padding-bottom: 0px !important;}"]
<p style="text-align: center;">You can relax knowing Stash<strong> </strong>is managed
by a team of 4 professionals.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column css_animation="fadeIn" css=".vc_custom_1496683306318{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner gap="35" css=".vc_custom_1490803169030{padding-top: 50px !important;}"][vc_column_inner width="1/3"][vc_single_image image="1926" img_size="full" alignment="center" el_class="column-shadow"][vc_column_text css=".vc_custom_1496054821289{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Sage Restaurant</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="1925" img_size="full" alignment="center" el_class="column-shadow"][vc_column_text css=".vc_custom_1496054831607{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Cast Construction</h4>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="1924" img_size="full" alignment="center" el_class="column-shadow"][vc_column_text css=".vc_custom_1496054843084{margin-top: -20px !important;}"]
<h4 style="text-align: center;">Attractor IPO</h4>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1494854478762{margin-top: -200px !important;margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-bottom: 50px !important;padding-left: 0px !important;background-color: #141414 !important;}"][vc_column_inner][vc_btn title="ASK FOR A FREE QUOTE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeInDown"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	

	
	
	
	$data = array();
	$data['name'] = __( 'Contact 11', 'stash' );
	$data['custom_class'] = 'hgr_template contact-11';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="contact-11" el_class="dark-scheme" css=".vc_custom_1499114262917{padding-top: 70px !important;background-color: #292929 !important;}"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Get in <em>touch</em> Now</h2>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row css=".vc_custom_1490885814504{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column][vc_column_text css_animation="fadeIn" el_class="horizontal"][contact-form-7 title="ContactStash"][/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1490886062935{margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important;border-right-width: 0px !important;border-left-width: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_column css_animation="fadeIn" css=".vc_custom_1496683373673{margin-right: 0px !important;margin-left: 0px !important;border-right-width: 0px !important;border-left-width: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][hgr_gmap gmap_name="Stash" google_maps_apikey="" gmap_latitude="-33.8814454" gmap_longitude="151.2226494" gmap_zoom="18" gmap_style="gmap_style_greyscale" gmap_marker_settings="gmap_marker_default" gmap_width="100%" gmap_height="450px" gmap_disablezoom="yes" gmap_disabledraggable="yes" gmap_extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 12', 'stash' );
	$data['custom_class'] = 'hgr_template hero-12';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" el_id="hero-12" el_class="light-scheme" css=".vc_custom_1499115365720{padding-top: 150px !important;padding-bottom: 150px !important;background-image: url(http://highgradelab.com/stash/design-studio/wp-content/uploads/sites/64/2017/05/hero.jpg?id=337) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_custom_heading text="Stash" font_container="tag:h1|font_size:100|text_align:center|color:%23292929|line_height:1" use_theme_fonts="yes" css_animation="fadeInDown"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496683725901{padding-top: 30px !important;}"]
<p style="text-align: center;">There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.</p>

[/vc_column_text][vc_btn title="GET STARTED" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="lg" align="center" css_animation="fadeIn" css=".vc_custom_1496683733848{padding-top: 20px !important;}"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Content 07', 'stash' );
	$data['custom_class'] = 'hgr_template content-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/content/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" el_class="light-scheme" css=".vc_custom_1499115402104{padding-top: 150px !important;padding-bottom: 150px !important;background-image: url(http://highgradelab.com/stash/design-studio/wp-content/uploads/sites/64/2017/05/about.jpg?id=23) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}" el_id="content-7"][vc_row][vc_column width="1/4"][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496683743330{padding-top: 30px !important;}"]
<h1 class="hero-heading" style="text-align: center;">Stash is a digital agency focused on designing and building digital products, brands, and user experience.</h1>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Team 14', 'stash' );
	$data['custom_class'] = 'hgr_template team-14';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="team-14" el_class="light-scheme" css=".vc_custom_1499115431589{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Our Team</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.

[/vc_column_text][/vc_column][/vc_row][vc_row css_animation="fadeIn" css=".vc_custom_1496683767476{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3"][hgr_advimage hgr_advimage_image="344" hgr_advimage_height="511" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="#292929" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1494930303142{padding-bottom: 200px !important;}"]
<h4 style="text-align: center;">Jane Cole</h4>
<p style="text-align: center;"><em>CFO</em></p>

[/hgr_advimage][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_advimage hgr_advimage_image="345" hgr_advimage_height="511" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="#292929" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1494930370346{padding-bottom: 200px !important;}"]
<h4 style="text-align: center;">Christian Barnes</h4>
<p style="text-align: center;"><em>CEO</em></p>

[/hgr_advimage][/vc_column][vc_column css_animation="fadeIn" width="1/3"][hgr_advimage hgr_advimage_image="346" hgr_advimage_height="511" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="#292929" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.9)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1494930461057{padding-bottom: 200px !important;}"]
<h4 style="text-align: center;">Michael Collins</h4>
<p style="text-align: center;"><em>PR Manager</em></p>

[/hgr_advimage][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	

	
	
	
	$data = array();
	$data['name'] = __( 'Contact 12', 'stash' );
	$data['custom_class'] = 'hgr_template contact-12';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="contact-12" el_class="light-scheme" css=".vc_custom_1499115493309{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h2 style="text-align: center;">Contact Us</h2>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">Because you have better things to do, like create,
sell and grow your business.

[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1494940022877{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner][vc_column_inner width="1/6"][hgr_animicon animicon_icon="bi-location" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="72" animicon_alignment="left" animicon_background_type="none" custom_link="none"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]
<h4>Address</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494939961970{margin-top: -30px !important;}"]241 Steele Place Ln
Merry Hill, NC, 27957[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner][vc_column_inner width="1/6"][hgr_animicon animicon_icon="bi-phone" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="72" animicon_alignment="left" animicon_background_type="none" custom_link="none"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]
<h4>Phone</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494940317608{margin-top: -30px !important;}"](252) 356-4372
(252) 356-4374[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner][vc_column_inner width="1/6"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="72" animicon_alignment="left" animicon_background_type="none" custom_link="none"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]
<h4>Email</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494940354935{margin-top: -30px !important;}"]design@stash.com
support@stash.com[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 25', 'stash' );
	$data['custom_class'] = 'hgr_template hero-25';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" parallax="content-moving" parallax_image="256" el_class="dark-scheme" el_id="hero-25" css=".vc_custom_1499161800489{padding-top: 100px !important;padding-bottom: 75px !important;}"][vc_row full_width="stretch_row"][vc_column][vc_column_text css_animation="top-to-bottom"]
<h1 style="text-align: center;">A Clean &amp; Flexible Multi Purpose Theme</h1>
[/vc_column_text][vc_column_text css_animation="top-to-bottom"]
<h3 style="text-align: center;">Stash is a stunning WordPress theme packed with the best website building features: Visual Composer, Revolution Slider, Powerful Theme Options Panel, 80+ Page Elements, Header Layouts and many more.
Go on and see these features in action!</h3>
[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" size="lg" align="center" css_animation="fadeInUp" css=".vc_custom_1496136284197{padding-top: 15px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'About 14', 'stash' );
	$data['custom_class'] = 'hgr_template about-14';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" css=".vc_custom_1499161844412{padding-top: 100px !important;padding-bottom: 75px !important;background-color: #1c46f2 !important;}" el_class="dark-scheme" el_id="about-14"][vc_row][vc_column][vc_column_text css_animation="fadeInDown"]
<h5 style="text-align: center;"><strong>About</strong></h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496061067293{margin-top: -20px !important;}"]
<h2 style="text-align: center;">How does it work</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" equal_height="yes" css_animation="fadeIn"][vc_column width="1/3"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496072921256{margin-left: -15px !important;}"][vc_column_text]
<h4>1. One Click Demo Import</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1478783103952{margin-top: -30px !important;}"]Imports all content and settings, exactly as in the preview.[/vc_column_text][/vc_column][vc_column width="1/3"][hgr_animicon animicon_icon="bi-gear" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496072933046{margin-left: -15px !important;}"][vc_column_text]
<h4>2. Extensive Theme Options</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1478783109048{margin-top: -30px !important;}"]Get full customisation freedom with no need for custom coding.[/vc_column_text][/vc_column][vc_column width="1/3"][hgr_animicon animicon_icon="bi-clock" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496072939448{margin-left: -15px !important;}"][vc_column_text]
<h4>3. 80+ Page Elements</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1478783114167{margin-top: -30px !important;}"]Build almost any type of layout using drag &amp; drop. No coding or shortcodes involved.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Features 19', 'stash' );
	$data['custom_class'] = 'hgr_template features-19';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" el_id="features-19" css=".vc_custom_1499161856054{padding-top: 100px !important;padding-bottom: 75px !important;}"][vc_row css_animation="fadeInDown"][vc_column][vc_column_text]
<h5 style="text-align: center;"><strong>Features</strong></h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1494946163723{margin-top: -20px !important;}"]
<h2 style="text-align: center;">Business Oriented Layouts</h2>
[/vc_column_text][vc_column_text css_animation="fadeInUp"]
<p style="text-align: center;">A great collection of 12 homepages, researched and developed for the most popular business niches.
Use One Click Import to get a head start and save valuable time when building your website.

[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" equal_height="yes" content_placement="middle" css=".vc_custom_1479223552105{padding-bottom: 70px !important;}"][vc_column css_animation="fadeInLeft" width="1/3"][vc_column_text]
<h4 style="text-align: right;">Easy To Setup</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1478783403861{margin-top: -30px !important;}"]
<p style="text-align: right;">Tilde cray coloring book, prism master cleanse echo park authentic hot chicken kickstarter swag yuccie hell of skateboard farm-to-table etsy. Leggings listicle bespoke neutra, vinyl tbh roof party letterpress.</p>

[/vc_column_text][/vc_column][vc_column width="1/3" offset="vc_hidden-sm vc_hidden-xs"][vc_single_image image="39" img_size="full" alignment="center" css_animation="fadeIn"][/vc_column][vc_column css_animation="fadeInRight" width="1/3"][vc_column_text]
<h4 style="text-align: left;">Optimised for Speed</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496136320840{margin-top: -30px !important;}"]Meditation godard health goth, messenger bag hashtag banjo forage XOXO. Literally street art franzen swag gochujang leggings lumbersexual echo park pabst hexagon.[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1496073471108{margin-top: -80px !important;}"][vc_column width="1/3"][/vc_column][vc_column css_animation="fadeInUp" width="1/3"][vc_column_text]
<h4 style="text-align: center;">User Oriented</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1478783511790{margin-top: -30px !important;}"]
<p style="text-align: center;">Meditation godard health goth, messenger bag hashtag banjo forage XOXO. Literally street art franzen swag gochujang leggings lumbersexual echo park pabst hexagon.</p>

[/vc_column_text][/vc_column][vc_column width="1/3"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'CTA 10', 'stash' );
	$data['custom_class'] = 'hgr_template cta-10';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="261" el_class="dark-scheme" el_id="call-to-action-10" css=".vc_custom_1499161878979{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_row full_width="stretch_row"][vc_column width="1/2"][vc_column_text css_animation="fadeInDown"]
<h2>Drag &amp; Drop Mega Menu Builder</h2>
[/vc_column_text][vc_column_text css_animation="fadeInDown"]Create any type of mega menu using 80+ built in elements. Use image or video backgrounds, css animations, custom styling and increase your sales.[/vc_column_text][vc_btn title="VIEW MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" css_animation="fadeInDown" css=".vc_custom_1496073838401{padding-top: 15px !important;}"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Services 06', 'stash' );
	$data['custom_class'] = 'hgr_template services-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/services/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="dark-scheme" css=".vc_custom_1499161896055{background-color: #1c46f2 !important;}" el_id="services-6"][vc_row full_width="stretch_row" css=".vc_custom_1494945464494{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_column_text css_animation="fadeIn"]
<h5 style="text-align: center;"><strong>Commercial</strong></h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1494946191767{margin-top: -20px !important;padding-bottom: 40px !important;}"]
<h2 style="text-align: center;">Our Services</h2>
[/vc_column_text][vc_row_inner gap="35"][vc_column_inner width="1/3" css=".vc_custom_1478260692545{padding-bottom: 30px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Audit and Assurance</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1479806788520{margin-top: 0px !important;}"]IFRS Transition[/vc_column_text][vc_separator color="custom" align="align_left" style="dotted" css=".vc_custom_1496074256863{margin-top: -20px !important;}" accent_color="rgba(255,255,255,0.2)"][vc_column_text css_animation="fadeIn" css=".vc_custom_1479806792328{margin-top: -20px !important;}"]Financial Accounting[/vc_column_text][vc_separator color="custom" align="align_left" style="dotted" css=".vc_custom_1496074262161{margin-top: -20px !important;}" accent_color="rgba(255,255,255,0.2)"][vc_column_text css_animation="fadeIn" css=".vc_custom_1479806795718{margin-top: -20px !important;}"]Corporate reporting[/vc_column_text][vc_separator color="custom" align="align_left" style="dotted" css=".vc_custom_1496074266539{margin-top: -20px !important;}" accent_color="rgba(255,255,255,0.2)"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1478264333824{padding-bottom: 30px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Branding Design</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1479806804811{margin-top: 0px !important;}"]Competitor &amp; Landscape analysis[/vc_column_text][vc_separator color="custom" align="align_left" style="dotted" css=".vc_custom_1496074271073{margin-top: -20px !important;}" accent_color="rgba(255,255,255,0.2)"][vc_column_text css_animation="fadeIn" css=".vc_custom_1479806808589{margin-top: -20px !important;}"]Brand positioning[/vc_column_text][vc_separator color="custom" align="align_left" style="dotted" css=".vc_custom_1496074274932{margin-top: -20px !important;}" accent_color="rgba(255,255,255,0.2)"][vc_column_text css_animation="fadeIn" css=".vc_custom_1479806811789{margin-top: -20px !important;}"]Content proposition &amp; Strategy[/vc_column_text][vc_separator color="custom" align="align_left" style="dotted" css=".vc_custom_1496074279729{margin-top: -20px !important;}" accent_color="rgba(255,255,255,0.2)"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1478264338248{padding-bottom: 30px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Web Development</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1479806819808{margin-top: 0px !important;}"]Multilingual Sites[/vc_column_text][vc_separator color="custom" align="align_left" style="dotted" css=".vc_custom_1496074284550{margin-top: -20px !important;}" accent_color="rgba(255,255,255,0.2)"][vc_column_text css_animation="fadeIn" css=".vc_custom_1479806823475{margin-top: -20px !important;}"]Complex UI Design[/vc_column_text][vc_separator color="custom" align="align_left" style="dotted" css=".vc_custom_1496074289118{margin-top: -20px !important;}" accent_color="rgba(255,255,255,0.2)"][vc_column_text css_animation="fadeIn" css=".vc_custom_1479806827148{margin-top: -20px !important;}"]Responsive Websites[/vc_column_text][vc_separator color="custom" align="align_left" style="dotted" css=".vc_custom_1496074293347{margin-top: -20px !important;}" accent_color="rgba(255,255,255,0.2)"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	
	$data = array();
	$data['name'] = __( 'Team 15', 'stash' );
	$data['custom_class'] = 'hgr_template team-15';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" el_id="team-15"][vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1478176502618{margin-bottom: 0px !important;padding-top: 100px !important;padding-bottom: 0px !important;}"][vc_column][vc_column_text css_animation="fadeInDown"]
<h5 style="text-align: center;"><strong>Our Crew</strong></h5>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1494946217888{margin-top: -20px !important;}"]
<h2 style="text-align: center;">Stash Team</h2>
[/vc_column_text][vc_row_inner css=".vc_custom_1496135331744{padding-bottom: 15px !important;}"][vc_column_inner width="1/3"][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<p style="text-align: center;">There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.</p>

[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][vc_btn title="APPLY FOR A JOB" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeInUp"][vc_row_inner css=".vc_custom_1478176704857{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_column_inner width="1/6" css=".vc_custom_1478176726574{padding-top: 50px !important;}"][vc_column_text css_animation="fadeInDown"]
<h5 style="text-align: center;">Nicholas Day</h5>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496135068806{margin-top: -35px !important;}"]
<p style="text-align: center;"><em>WebDesigner</em></p>

[/vc_column_text][vc_single_image image="53" img_size="full" css_animation="fadeIn" css=".vc_custom_1479896044557{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/6" css=".vc_custom_1478176735154{padding-top: 50px !important;}"][vc_column_text css_animation="fadeInDown"]
<h5 style="text-align: center;">Carl Andrew</h5>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496135074576{margin-top: -35px !important;}"]
<p style="text-align: center;"><em>CEO</em></p>

[/vc_column_text][vc_single_image image="54" img_size="full" css_animation="fadeIn" css=".vc_custom_1479896039210{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/6" css=".vc_custom_1478176741195{padding-top: 50px !important;}"][vc_column_text css_animation="fadeInDown"]
<h5 style="text-align: center;">Emma Wells</h5>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496135081158{margin-top: -35px !important;}"]
<p style="text-align: center;"><em>WebDesigner</em></p>

[/vc_column_text][vc_single_image image="55" img_size="full" css_animation="fadeIn" css=".vc_custom_1479896032566{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/6" css=".vc_custom_1478176799848{padding-top: 50px !important;}"][vc_column_text css_animation="fadeInDown"]
<h5 style="text-align: center;">John Nichols</h5>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496135088965{margin-top: -35px !important;}"]
<p style="text-align: center;"><em>WebDeveloper</em></p>

[/vc_column_text][vc_single_image image="56" img_size="full" css_animation="fadeIn" css=".vc_custom_1479896010288{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/6" css=".vc_custom_1478176806197{padding-top: 50px !important;}"][vc_column_text css_animation="fadeInDown"]
<h5 style="text-align: center;">Tyler Bradley</h5>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496135095424{margin-top: -35px !important;}"]
<p style="text-align: center;"><em>CFO</em></p>

[/vc_column_text][vc_single_image image="57" img_size="full" css_animation="fadeIn" css=".vc_custom_1479896016292{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/6" css=".vc_custom_1478176812518{margin-bottom: 0px !important;padding-top: 50px !important;padding-bottom: 0px !important;}"][vc_column_text css_animation="fadeInDown"]
<h5 style="text-align: center;">Nancy Walters</h5>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1496135101735{margin-top: -35px !important;}"]
<p style="text-align: center;"><em>PR / HR</em></p>

[/vc_column_text][vc_single_image image="58" img_size="full" css_animation="fadeIn" css=".vc_custom_1479896025224{margin-top: 0px !important;margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 17', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-17';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="dark-scheme" el_id="testimonials-17" css=".vc_custom_1499161945035{background-color: #1c46f2 !important;}"][vc_row full_width="stretch_row" css=".vc_custom_1495012489580{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][hgr_testimonials carousel_testimonials_number="2" testimonial_text_tag="h3" testimonial_name_tag="h4" testimonial_company_position_tag="h5" testimonial_company_position_color="#1c46f2" carousel_testimonials_seeall_text="SEE ALL" testimonial_viewall_bg_color="#000000" all_testimonial_text_color="#ffffff" extra_class="" carousel_bg_color="" carousel_bottom_bar_color="#dd9933" testimonial_text_color="#dd3333" testimonial_name_color="#81d742" css=".vc_custom_1496686325095{padding-top: 100px !important;padding-bottom: 100px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	

	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 08', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" css=".vc_custom_1499169221095{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 50px !important;background-color: #f9f9f9 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="testimonials-8"][vc_row equal_height="yes"][vc_column width="1/3"][vc_single_image image="14" img_size="full" alignment="right" css_animation="left-to-right" css=".vc_custom_1495032062795{margin-bottom: 0px !important;padding-top: 10px !important;padding-bottom: 0px !important;}"][/vc_column][vc_column width="2/3" css=".vc_custom_1495032049753{padding-top: 40px !important;padding-bottom: 20px !important;}"][vc_column_text css_animation="right-to-left" css=".vc_custom_1496048181714{padding-top: 55px !important;}"]
<h3>"Stash is a stunning WordPress theme packed with the best website building features: Visual Composer, Revolution Slider, Powerful Theme Options Panel, 80+ Page Elements, Header Layouts and many more. "</h3>
[/vc_column_text][vc_column_text css_animation="right-to-left"]
<h4>Jeffrey Lynch</h4>
<h5>CEO @ HighGrade Lab</h5>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Services 07', 'stash' );
	$data['custom_class'] = 'hgr_template services-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/services/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" el_id="services-7"][vc_row css=".vc_custom_1495032336324{padding-top: 100px !important;padding-bottom: 40px !important;}"][vc_column][vc_column_text css_animation="top-to-bottom"]
<h5 style="text-align: center;">Services</h5>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1495031702256{margin-top: -20px !important;}"]
<h2 style="text-align: center;">What we do</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="20"][vc_column width="1/3"][vc_row_inner el_class="column-hover"][vc_column_inner][hgr_animicon animicon_icon="si-diamond" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1495029122347{padding-bottom: 20px !important;}"][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1496064058332{margin-top: -10px !important;}"]
<h4 style="text-align: center;">App Testing</h4>
[/vc_column_text][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1453387261314{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner el_class="column-hover"][vc_column_inner][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1495029101080{padding-bottom: 20px !important;}"][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1496064072536{margin-top: -10px !important;}"]
<h4 style="text-align: center;">Security Audits</h4>
[/vc_column_text][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1453387261314{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner el_class="column-hover"][vc_column_inner][hgr_animicon animicon_icon="si-bag-alt-two" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1495029149221{padding-bottom: 20px !important;}"][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1496064082598{margin-top: -10px !important;}"]
<h4 style="text-align: center;">Ecomerce</h4>
[/vc_column_text][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1453387261314{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row gap="20" css=".vc_custom_1495032346079{padding-bottom: 100px !important;}"][vc_column width="1/3"][vc_row_inner el_class="column-hover"][vc_column_inner][hgr_animicon animicon_icon="bi-target" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1495029039858{padding-bottom: 20px !important;}"][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1496064098275{margin-top: -10px !important;}"]
<h4 style="text-align: center;">SAAS Development</h4>
[/vc_column_text][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1453387261314{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner el_class="column-hover"][vc_column_inner][hgr_animicon animicon_icon="bi-flowchart" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1495029070636{padding-bottom: 20px !important;}"][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1496064112826{margin-top: -10px !important;}"]
<h4 style="text-align: center;">Content Strategy</h4>
[/vc_column_text][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1453387261314{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner el_class="column-hover"][vc_column_inner][hgr_animicon animicon_icon="bi-globe" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1495029059764{padding-bottom: 20px !important;}"][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1496064125401{margin-top: -10px !important;}"]
<h4 style="text-align: center;">CMS Development</h4>
[/vc_column_text][vc_column_text css_animation="bottom-to-top" css=".vc_custom_1453387261314{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Promo 12', 'stash' );
	$data['custom_class'] = 'hgr_template promo-12';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499169309674{border-top-width: 1px !important;padding-top: 60px !important;background-color: #ffffff !important;border-top-color: #e9ecef !important;border-top-style: solid !important;}" el_id="promo-12"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_row_inner css=".vc_custom_1495031927102{padding-bottom: 30px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text css_animation="left-to-right" css=".vc_custom_1495031534005{margin-top: -30px !important;}"]
<h5>Smart &amp; Intuitive</h5>
[/vc_column_text][vc_column_text css_animation="left-to-right" css=".vc_custom_1495031545709{margin-top: -20px !important;}"]
<h2>Powerful Theme Options</h2>
[/vc_column_text][vc_column_text css_animation="left-to-right"][icon name="fa fa-paint-brush" size="16px" color=“#1c46f2"] DESIGN[/vc_column_text][vc_column_text css_animation="left-to-right" css=".vc_custom_1495031999645{margin-top: -10px !important;}"]With Stash you’re getting 6 pre-built
layouts. Any of them can be imported
to your WordPress with one click.[/vc_column_text][vc_column_text css_animation="left-to-right"][icon name="fa fa-mortar-board" size="16px" color=“#1c46f2"] DEVELOPMENT[/vc_column_text][vc_column_text css_animation="left-to-right" css=".vc_custom_1477317624564{margin-top: -10px !important;}"]No additional settings needed, everything
will look just like in the preview.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1495031594914{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_single_image image="828" img_size="full" alignment="right" css_animation="right-to-left"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Clients 07', 'stash' );
	$data['custom_class'] = 'hgr_template clients-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/clients/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="light-scheme" el_id="clients-7"][vc_row full_width="stretch_row" css=".vc_custom_1477392893631{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_column_text css_animation="top-to-bottom"]
<h5 style="text-align: center;">Our Clients</h5>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1495030137939{margin-top: -20px !important;padding-bottom: 50px !important;}"]
<h2 style="text-align: center;">Companies that have entrusted their
products to our designers and developers.</h2>
[/vc_column_text][vc_row_inner gap="35"][vc_column_inner width="1/4"][vc_single_image image="739" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]With Aero  you’re getting 6 pre-built layouts. Any of them can be imported to your WordPress with one click.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="740" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]With Hatch theme, you’ll be able to build the most awesome website for your business.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="741" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]Header behaviour is determined by scroll amount, which can be set in theme options.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="742" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]You can build almost any type of layout using drag &amp; drop. No coding or shortcodes involved.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35"][vc_column_inner width="1/4"][vc_single_image image="743" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]With Aero  you’re getting 6 pre-built layouts. Any of them can be imported to your WordPress with one click.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="744" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]With Hatch theme, you’ll be able to build the most awesome website for your business.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="745" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]Header behaviour is determined by scroll amount, which can be set in theme options.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="746" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]You can build almost any type of layout using drag &amp; drop. No coding or shortcodes involved.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'CTA 03', 'stash' );
	$data['custom_class'] = 'hgr_template cta-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="848" el_class="dark-scheme" css=".vc_custom_1499169362275{padding-top: 100px !important;padding-bottom: 100px !important;}" el_id="call-to-action-3"][vc_row full_width="stretch_row" css_animation="fadeInDown"][vc_column][vc_column_text css_animation="fadeIn"]
<h5 style="text-align: center;">Get in touch</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496686885713{margin-top: -20px !important;}"]
<h2 style="text-align: center;">Want to work with us ?</h2>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496686891781{margin-top: -10px !important;}"]
<p style="text-align: center;">When you purchase Stash, you get professional support and lifetime updates. There’s a full time support team taking care of your requests every day, usually answering in less than 24h.</p>

[/vc_column_text][vc_btn title="CONTACT US NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 09', 'stash' );
	$data['custom_class'] = 'hgr_template hero-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="22" el_class="dark-scheme" css=".vc_custom_1499170367107{padding-top: 260px !important;padding-bottom: 200px !important;}" el_id="hero-9"][vc_row][vc_column][vc_column_text css_animation="fadeInDown"]
<h1 style="text-align: center;">Online Agency</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">Manage multiple footers easily using WP Custom Posts.
No widgets, no pre-formatted elements, no fixed layouts.

[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 14', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-14';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" css=".vc_custom_1499170394104{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 75px !important;background-color: #000000 !important;border-top-color: rgba(233,236,239,0.07) !important;border-top-style: solid !important;border-bottom-color: rgba(233,236,239,0.07) !important;border-bottom-style: solid !important;}" el_class="dark-scheme" el_id="testimonials-14"][vc_row equal_height="yes"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]
<h3 style="text-align: center;">"Aero is a stunning WordPress theme packed with the best website building features: Visual Composer, Revolution Slider, Powerful Theme Options Panel, 80+ Page Elements, Header Layouts and many more."</h3>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h5 style="text-align: center;">Jeffrey Lynch</h5>
<p style="text-align: center;"><em>CEO @ HighGrade Lab</em></p>

[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Services 08', 'stash' );
	$data['custom_class'] = 'hgr_template services-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/services/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="dark-scheme" css=".vc_custom_1499170417493{background-color: #292929 !important;}" el_id="services-8"][vc_row css=".vc_custom_1495032336324{padding-top: 100px !important;padding-bottom: 40px !important;}"][vc_column][vc_column_text css_animation="fadeIn"]
<h5 style="text-align: center;">Services</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693076135{margin-top: -20px !important;}"]
<h2 style="text-align: center;">What we do</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="20"][vc_column width="1/3"][vc_row_inner][vc_column_inner][hgr_animicon animicon_icon="si-diamond" animicon_iconcolor="#6b6b6b" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1496147978795{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693097758{margin-top: -10px !important;}"]
<h4 style="text-align: center;">App Testing</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693101893{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#6b6b6b" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1496147982943{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693106210{margin-top: -10px !important;}"]
<h4 style="text-align: center;">Security Audits</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693101893{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][hgr_animicon animicon_icon="si-bag-alt-two" animicon_iconcolor="#6b6b6b" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1496147986963{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693110428{margin-top: -10px !important;}"]
<h4 style="text-align: center;">eCommerce</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693101893{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row gap="20" css=".vc_custom_1495032346079{padding-bottom: 100px !important;}"][vc_column width="1/3"][vc_row_inner][vc_column_inner][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#6b6b6b" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1496147991293{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693139937{margin-top: -10px !important;}"]
<h4 style="text-align: center;">SaaS Development</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693101893{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][hgr_animicon animicon_icon="bi-flowchart" animicon_iconcolor="#6b6b6b" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1496147995422{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693143543{margin-top: -10px !important;}"]
<h4 style="text-align: center;">Content Strategy</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693101893{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][hgr_animicon animicon_icon="bi-globe" animicon_iconcolor="#6b6b6b" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="100" animicon_alignment="center" animicon_background_type="none" custom_link="none" css=".vc_custom_1496148001076{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693147453{margin-top: -10px !important;}"]
<h4 style="text-align: center;">CMS Development</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693101893{margin-top: -30px !important;}"]
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elitt elit tellus, luctus nec.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Features 23', 'stash' );
	$data['custom_class'] = 'hgr_template features-23';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="dark-scheme" css=".vc_custom_1499170430936{border-top-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #292929 !important;border-top-color: #1e1e1e !important;border-top-style: solid !important;}" el_id="features-23"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>Amazing Features</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.

As a professional, you want to show the world you have arrived and are going places. You need your web presence to be seamless, reliable and easy to create and maintain.[/vc_column_text][/vc_column][vc_column css_animation="flipInX" width="1/4" css=".vc_custom_1496693228999{padding-top: 40px !important;padding-bottom: 40px !important;}"][hgr_content_box icon_type="selector" icon="fa fa-check" icon_size="32" icon_color="#ffffff" icon_color_hover="#000000" title_normal="40+ Demos" normal_title_color="#ffffff" hover_title_color="#000000" desc_normal="Because you have better things to do, like create, sell and grow your business." normal_desc_color="#dcdff2" hover_desc_color="#4b555f" normal_background_type="none" normal_border_type="custom-normal-border" normal_border_width="2" normal_border_color="#ffffff" hover_background_type="custom-hover-color" hover_background_color="#ffffff" hover_border_type="custom-hover-border" hover_border_width="2" hover_border_color="#ffffff" nh_border_roundness="0" custom_link="#" cb_extra_class=""][/vc_column][vc_column css_animation="flipInX" width="1/4"][hgr_content_box icon_type="selector" icon="fa fa-th" icon_size="32" icon_color="#ffffff" icon_color_hover="#000000" title_normal="200+ Sections" normal_title_color="#ffffff" hover_title_color="#000000" desc_normal="Stash is a bundle of 200+ proven template designs, created to get you online fast." normal_desc_color="#dcdff2" hover_desc_color="#4b555f" normal_background_type="none" normal_border_type="custom-normal-border" normal_border_width="2" normal_border_color="#ffffff" hover_background_type="custom-hover-color" hover_background_color="#ffffff" hover_border_type="custom-hover-border" hover_border_width="2" hover_border_color="#ffffff" nh_border_roundness="0" custom_link="#" cb_extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Clients 08', 'stash' );
	$data['custom_class'] = 'hgr_template clients-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/clients/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_class="dark-scheme" css=".vc_custom_1499170460999{background-color: #292929 !important;}" el_id="clients-8"][vc_row full_width="stretch_row" css=".vc_custom_1477392893631{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]
<h5 style="text-align: center;">Our Clients</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496693243551{margin-top: -20px !important;padding-bottom: 50px !important;}"]
<h2 style="text-align: center;">Companies that have entrusted their
products to our designers and developers.</h2>
[/vc_column_text][vc_row_inner gap="35"][vc_column_inner width="1/4"][vc_single_image image="860" img_size="full" el_class="image-opacity"][vc_column_text]With Aero  you’re getting 6 pre-built layouts. Any of them can be imported to your WordPress.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="859" img_size="full" el_class="image-opacity"][vc_column_text]With Hatch theme, you’ll be able to build the most awesome website for your business.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="858" img_size="full" el_class="image-opacity"][vc_column_text]Header behaviour is determined by scroll amount, which can be set in theme options.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="860" img_size="full" el_class="image-opacity"][vc_column_text]You can build almost any type of layout using drag &amp; drop. No coding or shortcodes involved.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35"][vc_column_inner width="1/4"][vc_single_image image="858" img_size="full" el_class="image-opacity"][vc_column_text]With Aero  you’re getting 6 pre-built layouts. Any of them can be imported to your WordPress.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="857" img_size="full" el_class="image-opacity"][vc_column_text]With Hatch theme, you’ll be able to build the most awesome website for your business.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="856" img_size="full" el_class="image-opacity"][vc_column_text]Header behaviour is determined by scroll amount, which can be set in theme options.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="855" img_size="full" el_class="image-opacity"][vc_column_text]You can build almost any type of layout using drag &amp; drop. No coding or shortcodes involved.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 28', 'stash' );
	$data['custom_class'] = 'hgr_template hero-28';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="hero-28" el_class="light-scheme" css=".vc_custom_1499170657058{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row parallax="content-moving" parallax_image="308" css=".vc_custom_1496151950178{padding-top: 500px !important;}"][vc_column][/vc_column][/vc_row][vc_row css=".vc_custom_1496151644800{margin-top: -100px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text css=".vc_custom_1496151522569{padding-top: 35px !important;padding-bottom: 35px !important;background-color: #ffffff !important;}"]
<h1 style="text-align: center;">Best Furniture Store</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1496152502775{margin-top: -30px !important;}"]
<p style="text-align: center;">We have included full WooCommerce Integration and all pages are custom styled and ready to use. There is also a dedicated tab in theme options that gives you full control when styling your shop.</p>

[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Features 24', 'stash' );
	$data['custom_class'] = 'hgr_template features-24';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_class="light-scheme" css=".vc_custom_1499170690012{margin-right: 0px !important;margin-left: 0px !important;padding-top: 50px !important;padding-right: 0px !important;padding-bottom: 75px !important;padding-left: 0px !important;background-color: #ffffff !important;}" el_id="features-24"][vc_row css=".vc_custom_1496151393317{margin-right: 0px !important;margin-left: 0px !important;padding-right: 30px !important;padding-left: 30px !important;}"][vc_column width="1/3"][vc_row_inner css=".vc_custom_1495546122560{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 10px !important;padding-right: 10px !important;padding-bottom: 10px !important;padding-left: 10px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_column_inner css=".vc_custom_1495546173118{padding-top: 0px !important;}"][hgr_animicon animicon_icon="si-wallet" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496152309960{margin-left: -15px !important;}"][vc_column_text]
<h4>It’s Personal</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496152395249{margin-top: -20px !important;margin-bottom: 0px !important;padding-bottom: 20px !important;}"]
<p style="text-align: justify;">You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner css=".vc_custom_1495546129084{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 10px !important;padding-right: 10px !important;padding-bottom: 10px !important;padding-left: 10px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_column_inner css=".vc_custom_1495546177318{padding-top: 0px !important;}"][hgr_animicon animicon_icon="bi-scissor" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496152343620{margin-left: -15px !important;}"][vc_column_text]
<h4>OneClick Install</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496152412383{margin-top: -20px !important;margin-bottom: 0px !important;padding-bottom: 20px !important;}"]
<p style="text-align: justify;">You can relax knowing MAKR is managed by a team of 4 professionals who got more than seven years of experience in wordpress.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner css=".vc_custom_1495546135721{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 10px !important;padding-right: 10px !important;padding-bottom: 10px !important;padding-left: 10px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_column_inner css=".vc_custom_1495546181537{padding-top: 0px !important;}"][hgr_animicon animicon_icon="si-delivery-van" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496152322426{margin-left: -15px !important;}"][vc_column_text]
<h4>Free Shiping</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496152424598{margin-top: -20px !important;margin-bottom: 0px !important;padding-bottom: 20px !important;}"]
<p style="text-align: justify;">It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Features 25', 'stash' );
	$data['custom_class'] = 'hgr_template features-25';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" css=".vc_custom_1499170703073{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 0px !important;background-color: #f8f8f8 !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_class="light-scheme" el_id="features-25"][vc_row full_width="stretch_row" equal_height="yes" content_placement="middle"][vc_column width="1/2" css=".vc_custom_1496154755297{padding-top: 20px !important;padding-bottom: 0px !important;padding-left: 20px !important;background-image: url(http://highgradelab.com/stash/furniture-shop/wp-content/uploads/sites/74/2016/12/collection-2.jpg?id=330) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_text]
<h5 style="text-align: left;">BRAND NEW</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496154792390{margin-top: -35px !important;}"]
<h3>Le Sofa</h3>
[/vc_column_text][vc_column_text css=".vc_custom_1496154307005{margin-bottom: 20px !important;}"]<strong><a class="link-curtain" href="#">Buy Now</a></strong>[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1496154262656{padding-top: 20px !important;padding-bottom: 0px !important;padding-left: 20px !important;background-image: url(http://highgradelab.com/stash/furniture-shop/wp-content/uploads/sites/74/2016/12/new.jpg?id=171) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_text]
<h5 style="text-align: left;">BRAND NEW</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496154217186{margin-top: -35px !important;}"]
<h3>The Lamp</h3>
[/vc_column_text][vc_column_text css=".vc_custom_1496154307005{margin-bottom: 20px !important;}"]<strong><a class="link-curtain" href="#">Buy Now</a></strong>[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1496154475046{padding-top: 20px !important;padding-bottom: 0px !important;padding-left: 20px !important;background-image: url(http://highgradelab.com/stash/furniture-shop/wp-content/uploads/sites/74/2016/12/collection.jpg?id=324) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_text]
<h5 style="text-align: left;">2017 Living</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496154221991{margin-top: -35px !important;}"]
<h3>Collections</h3>
[/vc_column_text][vc_column_text css=".vc_custom_1496154310809{margin-bottom: 20px !important;}"]<strong><a class="link-curtain" href="#">View More</a></strong>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	$data = array();
	$data['name'] = __( 'Clients 03', 'stash' );
	$data['custom_class'] = 'hgr_template clients-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/clients/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="clients-3" el_class="light-scheme" css=".vc_custom_1499170726472{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_row][vc_column][hgr_logocarousel carousel_items_number_max="5" carousel_items_number_desktop="4" carousel_items_number_desktop_small="3" carousel_items_number_tablet="2" carousel_autoplay="yes" display_pagination="" carousel_extra_class=""][hgr_logocarousel_item item_image="184" item_link_settings="link-off"][hgr_logocarousel_item item_image="183" item_link_settings="link-off"][hgr_logocarousel_item item_image="182" item_link_settings="link-off"][hgr_logocarousel_item item_image="181" item_link_settings="link-off"][hgr_logocarousel_item item_image="180" item_link_settings="link-off"][hgr_logocarousel_item item_image="179" item_link_settings="link-off"][hgr_logocarousel_item item_image="181" item_link_settings="link-off"][/hgr_logocarousel][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Hero 01', 'stash' );
	$data['custom_class'] = 'hgr_template hero-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="733" el_id="hero-1" el_class="dark-scheme"][vc_row full_width="stretch_row" full_height="yes" css_animation="fadeIn" el_class="dark-scheme" css=".vc_custom_1496698073306{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_column_text]
<h1>Create your
perfect website using
<em>Stash</em> theme.</h1>
[/vc_column_text][vc_column_text]
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">

We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.</div>
</div>
</div>
[/vc_column_text][vc_row_inner css=".vc_custom_1488980827718{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1488980823498{padding-right: 0px !important;padding-left: 0px !important;}"][vc_btn title="PURCHASE NOW <em>for</em> $59" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="lg" align="left" css=".vc_custom_1489584668329{padding-top: 15px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1488981003292{padding-top: 32px !important;}"]<strong><a class="underline-after-first" href="#">[icon name="fa fa-play"] VIEW ALL SECTIONS</a></strong>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'About 17', 'stash' );
	$data['custom_class'] = 'hgr_template about-17';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" css=".vc_custom_1499172446174{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}" el_class="light-scheme" el_id="about-17"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h5 style="text-align: center;"><strong>About</strong></h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1495637185522{margin-top: -20px !important;padding-bottom: 35px !important;}"]
<h2 style="text-align: center;">What we do</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" equal_height="yes" css_animation="fadeIn"][vc_column width="1/4"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">One Click Demo Import</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495637441093{margin-top: -30px !important;}"]
<p style="text-align: center;">Build almost any type of layout using drag &amp; drop.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][hgr_animicon animicon_icon="bi-gear" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Extensive Theme Options</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495637458722{margin-top: -30px !important;}"]
<p style="text-align: center;">Get full customisation freedom with no need for custom coding.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">80+ Page Elements</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495637464150{margin-top: -30px !important;}"]
<p style="text-align: center;">Imports all content and settings, exactly as in the preview.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Awesome Header Styles</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495637429243{margin-top: -30px !important;}"]
<p style="text-align: center;">Build almost any type of layout using drag &amp; drop.</p>

[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Video 01', 'stash' );
	$data['custom_class'] = 'hgr_template video-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/video/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="video-1" el_class="light-scheme" css=".vc_custom_1499172458889{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 120px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row gap="35" equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>Visual Page Builder with
80+ Page Elements</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code.

You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_single_image image="743" img_size="full" alignment="center" onclick="custom_link" css_animation="fadeIn" link="https://www.youtube.com/watch?v=nrJtHemSPW4" el_class="venoboxDiv column-shadow"][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1490775877705{padding-top: 30px !important;padding-bottom: 20px !important;}"][vc_column][vc_separator color="custom" accent_color="#eeeeef"][/vc_column][/vc_row][vc_row gap="35"][vc_column css_animation="fadeIn" width="1/3"][vc_column_text]
<h4>Awesome Header Styles</h4>
[/vc_column_text][vc_column_text]Thanks to one of the most popular plugins on the market (Visual Composer), you can build almost any type of layout.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_column_text]
<h4>Drag &amp; Drop Footer Builder</h4>
[/vc_column_text][vc_column_text]Manage multiple footers easily using WP Custom Posts. No widgets, no pre-formatted elements, no fixed layouts.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_column_text]
<h4>Powerful Theme Options</h4>
[/vc_column_text][vc_column_text]Based on the already popular Redux framework, Falcon’s Theme Options panel gives you total customisation freedom.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	

	

	
	
	
	$data = array();
	$data['name'] = __( 'Pricing 04', 'stash' );
	$data['custom_class'] = 'hgr_template pricing-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/pricing/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="758" parallax_speed_bg="2.5" css=".vc_custom_1499172536355{padding-top: 100px !important;padding-bottom: 150px !important;}" el_id="pricing-4"][vc_row full_width="stretch_row" css_animation="fadeIn"][vc_column][vc_row_inner css=".vc_custom_1495706994280{margin-bottom: 50px !important;}" el_class="dark-scheme"][vc_column_inner width="5/6"][vc_column_text css_animation="fadeIn"]
<h3>Before they sold out green juice artisan kitsch, poutine mlkshk DIY pok pok meditation VHS gluten-free tbh bushwick microdosing. Street art chia messenger bag keffiyeh godard.</h3>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_btn title="GET HELP" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#ffffff" outline_custom_hover_text="#1c46f2" align="left" i_icon_fontawesome="fa fa-life-ring" css_animation="fadeIn" add_icon="true" css=".vc_custom_1496698202806{padding-top: 10px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1474460496648{margin-top: 50px !important;background-color: #ffffff !important;border-radius: 10px !important;}"][vc_column_inner el_class="light-scheme" width="1/4" css=".vc_custom_1495707021060{border-right-width: 1px !important;padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;border-right-color: #e2e2e2 !important;border-right-style: dashed !important;}"][vc_column_text css=".vc_custom_1495707601665{border-bottom-width: 1px !important;padding-top: 30px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 20px !important;border-bottom-color: #e2e2e2 !important;border-bottom-style: dashed !important;}"]
<h4 style="text-align: center;">Free</h4>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">1000 Visitors per month</p>

[/vc_column_text][vc_column_text css=".vc_custom_1474460566242{margin-top: -10px !important;}"]
<p style="text-align: center;">1 Gb Storage</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156078669{margin-top: -10px !important;}"]
<p style="text-align: center;">1 Custom domian</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156121664{margin-top: -10px !important;}"]
<p style="text-align: center;">-</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156117277{margin-top: -10px !important;}"]
<p style="text-align: center;">-</p>

[/vc_column_text][vc_btn title="GET STARTED" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css=".vc_custom_1495709544882{padding-bottom: 20px !important;}"][/vc_column_inner][vc_column_inner el_class="light-scheme" width="1/4" css=".vc_custom_1495707018202{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_column_text css=".vc_custom_1495709842955{border-bottom-width: 1px !important;padding-top: 30px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 20px !important;border-bottom-color: #e2e2e2 !important;border-bottom-style: dashed !important;}"]
<h4 style="text-align: center;">60$</h4>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">2000 Visitors per month</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156218116{margin-top: -10px !important;}"]
<p style="text-align: center;">5 Gb Storage</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156132045{margin-top: -10px !important;}"]
<p style="text-align: center;">5 Custom domian</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156144373{margin-top: -10px !important;}"]
<p style="text-align: center;">Custom Server</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156166378{margin-top: -10px !important;}"]
<p style="text-align: center;">Auto-Fill Forms</p>

[/vc_column_text][vc_btn title="GET STARTED" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css=".vc_custom_1495709544882{padding-bottom: 20px !important;}"][/vc_column_inner][vc_column_inner el_class="pricing-recommended dark-scheme column-shadow " width="1/4" css=".vc_custom_1495709955308{margin-top: -20px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;background-color: #232323 !important;border-radius: 10px !important;}"][vc_column_text css=".vc_custom_1495710068272{border-bottom-width: 1px !important;padding-top: 32px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 20px !important;border-bottom-color: #777777 !important;border-bottom-style: dashed !important;}"]
<h2 style="text-align: center;">99$</h2>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">4000 Visitors per month</p>

[/vc_column_text][vc_column_text css=".vc_custom_1495707047481{margin-top: -10px !important;}"]
<p style="text-align: center;">20 Gb Storage</p>

[/vc_column_text][vc_column_text css=".vc_custom_1495707561820{margin-top: -10px !important;}"]
<p style="text-align: center;">20 Custom Domain</p>

[/vc_column_text][vc_column_text css=".vc_custom_1495707572210{margin-top: -10px !important;}"]
<p style="text-align: center;">Dedicated Server</p>

[/vc_column_text][vc_column_text css=".vc_custom_1495707579919{margin-top: -10px !important;}"]
<p style="text-align: center;">Auto-Fill Forms<span style="color: #f5f5f5;">
</span>

[/vc_column_text][vc_btn title="GET STARTED" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css=".vc_custom_1495709544882{padding-bottom: 20px !important;}"][/vc_column_inner][vc_column_inner el_class="light-scheme" width="1/4" css=".vc_custom_1495707025158{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_column_text css=".vc_custom_1495709870518{border-bottom-width: 1px !important;padding-top: 30px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 20px !important;border-bottom-color: #e2e2e2 !important;border-bottom-style: dashed !important;}"]
<h4 style="text-align: center;">399$</h4>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">10000 Visitors per month</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156251829{margin-top: -10px !important;}"]
<p style="text-align: center;">unlimited Gb Storage</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156268112{margin-top: -10px !important;}"]
<p style="text-align: center;">unlimited Domains</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156283371{margin-top: -10px !important;}"]
<p style="text-align: center;">Dedicated Server</p>

[/vc_column_text][vc_column_text css=".vc_custom_1482156300311{margin-top: -10px !important;}"]
<p style="text-align: center;">Free Plug-ins</p>

[/vc_column_text][vc_btn title="GET STARTED" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css=".vc_custom_1495709544882{padding-bottom: 20px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'CTA 11', 'stash' );
	$data['custom_class'] = 'hgr_template cta-11';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" css=".vc_custom_1499172564566{padding-top: 60px !important;padding-bottom: 50px !important;background-color: #1c46f2 !important;}" el_class="dark-scheme" el_id="call-to-action-11"][vc_row][vc_column][vc_column_text css_animation="none"]
<h2 style="text-align: center;"><strong>Unique Homepage Designs</strong></h2>
[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1482157734982{margin-top: -30px !important;}"]
<p style="text-align: center;">Great collection of 6 homepages, developed for small and medium businesses.
Use One Click Import to get a head start and save valuable time when building your website.

[/vc_column_text][vc_btn title="GET STARTED" style="custom" custom_background="#ffffff" custom_text="#1c46f2" align="center" css_animation="none"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	

	
	
	$data = array();
	$data['name'] = __( 'Promo 14', 'stash' );
	$data['custom_class'] = 'hgr_template promo-14';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" content_placement="middle" el_id="promo-14" el_class="light-scheme" css=".vc_custom_1499177045567{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">

There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.</div>
</div>
</div>
[/vc_column_text][vc_row_inner css=".vc_custom_1496911032354{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1496911043255{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text css_animation="fadeIn"]
<h2><strong>100+</strong></h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675784798{margin-top: -30px !important;}"]
<h5>Clients</h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1496911047090{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text css_animation="fadeIn"]
<h2><strong>250+</strong></h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675794235{margin-top: -30px !important;}"]
<h5>Projects</h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1496911051274{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text css_animation="fadeIn"]
<h2><strong>17</strong></h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675802145{margin-top: -30px !important;}"]
<h5>Team Members</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_single_image image="101" img_size="full" alignment="center"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'About 04', 'stash' );
	$data['custom_class'] = 'hgr_template about-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="8" css=".vc_custom_1499177163244{margin-top: 0px !important;margin-bottom: 0px !important;border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 0px !important;padding-bottom: 0px !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="about-4" el_class="light-scheme"][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle" css=".vc_custom_1495540667373{margin-top: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column css_animation="fadeIn" width="1/2"][/vc_column][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496655753680{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 120px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;}"][vc_row_inner gap="35"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h5>About</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495540798044{margin-top: -25px !important;}"]
<h2>Create your perfect website using <em>Stash</em> theme.</h2>
[/vc_column_text][vc_column_text]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.[/vc_column_text][vc_column_text css=".vc_custom_1496655565233{margin-top: -10px !important;}"]
<p style="text-align: left;"><a class="link-curtain" href="#"><strong><span style="color: #1c46f2;">Learn More</span></strong></a></p>

[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'CTA 01', 'stash' );
	$data['custom_class'] = 'hgr_template cta-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="102" el_class="light-scheme" css=".vc_custom_1499177183002{padding-top: 75px !important;padding-bottom: 100px !important;}" el_id="call-to-action-1"][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="3412"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Stash has really helped our business. Wow what great service, I love it! This is simply unbelievable!</h2>
[/vc_column_text][vc_btn title="PURCHASE NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeInUp"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'About 07', 'stash' );
	$data['custom_class'] = 'hgr_template about-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="about-7" el_class="light-scheme" css=".vc_custom_1499177288724{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_row][vc_column width="1/2"][vc_row_inner][vc_column_inner width="5/6" css=".vc_custom_1495629362518{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1495629404324{padding-top: 10px !important;}"]
<h2>We’re using<em> good design </em>to enrich people’s lives.</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1494853912646{padding-top: 5px !important;padding-bottom: 15px !important;}"]I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do.

Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.[/vc_column_text][vc_btn title="MORE ABOUT US" style="custom" custom_background="#1c46f2" custom_text="#ffffff" css_animation="fadeIn"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner][vc_column_inner width="1/2"][hgr_animicon animicon_icon="bi-gear" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495629198808{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Very Customisable</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496662046433{margin-top: -20px !important;margin-bottom: 20px !important;}"]You will love our powerful theme options panel, because every layout option can be set.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][hgr_animicon animicon_icon="bi-mug" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495629281844{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Easy To Use</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496662050315{margin-top: -20px !important;margin-bottom: 20px !important;}"]It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1495629335359{padding-top: 10px !important;}"][vc_column_inner width="1/2"][hgr_animicon animicon_icon="bi-summit" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495629298023{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Nice &amp; Clean</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496662054006{margin-top: -20px !important;}"]Because you have better things to do, like create, sell and grow your business with beautiful website.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][hgr_animicon animicon_icon="si-diamond" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495629303177{margin-left: -20px !important;}"][vc_column_text css_animation="fadeIn"]
<h4>Well Documented</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496662058000{margin-top: -20px !important;}"]Based on the already popular Redux framework, Theme Options panel gives you total freedom.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Team 08', 'stash' );
	$data['custom_class'] = 'hgr_template team-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="team-8" el_class="light-scheme" css=".vc_custom_1499177332643{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column width="1/6"][/vc_column][vc_column css_animation="fadeIn" width="2/3"][vc_column_text]
<h2 style="text-align: center;">Our Team</h2>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">As a professional, you want to show the world you have arrived and are going places.
You need your web presence to be seamless, reliable and easy to create and maintain.

[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1492087799031{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496663511709{padding-bottom: 20px !important;}"][hgr_advimage hgr_advimage_image="43" hgr_advimage_height="288" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="5" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.85)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1496841954625{padding-bottom: 115px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a>     <a href="#">[icon name="fa fa-instagram" size="24px"]</a></p>

[/hgr_advimage][vc_column_text css=".vc_custom_1492088387499{padding-top: 30px !important;}"]
<h4 style="text-align: center;">Maria Jenkins</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492088429665{margin-top: -30px !important;}"]
<h6 style="text-align: center;"><span style="color: #8895a0;">CEO, Co-Founder</span></h6>
[/vc_column_text][vc_row_inner css=".vc_custom_1492088580830{margin-top: -10px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h6 style="text-align: center;"><span style="color: #8895a0;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</span></h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496663515377{padding-bottom: 20px !important;}"][hgr_advimage hgr_advimage_image="44" hgr_advimage_height="288" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="5" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.85)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1496841962604{padding-bottom: 115px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a>     <a href="#">[icon name="fa fa-instagram" size="24px"]</a></p>

[/hgr_advimage][vc_column_text css=".vc_custom_1492088951993{padding-top: 30px !important;}"]
<h4 style="text-align: center;">Austin Peters</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492089056303{margin-top: -30px !important;}"]
<h6 style="text-align: center;"><span style="color: #8895a0;">CFO, Co-Founder</span></h6>
[/vc_column_text][vc_row_inner css=".vc_custom_1492088580830{margin-top: -10px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h6 style="text-align: center;"><span style="color: #8895a0;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</span></h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496663519704{padding-bottom: 20px !important;}"][hgr_advimage hgr_advimage_image="45" hgr_advimage_height="288" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="5" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.85)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1496842019672{padding-bottom: 115px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a>     <a href="#">[icon name="fa fa-instagram" size="24px"]</a></p>

[/hgr_advimage][vc_column_text css=".vc_custom_1492088968316{padding-top: 30px !important;}"]
<h4 style="text-align: center;">Louis Ross</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492089065720{margin-top: -30px !important;}"]
<h6 style="text-align: center;"><span style="color: #8895a0;">Web Designer</span></h6>
[/vc_column_text][vc_row_inner css=".vc_custom_1492088580830{margin-top: -10px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h6 style="text-align: center;"><span style="color: #8895a0;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</span></h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496663527711{padding-bottom: 20px !important;}"][hgr_advimage hgr_advimage_image="46" hgr_advimage_height="288" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="5" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.85)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1496842027630{padding-bottom: 115px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a>     <a href="#">[icon name="fa fa-instagram" size="24px"]</a></p>

[/hgr_advimage][vc_column_text css=".vc_custom_1492088995125{padding-top: 30px !important;}"]
<h4 style="text-align: center;">Harry Miller</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492089087544{margin-top: -30px !important;}"]
<h6 style="text-align: center;"><span style="color: #8895a0;">Web Developer</span></h6>
[/vc_column_text][vc_row_inner css=".vc_custom_1492088580830{margin-top: -10px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h6 style="text-align: center;"><span style="color: #8895a0;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</span></h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496663531011{padding-bottom: 20px !important;}"][hgr_advimage hgr_advimage_image="47" hgr_advimage_height="288" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="5" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.85)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1496842034903{padding-bottom: 115px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a>     <a href="#">[icon name="fa fa-instagram" size="24px"]</a></p>

[/hgr_advimage][vc_column_text css=".vc_custom_1492089039665{padding-top: 30px !important;}"]
<h4 style="text-align: center;">Teresa Rice</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492089103055{margin-top: -30px !important;}"]
<h6 style="text-align: center;"><span style="color: #8895a0;">Account Manager</span></h6>
[/vc_column_text][vc_row_inner css=".vc_custom_1492088580830{margin-top: -10px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h6 style="text-align: center;"><span style="color: #8895a0;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</span></h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496663535638{padding-bottom: 20px !important;}"][hgr_advimage hgr_advimage_image="48" hgr_advimage_height="288" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="5" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.85)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="5" css=".vc_custom_1496842041759{padding-bottom: 115px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a>     <a href="#">[icon name="fa fa-instagram" size="24px"]</a></p>

[/hgr_advimage][vc_column_text css=".vc_custom_1492089027671{padding-top: 30px !important;}"]
<h4 style="text-align: center;">Robert Martin</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492089113273{margin-top: -30px !important;}"]
<h6 style="text-align: center;"><span style="color: #8895a0;">Support Manager</span></h6>
[/vc_column_text][vc_row_inner css=".vc_custom_1492088580830{margin-top: -10px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h6 style="text-align: center;"><span style="color: #8895a0;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</span></h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Services 09', 'stash' );
	$data['custom_class'] = 'hgr_template services-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/services/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="services-9" el_class="light-scheme" css=".vc_custom_1499177402495{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_row][vc_column][vc_column_text]
<h3>Join us and help create a better world. We're always looking for talented professionals. Here are the current open positions you can apply today:</h3>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="25"][vc_column width="1/3" css=".vc_custom_1457013493040{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="column-border" css=".vc_custom_1496916233150{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-right: 15px !important;padding-left: 15px !important;border-left-color: #f2f2f2 !important;border-left-style: solid !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text css=".vc_custom_1496911349439{margin-top: -10px !important;}"]
<h4 style="text-align: left;">Network Admin</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1457012813215{margin-top: -20px !important;}"]Help us grow our company and change the way our clients interact with our services.[/vc_column_text][vc_column_text css=".vc_custom_1496916408069{margin-top: -20px !important;margin-bottom: 25px !important;}"]<strong><a class="link-curtain" href="#">Read More</a></strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3" css=".vc_custom_1457013497991{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="column-border" css=".vc_custom_1496912643753{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-right: 15px !important;padding-left: 15px !important;border-left-color: #f2f2f2 !important;border-left-style: solid !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text css=".vc_custom_1496911359278{margin-top: -10px !important;}"]
<h4 style="text-align: left;">Sales Rep</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1457012813215{margin-top: -20px !important;}"]Help us grow our company and change the way our clients interact with our services.[/vc_column_text][vc_column_text css=".vc_custom_1496916417767{margin-top: -20px !important;margin-bottom: 25px !important;}"]<strong><a class="link-curtain" href="#">Read More</a></strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3" css=".vc_custom_1457013503638{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="column-border" css=".vc_custom_1496912663249{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-right: 15px !important;padding-left: 15px !important;border-left-color: #f2f2f2 !important;border-left-style: solid !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text css=".vc_custom_1496911380368{margin-top: -10px !important;}"]
<h4 style="text-align: left;">Front End Dev</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1457012813215{margin-top: -20px !important;}"]Help us grow our company and change the way our clients interact with our services.[/vc_column_text][vc_column_text css=".vc_custom_1496916421478{margin-top: -20px !important;margin-bottom: 25px !important;}"]<strong><a class="link-curtain" href="#">Read More</a></strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row gap="25"][vc_column width="1/3" css=".vc_custom_1457013493040{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="column-border" css=".vc_custom_1496912658456{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-right: 15px !important;padding-left: 15px !important;border-left-color: #f2f2f2 !important;border-left-style: solid !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text css=".vc_custom_1496911475605{margin-top: -10px !important;}"]
<h4 style="text-align: left;">Web Designer</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1457012813215{margin-top: -20px !important;}"]Help us grow our company and change the way our clients interact with our services.[/vc_column_text][vc_column_text css=".vc_custom_1496916425841{margin-top: -20px !important;margin-bottom: 25px !important;}"]<strong><a class="link-curtain" href="#">Read More</a></strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3" css=".vc_custom_1457013497991{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="column-border" css=".vc_custom_1496912673591{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-right: 15px !important;padding-left: 15px !important;border-left-color: #f2f2f2 !important;border-left-style: solid !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text css=".vc_custom_1496911482401{margin-top: -10px !important;}"]
<h4 style="text-align: left;">Sales Manager</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1457012813215{margin-top: -20px !important;}"]Help us grow our company and change the way our clients interact with our services.[/vc_column_text][vc_column_text css=".vc_custom_1496916429736{margin-top: -20px !important;margin-bottom: 25px !important;}"]<strong><a class="link-curtain" href="#">Read More</a></strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3" css=".vc_custom_1457013503638{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="column-border" css=".vc_custom_1496912668307{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-right: 15px !important;padding-left: 15px !important;border-left-color: #f2f2f2 !important;border-left-style: solid !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text css=".vc_custom_1496911490015{margin-top: -10px !important;}"]
<h4 style="text-align: left;">Sales Rep</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1457012813215{margin-top: -20px !important;}"]Help us grow our company and change the way our clients interact with our services.[/vc_column_text][vc_column_text css=".vc_custom_1496916433212{margin-top: -20px !important;margin-bottom: 25px !important;}"]<strong><a class="link-curtain" href="#">Read More</a></strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row gap="25"][vc_column width="1/3" css=".vc_custom_1457013493040{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="column-border" css=".vc_custom_1496912618042{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-right: 15px !important;padding-left: 15px !important;border-left-color: #f2f2f2 !important;border-left-style: solid !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text css=".vc_custom_1496911272553{margin-top: -10px !important;}"]
<h4 style="text-align: left;">Account Manager</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1457012813215{margin-top: -20px !important;}"]Help us grow our company and change the way our clients interact with our services.[/vc_column_text][vc_column_text css=".vc_custom_1496916437363{margin-top: -20px !important;margin-bottom: 25px !important;}"]<strong><a class="link-curtain" href="#">Read More</a></strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3" css=".vc_custom_1457013497991{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="column-border" css=".vc_custom_1496912624696{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-right: 15px !important;padding-left: 15px !important;border-left-color: #f2f2f2 !important;border-left-style: solid !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text css=".vc_custom_1496911278435{margin-top: -10px !important;}"]
<h4 style="text-align: left;">Growth Specialist</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1457012813215{margin-top: -20px !important;}"]Help us grow our company and change the way our clients interact with our services.[/vc_column_text][vc_column_text css=".vc_custom_1496916441244{margin-top: -20px !important;margin-bottom: 25px !important;}"]<strong><a class="link-curtain" href="#">Read More</a></strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3" css=".vc_custom_1457013503638{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="column-border" css=".vc_custom_1496912630587{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-right: 15px !important;padding-left: 15px !important;border-left-color: #f2f2f2 !important;border-left-style: solid !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text css=".vc_custom_1496911284260{margin-top: -10px !important;}"]
<h4 style="text-align: left;">Project Manager</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1457012813215{margin-top: -20px !important;}"]Help us grow our company and change the way our clients interact with our services.[/vc_column_text][vc_column_text css=".vc_custom_1496916445126{margin-top: -20px !important;margin-bottom: 25px !important;}"]<strong><a class="link-curtain" href="#">Read More</a></strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Features 28', 'stash' );
	$data['custom_class'] = 'hgr_template features-28';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="features-28" el_class="light-scheme" css=".vc_custom_1499177422812{padding-top: 100px !important;padding-bottom: 75px !important;background-color: #f8f8f8 !important;}"][vc_row full_width="stretch_row"][vc_column width="1/3" el_class="centered"][vc_column_text]
<h5 style="text-align: center;">WE HAVE</h5>
[/vc_column_text][vc_custom_heading text="3,600" font_container="tag:p|font_size:56|text_align:center|color:%23343434|line_height:1" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700-bold-regular%3A700%3Anormal" css=".vc_custom_1474457420047{margin-top: -30px !important;}"][vc_column_text css=".vc_custom_1474457215412{margin-top: -10px !important;}"]
<p style="text-align: center;"><strong>users per month</strong></p>

[/vc_column_text][vc_column_text]
<p style="text-align: center;">VHS beard post-ironic pok pok, normcore small batch whatever YOLO williamsburg.</p>

[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h5 style="text-align: center;">WE ANSWERED</h5>
[/vc_column_text][vc_custom_heading text="1,200" font_container="tag:p|font_size:56|text_align:center|color:%23343434|line_height:1" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700-bold-regular%3A700%3Anormal" css=".vc_custom_1474457415729{margin-top: -30px !important;}"][vc_column_text css=".vc_custom_1474457377860{margin-top: -10px !important;}"]
<p style="text-align: center;"><strong>tickets this year</strong></p>

[/vc_column_text][vc_column_text]
<p style="text-align: center;">VHS beard post-ironic pok pok, normcore small batch whatever YOLO williamsburg.</p>

[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h5 style="text-align: center;">WE HELPED</h5>
[/vc_column_text][vc_custom_heading text="10,000" font_container="tag:p|font_size:56|text_align:center|color:%23343434|line_height:1" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700-bold-regular%3A700%3Anormal" css=".vc_custom_1474457402826{margin-top: -30px !important;}"][vc_column_text css=".vc_custom_1474457410730{margin-top: -10px !important;}"]
<p style="text-align: center;"><strong>business owners</strong></p>

[/vc_column_text][vc_column_text]
<p style="text-align: center;">VHS beard post-ironic pok pok, normcore small batch whatever YOLO williamsburg.</p>

[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	$data = array();
	$data['name'] = __( 'Testimonials 15', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-15';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="testimonials-15" el_class="light-scheme" css=".vc_custom_1499177447282{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h2 style="text-align: center;">Why Join <em>Stash </em>Team?</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1495105062814{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner content_placement="top" css=".vc_custom_1494935494603{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/6"][vc_single_image image="47" img_size="64x64" alignment="center" style="vc_box_circle_2" css=".vc_custom_1496911554837{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]<i>"Thank you for making it painless, pleasant and most of all hassle free! Man, this thing is getting better and better as I learn more about it. The very best."</i>[/vc_column_text][vc_column_text css=".vc_custom_1494935521738{margin-top: -15px !important;}"]
<h5>Michael Stevens, CEO@Attractor</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner content_placement="top" css=".vc_custom_1494935494603{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/6"][vc_single_image image="44" img_size="64x64" alignment="center" style="vc_box_circle_2" css=".vc_custom_1496911566968{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]<i>"I have gotten at least 50 times the value from Stash. The service was excellent. No matter where you go, Stash is the coolest, most happening thing around! "</i>[/vc_column_text][vc_column_text css=".vc_custom_1494935664166{margin-top: -15px !important;}"]
<h5>Larry Mitchell, Republic</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1495105120477{padding-top: 25px !important;}"][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner content_placement="top" css=".vc_custom_1494935494603{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/6"][vc_single_image image="45" img_size="64x64" alignment="center" style="vc_box_circle_2" css=".vc_custom_1496911580505{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]<i>"I don't always clop, but when I do, it's because of Stash. Dude, your stuff is the bomb! I have gotten at least 50 times the value from Stash. If you aren't sure, always go for Stash."</i>[/vc_column_text][vc_column_text css=".vc_custom_1494935878235{margin-top: -15px !important;}"]
<h5>David Jones, Navy</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner content_placement="top" css=".vc_custom_1494935494603{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner width="1/6"][vc_single_image image="43" img_size="64x64" alignment="center" style="vc_box_circle_2" css=".vc_custom_1496911603276{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]<i>"You've saved our business! I was amazed at the quality of Stash. Man, this thing is getting better and better as I learn more about this awesome theme."</i>[/vc_column_text][vc_column_text css=".vc_custom_1494935914077{margin-top: -15px !important;}"]
<h5>Derrick Clark, Falcon</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1494940455135{padding-top: 50px !important;}"][vc_column css_animation="fadeIn"][vc_btn title="APPLY FOR A JOB" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Countdown 02', 'stash' );
	$data['custom_class'] = 'hgr_template countdown-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/countdown/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" css=".vc_custom_1499177838774{padding-top: 100px !important;padding-bottom: 100px !important;background: #1c46f2 url(https://source.unsplash.com/user/bueaka/likes/1920x1280?id=) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="dark-scheme" el_id="countdown-2"][vc_row css=".vc_custom_1496916559351{padding-bottom: 50px !important;}"][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1499177769373{padding-bottom: 0px !important;}"][vc_column_text css_animation="none" css=".vc_custom_1499177773852{padding-bottom: 50px !important;}"]
<h1 style="text-align: left;">We’re preparing an awesome launch.</h1>
[/vc_column_text][hgr_countdown countdown_day="25" countdown_month="December" countdown_year="2017" countdown_hour="01" countdown_minute="01" counter_font_tag="h1" counter_font_color="#ffffff" label_font_tag="h5" label_font_color="#f2f2f2" extra_class="counter"][vc_column_text css_animation="none" css=".vc_custom_1499177779006{padding-top: 30px !important;padding-bottom: 0px !important;}"]<a href="#">[icon name="fa fa-facebook" size="18px"]</a>      <a href="#">[icon name="fa fa-twitter" size="18px"]</a>     <a href="#"> [icon name="fa fa-linkedin" size="18px"] </a>     <a href="#">[icon name="fa fa-instagram" size="18px"]</a>     <a href="#"> [icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row css_animation="fadeIn" css=".vc_custom_1499177764105{margin-left: 0px !important;padding-left: 0px !important;}"][vc_column width="1/4"][vc_column_text]
<h4>ADDRESS</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496916592099{margin-top: -20px !important;}"]1791 Dogwood Lane
Wayne, NJ 07470[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<h4>CONTACT</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496916610911{margin-top: -20px !important;}"]+1-202-555-0172
<a class="underline after first" href="#">landing@stash.com</a>[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<h4>SUPPORT</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496916627852{margin-top: -20px !important;}"]+1-202-555-0177
<a class="underline after first" href="#">support@stash.com</a>[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<h4>AFFILIATES</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496916660595{margin-top: -20px !important;}"]<a class="underline after first" href="#">www.stash.com/affiliates</a>
<a class="underline after first" href="#">affiliates@stash.com</a>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Services 01', 'stash' );
	$data['custom_class'] = 'hgr_template services-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/services/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="services-1" el_class="light-scheme" css=".vc_custom_1499178047495{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;}"][vc_row gap="35"][vc_column width="1/3"][vc_row_inner el_class="column-shadow" css=".vc_custom_1495110321371{padding-right: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;}"][vc_column_inner css=".vc_custom_1495110347989{padding-top: 15px !important;}"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495110353548{margin-left: -20px !important;padding-bottom: 15px !important;}"][vc_column_text css=".vc_custom_1490953593839{margin-top: -20px !important;}"]
<h4>Awesome Header Styles</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495110210142{margin-top: -20px !important;margin-bottom: 25px !important;}"]Thanks to one of the most popular plugins on the market (Visual Composer), you can build almost any type of layout.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner el_class="column-shadow" css=".vc_custom_1495110321371{padding-right: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;}"][vc_column_inner css=".vc_custom_1495110347989{padding-top: 15px !important;}"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495110442247{margin-left: -20px !important;padding-bottom: 15px !important;}"][vc_column_text css=".vc_custom_1495110404479{margin-top: -20px !important;}"]
<h4>Drag &amp; Drop Footer Builder</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495110411847{margin-top: -20px !important;margin-bottom: 25px !important;}"]Manage multiple footers easily using WP Custom Posts. No widgets, no pre-formatted elements, no fixed layouts.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner el_class="column-shadow" css=".vc_custom_1495110321371{padding-right: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;}"][vc_column_inner css=".vc_custom_1495110347989{padding-top: 15px !important;}"][hgr_animicon animicon_icon="bi-bullseye" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495110451593{margin-left: -20px !important;padding-bottom: 15px !important;}"][vc_column_text css=".vc_custom_1495110419238{margin-top: -20px !important;}"]
<h4>Powerful Theme Options</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495110427237{margin-top: -20px !important;margin-bottom: 25px !important;}"]Based on the already popular Redux framework, Falcon’s Theme Options panel gives you total customisation freedom.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'FAQ 03', 'stash' );
	$data['custom_class'] = 'hgr_template faq-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/faq/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="faq-3" el_class="light-scheme" css=".vc_custom_1499178062289{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Frequently Asked Questions</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1493737176433{padding-top: 50px !important;}"][vc_column width="1/2" css=".vc_custom_1493737042825{border-right-width: 1px !important;border-bottom-width: 1px !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670575481{padding-right: 15px !important;padding-left: 15px !important;}"]<strong><span style="color: #1c46f2;">Q:</span> What is your Returns Policy for orders sent to the UK?</strong>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670579338{margin-top: -30px !important;padding-right: 15px !important;padding-left: 15px !important;}"]<span style="color: #1c46f2;">A:</span> You can return any item for a refund within 28 days of receiving your original order.[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1493737064345{border-bottom-width: 1px !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670583569{padding-right: 15px !important;padding-left: 15px !important;}"]<strong><span style="color: #1c46f2;">Q:</span> What is your International Returns Policy?</strong>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670587328{margin-top: -30px !important;padding-right: 15px !important;padding-left: 15px !important;}"]<span style="color: #1c46f2;">A:</span> You can return any item for a refund within 28 days of receiving your original order.[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/2" css=".vc_custom_1493737042825{border-right-width: 1px !important;border-bottom-width: 1px !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670592009{padding-right: 15px !important;padding-left: 15px !important;}"]<strong><span style="color: #1c46f2;">Q:</span> What should I do if my order hasn't been delivered yet?</strong>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670595573{margin-top: -30px !important;padding-right: 15px !important;padding-left: 15px !important;}"]<span style="color: #1c46f2;">A:</span> You can return any item for a refund within 28 days of receiving your original order.[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1493737064345{border-bottom-width: 1px !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670599510{padding-right: 15px !important;padding-left: 15px !important;}"]<strong><span style="color: #1c46f2;">Q:</span> I'm a UK customer. How do I return something to you?</strong>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670603660{margin-top: -30px !important;padding-right: 15px !important;padding-left: 15px !important;}"]<span style="color: #1c46f2;">A:</span> You can return any item for a refund within 28 days of receiving your original order.[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/2" css=".vc_custom_1493737301396{border-right-width: 1px !important;border-right-color: #e9ecef !important;border-right-style: solid !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670608229{padding-right: 15px !important;padding-left: 15px !important;}"]<strong><span style="color: #1c46f2;">Q:</span> I'm an International customer. How do I return something to you?</strong>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670611974{margin-top: -30px !important;padding-right: 15px !important;padding-left: 15px !important;}"]<span style="color: #1c46f2;">A:</span> You can return any item for a refund within 28 days of receiving your original order.[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1493737335860{border-right-width: 1px !important;border-right-color: #ffffff !important;border-right-style: solid !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670615878{padding-right: 15px !important;padding-left: 15px !important;}"]<strong><span style="color: #1c46f2;">Q:</span> What is your Returns Policy for orders sent to the UK?</strong>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496670619479{margin-top: -30px !important;padding-right: 15px !important;padding-left: 15px !important;}"]<span style="color: #1c46f2;">A:</span> You can return any item for a refund within 28 days of receiving your original order.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	
	$data = array();
	$data['name'] = __( 'Process 03', 'stash' );
	$data['custom_class'] = 'hgr_template process-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/process/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="process-3" el_class="light-scheme" css=".vc_custom_1499178310064{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h2 style="text-align: center;">Process and Working Steps</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1492089379088{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/4"][hgr_animicon animicon_icon="bi-doc" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_icon icon_fontawesome="fa fa-sort-asc" color="custom" size="xs" align="center" custom_color="#bdc7d1"][vc_column_text css=".vc_custom_1492089428547{margin-top: -30px !important;}"]
<h4 style="text-align: center;">Project Brief</h4>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_icon icon_fontawesome="fa fa-sort-asc" color="custom" size="xs" align="center" custom_color="#bdc7d1"][vc_column_text css=".vc_custom_1492089966715{margin-top: -30px !important;}"]
<h4 style="text-align: center;">Research</h4>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_icon icon_fontawesome="fa fa-sort-asc" color="custom" size="xs" align="center" custom_color="#bdc7d1"][vc_column_text css=".vc_custom_1492089977369{margin-top: -30px !important;}"]
<h4 style="text-align: center;">Development</h4>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][hgr_animicon animicon_icon="bi-clock" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_icon icon_fontawesome="fa fa-sort-asc" color="custom" size="xs" align="center" custom_color="#bdc7d1"][vc_column_text css=".vc_custom_1492090006430{margin-top: -30px !important;}"]
<h4 style="text-align: center;">Testing &amp; Bug Fixing</h4>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column css_animation="fadeIn" css=".vc_custom_1496663580167{padding-right: 104px !important;padding-left: 104px !important;}" offset="vc_hidden-xs"][vc_separator color="custom" el_width="90" accent_color="#bdc7d1" css=".vc_custom_1495632404056{margin-top: -100px !important;}"][/vc_column][/vc_row][vc_row css=".vc_custom_1492089849793{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/2"][vc_column_text]
<p style="text-align: justify;">Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you.</p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_column_text]
<p style="text-align: justify;">There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Process 04', 'stash' );
	$data['custom_class'] = 'hgr_template process-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/process/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row_content" el_class="light-scheme" css=".vc_custom_1499178323280{border-top-width: 0px !important;border-bottom-width: 1px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="process-4"][vc_row equal_height="yes"][vc_column width="1/4" css=".vc_custom_1494409080019{padding-right: 30px !important;padding-left: 30px !important;background-color: #292929 !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675620155{padding-top: 20px !important;}"]
<h2><span style="color: #1c46f2;">About Us</span></h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]<span style="color: #e0e0e0;">As a professional, you want to show the world you have arrived and are going places. You need your web presence to be seamless, reliable and easy to create and maintain. Because you have better things to do.</span>[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1494409086408{padding-right: 30px !important;padding-left: 30px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675630199{padding-top: 20px !important;}"]
<h1><span style="color: #1c46f2;">01.</span></h1>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>Brief Analysis</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675638666{margin-top: -20px !important;}"]You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1494409104228{padding-right: 30px !important;padding-left: 30px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675642432{padding-top: 20px !important;}"]
<h1><span style="color: #1c46f2;">02.</span></h1>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>Strategic Planning</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675661800{margin-top: -20px !important;}"]You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience in wordpress.[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1494409100568{padding-right: 30px !important;padding-left: 30px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496677031826{padding-top: 20px !important;}"]
<h1><span style="color: #1c46f2;">03.</span></h1>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h4>Development &amp; Testing</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496675657770{margin-top: -20px !important;}"]It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	$data = array();
	$data['name'] = __( 'Features 26', 'stash' );
	$data['custom_class'] = 'hgr_template features-26';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_class="light-scheme" css=".vc_custom_1499178337380{padding-top: 100px !important;}" el_id="features-26"][vc_row full_width="stretch_row"][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Why work with us?
We're the best in our field.</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row" content_placement="bottom" css=".vc_custom_1495706260212{margin-bottom: 0px !important;padding-top: 30px !important;padding-bottom: 0px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496698147787{padding-top: 100px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-check" icon_size="18" icon_color="#ffffff" icon_background_type="icon-background-select" icon_background_color="#1c46f2" icon_background_size="48" icon_background_roundness="3" icon_background_border_width="3" icon_border_color="" contb_icon_position="contb-icon-right" content_title="15 Years of Experience" content_title_format="h4" content_title_color="#2a2a2a" content_description="Venmo 3 wolf moon leggings, blog asymmetrical cornhole scenester. Migas blog shoreditch fanny pack. 90's literally tofu, synth direct trade swag." content_description_format="p" content_desc_color="#9b9b9b" custom_link=""][hgr_icontext icon_type="selector" icon="fa fa-clock-o" icon_size="18" icon_color="#ffffff" icon_background_type="icon-background-select" icon_background_color="#1c46f2" icon_background_size="48" icon_background_roundness="3" icon_background_border_width="3" icon_border_color="" contb_icon_position="contb-icon-right" content_title="Always Deliver in Time" content_title_format="h4" content_title_color="#2a2a2a" content_description="Venmo 3 wolf moon leggings, blog asymmetrical cornhole scenester. Migas blog shoreditch fanny pack. 90's literally tofu, synth direct trade swag." content_description_format="p" content_desc_color="#9b9b9b" custom_link=""][hgr_icontext icon_type="selector" icon="fa fa-leaf" icon_size="18" icon_color="#ffffff" icon_background_type="icon-background-select" icon_background_color="#1c46f2" icon_background_size="48" icon_background_roundness="3" icon_background_border_width="3" icon_border_color="" contb_icon_position="contb-icon-right" content_title="Eco Friendly" content_title_format="h4" content_title_color="#2a2a2a" content_description="Venmo 3 wolf moon leggings, blog asymmetrical cornhole scenester. Migas blog shoreditch fanny pack. 90's literally tofu, synth direct trade swag." content_description_format="p" content_desc_color="#9b9b9b" custom_link="" css=".vc_custom_1495714663527{padding-bottom: 100px !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="83" img_size="full" alignment="center" css=".vc_custom_1496844025173{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496698151735{padding-top: 100px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-star" icon_size="18" icon_color="#ffffff" icon_background_type="icon-background-select" icon_background_color="#1c46f2" icon_background_size="48" icon_background_roundness="3" icon_background_border_width="3" icon_border_color="" contb_icon_position="contb-icon-left" content_title="ISO 9001 Certified" content_title_format="h4" content_title_color="#2a2a2a" content_description="Venmo 3 wolf moon leggings, blog asymmetrical cornhole scenester. Migas blog shoreditch fanny pack. 90's literally tofu, synth direct trade swag." content_description_format="p" content_desc_color="#9b9b9b" custom_link=""][hgr_icontext icon_type="selector" icon="fa fa-bar-chart-o" icon_size="18" icon_color="#ffffff" icon_background_type="icon-background-select" icon_background_color="#1c46f2" icon_background_size="48" icon_background_roundness="3" icon_background_border_width="3" icon_border_color="" contb_icon_position="contb-icon-left" content_title="Dedicated Consulting" content_title_format="h4" content_title_color="#2a2a2a" content_description="Venmo 3 wolf moon leggings, blog asymmetrical cornhole scenester. Migas blog shoreditch fanny pack. 90's literally tofu, synth direct trade swag." content_description_format="p" content_desc_color="#9b9b9b" custom_link=""][hgr_icontext icon_type="selector" icon="fa fa-trophy" icon_size="18" icon_color="#ffffff" icon_background_type="icon-background-select" icon_background_color="#1c46f2" icon_background_size="48" icon_background_roundness="3" icon_background_border_width="3" icon_border_color="" contb_icon_position="contb-icon-left" content_title="Multiple Awards" content_title_format="h4" content_title_color="#2a2a2a" content_description="Venmo 3 wolf moon leggings, blog asymmetrical cornhole scenester. Migas blog shoreditch fanny pack. 90's literally tofu, synth direct trade swag." content_description_format="p" content_desc_color="#9b9b9b" custom_link="" css=".vc_custom_1495714672672{padding-bottom: 100px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Counters 01', 'stash' );
	$data['custom_class'] = 'hgr_template counters-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/counters/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="counters-1" el_class="dark-scheme" css=".vc_custom_1499178347999{padding-bottom: 20px !important;background-color: #1c46f2 !important;}"][vc_row full_width="stretch_row" gap="35"][vc_column width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="42" counter_number_format="h1" counter_number_color="#ffffff" counter_units="" counter_units_color="#222222" counter_text="Features" counter_text_format="h5" counter_text_color="#ffffff" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class="" css=".vc_custom_1495112179496{margin-bottom: 35px !important;}"][/vc_column][vc_column width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="79" counter_number_format="h1" counter_number_color="#ffffff" counter_units="" counter_units_color="#222222" counter_text="Members" counter_text_format="h5" counter_text_color="#ffffff" counter_speed="7" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class="" css=".vc_custom_1495112201720{margin-bottom: 35px !important;}"][/vc_column][vc_column width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="127" counter_number_format="h1" counter_number_color="#ffffff" counter_units="" counter_units_color="#222222" counter_text="Demos" counter_text_format="h5" counter_text_color="#ffffff" counter_speed="6" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class="" css=".vc_custom_1495112213926{margin-bottom: 35px !important;}"][/vc_column][vc_column width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="88" counter_number_format="h1" counter_number_color="#ffffff" counter_units="" counter_units_color="#222222" counter_text="Members" counter_text_format="h5" counter_text_color="#ffffff" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class="" css=".vc_custom_1495112250536{margin-bottom: 35px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Team 04', 'stash' );
	$data['custom_class'] = 'hgr_template team-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section el_id="team-4" el_class="dark-scheme" css=".vc_custom_1499178414551{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row gap="35" equal_height="yes"][vc_column width="1/3"][hgr_advimage hgr_advimage_image="18" hgr_advimage_height="550" hgr_advimage_title="Jonathan Romero" hgr_advimage_title_padding="20" hgr_advimage_title_h="h4" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496835481288{padding-bottom: 1px !important;padding-left: 30px !important;}"]<em>Founder, CFO</em>[/hgr_advimage][/vc_column][vc_column width="1/3"][hgr_advimage hgr_advimage_image="17" hgr_advimage_height="550" hgr_advimage_title="John Grant" hgr_advimage_title_padding="20" hgr_advimage_title_h="h4" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496835471345{padding-bottom: 1px !important;padding-left: 30px !important;}"]<em>CEO</em>[/hgr_advimage][/vc_column][vc_column width="1/3"][hgr_advimage hgr_advimage_image="19" hgr_advimage_height="550" hgr_advimage_title="Brian Patel" hgr_advimage_title_padding="20" hgr_advimage_title_h="h4" hgr_advimage_title_color="" hgr_advimage_description_color="" hgr_advimage_overlay_color="" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496835460587{padding-bottom: 1px !important;padding-left: 30px !important;}"]<em>Art Director</em>[/hgr_advimage][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	$data = array();
	$data['name'] = __( 'Team 03', 'stash' );
	$data['custom_class'] = 'hgr_template team-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="team-3" el_class="light-scheme" css=".vc_custom_1499178426351{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 120px !important;background-color: #f2f2f2 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row gap="35" equal_height="yes" content_placement="middle"][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h2>Meet the team
Behind <em>our succes</em></h2>
[/vc_column_text][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][/vc_column][/vc_row][vc_row css_animation="fadeIn" el_class="dark-scheme" css=".vc_custom_1496655676378{padding-bottom: 30px !important;}"][vc_column width="1/3"][hgr_advimage hgr_advimage_image="20" hgr_advimage_height="360" hgr_advimage_title="" hgr_advimage_title_padding="35" hgr_advimage_title_h="h3" hgr_advimage_title_color="#ffffff" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(28,70,242,0.9)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496835580231{padding-right: 35px !important;padding-bottom: 30px !important;padding-left: 35px !important;}"]
<h4><span style="color: #ffffff;">Julia West</span></h4>
<em>Web Designer, Co-Founder</em>

&nbsp;

&nbsp;

&nbsp;

&nbsp;
<h4><a href="#">[icon color="#ffffff" name="fa fa-facebook"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-twitter"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-instagram"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-google-plus"]</a></h4>
[/hgr_advimage][/vc_column][vc_column width="1/3"][hgr_advimage hgr_advimage_image="21" hgr_advimage_height="360" hgr_advimage_title="" hgr_advimage_title_padding="35" hgr_advimage_title_h="h3" hgr_advimage_title_color="#ffffff" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="rgba(255,255,255,0.01)" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(28,70,242,0.9)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496835706499{padding-right: 35px !important;padding-bottom: 30px !important;padding-left: 35px !important;}"]
<h4><span style="color: #ffffff;">Stephanie Matthews</span></h4>
<em>PR Manager</em>

&nbsp;

&nbsp;

&nbsp;

&nbsp;
<h4><a href="#">[icon color="#ffffff" name="fa fa-facebook"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-twitter"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-instagram"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-google-plus"]</a></h4>
[/hgr_advimage][/vc_column][vc_column width="1/3"][hgr_advimage hgr_advimage_image="22" hgr_advimage_height="360" hgr_advimage_title="" hgr_advimage_title_padding="35" hgr_advimage_title_h="h3" hgr_advimage_title_color="#ffffff" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(28,70,242,0.9)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496835715557{padding-right: 35px !important;padding-bottom: 30px !important;padding-left: 35px !important;}"]
<h4><span style="color: #ffffff;">Craig Elliott</span></h4>
<em>Web Developer</em>

&nbsp;

&nbsp;

&nbsp;

&nbsp;
<h4><a href="#">[icon color="#ffffff" name="fa fa-facebook"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-twitter"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-instagram"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-google-plus"]</a></h4>
[/hgr_advimage][/vc_column][/vc_row][vc_row css_animation="fadeIn" el_class="dark-scheme"][vc_column width="1/3"][hgr_advimage hgr_advimage_image="23" hgr_advimage_height="360" hgr_advimage_title="" hgr_advimage_title_padding="35" hgr_advimage_title_h="h3" hgr_advimage_title_color="#ffffff" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="rgba(255,255,255,0.01)" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(28,70,242,0.9)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496835728390{padding-right: 35px !important;padding-bottom: 30px !important;padding-left: 35px !important;}"]
<h4><span style="color: #ffffff;">Kevin Ross</span></h4>
<em>Marketing Manager</em>

&nbsp;

&nbsp;

&nbsp;

&nbsp;
<h4><a href="#">[icon color="#ffffff" name="fa fa-facebook"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-twitter"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-instagram"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-google-plus"]</a></h4>
[/hgr_advimage][/vc_column][vc_column width="1/3"][hgr_advimage hgr_advimage_image="24" hgr_advimage_height="360" hgr_advimage_title="" hgr_advimage_title_padding="35" hgr_advimage_title_h="h3" hgr_advimage_title_color="#ffffff" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(28,70,242,0.9)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496835736397{padding-right: 35px !important;padding-bottom: 30px !important;padding-left: 35px !important;}"]
<h4><span style="color: #ffffff;">Jean Bryant</span></h4>
<em>Web Designer, Co-Founder</em>

&nbsp;

&nbsp;

&nbsp;

&nbsp;
<h4><a href="#">[icon color="#ffffff" name="fa fa-facebook"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-twitter"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-instagram"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-google-plus"]</a></h4>
[/hgr_advimage][/vc_column][vc_column width="1/3"][hgr_advimage hgr_advimage_image="25" hgr_advimage_height="360" hgr_advimage_title="" hgr_advimage_title_padding="35" hgr_advimage_title_h="h3" hgr_advimage_title_color="#ffffff" hgr_advimage_description_color="#ffffff" hgr_advimage_overlay_color="rgba(255,255,255,0.01)" hgr_advimage_border_width="0" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="#ffffff" hgr_advimage_overlay_color_hover="rgba(28,70,242,0.9)" hgr_advimage_border_width_hover="0" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1496835744181{padding-right: 35px !important;padding-bottom: 30px !important;padding-left: 35px !important;}"]
<h4><span style="color: #ffffff;">Lori Jimenez</span></h4>
<em>Support Manager</em>

&nbsp;

&nbsp;

&nbsp;

&nbsp;
<h4><a href="#">[icon color="#ffffff" name="fa fa-facebook"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-twitter"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-instagram"]</a>     <a href="#">[icon color="#ffffff" name="fa fa-google-plus"]</a></h4>
[/hgr_advimage][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Team 02', 'stash' );
	$data['custom_class'] = 'hgr_template team-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="team-2" el_class="light-scheme" css=".vc_custom_1499178449470{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column][vc_column_text css=".vc_custom_1491227274889{margin-bottom: 0px !important;padding-bottom: 10px !important;}"]
<h5 style="text-align: center;">Greatest Team ever</h5>
[/vc_column_text][vc_column_text]
<h2 style="text-align: center;">Met Our Team</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35"][vc_column width="1/3"][vc_row_inner el_class="column-shadow" css=".vc_custom_1495112478811{padding-top: 10px !important;padding-right: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;}"][vc_column_inner][vc_single_image image="22" img_size="150x150" alignment="center" style="vc_box_shadow_circle" css=".vc_custom_1496841254487{padding-bottom: 10px !important;}"][vc_column_text css=".vc_custom_1491303039308{margin-top: -20px !important;}"]
<p style="text-align: center;">Thanks to one of the most popular plugins on the market (Visual Composer), you can build almost any type of layout.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1495112051848{margin-top: -10px !important;}"]
<h5 style="text-align: center;">Mary Dixon</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491303034970{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>Promoter</em></p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner css=".vc_custom_1495112535366{padding-top: 10px !important;padding-right: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;}" el_class="column-shadow"][vc_column_inner][vc_single_image image="23" img_size="150x150" alignment="center" style="vc_box_shadow_circle" css=".vc_custom_1496841262243{padding-bottom: 10px !important;}"][vc_column_text css=".vc_custom_1495112577511{margin-top: -20px !important;}"]
<p style="text-align: center;">Manage multiple footers easily using WP Custom Posts. No widgets, no pre-formatted elements, no fixed layouts.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1495112066012{margin-top: -10px !important;}"]
<h5 style="text-align: center;">Vincent Barrett</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491303122739{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>Designer</em></p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner el_class="column-shadow" css=".vc_custom_1495112543881{padding-top: 10px !important;padding-right: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;}"][vc_column_inner][vc_single_image image="25" img_size="150x150" alignment="center" style="vc_box_shadow_circle" css=".vc_custom_1496841268601{padding-bottom: 10px !important;}"][vc_column_text css=".vc_custom_1495112581504{margin-top: -20px !important;}"]
<p style="text-align: center;">Based on the already popular Redux framework, Falcon’s Theme Options panel gives you total customisation freedom.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1495112081324{margin-top: -10px !important;}"]
<h5 style="text-align: center;">Stephanie Robinson</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491303129802{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>Developer</em></p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	
	$data = array();
	$data['name'] = __( 'Services 03', 'stash' );
	$data['custom_class'] = 'hgr_template services-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/services/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
     [vc_section full_width="stretch_row" el_id="services-3" el_class="light-scheme" css=".vc_custom_1499178735899{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;}"][vc_row css=".vc_custom_1496656996275{padding-top: 50px !important;}"][vc_column width="1/4" css=".vc_custom_1491828001000{padding-bottom: 25px !important;}"][vc_row_inner css=".vc_custom_1496842721811{border-bottom-width: 3px !important;padding-right: 20px !important;padding-bottom: 10px !important;padding-left: 20px !important;background-color: #ffffff !important;border-bottom-color: #292929 !important;border-bottom-style: solid !important;}"][vc_column_inner][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn"]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496657007054{margin-top: -30px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create,
sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4" css=".vc_custom_1491828004577{padding-bottom: 25px !important;}"][vc_row_inner css=".vc_custom_1496842728912{border-bottom-width: 3px !important;padding-right: 20px !important;padding-bottom: 10px !important;padding-left: 20px !important;background-color: #ffffff !important;border-bottom-color: #292929 !important;border-bottom-style: solid !important;}"][vc_column_inner][hgr_animicon animicon_icon="bi-summit" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn"]
<h4 style="text-align: center;">Peace Of Mind</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496657007054{margin-top: -30px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create,
sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4" css=".vc_custom_1491828007907{padding-bottom: 25px !important;}"][vc_row_inner css=".vc_custom_1496842734939{border-bottom-width: 3px !important;padding-right: 20px !important;padding-bottom: 10px !important;padding-left: 20px !important;background-color: #ffffff !important;border-bottom-color: #292929 !important;border-bottom-style: solid !important;}"][vc_column_inner][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn"]
<h4 style="text-align: center;">It’s Personal</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496657007054{margin-top: -30px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create,
sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4" css=".vc_custom_1491828011495{padding-bottom: 25px !important;}"][vc_row_inner css=".vc_custom_1496842740384{border-bottom-width: 3px !important;padding-right: 20px !important;padding-bottom: 10px !important;padding-left: 20px !important;background-color: #ffffff !important;border-bottom-color: #292929 !important;border-bottom-style: solid !important;}"][vc_column_inner][hgr_animicon animicon_icon="bi-bullseye" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text css_animation="fadeIn"]
<h4 style="text-align: center;">40+ Demos</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496657007054{margin-top: -30px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create,
sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	

	

	
	
	
		$data = array();
	$data['name'] = __( 'Hero 02', 'stash' );
	$data['custom_class'] = 'hgr_template hero-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" parallax="content-moving" parallax_image="222" el_id="hero-2" el_class="dark-scheme" css=".vc_custom_1498821493361{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column width="1/2"][vc_column_text css=".vc_custom_1495109797858{padding-left: 5px !important;}"]
<h5>GET STARTED</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495109699667{margin-top: -30px !important;}"]
<h1>Stash Makes Your
Website Better.</h1>
[/vc_column_text][vc_column_text]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="lg" align="left" css=".vc_custom_1495109930111{padding-top: 10px !important;}"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	




		$data = array();
	$data['name'] = __( 'Skills 02', 'stash' );
	$data['custom_class'] = 'hgr_template skills-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/skills/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="skills-2" el_class="light-scheme" css=".vc_custom_1498821712423{padding-top: 150px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}"][vc_row full_width="stretch_row" css=".vc_custom_1495110508554{margin-top: -20px !important;}"][vc_column width="1/2"][vc_row_inner css=".vc_custom_1490957875286{margin: 0px !important;padding: 0px !important;}"][vc_column_inner width="5/6" css=".vc_custom_1491225460049{margin-top: 0px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important;padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_column_text css=".vc_custom_1495110566110{padding-left: 5px !important;}"]
<h5>Some words</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495110579508{margin-top: -30px !important;}"]
<h2>About Us &amp; Our Skills</h2>
[/vc_column_text][vc_column_text]
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">

Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts.

You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_row_inner css=".vc_custom_1490957875286{margin: 0px !important;padding: 0px !important;}"][vc_column_inner width="5/6" css=".vc_custom_1490957886366{margin-top: 0px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important;padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-check" hgr_progressbar_icnsize="15" hgr_progressbar_icncolor="#292929" hgr_progressbar_title="Design" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#292929" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#1c46f2" hgr_progressbar_value="95" hgr_progressbar_filltime="3" hgr_progressbar_weight="3" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-check" hgr_progressbar_icnsize="15" hgr_progressbar_icncolor="#292929" hgr_progressbar_title="Development" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#292929" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#1c46f2" hgr_progressbar_value="85" hgr_progressbar_filltime="3" hgr_progressbar_weight="3" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-check" hgr_progressbar_icnsize="15" hgr_progressbar_icncolor="#292929" hgr_progressbar_title="Marketing" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#292929" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#1c46f2" hgr_progressbar_value="80" hgr_progressbar_filltime="3" hgr_progressbar_weight="3" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][hgr_progressbar hgr_progressbar_icontype="selector" hgr_progressbar_icon="fa fa-check" hgr_progressbar_icnsize="15" hgr_progressbar_icncolor="#292929" hgr_progressbar_title="Customer Support" hgr_progressbar_title_format="h4" hgr_progressbar_title_color="#292929" hgr_progressbar_basecolor="#e9ecef" hgr_progressbar_color="#1c46f2" hgr_progressbar_value="99" hgr_progressbar_filltime="3" hgr_progressbar_weight="3" hgr_progressbar_type="" hgr_progressbar_marker="yes" hgr_progressbar_extraclass=""][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	




		$data = array();
	$data['name'] = __( 'Quote 02', 'stash' );
	$data['custom_class'] = 'hgr_template quote-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/quote/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="119" parallax_speed_bg="4" css=".vc_custom_1498821524545{padding-top: 150px !important;padding-bottom: 120px !important;background-color: #f8f8f8 !important;}" el_id="quote-2" el_class="dark-scheme"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h2 style="text-align: center;">If your actions inspire others to dream more, learn more, do more and become more, you are a leader.</h2>
[/vc_column_text][vc_column_text css=".vc_custom_1490960075908{margin-top: -25px !important;}"]
<h5 style="text-align: center;">John Quincy Adams</h5>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	




		$data = array();
	$data['name'] = __( 'Video 02', 'stash' );
	$data['custom_class'] = 'hgr_template video-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/video/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="video-2" el_class="light-scheme" css=".vc_custom_1498821533697{padding-top: 150px !important;padding-bottom: 120px !important;background-color: #ffffff !important;}"][vc_row gap="35" equal_height="yes" content_placement="top"][vc_column width="1/2" css=".vc_custom_1491225823298{margin: 0px !important;padding: 0px !important;}"][vc_column_text css=".vc_custom_1495111937546{padding-left: 5px !important;}"]
<h5>Video Section</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495111943239{margin-top: -30px !important;}"]
<h2>Visual Page Builder with
80+ Page Elements</h2>
[/vc_column_text][vc_column_text]
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">

Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code.

You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.

</div>
</div>
</div>
[/vc_column_text][vc_btn title="VIEW MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" css=".vc_custom_1491227070543{padding-top: 20px !important;}"][/vc_column][vc_column width="1/2"][vc_single_image image="70" img_size="full" alignment="center" onclick="custom_link" link="https://www.youtube.com/watch?v=nrJtHemSPW4" el_class="venoboxDiv"][vc_icon type="material" icon_material="vc-material vc-material-play_circle_outline" color="white" size="xl" align="center" el_class="venoboxDiv" css=".vc_custom_1491227081865{margin-top: -280px !important;padding-bottom: 170px !important;}" link="url:https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DnrJtHemSPW4|||"][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1490775877705{padding-top: 30px !important;padding-bottom: 20px !important;}"][vc_column][vc_separator color="custom" accent_color="#eeeeef"][/vc_column][/vc_row][vc_row gap="35"][vc_column width="1/3"][vc_column_text]
<h4>Awesome Header Styles</h4>
[/vc_column_text][vc_column_text]Thanks to one of the most popular plugins on the market (Visual Composer), you can build almost any type of layout.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h4>Drag &amp; Drop Footer Builder</h4>
[/vc_column_text][vc_column_text]Manage multiple footers easily using WP Custom Posts. No widgets, no pre-formatted elements, no fixed layouts.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h4>Powerful Theme Options</h4>
[/vc_column_text][vc_column_text]Based on the already popular Redux framework, Falcon’s Theme Options panel gives you total customisation freedom.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );

	
		$data = array();
	$data['name'] = __( 'FAQ 01', 'stash' );
	$data['custom_class'] = 'hgr_template faq-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/faq/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="275" el_id="faq-1" el_class="dark-scheme" css=".vc_custom_1498821567706{padding-top: 150px !important;padding-bottom: 120px !important;}"][vc_row full_width="stretch_row" gap="35"][vc_column width="1/3"][vc_column_text]
<h4>Knowledge Base</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491297786462{margin-top: -15px !important;}"]This mistaken idea of denouncing
pleasure and praising pain.[/vc_column_text][vc_btn title="READ MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff"][/vc_column][vc_column width="1/2" css=".vc_custom_1491234914135{margin-top: 0px !important;padding-top: 0px !important;}"][vc_column_text css=".vc_custom_1495112859912{margin-top: 0px !important;padding-top: 0px !important;}"]
<h4>How Do I Install The Theme?</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491234839649{margin-top: -20px !important;padding-bottom: 20px !important;}"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.[/vc_column_text][vc_column_text]
<h4>How can I import the demo content?</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491234839649{margin-top: -20px !important;padding-bottom: 20px !important;}"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.[/vc_column_text][vc_column_text]
<h4>Do I need to activate the plugins?</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495112816397{margin-top: -20px !important;}"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	



	
		$data = array();
	$data['name'] = __( 'Subscribe 01', 'stash' );
	$data['custom_class'] = 'hgr_template subscribe-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/subscribe/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="subscribe-1" el_class="light-scheme" css=".vc_custom_1498821576168{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;border-top-color: rgba(0,0,0,0.05) !important;border-top-style: solid !important;border-bottom-color: rgba(0,0,0,0.05) !important;border-bottom-style: solid !important;}"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner el_class="column-shadow" width="2/3" css=".vc_custom_1495114483936{padding-top: 80px !important;padding-bottom: 50px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_column_text css=".vc_custom_1491295333135{margin-bottom: 0px !important;padding-bottom: 10px !important;}"]
<h5 style="text-align: center;">Keep Informed</h5>
[/vc_column_text][vc_column_text]
<h2 style="text-align: center;">Subscribe Now!</h2>
[/vc_column_text][hgr_mailchimpcollector hgr_mc_apikey="Ae032327dcef42ef538c2c39e88eef3f-us8" hgr_mc_listid="Fbd729b62e" hgr_mc_enable_disclaimer="" hgr_mc_collect_name="yes" hgr_mc_collect_lastname="" hgr_mc_collect_inputbgcolor="#f8f8f8" hgr_mc_collect_inputstextcolor="#8c8c8c" hgr_mc_collect_btnbgcolor="#1c46f2" hgr_mc_collect_btntextcolor="#ffffff" hgr_mc_collect_nstextcolor="#1c46f2" extra_class="block"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_row_inner css=".vc_custom_1491298091854{padding-top: 50px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<h4>Knowledge Base</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495113511072{margin-top: -15px !important;}"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code.[/vc_column_text][vc_column_text css=".vc_custom_1495113490382{padding-top: 30px !important;}"]
<h4>Support Forum</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495113540764{margin-top: -15px !important;}"]Based on the already popular Redux framework, Stash Theme Options panel gives you total customisation freedom.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	
	
	
		$data = array();
	$data['name'] = __( 'About 05', 'stash' );
	$data['custom_class'] = 'hgr_template about-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="about-5" el_class="dark-scheme" css=".vc_custom_1498828783505{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #1c46f2 !important;}"][vc_row content_placement="top"][vc_column width="1/2"][vc_column_text]
<h2>Branding Agency
<em>Stash</em> Theme Demo</h2>
[/vc_column_text][vc_btn title="CONTACT US NOW" style="custom" custom_background="#ffffff" custom_text="#1c46f2"][/vc_column][vc_column width="1/2"][vc_row_inner][vc_column_inner width="5/6"][vc_column_text]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress. There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	









		$data = array();
	$data['name'] = __( 'Hero 06', 'stash' );
	$data['custom_class'] = 'hgr_template hero-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="hero-6" el_class="dark-scheme" css=".vc_custom_1498830004437{margin-top: 30px !important;padding-top: 200px !important;padding-bottom: 200px !important;background: #1c46f2 url(http://highgradelab.com/stash/digital-business/wp-content/uploads/sites/33/2017/04/hero.jpg?id=11) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h1 class="hero-text" style="text-align: center;">Stash helps you build simple
yet <em>stunning</em> websites. No fuss.</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<h3 style="text-align: center;">We talked to a lot of startups, companies and recruiters
in order to design the perfect theme.</h3>
[/vc_column_text][vc_btn title="BUILD YOURS" style="custom" custom_background="#ffffff" custom_text="#1c46f2" size="lg" align="center" css_animation="fadeIn"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



	
		$data = array();
	$data['name'] = __( 'Process 01', 'stash' );
	$data['custom_class'] = 'hgr_template process-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/process/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="process-1" el_class="light-scheme" css=".vc_custom_1498830026038{padding-top: 75px !important;padding-bottom: 50px !important;background-color: #ffffff !important;}"][vc_row][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h3><strong><span style="color: #1c46f2;">01</span></strong> Brief Analysis</h3>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496656847384{margin-top: -20px !important;}"]You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496656829522{margin-top: -20px !important;}"]<strong><a class="link-curtain" href="#">Read More</a> </strong>[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h3><strong><span style="color: #1c46f2;">02</span></strong> Strategic Planning</h3>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496656860550{margin-top: -20px !important;}"]You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience in wordpress.[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496656829522{margin-top: -20px !important;}"]<strong><a class="link-curtain" href="#">Read More</a> </strong>[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h3><strong><span style="color: #1c46f2;">03</span></strong> Development &amp; Testing</h3>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496656866663{margin-top: -20px !important;}"]It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496656829522{margin-top: -20px !important;}"]<strong><a class="link-curtain" href="#">Read More</a> </strong>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	

	
		$data = array();
	$data['name'] = __( 'Team 05', 'stash' );
	$data['custom_class'] = 'hgr_template team-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="team-5" el_class="light-scheme" css=".vc_custom_1498830056023{border-top-width: 1px !important;padding-top: 75px !important;padding-bottom: 75px !important;background-color: #ffffff !important;border-top-color: #e9ecef !important;border-top-style: solid !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Our Professionals</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">As a professional, you want to show the world you have arrived and are going places.
You need your web presence to be seamless, reliable and easy to create and maintain.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row css_animation="fadeIn" css=".vc_custom_1496656925366{padding-top: 50px !important;}"][vc_column width="1/4" css=".vc_custom_1491827929110{padding-bottom: 25px !important;}"][hgr_advimage hgr_advimage_image="54" hgr_advimage_height="385" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="#292929" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.8)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1491820347095{padding-right: 35px !important;padding-bottom: 123px !important;padding-left: 35px !important;}"]
<h4 style="text-align: center;">Janice Bates</h4>
<p style="text-align: center;">Manager</p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-instagram" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a></p>
[/hgr_advimage][/vc_column][vc_column width="1/4" css=".vc_custom_1491827932149{padding-bottom: 25px !important;}"][hgr_advimage hgr_advimage_image="72" hgr_advimage_height="385" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="#292929" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.8)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1491821059415{padding-right: 35px !important;padding-bottom: 123px !important;padding-left: 35px !important;}"]
<h4 style="text-align: center;">Thomas Mitchell</h4>
<p style="text-align: center;">Sales Manager</p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-instagram" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a></p>
[/hgr_advimage][/vc_column][vc_column width="1/4" css=".vc_custom_1491827935490{padding-bottom: 25px !important;}"][hgr_advimage hgr_advimage_image="73" hgr_advimage_height="385" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="#292929" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.8)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1491821152086{padding-right: 35px !important;padding-bottom: 123px !important;padding-left: 35px !important;}"]
<h4 style="text-align: center;">Katherine Hart</h4>
<p style="text-align: center;">Marketing Executive</p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-twitter" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a></p>
[/hgr_advimage][/vc_column][vc_column width="1/4" css=".vc_custom_1491827938819{padding-bottom: 25px !important;}"][hgr_advimage hgr_advimage_image="70" hgr_advimage_height="385" hgr_advimage_title="" hgr_advimage_title_padding="250" hgr_advimage_title_h="h2" hgr_advimage_title_color="" hgr_advimage_description_color="#292929" hgr_advimage_overlay_color="" hgr_advimage_border_width="" hgr_advimage_border_color="" hgr_advimage_border_radius="0" hgr_advimage_title_color_hover="" hgr_advimage_overlay_color_hover="rgba(255,255,255,0.8)" hgr_advimage_border_width_hover="" hgr_advimage_border_color_hover="" hgr_advimage_border_radius_hover="0" css=".vc_custom_1491821139513{padding-right: 35px !important;padding-bottom: 123px !important;padding-left: 35px !important;}"]
<h4 style="text-align: center;">Mary Hansen</h4>
<p style="text-align: center;">Account Manager</p>
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin" size="24px"]</a>     <a href="#">[icon name="fa fa-facebook" size="24px"]</a>     <a href="#">[icon name="fa fa-twitter" size="24px"]</a></p>
[/hgr_advimage][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	






	
		$data = array();
	$data['name'] = __( 'CTA 02', 'stash' );
	$data['custom_class'] = 'hgr_template cta-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section parallax="content-moving" parallax_image="11" el_id="call-to-action-2" el_class="dark-scheme" css=".vc_custom_1498830153555{padding-top: 100px !important;padding-bottom: 75px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h1 style="text-align: center;">Get started today.
Boost your Business.</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">As a professional, you want to show the world you have arrived and are going places.
You need your web presence to be seamless, reliable and easy to create and maintain.</p>
[/vc_column_text][vc_btn title="GO FOR IT" style="custom" custom_background="#ffffff" custom_text="#1c46f2" align="center" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]
<h6 style="text-align: center;"><span style="color: #95a7f0;">By continuing</span>
<span style="color: #95a7f0;">you agree to our terms.</span></h6>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	







		$data = array();
	$data['name'] = __( 'Team 06', 'stash' );
	$data['custom_class'] = 'hgr_template team-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="team-6" el_class="light-scheme" css=".vc_custom_1499080431398{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 120px !important;padding-bottom: 80px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row gap="35"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496662085660{padding-right: 20px !important;}"][vc_row_inner][vc_column_inner width="5/6"][vc_column_text css_animation="fadeIn"]
<h2>Our Team</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.

No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.[/vc_column_text][vc_column_text css_animation="fadeIn"]<a class="link-curtain" href="#"><strong>Apply for a job</strong></a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3"][vc_row_inner gap="35"][vc_column_inner width="1/2"][vc_single_image image="309" img_size="full" css_animation="fadeIn" el_class="column-hover"][vc_column_text css_animation="fadeIn"]
<h5>Mark Long</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1495630421517{margin-top: -35px !important;}"]<em>CEO</em>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="311" img_size="full" css_animation="fadeIn" el_class="column-hover"][vc_column_text css_animation="fadeIn"]
<h5>Patricia Wheeler</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1495630465117{margin-top: -35px !important;}"]<em>CFO</em>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35"][vc_column_inner width="1/2"][vc_single_image image="310" img_size="full" css_animation="fadeIn" el_class="column-hover"][vc_column_text css_animation="fadeIn"]
<h5>Christine Estrada</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1495630475297{margin-top: -35px !important;}"]<em>PR Manager</em>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="312" img_size="full" css_animation="fadeIn" el_class="column-hover"][vc_column_text css_animation="fadeIn"]
<h5>Roy Guzman</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1495630485029{margin-top: -35px !important;}"]<em>Support Manager</em>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );







		$data = array();
	$data['name'] = __( 'Hero 11', 'stash' );
	$data['custom_class'] = 'hgr_template hero-11';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" el_id="hero-11" el_class="light-scheme" css=".vc_custom_1499081680359{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_single_image image="13" img_size="full" alignment="center"][vc_custom_heading text="We are Stash" font_container="tag:h1|font_size:7em|text_align:center|color:%231c46f2|line_height:1" use_theme_fonts="yes"][vc_column_text css=".vc_custom_1492082628981{padding-top: 30px !important;}"]
<h3 style="text-align: center;">We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.</h3>
[/vc_column_text][vc_btn title="LEARN MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="lg" align="center" css=".vc_custom_1492082642272{padding-top: 10px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Process 02', 'stash' );
	$data['custom_class'] = 'hgr_template process-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/process/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="process-2" el_class="light-scheme" css=".vc_custom_1499081692019{padding-top: 50px !important;padding-bottom: 20px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column css_animation="fadeIn" width="1/3"][vc_column_text]
<h4>Reliable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492083140690{margin-top: -20px !important;}"]You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_column_text]
<h4>Open Minded</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492083217515{margin-top: -20px !important;}"]You can relax knowing MAKR is managed by a team of 4 professionals who got more than seven years of experience in wordpress.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_column_text]
<h4>Innovative</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492083226514{margin-top: -20px !important;}"]It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	
	
	
	
		$data = array();
	$data['name'] = __( 'Services 04', 'stash' );
	$data['custom_class'] = 'hgr_template services-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/services/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="services-4" el_class="light-scheme" css=".vc_custom_1499081713744{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column width="1/6"][/vc_column][vc_column css_animation="fadeIn" width="2/3"][vc_column_text]
<h2 style="text-align: center;">Our Services</h2>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1492084918367{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1492085103039{margin-bottom: 30px !important;border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 25px !important;padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner][vc_single_image image="32" img_size="full" alignment="center"][vc_column_text]
<h4 style="text-align: center;">Clean Design</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492083738721{margin-top: -20px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1492085108135{margin-bottom: 30px !important;border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 25px !important;padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner][vc_single_image image="43" img_size="full" alignment="center"][vc_column_text]
<h4 style="text-align: center;">OneClick Install™</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492083738721{margin-top: -20px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1492085112972{margin-bottom: 30px !important;border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 25px !important;padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner][vc_single_image image="33" img_size="full" alignment="center"][vc_column_text]
<h4 style="text-align: center;">40+ Demos</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492083738721{margin-top: -20px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1492085118113{margin-bottom: 30px !important;border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 25px !important;padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner][vc_single_image image="34" img_size="full" alignment="center"][vc_column_text]
<h4 style="text-align: center;">Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492083738721{margin-top: -20px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1492085121724{margin-bottom: 30px !important;border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 25px !important;padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner][vc_single_image image="35" img_size="full" alignment="center"][vc_column_text]
<h4 style="text-align: center;">Premium Plugins</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492083738721{margin-top: -20px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1492085125089{margin-bottom: 30px !important;border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 25px !important;padding-right: 35px !important;padding-bottom: 25px !important;padding-left: 35px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_inner][vc_single_image image="46" img_size="full" alignment="center"][vc_column_text]
<h4 style="text-align: center;">Top Notch Support</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492083738721{margin-top: -20px !important;}"]
<p style="text-align: center;">Because you have better things to do, like create, sell and grow your business.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	
	

	



		$data = array();
	$data['name'] = __( 'Hero 13', 'stash' );
	$data['custom_class'] = 'hgr_template hero-13';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" full_height="yes" content_placement="middle" parallax="content-moving" parallax_image="13" el_id="hero-13" el_class="dark-scheme" css=".vc_custom_1499084039185{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h1 style="text-align: center;">We work with those we
truly admire.</h1>
[/vc_column_text][vc_btn title="REQUEST A <em>free</em> QUOTE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="lg" align="center" css=".vc_custom_1492595181352{padding-top: 50px !important;}"][vc_column_text]
<p style="text-align: center;"><em>Or read more about our services.</em></p>
[/vc_column_text][vc_column_text css=".vc_custom_1492595175025{padding-top: 50px !important;}"]
<h3 style="text-align: center;">We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.</h3>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	


	
		$data = array();
	$data['name'] = __( 'Promo 02', 'stash' );
	$data['custom_class'] = 'hgr_template promo-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="promo-2" el_class="light-scheme" css=".vc_custom_1499084062809{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner][vc_column_inner][vc_column_text]
<h2>We tackle creative challenges with tenacity, and we love what we do.</h2>
[/vc_column_text][vc_column_text]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1496664347131{padding-top: 20px !important;}"][vc_column_inner width="1/2"][hgr_icon icon_type="selector" icntxt_icon="outline outline-smartphone-calibrate-location" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#292929" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1492595804077{padding-top: 30px !important;}"]
<h4>40+ Demos</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492595758030{margin-top: -20px !important;}"]Because you have better things to do, like create, sell and grow your business.[/vc_column_text][vc_column_text css=".vc_custom_1496664330302{margin-top: -15px !important;}"]<a class="link-curtain" href="#"><strong>Learn More</strong></a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][hgr_icon icon_type="selector" icntxt_icon="outline outline-smartphone-shake" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#292929" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1492595836645{padding-top: 30px !important;}"]
<h4>200+ Sections</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492595852081{margin-top: -20px !important;}"]Stash is a bundle of 200+ proven template designs, created to get you online fast.[/vc_column_text][vc_column_text css=".vc_custom_1495706346438{margin-top: -15px !important;}"]<a class="link-curtain" href="#"><strong>Learn More</strong></a>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_single_image image="27" img_size="full" alignment="center"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Team 10', 'stash' );
	$data['custom_class'] = 'hgr_template team-10';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="team-10" el_class="light-scheme" css=".vc_custom_1499084079969{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h2 style="text-align: center;">Our Professionals</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="20" css=".vc_custom_1492605326571{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="35" img_size="full" alignment="center" style="vc_box_circle_2"][vc_column_text]
<h5 style="text-align: center;">Maria Jenkins</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492598213481{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>CEO, Co-Founder</em></p>
[/vc_column_text][vc_column_text css=".vc_custom_1492598218812{margin-top: -10px !important;}"]
<p style="text-align: center;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1492605266712{margin-top: -10px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>    <a href="#">[icon name="fa fa-facebook"]</a>    <a href="#">[icon name="fa fa-twitter"]</a></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="36" img_size="full" alignment="center" style="vc_box_circle_2"][vc_column_text]
<h5 style="text-align: center;">Joshua Brewer</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492605401969{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>CFO, Co-Founder</em></p>
[/vc_column_text][vc_column_text css=".vc_custom_1492598218812{margin-top: -10px !important;}"]
<p style="text-align: center;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1492605266712{margin-top: -10px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>    <a href="#">[icon name="fa fa-facebook"]</a>    <a href="#">[icon name="fa fa-twitter"]</a></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="37" img_size="full" alignment="center" style="vc_box_circle_2"][vc_column_text]
<h5 style="text-align: center;">Roy Little</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492605412859{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>PR Manager</em></p>
[/vc_column_text][vc_column_text css=".vc_custom_1492598218812{margin-top: -10px !important;}"]
<p style="text-align: center;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1492605266712{margin-top: -10px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>    <a href="#">[icon name="fa fa-facebook"]</a>    <a href="#">[icon name="fa fa-twitter"]</a></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_single_image image="38" img_size="full" alignment="center" style="vc_box_circle_2"][vc_column_text]
<h5 style="text-align: center;">Juan Reid</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492605422848{margin-top: -30px !important;}"]
<p style="text-align: center;"><em>Marketing Manager</em></p>
[/vc_column_text][vc_column_text css=".vc_custom_1492598218812{margin-top: -10px !important;}"]
<p style="text-align: center;">Product UX Designer with focus on interactive experiences &amp; mobile apps.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1492605266712{margin-top: -10px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-linkedin"]</a>    <a href="#">[icon name="fa fa-facebook"]</a>    <a href="#">[icon name="fa fa-twitter"]</a></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Testimonials 09', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="testimonials-9" el_class="light-scheme" css=".vc_custom_1499084115680{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h2 style="text-align: center;">Hundreds of Happy Users</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="10" css=".vc_custom_1496664384311{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496664838995{padding-top: 50px !important;padding-right: 35px !important;padding-bottom: 15px !important;padding-left: 35px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_row_inner][vc_column_inner width="2/3"][vc_column_text]
<h5>This is amazing!</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496664412433{margin-top: -30px !important;}"]<em>Nicole Jones, CEO@SouthC</em>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1492608717395{margin-top: -7px !important;}"]
<p style="text-align: right;">[icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"]</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_column_text]"Thanks to Stash, we've just launched our 5th website! Stash has really helped our business. Thanks for the great service. Really good."[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496664842988{padding-top: 50px !important;padding-right: 35px !important;padding-bottom: 15px !important;padding-left: 35px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_row_inner][vc_column_inner width="2/3"][vc_column_text]
<h5>Best experience ever!</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492607557446{margin-top: -30px !important;}"]<em>Jamie Jones, CEO@Hatch</em>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1492608717395{margin-top: -7px !important;}"]
<p style="text-align: right;">[icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"]</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_column_text]"Stash is worth much more than I paid. I was amazed at the quality of Stash. We can't understand how we've been living without it."[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496664847139{padding-top: 50px !important;padding-right: 35px !important;padding-bottom: 15px !important;padding-left: 35px !important;background-color: #ffffff !important;border-radius: 5px !important;}"][vc_row_inner][vc_column_inner width="2/3"][vc_column_text]
<h5>Support rules!</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1495707016377{margin-top: -30px !important;}"]<em>Sally Taylor, CEO@Tavern</em>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1492608746341{margin-top: -7px !important;}"]
<p style="text-align: right;">[icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"] [icon name="fa fa-star" color="#1c46f2"]</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_column_text]"Best. Product. Ever! I don't always clop, but when I do, it's because of Stash. Keep up the excellent work. I'd be lost without Stash."[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1492609354971{padding-top: 50px !important;}"][vc_column css_animation="fadeIn"][vc_column_text]
<p style="text-align: center;"><em>And lots of happy companies:</em></p>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="81" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="82" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="83" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="84" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="85" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column css_animation="fadeIn" width="1/6"][vc_single_image image="86" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Case Study 02', 'stash' );
	$data['custom_class'] = 'hgr_template case-study-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/case-study/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="case-study-2" el_class="light-scheme" css=".vc_custom_1499084130750{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h2 style="text-align: center;">Case Studies</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1495707597969{padding-top: 50px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="121" img_size="full" alignment="center" style="vc_box_rounded" el_class="column-hover"][vc_column_text]
<h4>Hatch Landings</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1492612258987{margin-top: -30px !important;}"]You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="122" img_size="full" alignment="center" style="vc_box_rounded" el_class="column-hover"][vc_column_text]
<h4>SouthCentral Growth</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495708001925{margin-top: -30px !important;}"]You can relax knowing Stash is managed by a team of 4 professionals who got more than seven years of experience in wordpress.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="123" img_size="full" alignment="center" style="vc_box_rounded" el_class="column-hover"][vc_column_text]
<h4>Republic Rebuild</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495708007988{margin-top: -30px !important;}"]It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from. No coding or shortcodes involved.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
		$data = array();
	$data['name'] = __( 'CTA 04', 'stash' );
	$data['custom_class'] = 'hgr_template cta-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="call-to-action-4" el_class="light-scheme" css=".vc_custom_1499084159658{padding-bottom: 150px !important;}"][vc_row css=".vc_custom_1496664464188{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 15px !important;padding-right: 35px !important;padding-bottom: 5px !important;padding-left: 35px !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_column css_animation="fadeIn" width="1/2"][vc_column_text]
<h5>Request a Quote</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492613296651{margin-top: -30px !important;}"]
<h2>Talk to One of
Our Consultants</h2>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_column_text el_class="full"][contact-form-7 title="Contact Form"][/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Promo 11', 'stash' );
	$data['custom_class'] = 'hgr_template promo-11';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499112028750{padding-top: 100px !important;padding-bottom: 60px !important;}" el_id="promo-11"][vc_row gap="35" equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_single_image image="13" img_size="full" css_animation="fadeIn"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2>We tackle creative challenges with tenacity, and we love.</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][vc_column_text css_animation="fadeIn"]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. In a day or month, you can upgrade your online presence to something else.[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	
	
	

	
	
	
		$data = array();
	$data['name'] = __( 'Testimonials 13', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-13';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="dark-scheme" css=".vc_custom_1499112097025{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}" el_id="testimonials-13"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Testimonials</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1494427172163{padding-top: 20px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="60" img_size="full" el_class="image-opacity"][vc_column_text css=".vc_custom_1494427063704{margin-top: -15px !important;}"]We’ve seen amazing results already. It’s the perfect solution for our business. No matter where you go, Stash is the coolest, most happening thing around! Stash is the most valuable business resource we have.[/vc_column_text][vc_row_inner equal_height="yes" content_placement="middle" css=".vc_custom_1494427054877{margin-top: -10px !important;}"][vc_column_inner width="1/4"][vc_single_image image="27" img_size="75x75" style="vc_box_circle_2"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]<strong>Larry Morris</strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="59" img_size="full" el_class="image-opacity"][vc_column_text css=".vc_custom_1494427063704{margin-top: -15px !important;}"]We’ve seen amazing results already. It’s the perfect solution for our business. No matter where you go, Stash is the coolest, most happening thing around! Stash is the most valuable business resource we have.[/vc_column_text][vc_row_inner equal_height="yes" content_placement="middle" css=".vc_custom_1494427054877{margin-top: -10px !important;}"][vc_column_inner width="1/4"][vc_single_image image="26" img_size="75x75" style="vc_box_circle_2"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]<strong>Larry Morris</strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_single_image image="58" img_size="full" el_class="image-opacity"][vc_column_text css=".vc_custom_1494427063704{margin-top: -15px !important;}"]We’ve seen amazing results already. It’s the perfect solution for our business. No matter where you go, Stash is the coolest, most happening thing around! Stash is the most valuable business resource we have.[/vc_column_text][vc_row_inner equal_height="yes" content_placement="middle" css=".vc_custom_1494427054877{margin-top: -10px !important;}"][vc_column_inner width="1/4"][vc_single_image image="25" img_size="75x75" style="vc_box_circle_2"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]<strong>Larry Morris</strong>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		


		$data = array();
	$data['name'] = __( 'Pricing 05', 'stash' );
	$data['custom_class'] = 'hgr_template pricing-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/pricing/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="pricing-5" el_class="light-scheme" css=".vc_custom_1499112119468{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Simple Pricing</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">As a professional, you want to show the world you have arrived and are going places.
You need your web presence to be seamless, reliable and easy to create and maintain.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="1"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496678107366{background-color: #ffffff !important;}"][vc_column_text]
<h5 style="text-align: center;">BASIC</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1494429029239{margin-top: -30px !important;border-bottom-width: 1px !important;padding-bottom: 20px !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"]
<p style="text-align: center;">For a teaste of product</p>
[/vc_column_text][vc_column_text]
<h1 style="text-align: center;">$10</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491823137127{margin-top: -30px !important;}"]
<h6 style="text-align: center;">per month</h6>
[/vc_column_text][vc_column_text css=".vc_custom_1494429096894{border-bottom-width: 1px !important;padding-right: 18px !important;padding-bottom: 20px !important;padding-left: 18px !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"]
<p style="text-align: center;">You will love our theme options panel, every layout or styling option can be set.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1499111878312{padding-right: 20px !important;padding-left: 20px !important;}"]
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Drag &amp; Drop Builder</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   1,000 Templates</p>
<p style="text-align: center;"><span style="color: #d7d9db;">[icon name="fa fa-close" color="#d7d9db"]   Blog Tools</span></p>
<p style="text-align: center;"><span style="color: #d7d9db;">[icon name="fa fa-close" color="#d7d9db"]   Photo Galleries</span></p>
[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#1c46f2" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" size="sm" align="center"][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496678114541{background-color: #ffffff !important;}"][vc_column_text]
<h5 style="text-align: center;">ENTERPRISE</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1494429029239{margin-top: -30px !important;border-bottom-width: 1px !important;padding-bottom: 20px !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"]
<p style="text-align: center;">For a teaste of product</p>
[/vc_column_text][vc_column_text]
<h1 style="text-align: center;">$59</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491823137127{margin-top: -30px !important;}"]
<h6 style="text-align: center;">per month</h6>
[/vc_column_text][vc_column_text css=".vc_custom_1494429096894{border-bottom-width: 1px !important;padding-right: 18px !important;padding-bottom: 20px !important;padding-left: 18px !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"]
<p style="text-align: center;">You will love our theme options panel, every layout or styling option can be set.</p>
[/vc_column_text][vc_column_text css=".vc_custom_1499111887063{padding-right: 20px !important;padding-left: 20px !important;}"]
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Drag &amp; Drop Builder</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   5,000 Templates</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Blog Tools</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Photo Galleries</p>
[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#1c46f2" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" size="sm" align="center"][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496678118346{background-color: #1c46f2 !important;}"][vc_column_text]
<h5 style="text-align: center;"><span style="color: #ffffff;">AGENCY</span></h5>
[/vc_column_text][vc_column_text css=".vc_custom_1494429212469{margin-top: -30px !important;border-bottom-width: 1px !important;padding-bottom: 20px !important;border-bottom-color: rgba(233,236,239,0.1) !important;border-bottom-style: solid !important;}"]
<p style="text-align: center;"><span style="color: #ffffff;">For a teaste of product</span></p>
[/vc_column_text][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">$29</span></h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491823915434{margin-top: -30px !important;}"]
<h6 style="text-align: center;"><span style="color: #ffffff;">per month</span></h6>
[/vc_column_text][vc_column_text css=".vc_custom_1494429222102{border-bottom-width: 1px !important;padding-right: 18px !important;padding-bottom: 20px !important;padding-left: 18px !important;border-bottom-color: rgba(233,236,239,0.1) !important;border-bottom-style: solid !important;}"]
<p style="text-align: center;"><span style="color: #ffffff;">You will love our theme options panel, every layout or styling option can be set.</span></p>
[/vc_column_text][vc_column_text css=".vc_custom_1499111895792{padding-right: 20px !important;padding-left: 20px !important;}"]
<p style="text-align: center;"><span style="color: #f0f0f0;">[icon name="fa fa-check"]   Drag &amp; Drop Builder</span></p>
<p style="text-align: center;"><span style="color: #f0f0f0;">[icon name="fa fa-check"]   2,000 Templates</span></p>
<p style="text-align: center;"><span style="color: #f0f0f0;">[icon name="fa fa-check"]   Blog Tools</span></p>
<p style="text-align: center;"><span style="color: #f0f0f0;">[icon name="fa fa-close"]   Photo Galleries</span></p>
[/vc_column_text][vc_btn title="GET STARTED" style="custom" custom_background="#ffffff" custom_text="#1c46f2" size="sm" align="center"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	



		$data = array();
	$data['name'] = __( 'Video 06', 'stash' );
	$data['custom_class'] = 'hgr_template video-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/video/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="video-6" el_class="light-scheme" css=".vc_custom_1499112141221{padding-top: 120px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}"][vc_row gap="35" equal_height="yes" content_placement="middle"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Visual Page Builder with
80+ Page Elements</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row gap="35" equal_height="yes" content_placement="middle"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_single_image image="37" img_size="full" alignment="center" onclick="custom_link" css_animation="fadeIn" link="https://www.youtube.com/watch?v=nrJtHemSPW4" el_class="venoboxDiv"][vc_btn title="READ MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn" css=".vc_custom_1496678187110{padding-top: 40px !important;}"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



//dark landing page

		$data = array();
	$data['name'] = __( 'Hero 24', 'stash' );
	$data['custom_class'] = 'hgr_template hero-24';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section parallax="content-moving" parallax_image="65" el_class="dark-scheme" el_id="hero-24" css=".vc_custom_1499113470778{padding-top: 200px !important;padding-bottom: 200px !important;}"][vc_row content_placement="middle" parallax="content-moving" parallax_image="109"][vc_column css_animation="fadeIn" width="2/3"][vc_column_text]
<h1>Create your
perfect website using
<em>Stash</em> theme.</h1>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1494842244238{padding-right: 35px !important;padding-bottom: 15px !important;padding-left: 35px !important;background-color: #292929 !important;border-radius: 10px !important;}"][vc_column_inner][vc_column_text]
<h2>Join now the member list !</h2>
[/vc_column_text][vc_column_text][contact-form-7 title="Join Member List"][/vc_column_text][vc_column_text css=".vc_custom_1490374136008{margin-top: -50px !important;}"]
<h6 style="text-align: left;">Have Any Questions? <span style="text-decoration: underline;"><a href="#">Contact us</a></span>.</h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Features 16', 'stash' );
	$data['custom_class'] = 'hgr_template features-16';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_class="dark-scheme" css=".vc_custom_1499113488704{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #292929 !important;}" el_id="features-16"][vc_row][vc_column width="1/6"][/vc_column][vc_column css_animation="fadeIn" width="2/3"][vc_column_text]
<h2 style="text-align: center;">Taking an image, freezing a moment, reveals how rich reality truly is.</h2>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1494236745312{padding-top: 30px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1494850813567{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-gear" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="OneClick Install" content_title_format="h4" content_title_color="#ffffff" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#dcdff2" custom_link=""][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1494850817227{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-list-alt" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Layout Builder" content_title_format="h4" content_title_color="#ffffff" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#dcdff2" custom_link=""][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1494850821016{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-laptop" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Awesome Header Styles" content_title_format="h4" content_title_color="#ffffff" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#dcdff2" custom_link=""][/vc_column][/vc_row][vc_row css=".vc_custom_1491404353665{padding-top: 20px !important;}"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1494850824730{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-download" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Drag &amp; Drop Footer Builder" content_title_format="h4" content_title_color="#ffffff" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#dcdff2" custom_link=""][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1494850828386{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-flask" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Powerful Theme Options" content_title_format="h4" content_title_color="#ffffff" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#dcdff2" custom_link=""][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1494850832444{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 10px !important;padding-left: 30px !important;}"][hgr_icontext icon_type="selector" icon="fa fa-check" icon_size="24" icon_color="#1c46f2" icon_background_type="none" contb_icon_position="contb-icon-left" content_title="Approved by Google" content_title_format="h4" content_title_color="#ffffff" content_description="Banjo etsy quinoa, gentrify kale chips retro cray copper mug forage vexillologist. " content_description_format="p" content_desc_color="#dcdff2" custom_link=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Video 07', 'stash' );
	$data['custom_class'] = 'hgr_template video-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/video/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="video-7" el_class="dark-scheme" css=".vc_custom_1499113500927{border-top-width: 1px !important;padding-top: 120px !important;padding-bottom: 100px !important;background-color: #292929 !important;border-top-color: #141414 !important;border-top-style: solid !important;}"][vc_row gap="35" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="1/2"][vc_single_image image="29" img_size="full" alignment="center" onclick="custom_link" link="https://www.youtube.com/watch?v=nrJtHemSPW4" el_class="venoboxDiv column-shadow"][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_column_text]
<h2>Visual Page Builder with
80+ Page Elements</h2>
[/vc_column_text][vc_column_text]
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">

Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code.

You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.

</div>
</div>
</div>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );






		$data = array();
	$data['name'] = __( 'Pricing 06', 'stash' );
	$data['custom_class'] = 'hgr_template pricing-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/pricing/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="pricing-6" el_class="dark-scheme" css=".vc_custom_1499113533554{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #292929 !important;}"][vc_row][vc_column css_animation="fadeIn"][vc_column_text]
<h2 style="text-align: center;">Simple Pricing</h2>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">As a professional, you want to show the world you have arrived and are going places.
You need your web presence to be seamless, reliable and easy to create and maintain.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1494241834518{padding-top: 20px !important;}"][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1494849165953{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 35px !important;padding-left: 20px !important;border-left-color: #141414 !important;border-left-style: solid !important;border-right-color: #141414 !important;border-right-style: solid !important;border-top-color: #141414 !important;border-top-style: solid !important;border-bottom-color: #141414 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;">BASIC</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491823167696{margin-top: -35px !important;}"]
<h1 style="text-align: center;">$10</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491823137127{margin-top: -30px !important;}"]
<h6 style="text-align: center;">per month</h6>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Drag &amp; Drop Builder</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   1,000 Templates</p>
<p style="text-align: center;"><span style="color: #d7d9db;">[icon name="fa fa-close" color="#d7d9db"]   Blog Tools</span></p>
<p style="text-align: center;"><span style="color: #d7d9db;">[icon name="fa fa-close" color="#d7d9db"]   Photo Galleries</span></p>
[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" size="sm" align="center"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1494849578135{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 35px !important;padding-left: 20px !important;background: #000000 url(http://highgradelab.com/stash/dark-landing-page/wp-content/uploads/sites/61/2017/05/pricing-bg.jpg?id=78) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-left-color: #292929 !important;border-left-style: solid !important;border-right-color: #292929 !important;border-right-style: solid !important;border-top-color: #292929 !important;border-top-style: solid !important;border-bottom-color: #292929 !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="dark-scheme"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;"><span style="color: #ffffff;">AGENCY</span></h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491824000580{margin-top: -35px !important;}"]
<h1 style="text-align: center;"><span style="color: #ffffff;">$29</span></h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491823915434{margin-top: -30px !important;}"]
<h6 style="text-align: center;"><span style="color: #ffffff;">per month</span></h6>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">[icon name="fa fa-check"]   Drag &amp; Drop Builder</p>
<p style="text-align: center;">[icon name="fa fa-check"]   2,000 Templates</p>
<p style="text-align: center;">[icon name="fa fa-check"]   Blog Tools</p>
<p style="text-align: center;"><span style="color: #778ff2;">[icon name="fa fa-close"]   Photo Galleries</span></p>
[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" size="sm" align="center"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner css=".vc_custom_1494849180229{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 35px !important;padding-left: 20px !important;border-left-color: #141414 !important;border-left-style: solid !important;border-right-color: #141414 !important;border-right-style: solid !important;border-top-color: #141414 !important;border-top-style: solid !important;border-bottom-color: #141414 !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;">ENTERPRISE</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1491824196523{margin-top: -35px !important;}"]
<h1 style="text-align: center;">$59</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491823137127{margin-top: -30px !important;}"]
<h6 style="text-align: center;">per month</h6>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Drag &amp; Drop Builder</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   5,000 Templates</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Blog Tools</p>
<p style="text-align: center;">[icon name="fa fa-check" color="#1c46f2"]   Photo Galleries</p>
[/vc_column_text][vc_btn title="GET STARTED" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" size="sm" align="center"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );




		$data = array();
	$data['name'] = __( 'About 12', 'stash' );
	$data['custom_class'] = 'hgr_template about-12';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="about-12" el_class="dark-scheme" css=".vc_custom_1499115061108{padding-top: 110px !important;padding-bottom: 100px !important;background-color: #141414 !important;}"][vc_row gap="20"][vc_column width="1/2"][vc_row_inner][vc_column_inner width="5/6"][vc_column_text css_animation="fadeIn"]
<h2>We’re using<em> good design </em>to enrich people’s lives.</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1494853912646{padding-top: 5px !important;padding-bottom: 15px !important;}"]I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do.

Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.[/vc_column_text][vc_btn title="MORE ABOUT US" style="custom" custom_background="#1c46f2" custom_text="#ffffff" css_animation="fadeIn"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner gap="35"][vc_column_inner width="1/2"][hgr_icon icon_type="selector" icntxt_icon="outline outline-archery-target" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#eaedf2" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491991964245{padding-top: 15px !important;}"]
<h4>Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491991933253{margin-top: -20px !important;margin-bottom: 20px !important;}"]You will love our powerful theme options panel, because every layout option can be set.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][hgr_icon icon_type="selector" icntxt_icon="outline outline-smartphone-calibrate-location" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#eaedf2" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491991970141{padding-top: 15px !important;}"]
<h4>Easy To Use</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491991940716{margin-top: -20px !important;margin-bottom: 20px !important;}"]It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35" css=".vc_custom_1491993642546{padding-top: 10px !important;}"][vc_column_inner width="1/2"][hgr_icon icon_type="selector" icntxt_icon="outline outline-trophy" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#eaedf2" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491993488909{padding-top: 10px !important;}"]
<h4>Nice &amp; Clean</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491993476987{margin-top: -20px !important;}"]Because you have better things to do, like create, sell and grow your business with beautiful website.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][hgr_icon icon_type="selector" icntxt_icon="outline outline-box-open" icntxt_iconcolor="#1c46f2" icntxt_iconcolor_hover="#eaedf2" icntxt_icnsize="48" icon_alignment="left" icon_background_type="none" custom_link="no-link"][vc_column_text css=".vc_custom_1491991809692{padding-top: 10px !important;}"]
<h4>Easy To Use</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491993605343{margin-top: -20px !important;}"]Based on the already popular Redux framework, Theme Options panel gives you total freedom.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );






		$data = array();
	$data['name'] = __( 'Team 13', 'stash' );
	$data['custom_class'] = 'hgr_template team-13';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/team/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="team-13" el_class="dark-scheme" css=".vc_custom_1499115111386{padding-top: 120px !important;padding-bottom: 80px !important;background-color: #292929 !important;}"][vc_row gap="35"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1494853952701{padding-right: 20px !important;}"][vc_row_inner][vc_column_inner width="5/6"][vc_column_text css_animation="fadeIn"]
<h2>Our Team</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.

No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.[/vc_column_text][vc_column_text]<a class="link-curtain" href="#"><strong>Apply for a job</strong></a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3"][vc_row_inner gap="35"][vc_column_inner width="1/2"][vc_single_image image="368" img_size="full" css_animation="fadeIn" el_class="column-hover"][vc_column_text css_animation="fadeIn" css=".vc_custom_1494853981014{margin-top: -20px !important;}"]
<h4>Terry Contreras</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1494854018246{margin-top: -45px !important;}"]CEO[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="367" img_size="full" css_animation="fadeIn" el_class="column-hover"][vc_column_text css_animation="fadeIn" css=".vc_custom_1494853986656{margin-top: -20px !important;}"]
<h4>Terry Contreras</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1494854023352{margin-top: -45px !important;}"]CEO[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner gap="35"][vc_column_inner width="1/2"][vc_single_image image="364" img_size="full" css_animation="fadeIn" el_class="column-hover"][vc_column_text css_animation="fadeIn" css=".vc_custom_1494854042647{margin-top: -20px !important;}"]
<h4>Terry Contreras</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1494854082643{margin-top: -45px !important;}"]CEO[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="365" img_size="full" css_animation="fadeIn" el_class="column-hover"][vc_column_text css_animation="fadeIn" css=".vc_custom_1494854051310{margin-top: -20px !important;}"]
<h4>Terry Contreras</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1494854086630{margin-top: -45px !important;}"]CEO[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );







		$data = array();
	$data['name'] = __( 'CTA 09', 'stash' );
	$data['custom_class'] = 'hgr_template cta-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="1864" css=".vc_custom_1499161301751{padding-top: 100px !important;padding-bottom: 120px !important;background-color: #1c46f2 !important;}" el_id="call-to-action-9"][vc_row gap="35" equal_height="yes" content_placement="middle" css=".vc_custom_1496059554860{background-position: 0 0 !important;background-repeat: repeat !important;}"][vc_column css_animation="fadeInDown" width="1/3" css=".vc_custom_1496684835463{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_row_inner el_class="column-shadow light-scheme" css=".vc_custom_1496060282414{padding-top: 15px !important;padding-right: 20px !important;padding-bottom: 35px !important;padding-left: 20px !important;background-color: #ffffff !important;}"][vc_column_inner][vc_column_text]
<h5 style="text-align: center;">Easy to use</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1494930253134{margin-top: -25px !important;}"]
<h4 style="text-align: center;">Inovative design</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494930177116{margin-top: -20px !important;}"]
<p style="text-align: center;">With Stash theme, you’ll be able to build the most awesome website for your business. With each purchase, you get access to a powerful framework</p>

[/vc_column_text][vc_btn title="VIEW MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="sm" align="center"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeInDown" width="2/3" css=".vc_custom_1496684828880{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="dark-scheme"][vc_column_text]
<h2>Smooth parallax effect</h2>
[/vc_column_text][vc_column_text]But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.[/vc_column_text][vc_column_text css=".vc_custom_1496059764732{margin-bottom: 0px !important;padding-bottom: 0px !important;}"]<a class="link-curtain" href="#"><strong>Contact Us</strong></a>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );




		$data = array();
	$data['name'] = __( 'Features 18', 'stash' );
	$data['custom_class'] = 'hgr_template features-18';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="dark-scheme" css=".vc_custom_1499161329924{padding-top: 75px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}" el_id="features-18"][vc_row][vc_column][vc_row_inner equal_height="yes" gap="35" css=".vc_custom_1477303286261{padding-top: 50px !important;}"][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496060704575{margin-left: -15px !important;}"][vc_column_text css_animation="top-to-bottom"]
<h4>Easy to Setup</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1477306720188{margin-top: -20px !important;}"]Tilde cray coloring book, prism master cleanse echo park authentic hot chicken kickstarter swag yuccie hell of skateboard farm-to-table etsy. Leggings listicle bespoke neutra, vinyl tbh roof party letterpress.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-search" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496060712562{margin-left: -15px !important;}"][vc_column_text css_animation="top-to-bottom"]
<h4>SEO Ready</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1477306729051{margin-top: -20px !important;}"]Locavore typewriter forage mixtape poke man braid, shoreditch actually trust fund fixie. Portland wolf edison bulb actually synth, quinoa intelligentsia pork belly pug small batch.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-mouse" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496060719626{margin-left: -15px !important;}"][vc_column_text css_animation="top-to-bottom"]
<h4>Friendly UI</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1477306738719{margin-top: -20px !important;}"]Tilde before they sold out blog, lo-fi kickstarter quinoa retro flexitarian swag chambray yuccie portland la croix deep v narwhal. Kombucha subway tile direct trade scenester iPhone.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes" gap="35" css=".vc_custom_1477303293569{padding-top: 0px !important;}"][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-flowchart" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496060726533{margin-left: -15px !important;}"][vc_column_text css_animation="top-to-bottom"]
<h4>Compatible on all Devices</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1477306748337{margin-top: -20px !important;}"]Chia locavore franzen, echo park mlkshk whatever hoodie chillwave kickstarter flexitarian activated charcoal banh mi jean shorts. Farm-to-table hot chicken food truck hexagon.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-bank" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496060732046{margin-left: -15px !important;}"][vc_column_text css_animation="top-to-bottom"]
<h4>Shop Ready</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1477306752505{margin-top: -20px !important;}"]It means that your website has been developed with a carefully planned search engine optimized content strategy based on a comprehensive keyword research and keyword strategy.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][hgr_animicon animicon_icon="bi-cup" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496060737503{margin-left: -15px !important;}"][vc_column_text css_animation="top-to-bottom"]
<h4>High Quality Images</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1477306767773{margin-top: -20px !important;}"]Quality over quantity - it's a simple concept taught to us throughout our formative years - but it's one that fits like a square peg in a round hole in today's corporate environment.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Testimonials 16', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-16';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" el_id="testimonials-16"][vc_row full_width="stretch_row" css=".vc_custom_1477389511048{padding-top: 100px !important;padding-bottom: 50px !important;}"][vc_column][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1496060961414{margin-top: -20px !important;}"]
<h5 style="text-align: center;">Couple of words about our services</h5>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1496061100026{margin-top: -20px !important;}"]
<h2 style="text-align: center;">What Our Customers Have to Say</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="35"][vc_column width="1/3" el_class="column-hover"][vc_row_inner css=".vc_custom_1494928651875{padding-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1477392032120{margin-bottom: 0px !important;margin-left: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_single_image image="155" style="vc_box_shadow_circle_2" css_animation="top-to-bottom" css=".vc_custom_1477391944159{margin-left: 0px !important;padding-left: 0px !important;}"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text css_animation="top-to-bottom"]
<h4>Bryan Jimenez</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1494928321691{margin-top: -30px !important;}"]
<h5>Invision</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1496061028554{margin-bottom: 0px !important;padding-bottom: 15px !important;}"]Needless to say we are extremely satisfied with the results. I could probably go into sales for you. Aero should be nominated for service of the year. It's exactly what I've been looking for.[/vc_column_text][/vc_column][vc_column width="1/3" el_class="column-hover"][vc_row_inner css=".vc_custom_1494928657746{padding-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1477392085415{margin-left: 0px !important;padding-left: 0px !important;}"][vc_single_image image="156" style="vc_box_shadow_circle_2" css_animation="top-to-bottom"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text css_animation="top-to-bottom"]
<h4>Jessica Murphy</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1494928301665{margin-top: -30px !important;}"]
<h5>Financiar CO.</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1496061046542{margin-bottom: 0px !important;padding-bottom: 15px !important;}"]I don't know what else to say. Aero is the most valuable business resource we have EVER purchased. Not able to tell you how happy I am with aero. It's incredible.[/vc_column_text][/vc_column][vc_column width="1/3" el_class="column-hover"][vc_row_inner css=".vc_custom_1494928664282{padding-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1477392098997{padding-left: 0px !important;}"][vc_single_image image="157" style="vc_box_shadow_circle_2" css_animation="top-to-bottom"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text css_animation="top-to-bottom"]
<h4>Roger Holmes</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1494928331156{margin-top: -30px !important;}"]
<h5>Creative Wk</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1496061051673{margin-bottom: 0px !important;padding-bottom: 15px !important;}"]I will refer everyone I know. If you want real marketing that works and effective implementation - aero's got you covered. Wow what great service, I love it! It's just amazing.[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" css=".vc_custom_1477389557598{padding-bottom: 40px !important;}"][vc_column width="1/3" el_class="column-hover"][vc_row_inner css=".vc_custom_1494928671492{padding-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1477392131817{margin-bottom: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_single_image image="158" style="vc_box_shadow_circle_2" css_animation="top-to-bottom"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text css_animation="top-to-bottom"]
<h4>Rebecca Flores</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1494928339101{margin-top: -30px !important;}"]
<h5>Smart Desk</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1496061056948{margin-bottom: 0px !important;padding-bottom: 15px !important;}"]We have no regrets! If you want real marketing that works and effective implementation - aero's got you covered. Aero is the most valuable business resource we have EVER purchased.[/vc_column_text][/vc_column][vc_column width="1/3" el_class="column-hover"][vc_row_inner css=".vc_custom_1494928683456{padding-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1477392142711{padding-left: 0px !important;}"][vc_single_image image="159" style="vc_box_shadow_circle_2" css_animation="top-to-bottom"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text css_animation="top-to-bottom"]
<h4>Charles Knight</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1494928348155{margin-top: -30px !important;}"]
<h5>CraftWork</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1496061062427{margin-bottom: 0px !important;padding-bottom: 15px !important;}"]It really saves me time and effort. aero is exactly what our business has been lacking. I will recommend you to my colleagues. We have no regrets! I would gladly pay over 600 dollars for aero.[/vc_column_text][/vc_column][vc_column width="1/3" el_class="column-hover"][vc_row_inner css=".vc_custom_1494928677497{padding-top: 10px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1477392227964{padding-left: 0px !important;}"][vc_single_image image="160" style="vc_box_shadow_circle_2" css_animation="top-to-bottom"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text css_animation="top-to-bottom"]
<h4>Adam Rivera</h4>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1494928353332{margin-top: -30px !important;}"]
<h5>Apple</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1496061067861{margin-bottom: 0px !important;padding-bottom: 15px !important;}"]Aero should be nominated for service of the year. We've used aero for the last five years. I will recommend you to my colleagues. Thank you so much for your help.[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1477389534326{padding-bottom: 100px !important;}"][vc_column][vc_btn title="LEAVE A REVIEW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="bottom-to-top"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Contact 13', 'stash' );
	$data['custom_class'] = 'hgr_template contact-13';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="1860" el_class="dark-scheme" el_id="contact-13"][vc_row full_width="stretch_row" css=".vc_custom_1494929390165{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_column_text css_animation="top-to-bottom"]
<h5 style="text-align: center;">Let's talk</h5>
[/vc_column_text][vc_column_text css_animation="top-to-bottom" css=".vc_custom_1496684883017{margin-top: -20px !important;padding-bottom: 50px !important;}"]
<h2 style="text-align: center;">Contact Us</h2>
[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_column_text]
<h4>ADDRESS</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1454931709548{margin-top: -30px !important;}"]453 Cedar Avenue
Ballston Spa, NY 12020[/vc_column_text][vc_column_text]
<h4>CONTACT DETAILS</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494929025326{margin-top: -30px !important;}"]+1-202-555-0122
<a href="#">contact@stash.com</a>[/vc_column_text][vc_column_text]
<h4>FOLLOW US</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1454932774966{margin-top: -30px !important;}"]Keep in touch with us
for latest news &amp; updates.

<a href="#">[icon name="fa fa-linkedin" size="24px"]</a>  <a href="#">[icon name="fa fa-facebook" size="24px"]</a>  <a href="#">[icon name="fa fa-twitter" size="24px"]</a>[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/4"][vc_column_text]
<h4>SUPPORT</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494929007703{margin-top: -30px !important;}"]Carl Ford
<a href="#">carl@stash.com</a>

Diana Howell
<a href="#">diana@stash.com</a>[/vc_column_text][vc_column_text]
<h4>SALES</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494929017933{margin-top: -30px !important;}"]Justin Murphy
+1-202-555-0123
<a href="#">justin@stash.com</a>

Bruce Jordan
<a href="#">bruce@stash.com</a>[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/2" css=".vc_custom_1496684896098{padding-top: 10px !important;padding-right: 30px !important;padding-left: 30px !important;}"][vc_column_text el_class="full"]
<h4 style="text-align: left;">[contact-form-7 title="Digital Startup Contact"]</h4>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );


//single product


		$data = array();
	$data['name'] = __( 'Hero 26', 'stash' );
	$data['custom_class'] = 'hgr_template hero-26';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_height="yes" content_placement="middle" el_class="light-scheme" el_id="hero-26" css=".vc_custom_1499169480654{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_row content_placement="middle" parallax="content-moving" parallax_image="64" css=".vc_custom_1496142036907{margin-right: 0px !important;padding-right: 0px !important;background-position: 0 0;background-repeat: no-repeat !important;}"][vc_column css_animation="fadeIn" width="1/2"][vc_column_text css_animation="none"]
<h1>Keep track of your business everywhere.</h1>
[/vc_column_text][vc_btn title="GET STARTED FOR FREE" style="custom" custom_background="#1c46f2" custom_text="#ffffff"][vc_column_text css_animation="none" css=".vc_custom_1496687236742{padding-top: 20px !important;}"]Stash surface your most important business data in real-time
so your team can build a smart, productive culture.[/vc_column_text][vc_column_text css_animation="none"]<a href="#">[icon name="fa fa-twitter" size="21px"]</a>      <a href="#">[icon name="fa fa-facebook" size="21px"]</a>      <a href="#">[icon name="fa fa-youtube" size="21px"]</a>      <a href="#">[icon name="fa fa-instagram" size="21px"]</a>[/vc_column_text][/vc_column][vc_column css_animation="fadeInRight" width="1/2" css=".vc_custom_1496687227926{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_single_image image="374" img_size="full" alignment="center" css_animation="none"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Features 20', 'stash' );
	$data['custom_class'] = 'hgr_template features-20';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499169502424{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="features-20"][vc_row full_width="stretch_row"][vc_column][vc_column_text css_animation="fadeInDown"]
<h2 style="text-align: center;">Integration to boost your workflow</h2>
[/vc_column_text][vc_row_inner gap="35" css=".vc_custom_1478608869349{padding-top: 50px !important;}"][vc_column_inner width="1/3"][vc_single_image image="71" img_size="full" alignment="center" css_animation="fadeInDown"][vc_column_text css_animation="fadeInDown"]
<h4 style="text-align: center;">Adobe Photoshop</h4>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1479827111100{margin-top: -20px !important;}"]
<p style="text-align: center;">Mixtape irony sriracha raw denim portland, tousled pork belly flexitarian biodiesel stumptown chartreuse gentrify pickled.</p>

[/vc_column_text][vc_btn title="DOWNLOAD NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeInUp"][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="72" img_size="full" alignment="center" css_animation="fadeInDown"][vc_column_text css_animation="fadeInDown"]
<h4 style="text-align: center;">Adobe Dreamweaver</h4>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1479827106539{margin-top: -20px !important;}"]
<p style="text-align: center;">Bicycle rights iPhone fanny pack direct trade, post-ironic pour-over shabby chic you probably haven’t heard of them.</p>

[/vc_column_text][vc_btn title="DOWNLOAD NOW" style="outline-custom" outline_custom_color="#1c46f2" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" align="center" css_animation="fadeInUp"][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="73" img_size="full" alignment="center" css_animation="fadeInDown"][vc_column_text css_animation="fadeInDown"]
<h4 style="text-align: center;">Adobe Lightroom</h4>
[/vc_column_text][vc_column_text css_animation="fadeInDown" css=".vc_custom_1479827102168{margin-top: -20px !important;}"]
<p style="text-align: center;">Mixtape irony sriracha raw denim portland, tousled pork belly flexitarian biodiesel stumptown chartreuse gentrify pickled.</p>

[/vc_column_text][vc_btn title="DOWNLOAD NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeInUp"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );








		$data = array();
	$data['name'] = __( 'Pricing 07', 'stash' );
	$data['custom_class'] = 'hgr_template pricing-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/pricing/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" el_id="pricing-7" css=".vc_custom_1499169541312{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row css=".vc_custom_1496142483886{padding-bottom: 50px !important;}"][vc_column][vc_column_text]
<h2 style="text-align: center;">Choose the <em>Best</em> Pricing Option</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row content_placement="middle"][vc_column width="1/3"][vc_column_text]
<h5 style="text-align: center;">BASIC</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496142547055{margin-top: -30px !important;}"]
<h1 style="text-align: center;">$427</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1478616549455{margin-top: -20px !important;}"]
<h6 style="text-align: center;">OR JUST $37 MONTHLY</h6>
[/vc_column_text][vc_column_text]
<p style="text-align: center;"><strong>3000</strong> Visitors per month</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478614358774{margin-top: -20px !important;}"]
<p style="text-align: center;"><strong>1</strong> Custom domian</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478614375919{margin-top: -20px !important;}"]
<p style="text-align: center;">A/B Testing</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478614375919{margin-top: -20px !important;}"]
<p style="text-align: center;">A/B Testing</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478614410142{margin-top: -20px !important;}"] [/vc_column_text][vc_btn title="BUY NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center"][/vc_column][vc_column width="1/3" css=".vc_custom_1496687379876{padding-top: 50px !important;padding-bottom: 35px !important;background-color: #ffffff !important;border-radius: 5px !important;}" el_class="column-hover"][vc_column_text]
<h5 style="text-align: center;"><strong>PROFESSIONAL</strong></h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496142562467{margin-top: -30px !important;}"]
<h1 style="text-align: center;">$897</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1478616561233{margin-top: -20px !important;}"]
<h6 style="text-align: center;">OR JUST $74 MONTHLY</h6>
[/vc_column_text][vc_column_text]
<p style="text-align: center;"><strong>25000</strong> Visitors per month</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478616181022{margin-top: -20px !important;}"]
<p style="text-align: center;"><strong>50</strong> Custom domian</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478614375919{margin-top: -20px !important;}"]
<p style="text-align: center;">A/B Testing</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478616225062{margin-top: -20px !important;}"]
<p style="text-align: center;">Auto-Fill Forms</p>

[/vc_column_text][vc_column_text css=".vc_custom_1496142603024{margin-top: -20px !important;}"]
<p style="text-align: center;">Facebook Integration</p>

[/vc_column_text][vc_btn title="BUY NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center"][/vc_column][vc_column width="1/3"][vc_column_text]
<h5 style="text-align: center;">CORPORATE</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496142572041{margin-top: -30px !important;}"]
<h1 style="text-align: center;">$1797</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1478616573365{margin-top: -20px !important;}"]
<h6 style="text-align: center;">OR JUST $149 MONTHLY</h6>
[/vc_column_text][vc_column_text]
<p style="text-align: center;"><strong>100000</strong> Visitors per month</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478616195088{margin-top: -20px !important;}"]
<p style="text-align: center;"><strong>Unlimited</strong> Custom domian</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478614375919{margin-top: -20px !important;}"]
<p style="text-align: center;">A/B Testing</p>

[/vc_column_text][vc_column_text css=".vc_custom_1478616225062{margin-top: -20px !important;}"]
<p style="text-align: center;">Auto-Fill Forms</p>

[/vc_column_text][vc_column_text css=".vc_custom_1496142610629{margin-top: -20px !important;}"]
<p style="text-align: center;">Facebook Integration</p>

[/vc_column_text][vc_btn title="BUY NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );




		$data = array();
	$data['name'] = __( 'Features 21', 'stash' );
	$data['custom_class'] = 'hgr_template features-21';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="396" el_class="light-scheme" css=".vc_custom_1499169613836{padding-top: 100px !important;padding-bottom: 100px !important;}" el_id="features-21"][vc_row full_width="stretch_row" equal_height="yes"][vc_column width="1/2"][vc_column_text]
<h2>Best Tool Available</h2>
[/vc_column_text][vc_tta_accordion style="flat" spacing="2" c_icon="chevron" c_position="right" active_section="1" css_animation="fadeIn" no_fill="true"][vc_tta_section title="OneClick Demo Import" tab_id="1480072304193-16b19026-3e0c"][vc_column_text]Imports all content and settings, exactly as in the preview. Succulents readymade seitan crucifix godard taxidermy, af actually lo-fi chambray iceland VHS meh. Shabby chic chia meh williamsburg gastropub, keffiyeh disrupt lomo.[/vc_column_text][/vc_tta_section][vc_tta_section title="Extensive Theme Options" tab_id="1480072304257-8239c55b-e26f"][vc_column_text]Get full customisation freedom with no need for custom coding. Distillery organic flexitarian cray austin kitsch, sustainable typewriter hashtag chia mixtape master cleanse.[/vc_column_text][/vc_tta_section][vc_tta_section title="Full Time Support Team" tab_id="1480072862328-07793904-55dd"][vc_column_text]We take care of your requests every day, usually answering in less than 24h. Street art gochujang before they sold out, stumptown fingerstache hell of franzen. Shabby chic marfa etsy austin, schlitz ramps pop-up godard cronut typewriter subway tile. Lyft messenger bag vinyl[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Features 22', 'stash' );
	$data['custom_class'] = 'hgr_template features-22';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499169631941{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="features-22"][vc_row full_width="stretch_row" css=".vc_custom_1495112392824{padding-bottom: 20px !important;}"][vc_column][vc_column_text css_animation="fadeInDown"]
<h2 style="text-align: center;">Technology</h2>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeInDown"]
<p style="text-align: center;">Manage multiple footers easily using WP Custom Posts. No widgets, no pre-formatted elements, no fixed layouts. Use the same Visual Page Editor and create any type of footer.</p>

[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" gap="35" css_animation="fadeIn" css=".vc_custom_1496687437168{padding-bottom: 70px !important;}"][vc_column width="1/6" css=".vc_custom_1478688157692{padding-right: 70px !important;padding-left: 70px !important;}"][/vc_column][vc_column width="1/3"][vc_column_text css=".vc_custom_1495112372671{padding-bottom: 10px !important;}"]
<h4 style="text-align: center;">Marketplaces</h4>
[/vc_column_text][vc_row_inner css=".vc_custom_1496145410144{margin-top: -20px !important;padding-bottom: 20px !important;background-color: #ffffff !important;border-radius: 5px !important;}" el_class="column-shadow"][vc_column_inner width="1/2"][vc_single_image image="403" img_size="full" alignment="center"][vc_column_text css=".vc_custom_1496144888366{margin-top: -20px !important;margin-bottom: 10px !important;}"]
<p style="text-align: center;">Envato Elite</p>

[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="405" img_size="full" alignment="center"][vc_column_text css=".vc_custom_1496144896647{margin-top: -20px !important;margin-bottom: 10px !important;}"]
<p style="text-align: center;">WordPress</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_column_text css=".vc_custom_1495112376634{padding-bottom: 10px !important;}"]
<h4 style="text-align: center;">Design Technology</h4>
[/vc_column_text][vc_row_inner css=".vc_custom_1496145413338{margin-top: -20px !important;padding-bottom: 20px !important;background-color: #ffffff !important;border-radius: 5px !important;}" el_class="column-shadow"][vc_column_inner width="1/2"][vc_single_image image="404" img_size="full" alignment="center"][vc_column_text css=".vc_custom_1496144902339{margin-top: -20px !important;margin-bottom: 10px !important;}"]
<p style="text-align: center;">HTML 5</p>

[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="402" img_size="full" alignment="center"][vc_column_text css=".vc_custom_1496144908437{margin-top: -20px !important;margin-bottom: 10px !important;}"]
<p style="text-align: center;">Angular JS</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'FAQ 04', 'stash' );
	$data['custom_class'] = 'hgr_template faq-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/faq/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" el_id="faq-4"][vc_row css=".vc_custom_1478698027297{padding-top: 100px !important;padding-bottom: 20px !important;}"][vc_column][vc_column_text css_animation="fadeInDown"]
<h2 style="text-align: center;">Frequently Asked Questions</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="25" equal_height="yes" css_animation="fadeIn"][vc_column width="1/6"][/vc_column][vc_column width="1/3"][vc_column_text]
<h4>Where can I change the colours?</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1478691733877{margin-top: -25px !important;}"]DIY kinfolk etsy, drinking vinegar put a bird on it taxidermy chicharrones humblebrag kombucha wolf beard swag tofu vegan try-hard. Celiac thundercats yr tote bag, pickled small batch lo-fi dreamcatcher occupy chicharrones pop-up chambray letterpress.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h4>How do I install the theme?</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1478691856308{margin-top: -25px !important;}"]Hammock PBR&amp;B crucifix, green juice vinyl neutra tacos cold-pressed. Next level meggings try-hard chicharrones, sustainable mustache franzen.
Flannel yr brooklyn skateboard literally neutra scenester, VHS authentic listicle green juice.[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row gap="25" equal_height="yes" css_animation="fadeIn"][vc_column width="1/6"][/vc_column][vc_column width="1/3"][vc_column_text]
<h4>How can I import the demo content?</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1478697955700{margin-top: -25px !important;}"]Activated charcoal brooklyn VHS, raclette knausgaard bespoke subway tile yuccie man bun. Yr forage pop-up try-hard cronut, dreamcatcher squid prism blue bottle wolf lyft seitan pinterest.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h4>Do I need to activate the plugins?</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1478691938350{margin-top: -25px !important;}"]Wolf beard swag tofu vegan try-hard. Celiac thundercats yr tote bag, pickled small batch lo-fi dreamcatcher occupy chicharrones pop-up chambray letterpress.[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1478697980048{padding-top: 30px !important;padding-bottom: 100px !important;}"][vc_column width="1/3"][/vc_column][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;"><em>Do you have other questions?</em></p>

[/vc_column_text][vc_btn title="GO TO HELP CENTER" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="fadeIn" css=".vc_custom_1496687474779{margin-top: -25px !important;}"][/vc_column][vc_column width="1/3"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



//dark freelancer


		$data = array();
	$data['name'] = __( 'Hero 27', 'stash' );
	$data['custom_class'] = 'hgr_template hero-27';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="dark-scheme" css=".vc_custom_1499169973371{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #000000 !important;}" el_id="hero-27"][vc_row full_height="yes" equal_height="yes" content_placement="middle"][vc_column width="1/2"][vc_single_image image="24" img_size="full" css_animation="fadeInLeft"][/vc_column][vc_column width="1/2" css=".vc_custom_1495461492675{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_single_image image="23" img_size="full" css_animation="fadeIn"][vc_column_text css_animation="fadeIn"]
<h1>Roy James Stewart</h1>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );




		$data = array();
	$data['name'] = __( 'About 15', 'stash' );
	$data['custom_class'] = 'hgr_template about-15';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" content_placement="middle" parallax="content-moving" parallax_image="2308" parallax_speed_bg="2" css=".vc_custom_1499170024734{padding-top: 100px !important;padding-bottom: 70px !important;}" el_class="dark-scheme" el_id="about-15"][vc_row gap="35"][vc_column css_animation="fadeIn"][vc_column_text css_animation="none"]
<h2 style="text-align: center;">Over 21 years
of experience</h2>
[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1496691736674{margin-top: -20px !important;}"]
<h5 style="text-align: center;">Product Specialist</h5>
[/vc_column_text][vc_column_text css_animation="none"]
<p style="text-align: center;">Coloring book seitan raclette, umami messenger bag try-hard live-edge cronut franzen knausgaard. Drinking vinegar wayfarers live-edge trust fund, semiotics fixie brunch tattooed lyft sartorial readymade vegan listicle put a bird on it.Typewriter fanny pack bitters, austin brunch umami godard meggings viral cliche humblebrag neutra. Deep v echo park mlkshk, cray subway tile photo booth taxidermy gentrify portland meditation four loko shoreditch chicharrones. Activated charcoal keytar. Woke street art prism, meditation blog 90's craft beer forage tbh hashtag. Meh iPhone normcore, keytar taxidermy cred shoreditch neutra authentic godard migas truffaut tacos. Waistcoat four loko woke, swag unicorn health goth chicharrones blue bottle vinyl tilde iPhone post-ironic blog drinking vinegar.</p>

[/vc_column_text][vc_column_text css_animation="none"]
<p style="text-align: center;"><span style="color: #1c46f2;"><a style="color: #1c46f2;" href="#">[icon name="fa fa-twitter" size="18px"]</a>     <a style="color: #1c46f2;" href="#">[icon name="fa fa-linkedin" size="18px"]</a>     <a style="color: #1c46f2;" href="#">[icon name="fa fa-facebook" size="18px"]</a>     <a style="color: #1c46f2;" href="#">[icon name="fa fa-google-plus" size="18px"]</a></span></p>

[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][/vc_column_inner][vc_column_inner width="1/3"][vc_btn title="CONTACT ME" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css_animation="none"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );






		$data = array();
	$data['name'] = __( 'Contact 14', 'stash' );
	$data['custom_class'] = 'hgr_template contact-14';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="contact-14" el_class="dark-scheme" css=".vc_custom_1499170152871{padding-top: 100px !important;background-color: #000000 !important;}"][vc_row][vc_column css_animation="none" width="1/2"][vc_column_text]
<h2>Contact Us</h2>
[/vc_column_text][vc_column_text]Because you have better things to do, like create,
sell and grow your business.[/vc_column_text][vc_column_text]<strong>327 Daniels Way, Geneva, IL, 60134</strong>
<strong>(630) 232-6893</strong>
<strong>office@stash.com</strong>[/vc_column_text][/vc_column][vc_column css_animation="none" width="1/2"][vc_column_text el_class="full"]
<p style="text-align: center;">[contact-form-7 title="Dark Freelancer Contact"]</p>

[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1494588320503{padding-top: 50px !important;}"][vc_column][hgr_gmap gmap_name="Sydney" google_maps_apikey="" gmap_latitude="-33.8814454" gmap_longitude="151.2226494" gmap_zoom="18" gmap_style="gmap_style_greyscale" gmap_marker_settings="gmap_marker_default" gmap_width="100%" gmap_height="400px" gmap_disablezoom="yes" gmap_disabledraggable="yes" gmap_extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



//Financial Services	

		$data = array();
	$data['name'] = __( 'Hero 29', 'stash' );
	$data['custom_class'] = 'hgr_template hero-29';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/hero/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="2142" parallax_speed_bg="1.8" el_class="dark-scheme" css=".vc_custom_1499171857514{padding-top: 220px !important;padding-bottom: 150px !important;}" el_id="hero-29"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h1>Financial Services
<em>Stash</em> Demo</h1>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	



		$data = array();
	$data['name'] = __( 'About 16', 'stash' );
	$data['custom_class'] = 'hgr_template about-16';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="about-16" el_class="dark-scheme" css=".vc_custom_1499171896668{padding-top: 110px !important;padding-bottom: 100px !important;background-color: #1c46f2 !important;}"][vc_row gap="20"][vc_column width="1/2"][vc_row_inner gap="20"][vc_column_inner width="5/6"][vc_column_text css_animation="fadeIn"]
<h2>We’re using<em> good design </em>to enrich people’s lives.</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1494853912646{padding-top: 5px !important;padding-bottom: 15px !important;}"]I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do.

Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.[/vc_column_text][vc_btn title="MORE ABOUT US" style="custom" custom_background="#ffffff" custom_text="#1c46f2" css_animation="fadeIn"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="1/2"][vc_row_inner gap="15"][vc_column_inner width="1/2"][hgr_animicon animicon_icon="bi-gear" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495623272366{margin-left: -20px !important;}"][vc_column_text]
<h4>Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491991933253{margin-top: -20px !important;margin-bottom: 20px !important;}"]You will love our powerful theme options panel, because every layout option can be set.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][hgr_animicon animicon_icon="bi-upgrade" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495623282389{margin-left: -20px !important;}"][vc_column_text]
<h4>Easy To Use</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491991940716{margin-top: -20px !important;margin-bottom: 20px !important;}"]It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner gap="15" css=".vc_custom_1495623416771{padding-top: 10px !important;}"][vc_column_inner width="1/2"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495623296917{margin-left: -20px !important;}"][vc_column_text]
<h4>Nice &amp; Clean</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491993476987{margin-top: -20px !important;}"]Because you have better things to do, like create, sell and grow your business with beautiful website.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][hgr_animicon animicon_icon="si-search" animicon_iconcolor="#ffffff" animicon_iconcolor_hover="" animicon_strokewidth="3" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495623350121{margin-left: -20px !important;}"][vc_column_text]
<h4>SEO Ready</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1491993605343{margin-top: -20px !important;}"]Based on the already popular Redux framework, Theme Options panel gives you total freedom.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );









		$data = array();
	$data['name'] = __( 'Counters 02', 'stash' );
	$data['custom_class'] = 'hgr_template counters-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/counters/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" css=".vc_custom_1499171950138{border-bottom-width: 1px !important;background-color: #ffffff !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="counters-2"][vc_row css_animation="fadeIn" css=".vc_custom_1496696535540{padding-top: 40px !important;padding-bottom: 80px !important;}"][vc_column width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="156" counter_number_format="h1" counter_number_color="#000000" counter_units="" counter_units_color="#222222" counter_text="PROJECTS" counter_text_format="h5" counter_text_color="#292929" counter_speed="4" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][vc_column width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="853" counter_number_format="h1" counter_number_color="#000000" counter_units="" counter_units_color="#222222" counter_text="CLIENTS" counter_text_format="h5" counter_text_color="#292929" counter_speed="5" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][vc_column width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="20" counter_number_format="h1" counter_number_color="#000000" counter_units="" counter_units_color="#222222" counter_text="THEMES" counter_text_format="h5" counter_text_color="#292929" counter_speed="4" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][vc_column width="1/4"][hgr_counter icon_type="selector" icon="" counter_icon_size="32" counter_icon_color="#222222" counter_icon_position="icon-top" counter_number="101" counter_number_format="h1" counter_number_color="#000000" counter_units="" counter_units_color="#222222" counter_text="COFFEES" counter_text_format="h5" counter_text_color="#292929" counter_speed="3" counter_background_settings="none" counter_border_settings="none" counter_border_corner="0" extra_class=""][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Testimonials 18', 'stash' );
	$data['custom_class'] = 'hgr_template testimonials-18';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/testimonials/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_class="light-scheme" css=".vc_custom_1499171974715{padding-top: 100px !important;padding-bottom: 100px !important;}" el_id="testimonials-18"][vc_row equal_height="yes"][vc_column][vc_column_text css_animation="fadeIn"]
<h5 style="text-align: center;">Testimonials</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496696543782{margin-top: -25px !important;}"]
<h2 style="text-align: center;">Clients about us.</h2>
[/vc_column_text][vc_tta_pageable no_fill_content_area="1" autoplay="4" active_section="1" pagination_style="flat-square" pagination_color="black" css_animation="fadeIn"][vc_tta_section title="Section 1" tab_id="1481191429141-32274e6e-b5be"][vc_row_inner equal_height="yes" gap="35"][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]<i>Since I invested in Aero Financial Services I made over 100,000 dollars profits. Thanks to Aero Financial Services, we've just launched our 5th website! Aero Financial Services is great.</i>[/vc_column_text][vc_column_text css_animation="fadeInUp"]
<h6><strong>BRITTANY DUNCAN</strong></h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]<i>I have gotten at least 50 times the value from Aero Financial Services. Without Aero Financial Services, we would have gone bankrupt by now. We're loving it. Aero Financial Services is great.</i>[/vc_column_text][vc_column_text css_animation="fadeInUp"]
<h6><strong>BRITTANY DUNCAN</strong></h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Section 2" tab_id="1481191429174-d960ce82-6f0d"][vc_row_inner gap="35"][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]<i>I have gotten at least 50 times the value from Aero Financial Services. Without Aero Financial Services, we would have gone bankrupt by now. We're loving it. Aero Financial Services is great.</i>[/vc_column_text][vc_column_text css_animation="fadeInUp"]
<h6><strong>BRITTANY DUNCAN</strong></h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]<i>Since I invested in Aero Financial Services I made over 100,000 dollars profits. Thanks to Aero Financial Services, we've just launched our 5th website! Aero Financial Services is great.</i>[/vc_column_text][vc_column_text css_animation="fadeInUp"]
<h6><strong>BRITTANY DUNCAN</strong></h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Section" tab_id="1481191678719-5684beb8-779e"][vc_row_inner gap="35"][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]<i>Aero Financial Services has completely surpassed our expectations. If you want real marketing that works and effective implementation - Aero Financial Services's got you covered. </i>[/vc_column_text][vc_column_text css_animation="fadeInUp"]
<h6><strong>BRITTANY DUNCAN</strong></h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]<i>I have gotten at least 50 times the value from Aero Financial Services. Without Aero Financial Services, we would have gone bankrupt by now. We're loving it. Aero Financial Services is great.</i>[/vc_column_text][vc_column_text css_animation="fadeInUp"]
<h6><strong>BRITTANY DUNCAN</strong></h6>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_pageable][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );




		$data = array();
	$data['name'] = __( 'Contact 15', 'stash' );
	$data['custom_class'] = 'hgr_template contact-15';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/contact/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499172004239{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="contact-15"][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="728"][vc_column][vc_column_text css_animation="fadeIn"]
<h5 style="text-align: center;">Get in Touch</h5>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1495628433680{margin-top: -20px !important;padding-bottom: 50px !important;}"]
<h2 style="text-align: center;">Contact Us</h2>
[/vc_column_text][vc_row_inner gap="35"][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn" el_class="full"]
<p style="text-align: center;">[contact-form-7 title="Financial Services"]</p>

[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1477574451516{padding-top: 15px !important;}"][vc_column_text css_animation="fadeInRight"]
<h4>ADDRESS</h4>
453 Cedar Avenue
Ballston Spa, NY 12020
<h4>CONTACT DETAILS</h4>
+1-202-555-0122
<a href="http://highgradelab.com/aero/">contact@aero.com</a>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );


//Video Landing



		$data = array();
	$data['name'] = __( 'About 13', 'stash' );
	$data['custom_class'] = 'hgr_template about-13';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/about/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499173138642{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="about-13"][vc_row full_width="stretch_row" equal_height="yes" content_placement="middle"][vc_column css_animation="fadeIn" width="2/3" css=".vc_custom_1496699049727{padding-right: 35px !important;}"][vc_column_text]
<h5>Who We Are?</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1477386608298{margin-top: -25px !important;}"]
<h2><strong>Creativity  is to Think More Efficiently</strong></h2>
[/vc_column_text][vc_column_text]
<h4><span style="color: #1c46f2;">With Hatch theme, you’ll be able to build the most awesome website for your business. With each purchase, you get access to a powerful framework, a drag &amp; drop page builder.</span></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496155216354{margin-top: -20px !important;}"]With Stash theme, you’ll be able to build the most awesome website for your business. With each purchase, you get access to a powerful framework, a drag &amp; drop page builder, the most popular premium plugins on the market and of course, all the demos.

Get started with any of the demos with only one click! Content, images, theme options and even sliders are automatically imported in the process. There is no need for additional settings or plugin uploads. One click is one click.

You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel. As a professional, you want to show the world you have arrived and are going places.[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3"][vc_row_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-clock" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="left" animicon_background_type="none" custom_link="none"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4>Very Customisable</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494926163311{margin-top: -30px !important;}"]Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-target" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="left" animicon_background_type="none" custom_link="none"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4>Shop Ready</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494926163311{margin-top: -30px !important;}"]Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/4"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="80" animicon_alignment="left" animicon_background_type="none" custom_link="none"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]
<h4>Optimized For Speed</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1494926163311{margin-top: -30px !important;}"]Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );




		$data = array();
	$data['name'] = __( 'Promo 13', 'stash' );
	$data['custom_class'] = 'hgr_template promo-13';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/promo/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" content_placement="bottom" parallax="content-moving" parallax_image="171" el_class="dark-scheme" css=".vc_custom_1499173202562{border-top-width: 1px !important;border-bottom-width: 1px !important;background-color: #ffffff !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="promo-13"][vc_row content_placement="bottom"][vc_column css=".vc_custom_1481287333710{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1496699315333{padding-top: 100px !important;}"]
<h2 style="text-align: center;">Video Landing Page</h2>
[/vc_column_text][vc_row_inner equal_height="yes" gap="35" css=".vc_custom_1482158530267{padding-bottom: 40px !important;}"][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]
<h4>A Clean &amp; Flexible Multi Purpose Theme</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496699440245{margin-top: -20px !important;}"]Stash is a stunning WordPress theme packed with the best website building features: Visual Composer, Revolution Slider, Powerful Theme Options Panel, 80+ Page Elements, Header Layouts and many more.
Go on and see these features in action![/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css_animation="fadeIn"]
<h4><strong>Creativity  is to Think More Efficiently</strong></h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1496699435891{margin-top: -20px !important;}"]With Stash theme, you’ll be able to build the most awesome website for your business. With each purchase, you get access to a powerful framework, a drag &amp; drop page builder, the most popular premium plugins on the market and of course, all the demos.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_single_image image="28" img_size="full" alignment="center" css=".vc_custom_1481287677234{margin-bottom: 0px !important;padding-top: 30px !important;padding-bottom: 0px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );





		$data = array();
	$data['name'] = __( 'Features 27', 'stash' );
	$data['custom_class'] = 'hgr_template features-27';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/features/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section css=".vc_custom_1499173228168{padding-bottom: 100px !important;}" el_id="features-27"][vc_row css=".vc_custom_1496155939713{padding-top: 100px !important;}" el_class="light-scheme"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Features</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">A great collection of 6 homepages, developed for small and medium businesses. Use One Click Import to get a head start and save valuable time when building your website.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row gap="35" equal_height="yes"][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496699712879{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 30px !important;padding-right: 40px !important;padding-bottom: 30px !important;padding-left: 40px !important;background-color: #ffffff !important;border-left-color: #aaaaaa !important;border-left-style: solid !important;border-right-color: #aaaaaa !important;border-right-style: solid !important;border-top-color: #aaaaaa !important;border-top-style: solid !important;border-bottom-color: #aaaaaa !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="light-scheme"][hgr_animicon animicon_icon="si-cart-ten" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Ecommerce</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1481289407619{margin-top: -20px !important;}"]
<p style="text-align: center;">Powerfull theme ready for your online shop to rock the online market place.</p>

[/vc_column_text][vc_column_text css=".vc_custom_1496156450836{padding-bottom: 0px !important;}"]
<p style="text-align: center;"><strong><a class="link-curtain" href="#">Learn More</a></strong></p>

[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496699717466{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 30px !important;padding-right: 40px !important;padding-bottom: 30px !important;padding-left: 40px !important;background-color: #0a0a0a !important;border-left-color: #0a0a0a !important;border-left-style: solid !important;border-right-color: #0a0a0a !important;border-right-style: solid !important;border-top-color: #0a0a0a !important;border-top-style: solid !important;border-bottom-color: #0a0a0a !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="dark-scheme"][hgr_animicon animicon_icon="bi-light-bulb" animicon_iconcolor="#dddddd" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">SEO</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1481289295833{margin-top: -20px !important;}"]
<p style="text-align: center;">Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>

[/vc_column_text][vc_column_text css=".vc_custom_1496156455667{padding-bottom: 0px !important;}"]
<p style="text-align: center;"><strong><a class="link-curtain" href="#">Learn More</a></strong></p>

[/vc_column_text][/vc_column][vc_column css_animation="fadeIn" width="1/3" css=".vc_custom_1496699722440{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 30px !important;padding-right: 40px !important;padding-bottom: 30px !important;padding-left: 40px !important;background-color: #ffffff !important;border-left-color: #aaaaaa !important;border-left-style: solid !important;border-right-color: #aaaaaa !important;border-right-style: solid !important;border-top-color: #aaaaaa !important;border-top-style: solid !important;border-bottom-color: #aaaaaa !important;border-bottom-style: solid !important;border-radius: 5px !important;}" el_class="light-scheme"][hgr_animicon animicon_icon="bi-certification" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="center" animicon_background_type="none" custom_link="none"][vc_column_text]
<h4 style="text-align: center;">Theme Options</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1481289300987{margin-top: -20px !important;}"]
<p style="text-align: center;">Short loading time for best user experience and includes everything you need to build something exceptional</p>

[/vc_column_text][vc_column_text css=".vc_custom_1496156459695{padding-bottom: 0px !important;}"]
<p style="text-align: center;"><strong><a class="link-curtain" href="#">Learn More</a></strong></p>

[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_btn title="VIEW AL FEATURES" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" css=".vc_custom_1495718715554{padding-top: 40px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'CTA 12', 'stash' );
	$data['custom_class'] = 'hgr_template cta-12';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/cta/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499173258811{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}" el_id="call-to-action-12"][vc_row][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">Be part of the team</h2>
[/vc_column_text][vc_column_text css_animation="fadeIn"]
<p style="text-align: center;">A great collection of 6 homepages, developed for small and medium businesses.
Use One Click Import to get a head start and save valuable time when building your website.

[/vc_column_text][/vc_column][/vc_row][vc_row gap="35" content_placement="middle"][vc_column width="1/6"][/vc_column][vc_column css_animation="fadeIn" width="2/6" css=".vc_custom_1496699813544{padding-right: 20px !important;padding-left: 20px !important;}"][vc_row_inner gap="30" el_class="column-shadow" css=".vc_custom_1496156546723{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;background-color: #ffffff !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;border-radius: 10px !important;}"][vc_column_inner][vc_column_text]
<h3 style="text-align: center;"><strong><span style="color: #000000;">Sign Up</span></strong></h3>
[/vc_column_text][vc_column_text el_class="signup"][contact-form-7  title="SignUp"][/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css_animation="fadeIn" width="2/6"][hgr_animicon animicon_icon="bi-certification" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1496156643053{margin-left: -20px !important;padding-top: 20px !important;}"][vc_column_text css_animation="none"]
<h4>Programming Skills</h4>
[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1481544333457{margin-top: -20px !important;}"]Technical programming skills can be learned but soft skills, on the other hand, are the kinds that tend to come naturally for the best managers.[/vc_column_text][hgr_animicon animicon_icon="bi-calculator" animicon_iconcolor="#1c46f2" animicon_iconcolor_hover="" animicon_strokewidth="2" animicon_iconheight="90" animicon_alignment="left" animicon_background_type="none" custom_link="none" css=".vc_custom_1495787874201{margin-left: -20px !important;}"][vc_column_text css_animation="none"]
<h4>Programming Skills</h4>
[/vc_column_text][vc_column_text css_animation="none" css=".vc_custom_1496156593302{margin-top: -20px !important;padding-bottom: 0px !important;}"]Technical programming skills can be learned but soft skills, on the other hand, are the kinds that tend to come naturally for the best managers.[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	

	
	
	
		$data = array();
	$data['name'] = __( 'FAQ 05', 'stash' );
	$data['custom_class'] = 'hgr_template faq-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/faq/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" css=".vc_custom_1499173333289{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #292929 !important;}" el_class="dark-scheme" el_id="faq-5"][vc_row gap="35"][vc_column width="1/3"][vc_column_text css_animation="fadeIn"]
<h1>F.A.Q.</h1>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1481548944792{padding-top: 50px !important;}"]
<h4>E-Comerce</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1481549318437{margin-top: -20px !important;}"]<span style="color: #999999;">Chicharrones meggings yuccie occupy cliche. Coloring book chia narwhal, ramps prism cardigan beard.</span>[/vc_column_text][vc_btn title="VIEW MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="sm" css_animation="fadeIn" css=".vc_custom_1495720868397{margin-top: -15px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1481548944792{padding-top: 50px !important;}"]
<h4>E-Comerce</h4>
[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1481549325091{margin-top: -20px !important;}"]<span style="color: #999999;">Chicharrones meggings yuccie occupy cliche. Coloring book chia narwhal, ramps prism cardigan beard.</span>[/vc_column_text][vc_btn title="VIEW MORE" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="sm" css_animation="fadeIn" css=".vc_custom_1495720868397{margin-top: -15px !important;}"][/vc_column][vc_column width="2/3"][vc_column_text css_animation="fadeIn"]
<h2>How do I install the theme?</h2>
[/vc_column_text][vc_separator color="custom" align="align_left" el_width="50" css_animation="fadeIn" accent_color="rgba(255,255,255,0.09)"][vc_column_text css_animation="fadeIn"]
<h2><span style="color: #999999;">How can I import the demo content?</span></h2>
[/vc_column_text][vc_separator color="custom" align="align_left" el_width="50" css_animation="fadeIn" accent_color="rgba(255,255,255,0.09)"][vc_column_text css_animation="fadeIn"]
<h2><span style="color: #999999;">Do I need to activate the plugins?</span></h2>
[/vc_column_text][vc_separator color="custom" align="align_left" el_width="50" css_animation="fadeIn" accent_color="rgba(255,255,255,0.09)"][vc_column_text css_animation="fadeIn"]
<h2><span style="color: #999999;">Where can I change the colours?</span></h2>
[/vc_column_text][vc_separator color="custom" align="align_left" el_width="50" css_animation="fadeIn" accent_color="rgba(255,255,255,0.09)"][vc_column_text css_animation="fadeIn"]
<h2><span style="color: #999999;">How can I get support?</span></h2>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
		$data = array();
	$data['name'] = __( 'Clients 09', 'stash' );
	$data['custom_class'] = 'hgr_template clients-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/clients/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="211" parallax_speed_bg="2" css=".vc_custom_1499173359829{padding-top: 100px !important;padding-bottom: 100px !important;}" el_class="dark-scheme" el_id="clients-9"][vc_row css=".vc_custom_1481550160728{padding-bottom: 50px !important;}"][vc_column][vc_column_text css_animation="fadeIn"]
<h2 style="text-align: center;">250+ Clients use our services</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/4"][vc_single_image image="135" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column width="1/4"][vc_single_image image="136" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column width="1/4"][vc_single_image image="137" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][vc_column width="1/4"][vc_single_image image="138" img_size="full" alignment="center" el_class="image-opacity"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
//footers


		$data = array();
	$data['name'] = __( 'Footer 01', 'stash' );
	$data['custom_class'] = 'hgr_template footer-01';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="footer-1" el_class="dark-scheme"][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="166" css=".vc_custom_1489424400686{padding-top: 10px !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]<strong><a class="underline after first" href="#">About</a>      <a class="underline after first" href="#">Services</a>      <a class="underline after first" href="#">Portfolio</a>      <a class="underline after first" href="#">Contact</a></strong>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<p style="text-align: right;"><a href="#">[icon name="fa fa-facebook" size="18px"]</a>      <a href="#">[icon name="fa fa-twitter" size="18px"]</a>      <a href="#">[icon name="fa fa-linkedin" size="18px"]</a>      <a href="#">[icon name="fa fa-instagram" size="18px"]</a>      <a href="#">[icon name="fa fa-google-plus" size="18px"]</a></p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1489424488913{padding-top: 100px !important;padding-bottom: 200px !important;}"][vc_column_inner][vc_single_image image="165" img_size="full" alignment="center"][vc_column_text]
<h1 style="text-align: center;">Build your <em>Awesome</em> Website</h1>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]Stash WordPress Theme. Built with [icon name="fa fa-heart" color="#ed2248"] by <a href="http://www.highgradelab.com" target="_blank" rel="noopener noreferrer">HighGrade</a>.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<p style="text-align: center;"><strong><a href="https://themeforest.net/user/highgrade/portfolio?ref=HighGrade" target="_blank" rel="noopener noreferrer">Portfolio</a>      <a href="https://highgrade.ticksy.com" target="_blank" rel="noopener noreferrer">Support Center</a></strong></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_btn title="PURCHASE NOW <em>on</em> THEMEFOREST" style="outline-custom" outline_custom_color="#919295" outline_custom_hover_background="#1c46f2" outline_custom_hover_text="#ffffff" shape="round" size="sm" align="right" css=".vc_custom_1496246911502{margin-top: -5px !important;padding-right: 10px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );

 	
	
		$data = array();
	$data['name'] = __( 'Footer 02', 'stash' );
	$data['custom_class'] = 'hgr_template footer-02';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section css=".vc_custom_1498820837400{padding-top: 0px !important;padding-right: 15px !important;padding-left: 15px !important;background-color: #ffffff !important;}" el_class="light-scheme" el_id="footer-2"][vc_row equal_height="yes" content_placement="top" css=".vc_custom_1495108023735{border-bottom-width: 1px !important;padding-top: 15px !important;padding-bottom: 15px !important;border-bottom-color: rgba(0,0,0,0.11) !important;border-bottom-style: solid !important;}"][vc_column width="2/3"][vc_column_text css=".vc_custom_1495108007182{padding-top: 10px !important;}"]
<h3>Create your <em>perfect</em> website using Stash theme.</h3>
[/vc_column_text][/vc_column][vc_column width="1/3"][vc_btn title="BUY <em>Stash</em> THEME NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="right"][/vc_column][/vc_row][vc_row css=".vc_custom_1490889257626{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column width="1/4"][vc_single_image image="1925" img_size="full" css=".vc_custom_1495108280404{margin-top: -10px !important;}"][vc_column_text css=".vc_custom_1495108601170{margin-top: -10px !important;}"]<a href="#">[icon name="fa fa-facebook" size="18px"]</a>    <a href="#">[icon name="fa fa-twitter" size="18px"]</a>    <a href="#">[icon name="fa fa-linkedin" size="18px"]</a>    <a href="#">[icon name="fa fa-instagram" size="18px"]</a>    <a href="#">[icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<p style="text-align: right;"><strong>Contact Us</strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1495108700653{margin-top: -35px !important;}"]
<p style="text-align: right;">email@ekko.com
77 Winchester Lane
Coachella, CA 92236</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<p style="text-align: right;"><strong>Our Company</strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1495108674092{margin-top: -35px !important;}"]
<p style="text-align: right;"><a class="underline after first" href="#">About Us</a>
<a class="underline after first" href="#">Services</a>
<a class="underline after first" href="#">Team</a></p>
[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<p style="text-align: right;"><strong>Support</strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1495108706313{margin-top: -35px !important;}"]
<p style="text-align: right;"><a class="underline after first" href="#">Support Forum</a>
<a class="underline after first" href="#">Documentation</a>
<a class="underline after first" href="#">Video Tutorials</a></p>
[/vc_column_text][/vc_column][/vc_row][vc_row equal_height="yes" content_placement="middle" css=".vc_custom_1496246021887{padding-top: 20px !important;padding-bottom: 20px !important;background-color: #f2f2f2 !important;}"][vc_column width="1/2" offset="vc_hidden-sm vc_hidden-xs" css=".vc_custom_1490889217903{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1496245291439{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"]Copyright 2017  All rights reserved.[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1490889213412{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1495108729589{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"]
<p style="text-align: right;"><a class="underline after first" href="#">HighGradeLab.com</a></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	

	
		$data = array();
	$data['name'] = __( 'Footer 03', 'stash' );
	$data['custom_class'] = 'hgr_template footer-03';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1498821596039{padding-top: 35px !important;padding-bottom: 15px !important;}" el_id="footer-3"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/6"][vc_single_image image="188" img_size="full"][/vc_column][vc_column width="2/3"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">About</a></h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">Support</a></h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">Team</a></h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">Contact</a></h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/6"][vc_column_text]<a href="#">[icon name="fa fa-facebook" size="18px"] </a>     <a href="#">[icon name="fa fa-twitter" size="18px"]</a>      <a href="#">[icon name="fa fa-linkedin" size="18px"] </a>    <a href="#"> [icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_separator color="custom" accent_color="#e9ecef"][/vc_column][/vc_row][vc_row][vc_column width="2/6"][vc_column_text]We urge you to take one of our impressive demos for a test-drive. Click away, and see which one suits your immediate needs.[/vc_column_text][/vc_column][vc_column width="3/6"][/vc_column][vc_column width="1/6"][vc_column_text]HighGradeLab.com[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 04', 'stash' );
	$data['custom_class'] = 'hgr_template footer-04';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" css=".vc_custom_1498822983981{background-color: #f8f8f8 !important;}" el_class="light-scheme" el_id="footer-4"][vc_row css=".vc_custom_1491378124399{padding-top: 35px !important;padding-bottom: 35px !important;}"][vc_column width="1/4"][vc_column_text]
<p style="text-align: left;"><strong><span style="color: #a0acb9;">Company</span></strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1495534581271{margin-top: -20px !important;}"]
<p style="text-align: left;"><span style="color: #626d79;"><a class="underline after first" style="color: #626d79;" href="#">About Us</a></span>
<span style="color: #626d79;"><a class="underline after first" style="color: #626d79;" href="#">Services</a></span>
<span style="color: #626d79;"><a class="underline after first" style="color: #626d79;" href="#">Team</a></span></p>
[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<p style="text-align: left;"><strong><span style="color: #a0acb9;">Services</span></strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1495534661192{margin-top: -20px !important;}"]
<p style="text-align: left;"><span style="color: #626d79;"><a class="underline after first" style="color: #626d79;" href="#">Web Design</a></span>
<span style="color: #626d79;"><a class="underline after first" style="color: #626d79;" href="#">Programming</a></span>
<span style="color: #626d79;"><a class="underline after first" style="color: #626d79;" href="#">Marketing</a></span></p>
[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<p style="text-align: left;"><strong><span style="color: #a0acb9;">Contact Us</span></strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1495534683444{margin-top: -20px !important;}"]
<p style="text-align: left;"><span style="color: #626d79;">email@stash.com</span>
<span style="color: #626d79;"> 77 Winchester Lane</span>
<span style="color: #626d79;"> Coachella, CA 92236</span></p>
[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<h4 style="text-align: left;"><span style="color: #a0acb9;">Follow Us</span></h4>
[/vc_column_text][vc_column_text css=".vc_custom_1495534692118{margin-top: -20px !important;}"]
<p style="text-align: left;"><a href="#">[icon name="fa fa-facebook" size="18px"]</a>     <a href="#"> [icon name="fa fa-twitter" size="18px"] </a>    <a href="#"> [icon name="fa fa-linkedin" size="18px"] </a>    <a href="#"> [icon name="fa fa-instagram" size="18px"]</a>     <a href="#"> [icon name="fa fa-google-plus" size="18px"]</a></p>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1491384913558{margin-top: -25px !important;border-top-width: 1px !important;border-top-color: rgba(0,0,0,0.05) !important;border-top-style: solid !important;}"][vc_column width="1/6"][vc_column_text]
<h6 style="text-align: left;"><span style="color: #a0acb9;">Privacy Policy</span></h6>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h6 style="text-align: left;"><span style="color: #a0acb9;">Terms &amp; Conditions</span></h6>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h6 style="text-align: left;"><span style="color: #a0acb9;">Cookie Policy</span></h6>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1495540124851{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 15px !important;}"]
<h6 style="text-align: left;"><span style="color: #a0acb9;">© Copyright HighGrade Themes 2017. </span></h6>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 05', 'stash' );
	$data['custom_class'] = 'hgr_template footer-05';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="footer-5" el_class="light-scheme" css=".vc_custom_1498827562583{border-top-width: 1px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;}"][vc_row][vc_column width="1/3"][vc_column_text]
<p style="text-align: left;">© Copyright 2017 <a href="http://www.highgradelab.com" target="_blank" rel="noopener noreferrer">HighGrade</a>. All rights reserved.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][vc_column width="1/6"][/vc_column][vc_column width="1/6"][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: left;"><a href="#">[icon name="fa fa-facebook" size="18px"]</a>      <a href="#">[icon name="fa fa-twitter" size="18px"]</a>      <a href="#">[icon name="fa fa-linkedin" size="18px"]  </a>   <a href="#">[icon name="fa fa-instagram" size="18px"]</a></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 06', 'stash' );
	$data['custom_class'] = 'hgr_template footer-06';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="footer-6" css=".vc_custom_1498830781066{margin-bottom: 30px !important;padding-top: 50px !important;padding-bottom: 20px !important;background-color: #f8f8f8 !important;}" el_class="light-scheme"][vc_row gap="30"][vc_column width="2/6"][vc_column_text]Manage multiple footers easily using WP Custom Posts. No widgets, no pre-formatted elements, no fixed layouts.[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]<strong>Company</strong>[/vc_column_text][vc_column_text css=".vc_custom_1496657315608{margin-top: -20px !important;}"]<a class="underline after first" href="#">About Us</a>[/vc_column_text][vc_column_text css=".vc_custom_1496657204033{margin-top: -30px !important;}"]<a class="underline after first" href="#">Services</a>[/vc_column_text][vc_column_text css=".vc_custom_1496657325197{margin-top: -30px !important;}"]<a class="underline after first" href="#">FAQ</a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]<strong>Support</strong>[/vc_column_text][vc_column_text css=".vc_custom_1496657331684{margin-top: -20px !important;}"]<a class="underline after first" href="#">Forum</a>[/vc_column_text][vc_column_text css=".vc_custom_1496657340762{margin-top: -30px !important;}"]<a class="underline after first" href="#">Documentation</a>[/vc_column_text][vc_column_text css=".vc_custom_1496657348671{margin-top: -30px !important;}"]<a class="underline after first" href="#">Tutorials</a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]<strong>Misc</strong>[/vc_column_text][vc_column_text css=".vc_custom_1496657398274{margin-top: -20px !important;}"]<a class="underline after first" href="#">Privacy Policy</a>[/vc_column_text][vc_column_text css=".vc_custom_1496657378589{margin-top: -30px !important;}"]<a class="underline after first" href="#">Support</a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: right;">Stash theme was developed with [icon name="fa fa-heart" color="#1c46f2"] by <a class="underline after first" href="http://www.highgradelab.com">HighGrade</a>.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	
	

		$data = array();
	$data['name'] = __( 'Footer 07', 'stash' );
	$data['custom_class'] = 'hgr_template footer-07';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1498831825434{border-top-width: 1px !important;padding-top: 150px !important;background-color: #f8f8f8 !important;border-top-color: #e9ecef !important;border-top-style: solid !important;}" el_id="footer-7"][vc_row][vc_column][vc_column_text]
<h1 style="text-align: center;">+4102 4597 8564</h1>
[/vc_column_text][vc_column_text css=".vc_custom_1491829113538{margin-top: -20px !important;}"]
<p style="text-align: center;">We urge you to take one of our impressive demos for a test-drive.
Click away, and see which one suits your immediate needs.</p>
[/vc_column_text][vc_btn title="GET IN TOUCH WITH ME" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center"][/vc_column][/vc_row][vc_row css=".vc_custom_1495624878585{padding-top: 100px !important;}"][vc_column][vc_column_text]
<p style="text-align: center;">@ Copyright 2017 <a href="http://www.highgradelab.com">HighGrade</a>. All rights reserved.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		
	
	
		$data = array();
	$data['name'] = __( 'Footer 08', 'stash' );
	$data['custom_class'] = 'hgr_template footer-08';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="dark-scheme" css=".vc_custom_1498833615811{padding-top: 30px !important;background-color: #292929 !important;}" el_id="footer-8"][vc_row gap="15"][vc_column width="1/3"][vc_column_text]
<h2 style="text-align: left;">contact@stash.com</h2>
[/vc_column_text][/vc_column][vc_column width="1/3"][/vc_column][vc_column width="1/3"][vc_column_text]
<p style="text-align: right;"><a href="#">[icon name="fa fa-facebook" size="21px"]</a>    <a href="#">[icon name="fa fa-twitter" size="21px"]</a>   <a href="#"> [icon name="fa fa-linkedin" size="21px"] </a>    <a href="#">[icon name="fa fa-instagram" size="21px"]</a>   <a href="#"> [icon name="fa fa-google-plus" size="21px"]</a></p>
[/vc_column_text][/vc_column][/vc_row][vc_row gap="15"][vc_column][vc_separator color="custom" accent_color="rgba(255,255,255,0.05)"][/vc_column][/vc_row][vc_row gap="15" css=".vc_custom_1495626243659{padding-bottom: 10px !important;}"][vc_column width="1/3"][vc_column_text]
<p style="text-align: left;">© Copyright 2017 <a href="http://www.highgradelab.com" target="_blank" rel="noopener noreferrer">HighGrade</a>. All rights reserved.</p>
[/vc_column_text][/vc_column][vc_column width="1/2"][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: right;"><a href="#">Terms &amp; Conditions</a></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	



		$data = array();
	$data['name'] = __( 'Footer 09', 'stash' );
	$data['custom_class'] = 'hgr_template footer-09';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="footer-9" el_class="dark-scheme" css=".vc_custom_1498834234228{background-color: #1c46f2 !important;}"][vc_row css=".vc_custom_1491916576439{padding-top: 20px !important;padding-bottom: 27px !important;}"][vc_column width="1/2"][vc_column_text css=".vc_custom_1495627114373{padding-top: 10px !important;}"]© Copyright 2017 <a href="http://www.highgradelab.com">HighGrade</a>. All rights reserved.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css=".vc_custom_1491916532897{padding-top: 10px !important;}"]Purchase Stash WordPress Theme on Envato for only $59.[/vc_column_text][/vc_column][vc_column width="1/6"][vc_btn title="GO FOR IT" style="custom" custom_background="#ffffff" custom_text="#1c46f2" align="center" button_block="true"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Footer 10', 'stash' );
	$data['custom_class'] = 'hgr_template footer-10';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="141" el_id="footer-10" el_class="dark-scheme" css=".vc_custom_1499081123514{background-color: #1c46f2 !important;}"][vc_row parallax="content-moving" parallax_image="98"][vc_column][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]<a href="#">[icon name="fa fa-linkedin" size="21px"]</a>      <a href="#">[icon name="fa fa-twitter" size="21px"]</a>      <a href="#">[icon name="fa fa-facebook" size="21px"]</a>      <a href="#">[icon name="fa fa-youtube" size="21px"]</a>      <a href="#">[icon name="fa fa-instagram" size="21px"]</a>      <a href="#">[icon name="fa fa-google-plus" size="21px"]</a>[/vc_column_text][vc_column_text]Navy ® is a registered Trademark of HighGrade Themes.[/vc_column_text][vc_column_text css=".vc_custom_1492003266770{margin-top: -30px !important;}"]Copyright © 2016 highgradelab.com[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5>ABOUT</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492003321916{margin-top: -20px !important;}"]<a class="underline after first" href="#">About Us</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003371698{margin-top: -20px !important;}"]<a class="underline after first" href="#">How it Works</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003378582{margin-top: -20px !important;}"]<a class="underline after first" href="#">Team</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003384860{margin-top: -20px !important;}"]<a class="underline after first" href="#">Mobile App</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003390753{margin-top: -20px !important;}"]<a class="underline after first" href="#">Desktop App</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003397391{margin-top: -20px !important;}"]<a class="underline after first" href="#">Security</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003403702{margin-top: -20px !important;}"]<a class="underline after first" href="#">Report Bug</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003410587{margin-top: -20px !important;}"]<a class="underline after first" href="#">Pricing</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003417182{margin-top: -20px !important;}"]<a class="underline after first" href="#">Investors</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5>PRESS</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492003426710{margin-top: -20px !important;}"]<a class="underline after first" href="#">In the News</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003432796{margin-top: -20px !important;}"]<a class="underline after first" href="#">Press Releases</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003438660{margin-top: -20px !important;}"]<a class="underline after first" href="#">Awards</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003445238{margin-top: -20px !important;}"]<a class="underline after first" href="#">Testimonials</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003451595{margin-top: -20px !important;}"]<a class="underline after first" href="#">Partners</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5>GET IN TOUCH</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492003458503{margin-top: -20px !important;}"]<a class="underline after first" href="#">Support</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003465276{margin-top: -20px !important;}"]<a class="underline after first" href="#">Advertise with US</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003479394{margin-top: -20px !important;}"]<a class="underline after first" href="#">Careers</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003485560{margin-top: -20px !important;}"]<a class="underline after first" href="#">Forum</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003492533{margin-top: -20px !important;}"]<a class="underline after first" href="#">Affiliates</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003499025{margin-top: -20px !important;}"]<a class="underline after first" href="#">Blog</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003509205{margin-top: -20px !important;}"]<a class="underline after first" href="#">Contact Us</a>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_separator color="custom" accent_color="rgba(255,255,255,0.15)" css=".vc_custom_1492003925334{padding-top: 30px !important;padding-bottom: 20px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes" content_placement="middle" css=".vc_custom_1492004079505{padding-bottom: 15px !important;}"][vc_column_inner width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">PRIVACY POLICY</a></h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">TERMS &amp; CONDITIONS</a></h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">COPYRIGHT POLICY</a></h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">CODE OF CONDUCT</a></h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">COOKIES</a></h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image image="143" img_size="81x25"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );




		$data = array();
	$data['name'] = __( 'Footer 11', 'stash' );
	$data['custom_class'] = 'hgr_template footer-11';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="footer-11" el_class="light-scheme" css=".vc_custom_1499082042856{padding-top: 150px !important;padding-bottom: 150px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h2 style="text-align: center;">Get fresh updates</h2>
[/vc_column_text][vc_column_text]
<p style="text-align: center;">You can relax knowing MAKR is managed by a team of 4 professionals who got more than seven years of experience in wordpress.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row css=".vc_custom_1492092816710{padding-top: 50px !important;}"][vc_column][hgr_mailchimpcollector hgr_mc_apikey="Ae032327dcef42ef538c2c39e88eef3f-us8" hgr_mc_listid="Fbd729b62e" hgr_mc_enable_disclaimer="yes" hgr_mc_collect_name="yes" hgr_mc_collect_lastname="yes" hgr_mc_collect_inputbgcolor="#efefef" hgr_mc_collect_inputstextcolor="#8895a0" hgr_mc_collect_btnbgcolor="#1c46f2" hgr_mc_collect_btntextcolor="#ffffff" hgr_mc_collect_nstextcolor="#8895a0" extra_class=""][vc_column_text css=".vc_custom_1496063609616{padding-top: 30px !important;}"]
<p style="text-align: center;"><a href="#">[icon name="fa fa-facebook" size="24px"] </a>     <a href="#">[icon name="fa fa-linkedin" size="24px"]</a>      <a href="#">[icon name="fa fa-twitter" size="24px"]</a>      <a href="#">[icon name="fa fa-instagram" size="24px"]</a>      <a href="#">[icon name="fa fa-google-plus" size="24px"]</a></p>
[/vc_column_text][vc_column_text css=".vc_custom_1492092927209{padding-top: 30px !important;}"]
<p style="text-align: center;">Stash ® is a registered Trademark of HighGrade Themes.
Copyright © 2017 highgradelab.com</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );


		$data = array();
	$data['name'] = __( 'Footer 12', 'stash' );
	$data['custom_class'] = 'hgr_template footer-12';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="footer-12" el_class="light-scheme" css=".vc_custom_1499083329291{padding-top: 100px !important;padding-bottom: 75px !important;background-color: #f8f8f8 !important;}"][vc_row equal_height="yes" content_placement="middle"][vc_column width="5/6"][vc_column_text]
<h5><a class="underline after first" href="#">About Us</a>     <a class="underline after first" href="#">Services</a>    <a class="underline after first" href="#">Team</a>     <a class="underline after first" href="#">Support</a>     <a class="underline after first" href="#">Contact</a></h5>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_single_image image="330" img_size="full" alignment="right"][/vc_column][/vc_row][vc_row][vc_column width="2/3"][vc_column_text]<em>It is all about you and your needs, so we have over 80 design elements and 200+ sections to choose from.</em>
<em>No coding or shortcodes involved.</em>[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<p style="text-align: right;"><em>© Copyright 2017 <a href="http://www.highgradelab.com">HighGrade</a>.
All rights reserved.</em></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	

		$data = array();
	$data['name'] = __( 'Footer 13', 'stash' );
	$data['custom_class'] = 'hgr_template footer-13';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="104" el_id="footer-13" el_class="dark-scheme" css=".vc_custom_1499084410452{padding-top: 100px !important;padding-bottom: 50px !important;background-color: #1c46f2 !important;}"][vc_row][vc_column width="1/6"][vc_column_text]
<h5>ABOUT</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492613998892{margin-top: -20px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">About Us</a>[/vc_column_text][vc_column_text css=".vc_custom_1492614061713{margin-top: -30px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">How it Works</a>[/vc_column_text][vc_column_text css=".vc_custom_1492614070730{margin-top: -30px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Team</a>[/vc_column_text][vc_column_text css=".vc_custom_1492614081424{margin-top: -30px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Mobile App</a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h5>PRESS</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492614514261{margin-top: -20px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">In the News</a>[/vc_column_text][vc_column_text css=".vc_custom_1492614524294{margin-top: -30px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Press Releases</a>[/vc_column_text][vc_column_text css=".vc_custom_1492614531978{margin-top: -30px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Awards</a>[/vc_column_text][vc_column_text css=".vc_custom_1492614541090{margin-top: -30px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Testimonials</a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h5>WORK</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492614564537{margin-top: -20px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Security</a>[/vc_column_text][vc_column_text css=".vc_custom_1492614598792{margin-top: -30px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Pricing</a>[/vc_column_text][vc_column_text css=".vc_custom_1492614608411{margin-top: -30px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Investors</a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h5>CONTACT</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492614618930{margin-top: -20px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Support</a>[/vc_column_text][vc_column_text css=".vc_custom_1492614638731{margin-top: -30px !important;}"]<a class="underline after first" href="http://highgradelab.com/stash/modern-business/#">Careers</a>[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][vc_column width="1/6"][vc_column_text]
<h5>Follow Us</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492614835007{margin-top: -10px !important;}"][icon name="fa fa-linkedin" size="18px"]     [icon name="fa fa-facebook" size="18px"]     [icon name="fa fa-twitter" size="18px"]     [icon name="fa fa-google-plus" size="18px"][/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1492614987293{padding-top: 15px !important;padding-bottom: 15px !important;}"][vc_column][vc_separator color="custom" accent_color="rgba(255,255,255,0.1)"][/vc_column][/vc_row][vc_row][vc_column width="5/6"][vc_column_text]There is enough in this kit to grow with you, so there is nothing more to spend. Today, you can have a landing page and connect with customers. You will love our powerful theme options panel, because, almost every layout or styling option can be set using the intuitive settings panel.[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]<a href="#"><strong>Terms &amp; Conditions</strong></a>[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );
	
	
	

		$data = array();
	$data['name'] = __( 'Footer 14', 'stash' );
	$data['custom_class'] = 'hgr_template footer-14';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="footer-14" el_class="light-scheme" css=".vc_custom_1499085229549{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_row][vc_column][vc_column_text]
<p style="text-align: center;"><strong><a class="underline after first" href="#">facebook</a>      <a class="underline after first" href="#">twitter</a>      <a class="underline after first" href="#">youtube</a>      <a class="underline after first" href="#">instagram</a></strong></p>

[/vc_column_text][vc_separator color="custom" accent_color="rgba(0,0,0,0.05)"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][vc_column_text]<strong>Address</strong>
44 Shirley Ave., West Chicago, IL 60185[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]<strong>Email</strong>
conference@stash.com[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]<strong>Phone</strong>
(401) 396-5428[/vc_column_text][/vc_column][vc_column width="1/4"][vc_btn title="GET IN TOUCH WITH US" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="left"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Footer 15', 'stash' );
	$data['custom_class'] = 'hgr_template footer-15';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" css=".vc_custom_1499085684855{padding-top: 50px !important;background-color: #f8f8f8 !important;}" el_class="light-scheme" el_id="footer-15"][vc_row equal_height="yes" content_placement="middle"][vc_column width="5/6"][vc_column_text css=".vc_custom_1493130513379{padding-bottom: 0px !important;}"]
<h2>Create your <em>perfect</em> website
using Stash theme.</h2>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_btn title="BUY <em>Stash</em> NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center" button_block="true"][/vc_column][/vc_row][vc_row css=".vc_custom_1493130873880{padding-top: 25px !important;padding-bottom: 15px !important;}"][vc_column][vc_separator color="custom" accent_color="rgba(0,0,0,0.05)"][/vc_column][/vc_row][vc_row content_placement="top" css=".vc_custom_1493130958770{padding-top: 20px !important;padding-bottom: 45px !important;}"][vc_column width="2/6"][vc_column_text]<a href="#">[icon name="fa fa-facebook" size="18px"]</a>      <a href="#">[icon name="fa fa-twitter" size="18px"]</a>      <a href="#">[icon name="fa fa-linkedin" size="18px"]</a>      <a href="#">[icon name="fa fa-instagram" size="18px"]</a>      <a href="#">[icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: right;"><strong>Our Company</strong></p>

[/vc_column_text][vc_column_text css=".vc_custom_1496665534938{margin-top: -35px !important;}"]
<p style="text-align: right;"><a class="underline after first" href="#">About Us</a>
<a class="underline after first" href="#">Services</a>
<a class="underline after first" href="#">Team</a>

[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: right;"><strong>Contact Us</strong></p>

[/vc_column_text][vc_column_text css=".vc_custom_1496665548844{margin-top: -35px !important;}"]
<p style="text-align: right;">email@ekko.com
77 Winchester Lane
Coachella, CA 92236

[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: right;"><strong>Support</strong></p>

[/vc_column_text][vc_column_text css=".vc_custom_1496665562107{margin-top: -35px !important;}"]
<p style="text-align: right;"><a class="underline after first" href="#">Support Forum</a>
<a class="underline after first" href="#">Documentation</a>
<a class="underline after first" href="#">Video Tutorials</a>

[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row" equal_height="yes" content_placement="middle" css=".vc_custom_1493130799668{padding-top: 20px !important;padding-bottom: 20px !important;background-color: #f2f2f2 !important;}"][vc_column width="1/2" css=".vc_custom_1493131204715{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1493131009383{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"]Copyright 2017.  All rights reserved.[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1490889213412{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1496665568666{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"]
<p style="text-align: right;">Stash theme was built with [icon name="fa fa-heart" color="#1c46f2"] by <a href="http://www.highgradelab.com" target="_blank" rel="noopener noreferrer">HighGrade</a>.</p>

[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );




		$data = array();
	$data['name'] = __( 'Footer 16', 'stash' );
	$data['custom_class'] = 'hgr_template footer-16';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_class="dark-scheme" css=".vc_custom_1499086668351{padding-top: 15px !important;padding-bottom: 15px !important;background-color: #000000 !important;}" el_id="footer-16"][vc_row gap="35" equal_height="yes"][vc_column width="1/2"][vc_single_image image="68" img_size="full" css=".vc_custom_1495715367057{margin-bottom: 0px !important;}"][/vc_column][vc_column width="1/2"][vc_column_text css=".vc_custom_1495715359360{margin-bottom: 0px !important;}"]
<p style="text-align: right;"><a href="#">[icon name="fa fa-facebook" size="18px"]</a>    <a href="#">[icon name="fa fa-twitter" size="18px"]</a>   <a href="#"> [icon name="fa fa-linkedin" size="18px"] </a>   <a href="#">[icon name="fa fa-instagram" size="18px"]</a></p>

[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Footer 17', 'stash' );
	$data['custom_class'] = 'hgr_template footer-17';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" css=".vc_custom_1499087929054{padding-top: 100px !important;padding-bottom: 50px !important;}" el_id="footer-17"][vc_row][vc_column][vc_single_image image="105" img_size="full" alignment="center"][vc_column_text css=".vc_custom_1495724883705{margin-top: -15px !important;padding-bottom: 10px !important;}"]
<p style="text-align: center;"><em>© Copyright 2017 <a href="#">HighGrade</a>. All rights reserved.</em></p>

[/vc_column_text][vc_column_text]
<p style="text-align: center;"><a class="underline after first" href="#">Home</a>   • <a class="underline after first" href="#"> About</a>   •  <a class="underline after first" href="#"> Services</a>   •  <a class="underline after first" href="#"> Team</a>   •   <a class="underline after first" href="#">Blog</a> •   <a class="underline after first" href="#">Contact</a></p>

[/vc_column_text][vc_column_text]
<p style="text-align: center;"><a href="#">[icon name="fa fa-facebook" size="18px"]</a>      <a href="#">[icon name="fa fa-twitter" size="18px"]</a>     <a href="#"> [icon name="fa fa-linkedin" size="18px"] </a>     <a href="#">[icon name="fa fa-instagram" size="18px"]</a>     <a href="#"> [icon name="fa fa-google-plus" size="18px"]</a></p>

[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );




		$data = array();
	$data['name'] = __( 'Footer 18', 'stash' );
	$data['custom_class'] = 'hgr_template footer-18';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" parallax="content-moving" parallax_image="101" el_id="footer-18" el_class="dark-scheme" css=".vc_custom_1499090100381{padding-top: 100px !important;padding-bottom: 60px !important;}"][vc_row][vc_column width="3/6"][vc_column_text]
<h4>Stash Watch Shop</h4>
[/vc_column_text][vc_column_text]Well then, you will be glad you found Stash, a value-added bundle of 40 templates which are simple, elegant and robust where it counts, in the code. You do not need to know about code, except it is all done for you. Built tough and easily installed and operating on WordPress.[/vc_column_text][vc_column_text]
<h5><a href="#">Privacy Policy</a>      <a href="#">Terms &amp; Conditions</a></h5>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h4>Products</h4>
[/vc_column_text][vc_column_text]<a class="underline after first" href="#">Watches</a>[/vc_column_text][vc_column_text css=".vc_custom_1493738611066{margin-top: -30px !important;}"]<a class="underline after first" href="#">Accessories</a>[/vc_column_text][vc_column_text css=".vc_custom_1493738611066{margin-top: -30px !important;}"]<a class="underline after first" href="#">Jewlery</a>[/vc_column_text][vc_column_text css=".vc_custom_1493738611066{margin-top: -30px !important;}"]<a class="underline after first" href="#">Gadgets</a>[/vc_column_text][vc_column_text css=".vc_custom_1493738611066{margin-top: -30px !important;}"]<a class="underline after first" href="#">Misc</a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h4>Help</h4>
[/vc_column_text][vc_column_text]<a class="underline after first" href="#">Support</a>[/vc_column_text][vc_column_text css=".vc_custom_1493738740182{margin-top: -30px !important;}"]<a class="underline after first" href="#">Help Center</a>[/vc_column_text][vc_column_text css=".vc_custom_1493738754504{margin-top: -30px !important;}"]<a class="underline after first" href="#">Documentation</a>[/vc_column_text][vc_column_text css=".vc_custom_1493738763481{margin-top: -30px !important;}"]<a class="underline after first" href="#">Tutorials</a>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h4>Follow Us</h4>
[/vc_column_text][vc_column_text]<a href="#">[icon name="fa fa-facebook" size="18px"]</a>     <a href="#">[icon name="fa fa-twitter" size="18px"]</a>     <a href="#">[icon name="fa fa-linkedin" size="18px"]</a>     <a href="#">[icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][vc_btn title="GET IN TOUCH" style="custom" custom_background="#1c46f2" custom_text="#ffffff" size="sm" align="left"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Footer 19', 'stash' );
	$data['custom_class'] = 'hgr_template footer-19';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_class="light-scheme" css=".vc_custom_1499092358845{margin-bottom: 35px !important;padding-top: 50px !important;padding-bottom: 25px !important;background-color: #ffffff !important;}" el_id="footer-19"][vc_row][vc_column width="5/6" css=".vc_custom_1494840514271{padding-top: 10px !important;}"][vc_column_text]
<h5><a class="underline after first" href="#">Product</a>     <a class="underline after first" href="#">Information</a>     <a class="underline after first" href="#">About</a>     <a class="underline after first" href="#">Team</a>     <a class="underline after first" href="#">Testimonials</a>     <a class="underline after first" href="#">Contact</a></h5>
[/vc_column_text][vc_column_text]<em>Manage multiple footers easily using WP Custom Posts.</em>
<em>No widgets, no pre-formatted elements, no fixed layouts.</em>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_single_image image="55" img_size="full"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );



		$data = array();
	$data['name'] = __( 'Footer 20', 'stash' );
	$data['custom_class'] = 'hgr_template footer-20';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="footer-20" el_class="dark-scheme" css=".vc_custom_1499092839618{padding-top: 75px !important;padding-bottom: 45px !important;background-color: #292929 !important;}"][vc_row][vc_column width="1/2"][vc_column_text]<a class="underline after first" href="#">About</a>     <a class="underline after first" href="#">Careers</a>    <a class="underline after first" href="#">Support</a>     <a href="#">[icon name="fa fa-facebook"]</a>     <a href="#">[icon name="fa fa-twitter"]</a>     <a href="#">[icon name="fa fa-linkedin"]</a>[/vc_column_text][vc_column_text]
<h5><a href="#">Privacy Policy</a>     <a href="#">Terms &amp; Conditions</a></h5>
[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text]
<h5 style="text-align: right;"><a href="#">Help</a>     <a href="#">Contact Us</a>     <a href="#">Live Chat</a></h5>
[/vc_column_text][vc_column_text]
<p style="text-align: right;">© Copyright 2017 HighGrade. All rights reserved.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
		$data = array();
	$data['name'] = __( 'Footer 21', 'stash' );
	$data['custom_class'] = 'hgr_template footer-21';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" el_id="footer-21" css=".vc_custom_1499093463918{padding-top: 75px !important;padding-bottom: 35px !important;}"][vc_row][vc_column width="1/4"][vc_column_text]
<h5>Address</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1494335651743{margin-top: -25px !important;}"]
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">

2514 Glebe Rd, Lemon Grove CA, 91945

</div>
</div>
[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<h5>E-mail</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496049180256{margin-top: -25px !important;}"]contact@stash.com[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<h5>Phone</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1494335709213{margin-top: -25px !important;}"]+1 (229) 346-9923[/vc_column_text][/vc_column][vc_column width="1/4"][vc_btn title="CONTACT US" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="center"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	

	
		$data = array();
	$data['name'] = __( 'Footer 22', 'stash' );
	$data['custom_class'] = 'hgr_template footer-22';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="footer-22" css=".vc_custom_1499095702329{padding-top: 50px !important;padding-bottom: 20px !important;background-color: #292929 !important;}" el_class="dark-scheme"][vc_row][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image="111" img_size="full" css=".vc_custom_1496674778982{margin-top: -10px !important;}"][vc_column_text css=".vc_custom_1494415598709{margin-top: -25px !important;}"]Manage multiple footers easily using WP Custom Posts. No widgets, no pre-formatted elements.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3"][vc_row_inner][vc_column_inner width="1/4"][vc_column_text]<strong>Company</strong>[/vc_column_text][vc_column_text css=".vc_custom_1496674834046{margin-top: -20px !important;}"]<a class="underline after first" href="#">About Us</a>[/vc_column_text][vc_column_text css=".vc_custom_1496674841730{margin-top: -30px !important;}"]<a class="underline after first" href="#">Services</a>[/vc_column_text][vc_column_text css=".vc_custom_1496674847958{margin-top: -30px !important;}"]<a class="underline after first" href="#">FAQ</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]<strong>Support</strong>[/vc_column_text][vc_column_text css=".vc_custom_1496674853781{margin-top: -20px !important;}"]<a class="underline after first" href="#">Forum</a>[/vc_column_text][vc_column_text css=".vc_custom_1496674859219{margin-top: -30px !important;}"]<a class="underline after first" href="#">Documentation</a>[/vc_column_text][vc_column_text css=".vc_custom_1496674865276{margin-top: -30px !important;}"]<a class="underline after first" href="#">Tutorials</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]<strong>Misc</strong>[/vc_column_text][vc_column_text css=".vc_custom_1496674871200{margin-top: -20px !important;}"]<a class="underline after first" href="#">Privacy Policy</a>[/vc_column_text][vc_column_text css=".vc_custom_1496674878206{margin-top: -30px !important;}"]<a class="underline after first" href="#">Terms &amp; Conditions</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4" offset="vc_hidden-xs"][vc_column_text]
<p style="text-align: right;">Stash theme was developed with [icon name="fa fa-heart" color="#1c46f2"] by <a class="underline after first" href="http://www.highgradelab.com">HighGrade</a>.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );		


	
		$data = array();
	$data['name'] = __( 'Footer 23', 'stash' );
	$data['custom_class'] = 'hgr_template footer-23';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="footer-23" el_class="light-scheme"][vc_row][vc_column][vc_separator color="custom" accent_color="#e9ecef"][/vc_column][/vc_row][vc_row css=".vc_custom_1494498345743{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column width="1/3"][vc_column_text]
<h5 style="text-align: left;"><a href="#">About</a>     <a href="#">Policy</a>     <a href="#">Terms</a></h5>
[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text css=".vc_custom_1494498632490{margin-top: -5px !important;}"]
<h4 style="text-align: center;">Stash WordPress Theme</h4>
[/vc_column_text][vc_column_text css=".vc_custom_1496676453912{margin-top: -20px !important;}"]
<p style="text-align: center;">© Copyright 2017 <a href="http://www.highgradelab.com">HighGrade</a>. All rights reserved.</p>
[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<p style="text-align: right;"><a href="#">[icon name="fa fa-facebook" size="18px"]</a>     <a href="#">[icon name="fa fa-linkedin" size="18px"]</a>     <a href="#">[icon name="fa fa-google-plus" size="18px"]</a></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 24', 'stash' );
	$data['custom_class'] = 'hgr_template footer-24';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" css=".vc_custom_1499112311754{padding-top: 50px !important;background-color: #f8f8f8 !important;}" el_class="light-scheme" el_id="footer-24"][vc_row content_placement="top" css=".vc_custom_1493130958770{padding-top: 20px !important;padding-bottom: 45px !important;}"][vc_column width="2/6"][vc_single_image image="69" img_size="full"][vc_column_text css=".vc_custom_1494428238537{margin-top: -20px !important;}"]<a href="#">[icon name="fa fa-facebook" size="18px"]</a>      <a href="#">[icon name="fa fa-twitter" size="18px"]</a>      <a href="#">[icon name="fa fa-linkedin" size="18px"]</a>      <a href="#">[icon name="fa fa-instagram" size="18px"]</a>      <a href="#">[icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: left;"><strong>Our Company</strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1496678272268{margin-top: -35px !important;}"]
<p style="text-align: left;"><a class="underline after first" href="#">About Us</a>
<a class="underline after first" href="#">Services</a>
<a class="underline after first" href="#">Team</a></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: left;"><strong>Contact Us</strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1493131214169{margin-top: -35px !important;}"]
<p style="text-align: left;"><span style="color: #626d79;">email@ekko.com</span>
<span style="color: #626d79;"> 77 Winchester Lane</span>
<span style="color: #626d79;"> Coachella, CA 92236</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: left;"><strong>Support</strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1496678306517{margin-top: -35px !important;}"]
<p style="text-align: left;"><a class="underline after first" href="#">Support Forum</a>
<a class="underline after first" href="#">Documentation</a>
<a class="underline after first" href="#">Video Tutorials</a></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 25', 'stash' );
	$data['custom_class'] = 'hgr_template footer-25';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="footer-25" el_class="light-scheme" css=".vc_custom_1499112665762{padding-top: 50px !important;padding-bottom: 20px !important;background-color: #f8f8f8 !important;}"][vc_row][vc_column css=".vc_custom_1496678571399{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1496678607186{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]<a href="#">[icon name="fa fa-linkedin" size="21px"]</a>      <a href="#">[icon name="fa fa-twitter" size="21px"]</a>      <a href="#">[icon name="fa fa-facebook" size="21px"]</a>      <a href="#">[icon name="fa fa-youtube" size="21px"]</a>      <a href="#">[icon name="fa fa-instagram" size="21px"]</a>      <a href="#">[icon name="fa fa-google-plus" size="21px"]</a>[/vc_column_text][vc_column_text]Navy ® is a registered Trademark of HighGrade Themes.[/vc_column_text][vc_column_text css=".vc_custom_1492003266770{margin-top: -30px !important;}"]Copyright © 2016 highgradelab.com[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6" css=".vc_custom_1496678624443{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<h5>ABOUT</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492003321916{margin-top: -20px !important;}"]<a class="underline after first" href="#">About Us</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003371698{margin-top: -20px !important;}"]<a class="underline after first" href="#">How it Works</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003378582{margin-top: -20px !important;}"]<a class="underline after first" href="#">Team</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003417182{margin-top: -20px !important;}"]<a class="underline after first" href="#">Investors</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6" css=".vc_custom_1496678628087{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<h5>PRESS</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492003426710{margin-top: -20px !important;}"]<a class="underline after first" href="#">In the News</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003432796{margin-top: -20px !important;}"]<a class="underline after first" href="#">Press Releases</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003438660{margin-top: -20px !important;}"]<a class="underline after first" href="#">Awards</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003445238{margin-top: -20px !important;}"]<a class="underline after first" href="#">Testimonials</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6" css=".vc_custom_1496678631847{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<h5>GET IN TOUCH</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1492003458503{margin-top: -20px !important;}"]<a class="underline after first" href="#">Support</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003492533{margin-top: -20px !important;}"]<a class="underline after first" href="#">Affiliates</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003499025{margin-top: -20px !important;}"]<a class="underline after first" href="#">Blog</a>[/vc_column_text][vc_column_text css=".vc_custom_1492003509205{margin-top: -20px !important;}"]<a class="underline after first" href="#">Contact Us</a>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 26', 'stash' );
	$data['custom_class'] = 'hgr_template footer-26';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_id="footer-26" el_class="light-scheme" css=".vc_custom_1499112801988{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_row][vc_column width="1/6"][vc_single_image image="1887" img_size="full"][/vc_column][vc_column width="2/3"][vc_column_text]
<p style="text-align: center;"><a class="underline after first" href="#">About Us</a>      <a class="underline after first" href="#">Portfolio</a>      <a class="underline after first" href="#">Contact</a>      <a class="underline after first" href="#">Privacy Policy</a>      <a class="underline after first" href="#">Terms &amp; Conditions</a></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<p style="text-align: right;"><a href="#">[icon name="fa fa-facebook" size="18px"]</a>     <a href="#">[icon name="fa fa-linkedin" size="18px"]</a>     <a href="#">[icon name="fa fa-google-plus" size="18px"]</a></p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 27', 'stash' );
	$data['custom_class'] = 'hgr_template footer-27';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section el_class="dark-scheme" css=".vc_custom_1499113773459{margin-bottom: 30px !important;padding-top: 50px !important;padding-bottom: 25px !important;background-color: #292929 !important;}" el_id="footer-27"][vc_row][vc_column width="5/6" css=".vc_custom_1494840514271{padding-top: 10px !important;}"][vc_column_text]
<h5><a class="underline after first" href="#">Product</a>     <a class="underline after first" href="#">Information</a>     <a class="underline after first" href="#">About</a>     <a class="underline after first" href="#">Team</a>     <a class="underline after first" href="#">Testimonials</a>     <a class="underline after first" href="#">Contact</a></h5>
[/vc_column_text][vc_column_text]<em>Manage multiple footers easily using WP Custom Posts.</em>
<em>No widgets, no pre-formatted elements, no fixed layouts.</em>[/vc_column_text][/vc_column][vc_column width="1/6"][vc_single_image image="55" img_size="full"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 28', 'stash' );
	$data['custom_class'] = 'hgr_template footer-28';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section css=".vc_custom_1499114586650{padding-right: 15px !important;padding-left: 15px !important;background-color: #292929 !important;}" el_class="dark-scheme" el_id="footer-28"][vc_row content_placement="middle" css=".vc_custom_1494856339623{margin-top: 0px !important;border-bottom-width: 1px !important;padding-top: 0px !important;border-bottom-color: #141414 !important;border-bottom-style: solid !important;}"][vc_column width="2/3" css=".vc_custom_1490889117390{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column_text css=".vc_custom_1496055174544{padding-bottom: 0px !important;}"]
<h3>Create your <em>perfect</em> website
using Stash theme.</h3>
[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1490888160191{padding-top: 15px !important;padding-bottom: 15px !important;}"][vc_btn title="BUY <em>Stash</em> THEME NOW" style="custom" custom_background="#1c46f2" custom_text="#ffffff" align="right"][/vc_column][/vc_row][vc_row css=".vc_custom_1494856259784{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column width="1/4"][vc_column_text css=".vc_custom_1490888534078{margin-top: -30px !important;}"]<a href="#">[icon name="fa fa-facebook" size="18px"]</a>      <a href="#">[icon name="fa fa-twitter" size="18px"]</a>      <a href="#">[icon name="fa fa-linkedin" size="18px"]</a>      <a href="#">[icon name="fa fa-instagram" size="18px"]</a>      <a href="#">[icon name="fa fa-google-plus" size="18px"]</a>[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<p style="text-align: right;"><strong>Contact Us</strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1496682773506{margin-top: -35px !important;}"]
<p style="text-align: right;">email@ekko.com
77 Winchester Lane
Coachella, CA 92236</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<p style="text-align: right;"><strong>Our Company</strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1496682782563{margin-top: -35px !important;}"]
<p style="text-align: right;"><a class="underline after first" href="#">About Us</a>
<a class="underline after first" href="#">Services</a>
<a class="underline after first" href="#">Team</a></p>
[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<p style="text-align: right;"><strong>Support</strong></p>
[/vc_column_text][vc_column_text css=".vc_custom_1496682787941{margin-top: -35px !important;}"]
<p style="text-align: right;"><a class="underline after first" href="#">Support Forum</a>
<a class="underline after first" href="#">Documentation</a>
<a class="underline after first" href="#">Video Tutorials</a></p>
[/vc_column_text][/vc_column][/vc_row][vc_row equal_height="yes" content_placement="middle" css=".vc_custom_1494856103184{padding-top: 20px !important;padding-bottom: 20px !important;background-color: #141414 !important;}"][vc_column width="1/2" offset="vc_hidden-sm vc_hidden-xs" css=".vc_custom_1490889217903{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1496682833640{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"]© Copyright 2017 <a href="http://www.highgradelab.com" target="_blank" rel="noopener noreferrer">HighGrade</a>. All rights reserved.[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1490889213412{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1496682983590{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"]
<p style="text-align: right;">See our complete portfolio on <a href="http://themeforest.net/user/highgrade/portfolio?ref=HighGrade" target="_blank" rel="noopener noreferrer">ThemeForest</a>.</p>
[/vc_column_text][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 29', 'stash' );
	$data['custom_class'] = 'hgr_template footer-29';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_id="footer-29" css=".vc_custom_1499115252304{padding-top: 50px !important;padding-bottom: 20px !important;background-color: #292929 !important;}" el_class="dark-scheme"][vc_row][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_column_text]<strong>About US</strong>[/vc_column_text][vc_column_text css=".vc_custom_1494855027862{margin-top: -20px !important;}"]Manage multiple footers easily using WP Custom Posts. No widgets, no pre-formatted elements, no fixed layouts.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3"][vc_row_inner][vc_column_inner width="1/4"][vc_column_text]<strong>Company</strong>[/vc_column_text][vc_column_text css=".vc_custom_1494855021938{margin-top: -20px !important;}"]<span style="color: #a0acb9;"><a class="underline after first" style="color: #a0acb9;" href="#">About Us</a></span>[/vc_column_text][vc_column_text css=".vc_custom_1491826580002{margin-top: -30px !important;}"]<span style="color: #a0acb9;"><a class="underline after first" style="color: #a0acb9;" href="#">Services</a></span>[/vc_column_text][vc_column_text css=".vc_custom_1491826583434{margin-top: -30px !important;}"]<span style="color: #a0acb9;"><a class="underline after first" style="color: #a0acb9;" href="#">FAQ</a></span>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]<strong>Support</strong>[/vc_column_text][vc_column_text css=".vc_custom_1491826803001{margin-top: -20px !important;}"]<span style="color: #a0acb9;"><a class="underline after first" style="color: #a0acb9;" href="#">Forum</a></span>[/vc_column_text][vc_column_text css=".vc_custom_1491826813161{margin-top: -30px !important;}"]<span style="color: #a0acb9;"><a class="underline after first" style="color: #a0acb9;" href="#">Documentation</a></span>[/vc_column_text][vc_column_text css=".vc_custom_1491826820946{margin-top: -30px !important;}"]<span style="color: #a0acb9;"><a class="underline after first" style="color: #a0acb9;" href="#">Tutorials</a></span>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]<strong>Misc</strong>[/vc_column_text][vc_column_text css=".vc_custom_1491826865868{margin-top: -20px !important;}"]<span style="color: #a0acb9;"><a class="underline after first" style="color: #a0acb9;" href="#">Privacy Policy</a></span>[/vc_column_text][vc_column_text css=".vc_custom_1491826878325{margin-top: -30px !important;}"]<span style="color: #a0acb9;"><a class="underline after first" style="color: #a0acb9;" href="#">Terms &amp; Conditions</a></span>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4" offset="vc_hidden-xs"][vc_column_text]
<p style="text-align: right;">Stash theme was developed with [icon name="fa fa-heart" color="#1c46f2"] by <a class="underline after first" href="http://www.highgradelab.com">HighGrade</a>.</p>

[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 30', 'stash' );
	$data['custom_class'] = 'hgr_template footer-30';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_row full_width="stretch_row" el_id="footer-30" el_class="light-scheme" css=".vc_custom_1499115704136{background-color: #f8f8f8 !important;}"][vc_column width="1/4"][vc_column_text]© Copyright 2017 HighGrade Studio.[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][vc_column width="1/4"][/vc_column][vc_column width="1/4"][vc_column_text]<a href="#">[icon name="fa fa-linkedin" size="18px"]</a>     <a href="#">[icon name="fa fa-facebook" size="18px"]</a>     <a href="#">[icon name="fa fa-twitter" size="18px"]</a>     <a href="#">[icon name="fa fa-google-plus" size="18px"]</a>     <a href="#">[icon name="fa fa-youtube" size="18px"]</a>     <a href="#">[icon name="fa fa-instagram" size="18px"]</a>[/vc_column_text][/vc_column][/vc_row]
CONTENT;
	
	vc_add_default_templates( $data );		
	
	
	
	
		$data = array();
	$data['name'] = __( 'Footer 31', 'stash' );
	$data['custom_class'] = 'hgr_template footer-31';
	$data['image_path'] = preg_replace( '/\s/', '-', get_template_directory_uri() .'/highgrade/hgr_vc_templates/assets/template_preview/footer/' . strtolower($data['name']) . '.jpg' ); 
	$data['content'] = <<<CONTENT
       [vc_section full_width="stretch_row" el_class="light-scheme" el_id="footer-31" css=".vc_custom_1499162180994{padding-top: 35px !important;}"][vc_row equal_height="yes" content_placement="middle"][vc_column width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">Privacy Policy</a></h5>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">Terms &amp; Conditions</a></h5>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">About our Company</a></h5>
[/vc_column_text][/vc_column][vc_column width="1/6"][vc_column_text]
<h5><a class="underline after first" href="#">Get in Touch</a></h5>
[/vc_column_text][/vc_column][vc_column width="2/6"][vc_column_text]
<p style="text-align: right;">© Copyright 2017 <a href="http://www.highgradelab.com" target="_blank" rel="noopener noreferrer">HighGrade</a>. All rights reserved.</p>

[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_separator color="custom" accent_color="#e9ecef"][/vc_column][/vc_row][vc_row content_placement="top"][vc_column width="1/4"][vc_column_text]
<h5>Address</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496141437070{margin-top: -35px !important;}"]
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">

2514 Glebe Rd, Lemon Grove CA, 91945</div>
</div>
[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<h5>E-mail</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496141441724{margin-top: -35px !important;}"]contact@stash.com[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]
<h5>Phone</h5>
[/vc_column_text][vc_column_text css=".vc_custom_1496141446325{margin-top: -35px !important;}"]+1 (229) 346-9923[/vc_column_text][/vc_column][vc_column width="1/4" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][vc_single_image image="269" img_size="full" alignment="right" css=".vc_custom_1496138074896{padding-top: 10px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;
	
	vc_add_default_templates( $data );	
	
	
	
	
	
}