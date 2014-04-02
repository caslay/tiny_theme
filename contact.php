<?php 
//Template Name: Contact Page
get_header() ?>
<div class="container">
		<header class="title">
			<h2><?php the_title() ?></h2>
		</header>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<div class="post">	
				<article>
					<?php the_content() ?>
				</article>
				<div class="social-links">
					<a href="http://facebook.com/<?php echo get_option('fb_id'); ?>" class="facebook">
						<i class="icon-facebook"></i>
					</a>
					<a href="http://twitter.com/<?php echo get_option('twitter_id'); ?>" class="twitter">
						<i class="icon-twitter"></i>
					</a>
					<a href="http://plus.google.com/<?php echo get_option('gplus_id'); ?>" class="google">
						<i class="icon-google-plus"></i>
					</a>
					<a href="<?php echo get_option('linkedin_id'); ?>" class="linkedin">
						<i class="icon-linkedin"></i>
					</a>
				</div>
				<div class="contact-form">
					<article style="display: none" id="sent-message">
						<h2><?php echo __( 'Thank you, your message successfully sent', 'tiny_theme') ?></h2>
						<p><?php echo __( 'Our inboxes are 24/7 ready to hear from you, if you want to ask a question or request a service just fill this 2 minutes form below which may help your life and giving you the ability to bring your vision into public just as you imagined.', 'tiny_theme') ?></p>
					</article>
					<article style="display: none" id="error-message">
						<h2><?php echo __( 'Oops, your message wasn\'t sent', 'tiny_theme') ?></h2>
						<p><?php echo __( 'Our inboxes are 24/7 ready to hear from you, if you want to ask a question or request a service just fill this 2 minutes form below which may help your life and giving you the ability to bring your vision into public just as you imagined.', 'tiny_theme') ?></p>
					</article>
					<form id="ajaxContact">
						<div>
							<label><?php echo __( 'Your Name', 'tiny_theme') ?></label>
							<input name="name" type="text" placeholder="Full Name" required/>
						</div>
						<div>
							<label><?php echo __( 'E-mail', 'tiny_theme') ?></label>
							<input name="email" type="email" placeholder="Email address" required/>
						</div>
						<div>
							<label><?php echo __( 'Subject', 'tiny_theme') ?></label>
							<input name="subject" type="text" placeholder="Message Subject" required/>
						</div>
						<textarea name="message"></textarea>
						<input type="hidden" name="contact_email" value="<?php print get_option('contact_email')?>"/>
						<input type="submit" class="submit" value="Post" />
					</form>
				</div>
				
				<?php endwhile; ?>
			</div>
		
	</div>	
	<script type="text/javascript">
				$(document).ready(function(){
					$("#ajaxContact").validate();
					
					$('#ajaxContact').submit(function() {
						if ($("#ajaxContact").valid() == false){
							return false;
						}
						// got event!!
						$("#ajaxContact").fadeTo("slow", 0.33);
						//-------------------
						$.ajax({
								type: "POST",
								url: "<?php echo get_template_directory_uri() ?>/mailsend.php",
								data: $(this).serialize(),
								success: function(data) {
									if (data == "true"){
										// msg sent...
										$("#ajaxContact").slideUp();
										$("#sent-message").slideDown();
									}else{
										// cannot sent msg
										$("#ajaxContact").slideUp();
										$("#error-message").slideDown();
									}
								},
							});
								return false;
						});
					});
						
				</script>
<?php get_footer() ?>