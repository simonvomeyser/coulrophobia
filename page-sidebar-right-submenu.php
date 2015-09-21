<?php
/**
 * Template Name: Sidebar Right with Submenu
 * @package coulrophobia
 */

get_header(); ?>
<div class="col-xs-12">

    <h1 class="no-top-margin">
        <?php
        if (get_post()->post_parent) {
           echo get_post(get_post()->post_parent)->post_title;
       }
       ?>
   </h1>
</div>
<div class="col-sm-12 col-md-8">
<h2><?php the_title(); ?></h2>
    <div id="maincontent">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

					        <?php the_content(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<p></p>

		<?php endif; ?>
    </div>
</div>
<div class="col-md-4 hidden-xs hidden-sm" id="sidebar">
<h2>Navigation</h2>

	<?php
	/**
	 * Get parent page object, then get its children, add them to one array and build simple navigation
	 */
	if (get_post()->post_parent) {
		$parentPage = get_post(get_post()->post_parent);
	} else {
		$parentPage = get_post();
	}
	$args = array(
    	'child_of' => $parentPage->ID,
    	'sort_column' => 'post_date',
    	'parent' => -1,
    	'post_type' => 'page',
    	'post_status' => 'publish',
    	'sort_order' => 'desc'
    );
    $pages = get_pages($args);

    ?>
    <?php foreach ($pages as $key => $singlePage): ?>

    	<div class="sidbar-nav-box"	<?php if(get_post()->ID===$singlePage->ID)echo 'id="sidbar-nav-box-current"';?>>
    		<a href="<?php echo get_permalink($singlePage->ID); ?>">
    			<img class="nav-box-bg-img" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $singlePage->ID ))?>">

    			<span class="text-wrapper<?php if (wp_get_attachment_url(get_post_thumbnail_id( $singlePage->ID ))) { echo ' text-wrapper-with-image'; } ?>">
    				<?php echo $singlePage->post_title ?></i>
    			</span>
    		</a>
    	</div>
    <?php endforeach; ?>

</div>

<?php get_footer(); ?>
