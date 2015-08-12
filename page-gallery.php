<?php
/**
 * Template Name: Gallery
 * @package coulrophobia
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php endif; ?>

<?php get_footer(); ?>
