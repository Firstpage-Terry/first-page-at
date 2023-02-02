<?php

$background = get_sub_field('background');
$animation = get_sub_field('animation');
$animation = $animation ? " wow {$animation} " : '';
$margin = get_sub_field('margin');
$padding = get_sub_field('padding');
$customClass = get_sub_field('custom_class');
$layout = get_sub_field('layout');

?>

<?php if($layout == 'normal'): ?>
<div class="container">
<?php endif; ?>

<div class="<?php echo $animation; ?> block block--digital-solutions <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" data-<?php the_sub_field('layout'); ?>="true">

<?php if($layout == 'full-width'): ?>
    <div class="container">
<?php endif; ?>

    <div class="block__digital-solutions">

    <section class="section-services section-digital-solutions scroll-trigger">
		<div class="container">
			<div class="section-title">
				<h2><?php trans('Our Digital Solutions', '我們的網絡營銷解決方案') ?>
				</h2>
                <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                    <span class="text-center text-sm-center" style="margin:auto !important;">Get a <span class="FP-p-normal" style="display:inline; margin:0 !important; padding: 0 !important;">digital marketing agency</span>  with proven results.</span>
                <?php endif; ?>
                <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                    <span class="text-center text-sm-center" style="margin:auto !important;">獲得結果可靠的數字營銷機構。</span>
                <?php endif; ?>
			</div>
			<div class="row scroll-trigger-tar">
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="card">
						<img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/icon-full-funnel.png" width="100" height="100" alt="SEO">
						<div class="card-body">
							<h3 class="card-title"><?php trans('Lead-Gen Funnels', '潛在客戶') ?> <br class="d-none d-lg-block">
                            <?php trans('That Simply Work', '開發漏斗') ?></h3>
							<p class="card-text text-center text-md-left"><?php trans('Target audiences that convert thanks to an insightful market research strategy.', '花時間了解您的目標受眾，並從有價值的潛在客戶中得益。') ?></p>
						</div>
						<div class="card-footer">
                            <button type="button" class="btn fp-btn fp-btn-orange showpopup" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-form" data-tippy-trigger="click" style="background: none !important; color:#F85255 !important; box-shadow:none;"><?php trans('Learn more', '了解更多') ?></button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="card">
						<img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/icon-digital-brand-awareness.png" width="100" height="100" alt="SEO">
						<div class="card-body">
                        <h3 class="card-title"><?php trans('Grow Your ', '數碼品牌') ?> <br class="d-none d-lg-block">
                            <?php trans('Brand Awareness', '知名度') ?></h3>
							<p class="card-text text-center text-md-left"><?php trans('Make your brand the first on peoples minds with best-in-class digital marketing systems.', '透過有效的數碼營銷策略，建立您的品牌知名度。') ?></p>
						</div>
						<div class="card-footer">
                        <button type="button" class="btn fp-btn fp-btn-orange showpopup" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-form" data-tippy-trigger="click" style="background: none !important; color:#F85255 !important; box-shadow:none;"><?php trans('Learn more', '了解更多') ?></button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="card">
						<img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/icon-e-commerce-sales.png" width="100" height="100" alt="SEO">
						<div class="card-body">
                        <h3 class="card-title"><?php trans('Expand Your ', '電子商') ?> <br class="d-none d-lg-block">
                            <?php trans('E-Comm Business', '務銷售') ?></h3>
							<p class="card-text text-center text-md-left"><?php trans('Compete with every rival and outgrow your competitors by harnessing modern e-commerce marketing.', '學習如何通過有效的電子商務營銷，與最優秀的企業競爭，同時加快業務增長的速度。') ?></p>
						</div>
						<div class="card-footer">
                        <button type="button" class="btn fp-btn fp-btn-orange showpopup" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-form" data-tippy-trigger="click" style="background: none !important; color:#F85255 !important; box-shadow:none;"><?php trans('Learn more', '了解更多') ?></button>
						</div>
					</div>
				</div>
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


<div id="pop-up-form" style="display: none;">
  <div class="digital-solutions-popup-form">
    <div class="proposal-popup">
        <!-- Free Proposal Form -->
        <form class="fp-form" action="/thank-you" method="POST">
            <span class="h2 mb-4 d-block"><?php trans('Enter your details', '請輸入您的資料。') ?></span>
            <div class="form-mid row">
                <div class="col-12 mb-2">
                    <input type="text" class="form-control" name="lead_name" placeholder="<?php trans('First Name*', '名字*') ?>" required/>
                </div>
                <div class="col-12 mb-2">
                    <input type="tel" class="form-control" name="lead_phone" placeholder="<?php trans('Phone*', '電話*') ?>" required data-parsley-error-message="<?php trans('Please enter a phone number', '') ?>" data-parsley-sgtel data-parsley-trigger="change"/>
                </div>
                <div class="col-12 mb-2">
                    <input type="email" class="form-control" name="lead_email" placeholder="<?php trans('Email*', '電郵*') ?>" data-parsley-error-message="<?php trans('Please enter a valid email address', '') ?>" data-parsley-trigger="change" required />
                </div>
                <div class="col-12 mb-2">
                    <input type="text" class="form-control" name="lead_website" placeholder="<?php trans('Website', '網站') ?>" data-parsley-website-check />
                </div>

                <div class="col-12 mt-2">
                    <input type="hidden" name="lead_formname" value="" />
                    <input type="hidden" name="lead_language" value="en" />
                    <input type="hidden" name="lead_formtype" value="" />
                    <button id="popup-submit" type="submit" class="form-control btn fp-btn fp-btn-orange fp-btn-shadow" ><?php trans('GET A FREE PROPOSAL', '索取免費報價') ?></button>
                </div>
            </div>
        </form>
        <!-- End of Form -->
    </div>
</div>
</div>

<script>
	tippy(".showpopup", {
    html: ".digital-solutions-popup-form",
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