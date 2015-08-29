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
	<div class="col-sm-2 col-xs-3">
	<?php echo $date->format('d.M.Y') ?>
	</div>
	<div class="col-sm-7 col-xs-9">
		<span class="coulrophobia-tourdate-title-archive">
			<b><?php the_title(); ?></b>
		</span>
		<?php if($location['address']): ?>
			<br/><?php echo $location['address']; ?>
		<?php endif; ?>
	</div>
	<div class="col-sm-3 col-xs-12 text-right">
		<span class="coulrophobia-tourdate-actionitem-archive">
			<?php if (get_field('description')): ?>
				<a href="<?php the_permalink() ?>" title="Details anzeigen">
				    Details
				</a>
			<?php else: ?>
				Details
			<?php endif; ?>
		</span>
		<span class="coulrophobia-tourdate-actionitem">
			<?php if (!empty($location['address'])): ?>
					| <a href="https://maps.google.com?q=<?php echo $location['address']; ?>" target='_blank' title="Googlemaps Position">
						Ort
					</a>
				<?php else: ?>
				| Ort
			<?php endif; ?>
		</span>
		<span class="coulrophobia-tourdate-actionitem-archive">
			<?php if (get_field('facebooklink')): ?>
				| <a href="<?php the_field('facebooklink') ?>" target='_blank' title="Facebookseite des Veranstalters">
					Facebook
				</a>
			<?php else: ?>
				| Facebook
			<?php endif; ?>
		</span>
		<span class="coulrophobia-tourdate-actionitem-archive">
			<?php if (get_field('websitelink')): ?>
				| <a href="<?php the_field('websitelink') ?>" target='_blank' title="Website des Veranstalters">
					Website
				</a>
			<?php else: ?>
				| Website
			<?php endif; ?>
		</span>

	</div>
</div>