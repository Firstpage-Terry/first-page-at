<?php

$background = get_sub_field('background');
$animation = get_sub_field('animation');
$animation = $animation ? " wow {$animation} " : '';
$margin = get_sub_field('margin');
$padding = get_sub_field('padding');
$customClass = get_sub_field('custom_class');
$layout = get_sub_field('layout');

$background_url = '';
if ( $background['image'] )
    $background_url = wp_get_attachment_image_url( $background['image'], 'full' );

?>

<?php if($layout == 'normal'): ?>
<div class="container">
    <?php endif; ?>

    <div class="<?php echo $animation; ?> block block__great_brands <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>"
        style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;"
        data-<?php the_sub_field('layout'); ?>="true">

        <?php if($layout == 'full-width'): ?>
        <div class="container">
            <?php endif; ?>

            <div class="block__great_brands">
                <section class="section-experience scroll-trigger">
                    <div class="container">
                        <div class="section-title">
                                <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                                    <p class="p-tag-h2-style">From start-ups to Fortune 500 companies, we work with brands to grow their revenue.</p>
                                <?php endif; ?>
                                <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                                    <p class="p-tag-h2-style">我們與不同類型的品牌合作，由初創企業到世界500強企業，為他們提升營業額。</p>
                                <?php endif; ?>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos_new_hk@2x-4.jpg" class="img-fluid scroll-trigger-tar" alt="We work with great brands of all sizes" />
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