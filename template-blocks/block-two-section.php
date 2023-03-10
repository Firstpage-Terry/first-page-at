<style>
    @media(max-width:768px) {
        .display-none {
            display: none !important;
        }
    }
</style>

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

$two_section_heading = get_sub_field('two_section_block_heading');


$image_desktop = get_sub_field('two_section_block_image_desktop');
$image_tablet = get_sub_field('two_section_block_image_tablet');
$image_mobile = get_sub_field('two_section_block_image_mobile');

$two_section_content = get_sub_field('two_section_block_content');
$two_section_cta = get_sub_field('two_section_block_cta');

$two_section_block_right_or_left = get_sub_field('two_section_block_right_or_left');
?>

<?php if ($layout == 'normal') : ?>
    <div class="container">
    <?php endif; ?>

    <div class="<?php echo $animation; ?> block block--two-section <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">

        <?php if ($layout == 'full-width') : ?>
            <div class="container">
            <?php endif; ?>

            <div class="block__two_section scroll-trigger">
                <section class="section-paragraph">
                    <h2 class="d-block d-md-block d-lg-none container-padding text-center"><?php echo $two_section_heading; ?></h2>
                    <div class="row no-gutters flex-column-reverse flex-md-row <?php if ($two_section_block_right_or_left) : echo 'flex-md-row-reverse';
                                                                                endif; ?>">
                        <div class="col-12 col-lg-6 image-container-right d-flex flex-column justify-content-center align-items-center p-4 display-none">
                            <img src="<?php echo ($image_desktop['url']); ?>" class="img-fluid d-none d-lg-inline-block" alt="<?php echo strip_tags($two_section_heading); ?>" style="width:450px;" />
                            <img src="<?php echo ($image_tablet['url']); ?>" class="img-fluid d-none d-md-inline-block d-lg-none" alt="<?php echo strip_tags($two_section_heading); ?>" style="width:450px;" />
                        </div>
                        <div class="col-12 col-lg-6 p-0 text-container text-container-seo-new d-flex flex-column d-md-block d-lg-block scroll-trigger-tar">
                        <!-- Header Tag -->
                        <?php if(get_sub_field('title_tag_selector') == "H1"): ?>
                            <h1 class="d-none d-md-none d-lg-block">
                                <?php echo $two_section_heading; ?>
                            </h1>
                        <?php else : ?>
                            <h2 class="d-none d-md-none d-lg-block">
                                <?php echo $two_section_heading; ?>
                            </h2>
                        <?php endif; ?>
                        <!--  -->
                            <img src="<?php echo ($image_mobile['url']); ?>" class="img-fluid d-block d-lg-none mx-auto pb-4" alt="<?php echo strip_tags($two_section_heading); ?>" style="width:100%;" />
                            <?php if ($two_section_content) : ?>
                                <div class="text-center text-lg-left">
                                    <?php echo $two_section_content; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($two_section_cta) : ?>
                                <button type="button" class="btn fp-btn fp-btn-orange showpopup" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-form" data-tippy-trigger="click">
                                    <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                                        GET A FREE QUOTE
                                    <?php endif; ?>
                                    <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                                        ??????????????????
                                    <?php endif; ?>
                                </button>
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