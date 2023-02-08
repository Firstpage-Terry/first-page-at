<?php
/**
 * Template Name: PPC ROI Calculator
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

<?php if(ICL_LANGUAGE_CODE == "en"): ?>
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 col-lg-7">
				<h1>PPC ROI Calculator</h1>
				<p>A PPC campaign should be part of any comprehensive digital marketing strategy, but how much return can you realistically expect? Use our ROI calculator to figure out.</p>
			</div>
			<div class="col-12 col-md-5 col-lg-5">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/roi-calculator-hero-banner.png" class="img-fluid" alt="SEO ROI Calculator" />
			</div>
		</div>
	</div> 
</section>

<section class="section-white shaded-white">
	<div class="d-flex justify-content-center" id='fp-roi-calculator' data-currency='$'>
		<div class="ppc-roi-calculator">
			<div id='fp-roi-calculator' data-currency='$' data-locale='en'>
				<div class="fp-container roi-for-section">
					<h2 class="fp-title text-center">ROI for service based businesses</h2>
					<div class="row mx-0">
						<div class="col-12 col-lg-7 fp-shadow-left fp-border-radius-left">
							<div class="row fp-vertical-align fp-show-block" id="fp-cpc_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">What is the average cost per click for keywords relating to your business?</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="cpc_services">CPC <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="You can find Cost Per Click metrics on your Google or Facebook ads dashboards. Alternatively, divide your total ad spend by your total clicks to get CPC." data-trigger="hover"></label>
									<input data-type="showsup" id="cpc_services-range" class="fp-slider" type="range" min="0.10" max="50" step="0.10" value="1" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="cpc_services-range-val">1%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-ad_spend_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">How much do you intend to spend on your ad campaign?</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="ad_spend_services">Ad Spend <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="If you have no ad spend currently, test out any number. A good place to start is 10% of your total marketing budget." data-trigger="hover"></label>
									<input data-type="wholenumber" id="ad_spend_services-range" class="fp-slider" type="range" min="1000" max="100000" step="1000" value="1000" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="ad_spend_services-range-val">$1000</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-conversation_rate_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">What is the conversion rate (CVR) of visitors to your website that become new leads?</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="conversation_rate_services">Conversion Rate <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if your website gets 1,000 visitors and 300 of them convert to leads, your conversion rate is (300/1000)%= 30%" data-trigger="hover"></label>
									<input data-type="percentage" id="conversation_rate_services-range" class="fp-slider" type="range" min="0.5" max="100" step="0.5" value="20" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="conversation_rate_services-range-val">20%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-close_rate_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">How many of your leads turn into customers?</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="close_rate_services">Close Rate <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if you have 100 leads and you convert 15 of them into customers, your close rate is (15/100)%= 15%" data-trigger="hover"></label>
									<input data-type="percentage" id="close_rate_services-range" class="fp-slider" type="range" min="1" max="100" step="0.5" value="40" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="close_rate_services-range-val">40%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-average_customer_value_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">On average, how much is each customer worth to your business?</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="average_customer_value_services">Avg Customer Value <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if you have $100,000 in revenue from 20 customers, your average customer value is ($100,000/20)= $5,000" data-trigger="hover"></label>
									<input data-type="wholenumber" id="average_customer_value_services-range" class="fp-slider" type="range" min="100" max="100000" step="100" value="100" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="average_customer_value_services-range-val">$100</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-hide-block" id="fp-average_profit_margin_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">The percentage of each sale that is profit</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="average_profit_margin_services">Avg Profit Margin <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="Average profit margin is your profit as a percentage of cost, totalling all costs and all profits, usually over a long period of time." data-trigger="hover"></label>
									<input data-type="percentage" id="average_profit_margin_services-range" class="fp-slider" type="range" min="1" max="99" step="1" value="1" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="average_profit_margin_services-range-val">1%</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-5 fp-shadow-right fp-border-radius-right">
							<div class="row">
								<div class="col-12 text-center">
									<img class="fp-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/fp-logo-roi-calc.svg" />
									<p class="seo-cal-based-title">Based on these numbers, here is what you could expect for return on investment*</p>
									<ul class="list-group list-group-flush">
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Visits
											<span class="badge badge-primary badge-pill">
												<span id="fr_visits_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Leads
											<span class="badge badge-primary badge-pill">
												<span id="fr_leads_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											CPL
											<span class="badge badge-primary badge-pill">
												<span id="fr_cpl_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Sales
											<span class="badge badge-primary badge-pill">
												<span id="fr_sales_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Revenue
											<span class="badge badge-primary badge-pill">
												<span id="fr_revenue_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center fp-hide-block " id="profit_listed_service">
											Profit
											<span class="badge badge-primary badge-pill">
												<span id="fr_profit_services">0<span></span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center monthly-roi">
											<span class="monthly-roi-label">Monthly ROI</span>
											<span class="badge badge-primary badge-pill">
												<span id="fr_monthlyroi_services"></span>
											</span>
										</li>
									</ul>
									</li>
								</div>
							</div>
						</div>
					</div>
					<div class="switch-container">
						<label class="switch" for="show_profit_margin">
							<input type="checkbox" id="show_profit_margin">
							<span class="switch-slider round"></span>
						</label>
						<span class="show-pmc">Show Profit Margin Calculations</span>
					</div>
				</div>
				<div class="fp-container roi-for-section">
					<h2 class="fp-title text-center">ROI for ecommerce based businesses</h2>
					<div class="row mx-0">
						<div class="col-12 col-lg-7 fp-shadow-left fp-border-radius-left">
							<div class="row fp-vertical-align fp-show-block" id="fp-cpc_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">What is the average cost per click for keywords relating to your business?</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="cpc_ecommerce">CPC <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="You can find Cost Per Click metrics on your Google or Facebook ads dashboards. Alternatively, divide your total ad spend by your total clicks to get CPC." data-trigger="hover"></label>
									<input data-type="showsup" id="cpc_ecommerce-range" class="fp-slider" type="range" min="0.10" max="20" step=".10" value="1" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="cpc_ecommerce-range-val">1%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-ad_spend_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">How much do you intend to spend on your ad campaign?</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="ad_spend_ecommerce">Ad Spend <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="If you have no ad spend currently, test out any number. A good place to start is 10% of your total marketing budget." data-trigger="hover"></label>
									<input data-type="wholenumber" id="ad_spend_ecommerce-range" class="fp-slider" type="range" min="1000" max="100000" step="500" value="1000" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="ad_spend_ecommerce-range-val">$1000</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-conversion_rate_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">Conversion rate (from visitors to leads) on the page you send your leads to.</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="conversion_rate_ecommerce">Conversion Rate <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if your website gets 1,000 visitors and 300 of them convert to leads, your conversion rate is (300/1000)%= 30%" data-trigger="hover"></label>
									<input data-type="percentage" id="conversion_rate_ecommerce-range" class="fp-slider" type="range" min="0.1" max="100" step="0.1" value="10" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="conversion_rate_ecommerce-range-val">10%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-avg_customer_value_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">On average, how much is each customer worth to your business?</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="avg_customer_value_ecommerce">Avg Customer Value <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if you have $100,000 in revenue from 20 customers, your average customer value is ($100,000/20)= $5,000" data-trigger="hover"></label>
									<input data-type="wholenumber" id="avg_customer_value_ecommerce-range" class="fp-slider" type="range" min="5" max="2000" step="5" value="100" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="avg_customer_value_ecommerce-range-val">$100</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-hide-block" id="fp-avg_profit_value_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">The percentage of each sale that is profit</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="avg_profit_value_ecommerce">Avg Profit Margin <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="Average profit margin is your profit as a percentage of cost, totalling all costs and all profits, usually over a long period of time." data-trigger="hover"></label>
									<input data-type="percentage" id="avg_profit_value_ecommerce-range" class="fp-slider" type="range" min="1" max="99" step="1" value="70" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="avg_profit_value_ecommerce-range-val">70%</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-5 fp-shadow-right fp-border-radius-right">
							<div class="row">
								<div class="col-12 text-center">
									<img class="fp-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/fp-logo-roi-calc.svg" />
									<p class="seo-cal-based-title">Based on these numbers, here is what you could expect for return on investment*</p>
									<ul class="list-group list-group-flush">
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Visits
											<span class="badge badge-primary badge-pill">
												<span id="fr_visits_ecommerce">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Sales
											<span class="badge badge-primary badge-pill">
												<span id="fr_sales_ecommerce">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Revenue
											<span class="badge badge-primary badge-pill">
												<span id="fr_revenue_ecommerce">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center fp-hide-block " id="profit_listed_ecommerce">
											Profit
											<span class="badge badge-primary badge-pill">
												<span id="fr_profit_ecommerce">0<span></span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center monthly-roi">
											<span class="monthly-roi-label">Monthly ROI</span>
											<span class="badge badge-primary badge-pill">
												<span id="fr_monthlyroi_ecommerce"></span>
											</span>
										</li>
									</ul>
									</li>
								</div>
							</div>
						</div>
					</div>
					<div class="switch-container">
						<label class="switch" for="show_profit_margin_ecommerce">
							<input type="checkbox" id="show_profit_margin_ecommerce">
							<span class="switch-slider round"></span>
						</label>
						<span class="show-pmc">Show Profit Margin Calculations</span>
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
				<h1>PPC投資回報率計算器</h1>
				<p>PPC是最有效的數碼廣告之一，但是您希望從廣告系列中獲得什麼樣的回報？請使用下面的簡單計算器找出...</p>
			</div>
			<div class="col-12 col-md-5 col-lg-5">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/roi-calculator-hero-banner.png" class="img-fluid" alt="SEO ROI Calculator" />
			</div>
		</div>
	</div> 
</section>

<section class="section-white shaded-white">
	<div class="d-flex justify-content-center" id='fp-roi-calculator' data-currency='$'>
		<div class="ppc-roi-calculator">
			<div id='fp-roi-calculator' data-currency='$' data-locale='en'>
				<div class="fp-container roi-for-section">
					<h2 class="fp-title text-center">服務型企業的投資回報率</h2>
					<div class="row mx-0">
						<div class="col-12 col-lg-7 fp-shadow-left fp-border-radius-left">
							<div class="row fp-vertical-align fp-show-block" id="fp-cpc_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">與您業務相關的關鍵字的平均每次點擊費用是多少？</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="cpc_services">每次點擊費用 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="You can find Cost Per Click metrics on your Google or Facebook ads dashboards. Alternatively, divide your total ad spend by your total clicks to get CPC." data-trigger="hover"></label>
									<input data-type="showsup" id="cpc_services-range" class="fp-slider" type="range" min="0.10" max="50" step="0.10" value="1" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="cpc_services-range-val">1%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-ad_spend_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">您打算在廣告上花費多少？</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="ad_spend_services">廣告支出 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="If you have no ad spend currently, test out any number. A good place to start is 10% of your total marketing budget." data-trigger="hover"></label>
									<input data-type="wholenumber" id="ad_spend_services-range" class="fp-slider" type="range" min="1000" max="100000" step="1000" value="1000" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="ad_spend_services-range-val">$1000</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-conversation_rate_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">您的頁面轉換率（從瀏覽者到潛在客戶）。</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="conversation_rate_services">轉換率 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if your website gets 1,000 visitors and 300 of them convert to leads, your conversion rate is (300/1000)%= 30%" data-trigger="hover"></label>
									<input data-type="percentage" id="conversation_rate_services-range" class="fp-slider" type="range" min="0.5" max="100" step="0.5" value="20" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="conversation_rate_services-range-val">20%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-close_rate_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">您有多少潛在客戶變成了客戶？</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="close_rate_services">成交率 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if you have 100 leads and you convert 15 of them into customers, your close rate is (15/100)%= 15%" data-trigger="hover"></label>
									<input data-type="percentage" id="close_rate_services-range" class="fp-slider" type="range" min="1" max="100" step="0.5" value="40" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="close_rate_services-range-val">40%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-average_customer_value_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">平均而言，每個客戶對您的業務有多少價值？</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="average_customer_value_services">平均客戶價值 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if you have $100,000 in revenue from 20 customers, your average customer value is ($100,000/20)= $5,000" data-trigger="hover"></label>
									<input data-type="wholenumber" id="average_customer_value_services-range" class="fp-slider" type="range" min="100" max="100000" step="100" value="100" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="average_customer_value_services-range-val">$100</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-hide-block" id="fp-average_profit_margin_services">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">每次銷售的獲利百分比</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="average_profit_margin_services">平均利潤率 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="Average profit margin is your profit as a percentage of cost, totalling all costs and all profits, usually over a long period of time." data-trigger="hover"></label>
									<input data-type="percentage" id="average_profit_margin_services-range" class="fp-slider" type="range" min="1" max="99" step="1" value="1" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="average_profit_margin_services-range-val">1%</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-5 fp-shadow-right fp-border-radius-right">
							<div class="row">
								<div class="col-12 text-center">
									<img class="fp-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/fp-logo-roi-calc.svg" />
									<p class="seo-cal-based-title">根據這些數字，您可以預期獲得投資回報*</p>
									<ul class="list-group list-group-flush">
										<li class="list-group-item d-flex justify-content-between align-items-center">
											瀏覽
											<span class="badge badge-primary badge-pill">
												<span id="fr_visits_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											潛在客戶
											<span class="badge badge-primary badge-pill">
												<span id="fr_leads_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											CPL
											<span class="badge badge-primary badge-pill">
												<span id="fr_cpl_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											銷售
											<span class="badge badge-primary badge-pill">
												<span id="fr_sales_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											收入
											<span class="badge badge-primary badge-pill">
												<span id="fr_revenue_services">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center fp-hide-block " id="profit_listed_service">
											利潤
											<span class="badge badge-primary badge-pill">
												<span id="fr_profit_services">0<span></span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center monthly-roi">
											<span class="monthly-roi-label">每月投資回報率</span>
											<span class="badge badge-primary badge-pill">
												<span id="fr_monthlyroi_services"></span>
											</span>
										</li>
									</ul>
									</li>
								</div>
							</div>
						</div>
					</div>
					<div class="switch-container">
						<label class="switch" for="show_profit_margin">
							<input type="checkbox" id="show_profit_margin">
							<span class="switch-slider round"></span>
						</label>
						<span class="show-pmc">顯示利潤率計算</span>
					</div>
				</div>
				<div class="fp-container roi-for-section">
					<h2 class="fp-title text-center">電子商務的的投資回報率</h2>
					<div class="row mx-0">
						<div class="col-12 col-lg-7 fp-shadow-left fp-border-radius-left">
							<div class="row fp-vertical-align fp-show-block" id="fp-cpc_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">與您的業務相關的關鍵字的平均每次點擊費用是多少？</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="cpc_ecommerce">每次點擊費用 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="You can find Cost Per Click metrics on your Google or Facebook ads dashboards. Alternatively, divide your total ad spend by your total clicks to get CPC." data-trigger="hover"></label>
									<input data-type="showsup" id="cpc_ecommerce-range" class="fp-slider" type="range" min="0.10" max="20" step=".10" value="1" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="cpc_ecommerce-range-val">1%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-ad_spend_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">您打算在廣告上花費多少？</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="ad_spend_ecommerce">廣告支出 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="If you have no ad spend currently, test out any number. A good place to start is 10% of your total marketing budget." data-trigger="hover"></label>
									<input data-type="wholenumber" id="ad_spend_ecommerce-range" class="fp-slider" type="range" min="1000" max="100000" step="500" value="1000" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="ad_spend_ecommerce-range-val">$1000</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-conversion_rate_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">您的頁面轉換率（從瀏覽者到潛在客戶）。</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="conversion_rate_ecommerce">轉換率 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if your website gets 1,000 visitors and 300 of them convert to leads, your conversion rate is (300/1000)%= 30%" data-trigger="hover"></label>
									<input data-type="percentage" id="conversion_rate_ecommerce-range" class="fp-slider" type="range" min="0.1" max="100" step="0.1" value="10" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="conversion_rate_ecommerce-range-val">10%</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-show-block" id="fp-avg_customer_value_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">平均而言，每個客戶對您的業務價值多少？</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="avg_customer_value_ecommerce">平均客戶價值 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="E.g. if you have $100,000 in revenue from 20 customers, your average customer value is ($100,000/20)= $5,000" data-trigger="hover"></label>
									<input data-type="wholenumber" id="avg_customer_value_ecommerce-range" class="fp-slider" type="range" min="5" max="2000" step="5" value="100" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="avg_customer_value_ecommerce-range-val">$100</span>
								</div>
							</div>
							<div class="row fp-vertical-align fp-hide-block" id="fp-avg_profit_value_ecommerce">
								<div class="col-12 col-md-4 border-right">
									<p class="align-middle fp-text">每次銷售的獲利百分比</p>
								</div>
								<div class="col-9 col-md-6">
									<label for="avg_profit_value_ecommerce">平均利潤率 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icn_question.svg" data-container="body" data-toggle="popover" data-placement="right" data-content="Average profit margin is your profit as a percentage of cost, totalling all costs and all profits, usually over a long period of time." data-trigger="hover"></label>
									<input data-type="percentage" id="avg_profit_value_ecommerce-range" class="fp-slider" type="range" min="1" max="99" step="1" value="70" data-orientation="vertical">
								</div>
								<div class="col-1 col-md-2">
									<span class="align-right fp-show-value" id="avg_profit_value_ecommerce-range-val">70%</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-5 fp-shadow-right fp-border-radius-right">
							<div class="row">
								<div class="col-12 text-center">
									<img class="fp-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/fp-logo-roi-calc.svg" />
									<p class="seo-cal-based-title">根據這些數字，您可以預期獲得投資回報*</p>
									<ul class="list-group list-group-flush">
										<li class="list-group-item d-flex justify-content-between align-items-center">
											瀏覽
											<span class="badge badge-primary badge-pill">
												<span id="fr_visits_ecommerce">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											銷售
											<span class="badge badge-primary badge-pill">
												<span id="fr_sales_ecommerce">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											收入
											<span class="badge badge-primary badge-pill">
												<span id="fr_revenue_ecommerce">0</span>
											</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center fp-hide-block " id="profit_listed_ecommerce">
											利潤
											<span class="badge badge-primary badge-pill">
												<span id="fr_profit_ecommerce">0<span></span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center monthly-roi">
											<span class="monthly-roi-label">每月投資回報率</span>
											<span class="badge badge-primary badge-pill">
												<span id="fr_monthlyroi_ecommerce"></span>
											</span>
										</li>
									</ul>
									</li>
								</div>
							</div>
						</div>
					</div>
					<div class="switch-container">
						<label class="switch" for="show_profit_margin_ecommerce">
							<input type="checkbox" id="show_profit_margin_ecommerce">
							<span class="switch-slider round"></span>
						</label>
						<span class="show-pmc">示利潤率計算</span>
					</div>
					<div class="fp-calculator-footer-text">
						<p>*從First Page 利潤回報率計算器計算出的資料僅供您參考。First Page 投資回報率計算器產生的計算結果不代表任何保證結果，並且這些計算結果對您（「客戶」）與First Page訂立的任何合同均不具有法律效力。 First Page 投資回報率計算器中使用的數字和公式可能隨時更改，恕不另行通知。 對於因使用或依賴使用First Page 利潤回報率計算器得出的任何計算或結論而造成的任何損失，First Page不承擔任何責任。</p>
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




<script src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/ppc-roi-calculator/js/script.js"></script>



<?php get_footer(); ?>