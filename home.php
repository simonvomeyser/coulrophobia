<?php
/**
 * Template Name: Sidebar Right
 * @package coulrophobia
 */

get_header(); ?>



<div class="col-md-8">
	<div id="maincontent">
		<?php
			//Gets the static content of the page too so the slider can be added
			$posts_page = get_page( get_option( 'page_for_posts' ) );
			echo apply_filters( 'the_content', $posts_page->post_content );
		?>
		<?php if ( have_posts(array('posts_per_page'=>'2')) ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="coulrophobia-news-item">

					<!-- header -->
					<div class="coulrophobia-news-header">
						<h3>
							<a href="<?php the_permalink() ?>">
								<?php the_title() ?>
							</a>
						</h3>
					</div>

					<div class="coulrophobia-news-content <?php if(get_the_post_thumbnail()) echo "coulrophobia-news-content-thumbnail-padding"; ?>">

							<?php if(get_the_post_thumbnail()): ?>
							<div class="coulrophobia-news-img-wrap">

								<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post_id ))?>" data-lightbox="<?php the_title(); ?>" data-title="<?php the_title(); ?>">
									<?php the_post_thumbnail('thumbnail'); ?>
								</a>

								</a>

							</div>
							<?php endif; ?>


						<!-- teas=ser text -->
						<div class="coulrophobia-news-teaser-text">

							<?php  echo the_content() ?>

						</div>

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

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<p></p>

		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

	</div>
</div>
<div class="col-md-4" id="frontpage-sidebar">
	<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area">
			<?php dynamic_sidebar( 'home_right_1' ); ?>
		</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div>

<?php get_footer(); ?>
