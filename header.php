<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="wrapper">
			<nav class="head_nav_wrap">
				<ul class="head_nav">
					<li id="" <?php echo (is_home() ? 'class="active home"' : 'home'); ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
					<li class="articles">
						<a href="#">Articles</a>
						<ul>
						<?php 
							//wp_list_categories(array('hide_empty'=>0, 'title_li'=>false))
							$categories = get_categories(array('hide_empty'=>0));
							foreach($categories as $category) {
								echo (is_category($category->term_id) ? '<li class="active">' : '<li>');
								echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
							}
						?>
						</ul>
					</li>
					<li class="about"><a href="#">About</a></li>
					<li class="contact"><a href="mailto:<?php echo bloginfo('admin_email'); ?>">Contact</a></li>
				</ul>
			</nav>