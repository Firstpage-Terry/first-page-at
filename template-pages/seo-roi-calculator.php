<?php
/**
 * Template Name: SEO ROI Calculator
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

<?php if(ICL_LANGUAGE_CODE == "en"): ?>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 col-lg-7">
				<h1>SEO ROI Calculator</h1>
				<p>Organic SEO traffic will help you develop a regular influx of clients if you have an online business – but how much of a return can you expect from an SEO campaign? To find out, use our calculator...</p>
			</div>
			<div class="col-12 col-md-5 col-lg-5">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/roi-calculator-hero-banner.png" class="img-fluid" alt="SEO ROI Calculator" />
			</div>
		</div>
	</div>
</section>

<section class="container section-white shaded-white">
	<div class="d-flex justify-content-center" id='fp-roi-calculator' data-currency='$'>
		<div class="seo-roi-calculator">
			<div class="fp-container roi-for-section">
				<div class="row mx-0">
					<div class="col-12 col-lg-7 fp-shadow-left fp-border-radius-left">
						<div class="row fp-vertical-align fp-show-block" id="fp-total-search-volume">
							<div class="col-12 col-md-4 border-right">
								<p class="align-middle fp-text">How many searches do you get for business-relevant keywords? (per month)</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="total-search-volume">Search Volume <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="Search volume information can be found on your Google Analytics/ Google Search Console, and other online tools such as SEMrush and Moz." data-trigger="hover"></label>
								<input data-type="integer" id="total-search-volume" class="fp-slider" type="range" min="100" max="10000" step="100" value="300" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="total-search-volume-val">100</span>
							</div>
						</div>
						<div class="row fp-vertical-align fp-show-block" id="fp-ctr">
							<div class="col-12 col-md-4 border-right">
								<p class="align-middle fp-text">What percentage of the people that search for your keywords click on your website?</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="ctr">CTR <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="For example- if the monthly search volume for your keyword is 1,000 and you get 200 clicks for that keyword in a month, your click through rate is (200/1000)%=  20%" data-trigger="hover"></label>
								<input data-type="percentage" id="ctr" class="fp-slider" type="range" min="5" max="100" step="5" value="10" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="ctr-val">$1,000</span>
							</div>
						</div>
						<div class="row fp-vertical-align fp-show-block" id="fp-conversion">
							<div class="col-12 col-md-4 border-right">
								<p class="align-middle fp-text">Out of the visitors to your website,what percentage convert into customers?</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="conversion_rate_services">Conversion Rate <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="If your website gets 500 visitors and 50 of them convert to paying customers, your CVR is (50/500)%= 10%" data-trigger="hover"></label>
								<input data-type="percentage" id="conversion" class="fp-slider" type="range" min="0.5" max="100" step="0.5" value="20" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="conversion-val">20%</span>
							</div>
						</div>
						<div class="row fp-vertical-align fp-show-block" id="fp-average-order-value">
							<div class="col-12 col-md-4 border-right">
								<p class="align-middle fp-text">What is your average <br class="d-none d-md-block">order value?</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="close_rate_services">Average Order Value <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="To calculate your company's average order value, simply divide total revenue by the number of orders." data-trigger="hover"></label>
								<input data-type="wholenumber" id="average-order-value" class="fp-slider" type="range" min="100" max="10000" step="100" value="200" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="average-order-value-val">$100</span>
							</div>
						</div>
						<div class="row fp-vertical-align fp-show-block" id="fp-lifetimevalue">
							<div class="col-12 col-md-4 border-right ">
								<p class="align-middle fp-text">What is the average lifetime value of your customer?</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="lifetimevalue">Life Time Value <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="How much is one customer worth across their whole lifecycle?  If you don’t have this metric, calculate it by multiplying your customer value with your average customer lifespan." data-trigger="hover"></label>
								<input data-type="wholenumber" id="lifetimevalue" class="fp-slider" type="range" min="100" max="10000" step="100" value="200" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="lifetimevalue-val">$100</span>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-5 fp-shadow-right fp-border-radius-right">
						<div class="row">
							<div class="col-12 text-center">
								<img class="fp-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/fp-logo-roi-calc.svg" />
								<?php if (ICL_LANGUAGE_CODE == "en") : ?>
			                    	<p class="seo-cal-based-title">Based on these numbers, here is what you could expect for return on investment*</p>
			                    <?php endif; ?>
			                    <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
			                    	<p class="seo-cal-based-title">根據這些數字，您可期望獲得以下的投資回報*</p>
			                    <?php endif; ?>
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										Visitors
										<span class="badge badge-primary badge-pill">
											<span id="fr_visitor_result">1000</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										Conversions
										<span class="badge badge-primary badge-pill">
											<span id="fr_conversion_result">200</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										AOV
										<span class="badge badge-primary badge-pill">
											<span id="fr_aov_result">$5</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										Net Revenue (Monthly)
										<span class="badge badge-primary badge-pill">
											<span id="fr_net_revenue_result">80</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										Total Lifetime Value
										<span class="badge badge-primary badge-pill">
											<span id="fr_total_lifetime_result">$8,000</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center monthly-roi">
										<span class="monthly-roi-label">Monthly ROI</span>
										<span class="badge badge-primary badge-pill">
											<span id="fr_monthlyroi_result">700%</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="fp-calculator-footer-text">
						<p>*The information calculated from the First Page ROI Calculator is intended for use by you as a guide ONLY. The calculations produced by the First Page ROI Calculator do not in any way represent guaranteed results, and the calculations have no legal effect on any contracts entered into by you (‘the Client’) with First Page. The figures and formulae used within the First Page ROI Calculator may change at any time without notice. First Page accepts no responsibility for any losses arising from any use or reliance upon any calculations or conclusions reached by using the First Page ROI Calculator.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>



<?php if(ICL_LANGUAGE_CODE == "zh"): ?>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 col-lg-7">
				<h1>SEO投資回報率計算器</h1>
				<p>SEO帶來的自然流量將令您的企業獲得大量客戶青睞，但是預期收入是多少呢？ 立即使用下面的計算器找出答案。</p>
			</div>
			<div class="col-12 col-md-5 col-lg-5">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/roi-calculator-hero-banner.png" class="img-fluid" alt="SEO ROI Calculator" />
			</div>
		</div>
	</div>
</section>

<section class="container section-white shaded-white">
	<div class="d-flex justify-content-center" id='fp-roi-calculator' data-currency='$'>
		<div class="seo-roi-calculator">
			<div class="fp-container roi-for-section">
				<div class="row mx-0">
					<div class="col-12 col-lg-7 fp-shadow-left fp-border-radius-left">
						<div class="row fp-vertical-align fp-show-block" id="fp-total-search-volume">
							<div class="col-12 col-md-4 border-right">
								<p class="align-middle fp-text">您獲得多少次與業務相關的關鍵字搜尋？（每月）</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="total-search-volume">搜尋量 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="Search volume information can be found on your Google Analytics/ Google Search Console, and other online tools such as SEMrush and Moz." data-trigger="hover"></label>
								<input data-type="integer" id="total-search-volume" class="fp-slider" type="range" min="100" max="10000" step="100" value="300" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="total-search-volume-val">100</span>
							</div>
						</div>
						<div class="row fp-vertical-align fp-show-block" id="fp-ctr">
							<div class="col-12 col-md-4 border-right">
								<p class="align-middle fp-text">搜尋您的關鍵字的用戶之中，有多少百分比會點擊您的網站？</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="ctr">點擊率 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="For example- if the monthly search volume for your keyword is 1,000 and you get 200 clicks for that keyword in a month, your click through rate is (200/1000)%=  20%" data-trigger="hover"></label>
								<input data-type="percentage" id="ctr" class="fp-slider" type="range" min="5" max="100" step="5" value="10" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="ctr-val">$1,000</span>
							</div>
						</div>
						<div class="row fp-vertical-align fp-show-block" id="fp-conversion">
							<div class="col-12 col-md-4 border-right">
								<p class="align-middle fp-text">在瀏覽您網站的人之中，有多少百分比可以轉化為客戶？</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="conversion_rate_services">轉換率  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="If your website gets 500 visitors and 50 of them convert to paying customers, your CVR is (50/500)%= 10%" data-trigger="hover"></label>
								<input data-type="percentage" id="conversion" class="fp-slider" type="range" min="0.5" max="100" step="0.5" value="20" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="conversion-val">20%</span>
							</div>
						</div>
						<div class="row fp-vertical-align fp-show-block" id="fp-average-order-value">
							<div class="col-12 col-md-4 border-right">
								<p class="align-middle fp-text">您的平均訂單價值是多少？</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="close_rate_services">平均訂單價值 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="To calculate your company's average order value, simply divide total revenue by the number of orders." data-trigger="hover"></label>
								<input data-type="wholenumber" id="average-order-value" class="fp-slider" type="range" min="100" max="10000" step="100" value="200" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="average-order-value-val">$100</span>
							</div>
						</div>
						<div class="row fp-vertical-align fp-show-block" id="fp-lifetimevalue">
							<div class="col-12 col-md-4 border-right ">
								<p class="align-middle fp-text">客戶的平均生命週期價值是多少？</p>
							</div>
							<div class="col-9 col-md-6">
								<label for="lifetimevalue">生命週期價值 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="How much is one customer worth across their whole lifecycle?  If you don’t have this metric, calculate it by multiplying your customer value with your average customer lifespan." data-trigger="hover"></label>
								<input data-type="wholenumber" id="lifetimevalue" class="fp-slider" type="range" min="100" max="10000" step="100" value="200" data-orientation="vertical" />
							</div>
							<div class="col-1 col-md-2">
								<span class="align-right fp-show-value" id="lifetimevalue-val">$100</span>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-5 fp-shadow-right fp-border-radius-right">
						<div class="row">
							<div class="col-12 text-center">
								<img class="fp-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/fp-logo-roi-calc.svg" />
								<?php if (ICL_LANGUAGE_CODE == "en") : ?>
			                    	<p class="seo-cal-based-title">Based on these numbers, here is what you could expect for return on investment*</p>
			                    <?php endif; ?>
			                    <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
			                    	<p class="seo-cal-based-title">根據這些數字，您可期望獲得以下的投資回報*</p>
			                    <?php endif; ?>
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex justify-content-between align-items-center">
									瀏覽
										<span class="badge badge-primary badge-pill">
											<span id="fr_visitor_result">1000</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
									銷售
										<span class="badge badge-primary badge-pill">
											<span id="fr_conversion_result">200</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										AOV
										<span class="badge badge-primary badge-pill">
											<span id="fr_aov_result">$5</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
									收入
										<span class="badge badge-primary badge-pill">
											<span id="fr_net_revenue_result">80</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
									利潤
										<span class="badge badge-primary badge-pill">
											<span id="fr_total_lifetime_result">$8,000</span>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center monthly-roi">
										<span class="monthly-roi-label">每月投資回報率</span>
										<span class="badge badge-primary badge-pill">
											<span id="fr_monthlyroi_result">700%</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="fp-calculator-footer-text">
						<p>* 從First Page 投資回報率計算器計算出的資料僅供您參考。First Page投資回報率計算器所計算的結果並不代表任何保證結果，並且這些計算結果對您（「客戶」）與First Page 訂立的任何合約均不具有法律效力。First Page投資回報率計算器中使用的數字和公式可能隨時更改，恕不另行通知。 對於因使用或依賴使用First Page 投資回報率計算器得出的任何計算或結論而造成的任何損失，First Page並不承擔任何責任。.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>



<section id="content" class="site__content p-0" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
	<?php endwhile; ?>
</section>




<script src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/seo-calculator/js/script.js"></script>



<?php get_footer(); ?>

