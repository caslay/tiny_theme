<?php 

	if (is_admin())
		add_action('wp_enqueue_scripts', 'tiny_options_enqueue_scripts');

	

	if (!function_exists('tiny_options_enqueue_scripts')) {
		function tiny_options_enqueue_scripts() {
		  wp_register_script('tiny-upload',get_template_directory_uri().'/javascript/tiny-upload.js', array('jquery'), '1.7', true );
  		  wp_register_script( 'home-page-main-flex-slider',  true );
		if ( 'appearance_page_tiny-options-page' == get_current_screen() -> id ) {
				wp_enqueue_script('jquery');
		
				wp_enqueue_script('thickbox');
				wp_enqueue_style('thickbox');
		
				wp_enqueue_script('media-upload');
				wp_enqueue_script('tiny-upload');
	
			}
	
		}
	}
	
add_action('admin_enqueue_scripts', 'tiny_options_enqueue_scripts');
	
// create tiny_theme settings menu
add_action('admin_menu', 'tiny_create_menu');

function tiny_create_menu() {
	
    //create new submenu
    add_theme_page( 'Theme Options', 'Tiny Options', 'administrator', 'tiny-options-page', 'tiny_settings_page');
		
}
	//call register settings function
add_action( 'admin_init', 'tiny_register_settings' );
function tiny_register_settings() {
    //register theme settings
    register_setting( 'tiny-settings-group', 'tiny_head_title' );
    register_setting( 'tiny-settings-group', 'tiny_head_description' );
    register_setting( 'tiny-settings-group', 'tiny_adsense' );
 	register_setting( 'tiny-settings-group', 'tiny_style' );
	register_setting( 'tiny-settings-group', 'contact_email' );
	register_setting( 'tiny-settings-group', 'fb_id' );
	register_setting( 'tiny-settings-group', 'twitter_id' );
	register_setting( 'tiny-settings-group', 'gplus_id' );
	register_setting( 'tiny-settings-group', 'linkedin_id' );
	register_setting( 'tiny-settings-group', 'logo' );
	register_setting( 'tiny-settings-group', 'tiny_footer_text' );
}

function tiny_settings_page() {

?>
<!-- theme options page start -->
<div class="wrap">
<h2>Tiny Settings</h2>

<form id="landingOptions" method="post" action="options.php">
    <?php settings_fields( 'tiny-settings-group' ); ?>
    <table class="form-table">
      	<tr valign="top">
	        <th scope="row">Header Title:</th>
	        <td>
	            <textarea name="tiny_head_title" ><?php print get_option('tiny_head_title'); ?></textarea>
	        </td>
        </tr>
        
        <tr>
	        <th scope="row">Header Description:</th>
	        <td>
	            <textarea name="tiny_head_description" ><?php print get_option('tiny_head_description'); ?></textarea>
	        </td>
        </tr>
        
        <tr>
	        <th scope="row">Footer Text:</th>
	        <td>
	            <textarea name="tiny_footer_text" ><?php print get_option('tiny_footer_text'); ?></textarea>
	        </td>
        </tr>
        
        <tr>
        	<th>Logo</th>
        	<td>
	          <?php	$logo = get_option( 'logo' ); ?>
		    	<span class='upload'>
		        <input type='text' id='wptuts_logo' class='regular-text text-upload' name='logo' value='<?php print esc_url( $logo ); ?>'/>
		        <input type='button' class='button button-upload' value='Upload an image'/></br>
		        <img style='max-width: 300px; display: block;' src='<?php print esc_url( $logo ); ?>' class='preview-upload' />
		    	</span>
        	</td>
        	
        </tr>
        <tr>
	        <th scope="row">Theme Color</th>
	        <td>
	            <select name="tiny_style">
	            	<?php $styles = array('default','blue','browny','colorful','green','red','professor','magenta','orange','deepturq','sandmoney'); ?>
	            	<option><?php print get_option('tiny_style'); ?></option>
	            	<?php foreach($styles as $style): ?>
	            	<?php if ($style != get_option('tiny_style') ): ?>
	            	<option><?php print $style; ?></option>
	            	<?php endif ?>
	            	<?php endforeach ?>           	
	            </select>
	        </td>
        </tr>
        <tr>
	        <th scope="row">Contact Email</th>
	        <td>
	            <input type="text" name="contact_email" value="<?php print get_option('contact_email'); ?>"></input>
	        </td>
        </tr>
        <tr>
	        <th scope="row">Facebook page id</th>
	        <td>
	            <input type="text" name="fb_id" value="<?php print get_option('fb_id'); ?>"></input>
	        </td>
        </tr>   
            <tr>
	        <th scope="row">Twitter id</th>
	        <td>
	            <input type="text" name="twitter_id" value="<?php print get_option('twitter_id'); ?>"></input>
	        </td>
        </tr>   
        <tr>
	        <th scope="row">Google+ id</th>
	        <td>
	            <input type="text" name="gplus_id" value="<?php print get_option('gplus_id'); ?>"></input>
	        </td>
        </tr>   
        <tr>
	        <th scope="row">LinkedIn Profile Link</th>
	        <td>
	            <input type="text" name="linkedin_id" value="<?php print get_option('linkedin_id'); ?>"></input>
	        </td>
        </tr>            
    </table>
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes','tiny_theme') ?>" />
    </p>
</form>
</div>
<?php
} ?>