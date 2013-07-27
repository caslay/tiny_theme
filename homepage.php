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
		
		    <?php $home = new WP_Query(array('post_type'=> 'post', 'posts_per_page' =>6, 'paged' => $paged)); ?>
		
		    <?php if($home->have_posts()): ?>
		
			
			<div class="posts">
				
				<?php while($home->have_posts()) : $home->the_post(); ?>
					<?php if ( is_sticky() ): ?>
				<article  id='<?php the_ID(); ?>' <?php post_class('sticky'); ?> >
					<?php else: ?>
				<article  id='<?php the_ID(); ?>' <?php post_class(); ?> >
					<?php endif ?>
					<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

					<?php the_excerpt() ?>
				</article>
				
				<?php endwhile; ?>
				
			</div>
				
					
			<div class="pagination">
			
			<?php	
				 global $home;
					$total = $home->max_num_pages;
					// only bother with the rest if we have more than 1 page!
					if ( $total > 1 )  {
					     // get the current page
					     if ( !$current_page = get_query_var('page') )
					          $current_page = 1;
					     // structure of "format" depends on whether we're using pretty permalinks
					     $format = get_option('permalink_structure')?'page/%#%/':'&page=%#%';
					     echo paginate_links(array(
					          'base' => get_pagenum_link(1) . '%_%',
					          'format' => $format,
					          'current' => $current_page,
					          'total' => $total,
					          'mid_size' => 4,
					          'type' => 'plain'
					     ));
						}
				 ?>
			
			
			</div>
			<?php endif; ?>
		</div>
<?php get_footer()?>