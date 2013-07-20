<?php
get_header();
?>
	
		<div class="container">
			
			<header class="title">
				<h2><?php single_month_title('<br />'); ?></h2>
			</header>
		
			<div class="posts">	
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article id='<?php the_ID(); ?>' <?php post_class(); ?>>
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