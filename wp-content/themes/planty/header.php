<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="wrapper" class="hfeed">
		<header id="header">
			<a href="http://localhost/planty/"> <img src="http://localhost/planty/wp-content/uploads/2023/10/Logo-source.png" alt="logo planty"></a>
			<nav id="menu" class= "navmenu" role="navigation">
				<a href="http://localhost/planty/nous-rencontrer/">nous rencontrer</a>
				<?php
				 if (is_user_logged_in()  ) {
					 echo '<a href="'. get_admin_url().'">Admin</a>';
				}
				?>
				<a href="http://localhost/planty/precommande/">commander</a>
			</nav>
		</header>
		<div id="container">
			<main id="content" role="main">