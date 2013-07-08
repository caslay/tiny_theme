<?php
get_header();
?>
	  <?php      

                    if(isset($_GET['author_name'])) :

                        $curauth = get_userdatabylogin($author_name);

                    else :

                        $curauth = get_userdata(intval($author));

                    endif;          

     ?>
		<div class="container">
			
			<header class="title">
				<h2> <?php echo $curauth->nickname ?> Posts</h2>
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