<?php
/**
 * Template Name: Thankyou Competitor
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
.page-id-136 .new-thank-you-page-banner{
    display: none;

}
.page-id-299 .new-thank-you-page-banner{
    display: block;
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
<section class="banner extra-pad-shorter form-space new-thank-you-page-banner" style="background-image:none !Important; background-color:#4778C5; padding-bottom: 50px; dis">
<div class="container banner-hero">
<div class="banner-hero-cont">

<div class="" style="padding: 2rem 0;">
    <h1 class="m-0 px-0 pb-3">We're currently analyzing your competitor's website!</h1>
    <p style="">Your report is on its way - please check your email in approximately 5 minutes.</p>
    <?php if(get_field('phone_number', 'option')): ?>
    <p style="">To speak to someone now, call <a href="tel:<?php the_field('phone_number', 'option'); ?>" style="color:#fff !important; text-decoration:underline;"><?php the_field('phone_number', 'option'); ?></a></p>
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
</div>

<div class="hero-img hero-img-md d-none d-md-block d-lg-none">
<img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/img-banner-thank-you-briana-3x.png" class="img-fluid" alt="First Page" style="max-width:450px; right:-110px; position: relative;"/>
</div>
<div class="hero-img d-none d-lg-block">
<img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/img-banner-thank-you-briana-3x.png"  alt="First Page" style="max-width:600px;"/>
</div>
</div>
</section>


<section class="section-office-hours section-white">
<div class="container">
<div class="row">
<div class="col-12 col-md-5 offset-md-1 mb-5">
<?php if(get_field('address', 'option')): ?>
<h3 class="mb-4">Office</h3>
<p><a href="https://www.google.com/maps/place/First+Page+-+%231+%F0%9F%8F%85Digital+Marketing+%26+SEO+Agency/@-37.8285184,144.997028,15z/data=!4m5!3m4!1s0x0:0xd19eee9ef63d8720!8m2!3d-37.8285485!4d144.99728" title="The SEO Agency Melbourne - Lv 6, 534 Church Street,
Richmond Melbourne VIC 3121"><?php the_field('address', 'option'); ?></a></p>
<?php endif; ?>
<?php if(get_field('phone_number', 'option')): ?>
<p>
    <strong>Phone</strong><br />
    <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
</p>
<?php endif; ?>
<?php if(get_field('email', 'option')): ?>
<p>
    <strong>Email</strong><br />
    <a href="mailto:<?php the_field('email', 'option'); ?>" class="blue"><?php the_field('email', 'option'); ?></a>
</p>
<?php endif; ?>
</div>

<div class="col-12 col-md-5 mb-5">
<h3 class="mb-4">Hours of Operation</h3>
<table class="table">
    <tr>
        <th scope="row">Monday</th>
        <td>09:00am - 05:30pm</td>
    </tr>
    <tr>
        <th scope="row">Tuesday</th>
        <td>09:00am - 05:30pm</td>
    </tr>
    <tr>
        <th scope="row">Wednesday</th>
        <td>09:00am - 05:30pm</td>
    </tr>
    <tr>
        <th scope="row">Thursday</th>
        <td>09:00am - 05:30pm</td>
    </tr>
    <tr>
        <th scope="row">Friday</th>
        <td>09:00am - 05:30pm</td>
    </tr>
</table>
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
<h3>Worldwide Locations</h3>
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