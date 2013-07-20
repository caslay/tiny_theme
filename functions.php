<?php 
	define( 'TEMPPATH', get_stylesheet_directory_uri());
	define( 'IMAGES', TEMPPATH. "/images"); 
	
	if ( ! isset( $content_width ) ){$content_width = '100%';};
	
	//content limiter function
	function content($limit) {
		$content = explode(' ', get_the_content(), $limit);
		if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
		} else {
		$content = implode(" ",$content);
		}	
		$content = preg_replace('/\[.+\]/','', $content);
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		return $content;
	}
	
	//add menu support to theme
	add_theme_support('nav-menus');
	if ( function_exists('register_nav_menus')) {
	 register_nav_menus(
	  array(
	   'main-menu' => __( 'Primary menu' )
	   )
	 );
	}
	//RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	//Register Sidebar
	if ( function_exists( 'register_sidebar' ) ) {
	 register_sidebar( array (
	  'name' => __( 'Tiny UpperBar', 'primary-bar' ),
	  'id' => 'primary-widget-area',
	  'class' => '',
	  'description' => __( 'The primary widget area', 'dir' ),
	  'before_widget' => '<div class="widget %2$s" id="%1$s" >',
	  'after_widget' => "</div>",
	  'before_title' => '<h3>',
	  'after_title' => '</h3>',
	 ) );
	}
	
	//custom comment function
	function tiny_comment($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; ?>
		<div <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<div class="comment_content">
				<h3><?php comment_author_link(); ?> <span><?php echo human_time_diff(get_comment_time('U'), current_time('timestamp')) . ' ago'; ?> </span></h3>
		 		<?php if ($comment->comment_approved == '0') : ?>
	     			<p class="waiting_approve"><?php _e('Your comment is awaiting moderation.','my-text-domain') ?></p>
	     			<?php comment_text(); ?>
	     		<?php else : ?>
				<?php comment_text(); ?>
				<?php 
				comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])),$comment->comment_ID) ?>
				<?php endif; ?>
			</div>
		
	<?php }
	
	//comment reply script
	function tiny_enqueue_comments_reply() {
	    if( get_option( 'thread_comments' ) )  {
	        wp_enqueue_script( 'comment-reply' );
	    }
	}
	add_action( 'comment_form_before', 'tiny_enqueue_comments_reply' );
	
	
	
	 //removes extra 28px margin issue added by admin bar
	function my_function_admin_bar(){ return false; }
	add_filter( 'show_admin_bar' , 'my_function_admin_bar');
  
  
include_once('includes/tiny-options.php');
include_once('includes/shortcodes.php');
include_once('includes/update_notifier.php');