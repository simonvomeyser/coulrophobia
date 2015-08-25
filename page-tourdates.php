<?php
/**
 * Template Name: Tourdates
 * @package coulrophobia
 */

get_header(); ?>
<div class="col-xs-12">
<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<h1 class="no-top-margin"><?php the_title(); ?></h1>

	<?php endwhile; ?>

<?php endif; ?>

	<?php
		//Get tourdates in the future(Seen from yesterday so the if the gig is today it will still be shown)
		$tomorrow = date("Ymd", time()-86400);
		$args = array(
			'post_type' 	=> 'tourdate',
			'meta_key' 		=> 'date',
			'meta_value' 	=> $tomorrow,
			'meta_compare'	=> '>',
			'orderby'		=> 'meta_value_num',
			'order'			=> 'ASC'
			);
		$query = new WP_Query($args);
	?>
	<div id="tourdates">
		<?php if ( $query->have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

			<div class="coulrophobia-tourdate-list-item">
				<?php get_template_part('content', 'tourdates-header') ?>
			</div>

			<?php endwhile; ?>

		<?php else: ?>
			<div class="coulrophobia-tourdate-list-item">
				Momentan keine aktuellen Tourdaten.
			</div>
		<?php endif; ?>

		<div class="coulrophobia-tourdate-list-item">
			<div class="text-right">
				<a href="<?php bloginfo('url') ?>/tour/archiv"> Vergangene Tourdaten anzeigen <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>
