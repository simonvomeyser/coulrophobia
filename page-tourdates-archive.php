<?php
/**
 * Template Name: Tourdates Archive
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
		//Get tourdates in the past(Seen from yesterday so the if the gig is today it will still not be shown)
		$tomorrow = date("Ymd", time()-86400);
		$args = array(
			'post_type' 	=> 'tourdate',
			'meta_key' 		=> 'date',
			'meta_value' 	=> $tomorrow,
			'meta_compare'	=> '<',
			'orderby'		=> 'meta_value_num',
			'order'			=> 'DESC',
			'nopaging' 		=> TRUE
			);
		$query = new WP_Query($args);
	?>
	<div id="tourdates">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php if ( $query->have_posts() ) : ?>

				<?php $headingYear = ""; ?>

				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php

				//Display the year when it changes (and a new accordion group)
				$date = DateTime::createFromFormat('Ymd', get_field('date'));
				$year = $date->format('Y');

				?>

				<?php //New Year
				if ($headingYear != $year):
				?>


					<?php //Close Previous year
					if ($headingYear):

					?>
						    </div>
						  </div>
						</div>
					<?php endif ?>

					<div class="panel panel-default">
					  <div class="panel-heading" role="tab" id="heading<?php echo $year ?>">
					    <h4 class="panel-title">
					      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $year ?>" aria-expanded="true" aria-controls="collapse<?php echo $year ?>">
					      <?php if ($headingYear): ?>
					        <li class="fa  fa-chevron-circle-right"></li>
					      <?php else: ?>
					        <li class="fa fa-chevron-circle-down"></li>
					      <?php endif ?>

					        <?php echo $year ?>
					      </a>
					    </h4>
					  </div>
					  <div id="collapse<?php echo $year ?>" class="panel-collapse collapse <?php if(!$headingYear) echo 'in'; ?>" role="tabpanel" aria-labelledby="heading<?php echo $year ?>">
					    <div class="panel-body">


					<?php $headingYear = $year; ?>

				<?php endif ?>

				<div class="coulrophobia-tourdate-list-item">
					<?php get_template_part('content', 'tourdates-header') ?>
				</div>

				<?php endwhile; ?>

				    </div>
				  </div>
				</div>

			</div> <!-- Panel -->
			<?php endif; ?>
		<div class="coulrophobia-tourdate-list-item">
			<div>
				<a href="<?php bloginfo('url') ?>/tour"> <i class="fa fa-angle-double-left"></i> Aktuelle Tourdaten anzeigen</a>
			</div>
		</div>
	</div> <!-- Tourdates -->
</div>


<?php get_footer(); ?>
