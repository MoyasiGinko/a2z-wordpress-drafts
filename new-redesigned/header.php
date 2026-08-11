<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  
    <?php /*?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css" /> <?php */?>
	<?php wp_head(); ?>
	
	<meta name="google-site-verification" content="3Zwj4uLRnJF4GQ1y2oQQd8Eh7u_VVZwb6GKu6eQSN9E" />
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WZLCD6SL');</script>
<!-- End Google Tag Manager -->
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9GEXM03JDP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9GEXM03JDP');
</script>
	
	
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZLCD6SL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="hm_header">
            <div class="top_header">
                <div class="container">
                    <ul class="info">
                        <li>
							<?php 
  							$link = get_field('let’s_connect', 'option'); if( $link ): 
  							$link_url = $link['url'];
  							$link_title = $link['title']; 
  							$link_target = $link['target'] ? $link['target'] : '_self'; 
  							?>
                            <span class="txt_hide"><?php echo esc_html( $link_title ); ?></span>
                            <!-- <a  aria-label="Whatsapp" target="<?php echo $link_target; ?>" href="<?php echo esc_url(  $link_url ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/whatsapp-icon.svg" alt="whatsapp-icon"> <span class="txt_hide"><?php echo esc_html( $link_title ); ?></span></a> -->
							<?php endif; ?>
                        </li>
                        <li>
							<?php 
  							$link = get_field('top_phone_no', 'option'); if( $link ): 
  							$link_url = $link['url'];
  							$link_title = $link['title']; 
  							$link_target = $link['target'] ? $link['target'] : '_self'; 
  							?>
                            <a aria-label="Phone" target="<?php echo $link_target; ?>" href="<?php echo esc_url(  $link_url ); ?>"><i class="fa-solid fa-phone"></i> <span class="txt_hide"><?php echo esc_html( $link_title ); ?></span></a>
							<?php endif; ?>
                        </li>
                        <li>
							<?php 
  							$link = get_field('contact', 'option'); if( $link ): 
  							$link_url = $link['url'];
  							$link_title = $link['title']; 
  							$link_target = $link['target'] ? $link['target'] : '_self'; 
  							?>
                            <a aria-label="Contact Us" target="<?php echo $link_target; ?>" href="<?php echo esc_url(  $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
                        </li>
                        <li>
							<?php 
  							$link = get_field('enquire_today', 'option'); 
							if( $link ): 
  							$link_url = $link['url'];
  							$link_title = $link['title']; 
  							$link_target = $link['target'] ? $link['target'] : '_self'; 
  							?>
                            <!-- <a href="<?php //echo $link['url']; ?>" class="btn lighBlue" data-source="<?php //echo $link['title']; ?>" data-bs-toggle="modal" data-bs-target="#enquireModal"><?php //echo $link['title']; ?></a> -->

                            <a href="<?php echo esc_url(get_permalink()); ?>#a2z-enquire" class="btn lighBlue"><?php echo esc_html($link_title ? $link_title : 'Start An Enquiry'); ?></a>
							<?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="container grouoRelative">

            <div class="middle_header">
                <?php 

// 					$args = array(  
// 						'menu'            => 'header_top_menu', 
// 						'container'       => '',
// 						'menu_class'      => ''
// 						 );              
// 						wp_nav_menu( $args );

       			?>
				<?php if( have_rows('header_mid_menus', 'option') ): ?>
				<ul>
					<?php while( have_rows('header_mid_menus', 'option') ): the_row();  
						$menu_name = get_sub_field('menu_name');
						$menu_name_target = $menu_name['target'] ? $menu_name['target'] : '_self';			
					?>
                    <li>
                        <a target="<?php echo $menu_name_target; ?>" href="<?php echo $menu_name['url']; ?>"><?php echo $menu_name['title']; ?></a>
                    </li>
					<?php endwhile; ?>
                </ul>
				<?php endif; ?>
            </div>
			
			
			
            <div class="d_flex_ajdjust">
                <div class="logo-sec">
                    <a href="<?php echo get_site_url(); ?>">
						<?php                     
						$image = get_field('top_logo', 'option'); if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php if($image['alt'] != ''){ echo $image['alt']; }else{ echo $image['title']; } ?>">
						<?php endif; ?>
                    </a>
                </div>
                <nav class="menu">
                    <button class="action--close" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                    <div class="menu__wrap">
                        <?php wp_nav_menu( array('menu' => 'Primary Menu', 'container' => '', 'items_wrap' => '<ul class="">%3$s</ul>' )); ?>
                    </div>
                </nav>
                <div class="hm-menu cross menu--1">
                    <div class="menu-icon">
                        <svg viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="30" />
                            <path class="line--1" d="M0 40h62c13 0 6 28-4 18L35 35" />
                            <path class="line--2" d="M0 50h70" />
                            <path class="line--3" d="M0 60h62c13 0 6-28-4-18L35 65" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="afterheader">
        <div class="container">
            <div class="afterheader-inner">
                <div class="leftrating">
                    <div class="rating_top">
                        <div class="rating_top-left">
							<?php                     
					        $image = get_field('google_rating_image', 'option'); if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php if($image['alt'] != ''){ echo $image['alt']; }else{ echo $image['title']; } ?>">
							<?php endif; ?>
                            <span><?php the_field('google_rating', 'option'); ?></span>
                        </div>
                        <div class="review_txt">
                            <p><?php the_field('google_review', 'option'); ?></p>
                        </div>
                    </div>
                    <div class="google_rv">
						<?php                     
					    $image = get_field('google_image', 'option'); if( !empty( $image ) ): ?>
                        <?php $review_link = get_field('review_link', 'option');
                      
                        if( $review_link ):  ?>
                        <a id="greview" href="<?php echo $review_link; ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php if($image['alt'] != ''){ echo $image['alt']; }else{ echo $image['title']; } ?>"></a>
                        <?php endif; ?>
						<?php endif; ?>
                    </div>
                </div>
                <div class="rightimg">
					<?php                     
					$image = get_field('feefo_image', 'option'); if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php if($image['alt'] != ''){ echo $image['alt']; }else{ echo $image['title']; } ?>">
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
