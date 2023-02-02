<?php
    /**
     * Template Name: QR Code Generator
     *
     * @package ROI_Blank_Theme
     */

    get_header(); ?>

    <!-- MAIN STYLING ----->
    <style>
        :root {
            --section-padding-y: 100px;
            --section-padding-x: 20px;

            --background-color-white: #FFFFFF;
            --background-color-grey: #F6F6F6;

            --text-color-dark-blue: #00225d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .showhide {
            display: none !important;
        }
    </style>

    <!-- IFRAME STYLING --->
    <style>
        /******************* iframe *************************/
        iframe { border: none; }
        iframe[data-target-view="link"] { height: 1854px; }
        iframe[data-target-view="location"] { height: 2258px; }
        iframe[data-target-view="email"] { height: 1972px; }
        iframe[data-target-view="text"] { height: 1918px; }
        iframe[data-target-view="wifi"] { height: 1896px; }
        iframe[data-target-view="tel"] { height: 1854px; }
        iframe[data-target-view="sms"] { height: 1996px; }
        iframe[data-target-view="whatsapp"] { height: 1996px; }
        iframe[data-target-view="vcard"] { height: 2518px; }
        iframe[data-target-view="paypal"] { height: 2096px; }

        #click-catcher {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 84px;
            margin-top: 34px;
            display: flex;
            flex-wrap: wrap;
            padding: 0 32px;
            pointer-events: none;
        }

        #click-catcher span {
            width: 20%;
        }
    </style>
    
    <!-- SECTION STYLING -->
    <style>
        /******************* Step list *************************/
        .paragraph-step {
            position: relative;
            margin-bottom: 30px;
            padding-left: 130px;
        }

        .paragraph-step.first-step {
            margin-top: 30px;
        }

        .paragraph-step span {
            position: absolute;
            display: block;
            float: left;
            top: -8px;
            left: 0;
            background: #427FE0;
            padding: 8px 30px;
            border-radius: 30px;
            color: #ffffff;
        }

        .line-to-right {
            position: relative;
            display: inline-block;
            width: fit-content;
        }

        .line-to-right::after {
            content: "";
            position: absolute;
            bottom: 50%;
            top: 50%;
            left: 102%;
            width: 42vw;
            height: 2px;
            background: #427FE0;
            z-index: 1;
        }

        .image-container-right img {
            position: relative;
            z-index: 2;
        }

        @media (max-width: 780px) {
            .line-to-right::after {
                width: 60px;
            }
        }

        @media (max-width: 768px) {
            .line-to-right::after {
                display: none;
            }
        }


        /******************* fps_bannerSection *************************/
        .fps_bannerSection {
            position: relative;
            padding: 203px 0 0;
            min-height: 700px;
            background: url("/wp-content/themes/firstpage/assets/img/google-review-link-generator/bg.png");
            background-size: cover;
            background-position: center;
        }

        .fps_banner-outer {
            grid-gap: 10px;
            margin: auto;
            padding: 0 24px;
            max-width: 1330px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .fps_banner-innerTxt {
            margin-top: 34px;
        }

        .fps_banner-innerTxt > h1 {
            margin: 0;
            max-width: 800px;
            width: 100%;
            font-style: normal;
            font-weight: 700;
            font-size: 52px;
            line-height: 54px;
            color: #ffffff;
            padding-bottom: 5px;
        }

        .fps_banner-innerTxt > h2 {
            margin: 0;
            max-width: 755px;
            width: 100%;
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 54px;
            color: #ffffff;
        }

        .fps_banner-innerTxt > p {
            margin: 10px 0 0 0;
            max-width: 692px;
            width: 100%;
            font-style: normal;
            font-weight: 200;
            font-size: 20px;
            line-height: 24px;
            color: #ffffff;
        }

        .fps_banner-innerImg {
            max-width: 478px;
            width: 100%;
            display: block;
        }

        @media (min-width: 1200px) {
            
        }

        @media (max-width: 1200px) {
            .fps_banner-innerImg {
                max-width: 410px;
            }

            .fps_banner-innerTxt > h2 {
                font-size: 45px;
                line-height: 47px;
            }
        }

        @media (max-width: 1025px) {
            .fps_banner-innerTxt > h2 {
                font-size: 44px;
                line-height: 46px;
            }
        }

        @media (max-width: 991px) {
            .fps_bannerSection {
                padding: 120px 0 0;
            }

            .fps_banner-outer {
                align-items: center;
            }

            .fps_banner-innerImg {
                max-width: 330px;
            }

            .fps_banner-innerTxt > h2 {
                font-size: 32px;
                line-height: 34px;
                margin: 16px 0;
            }
        }

        @media (max-width: 768px) {
            .fps_banner-innerTxt > h1 {
                text-align: center;
                font-size: 45px;
            }

            .fps_banner-outer {
                flex-direction: column;
            }

            .fps_banner-innerTxt {
                margin-top: 0;
            }
            .fps_banner-innerTxt>h2 {
                max-width: 480px;
            }
        }

        @media (max-width: 576px) {
            .fps_banner-innerTxt > h2 {
                text-align: center;
            }

            .fps_banner-innerTxt > p {
                text-align: center;
            }
        }

        @media (max-width:460px) {
            .fps_banner-innerImg > img{
                max-width: 100%;
            }

            .fps_bannerSection {
                padding: 103px 0 32px;
                min-height: 660px;
                position: relative;
                background: url("/wp-content/themes/firstpage/assets/img/google-review-link-generator/bg-shap-2.png") no-repeat;
                background-size: cover;
            }

            .fps_bannerSection::before {
                pointer-events: none;
                position: absolute;
                content: '';
                width: 100%;
                height: 731px;
                background: url("/wp-content/themes/firstpage/assets/img/google-review-link-generator/bg-shape1.png") no-repeat;
                background-size: cover;
            }
        
            .fps_banner-innerImg {
                margin-top: 80px;
                max-width: 312px;
            }
        
            .fps_banner-outer {
                padding: 0 21px;
            }

            .fps_banner-innerTxt > h2 {
                margin-bottom: 16px;
                margin-top: 16px;
                font-size: 23px;
                line-height: 36px;
                text-align: center;
            }

            .fps_banner-innerTxt > p {
                margin: auto;
                max-width: 318px;
            }
        }


        /******************* fps_formSection *************************/
        .fps_formSection {
            background: var(--background-color-white);
        }

        .fps_formWrap-outer {
            margin: auto;
            position: relative;
            margin-top: -274px;
            max-width: 1310px;
            width: 100%;
        }

        .fps_formWrap-inner {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
        }

        @media (max-width: 1088px) {
            .fps_formWrap-outer {
                margin-top: -234px;
            }
        }

        @media (max-width: 1025px) {
            .fps_formWrap-outer {
                margin-top: -270px;
            }

            .fps_value_inner_box {
                padding:44px 10px 0;
            }

            .fps_formWrap-outer {
                padding: 47px 20px 59px;
            }
        }

        @media (max-width: 824px) {
            .fps_formWrap-outer {
                margin-top: -23%;
            }
        }

        @media (max-width: 768px) {
            .fps_formSection {
                padding-top: 0;
                padding-bottom: 50px;
            }
            
            .fps_formWrap-outer {
                margin-top: -200px;
            }

            .fps_formWrap-inner {
                flex-direction: column;
                align-items: center;
            }            
        }

        @media (max-width:460px) {
            .fps_formSection {
                padding: 17px 0 0;
            }

            .fps_formWrap-outer {
                margin-top: 0;
            }

            .fps_formWrap-outer {
                padding: 0 20px 0;
            
            }
        }


        /*************** Paragraph Section **********************/
        .paragraph-section {
            padding-top: var(--section-padding-y);
            padding-left: var(--section-padding-x);
            padding-right: var(--section-padding-x);
        }

        .paragraph-section .paragraph-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-end;
        }

        .paragraph-section .paragraph-row.reverse {
            flex-direction: row-reverse;
        }

        .paragraph-section .paragraph-row .paragraph-row-heading {
            flex: 1 0 auto;
            width: 100%;
        }

        .paragraph-section .paragraph-row .paragraph-row-heading h2 {
            display: none;
            font-size: 34px;
            line-height: 44px;
            font-style: normal;
            font-weight: 700;
            color: var(--text-color-dark-blue);
        }

        .paragraph-section .paragraph-row .paragraph-row-text,
        .paragraph-section .paragraph-row .paragraph-row-image {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .paragraph-section .paragraph-row .paragraph-row-image {
            text-align: center;
        }

        .paragraph-section .paragraph-row .paragraph-row-image img {
            height: auto;
            max-width: 40vw;
            position: relative;
            z-index: 2;
        }

        .paragraph-section .paragraph-row .paragraph-row-text {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .paragraph-section .paragraph-row .paragraph-row-text img {
            display: none;
            padding-bottom: 1.5rem;
        }

        .paragraph-section .paragraph-row .paragraph-row-text h2,
        .paragraph-section .paragraph-row .paragraph-row-heading h2 {
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 45px;
            color: var(--text-color-dark-blue);
        }

        .paragraph-section .paragraph-row .paragraph-row-text p {
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            color: var(--text-color-dark-blue);
        }

        @media (min-width: 992px) {
            .paragraph-section .paragraph-row .paragraph-row-text {
                max-width: 570px;
            }
        }
        
        @media (max-width: 1200px) {
            .paragraph-section .paragraph-row .paragraph-row-text h2,
            .paragraph-section .paragraph-row .paragraph-row-heading h2 {
                font-size: 38px;
                line-height: 43px;
            }
        }

        @media (max-width: 1025px) {
            .paragraph-section .paragraph-row .paragraph-row-text h2,
            .paragraph-section .paragraph-row .paragraph-row-heading h2 {
                font-size: 36px;
                line-height: 41px;
            }
        }

        @media (max-width: 1022px) {
            .paragraph-section .paragraph-row .paragraph-row-image {
                top: 25%;
                left: -30px;
                position: relative;
            }
        }

        @media (max-width: 991px) {
            .paragraph-section .paragraph-row {
                flex-wrap: wrap;
            }

            .paragraph-section .paragraph-row .paragraph-row-text h2:not(.only-heading) {
                display: none;
            }

            .paragraph-section .paragraph-row .paragraph-row-heading h2 {
                display: block;
            }

            .paragraph-section .paragraph-row .paragraph-row-image {
                top: -200px;
                left: -20px;
            }
        }

        @media (max-width: 768px) {
            .paragraph-section .paragraph-row {
                flex-direction: column;
            }

            .paragraph-section .paragraph-row .paragraph-row-image {
                display: none;
            }

            .paragraph-section .paragraph-row .paragraph-row-text {
                flex-basis: 100%;
                max-width: 100%;
            }

            .paragraph-section .paragraph-row .paragraph-row-text img {
                display: block;
            }

            .paragraph-section .paragraph-row .paragraph-row-text h2,
            .paragraph-section .paragraph-row .paragraph-row-heading h2 {
                font-size: 32px;
                line-height: 47px;
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .paragraph-section .paragraph-row .paragraph-row-text h2,
            .paragraph-section .paragraph-row .paragraph-row-heading h2 {
                font-size: 30px;
                line-height: 45px;
            }
        }


        /*******************  Benefits Section  *****************************/
        .benefits-section {
            margin: auto;
            padding-top: var(--section-padding-y);
            padding-left: var(--section-padding-x);
            padding-right: var(--section-padding-x);
            max-width: 1130px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-self: center;
            gap: 27px;
            flex-direction: column;
        }

        .benefits-section .benefits-heading {
            text-align: center;
        }

        .benefits-section .benefits-heading h2 {
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 45px;
            color: var(--text-color-dark-blue);
        }

        .benefits-section .benefits-heading p {
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            color: var(--text-color-dark-blue);
        }

        .benefits-section .benefits-items-wrapper {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-self: center;
            gap: 27px;
            flex-direction: column;
        }

        .benefits-section .benefits-items-wrapper .benefit-item {
            width: 100%;
            background: var(--background-color-white);
            box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.15);
            display: flex;
            border-radius: 0.25rem;
            align-items: center;
        }

        .benefits-section .benefits-items-wrapper .benefit-item .benefit-image {
            flex: 0 0 25%;
            padding: 0 15px;
        }

        .benefits-section .benefits-items-wrapper .benefit-item .benefit-image > img {
            width: 100%;
            display: block;
            padding: 20px;
            object-fit: contain;
            max-width: 200px;
            min-width: 200px;
            max-height: 200px;
            margin: 0 auto;
        }

        .benefits-section .benefits-items-wrapper .benefit-item .benefit-text {
            flex: 1 1 100%;
            padding: 1.25rem;
        }

        .benefits-section .benefits-items-wrapper .benefit-item .benefit-text h4 {
            font-style: normal;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1.2;
            color: var(--text-color-dark-blue);
        }

        .benefits-section .benefits-items-wrapper .benefit-item .benefit-text p {
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
            color: var(--text-color-dark-blue);
            letter-spacing: .01rem;
        }

        @media (max-width: 768px) {
            .benefits-section .benefits-items-wrapper {
                align-items: center;
                gap: 38px;
            }

            .benefits-section .benefits-items-wrapper .benefit-item {
                flex-direction: column;
                padding: 15px;
            }

            .benefits-section .benefits-items-wrapper .benefit-item .benefit-text {
                text-align: center;
            }
        }
    </style>

    <!-- FAQ STYLING ------>
    <style>
        /**************  FAQ ********************************/

        .fps_container {
            padding: 0 20px;
            margin: auto;
            max-width: 1440px;
            width: 100%;
        }

        .fps_faqHead {
            margin: auto auto 45px;
            max-width: 875px;
            width: 100%;
        }

        .fps_faqHead > h2 {
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 45px;
            text-align: center;
            color: #00225D;
        }

        .fps_faqHead > p {
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            text-align: center;
            color: #00225D;
        }

        @media (max-width: 1200px) {
            .fps_faqHead > h2 {
                font-size: 38px;
                line-height: 43px;
            }
        }

        @media (max-width: 1025px) {
            .fps_faqHead > h2 {
                font-size: 36px;
                line-height: 41px;
            }
        }

        @media (max-width: 991px) {
            .fps_faqHead > h2 {
                font-size: 34px;
                line-height: 44px;
            }
        }

        @media (max-width: 768px) {
            .fps_faqHead {
                margin: auto auto 65px;
            }
        }

        @media (max-width: 576px) {
            .fps_faqHead > h2 {
                font-size: 30px;
                line-height: 45px;
            }
        }



        @media (max-width: 768px) {
            img{
                width:100%;
            }

            .showhide {
                display: block !important;
            }
        }
    </style>

    <!-- POPUP ------------>
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

        @media(max-width: 750px){
            .exit-intent-popup-box h4.h2{
                font-size: 1.2rem;
            } 
        .exit-intent-popup-box .fp-btn{
                font-size: 1rem;
            } 
        }
    </style>

    <!----------------------- Hero Section ----------------------->
    <section class="fps_bannerSection">
        <div class="fps_banner-outer">
            <div class="fps_banner-innerTxt">
                <h1>The Favorite QR Code Generator of Hong Kong Businesses</h1>
                <p>Want to be able to reach your audience whether they’re online or offline? The completely free QR code generator we have available will help you do exactly that. Break through any communication barriers between your business and its prospective customers - generate QR codes using our 100% FREE tool today.</p>
            </div>
            <div class="fps_banner-innerImg">
                <img src="/wp-content/themes/firstpage/assets/img/hero-qr-code-generator.png" class="img-fluid" alt="QR Code Generator" />
            </div>
        </div>
    </section>

    <!----------------------- QR Code Generator ----------------------->
    <section class="fps_formSection">
        <div class="fps_formWrap-outer">
            <div class="fps_formWrap-inner">
                <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                    <iframe id="qrGenerator" src="/qrcdr/" height="1854" width="100%" title="First Page QR Code Generator" scrolling="no"></iframe>
                <?php endif; ?>
                <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                    <iframe id="qrGenerator" src="/qrcdr-zh/" height="1854" width="100%" title="First Page QR Code Generator" scrolling="no"></iframe>
                <?php endif; ?>
                <div id="click-catcher"></div>
            </div>
        </div>
    </section>

    <!----------------------- Paragraph Section #1 ----------------------->
    <section class="paragraph-section">
        <div class="paragraph-row">
            <div class="paragraph-row-heading">
                <h2>A brief rundown on what QR codes are and how you can use them</h2>
            </div>
            <div class="paragraph-row-text">
                <h2>A brief rundown on what QR codes are and how you can use them</h2>
                <p>In recent years, countless businesses all over the globe adopted QR code scans to assist with tasks including checking into the premises, viewing and ordering from a menu and more.</p>
                <p>If you’re not too well-versed with them and haven’t had to scan QR codes much, or haven’t ever come across one before are wondering what the heck we’re talking about, here’s an example of a <span class="line-to-right">QR code image:</span></p>

                <img src="/wp-content/themes/firstpage/assets/img/img-qr-code-generator-mobile-with-qr.png" alt="A brief rundown on what QR codes are and how you can use them" />

                <p>Also known as a quick response code, a QR code is a 2-D barcode that is able to hold particular data, first developed by Japanese company Denso Wave. When scanned with QR code readers on a mobile device (either Android smartphone or iOS device), it will take the user into a specific app or point them to a link.</p>
                <p>For example, you can send them to your Facebook page, Google maps location, an image file, PDF file, contact page on your website, open their WhatsApp or send them to a paid subscription page. You can even make a Vcard QR code that includes all of your contact details to make networking with business contacts an absolute breeze.</p>
                <p>Their characteristic as a contact-free way to share information meant it made them a highly popular asset to use throughout the pandemic. As a result of this worldwide mass adoption, QR codes can now be seen everywhere, from outdoor advertising to magazines, social posts, websites and on packaging.</p>
                <p>Due to how easy it is to connect with anyone that has a mobile phone, there are a huge number of businesses now incorporating QR codes into their marketing campaigns. It’s not unusual to see a QR code campaign spanning across multiple touchpoints, with each QR code content differing from one another and serving its own purpose within the marketing mix.</p>
            </div>

            <div class="paragraph-row-image">
                <img src="/wp-content/themes/firstpage/assets/img/img-qr-code-generator-mobile-with-qr.png" alt="A brief rundown on what QR codes are and how you can use them" />
            </div>
        </div>
	</section>

    <!----------------------- Benefits Section ----------------------->
    <section class="benefits-section">

        <div class="benefits-heading">
            <h2>Why use QR codes within your marketing strategy</h2>
            <p>There are a lot of businesses who are already seeing major benefits (and ROI) to utilizing dynamic and static QR codes to reach their customers. Bottom line, if you’re not doing it and your competitors are, you’re potentially losing revenue as a result.</p>
            <p>So if you’ve been considering implementing static and/or dynamic QR codes into your marketing approach, it’s never been a better time to do so because the advantages are plentiful.</p>
        </div>

        <div class="benefits-items-wrapper">

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-qr-code-generator-engagement.png" alt="Increase customer engagement" />
                </div>
                <div class="benefit-text">
                    <h4>Increase customer engagement</h4>
                    <p>Connecting with your audience in engaging and meaningful ways allows for the relationship to grow and become much stronger, and the more you can engage with them the better.</p>
                    <p>Using customer QR codes as part of your campaigns means you can make each of these engagements much more intriguing and interactive, transforming your messaging from tired and boring to something seriously attention-grabbing.</p>
                    <p>Just one example is having a custom QR code on your product packaging that points to exclusive video content, a competition or another fun activity.</p>
                </div>
            </div>

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-qr-code-generator-cross-channel-message.png" alt="Easy cross-channel marketing" />
                </div>
                <div class="benefit-text">
                    <h4>Easy cross-channel marketing</h4>
                    <p>Years ago, by advertising through traditional mediums like TVCs, outdoor and print you were incredibly limited; you had to get your entire message across in a heartbeat, or your efforts were wasted. This especially hurt brands that wanted to tell a story.</p>
                    <p>Thankfully, though, an ad in a magazine, on a billboard or even within a TVC can include high resolution QR codes. As a result, you’re free to continue your brand’s story by pointing them to your website, YouTube channel or anywhere else online.</p>
                    <p>This means your audience can learn much more long after they’ve walked past the billboard or turned the page in the magazine.</p>
                </div>
            </div>

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-qr-code-generator-error.png" alt="Minimize error correction levels" />
                </div>
                <div class="benefit-text">
                    <h4>Minimize error correction levels</h4>
                    <p>Typing in a URL manually is so 90s, folks. Especially a long one that can be easily mis-typed and either end up with a 404 error or send your audience down some weird rabbit hole to the depths of the internet.</p>
                    <p>Minimize these potential roadblocks from ever happening and avoid the need for error correction by using a custom QR code (which is valid forever) that takes them exactly where you want them to go. This makes for a totally seamless, issue-free storytelling experience between your brand and the audience which will help further strengthen your relationship with them.</p>
                </div>
            </div>

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-qr-code-generator-track-data.png" alt="Gain audience insights" />
                </div>
                <div class="benefit-text">
                    <h4>Gain audience insights</h4>
                    <p>A good marketing campaign will involve capturing analytics and insights to help improve future campaigns and help a business get to know their audience better overall.</p>
                    <p>As you’re likely aware, digital campaigns make tracking data very easy. But if you’re also using traditional advertising, it’s effectively impossible - or it was, until the introduction of QR codes!</p>
                    <p>There are several methods that can be undertaken to track scan statistics depending on the location you’re pointing to with the QR codes created, with data such as scan location, the number of people that scanned it and even when it was scanned - all in real time, too.</p>
                    <p>We’re here to help you with your tracking goals - call our team now on 888 635 4135 to learn how we can make your business grow.</p>
                </div>
            </div>

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-qr-code-generator-megaphone.png" alt="Continue your story" />
                </div>
                <div class="benefit-text">
                    <h4>Continue your story</h4>
                    <p>You only have so much space to play with on your product’s packaging or in a print ad. If you need to give additional information to your audience that simply cannot fit with the area you have available, you can expand it infinitely with a created QR code.</p>
                    <p>For example, you can offer in-depth information to your customers about where each ingredient of your product came from and how it was sourced by pointing a QR code from the packaging to built-in landing pages on your brand’s website.</p>
                </div>
            </div>

        </div>
    </section>

    <!----------------------- Paragraph Section #2 ----------------------->
    <section class="paragraph-section">
        <div class="paragraph-row reverse">
            <div class="paragraph-row-text">
                <h2 class="only-heading">A step-by-step guide to using our free QR code generator</h2>

                <img src="/wp-content/themes/firstpage/assets/img/img-qr-code-generator-woman-hands-using-the-smart-phone-to-scan-the-qr.png" alt="A step-by-step guide to using our free QR code generator" />

                <p>With all of the benefits of using QR code technology now being abundantly clear, it’s time to take the next step and use our awesome (and totally free) QR code generator. Here’s an easy to follow guide to create QR codes using our free tool so you can implement them into your marketing efforts today.</p>
                <p class="paragraph-step first-step"><span>Step 1</span>Scroll to the very top of this page where you’ll see the tool and all its functions.</p>
                <p class="paragraph-step"><span>Step 2</span>Determine the type of new QR code you want to create. Our tool can generate all kinds of different QR codes (email, location, link, phone, SMS, Wi-Fi and more), but for brevity’s sake we’ll run through a link as it’s the most common QR code for businesses.</p>
                <p class="paragraph-step"><span>Step 3</span>Type in or paste the link you want the QR code to lead to in the ‘Link’ field.</p>
                <p class="paragraph-step"><span>Step 4</span>Review each of the graphic formats/rendering options as presented and make appropriate changes wherever necessary.</p>
                <p class="paragraph-step"><span>Step 5</span>As it will be marketing material for commercial usage, we recommend using your company logo. You can do this by clicking the ‘Logo’ icon under the Watermark heading in the options.</p>
                <p class="paragraph-step"><span>Step 6</span>Click the ‘Generate QR Code’ button if it hasn’t generated automatically already.</p>
                <p class="paragraph-step"><span>Step 7</span>The QR code generator will display your unique print quality QR code design which you can then save and use as you wish as a marketing asset.</p>
            </div>

            <div class="paragraph-row-image">
                <img src="/wp-content/themes/firstpage/assets/img/img-qr-code-generator-woman-hands-using-the-smart-phone-to-scan-the-qr.png" alt="A step-by-step guide to using our free QR code generator" />
            </div>
        </div>
	</section>

    <section id="content" class="site__content p-0" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
        <?php endwhile; ?>
    </section>

    <script>
        function copyFunction(element) {
            var copied_value = jQuery(element).text();
            var $temp = jQuery("<input>");
            jQuery("body").append($temp);
            $temp.val(jQuery(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }

        $(window).scroll(function () {
            var nav = $(".navbar");

            if ($(window).scrollTop() === 0 && nav.hasClass("min-header")) {
                nav.removeClass("min-header");
                $("#scroll-nav-logo").hide();
                $(".fixed-top-no-nav").addClass("fixed-top-margin");
            } else {
                nav.addClass("min-header");
                $("#scroll-nav-logo").show();
                $(".fixed-top-no-nav").removeClass("fixed-top-margin");
            }
        });
        
        if ($(window).scrollTop() > 0) {
            $(".navbar").addClass("min-header");
        }
    </script>
	
	<div id="exit-intent-popup" class="exit-intent-popup">
	  <div class="exit-intent-popup-box">
		<h4 class="mb-3 h1"><strong>Still in doubt?</strong></h4>
			<h4 class="mb-3 h2"><strong>Claim your 100% free REVENUE GROWTH strategy session
					with an experienced digital strategist valued at $2000.</strong></h4>
			<p class="mb-2" style="font-size: 20px; font-weight:normal; line-height: 23px;">We outline bulletproof tactics that dramatically increase website traffic and revenue, even during tough economic times. </p>
			<p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">Hurry! Limited spots available.</p>
			<a href="https://wordpress-684516-3076839.cloudwaysapps.com/free-growth-strategy/" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session">Get my free revenue growth session</a>
		<a href="#" id="close" class="exit-intent-popup-close">X</a>
	  </div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        (function($) {
            var iframe = $('#qrGenerator');
            var catcher = $('#click-catcher');
            var views = ['link', 'location', 'email', 'text', 'wifi', 'tel', 'sms', 'whatsapp', 'vcard', 'paypal'];
            var posX;
            var posY;
            
            for(var i = 0; i < 10; i++)
                $(catcher).append('<span></span>');

            getPositions();

            $(window).on('resize', function() { 
                resizeIFrameToFitContent();
                getPositions(); 
            });

            $(iframe).on("load ready", function() {
                var iX, iY, i;

                resizeIFrameToFitContent();

                $(this).contents().on("click touchstart", function(e) {
                    resizeIFrameToFitContent();

                    if(e.pageX >= posX[0] && e.pageX <= posX[posX.length-1] && e.pageY >= posY[0] && e.pageY <= posY[posY.length-1]) {
                        iX = findPos('x', e.pageX);
                        iY = findPos('y', e.pageY);

                        setTargetView(iX, iY);
                    }
                });
            });

            function resizeIFrameToFitContent() {
                var iframe = document.getElementById('qrGenerator');
                iframe.height = iframe.contentWindow.document.body.scrollHeight;
                $(iframe).height(iframe.contentWindow.document.body.scrollHeight);
            }

            function getPositions() {
                posX = [];
                posY = [];
                
                $(catcher).find('span').each(function () {
                    posX.push($(this).position().left);
                    posX.push($(this).position().left + $(this).width());
                    posY.push($(this).position().top + 34);
                    posY.push(($(this).position().top + 34) + $(this).height());
                });
            }

            function findPos(axis, position) {
                var axis = axis == 'x' ? posX : posY;
                if (position >= axis[0] && position <= axis[axis.length-1])
                    for(i = 0; i < axis.length; i++) {
                        if (position >= axis[i])
                            if (i < axis.length-1)
                                if (position <= axis[i+1])
                                    return i;
                    }
            }

            function setTargetView(x, y) {
                x = ((x + 2) / 2) - 1;
                y = y == 0 ? 0 : 5;

                $(iframe).attr('data-target-view', views[x+y]);
            }
        })(jQuery);
    </script>
	
	<script type="text/javascript">
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
    <script>
    $(window).scroll(function () {
      var nav = $(".navbar");
      // Is at top
      if ($(window).scrollTop() === 0 && nav.hasClass("min-header")) {
        nav.removeClass("min-header");
        $("#scroll-nav-logo").hide();
        $(".fixed-top-no-nav").addClass("fixed-top-margin");

        // Is not
      } else {
        nav.addClass("min-header");
        $("#scroll-nav-logo").show();
        $(".fixed-top-no-nav").removeClass("fixed-top-margin");
      }
    });
    if ($(window).scrollTop() > 0) {
      $(".navbar").addClass("min-header");
    }
    </script>
    <?php get_footer(); ?>