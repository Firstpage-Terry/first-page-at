<?php
/**
 * Template Name: Google Review Link Generator
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>



<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  section{
        overflow-x:hidden;
  }

  .commonHeading {
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 45px;
    text-align: center;
    color: #00225d;
  }

  .commonHeading2 {
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 45px;
    color: #00225d;
  }

  /*** hidden Imgs   ****/
  .showHide {
    display: none;
  }

  .step1ImgCpy {
    display: none;
    margin: 34px auto 0;
  }

  .morebusiness_hiddenImg {
    margin: auto;
    display: none;
  }

  .lines {
    border-left: 5px solid #2b7bfa;
  }

  .flex_spaceBetween {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .flex_flexStart {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
  }

  .mx_380 {
    max-width: 380px;
    width: 100%;
  }

  .pt10 {
    padding-top: 10px;
  }

  .mt_80 {
    margin-top: 80px;
  }

  .fp_linkgenerator_banner {
    padding: 185px 0 35px;
    position: relative;
    background: linear-gradient(180deg, #427fe0 0, #3b70bd 100%);

    background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bg.png") no-repeat;
    background-size: 100% 76%;
    background-position: top;
  }

  /* .fp_linkgenerator_banner::before{
    content: '';
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bgwhite.png") no-repeat;
  } */
  /* .linkgenerator_banner::before{
	  position: absolute;
	  content: '';
	  width: 100%;
	background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bg.png") no-repeat; 
	height: 100%;
	z-index: 1;
} */

  .fp_banner-outer {
    max-width: 1075px;
    width: 100%;
  }

  .fp_banner-outer>.fp_banner-innerTxt {
    max-width: 764px;
    width: 100%;
    padding-right: 10px;
  }

  .fp_banner-outer>.fp_banner-innerTxt>h1 {
    font-style: normal;
    font-weight: 700;
    font-size: 52px;
    line-height: 54px;
    color: #ffffff;
  }

  .fp_banner-outer>.fp_banner-innerTxt>p {
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 28px;
    color: #ffffff;
  }

  .fp_banner-outer>.fp_banner-innerImg {
    padding-left: 10px;
    display: block;
    max-width: 244px;
    width: 100%;
  }

  /************* generator  **********************/

  .fp_generatorWrap {
    padding: 0 15px;
  }

  .fp_generator-outer {
    margin: 32px auto 0;
    max-width: 1310px;
    width: 100%;
    background: white;
    padding: 44px 46px 0;
  }

  .fp_generator-inner {
    padding: 44px 10px 42px;
    background: #f7f4f4;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
    border-radius: 10px;
  }

  .fp_generator-innerData {
    max-width: 886px;
    width: 100%;
    margin: auto;
  }

  .fp_googleImgWrap {
    margin-bottom: 16px;
    max-width: 204px;
    width: 100%;
  }

  .fp_generator_box {
    position: relative;
  }

  .fp_generatorInput {
    display: flex;
    background: white;
    box-shadow: 0px 0px 0px 3px #427fe0;
  }

  .fp_generatorInput>input {
    padding: 16px 18px 15px;
    width: 100%;
    border: none;
    outline: none;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #666666;
    box-shadow: 0px 0px 0px 3px #427fe0;
  }

  .fp_generatorInput>input::placeholder {
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #666666;
  }

  #getLink {

    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    height: 40px;


    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 24px;
    color: #2f2f2f;
    padding: 16px 18px 15px;

    width: 100%;
    border: none;
    outline: none;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #666666;
    background: white;

  }

  #getLink>p {
    margin: 0;
  }

  .fp_generatorInput>button {
    max-width: 153px;
    width: 100%;
    padding: 15px 10px;
    border: none;
    outline: none;
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 24px;
    text-align: center;
    color: #ffffff;
    background: #427fe0;
    /* border-radius: 0px 5px 5px 0px; */
  }

  .fp_generatorInput>button:hover {
    background: #1a66de;
  }

  .fp_generator_box>h5 {
    margin: 28px 0 30px;
    font-style: normal;
    font-weight: 700;
    font-size: 28px;
    line-height: 38px;
    color: #00225d;
  }

  .copyLink {
    display: none;
    background: transparent;
    border: none;
    outline: none !important;
    position: absolute;
    right: 40px;
    bottom: -25px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    text-align: center;
    color: #636363;
    box-shadow: 0px 0px 0px 3px #427fe0;
  }

  /*******uselinkgenerate_Section *****************/

  .fp_uselinkgenerate_Section {
    padding: 32px 0 59px;
  }

  .fp_uselinkgenerate_Container {
    max-width: 1161px;
    width: 100%;
  }

  .fp_generateLink-step-inner {
    min-height: 263px;
    margin-top: 68px;
    display: flex;
    justify-content: space-between;
    position: relative;
  }

  .fp_generateLink-step-inner-content:first-child {
    padding-right: 32px;
    /* width: 50%; */
  }

  .fp_generateLink-step-inner-content:last-child {
    padding-left: 40px;
    /* width: 50%; */
  }

  .step1Img {
    margin-top: 38px;
    max-width: 557px;
    width: 100%;
  }

  .arrow_block {
    position: relative;
  }

  .arrow_block:before {
    position: absolute;
    content: "";
    width: 30px;
    height: 36px;
    background: url("/wp-content/themes/firstpage/img/google-review-link-generator/arrow.png") no-repeat;
    bottom: 0;
    display: block;
    z-index: 3;
    background-size: contain;
    margin: 0 auto;
    left: 0;
    right: 0;
  }

  .step2Img {
    max-width: 547px;
    width: 100%;
  }

  .fp_steps-outer {
    /* margin-left: auto; */
    /* max-width: 531px; */
    max-width: 501px;
    width: 100%;
  }

  .fp_steps-outer>p {
    padding-bottom: 48px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225d;
  }

  .fp_steps-inner {
    margin-top: 50px;
  }

  .fp_steps-inner>h6 {
    margin: 0 0 0 0;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    color: #00225d;
  }

  .fp_steps-inner>span {
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225d;
  }

  .fp_steps-inner>p {
    margin-top: 30px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225d;
  }

  /************ more busines Section*****************/

  .morebusinessSection {
    padding: 60px 0 35px;
  }

  .morebusiness_container {
    margin: auto;
    max-width: 1080px;
    width: 100%;
  }

  .morebusiness-outer {
    grid-gap: 20px;
    display: flex;
    justify-content: space-between;
  }

  .morebusiness-innerTxt {
    max-width: 563px;
    width: 100%;
  }

  .morebusiness-innerTxt>p {
    max-width: 546px;
    margin: 23px 0 0;
    width: 100%;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225d;
  }

  .morebusiness-innerImg {
    margin-top: 50px;
    max-width: 344px;
    width: 100%;
  }

  .imp-of-reviews-block {
    max-width: 431px;
    width: 100%;
  }

  /****************** impreviews Section ************/

  .impreviews_Section {
    padding: 33px 0 52px;
  }

  .impreviews_container {
    max-width: 1135px;
    width: 100%;
  }

  .impreviews-outer {
    grid-gap: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  /************** marketingtoolSection *************/

  .marketingtoolSection {
    padding: 52px 0 45px;
  }

  .marketingtool-outer {
    margin-top: 27px;
    display: flex;
    justify-content: space-between;
    align-items: self-end;
  }

  .marketingtool-inner {
    max-width: 532px;
    width: 100%;
  }

  .marketingtool-inner>p {
    margin-bottom: 22px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225d;
  }

  /**********  FAQ *************/

  .faqSection {
    padding: 41px 0 65px;
  }

  .faqHead {
    margin: auto auto 58px;
    max-width: 639px;
    width: 100%;
    text-align: center;
  }

  .faqHead>p {
    margin-bottom: 30px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    text-align: center;
    color: #00225d;
  }

  .faq-outer {
    margin: auto;
    max-width: 900px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .faq-inner {
    max-width: 420px;
    width: 100%;
  }

  .faq-inner ul {
    list-style: none;
  }

  .faq-inner ul li {
    position: relative;
    padding: 0 0 16px 46px;
    min-height: 78px;
    height: 100%;

    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 26px;
    letter-spacing: 2.73333px;
    text-transform: uppercase;
    color: #666666;
  }

  .faq-inner ul li::before {
    position: absolute;
    content: "";
    width: 11.88px;
    height: 12.19px;
    background: url("/wp-content/themes/firstpage/img/google-review-link-generator/plus.png") no-repeat;
    left: 0;
    top: 5px;
  }

  @media (max-width: 1200px) {
    .fp_bannerContainer {
      max-width: 1200px;
    }

    .marketingtool-outer {
      grid-gap: 20px;
    }

    .marketingtool_container {
      max-width: 100%;
    }

    .impreviews_container .marketingtool-outer {
      align-items: flex-start;

    }
  }

  @media (max-width: 1024px) {
    .fp_bannerContainer {
      max-width: 1200px;
    }

    .fp_banner-outer>.fp_banner-innerTxt>h1 {
      font-size: 51px;
      line-height: 53px;
    }

    .fp_uselinkgenerate_Section {
      padding: 32px 0 40px;
    }

    /* .banner-outer > .banner-innerTxt > h1 {
      font-size: 49px;
      line-height: 51px;
    } */
    /* .banner-outer > .banner-innerTxt > p {
      font-size: 19px;
      line-height: 27px;
    } */
    /* .generateLink-step-inner > .generateLink-step-inner-content:first-child {
      padding-right: 30px;
    }
    .generateLink-step-inner > .generateLink-step-inner-content:last-child {
      padding-left: 30px;
    } */
  }

  @media (max-width: 991px) {
    .fp_banner-outer>.fp_banner-innerTxt>h1 {
      font-size: 46px;
      line-height: 48px;
    }

    .fp_linkgenerator_banner {
      padding: 120px 0 35px;
    }

    .fp_generator-outer {
      padding: 30px 30px 0;
    }

    .fp_generateLink-step-inner-content:first-child {
      padding-right: 22px;
    }

    .fp_generateLink-step-inner-content:last-child {
      padding-left: 30px;
    }

    .commonHeading {
      font-size: 35px;
      line-height: 40px;
    }

    .commonHeading2 {
      font-size: 35px;
      line-height: 40px;
    }

    /********** fp_uselinkgenerate_Section **************/

    .fp_generateLink-step-inner {
      margin-top: 40px;
    }

    .arrow_block:before {
      bottom: 30px;
    }

    /********** morebusiness Section 992 **************/

    .morebusinessSection {
      padding: 30px 0 35px;
    }

    .fp_banner-outer>.fp_banner-innerTxt>h1 {
      font-size: 35px;
      line-height: 38px;
    }

    .impreviews_Section {
      padding: 33px 0 30px;
    }

    .marketingtoolSection {
      padding: 30px 0 20px;
    }

    .faqSection {
      padding: 28px 0 45px;
    }
  }

  @media (max-width: 768px) {

    img{
      max-width: 100%;
    }

    .fp_linkgenerator_banner {
      background-size: 100% 66%;
    }

    .fp_generator-outer {
      margin: -30px 0 0;
    }

    .fp_linkgenerator_banner {
      padding: 99px 0 30px;
    }

    .fp_banner-outer {
      flex-direction: column;
    }

    .fp_banner-outer>.fp_banner-innerTxt>h1 {
      font-size: 40px;
      line-height: 42px;
    }

    .fp_banner-outer>.fp_banner-innerTxt {
      padding: 0;
    }

    .fp_banner-outer>.fp_banner-innerImg {
      margin: auto;
      padding: 0;
      max-width: 234px;
      z-index: 1;

    }


    .fp_banner-outer>.fp_banner-innerTxt>p {
      margin-bottom: 10px;
    }

    /*********  generator Section 768 **********/
    .fp_generatorWrap {
      padding: 0;
      position: relative;
      background: white;
      z-index: 1;
    }

    .fp_generator-outer {
      padding: 24px 24px 0;
    }

    .fp_generatorInput>button {
      font-size: 16px;
      line-height: 24px;
    }

    .fp_generateLink-step-inner {
      flex-direction: column-reverse;
      text-align: center;
      align-items: center;
    }

    .lines {
      border: none;
    }

    .arrow_block:before {
      content: none;
    }

    .fp_generateLink-step-inner-content:last-child {
      width: 100%;
      padding: 0;
    }

    .fp_generateLink-step-inner-content:first-child {
      width: 100%;
      margin: auto;
    }

    .step1Img {
      margin: auto;
    }

    .fp_steps-outer {
      margin: auto;
    }

    .commonHeading {
      font-size: 28px;
      line-height: 33px;
    }

    .commonHeading2 {
      text-align: center;
      font-size: 28px;
      line-height: 33px;
    }

    /******** fp_uselinkgenerate_Section 768 *************/

    .fp_uselinkgenerate_Section {
      padding: 30px 0 59px;
    }

    .fp_generateLink-step-outer {
      margin-top: 52px;
    }

    .fp_steps-outer>p {
      padding: 0;
    }

    .fp_generateLink-step-inner-content {
      padding: 0;
    }

    .step2Img {
      display: none;
    }

    .step1ImgCpy {
      display: block;
    }

    .fp_generateLink-step-inner {
      margin-top: 30px;
    }

    .fp_generateLink-step-inner-content:first-child {
      padding: 0;
    }

    .fp_steps-outer {
      margin-bottom: 31px;
    }

    .step2_block {
      margin-top: 12px;
      text-align: center;
    }

    .fp_steps-outer {
      max-width: 100%;
    }

    /************ uselinkgenerate Section 768 ************/
    .fp_uselinkgenerate_Section {
      padding: 30px 0 20px;
    }

    /************ morebusiness Section 768 ************/
    .morebusiness-outer {
      flex-direction: column;
    }

    .morebusiness-outer {
      grid-gap: unset;
    }

    .morebusiness-innerTxt,
    .morebusiness-innerTxt>p {
      max-width: 100%;
      text-align: center;
    }

    .morebusiness-innerImg {
      display: none;
    }

    .morebusiness_hiddenImg {
      display: block;
    }

    .morebusiness-innerImg {
      margin-top: 26px;
    }

    /***************   768**********************/
    .impreviews-outer {
      flex-direction: column;
    }

    .imp-of-reviews-block {
      display: none;
      margin: auto;
    }

    .showHide {
      display: block;
      text-align: center;
    }

    /******************    768**********************/


    .marketingtool-outer {
      flex-direction: column;
    }

    .marketingtool-inner>p {
      text-align: center;
    }

    /******************  marketingtool Section  768**********************/

    .faq-outer {
      align-items: flex-start;
    }

    .faq-inner ul li {
      cursor: pointer;
      padding: 0px 5px 16px 46px;
    }

    /************* marketingtoolSection ******************/

    .marketingtool_container,
    .marketingtool-inner {
      max-width: 100%;
    }

    .fp_steps-inner>p {
      margin: 30px 0 0;
    }

    /***********************************************/

    .faqcontainer {
      max-width: 100%;
    }

  }

  @media (max-width: 576px) {



    .fp_banner-outer>.fp_banner-innerTxt>h1 {
      font-size: 30px;
      line-height: 32px;
    }

    .fp_googleImgWrap {
      max-width: 165px;
    }

    .morebusiness-innerTxt>p {
      text-align: center;
      margin-top: 17px;
    }

    .fp_uselinkgenerate_Section {
      padding: 30px 0 25px;
    }

    .morebusinessSection {
      padding: 30px 0 25px;
    }

    .faq-outer {
      flex-direction: column;
    }
  }

  @media (max-width: 460px) {
    .fp_bannerContainer {
      padding: 0 25px;
    }

    .fp_linkgenerator_banner {
      position: relative;
      background: none;
    }


    .fp_linkgenerator_banner::before {
      position: absolute;
      content: '';
      width: 100%;
      height: 70%;
      /* background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bg375.png") no-repeat; */
      background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bg-shape1.png") no-repeat;
      top: 0;
      background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bg-shap-2.png") no-repeat;
      top: 0;
      background-size: 100% 122%;
      background-position: bottom;
      z-index: -1;
    }

    .fp_generator_box>h5 {
      font-size: 20px;
      line-height: 20px;
      text-align: center;
    }


    .fp_banner-outer {
      padding: 0;
    }

    .fp_banner-outer>.fp_banner-innerTxt>h1 {
      margin-bottom: 3px;
      font-size: 28px;
      line-height: 36px;
    }

    .fp_googleImgWrap {
      margin: auto auto 16px;
    }

    .fp_steps-inner>h6 {
      margin: 0 0 6px 0;
    }
  }
</style>



<!-- Banner -->

<section class="fp_linkgenerator_banner form-space">
  <div class="container fp_bannerContainer">
    <div class="fp_banner-outer flex_flexStart pt10">
      <div class="fp_banner-innerTxt">
        <h1>Google Review Link Generator</h1>
        <p>Are you tired of tracking down your business's elusive Google Review link? Look no further than the Google Review Link Generator! This handy tool generates a direct link for customers to leave a review of your business on Google.</p>
        <p>Improving your online presence with positive reviews can bolster customer confidence and drive more conversions. Our Google Review Link Generator can save you time and boost your reputation. Why not give it a try, and watch your star rating soar?</p>
      </div>
      <div class="fp_banner-innerImg">
        <img src="/wp-content/themes/firstpage/img/google-review-link-generator/bannerImg.png"
          alt="Google Review Link Generator Banner" />
      </div>
    </div>
  </div>

  <div class="fp_generatorWrap">
    <div class="fp_generator-outer">
      <div class="fp_generator-inner">
        <div class="fp_generator-innerData">
          <div class="fp_googleImgWrap">
            <img src="https://firstpage.com.au/wp-content/uploads/2022/06/googleImg.webp"
              alt="Google Review Link Generator Tool" />
          </div>

          <div class="fp_generator_box">
            <div id="map"></div>
            <div class="fp_generatorInput">
              <input type="text" id="generateLink" placeholder="Enter Business Name" /><button
                id="searchbtn" style="box-shadow: 0px 0px 0px 3px #427fe0;">GENERATE</button>
            </div>

            <h5>Your Google review link is:</h5>

            <div class="fp_generatorInput">
              <!-- <input type="text" id="getLink" />  -->
              <div id="getLink"> </div>


              <button id="copy">COPY LINK</button>
            </div>
            <button class="copyLink">Link Copied</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- uselinkgenerate_Section -->

<section class="fp_uselinkgenerate_Section">
  <div class="container fp_uselinkgenerate_Container">
    <h2 class="commonHeading">How to use our Google Review Link Generator</h2>
    <div class="fp_generateLink-step-outer">
      <div class="fp_generateLink-step-inner">
        <div class="fp_generateLink-step-inner-content arrow_block">
          <div class="step1Img">
            <img src="/wp-content/themes/firstpage/img/google-review-link-generator/stepImg1.png"
              alt="Google Review Link Generator Step Process" />
          </div>
        </div>
        <div class="fp_generateLink-step-inner-content lines">
          <div class="fp_steps-outer">
            <p>
            Need a quick and convenient way for your customers to let your customers leave positive reviews on your Google Business profile? Create a Google review link easily in less than a minute with our tool below.
            </p>
            <div class="fp_steps-inner">
              <h6>Step 1.</h6>
              <span>Search for your exact business name.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="fp_generateLink-step-inner mt_80 step2_block">
        <div class="fp_generateLink-step-inner-content">
          <div class="step2Img">
            <img src="/wp-content/themes/firstpage/img/google-review-link-generator/stepImg2.png" alt="Google Review Link Generator Step Process 2" />
          </div>
        </div>

        <div class="fp_generateLink-step-inner-content lines">
          <div class="fp_steps-outer">
            <div class="fp_steps-inner step2_block">
              <h6>Step 2.</h6>
              <span>Click on "Copy link" and add it to your business email signature.
              </span>
              <div class="step2Img step1ImgCpy">
                <img src="/wp-content/themes/firstpage/img/google-review-link-generator/stepImg2.png"
                  
                  alt="Google Review Link Generator Step Process 2" />
              </div>
              <p>You can also create a post-purchase email template for all customers, which includes the shortened link, asking them to leave you a review.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--  More business Section    -->

<section class="morebusinessSection">
  <div class="container morebusiness_container">
    <div class="morebusiness-outer">
      <div class="morebusiness-inner">
        <div class="morebusiness-innerTxt">
          <h2 class="commonHeading2">Drive more business reviews with our Google Review Link Generator</h2>
          <div class="morebusiness-innerImg  morebusiness_hiddenImg">
            <img src="/wp-content/themes/firstpage/img/google-review-link-generator/moreBusinessImg.png"
              alt="Google Business Reviews" />
          </div>

          <p>When a customer interacts favorably with your business, you want them to tell everyone else about it. Meanwhile, prospective buyers will read their reviews before making a purchase.</p>
          <p>Our user-friendly Google Review Link Generator generates a unique, attractive link that sends visitors straight to the review input screen, removes obstacles that otherwise exist, and encourages more people to make purchases.</p>

        </div>
      </div>

      <div class="morebusiness-inner">
        <div class="morebusiness-innerImg">
          <img src="/wp-content/themes/firstpage/img/google-review-link-generator/moreBusinessImg.png" alt="moreBusinessImg" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Imp of Reviews Section    -->

<section class="impreviews_Section">
  <div class="container morebusiness_container impreviews_container">
    <div class="impreviews-outer">
      <div class="morebusiness-inner">
        <div class="imp-of-reviews-block">
          <img src="/wp-content/themes/firstpage/img/google-review-link-generator/imp-of-reviews.png" alt="Importance of Google Reviews" />
        </div>
      </div>

      <div class="morebusiness-inner">
        <div class="morebusiness-innerTxt">
          <h2 class="commonHeading2">The importance of Google Reviews</h2>

          <div class="imp-of-reviews-block showHide">
            <img src="/wp-content/themes/firstpage/img/google-review-link-generator/imp-of-reviews.png"
              alt="Importance of Google Reviews Mobile" />
          </div>

          <p>Google Reviews are essential for businesses of all sizes. For one, a decent number of positive reviews can nurture brand trust and make customers more likely to choose you over competitors. For another, they provide valuable customer feedback that helps improve your products and services.</p>
          <p>It is no secret that Google Reviews go beyond just increasing sales. They can boost your overall online presence and search engine rankings, making it easier for customers to find you in the first place.</p>
          <p>Other benefits of having a good number of positive Google Reviews include:</p>
          <br><br>

<h3>Improving your local pack ranking</h3>

<p>When customers search Google for your kind of business, quite a few SEO-specific factors go into where you rank in the search results.</p>
<p>With just three open slots on the results page for local company searches, the local pack rating (see below) is shown above the top search result. Therefore, getting your company into one of these spots—ideally the top spot—can hugely impact your leads.</p>
<p>A significant number of favorable Google Reviews for your business can successfully communicate to Google that you offer excellent customer service and are a well-liked local business.</p>
<br><br>

<h3>Increasing customers' trust in your business</h3>

<p>More information is now instantly available to customers than ever before. You may take advantage of this by amassing many favorable Google Reviews so that when clients look into possible businesses, yours stands out above the competition as dependable and customer-focused.</p>
<p>If you are an online retailer, this strategy will also work wonders. If a potential customer searches for the product they want to buy on your eCommerce site, you want to ensure many favorable reviews are available. The more reviews, the better!</p>
<br><br>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Great Marketing Tool-->

<section class="marketingtoolSection">
  <div class="container marketingtool_container">
    <h2 class="commonHeading2">
    How Google Reviews are an excellent tool for marketing
    </h2>

    <div class="marketingtool-outer">
      <div class="marketingtool-inner">
      <p>Getting plenty of favorable Google Reviews for your business should also be a crucial component of your digital marketing efforts. Letting consumers read great reviews will get you ahead of other companies.</p>

      <h3>It's 100% free advertising</h3>
      <p>You may improve the spread of word-of-mouth advertising for free by being more diligent and giving your consumers a lot easier option to submit a favorable Google Review for your company.</p>
      <p>Furthermore, word-of-mouth marketing is often considered the most successful promotion (but you shouldn't rely only on it for your marketing plan!).</p>

      <h3>Encourage customer engagement</h3>
      <p>Google reviews can help your business in many ways, but one of the most important is customer engagement. By encouraging your customers to leave a review, you can get valuable feedback that can help you improve your business.</p>
      <p>In addition, customers who take the time to leave a review are more likely to be engaged with your brand. When customers are engaged, they’ll be more likely to make a purchase.</p>

      <h3>Helping with customer engagement</h3>
      <p>Engagement and communication between brands and customers can have a lasting effect on customers. When they leave reviews, and you respond to them can improve retention rates. It shows that your brand cares about its customers.</p>

      </div>

      <div class="marketingtool-inner">
<h3>Long story short, effective communication with your customers is an excellent way of driving repeat business!</h3>

<p>And because you can respond to each of the Google Reviews your customers write, doing so means you're on your way to building a potentially life-long relationship with each of them.</p>

<h3>Growing your reach</h3>
<p>Having a ton of reviews on your website for people to read while they're there is great and all. But the truth is, they won't be seen if visitors to your website aren't looking for them.</p>
<p>The more people that leave a review of your business dramatically expands the size of your audience. Anyone can now learn about how fantastic your business is by searching on Google.</p>
<h3>Improving conversion</h3>
<p>As previously said, customers are far more inclined to purchase when they search for your company and/or items online and find continuous positive reviews.</p>
<p>An increase in conversions results in more revenue for you, whether from the sale of goods in your brick-and-mortar store, online store, or service booking.</p>
      </div>

    </div>
  </div>
</section>



<section id="content" class="site__content p-0" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
	<?php endwhile; ?>
</section>




<!-- Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--polyfill-->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<!-- Api -->
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrvVkXhmGglK_A80mh_1grmeBAcMJCG0o&callback=initMap&libraries=places&v=weekly"
  defer></script>




<script>
  start = 0;
  jQuery("#searchbtn").click(function () {
    jQuery('#getLink').html("");
    initMap(jQuery('#generateLink').val());
    start++;
  });

  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

  var map;
  var service;
  var infowindow;

  function initMap(searchname) {
    var mapCenter = new google.maps.LatLng(-43.1734112, -73.7150585);

    infowindow = new google.maps.InfoWindow();

    map = new google.maps.Map(
      document.getElementById('map'), {
        center: mapCenter,
        zoom: 15
      });
    var searchquery = (searchname ? searchname : 'Alpin Haus RV');
    var request = {
      query: searchquery,
      fields: ['name', 'geometry', 'place_id', 'formatted_address'],
    };

    service = new google.maps.places.PlacesService(map);

    service.findPlaceFromQuery(request, function (results, status) {
      if (status === google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
          console.log(results[i]);
          console.log(results[i].place_id);

          if (start > 0) {
                        // var url = 'https://search.google.com/local/writereview?placeid=' + results[i] .place_id + ' ';
            // var shortenurl = 'https://cutt.ly/api/api.php?key=c9895117b72d6fe43f0c7458f76fe1ef22373&short=' + url + '&userDomain=1';
            // $.ajax({
            //     type: "GET",
            //     url: shortenurl,
            // }).done(function(data){
            //   jQuery('#getLink').text(data);
            // });

            var settings = {
              "async": true,
              "crossDomain": true,
              "url": 'https://search.google.com/local/writereview?placeid=' + results[i] .place_id + ' ',
              "method": "POST",
              "headers": {
                "content-type": "application/json",
                "X-RapidAPI-Key": "31cb3613c0mshb05207d2848c413p17738fjsnec717e3482d5",
                "X-RapidAPI-Host": "url-shortener14.p.rapidapi.com"
              },
              "processData": false,
              "data": {
                "message": "Test message"
              }
            };

            $.ajax(settings).done(function (response) {
              console.log(response);
            });

            
            let x = jQuery('#getLink').text('https://search.google.com/local/writereview?placeid=' + results[i]
              .place_id + ' ');

            $("#copy").click(function () {
              copyFunction('#getLink');
              $(".copyLink").css({
                "display": "block"
              });
            });

          }

          var place = {
            placeId: results[i].place_id,
            fields: ['name', 'rating', 'formatted_phone_number', 'geometry', 'website', 'adr_address',
              'address_component', 'alt_id'
            ]
          }
          service.getDetails(place, callback);
          createMarker(results[i]);
        }
        console.log(results);
        map.setCenter(results[0].geometry.location);
      }
    });
  } //initMap()

  function callback(place, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      console.log(place);
      printArray([place.name, place.formatted_phone_number, place.website, place.adr_address]);
    }
  }

  function createMarker(place) {
    var marker = new google.maps.Marker({
      map: map,
      position: place.geometry.location
    });

    google.maps.event.addListener(marker, 'click', function () {
      infowindow.setContent(place.name);
      infowindow.open(map, this);
    });
  }

  function printArray(arr) {
    var vPool = "";
    jQuery.each(arr, function (i, val) {
      vPool += val + "<br />";
    });
    jQuery('#results').append('<p>' + vPool + '</p>');
  }

  // ----------------------- copy function -------------------------
  function copyFunction(element) {
    var copied_value = jQuery(element).text();
    var $temp = jQuery("<input>");
    jQuery("body").append($temp);
    $temp.val(jQuery(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
  }
  // $(window).scroll(function () {
  //   var nav = $(".navbar");
  //   // Is at top
  //   if ($(window).scrollTop() === 0 && nav.hasClass("min-header")) {
  //     nav.removeClass("min-header");
  //     $("#scroll-nav-logo").hide();
  //     $(".fixed-top-no-nav").addClass("fixed-top-margin");
  //     // Is not
  //   } else {
  //     nav.addClass("min-header");
  //     $("#scroll-nav-logo").show();
  //     $(".fixed-top-no-nav").removeClass("fixed-top-margin");
  //   }
  // });
  // if ($(window).scrollTop() > 0) {
  //   $(".navbar").addClass("min-header");
  // }


  $( document ).ready(function() {
    var input = document.getElementById("generateLink");
    
    var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.setFields(["place_id", "name", "types"]);
  

  autocomplete.addListener("place_changed", function() {
      var place = autocomplete.getPlace();

      get_short_link(place.place_id);
  });

});

</script>


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
	
	<div class="exit-intent-popup">
	  <div class="exit-intent-popup-box">
		<h4 class="mb-3 h1"><strong>Still in doubt?</strong></h4>
			<h4 class="mb-3 h2"><strong>Claim your 100% free REVENUE GROWTH strategy session
					with an experienced digital strategist valued at $2800HKD.</strong></h4>
			<p class="mb-2" style="font-size: 20px; font-weight:normal; line-height: 23px;">We outline bulletproof tactics that dramatically increase website traffic and revenue, even during tough economic times. </p>
			<p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">Hurry! Limited spots available.</p>
			<a href="<?php echo get_home_url(); ?>/free-growth-strategy" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session">Get my free revenue growth session</a>
		<a href="#" class="exit-intent-popup-close">X</a>
	  </div>
	</div>
	
	
	<script>
		function addEvent(obj, evt, fn) {
			if (obj.addEventListener) {
				obj.addEventListener(evt, fn, false);
			} else if (obj.attachEvent) {
				obj.attachEvent("on" + evt, fn);
			}
		}
	
		// addEvent(document, 'mouseout', function(evt) {
		// 	if (evt.toElement == null && evt.relatedTarget == null) {
		// 		$('.exit-intent-popup').slideDown();
		// 	};
		// });
	
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


<?php get_footer(); ?>