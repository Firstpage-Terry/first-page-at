<?php
/**
 * Template Name: Monthly Service Activation
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>


<style>
    a.free-strategy-btn, 
    .superist-nav,
    div#mega-menu-wrap-primary_navigation,
    .language-switchers,
    button.navbar-toggler,
    footer{
        display: none !important;
    }

    .menu {
        width: 100%;
    }

    .navbar-header .phone {
        right: 15px;
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
    <div class="container">
        <div class="secure-payments-header text-center">
            <h2>Secure Payments</h2>
            <p>Please use the form below to make your first payment and activate your monthly service at the rate below. An invoice for the payment will be sent to you via email within 5 business days.</p>
        </div>
        <?php echo do_shortcode('[simpay id="26781"]'); ?>
        <div class="secure-payments-footer text-center">
            <div class="d-flex" style="max-width:400px;">
                <img src="/wp-content/themes/firstpage/assets/img/card-logo-visa.png" alt="" width="75px" height="auto">
                <img src="/wp-content/themes/firstpage/assets/img/card-logo-mastercard.png" alt="" width="75px" height="auto">
                <img src="/wp-content/themes/firstpage/assets/img/card-logo-amex.png" alt="" width="75px" height="auto">    
            </div>

            <p>By making this payment, you are agreeing to initiate our services under our standard <a href="/terms-of-business/" target="_blank">Terms of Business</a>.</p>
        </div>
    </div>
</section>


<?php get_footer(); ?>

<!-- Check functions.php for code to change price -->