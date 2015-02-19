<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( ' | ', true, 'right' ); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/hawkd.css" />

<link href='http://fonts.googleapis.com/css?family=Roboto:500,400italic,300,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/hawkd.css" />

<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicon.png" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner" class="row">

		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
			<a href="<?php print get_home_url(); ?>"><img src="<?php bloginfo('template_directory');?>/img/logo2.png" /></a>

			<nav id="menu" role="navigation">
				<div id="hamburgerDiv" style="display: none;">
					<span class="glyphicon glyphicon-menu-hamburger" id="hamburger"></span>
					<span id="hamburgerTitle">Menu</span>
				</div>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</div>

</header>
<div id="container">