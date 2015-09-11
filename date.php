<?php

get_header(); ?>

<?php
	//Gets the static content of the page too
	$posts_page = get_page( get_option( 'page_for_posts' ) );
	echo '
		<div class="col-xs-12">
			<h1 class="no-top-margin">
				'.apply_filters( 'the_content', $posts_page->post_title ).'
			</h1>
		</div>';
?>
<div class="col-md-8 col-sm-12 ">
	<div id="maincontent">
		<?php echo '<h2 class="breadcrumbHeading"><a href="'.site_url().'/news">Alle News</a> / '. single_month_title(' ', FALSE) .'</h2>' ?>
		<?php if ( have_posts() ) : ?>
			<?php get_template_part('content', 'news-pagination') ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content', 'news'); ?>
			<?php endwhile; ?>
			<?php get_template_part('content', 'news-pagination') ?>
		<?php else : ?>

			<p>Keine News</p>

		<?php endif; ?>
		<?php wp_reset_postdata(); ?>


	</div>
</div>
<div class="col-md-4 col-sm-12" id="news-sidebar">
	<?php if ( is_active_sidebar( 'news_right_1' ) ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area">
			<?php dynamic_sidebar( 'news_right_1' ); ?>
		</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div>
<?php get_footer(); ?>
