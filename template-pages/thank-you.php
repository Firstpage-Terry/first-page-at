<?php
/**
 * Template Name: Thankyou
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

<style>
.checklist li {
    padding-left:5px;
}
.checklist li::marker {
    color: #fff;
    content: "\f00c";
    font-family: "FontAwesome";
}
@media(max-width: 950px){
    .new-thank-you-page-banner .form-thankyou{
        border-radius: 50px !important;*
    }
    .cta-button{
        max-width: 100% !important;
    }
}
.page-thank-you  .banner.contact-us{
    display: none !important;
}
.page-thank-you ul li{
    line-height: 25px !important; 
}
</style>

<!-- Banner -->
<section class="banner extra-pad-shorter form-space new-thank-you-page-banner" style="background-image:none !important; background-color:#4778C5; padding-bottom: 50px;">
    <div class="container banner-hero">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="banner-hero-cont">
                    <?php if (ICL_LANGUAGE_CODE == "en") : ?>
                        <div class="" style="padding: 2rem 0;">
                            <h1 class="m-0 px-0 pb-3">Help is on the way!</h1>
                            <p style="">We appreciate that your situation might be urgent, so your Digital Strategist will contact you within 1 business day.</p>
                            <?php if(get_field('phone_number', 'option')): ?>
                            <p style="">Alternatively, to speak to someone now, call <a href="tel:<?php the_field('phone_number', 'option'); ?>" style="color:#fff !important; text-decoration:underline;"><?php the_field('phone_number', 'option'); ?></a></p>
                            <?php endif; ?>
                        </div>
                        <div style="background:linear-gradient(to right, #ffffff -36%,#4678C4 100%); height: 2px;"></div>
                        <p>Now to give you that winning head start, we recommend you list your business on Lisnic.com for FREE. </p>
                        <h2 class="h4 py-4 font-weight-bold">Why should you list your business for free?</h2>

                        <div class="container mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="mb-0 checklist" style="padding-left: 5px;">
                                        <li>Be rated #1 in your industry (social proof)</li>
                                        <li>Get more eyeballs on your business</li>
                                        <li>Get real reviews easily from customers</li>
                                        <li>Upload photos and videos to showcase your culture</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="mb-0 checklist" style="padding-left: 5px;">
                                        <li>Own page 1 of Google for your brand name</li>
                                        <li>Get a high quality SEO link</li>
                                        <li>And a whole lot more</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex d-md-block d-lg-block flex-column-reverse">
                            <div class="hero-img-mobile d-md-none form-hide">
                                <img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/img-banner-thank-you-brianna (1).png" class="img-fluid d-block mx-auto" alt="First Page" />
                            </div>
                            <div class="cta-button d-flex flex-column" style="max-width:350px;">
                                <a href="https://www.lisnic.com/business/pricing" class="btn fp-btn fp-btn-orange show-popup-form p-4" >Get my free perks</a>
                                <span class="text-left pt-4">You can thank us later :)</span>
                            </div>    
                        </div>
                    <?php endif; ?>

                    <?php if(ICL_LANGUAGE_CODE == 'de'): ?>
                        <div class="" style="padding: 2rem 0;">
                            <h1 class="m-0 px-0 pb-3">讓我們協助您</h1>
                            <p>我們明白您的情況也許很緊急，因此我們的數碼營銷專家將於1 個工作日內與您聯繫。</p>
                            <?php if(get_field('phone_number', 'option')): ?>
                                <p>您亦可以立即致電<a href="tel:<?php the_field('phone_number', 'option'); ?>" style="color:#fff !important; text-decoration:underline;"><?php the_field('phone_number', 'option'); ?></a>聯絡我們。</p>
                            <?php endif; ?>
                        </div>
                        <div style="background:linear-gradient(to right, #ffffff -36%,#4678C4 100%); height: 2px;"></div>
                        <p>搶佔先機是成功的關鍵，我們建議您在Lisnic.com 上免費刊登業務資訊：</p>
                        <h2 class="h4 py-4 font-weight-bold">為什麼您應刊登業務資訊？</h2>

                        <div class="container mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="mb-0 checklist" style="padding-left: 5px;">
                                        <li>讓您獲得業界第一的頭銜（社會認同）</li>
                                        <li>讓更多人關注您的業務</li>
                                        <li>輕鬆獲得客戶的真實評價</li>
                                        <li>可上傳照片和影片展示您的企業文化</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="mb-0 checklist" style="padding-left: 5px;">
                                        <li>讓您的品牌名稱登上Google 首頁</li>
                                        <li>獲取高質量的SEO連結</li>
                                        <li>還有更多</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex d-md-block d-lg-block flex-column-reverse">
                            <div class="hero-img-mobile d-md-none form-hide">
                                <img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/img-banner-thank-you-brianna (1).png" class="img-fluid d-block mx-auto" alt="First Page" />
                            </div>
                            <div class="cta-button d-flex flex-column" style="max-width:350px;">
                                <a href="https://www.lisnic.com/business/pricing" class="btn fp-btn fp-btn-orange show-popup-form p-4">立即獲取免費諮詢</a>
                                <span class="text-left pt-4">你會感謝我們的 :)</span>
                            </div>    
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-4 d-none d-md-block">
                <div class="hero-img hero-img-md d-none d-md-block d-lg-none">
                    <img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/img-banner-thank-you-briana-3x.png" alt="First Page"/>
                </div>
                <div class="hero-img d-none d-lg-block">
                    <img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/img-banner-thank-you-briana-3x.png"  alt="First Page"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-office-hours section-white">
<div class="container">
<div class="row">
<div class="col-12 col-md-5 offset-md-1 mb-5">
<?php if(get_field('address', 'option')): ?>

<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
<h3 class="mb-4">Office</h3>
<?php } ?>
<?php if(ICL_LANGUAGE_CODE == 'de') { ?>
<h3 class="mb-4">辦公室資料</h3>
<?php } ?>

<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
<p>Room 3503-07, 35/F, Wu Chung House,<br>
213 Queen’s Road East,<br>
Wan Chai, Hong Kong</p>
<?php } ?>
<?php if(ICL_LANGUAGE_CODE == 'de') { ?>
<p>香港灣仔皇后大道東213號胡忠大廈35樓3503-07室</p>
<?php } ?>

<?php endif; ?>
<?php if(get_field('phone_number', 'option')): ?>
<p> 
    <?php if(ICL_LANGUAGE_CODE == 'en') { ?>
    <strong>Phone</strong><br />
    <?php } ?>
    <?php if(ICL_LANGUAGE_CODE == 'de') { ?>
    <strong>電話</strong><br />
    <?php } ?>

    <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
</p>
<?php endif; ?>
<?php if(get_field('email', 'option')): ?>
<p>
    <?php if(ICL_LANGUAGE_CODE == 'en') { ?>
    <strong>Email</strong><br />
    <?php } ?>
    <?php if(ICL_LANGUAGE_CODE == 'de') { ?>
    <strong>電郵</strong><br />
    <?php } ?>
    <a href="mailto:<?php the_field('email', 'option'); ?>" class="blue"><?php the_field('email', 'option'); ?></a>
</p>
<?php endif; ?>
</div>

<div class="col-12 col-md-5 mb-5">

<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
    <h3 class="mb-4">Hours of Operation</h3>
    <table class="table">
        <tr>
            <th scope="row">Monday</th>
            <td>09:00am - 6:00pm</td>
        </tr>
        <tr>
            <th scope="row">Tuesday</th>
            <td>09:00am - 6:00pm</td>
        </tr>
        <tr>
            <th scope="row">Wednesday</th>
            <td>09:00am - 6:00pm</td>
        </tr>
        <tr>
            <th scope="row">Thursday</th>
            <td>09:00am - 6:00pm</td>
        </tr>
        <tr>
            <th scope="row">Friday</th>
            <td>09:00am - 6:00pm</td>
        </tr>
    </table>
<?php } ?>

<?php if(ICL_LANGUAGE_CODE == 'de') { ?>
    <h3 class="mb-4">辦公時間</h3>
    <table class="table">
        <tr>
            <th scope="row">星期一</th>
            <td>09:00am - 6:00pm</td>
        </tr>
        <tr>
            <th scope="row">星期二</th>
            <td>09:00am - 6:00pm</td>
        </tr>
        <tr>
            <th scope="row">星期三</th>
            <td>09:00am - 6:00pm</td>
        </tr>
        <tr>
            <th scope="row">星期四</th>
            <td>09:00am - 6:00pm</td>
        </tr>
        <tr>
            <th scope="row">星期五</th>
            <td>09:00am - 6:00pm</td>
        </tr>
    </table>
<?php } ?>

</div>
</div>
</div>
</section>

<!-- Map -->
<?php if(get_field('address', 'option')): ?>
<div id="office-map"></div>
<script>var map_location = JSON.parse('{"lat":22.274280,"lng":114.172710,"name":"First Page","address":"Room 3503-07, 35/F, Wu Chung House, 213 Queens Road East, Wan Chai, Hong Kong"}')</script>
    <script src="/wp-content/themes/firstpage/js/defaults/map.js?v.1.01"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBWkvUTB5qbT5MdyKomr3-OiECj-nBQi18&callback=initMap"></script>
<?php endif; ?>

<?php if(get_field('worldwide_locations')): ?>
<section class="section-worldwide-locations section-white">
<div class="container">

<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
    <h3>Worldwide Locations</h3>
<?php } ?>
<?php if(ICL_LANGUAGE_CODE == 'de') { ?>
    <h3>全球辦事處</h3>
<?php } ?>

<div class="row">
<?php if( have_rows('worldwide_locations') ): ?>
<?php while( have_rows('worldwide_locations') ): the_row(); ?>
<div class="col-12 col-md-4">
    <div class="location-box">
        <h5><?php echo get_sub_field('country_name'); ?></h5>
        <p>
            <?php echo get_sub_field('address'); ?>
        </p>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
</section>
<?php endif; ?>

<section id="content" class="site__content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
<?php endwhile; ?>

</section>

<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
event: "thankyoupageforads",
eventCategory: "Form Submission",
eventAction: "Free Proposal Form Thank You Page",
eventLabel: "Submitted",
});
</script>


    
<?php get_footer(); ?>