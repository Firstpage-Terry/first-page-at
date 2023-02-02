<!doctype html>
<html <?php
language_attributes();
      ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <link rel="profile"
          href="https://gmpg.org/xfn/11">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/2.5.3/themes/light.css" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet"
          href="https://use.typekit.net/wqq0bzd.css">
    <link rel="stylesheet"
          href="<?php get_template_directory_uri(); ?>/wp-content/themes/firstpage/assets/css/magnific-popup.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/2.5.3/tippy.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script> -->

      <script>
            tippy(".showpopup", {
                  html: ".embed-popup-form",
                  arrow: true,
                  trigger: "click",
                  interactive: true,
                  arrow: true,
                  placement: "bottom",
                  flip: false,
                  animation: "shift-toward",
                  inertia: true,
                  distance: 15,
                  arrowTransform: "scaleX(1.5)",
            });
      </script>
      <?php if (get_field('favicon', 'option')): ?>
      <link rel="shortcut icon"
            href="<?php the_field('favicon', 'option'); ?>" />
      <?php endif; ?>
      <?php wp_head(); ?>

      <?php
      $hreflang_SG = get_field('hreflang_SG');
      $hreflang_HK = get_field('hreflang_HK');
      $hreflang_HKZH = get_field('hreflang_HKZH');
      $hreflang_AU = get_field('hreflang_AU');
      $hreflang_US = get_field('hreflang_US');
      $hreflang_CA = get_field('hreflang_CA');
      $hreflang_NZ = get_field('hreflang_NZ');
      ?>

      <?php $blog_id = get_current_blog_id();
      if (1 == $blog_id) { ?>
      <!-- Default -->
      <?php if ($hreflang_HK): ?>
      <link rel="alternate"
            href="https://www.firstpage.hk/<?php echo $hreflang_HK ?>/"
            hreflang="x-default" />
      <?php endif; ?>
      <!-- Default Ends-->
      <?php if ($hreflang_SG): ?>
      <link rel="alternate"
            href="https://www.firstpagedigital.sg/<?php echo $hreflang_SG ?>/"
            hreflang="en-SG" />
      <?php endif; ?>
      <?php if ($hreflang_HK): ?>
      <link rel="alternate"
            href="https://www.firstpage.hk/<?php echo $hreflang_HK ?>/"
            hreflang="en-HK" />
      <?php endif; ?>
      <?php if ($hreflang_HKZH): ?>
      <link rel="alternate"
            href="https://www.firstpage.hk/zh/<?php echo $hreflang_HKZH ?>/"
            hreflang="zh-HK" />
      <?php endif; ?>
      <?php if ($hreflang_AU): ?>
      <link rel="alternate"
            href="https://firstpage.com.au/<?php echo $hreflang_AU ?>/"
            hreflang="en-AU" />
      <?php endif; ?>
      <?php if ($hreflang_US): ?>
      <link rel="alternate"
            href="https://firstpageusa.com/<?php echo $hreflang_US ?>/"
            hreflang="en-US" />
      <?php endif; ?>
      <?php if ($hreflang_CA): ?>
      <link rel="alternate"
            href="https://www.firstpagedigital.sg/<?php echo $hreflang_CA ?>/"
            hreflang="en-CA" />
      <?php endif; ?>
      <?php if ($hreflang_NZ): ?>
      <link rel="alternate"
            href="https://firstpage.nz/<?php echo $hreflang_NZ ?>/"
            hreflang="en-NZ" />
      <?php endif; ?>
      <?php if (is_front_page()): ?>
      <!-- Default -->
      <link rel="alternate"
            href="https://www.firstpage.hk/"
            hreflang="x-default" />
      <!-- Default Ends-->
      <link rel="alternate"
            href="https://www.firstpagedigital.sg/"
            hreflang="en-SG" />
      <link rel="alternate"
            href="https://www.firstpage.hk/"
            hreflang="en-HK" />
      <link rel="alternate"
            href="https://www.firstpage.hk/zh/"
            hreflang="zh-HK" />
      <link rel="alternate"
            href="https://firstpage.com.au/"
            hreflang="en-AU" />
      <link rel="alternate"
            href="https://firstpageusa.com/"
            hreflang="en-US" />
      <link rel="alternate"
            href="https://firstpage.nz/"
            hreflang="en-NZ" />
      <?php endif; ?>
      <?php } else { ?>

      <!-- ZH/CHINESE HREFLANGS -->
      <!-- Default -->
      <link rel="alternate"
            href="https://www.firstpage.hk/<?php echo $hreflang_HK ?>/"
            hreflang="x-default" />
      <!-- Default Ends-->
      <?php if ($hreflang_SG): ?>
      <link rel="alternate"
            href="https://www.firstpagedigital.sg/<?php echo $hreflang_SG ?>/"
            hreflang="en-SG" />
      <?php endif; ?>
      <?php if ($hreflang_HK): ?>
      <link rel="alternate"
            href="https://www.firstpage.hk/<?php echo $hreflang_HK ?>/"
            hreflang="en-HK" />
      <?php endif; ?>
      <?php if ($hreflang_HKZH): ?>
      <link rel="alternate"
            href="https://www.firstpage.hk/zh/<?php echo $hreflang_HKZH ?>/"
            hreflang="zh-HK" />
      <?php endif; ?>
      <?php if ($hreflang_AU): ?>
      <link rel="alternate"
            href="https://firstpage.com.au/<?php echo $hreflang_AU ?>/"
            hreflang="en-AU" />
      <?php endif; ?>
      <?php if ($hreflang_US): ?>
      <link rel="alternate"
            href="https://firstpageusa.com/<?php echo $hreflang_US ?>/"
            hreflang="en-US" />
      <?php endif; ?>
      <?php if ($hreflang_CA): ?>
      <link rel="alternate"
            href="https://www.firstpagedigital.sg/<?php echo $hreflang_CA ?>/"
            hreflang="en-CA" />
      <?php endif; ?>
      <?php if ($hreflang_NZ): ?>
      <link rel="alternate"
            href="https://firstpage.nz/<?php echo $hreflang_NZ ?>/"
            hreflang="en-NZ" />
      <?php endif; ?>
      <?php if (is_front_page()): ?>
      <!-- Default -->
      <link rel="alternate"
            href="https://www.firstpage.hk/"
            hreflang="x-default" />
      <!-- Default Ends-->
      <link rel="alternate"
            href="https://www.firstpagedigital.sg/"
            hreflang="en-SG" />
      <link rel="alternate"
            href="https://www.firstpage.hk/"
            hreflang="en-HK" />
      <link rel="alternate"
            href="https://www.firstpage.hk/zh/"
            hreflang="zh-HK" />
      <link rel="alternate"
            href="https://firstpage.com.au/"
            hreflang="en-AU" />
      <link rel="alternate"
            href="https://firstpageusa.com/"
            hreflang="en-US" />
      <link rel="alternate"
            href="https://firstpage.nz/"
            hreflang="en-NZ" />
      <?php endif; ?>
      <?php } ?>

      <script async
              src="https://www.googleoptimize.com/optimize.js?id=OPT-T5M7SD4"></script>

      <!-- HubSpot Embed Code -->
      <script type="text/javascript"
              id="hs-script-loader"
              async
              defer
              src="https://js.hs-scripts.com/3832363.js"></script>

      <script>
            window.dataLayer = [{}];
      </script>
      <!-- Google Tag Manager -->
      <script>(function (w, d, s, l, i) {
                  w[l] = w[l] || []; w[l].push({
                        'gtm.start':
                              new Date().getTime(), event: 'gtm.js'
                  }); var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                              'https://ss.firstpage.hk/yyluoeno.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-ML3NCHR');</script>
      <!-- End Google Tag Manager -->

<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "CreativeWorkSeries",
    "name": "<?php the_title(); ?> | FirstPage Digital Hong Kong",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "bestRating": "5",
        "ratingCount": "205"
    }
}
</script>


      <!-- Google Schema -->
      <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "First Page Digital - Digital Marketing & SEO Agency",
  "image": "https://cdn-bldmn.nitrocdn.com/SZijPibdWExuLqopdgGNjrscACdejjSF/assets/static/optimized/rev-631e7bb/wp-content/themes/firstpage/assets/img/fp-logo.png",
  "@id": "",
  "url": "https://www.firstpage.hk/",
  "telephone": "85223563200",
  "priceRange": "$$-$$$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Room 3501-07, 213 Queen’s Road East",
    "addressLocality": "Wan Chai",
    "postalCode": "0000",
    "addressCountry": "HK"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  },
  "sameAs": [
    "https://www.facebook.com/FirstPageHK/",
    "https://www.instagram.com/firstpage.hk/",
    "https://www.linkedin.com/company/firstpage-digital/"
  ]
}
</script>
      <!-- Google Schema ends -->
</head>

<body <?php
      body_class();
      ?>>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML3NCHR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->


      <div id="page"
           class="site">
            <a class="skip-link screen-reader-text sr-only"
               href="#content">
                  <?php esc_html_e('Skip to content', 'firstpage'); ?>
            </a>
            <header id="masthead"
                    class="site-header">
                  <?php get_template_part('template-parts/navbar/navbar-default'); ?>
            </header><!-- #masthead -->

            <?php if (!is_404()): ?>
            <?php get_template_part('template-parts/banner/banner'); ?>
            <?php endif; ?>

            <div id="content"
                 class="site-content">