<?php get_header(); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
	<p>
		<?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(','); ?> | <?php comments_number('No Comment', '1 comment', '% comments'); ?></p>
	</p>
<?php endwhile; else: ?>
	<h2>Woops</h2>
	<p>Sorry, no posts were found.</p>
<?php endif; ?>

<p><?php posts_nav_link(); ?></p>

<?php get_footer(); ?>