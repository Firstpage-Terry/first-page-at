<?php
	// Functions
	function lang_switcher() {
		$langs = apply_filters( 'wpml_active_languages', null, 'order=desc');

		if( !empty( $langs ) ) { ?>	
			<ul class="language-switchers">
			<?php
				foreach( $langs as $lang ){ 
					$langName = '';
					if ($lang['code'] == 'en') {
						$langName = 'EN';
					} elseif ( $lang['code'] == 'zh' ) {
						$langName = '繁體';
					} ?>
					<li class="lang-item lang-item-first <?php if ($lang['active']): echo 'current-lang'; endif; ?>">
						<?php if (!$lang['active']) {
							echo '<a lang="en" hreflang="en" href="' . $lang['url'] . '">' . $langName . '</a>';
						} else {
							echo '<span>' . $langName . '</span>';
						} 
						?>
					</li>
				<?php }
			?>
			</ul>
		<?php }
	}

	function trans($en, $zh) {
		if(ICL_LANGUAGE_CODE == 'en') {
			echo $en;
		} else if (ICL_LANGUAGE_CODE == 'zh'){
			echo $zh;
		}
	}
?>

<nav class="navbar fixed-top navbar-expand-lg navbar-header">
		<div class="container">
			<!-- Navigation Toggler -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>

			<!-- Logo -->
			<a class="navbar-brand" href="<?php echo home_url() ?>">
				<img src="/wp-content/themes/firstpage/assets/img/fp-logo.png" srcset="/wp-content/themes/firstpage/assets/img/fp-logo@2x.png 2x" alt="First Page" />
			</a>

			<?php if(is_front_page()): ?>
					<a href="https://superist.com/" class="superist-nav d-none d-lg-flex" target="_blank" onclick="window.open('#','_blank');window.open(this.href,'_self');"> 
						<img alt="Connected by Superist" src="/wp-content/uploads/2022/05/connected-by-superist.png">  
					</a>
			<?php endif ?>

			<?php if(is_front_page() == false): ?>
					<a href="#" class="superist-nav d-none d-lg-flex" > 
						<img alt="Connected by Superist" src="/wp-content/uploads/2022/05/connected-by-superist.png">  
					</a>
			<?php endif ?>

			<?php if(get_field('phone_number', 'option')): ?>
			<div class="phone">
				<a href="tel:<?php the_field('phone_number', 'option'); ?>">
					<img src="/wp-content/themes/firstpage/assets/img/icn-phone.png" srcset="/wp-content/themes/firstpage/assets/img/icn-phone@2x.png 2x" alt="First Page" />
					<span><?php the_field('phone_number', 'option'); ?></span>
				</a>
			</div>
			<?php endif; ?>

			<!-- Navigation -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Contact -->
				<div class="additional-menu">
				<button class="navbar-toggler navbar-toggler-close collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28">
						<path fill="#ffffff"
							d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
						</path>
						<path d="M0 0h24v24H0z" fill="none"></path>
					</svg>
				</button>

				<?php if(!is_paged()): ?>
				
				<?php /*
				<ul class="language-switchers">
					<?php // echo $_SERVER['REQUEST_URI']; ?>
					<li class="lang-item lang-item-2 lang-item-en <?php if (is_main_site()): echo 'current-lang'; endif; ?>  lang-item-first"><a lang="en-AU" hreflang="en-AU"
							href="<?php echo get_home_url( 1 ); ?>/<?php if(!is_front_page()): echo basename($_SERVER['REQUEST_URI']); endif; ?><?php if (!is_front_page()): echo '/'; endif; ?>">EN</a></li>
							
					<li class="lang-item lang-item-5 lang-item-zh <?php if (!is_main_site()): echo 'current-lang'; endif; ?> "><a lang="zh-HK" hreflang="zh-HK"
							href="<?php echo get_home_url( 3 ); ?>/<?php if(!is_front_page() || is_home()): echo basename($_SERVER['REQUEST_URI']); endif; ?><?php if (!is_front_page() || is_home()): echo '/'; endif; ?>">繁體</a></li>
				</ul>
				*/ ?>

				<?php lang_switcher(); ?>

				<?php endif; ?>

				<?php if(is_paged()): ?>
				
				<?php /*
				<ul class="language-switchers">
					<?php // echo $_SERVER['REQUEST_URI']; ?>
					<li class="lang-item lang-item-2 lang-item-en <?php if (is_main_site()): echo 'current-lang'; endif; ?>  lang-item-first"><a lang="en-AU" hreflang="en-AU"
							href="/learning-centre/page/<?php echo basename($_SERVER['REQUEST_URI']); ?>">EN</a></li>
							
					<li class="lang-item lang-item-5 lang-item-zh <?php if (!is_main_site()): echo 'current-lang'; endif; ?> "><a lang="zh-HK" hreflang="zh-HK"
							href="/zh/learning-centre/page/<?php echo basename($_SERVER['REQUEST_URI']); ?>">繁體</a></li>
				</ul>
				*/ ?>
				<?php lang_switcher(); ?>
				
				<?php endif; ?>
				</div>

				<hr class="header-separator" />
				<!-- Menu -->
				<div class="menu d-none d-lg-block">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item nav-item-main d-none d-lg-block">
							<a class="scroll-nav-logo" href="<?php echo home_url() ?>">
								<img id="scroll-nav-logo" src="/wp-content/themes/firstpage/assets/img/fp-logo.png" srcset="/wp-content/themes/firstpage/assets/img/fp-logo@2x.png 2x" alt="First Page"/>
							</a>
						</li>
						<?php /* wp_nav_menu( array( 'theme_location' =>   'primary_navigation' ) ); */ ?>

						<?php ////////////////////////////////////////// ?>
						<li class="nav-item nav-item-main dropdown megamenu-li megamenu-seo">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">SEO</a>
							<div class="dropdown-menu megamenu">
								<div class="row">
									<div class="col-12 col-lg-3">
										<h5 class="megamenu-heading">
											<img src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_seo.svg" width="30"
												height="30" alt="SEO" /><?php trans('LOCAL & GLOBAL SEO', '本地 & 全球 SEO')?>
										</h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo/">SEO</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo/local-seo/">
												<?php trans('Local SEO', '本地 SEO')?>
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>seo/international-seo/">
												<?php trans('International SEO', '國際 SEO')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo/mobile-seo/">
												<?php trans('Mobile SEO', '行動裝置 SEO')?>	
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>seo/lost-keyword-rankings/">
												<?php trans('Lost Keyword Rankings', '排名驟降')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>pay-on-performance/">
												<?php trans('Pay On Performance', 'SEO 績效保證')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>video-seo/">
												<?php trans('Video SEO', '影片 SEO')?>
											</a>
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<h5 class="megamenu-heading">
											<img src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_eccomerce_seo.svg" width="30"
												height="30" alt="SEO" /><?php trans('Ecommerce SEO', '電子商務 SEO')?>
										</h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo/ecommerce/">
												<?php trans('Ecommerce SEO', '電子商務 SEO')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo/ecommerce/shopify/">Shopify
												SEO</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>seo/ecommerce/woocommerce/">WooCommerce SEO</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo/ecommerce/magento/">Magento
												SEO</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo/link-building/">
												<?php trans('Link Building', '反向連結')?>
											</a>
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<h5 class="megamenu-heading">
											<img src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_amazon.svg" width="30"
												height="30" alt="" /><?php trans('AMAZON MARKETING', '亞馬遜營銷')?>
										</h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>amazon-seo/">
												<?php trans('AMAZON SEO', '亞馬遜 SEO')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>amazon-backlinks/">
												<?php trans('AMAZON Backlinks', '亞馬遜反向連結')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>amazon-ppc/">
												<?php trans('AMAZON PPC', '亞馬遜 PPC')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>amazon-ebook/">
												<?php trans('FREE AMAZON eBook', '免費亞馬遜電子書')?>	
											</a>
										</div>
										<h5 class="megamenu-heading mt-lg-4"><img
												src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_chinese_marketing@2x.png"
												width="34" height="30" alt="SEO" />
													<?php trans('CHINESE MARKETING', '中國營銷')?>
										</h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo/chinese-seo/">
												<?php trans('Chinese SEO', '中國 SEO')?>	
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>baidu-seo/">
												<?php trans('BAIDU SEO', '百度 SEO')?>	
											</a>
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<h5 class="megamenu-heading">
											<img src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_faqs.svg" width="30"
												height="30" alt="SEO" />FAQs
										</h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>faqs/how-to-pick-the-best-seo-agency/">
												<?php trans('How To Pick The Best SEO Agency', '為何僱用SEO代理商？')?>
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>faqs/what-is-an-seo-agency/">
												<?php trans('What is An SEO Agency?', '什麼是SEO代理商？')?>
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>faqs/whats-included-in-an-seo-campaign/">
												<?php trans('What is included within an SEO Campaign?', 'SEO廣告活動應該包含什麼？')?>
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>faqs/why-isnt-my-website-showing-up-on-google/">
												<?php trans("Why Isn't My Website Showing On Google?", '為何GOOGLE沒有顯示我的網站？')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>faqs/what-is-a-backlink/">
												<?php trans('What is a Backlink?', '什麼是建立連結？')?>
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>faqs/whats-google-my-business/">
												<?php trans("What's Google My Business?", '什麼是GOOGLE我的商家？')?>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown megamenu-li megamenu-google-ads">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">
								<?php trans("GOOGLE ADS", 'Google 廣告')?>
							</a>
							<div class="dropdown-menu megamenu">
								<div class="row">
									<div class="col-12 col-lg-6">
										<h5 class="megamenu-heading">
											<img src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_paid.svg" width="30"
												height="30" alt="SEO" /><?php trans("PAID SEARCH", '付費搜尋')?>
										</h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>google-ads/">
												<?php trans("Google Ads", 'GOOGLE 廣告')?>
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>google-ads/google-search-ads/">
												<?php trans("Google Search Ads", 'GOOGLE 搜尋廣告')?>
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>google-ads/google-display-ads/">
												<?php trans("Google Display Ads", 'GOOGLE 多媒體廣告')?>
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>google-ads/google-remarketing/">
												<?php trans("Google Remarketing", 'GOOGLE 再營銷')?>
											</a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>google-ads/google-shopping/">
												<?php trans("Google Shopping", 'GOOGLE 購物廣告')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>bing-ads/">
												<?php trans("bing ads", 'BING 廣告')?>
											</a>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<h5 class="megamenu-heading">
											<img src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_faqs.svg" width="30"
												height="30" alt="SEO" />FAQs
										</h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>faqs/what-is-digital-marketing/">
												<?php trans("What is digital marketing?", '什麼是數碼營銷？')?>
											</a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>faqs/how-does-ppc-work/">
												<?php trans("How Does PPC Work?", 'PPC是如何運作的？')?>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="nav-item nav-item-main dropdown megamenu-li megamenu-social">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)"
								data-toggle="dropdown"><?php trans("SOCIAL", '社交媒體廣告')?></a>
							<div class="dropdown-menu megamenu">
								<div class="row">
									<div class="col-12 col-lg-6">
										<h5 class="megamenu-heading">
											<img src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_social.svg" width="30"
												height="30" alt="SEO" /><?php trans("SOCIAL", '社交媒體廣告')?>
										</h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>social/facebook-ads/"><?php trans("Facebook Ads", 'FACEBOOK 廣告')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>social/instagram-ads/"><?php trans("Instagram Ads", 'INSTAGRAM 廣告')?></a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>social/linkedin-ads/"><?php trans("LinkedIn Ads", 'LINKEDIN 廣告')?></a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>tik-tok-marketing/"><?php trans("Tik Tok Ads", 'TIK TOK 廣告')?></a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>youtube-ads/"><?php trans("YouTube Ads", 'YOUTUBE 廣告')?></a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>social/"><?php trans("Social Media Marketing", '社交媒體廣告總覽')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>social-media-management/"><?php trans("Social Media Management", '社交媒體管理')?></a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>nft-marketing/"><?php trans("NFT Marketing", 'NFT營銷')?></a>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<h5 class="megamenu-heading">
											<img src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_faqs.svg" width="30"
												height="30" alt="SEO" />FAQs
										</h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>faqs/how-much-does-it-cost-to-advertise-on-instagram/"><?php trans("How Much Does it Cost to Advertise on Instagram", '在INSTAGRAM上刊登廣告需要多少費用？')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>faqs/how-much-does-it-cost-to-advertise-on-facebook/"><?php trans("How Much Does It Cost to Advertise on Facebook", '在FACEBOOK上刊登廣告需要多少費用？')?></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown megamenu-li megamenu-other-services">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"><?php trans("OTHER SERVICES", '其他服務')?></a>
							<div class="dropdown-menu megamenu">
								<div class="row">
									<div class="col-12 col-lg-4">
										<h5 class="megamenu-heading"><img
												src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_chinese_marketing@2x.png"
												width="34" height="30" alt="SEO" /><?php trans("CHINESE MARKETING", '中國營銷')?></h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>baidu-seo/"><?php trans("BAIDU SEO", '百度 SEO')?></a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>wechat-marketing/"><?php trans("WECHAT MARKETING", 'WECHAT 營銷')?></a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>weibo-marketing/"><?php trans("WEIBO MARKETING", '微博營銷')?></a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>tik-tok-marketing/"><?php trans("Tik Tok Marketing", 'TIK TOK 營銷')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>chinese-social-media-marketing/"><?php trans("CHINESE SOCIAL MEDIA MARKETING", '中國社交媒體營銷')?></a>
										</div>
									</div>
									<div class="col-12 col-lg-4">
										<h5 class="megamenu-heading"><img
												src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_content.svg" width="30"
												height="30" alt="SEO" /><?php trans("Content", '文案內容創作')?></h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>email-marketing/"><?php trans("Email Marketing", '電子郵件營銷')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>premium-content-writing/"><?php trans("Premium Content Writing", '優質內容寫作')?></a>
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo-copywriting/"><?php trans("seo copywriting", 'SEO 文案寫作')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>video-production-photography/"><?php trans("Video & Photography", '影片製作及攝影')?></a>
										</div>
									</div>
									<div class="col-12 col-lg-4">
										<h5 class="megamenu-heading"><img
												src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_brand_presence.svg" width="30"
												height="30" alt="SEO" /><?php trans("REPUTATION", '品牌形象')?></h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>reputation-management/"><?php trans("Reputation Management", '聲譽管理')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>removify-review-services/"><?php trans("Negative Content Removal", '刪除負面內容')?></a>
										</div>
										<h5 class="megamenu-heading mt-lg-4"><img
												src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_marketing_automation.svg"
												width="30" height="36" alt="SEO" /><?php trans("MARKETING AUTOMATION", '自動化行銷')?></h5>
										<div class="mega-dropdown-menu">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>hubspot/"><?php trans("HUBSPOT MARKETING AUTOMATION", 'HUBSPOT 自動化行銷')?></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main seo-dropdown dropdown">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" id="ddAudits"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php trans("FREE TOOLS", '免費工具')?></a>
							<div class="dropdown-menu" aria-labelledby="ddAudits">
								<div class="dropdown-cont">
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo-roi-calculator/"><?php trans("SEO ROI Calculator", 'SEO 投資回報率計算器')?></a>
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>ppc-roi-calculator/"><?php trans("PPC ROI Calculator", 'PPC 投資回報率計算器')?></a>
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo-audit/"><?php trans("FREE SEO Audit", '獲取免費 SEO 分析報告')?></a>
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>google-ads-audit/"><?php trans("Free Google Ads Audit", 'GOOGLE 廣告分析')?></a>
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>competitor-audit/"><?php trans("FREE Competitor Audit", '競爭對手網頁免費分析')?></a>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main about-dropdown dropdown">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" id="ddAbout"
								data-toggle="dropdown"><?php trans("About Us", '關於我們')?></a>
							<div class="dropdown-menu" aria-labelledby="ddAbout">
								<div class="dropdown-cont">
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>who-we-are/"><?php trans("Who We Are", '關於我們')?></a>
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>sentr/"><?php trans("About SENTR™", '關於 SENTR™')?></a>
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>faqs/"
										style="text-transform: capitalize;"><?php trans("FAQs", 'FAQs')?></a>
									<!--  -->
									<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
										<a class="dropdown-item" href="<?php echo get_home_url(); ?>resources/"><?php trans("Blog", '-')?></a>
									<?php } ?>
									<!--  -->
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>resources/podcasts/"><?php trans("Podcasts", '博客')?></a>
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>resources/category/videos/"><?php trans("Videos", '影片')?></a>
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>seo/guarantees/"><?php trans("Guarantees", '成效保證')?></a>
									<a class="dropdown-item" href="<?php echo get_home_url(); ?>careers/"><?php trans("Careers", '加入我們')?></a>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown megamenu-li megamenu-results">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)"
								data-toggle="dropdown"><?php trans("RESULTS", '真實成效')?></a>
							<div class="dropdown-menu megamenu">
								<div class="row">
									<div class="col-12 col-lg-6">
										<h5 class="megamenu-heading megamenu-heading-results"><img
												src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_case_study.svg" alt="" /><?php trans("CASE STUDIES", '客戶案例')?></h5>
										<div class="mega-dropdown-menu-results">
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>case-studies/floristique/"><?php trans("Floristique", 'Floristique')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>case-studies/cat-and-the-fiddle/"><?php trans("Cat & the Fiddle", 'Cat & the Fiddle')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>case-studies/british-connections/"><?php trans("British Connections", 'British Connections')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>case-studies/blanc-des-vosges/"><?php trans("Blanc Des Vosges", 'Blanc Des Vosges')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>case-studies/apartment-o/"><?php trans("Apartment O", '陳公館')?></a>
											<a class="dropdown-item"
												href="<?php echo get_home_url(); ?>case-studies/reddoorz/"><?php trans("Reddoorz", 'Reddoorz')?></a>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<h5 class="megamenu-heading megamenu-heading-reviews"><img
												src="<?php bloginfo('template_url'); ?>/img/menu-icons/icn_reviews.svg" alt="" /><?php trans("REVIEWS", '評價')?>
										</h5>
										<div class="mega-dropdown-menu-reviews">
											<a class="dropdown-item" href="<?php echo get_home_url(); ?>reviews/"><?php trans("CLIENT REVIEWS", '客戶評價')?></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main">
							<a class="nav-link" href="<?php echo get_home_url(); ?>contact-us/"><?php trans("Contact Us", '聯絡我們')?></a>
						</li>
						<?php ////////////////////////////////////////// ?>

						<li class="nav-item">
							<a class="nav-link nav-border" href="<?php echo home_url() ?>/free-proposal/"><?php trans("Free Proposal", '免費建議書')?></a>
						</li>
					</ul>
				</div>

				<div class="menu d-block d-md-block d-lg-none">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item nav-item-main d-none d-lg-block">
							<a class="scroll-nav-logo" href="<?php echo home_url() ?>">
								<img id="scroll-nav-logo" src="/wp-content/themes/firstpage/assets/img/fp-logo.png" srcset="/wp-content/themes/firstpage/assets/img/fp-logo@2x.png 2x" alt="First Page"/></a>
						</li>
						<li class="nav-item nav-item-main">
							<a class="nav-link" href="/seo/">SEO</a>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">GOOGLE ADS</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_google_ads' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">SOCIAL</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_social' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">OTHER SERVICES</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_other_services' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">FREE TOOLS</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_free_tools' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">ABOUT US</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_about_us' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main">
							<a class="nav-link" href="/contact-us/">CONTACT</a>
						</li>
						<li class="nav-item mobile-go-back" id="goBackMain">
							<a class="nav-link" role="button">Go Back</a>
						</li>
						<li class="nav-item mobile-go-back" id="goBackServices">
							<a class="nav-link" role="button">Go Back</a>
						</li>
						<li
							class="nav-item">
							<a class="nav-link nav-border" href="/free-proposal/">Free Proposal</a>
						</li>

						<li class="nav-item">


						<?php if(is_front_page()): ?>
						<a href="https://superist.com/" class="nav-link nav-border d-block d-md-none d-lg-none" style="padding: 0; position: absolute; background: none;" target="_blank" onclick="window.open('#','_blank');window.open(this.href,'_self');"> 
							<img alt="Connected by Superist" data-cfsrc="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/connected-by-superist.png" src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/connected-by-superist.png" style="max-width: 100%;">  
						</a>
						<?php endif ?>


						<?php if(is_front_page() ==  false): ?>
						<a href="#" class="nav-link nav-border d-block d-md-none d-lg-none" style="padding: 0; position: absolute; background: none;"> 
							<img alt="Connected by Superist" data-cfsrc="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/connected-by-superist.png" src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/connected-by-superist.png" style="max-width: 100%;">  
						</a>
						<?php endif ?>

						</li>

					</ul>
				</div>
			</div>
		</div>
	</nav>
