<?php
/**
 * Template Name: Bandmembers
 * @package coulrophobia
 */

get_header(); ?>
<div class="col-xs-12">

    <h1 class="no-top-margin">
        <?php
        if (get_post()->post_parent) {
            echo get_post(get_post()->post_parent)->post_title;
        } else {
            echo the_title();
        }
       ?>
   </h1>
</div>
<div class="col-sm-12 col-md-8">
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
<div class="col-sm-12 col-md-4" id="sidebar">

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
        'sort_column' => 'post_modified',
        'parent' => -1,
        'post_type' => 'page',
        'post_status' => 'publish',
        'sort_order' => 'asc'
    );
    $pages = get_pages($args);

    ?>
    <?php foreach ($pages as $key => $singlePage): ?>

            <div class="sidbar-nav-box navbox-bandmembers" <?php if(get_post()->ID===$singlePage->ID)echo 'id="sidbar-nav-box-current"';?>>
                <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post_id ))?>" data-lightbox="<?php the_title(); ?>" data-title="Flyer <?php the_title(); ?>" >
                    <?php the_post_thumbnail(array(50,50)); ?>
                </a>

                <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $singlePage->ID ))?> ?>" data-lightbox="Bandmembers" data-title="<?php echo $singlePage->post_title .': '.$singlePage->post_content   ?>">
                    <span class="imageWrapperBandmembers">
                        <img class="fadeImageIn" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $singlePage->ID ))?>">
                    </span>
                    <span class="text-wrapper">
                        <?php echo $singlePage->post_title ?></i>
                    </span>
                </a>
            </div>
    <?php endforeach; ?>

</div>

<?php get_footer(); ?>
