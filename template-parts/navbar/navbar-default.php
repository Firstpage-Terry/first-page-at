<nav class="navbar fixed-top navbar-expand-lg navbar-header">
		<div class="container">
			<!-- Navigation Toggler -->
			<button class="navbar-toggler nav-ham" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>

			<!-- Logo -->
			<a class="navbar-brand" href="<?php echo home_url() ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fp-logo.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fp-logo@2x.png 2x" alt="First Page" />
			</a>

			<div id="dropdown_countries_header" class="btn-group dropdown_countries d-none d-md-none d-lg-block">
				<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hong-kong-rounded.svg"></span>
				</button>
				<div class="dropdown-menu dropdown-menu-left">
					<button class="dropdown-item" type="button">
						<a class="" href="https://firstpageusa.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/united-states-rounded.svg" alt="FirstPage UNITED STATES"> <?php trans("UNITED STATES", '美國')?> </a>
					</button>
					<button class="dropdown-item" type="button">
						<a class="" href="https://firstpage.com.au"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/australia-rounded.svg" alt="FirstPage AUSTRALIA">	<?php trans("AUSTRALIA", '澳大利亞')?> </a>
					</button>
					<button class="dropdown-item" type="button">
						<a class="" href="https://firstpage.nz"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-zealand-rounded.svg" alt="FirstPage NEW ZEALAND"> <?php trans("NEW ZEALAND", '新西蘭')?></a>
					</button>
					<button class="dropdown-item" type="button">
					<a class="" href="https://firstpagedigital.sg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/singapore-rounded.svg" alt="FirstPage SINGAPORE"> <?php trans("SINGAPORE", '新加坡')?></a>
					</button>
				</div>
			</div>

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
							<path fill="#427fe0"
								d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
							</path>
							<path d="M0 0h24v24H0z" fill="none"></path>
						</svg>
					</button>

					<?php lang_switcher(); ?>
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
						<?php wp_nav_menu( array( 'theme_location' =>   'primary_navigation' ) ); ?>
						<li class="nav-item">
							<?php if (ICL_LANGUAGE_CODE == "en") : ?>
								<a class="nav-link nav-border free-strategy-btn" href="<?php echo home_url() ?>/free-proposal/">GET A FREE STRATEGY</a>
							<?php endif; ?>
							<?php if (ICL_LANGUAGE_CODE == "zh") : ?>
								<a class="nav-link nav-border free-strategy-btn" href="<?php echo home_url() ?>free-proposal/">獲取您的免費策略</a>
							<?php endif; ?>
						</li>
					</ul>
				</div>

				<div class="menu mobile-menu d-block d-md-block d-lg-none">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item nav-item-main d-none d-lg-block">
							<a class="scroll-nav-logo" href="<?php echo home_url() ?>">
								<img id="scroll-nav-logo" src="/wp-content/themes/firstpage/assets/img/fp-logo.png" srcset="/wp-content/themes/firstpage/assets/img/fp-logo@2x.png 2x" alt="First Page"/></a>
						</li>
						<li class="nav-item nav-item-main">
							<a class="nav-link" href="/seo/">SEO</a>
						</li>
						<?php /*
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">SEO</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_seo' ) ); ?>
								</div>
							</div>
						</li>
						*/ ?>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown"><?php trans("GOOGLE ADS", 'Google 廣告')?></p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_google_ads' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown"><?php trans("SOCIAL", '社交媒體')?></p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_social' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown"><?php trans("OTHER SERVICES", '其他服務')?></p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_other_services' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown"><?php trans("FREE TOOLS", '免費工具')?></p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_free_tools' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown"><?php trans("ABOUT US", '關於我們')?></p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_about_us' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main">
							<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
								<a class="nav-link" href="<?php echo get_home_url(); ?>/contact-us/">CONTACT</a>
							<?php } else if (ICL_LANGUAGE_CODE == 'de'){ ?>
								<a class="nav-link" href="<?php echo get_home_url(); ?>contact-us/">聯絡我們</a>
							<?php } ?>
						</li>
						<li class="nav-item mobile-go-back" id="goBackMain">
							<a class="nav-link" role="button"><?php trans("Go Back", '上一步')?></a>
						</li>
						<li class="nav-item mobile-go-back" id="goBackServices">
							<a class="nav-link" role="button"><?php trans("Go Back", '上一步')?></a>
						</li>
						<li class="nav-item">
							<?php if (ICL_LANGUAGE_CODE == "en") : ?>
								<a class="nav-link nav-border free-strategy-btn" href="<?php echo home_url() ?>/free-proposal/">GET A FREE STRATEGY</a>
							<?php endif; ?>
							<?php if (ICL_LANGUAGE_CODE == "zh") : ?>
								<a class="nav-link nav-border free-strategy-btn" href="<?php echo home_url() ?>free-proposal/">獲取您的免費策略</a>
							<?php endif; ?>
						</li>

						<li class="nav-item d-block d-lg-none">
						<div class="btn-group dropdown_countries">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hong-kong-rounded.svg">
									<?php trans("HONG KONG", '香港')?>
								</span>
							</button>
							<div class="dropdown-menu dropdown-menu-left">
								<button class="dropdown-item" type="button">
									<a class="" href="https://firstpageusa.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/united-states-rounded.svg" alt="FirstPage UNITED STATES"> <?php trans("UNITED STATES", '美國')?> </a>
								</button>
								<button class="dropdown-item" type="button">
									<a class="" href="https://firstpage.com.au"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/australia-rounded.svg" alt="FirstPage AUSTRALIA">	<?php trans("AUSTRALIA", '澳大利亞')?> </a>
								</button>
								<button class="dropdown-item" type="button">
									<a class="" href="https://firstpage.nz"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-zealand-rounded.svg" alt="FirstPage NEW ZEALAND"> <?php trans("NEW ZEALAND", '新西蘭')?></a>
								</button>
								<button class="dropdown-item" type="button">
								<a class="" href="https://firstpagedigital.sg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/singapore-rounded.svg" alt="FirstPage SINGAPORE"> <?php trans("SINGAPORE", '新加坡')?></a>
								</button>
							</div>
						</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="nav-mask-cover"></div>
		</div>
	</nav>