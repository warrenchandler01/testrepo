<?php
/**
 * Template used for single posts and other post-types
 * that don't have a specific template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>

<section id="content" class="full-width" style="position:relative; width:100%;">
			<div id="post-584" class="post-584 page type-page status-publish hentry" >
			    
<style>
    div.fusion-row { max-width:100% !Important; }
    footer div.fusion-row { max-width:1224px !important; }
    #main { padding-left:0px; padding-right:0px; padding-top:50px;}
    div.fusion-builder-row { /*padding-left:60px !important; padding-right:60px !important;*/ }
</style>			    
			
	<div class="post-content">
				<div class="fusion-fullwidth fullwidth-box first-container nonhundred-percent-fullwidth"  style='background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:30px;padding-right:60px;padding-bottom:0px;padding-left:60px;'><div class="fusion-builder-row fusion-row "><div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-last product-title 1_1"  style='margin-top:-80px;margin-bottom:20px;'>
					<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
						<h1><?php echo get_the_title(); ?></h1>
<div class="fusion-clearfix"></div>

					</div>
				</div></div></div><div  class="fusion-fullwidth fullwidth-box product-description nonhundred-percent-fullwidth"  style='background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:60px;padding-bottom:0px;padding-left:60px;'><div class="fusion-builder-row fusion-row "><div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_2  fusion-one-half fusion-column-first 1_2"  style='margin-top:0px;margin-bottom:20px;  width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );margin-right: 4%;'>
					<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
					    
	    
					    
					    
					    
	<!-- START WARREN CHANGES --> 				    
					    
<?php 
        // PREP TYPES IMAGE OUTPUT  - Do nothing if Types isn't active
        
        if( apply_filters( 'types_is_active', false ) ) {
     
            $output = '';
 
            // ID of the current post
            $post_id = get_the_ID();
 
            // Slug of a Types repeating image field, without the "wpcf-" prefix.
            $field_slug = 'product-images'; // set the field slug
 
            // Parameters that define the field
            $field_definition = wpcf_fields_get_field_by_slug( $field_slug );
            if( ! empty( $field_definition ) ) {
					    

// Get featured image as backup in case HERO IMAGE not set
$featured_img =  get_the_post_thumbnail_url();

// Get HERO IMAGE
$this_featured_img = types_render_field( "hero-image", array( "alt" => "Featured Image", "width" => "960", "height" => "960", "proportional" => "true", "output"=> "raw" ) );



// Is HERO IMAGE set?  If not, show back up featured image
if ((!$this_featured_img)||($this_featured_img=='')) { $this_featured_img = $featured_img; }


?>


						

                        
 <div class="fusion-clearfix">
 
<style>
    div.avada-product-gallery-thumbs-wrapper { left:-10px; }
</style> 
 

<div class="avada-single-product-gallery-wrapper" style="max-width:100%;">
	<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images avada-product-gallery" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">

<figure class="woocommerce-product-gallery__wrapper">
	<div data-thumb="<?php echo $this_featured_img; ?>" class="woocommerce-product-gallery__image">
		
		<a href="<?php echo $this_featured_img; ?>"><img width="960" height="600" src="<?php echo $this_featured_img; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="Mode AL Product" data-caption="" data-src="<?php echo $this_featured_img; ?>" data-large_image="<?php echo $this_featured_img; ?>" data-large_image_width="1024" data-large_image_height="768" </a>

		<a class="avada-product-gallery-lightbox-trigger" href="<?php echo $this_featured_img; ?>" data-rel="iLightbox[product-gallery]"></a></div>
		
		
<?php         
                // Get the raw field and product title data for the thumbnails
                $images = get_post_meta( $post_id, "wpcf-{$field_slug}" );
                $producttitle=get_the_title();
                $imgcount=0;
				
                foreach( $images as $image_index => $image ) {
                    

 
                    // Parameters for the Types field rendering mechanism.
                    $image_parameters = array(
                        'proportional' => 'true',
                        'url' => 'true',
                        'field_value' => $image
                    );
 
                    // Get an image of specific (maximum) proportions.
                    // NOTE: Update image size to your needs
                    $thumbnail_parameters = array_merge( $image_parameters, array( 'width' => '960', 'height' => '960' ) );
                    $thumbnail_url = types_render_field_single( $field_definition, $thumbnail_parameters, null, '', $image_index );
 
                    // Get the image in full size.
                    $fullsize_parameters = array_merge( $image_parameters, array( 'size' => 'full' ) );
                    $fullsize_url = types_render_field_single( $field_definition, $fullsize_parameters, null, '', $image_index );
 
                    // OUTPUT FOR SINGLE IMAGE - NEED TO FIX IMAGE SIZE

// // start 0 check                    

if (!empty($image)) {
	
$output .= sprintf(
                        '	<div data-thumb="'. $fullsize_url .'" class="woocommerce-product-gallery__image"><a href="'. $fullsize_url .'"><img width="960" height="600" src="'. $fullsize_url .'" class="attachment-shop_single size-shop_single" alt="" title="black_rebel_leather_jacket" data-caption="" data-src="'. $fullsize_url .'" data-large_image="'. $fullsize_url .'" data-large_image_width="1024" data-large_image_height="768" </a>

		<a class="avada-product-gallery-lightbox-trigger" href="'. $fullsize_url .'" data-rel="iLightbox[product-gallery]"></a></div>'
                    ); 	
                    
} // end 0 check                    
                }
                
            
                
            }
            
   

            echo $output;

        }
						
						
    ?>

	
</figure>
</div>
	</div>
    
<?php //CHECK ARRAY - SHOWS 0 ---  print_r($image_index); ?>    					    
<!-- END WARREN CHANGES -->	


                            
                            
                            
                        </div>

					</div>
				</div><div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_2  fusion-one-half fusion-column-last 1_2"  style='margin-top:0px;margin-bottom:20px;width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );'>
					<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
						<h3>Product Description</h3>
<p>
<?php
echo do_shortcode( '[wpv-post-body view_template="None"]' );

?>
</p>
<div class="fusion-button-wrapper"><style type="text/css" scoped>.fusion-button.button-1 .fusion-button-text, .fusion-button.button-1 i {color:#ffffff;}.fusion-button.button-1 {border-width:0px;border-color:#ffffff;}.fusion-button.button-1 .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-1:hover .fusion-button-text, .fusion-button.button-1:hover i,.fusion-button.button-1:focus .fusion-button-text, .fusion-button.button-1:focus i,.fusion-button.button-1:active .fusion-button-text, .fusion-button.button-1:active{color:#ffffff;}.fusion-button.button-1:hover, .fusion-button.button-1:focus, .fusion-button.button-1:active{border-width:0px;border-color:#ffffff;}.fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:active .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-1{width:auto;}</style><a class="ma-modal-button fusion-button button-flat fusion-button-square button-large button-default button-1" style="margin-bottom:10px;" target="_self" href="#"><span class="fusion-button-text">Enquire Now</span></a></div>

<?php 
// Get Amazon Link and Check It Exists
$amazonURL = do_shortcode( '[types field="amazon-link" output="raw"][/types]' ); 
if ((amazonURL!='')&&($amazonURL)) {
?>

<div class="fusion-button-wrapper"><style type="text/css" scoped>.fusion-button.button-1 .fusion-button-text, .fusion-button.button-1 i {color:#ffffff;}.fusion-button.button-1 {border-width:0px;border-color:#ffffff;}.fusion-button.button-1 .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-1:hover .fusion-button-text, .fusion-button.button-1:hover i,.fusion-button.button-1:focus .fusion-button-text, .fusion-button.button-1:focus i,.fusion-button.button-1:active .fusion-button-text, .fusion-button.button-1:active{color:#ffffff;}.fusion-button.button-1:hover, .fusion-button.button-1:focus, .fusion-button.button-1:active{border-width:0px;border-color:#ffffff;}.fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:active .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-1{width:auto;}</style><a class="fusion-button button-flat fusion-button-square button-large button-default button-1" style="margin-bottom:10px;" target="_blank" href="<?php echo $amazonURL; ?>"><span class="fusion-button-text">Buy Now on Amazon</span></a></div>

<?php } // close If Amazon Link is Present ?>

<div class="fusion-clearfix"></div>



					</div>
				</div></div></div><!----temp change of colour from grey#f6f6f6 to red#6a1626 ------><div  class="fusion-fullwidth fullwidth-box newsletter-container narrow nonhundred-percent-fullwidth"  style='background-color: #f6f6f6;background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:30px;padding-bottom:0px;padding-left:30px;'><div class="fusion-builder-row fusion-row "><div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_2  fusion-one-half fusion-column-first 1_2"  style='margin-top:0px;margin-bottom:20px;width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );margin-right: 4%;'>
					<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;min-height:300px;"  data-bg-url="">
	<!----- request by client to override the head for tech spec h3, removed so it can be done manually---->				


<?php
echo types_render_field( "technical-specifications", array( ) );
?>

<div class="fusion-clearfix"></div>

					</div>
				</div><div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_2  fusion-one-half fusion-column-last 1_2"  style='margin-top:0px;margin-bottom:20px;width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );'>
					<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
						

<!----- move this h3 to match alignment due to tec spec change ----->
<h3>Downloads</h3>
<?php //echo types_render_field("file-downloads", array("title" => "read me...")); 
echo do_shortcode( '[wpv-view name="single-product-downloads"]' );
?>





<div class="fusion-clearfix"></div>

					</div>
				</div></div></div>
                
                
                
                <!-------<div  class="fusion-fullwidth fullwidth-box newsletter-bottom nonhundred-percent-fullwidth"  style='background-color: #eeeeee;background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:30px;padding-bottom:0px;padding-left:30px;'><div class="fusion-builder-row fusion-row "></div></div>-------->
                
                 <div  class="fusion-fullwidth fullwidth-box newsletter-top nonhundred-percent-fullwidth"  style='background-color: #f6f6f6;background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top: 0px;'>
                
                <!-----Dave angle---->
                     <?php echo do_shortcode('
   
[fusion_builder_container admin_label="top" hundred_percent="no" equal_height_columns="no" menu_anchor="" hide_on_mobile="small-visibility,medium-visibility,large-visibility" class="modeanglea" id="modeanglea" background_color="#f6f6f6" background_image="" background_position="center center" background_repeat="no-repeat" fade="no" background_parallax="none" enable_mobile="no" parallax_speed="0.3" video_mp4="" video_webm="" video_ogv="" video_url="" video_aspect_ratio="16:9" video_loop="yes" video_mute="yes" video_preview_image="" border_size="" border_color="" border_style="solid" margin_top="" margin_bottom="" padding_top="" padding_right="" padding_bottom="" padding_left=""][fusion_builder_row][fusion_builder_column type="1_1" layout="1_1" spacing="" center_content="no" hover_type="none" link="" min_height="" hide_on_mobile="small-visibility,medium-visibility,large-visibility" class="modeangleb" id="modeangleb" background_color="" background_image="" background_position="left top" undefined="" background_repeat="no-repeat" border_size="0" border_color="" border_style="solid" border_position="all" padding="" margin_top="" margin_bottom="" animation_type="" animation_direction="left" animation_speed="0.3" animation_offset="" last="no"][fusion_section_separator divider_type="slant" divider_position="right" divider_candy="bottom" icon="" icon_color="" bordersize="" bordercolor="" backgroundcolor="#6a1626" hide_on_mobile="small-visibility,medium-visibility,large-visibility" class="modeslant" id="modeslant" /][/fusion_builder_column][/fusion_builder_row][/fusion_builder_container]
    
	');  ?>
                 
    
                <!---- is it needed with the above? 
                <div class="fusion-builder-row fusion-row "></div>
                ------->
                
                
                </div>
                
                
                
                <div  class="fusion-fullwidth fullwidth-box related-products narrow nonhundred-percent-fullwidth"  style='background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:60px;padding-right:30px;padding-bottom:60px;padding-left:30px;'><div class="fusion-builder-row fusion-row "><div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_2  fusion-one-half fusion-column-first 1_2"  style='margin-top:0px;margin-bottom:20px;width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );margin-right: 4%;'>
					<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
						<h3>Related Showcases</h3>
<p>
<?php 

// Find case studies that are related
$connected = new WP_Query( array(
  'connected_type' => 'related_case_studies',
  'connected_items' => get_queried_object(),
  'nopaging' => true,
) );

// Display connected pages
if ( $connected->have_posts() ) :
?>

<ul>
<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>


<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

<a href="<?php echo get_permalink(); ?>">
<div class="fusion-column-wrapper related-case-studies" style="margin-bottom:10px; display:block; padding: 10px 0px 10px 30px;background: #f6f6f6">

	<div class="fusion-column-content-centered">
		<div class="fusion-column-content">

		
	<div class="product-download-left"><h3 style="color:#333 !Important"><?php the_title(); ?></h3></div>
  <div class="product-download-right"><a href="<?php echo get_permalink(); ?>">View Showcase <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
				
		
</div>
</div>
</div>
</a>

<div class="fusion-clearfix"></div>

<?php endwhile; ?>

</ul>

<?php 
// Prevent weirdness
wp_reset_postdata();

else:
echo "No showcases found";

endif;
?>

</p>


<div class="fusion-clearfix"></div>

					</div>
				</div>
                
                
                <div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_2  fusion-one-half fusion-column-last 1_2"  style='margin-top:0px;margin-bottom:20px;width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );'>
					<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
						<h3>Related Products</h3>
<p>

<?php 

// Find products that are related
$connected = new WP_Query( array(
  'connected_type' => 'related_products',
  'connected_items' => get_queried_object(),
  'nopaging' => true,
) );

// Display connected pages
if ( $connected->have_posts() ) :
?>

<ul>
<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>

<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

<a href="<?php echo get_permalink(); ?>">
<div class="fusion-column-wrapper related-case-studies" style="margin-bottom:10px; display:block; padding: 10px 0px 10px 30px; background: #f6f6f6;">

	<div class="fusion-column-content-centered">
		<div class="fusion-column-content">


	<div class="product-download-left"><h3 style="color:#333 !Important"><?php the_title(); ?></h3></div>
  <div class="product-download-right"><a href="<?php echo get_permalink(); ?>">View Product <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
					
			
			
			
			
</div>
</div>
</div>
</a>
<div class="fusion-clearfix"></div>

<?php endwhile; ?>
</ul>

<?php 
// Prevent weirdness
wp_reset_postdata();

else:
echo "No related products found";

endif;
?>


</p>
<div class="fusion-clearfix"></div>

					</div>
				</div></div></div>
                
                
    
                <div  class="fusion-fullwidth fullwidth-box newsletter-top nonhundred-percent-fullwidth"  style='background-color: #f6f6f6;background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top: -80px;'>
                
                <!-----Dave angle---->
                     <?php echo do_shortcode('
   
[fusion_builder_container admin_label="top" hundred_percent="no" equal_height_columns="no" menu_anchor="" hide_on_mobile="small-visibility,medium-visibility,large-visibility" class="modeanglea" id="modeanglea" background_color="#6a1626" background_image="" background_position="center center" background_repeat="no-repeat" fade="no" background_parallax="none" enable_mobile="no" parallax_speed="0.3" video_mp4="" video_webm="" video_ogv="" video_url="" video_aspect_ratio="16:9" video_loop="yes" video_mute="yes" video_preview_image="" border_size="" border_color="" border_style="solid" margin_top="" margin_bottom="" padding_top="" padding_right="" padding_bottom="" padding_left=""][fusion_builder_row][fusion_builder_column type="1_1" layout="1_1" spacing="" center_content="no" hover_type="none" link="" min_height="" hide_on_mobile="small-visibility,medium-visibility,large-visibility" class="modeangleb" id="modeangleb" background_color="" background_image="" background_position="left top" undefined="" background_repeat="no-repeat" border_size="0" border_color="" border_style="solid" border_position="all" padding="" margin_top="" margin_bottom="" animation_type="" animation_direction="left" animation_speed="0.3" animation_offset="" last="no"][fusion_section_separator divider_type="slant" divider_position="right" divider_candy="bottom" icon="" icon_color="" bordersize="" bordercolor="" backgroundcolor="#f6f6f6" hide_on_mobile="small-visibility,medium-visibility,large-visibility" class="modeslant" id="modeslant" /][/fusion_builder_column][/fusion_builder_row][/fusion_builder_container]
    
	');  ?>
                 
    
                <!---- is it needed with the above? 
                <div class="fusion-builder-row fusion-row "></div>
                ------->
                
                
                </div><div  class="fusion-fullwidth fullwidth-box newsletter-container narrow product-newsletter nonhundred-percent-fullwidth fusion-equal-height-columns"  style='background-color: #f6f6f6;background-position: center center;background-repeat: no-repeat;padding-top:45px;padding-right:30px;padding-bottom:40px;padding-left:30px;'><div class="fusion-builder-row fusion-row "><div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_2  fusion-one-half fusion-column-first 1_2"  style='margin-top:0px;margin-bottom:20px;width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );margin-right: 4%;'>
					<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
						<h3>Mode-AL Newsletter</h3>
<p>Be the first to hear about the latest product releases, collaborations and online exclusives.</p>
<div class="fusion-clearfix"></div>

					</div>
				</div><div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_2  fusion-one-half fusion-column-last 1_2"  style='margin-top:0px;margin-bottom:20px;width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );'>
					<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
						<div class="fusion-column-content-centered"><div class="fusion-column-content"><div class="fusion-sep-clear"></div><div class="fusion-separator fusion-full-width-sep sep-none" style="margin-left: auto;margin-right: auto;margin-top:40px;"></div>
                        
                        <!-----dave's hacked gf for newsletter------>
                        <div id="gform_wrapper_4" class="gf_browser_chrome gform_wrapper"><form id="gform_4" action="#" enctype="multipart/form-data" method="post">
<div class="gform_body">
<ul id="gform_fields_4" class="gform_fields top_label form_sublabel_below description_below">
 	<li id="field_4_1" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_1"></label>
<div class="ginput_container ginput_container_email"><input id="input_4_1" class="medium" tabindex="1" name="input_1" type="text" value="" placeholder="Enter Email Address" aria-invalid="false" /></div></li>
 	<li>
<div class="gform_footer top_label"><input id="gform_submit_button_4" class="gform_button button" tabindex="2" type="submit" value="Submit" />
<input class="gform_hidden" name="is_submit_4" type="hidden" value="1" />
<input class="gform_hidden" name="gform_submit" type="hidden" value="4" /><input class="gform_hidden" name="gform_unique_id" type="hidden" value="" />
<input class="gform_hidden" name="state_4" type="hidden" value="WyJbXSIsIjZlNWI1NTA2NzE1NjlhNGQwNDY2OTVkZjc2MzBjNzA2Il0=" />
<input id="gform_target_page_number_4" class="gform_hidden" name="gform_target_page_number_4" type="hidden" value="0" />
<input id="gform_source_page_number_4" class="gform_hidden" name="gform_source_page_number_4" type="hidden" value="1" />
<input name="gform_field_values" type="hidden" value="" /></div></li>
</ul>
</div>
</form></div>

</div></div><div class="fusion-clearfix"></div>

					</div>
				</div></div></div>
							</div>
												</div>
	</section>

<?php do_action( 'avada_after_content' ); ?>
<?php get_footer();

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
