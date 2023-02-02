<?php
/**
 * Template Name: Monthly Service Confirmation
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>


<style>
    a[href="https://www.firstpage.hk/free-proposal/"], div#mega-menu-wrap-primary_navigation, footer{
        display: none !important;
    }

    @media(min-width: 783px){
        .admin-bar .navbar-header .navbar-collapse, .admin-bar .navbar-header.fixed-top {
        top: 80px !important;
        }
        .navbar-header{
            padding-top: 3.5rem !important;
        }
        .min-header.navbar-header{
            padding-top: .5rem !important;
        }
    }

    .secure-payments p:nth-child(1){
        display: none;
    }

</style>

<section class="banner">
    <div class="container text-center">
        <h1>Monthly Service Activation</h1>
    </div>
</section>

<section class="secure-payments">
    <div class="container text-center">
        <h2>Payment Received</h2>
        <div>
            <?php echo do_shortcode('[simpay_payment_receipt]'); ?>
        </div>
    </div>
</section>

<script>
    jQuery('.secure-payments p:nth-child(1)').text('Thank you, we are looking forward to working with you.');
    jQuery('.secure-payments p:nth-child(1)').show();
</script>



<?php get_footer(); ?>