<?php get_header(); ?>
<section class="container clearfix">
	<section class="content">
		<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
		<section class="post_summary">
			<header>
			<h1 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header>
			<article class="post_content">
				<?php the_content(); ?>
			</article>
			<footer class="post_footer">
			<p>
				<?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(','); ?> | <?php comments_number('No Comment', '1 comment', '% comments'); ?></p>
			</p>
			</footer>
			<?php endwhile; else: ?>
				<h2>Woops</h2>
				<p>Sorry, no posts were found.</p>
			<?php endif; ?>

			<p><?php //posts_nav_link(); ?></p>
		</section>
	</section>
</section>
<?php get_footer(); ?>