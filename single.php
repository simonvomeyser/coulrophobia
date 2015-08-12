<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<div class="coulrophobia-news-item">

				<!-- header -->
				<div class="coulrophobia-news-header">
					<h2>
						<?php the_title() ?>
					</h2>
				</div>
				<div class="coulrophobia-news-content">

						<?php if(get_the_post_thumbnail()): ?>
							<div class="coulrophobia-news-single-thumbnail">
								<?php the_post_thumbnail('medium'); ?>
							</div>
						<?php endif; ?>

						<?php  the_content(); ?>

				<div class="clearfix"></div>
				</div>

				<!-- footer information -->
				<div class="coulrophobia-news-footer">
					<p>
						<!-- date -->
						<span class="coulrophobia-news-date">
							<?php the_date(); ?>
						</span>

						<!-- author -->

						<span class="coulrophobia-news-author">
							erstellt von <?php the_author() ?>
						</span>

					</p>
				</div>
			</div>


		</div>


	<?php endwhile; ?>

	<?php endif; ?>

	<div >
		<a href="<?php bloginfo('url') ?> ">&laquo Zurück</a>
	</div>

<?php get_footer(); ?>