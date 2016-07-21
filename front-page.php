<?php
/**
 * Template Name: Frontpage
 * @package coulrophobia
 */
get_header(); ?>


<div class="col-md-8">
	<section class="section-maincontent">
		<div id="maincontent">
			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php the_content(); ?>
	
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
	
			<?php endif; ?>
	
			<?php
				$args = array(
					'post_type' 	=> 'post',
					'posts_per_page' 	=> 3,
					);
				$query = new WP_Query($args);
			?>
			<?php if ( have_posts() ) : ?>
	
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	
					<h2 class="frontpage-news-heading">News</h2>
					<?php get_template_part('content', 'news'); ?>
	
				<?php endwhile; ?>
	
			<?php else : ?>
	
				<p>Keine News gefunden</p>
	
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			<div class="coulrophobia-news-more text-right" >
				<a href ="<?php echo site_url() .'/news'; ?>">Alle News anzeigen <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
	</section>
</div>
<aside>
	<div class="col-md-4" id="frontpage-sidebar">
		<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area">
				<?php dynamic_sidebar( 'home_right_1' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
	</div>
</aside>

<?php get_footer(); ?>
