<?php get_header() ?>
	<div class="container">
		<header>
			<h2>Search Results:</h2>
		</header>
		<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="posts">
			<article>
				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<p><?php echo content('80'); ?></p>
			</article>
		</div>
	
		<?php endwhile; ?>
		<?php else: ?>
			<?php if(current_user_can( 'edit_posts' )): 
				// Show a different message to a logged-in user who can add posts.
				?>
				<div class="posts">
					<article>
						<h2>No posts to display</h2>
						<p><?php printf( __( 'Ready to publish your post? <a href="%s">Jump here</a>.', 'tiny_theme' ), admin_url( 'post-new.php' ) ); ?></p>
					</article>
				</div>
			<?php else :
				// Show the default message to everyone else.
			?>
			<div class="posts">
					<article>
						<h2>Unfortunately, there are no posts to display!</h2>
						<p>May be can search again to find your desired information:</p>
					</article>
				</div>
			<?php endif; ?>
		<?php endif;?>
	</div>	
<?php get_footer() ?>