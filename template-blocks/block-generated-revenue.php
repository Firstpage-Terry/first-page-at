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

    <div class="<?php echo $animation; ?> block block--text <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>"
        style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;"
        data-<?php the_sub_field('layout'); ?>="true">

        <?php if($layout == 'full-width'): ?>
        <div class="container">
            <?php endif; ?>

            <div class="block__generated_revenue scroll-trigger">
                <?php 
                if( ICL_LANGUAGE_CODE == "en" ) { ?>
                <!--BEGIN custom HTML code below -->
                <section class="section-features section-grey">
                    <div class="container">
                        <div class="row scroll-trigger-tar">
                            <div class="col-12 col-md-4">
                                <img src="/wp-content/themes/firstpage/assets/img/icn_revenue.svg" width="83" height="80"
                                    alt="First Page">
                                <h5>Generated over $3.8+ billion
                                    <br class="d-none d-lg-block">
                                    in sales for our clients
                                </h5>
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="/wp-content/themes/firstpage/assets/img/img_google-reviews.svg" width="198"
                                    height="80" alt="First Page">
                                <h5>500+ Google reviews globally
                                    <br class="d-none d-lg-block">
                                    with a 4.9/5 rating
                                </h5>
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="/wp-content/themes/firstpage/assets/img/icn_awards.svg" width="73" height="80"
                                    alt="First Page">
                                <h5>Won 14 digital awards
                                    <br class="d-none d-lg-block">
                                    and counting
                                </h5>
                            </div>
                        </div>
                    </div>
                </section>
                <!--END custom HTML code below -->
                    
                <?php } else { ?>
                <!--BEGIN custom HTML code below -->
                <section class="section-features section-grey">
                    <div class="container">
                        <div class="row scroll-trigger-tar">
                            <div class="col-12 col-md-4">
                                <img src="/wp-content/themes/firstpage/assets/img/icn_revenue.svg" width="83" height="80"
                                    alt="First Page">
                                <h5>為我們的客戶創造了 
                                    <br class="d-none d-lg-block">
                                    38 億元的收入
                                </h5>
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="/wp-content/themes/firstpage/assets/img/img_google-reviews.svg" width="198"
                                    height="80" alt="First Page">
                                <h5>Google 4.9星評分
                                    <br class="d-none d-lg-block">
                                    （全球多達 500 條評論）
                                </h5>
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="/wp-content/themes/firstpage/assets/img/icn_awards.svg" width="73" height="80"
                                    alt="First Page">
                                <h5>贏得 14 個數位獎項
                                    <br class="d-none d-lg-block">
                                    （並將持續增加）
                                </h5>
                            </div>
                        </div>
                    </div>
                </section>
                <!--END custom HTML code below -->
                
                <?php } ?>


            </div>

            <?php if($layout == 'full-width'): ?>
        </div>
        <?php endif; ?>

    </div>

    <?php if($layout = 'normal'): ?>
</div>
<?php endif; ?>