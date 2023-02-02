<?php
/**
 * Template Name: Survey Form
 *
 * @package ROI_Blank_Theme
 */  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.typekit.net/wqq0bzd.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="/wp-content/themes/firstpage/assets/css/style.css" />
    <link rel="stylesheet" href="/wp-content/themes/firstpage/assets/css/strategy-forms.css"/>


    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5WQD5S6');</script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '626312374449025');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=626312374449025&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <meta name="description" content="See how we can get you massive amounts of traffic, leads and sales 🔥 Get your free custom strategy from the #1 SEO company in Hong Kong!">
    <title>Get Your Free, Custom SEO Strategy | Take Action Today</title>
</head>
<style>
    p{
        font-family: proxima-nova, sans-serif;
        font-size: 20px;
        margin-bottom: 40px !important;
    }
    span.wpcf7-form-control.wpcf7-radio{
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-content: center;
    }

    input[type="radio"] {
        display: none;
    }

    .ratings .wpcf7-list-item-label {
        display: block;
        width: 100%;
        background-color: #ddd;
        padding: 15px 30px;
        cursor: pointer;
        font-family: proxima-nova, sans-serif;
        font-size: 20px;
        font-weight: bold;
    }

    .ratings input[type=radio]:checked + .wpcf7-list-item-label {
        background-color: #427FE0 !important;
    }

    textarea{
        border: none;
        /* border-radius: 1px !important; */
        -webkit-appearance: none !important;
        box-shadow: 0px 0px 14px 4px rgb(221 221 221) !important;
        -webkit-box-shadow: 0px 0px 14px 4px rgb(221 221 221) !important;
        -moz-box-shadow: 0px 0px 14px 4px rgb(221, 221, 221) !important;
        padding: 10px;
        padding-left: 18px;
        height: 150px;
        width: 100%;
        border: 1px solid #d2d1d1c7;
        font-size: 17px !important;
        font-weight: 600;
    }

    .screen-reader-response{
        display: none !important;
    }

    input, textarea{
        margin: 15px 0;
    }
</style>
<style>
    .checkboxes{
        display: flex;
        flex-flow: row wrap;
    }
    .checkboxes span.wpcf7-list-item{
        flex: 0 0 33%;
        padding: 15px;
        padding-left: 0;
    }
    .wpcf7-checkbox label {
        position: relative;
        cursor: pointer;
        margin-bottom: 0;
    }

    .wpcf7-checkbox input[type=checkbox] {
        position: absolute;
        visibility: hidden;
        width: 30px;
        height: 30px;
        top: 0;
        left: 0
    }

    .wpcf7-checkbox input[type=checkbox]+span {}

    .wpcf7-checkbox input[type=checkbox]+span:before {
        display: block;
        background: #ddd;
        position: absolute;
        content: '';
        border-radius: 0;
        height: 30px;
        width: 30px;
        top: 0;
        left: 0;
        border-radius: 10px
    }

    .wpcf7-checkbox input[type=checkbox]+span:after {
        display: block;
        position: absolute;
        content: "\2713";
        color: #fff;
        height: 30px;
        width: 30px;
        top: 0;
        left: 0;
        visibility: hidden;
        font-size: 18px;
        text-align: center;
        line-height: 30px
    }

    .wpcf7-checkbox input[type=checkbox]:checked+span:before {
        background: #427FE0;
    }

    .wpcf7-checkbox input[type=checkbox]:checked+span:after {
        visibility: visible;
    }

    .checkboxes .wpcf7-list-item-label {
        margin-left: 40px;
        display: inline-block;
    }

    .custom-checkbox {
        background: #E1E1E1;
        display: flex;
        flex-wrap: wrap;
        padding: 0;
        margin-top: 30px;
    }

    .custom-checkbox .wpcf7-list-item {
        flex: 0 0 30%
    }

    form.wpcf7-form.sent .careers-form {
        display: none;
    }

    .wpcf7-response-output{
        text-align: center;
    }

    @media(max-width:675px) {
        .checkboxes span.wpcf7-list-item{
        flex: 0 0 50%;
        }

        .custom-checkbox {
            flex-flow: column;
        }

        .form-group.text-left.mb-0 {
            margin-top: 5rem;
        }

        span.wpcf7-form-control.wpcf7-radio{
            gap: 5px;
            justify-content: space-evenly;
        }

        .ratings{
            flex-flow:row wrap;
        }

        .ratings .wpcf7-list-item{
            flex: 0 0 20%;
            width: 20%;
        }
    }
</style>
<body class="strategy-form-body">
    <div class="container mt-3 mt-sm-5 strategy-form-container">
        <div class="logo-holder">
            <svg width="223px" height="40px" viewBox="0 0 223 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>fp-logo-form</title>
                <g id="Free-Strategy-Form" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Startegy-Session-Form---Step-1" transform="translate(-608.000000, -28.000000)"
                        fill="#427FE0">
                        <g id="Group-3" transform="translate(47.000000, 28.000000)">
                            <g id="fp-logo-form" transform="translate(561.000000, 0.000000)">
                                <path
                                    d="M52,29.7257618 L52,12.2742382 L61.9520924,12.2742382 L61.9520924,13.5706371 L53.3999107,13.5706371 L53.3999107,20.7506925 L61.1885047,20.7506925 L61.1885047,22.0470914 L53.3999107,22.0470914 L53.3999107,29.7257618 L52,29.7257618 Z M71.8605512,29.7257618 L71.8605512,12.2742382 L73.2604619,12.2742382 L73.2604619,29.7257618 L71.8605512,29.7257618 Z M86.3759888,29.7257618 L84.9760781,29.7257618 L84.9760781,12.2742382 C85.968742,12.2742382 88.7431105,12.2243767 89.2521689,12.2243767 C94.113677,12.2243767 95.4881347,14.5927978 95.4881347,17.2603878 C95.4881347,19.7534626 93.6555244,21.6232687 91.2629497,22.1218837 L97.4989155,29.7257618 L95.7681169,29.7257618 L89.8375861,22.3961219 L86.3759888,22.3961219 L86.3759888,29.7257618 Z M89.1758102,13.5207756 C88.6412988,13.5207756 87.2159352,13.5457064 86.3759888,13.5706371 L86.3759888,21.099723 L89.4557923,21.099723 C91.7211023,21.099723 94.0118653,19.5789474 94.0118653,17.2603878 C94.0118653,15.1412742 92.790125,13.5207756 89.1758102,13.5207756 L89.1758102,13.5207756 Z M114.712363,25.3878116 C114.712363,20.4515235 105.498405,22.2465374 105.498405,16.4127424 C105.498405,13.9695291 107.407374,12.0498615 110.716254,12.0498615 C112.701582,12.0498615 114.508739,12.7479224 115.501403,13.8199446 L114.737816,14.8421053 C113.719699,13.8448753 112.396147,13.3462604 110.76716,13.3462604 C108.425491,13.3462604 106.974675,14.567867 106.974675,16.4127424 C106.974675,21.299169 116.188632,19.3047091 116.188632,25.3628809 C116.188632,28.1551247 113.668793,29.9501385 110.512631,29.9501385 C108.400038,29.9501385 105.931105,29.0027701 105.040253,27.432133 L105.880199,26.4847645 C106.923769,27.8808864 108.883644,28.6537396 110.487178,28.6537396 C112.676129,28.6537396 114.712363,27.531856 114.712363,25.3878116 L114.712363,25.3878116 Z M123.271817,13.5706371 L123.271817,12.2742382 L137.856341,12.2742382 L137.856341,13.5706371 L131.264034,13.5706371 L131.264034,29.7257618 L129.864124,29.7257618 L129.864124,13.5706371 L123.271817,13.5706371 Z M149.16471,29.7257618 L146.034001,29.7257618 L146.034001,12.2742382 C147.026665,12.2742382 149.851939,12.2243767 151.099132,12.2243767 C156.342434,12.2243767 157.996874,14.966759 157.996874,17.833795 C157.996874,20.800554 155.731564,23.4930748 151.480926,23.4930748 C150.946415,23.4930748 149.928298,23.4930748 149.16471,23.4182825 L149.16471,29.7257618 Z M151.404567,15.0914127 C150.768244,15.0914127 150.004657,15.1163435 149.16471,15.1412742 L149.16471,20.501385 C149.902845,20.5761773 150.666433,20.6260388 151.379115,20.6260388 C153.237178,20.6260388 154.687994,19.7534626 154.687994,17.8088643 C154.687994,15.9889197 153.542613,15.0914127 151.404567,15.0914127 Z M163.145637,29.7257618 L170.679701,12.2243767 L173.428617,12.2243767 L180.962682,29.7257618 L177.628349,29.7257618 L175.770286,25.2631579 L168.159862,25.2631579 L166.301799,29.7257618 L163.145637,29.7257618 Z M171.9778,16.1883657 L169.35615,22.3961219 L174.573998,22.3961219 L171.9778,16.1883657 Z M195.885366,23.1939058 L195.885366,20.3268698 L203.113996,20.3268698 L203.113996,27.5567867 C201.535915,29.1024931 198.659735,30 196.44533,30 C190.616611,30 187.155014,26.434903 187.155014,21 C187.155014,15.9889197 190.591158,12 196.038084,12 C198.583376,12 200.314175,12.6481994 201.764991,13.7700831 L200.441439,16.2132964 C199.550587,15.3905817 197.972506,14.867036 196.419878,14.867036 C192.983733,14.867036 190.463894,17.1108033 190.463894,21 C190.463894,24.7146814 192.881921,27.132964 196.496236,27.132964 C197.870694,27.132964 199.525134,26.5595568 200.18691,25.9362881 L200.18691,23.1939058 L195.885366,23.1939058 Z M212.437038,29.7257618 L212.437038,12.2742382 L222.745471,12.2742382 L222.745471,15.1412742 L215.567747,15.1412742 L215.567747,19.4792244 L221.981883,19.4792244 L221.981883,22.3462604 L215.567747,22.3462604 L215.567747,26.8587258 L223,26.8587258 L223,29.7257618 L212.437038,29.7257618 Z"
                                    id="Shape"></path>
                                <path
                                    d="M20.815047,27.75 C20.1880878,25.875 19.4357367,23.75 19.4357367,23.75 C18.9341693,22.25 17.8056426,21 16.1755486,20.5 L8.77742948,18 L7.52351098,17.625 C5.76802507,17 5.76802507,14.625 7.39811911,14 C8.15047023,13.75 8.65203761,13.5 8.65203761,13.5 L33.9811911,3.75 C33.9811911,3.75 34.231975,3.625 34.4827586,3.625 C35.736677,3.125 36.8652039,4.375 36.3636364,5.625 L36.1128527,6.25 C36.1128527,6.25 31.8495298,17.5 29.3416927,23.75 C28.338558,26.75 21.8181818,30.75 20.815047,27.75 L20.815047,27.75 Z M19.4357367,31.625 L21.69279,38.25 C22.0689655,39.375 23.0721002,40 24.075235,40 C25.07837,40 26.0815048,39.5 26.4576802,38.375 L39.8746082,3.5 C40,3.25 40,2.875 40,2.5 C40,1.125 38.8714734,0 37.492163,0 C37.2413793,0 36.8652039,0 36.61442,0.125 L1.63009404,13.5 C0.501567398,13.875 0,14.875 0,15.875 C0,16.875 0.626959248,17.875 1.75548589,18.25 L8.40125391,20.5 C13.291536,22.25 17.8056426,26.75 19.4357367,31.625 L19.4357367,31.625 Z"
                                    id="Shape"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="strategy-form-header m-4">
            <div class="sf-cross-holder" id="sf-cross-holder">
                <a href="/"><i class="fas fa-times fa-lg"></i></a>
            </div>
        </div>

        <?php echo do_shortcode( '[contact-form-7 id="24288" title="Survey Form"]' ); ?>

        <div class="d-flex w-100 mt-4">
            <a href="https://firstpage.hk/" class="btn fp-btn fp-btn-orange backToHome mx-auto" >BACK TO HOME</a>
        </div>
  
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="/wp-content/plugins/contact-form-7/includes/js/index.js"></script>



    <script>
        jQuery('.backToHome').hide();
        var wpcf7Elm = document.querySelector( '.wpcf7-form' );

        if(jQuery('.careers-form').is(":hidden")){
            jQuery('.backToHome').show();
        }


        wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
            jQuery('.backToHome').show();
        }, false );
    </script>

</body>

</html>