<?php
/**
 * @package coulrophobia
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="col-xs-12">
				<h1 class="no-top-margin"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php endif; ?>

<?php get_footer(); ?>
