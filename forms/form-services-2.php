<?php $form_page = ((empty($form_page)) ? ('General') : ($form_page)); ?>
<?php // $form_button = ((empty($form_button)) ? ('Get A Free Quote') : ($form_button)); ?>
<?php $form_hs = ((empty($form_hs)) ? ('hs_quote_form') : ($form_hs)); ?>
<?php $form_thankyou = ((empty($form_thankyou)) ? ('thank-you') : ($form_thankyou)); ?>
<?php $form_website_placeholder = ((empty($form_website_placeholder)) ? ('Enter your website') : ($form_website_placeholder)); ?>

<div class="quote-form quote-form-big pt-0">
	<!-- Quote Form -->
	<!-- English -->
	<?php if (ICL_LANGUAGE_CODE == "en") : ?>
		<form class="fp-form" action="<?php echo get_home_url(); ?>/thank-you" method="POST">
			<div class="form-step-1 form-step">
				<div class="input-group">
					<?php if (is_front_page()) :  ?>
						<div class="select-container form-control">
							<select class="form-control" name="lead_interest">
								<option value="I need more revenue for my business">I need more revenue for my business</option>
								<option value="I need more traffic to my website">I need more traffic to my website</option>
								<option value="I need more customers">I need more customers</option>
								<option value="I need more leads">I need more leads</option>
								<option value="I need more sales">I need more sales</option>
								<option value="I need help with brand awareness">I need help with brand awareness</option>
								<option value="All of the above">All of the above</option>
							</select>
						</div>
					<?php else : ?>
						<input type="text" class="form-control" name="lead_website" placeholder='Enter your website' required="" data-parsley-website-check />
					<?php endif; ?>
					<div class="input-group-btn">
						<button type="button" class="btn fp-btn fp-btn-orange form-continue">Get A Free Quote</button>
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
					<div class="col-12 col-md-6">
						<input type="text" class="form-control" name="lead_website" placeholder="Website" data-parsley-website-check />
					</div>
					<div class="col-md-12">
						<input type="hidden" name="lead_formname" value="<?php echo $form_page; ?>" />
						<input type="hidden" name="lead_language" value="en" />
						<input type="hidden" name="lead_formtype" value="<?php echo $form_hs; ?>" />
						<button type="submit" data-title="Main Banner Get A Free Quote" class="form-control btn fp-btn fp-btn-orange buttonFormClick">Get A Free Quote</button>
					</div>
				</div>
			</div>
			<div class="form-thankyou">
				<p class="bold-lg">Yes! Welcome to more<br />leads, sales &amp; success online.</p>
				<p class="small">Your Digital Growth Specialist will be in touch within 48 hours. Alternatively, for an instant chat, please call
					<a href="tel:<?php the_field('phone_number', 'option'); ?>" class="text-nowrap"><?php the_field('phone_number', 'option'); ?></a>
				</p>
			</div>
		</form>
	<?php endif; ?>
	<!-- English ends -->
	<!-- Chinese -->
	<?php if (ICL_LANGUAGE_CODE == "zh") : ?>
		<form class="fp-form" action="<?php echo get_home_url(); ?>thank-you" method="POST">
			<div class="form-step-1 form-step">
				<div class="input-group">
					<?php if (is_front_page()) :  ?>
						<div class="select-container form-control">
							<select class="form-control" name="lead_interest">
								<option value="I need more revenue for my business">我的生意需要更多收入</option>
								<option value="I need more traffic to my website">我的網站需要更多流量</option>
								<option value="I need more customers">我想要更多顧客</option>
								<option value="I need more leads">我想增加潛在客戶</option>
								<option value="I need more sales">我想增加銷售</option>
								<option value="I need help with brand awareness">我的品牌需要更高知名度</option>
								<option value="All of the above">以上全部</option>
							</select>
						</div>
					<?php else : ?>
						<input type="text" class="form-control" name="lead_website" placeholder='輸入您的網址' required="" data-parsley-website-check />
					<?php endif; ?>
					<div class="input-group-btn">
						<button type="button" class="btn fp-btn fp-btn-orange form-continue">索取免費報價</button>
					</div>
				</div>
			</div>
			<div class="form-step-2 form-step">
				<p class="text-center step-2-title">請輸入您的資料。</p>
				<div class="row">
					<div class="col-12 col-md-6">
						<input type="text" class="form-control" name="lead_name" placeholder="名字*" required="" />
					</div>
					<div class="col-12 col-md-6">
						<input type="tel" class="form-control" name="lead_phone" placeholder="電話*" required="" />
					</div>
					<div class="col-12 col-md-6">
						<input type="email" class="form-control" name="lead_email" placeholder="電郵*" data-parsley-error-message="Please enter a valid email address" data-parsley-trigger="change" required="" />
					</div>
					<div class="col-12 col-md-6">
						<input type="text" class="form-control" name="lead_website" placeholder="網址" data-parsley-website-check />
					</div>
					<div class="col-md-12">
						<input type="hidden" name="lead_formname" value="<?php echo $form_page; ?>" />
						<input type="hidden" name="lead_language" value="en" />
						<input type="hidden" name="lead_formtype" value="<?php echo $form_hs; ?>" />
						<button type="submit" data-title="Main Banner Get A Free Quote" class="form-control btn fp-btn fp-btn-orange buttonFormClick">索取免費報價</button>
					</div>
				</div>
			</div>
			<div class="form-thankyou">
				<p class="bold-lg">這就對了！準備迎接更多網上的客戶、銷售。</p>
				<p class="small">您的數碼營銷專家將在48小時內與您聯絡。如想要即時聯繫，請致電
					<a href="tel:<?php the_field('phone_number', 'option'); ?>" class="text-nowrap"><?php the_field('phone_number', 'option'); ?></a>
				</p>
			</div>
		</form>
	<?php endif; ?>
	<!-- Chinese ends -->
	<!-- End of Form -->
</div>