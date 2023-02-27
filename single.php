<?php get_header(); ?>

<?php

$args = array(
    'posts_per_page' => 5,
    'post_type' => 'post',
    'cat' => wp_get_post_categories($post)
);
$query = new WP_Query($args);
$all_posts = $query->posts;

$prev_post = get_adjacent_post(false, '', true);
$next_post = get_adjacent_post(false, '', false);

$author_id = get_the_author_meta('ID', $post->post_author);
$author_image = get_field('profile_image', 'user_' . $author_id);

?>

<section class="pad-header"></section>

<section class="section-blog section-grey">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mb-5">
                <div class="d-lg-none blog-content-mobile">
                    <a class="post-back"
                       href="/resources/">
                        <i class="fa fa-caret-left"
                           aria-hidden="true"></i>
                        <span>Back</span>
                    </a>
                    <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    <span id="eta-mobile"
                          class="post-length eta">
                        <?php echo get_field('post_length'); ?> minute read
                    </span>
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                    <span id="eta-mobile"
                          class="post-length eta">
                        <?php echo get_field('post_length'); ?>分鐘</br>閱讀時間
                    </span>
                    <?php endif; ?>
                </div>
                <div class="blog-content">
                    <!-- {% if post.thumbnail %}
                    {% set video_cat = '' %}
                    {% if 'Videos' in post.categories %}
                    {% set video_cat = 'is-video' %}
                    {% endif %} -->

                    <a class="image-wrapper post-thumbnail"
                       href="<?php echo get_permalink(); ?>"
                       style="padding-bottom: 56.25%;">
                        <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>"
                             alt="<?php the_title(); ?>">
                        <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                        <span id="eta-desktop"
                              class="post-length d-none d-lg-flex eta">
                            <?php echo get_field('post_length'); ?> </br> minute </br> read
                        </span>
                        <?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                        <span id="eta-desktop"
                              class="post-length d-none d-lg-flex eta">
                            <?php echo get_field('post_length'); ?>分鐘</br>閱讀時間
                        </span>
                        <?php endif; ?>
                    </a>
                    <!-- {% endif %} -->

                    <div class="post-desc">
                        <div class="post-avatar"
                             style="background-image: url('<?php echo $author_image['url']; ?>"></div>
                        <div class="post-info"><span class="post-author">
                                <?php echo get_the_author_meta('display_name', $post->post_author); ?>
                            </span><br><span class="post-date">
                                <?php $t = strtotime($post->post_date);
                                echo date('d/m/Y', $t);
                                ; ?>
                            </span>
                        </div>
                    </div>

                    <div class="post-content">
                        <h1>
                            <?php the_title(); ?>
                        </h1>

                        <?php the_content(); ?>
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4 mb-5 blog-post-sidebar">
                <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
                <a href="<?php echo get_home_url(); ?>/resources"
                   class="d-none d-lg-block btn btn-block fp-btn fp-btn-orange fp-btn-shadow">RETURN TO<br>LEARNING
                    CENTRE</a>
                <?php endif; ?>
                <?php if (ICL_LANGUAGE_CODE == 'de'): ?>
                <a href="<?php echo get_home_url(); ?>resources"
                   class="d-none d-lg-block btn btn-block fp-btn fp-btn-orange fp-btn-shadow">返回教學中心</a>
                <?php endif; ?>
                <div class="related-articles">
                    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
                    <h2>Related articles</h2>
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == 'de'): ?>
                    <h2>相關文章</h2>
                    <?php endif; ?>
                    <div>
                        <!-- Yarpp related post plugin -->
                        <?php
                        if (function_exists('yarpp_related')) {
                            yarpp_related();
                        } else {
                            foreach ($all_posts as $individual_post) { ?>
                        <?php setup_postdata($individual_post); ?>
                        <a href="<?php echo get_permalink($individual_post->ID); ?>">
                            <span>
                                <?php echo get_the_title($individual_post->ID); ?>
                            </span>
                        </a>
                        <?php wp_reset_postdata(); ?>
                        <?php }
                        }
                        ?>
                    </div>
                </div>
                <!-- Navigation -->
                <div class="blog-navigations d-lg-none">
                    <div class="">
                        <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
                        <a href="<?php echo get_home_url(); ?>/resources"
                           class="btn fp-btn fp-btn-orange fp-btn-shadow btn-block">RETURN TO<br>LEARNING
                            CENTRE</a>
                        <?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == 'de'): ?>
                        <a href="<?php echo get_home_url(); ?>resources"
                           class="btn fp-btn fp-btn-orange fp-btn-shadow btn-block">返回教學中心</a>
                        <?php endif; ?>
                    </div>
                    <div class="">
                        <?php if ($prev_post) { ?>
                        <a class="blog-nav blog-nav-left"
                           href="<?php echo get_permalink($prev_post->ID); ?>">
                            <i class="fa fa-caret-left"
                               aria-hidden="true"></i>
                            <span class="blog-nav-text blog-prev">
                                <?php echo $prev_post->post_title; ?>
                            </span>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="">
                        <?php if ($next_post) { ?>
                        <a class="blog-nav blog-nav-right"
                           href="<?php echo get_permalink($next_post->ID); ?>">
                            <span class="blog-nav-text blog-next">
                                <?php echo $next_post->post_title; ?>
                            </span>
                            <i class="fa fa-caret-right"
                               aria-hidden="true"></i>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="blog-sidebar-banner">
                    <img src="/wp-content/themes/firstpage/assets/img/img_nick_blog@2x.png"
                         class="img-fluid"
                         alt="First Page"
                         style="margin-bottom: -100px;" />
                    <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                    <p class="p-tag-h2-style">Get your FREE revenue growth strategy session<br>valued at $2000HKD.</p>
                    <p>Limited spots available!</p>
                    <a href="/free-growth-strategy/"
                       class="btn btn-block fp-btn fp-btn-orange fp-btn-shadow promoted-banner-lcenter">GET YOUR FREE
                        REVENUE <br> GROWTH SESSION</a>
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                    <p class="p-tag-h2-style">免費領取一節價值港幣＄2000的行銷策略課堂，<br>增加公司收益！</p>
                    <p>名額有限！</p>
                    <a href="/zh/free-growth-strategy/"
                       class="btn btn-block fp-btn fp-btn-orange fp-btn-shadow promoted-banner-lcenter">立即領取</a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
        <!-- Navigation -->
        <div class="row blog-navigations d-none d-lg-flex">
            <div class="col-12 col-md-4">
                <?php if ($prev_post) { ?>
                <a class="blog-nav blog-nav-left"
                   href="<?php echo get_permalink($prev_post->ID); ?>">
                    <i class="fa fa-caret-left"
                       aria-hidden="true"></i>
                    <span class="blog-nav-text blog-prev">
                        <?php echo $prev_post->post_title; ?>
                    </span>
                </a>
                <?php } ?>
            </div>
            <div class="col-12 col-md-4">
                <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
                <a href="<?php echo get_home_url(); ?>/resources"
                   class="btn fp-btn fp-btn-orange fp-btn-shadow btn-block">RETURN TO<br>LEARNING
                    CENTRE</a>
                <?php endif; ?>
                <?php if (ICL_LANGUAGE_CODE == 'de'): ?>
                <a href="<?php echo get_home_url(); ?>resources"
                   class="btn fp-btn fp-btn-orange fp-btn-shadow btn-block">返回教學中心</a>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-4">
                <?php if ($next_post) { ?>
                <a class="blog-nav blog-nav-right"
                   href="<?php echo get_permalink($next_post->ID); ?>">
                    <span class="blog-nav-text blog-next">
                        <?php echo $next_post->post_title; ?>
                    </span>
                    <i class="fa fa-caret-right"
                       aria-hidden="true"></i>
                </a>
                <?php } ?>
            </div>
        </div>

    </div>

</section>

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
        padding: 4.5rem;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #ff5254;
        color: #ffffff;
        width: 90%;
        max-width: 950px;
        border-radius: 15px;
        text-align: center;
    }

    @media(max-width: 992px) {
        .exit-intent-popup-box {
            padding: 2.5rem;
        }
    }

    .exit-intent-popup-close {
        color: #ffffff;
        background: transparent;
        border: none;
        outline: none;
        font-size: 18px;
        text-decoration: underline;
        text-align: center;
    }

    .exit-intent-popup-close:hover {
        color: #BB4041;
    }

    .exit-intent-popup-close.mobile {
        position: absolute;
        left: 100%;
        top: 0;
        margin: 15px 0 0 -35px;
        width: 20px;
        height: 20px;
        display: none;
    }

    @media(max-width: 992px) {
        .exit-intent-popup-close.mobile {
            display: inline-block;
        }
    }

    .exit-intent-popup-close.desktop {
        display: inline-block;
        text-align: center;
    }

    @media(max-width: 395px) {
        .exit-intent-popup-box .h2 {
            font-size: 1.4rem;
        }
    }

    .exit-intent-popup .quote-form {
        margin: 0 auto;
    }

    .exit-intent-popup .awards-badges {
        text-align: center !important;
        margin-top: 30px;
    }


    .exit-intent-popup .awards-badges img {
        width: 100%;
        max-width: 640px;
    }

    .exit-intent-popup .awards-badges img.mobile-img {
        max-width: 280px;
    }

    .exit-intent-popup .quote-form.quote-form-big .input-group {
        box-shadow: none !important;
        flex-direction: column !important;
    }

    .exit-intent-popup .quote-form.quote-form-big .input-group button {
        border-radius: 4px !important;
        box-shadow: 0 12px 18px 0 rgb(0 0 0 / 15%) !important;
    }
</style>


	
<div id="exit-intent-popup" class="exit-intent-popup">
	<div class="exit-intent-popup-box">

        <h4 class="mb-3 h2"><strong><?php trans("Get your free ", '獲取您的免費')?><?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory;?><?php trans(" growth strategy session and skyrocket your revenue!", '增長課程，令您的營業額飆升！')?></strong></h4>

        <div class="quote-form quote-form-big">
            <form 
                class="fp-form" 
                action="<?php echo get_site_url(); ?>/thank-you/" 
                method="POST">

                <div class="form-step-1 form-step">
                        <div class="input-group">
                            <div class="input-group-btn"><button type="button" class="btn fp-btn fp-btn-white fp-btn-shadow form-continue"><?php trans("GET MY FREE ", '獲取我的免費')?><?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory;?><?php trans(" GROWTH STRATEGY SESSION", '增長課程')?> </button></div>
                        </div>
                </div>

                <div class="form-step-2 form-step">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" class="form-control" name="lead_name" placeholder="<?php trans('First Name*', '名字*')?>" data-parsley-error-message="<?php trans('Please enter a valid name', '請輸入有效的名字')?>" required="" />
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="tel" class="form-control" name="lead_phone" placeholder="<?php trans('Phone*', '電話*')?>" data-parsley-error-message="<?php trans('Please enter a valid phone number', '請輸入一個有效的電話號碼')?>" required="" />
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" class="form-control" name="lead_email" placeholder="<?php trans('Email*', '電郵*')?>" data-parsley-error-message="<?php trans('Please enter a valid email address', '請輸入有效的電子郵件地址')?>" data-parsley-trigger="change" data-parsley-domaincheck required="" />
                        </div>
                        <div class="col-12 col-md-6">
                                <input type="text" class="form-control" name="lead_website" placeholder="<?php trans('Website', '網址')?>" data-parsley-website-check />
                            </div>
                        <div class="col-12 col-md-12">
                            <input type="hidden" name="lead_formname" value="Single Post - <?php the_title(); ?>" />
                            <input type="hidden" name="lead_language" value="en" />
                            <input type="hidden" name="lead_formtype" value="hs_quote_form" />
                            <button type="submit" data-title="Single Post - <?php the_title(); ?>" class="form-control btn fp-btn fp-btn-white fp-btn-shadow buttonFormClick" ><?php trans("GET MY FREE ", '獲取我的免費')?><?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory;?><?php trans(" GROWTH STRATEGY SESSION", '增長課程')?></button>
                        </div>
                    </div>
                </div>

                    <div class="form-thankyou">
                        <p class="bold-lg">Yes! Welcome to more<br />leads, sales &amp; success online.</p>
                        <p class="small">Your Digital Growth Specialist will be in touch within 48 hours. Alternatively, for an instant chat, please call <a href="tel:<?php the_field('phone_number', 'option'); ?>" class="text-nowrap"><?php the_field('phone_number', 'option'); ?></a></p>
                    </div>

            </form>
        </div>

        <button id="close" class="exit-intent-popup-close desktop"><?php trans("I don't want", '我不需要')?></button>

        <div class="text-center text-md-left awards-badges relative">
            <?php if (ICL_LANGUAGE_CODE == "en"): ?>
                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block" alt="" />
                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm.svg" class="mobile-img img-fluid d-sm-none" alt="" />
            <?php endif; ?>
            <?php if (ICL_LANGUAGE_CODE == "zh"): ?>
                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_lg-zh.webp" class="img-fluid d-none d-sm-inline-block" alt="" />
                <img src="/wp-content/themes/firstpage/assets/img/img_banner_badges_sm-zh.svg" class="mobile-img img-fluid d-sm-none" alt="" />
            <?php endif; ?>
        </div>
	</div>
</div>

<script>
        var dismissed = false;

		function addEvent(obj, evt, fn) {
			if (obj.addEventListener) {
				obj.addEventListener(evt, fn, false);
			} else if (obj.attachEvent) {
				obj.attachEvent("on" + evt, fn);
			}
		}

        function showPopup() {
            $('.exit-intent-popup').slideDown({
                start: function () {
                    $(this).css({ display: "flex" })
                }
            });
        }

        function hidePopup() {
            $('.exit-intent-popup').slideUp();
        }
	
		addEvent(document, 'mouseout', function(evt) {
			if (evt.toElement == null && evt.relatedTarget == null)
                showPopup();
		});
	
		$('.exit-intent-popup-close').click(hidePopup);


		if ($(window).width() < 480 || $(window).height() < 480) {
			setTimeout(function(){
				showPopup();
			}, 5000);
		}

        $('.exit-intent-popup .form-continue').on('click', function() {
            if ($(window).width() <= 992)
                $('.exit-intent-popup .awards-badges').css('display','none');
        });

        $(window).on('scroll', function() {
            var s = $(window).scrollTop(),
                d = $(document).height(),
                c = $(window).height();

            var scrollPercent = (s / (d - c)) * 100;
            
            if (scrollPercent > 50 && !dismissed) {
                dismissed = true;
                showPopup();
            }
        });
</script>


<script type="text/javascript">
    jQuery(document).ready(function() {
    // If the 'hide cookie is not set we show the message
    if (readCookie('hide-2')) {
        //alert('no cookie');
        // jQuery('#exit-intent-popup').css('display', 'none');
        jQuery('#exit-intent-popup').remove();
      }
    
    // Add the event that closes the popup and sets the cookie that tells us to
    // not show it again until one day has passed.
    
    jQuery('#close').on('click', function() {
        jQuery('#exit-intent-popup').remove();

        createCookie('hide-2', true, 1)
        return false;
    })
    
    });
    
    // ---
    // And some generic cookie logic
    // ---
    function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    } else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
    }
    
    function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
    }    
</script>



<!-- <script>
/*!

Name: Reading Time
Dependencies: jQuery
Author: Michael Lynch
Author URL: http://michaelynch.com
Date Created: August 14, 2013
Date Updated: June 19, 2015
Licensed under the MIT license

*/
!(function(e) {
    e.fn.readingTime = function(n) {
        var t = {
                readingTimeTarget: ".eta",
                wordCountTarget: null,
                wordsPerMinute: 270,
                round: !0,
                lang: "en",
                lessThanAMinuteString: "",
                prependTimeString: "",
                prependWordString: "",
                remotePath: null,
                remoteTarget: null,
                success: function() {},
                error: function() {},
            },
            i = this,
            r = e(this);
        i.settings = e.extend({}, t, n);
        var a = i.settings;
        if (!this.length) return a.error.call(this), this;
        if ("it" == a.lang)
            var s = a.lessThanAMinuteString || "Meno di un minuto",
                l = "";
        else
            var s = a.lessThanAMinuteString || "1 </br> minute </br> read",
                l = "";
        var u = function(n) {
            if ("" !== n) {
                var t = n.trim().split(/\s+/g).length,
                    i = a.wordsPerMinute / 60,
                    r = t / i;
                if (a.round === !0) var u = Math.round(r / 60);
                else var u = Math.floor(r / 60);
                var g = Math.round(r - 60 * u);
                if (a.round === !0) e(a.readingTimeTarget).text(u > 0 ? a.prependTimeString + u + " " + l :
                    a.prependTimeString + s);
                else {
                    var o = u + ":" + g;
                    e(a.readingTimeTarget).text(a.prependTimeString + o);
                }
                "" !== a.wordCountTarget && void 0 !== a.wordCountTarget && e(a.wordCountTarget).text(a
                    .prependWordString + t), a.success.call(this);
            } else a.error.call(this, "The element is empty.");
        };
        r.each(function() {
            null != a.remotePath && null != a.remoteTarget ?
                e.get(a.remotePath, function(n) {
                    u(e("<div>").html(n).find(a.remoteTarget).text());
                }) :
                u(r.text());
        });
    };
})(jQuery);


jQuery('.post-content').readingTime({
    readingTimeAsNumber: true,
    wordsPerMinute: 1000,
    appendTimeString: '1 minute read',
    round: true,
    lang: 'en',
    success: function(data) {
        console.log(data);
    },
    error: function(data) {
        console.log(data.error);
    }
});
</script>

<script>
var div = document.getElementById('eta-desktop');
div.innerHTML += '</br>minute</br>read </br>';
var div = document.getElementById('eta-mobile');
div.innerHTML += 'minute read </br>';

</script> -->

<?php get_footer();