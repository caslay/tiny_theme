	<?php if ( have_comments() ) : ?>
<div class="comments">
		<h2><i class="icon-comments-alt"></i><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h2>
		
		<div class="comments-holder">
			<?php wp_list_comments(array('style' => 'div','type'=>'comment','callback'=>'tiny_comment')); ?>
		</div>	
	<?php endif; ?>	
	<?php if ( 'open' == $post->comment_status ) : ?>			
	<div id="respond">
		<article style="display: none" id="sent-message">
			<p>Thank you, your comment successfully submitted</p>
		</article>
		<article style="display: none" id="sent-moderation">
			<p>your comment has been submited, it might take a while to be moderated.</p>
		</article>
		<div class="comment-form">
	       
			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		    <p>You must be <a href="<?php echo home_url() ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>	
	        <?php else : ?>
	        	<!-- you can use this instead of comment_form() function
	        		
				<form method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" id="comment_form">
				<?php if ( $user_ID ) : ?>
	            <p class="logged_user">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.
	            	<a href="<?php echo wp_logout_url(); ?>" title="Log out of this account">Logout</a>
	        	</p>
	            <?php else : ?>
				<div>
					<label>Your Name</label>
					<input type="text" name="author" placeholder="Display name" required/>
				</div>
				<div>
					<label>E-Mail Address</label>
					<input type="email" name="email" placeholder="your@email.com" required/>
				</div>
				<div>
					<label>Website Url</label>
					<input type="url" name="url" placeholder="http://" />
				</div>
				<?php endif; ?>
				<textarea name="comment" required></textarea>
					<input name="submit" type="submit" class="submit" value="Post Comment" />
					<?php comment_id_fields(); ?> 
					<?php cancel_comment_reply_link() ?>
				<?php do_action('comment_form', $post->ID); ?>
			</form>
			-->
			
			<?php comment_form(); ?>
		</div>
		<!-- Comments Pagination -->
		<div class="pagination">
			<?php echo paginate_comments_links() ?>
		</div>
	</div> 
		<?php endif ?>
	</div>
	<?php endif; ?>