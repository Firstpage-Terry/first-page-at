<?php

/**
 * Template Name: Who We are
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

<section id="content" class="site__content p-0" role="main">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-blocks/block', 'loop-content'); ?>
    <?php endwhile; ?>
</section>

<section class="staff_images container">
    <div class="staff row">
        <?php if (have_rows('who_we_are_repeater')) : while (have_rows('who_we_are_repeater')) : the_row(); ?>
                <div class="testimonialHolder col-md-3">
                    <?php
                    $who_we_are_profile_image = get_sub_field('who_we_are_profile_image');
                    $who_we_are_profile_name = get_sub_field('who_we_are_profile_name');
                    $who_we_are_profile_job_title = get_sub_field('who_we_are_profile_job_title');
                    ?>
                    <div class="d-flex flex-column">
                        <img src="<?php echo $who_we_are_profile_image['url']; ?>" alt="<?php echo $who_we_are_profile_image['alt']; ?>" class="img-responsive" style="border-radius: 100%; max-height: 250px; min-height: 250px;">
                        <div class="p-4">
                            <span class="h5 font-weight-bold"><?php echo $who_we_are_profile_name; ?></span>
                            <span class="h5"><?php echo $who_we_are_profile_job_title; ?></span>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div> <!-- testimonial slider -->
</section>


<div id="pop-up-message-form" style="display: none;">
    <div class="embed-popup-message-form">
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
                <form class="fp-form" action="<?php echo get_home_url(); ?>thank-you" method="POST">
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


<?php get_footer(); ?>