<?php

$background = get_sub_field('background');
$animation = get_sub_field('animation');
$animation = $animation ? " wow {$animation} " : '';
$margin = get_sub_field('margin');
$padding = get_sub_field('padding');
$customClass = get_sub_field('custom_class');
$layout = get_sub_field('layout');


$dropdown = get_sub_field('dropdown_for_featured_in_block');


$background_url = '';
if ( $background['image'] )
    $background_url = wp_get_attachment_image_url( $background['image'], 'full' );

?>

<?php if($layout == 'normal'): ?>
<div class="container">
<?php endif; ?>

<div class="<?php echo $animation; ?> block block--text <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">

<?php if($layout == 'full-width'): ?>
    <div class="container">
<?php endif; ?>

    <div class="block__featured_in">
    <style>
    @media (min-width: 768px) {
        section.section-featured-in {
            padding-top: 50px;
        }
    }
    </style>

    <section class="section-featured-in scroll-trigger">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <?php if($dropdown != "Brand Experience" || $dropdown == null): ?>
                <div class="col-12 section-title">
                    <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                        <p class="p-tag-h2-style text-center">Featured in</p>
                    <?php endif; ?>
                    <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                        <p class="p-tag-h2-style text-center">媒體報導</p>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <div style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/hk_img_featured_in_logos.png); background-size: 100%; width: 100%; height:300px; background-repeat:no-repeat;" class="d-none d-md-inline-block scroll-trigger-tar"></div>
                    <div style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/hk_img_featured_in_logos_mob@2x.png); background-size: 100%; width: 100%; height:250px; background-repeat:no-repeat;" class="d-md-none d-block mx-auto scroll-trigger-tar"></div>
                </div>
                <?php endif; ?>

                <?php if($dropdown == "Brand Experience"): ?>
                <div class="col-12 col-xl-3">
                    <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                        <p class="p-tag-h2-style text-center text-xl-left">BRAND EXPERIENCE</p>
                    <?php endif; ?>
                    <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                        <p class="p-tag-h2-style text-center text-xl-left">我們與各個知名品牌合作</p>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-xl-9">
                    <div style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/img-brand_exp_logos.png); background-size: 100%; width: 100%; height:300px; background-repeat:no-repeat;" class="d-none d-md-inline-block scroll-trigger-tar"></div>
                    <div style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/img-brand_exp_logos.png); background-size: 100%; width: 100%; height:250px; background-repeat:no-repeat;" class="d-md-none d-block mx-auto scroll-trigger-tar"></div>
                    <!-- <img src="/wp-content/uploads/2021/11/img_featured_in_news_mob.svg" class="img-fluid d-md-none d-block m-auto" alt="Featured in" /> -->
                    <!-- <img src="/wp-content/uploads/2021/11/img_featured_in_news.svg" class="img-fluid d-none d-md-inline-block" alt="Featured in" /> -->
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>


    </div>
    
<?php if($layout == 'full-width'): ?>
    </div>
<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
</div>
<?php endif; ?>
