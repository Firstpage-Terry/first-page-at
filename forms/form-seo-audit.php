<?php $form_page = 'SEO Audit'; ?>
<?php $form_hs = 'hs_seo_audit_form'; ?>
<?php $form_thankyou = 'thank-you'; ?>
<?php $form_website_placeholder = ((empty($form_website_placeholder)) ? ('Enter your website') : ($form_website_placeholder)); ?>


<div class="quote-form quote-form-big">
	<!-- Quote Form -->
	<!-- English -->
	<?php if (ICL_LANGUAGE_CODE == "en") : ?>
		<form class="fp-form" id="seo_audit_form" action="<?php echo get_home_url(); ?>/thank-you" method="POST">
			<div class="form-step-1 form-step">
				<div class="input-group">
					<input type="text" class="form-control" name="lead_website" placeholder='Enter your website' required="" data-parsley-website-check />
					<div class="input-group-btn">
						<button type="button" class="btn fp-btn fp-btn-orange form-continue">Get A Free Audit</button>
					</div>
				</div>
			</div>
			<div class="form-step-2 form-step">
				<p class="text-center step-2-title">Please enter your details.</p>
				<div class="row">
					<div class="col-12 col-md-6">
						<input type="text" class="form-control" name="lead_name" placeholder="First Name*" required="" />
					</div>
					<div class="col-12 col-md-6">
						<input type="tel" class="form-control" name="lead_phone" placeholder="Phone*" required="" />
					</div>
					<div class="col-12 col-md-6">
						<input type="email" class="form-control" name="lead_email" placeholder="Email*" data-parsley-error-message="Please enter a valid email address" data-parsley-trigger="change" required="" />
					</div>
					<div class="col-md-12">
						<input type="hidden" name="lead_formname" value="<?php echo $form_page; ?>" />
						<input type="hidden" name="lead_language" value="en" />
						<input type="hidden" name="lead_formtype" value="<?php echo $form_hs; ?>" />
						<button type="submit" data-title="Main Banner Get A Free SEO Audit" class="form-control btn fp-btn fp-btn-orange buttonFormClick">Get My Free Audit</button>
					</div>
				</div>
			</div>
			<div class="form-thankyou">
				<p class="bold-lg">Yes! Welcome to more<br />leads, sales &amp; success online.</p>
				<p class="small">Your Digital Growth Specialist will be in touch within 48 hours. Alternatively, for an instant chat, please call
					<a href="tel:<?php the_field('phone_number', 'option'); ?>>" class="text-nowrap"><?php the_field('phone_number', 'option'); ?></a>
				</p>
			</div>
		</form>
	<?php endif; ?>
	<!-- English ends -->
	<!-- Chinese -->
	<?php if (ICL_LANGUAGE_CODE == "zh") : ?>
		<form class="fp-form" id="seo_audit_form" action="<?php echo get_home_url(); ?>thank-you" method="POST">
			<div class="form-step-1 form-step">
				<div class="input-group">
					<input type="text" class="form-control" name="lead_website" placeholder='??????????????????' required="" data-parsley-website-check />
					<div class="input-group-btn">
						<button type="button" class="btn fp-btn fp-btn-orange form-continue">??????????????????</button>
					</div>
				</div>
			</div>
			<div class="form-step-2 form-step">
				<p class="text-center step-2-title">????????????????????????</p>
				<div class="row">
					<div class="col-12 col-md-6">
						<input type="text" class="form-control" name="lead_name" placeholder="??????*" required="" />
					</div>
					<div class="col-12 col-md-6">
						<input type="tel" class="form-control" name="lead_phone" placeholder="??????*" required="" />
					</div>
					<div class="col-12 col-md-6">
						<input type="email" class="form-control" name="lead_email" placeholder="??????*" data-parsley-error-message="????????????????????????????????????" data-parsley-trigger="change" required="" />
					</div>
					<div class="col-md-12">
						<input type="hidden" name="lead_formname" value="<?php echo $form_page; ?>" />
						<input type="hidden" name="lead_language" value="en" />
						<input type="hidden" name="lead_formtype" value="<?php echo $form_hs; ?>" />
						<button type="submit" data-title="Main Banner Get A Free SEO Audit" class="form-control btn fp-btn fp-btn-orange buttonFormClick">??????????????????</button>
					</div>
				</div>
			</div>
			<div class="form-thankyou">
				<p class="bold-lg">????????????????????????????????????????????????????????????</p>
				<p class="small">??????????????????????????????48?????????????????????????????????????????????????????????
					<a href="tel:<?php the_field('phone_number', 'option'); ?>>" class="text-nowrap"><?php the_field('phone_number', 'option'); ?></a>
				</p>
			</div>
		</form>
	<?php endif; ?>
	<!-- Chinese ends -->
	<!-- End of Form -->
</div>