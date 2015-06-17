<body <?php body_class(); ?>>

<div class="page-loader">
	<img src="<?php echo get_template_directory_uri(); ?>/img/loader.gif" alt="<?php _e('ajax loader','business-one'); ?>">
</div> <!-- end page-loader -->

<?php global $business; ?>

	<!-- blog-justify -->
	<!-- <div class="blog-justify">
		
		<i class="fa fa-align-justify"></i>

	</div>  --><!-- blog-justify -->


	<header class="blog-mobile-menu">	
			
		<?php wp_nav_menu(array(
			'theme_location' => 'top-menu',
			'menu_class' => 'nav',
			'container' => 'nav',
			'container_class' => '',
			'depth' => 2,
			'fallback_cb' => 'business_one_menufb'
		)); ?>		

	</header>
	
	<!-- END NAVIGATION and LOGO -->