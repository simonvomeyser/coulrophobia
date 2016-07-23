<?php
/*
Template for a row with evrything in relation to an tourdate
 */
	$date = DateTime::createFromFormat('Ymd', get_field('date'));
	$day = $date->format('d');
	$month = $date->format('M');
	$location = get_field('location');
?>
<div class="row">
	<div class="col-sm-1 col-xs-3 text-center">
		<div class="coulrophobia-tourdate-date-wrapper">
			<span class="coulrophobia-tourdate-date-day"><?php echo $day; ?></span><br/>
			<span class="coulrophobia-tourdate-date-month"><?php echo $month; ?></span>
		</div>
	</div>
	<div class="col-sm-2 hidden-xs text-center">
		<div class="coulrophobia-tourdate-img-wrapper" data-toggle="tooltip" title="Flyer anzeigen">
			<?php if(get_the_post_thumbnail()): ?>
			<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post_id ))?>" data-lightbox="<?php the_title(); ?>" data-title="Flyer <?php the_title(); ?>" >
				<?php the_post_thumbnail(array(50,50)); ?>
			</a>
			<?php else:?>
				<img src="http://placehold.it/50?text=No+Flyer" alt="There is no flyer for this show" class="img-responisve">
			<?php endif;?>
		</div>
	</div>
	<div class="col-sm-6 col-xs-9">
		<span class="coulrophobia-tourdate-title">
			<b><?php the_title(); ?></b>
		</span>
		<?php if($location['address']): ?>
			<br/> <?php echo $location['address']; ?>
		<?php endif; ?>
	</div>
	<div class="col-sm-3 col-xs-12 text-right">
		<div class="coulrophobia-tourdate-actionitem-wrapper">
			<?php if (get_field('description')): ?>
				<span class="coulrophobia-tourdate-actionitem">
					<a href="<?php the_permalink() ?>" title="Details anzeigen">
						<i class="fa fa-search"></i>
					</a>
				</span>
			<?php endif; ?>
			<?php if (get_field('location')): ?>
				<span class="coulrophobia-tourdate-actionitem">
					<a href="https://maps.google.com?q=<?php echo $location['address']; ?>" target='_blank' title="Googlemaps Position">
						<i class="fa fa-map-marker"></i>
					</a>
				</span>
			<?php endif; ?>
			<?php if (get_field('facebooklink')): ?>
				<span class="coulrophobia-tourdate-actionitem">
					<a href="<?php the_field('facebooklink') ?>" target='_blank' title="Facbookseite des Veranstalters">
						<i class="fa fa-facebook-square"></i>
					</a>
				</span>
			<?php endif; ?>
			<?php if (get_field('websitelink')): ?>
				<span class="coulrophobia-tourdate-actionitem">
					<a href="<?php the_field('websitelink') ?>" target='_blank' title="Website des Veranstalters">
						<i class="fa fa-external-link-square"></i>
					</a>
				</span>
			<?php endif; ?>

		</div>
	</div>
</div>