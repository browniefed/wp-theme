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
					<li class="<?php echo (is_home() ? 'active home' : 'home'); ?>"><a href="<?php bloginfo('url'); ?>">Home</a></li>
					<li class="<?php echo (is_category() ? 'active articles' : 'articles'); ?>">
						<a href="#">Articles</a>
						<div class="subnav">
							<ul>
							<?php 
								
								$categories = get_categories(array('hide_empty'=>0));
								$i = 0;
								$category_count = count($categories);
								foreach($categories as $category) {
									$i++;
									echo (is_category($category->term_id) ? '<li class="active">' : '<li>');
									echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
									if( ($i%5) == 0 && ($i !== 0) && ($i !== ($category_count))) {
										echo '</ul><ul>';
									} elseif ($i === ($category_count)) {
										echo '</ul>';
									}
								}
							?>
						</div>
					</li>
					<li class="about"><a href="#">About</a></li>
					<li class="contact"><a href="mailto:<?php echo bloginfo('admin_email'); ?>">Contact</a></li>
				</ul>
			</nav>