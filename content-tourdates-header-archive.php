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
	<div class="col-sm-2 col-xs-12">
	<?php echo $date->format('d.M.Y') ?>
	</div>
	<div class="col-sm-7 col-xs-12">
		<span class="coulrophobia-tourdate-title-archive">
			<span class="<?php if(get_field('cancelled')) echo "coulrophobia-tourdate-cancelled"; ?>"><?php the_title(); ?></span>
			<?php if(get_field('cancelled')): ?>
				<span class="cancelledWord"> (abgesagt!)</span>
			<?php endif ?>
		</span>
		<?php if($location['address']): ?>
			<br/><?php echo $location['address']; ?>
		<?php endif; ?>
	</div>
	<div class="col-sm-3 col-xs-12 text-right">
		<span class="coulrophobia-tourdate-actionitem-archive">
		<?php if(get_the_post_thumbnail()): ?>
			<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post_id ))?>" data-lightbox="<?php the_title(); ?>" data-title="Flyer <?php the_title(); ?>" >
				Flyer
			</a>
		<?php else: ?>
			Flyer
		<?php endif; ?>
		</span>
		<span class="coulrophobia-tourdate-actionitem-archive">
			<?php if (get_field('description')): ?>
				| <a href="<?php the_permalink() ?>" title="Details anzeigen">
					Details
				</a>
			<?php else: ?>
				| Details
			<?php endif; ?>
		</span>
		<span class="coulrophobia-tourdate-actionitem-archive">
			<?php if (!empty($location['address'])): ?>
					| <a href="https://maps.google.com?q=<?php echo $location['address']; ?>" target='_blank' title="Googlemaps Position">
						Ort
					</a>
				<?php else: ?>
				| Ort
			<?php endif; ?>
		</span>

	</div>
</div>