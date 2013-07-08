<?php 
//Template Name: Shortcodes
get_header() ?>
<div class="container">
		<header class="title">
			<h2><?php the_title() ?></h2>
		</header>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<div class="post">	
				<article>
					<?php the_content() ?>
					<h3>Buttons</h3>
					<a href="#" class="btn big ">Button</a>
					<a href="#" class="btn big red">Button</a>
					<a href="#" class="btn big green">Button</a>
					<a href="#" class="btn big purple">Button</a>
					<a href="#" class="btn big orange">Button</a>
					<a href="#" class="btn big black">Button</a>
					<a href="#" class="btn">Button</a>
					<a href="#" class="btn red">Button</a>
					<a href="#" class="btn green">Button</a>
					<a href="#" class="btn purple">Button</a>
					<a href="#" class="btn orange">Button</a>
					<a href="#" class="btn black">Button</a>
					<a href="#" class="btn small">Button</a>
					<a href="#" class="btn small red">Button</a>
					<a href="#" class="btn small green">Button</a>
					<a href="#" class="btn small purple">Button</a>
					<a href="#" class="btn small orange">Button</a>
					<a href="#" class="btn small black">Button</a>
					
					<h3>Dropcap</h3>
					<p>
						<span class="dropcap">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
					
					<h3>Image with figure</h3>
					<div class="img-caption">
						<img src="<?php bloginfo("template_url"); ?>/images/screenshot.jpg" alt="" />
						<figure>Lorem ipsum dolor sit amet, consectetur adipisicing elit</figure>
					</div>
					
					<h3>Image Bordered</h3>
					<img class="bordered" src="<?php bloginfo("template_url"); ?>/images/screenshot.jpg" alt="" />
					
					<h3>Image Rounded</h3>
					<img class="round" src="<?php bloginfo("template_url"); ?>/images/screenshot.jpg" alt="" />
					
					<h3>Quote</h3>
					<p class="quote">
						<i class="icon-quote-left"></i>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						<i class="icon-quote-right"></i>
					</p>
					
					<h3>Toggles</h3>
					<div class="toggles">
						<h4 class="toggle-btn"><i class="icon-expand-alt"></i>Toggle Button</h4>
						<div class="toggle-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<h4 class="toggle-btn"><i class="icon-expand-alt"></i>Toggle Button</h4>
						<div class="toggle-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<h4 class="toggle-btn"><i class="icon-expand-alt"></i>Toggle Button</h4>
						<div class="toggle-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
					
					<h3>Accordion</h3>
					<div class="toggles accordion">
						<h4 class="toggle-btn"><i class="icon-expand-alt"></i>Toggle Button</h4>
						<div class="toggle-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<h4 class="toggle-btn"><i class="icon-expand-alt"></i>Toggle Button</h4>
						<div class="toggle-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<h4 class="toggle-btn"><i class="icon-expand-alt"></i>Toggle Button</h4>
						<div class="toggle-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
					
				</article>
				<?php endwhile; ?>
			</div>
		
	</div>	
	
<?php get_footer() ?>