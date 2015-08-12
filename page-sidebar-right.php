<?php
/**
 * Template Name: Sidebar Right
 * @package coulrophobia
 */

get_header(); ?>
<div class="row">
    <div class="col-12 col-lg-8">
        <div id="maincontent">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

						        <?php the_content(); ?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<p></p>

			<?php endif; ?>
        </div>
    </div>
    <div class="col-12 col-lg-4" id="sidebar">
    Sidebar
    </div>
</div>


<?php get_footer(); ?>
