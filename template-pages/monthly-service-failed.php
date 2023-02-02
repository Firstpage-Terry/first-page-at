<?php
/**
 * Template Name: Monthly Service Failed
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

</style>


<section class="banner">
    <div class="container text-center">
        <h1>Monthly Service Activation</h1>
    </div>
</section>

<section class="secure-payments">
    <div class="container text-center">
        <h2>Payment Failed</h2>
        <p>We’re sorry, but your transaction failed to process. Please try again or contact site support.</p>
    </div>
</section>

<script>
    jQuery('.secure-payments p').text('Please try again, or contact your First Page team member for assistance.')
</script>


<?php get_footer(); ?>