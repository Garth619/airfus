<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	
<header>
	
	<div class="header_inner">
	
		<a class="logo" href="<?php bloginfo('url');?>">
		
			<div class="large_header">
			
				<span class="white">Airfus</span><span class="dark"><span class="dot">.</span>org</span>
		
			</div><!-- large_header -->
		
			<span class="small_header">Alliance International Rescue Foundation</span><!-- small_header -->
		
		</a>
	
	
		<div class="header_right">
		
			<span class="call_us">Call Us Today</span><!-- call_us -->
		
			<a class="tel" href="tel:<?php the_field( 'phone_number' ); ?>"><?php the_field( 'phone_number' ); ?></a>
		
			<div class="menu_wrapper">
			
				<span class="menu_title">Menu</span><!-- menu_title -->
			
				<div class="menu_bar"></div><!-- menu_bar -->
				<div class="menu_bar"></div><!-- menu_bar -->
				<div class="menu_bar"></div><!-- menu_bar -->
			
			</div><!-- menu_wrapper -->

		</div><!-- header_right -->
	
	</div><!-- header_inner -->
	
</header>	
	

<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			