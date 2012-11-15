<?php
get_header();
?>
<section class="container clearfix">
	<section class="content">
		<?php while(have_posts()) : the_post(); ?>
		<section class="post_summary">
			<header>
				<h1 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header>
			<article class="post_content">
				<?php the_excerpt(); ?>
			</article>
			<footer class="post_footer">
				<?php echo get_the_author(); ?>
				<?php echo get_the_date(); ?>
			</footer>
			<!--<span class="side_date">
				<span class="date_day"><?php echo get_the_date('j'); ?></span>
				<span class="date_mon"><?php echo get_the_date('M'); ?></span>
			</span>
			-->
		</section>
		<?php endwhile; ?>
	</section>
	<?php get_sidebar(); ?>

</section>
<?php
get_footer();
?>