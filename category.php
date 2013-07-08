<?php
get_header();
?>
		<div class="container">
			
			<header>
				<h1><?php single_cat_title(); ?></h1>
			</header>
		
			<div class="posts">
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					
				<article>
					<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
					<?php the_excerpt() ?>
				</article>
				
				<?php endwhile; ?>
				
			</div>
			
			<div class="pagination">
				
				 <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?> 
				 
			</div>	
			<?php endif; ?>
		</div>
<?php get_footer()?>