<?php
/*
Template for a single news item
 */
?>
<article>
	<div class="coulrophobia-news-item">

		<!-- header -->
		<div class="coulrophobia-news-header">
			<div>
				<span class="coulrophobia-news-date">
					<?php the_time('j F Y'); ?>
				</span>
			</div>
			<h3 class="no-top-margin">
				<a href="<?php echo the_permalink() ?>">
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
				<span class="coulrophobia-news-author">
					erstellt von <?php the_author() ?>
				</span>
			</p>
		</div>
	</div>
</article>
