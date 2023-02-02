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

<div class="<?php echo $animation; ?> block block--text <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: rgba(255, 82, 84, 1) !important;; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">

<?php if($layout == 'full-width'): ?>
    <div class="container">
<?php endif; ?>

    <div class="block__web_conversion scroll-trigger" style="padding: 4rem 0 !important;">
        <div class="section-letstalk section-orange section-letstalk-new scroll-trigger-tar">
            <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                <div class="container text-center text-white">
                <p class="mb-3 p-tag-h2-style"><strong>Claim your 100% free REVENUE GROWTH strategy session with an experienced digital strategist valued at <?php echo get_sub_field('value'); ?>HKD.</strong></p>
                <p class="mb-4" style="font-size:25px;font-weight:normal;line-height:35px;">We outline foolproof strategies for significantly increasing website traffic and revenue, even in difficult economic times.</p>
                <p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">Hurry! Limited spots available.</p>
                <a href="<?php echo get_home_url(); ?>/free-growth-strategy" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session free-session-btn">GET MY FREE REVENUE GROWTH SECTION</a>
            </div>
            <?php endif; ?>
            <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                <div class="container text-center text-white">
                <p class="mb-3 p-tag-h2-style"><strong>免費獲取由經驗豐富的數碼策略專家提供的營業額增長策略課程（價值HKD<?php echo get_sub_field('value'); ?>）。</strong></p>
                <p class="mb-4" style="font-size:25px;font-weight:normal;line-height:35px;">我們將會教授於經濟不景氣期間，能顯著提升網站流量及營業額的策略。</p>
                <p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">名額有限，立即報名！</p>
                <a href="<?php echo get_home_url(); ?>free-growth-strategy" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session free-session-btn">獲取我的免費營業額增長課程</a>
            </div>
            <?php endif; ?>
        </div>


    </div>
    
<?php if($layout == 'full-width'): ?>
    </div>
<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
</div>
<?php endif; ?>
