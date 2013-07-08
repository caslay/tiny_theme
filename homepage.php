<?php	
//Template Name: Home
get_header()
?>
		<div class="container">
			<header>
				<h1><?php echo get_option('tiny_head_title') ?></h1>
				<p><?php echo get_option('tiny_head_description') ?></p>
			</header>
				
			<?php  $paged = get_query_var('page'); ?>
		
		    <?php $home = new WP_Query(array('post_type'=> 'post', 'posts_per_page' =>5, 'paged' => $paged)); ?>
		
		    <?php if($home->have_posts()): ?>
		
			
			<div class="posts">
				
				<?php while($home->have_posts()) : $home->the_post(); ?>
					
				<article>
					<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

					<?php the_excerpt() ?>
				</article>
				
				<?php endwhile; ?>
				
			</div>
				
					
			<div class="pagination">
				
				 <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query' => $home)); } ?> 
				 
			</div>
			<?php endif; ?>
		</div>
<?php get_footer()?>