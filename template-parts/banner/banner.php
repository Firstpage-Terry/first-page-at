<?php
$dropdown = get_field('dropdown');
?>

<?php //Default banner 
?>
<?php if ($dropdown == 'Default') : ?>
    <section id="banner" class="banner form-space home-banner">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <div class="container banner-hero">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <div class="banner-hero-cont">
                                        <?php if (!get_sub_field('banner_description')) : ?>

                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide main-text FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide main-text FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>

                                        <?php else : ?>

                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide FP-h1">
                                                        <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>

                                        <?php endif; ?>
                                            <div class="banner-description row">
                                                <div class="col-6 col-md-12">
                                                    <?php if (get_sub_field('banner_description')) : ?>
                                                        <p class="form-hide">
                                                            <?php the_sub_field('banner_description'); ?>
                                                        </p>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-hide hero-mobile">
                                                        <img src="<?php echo $desktop['url']; ?>" srcset="<?php echo $desktop['url']; ?>, <?php echo $desktop['url']; ?>" alt="<?php echo $desktop['alt']; ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <?php get_template_part('forms/form-services'); ?>
                                            <div class="text-center text-md-left awards-badges relative">
                                                <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                                    <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                    <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                                <?php endif; ?>
                                                <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                                    <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                    <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-4 d-none d-md-block">
                                    <div class="hero-img">
                                        <img src="<?php echo $desktop['url']; ?>" srcset="<?php echo $desktop['url']; ?>, <?php echo $desktop['url']; ?>" alt="<?php echo $desktop['alt']; ?>" />
                                    </div>
                                    <?php if (get_sub_field('name_tag')) : ?>
                                        <div class="name-tag d-none d-lg-block">
                                            <h3 class="text-left mt-0"><b><?php the_sub_field('name_tag'); ?></b>
                                                <br>
                                                <?php the_sub_field('designation'); ?>
                                            </h3>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php //Text Center mobile with Image 
?>
<?php if ($dropdown == 'Text Center mobile with Image') : ?>
    <section id="banner" class="banner form-space home-banner">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <div class="container banner-hero d-md-flex d-lg-block justify-content-center">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="banner-hero-cont">
                                        <?php if (!get_sub_field('banner_description')) : ?>

                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide text-center text-md-left FP-h1" style="letter-spacing: initial !important;">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide text-center text-md-left FP-h1" style="letter-spacing: initial !important;">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>

                                        <?php else : ?>

                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>

                                        <?php endif; ?>

                                        <img src="<?php echo $mobile['url']; ?>" class="d-block d-lg-none m-0 p-0 w-100" alt="<?php echo $mobile['alt']; ?>" />

                                        <?php get_template_part('forms/form-services-2'); ?>
                                        <div class="text-center text-md-left awards-badges relative">
                                            <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-block">
                                    <div class="hero-img d-none d-md-none d-lg-none">
                                        <img src="<?php echo $tablet['url']; ?>" srcset="<?php echo $tablet['url']; ?>, <?php echo $tablet['url']; ?>" alt="<?php echo $tablet['alt']; ?>" />
                                    </div>
                                    <div class="hero-img d-none d-lg-block">
                                        <img src="<?php echo $desktop['url']; ?>" srcset="<?php echo $desktop['url']; ?>, <?php echo $desktop['url']; ?>" alt="<?php echo $desktop['alt']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>


<?php //Amazon Ebook 
?>
<?php if ($dropdown == 'Amazon Ebook') : ?>
    <section id="banner" class="banner banner-amazon-ebook form-space home-banner">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <div class="container banner-hero d-md-flex d-lg-block justify-content-center">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="banner-hero-cont">
                                        <?php if (!get_sub_field('banner_description')) : ?>
                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide text-center text-md-left FP-h1" style="letter-spacing: initial !important;">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide text-center text-md-left FP-h1" style="letter-spacing: initial !important;">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>
                                        <?php else : ?>
                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                        <div class="form-hide">
                                            <div class="text-center text-md-left h5">
                                                <?php if (get_sub_field('banner_description')) : ?>
                                                        <?php the_sub_field('banner_description'); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <img src="<?php echo $mobile['url']; ?>" class="d-block d-lg-none m-0 p-0 w-100" alt="<?php echo $mobile['alt']; ?>" />

                                        <?php get_template_part('forms/form-amazon-ebook'); ?>
                                        <div class="text-center text-md-left awards-badges relative">
                                            <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-block">
                                    <div class="hero-img d-none d-md-none d-lg-none">
                                        <img src="<?php echo $tablet['url']; ?>" srcset="<?php echo $tablet['url']; ?>, <?php echo $tablet['url']; ?>" alt="<?php echo $tablet['alt']; ?>" />
                                    </div>
                                    <div class="hero-img d-none d-lg-block">
                                        <img src="<?php echo $desktop['url']; ?>" srcset="<?php echo $desktop['url']; ?>, <?php echo $desktop['url']; ?>" alt="<?php echo $desktop['alt']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>


<?php //Content Removal Banner Form 
?>
<?php if ($dropdown == 'Content Removal Banner Form') : ?>
    <section id="banner" class="banner form-space home-banner">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <div class="container banner-hero">
                            <div class="banner-hero-cont">

                                <?php if (!get_sub_field('banner_description')) : ?>
                                    <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                        <span class="form-hide text-center text-md-left FP-h1">
                                            <?php the_sub_field('primary_heading'); ?>
                                        </span>
                                    <?php else : ?>
                                        <h1 class="form-hide text-center text-md-left FP-h1">
                                            <?php the_sub_field('primary_heading'); ?>
                                        </h1>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                        <span class="form-hide FP-h1">
                                            <?php the_sub_field('primary_heading'); ?>
                                        </span>
                                    <?php else : ?>
                                        <h1 class="form-hide FP-h1">
                                            <?php the_sub_field('primary_heading'); ?>
                                        </h1>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <img src="<?php echo $mobile['url']; ?>" class="d-block d-lg-none m-0 p-0 w-100" alt="<?php echo $mobile['alt']; ?>" />

                                <?php get_template_part('forms/form-content-removal'); ?>
                                <div class="text-center text-md-left awards-badges relative">
                                    <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                        <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                        <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                    <?php endif; ?>
                                    <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                        <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                        <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="hero-img d-none d-md-block d-lg-none">
                                <img src="<?php echo $tablet['url']; ?>" srcset="<?php echo $tablet['url']; ?>, <?php echo $tablet['url']; ?>" alt="<?php echo $tablet['alt']; ?>" />
                            </div>
                            <div class="hero-img d-none d-lg-block">
                                <img src="<?php echo $desktop['url']; ?>" srcset="<?php echo $desktop['url']; ?>, <?php echo $desktop['url']; ?>" alt="<?php echo $desktop['alt']; ?>" />
                            </div>

                        </div>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>


<?php //Text center no image banner 
?>
<?php if ($dropdown == 'Text center no image') : ?>
    <section id="banner" class="banner form-space">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <div class="container banner-hero">
                            <div class="w-100">

                                <?php if (!get_sub_field('banner_description')) : ?>
                                    <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                        <span class="form-hide main-text text-center FP-h1"><?php the_sub_field('primary_heading'); ?></span>
                                    <?php else : ?>
                                        <h1 class="form-hide main-text text-center FP-h1"><?php the_sub_field('primary_heading'); ?></h1>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                        <span class="form-hide text-center w-100 FP-h1"><?php the_sub_field('primary_heading'); ?></span>
                                    <?php else : ?>
                                        <h1 class="form-hide text-center w-100 FP-h1"><?php the_sub_field('primary_heading'); ?></h1>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <div class="banner-description text-center">
                                    <?php if (get_sub_field('banner_description')) : ?>
                                        <p class="form-hide">
                                            <?php the_sub_field('banner_description'); ?>
                                        </p>
                                    <?php endif; ?>
                                    <div class="form-hide hero-mobile">
                                        <img src="<?php echo $mobile['url']; ?>" srcset="<?php echo $mobile['url']; ?>, <?php echo $mobile['url']; ?>" alt="<?php echo $mobile['alt']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php //SEO Audit 
?>
<?php if ($dropdown == 'SEO Audit') : ?>
    <section id="banner" class="banner banner-seo-audit form-space home-banner default-mobile-center">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <div class="container banner-hero">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="banner-hero-cont d-lg-block d-md-flex flex-column align-items-center">
                                        
                                        <?php if (!get_sub_field('banner_description')) : ?>
                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide m-0 FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide m-0 FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>
                                        <?php else : ?>
                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                        <div class="banner-description p-sm-2 p-md-4 p-lg-0">
                                            <?php if (get_sub_field('banner_description')) : ?>
                                                <p class="form-hide mb-4 mb-lg-0">
                                                    <?php the_sub_field('banner_description'); ?>
                                                </p>
                                            <?php endif; ?>
                                            <div class="form-hide d-block d-md-flex d-lg-none">
                                                <img src="<?php echo $mobile['url']; ?>" style="max-width:100%; margin:auto;" />
                                            </div>
                                        </div>
                                        <?php get_template_part('forms/form-seo-audit'); ?>
                                        <div class="text-center text-md-left awards-badges relative">
                                            <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-block">
                                    <div class="hero-img d-none d-lg-block">
                                        <img src="<?php echo $desktop['url']; ?>"/>
                                    </div>
                                    <?php if (get_sub_field('name_tag')) : ?>
                                        <div class="name-tag">
                                            <h3 class="text-left mt-0"><b><?php the_sub_field('name_tag'); ?></b>
                                                <br>
                                                <?php the_sub_field('designation'); ?>
                                            </h3>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php //SEO Audit 
?>
<?php if ($dropdown == '//') : ?>
    <section id="banner" class="banner form-space home-banner default-mobile-center">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <div class="container banner-hero">
                            <div class="banner-hero-cont d-lg-block d-md-flex flex-column align-items-center">

                                <?php if (!get_sub_field('banner_description')) : ?>
                                    <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                        <span class="form-hide main-text FP-h1">
                                            <?php the_sub_field('primary_heading'); ?>
                                        </span>
                                    <?php else : ?>
                                        <h1 class="form-hide main-text FP-h1">
                                            <?php the_sub_field('primary_heading'); ?>
                                        </h1>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                        <span class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                    <?php else : ?>
                                        <h1 class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <div class="banner-description p-sm-2 p-md-4 p-lg-0">
                                    <?php if (get_sub_field('banner_description')) : ?>
                                        <p class="form-hide mb-4 mb-lg-0">
                                            <?php the_sub_field('banner_description'); ?>
                                        </p>
                                    <?php endif; ?>
                                    <div class="form-hide d-block d-md-flex d-lg-none">
                                        <img src="<?php echo $mobile['url']; ?>" style="max-width:100%; margin:auto;" />
                                    </div>
                                </div>
                                <?php get_template_part('forms/form-seo-audit'); ?>
                                <div class="text-center text-md-left awards-badges relative">
                                    <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                        <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                        <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                    <?php endif; ?>
                                    <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                        <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                        <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="hero-img d-none d-lg-block">
                                <img src="<?php echo $desktop['url']; ?>" />
                            </div>
                            <?php if (get_sub_field('name_tag')) : ?>
                                <div class="name-tag">
                                    <h3 class="text-left mt-0"><b><?php the_sub_field('name_tag'); ?></b>
                                        <br>
                                        <?php the_sub_field('designation'); ?>
                                    </h3>
                                </div>
                            <?php endif; ?>
                        </div>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php //Google Ads Audit 
?>
<?php if ($dropdown == 'Google Ads Audit') : ?>
    <section id="banner" class="banner banner-google-ads-audit form-space home-banner default-mobile-center">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <div class="container banner-hero">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="banner-hero-cont d-lg-block d-md-flex flex-column align-items-center">
                                        <?php if (!get_sub_field('banner_description')) : ?>
                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide main-text FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide main-text FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>
                                        <?php else : ?>
                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                        <div class="banner-description p-sm-2 p-md-4 p-lg-0">
                                            <?php if (get_sub_field('banner_description')) : ?>
                                                <p class="form-hide mb-4 mb-lg-0">
                                                    <?php the_sub_field('banner_description'); ?>
                                                </p>
                                            <?php endif; ?>
                                            <div class="form-hide d-block d-md-flex d-lg-none">
                                                <img src="<?php echo $mobile['url']; ?>" style="max-width:100%; margin:auto;" />
                                            </div>
                                        </div>
                                        <?php get_template_part('forms/form-google-ads-audit'); ?>
                                        <div class="text-center text-md-left awards-badges relative">
                                            <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-block">
                                    <div class="hero-img d-none d-lg-block">
                                        <img src="<?php echo $desktop['url']; ?>" />
                                    </div>
                                    <?php if (get_sub_field('name_tag')) : ?>
                                        <div class="name-tag">
                                            <h3 class="text-left mt-0"><b><?php the_sub_field('name_tag'); ?></b>
                                                <br>
                                                <?php the_sub_field('designation'); ?>
                                            </h3>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        
                        </div>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php //Competitor Audit 
?>
<?php if ($dropdown == 'Competitor Audit') : ?>
    <section id="banner" class="banner banner-competitor-audit form-space home-banner default-mobile-center">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <div class="container banner-hero">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="banner-hero-cont d-lg-block d-md-flex flex-column align-items-center">
                                        <?php if (!get_sub_field('banner_description')) : ?>
                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide main-text FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide main-text FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>
                                        <?php else : ?>
                                            <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                                <span class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </span>
                                            <?php else : ?>
                                                <h1 class="form-hide FP-h1">
                                                    <?php the_sub_field('primary_heading'); ?>
                                                </h1>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <div class="banner-description p-sm-2 p-md-4 p-lg-0">
                                            <?php if (get_sub_field('banner_description')) : ?>
                                                <p class="form-hide mb-4 mb-lg-0">
                                                    <?php the_sub_field('banner_description'); ?>
                                                </p>
                                            <?php endif; ?>
                                            <div class="form-hide d-block d-md-flex d-lg-none">
                                                <img src="<?php echo $mobile['url']; ?>" style="max-width:100%; margin:auto;" />
                                            </div>
                                        </div>
                                        <?php get_template_part('forms/form-competitor-audit'); ?>
                                        <div class="text-center text-md-left awards-badges relative">
                                            <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-none d-md-block">
                                    <div class="hero-img d-none d-lg-block">
                                        <img src="<?php echo $desktop['url']; ?>"/>
                                    </div>
                                    <?php if (get_sub_field('name_tag')) : ?>
                                        <div class="name-tag">
                                            <h3 class="text-left mt-0"><b><?php the_sub_field('name_tag'); ?></b>
                                                <br>
                                                <?php the_sub_field('designation'); ?>
                                            </h3>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                        </div>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php //Right cut off location banner 
?>
<?php if ($dropdown == 'Right cut off - Location') : ?>
    <div class="right-cut-off-banner">
        <section id="banner" class="banner form-space">
            <?php if (have_rows('banner_slider')) : ?>
                <?php while (have_rows('banner_slider')) : the_row(); ?>
                    <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                            $desktop = get_sub_field('banner_right_desktop_image');
                            $tablet = get_sub_field('banner_right_tablet_image');
                            $mobile = get_sub_field('banner_right_mobile_image');
                    ?>
                            <section class="form-space" style="">
                                <div class="container banner-hero">
                                    <div class="banner-hero-cont">
                                        
                                        <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                            <span class="form-hide text-center text-sm-left FP-h1">
                                                <?php the_sub_field('primary_heading'); ?>
                                            </span>
                                        <?php else : ?>
                                            <h1 class="form-hide text-center text-sm-left">
                                                <?php the_sub_field('primary_heading'); ?>
                                            </h1>
                                        <?php endif; ?>

                                        <div class="banner-img-mb d-sm-none form-hide">
                                            <img src="<?php echo $mobile['url']; ?>" alt="First Page" />
                                        </div>
                                        <?php get_template_part('forms/form-services'); ?>
                                        <div class="text-center text-md-left awards-badges relative">
                                            <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </section>

                    <?php endwhile;
                    endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    </div>
<?php endif; ?>


<?php //Full background image banner 
?>
<?php if ($dropdown == 'Full background image') : ?>
    <section id="banner" class="banner form-space home-banner">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row(); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <section class="form-space">
                            <div class="container banner-hero" style="background-image: url(<?php echo $mobile['url']; ?>);">
                                <div class="banner-hero-cont">
                                    <?php if(get_sub_field('banner_h1_selector') == "span"): ?>
                                        <span class="form-hide text-center text-sm-left FP-h1">
                                            <?php the_sub_field('primary_heading'); ?>
                                        </span>
                                    <?php else : ?>
                                        <h1 class="form-hide text-center text-sm-left">
                                            <?php the_sub_field('primary_heading'); ?>
                                        </h1>
                                    <?php endif; ?>

                                    <div class="banner-img-mb d-sm-none form-hide">
                                        <img src="<?php echo $mobile['url']; ?>" alt="First Page" />
                                    </div>
                                    <?php get_template_part('forms/form-services'); ?>
                                    <div class="text-center text-md-left awards-badges relative">
                                        <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                            <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                            <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                        <?php endif; ?>
                                        <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                            <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block awards-badges-desk" alt="" />
                                            <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="img-fluid d-sm-none awards-badges-mob" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </section>

                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php if ($dropdown == 'Full background image with text center') : ?>
    <div id="banner" class="full_background_image_with_text_center">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row();
                $background_image = get_sub_field('banner_background'); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <section class="banner contact-us" style="background-image:url('<?php echo $background_image['url']; ?>');">
                            <div class="container">
                                <div class="quote-form">
                                    <div class="text-center form-thankyou">
                                        <?php if (get_sub_field('secondary_text')) : ?>
                                            <?php the_sub_field('secondary_text'); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if ($dropdown == 'Full background image with text left') : ?>
    <div id="banner" class="full_background_image_with_text_left">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row();
                $background_image = get_sub_field('banner_background'); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <section class="banner whoWeAreSection" style="background-image:url('<?php echo $background_image['url']; ?>');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 text-center text-md-left text-lg-left who-we-are-h1">
                                        <h1><?php the_sub_field('primary_heading'); ?></h1>
                                        <p class="subHeading"><?php the_sub_field('banner_description'); ?>
                                        </p>
                                        <button type="button" class="btn fp-btn fp-btn-orange showpopupmessage" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-message-form" data-tippy-trigger="click">KEEN TO HEAR MORE?</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if ($dropdown == 'Full background image with center form'): ?>
    <div id="banner" class="full_background_image_with_center_form">
        <?php if (have_rows('banner_slider')) : ?>
            <?php while (have_rows('banner_slider')) : the_row();
                $background_image = get_sub_field('banner_background'); ?>
                <?php if (have_rows('banner_content')) : while (have_rows('banner_content')) : the_row();
                        $desktop = get_sub_field('banner_right_desktop_image');
                        $tablet = get_sub_field('banner_right_tablet_image');
                        $mobile = get_sub_field('banner_right_mobile_image');
                ?>
                        <section class="banner whoWeAreSection" style="background-image:url('<?php echo $background_image['url']; ?>');">
                            <div class="container">
                                <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                                    <form class="fp-form" action="<?php echo get_home_url(); ?>/thank-you" method="POST">
                                        <div class="contact-us-form form-step-1 form-step">
                                            <h1>Find out how we can increase your revenue</h1>
                                            <p class="text-center text-white mb-4">Whether its generating high-quality leads & sales in just 24 hours or growing your revenue with <br class="d-none d-lg-block">  exceptional SEO, speak with Hong Kong’s highest rated marketing agency.</p>
                                            <!-- Testimonial Row -->
                                            <div class="row contact-page-review-row">
                                                <div class="col-12 col-md-4 offset-md-2">
                                                    <div class="testimonial">
                                                        <div class="stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                        </div>
                                                        <div class="text">
                                                            “They continually exceeded <br>
                                                            expectations.”<br>
                                                            <strong>-Zoe</strong>
                                                            <img src="/wp-content/themes/firstpage/assets/img/whirlpool-logo-white.png" width="250px" height="60px" style="object-fit: contain; margin-top: 15px;" alt="Find out how First Page helped Whirlpool grow traffic">
                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="testimonial">
                                                        <div class="stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                        </div>
                                                        <div class="text">
                                                            “Highly responsive and <br>
                                                            accommodating.”<br>
                                                            <strong>-Erica</strong>
                                                            <img src="/wp-content/themes/firstpage/assets/img/mothercare-logo-white.png" width="250px" height="60px" style="object-fit: contain; margin-top: 15px;" alt="Find out how First Page helped Mothercare grow brand awareness">
                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" class="form-control" name="lead_name" placeholder="First Name*" required="" />
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="tel" class="form-control" name="lead_phone" placeholder="Phone*" required="" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <input type="email" class="form-control" name="lead_email" placeholder="Email*" data-parsley-error-message="Please enter a valid email address" data-parsley-trigger="change" required="" />
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" class="form-control" name="lead_website" placeholder="Website" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="lead_message" rows="6" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <input type="hidden" name="lead_formname" value="Contact" />
                                                        <input type="hidden" name="lead_language" value="en" />
                                                        <input type="hidden" name="lead_formtype" value="hs_quote_form" />
                                                        <button type="submit" data-title="Contact Us Form" class="btn fp-btn fp-btn-orange form-submit buttonFormClick" onclick="ga('send','event', {'eventCategory': 'Form','eventAction': 'Click', 'eventLabel': 'Contact Us'});">Yes, <span class="d-none d-md-inline">I want to</span> grow my business</button>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="d-none d-md-block center-block m-auto pt-4" alt="" style="width: 100%; max-width: 640px;"/>
                                                    <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="d-block d-md-none center-block m-auto pt-4" alt="" style="width: 100%; max-width: 640px;"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-thankyou">
                                            <h2 class="bold wide">Yes! Welcome to more leads, sales &amp; success online.</h2>
                                            <h3 class="small">Your Digital Growth Specialist will be in touch within 48 hours. Alternatively, for an instant chat, please call <a href="tel:{{ site_phone|replace({' ':''}) }}" class="text-nowrap">{{ site_phone }}</a></h3>
                                        </div>
                                    </form>
                                <?php endif; ?>

                                <?php if (ICL_LANGUAGE_CODE == 'zh') : ?>
                                    <form class="fp-form" action="<?php echo get_home_url(); ?>thank-you" method="POST">
                                        <div class="contact-us-form form-step-1 form-step">
                                            <h1>了解我們如何助您增加收入</h1>
                                            <p class="text-center text-white mb-4">我們是香港頂尖的數碼營銷專家！無論您是想在短短一日內，開發大量高質素的潛在客戶及促成銷售；<br class="d-none d-lg-block">還是以優秀的SEO推動銷售增長，歡迎您與隨時我們聯絡。</p>
                                            <!-- Testimonial Row -->
                                            <div class="row contact-page-review-row">
                                                <div class="col-12 col-md-4 offset-md-2">
                                                    <div class="testimonial">
                                                        <div class="stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                        </div>
                                                        <div class="text">
                                                            “他們的表現一如既往的令人驚豔。”<br>
                                                            <strong>-Zoe</strong>
                                                            <img src="/wp-content/themes/firstpage/assets/img/whirlpool-logo-white.png" width="250px" height="60px" style="object-fit: contain; margin-top: 15px;" alt="Find out how First Page helped Whirlpool grow traffic">
                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="testimonial">
                                                        <div class="stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                            <img src="/wp-content/themes/firstpage/assets/img/icon-star.png" srcset="/wp-content/themes/firstpage/assets/img/icon-star@2x.png 2x" alt="Five Stars">
                                                        </div>
                                                        <div class="text">
                                                            “積極提供協助及非常願意滿足客戶需要。”<br>
                                                            <strong>-Erica</strong>
                                                            <img src="/wp-content/themes/firstpage/assets/img/mothercare-logo-white.png" width="250px" height="60px" style="object-fit: contain; margin-top: 15px;" alt="Find out how First Page helped Mothercare grow brand awareness">
                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" class="form-control" name="lead_name" placeholder="名稱*" required="" />
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="tel" class="form-control" name="lead_phone" placeholder="聯絡電話*" required="" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <input type="email" class="form-control" name="lead_email" placeholder="電郵*" data-parsley-error-message="Please enter a valid email address" data-parsley-trigger="change" required="" />
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" class="form-control" name="lead_website" placeholder="網站" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="lead_message" rows="6" placeholder="留言"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <input type="hidden" name="lead_formname" value="Contact" />
                                                        <input type="hidden" name="lead_language" value="en" />
                                                        <input type="hidden" name="lead_formtype" value="hs_quote_form" />
                                                        <button type="submit" class="btn fp-btn fp-btn-orange form-submit" onclick="ga('send','event', {'eventCategory': 'Form','eventAction': 'Click', 'eventLabel': 'Contact Us'});">我想要擴展業務</button>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="d-none d-md-block center-block m-auto pt-4" alt="" style="width: 100%; max-width: 640px;"/>
                                                    <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="d-block d-md-none center-block m-auto pt-4" alt="" style="width: 100%; max-width: 640px;"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-thankyou">
                                            <h2 class="bold wide">Yes! Welcome to more leads, sales &amp; success online.</h2>
                                            <h3 class="small">Your Digital Growth Specialist will be in touch within 48 hours. Alternatively, for an instant chat, please call <a href="tel:{{ site_phone|replace({' ':''}) }}" class="text-nowrap">{{ site_phone }}</a></h3>
                                        </div> -->
                                    </form>
                                <?php endif; ?>

                            </div>
                        </section>
                <?php endwhile;
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<div id="pop-up-message-form" style="display: none;">
    <div class="embed-popup-message-form">
        <div class="proposal-popup">
            <!-- Free Proposal Form -->
            <!-- English -->
            <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                <form class="fp-form" action="<?php echo get_site_url(); ?>/thank-you" method="POST">
                    <span class="h2">Enter your details</span>
                    <div class="form-mid row">
                        <div class="col-12 mb-2">
                            <input type="text" class="form-control" name="lead_name" placeholder="First Name*" required="" />
                        </div>
                        <div class="col-12 mb-2">
                            <input type="tel" class="form-control" name="lead_phone" placeholder="Phone*" required="" />
                        </div>
                        <div class="col-12 mb-2">
                            <input type="email" class="form-control" name="lead_email" placeholder="Email*" data-parsley-error-message="Please enter a valid email address" data-parsley-trigger="change" required="" />
                        </div>
                        <div class="col-12 mb-2">
                            <textarea class="form-control" name="lead_message" rows="5" placeholder="Message*"></textarea>
                        </div>

                        <div class="col-12 mt-2">
                            <input type="hidden" name="lead_formname" value="" />
                            <input type="hidden" name="lead_language" value="en" />
                            <input type="hidden" name="lead_formtype" value="" />
                            <button type="submit" class="form-control btn fp-btn fp-btn-orange fp-btn-shadow">GET A FREE PROPOSAL</button>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
            <!-- English ends -->
            <!-- Chinese -->
            <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                <form class="fp-form" action="<?php echo get_site_url(); ?>/thank-you" method="POST">
                    <span class="h2">請輸入您的資料。</span>
                    <div class="form-mid row">
                        <div class="col-12 mb-2">
                            <input type="text" class="form-control" name="lead_name" placeholder="名字*" required="" />
                        </div>
                        <div class="col-12 mb-2">
                            <input type="tel" class="form-control" name="lead_phone" placeholder="電話*" required="" />
                        </div>
                        <div class="col-12 mb-2">
                            <input type="email" class="form-control" name="lead_email" placeholder="電郵*" data-parsley-error-message="請輸入有效的電子郵件地址" data-parsley-trigger="change" required="" />
                        </div>
                        <div class="col-12 mb-2">
                            <textarea class="form-control" name="lead_message" rows="5" placeholder="留言*"></textarea>
                        </div>

                        <div class="col-12 mt-2">
                            <input type="hidden" name="lead_formname" value="" />
                            <input type="hidden" name="lead_language" value="en" />
                            <input type="hidden" name="lead_formtype" value="" />
                            <button type="submit" class="form-control btn fp-btn fp-btn-orange fp-btn-shadow">索取免費報價</button>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
            <!-- Chinese ends -->
            <!-- End of Form -->
        </div>
    </div>
</div>

<script>
    tippy(".showpopupmessage", {
        html: ".embed-popup-message-form",
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