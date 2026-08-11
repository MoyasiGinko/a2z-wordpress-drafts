<?php
/**
* Template Name: Home
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header();

$banner_img =  get_field('banner_img');
$homepage_h1 = get_field('title') ?: 'A2Z Accounting Solutions - Accountants for Growing UK Businesses';

//$btn_target = $btn['target'] ? $btn['target'] : '_self';
?>

<section class="hm_banner">
  <?php if($banner_img){ ?>
  <div class="bannerImg">
    <img src="<?php echo $banner_img['url']; ?>" alt="<?php echo $banner_img['alt']; ?>" fetchpriority="high"
      decoding="async" loading="eager">
  </div>
  <?php } ?>
  <div class="middle_caption">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1><?php echo wp_kses_post($homepage_h1); ?></h1>

          <?php /*if ( get_field('subtitle') ) : ?>
          <h2 class="banner-subtitle"><?php the_field('subtitle'); ?></h2>
          <?php endif;*/ ?>
          <?php if ( get_field('subtitle') ) : ?>
          <div class="banner-newtext"><?php echo wpautop(get_field('subtitle')); ?></div>
          <?php endif; ?>

          <?php if(is_page(36959)){ ?>
          <div class="gp_btn gap-custom">
            <?php
                            $link = get_field('btn'); if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>

            <a data-source="<?php echo esc_html( $link_title ); ?>" data-bs-toggle="modal"
              data-bs-target="#enquireModal" href="<?php echo esc_url(  $link_url ); ?>"
              class="btn white"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

            <?php
                            $link = get_field('btn_2'); if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
            <a href="<?php echo esc_url(  $link_url ); ?>" class="btn white"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
          </div>
          <?php } else{ ?>
          <div class="gp_btn">
            <?php
                            $link = get_field('btn'); if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
            <a href="<?php echo esc_url(  $link_url ); ?>" class="btn white"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="afterbanner">
  <div class="container">
    <div class="afterbanner-inner">
      <?php if( have_rows('focus_list') ): ?>
      <ul>
        <?php while( have_rows('focus_list') ): the_row(); ?>
        <li><?php echo acf_esc_html( get_sub_field('title') ); ?></li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
      <div class="act">
        <?php if(get_field('focus_title')){ ?>
        <h2><?php echo get_field('focus_title'); ?></h2>
        <?php } ?>
        <?php

                    //$btn_url   = $focus_btn['url'] ?? '';
                    $focus_btn =  get_field('focus_btn');
                    $btn_title = $focus_btn['title'] ?? 'Enquire Now';
                    //$focus_btn_target = $focus_btn['target'] ? $focus_btn['target'] : '_self';
                    if($focus_btn): ?>

        <?php if(is_page(36959)): ?>
        <!-- <a href="<?php //echo esc_url($focus_btn['url']); ?>" class="btn">
                        <?php //echo $focus_btn['title']; ?>
                    </a> -->
        <button type="button" data-source="<?php echo $focus_btn['title']; ?>" data-bs-toggle="modal"
          data-bs-target="#gitModal" class="btn">
          <?php echo $focus_btn['title']; ?>
        </button>
        <?php else: ?>

        <button type="button" data-source="<?php echo esc_attr($btn_title); ?>" data-bs-toggle="modal"
          data-bs-target="#enquireModal" class="btn">
          <?php echo esc_html($btn_title); ?>
        </button>
        <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="threepods default-section-spacing">
  <div class="container">
    <?php if( have_rows('threepods_repeater') ): ?>
    <div class="row">
      <?php while( have_rows('threepods_repeater') ): the_row();
                $image = get_sub_field('icon');
            ?>
      <div class="col-md-4">
        <div class="threepods-inner">
          <div class="threepods-icon">
            <img src="<?php echo $image['url']; ?>" alt="Tax Savings">
          </div>
          <div class="threepods-txt">
            <h5><?php echo get_sub_field('title'); ?></h5>
            <p><?php echo get_sub_field('content'); ?></p>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>


<?php

$why_choose_img_1 =  get_field('why_choose_img_1');
$why_choose_img_2 =  get_field('why_choose_img_2');

?>
<section class="atoz-account default-section-spacing pt-0">
  <div class="container">
    <div class="atoz-inner default-section-spacing">
      <div class="row">
        <div class="col-md-6">
          <div class="account-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/why-account-img-shapes.png" alt="Circle"
              class="w450px">
            <div class="imgsec">
              <?php if($why_choose_img_1){ ?>
              <img src="<?php echo $why_choose_img_1['url']; ?>" alt="a2zaccounting" class="w418px">
              <?php }if($why_choose_img_2){ ?>
              <img src="<?php echo $why_choose_img_2['url']; ?>" alt="a2zaccounting" class="w318px">
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="account-txt">

            <?php if(get_field('why_choose_title')){ ?>
            <h2><?php echo get_field('why_choose_title'); ?></h2>
            <?php } ?>
            <p><?php echo get_field('why_choose_content'); ?></p>
            <?php if(get_field('why_choose_sub_title')){ ?>
            <h5><a href="#testimonials"><?php echo get_field('why_choose_sub_title'); ?> <img
                  src="<?php echo get_template_directory_uri(); ?>/images/why-account-down-arrow.jpg"
                  alt="down arrow"></a></h5>
            <?php } ?>

            <?php
                        $why_choose_btn =  get_field('why_choose_btn');
                        //$why_choose_btn_target = $why_choose_btn['target'] ? $why_choose_btn['target'] : '_self';

                        ?>
            <a href="<?php echo $why_choose_btn['url']; ?>" class="btn"><?php echo $why_choose_btn['title']; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
$our_promise_img = get_field('our_promise_img');
$our_promise_btn =  get_field('our_promise_btn');
$btn_title = $our_promise_btn['title'] ?? 'Enquire Now';
//$our_promise_btn_target = $our_promise_btn['target'] ? $our_promise_btn['target'] : '_self';
?>
<section class="promise default-section-spacing">
  <div class="container">
    <?php if(get_field('our_promise')){ ?>
    <h2><?php echo get_field('our_promise'); ?></h2>
    <?php } ?>
    <div class="row justify-content-between flex-md-row-reverse">
      <div class="col-md-5">
        <?php if($our_promise_img){ ?>
        <div class="promiseimg">
          <img src="<?php echo $our_promise_img['url']; ?>" alt="promise">
        </div>
        <?php } ?>
      </div>
      <div class="col-md-6">
        <div class="promisetxt">
          <?php echo get_field('our_promise_content'); ?>
          <?php if($our_promise_btn): ?>

          <!-- <a data-source="<?php //echo $our_promise_btn['title']; ?>" data-bs-toggle="modal" data-bs-target="#enquireModal" href="<?php //echo $our_promise_btn['url']; ?>" class="btn blue"><?php //echo $our_promise_btn['title']; ?></a> -->
          <button type="button" data-source="<?php echo esc_attr($btn_title); ?>" data-bs-toggle="modal"
            data-bs-target="#enquireModal" class="btn blue">
            <?php echo esc_html($btn_title); ?>
          </button>

          <?php endif; ?>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="who-we-help default-section-spacing">
  <div class="container">
    <?php if(get_field('we_help')){ ?>
    <h2><?php echo get_field('we_help'); ?></h2>
    <?php } ?>
    <p><?php echo get_field('we_help_content'); ?></p>
    <?php if( have_rows('we_help_repeater') ): ?>
    <div class="row gap-30">
      <?php while( have_rows('we_help_repeater') ): the_row();
                $image = get_sub_field('icon');
            ?>
      <div class="col-md-4">
        <div class="helpbx">
          <?php
					$link = get_sub_field('link'); if( $link ):
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
          <a href="<?php echo esc_url(  $link_url ); ?>"></a>
          <?php endif; ?>
          <div class="imgbx">
            <img src="<?php echo $image['url']; ?>" alt="help box">
          </div>
          <div class="helpbx-txt">
            <h5><?php echo get_sub_field('title'); ?></h5>
            <p><?php echo get_sub_field('content'); ?></p>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php
$switching_img_1 =  get_field('switching_img_1');
$switching_img_2 =  get_field('switching_img_2');
$switching_img_3 =  get_field('switching_img_3');

?>
<section class="switch">
  <span class="switchbg"><img src="<?php echo get_template_directory_uri(); ?>/images/switch-bg.png"
      alt="background"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="swtichimg">
          <?php if($switching_img_1){ ?>
          <img src="<?php echo $switching_img_1['url']; ?>" alt="person on stairs" class="switch-1">
          <?php } if($switching_img_2){ ?>
          <img src="<?php echo $switching_img_2['url']; ?>" alt="hand shake" class="switch-2">
          <?php } if($switching_img_3){ ?>
          <img src="<?php echo $switching_img_3['url']; ?>" alt="accountant" class="switch-3">
          <?php } ?>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="swtichtxt">
          <?php if(get_field('switching')){ ?>
          <h2><?php echo get_field('switching'); ?></h2>
          <?php } ?>
          <p><?php echo get_field('switching_content'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
$get_a_quote_bg_img =  get_field('get_a_quote_bg_img');
?>
<section class="getquote"
  style="background: url(<?php echo $get_a_quote_bg_img['url']; ?>) no-repeat 0 0; background-size: cover !important;"
  id="getquote">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-8">
        <div class="quote">
          <?php if(get_field('get_a_quote')){ ?>
          <h2><?php echo get_field('get_a_quote'); ?></h2>
          <?php } ?>
          <p><?php echo get_field('get_a_quote_content'); ?></p>

          <!-- <form id="calculator-client-details">
                        <input type="hidden" name="get_a_quote" value="<?php echo get_field('get_a_quote') ? get_field('get_a_quote') : 'Get a Quote'; ?>">
                        <div class="formcontainer">
                            <div class="inputouter">
                                <label>Name</label>
                                <div class="input-inner">
                                    <input type="text" name="name" id="name" placeholder="e.g. john Smith">
                                </div>
                            </div>
                            <div class="inputouter">
                                <label>Email</label>
                                <div class="input-inner">
                                    <input type="email" name="email" id="email" placeholder="johnsmith@gmail.com">
                                </div>
                            </div>
                            <div class="inputrow">
                                <div class="inputouter">
                                    <label>Location</label>
                                    <div class="input-inner">
                                        <input type="text" name="location" id="location" placeholder="your location">
                                    </div>
                                </div>
                                <div class="inputouter">
                                    <label>Phone</label>
                                    <div class="input-inner">
                                        <input type="tel" name="phone" id="phone" placeholder="+44 7911 123456">
                                    </div>
                                </div>
                            </div>
                            <div class="inputrow">
                                <div class="inputouter">
                                    <label>Business Name</label>
                                    <div class="input-inner">
                                        <input type="text" name="business_name" id="business_name" placeholder="e.g.johnpizzahut">
                                    </div>
                                </div>
                                <div class="inputouter">
                                    <label>Business Sector</label>
                                    <div class="input-inner">
                                        <select name="business_sector" id="business_sector">
                                            <option value="">Select Here</option>
                                            <option value="Agriculture & Forestry">Agriculture & Forestry</option>
                                            <option value="Arts & Creative Industries">Arts & Creative Industries</option>
                                            <option value="Automotive & Vehicle Services">Automotive & Vehicle Services</option>
                                            <option value="Beauty & Personal Care">Beauty & Personal Care</option>
                                            <option value="Construction & Trades">Construction & Trades</option>
                                            <option value="Education & Training">Education & Training</option>
                                            <option value="Energy & Utilities">Energy & Utilities</option>
                                            <option value="Financial & Insurance Services">Financial & Insurance Services</option>
                                            <option value="Healthcare & Medical Services">Healthcare & Medical Services</option>
                                            <option value="Hospitality & Tourism">Hospitality & Tourism</option>
                                            <option value="Information Technology & Software">Information Technology & Software</option>
                                            <option value="Legal & Professional Services">Legal & Professional Services</option>
                                            <option value="Manufacturing & Engineering">Manufacturing & Engineering</option>
                                            <option value="Media & Communications">Media & Communications</option>
                                            <option value="Non-profit & Charity">Non-profit & Charity</option>
                                            <option value="Property & Real Estate">Property & Real Estate</option>
                                            <option value="Retail & E-commerce">Retail & E-commerce</option>
                                            <option value="Sport & Leisure">Sport & Leisure</option>
                                            <option value="Transport & Logistics">Transport & Logistics</option>
                                            <option value="Wholesale & Distribution">Wholesale & Distribution</option>
                                            <option value="Oil & Gas">Oil & Gas</option>
                                            <option value="Renewable Energy">Renewable Energy</option>
                                            <option value="Social Media Influencer & Digital Content Creation">Social Media Influencer & Digital Content Creation</option>
                                            <option value="GP Surgery (General Practice)">GP Surgery (General Practice)</option>
                                            <option value="Dental Practice">Dental Practice</option>
                                            <option value="Pharmaceutical Retail & Distribution">Pharmaceutical Retail & Distribution</option>
                                            <option value="Medical Devices & Equipment">Medical Devices & Equipment</option>
                                            <option value="Veterinary Practice">Veterinary Practice</option>
                                            <option value="Any other sector">Any other sector – explain in Comments</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="inputrow">
                                <div class="inputouter">
                                    <label>Comments</label>
                                    <div class="input-inner">
                                        <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="inputouter">
                                <input type="submit" name="Submit" value="Submit & Continue" class="btn">
                            </div>


                        </div>
                    </form> -->
          <?php $focus_btn =  get_field('focus_btn');
                    $btn_title = $focus_btn['title'] ?? 'Enquire Now';
                    if($focus_btn): ?>

          <?php if(is_page(36959)): ?>
          <button type="button" data-source="<?php echo $focus_btn['title']; ?>" data-bs-toggle="modal"
            data-bs-target="#gitModal" class="btn">
            <?php echo $focus_btn['title']; ?>
          </button>
          <?php else: ?>

          <button type="button" data-source="<?php echo esc_attr($btn_title); ?>" data-bs-toggle="modal"
            data-bs-target="#enquireModal" class="btn">
            <?php echo esc_html($btn_title); ?>
          </button>
          <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$download_img =  get_field('download_img');
$download_file = get_field('download_file');
$download_file_target = $download_file['target'] ? $download_file['target'] : '_self';
?>
<section class="download-resources">
  <div class="container">
    <div class="dwn_bx">
      <div class="row align-items-md-center flex-md-row-reverse">
        <div class="col-md-6">
          <?php if($download_img){ ?>
          <div class="dwn_img">
            <img src="<?php echo $download_img['url']; ?>" alt="img">
          </div>
          <?php } ?>
        </div>
        <div class="col-md-6">
          <div class="dwn_dts">
            <?php if(get_field('download_title')){ ?>
            <h2><?php echo get_field('download_title'); ?></h2>
            <?php } ?>
            <p><?php echo get_field('download_content'); ?></p>
            <?php if($download_file){ ?>
            <a target="<?php echo $download_file_target; ?>" href="<?php echo $download_file['url']; ?>"
              class="btn"><?php echo $download_file['title']; ?></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonal" id="testimonials">
  <div class="container">
    <div class="heading_flex">
      <div class="heading_inner">
        <?php if(get_field('testimonials')){ ?>
        <h2><?php echo get_field('testimonials'); ?></h2>
        <?php } ?>
        <?php if(is_page(36959)){ ?>
        <p><?php echo get_field('testimonial_text'); ?></p>
        <?php } ?>
      </div>
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
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),"medium");
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

              <?php if ( $review ) : ?>
              <div class="tst-rate">
                <?php
                                    for ( $i = 1; $i <= 5; $i++ ) {
                                        if ( $i <= $review ) {
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

<section class="google_reviews" id="google_reviews">
  <div class="container">

    <div class="heading_txt">

      <h2><?php echo get_field('google_review_heading', 'option'); ?></h2>
      <p><?php echo get_field('google_review_sub_heading', 'option'); ?></p>

    </div>

    <?php echo get_field('google_review_shortcode', 'option'); ?>

    <div class="below_btn">

      <?php
                $review_link = get_field('google_review_link', 'option');
                if( $review_link ):
                    $link_url = $review_link['url'];
                    $link_title = $review_link['title'];
                    $link_target = $review_link['target'] ? $review_link['target'] : '_self';
            ?>
      <a href="<?php echo esc_url(  $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"
        class="btn blue"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>

    </div>
  </div>
</section>

<section class="blogSec">
  <div class="container">
    <div class="heading_flex">
      <?php if(get_field('our_blogs')){ ?>
      <h2><?php echo get_field('our_blogs'); ?></h2>
      <?php } ?>
    </div>

    <div class="row">

      <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $results = new WP_Query($args);

                while ($results->have_posts()) : $results->the_post();
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),"full");
                    $feature_image = $image[0];
                    $day = get_the_date('j');
                    $month = get_the_date('F');
                    $year = get_the_date('Y');
                    $categories = get_the_category();
            ?>
      <div class="col-md-4">
        <div class="blog_item">
          <div class="bg_fm">
            <a href="<?php echo get_the_permalink(); ?>"></a>
            <img src="<?php echo $feature_image; ?>" alt="img">
            <?php
                            if ( ! empty( $categories ) ) {
                                echo '<span class="info_dt">' . esc_html( $categories[0]->name ) . '</span>';
                            }
                        ?>
          </div>
          <div class="bg_details">
            <div class="date_icon">
              <!-- <p>December 30, 2024</p> -->
              <p><?php echo $month.' '.$day; ?>, <?php echo $year; ?></p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/cal_icon.svg" alt="img">
            </div>
            <a href="<?php echo get_the_permalink(); ?>">
              <h3><?php echo get_the_title(); ?></h3>
            </a>

          </div>
        </div>
      </div>
      <?php
                endwhile;
                wp_reset_postdata();
            ?>

    </div>
    <div class="home-blog-btn">
      <?php
                $our_blogs_btn =  get_field('our_blogs_btn');
                $our_blogs_btn_target = $our_blogs_btn['target'] ? $our_blogs_btn['target'] : '_self';
            ?>
      <a target="<?php echo esc_attr( $our_blogs_btn_target ); ?>" href="<?php echo $our_blogs_btn['url']; ?>"
        class="btn blue"><?php echo $our_blogs_btn['title']; ?></a>
    </div>
  </div>
</section>
<?php if(is_page(36959)){ ?>
<p class="foot_text"><?php echo get_field('above_footer_text'); ?></p>
<?php } ?>

<?php
// Fetch fixed ACF fields
$fixed_fields = [
    'quick_books_software' => floatval(get_field('quick_books_software', 'option') ?: 0),
    'xero_software' => floatval(get_field('xero_software', 'option') ?: 0),
    'dext_software' => floatval(get_field('dext_software', 'option') ?: 0),
    'monthly_vat' => floatval(get_field('monthly_vat', 'option') ?: 0),
    'monthly_bookkeeping' => floatval(get_field('monthly_bookkeeping', 'option') ?: 0),
    'monthly_management_accounts' => floatval(get_field('monthly_management_accounts', 'option') ?: 0),
    'personal_tax_per_person' => floatval(get_field('personal_tax_per_person', 'option') ?: 0),
    'companies_house_annual_fee' => floatval(get_field('companies_house_annual_fee', 'option') ?: 0),
    'pension_contributions' => floatval(get_field('pension_contributions', 'option') ?: 0),
];

// Fetch repeater data
$repeater_data = [];
if (have_rows('price_range_repeater', 'option')) {
    while (have_rows('price_range_repeater', 'option')) {
        the_row();

        $client_revenue_new = sanitize_text_field(get_sub_field('client_revenue'));
        $client_revenue = str_replace('£', '', $client_revenue_new);

        $repeater_data[] = [
            'client_revenue' => $client_revenue,
            'annual_accounts_corporation_tax' => floatval(get_sub_field('annual_accounts_corporation_tax') ?: 0),
            'weekly_payroll' => floatval(get_sub_field('weekly_payroll') ?: 0),
            'monthly_payroll' => floatval(get_sub_field('monthly_payroll') ?: 0),
            'quarterly_vat' => floatval(get_sub_field('quarterly_vat') ?: 0),
            'quarterly_bookkeeping' => floatval(get_sub_field('quarterly_bookkeeping') ?: 0),
            'quarterly_management_accounts' => floatval(get_sub_field('quarterly_management_accounts') ?: 0),
            'cis_returns' => floatval(get_sub_field('cis_returns') ?: 0),
            'address_service' => floatval(get_sub_field('address_service') ?: 0),

            'quick_books_software' => floatval(get_sub_field('quick_books_software') ?: 0),
            'xero_software' => floatval(get_sub_field('xero_software') ?: 0),
            'dext_software' => floatval(get_sub_field('dext_software') ?: 0),
            'monthly_vat' => floatval(get_sub_field('monthly_vat') ?: 0),
            'monthly_bookkeeping' => floatval(get_sub_field('monthly_bookkeeping') ?: 0),
            'monthly_management_accounts' => floatval(get_sub_field('monthly_management_accounts') ?: 0),
            'personal_tax_per_person' => floatval(get_sub_field('personal_tax_per_person') ?: 0),
            'companies_house_annual_fee' => floatval(get_sub_field('companies_house_annual_fee') ?: 0),
            'pension_contributions' => floatval(get_sub_field('pension_contributions') ?: 0),
        ];
    }
}
?>

<!-- Modal -->
<div class="modal service-table fade" id="service-table" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        <div class="table-wraper">
          <form id="calculator_form" class="pricing-calculator-form">
            <table class="pricing-calculator">
              <thead>
                <tr>
                  <th></th>
                  <th>Services</th>
                  <th>Monthly fee <br> excluding VAT</th>
                </tr>
                <tr>
                  <th>Select Annual Sales*</th>
                  <th>
                    <select name="client_revenue" id="client_revenue" onchange="calculateTotal()">
                      <option value="">Select Revenue Range</option>
                      <?php
                                foreach ($repeater_data as $row) {
                                    if ($row['client_revenue']) {
                                        echo '<option value="' . esc_attr($row['client_revenue']) . '">' . esc_html($row['client_revenue']) . '</option>';
                                    }
                                }
                                ?>
                    </select>
                  </th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-title="Services"><strong>Bookkeeping Software</strong></td>
                  <td>
                    <select name="bookkeeping_software" id="bookkeeping_software" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Quick Books">Quick Books</option>
                      <option value="XERO">XERO</option>
                    </select>
                  </td>
                  <td id="bookkeeping_software_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Document Uploads Software</strong></td>
                  <td>
                    <select name="document_uploads_software" id="document_uploads_software" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Dext">Dext</option>
                    </select>
                  </td>
                  <td id="document_uploads_software_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Payroll</strong></td>
                  <td>
                    <select name="payroll" id="payroll" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Weekly Payroll">Weekly Payroll</option>
                      <option value="Monthly Payroll">Monthly Payroll</option>
                    </select>
                  </td>
                  <td id="payroll_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>VAT</strong></td>
                  <td>
                    <select name="vat" id="vat" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Quarterly VAT">Quarterly VAT</option>
                      <option value="Monthly VAT">Monthly VAT</option>
                    </select>
                  </td>
                  <td id="vat_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Bookkeeping</strong></td>
                  <td>
                    <select name="bookkeeping" id="bookkeeping" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Quarterly Bookkeeping">Quarterly Bookkeeping</option>
                      <option value="Monthly Bookkeeping">Monthly Bookkeeping</option>
                    </select>
                  </td>
                  <td id="bookkeeping_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Management Accounts</strong></td>
                  <td>
                    <select name="management_accounts" id="management_accounts" onchange="calculateTotal()">
                      <option value="NA">NA</option>
                      <option value="Quarterly Management Accounts">Quarterly Management Accounts</option>
                      <option value="Monthly Management Accounts">Monthly Management Accounts</option>
                    </select>
                  </td>
                  <td id="management_accounts_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Annual Accounts & Corporation Tax <span>*</span></strong></td>
                  <td>
                    <select name="annual_accounts" id="annual_accounts" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                    </select>
                  </td>
                  <td id="annual_accounts_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Director's Tax Returns (<span>select no. of people</span>)</strong></td>
                  <td>
                    <select name="people_tax_returns" id="people_tax_returns" onchange="calculateTotal()">
                      <?php for ($i = 1; $i <= 15; $i++): ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                    </select>
                  </td>
                  <td id="people_tax_returns_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Pension Contributions (no extra)</strong></td>
                  <td>
                    <select name="pension" id="pension" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </td>
                  <td id="pension_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>CIS Returns</strong></td>
                  <td>
                    <select name="cis_returns" id="cis_returns" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </td>
                  <td id="cis_returns_price" data-title="Monthly fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Companies House Annual Fee (<span>CS01</span>)<span>*</span></strong></td>
                  <td>
                    <select name="companies_house_annual" id="companies_house_annual" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                    </select>
                  </td>
                  <td id="companies_house_annual_price" data-title="Montheely fee excluding VAT:"></td>
                </tr>
                <tr>
                  <td><strong>Address Service</strong></td>
                  <td>
                    <select name="address_service" id="address_service" onchange="calculateTotal()">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </td>
                  <td id="address_service_price" data-title="Montheely fee excluding VAT:"></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2"><strong>Total</strong></td>
                  <td id="total_price"><strong></strong></td>
                </tr>
                <tr>
                  <td colspan="2">VAT</td>
                  <td id="vat_total"></td>
                </tr>
                <tr>
                  <td colspan="2"><strong>Gross Monthly</strong></td>
                  <td id="gross_monthly"><strong></strong></td>
                </tr>
              </tfoot>
            </table>



            <div class="inputouter m-3 text-center">
              <input type="submit" value="Request A Quote" class="btn">
              <?php wp_nonce_field('calculator_nonce', 'calculator_nonce'); ?>
            </div>
          </form>
          <?php echo get_field('notes', 'option'); ?>
        </div>

      </div>
    </div>
  </div>
</div>





<?php
get_footer();
?>



<script>
// Calculator JavaScript
const fixedFields = <?php echo json_encode($fixed_fields); ?>;
const repeaterData = <?php echo json_encode($repeater_data, JSON_UNESCAPED_UNICODE); ?>;
const vatRate = 0.2;

// Define calculateTotal globally
window.calculateTotal = function() {
  console.log('calculateTotal called'); // Debug
  const clientRevenue = document.getElementById('client_revenue')?.value || '';
  const selectedRange = repeaterData.find(row => row.client_revenue === clientRevenue);
  let total = 0;

  // Helper function to format price
  const formatPrice = (price) => price === 0 ? '' : '£' + price.toFixed(2);

  // Object to store form data
  const formData = {
    client_revenue: clientRevenue
  };

  // Bookkeeping Software
  const bookkeepingSoftware = document.getElementById('bookkeeping_software')?.value || 'NA';
  let bookkeepingSoftwarePrice = 0;
  if (bookkeepingSoftware === 'Quick Books') {
    bookkeepingSoftwarePrice = selectedRange.quick_books_software;
  } else if (bookkeepingSoftware === 'XERO') {
    bookkeepingSoftwarePrice = selectedRange.xero_software;
  }
  document.getElementById('bookkeeping_software_price').textContent = formatPrice(bookkeepingSoftwarePrice);
  formData.bookkeeping_software = bookkeepingSoftware;
  formData.bookkeeping_software_price = bookkeepingSoftwarePrice;
  total += bookkeepingSoftwarePrice;

  // Document Uploads Software
  const documentUploadsSoftware = document.getElementById('document_uploads_software')?.value || 'NA';
  let documentUploadsSoftwarePrice = documentUploadsSoftware === 'Dext' ? selectedRange.dext_software : 0;
  document.getElementById('document_uploads_software_price').textContent = formatPrice(documentUploadsSoftwarePrice);
  formData.document_uploads_software = documentUploadsSoftware;
  formData.document_uploads_software_price = documentUploadsSoftwarePrice;
  total += documentUploadsSoftwarePrice;

  // Payroll
  const payroll = document.getElementById('payroll')?.value || 'NA';
  let payrollPrice = 0;
  if (selectedRange) {
    if (payroll === 'Weekly Payroll') {
      payrollPrice = selectedRange.weekly_payroll;
    } else if (payroll === 'Monthly Payroll') {
      payrollPrice = selectedRange.monthly_payroll;
    }
  }
  document.getElementById('payroll_price').textContent = formatPrice(payrollPrice);
  formData.payroll = payroll;
  formData.payroll_price = payrollPrice;
  total += payrollPrice;

  // VAT
  const vat = document.getElementById('vat')?.value || 'NA';
  let vatPrice = 0;
  if (selectedRange) {
    if (vat === 'Quarterly VAT') {
      vatPrice = selectedRange.quarterly_vat;
    } else if (vat === 'Monthly VAT') {
      vatPrice = selectedRange.monthly_vat;
    }
  }
  document.getElementById('vat_price').textContent = formatPrice(vatPrice);
  formData.vat = vat;
  formData.vat_price = vatPrice;
  total += vatPrice;

  // Bookkeeping
  const bookkeeping = document.getElementById('bookkeeping')?.value || 'NA';
  let bookkeepingPrice = 0;
  if (selectedRange) {
    if (bookkeeping === 'Quarterly Bookkeeping') {
      bookkeepingPrice = selectedRange.quarterly_bookkeeping;
    } else if (bookkeeping === 'Monthly Bookkeeping') {
      bookkeepingPrice = selectedRange.monthly_bookkeeping;
    }
  }
  document.getElementById('bookkeeping_price').textContent = formatPrice(bookkeepingPrice);
  formData.bookkeeping = bookkeeping;
  formData.bookkeeping_price = bookkeepingPrice;
  total += bookkeepingPrice;

  // Management Accounts
  const managementAccounts = document.getElementById('management_accounts')?.value || 'NA';
  let managementAccountsPrice = 0;
  if (selectedRange) {
    if (managementAccounts === 'Quarterly Management Accounts') {
      managementAccountsPrice = selectedRange.quarterly_management_accounts;
    } else if (managementAccounts === 'Monthly Management Accounts') {
      managementAccountsPrice = selectedRange.monthly_management_accounts;
    }
  }
  document.getElementById('management_accounts_price').textContent = formatPrice(managementAccountsPrice);
  formData.management_accounts = managementAccounts;
  formData.management_accounts_price = managementAccountsPrice;
  total += managementAccountsPrice;

  // Annual Accounts & Corporation Tax
  const annualAccounts = document.getElementById('annual_accounts')?.value || 'No';
  let annualAccountsPrice = annualAccounts === 'Yes' && selectedRange ? selectedRange
    .annual_accounts_corporation_tax : 0;
  document.getElementById('annual_accounts_price').textContent = formatPrice(annualAccountsPrice);
  formData.annual_accounts = annualAccounts;
  formData.annual_accounts_price = annualAccountsPrice;
  total += annualAccountsPrice;

  // Director's Tax Returns
  const peopleTaxReturns = parseInt(document.getElementById('people_tax_returns')?.value || 1);
  let peopleTaxReturnsPrice = peopleTaxReturns * selectedRange.personal_tax_per_person;
  document.getElementById('people_tax_returns_price').textContent = formatPrice(peopleTaxReturnsPrice);
  formData.people_tax_returns = peopleTaxReturns;
  formData.people_tax_returns_price = peopleTaxReturnsPrice;
  total += peopleTaxReturnsPrice;

  // Pension Contributions
  const pension = document.getElementById('pension')?.value || 'No';
  let pensionPrice = pension === 'Yes' ? selectedRange.pension_contributions : 0;
  document.getElementById('pension_price').textContent = '£' + pensionPrice.toFixed(2);
  formData.pension = pension;
  formData.pension_price = pensionPrice;
  total += pensionPrice;

  // CIS Returns
  const cisReturns = document.getElementById('cis_returns')?.value || 'No';
  let cisReturnsPrice = cisReturns === 'Yes' && selectedRange ? selectedRange.cis_returns : 0;
  document.getElementById('cis_returns_price').textContent = formatPrice(cisReturnsPrice);
  formData.cis_returns = cisReturns;
  formData.cis_returns_price = cisReturnsPrice;
  total += cisReturnsPrice;

  // Companies House Annual Fee
  const companiesHouseAnnual = document.getElementById('companies_house_annual')?.value || 'Yes';
  let companiesHouseAnnualPrice = companiesHouseAnnual === 'Yes' ? selectedRange.companies_house_annual_fee : 0;
  document.getElementById('companies_house_annual_price').textContent = formatPrice(companiesHouseAnnualPrice);
  formData.companies_house_annual = companiesHouseAnnual;
  formData.companies_house_annual_price = companiesHouseAnnualPrice;
  total += companiesHouseAnnualPrice;

  // Address Service
  const addressService = document.getElementById('address_service')?.value || 'No';
  let addressServicePrice = addressService === 'Yes' && selectedRange ? selectedRange.address_service : 0;
  document.getElementById('address_service_price').textContent = formatPrice(addressServicePrice);
  formData.address_service = addressService;
  formData.address_service_price = addressServicePrice;
  total += addressServicePrice;

  // Calculate totals
  const vatTotal = total * vatRate;
  const grossMonthly = total + vatTotal;

  // Update tfoot
  document.getElementById('total_price').textContent = '£' + total.toFixed(2);
  document.getElementById('vat_total').textContent = '£' + vatTotal.toFixed(2);
  document.getElementById('gross_monthly').textContent = '£' + grossMonthly.toFixed(2);

  // Store totals in formData
  formData.total_price = total;
  formData.vat_total = vatTotal;
  formData.gross_monthly = grossMonthly;

  // Store formData in window
  window.calculatorFormData = formData;
};

jQuery(document).ready(function($) {
  // Client Details Form Validation
  $("#calculator-client-details").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      location: "required",
      phone: "required",
      business_name: "required",
      business_sector: "required"
    },
    submitHandler: function(form) {
      var formData = $(form).serialize();

      var $submitBtn = $(form).find("input[type=submit].btn");
      // Disable after first click
      $submitBtn.prop("disabled", true).val("Submitting...");

      $.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        method: "POST",
        data: formData + "&action=save_calculator_client_details",
        success: function(response) {
          console.log("Success:", response);
          if (response.success) {
            $submitBtn.prop("disabled", false).val("Submit");
            //window.location.href = 'thank-you/';
            Swal.fire({
              icon: 'success',
              title: 'Submitted!',
              text: response.data.message,
            }).then(() => {
              const clientId = response.data.insert_id;
              sessionStorage.setItem('clientId', clientId);
              const calculatorModal = new bootstrap.Modal(document.getElementById('service-table'));
              calculatorModal.show();
              jQuery('#client-details').modal('hide');
              jQuery('#gitModal').modal('hide');
            });
          } else {
            //alert("Failed to save. " + response.data.message);
            Swal.fire({
              icon: 'error',
              title: 'Submission Failed',
              text: response.data.message || 'Something went wrong.',
            });
          }
        },
        error: function(xhr, status, error) {
          console.error("Error:", error);
          //alert("Something went wrong.");
          Swal.fire({
            icon: 'error',
            title: 'Submission Failed',
            text: 'Something went wrong.',
          });
        }
      });
    }
  });

  // Initialize calculator on modal show
  $('#service-table').on('shown.bs.modal', function() {
    console.log('Modal shown, initializing calculator');
    window.calculateTotal();
  });

  // Attach onchange events with jQuery
  $('#calculator_form select').on('change', function() {
    window.calculateTotal();
  });

  // Handle calculator form submission
  $('#calculator_form').on('submit', function(e) {
    e.preventDefault();

    const formData = window.calculatorFormData;
    const clientId = sessionStorage.getItem('clientId');

    if (!formData || !formData.client_revenue) {
      alert('Please select a revenue range.');
      return;
    }
    if (!clientId) {
      alert('Client ID not found. Please submit client details first.');
      return;
    }

    // Clean prices for submission
    const cleanedData = {};
    for (const [key, value] of Object.entries(formData)) {
      if (key.includes('_price') || key === 'total_price' || key === 'vat_total' || key === 'gross_monthly') {
        cleanedData[key] = typeof value === 'number' ? value : 0;
      } else {
        cleanedData[key] = value;
      }
    }

    // AJAX request
    const data = {
      action: 'save_calculator_form_data',
      nonce: document.getElementById('calculator_nonce').value,
      client_id: clientId,
      ...cleanedData
    };

    fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(data).toString()
      })
      .then(response => response.json())
      .then(result => {
        if (result.success) {
          Swal.fire({
            icon: 'success',
            title: 'Submitted!',
            text: result.data.message,
          }).then(() => {
            this.reset();
            window.calculateTotal();
            jQuery('#service-table').modal('hide');
            jQuery('#calculator-client-details')[0].reset();
            sessionStorage.removeItem('clientId');
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Submission Failed',
            text: result.data.message || 'Something went wrong.',
          });
        }
      })
      .catch(error => {
        console.error('AJAX error:', error.zoho_response);
        //alert('An error occurred while saving the quote in zoho.');
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Could not submit form. Please try again.',
        });
      });
  });
});
</script>