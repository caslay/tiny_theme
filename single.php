<?php get_header() ?>
<div class="container">
	<?php if ( have_posts() ) : ?>
	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		
		<header class="title">
			<a href="<?php echo home_url() ?>" class="back-to-blog"><i class="icon-chevron-left"></i>Back to blog</a>
			<h2><?php the_title() ?></h2>
			<p><span><?php the_date() ?></span> - Posted in <?php the_category(' ,  '); ?> <span>Posted by: <?php the_author_posts_link(); ?></span></p>
			<?php echo the_tags('<p>Tags: ', ', ', '</p>'); ?>
		</header>
		
		<div class="post">
				<article>
					<?php the_content() ?>
				</article>
												
				<div class="share">
					<ul>
						<li>
							<a target="_blank" href="http://www.facebook.com/share.php?u=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>" title="share on facebook">
								<i class="icon-facebook"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="http://twitter.com/home?status=<?php print(urlencode(get_permalink())); ?>+<?php print(urlencode(the_title())); ?>">
								<i class="icon-twitter"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="https://plus.google.com/share?url=<?php print(urlencode(get_permalink())); ?>" title="Post on Google plus">
								<i class="icon-google-plus"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>&source=[SOURCE/DOMAIN]" title="Post on Linkedin">
								<i class="icon-linkedin"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="http://pinterest.com/pin/create/bookmarklet/?media=[MEDIA]&url=<?php print(urlencode(get_permalink())); ?>&is_video=false&description=<?php print(urlencode(the_title())); ?>" title="Pin it">
								<i class="icon-pinterest"></i>
							</a>
						</li>
					</ul>
				</div>
				<?php echo comments_template(); ?> 	
			</div>
		<?php endwhile; ?>
		<div class="pagination">
		<?php $args = array(
				'before'           => '<p>' . __('Pages:'),
				'after'            => '</p>',
				'link_before'      => '',
				'link_after'       => '',
				'next_or_number'   => 'number',
				'nextpagelink'     => __('Next page'),
				'previouspagelink' => __('Previous page'),
				'pagelink'         => '%',
				'echo'             => 1
				); 
				wp_link_pages( $args );
				?>
				</div>
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
						<h2>Unfortunately, this post either removed or deleted, there's also a probability that it didn't ever existed!!</h2>
						<p>May be can search again to find your desired information:</p>
					</article>
			</div>
			<?php endif; ?>
		<?php endif;?>
	</div>	
	
<?php get_footer() ?>