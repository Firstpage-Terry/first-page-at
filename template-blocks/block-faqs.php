<?php

	$background = get_sub_field('background');
    $animation = get_sub_field('animation');
    $animation = $animation ? " wow {$animation} " : '';
	$margin = get_sub_field('margin');
	$padding = get_sub_field('padding');
	$customClass = get_sub_field('custom_class');
	$layout = get_sub_field('layout');

	$background_url = '';
	if ( $background['image'] ) {
        $background_url = wp_get_attachment_image_url( $background['image'], 'full' );
    }

    $faq_h1_heading = get_sub_field('faq_h1_heading');
	$faq_heading = get_sub_field('faq_heading');
	$faq_repeater = get_sub_field('faq_repeater');

	$i = 0;

	$faq_start = get_sub_field('multiple_faq_start');
	$faq_end = get_sub_field('multiple_faq_end');	
?>

<?php if($faq_start): ?>
<faqwrapper class="multiple_faq_wrapper" <?php if($faq_start){ echo 'itemscope itemtype="https://schema.org/FAQPage"';} ?>>
    <?php endif; ?>

    <?php if($layout == 'normal'): ?>
    <div class="container">
        <?php endif; ?>

        <div class="<?php echo $animation; ?> block block--faq <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>"
            style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;"
            data-<?php the_sub_field('layout'); ?>="true">

            <?php if($layout == 'full-width'): ?>
            <div class="container">
                <?php endif; ?>

                <?php if($faq_start ===  false && $faq_end === false): ?>
                <div class="block__faq">
                    <div class="faqBlock">
                        <section class="section-paragraph section-faqs">
                            <div class="container">
                                <h2 class="section-title"><?php echo $faq_heading; ?></h2>
                                <div itemscope itemtype="https://schema.org/FAQPage" class="row">


                                    <?php if ( have_rows('faq_repeater') ) : while ( have_rows('faq_repeater') ) : the_row(); ?>
                                    <?php
										$faq_question = get_sub_field('faq_question');
										$faq_question_no_space = str_replace(' ', '', $faq_question);
										$faq_question_id = preg_replace('/[^A-Za-z0-9\-]/', '', $faq_question_no_space); 
                                        $random_id = rand(1, 100);
										$faq_answer = get_sub_field('faq_answer');
								?>

                                    <div class="col-12 col-lg-6">
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                                            class="card">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                href="#Collapse<?php echo get_row_index(); ?><?php echo $random_id;  ?>">
                                                <h3 itemprop="name"><?php echo $faq_question; ?></h3>
                                            </div>
                                            <div itemscope itemprop="acceptedAnswer"
                                                itemtype="https://schema.org/Answer"
                                                id="Collapse<?php echo get_row_index(); ?><?php echo $random_id;  ?>" class="collapse">
                                                <div itemprop="text" class="card-body">
                                                    <?php echo $faq_answer; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; endif; ?>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <?php endif; ?>

                <?php if($faq_start): ?>
                <div class="block__faq">
                    <div class="faqBlock">

                        <section class="section-paragraph section-faqs">
                            <div class="container">
                                <? if ($faq_h1_heading) { ?>
                                    <h1 class="faq_h1 text-center">
                                        <?php echo $faq_h1_heading; ?>
                                    </h1>
                                <? } ?>
                                <h2 class="section-title"><?php echo $faq_heading; ?></h2>
                                <div class="row">


                                    <?php if ( have_rows('faq_repeater') ) : while ( have_rows('faq_repeater') ) : the_row(); ?>
                                    <?php
										$faq_question = get_sub_field('faq_question');
										$faq_question_no_space = str_replace(' ', '', $faq_question);
										$faq_question_id = preg_replace('/[^A-Za-z0-9\-]/', '', $faq_question_no_space); 
                                        $random_id = rand(1, 100);
										$faq_answer = get_sub_field('faq_answer');
								?>

                                    <div class="col-12 col-lg-6">
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                                            class="card">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                href="#Collapse<?php echo get_row_index(); ?><?php echo $random_id;  ?>">
                                                <h3 itemprop="name"><?php echo $faq_question; ?></h3>
                                            </div>
                                            <div itemscope itemprop="acceptedAnswer"
                                                itemtype="https://schema.org/Answer"
                                                id="Collapse<?php echo get_row_index(); ?><?php echo $random_id;  ?>" class="collapse">
                                                <div itemprop="text" class="card-body">
                                                    <?php echo $faq_answer; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; endif; ?>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <?php endif; ?>

                <?php if($faq_end): ?>
                <div class="block__faq">
                    <div class="faqBlock">

                        <section class="section-paragraph section-faqs">
                            <div class="container">
                                <? if ($faq_h1_heading) { ?>
                                    <h1 class="faq_h1 text-center">
                                        <?php echo $faq_h1_heading; ?>
                                    </h1>
                                <? } ?>
                                <h2 class="section-title"><?php echo $faq_heading; ?></h2>
                                <div class="row">


                                    <?php if ( have_rows('faq_repeater') ) : while ( have_rows('faq_repeater') ) : the_row(); ?>
                                    <?php
										$faq_question = get_sub_field('faq_question');
										$faq_question_no_space = str_replace(' ', '', $faq_question);
										$faq_question_id = preg_replace('/[^A-Za-z0-9\-]/', '', $faq_question_no_space); 
                                        $random_id = rand(1, 100);
										$faq_answer = get_sub_field('faq_answer');
								?>

                                    <div class="col-12 col-lg-6">
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                                            class="card">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                href="#Collapse<?php echo get_row_index(); ?><?php echo $random_id;  ?>"">
                                                <h3 itemprop="name"><?php echo $faq_question; ?></h3>
                                            </div>
                                            <div itemscope itemprop="acceptedAnswer"
                                                itemtype="https://schema.org/Answer"
                                                id="Collapse<?php echo get_row_index(); ?><?php echo $random_id;  ?>"" class="collapse">
                                                <div itemprop="text" class="card-body">
                                                    <?php echo $faq_answer; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; endif; ?>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <?php endif; ?>


                <?php if($layout == 'full-width'): ?>
            </div>
            <?php endif; ?>

        </div>

        <?php if($layout = 'normal'): ?>
    </div>
    <?php endif; ?>


    <?php if($faq_end): ?>
</faqwrapper>

<?php endif; ?>