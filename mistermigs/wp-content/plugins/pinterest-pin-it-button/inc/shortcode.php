<?php

function pib_button_shortcode_html( $attr ) {
	global $pib_options;
	global $post;
    $postID = $post->ID;
    
    /*
        For URL, image URL and Description, use in order:
        1) attribute value
        2) custom fields for post
        3) inherit from post: permalink, first image, post title
    */

    $url = $attr['url'];
    
    if ( empty( $url ) ) {
        $url = get_post_meta( $postID, 'pib_url_of_webpage', true);
        if ( empty( $url ) ) {
            $url = get_permalink( $postID );
        }
    }
    
    $image_url = $attr['image_url'];
    
    if ( empty( $image_url ) ) {
        $image_url = get_post_meta( $postID, 'pib_url_of_img', true);
        if ( empty( $image_url ) ) {
            //Get url of img and compare width and height
            $output = preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
            $first_img = $matches [1] [0];        
            $image_url = $first_img;
        }
    }
    
    $description = $attr['description'];
    
    if ( empty( $description ) ) {
        $description = get_post_meta( $postID, 'pib_description', true);
        if ( empty( $description ) ) {
            $description = get_the_title( $postID );
        }
    }
        
	$count = ( empty( $attr['count'] ) ? 'none' : $attr['count'] );
	$remove_div = ( $attr['remove_div'] == 'true' );
    $social_buttons = ( $attr['social_buttons'] == 'true' );
    
	$base_btn = pib_button_base( $url, $image_url, $description, $count );
    
    //Don't wrap with div or use float left/right if using other sharing buttons or "remove div" is checked
	if ( $remove_div || $social_buttons ) {
		return $base_btn;
	}
	else {
		//Surround with div tag
		$float_class = '';
		
		if ( $attr['float'] == 'left' ) {
			$float_class = 'pib-float-left';
		}
		elseif ( $attr['float'] == 'right' ) {
			$float_class = 'pib-float-right';
		}
	
		return '<div class="pin-it-btn-wrapper-shortcode ' . $float_class . '">' . $base_btn . '</div>';
	}
}

//Share Bar HTML to render (pass through button unless Pro)

function pib_sharebar_shortcode_html( $attr ) {
    global $pib_options;
    global $post;
    
    $social_buttons = ( $attr['social_buttons'] == 'true' );
    
    if ( PIB_IS_PRO && $social_buttons && (bool)$pib_options['use_other_sharing_buttons'] ) {
        return pib_sharebar_shortcode_html_pro( $attr, $post->ID );
    } else {
        return pib_button_shortcode_html( $attr );
    }
}

add_shortcode( 'pinit', 'pib_sharebar_shortcode_html' );
