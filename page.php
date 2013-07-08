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
							<a href="#" title="share on facebook">
								<i class="icon-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Tweet">
								<i class="icon-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Post on Google plus">
								<i class="icon-google-plus"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Post on Linkedin">
								<i class="icon-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Pin it">
								<i class="icon-pinterest"></i>
							</a>
						</li>
					</ul>
				</div>
				<?php endwhile; ?>
			</div>
		
	</div>	
	
<?php get_footer() ?>