<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

<?php get_header('blog'); ?>

	<!-- CUSTOM HEADER -->
	<div class="custom-header" role="banner">
		<!-- NAVIGATION and LOGO -->
		<!-- <header class="blog-header">
			
			<div class="container">
	
				<div class="col-sm-3">
					
					<div class="blog-logo">
						
						<?php if(isset($business['logo']['url'])){ ?>
	
							<?php if($business['logo']['url']){ ?>
	
								<a href="<?php echo esc_url(home_url('/')); ?>" class="u-photo" title="<?php bloginfo('name'); ?>">
									<img src="<?php echo $business['logo']['url']; ?>" alt="<?php _e('logo','business-one'); ?>">
								</a>
	
						<?php } } ?>
	
					</div>
	
				</div>				
					
	
				<?php wp_nav_menu(array(
					'theme_location' => 'top-menu',
					'menu_class' => 'nav navbar-nav',
					'container' => 'nav',
					'container_class' => 'col-sm-9 clearfix',
					'depth' => 2,
					'fallback_cb' => 'business_one_menufb'
				)); ?>			
	
	
			</div>=
	
	
		</header>  -->
		
		<div class="container">
			
			<div class="heading-blog">
				<img src="http://tgg/wp-content/uploads/2015/06/tgg-logo.png" width="15%">
				<h2>Welcome to the Goalie Guild</h2>
				<!-- <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo get_bloginfo('description'); ?>"><?php bloginfo('name'); ?></a> -->
				<a href="javascript:void();" class="box-btn">EXPLORE<a>
			</div>

			<p class="blog-desc"><?php bloginfo('description'); ?></p>

		</div> <!-- end container -->

	</div>
	<!-- END CUSTOM HEADER -->

	<section id="sec-one" class="home-sec">
		<div class="title-sec">
			<h2>We Are The Goalie Guild</h2>
		</div>
		<div class="content-sec">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla, sem ac ullamcorper accumsan, magna risus interdum odio, nec volutpat nunc quam non nibh. Vivamus sodales elit sit amet pellentesque lobortis. Ut consequat ipsum varius, aliquam magna pulvinar, porta elit. Phasellus iaculis, est sed lobortis ornare, est eros euismod massa, sed aliquet diam justo sit amet mauris. Donec lobortis non sem non commodo. Nullam non fermentum lorem. Sed hendrerit, metus ut pellentesque vulputate, odio nisl consequat justo, quis fringilla justo justo nec dui. Pellentesque sollicitudin consequat purus ac imperdiet. Nunc in nisl tellus. Vestibulum sollicitudin porttitor porttitor. Donec mi urna, malesuada id pellentesque sagittis, malesuada vel sem. Fusce faucibus eleifend nisl sit amet tempus. Maecenas vel rhoncus turpis, at aliquam neque.</p>

			<p>Integer mattis nulla eget elit malesuada, vel vehicula tortor dapibus. Integer at quam quis lorem congue viverra id ut diam. Donec faucibus, lacus at dictum blandit, dui eros porttitor quam, sed rutrum lectus nisl ut lorem. Maecenas ut auctor mi, in feugiat nulla. Aenean tincidunt urna sed pellentesque fringilla. Aenean semper laoreet diam at dignissim. Nam tempor tempus risus vitae gravida. Suspendisse commodo enim ac metus aliquam semper. Suspendisse sit amet augue nisi. Vivamus eleifend sagittis tristique. Phasellus ipsum eros, aliquet a lobortis ut, pulvinar id ante. Nulla auctor risus ac velit tincidunt, ac varius velit malesuada. In porttitor odio elit, quis venenatis sapien imperdiet a.</p>

			<p>Duis id quam venenatis, tincidunt nunc at, cursus purus. Sed non massa vitae magna suscipit condimentum. Proin id ligula non odio posuere vehicula. Vestibulum eget posuere nulla. Morbi consectetur lobortis ornare. Praesent rhoncus felis ut mattis laoreet. Nullam ante lacus, semper sit amet tortor ac, tristique cursus sapien. Integer rutrum urna nec facilisis euismod. Phasellus nec urna odio. Etiam feugiat non lectus ut tincidunt. Vestibulum ac urna nulla. In sit amet nulla eget metus fermentum tincidunt ullamcorper eu mi. Integer varius nec purus in cursus. Etiam id dui eget mauris placerat ullamcorper vitae sed libero. Aenean fringilla rhoncus pretium.</p>
		</div>
	</section>

	<section id="sec-two" class="home-sec">
		<div class="title-sec">
			<h2>This is What We Do</h2>
		</div>
		<div class="content-sec">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla, sem ac ullamcorper accumsan, magna risus interdum odio, nec volutpat nunc quam non nibh. Vivamus sodales elit sit amet pellentesque lobortis. Ut consequat ipsum varius, aliquam magna pulvinar, porta elit. Phasellus iaculis, est sed lobortis ornare, est eros euismod massa, sed aliquet diam justo sit amet mauris. Donec lobortis non sem non commodo. Nullam non fermentum lorem. Sed hendrerit, metus ut pellentesque vulputate, odio nisl consequat justo, quis fringilla justo justo nec dui. Pellentesque sollicitudin consequat purus ac imperdiet. Nunc in nisl tellus. Vestibulum sollicitudin porttitor porttitor. Donec mi urna, malesuada id pellentesque sagittis, malesuada vel sem. Fusce faucibus eleifend nisl sit amet tempus. Maecenas vel rhoncus turpis, at aliquam neque.</p>

			<p>Integer mattis nulla eget elit malesuada, vel vehicula tortor dapibus. Integer at quam quis lorem congue viverra id ut diam. Donec faucibus, lacus at dictum blandit, dui eros porttitor quam, sed rutrum lectus nisl ut lorem. Maecenas ut auctor mi, in feugiat nulla. Aenean tincidunt urna sed pellentesque fringilla. Aenean semper laoreet diam at dignissim. Nam tempor tempus risus vitae gravida. Suspendisse commodo enim ac metus aliquam semper. Suspendisse sit amet augue nisi. Vivamus eleifend sagittis tristique. Phasellus ipsum eros, aliquet a lobortis ut, pulvinar id ante. Nulla auctor risus ac velit tincidunt, ac varius velit malesuada. In porttitor odio elit, quis venenatis sapien imperdiet a.</p>

			<p>Duis id quam venenatis, tincidunt nunc at, cursus purus. Sed non massa vitae magna suscipit condimentum. Proin id ligula non odio posuere vehicula. Vestibulum eget posuere nulla. Morbi consectetur lobortis ornare. Praesent rhoncus felis ut mattis laoreet. Nullam ante lacus, semper sit amet tortor ac, tristique cursus sapien. Integer rutrum urna nec facilisis euismod. Phasellus nec urna odio. Etiam feugiat non lectus ut tincidunt. Vestibulum ac urna nulla. In sit amet nulla eget metus fermentum tincidunt ullamcorper eu mi. Integer varius nec purus in cursus. Etiam id dui eget mauris placerat ullamcorper vitae sed libero. Aenean fringilla rhoncus pretium.</p>
		</div>
	</section>

	<section id="sec-three" class="home-sec">
		<div class="title-sec">
			<h2>Books We've Written</h2>
		</div>
		<div class="content-sec">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla, sem ac ullamcorper accumsan, magna risus interdum odio, nec volutpat nunc quam non nibh. Vivamus sodales elit sit amet pellentesque lobortis. Ut consequat ipsum varius, aliquam magna pulvinar, porta elit. Phasellus iaculis, est sed lobortis ornare, est eros euismod massa, sed aliquet diam justo sit amet mauris. Donec lobortis non sem non commodo. Nullam non fermentum lorem. Sed hendrerit, metus ut pellentesque vulputate, odio nisl consequat justo, quis fringilla justo justo nec dui. Pellentesque sollicitudin consequat purus ac imperdiet. Nunc in nisl tellus. Vestibulum sollicitudin porttitor porttitor. Donec mi urna, malesuada id pellentesque sagittis, malesuada vel sem. Fusce faucibus eleifend nisl sit amet tempus. Maecenas vel rhoncus turpis, at aliquam neque.</p>

			<p>Integer mattis nulla eget elit malesuada, vel vehicula tortor dapibus. Integer at quam quis lorem congue viverra id ut diam. Donec faucibus, lacus at dictum blandit, dui eros porttitor quam, sed rutrum lectus nisl ut lorem. Maecenas ut auctor mi, in feugiat nulla. Aenean tincidunt urna sed pellentesque fringilla. Aenean semper laoreet diam at dignissim. Nam tempor tempus risus vitae gravida. Suspendisse commodo enim ac metus aliquam semper. Suspendisse sit amet augue nisi. Vivamus eleifend sagittis tristique. Phasellus ipsum eros, aliquet a lobortis ut, pulvinar id ante. Nulla auctor risus ac velit tincidunt, ac varius velit malesuada. In porttitor odio elit, quis venenatis sapien imperdiet a.</p>

			<p>Duis id quam venenatis, tincidunt nunc at, cursus purus. Sed non massa vitae magna suscipit condimentum. Proin id ligula non odio posuere vehicula. Vestibulum eget posuere nulla. Morbi consectetur lobortis ornare. Praesent rhoncus felis ut mattis laoreet. Nullam ante lacus, semper sit amet tortor ac, tristique cursus sapien. Integer rutrum urna nec facilisis euismod. Phasellus nec urna odio. Etiam feugiat non lectus ut tincidunt. Vestibulum ac urna nulla. In sit amet nulla eget metus fermentum tincidunt ullamcorper eu mi. Integer varius nec purus in cursus. Etiam id dui eget mauris placerat ullamcorper vitae sed libero. Aenean fringilla rhoncus pretium.</p>
		</div>
	</section>

	<section id="sec-four" class="home-sec">
		<div class="title-sec">
			<h2>About Me</h2>
		</div>
		<div class="content-sec">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla, sem ac ullamcorper accumsan, magna risus interdum odio, nec volutpat nunc quam non nibh. Vivamus sodales elit sit amet pellentesque lobortis. Ut consequat ipsum varius, aliquam magna pulvinar, porta elit. Phasellus iaculis, est sed lobortis ornare, est eros euismod massa, sed aliquet diam justo sit amet mauris. Donec lobortis non sem non commodo. Nullam non fermentum lorem. Sed hendrerit, metus ut pellentesque vulputate, odio nisl consequat justo, quis fringilla justo justo nec dui. Pellentesque sollicitudin consequat purus ac imperdiet. Nunc in nisl tellus. Vestibulum sollicitudin porttitor porttitor. Donec mi urna, malesuada id pellentesque sagittis, malesuada vel sem. Fusce faucibus eleifend nisl sit amet tempus. Maecenas vel rhoncus turpis, at aliquam neque.</p>

			<p>Integer mattis nulla eget elit malesuada, vel vehicula tortor dapibus. Integer at quam quis lorem congue viverra id ut diam. Donec faucibus, lacus at dictum blandit, dui eros porttitor quam, sed rutrum lectus nisl ut lorem. Maecenas ut auctor mi, in feugiat nulla. Aenean tincidunt urna sed pellentesque fringilla. Aenean semper laoreet diam at dignissim. Nam tempor tempus risus vitae gravida. Suspendisse commodo enim ac metus aliquam semper. Suspendisse sit amet augue nisi. Vivamus eleifend sagittis tristique. Phasellus ipsum eros, aliquet a lobortis ut, pulvinar id ante. Nulla auctor risus ac velit tincidunt, ac varius velit malesuada. In porttitor odio elit, quis venenatis sapien imperdiet a.</p>

			<p>Duis id quam venenatis, tincidunt nunc at, cursus purus. Sed non massa vitae magna suscipit condimentum. Proin id ligula non odio posuere vehicula. Vestibulum eget posuere nulla. Morbi consectetur lobortis ornare. Praesent rhoncus felis ut mattis laoreet. Nullam ante lacus, semper sit amet tortor ac, tristique cursus sapien. Integer rutrum urna nec facilisis euismod. Phasellus nec urna odio. Etiam feugiat non lectus ut tincidunt. Vestibulum ac urna nulla. In sit amet nulla eget metus fermentum tincidunt ullamcorper eu mi. Integer varius nec purus in cursus. Etiam id dui eget mauris placerat ullamcorper vitae sed libero. Aenean fringilla rhoncus pretium.</p>
		</div>
		
	</section>

	<section class="blog-container home-sec" role="main">
		
		<div class="container">
			
			<?php if(have_posts()): ?>


			<?php if(is_active_sidebar('sidebar')){ ?>
			
			<div class="col-sm-8">

			<?php }else{ ?>

			<div class="col-sm-9">

			<?php } ?>

				<?php while(have_posts()):the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('h-entry'); ?>>					
				
						<figure>
							
							<?php the_post_thumbnail(); ?>
							
						</figure>

						<h3 class="p-name">
							<a href="<?php the_permalink(); ?>" class="u-url" title="description"><?php the_title(); ?></a>
						</h3>

						<div class="article-meta">

							<span class="author">
								<i class="fa fa-user"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author(); ?></a>
							</span>
								
							<span class="category">
								<i class="fa fa-briefcase"></i> <span><?php the_category(' | '); ?></span>

							</span> 

							<span class="date">
								<i class="fa fa-calendar-o"></i> <span><?php the_date(); ?></span>
							</span> 

							<?php if(comments_open()) { ?>
								<span class="comment">
									<i class="fa fa-comment"></i> <span><?php comments_number(__('No Comments', 'business-one'),__('1 Comment', 'business-one'),__('% Comments', 'business-one')); ?></span>
								</span> 
							<?php } ?>

						</div>

						<div class="p-summary">
							 <?php the_excerpt(); ?>

							<?php wp_link_pages(); ?>
							 
						</div>

						<a href="<?php the_permalink(); ?>" class="btn u-url"><?php _e('Read More','business-one'); ?></a>	

					</article>

				<?php endwhile; ?>

				<div class="business-pagenavi">
					<?php business_one_pagenavi(); ?>
				</div>			

			</div>

			<?php endif; ?>


			<?php get_sidebar(); ?>


		</div>

</section>


<?php get_footer(); ?>