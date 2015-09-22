<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();

include_afc_maps(); //includes css and js in order for gmaps to work
?>
<div class="col-xs-12">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
		$date = DateTime::createFromFormat('Ymd', get_field('date'));
		$location = get_field('location');
	?>
	<h1 class="no-top-margin">
		<a href="<?php bloginfo('url') ?>/tour">Tour</a>
	</h1>
	<h2>
		<?php the_title() ?>
	</h2>
	<div class="coulrophobia-tourdate-single-item" id="post-<?php the_ID(); ?>">
		<?php get_template_part('content', 'tourdates-header') ?>
		<div class="row">
			<div class="col-xs-12">
				<?php if(get_field('cancelled')): ?>
					<h3>Abgesagt!</h3>
					<?php the_field('cancelled') ?>
				<?php endif ?>
				<h3>Beschreibung</h3>
				<?php the_field('description') ?>
				<h3>Zusammenfassung</h3>
				<b>Name:</b>  <?php the_title(); ?><br/>
				<b>Datum:</b> <?php echo date("d.m.Y", $date->getTimestamp()); ?> <br/>
				<b>Adresse:</b> <?php echo $location['address']; ?>

				<h3>Links</h3>
				<b>Facebook:</b> <a href="<?php echo the_field('facebooklink') ?>" target='_blank'><?php echo the_field('facebooklink') ?></a> <br/>
				<b>Website:</b> <a href="<?php echo the_field('websitelink') ?>" target='_blank'><?php echo the_field('websitelink') ?></a>
			<?php if( !empty($location) ):	?>
				<h3>Karte</h3>
				<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			<?php endif; ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<?php endwhile;?>

	<?php endif; ?>

	<div >
		<a href="<?php bloginfo('url') ?>/tour">&laquo Zurück</a>
	</div>

	</div>
<?php get_footer(); ?>