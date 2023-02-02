<?php
/**
 * Template Name: Reviews Template
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"
    integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>

<style>


    @media (min-width: 992px){

		section.banner:first-of-type{
		padding-top: 100px;
		}

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
		.star-rating svg{
			fill: #FEDA00;
		}
	</style>

    <section class="banner">
        <div class="container">
            <div class="row overall-review">
                <div class="col-12 col-lg-6 overall-review-text mb-3">
					<?php if(ICL_LANGUAGE_CODE == "en"): ?>
                    	<h2 class="bold">What our clients<br><strong>say about us</strong></h2>
					<?php endif; ?>
        			<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
						<h2 class="bold">看看客戶們<br>對我們的評價吧</h2>
					<?php endif; ?>
                </div>
                <div class="col-12 col-lg-6 overall-review-stars">
                    <div class="overall-review-data">
                        <div class="col-rating mb-2">
                            <div class="rating-stars overall-stars d-block">
                                <div class="star-rating" style="width:97%">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" id="Layer_1" x="0px" y="0px" viewBox="0 0 4654 1008" style="enable-background:new 0 0 4654 1008;"><path d="M610,611l69,295L419,748L159,906l69-295L0,412l301-26l118-277l118,277l301,26L610,611z"></path><path d="M1564,611l69,295l-260-158l-260,158l69-295L954,412l301-26l118-277l118,277l301,26L1564,611z"></path><path d="M2518,611l69,295l-260-158l-260,158l69-295l-228-199l301-26l118-277l118,277l301,26L2518,611z"></path><path d="M3472,611l69,295l-260-158l-260,158l69-295l-228-199l301-26l118-277l118,277l301,26L3472,611z"></path><path d="M4426,611l69,295l-260-158l-260,158l69-295l-228-199l301-26l118-277l118,277l301,26L4426,611z"></path></svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-write mb-3">
                            <div class="overall-stats">
								<?php if(ICL_LANGUAGE_CODE == "en"): ?>
									<span class="overall-rating"><strong>4.9</strong> from <strong>53</strong> reviews</span>
								<?php endif; ?>
								<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
									<span class="overall-rating"><strong>53</strong>個評論中取得<strong>4.9</strong>分</span>
								<?php endif; ?>
                            </div>
                            <a href="https://getfivestars.com/k-27767" class="btn fp-btn fp-btn-orange fp-btn-shadow" target="_blank">
								<?php if(ICL_LANGUAGE_CODE == "en"): ?>
									Write A Review
								<?php endif; ?>
        						<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
									留下評論
								<?php endif; ?>
							</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<?php

		// Get Reviews
		$api_url    = get_site_url() . "/action/reviews/get_latest.php?busid=" . $context['review_id'];
		$ch         = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $api_url);
		$result     = curl_exec($ch);
		$reviews    = json_decode($result);


		// Set Review Details
		$r_count  = count($reviews);
		$total_stars = 0;
		foreach ($reviews as $review) {
			$total_stars += $review->rating;
		}
		$r_average   = $total_stars / $r_count;
		$star_width  = ($r_average / 5) * 100;

		$context['reviews'] = array(
			'count'      => $r_count,
			'average'    => round($r_average, 1),
			'star_width' => round($star_width, 0),
			'reviews'    => $reviews
		);

		// Check if there's an overwriting json file in the data directory
		$reviews_file = get_stylesheet_directory() . '/data/' . '-' . 'reviews.json';
		if (file_exists($reviews_file)) {
			$reviews_json = json_decode(file_get_contents($reviews_file));
			if ($reviews_json) {
				$context['reviews']['reviews'] = $reviews_json;
			}
		}

	?>

	<?php if($reviews['reviews']): ?>
	<section class="section-reviews section-white">
    <div class="container">
		<?php foreach($reviews['reviews'] as $_key => $review) { ?> 
            <div class="cust-review row" itemprop="review" itemscope itemtype="http://schema.org/Review">
                <div class="col-12 col-md-4 mb-2 p-0">
                    <div class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                        <meta itemprop="worstRating" content="1" />
                        <div class="rating-stars">
                            <div class="star-rating" style="width:<?php echo ($review['rating'] * 20); ?>%"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" id="Layer_1" x="0px" y="0px" viewBox="0 0 4654 1008" style="enable-background:new 0 0 4654 1008;"><path d="M610,611l69,295L419,748L159,906l69-295L0,412l301-26l118-277l118,277l301,26L610,611z"/><path d="M1564,611l69,295l-260-158l-260,158l69-295L954,412l301-26l118-277l118,277l301,26L1564,611z"/><path d="M2518,611l69,295l-260-158l-260,158l69-295l-228-199l301-26l118-277l118,277l301,26L2518,611z"/><path d="M3472,611l69,295l-260-158l-260,158l69-295l-228-199l301-26l118-277l118,277l301,26L3472,611z"/><path d="M4426,611l69,295l-260-158l-260,158l69-295l-228-199l301-26l118-277l118,277l301,26L4426,611z"/></svg></div>
                            <div class="star-base"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" id="Layer_1" x="0px" y="0px" viewBox="0 0 4654 1008" style="enable-background:new 0 0 4654 1008;"><path d="M610,611l69,295L419,748L159,906l69-295L0,412l301-26l118-277l118,277l301,26L610,611z"/><path d="M1564,611l69,295l-260-158l-260,158l69-295L954,412l301-26l118-277l118,277l301,26L1564,611z"/><path d="M2518,611l69,295l-260-158l-260,158l69-295l-228-199l301-26l118-277l118,277l301,26L2518,611z"/><path d="M3472,611l69,295l-260-158l-260,158l69-295l-228-199l301-26l118-277l118,277l301,26L3472,611z"/><path d="M4426,611l69,295l-260-158l-260,158l69-295l-228-199l301-26l118-277l118,277l301,26L4426,611z"/></svg></div>
                        </div>
                        <p class="d-none"><span itemprop="ratingValue"><?php echo $reviews['rating']; ?></span> out of <span itemprop="bestRating">5</span> stars.</p>
                    </div>
                    <h4>
                        <span class="rev-author" itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $review['name']; ?></span></span>
                        <span class="rev-date">- <meta itemprop="datePublished" content="<?php echo strtr($review['date'], [',' => '']); ?>"><?php echo date(strtr($review['date'], [',' => '']), 'M d, Y'); ?></span>
                    </h4>
                </div>
                <div class="col-12 col-md-8 mb-2 p-0">
                    <p class="rev-comment" itemprop="reviewBody"><?php echo $review['comment']; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
	</section>
	<?php endif; ?>



	<section id="content" class="site__content p-0" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
		<?php endwhile; ?>
	</section>







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
