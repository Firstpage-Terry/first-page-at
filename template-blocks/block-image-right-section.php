<?php

$background = get_sub_field('background');
$animation = get_sub_field('animation');
$animation = $animation ? " wow {$animation} " : '';
$margin = get_sub_field('margin');
$padding = get_sub_field('padding');
$customClass = get_sub_field('custom_class');
$layout = get_sub_field('layout');

$background_url = '';
if ($background['image'])
    $background_url = wp_get_attachment_image_url($background['image'], 'full');

?>

<?php if ($layout == 'normal') : ?>
    <div class="container">
    <?php endif; ?>

    <div class="<?php echo $animation; ?> block block--image-right <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">

        <?php if ($layout == 'full-width') : ?>
            <div class="container">
            <?php endif; ?>

            <div class="block-image-right-section scroll-trigger">
                <section class="section-paragraph section-paragraph-home-2">
                    <div class="row no-gutters align-items-center flex-column-reverse flex-lg-row flex-lg-row-reverse">
                        <div class="col-12 col-md-6 image-container-right">
                            <?php
                            $image_right = get_sub_field('right_long_image');
                            if (!empty($image_right)) : ?>
                                <?php // var_dump($image_right); 
                                ?>
                                <img src="<?php echo $image_right['url']; ?>" srcset="<?php echo $image_right['url']; ?>, <?php echo $image_right['url']; ?>" class="img-fluid d-xxl-inline-block d-none d-lg-inline-block" alt="<?php strip_tags(the_sub_field('long_image_heading')); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-md-6 text-container scroll-trigger-tar">
                            <?php if(get_sub_field('long_image_right_tag_selector') == "H1"): ?>
                                    <h1 class="h1 font-weight-bold mb-3"><?php the_sub_field('long_image_heading'); ?></h1>
                                <?php else : ?>
                                    <h2 class=""><?php the_sub_field('long_image_heading'); ?></h2>
                            <?php endif; ?>
                            <?php
                            $image = get_sub_field('right_long_image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo $image['url']; ?>" srcset="<?php echo $image['url']; ?>, <?php echo $image['url']; ?>" class="img-fluid d-xxl-inline-block d-block d-lg-none m-auto pb-4" alt="<?php strip_tags(the_sub_field('long_image_heading')); ?>" />
                            <?php endif; ?>
                            <div class="text-center-content">
                                <?php the_sub_field('long_image_content'); ?>
                            </div>
                            <?php if (get_sub_field('button_text')) : ?>
                                <button type="button" class="btn fp-btn fp-btn-orange showpopup" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-form" data-tippy-trigger="click"><?php the_sub_field('button_text'); ?></button>
                            <?php endif; ?>
                            <?php if (!get_sub_field('button_text')) : ?>
                                <?php if (!is_page(array('seo-audit', 'google-ads-audit', 'competitor-audit', 'facebook-interest-finder', 'seo-roi-calculator', 'ppc-roi-calculator'))) : ?>
                                    <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                                        <button type="button" class="btn fp-btn fp-btn-orange showpopup" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-form" data-tippy-trigger="click">GET A FREE QUOTE</button>
                                    <?php endif; ?>
                                    <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                                        <button type="button" class="btn fp-btn fp-btn-orange showpopup" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-form" data-tippy-trigger="click">??????????????????</button>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>

            <?php if ($layout == 'full-width') : ?>
            </div>
        <?php endif; ?>

    </div>

    <?php if ($layout = 'normal') : ?>
    </div>
<?php endif; ?>

<div id="pop-up-form" style="display: none;">
    <div class="embed-popup-form">
        <div class="proposal-popup">
            <!-- Free Proposal Form -->
            <!-- English -->
            <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                <form class="fp-form" action="<?php echo get_home_url(); ?>/thank-you" method="POST">
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
                            <input type="text" class="form-control" name="lead_website" placeholder="Website" data-parsley-website-check />
                        </div>

                        <div class="col-12 mt-2">
                            <input type="hidden" name="lead_formname" value="" />
                            <input type="hidden" name="lead_language" value="en" />
                            <input type="hidden" name="lead_formtype" value="" />
                            <button type="submit" class="form-control btn fp-btn fp-btn-orange fp-btn-shadow">GET A FREE QUOTE</button>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
            <!-- English ends -->
            <!-- Chinese -->
            <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                <form class="fp-form" action="<?php echo get_home_url(); ?>thank-you" method="POST">
                    <span class="h2">????????????????????????</span>
                    <div class="form-mid row">
                        <div class="col-12 mb-2">
                            <input type="text" class="form-control" name="lead_name" placeholder="??????*" required="" />
                        </div>
                        <div class="col-12 mb-2">
                            <input type="tel" class="form-control" name="lead_phone" placeholder="??????*" required="" />
                        </div>
                        <div class="col-12 mb-2">
                            <input type="email" class="form-control" name="lead_email" placeholder="??????*" data-parsley-error-message="????????????????????????????????????" data-parsley-trigger="change" required="" />
                        </div>
                        <div class="col-12 mb-2">
                            <input type="text" class="form-control" name="lead_website" placeholder="??????" data-parsley-website-check />
                        </div>

                        <div class="col-12 mt-2">
                            <input type="hidden" name="lead_formname" value="" />
                            <input type="hidden" name="lead_language" value="en" />
                            <input type="hidden" name="lead_formtype" value="" />
                            <button type="submit" class="form-control btn fp-btn fp-btn-orange fp-btn-shadow">??????????????????</button>
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