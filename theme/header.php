<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo( 'name' ); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url')?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url')?>/css/main.css">

    <script src="<?php echo get_bloginfo('template_url')?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body class="<?php if ( is_admin() )
	echo 'wp-admin'; ?>">
    <nav class="now-navbar navbar navbar-default" role="navigation">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
    		<a class="navbar-brand" href="index.php"><i class="nav-logo"></i></a>
    	</div>
        <div class="now-nav-menu">
            <a data-toggle="modal" href="#modal-menu" class="menu-btn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </div>
    </nav>
<div class="modal fade" id="modal-menu">
	<div class="modal-dialog">
		<div class="logo-menu">
			<div class="menu-left">
				<i class="nav-logo black"></i>
			</div>
			<div class="menu-right">
				<a  class="close" data-dismiss="modal" aria-hidden="true">
					MENU <i class="close-icon" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<?php
		wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu' ) );
		?>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<div class="container-header" style="background-image: url('<?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
		echo $image[0]; } ?>');">
		<div class="banner">
			<img src="<?php echo get_bloginfo('template_url')?>/img/bannert_homepage.jpg" alt="">
		</div>
		<div class="under-banner">
			<div class="container">
				<p class="text-banner">
					<?php echo get_the_excerpt() ?>
			</div>
		</div>
		<div class="bg-fade">

		</div>
	</div>