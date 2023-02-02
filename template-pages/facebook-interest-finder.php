<?php
/**
 * Template Name: Facebook Interest Finder
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5WQD5S6');</script>
    <!-- End Google Tag Manager -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"
    integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>

<style>


    @media (min-width: 992px){

        .seo-roi-calculator{
            margin-top: -200px !important;
            width: 1080px;
            z-index: 999;
        }

        .seo-roi-calculator .fp-container{
            padding-top: 25px !important;
            border-radius: 25px; 
        }
    }

		@media(min-width: 992px) {
			section.banner h1 {
				font-size: 52px !important;
				line-height: 54px !important;
			}
		}
		tbody tr {
			background: #e2edff;
		}
		.table-striped tbody tr:nth-of-type(odd) {
			background: #f8faff !important;
		}
		.table th {
			border-top: none !important;
			border-bottom: none !important;
			color: #666666;
			height: 44px;
		}
		.table td {
			border-top: none !important;
			height: 44px;
			color: #00225D;
		}
		@media(max-width: 768px) {
			.table td {
				width: 200px;
			}
		}
		td a {
			color: #ff5254 !important;
		}
		td a:hover {
			cursor: pointer;
		}
		@media(min-width: 768px) {
			.fp-btn {
				padding: 15px 30px !important;
			}
		}
		.keyword-form {
			font-weight: 700 !important;
			font-size: 22px !important;
		}
		@media(max-width: 576px) {
			.btn-width {
				width: 100%;
			}
		}
		.breadcrumb {
			background-color: #ffffff !important;
			padding: 0 !important;
			margin-bottom: 0 !important;
		}
		#keyword-history {
			display: contents;
		}
		#keyword-history li {
			color: #2b7bfa;
			font-weight: 700;
			font-size: 18px;
			background: #E3EEFF;
			padding: 10px 15px;
			border-radius: 25px !important;
			margin-right: 10px;
		}
		#keyword-history li .closeButton {
			cursor: pointer;
			font-size: 11px;
			margin-left: 8px;
		}
		@media(min-width: 992px) {
			.page-facebook-interest-finder .seo-roi-calculator {
				margin-top: -250px !important;
				width: 1080px;
			}
			.page-facebook-interest-finder section.banner {
				padding-bottom: 300px !important;
			}
		}
		@media(min-width: 768px) {
			.page-facebook-interest-finder #fp-roi-calculator .fp-container.roi-for-section.facebook-box-shadow {
				padding: 20px !important;
			}
		}
		@media(max-width: 767px) {
			.page-facebook-interest-finder section.banner .container .row img {
				max-width: 250px !important;
			}
		}
		.pointer-none {
			pointer-events: none;
		}
		.blue-bubble {
			margin: 5px 0;
		}
		.blue-bubble a {
			color: #2b7bfa;
		}
		#search-form-submit {
			margin-left: 10px;
		}
		@media(max-width: 575px) {
			#search-form-submit {
				margin-left: 0;
			}
		}
		.search-wrapper {
			padding: 10px;
			border: 1px solid #e0e0e0;
			align-items: center;
			border-radius: 5px;
			margin-bottom: 20px;
		}
		.description-section {
			position: relative;
			z-index: 2;
		}

		.result_section {
			margin-left: 40px;
			font-size: 20px;
			font-weight: 700;
			color: #B3B4B5;
			background: #E9EBEF;
			padding: 5px 15px;
			border-radius: 50px;
		}
		@media(max-width: 575px) {
			.result_section {
				margin-left: 0;
				display: inline-block;
			}
		}
		@media(min-width: 768px) {
			.w-200 {
				width: 200px;
			}
		}
		@media(max-width: 767px) {
			#fp-roi-calculator .facebook-box-shadow {
				box-shadow: none !important;
			}
		}
		@media(max-width: 991px) {
			.align-item-center {
				align-items: center !important;
			}
		}
	</style>

	<section class="banner">
		<div class="container">
			<div class="row no-gutters align-item-center">
				<?php if(ICL_LANGUAGE_CODE == 'en'): ?>
					<div class="col-12 col-md-7 col-lg-7 description-section">
						<h1>With This Amazing Tool,
							<br class="d-lg-block">
							You Can Target Facebook's
							<br class="d-lg-block">
							Hidden Interests!</h1>
						<p>Make hyper-targeted advertising based on people's interests with this Facebook™ interest targeting tool. This tool is currently used by our internal marketing team, but we have now made it public and 100% free.</p>
						<p>Since Facebook™ only shows you 25 interest suggestions when you create campaigns, this is an excellent way to discover thousands of targetable but hidden Facebook™ interests, allowing you to save time, money, and find the perfect niche interests you're looking for.</p>
					</div>
				<?php endif; ?>
				<?php if(ICL_LANGUAGE_CODE == 'zh'): ?>
					<div class="col-12 col-md-7 col-lg-7 description-section">
						<h1>使用 Facebook ™ 這個分析工具，
							<br class="d-lg-block">
							您能進一步了解您的客戶隱藏的興趣！
						</h1>
						<p>使用 Facebook ™ 興趣目標設定工具，可根據用戶的興趣來設定廣告受眾，鎖定對象，助您找到會喜歡您企業的社群。 First Page團隊正在使用這項Facebook ™分折工具，它能提升廣告的成效。它現時可供大眾使用，並且是完全免費的。</p>
						<p>當您在 Facebook ™ 上創建活動時，您會收到 25個興趣建議。 但如何確保能獲得最合適的25個建議呢？ 使用這個Facebook ™ ™分折工具，您可以找到數千個可定位但隱藏的 Facebook ™興趣建議，既能節省時間和金錢，同時又能找到您正在搜尋的利基興趣。</p>
					</div>
				<?php endif; ?>
				<div class="col-12 col-md-5 col-lg-5 text-center d-none d-md-block">
					<img src="/wp-content/uploads/2022/02/facebook-interest-finder-banner.png" class="img-fluid" alt="Facebook Hidden ad Interest Finder"/>
				</div>
			</div>
		</div>
	</section>

	<section class="section-white shaded-white" style="background:white">
		<div class="d-sm-flex justify-content-center" id='fp-roi-calculator' data-currency='$'>
			<div class="seo-roi-calculator">
				<div class="container fp-container roi-for-section facebook-box-shadow" style="background-color:#ffffff">
					<div class="row mx-0">
						<div class="col-12 col-lg-12">
							<form id="search-form" class="field has-addons">
								<p class="control d-none mb-0">
									<span class="select">
										<select id="locale">
											<option value="en_US">English</option>
											<option value="th_TH">Thai</option>
											<option value="vi_VN">Vietnamese</option>
										</select>
									</span>
								</p>
								<div class="d-sm-flex search-wrapper">
									<nav class="breadcrumb has-arrow-separator" aria-label="breadcrumbs">
										<div id="keyword-history"></div>
									</nav>
									<p class="control is-expanded mb-0" style="width:100%">
										<?php if(ICL_LANGUAGE_CODE == "en"): ?>
											<input id="keyword" class="input form-control keyword-form" type="text" onload="this.value=''" placeholder="Enter your keyword"/>
										<?php endif; ?>
										<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
											<input id="keyword" class="input form-control keyword-form" type="text" onload="this.value=''" placeholder="輸入您的關鍵字"/>
										<?php endif; ?>
									</p>
									<p class="control mb-0">
										<a id="search-form-submit" class="btn fp-btn fp-btn-orange button is-primary btn-width" style="color:white; white-space: nowrap;">
											<?php if(ICL_LANGUAGE_CODE == "en"): ?>
												Get
											<?php endif; ?>
											<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
												搜索
											<?php endif; ?>
										</a>
									</p>
								</div>
							</form>
							<?php if(ICL_LANGUAGE_CODE == "en"): ?>
								<p id="desc" style="color:#ff5254" class="d-none">Please add a keyword</p>
							<?php endif; ?>
							<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
								<p id="desc" style="color:#ff5254" class="d-none">請添加關鍵字</p>
							<?php endif; ?>
						</div>

						<div class="col-12 col-lg-6">
							<div class="row fp-vertical-align fp-show-block no-gutters" id="fp-total-search-volume">
								<div class="col-12 col-md-12">
									<div class="d-sm-flex d-inline-block align-items-baseline">
										<h4 class="subtitle has-text-centered">
											<?php if(ICL_LANGUAGE_CODE == "en"): ?>
												Ad Interests
											<?php endif; ?>
											<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
												廣告興趣
											<?php endif; ?>
										</h4>
										<div id="interest-result-section" class="result_section d-none">
											<span id="interest-counter"></span>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<?php if(ICL_LANGUAGE_CODE == "en"): ?>
													<th class="d-none d-md-block">ID</th>
													<th class="w-200">Name</th>
													<th>Audience size</th>
												<?php endif; ?>
												<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
													<th class="d-none d-md-block">ID</th>
													<th class="w-200">姓名</th>
													<th>客戶規模</th>
												<?php endif; ?>
											</thead>
											<tbody id="interest-table-body">
													<tr>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
													</tr>
											</tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="row fp-vertical-align fp-show-block no-gutters" id="fp-total-search-volume">
							<div class="col-12 col-md-12">
								<div class="d-sm-flex d-inline-block align-items-baseline">
									<h4 class="subtitle has-text-centered">
										<?php if(ICL_LANGUAGE_CODE == "en"): ?>
											Ad Interest Suggestions
										<?php endif; ?>
										<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
											廣告興趣建議
										<?php endif; ?>
									</h4>
									<div id="suggestion-result-section" class="result_section d-none">
										<span id="suggestion-counter"></span>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<?php if(ICL_LANGUAGE_CODE == "en"): ?>
												<th class="d-none d-md-block">ID</th>
												<th class="w-200">Name</th>
												<th>Audience size</th>
											<?php endif; ?>
											<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
												<th class="d-none d-md-block">ID</th>
												<th class="w-200">姓名</th>
												<th>客戶規模</th>
											<?php endif; ?>
										</thead>
										<tbody id="suggestion-table-body">
												<tr>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
												</tr>
										</tbody>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div></section>

<section id="content" class="site__content p-0" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
	<?php endwhile; ?>
</section>


<!-- Exit popup -->


<style>
	.exit-intent-popup {
		display: none;
		position: fixed;
		z-index: 9999;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background-color: rgba(0, 0, 0, 0.5);
	}
	
	.exit-intent-popup-box {
		position: absolute;
		padding: 2.5rem;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: #ff5254;
		color: #fff;
		width: 90%;
		border-radius: 15px;
		text-align: center;
	}
	
	.exit-intent-popup-close {
		position: absolute;
		left: 100%;
		top: 0;
		margin: 15px 0 0 -35px;
		width: 20px;
		height: 20px;
		color: #BB4041;
		font-size: 30px;
		font-weight: bold;
		text-align: center;
		border-radius: 50%;
		cursor: pointer;
		text-decoration: none;
	}
	
	
	@media(min-width: 900px){
		.exit-intent-popup-box {
			padding: 4.5rem;
			width: 950px;
		} 
	}
	
	</style>
	
	<div class="exit-intent-popup">
	  <div class="exit-intent-popup-box">

		<?php if(ICL_LANGUAGE_CODE == 'en'): ?>
			<h4 class="mb-3 h1"><strong>Still in doubt?</strong></h4>
			<p class="mb-3 p-tag-h2-style"><strong>Claim your 100% free REVENUE GROWTH strategy session with an experienced digital strategist valued at $2800HKD.</strong></p>
			<p class="mb-4" style="font-size:25px;font-weight:normal;line-height:35px;">We outline foolproof strategies for significantly increasing website traffic and revenue, even in difficult economic times. </p>
			<p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">Hurry! Limited spots available!</p>
			<a href="<?php echo get_home_url(); ?>/free-growth-strategy" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session free-session-btn">GET MY FREE REVENUE GROWTH SESSION</a>
		<?php endif; ?>
		<?php if(ICL_LANGUAGE_CODE == 'zh'): ?>
			<h4 class="mb-3 h1"><strong>還有疑問？</strong></h4>
			<p class="mb-3 p-tag-h2-style"><strong>費獲取由經驗豐富的數碼策略專家提供的營業額增長策略課程（價值HKD$2800）。</strong></p>
			<p class="mb-4" style="font-size:25px;font-weight:normal;line-height:35px;">我們將會教授於經濟不景氣期間，能顯著提升網站流量及營業額的策略。</p>
			<p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">名額有限，立即報名！</p>
			<a href="<?php echo get_home_url(); ?>free-growth-strategy" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session free-session-btn">獲取我的免費營業額增長課程</a>
		<?php endif; ?>

		<a href="#" class="exit-intent-popup-close">X</a>
	  </div>
	</div>
	
	
	<script>
		function addEvent(obj, evt, fn) {
			if (obj.addEventListener) {
				obj.addEventListener(evt, fn, false);
			} else if (obj.attachEvent) {
				obj.attachEvent("on" + evt, fn);
			}
		}
	
		addEvent(document, 'mouseout', function(evt) {
			if (evt.toElement == null && evt.relatedTarget == null) {
				$('.exit-intent-popup').slideDown();
			};
		});
	
		$('a.exit-intent-popup-close').click(function() {
			$('.exit-intent-popup').slideUp();
		});

		$(document).click(function(e) {
		if (!$(e.target).closest('.exit-intent-popup-box').length) {
			$('.exit-intent-popup').slideUp();
		}
		});

		if ($(window).width() < 480 || $(window).height() < 480) {
			setTimeout(function(){
				$('.exit-intent-popup').slideDown();
			}, 5000);
		}


	</script>
<!-- Exit popup ends -->




<?php get_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js" integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script><script>
let submitForm = (e) => {
e.preventDefault();
i = 0;
let keyword = document.getElementById("keyword").value.trim();
submitKeyword(keyword);
};

let submitKeyword = (keyword) => {
dataLayer.push({event: "fbt-submit-keyword", keyword: keyword});

const apiPath = "/fb-interest-finder-page/backend.php";

document.getElementById("keyword").value = keyword;

if ((keyword.length == 0)) {
document.getElementById("desc").classList.remove('d-none');
$('#interest-counter').text("No results");
$('#suggestion-counter').text("No results");
document.getElementById("suggestion-result-section").classList.remove('d-none');
document.getElementById("interest-result-section").classList.remove('d-none');
return false;
} else { // add to title and history
setTitle(keyword);
document.getElementById("suggestion-result-section").classList.remove('d-none');
document.getElementById("interest-result-section").classList.remove('d-none');
document.getElementById("desc").classList.add('d-none');

// document.getElementById("keyword-history").innerHTML += `<li class="blue-bubble"><a class="pointer-none" onclick="submitKeyword('${keyword}')">${keyword}</a><span class="closeButton">X</span></li>`;
document.getElementById("keyword-history").innerHTML += `<li class="blue-bubble"><a class="pointer-none" onclick="submitKeyword('${keyword}')">${keyword}</a></li>`;
$(".result_section").css("background", "#E3EEFF");
$(".result_section").css("color", "#00225d");
}

// // Use live to bind click event to each li and remove it
// $('.closeButton').live('click', function () {
// $(this).parent().remove();
// });

document.getElementById("keyword").value = '';

let locale = document.getElementById("locale").value;

// get interests
axios.get(apiPath, {
params: {
type: "adinterest",
kw: keyword,
locale,
_limit: 10
}
}).then((a) => showAudiences(a.data.data, "interest"));

// get suggestions
axios.get(apiPath, {
params: {
type: "adinterestsuggestion",
kw: keyword,
locale,
_limit: 10
}
}).then((b) => showAudiences(b.data.data, "suggestion"));
};

let i = 0;

let showAudiences = (audiences, table_id) => {
let table = document.getElementById(table_id + "-table-body");
let counter = document.getElementById(table_id + "-counter");
let desc = document.getElementById("desc");

if (audiences.length == 0) {
i++;
counter.innerText = " No results";
if (i == 2) {
desc.classList.remove('d-none');
}
} else {
desc.classList.add('d-none');
counter.innerText = " " + audiences.length + "";
} table.innerHTML = "";

audiences.forEach((audience) => {
let row = document.createElement("tr");

if(audience.audience_size_upper_bound != null){
    row.innerHTML = `<td class="d-none d-md-block">${audience.id}</td><td><a onclick="submitKeyword('${audience.name}')">${audience.name}</a></td><td>${audience.audience_size_upper_bound}</td>`;
}
else{
    row.innerHTML = `<td class="d-none d-md-block">${audience.id}</td><td><a onclick="submitKeyword('${audience.name}')">${audience.name}</a></td><td>${audience.audience_size}</td>`;
}


table.appendChild(row);
});
};

let setTitle = (title) => {
document.title = title.length > 0 ? title + " - Hidden Ad Interest Finder | First Page" : "Hidden Ad Interest Finder | First Page";
};

let goToKeyword = (e) => {
e.preventDefault();
console.log(e);
submitKeyword(e.target.text);
};

document.getElementById("search-form").onsubmit = submitForm;
document.getElementById("search-form-submit").onclick = submitForm;</script>
