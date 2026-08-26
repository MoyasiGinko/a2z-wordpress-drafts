<?php

/**

* Template Name: New Custom Page

*

* @package WordPress

* @subpackage Twenty_Fourteen

* @since Twenty Fourteen 1.0

*/



get_header();

$banner_img = get_field('banner_img');

/* Main content loop — renders WordPress page editor content & executes shortcodes like [wpcode id="..."] */
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>

<section class="google_reviews pb_100" id="google_reviews">
    <div class="container">

        <div class="heading_txt">

            <h2><?php echo get_field('google_review_heading', 'option'); ?></h2>
            <p><?php echo get_field('google_review_sub_heading', 'option'); ?></p>

        </div>

        <?php echo get_field('google_review_shortcode', 'option'); ?>

        <div class="below_btn">

            <?php
            $review_link = get_field('google_review_link', 'option');
            if ($review_link):
                $link_url = $review_link['url'];
                $link_title = $review_link['title'];
                $link_target = $review_link['target'] ? $review_link['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn blue"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>