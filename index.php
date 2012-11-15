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
				<?php the_content('Read more...'); ?>
			</article>
			<footer class="post_footer">
			<p>
				<?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(','); ?> | <?php comments_number('No Comment', '1 comment', '% comments'); ?></p>
			</p>
				
			</footer>
			<!--<span class="side_date">
				<span class="date_day"><?php echo get_the_date('j'); ?></span>
				<span class="date_mon"><?php echo get_the_date('M'); ?></span>
			</span>
			-->
		</section>
	
	<?php endwhile; ?>
	
	<?php previous_posts_link(); ?> 
	<?php next_posts_link(); ?>
	</section>
	<?php get_sidebar(); ?>

</section>
<?php
get_footer();
?>