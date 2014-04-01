<?php get_header() ?>
<div class="container">
		<header class="title">
			<h2><?php the_title() ?></h2>
		</header>
		<?php while ( have_posts() ) : the_post(); ?>
	
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
				<?php endwhile; ?>
			</div>
		
	</div>	
	
<?php get_footer() ?>