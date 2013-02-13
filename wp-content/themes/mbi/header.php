

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
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
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>彌勒學院 Maitreya Buddhist Institute</title>
<link href="main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="topPan"><!--<img src="images/maitreyabuddha01.gif" mce_src="http://localhost:8888/wordpress/wp-content/uploads/2013/02/maitreyabuddha01.gif" title="Maitreya Buddhist Institute" alt="Maitreya Buddhist Institute" width="100" height="127" class="logo" />
<div id="topimagePan"><img src="images/blank.gif" mce_src="http://localhost:8888/wordpress/wp-content/uploads/2013/02/blank" alt="" /></div>
--> 	<img class="logo2" title="Maitreya Buddhist Institute" src="http://localhost:8888/wordpress/wp-content/uploads/2013/02/maitreyabuddha01.gif" alt="Maitreya Buddhist Institute" /> 

</div>