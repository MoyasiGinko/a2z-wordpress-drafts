<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<?php if (have_rows('who_we_help_sections')): ?>
<?php while (have_rows('who_we_help_sections')): the_row(); ?>

<?php if (get_row_layout() == 'banner_section'):

            $banner_img = get_sub_field('banner_img');
            $banner_btn = get_sub_field('banner_btn');
        ?>

<section class="hm_banner innerBanner">
  <?php if ($banner_img) { ?>
  <div class="bannerImg">
    <img src="<?php echo $banner_img['url']; ?>" alt="img">
  </div>
  <?php } ?>
  <div class="middle_caption">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1><?php echo get_the_title(); ?></h1>
          <ul class="breadcrumb_banner">
            <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
            <li><?php echo get_the_title(); ?></li>
          </ul>
          <?php if ($banner_btn) { ?>
          <div class="gp_btn">
            <a href="<?php echo $banner_btn['url']; ?>" class="btn lighBlue"><?php echo $banner_btn['title']; ?></a>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
        elseif (get_row_layout() == 'first_section'):

            $first_section_left_panel_btn = get_sub_field('first_section_left_panel_btn');
            if ($first_section_left_panel_btn) {
                $first_section_left_panel_btn_link_target = $first_section_left_panel_btn['target'] ? $first_section_left_panel_btn['target'] : '_self';
            }

            $google_image =  get_sub_field('google_image');
            $review =  get_sub_field('review');
        ?>

<section class="abtSec1 text-justify">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="why_a2z">
          <?php if (have_rows('sub_title_repeater')): ?>
          <ul class="heading_info">
            <?php while (have_rows('sub_title_repeater')): the_row();
                                        ?>
            <li><?php echo get_sub_field('sub_title'); ?></li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>

          <?php if (get_sub_field('heading')) { ?>
          <h2><?php echo get_sub_field('heading'); ?></h2>
          <?php } ?>

          <?php if (get_sub_field('first_section_left_panel_details')) { ?>
          <?php echo get_sub_field('first_section_left_panel_details'); ?>
          <?php } ?>
          <?php if ($first_section_left_panel_btn) { ?>
          <a target="<?php echo esc_attr($first_section_left_panel_btn_link_target); ?>"
            href="<?php echo $first_section_left_panel_btn['url']; ?>"
            class="btn blue"><?php echo $first_section_left_panel_btn['title']; ?></a>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="client_story">


          <div class="content_story">
            <?php if (get_sub_field('client_success_sub_title')) { ?>
            <h5 class="taground"><?php echo get_sub_field('client_success_sub_title'); ?></h5>
            <?php } ?>
            <?php if (get_sub_field('client_success_title')) { ?>
            <h2><?php echo get_sub_field('client_success_title'); ?></h2>
            <?php } ?>

            <?php if ($google_image) { ?>
            <div class="gp_lg">
              <img src="<?php echo $google_image['url']; ?>" alt="img">
            </div>
            <?php } ?>
            <!-- Slider main container -->
            <div class="swiper client_story_wrapper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <?php if (have_rows('testimonial')): ?>
                <?php while (have_rows('testimonial')): the_row(); ?>
                <div class="swiper-slide">
                  <div class="client_story_wrapper-inner">
                    <?php if (get_sub_field('client_name')) { ?>
                    <h5><?php echo get_sub_field('client_name'); ?></h5>
                    <?php } ?>


                    <?php
                                                            $review = get_sub_field('review'); // Get the review value (0-5)
                                                            if ($review !== false):
                                                            ?>
                    <div class="tst-rate">
                      <?php
                                                                    for ($i = 1; $i <= 5; $i++) {
                                                                        if ($i <= $review) {
                                                                            echo '<i class="fa fa-star active"></i>';
                                                                        } else {
                                                                            echo '<i class="fa fa-star"></i>';
                                                                        }
                                                                    }
                                                                    ?>
                    </div>
                    <?php endif; ?>


                    <?php if (get_sub_field('month_')) { ?>
                    <h6><?php echo get_sub_field('month_'); ?></h6>
                    <?php } ?>
                    <?php if (get_sub_field('review_details')) { ?>
                    <?php echo get_sub_field('review_details'); ?>
                    <?php } ?>
                    <h6><img src="<?php echo get_template_directory_uri(); ?>/images/blue_trick.svg" alt="img">
                      <?php echo get_sub_field('verified_review'); ?></h6>
                  </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>



        </div>

      </div>
    </div>
  </div>
</section>

<?php
        elseif (get_row_layout() == 'second_section'):
            $second_section_round_check = get_sub_field('second_section_round_check');
            $second_section_left_panel_img = get_sub_field('second_section_left_panel_img');
            $second_section_right_panel_btn = get_sub_field('second_section_right_panel_btn');
            if ($second_section_right_panel_btn) {
                $second_section_right_panel_btn_link_target = $second_section_right_panel_btn['target'] ? $second_section_right_panel_btn['target'] : '_self';
            }

        ?>

<section class="why-choose default-section-spacing <?php if ($second_section_round_check) {
                                                                    echo 'round-check';
                                                                }  ?>">
  <img src="<?php echo get_template_directory_uri(); ?>/images/why-choose-bg.png" alt="" class="bg">

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php if ($second_section_left_panel_img) { ?>
        <div class="why-choose-img">
          <img src="<?php echo $second_section_left_panel_img['url']; ?>" alt="accounting">
        </div>
        <?php } ?>
      </div>
      <div class="col-md-6">
        <div class="why-choose-txt">
          <?php if (get_sub_field('second_section_right_panel_title')) { ?>
          <h2><?php echo get_sub_field('second_section_right_panel_title'); ?></h2>
          <?php } ?>

          <?php if (get_sub_field('second_section_right_panel_content')) { ?>
          <div class="why-choose-content mb-3" style="color: #fff">
            <?php echo get_sub_field('second_section_right_panel_content'); ?>
          </div>
          <?php } ?>

          <?php if (have_rows('sub_title_repeater')): ?>
          <ul class="heading_info">
            <?php while (have_rows('sub_title_repeater')): the_row();
                                        ?>
            <li><?php echo get_sub_field('sub_title'); ?></li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>

          <?php if (have_rows('second_section_right_panel_content_list')): ?>
          <ul>
            <?php while (have_rows('second_section_right_panel_content_list')): the_row();
                                            $icon = get_sub_field('icon');
                                        ?>
            <li>
              <?php echo get_sub_field('content'); ?>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>

          <?php if ($second_section_right_panel_btn) { ?>
          <a target="<?php echo esc_attr($second_section_right_panel_btn_link_target); ?>"
            href="<?php echo $second_section_right_panel_btn['url']; ?>"
            class="btn"><?php echo $second_section_right_panel_btn['title']; ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
        elseif (get_row_layout() == 'third_section'):
            $third_section_round =  get_sub_field('third_section_round');
        ?>

<section class="who-we-work-with default-section-spacing text-justify <?php if ($third_section_round) {
                                                                                        echo 'round-box';
                                                                                    } ?>">
  <div class="container">

    <div class="mxw642">
      <?php if (get_sub_field('third_section_title')) { ?>
      <h2><?php echo get_sub_field('third_section_title'); ?></h2>
      <?php } ?>
      <?php if (get_sub_field('third_section_content')) { ?>
      <?php echo get_sub_field('third_section_content'); ?>
      <?php } ?>
    </div>

    <?php if (have_rows('third_section_content_list')): ?>
    <div class="row">

      <?php while (have_rows('third_section_content_list')): the_row();
                                $icon = get_sub_field('icon');
                            ?>
      <div class="col-lg-4 col-md-6">
        <div class="whobx">
          <p><?php echo get_sub_field('title'); ?> <?php echo get_sub_field('content'); ?></p>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>

    <?php if (get_sub_field('third_section_sub_title')) { ?>
    <div class="mxw642 default-section-spacing">
      <h5><?php echo get_sub_field('third_section_sub_title'); ?></h5>
    </div>
    <?php } ?>

  </div>
</section>

<?php
        elseif (get_row_layout() == 'fourth_section'):
            $forth_section_new_check_and_arrow = get_sub_field('forth_section_new_check_and_arrow');
        ?>

<section class="comprehensive default-section-spacing <?php if ($forth_section_new_check_and_arrow) {
                                                                        echo 'check-arrow';
                                                                    } ?>">
  <div class="container">
    <?php if (get_sub_field('fourth_section_title')) { ?>
    <h2><?php echo get_sub_field('fourth_section_title'); ?></h2>
    <?php } ?>

    <?php if (get_sub_field('fourth_section_content')) { ?>
    <?php echo get_sub_field('fourth_section_content'); ?></h2>
    <?php } ?>

    <?php if (have_rows('fourth_section_content_list')): ?>
    <div class="row">

      <?php while (have_rows('fourth_section_content_list')): the_row();
                                $icon = get_sub_field('icon');
                            ?>
      <div class="col-md-6">
        <div class="comprehensive-bx">
          <h5><?php echo get_sub_field('title'); ?></h5>
          <?php echo get_sub_field('content'); ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php
        elseif (get_row_layout() == 'fifth_section'):
        ?>

<section class="industry-leaders mb-0 mt-0 text-justify">
  <div class="industry-leaders-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="industry-leaders-inner-bx">

            <?php if (get_sub_field('fifth_section_left_panel_title')) { ?>
            <h2><?php echo get_sub_field('fifth_section_left_panel_title'); ?></h2>
            <?php } ?>

            <?php if (get_sub_field('fifth_section_left_panel_content')) { ?>
            <?php echo get_sub_field('fifth_section_left_panel_content'); ?></h2>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-6">
          <?php if (have_rows('fifth_section_right_panel_img')): ?>
          <div class="industry-leaders-inner-img">
            <div class="industry-leaders-inner-inner">
              <?php while (have_rows('fifth_section_right_panel_img')): the_row();
                                                $icon = get_sub_field('icon');
                                            ?>
              <img src="<?php echo $icon['url']; ?>" alt="">
              <?php endwhile; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
        elseif (get_row_layout() == 'sixth_section'):
            $sixth_section_left_panel_btn = get_sub_field('sixth_section_left_panel_btn');
            if ($sixth_section_left_panel_btn) {
                $sixth_section_left_panel_btn_link_target = $sixth_section_left_panel_btn['target'] ? $sixth_section_left_panel_btn['target'] : '_self';
            }

            $sixth_section_right_panel_img =  get_sub_field('sixth_section_right_panel_img');
        ?>

<section class="financial-op default-section-spacing">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="finbx">
          <?php if (get_sub_field('sixth_section_left_panel_title')) { ?>
          <h2><?php echo get_sub_field('sixth_section_left_panel_title'); ?></h2>
          <?php } ?>

          <?php if (get_sub_field('sixth_section_left_panel_sub_title_1')) { ?>
          <h5><?php echo get_sub_field('sixth_section_left_panel_sub_title_1'); ?></h5>
          <?php } ?>

          <?php if (get_sub_field('sixth_section_left_panel_sub_title_2')) { ?>
          <h5><?php echo get_sub_field('sixth_section_left_panel_sub_title_2'); ?></h5>
          <?php } ?>

          <?php if (get_sub_field('sixth_section_left_panel_content')) { ?>
          <p><?php echo get_sub_field('sixth_section_left_panel_content'); ?></p>
          <?php } ?>

          <?php if ($sixth_section_left_panel_btn) { ?>
          <a target="<?php echo esc_attr($sixth_section_left_panel_btn_link_target); ?>"
            href="<?php echo $sixth_section_left_panel_btn['url']; ?>"
            class="btn blue"><?php echo $sixth_section_left_panel_btn['title']; ?></a>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-6">
        <?php if ($sixth_section_right_panel_img) { ?>
        <div class="finimg">
          <img src="<?php echo $sixth_section_right_panel_img['url']; ?>" alt="">
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php
        elseif (get_row_layout() == 'seventh_section'):
            $seventh_section_right_panel_btn = get_sub_field('seventh_section_right_panel_btn');
            if ($seventh_section_right_panel_btn) {
                $seventh_section_right_panel_btn_link_target = $seventh_section_right_panel_btn['target'] ? $seventh_section_right_panel_btn['target'] : '_self';
            }
            $seventh_section_left_panel_img =  get_sub_field('seventh_section_left_panel_img');
            $seventh_section_right_panel_phone_btn =  get_sub_field('seventh_section_right_panel_phone_btn');
            $seventh_section_right_panel_email_btn =  get_sub_field('seventh_section_right_panel_email_btn');
        ?>

<section class="accounting-solutions <?php if (!is_single(843)) echo 'default-section-spacing'; ?>">
  <div class="container">
    <div class="accounting-solutions-inner">
      <div class="row">
        <div class="col-md-6">
          <?php if ($seventh_section_left_panel_img) { ?>
          <div class="accounting-solutions-img">
            <img src="<?php echo $seventh_section_left_panel_img['url']; ?>" alt="">
          </div>
          <?php } ?>
        </div>
        <div class="col-md-6">
          <div class="accounting-solutions-txt">

            <?php if (get_sub_field('seventh_section_right_panel_title')) { ?>
            <h2><?php echo get_sub_field('seventh_section_right_panel_title'); ?></h2>
            <?php } ?>

            <?php if (get_sub_field('seventh_section_right_panel_content')) { ?>
            <?php echo get_sub_field('seventh_section_right_panel_content'); ?>
            <?php } ?>

            <?php if (get_sub_field('seventh_section_right_panel_sub_title')) { ?>
            <h6><?php echo get_sub_field('seventh_section_right_panel_sub_title'); ?></h6>
            <?php } ?>
            <div class="normal-with-icon-btn">
              <?php if ($seventh_section_right_panel_btn) { ?>

              <a target="<?php echo esc_attr($seventh_section_right_panel_btn_link_target); ?>"
                href="<?php echo $seventh_section_right_panel_btn['url']; ?>" class="btn"><i
                  class="fa-solid fa-calendar-days"></i> <?php echo $seventh_section_right_panel_btn['title']; ?></a>

              <?php } ?>

              <?php if ($seventh_section_right_panel_phone_btn) { ?>

              <a href="<?php echo $seventh_section_right_panel_phone_btn['url']; ?>" class="btn"><i
                  class="fa-solid fa-phone"></i><?php echo $seventh_section_right_panel_phone_btn['title']; ?></a>

              <?php } ?>

              <?php if ($seventh_section_right_panel_email_btn) { ?>

              <a href="<?php echo $seventh_section_right_panel_email_btn['url']; ?>" class="btn"><i
                  class="fa-solid fa-envelope"></i><?php echo $seventh_section_right_panel_email_btn['title']; ?></a>

              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<section class="testimonal">
  <div class="container">
    <div class="heading_flex">
      <h2><?php echo get_field('testimonials'); ?></h2>
      <div class="testimonal_arrows">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <!-- Swiper -->
    <div class="swiper testimonalSwiper">
      <div class="swiper-wrapper">

        <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'testimonials',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $results = new WP_Query($args);

                while ($results->have_posts()) : $results->the_post();
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full");
                    $feature_image = $image[0];
                    $designation = get_field('designation', get_the_ID());
                    $review = get_field('star', get_the_ID());
                    $video_file = get_field('video_file', get_the_ID());
                ?>
        <div class="swiper-slide">
          <div class="testimonal_box">
            <div class="tst_img">
              <a href="<?php echo $video_file['url']; ?>" data-lity>
                <img src="<?php echo $feature_image; ?>" alt="img">
                <i class="fa-solid fa-circle-play"></i>
              </a>
            </div>
            <div class="tst_dts">
              <h5><?php echo get_the_title(); ?></h5>
              <h6><?php echo $designation; ?></h6>
              <p><?php echo get_the_content(); ?></p>

              <?php if ($review) : ?>
              <div class="tst-rate">
                <?php
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $review) {
                                                echo '<i class="fa fa-star active"></i>';
                                            } else {
                                                echo '<i class="fa fa-star"></i>';
                                            }
                                        }
                                        ?>
              </div>
              <?php endif; ?>

            </div>
          </div>
        </div>
        <?php
                endwhile;
                wp_reset_postdata();
                ?>

      </div>
    </div>
  </div>
</section>

<section class="google_reviews mb-70" id="google_reviews">
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
      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
        class="btn blue"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php
/**
 * FAQ component partial.
 *
 * Expected usage:
 *   require_once __DIR__ . '/faq-component.php';
 *   render_faq_component($faqData, 6);
 */

if (!function_exists('render_faq_component')) {
    function render_faq_component(array $data, $limit = 6)
    {
        $list = [];
        foreach ($data as $cat) {
            if (empty($cat['items']) || !is_array($cat['items'])) {
                continue;
            }

            foreach ($cat['items'] as $item) {
                $list[] = [
                    'item' => $item,
                    'label' => isset($cat['label']) ? $cat['label'] : '',
                ];
            }
        }

        $total = count($list);
        ob_start();
        ?>
<section class="faq-section">
  <div class="faq-inner">
    <div class="faq-header">
      <div class="rv">
        <h2 class="faq-title">
          Questions we<br /><span>answer every day</span>
        </h2>
      </div>
    </div>

    <div class="faq-grid rv d3" id="faqGrid" data-limit="<?= (int) $limit ?>" data-total="<?= (int) $total ?>">
      <?php
              $left = [];
              $right = [];
              foreach ($list as $i => $row) {
                  $hidden = $i >= $limit ? ' hidden' : '';
                  $num = str_pad($i + 1, 2, '0', STR_PAD_LEFT);
                  $q = htmlspecialchars($row['item']['q'] ?? '', ENT_QUOTES);
                  $a = htmlspecialchars($row['item']['a'] ?? '', ENT_QUOTES);
                  $cta = htmlspecialchars($row['item']['cta'] ?? '', ENT_QUOTES);

                  $itemHtml = '<div class="faq-item' . $hidden . '" data-index="' . $i . '">'
                    . '<div class="faq-q">'
                    . '<span class="faq-q-text">'
                    . '<span class="faq-q-num" aria-hidden="true">' . $num . '</span>'
                    . '<span class="faq-q-question">' . $q . '</span>'
                    . '</span>'
                    . '<span class="faq-toggle"><svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>'
                    . '</div>'
                    . '<div class="faq-a"><div class="faq-a-inner">'
                    . '<p class="faq-a-text">' . $a . '</p>'
                    . '<a href="/contact/" class="faq-cta">' . $cta . '</a>'
                    . '</div></div>'
                    . '</div>';

                  if ($i % 2 === 0) {
                      $left[] = $itemHtml;
                  } else {
                      $right[] = $itemHtml;
                  }
              }
              ?>
      <div class="faq-col">
        <?php foreach ($left as $html) { echo $html; } ?>
      </div>
      <div class="faq-col">
        <?php foreach ($right as $html) { echo $html; } ?>
      </div>

      <?php if ($total > $limit):
                  $remaining = $total - $limit;
              ?>
      <div class="see-more-wrap">
        <div class="see-more-bar"></div>
        <button class="btn-see" data-limit="<?= (int) $limit ?>" data-total="<?= (int) $total ?>">
          <svg viewBox="0 0 24 24">
            <polyline points="6 9 12 15 18 9" />
          </svg>
          See <?= (int) $remaining ?> more question<?= $remaining > 1 ? 's' : '' ?> <span
            class="see-count"><?= (int) $limit ?> / <?= (int) $total ?></span>
        </button>
      </div>
      <?php endif; ?>
    </div>

    <div class="faq-footer rv d3">
      <p class="faq-footer-txt">
        Still have questions? <strong>We respond the same day.</strong>
      </p>
      <a href="/contact/" class="btn-blue">Book a free consultation</a>
    </div>
  </div>
</section>

<script>
(function() {
  var gridEl = document.getElementById('faqGrid');
  if (!gridEl) return;

  var LIMIT = parseInt(gridEl.dataset.limit, 10) || 6;
  var total = parseInt(gridEl.dataset.total, 10) || gridEl.querySelectorAll('.faq-item').length;

  function syncRowHeights() {
    var columns = gridEl.querySelectorAll('.faq-col');
    if (columns.length !== 2) return;
    var leftItems = columns[0].querySelectorAll('.faq-item');
    var rightItems = columns[1].querySelectorAll('.faq-item');
    var maxRows = Math.max(leftItems.length, rightItems.length);

    leftItems.forEach(function(el) {
      el.classList.add('is-matched');
      el.style.removeProperty('--faq-match-height');
    });
    rightItems.forEach(function(el) {
      el.classList.add('is-matched');
      el.style.removeProperty('--faq-match-height');
    });

    for (var i = 0; i < maxRows; i++) {
      var leftItem = leftItems[i];
      var rightItem = rightItems[i];
      if (!leftItem && !rightItem) continue;

      var leftHeight = leftItem && leftItem.offsetParent !== null ? leftItem.offsetHeight : 0;
      var rightHeight = rightItem && rightItem.offsetParent !== null ? rightItem.offsetHeight : 0;
      var matchedHeight = Math.max(leftHeight, rightHeight);

      if (leftItem) leftItem.style.setProperty('--faq-match-height', matchedHeight + 'px');
      if (rightItem) rightItem.style.setProperty('--faq-match-height', matchedHeight + 'px');
    }
  }

  gridEl.querySelectorAll('.faq-q').forEach(function(q) {
    q.addEventListener('click', function() {
      var item = q.closest('.faq-item');
      var isOpen = item.classList.contains('open');
      gridEl.querySelectorAll('.faq-item.open').forEach(function(el) {
        el.classList.remove('open');
      });
      if (!isOpen) item.classList.add('open');
    });
  });

  var btn = gridEl.querySelector('.btn-see');
  if (btn) {
    var expanded = false;
    var remaining = total - LIMIT;

    function setBtn() {
      btn.innerHTML = expanded ?
        '<svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>Show less <span class="see-count">' +
        total + ' / ' + total + '</span>' :
        '<svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>See ' + remaining + ' more question' + (
          remaining > 1 ? 's' : '') + ' <span class="see-count">' + LIMIT + ' / ' + total + '</span>';
      expanded ? btn.classList.add('expanded') : btn.classList.remove('expanded');
    }

    setBtn();
    btn.addEventListener('click', function() {
      expanded = !expanded;
      if (expanded) {
        gridEl.querySelectorAll('.faq-item.hidden').forEach(function(el) {
          el.classList.remove('hidden');
        });
      } else {
        gridEl.querySelectorAll('.faq-item').forEach(function(el) {
          if (parseInt(el.dataset.index, 10) >= LIMIT) {
            el.classList.add('hidden');
          }
        });
        gridEl.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
      setTimeout(function() {
        syncRowHeights();
      }, 460);
      setBtn();
    });
  }

  requestAnimationFrame(function() {
    syncRowHeights();
  });
  window.addEventListener('resize', function() {
    requestAnimationFrame(syncRowHeights);
  });

  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (e.isIntersecting) {
          e.target.classList.add('in');
          io.unobserve(e.target);
        }
      });
    }, {
      threshold: 0.07
    });
    document.querySelectorAll('.rv').forEach(function(el) {
      io.observe(el);
    });
  } else {
    document.querySelectorAll('.rv').forEach(function(el) {
      el.classList.add('in');
    });
  }
})();
</script>
<?php
        return ob_get_clean();
    }
}

// Map page slug → FAQ category id
$_faq_slug_map = [
    'hospitality'              => 'hospitality',
    'social-media-influencers' => 'influencers',
    'e-commerce-and-retail'    => 'ecommerce',
    'healthcare'               => 'healthcare',
    'property-trades'          => 'property',
    'oil-gas-and-engineering'  => 'oilgas',
];

$_faq_page_slug = get_post_field('post_name', get_the_ID());
$_faq_active_id = isset($_faq_slug_map[$_faq_page_slug]) ? $_faq_slug_map[$_faq_page_slug] : null;

$faq_data = [
    [
        'id' => 'hospitality',
        'label' => 'Hospitality',
        'items' => [
            ['q' => 'How can an accountant help improve profitability in my hospitality business?', 'a' => 'We provide real-time financial insights, cost control strategies, and proactive tax planning to help increase margins and improve profitability.', 'cta' => 'Book a consultation to review your business'],
            ['q' => 'Do you specialise in hospitality accounting?', 'a' => 'Yes, we work with restaurants, hotels, cafés, bars, and event businesses, providing tailored accounting solutions for the hospitality sector.', 'cta' => 'Speak to a hospitality accountant today'],
            ['q' => 'How does A2Z accounting handle VAT for hospitality businesses?', 'a' => 'We manage VAT compliance, optimise VAT structures, and ensure accurate reporting across food, accommodation, and event revenue.', 'cta' => 'Get expert VAT support'],
            ['q' => 'Can a UK accountant manage payroll for hospitality staff?', 'a' => 'Yes, we provide fully managed payroll for shift-based teams, including wages, tips, pensions, and compliance.', 'cta' => 'Let us handle your payroll'],
            ['q' => 'Why is my business busy but not profitable?', 'a' => 'This is usually due to poor cost control, VAT inefficiencies, or lack of financial visibility. We help you identify and fix these issues.', 'cta' => 'Book a consultation to improve profitability'],
        ],
    ],
    [
        'id' => 'influencers',
        'label' => 'Social Media Influencers',
        'items' => [
            ['q' => 'Do influencers need to pay tax in the UK?', 'a' => 'Yes, if you earn income from brand deals, ads, or affiliates, you must declare it to HMRC.', 'cta' => 'Book a consultation to stay compliant'],
            ['q' => 'Are gifted products taxable?', 'a' => 'In many cases, yes. HMRC may treat PR gifts as income depending on their purpose.', 'cta' => 'Speak to an expert to avoid mistakes'],
            ['q' => 'How can I reduce tax as a content creator?', 'a' => 'By claiming expenses, structuring your income correctly, and planning, you can reduce your tax legally.', 'cta' => 'Get your personalised tax plan'],
            ['q' => 'Do I need an accountant as an influencer?', 'a' => 'If your income is growing or coming from multiple sources, an accountant helps you stay compliant and maximise earnings.', 'cta' => 'Talk to a specialist today'],
            ['q' => 'Can an accounting firm for influencers manage all my finances?', 'a' => 'Yes, we provide fully managed services including bookkeeping, tax, VAT, and financial advice.', 'cta' => 'Get started with a free consultation'],
            ['q' => 'How do I get started?', 'a' => "Simply book a free consultation or submit your enquiry. We'll guide you step by step.", 'cta' => 'Start your enquiry today'],
        ],
    ],
    [
        'id' => 'ecommerce',
        'label' => 'E-Commerce & Retail',
        'items' => [
            ['q' => 'Why is my e-commerce business not as profitable as expected?', 'a' => 'Because fees, VAT, refunds, and platform costs reduce your margins. We help you track real profit and improve performance.', 'cta' => 'Book a consultation to review your business'],
            ['q' => 'Do I need an accountant for my online business?', 'a' => 'Yes, especially if you sell on multiple platforms or internationally. E-commerce accounting is more complex than traditional business accounting.', 'cta' => 'Speak to an expert today'],
            ['q' => 'How do e-commerce tax accountants handle VAT for e-commerce businesses?', 'a' => 'We manage UK VAT, EU VAT (OSS/IOSS), and cross-border compliance to ensure accuracy and reduce tax risk.', 'cta' => 'Get expert VAT support'],
            ['q' => 'Can a Shopify accountant track profit across Amazon and Shopify?', 'a' => 'Yes, we reconcile all platforms, fees, and payouts to give you a clear picture of your actual profit.', 'cta' => 'Get full financial clarity'],
            ['q' => 'How can I reduce taxes as an e-commerce business?', 'a' => 'Through proactive tax planning, expense optimisation, and proper structuring, we help you reduce tax legally.', 'cta' => 'Get your personalised tax plan'],
            ['q' => 'How do I get started?', 'a' => "Book a free consultation or submit your enquiry. We'll review your setup and recommend the best next steps.", 'cta' => 'Start your enquiry today'],
        ],
    ],
    [
        'id' => 'healthcare',
        'label' => 'Healthcare',
        'items' => [
            ['q' => 'Do healthcare professionals need a specialist accountant?', 'a' => 'Yes, healthcare finances are complex, especially with NHS contracts and compliance requirements. A specialist accountant helps you stay compliant and optimise your income.', 'cta' => 'Book a consultation to get expert advice'],
            ['q' => 'How can I reduce taxes as a doctor or dentist?', 'a' => 'Through proactive tax planning, expense optimisation, and proper structuring, we help reduce your tax legally.', 'cta' => 'Get your personalised tax plan'],
            ['q' => 'Do A2Z Accounting Solutions work with NHS and private practices?', 'a' => 'Yes, we support both NHS and private healthcare providers, including clinics, dentists, and locum professionals.', 'cta' => 'Speak to a specialist today'],
            ['q' => 'How do dental practice accountants handle VAT for healthcare businesses?', 'a' => 'We manage complex VAT rules, especially for pharmacies and aesthetic clinics, ensuring compliance and tax efficiency.', 'cta' => 'Get expert VAT support'],
            ['q' => 'Can dental accountants UK manage payroll and pensions?', 'a' => 'Yes, we handle payroll, NHS pensions, and compliance to ensure accuracy and reduce administrative burden.', 'cta' => 'Let us manage your payroll'],
            ['q' => 'How do I get started?', 'a' => "Simply book a free consultation or submit your enquiry. We'll review your setup and guide you step by step.", 'cta' => 'Start your enquiry today'],
        ],
    ],
    [
        'id' => 'property',
        'label' => 'Property & Trades',
        'items' => [
            ['q' => 'What is CIS and how does it affect my business?', 'a' => 'CIS (Construction Industry Scheme) affects how tax is deducted from payments to subcontractors. We manage compliance and help you reclaim overpaid tax.', 'cta' => 'Book a consultation for expert guidance'],
            ['q' => 'Can I reduce tax as a property developer or landlord?', 'a' => 'Yes, through capital allowances, tax planning, and proper structuring, you can significantly reduce your tax liability.', 'cta' => 'Get your personalised tax plan'],
            ['q' => 'Do I need an accountant for my trade business?', 'a' => 'Yes, especially if you deal with subcontractors, VAT, or fluctuating income. A specialist accountant helps you stay compliant and maximise profits.', 'cta' => 'Speak to an expert today'],
            ['q' => 'How do property accountants handle VAT in construction and property?', 'a' => 'We manage complex VAT rules for new builds, renovations, and commercial properties to ensure compliance and avoid overpaying.', 'cta' => 'Get expert VAT support'],
            ['q' => 'Can A2Z Accounting Solutions manage payroll and subcontractors?', 'a' => 'Yes, we handle payroll, PAYE, and subcontractor payments to ensure everything is accurate and compliant.', 'cta' => 'Let us manage your payroll'],
            ['q' => 'How do I get started?', 'a' => "Simply book a free consultation or submit your enquiry. We'll review your business and recommend the best next steps.", 'cta' => 'Start your enquiry today'],
        ],
    ],
    [
        'id' => 'oilgas',
        'label' => 'Oil, Gas & Engineering',
        'items' => [
            ['q' => 'Do oil & gas companies need specialist accountants?', 'a' => 'Yes, due to complex regulations, international operations, and tax structures, specialist accounting is essential.', 'cta' => 'Book a consultation for expert advice'],
            ['q' => 'Can you handle international tax and compliance?', 'a' => 'Yes, we support cross-border operations, tax structuring, and compliance with UK and global standards.', 'cta' => 'Speak to an expert today'],
            ['q' => 'How do accountants help improve cash flow in large projects?', 'a' => 'We provide project-level financial tracking and forecasting to improve cash flow and profitability.', 'cta' => 'Get financial clarity for your projects'],
            ['q' => 'Do A2Z Accounting Solutions manage contractor payroll?', 'a' => 'Yes, we handle payroll for contractors, offshore teams, and engineering staff with full compliance.', 'cta' => 'Let us manage your payroll'],
            ['q' => 'How can I reduce taxes in my engineering business?', 'a' => 'Through proactive tax planning, structuring, and compliance strategies, we help reduce tax legally.', 'cta' => 'Get your personalised tax plan'],
            ['q' => 'How do I get started?', 'a' => "Simply book a free consultation or submit your enquiry. We'll review your business and guide you forward.", 'cta' => 'Start your enquiry today'],
        ],
    ],
];

// Filter to show only the current page's industry FAQs
$_faq_display = [];
if ($_faq_active_id) {
    foreach ($faq_data as $cat) {
        if ($cat['id'] === $_faq_active_id) {
            $_faq_display[] = $cat;
            break;
        }
    }
}
?>

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500&family=DM+Mono:wght@300;400&display=swap"
  rel="stylesheet" />

<style>
*,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  font-size: 16px;
  scroll-behavior: smooth;
}

:root {
  --faq-blue: #1a6fa8;
  --faq-blue-lt: #2d93d4;
  --faq-blue-dk: #0d4f7c;
  --faq-navy: #0c1f2e;
  --faq-ease: cubic-bezier(0.25, 0.46, 0.45, 0.94);
  --faq-serif: "Cormorant Garamond", Georgia, serif;
  --faq-sans: "DM Sans", system-ui, sans-serif;
}

/* ── Section wrapper ── */
.faq-section {
  background: #fff;
  padding: clamp(60px, 9vw, 110px) 0;
}

.faq-inner {
  max-width: 1360px;
  margin: 0 auto;
  padding: 0 clamp(24px, 5vw, 72px);
}

/* ── Header ── */
.faq-header {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(32px, 5vw, 80px);
  align-items: end;
  margin-bottom: clamp(40px, 5vw, 64px);
}

.faq-title {
  font-family: var(--faq-serif);
  font-weight: 700;
  font-size: clamp(2.15rem, 4vw, 3.6rem);
  line-height: 1.02;
  letter-spacing: -0.03em;
  color: var(--faq-navy);
}

.faq-title span {
  color: var(--faq-blue);
}

/* ── Grid ── */
.faq-grid {
  display: flex;
  gap: 16px;
  align-items: flex-start;
  flex-wrap: wrap;
}

.faq-col {
  flex: 1 1 calc(50% - 8px);
  display: flex;
  flex-direction: column;
  gap: 16px;
  min-width: 0;
}

.see-more-wrap {
  flex: 0 0 100%;
}

/* ── FAQ card ── */
.faq-item {
  background: #fff;
  border-radius: 14px;
  border: 1.5px solid rgba(13, 79, 124, 0.13);
  position: relative;
  overflow: hidden;
  align-self: start;
  width: 100%;
  transition: transform 0.22s var(--faq-ease),
    box-shadow 0.22s var(--faq-ease),
    border-color 0.22s var(--faq-ease);
}

.faq-item:hover {
  transform: translateY(-3px);
  border-color: rgba(13, 79, 124, 0.32);
  box-shadow: 0 12px 32px rgba(13, 79, 124, 0.1);
}

.faq-item.open {
  border-color: var(--faq-blue-dk);
  box-shadow: 0 8px 28px rgba(13, 79, 124, 0.12);
}

.faq-item.is-matched {
  min-height: var(--faq-match-height, auto);
}

/* top accent line */
/* .faq-item::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  border-radius: 14px 14px 0 0;
  background: linear-gradient(to right, var(--faq-blue-dk), var(--faq-blue-lt));
  opacity: 0;
  transition: opacity 0.22s var(--faq-ease);
}
 */
.faq-item.open::before,
.faq-item:hover::before {
  opacity: 1;
}

/* ── Question row ── */
.faq-q {
  display: flex;
  align-items: flex-start;
  gap: 16px;
  padding: clamp(18px, 2.4vw, 26px) clamp(20px, 3vw, 32px);
  cursor: pointer;
  user-select: none;
}

.faq-q-num {
  font-family: var(--faq-serif);
  font-weight: 700;
  font-size: 1.25rem;
  color: rgba(13, 79, 124, 0.3);
  flex-shrink: 0;
  line-height: 1.2;
  letter-spacing: 0.04em;
  transition: color 0.22s;
}

.faq-item.open .faq-q-num,
.faq-item:hover .faq-q-num {
  color: var(--faq-blue-dk);
}

.faq-q-text {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  min-width: 0;
  flex: 1;
  font-family: var(--faq-sans);
  font-size: clamp(0.97rem, 1.3vw, 1.08rem);
  font-weight: 600;
  color: var(--faq-navy);
  line-height: 1.45;
  transition: color 0.22s;
}

/* ── Toggle icon ── */
.faq-toggle {
  width: 32px;
  height: 32px;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: rgba(13, 79, 124, 0.07);
  margin-top: 1px;
  align-self: flex-start;
  transition: background 0.22s var(--faq-ease);
}

.faq-item.open .faq-toggle,
.faq-item:hover .faq-toggle {
  background: var(--faq-blue-dk);
}

.faq-toggle svg {
  width: 16px;
  height: 16px;
  stroke: var(--faq-blue-dk);
  fill: none;
  stroke-width: 2.8;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: transform 0.3s var(--faq-ease), stroke 0.22s;
}

.faq-item.open .faq-toggle svg,
.faq-item:hover .faq-toggle svg {
  stroke: #fff;
}

.faq-item.open .faq-toggle svg {
  transform: rotate(45deg);
}

/* ── Answer panel ── */
.faq-a {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.42s var(--faq-ease);
}

.faq-item.open .faq-a {
  max-height: 360px;
}

.faq-a-inner {
  padding: 0 clamp(20px, 3vw, 32px) clamp(18px, 2.2vw, 26px) clamp(20px, 3vw, 32px);
  border-top: 1px solid rgba(13, 79, 124, 0.1);
}

.faq-a-text {
  font-family: var(--faq-sans);
  font-size: 1rem;
  line-height: 1.85;
  color: #112b46;
  font-weight: 500;
  padding-top: 16px;
  margin-bottom: 14px;
}

.faq-cta {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 0.82rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--faq-blue-dk);
  text-decoration: none;
  transition: gap 0.18s, color 0.18s;
}

.faq-cta::after {
  content: "";
}

.faq-cta:hover {
  gap: 12px;
  color: var(--faq-blue);
}

.faq-item.hidden {
  display: none;
}

/* ── See more button ── */
.see-more-wrap {
  grid-column: 1 / -1;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 32px 0 8px;
  gap: 16px;
}

.btn-see {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-family: var(--faq-sans);
  font-size: 0.9rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 13px 32px;
  background: #fff;
  color: var(--faq-blue-dk);
  border: 2px solid rgba(13, 79, 124, 0.2);
  border-radius: 8px;
  cursor: pointer;
  outline: none;
  transition: background 0.18s, border-color 0.18s, color 0.18s;
}

.btn-see:hover {
  background: var(--faq-blue-dk);
  border-color: var(--faq-blue-dk);
  color: #fff;
}

.btn-see svg {
  width: 17px;
  height: 17px;
  stroke: currentColor;
  fill: none;
  stroke-width: 2.6;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: transform 0.28s var(--faq-ease);
}

.btn-see.expanded svg {
  transform: rotate(180deg);
}

.see-count {
  font-size: 0.75rem;
  font-weight: 500;
  letter-spacing: 0.06em;
  opacity: 0.6;
}

/* ── Footer ── */
.faq-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: clamp(36px, 5vw, 56px);
  padding-top: 26px;
  border-top: 1.5px solid rgba(13, 79, 124, 0.15);
}

.faq-footer-txt {
  font-family: var(--faq-sans);
  font-size: 0.95rem;
  line-height: 1.7;
  color: rgba(12, 31, 46, 0.55);
}

.faq-footer-txt strong {
  color: var(--faq-navy);
  font-weight: 600;
}

.btn-blue {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-family: var(--faq-sans);
  font-size: 0.92rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 14px 34px;
  background: var(--faq-blue-dk);
  color: #fff;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  text-decoration: none;
  white-space: nowrap;
  outline: none;
  transition: background 0.18s, transform 0.15s;
}

.btn-blue:hover {
  background: var(--faq-blue);
  color: #fff;
  transform: translateY(-1px);
}

.btn-blue::before,
.btn-see::before {
  display: none !important;
}

/* ── Reveal animations ── */
.rv {
  opacity: 0;
  transform: translateY(14px);
  transition: opacity 0.7s var(--faq-ease), transform 0.7s var(--faq-ease);
}

.rv.in {
  opacity: 1;
  transform: none;
}

.d1 {
  transition-delay: 0.1s;
}

.d2 {
  transition-delay: 0.2s;
}

.d3 {
  transition-delay: 0.3s;
}

@media (prefers-reduced-motion: reduce) {
  .rv {
    opacity: 1;
    transform: none;
  }
}

@media (max-width: 900px) {
  .faq-header {
    grid-template-columns: 1fr;
  }

  .faq-grid {
    flex-direction: column;
  }

  .faq-col {
    width: 100%;
  }
}
</style>

<?php if (!empty($_faq_display)) echo render_faq_component($_faq_display, 6); ?>

<?php
get_footer();