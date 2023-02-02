<?php
/**
 * Template Name: Contact Us
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
        border-radius: 50px !important;
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

<section class="section-office-hours section-white">
<div class="container">
<div class="row">
<div class="col-12 col-md-5 offset-md-1 mb-5">
<?php if(get_field('address', 'option')): ?>

<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
<h3 class="mb-4">Office</h3>
<?php } ?>
<?php if(ICL_LANGUAGE_CODE == 'zh') { ?>
<h3 class="mb-4">辦公室資料</h3>
<?php } ?>

<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
<p>Room 3503-07, 35/F, Wu Chung House,<br>
213 Queen’s Road East,<br>
Wan Chai, Hong Kong</p>
<?php } ?>
<?php if(ICL_LANGUAGE_CODE == 'zh') { ?>
<p>香港灣仔皇后大道東213號胡忠大廈35樓3503-07室</p>
<?php } ?>

<?php endif; ?>
<?php if(get_field('phone_number', 'option')): ?>
<p> 
    <?php if(ICL_LANGUAGE_CODE == 'en') { ?>
    <strong>Phone</strong><br />
    <?php } ?>
    <?php if(ICL_LANGUAGE_CODE == 'zh') { ?>
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
    <?php if(ICL_LANGUAGE_CODE == 'zh') { ?>
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

<?php if(ICL_LANGUAGE_CODE == 'zh') { ?>
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
<?php if(ICL_LANGUAGE_CODE == 'zh') { ?>
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