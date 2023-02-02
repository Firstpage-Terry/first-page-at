<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package roi
 */
?>

</div><!-- #content -->
</div>

<?php if (have_rows('social_media', 'options')): ?>
<?php while (have_rows('social_media', 'options')):
        the_row();

        // Get sub field values.
        $facebook = get_sub_field('facebook');
        $linkedin = get_sub_field('linkedin');
        $instagram = get_sub_field('instagram');
        $youtube = get_sub_field('youtube');
?>
<?php endwhile; ?>
<?php endif; ?>
<footer>
    <div class="container">
        <?php if(is_front_page()): ?>
                <a href="https://superist.com/" class="superist-nav" target="_blank" onclick="window.open('#','_blank');window.open(this.href,'_self');"> 
                    <img alt="Connected by Superist" src="<?php echo get_template_directory_uri(); ?>/assets/img/connected-by-superist.png">  
                </a>
        <?php endif ?>

        <?php if(is_front_page() == false): ?>
                <a href="#" class="superist-nav" > 
                    <img alt="Connected by Superist" src="<?php echo get_template_directory_uri(); ?>/assets/img/connected-by-superist.png">  
                </a>
        <?php endif ?>
        <div class="row no-gutters">
            <div class="col-site-map col-12 col-md-6 col-lg-4 mb-5 d-md-none d-lg-block">
                <div class="row">
                    <div class="col-6">
                        <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                        <h3 class="footer__h3Title">Services</h3>
                        <?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                        <h3 class="footer__h3Title">服務</h3>
                        <?php endif; ?>
                        <ul class="footer-nav">
                            <?php wp_nav_menu(array('theme_location' => 'footer_services_menu')); ?>
                            <li class="show-links-trigger"><a class="show-links"><?php trans("More", '更多')?> +</a></li>
                            <li class="hide-links-trigger"><a class="hide-links"><?php trans("Less", '較少')?> -</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                        <h3 class="footer__h3Title">Company</h3>
                        <?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                        <h3 class="footer__h3Title">關於我們</h3>
                        <?php endif; ?>
                        <ul class="footer-nav">
                            <?php wp_nav_menu(array('theme_location' => 'footer_company_menu')); ?>
                        </ul>
                    </div>
                    <div class="col-12 d-block d-md-none d-lg-none">
                        <p class="mt-3">
                            <strong>First Page</strong><br /><a
                               href="https://www.google.com/maps/place/First+Page/@22.274237,114.1726391,17z/data=!3m1!4b1!4m5!3m4!1s0x3404005c7462ef03:0x4655b9f165ec4dc1!8m2!3d22.274237!4d114.1726391"
                               target="_blank">
                                <?php the_field('address', 'option'); ?>
                            </a>
                        </p>
                        <p>
                        <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                            <strong>Call</strong>
                            <?php endif; ?>
                            <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                            <strong>電話</strong>
                            <?php endif; ?>
                            <br />
                            <a href="tel:<?php the_field('phone_number', 'option'); ?>" class="white">
                                <?php the_field('phone_number', 'option'); ?>
                            </a>
                        </p>
                        <p class="mb-2">
                            <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                            <strong>Email</strong>
                            <?php endif; ?>
                            <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                            <strong>電郵</strong>
                            <?php endif; ?>
                            <br />
                            <a href="mailto:<?php the_field('email', 'option'); ?>"
                                class="white">
                                <?php the_field('email', 'option'); ?>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="position-absolute d-none d-md-none d-lg-block"
                     style="bottom: 0;">
                    <div style="position: absolute;top: 40%; z-index: 9999;">
                        <div class="d-flex d-md-block d-lg-block flex-column align-items-center">
                            <div class="">
                                <a href="<?php echo $facebook; ?>"
                                   target="_blank"><img src="/wp-content/themes/firstpage/assets/img/footer-fb.svg"
                                         srcset="/wp-content/themes/firstpage/assets/img/footer-fb.svg 2x"
                                         class="img-fluid"
                                         alt="Facebook"
                                         style="height:25px; margin: 10px;"></a>
                                &nbsp;
                                <a href="<?php echo $linkedin; ?>"
                                   target="_blank"><img
                                         src="/wp-content/themes/firstpage/assets/img/footer-linkedin.svg"
                                         srcset="/wp-content/themes/firstpage/assets/img/footer-linkedin.svg 2x"
                                         class="img-fluid"
                                         alt="LinkedIn"
                                         style="height:25px; margin: 10px;"></a>
                                &nbsp;
                                <a href="<?php echo $instagram; ?>"
                                   target="_blank"><img src="/wp-content/themes/firstpage/assets/img/footer-insta.svg"
                                         srcset="/wp-content/themes/firstpage/assets/img/footer-insta.svg 2x"
                                         class="img-fluid"
                                         alt="Instagram"
                                         style="height:25px; margin: 10px;"></a>
                                &nbsp;
                            </div>
                        </div>
                    </div>
                    <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    <img class="d-none d-md-block d-lg-block footer-img"
                         src="/wp-content/themes/firstpage/assets/img/fphk-footer-with-gm-desktop.webp"
                         alt="Hong Kong owned SEO and SEM services"
                         style="max-width: 650px; margin:auto; opacity: 1;">
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                    <img class="d-none d-md-block d-lg-block footer-img"
                         src="/wp-content/themes/firstpage/assets/img/fphk-footer-with-gm-desktop-zh.webp"
                         alt="Hong Kong owned SEO and SEM services"
                         style="max-width: 650px; margin:auto; opacity: 1;">
                    <?php endif; ?>
                </div>


            </div>



            <div class="col-contact-details col-12 col-md-6 col-lg-4 mb-5">

                <div class="podcast-holder d-none d-md-block d-lg-block">
                    <div class="row">
                        <div class="col-12">
                            <p class="mt-3">
                                <strong>First Page</strong><br /><a
                                   href="https://www.google.com/maps/place/First+Page/@22.274237,114.1726391,17z/data=!3m1!4b1!4m5!3m4!1s0x3404005c7462ef03:0x4655b9f165ec4dc1!8m2!3d22.274237!4d114.1726391"
                                   target="_blank">
                                    <?php the_field('address', 'option'); ?>
                                </a>
                            </p>
                            <p>
                                <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                                <strong>Call</strong>
                                <?php endif; ?>
                                <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                                <strong>電話</strong>
                                <?php endif; ?>
                                <br />
                                <a href="tel:<?php the_field('phone_number', 'option'); ?>">
                                    <?php the_field('phone_number', 'option'); ?>
                                </a>
                            </p>
                            <p class="mb-2">
                                <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                                <strong>Email</strong>
                                <?php endif; ?>
                                <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                                <strong>電郵</strong>
                                <?php endif; ?>
                                <br />
                                <a href="mailto:<?php the_field('email', 'option'); ?>"
                                   class="white">
                                    <?php the_field('email', 'option'); ?>
                                </a>
                            </p>

                            <div class="d-none d-md-block d-lg-none">
                                <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                                <img src="/wp-content/themes/firstpage/assets/img/fphk-footer-with-gm-mobile.webp"
                                     alt="Hong Kong owned SEO and SEM services"
                                     class="d-none d-md-block d-lg-none"
                                     style="width: 100%; max-width: 450px; margin:auto; opacity: 1;">
                                <?php endif; ?>
                                <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                                <img src="/wp-content/themes/firstpage/assets/img/fphk-footer-with-gm-mobile-zh.webp"
                                     alt="Hong Kong owned SEO and SEM services"
                                     class="d-none d-md-block d-lg-none"
                                     style="width: 100%; max-width: 450px; margin:auto; opacity: 1;">
                                <?php endif; ?>

                                <div class="d-flex d-lg-block flex-column align-items-center mt-4">
                                    <div class="">
                                        <a href="<?php echo $facebook; ?>"
                                           target="_blank"><img
                                                 src="https://firstpage.com.au/wp-content/themes/firstpage-au//assets/img/footer-fb.svg"
                                                 srcset="https://firstpage.com.au/wp-content/themes/firstpage-au//assets/img/footer-fb.svg 2x"
                                                 class="img-fluid"
                                                 alt="Facebook"
                                                 style="height:25px; margin: 10px;"></a>
                                        &nbsp;
                                        <a href="<?php echo $linkedin; ?>"
                                           target="_blank"><img
                                                 src="https://firstpage.com.au/wp-content/themes/firstpage-au//assets/img/footer-linkedin.svg"
                                                 srcset="https://firstpage.com.au/wp-content/themes/firstpage-au//assets/img/footer-linkedin.svg 2x"
                                                 class="img-fluid"
                                                 alt="LinkedIn"
                                                 style="height:25px; margin: 10px;"></a>
                                        &nbsp;
                                        <a href="<?php echo $instagram; ?>"
                                           target="_blank"><img
                                                 src="https://firstpage.com.au/wp-content/themes/firstpage-au//assets/img/footer-insta.svg"
                                                 srcset="https://firstpage.com.au/wp-content/themes/firstpage-au//assets/img/footer-insta.svg 2x"
                                                 class="img-fluid"
                                                 alt="Instagram"
                                                 style="height:25px; margin: 10px;"></a>
                                        &nbsp;
                                        &nbsp;
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

            <div class="col-contact-form col-12 col-md-6 col-lg-4 mb-5">
                <h3 class="h3-italic footer-h3-title text-center footer__formH3">
                    <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    We can grow your sales.
                    <br class="d-block d-sm-none">Ask us how!
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                    給我們留言
                    <?php endif; ?>
                </h3>
                <div id="footer-form">
                    <!-- Footer Form -->
                    <!-- English -->
                    <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    <form class="fp-form"
                          action="<?php echo get_home_url(); ?>/thank-you"
                          method="POST">
                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="text"
                                           class="form-control"
                                           name="lead_name"
                                           placeholder="Name*"
                                           required="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="email"
                                           class="form-control"
                                           name="lead_email"
                                           placeholder="Email*"
                                           data-parsley-error-message="Please enter a valid email address"
                                           data-parsley-trigger="change"
                                           required="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="tel"
                                           class="form-control"
                                           name="lead_phone"
                                           placeholder="Phone*"
                                           required="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <textarea class="form-control"
                                              name="lead_message"
                                              rows="4"
                                              placeholder="Message*"
                                              required=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden"
                                           name="lead_formname"
                                           value="Contact Us (Footer)" />
                                    <input type="hidden"
                                           name="lead_language"
                                           value="en" />
                                    <input type="hidden"
                                           name="lead_formtype"
                                           value="hs_quote_form" />
                                    <button type="submit"
                                            data-title="Footer Contact Form"
                                            class="btn form-control fp-btn fp-btn-orange fp-btn-shadow form-submit buttonFormClick">Increase
                                        My Sales</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>
                    <!-- English ends -->
                    <!-- Chinese -->
                    <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                    <form class="fp-form"
                          action="<?php echo get_home_url(); ?>thank-you"
                          method="POST">
                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="text"
                                           class="form-control"
                                           name="lead_name"
                                           placeholder="名稱*"
                                           required="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="email"
                                           class="form-control"
                                           name="lead_email"
                                           placeholder="電郵*"
                                           data-parsley-error-message="Please enter a valid email address"
                                           data-parsley-trigger="change"
                                           required="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="tel"
                                           class="form-control"
                                           name="lead_phone"
                                           placeholder="聯絡電話*"
                                           required="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <textarea class="form-control"
                                              name="lead_message"
                                              rows="4"
                                              placeholder="留言*"
                                              required=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden"
                                           name="lead_formname"
                                           value="Contact Us (Footer)" />
                                    <input type="hidden"
                                           name="lead_language"
                                           value="en" />
                                    <input type="hidden"
                                           name="lead_formtype"
                                           value="hs_quote_form" />
                                    <button type="submit"
                                            data-title="Footer Contact Form"
                                            class="btn form-control fp-btn fp-btn-orange fp-btn-shadow form-submit buttonFormClick">送出</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>
                    <!-- Chinese ends -->
                    <!-- End of Form -->
                </div>

                <div class="d-block d-md-none d-lg-none">
                    <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    <img src="/wp-content/themes/firstpage/assets/img/fphk-footer-with-gm-mobile.webp"
                         alt="Hong Kong owned SEO and SEM services"
                         class="d-block d-md-none d-lg-none"
                         style="width: 100%; max-width: 268px; margin:auto; opacity: 1;">
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                        <img src="/wp-content/themes/firstpage/assets/img/fphk-footer-with-gm-mobile-zh.webp"
                         alt="Hong Kong owned SEO and SEM services"
                         class="d-block d-md-none d-lg-none"
                         style="width: 100%; max-width: 268px; margin:auto; opacity: 1;">
                    <?php endif; ?>
                    <div class="d-flex d-md-block d-lg-block flex-column align-items-center mt-4">
                        <div class="">
                            <a href="<?php echo $facebook; ?>"
                               target="_blank"><img src="/wp-content/themes/firstpage/assets/img/footer-fb.svg"
                                     srcset="/wp-content/themes/firstpage/assets/img/footer-fb.svg 2x"
                                     class="img-fluid"
                                     alt="Facebook"
                                     style="height:25px; margin: 10px;"></a>
                            &nbsp;
                            <a href="<?php echo $linkedin; ?>"
                               target="_blank"><img src="/wp-content/themes/firstpage/assets/img/footer-linkedin.svg"
                                     srcset="/wp-content/themes/firstpage/assets/img/footer-linkedin.svg 2x"
                                     class="img-fluid"
                                     alt="LinkedIn"
                                     style="height:25px; margin: 10px;"></a>
                            &nbsp;
                            <a href="<?php echo $instagram; ?>"
                               target="_blank"><img src="/wp-content/themes/firstpage/assets/img/footer-insta.svg"
                                     srcset="/wp-content/themes/firstpage/assets/img/footer-insta.svg 2x"
                                     class="img-fluid"
                                     alt="Instagram"
                                     style="height:25px; margin: 10px;"></a>
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-none d-md-block d-lg-none">

        <div class="row no-gutters">
            <div class="col-4">
                <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                <h3 class="footer__h3Title">Services</h3>
                <?php endif; ?>
                <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                <h3 class="footer__h3Title">服務</h3>
                <?php endif; ?>
                <ul class="footer-nav">
                    <?php wp_nav_menu(array('theme_location' => 'footer_services_menu')); ?>
                </ul>
            </div>

            <div class="col-4">
                <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                <h3 class="footer__h3Title">Company</h3>
                <?php endif; ?>
                <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                <h3 class="footer__h3Title">關於我們</h3>
                <?php endif; ?>
                <ul class="footer-nav">
                    <?php wp_nav_menu(array('theme_location' => 'footer_company_menu')); ?>
                </ul>

            </div>

            <div class="col-4">

                <p class="mt-4">
                    <strong>First Page</strong><br /><a
                       href="https://www.google.com/maps/place/First+Page/@22.274237,114.1726391,17z/data=!3m1!4b1!4m5!3m4!1s0x3404005c7462ef03:0x4655b9f165ec4dc1!8m2!3d22.274237!4d114.1726391"
                       target="_blank">
                        <?php the_field('address', 'option'); ?>
                    </a>
                </p>
                <p>
                    <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    <strong>Call</strong>
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                    <strong>電話</strong>
                    <?php endif; ?>
                    <br />
                    <a href="tel:<?php the_field('phone_number', 'option'); ?>">
                        <?php the_field('phone_number', 'option'); ?>
                    </a>
                </p>
                <p class="mb-2">
                    <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    <strong>Email</strong>
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                    <strong>電郵</strong>
                    <?php endif; ?>
                    <br />
                    <a href="mailto:<?php the_field('email', 'option'); ?>"
                       class="white">
                        <?php the_field('email', 'option'); ?>
                    </a>
                </p>

            </div>
        </div>

    </div>

    <!-- START FOOTER LINKS -->
<div id="popular-services">
  <div class="footer-link-container">
    
    <!------------->
    <!-- English -->
    <!------------->
    <?php if (ICL_LANGUAGE_CODE == "en"): ?>
    <ul class="footer-nav position-relative col-4">
        <!-- FP -->
            <li class="fp-title"><a href="/">Digital Marketing Agency</a></li>
            <li><a href="/seo/">SEO Services</a></li>
            <li><a href="/seo/ecommerce/">eCommerce SEO Services</a></li>
            <li><a href="/google-ads/">Google Ads Services</a></li>
            <li><a href="/social/">Socail Media Marketing</a></li>
        <!-- SEO Agency -->
            <li class="fp-title"><a href="/seo/">SEO Agency</a></li>
            <li><a href="/amazon-seo/">Amazon SEO Services</a></li>
            <li><a href="/seo/local-seo/">Local SEO Services</a></li>
            <li><a href="/seo/international-seo/">International SEO Services</a></li>
            <li><a href="/seo/mobile-seo/">Mobile SEO</a></li>
            <li><a href="/video-seo/">Video SEO</a></li>
            <li><a href="/seo/link-building/">Link Building Services</a></li>
            <li><a href="/seo/chinese-seo/">China SEO</a></li>
            <li><a href="/baidu-seo/">Baidu SEO</a></li>
        <!-- eCommerce SEO Agency -->
            <li class="fp-title"><a href="/seo/ecommerce/">eCommerce SEO Agency</a></li>
            <li><a href="/seo/ecommerce/shopify/">Shopify</a></li>
            <li><a href="/seo/ecommerce/woocommerce/">WooCommerce</a></li>
            <li><a href="/seo/ecommerce/magento/">Magento</a></li>
        <!-- Free Tools / Audit Services -->
            <li class="fp-title"><span>Free Tools / Audit Services</span></li>
            <li><a href="/seo-audit/">Free SEO Audit</a></li>
            <li><a href="/google-ads-audit/">Free Google Ads Audit</a></li>
            <li><a href="/competitor-audit/">Free Comeptitor Audit</a></li>
            <li><a href="/facebook-interest-finder/">Facebook Interest Finder</a></li>
            <li><a href="/seo-roi-calculator/">SEO ROI Calculator</a></li>
            <li><a href="/ppc-roi-calculator/">PPC ROI Calculator</a></li>
            <li><a href="/google-review-link-generator/">Google Review Link Generator</a></li>
            <li><a href="/google-serp-simulator/">Google SERP Simulator</a></li>
        </ul>

    <ul class="footer-nav position-relative col-4">
        <!-- Amazon Marketing Services -->
            <li class="fp-title"><span>Amazon Marketing Services</span></li>
            <li><a href="/amazon-seo/">Amazon SEO Services</a></li>
            <li><a href="/amazon-ppc/">Amazon PPC Services</a></li>
            <li><a href="/amazon-backlinks/">Amazon Backlinks Services</a></li>
            <li><a href="/amazon-ebook/">Amazon Free Strategy Plan</a></li>
        <!-- Social Media Marketing Services -->
            <li class="fp-title"><a href="/social/">Social Media Marketing Services</a></li>
            <li><a href="/social-media-management/">Social Media Management Services</a></li>
            <li><a href="/social/facebook-ads/">Meta/Facebook Ads</a></li>
            <li><a href="/social/instagram-ads/">Instagram Ads</a></li>
            <li><a href="/social/linkedin-ads/">LinkedIn Ads</a></li>
            <li><a href="/youtube-ads/">Youtube Ads</a></li>
            <li><a href="/social/twitter-advertising/">Twitter Ads</a></li>
            <li><a href="/pinterest-ads/">Pinterest Ads</a></li>
            <li><a href="/tik-tok-marketing/">Tiktok Ads</a></li>
            <li><a href="/nft-marketing/">NFT Marketing</a></li>
        <!-- Other Marketing Services -->
            <li class="fp-title"><span>Other Marketing Services</span></li>
            <li><a href="/premium-content-writing/">Premium Content Marketing Services</a></li>
            <li><a href="/seo-copywriting/">SEO Copywriting Services</a></li>
            <li><a href="/landing-page-agency/">Landing Page Development</a></li>
            <li><a href="/conversion-rate-optimisation/">Conversion Rate Optimisation</a></li>
            <li><a href="/email-marketing/">Email Marketing Services</a></li>
            <li><a href="/video-production-photography/">Video Production</a></li>
            <li><a href="/video-production-photography/">Photography Production</a></li>
            <li><a href="/reputation-management/">Reputation Management</a></li>
            <li><a href="/removify-review-services/">Content Removal Services</a></li>
            <li><a href="/hubspot/">Hubspot Automation Services</a></li>
    </ul>

    <ul class="footer-nav position-relative col-4">
        <!-- Google Ads -->
            <li class="fp-title"><a href="/google-ads/">Google Ads</a></li>
            <li><a href="/google-ads/google-search-ads/">Google Search Ads</a></li>
            <li><a href="/google-ads/google-display-ads/">Google Display Ads</a></li>
            <li><a href="/google-ads/google-shopping/">Google Shopping Ads</a></li>
            <li><a href="/google-ads/">Pay-Per-Click Services</a></li>
            <li><a href="/google-ads/google-remarketing/">Google Remarketing Services</a></li>
        <!-- Other Paid Ads Services -->
            <li class="fp-title"><span>Other Paid Ads Services</span></li>
            <li><a href="/amazon-ppc/">Amazon Ads</a></li>
            <!-- <li><a href="/baidu-seo/">Baidu Ads</a></li> -->
            <li><a href="/bing-ads/">Bing Ads</a></li>
            <li><a href="/chinese-social-media-marketing/">China Social Media Marketing</a></li>
            <li><a href="/programmatic-advertising/">Programmatic Advertising</a></li>
            <li><a href="/wechat-marketing/">Wechat Marketing Services</a></li>
            <li><a href="/weibo-marketing/">Weibo Marketing Services</a></li>
        <!-- Popular Blogs -->
            <li class="fp-title"><span>Popular Blogs</span></li>
            <li><a href="/resources/seo/what-is-search-engine-optimization-seo/">What is SEO</a></li>
            <li><a href="/resources/marketing/what-is-sem-seo-ppc/">What is SEM</a></li>
            <li><a href="/faqs/how-much-does-it-cost-to-advertise-on-facebook/">Bid Plan On Facebook Ads</a></li>
            <li><a href="/faqs/how-much-does-it-cost-to-advertise-on-instagram/">Bid Plan On Instagram Ads</a></li>
            <li><a href="/resources/marketing/kols-influencers-hk/">Top KOLs in Hong Kong</a></li>
            <li><a href="/resources/social/hong-kong-youtubers/">Top Youtubers in Hong Kong</a></li>
    </ul>
    <?php endif; ?>

    <!------------->
    <!-- Chinese -->
    <!------------->
    <?php if (ICL_LANGUAGE_CODE == "zh"): ?> 
        <ul class="footer-nav position-relative col-4">
        <!-- FP -->
            <li class="fp-title"><a href="/zh/">香港數碼營銷公司</a></li>
            <li><a href="/zh/seo/">SEO 服務</a></li>
            <li><a href="/zh/seo/ecommerce/">電子商務SEO服務</a></li>
            <li><a href="/zh/google-ads/">關鍵字廣告服務</a></li>
            <li><a href="/zh/social/">社交媒體營銷</a></li>
        <!-- SEO Agency -->
            <li class="fp-title"><a href="/zh/seo/">香港SEO公司</a></li>
            <li><a href="/zh/amazon-seo/">亞馬遜SEO服務</a></li>
            <li><a href="/zh/seo/local-seo/">本地搜尋排名優化</a></li>
            <li><a href="/zh/seo/international-seo/">國際SEO服務</a></li>
            <li><a href="/zh/seo/mobile-seo/">行動裝置SEO服務</a></li>
            <li><a href="/zh/video-seo/">影片視頻SEO服務</a></li>
            <li><a href="/zh/seo/link-building/">反向連結服務</a></li>
            <li><a href="/zh/seo/chinese-seo/">中國SEO服務</a></li>
            <li><a href="/zh/baidu-seo/">百度SEO服務</a></li>
        <!-- eCommerce SEO Agency -->
            <li class="fp-title"><a href="/zh/seo/ecommerce/">電子商務SEO服務</a></li>
            <li><a href="/zh/seo/ecommerce/shopify/">香港Shopify SEO服務</a></li>
            <li><a href="/zh/seo/ecommerce/woocommerce/">香港WooCommerce SEO優化</a></li>
            <li><a href="/zh/seo/ecommerce/magento/">專業Magento SEO優化服務</a></li>
        <!-- Free Tools / Audit Services -->
            <li class="fp-title"><span>免費分析服務／免費工具</span></li>
            <li><a href="/zh/seo-audit/">免費網站檢查報告</a></li>
            <li><a href="/zh/google-ads-audit/">免費廣告分析報告</a></li>
            <li><a href="/zh/competitor-audit/">免費競爭對手分析報告</a></li>
            <li><a href="/zh/facebook-interest-finder/">Facebook受眾分析工具</a></li>
            <li><a href="/zh/seo-roi-calculator/">SEO 投資回報率計算器</a></li>
            <li><a href="/zh/ppc-roi-calculator/">SEM 投資回報率計算器</a></li>
            <!-- <li><a href="/zh/google-review-link-generator/">Google 評論產生器</a></li> -->
            <!-- <li><a href="/zh/google-serp-simulator/">Google SERP 模擬器</a></li> -->
        </ul>

    <ul class="footer-nav position-relative col-4">
        <!-- Amazon Marketing Services -->
            <li class="fp-title"><span>亞馬遜營銷策略</span></li>
            <li><a href="/zh/amazon-seo/">亞馬遜 SEO 服務</a></li>
            <li><a href="/zh/amazon-ppc/">亞馬遜廣告服務</a></li>
            <li><a href="/zh/amazon-backlinks/">亞馬遜反向連結服務</a></li>
            <!-- <li><a href="/zh/amazon-ebook/">免費亞馬遜電子書</a></li> -->
        <!-- Social Media Marketing Services -->
            <li class="fp-title"><a href="/zh/social/">社交媒體營銷服務</a></li>
            <li><a href="/zh/social-media-management/">社交媒體管理服務</a></li>
            <li><a href="/zh/social/facebook-ads/">Meta/Facebook 廣告服務</a></li>
            <li><a href="/zh/social/instagram-ads/">Instagram 廣告服務</a></li>
            <li><a href="/zh/social/linkedin-ads/">Linkedin 廣告宣傳服務</a></li>
            <li><a href="/zh/youtube-ads/">YouTube 廣告服務</a></li>
            <li><a href="/zh/social/twitter-advertising/">Twitter 廣告服務</a></li>
            <li><a href="/zh/pinterest-ads/">Pinterest 廣告服務</a></li>
            <li><a href="/zh/tik-tok-marketing/">抖音廣告服務</a></li>
            <li><a href="/zh/nft-marketing/">NFT 營銷</a></li>
        <!-- Other Marketing Services -->
            <li class="fp-title"><span>其他網上營銷服務</span></li>
            <li><a href="/zh/premium-content-writing/">專業文案撰寫服務</a></li>
            <li><a href="/zh/seo-copywriting/">SEO文案撰寫服務</a></li>
            <li><a href="/zh/landing-page-agency/">Landing Page 開發服務</a></li>
            <li><a href="/zh/conversion-rate-optimisation/">轉換率優化服務</a></li>
            <li><a href="/zh/email-marketing/">電子郵件營銷</a></li>
            <li><a href="/zh/video-production-photography/">影片製作服務</a></li>
            <li><a href="/zh/video-production-photography/">攝影服務</a></li>
            <li><a href="/zh/reputation-management/">網絡聲譽管理服務</a></li>
            <li><a href="/zh/removify-review-services/">負面內容消除服務</a></li>
            <li><a href="/zh/hubspot/">HubSpot自動化營銷服務</a></li>
    </ul>

    <ul class="footer-nav position-relative col-4">
        <!-- Google Ads -->
            <li class="fp-title"><a href="/zh/google-ads/">SEM 關鍵字廣告</a></li>
            <li><a href="/zh/google-ads/google-search-ads/">Google搜尋廣告管理服務</a></li>
            <li><a href="/zh/google-ads/google-display-ads/">Google 多媒體廣告聯盟</a></li>
            <li><a href="/zh/google-ads/google-shopping/">Google 購物廣告</a></li>
            <li><a href="/zh/google-ads/">Google 關鍵字廣告</a></li>
            <li><a href="/zh/google-ads/google-remarketing/">Google 再行銷廣告</a></li>
        <!-- Other Paid Ads Services -->
            <li class="fp-title"><span>其他收費廣告服務</span></li>
            <li><a href="/zh/amazon-ppc/">亞馬遜廣告服務</a></li>
            <!-- <li><a href="/zh/baidu-seo/">百度SEO</a></li> -->
            <li><a href="/zh/bing-ads/">Bing 搜尋廣告服務</a></li>
            <li><a href="/zh/chinese-social-media-marketing/">中國社交媒體推廣服務</a></li>
            <li><a href="/zh/programmatic-advertising/">程序化廣告服務</a></li>
            <li><a href="/zh/wechat-marketing/">微信廣告推廣服務</a></li>
            <li><a href="/zh/weibo-marketing/">微博營銷服務</a></li>
        <!-- Popular Blogs -->
            <li class="fp-title"><span>您可能感興趣的...</span></li>
            <li><a href="/zh/resources/seo/what-is-search-engine-optimization-seo/">什麼是搜尋引擎優化</a></li>
            <li><a href="/zh/resources/marketing/what-is-sem-seo-ppc/">什麼是搜尋引擎營銷</a></li>
            <li><a href="/zh/faqs/how-much-does-it-cost-to-advertise-on-facebook/">Facebook 刊登廣告教學</a></li>
            <li><a href="/zh/faqs/how-much-does-it-cost-to-advertise-on-instagram/">Instagram 刊登廣告教學</a></li>
            <li><a href="/zh/resources/marketing/kols-influencers-hk/">香港著名關鍵意見領袖 KOL</a></li>
            <li><a href="/zh/resources/social/hong-kong-youtubers/">香港著名 Youtube 影片製作者</a></li>
    </ul>
    <?php endif; ?>

  </div>
</div>
<!-- END FOOTER LINKS -->

</footer>

<section class="copyright pb-0">
    <div class="container">
        <div class="row">
            <div
                 class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-left align-content-center">

                <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                <h4 style="font-size:32px; font-weight:bold; width:100%;"
                    class="text-center text-md-left">Significant negotiation clout <br class="d-none d-lg-block"> with
                    our partners.</h4>
                <p class="text-center text-md-left">Our network of premier partners gives us exclusive access to first
                    in-market media products,
                    exclusive collaboration plans and inside intel, so we can keep you ahead of your competition. </p>

                <?php endif; ?>
                <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                <h4 style="font-size:32px; font-weight:bold; width:100%;"
                    class="text-center text-md-left">極具影響力的合作夥伴</h4>
                <p class="text-center text-md-left">我們的主要合作夥伴使我們能夠優先使用最新的媒體產品，掌握獨家合作計劃和內部情報，助您拋離競爭對手。</p>

                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <!-- <img src="/wp-content/themes/firstpage/assets/img/grouped-partner-logos.png" alt="Partner Logos"> -->
                <div class="container-fluid footer-partner-logos">
                    <div class="row first-logos">
                        <div class="col-3 p-1">
                            <img src="/wp-content/themes/firstpage/assets/img/google-partner-2022.png"
                                 alt="Google Partner">
                        </div>
                        <div class="col-9 p-1">
                            <img src="/wp-content/themes/firstpage/assets/img/facebook-meta.png"
                                 alt="Meta Business Partner">
                        </div>
                    </div>

                    <div class="row my-2 middle-logos">
                        <div class="col-6 p-1">
                            <img src="/wp-content/themes/firstpage/img/firstpage-new-LinkedIn.svg"
                                 alt="LinkedIn Marketing Partner">
                        </div>
                        <div class="col-6 p-1">
                            <img src="/wp-content/themes/firstpage/img/firstpage-new-ContentKing.svg"
                                 alt="ContentKing Partner">
                        </div>
                    </div>

                    <div class="row last-logos">
                        <div class="col-4 p-1">
                            <img src="/wp-content/themes/firstpage/img/firstpage-new-TikTok.svg"
                                 alt="Tiktok Partner">
                        </div>
                        <div class="col-2 p-1">
                            <img src="/wp-content/themes/firstpage/img/shopify-partner.svg"
                                 alt="Shopify Partner">
                        </div>
                        <div class="col-2 p-1">
                            <img src="/wp-content/themes/firstpage/img/firstpage-new-Pinterest.svg"
                                 alt="Pinterest Partner">
                        </div>
                        <div class="col-2 p-1">
                            <img src="/wp-content/themes/firstpage/img/hubspot-certified-agency-partner.png"
                                style="padding:5px;" alt="Hubspot Partner">
                        </div>
                        <div class="col-2 p-1">
                            <img src="/wp-content/themes/firstpage/assets/img/footer-happy-hong-koner.png"
                                 alt="Happy Hong Konger">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="copyright">
    <div class="container">
        <div class="row align-items-center no-gutters">
            <?php if (ICL_LANGUAGE_CODE == "en"): ?>
            <div class="text col-12 col-lg-4 text-center text-lg-left">
                Copyright &copy;
                <?php echo date("Y"); ?>
                First Page.
                <br>
                <div class="d-block">
                    <a href="/terms-of-business/"
                       class="text-white">Terms of Business</a>
                    <span class="mx-2">|</span>
                    <!-- <a href="/privacy-policy/"
                       class="text-white">Privacy Policy</a> -->
                    <a href="/unbeatable-money-back-guarantee/" class="text-white">
                        Money-back Guarantee
                    </a>
                </div>
            </div>
            <?php endif; ?>
            <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
            <div class="text col-12 col-lg-3 text-center text-lg-left">
                Copyright &copy;
                <?php echo date("Y"); ?>
                First Page.
                <br>
                <div class="d-block">
                    <a href="/zh/terms-of-business/"
                       class="text-white">商業條款</a>
                    <span class="mx-2">|</span>
                    <a href="/zh/privacy-policy/"
                       class="text-white">隱私政策</a>
                </div>
            </div>
            <?php endif; ?>
            <?php /*
             <div class="logos col-12 col-md-9 d-xl-flex">
             <?php if( have_rows('brands', 'option') ): ?>
             <?php while( have_rows('brands', 'option') ): the_row(); 
             $brand_logo = get_sub_field( 'brand_logo' );
             ?>
             <img src="<?php echo $brand_logo['url']; ?>"
             srcset="<?php echo $brand_logo['url']; ?>, <?php echo $brand_logo['url']; ?>" class="img-fluid"
             alt="<?php echo $brand_logo['alt']; ?>" />
             <?php endwhile; ?>
             <?php endif; ?>
             </div>
             */?>
        </div>
    </div>
</section>
</div><!-- #page -->

<?php get_template_part('template-parts/sticky-footer/sticky-footer'); ?>

<div class="callback">
    <a href="#get-callback-popup"
       class="open-popup-callback"
       data-effect="mfp-ease-in-out">
        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/firstpage/assets/img/call_button.svg"
             alt="Callback">
    </a>
</div>
<div id="get-callback-popup"
     class="get-callback-popup white-popup mfp-with-anim mfp-hide">
    <div class="quote-form">
        <form id="primal-callback-form"
              action="<?php echo get_home_url(); ?>/thank-you?form=call-me-back"
              class="form-callback"
              method="POST">
            <?php if (ICL_LANGUAGE_CODE == "en"): ?>
            <div class="form-callback-content">
                <h3>Send us a message and we will call you back</h3>
                <div class="form-mid row">
                    <div class="col-12 mb-2">
                        <input id="callback_name"
                               type="text"
                               class="form-control"
                               name="lead_name"
                               placeholder="First Name*"
                               required
                               autocomplete="off" />
                    </div>
                    <div class="col-12 mb-2">
                        <input id="callback_email"
                               type="email"
                               class="form-control"
                               name="lead_email"
                               placeholder="Email*"
                               data-parsley-error-message="Please enter a valid email address"
                               data-parsley-trigger="change"
                               required
                               autocomplete="off" />
                    </div>
                    <div class="col-12 mb-2">
                        <input id="callback_url"
                               type="url"
                               class="form-control"
                               name="lead_website"
                               placeholder="Enter Your Website"
                               data-parsley-url-check
                               data-parsley-website-check
                               data-parsley-facebook-check
                               autocomplete="off" />
                    </div>
                    <div class="col-12 mb-2">
                        <input id="callback_phone"
                               type="tel"
                               class="form-control"
                               name="lead_phone"
                               placeholder="Enter Your Phone Number"
                               required
                               data-parsley-phone-check
                               autocomplete="off" />
                    </div>
                    <div class="col-12 mb-4">
                        <textarea id="callback_message"
                                  class="form-control"
                                  name="lead_message"
                                  rows="4"
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="col-12 mb-2">
                        <input id="callback_formname"
                               type="hidden"
                               name="lead_formname"
                               value="Get A Call Back" />
                        <input id="callback_language"
                               type="hidden"
                               name="lead_language"
                               value="en" />
                        <input id="callback_formtype"
                               type="hidden"
                               name="lead_formtype"
                               value="hs_callback_form" />
                        <button type="submit"
                                class="btn-callback-submit form-control btn fp-btn fp-btn-orange fp-btn-shadow mform-btn-submit"
                                onclick="ga('send','event', {'eventCategory': 'Form','eventAction': 'Click', 'eventLabel': 'Get Callback Form'});">Get
                            A Call Back</button>
                    </div>
                </div>
                <p>Your details are always securely stored.</p>
            </div>
            <?php endif; ?>
            <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
            <div class="form-callback-content">
                <h3>我們會盡快回覆您的留言</h3>
                <div class="form-mid row">
                    <div class="col-12 mb-2">
                        <input id="callback_name"
                               type="text"
                               class="form-control"
                               name="lead_name"
                               placeholder="姓名*"
                               required
                               autocomplete="off" />
                    </div>
                    <div class="col-12 mb-2">
                        <input id="callback_email"
                               type="email"
                               class="form-control"
                               name="lead_email"
                               placeholder="電郵*"
                               data-parsley-error-message="Please enter a valid email address"
                               data-parsley-trigger="change"
                               required
                               autocomplete="off" />
                    </div>
                    <div class="col-12 mb-2">
                        <input id="callback_url"
                               type="url"
                               class="form-control"
                               name="lead_website"
                               placeholder="輸入您的網址"
                               data-parsley-url-check
                               data-parsley-website-check
                               data-parsley-facebook-check
                               autocomplete="off" />
                    </div>
                    <div class="col-12 mb-2">
                        <input id="callback_phone"
                               type="tel"
                               class="form-control"
                               name="lead_phone"
                               placeholder="輸入你的電話號碼"
                               required
                               data-parsley-phone-check
                               autocomplete="off" />
                    </div>
                    <div class="col-12 mb-4">
                        <textarea id="callback_message"
                                  class="form-control"
                                  name="lead_message"
                                  rows="4"
                                  placeholder="留言"></textarea>
                    </div>
                    <div class="col-12 mb-2">
                        <input id="callback_formname"
                               type="hidden"
                               name="lead_formname"
                               value="Get A Call Back" />
                        <input id="callback_language"
                               type="hidden"
                               name="lead_language"
                               value="en" />
                        <input id="callback_formtype"
                               type="hidden"
                               name="lead_formtype"
                               value="hs_callback_form" />
                        <button type="submit"
                                class="btn-callback-submit form-control btn fp-btn fp-btn-orange fp-btn-shadow mform-btn-submit"
                                onclick="ga('send','event', {'eventCategory': 'Form','eventAction': 'Click', 'eventLabel': 'Get Callback Form'});">取得回覆</button>
                    </div>
                </div>
                <p>您的資料將會被保密</p>
            </div>
            <?php endif; ?>
        </form>
    </div>
</div>

<?php wp_footer(); ?>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<!-- hashing js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js"></script>
<script>
  (function(i) {
    i(".show-links").click(function(g) {
        i("#popular-services").toggle();
        i(".show-links-trigger").toggle();
        i(".hide-links-trigger").toggle()
    });
    i(".hide-links").click(function(g) {
        i("#popular-services").toggle();
        i(".show-links-trigger").toggle();
        i(".hide-links-trigger").toggle()
    })
    i(".show-locations").click(function(g) {
        i("#popular-locations").toggle();
        i(".show-locations-trigger").toggle();
        i(".hide-locations-trigger").toggle()
    });
    i(".hide-locations").click(function(g) {
        i("#popular-locations").toggle();
        i(".show-locations-trigger").toggle();
        i(".hide-locations-trigger").toggle()
    })
})(jQuery); 
</script>

</body>

</html>