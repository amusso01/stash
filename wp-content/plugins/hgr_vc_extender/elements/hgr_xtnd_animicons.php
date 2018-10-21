<?php
/*
* Add-on Name: Animated SVG Icons
* Add-on URI: http://www.highgradelab.com/
* Since: 3.3
* Author: Eugen Petcu
*/
if(!class_exists('HGR_VC_ANIMICON')) {
	class HGR_VC_ANIMICON extends WPBakeryShortCode {

		function __construct() {
			add_action('admin_init', array($this, 'hgr_animicon_init'));
			
			add_shortcode( 'hgr_animicon', array($this, 'hgr_animicon') );
			
			/*
				Param type "number"
			*/ 
			if ( function_exists('vc_add_shortcode_param')){
				vc_add_shortcode_param('number' , array('HGR_XTND', 'make_number_input' ) );
				vc_add_shortcode_param('anim_iconbrowser', array(HGR_XTND, 'anim_iconbrowser') );
			}

		}
		
		/*
			Visual Composer mapping function
			Public API
			Refference:	http://kb.wpbakery.com/index.php?title=Vc_map
			Example:		http://kb.wpbakery.com/index.php?title=Visual_Composer_tutorial
		*/
		function hgr_animicon_init() {
			if(function_exists('vc_map')) {
				vc_map(
					array(
					   "name"				=>	__("HGR Animated Icon", "hgrextender"),
					   "holder"			=>	"div",
					   "base"				=>	"hgr_animicon",
					   "class"				=>	"",
					   "icon"				=>	"hgr_icon",
					   "description"		=>	__("Animated SVG Icon with advanced parameters", "hgrextender"),
					   "category"			=>	__("HighGrade Extender", "hgrextender"),
					   "content_element"	=>	true,
					   "params"			=>	array(
							array(
								"type"			=>	"anim_iconbrowser",
								"class"			=>	"",
								"heading"		=>	__("Select icon:", "hgrextender"),
								"param_name"	=>	"animicon_icon",
								"value"			=>	"bi-tickmark",
								"description"	=>	__("Click on an icon to select it.", "hgrextender"),
							),
						   array(
								"type"			=>	"colorpicker",
								"class"			=>	"",
								"heading"		=>	__("Icon color:", "hgrextender"),
								"param_name"	=>	"animicon_iconcolor",
								"value"			=>	"#333333",
								"description"	=>	__("Select prefered icon color.", "hgrextender"),
							),
							array(
								"type"			=>	"colorpicker",
								"class"			=>	"",
								"heading"		=>	__("Icon hover color:", "hgrextender"),
								"param_name"	=>	"animicon_iconcolor_hover",
								"value"			=>	"#666666",
								"description"	=>	__("Select prefered icon color on hover state.", "hgrextender"),							
							),
							array(
								"type"			=>	"number",
								"class"			=>	"",
								"heading"		=>	__("Stroke width:", "hgrextender"),
								"param_name"	=>	"animicon_strokewidth",
								"value"			=>	2,
								"min"			=>	1,
								"max"			=>	10,
								"suffix"		=>	"px",
								"description"	=>	__("Set the stroke width.", "hgrextender"),
							),
							array(
								"type"			=>	"number",
								"class"			=>	"",
								"heading"		=>	__("Icon height:", "hgrextender"),
								"param_name"	=>	"animicon_iconheight",
								"value"			=>	35,
								"min"			=>	5,
								"max"			=>	200,
								"suffix"		=>	"px",
								"description"	=>	__("Set the icon height. Width will be set automatically.", "hgrextender"),
							),
							array(
								"type"			=>	"dropdown",
								"class"			=>	"",
								"heading"		=>	__("Icon Alignment:", "hgrextender"),
								"param_name"	=>	"animicon_alignment",
								"value"			=>	array(
										__( 'Left', 'hgrextender' ) => 'left',
										__( 'Center', 'hgrextender' ) => 'center',
										__( 'Right', 'hgrextender' ) => 'right',
									),
								"save_always" => true,
							),
							array(
								"type"			=>	"dropdown",
								"class"			=>	"",
								"heading"		=>	__("Icon Background Settings:", "hgrextender"),
								"param_name"	=>	"animicon_background_type",
								"value"			=>	array(
										__( 'None', 'hgrextender' ) => 'none',
										__( 'Select background color', 'hgrextender' ) => 'icon-background-select',
									),
								"save_always" => true,
								"description"	=>	__("Select background settings for your icon.", "hgrextender"),
							),
							array(
								"type"			=>	"colorpicker",
								"class"			=>	"",
								"heading"		=>	__("Icon Background Color:", "hgrextender"),
								"param_name"	=>	"animicon_backcolor",
								"value"			=>	"#333333",
								"description"	=>	__("Pick a background color for your icon.", "hgrextender"),
								"dependency"	=>	array(
										"element"	=>	"animicon_background_type",
										"value"		=>	array( "icon-background-select" ),
									),						
							),
							array(
								"type"			=>	"colorpicker",
								"class"			=>	"",
								"heading"		=>	__("Icon Hover Background Color:", "hgrextender"),
								"param_name"	=>	"animicon_backcolor_hover",
								"value"			=>	"#333333",
								"description"	=>	__("Pick a background color for your icon on hover state.", "hgrextender"),
								"dependency"	=>	array(
										"element"	=>	"animicon_background_type",
										"value"		=>	array( "icon-background-select" ),
									),						
							),
							array(
								"type"			=>	"textfield",
								"class"			=>	"",
								"heading"		=>	__("Icon Background Roundness:", "hgrextender"),
								"description"	=>	__("Enter numeric value and measure unit (px, %), example: 50% for perfect circle, or 10px for 10 pixel rounded corners.", "hgrextender"),
								"param_name"	=>	"animicon_backroundness",
								"value"			=>	"0px",
								"dependency"	=>	array(
												"element"	=>	"animicon_background_type",
												"value"		=>	array( "icon-background-select" ),
											),
								"save_always" 	=>	true,
							),
							array(
								"type"			=>	"dropdown",
								"class"			=>	"",
								"heading"		=>	__("Icon Border Settings:", "hgrextender"),
								"param_name"	=>	"animicon_bordertype",
								"value"			=>	array(
										__( 'None', 'hgrextender' ) => 'none',
										__( 'Set border', 'hgrextender' ) => 'icon-border-select',
									),
								"save_always" => true,
								"description"	=>	__("Select border settings for your icon.", "hgrextender"),
								"dependency"	=>	array(
									"element"	=>	"animicon_background_type",
									"value"		=>	array( "icon-background-select" ),
								),
							),
							array(
								"type"			=>	"colorpicker",
								"class"			=>	"",
								"heading"		=>	__("Icon Border Color:", "hgrextender"),
								"param_name"	=>	"animicon_bordercolor",
								"value"			=>	"",
								"description"	=>	__("Pick a border color for your icon.", "hgrextender"),
								"dependency"	=>	array(
										"element"	=>	"animicon_bordertype",
										"value"		=>	array( "icon-border-select" ),
									),						
							),
							array(
								"type"			=>	"colorpicker",
								"class"			=>	"",
								"heading"		=>	__("Icon Hover Border Color:", "hgrextender"),
								"param_name"	=>	"animicon_bordercolor_hover",
								"value"			=>	"",
								"description"	=>	__("Pick a border color for your icon on hover state.", "hgrextender"),
								"dependency"	=>	array(
										"element"	=>	"animicon_bordertype",
										"value"		=>	array( "icon-border-select" ),
									),						
							),
							array(
								"type"			=>	"number",
								"class"			=>	"",
								"heading"		=>	__("Icon Border Width:", "hgrextender"),
								"param_name"	=>	"animicon_borderwidth",
								"value"			=>	1,
								"min"			=>	0,
								"max"			=>	10,
								"suffix"		=>	"px",
								"description"	=>	__("Enter value in pixels.", "hgrextender"),
								"dependency"	=>	array(
										"element"	=>	"animicon_bordertype",
										"value"		=>	array( "icon-border-select" ),
									),
							),
							array(
								 "type"			=>	"dropdown",
								 "class"		=>	"",
								 "heading"		=>	__("Link", "hgrextender"),
								 "param_name"	=>	"custom_link",
								 "value"			=>	array(
										__( 'No Link', 'hgrextender' ) => 'none',
										__( 'Add custom link to box', 'hgrextender' ) => 'yes-link',
									),
								 "save_always" => true,
								 "description"	=>	__("You can add / remove custom link.", "hgrextender")
							),
							array(
								 "type"			=>	"vc_link",
								 "class"		=>	"",
								 "heading"		=>	__("Link ","hgrextender"),
								 "param_name"	=>	"animicon_linkurl",
								 "value"		=>	"",
								 "description"	=>	__("You can add or remove the existing link from here.", "hgrextender"),
								 "dependency"	=>	array(
								 		"element"	=>	"custom_link",
										"value"		=>	array("yes-link"),
									),
							),
							array(
								"type"			=>	"textfield",
								"class"			=>	"",
								"heading"		=>	__("Icon extra class:", "hgrextender"),
								"param_name"	=>	"animicon_extraclass",
								"value"			=>	"",
								"description"	=>	__("Add extra class name. You can use this class for your customizations.", "hgrextender")					
							),
							array(
								'type' => 'css_editor',
								'heading' => __( 'Css', 'hgrextender' ),
								'param_name' => 'css',
								'group' => __( 'Design options', 'hgrextender' ),
							),
					   )
					) 
				);
			}
		}
		
		function hgr_animicon ($atts) {
			
	/*
		 Empty vars declaration
	*/
	$output = $animicon_icon = $animicon_iconcolor = $animicon_iconcolor_hover = $animicon_strokewidth = $animicon_iconheight = $animicon_alignment = $animicon_background_type = $animicon_backcolor = $animicon_backcolor_hover = $animicon_backroundness = $animicon_bordertype = $animicon_bordercolor = $animicon_bordercolor_hover = $animicon_borderwidth = $custom_link = $animicon_linkurl = $animicon_extraclass = $css = '';
	
	/*
		WordPress function to extract shortcodes attributes
		Refference: http://codex.wordpress.org/Function_Reference/shortcode_atts
	*/
	extract(shortcode_atts(array(
		'animicon_icon'					=> 'bi-tickmark',
		'animicon_iconcolor'			=> '#444',
		'animicon_iconcolor_hover'		=> '#fff',
		'animicon_strokewidth'			=> '3',
		'animicon_iconheight'			=> '100',
		'animicon_alignment'			=> 'center',
		'animicon_background_type'		=> 'none',
		'animicon_backcolor'			=> '',
		'animicon_backcolor_hover'		=> '',
		'animicon_backroundness'		=> '0px',
		'animicon_bordertype'			=> 'none',
		'animicon_bordercolor'			=> '',
		'animicon_bordercolor_hover'	=> '',
		'animicon_borderwidth'			=> '',
		'custom_link'					=> 'none',
		'animicon_linkurl'				=> '',
		'animicon_extraclass'			=> '',
		'css'							=> '',
	), $atts));
	
	
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
			
	
	switch($animicon_alignment){
		case 'left': $alignment_style = '';
			break;
		
		case 'center': $alignment_style = ' display:block; margin-left:auto; margin-right:auto;';
			break;
		
		case 'right': $alignment_style = ' width:100%; text-align:right;';
			break;
		
		default: $alignment_style = '';
	}
	
	switch($animicon_bordertype){
		case 'none':
			$normal_bd = '0px';
		break;
		
		case 'icon-border-select':
			$normal_bd = $animicon_borderwidth.'px solid '.$animicon_bordercolor;
			$hover_bd = $animicon_borderwidth.'px solid '.$animicon_bordercolor_hover;
		break;
		
		default:
	}
	
	$icon_id = "hgr_animicon_".uniqid();
	
	$animicons = array();
	@include( plugin_dir_path( __DIR__ ).'includes/fonts/animicons.php' );
			
	foreach($animicons as $icon => $icondata){
		if( $icon == $animicon_icon ){
			$animicon_icon = $icondata['svg'];
			$animicon_js = $icondata['js'];
		}
	}
			
	$output .='<style>';
	$output .='#'.$icon_id.'.bi-icon {}
				#'.$icon_id.'.bi-icon svg polyline,
				#'.$icon_id.'.bi-icon svg polygon,
				#'.$icon_id.'.bi-icon svg rect,
				#'.$icon_id.'.bi-icon svg circle,
				#'.$icon_id.'.bi-icon svg line,
				#'.$icon_id.'.bi-icon svg path {
					stroke-linecap="square";
					stroke-linejoin="miter";
					stroke-width: '.$animicon_strokewidth.';
					stroke-miterlimit: 4;
					stroke: '.$animicon_iconcolor.';
					fill: none;
				}
				#'.$icon_id.'.bi-icon:hover {}
				#'.$icon_id.'.bi-icon svg:hover polyline,
				#'.$icon_id.'.bi-icon svg:hover polygon,
				#'.$icon_id.'.bi-icon svg:hover rect,
				#'.$icon_id.'.bi-icon svg:hover circle,
				#'.$icon_id.'.bi-icon svg:hover line,
				#'.$icon_id.'.bi-icon svg:hover path {
					stroke: '.$animicon_iconcolor_hover.';
				}
				#'.$icon_id.'.bi-icon svg{ height: '.$animicon_iconheight.'px;}
				
				#'.$icon_id.'.bi-icon{
					text-align:'.$animicon_alignment.';
				}
				#'.$icon_id.'.bi-icon svg{
				margin-left:auto; margin-right:auto;

				
				}';
			
		if($animicon_background_type != 'none'){
			$output .='#'.$icon_id.'.bi-icon svg{ background-color: '.$animicon_backcolor.'; }';
			$output .='#'.$icon_id.'.bi-icon svg:hover{ background-color: '.$animicon_backcolor_hover.'; }';
		}
		
		if($animicon_bordertype != 'none'){
			$output .='#'.$icon_id.'.bi-icon svg{ border: '.$animicon_borderwidth.'px solid '.$animicon_bordercolor.'; }';
			$output .='#'.$icon_id.'.bi-icon svg:hover{ border: '.$animicon_borderwidth.'px solid '.$animicon_bordercolor_hover.'; }';
		}
		if($animicon_backroundness != '0px'){
			$output .='#'.$icon_id.'.bi-icon svg{ border-radius: '.$animicon_backroundness.'; }';
		}
			
	$output .='</style>';
	
	if($custom_link !== 'none' && !empty($animicon_linkurl) ){								
		$href = vc_build_link($animicon_linkurl);
		if($href['url'] !== "") {
			$link_target = (isset($href['target'])) ? 'target="'.trim($href['target']).'"' : '';
		}
		$link_prefix = '<a href="'.$href['url'].'" '.$link_target.'>';
		$link_sufix = '</a>';
	} else {
		$link_prefix = '';
		$link_sufix = '';
	}
	
	$output	.= '<div id="'.$icon_id.'" class="bi-icon '.$animicon_extraclass.' ' . $css_class . '">';
	$output .= $link_prefix.$animicon_icon.$link_sufix;
	$output	.= '</div><!-- .bi-icon -->';
		
	//wp_add_inline_style( 'hgr-vc-extender-style', $output_css );
	wp_add_inline_script( 'hgr_animicons_vivus', $animicon_js, 'after' );		
	
	/*
		Return the output
	*/
	return $output;
}
	}
	new HGR_VC_ANIMICON;
}