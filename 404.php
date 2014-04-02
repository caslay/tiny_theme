<?php	
//Template Name: 404
get_header()
?>
		<div class="container">
			<header class="header-404">
				<h1>404</h1>
				<p><?php echo __( 'Sorry page was not found, try to search again or take a look at our posts.', 'tiny_theme') ?></p>
			</header>
			<section class="search-block">
				<form role="search" method="get" id="search-form" action="<?php bloginfo('url') ?>">
					<div>
						<label><?php echo __( 'Search for:', 'tiny_theme') ?></label>
						<input type="text" value="" name="s" placeholder="Search Keywords">
						<input type="submit" value="Search" class="submit">
					</div>
				</form>
			</section>
			<div class="posts">
				<?php  $paged = get_query_var('paged'); ?>
		   		<?php $p404 = new WP_Query(array('post_type'=> 'post', 'posts_per_page' =>6,'paged' => $paged)); ?>
				<?php if($p404->have_posts()) : while($p404->have_posts()) : $p404->the_post(); ?>
				<?php if ( is_sticky() ): ?>
				<article  id='<?php the_ID(); ?>' <?php post_class('sticky'); ?> >
					<?php else: ?>
				<article  id='<?php the_ID(); ?>' <?php post_class(); ?> >
					<?php endif; ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
					<p><?php the_excerpt() ?></p>
				</article>
				<?php endwhile; ?>
			</div>
			<div class="pagination">
				<?php	
				 global $p404; 
					$total = $p404->max_num_pages;
					// only bother with the rest if we have more than 1 page!
					if ( $total > 1 )  {
					     // get the current page
					     if ( !$current_page = get_query_var('paged') )
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