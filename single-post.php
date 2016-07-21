<?php
/**
 * @package coulrophobia
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
				<div class="col-xs-12 col-md-8">
					<h1 class="no-top-margin">News</h1>
					<h2 class="breadcrumbHeading"><a href="<?php echo site_url();  ?>/news">Alle News</a> / <?php the_title() ?></h2>
				</div>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			

				<div class="col-xs-12 col-md-8">
					<?php get_template_part('content', 'news'); ?>
				</div>

		<?php endwhile; ?>


	<?php else : ?>

		<p>404</p>

	<?php endif; ?>



<?php get_footer(); ?>
