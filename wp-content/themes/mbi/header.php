<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--  彌勒學院 Maitreya Buddhist Institute -->
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'MBI' ), max( $paged, $page ) );
?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<link rel="stylesheet" type="text/css" media="screen,projection" href="css/style.css" />
<link href="main.css" rel="stylesheet" type="text/css" />
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

<div id="topPan">
<!--<img src="images/maitreyabuddha01.gif" mce_src="images/maitreyabuddha01.gif" title="Maitreya Buddhist Institute" alt="Maitreya Buddhist Institute" width="100" height="127" class="logo" />
	<div id="topimagePan">
		<img src="images/blank.gif" mce_src="images/blank.gif" alt="" />
	</div>
-->
	<img class="logo2" title="Maitreya Buddhist Institute" src="<?php print IMAGES; ?>/maitreyabuddha01.gif" alt="Maitreya Buddhist Institute" />
	<div id="topheaderPan"></div>
	<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'mbi-nav' )); ?> 
	<!--  
	<ul>
		<li class="home">首頁</li>
		<li><a href="AudioTeachings.html">課程錄音</a></li>
		<li><a href="Donations.html">護持道場</a></li>
		<li class="farright"><a href="ContactUs.html">聯繫學院</a></li>
	</ul>
	-->
</div>