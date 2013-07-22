<?php
//youtube shortcode
add_shortcode('youtube', 'shortcode_youtube');

	function shortcode_youtube($atts) {

		$atts = shortcode_atts(

			array(

				'id' => '',

				'width' => '100%',

				'height' => 'auto'

			), $atts);

		

			return '<div class="video-holder"><iframe title="YouTube video player" width="' . $atts['width'] . '" height="' . $atts['height'] . '" src="http://www.youtube.com/embed/' . $atts['id'] . '" frameborder="0" allowfullscreen></iframe></div>';

	}

add_action('init', 'add_button');

//vimeo shortcode
add_shortcode('vimeo', 'shortcode_vimeo');

	function shortcode_vimeo($atts) {

		$atts = shortcode_atts(

			array(

				'id' => '',

				'width' => '100%',

				'height' => 'auto'

			), $atts);

		

			return '<div class="video-holder" ><iframe src="http://player.vimeo.com/video/' . $atts['id'] . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '" frameborder="0"></iframe></div>';

	}

	

// SoundCloud shortcode

add_shortcode('soundcloud', 'shortcode_soundcloud');

	function shortcode_soundcloud($atts) {

		$atts = shortcode_atts(

			array(

				'url' => '',

				'width' => '100%',

				'height' => 'auto',

				'comments' => 'true',

				'auto_play' => 'true',

				'color' => 'ff7700',

			), $atts);

		

			return '<object height="' . $atts['height'] . '" width="' . $atts['width'] . '"><param name="movie" value="http://player.soundcloud.com/player.swf?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '"></param><param name="allowscriptaccess" value="always"></param><embed allowscriptaccess="always" height="' . $atts['height'] . '" src="http://player.soundcloud.com/player.swf?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '" type="application/x-shockwave-flash" width="' . $atts['width'] . '"></embed></object>';

	}
	
	
//button shortcode
function add_button() {  

   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  

   {  

     add_filter('mce_external_plugins', 'add_plugin');  

     add_filter('mce_buttons_3', 'register_button');  

   }  

}

//dropcap shortcode
add_shortcode('dropcap', 'shortcode_dropcap');

	function shortcode_dropcap( $atts, $content = null ) {  

		

		return '<span class="dropcap">' .do_shortcode($content). '</span>';  

		

}  
	
//linebreaker shortcode
add_shortcode('linebreak', 'shortcode_line_break');

	function shortcode_line_break() {  

		

		return '<span class="clear"></span>';  

		

}  	
//buttons shortcode
add_shortcode('button', 'shortcode_button');

	function shortcode_button($atts, $content = null) {

			return '<a class="btn ' . $atts['class'] .  '" href="' . $atts['link'] . '" target="' . $atts['target'] . '">' .do_shortcode($content). '</a>';

	}

// Toggle shortcode
add_shortcode('toggles', 'shortcode_toggles');

	function shortcode_toggles( $atts, $content = null ) {

	extract(shortcode_atts(array(

        'type'      => '',

    ), $atts));


	$out .= '<div class="toggles ' .$type.'">';
		
	$out .= do_shortcode($content);

	$out .= '</div>';
	

   return $out;

}
add_shortcode('toggle', 'shortcode_toggle');

	function shortcode_toggle( $atts, $content = null ) {

	extract(shortcode_atts(array(

        'title'      => '',

    ), $atts));

	
	$out .= '<h4 class="toggle-btn"><i class="icon-expand-alt"></i>'. $title .'</h4>';

	$out .= '<div class="toggle-content">';

	$out .= do_shortcode($content);

	$out .= '</div>';
	

   return $out;

}

// Image Caption
add_shortcode('image', 'shortcode_image');
	function shortcode_image( $atts, $content = null ) {

	extract(shortcode_atts(array(

        'caption'  => '',
        'style' =>'',
        'image_link' =>'',
        'align' =>'',
        'float' => ''
        

    ), $atts));


	$out .= '<div class="img-caption align'. $align . ' float-'.$float.'">';
	
	$out .= '<img class="'.$style.'" src="'. $image_link . '" alt="" />';

	$out .= '<figure>';

	$out .= $caption;

	$out .= '</figure>';
	
	$out .= '</div>';

   return $out;

}
//quote button
add_shortcode('blockquote', 'shortcode_blockquote');

	function shortcode_blockquote( $atts, $content = null ) {  

		return '<p class="quote"><i class="icon-quote-left"></i>' .do_shortcode($content). '<i class="icon-quote-right"></i></p>';  

}

function register_button($buttons) {  

   array_push($buttons, "youtube", "soundcloud", "vimeo", "button", "dropcap", "toggle", "cus_image","quote");  

   return $buttons;  

}  



function add_plugin($plugin_array) {  

   $plugin_array['youtube'] = get_template_directory_uri().'/tinymce/customcodes.js';

   $plugin_array['vimeo'] = get_template_directory_uri().'/tinymce/customcodes.js';
   
   $plugin_array['soundcloud'] = get_template_directory_uri().'/tinymce/customcodes.js';

   $plugin_array['button'] = get_template_directory_uri().'/tinymce/customcodes.js';

   $plugin_array['dropcap'] = get_template_directory_uri().'/tinymce/customcodes.js';

   $plugin_array['toggle'] = get_template_directory_uri().'/tinymce/customcodes.js';

   $plugin_array['cus_image'] = get_template_directory_uri().'/tinymce/customcodes.js';
   
   $plugin_array['quote'] = get_template_directory_uri().'/tinymce/customcodes.js';
   
   return $plugin_array;  

}
?>