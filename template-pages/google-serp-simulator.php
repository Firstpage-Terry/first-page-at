<?php
/**
 * Template Name: Google SERP Simulator
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>


<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
 }
 .moblie_rating, .moblie_date{
   padding: 10px 0px ;
 }
 .moblie_rating{
   max-width: 100px;
   width: 100%;
  }
 .moblie_date > p{
   margin: 0;
 }
 .moblie_rating > img{
   display: block;
   height: 100%;
   width: 100%;
 }

.sm_arrow,.lg_arrow{
  position: relative;
}
.sm_arrow::before{
  position: absolute;
  content: '';
  left: 0;
  right: 0;
  background: url("/wp-content/themes/firstpage/img/google-review-link-generator/arrow1.png") no-repeat;
  width: 100%;
  height: 100%;
  left: 380px;
    top: 60px;
}
.lg_arrow::before{
    pointer-events: none;
  position: absolute;
  content: '';
  left: 0;
  right: 0;
  background: url("/wp-content/themes/firstpage/img/google-review-link-generator/arrow2.png") no-repeat;
  width: 100%;
  height: 100%;
  left: 370px;
    top: 120px;
}
/* @font-face {
    font-family: Arial;
    src: url("/wp-content/themes/firstpage/assets/fonts/Arial-regular.woff");
} */
.mw545{
  max-width: 545px !important;
}
.m0 {
    margin: 0 !important;
}
.ml_10 {
    margin-left: 10px !important;
}
.mb{
  margin-bottom: 16px;
}
.showhide {
    display: none !important;
}
.metadespContainer {
  padding: 0 20px 43px;
}



/******************* fps_bannerSection *************************/

.fps_bannerSection {
  position: relative;
    padding: 203px 0 0;
    min-height: 700px;
    background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bg.png");
    background-size: cover;
    background-position: center;
}
.fps_bannerSection::before{
  content: '';
  position: absolute;
  background: white;
  width: 100%;
  height: 10px;
  bottom: 0;
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


.fps_banner-innerTxt>h1 {
    margin: 0;
    max-width: 755px;
    width: 100%;
    font-style: normal;
    font-weight: 700;
    font-size: 52px;
    line-height: 54px;
    color: #ffffff;
    padding-bottom: 5px;
}



.fps_banner-innerTxt>h2 {
    margin: 0;
    max-width: 755px;
    width: 100%;
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    line-height: 54px;
    color: #ffffff;
}

.fps_banner-innerTxt>p {
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

.fps_banner-innerImg>img {
    height: 100%;
    width: 100%;
    display: block;
}
.fps_bannerWrap {
    padding: 0 20px;
}


/******************* fps_formSection *************************/
.fps_formSection{
  background: #F6F6F6;
  padding-bottom: 67px;
}

.fps_formWrap-outer {
    margin: auto;
    position: relative;
    margin-top: -274px;
    padding: 47px 20px 79px;
    max-width: 1310px;
    width: 100%;
    background: #fcfcfc;
}
.fps_formWrap-inner {
    margin: auto;
    max-width: 1090px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: stretch;
    background: #ffffff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
    border-radius: 10px;
}
.fps_form {
    margin:0 auto;
    padding:28px 34px 28px 18px;
    max-width: 629px;
    width: 100%;
}

.fps_form>h3 {
    margin: 0 0 45px 0;
    font-style: normal;
    font-weight: 700;
    font-size: 15px;
    line-height: 24px;
    color: #000000;
}

.fps_formData {
    margin-bottom: 17px;
}

.fps_formData>label {
    margin-bottom: 3px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #000000;
}
.fps_formData>input,
textarea {
    padding: 14.6px 12px;
    width: 100%;
    background: #ffffff;
    border: 1px solid #c4c4c4;
    border-radius: 5px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #666666;
}
.fps_formData>textarea {
    resize: none;
    max-height: 103px;
}

.fps_formData>input::placeholder {
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #666666;
}
.error {
     padding: 5px 0 0 0;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: red;
}
.fps_checkbox-outer {
    max-width: 275px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.fps_checkbox-inner {
    display: flex;
    align-items: center;
}
.fps_checkbox-inner>.check {
    position: relative;
    margin: 0 0 0 10px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #000000;
}
input[type="checkbox"] {
    width: 16px;
    height: 16px;
}
.fps_checkbox-inner>.check::before {
    display: none;
    position: absolute;
    content: "";
    width: 16px;
    height: 16px;
    background: #f15f5b;
    left: -26px;
    top: 4px;
    pointer-events: none;
    border: 1px solid #808080;
    /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15); */
}
.fps_checkbox-inner>.check::after {
    position: absolute;
    content: "";
    width: 16px;
    height: 16px;
    left: -26px;
    top: 4px;
    pointer-events: none;
    background: #f1f1f1;
    border: 1px solid #c4c4c4;
}
input[type="checkbox"]:checked~.check::before {
    display: block;
}
input[type="checkbox"]:checked~.check::after {
    display: none;
}
.fps_googlepage-outer {
    padding: 28px 25px 31px;
    max-width: 459px;
    width: 100%;
    background: #427fe0;
    border-radius: 0px 10px 10px 0px;
}
.fps_googlepage-inner {
    padding: 46px 27px 130px;
    max-width: 406px;
    width: 100%;
    background: white;
}
.searchWrap>.fps_googleImg {
    max-width: 104px;
    width: 100%;
}
.fps_googleImg>img {
    display: block;
    width: 100%;
    height: 100%;
}
.searchBox {
    padding: 7px;
    max-width: 219px;
    width: 100%;
    background: #ffffff;
    border: 1px solid #c4c4c4;
    border-radius: 100px;
}
.searchBox>input {
    padding: 0 8px;
    width: 100%;
    border: none;
    outline: none;
}
.searchWrap {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.fps_menuBlock {
    margin: 43px auto 0px;
    padding-bottom: 12px;
     position: relative;
}
.fps_menuBlock::before{
    position: absolute;
    content: '';
    width: 104%;
    height: 1px;
    background: #c4c4c4;
    bottom: -2px;
    left: -8px;
}
 

.fps_menuBlock>ul {
    margin: auto;
    max-width: 302px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-self: center;
}

.fps_menuBlock>ul>li {
    padding: 0 11px 0px;
    list-style: none;
    border-bottom: 2px solid transparent;
    align-items: center;
}
.active{
    position: relative;
}
.active > a{
    color: #1A73E8 !important;
    font-weight: 600 !important;

}
.active::before{
    content: '';
    position: absolute;
    background: #1A73E8;
    width: 38px;
    height: 5px;
    bottom: -15px;
    left: 0;
}
 
/*********************************************/

.fps_menuBlock>ul>li>a {
    position: relative;
    font-family: "Arial";
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 24px;
    color: #727272;
}

.fps_menuBlock>ul>li>a:hover {
    color: #1a73e8;
}

.fps_menuBlock>ul>li>a::before {
    position: absolute;
    content: "";
    width: 0%;
    height: 0px;
    background: #1a73e8;
    left: -11px;
    bottom: -10px;
}

.fps_menuBlock>ul>li>a:hover~.fps_menuBlock>ul>li>a::before {
    width: 246%;
    height: 5px;
    background: #1a73e8;
}

.fps_menuBlock>ul>li>a:hover {
    text-decoration: none;
}
/*********************************************/

.searchTime {
    padding: 12px 0 20px;
    font-family: "Arial";
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #727272;
}
.googleData {
    margin: auto;
    max-width: 313px;
    width: 100%;
}
.link,
.pgTitle,
.desp {
    font-family: "Arial";
    font-style: normal;
    font-weight: 500;
    word-break: break-all;
}
.link {
    margin: 0 0 7px 0;
    font-size: 15px;
    line-height: 24px;
    color: #202124;
}
.pgTitle {
    margin: 0 0 14px 0;
    font-size: 20px;
    line-height: 27px;
    color: #1a0dab;
    overflow: hidden;
 
}
.desp {
 
    font-size: 18px;
    line-height: 24px;
    color: #202124;
    overflow: hidden;
 
}





/*************** Imp of meta tag **********************/

.fps_metaTag_Section {
  padding-top: 96px;
}

.fps_metaTag_Container {
    padding: 0 20px;
    padding-bottom: 114px;
    margin: auto;
     max-width: 1137px;
    width: 100%;
}
 

.fps_metaTag_outer {
     padding-bottom: 100px;
    display: flex;
    margin: auto;
    justify-content:flex-start;
    align-self: start;
    grid-gap: 20px;
}

.fps_metaTag_inneeImg {
    margin-left: auto;
    max-width: 528px;
    width: 100%;
    background: #FFFFFF;
    box-shadow: 0px 2px 10px 2px rgba(0, 0, 0, 0.15);
}

.fps_metacodeImg_block {
    max-width: 532px;
    width: 100%;
}

.metatagsContainer .fps_metacodeImg_block>img {
    width: 100%;
    height: 100%;
    display: block;
}


.fps_metaTag_innerTxt {
    max-width: 535px;
    width: 100%;
}

.fps_metaTag_innerTxt h2 {
  margin-top: -6px;
    margin-bottom: 18px;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 45px;
    color: #00225d;
}

.fps_metaTag_innerTxt p {
    margin-bottom: 21px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225d;
}
 
.fps_metaTag_innerTxtBlock{
  max-width: 535px;
  width: 100%;
}
.fps_metaTag_inneeImgBlock{
  margin-left: auto;
  max-width: 528px;
    width: 100%;
}


.fps_metaTag_inneeImg>img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: scale-down;
}

.fps_metaTag_inneeImgBlock-sec {
    max-width: 532px;
    width: 100%;
    display: block;
}

.fps_metaTag_inneeImgBlock-sec>img {
    display: block;
    width: 100%;
    height: 100%;
}

 
.fps_metaTag_innerTxtBlock-inner>h2 {
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 45px;
    color: #00225d;
}

.fps_metaTag_innerTxtBlock-inner>p {
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225d;
}


/****************  Container 2 ******************/

.metatagsContainer {
  grid-gap: 20px;
  margin: auto;
 
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 90px;
}

.metatagsImgBlock{
  max-width: 532px;
  width: 100%;
}
.metatagsTxtBlock{
     max-width: 540px;
    width: 100%;
}
.metaTagsImg {
    display: block;
    max-width: 532px;
    width: 100%;
}

.metaTagsImg>img {
    width: 100%;
    height: 100%;
    display: block;
}
 
.metatagsTxt>h2 {
    margin-bottom: 10px;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 45px;
    color: #00225D;
}

.metatagsTxt>p {
    margin-bottom: 22px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225D;
}


/********** container 3 ***************/

.fps_metadesp_outer {
  grid-gap: 35px;
    padding-bottom: 79px;
    margin: auto;
 
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
 
.fps_metadesp_inneeImgBlock {
  margin-top: 65px;
 

}
.fps_metadesp_innerTxtBlock{
   max-width: 541px;
    width: 100%;
}
.fps_metadesp_inneeImgBlock    {
  max-width: 511px;
  width: 100%;
}
 
.fps_metadesp_innerTxt>h2 {
    margin-bottom: 20px;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 45px;
    color: #00225D;
}

.fps_metadesp_innerTxt>p {
  margin-top: 22px;
    margin-bottom: 22px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225D;
}

.fps_metadesp_inneeImg {
  margin-bottom: 11px;
    max-width: 511px;
    width: 100%;
    background: #FFFFFF;
/* box-shadow: 0px 2px 10px 2px rgba(0, 0, 0, 0.15); */
 
}

.fps_metadesp_inneeImg>img {
    width: 100%;
    height: 100%;
    display: block;
}


/********** container 4 and 6 ***************/

.fps_bestPracticeContainer {
     margin: auto;
 
}

.fps_bestPracticeContainer>h2 {
    margin-bottom: 30px;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 45px;
    color: #00225D;
}

.fps_bestPractice-outer {
    grid-gap: 27px;
    display: flex;
    justify-content: space-between;
    align-self: start;
}

.bestPractice-inner {
    max-width: 542px;   
    width: 100%;
}

 
.bestPractice-inner>p {
    margin-bottom: 21px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225D;
}

.bestPractice-inner>h6 {
    margin-bottom: 21px;
    font-style: normal;
    font-weight: 700;
    font-size: 15px;
    line-height: 24px;
    color: #00225D;
}


/*    meta tag  Container 7    **/

.fps_careContainer {
  grid-gap: 24px;
    padding: 80px 20px 60px;
    margin: auto;
    max-width: 1153px;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.fps_careImgBlock,.fps_careImg {
    margin-right: auto;
    max-width: 532px;
    width: 100%;
    display: block;
}

.fps_careImg {
 
    width: 100%;
    display: block;
}


.fps_careImg>img {
    width: 100%;
    height: 100%;
    display: block;
}


/************ metadespContainer *************************/

.metadespContainer {
    padding: 0 20px 70px;
    /* max-width: 1150px; */
    max-width: 1131px;
    width: 100%;
    margin: auto;
    justify-content: space-between;
}

.fps_careTxtBlock,.fps_careTxt {
    max-width: 557px;
    width: 100%;
}
.fps_careTxt {
     width: 100%;
}

.fps_careTxt>h2 {
    margin-bottom: 20px;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 45px;
    color: #00225D;
}

.fps_careTxt>p {
    margin-bottom: 22px;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225D;
}

.fps_writing_meta_Container {
    padding: 0 20px;
    /* max-width: 1120px; */
    max-width: 1145px !important;
     width: 100%;
    margin: auto;
}


/*******************  fps_valueSection  *****************************/

.fps_valueSection {
  padding: 50px 0 0;
}

.fps_valueContainer {
    grid-gap: 27px;
    margin: auto;
    /* padding: 0 20px; */
    padding: 0 20px 52px;
    max-width: 1130px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-self: center;
}

.fps_value_inner {
    max-width: 345px;
    width: 100%;
    min-height: 345px;
    background: #ffffff;
    box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.15);
}

.fps_value_inner_box {
    padding: 44px 0px 0;
    margin: auto;
    max-width: 277px;
    width: 100%;
}

.fps_value_inner_img {
    max-width: 100px;
    width: 100%;
    margin: auto;
}

.fps_value_inner_img>img {
    width: 100%;
    height: 100%;
    display: block;
}

.fps_value_innerTxt>h4 {
    margin: 23px 0 0;
    font-style: normal;
    font-weight: 700;
    font-size: 25px;
    line-height: 45px;
    color: #00225d;
}

.fps_value_innerTxt>p {
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #00225d;
}


/**************  FAQ ********************************/

/* .fps_faqSection {} */

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

.fps_faqHead>h2 {
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 45px;
    text-align: center;
    color: #00225D;
}

.fps_faqHead>p {
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    text-align: center;
    color: #00225D;
}

@media (max-width: 1200px) {
    .fps_banner-innerImg {
        max-width: 410px;
    }
    .fps_banner-innerTxt>h2 {
        font-size: 45px;
        line-height: 47px;
    }


    .fps_faqHead>h2,.metatagsTxt>h2,.fps_metaTag_innerTxt h2,.fps_metadesp_innerTxt>h2,.fps_bestPracticeContainer>h2,.fps_bestPracticeContainer>h2,.fps_careTxt>h2 {
      font-size: 38px;
      line-height: 43px;
    }

}

@media (max-width: 1025px) {
    .fps_banner-innerTxt>h2 {
        font-size: 44px;
        line-height: 46px;
    }
    .fps_formWrap-outer {
        margin-top: -270px;
    }
    .fps_value_inner_box{
      padding:44px 10px 0;
    }
    .fps_formWrap-outer {
        padding: 47px 20px 59px;
    }
    .fps_metaTag_Section {
    padding-top: 88px;
}

.fps_metaTag_outer {
    padding-bottom: 60px;
}
.fps_metadesp_outer{
    padding-bottom: 50px;
}
.fps_metaTag_Container {
      padding-bottom: 50px;
    }
.metatagsContainer {
    padding-bottom: 80px;
}
.fps_careContainer {
    padding: 70px 20px 30px;
}
 
 
      .fps_faqHead>h2,.metatagsTxt>h2,.fps_metaTag_innerTxt h2,.fps_metadesp_innerTxt>h2,.fps_bestPracticeContainer>h2,.fps_bestPracticeContainer>h2,.fps_careTxt>h2 {
      font-size: 36px;
      line-height: 41px;
    }
}

@media (max-width: 1025px) {
    .fps_formData>input::placeholder {
        transform: translateY(-11px);
        word-break: break-word;
        white-space: normal;
    }
}

@media (max-width: 991px) {
    .fps_faqHead>h2,.metatagsTxt>h2,.fps_metaTag_innerTxt h2,.fps_metadesp_innerTxt>h2,.fps_bestPracticeContainer>h2,.fps_bestPracticeContainer>h2,.fps_careTxt>h2 {
      font-size: 34px;
      line-height: 44px;
    }

    .fps_bannerSection {
        padding: 120px 0 0;
    }
    .fps_banner-outer {
        align-items: center;
    }
    .searchWrap {
        /* flex-wrap: wrap; */
        grid-gap: 10px;
    }
    .fps_menuBlock{
        margin: 33px auto 0;
    }
    .fps_banner-innerTxt>h2 {
        font-size: 32px;
        line-height: 34px;
        margin: 16px 0;
    }
    .fps_banner-innerImg {
        max-width: 330px;
    }
    .fps_formWrap-outer {
        /* margin-top: -375px; */
    }
  
    .fps_menuBlock>ul>li{
        padding: 0 6px;
    }
    .fps_menuBlock>ul>li>a {    
        font-size: 13px;
    }
    .fps_googlepage-inner{
        padding: 46px 12px 0px;
    }
    .googleData{
    padding: 46px 12px 128px;
    }
    .fps_googlepage-outer,
    .fps_form {
        max-width: 50%;
    }
 

    .fps_metaTag_Container {
      padding-bottom: 50px;
    }
}

@media (max-width: 768px) {
    img{
        width:100%;
    }

    .fps_banner-innerTxt>h1 {
        text-align: center;
        font-size: 45px;
    }

    /************* 768 flex direction***********************/
    .fps_banner-outer,
    .fps_formWrap-inner,
    .fps_metaTag_outer,
    .metatagsContainer,
    .fps_metadesp_outer,
    .fps_careContainer,
    .fps_bestPractice-outer {
        flex-direction: column;
    }
      /************* 768 max width***********************/
    .fps_metaTag_innerTxtBlock,
    .fps_googlepage-outer,
    .fps_form,
    .fps_googlepage-inner,
    .googleData,
    .fps_menuBlock>ul,
    .fps_metaTag_innerTxt,
    .fps_metadesp_innerTxt,
    .metatagsTxt,
    .bestPractice-inner:first-child,
    .bestPractice-inner:last-child,
    .fps_careTxt,.metatagsTxtBlock,.fps_metadesp_innerTxtBlock,.fps_careTxtBlock {
        max-width: 100%;
    }
    .mw545 {
      max-width: 100% !important;
    }
        /************* 768   center text  ***********************/
        .fps_metaTag_innerTxt h2,
    .fps_metaTag_innerTxt p,
    .metatagsTxt>p,
    .metatagsTxt>h2,
    .fps_metadesp_innerTxt>h2,
    .fps_metadesp_innerTxt>p,
    .fps_bestPracticeContainer>h2,
    .bestPractice-inner>p,
    .bestPractice-inner>h6,
    .fps_careTxt>h2,
    .fps_careTxt>p {
        text-align: center;
    }
    .metatagsTxt>h2,.fps_metaTag_innerTxt h2,.fps_metadesp_innerTxt>h2,.fps_bestPracticeContainer>h2,.fps_bestPracticeContainer>h2,.fps_careTxt>h2 {
      font-size: 32px;
      line-height: 47px;
    }
    .fps_formSection{
        background: white;
    }
    .metaTagImg_resp{
        margin: auto !important;
     }


  .fps_bannerSection::before{
    content: unset;
  }
  .fps_checkbox-outer{
    margin-top: 27px;
    margin-bottom: 12px;
  }
    .fps_formData>input::placeholder {
        transform: unset;
        word-break: break-word;
        white-space: normal;
    }
    .showhide {
        display: block !important;
    }
    .fps_menuBlock::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 1px;
    background: #c4c4c4;
    bottom: -2px;
    left: 0;
}
 
    .fps_formWrap-outer {
        margin-top: -200px;
    }
    .fps_banner-innerTxt {
        margin-top: 0;
    }
    .fps_banner-innerTxt>h2 {
        max-width: 480px;
    }
    .fps_formWrap-inner{
        align-items: center;
    }
    .googleData {
        padding: 46px 12px 0px;
    }
    .metatagsImgBlock{
        display: none;
    }
    .fps_menuBlock>ul{
        max-width: 90%;
        justify-content: space-between;
    }
    .fps_metaTag_innerTxtBlock,
    .fps_metaTag_inneeImgBlock {
        width: 100%;
    }

    /************* 768  display none ****************************/
    .fps_metaTag_inneeImg,
    .metaTagsImg {
        display: none;
    }
    .fps_bannerWrap {
        padding: 0;
    }
    .fps_valueContainer {
        padding: 0 20px 38px;
        grid-row-gap: 35px;
        flex-direction: column;
        align-items: center;
    }
    .fps_metaTag_outer {
        padding-bottom: 34px;
    }
    .fps_metaTag_innerTxt h2 {
        margin-bottom: 23px;
    }
    /********** img size ****************/
    .fps_banner-innerImg {
        max-width:400px;
        width: 100%;
     }
    .metadesp-innerImg {
        margin: auto auto 32px;
        max-width: 400px;
        width: 100%;
        box-shadow: 0px 2px 10px 2px rgb(0 0 0 / 15%);
    }
    .metadesp-innerImg > img{
      width: 100%;
      height: 100%;
      display: block;
    }
    .fps_metadesp_inneeImgBlock{
      margin: 40px auto auto;
    }
    .metaTagsImg {
        margin: auto auto 33px;
        max-width: 450px;
    }
    .fps_careImgBlock{
      display: none;
    }
    .metatagsImgBlock {
        margin: auto auto 32px;
        display: block;
        max-width: 532px;
        width: 100%;
    }
    .fps_careImg {
        display: none;
        margin: auto auto 40px;
    }
    .metatagsTxt {
        margin: 0;
    }
    .fps_faqHead {
      margin: auto auto 65px;
    }

    .metatagsContainer {
        padding-bottom: 65px;
    }
    .fps_metaTag_innerTxt h2,.metatagsTxt>h2 {
        margin-bottom: 27px;
    }
    .bestPractice-inner:first-child {
        padding-right: 0;
    }
    .bestPractice-inner:last-child {
        padding-right: 0;
    }
    .fps_metadesp_inneeImgBlock{
      display: none;
    }
    .imgborder{
   box-shadow: none !important;
   margin: auto auto 0 !important;
 }
 .fps_metaTag_Section{
   padding: 90px  0 0;
 }
 .fps_careContainer {
  padding: 40px 20px 15px;
}
.fps_careTxt>h2 {
  margin-bottom: 30px;
}
.fps_valueSection {
  padding: 20px 0 0;
}
.fps_careImg {
  max-width: 400px;
  margin-bottom: 35px;
}
.fps_googlepage-outer{
  border-radius: 0 0 10px 10px;
}

/********** grid gap************/
.fps_metaTag_outer{
    grid-gap: unset;
}
.fps_formSection {
    padding-bottom: 50px;
}
.fps_metaTag_Section {
    padding: 88px 0 0;
}
}

@media (max-width: 527px) {
    .fps_menuBlock>ul {
        max-width: 90%;
        justify-content: center;
    }
    .fps_formData> #page_title::placeholder {
        transform: translateY(-11px);
        word-break: break-word;
        white-space: normal;
    }
}

@media (max-width: 576px) {
    .fps_banner-innerTxt>h2 {
        text-align: center;
    }
    .fps_banner-innerTxt>p {
        text-align: center;
    }
    .fps_valueContainer{
      flex-direction: column;
      align-items: center;
    }
    .fps_value_inner,.fps_value_inner_box{
       max-width: 100%;
     }
     .fps_value_inner_box{
       padding:44px 37px 55px ;
     }
     .fps_faqHead>h2,.metatagsTxt>h2,.fps_metaTag_innerTxt h2,.fps_metadesp_innerTxt>h2,.fps_bestPracticeContainer>h2,.fps_bestPracticeContainer>h2,.fps_careTxt>h2 {
      font-size: 30px;
      line-height: 45px;
    }
    .fps_googleImg{
      max-width: 104px;
    }
    .searchBox{
      max-width: 151px;
      width: 100%;
    }
    .metaTagsImg,.metadesp-innerImg,.fps_careImg   {
        max-width: 100%;
    }
}

@media (max-width:460px) {
    .mb_5{
        margin-bottom: 5px !important;
    }
    .mt_12{
        margin-top: 12px !important;
    }
    .mb_32{
        margin-bottom: 32px !important;
    }
    .fps_banner-innerImg>img{
        max-width: 100%;
    }

  /************  banner   *********************/
    .fps_bannerSection {

         padding: 103px 0 32px;
        min-height: 660px;
        position: relative;
        /* background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bg375.png") no-repeat; */
        background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bg-shap-2.png") no-repeat;
 
        background-size: cover;
    }
    .fps_bannerSection::before{
        pointer-events: none;
        position: absolute;
    content: '';
    width: 100%;
    height: 731px;
    background: url("/wp-content/themes/firstpage/img/google-review-link-generator/bg-shape1.png") no-repeat;
    background-size: cover;
    }
 

    .fps_banner-innerImg {
        margin-top: 80px;
        max-width: 312px;
    }
 
    .fps_banner-outer {
        padding: 0 21px;
    }
    .fps_banner-innerTxt>h2 {
        margin-bottom: 16px;
        margin-top: 16px;
        font-size: 23px;
        line-height: 36px;
        text-align: center;
    }
 

    .fps_banner-innerTxt>p {
        margin: auto;
        max-width: 318px;
    }
    .fps_formSection {
        padding: 17px 0 0;
    }
    .fps_formWrap-outer {
        margin-top: 0;
    }
    .fps_bannerWrap {
        padding: 0;
    }
    .fps_formWrap-outer {
        /* padding: 0 20px 79px; */
        padding: 0 20px 0;
    
    }
    .fps_value_inner_box{
       padding:44px 27px 55px ;
     }

    /********** google form *****************/
    .fps_form {
        padding: 28px 21px;
    }
    .fps_form>h3 {
        margin: 0 0 14px 0;
        max-width: 280px;
        width: 100%;
    }
    .fps_formData {
      margin-bottom: 24px;
    }
    .fps_formData>label {
      margin-bottom: 6px;
    }
    .searchWrap>.fps_googleImg{
      max-width: 72px;
    }
    .fps_formData>textarea {
        max-height: 163px;
        padding: 14.6px 18px 14.6px 13px;
    }
    .fps_googlepage-inner {
      padding: 38px 18px 31px;
}
.searchTime{
 font-size: 12px;
line-height: 24px;
}
.metaTagsImg {
        margin: auto auto 33px;
        max-width: 327px;
    }
    .metadesp-innerImg {
        margin: auto auto 32px;
        max-width: 327px;
        width: 100%;
        box-shadow: 0px 2px 10px 2px rgb(0 0 0 / 15%);
    }
    .fps_checkbox-outer {
        max-width: 250px;
    }

.fps_menuBlock>ul{
    max-width: 302px;
}
.fps_menuBlock>ul>li>a {
    font-size: 10px;
    line-height: 24px;
}
.fps_menuBlock>ul>li{
    padding: 0 5px;
}
.active::before {
    width: 26px;
    height: 3px;
}
.fps_careImg {
  max-width: 328px;
  margin-bottom: 35px;
}
.pgTitle{
    margin-bottom: 10px;
    font-size: 18px;
line-height: 27px;
}
.desp{
    font-size: 14px;
line-height: 22px;  
}
.link{
    margin: 0;
    font-size: 12px;
line-height: 24px;
 }
 .googleData{
     padding: 0 12px 0px;
 }
 .searchTime{
     padding: 10px 0 17px;
     margin: 0;
 }.fps_googlepage-outer {
    padding: 36px 28px 42px;}
 
    .bestPractice-inner {
        text-align: center;
    }
   .metatagsTxt>h2,.fps_metaTag_innerTxt h2,.fps_metadesp_innerTxt>h2,.fps_bestPracticeContainer>h2,.fps_bestPracticeContainer>h2,.fps_careTxt>h2 {
      font-size: 28px;
      line-height: 38px;
    }
    .fps_bestPracticeContainer > h2, .fps_faqHead>h2{
          font-size: 27px;
        }
.searchBox {
    padding: 1px;
}
.searchBox>input{
    border-radius: 100px;
}
.fps_menuBlock{
    margin: 29px auto 0;
    padding-bottom: 0;
}
.active::before{
    bottom: -3px;
}

      .fps_form{
        padding: 21px 20px;
      }
      .fps_metaTag_innerTxt h2, .metatagsTxt>h2 {
        margin-bottom: 16px;
      }
      .fps_metaTag_innerTxt p {
        margin-top: 5px;
      }
      .fps_metaTag_outer {
        padding-bottom: 25px;
      }
      .metatagsTxt>h2{
        margin-bottom: 22px;
      }
      .fps_metadesp_outer {
        padding-bottom: 41px;
      }
      .fps_bestPracticeContainer>h2 {
        margin-bottom: 34px;
      }
      .fps_bestPractice-outer{
        grid-gap: unset;
      }
      .fps_metaTag_Container {
        padding-bottom: 41px;
      }
      .fps_metadesp_innerTxt>h2 {
        margin-bottom: 21px;
        }
        .metadesp-innerImg{
          margin: auto auto 28px;
        }
        .fps_metadesp_innerTxt>p{
          margin-top: 18px;
        }
 
        .mb17{
          margin-bottom: 17px !important;
        }
        .fps_valueContainer {
            padding: 0 24px 32px;
        }
        .fps_value_inner_box {
            max-width: 321px !important;
        }
        .fps_value_inner_box {
            padding: 44px 22px 31px;
        }


            .fps_careTxt > h2{
                margin: auto auto 25px;
            max-width: 290px;
            width: 100%;
            }
            .fps_valueContainer {
            padding: 0 20px 32px;
        }
        .metaTagsImg,.metadesp-innerImg,.metadesp-innerImg,.fps_careImg   {
            max-width: 100%;
        }  
        .metaTagImg_resp{
            max-width: 100% !important;
        }
}
</style>

<!-- /////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////// ENG /////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////// -->

<?php if (ICL_LANGUAGE_CODE == "en"): ?>

<section class="fps_bannerSection">
  <div class="fps_banner-outer">
      <div class="fps_banner-innerTxt">
            <h1>Google SERP Simulator</h1>
            <h2>Hong Kong's favorite Google SERP preview tool</h2>
            <p>The Google SERP Simulator is a great tool to check how your website will appear when people search for it on Google.</p>
      </div>
      <div class="fps_banner-innerImg">
    
           <img src="/wp-content/themes/firstpage/img/google-review-link-generator/serp_banner.png" alt="serp_banner"/>  
      </div>
  </div>
</section>


<!--  Google form -->

  <section class="fps_formSection">
  <div class="fps_bannerWrap">
      <div class="fps_formWrap-outer">
          <div class="fps_formWrap-inner">
              <form class="fps_form">
                <h2>Start the simulator now</h2>
                  <p>Copy your page's title tag and meta description in the fields below to see how they'll look in the Google SERP snippet.</p>

                  <div class="fps_formData user_box">
                      <label>Page Title</label>
                      <input type="text" id="page_title" placeholder="For Example: #1 Digital Marketing Company - firstpage.hk" />
                      <span class="total_char error"> </span>
                  </div>
                  <div class="fps_formData user_box">
                      <label>Meta Description</label>
                      <textarea cols="3" rows="6" type="text" id="meta_desc" placeholder="Write your meta description to tell the Google users that you are the best in your industry. Tip: Use natural language rather than keyword stuffing."></textarea>
                      <span class="total_char error">  </span>
                  </div>

                  <div class="fps_formData user_box">
                      <label>Page URL</label>
                      <input type="text" id="page_url" placeholder="http://www.example.com" />
                      <span class="total_char error">  </span>

                  </div>
                  <div class="fps_formData user_box">
                      <label>Bolded Keywords</label>
                      <input type="text" id="bolded_keyword" placeholder="Should be seperated by comma" />
                  </div>

                  <div class="fps_checkbox-outer">
                      <div class="fps_checkbox-inner">
                          <input type="checkbox"  value="rating" name="rating" class="rating"  />
                          <label class="check"for="">Show Rating</label>
                      </div>
                      <div class="fps_checkbox-inner">
                          <input type="checkbox"  value="date" name="date" class="date"  />
                          <label class="check" for=""> Show Date</label>
                      </div>
                  </div>
              </form>

              <div class="fps_googlepage-outer">
                  <div class="fps_googlepage-inner">
                      <div class="searchWrap">
                          <div class="fps_googleImg">
                              <img src="https://firstpage.hk/wp-content/themes/firstpage/img/google-review-link-generator/googleImg.webp" alt="googleImg"/>
                           </div>
                          <div class="searchBox"><input type="text" /></div>
                      </div>

                      <div class="fps_menuBlock">
                          <ul>
                              <li class="active"><a href=""> All </a></li>
                              <li><a href=""> Images </a></li>
                              <li><a href=""> Videos </a></li>
                              <li><a href=""> News </a></li>
                              <li><a href=""> Maps </a></li>
                              <li><a href=""> More </a></li>
                          </ul>
                      </div>

                      <div class="googleData">
                          <p class="searchTime">About 45,800,00 results (0.48 seconds)</p>
                          <div class="google_desc_change">         <h6 class="link">https://firstpage.hk</h6>         </div>
                          
                          <div class="moblie_rating" >
                            <!-- <img src="./image/star.png" alt="rating_star"> -->
                            <img src="/wp-content/themes/firstpage/img/google-review-link-generator/star.png" alt="star" />
                          </div>
                          <div class="moblie_date" >
                            <p>May 30,2022</p>
                          </div>

                          <div class="google_desc_change">
                            <h5 class="pgTitle"> For Example: #1 Digital Marketing Company - firstpage.hk </h5> </div>

                            <div class="google_meta_desc"><p class="desp"> Write your meta description to tell the Google users that you are the best in your industry! Tip: Use natural language rather than keyword stuffing.</p>
                            </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>    
 

<!----- Imp of meta tag ------->
<section class="fps_metaTag_Section">
  <div class="fps_metaTag_Container">
      <!--meta tag  Container 1-->
      <div class="fps_metaTag_outer">
          <div class="fps_metaTag_innerTxtBlock">
              <div class="fps_metaTag_innerTxt">
                  <h2>The importance of meta tags for every business' website</h2>
                  <div class="fps_banner-innerImg showhide  metaTagImg_resp">
                      <img src="/wp-content/themes/firstpage/img/google-review-link-generator/fps_banner-innerImg_resp.png" alt=" Importance of Meta Tag Banner" />
                   </div> 

                <p>While meta tags may sound nondescript to you, they have a massive impact on how search engines and potential customers view the site. These tags, which are hidden from the actual content of the webpage, provide important information such as the page's title and meta description.</p>
                <p>The meta title acts as the clickable headline for search engine results pages and is crucial for attracting potential customers to your site. The meta description gives a brief summary of the page's content and can also be used by search engines in their results. As such, meta tags should not be overlooked as they may make all the difference in drawing in new customers to your website.</p>

              </div>
          </div>

          <div class="fps_metaTag_inneeImgBlock">
              <div class="fps_metaTag_inneeImg">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metatagInp.png" alt="metatagInp" />
                  <!-- <img src="/google-review-link-generator/metatagInp.png" alt=""> -->

              </div>
          </div>
      </div>

      <!--meta tag  Container 2-->

      <div class="metatagsContainer">
          <div class="metatagsImgBlock">
              <div class="metaTagsImg">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metacodeImg.png" alt="metacodeImg" />
                  <!-- <img src="./google-review-link-generator/metacodeImg.png" alt=""> -->
              </div>
          </div>

          <div class="metatagsTxtBlock">
              <div class="metatagsTxt">

                  <h2>What are meta tags?</h2>
                  <div class="metaTagsImg showhide">
                      <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metacodeImg.png"  alt="Meta tag Image" />
                      <!-- <img src="./google-review-link-generator/metacodeImg.png" alt="Meta Tag SERP"> -->
                  </div>
                <p>Have you ever searched for something online and noticed that the results have a short description underneath them?</p>
                <p>Meta tags likely provide that description. They are bits of HTML code that give information on a webpage, such as its title and description. They can help optimize a website's search engine optimization (SEO), making it more likely to appear at the top of search results.</p>
                <p>The meta description tag, in particular, allows website owners to choose the descriptor that appears below their page's title, allowing them to entice potential visitors with a catchy summary. So next time you notice those little snippets of text in your internet searches, you'll know the meta tags provided them.</p>
                </div>
          </div>

      </div>


      <!--meta tag  Container 3-->
      <!--- Prob in TXT-->
      <div class="fps_metadesp_outer">
          <div class="   fps_metadesp_innerTxtBlock">
              <div class="fps_metadesp_innerTxt">
                  <h2>What are title tags, and why are they essential?</h2>
                  <div class="metadesp-innerImg showhide imgborder">
                      <img src="/wp-content/themes/firstpage/img/google-review-link-generator/titletagImg1_resp.png" alt="Title Tag Example" />
                   </div>

                  <div class="metadesp-innerImg showhide imgborder">
                    <img src="/wp-content/themes/firstpage/img/google-review-link-generator/mobile1.png" alt="SERP Title Example" />
                  </div>
                    <p>Whether you're looking to increase organic search engine traffic or improve your website's search engine optimization (SEO), title tags are crucial. A title tag is a piece of HTML code that assigns a title to a specific webpage, and it appears as the clickable headline for a given result on a search engine results page.</p>
                    <p>This title should accurately and concisely describe the page's content, using keywords relevant to your business or industry. By incorporating relevant keywords into title tags, you can increase the likelihood that your pages will appear in search results for those terms. In addition to improving SEO, accurate title tags can increase the chances that internet users will click on your listing, driving more traffic to your website.</p>
                    <p>Overall, utilizing title tags can significantly impact your website's visibility in Google's organic search results and success.</p>

                </div>
          </div>

          <div class="fps_metadesp_inneeImgBlock ">
    
              <div class="fps_metadesp_inneeImg">  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/impeta2.png" alt="impMeta" />

              </div>
          </div>


      </div>


      <!--meta tag  Container 4-->
      <div class="fps_bestPracticeContainer">
          <h2 class="mb32">What are the best practices when writing title tags?</h2>

          <div class="fps_bestPractice-outer">

              <div class="bestPractice-inner">
                  <h6>Keep them short and to the point</h6>
                  <p>Google will truncate excessively long title tags and put a simple "..." at the end. Title tag truncation is what this is known as, and it looks awful. Avoid this by keeping your title tags between 50 and 60 characters long (use our tool at the top of the page to ensure they won't be cut off!).</p>
                  <h6>No need to yell at your audience</h6>
                  <p>Although it can seem like using all caps is a beautiful way to grab attention, consumers will think you're yelling at them through the screen! Use sentence case (initial letter capitalized) or title case (all "major" words are capitalized) as a far more efficient substitute.</p>
                  <h6>Make it unique</h6>
                  <p>
                  Make a distinct title tag appropriate for the material on each page of your website that is specific to that page. Avoid using duplicate title tags at all times because they can lead to problems.
                  </p>
              </div>

              <div class="bestPractice-inner">
                  <h6> Write for humans, not robots</h6>

                  <p>Keyword stuffing used to work in the past, but doing so today will likely turn your audience off. Because your title tag is often the first thing people see when they’re considering clicking on a result, it’s important to make sure they are well written and engaging. Of course, you want to include keywords in your title tags, but don't stuff them in there just for the sake of it. Use them strategically, and make sure they flow naturally with the rest of your title.</p>

                  <h6>Make it unique</h6>
                  <p>Make a distinct title tag appropriate for the material on each page of your website that is specific to that page. Avoid using duplicate title tags at all times because they can lead to problems.</p>

                  <h6>Write for people, not machines</h6>
                  <p>It will help if you don't pack your title tags full of keywords. That approach may have been effective decades ago, but it is undoubtedly ineffective today and will discourage visitors from visiting your website.</p>
                  <p>Put yourself in the position of your target audience while creating your title tags. Would you click on it if it appeared in the Google results?</p>
              </div>


          </div>
      </div>

  </div>


  <!--meta descriptions   Container 5 -->

  <div class="fps_metadesp_outer metadespContainer">

      <div class="fps_metadesp_inneeImgBlock         ">
 

          <div class="fps_metadesp_inneeImg">
              <img src="/wp-content/themes/firstpage/img/google-review-link-generator/whyMetadesp.png" alt="whyMetadesp" />
              <!-- <img src="./google-review-link-generator/titletagImg2.png" alt=""> -->

          </div>
      </div>

      <div class="   fps_metadesp_innerTxtBlock  mw545 ">
          <div class="fps_metadesp_innerTxt">
              <h2 class="mb_5">What is a meta description tag, and why is it so essential?</h2>
              <div class="metadesp-innerImg showhide  imgborder  ">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metadesp_resp-bor.png" alt="Meta description tag example" />
 
              </div>

              <div class="metadesp-innerImg showhide  imgborder mb16">
                <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metadesp2_res.png"  alt="Meta description SERP example" />

            </div>
            <p>The meta description tag is an HTML element that gives a concise page description of the content of a webpage. Not only does it provide valuable information for users, but it also significantly impacts search engine optimization. This is because meta descriptions act as a SERP snippet for search engines, helping them understand the content and relevance of a page to a particular search query.</p>
            <p>Additionally, meta descriptions can influence the SERP click-through rate from your Google search to your web page. To optimize this important element, meta descriptions should be concise yet descriptive, with the ideal length falling between 50-160 characters. Luckily, you can use our meta description length checker above to ensure yours falls within this range and attract the attention of both search engines and your target audience.</p>

        </div>
      </div>


  </div>



  <!--meta tag  Container 6 out from container-->
  <div class="fps_bestPracticeContainer fps_writing_meta_Container">
      <h2 class="mb17">What are the best practices for writing a meta description?</h2>

      <div class="fps_bestPractice-outer">

          <div class="bestPractice-inner">
          <h6>Avoid penning a novel.</h6>
          <p>No one has time for that! It is advised that you limit the number of characters, including spaces, to 160. Going beyond could result in Google cutting it off and adding an ellipsis (...), just as if you had done the same with your title tag. However, you also don't want to cut it too short. Give Google and your potential customers (an accurate and concise description of what's on the page that goes well with the title tag) information about what's there.</p>
          <p>To see how your meta descriptions will appear on Google on desktop and mobile, use our Google SERP snippet preview tool right away!</p>
        </div>

          <div class="bestPractice-inner">
            <h6>Put a few keywords in</h6>
            <p>Although Google has stated that the keywords in a meta description have no bearing on a website's ranking, it's still a good idea to include one or two that are relevant to the content of the page in there.</p>
            <p>Users will have a better notion of what to expect from the page if you do this, and they'll be more inclined to click if they're looking for one of the keywords in your meta description.</p>
            <h6>Keep them unique for each page</h6>
            <p>Just like title tags, you want to write a unique meta description for every single one of the web pages on your website. Especially considering if someone clicks through to a page that's using another's meta description and their desired content doesn't exist, they'll bounce right off.</p>    
          </div>

      </div>
  </div>

  <!--meta tag  Container 7-->
  <div class="fps_careContainer">
      <div class="fps_careImgBlock">
          <div class="fps_careImg">
              <img src="/wp-content/themes/firstpage/img/google-review-link-generator/care.png" alt="care" />
              <!-- <img src="./google-review-link-generator/care.png" alt=""> -->
          </div>
      </div>

      <div class="fps_careTxtBlock">
          <div class="fps_careTxt">
              <h2>Let First Page take care of it all</h2>
              <div class="fps_careImg showhide">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/care.png" alt="First Page SEO Team" />
                  <!-- <img src="./google-review-link-generator/care.png" alt=""> -->
              </div>
                <p>You're busy running your own business, aren't you? It's hard enough for you trying to find the time to do everything on that never-ending list. Why not let our experts handle some tedious marketing work? They will focus their efforts where it matters most - generating leads and making sales!</p>
                <p>At First Page, we have decades of combined experience creating top-performing meta tags for clients in all industries and can take the hassles out of it for you, too.</p>
                <p>Focus on the more critical aspects of operating your business and leave the tedious marketing stuff to the experts at First Page. Call us now at +852 2356 3200 to learn more.</p>

            </div>
      </div>
  </div>




  </div>
</section>

<!-- ---------- fps_valueSection ----------------------->
<section class="fps_valueSection">
  <div class="fps_valueContainer">

      <div class="fps_value_inner">
          <div class="fps_value_inner_box">
              <div class="fps_value_inner_img">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/search.png" alt="search" />
                  <!-- <img src="./google-review-link-generator/search.png" alt=""> -->
              </div>
              <div class="fps_value_innerTxt">
                  <h4>Bulletproof strategy</h4>
                  <p>
                  With over 10 years of experience in this field, we know what it takes to get your website to the top of the search engines. Our SEO specialists are experts in the field, ready to take on whatever challenges you throw our way.

                  </p>
              </div>
          </div>
      </div>

      <div class="fps_value_inner">
          <div class="fps_value_inner_box">
              <div class="fps_value_inner_img">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/buy.png"  alt="buy" />
                  <!-- <img src="./google-review-link-generator/buy.png" alt=""> -->

              </div>
              <div class="fps_value_innerTxt">
                  <h4>Top-notch results</h4>
                  <p>
                  Unlike other marketing firms that rely on outdated techniques, we utilise <a href="https://wordpress-771589-2747572.cloudwaysapps.com/resources/blog/why-partner-with-an-award-winning-digital-marketing-agency-in-singapore/">cutting-edge strategies that are proven to get results</a>. We’ll take your business to the next level. With our help, you'll see a dramatic increase in web traffic, leads, and sales. 
                  </p>
              </div>
          </div>
      </div>

      <div class="fps_value_inner">
          <div class="fps_value_inner_box">
              <div class="fps_value_inner_img">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/profit.png"  alt="profit" />
                  <!-- <img src="./google-review-link-generator/profit.png" alt=""> -->

              </div>
              <div class="fps_value_innerTxt">
                  <h4> Unparalleled support</h4>
                  <p>
                  From keyword research to <a href="https://wordpress-771589-2747572.cloudwaysapps.com/resources/seo/your-guide-to-an-seo-campaign-everything-you-need-to-know/">campaign optimisation</a>, we have the tools and expertise to help you succeed. Our team is standing by to help you achieve your marketing goals.

                  </p>
              </div>
          </div>
      </div>
  </div>
</section>

<?php endif; ?>

<!-- //////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////// ENG ENDS /////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////// -->


<!-- ////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////// CN /////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////// -->

<?php if (ICL_LANGUAGE_CODE == "zh"): ?>

<section class="fps_bannerSection">
  <div class="fps_banner-outer">
      <div class="fps_banner-innerTxt">
            <h1>Google SERP預覽工具</h1>
            <h2>香港最佳的Google SERP預覽工具</h2>
            <p>Google SERP預覽工具是很好的工具，讓您可以預覽網站在Google搜尋結果上如何顯示。</p>
      </div>
      <div class="fps_banner-innerImg">
           <img src="/wp-content/themes/firstpage/img/google-review-link-generator/serp_banner.png" alt="serp_banner"/>  
      </div>
  </div>
</section>


<!--  Google form -->

  <section class="fps_formSection">
  <div class="fps_bannerWrap">
      <div class="fps_formWrap-outer">
          <div class="fps_formWrap-inner">
              <form class="fps_form">
                <h2>立即開始預覽</h2>
                  <p>複製並貼上您網站頁面的標題標籤和元描述，以查看它們在Google SERP 上的顯示</p>

                  <div class="fps_formData user_box">
                      <label>頁面標題</label>
                      <input type="text" id="page_title" placeholder="舉例：#1 數碼營銷公司 - firstpage.hk" />
                      <span class="total_char error"> </span>
                  </div>
                  <div class="fps_formData user_box">
                      <label>元描述</label>
                      <textarea cols="3" rows="6" type="text" id="meta_desc" placeholder="寫下您的元描述，讓Google用戶知道您是行業中的領先者！ 提示：內容應自然而非關鍵字堆砌。"></textarea>
                      <span class="total_char error">  </span>
                  </div>

                  <div class="fps_formData user_box">
                      <label>網頁網址</label>
                      <input type="text" id="page_url" placeholder="http://www.example.com" />
                      <span class="total_char error">  </span>

                  </div>
                  <div class="fps_formData user_box">
                      <label>粗體關鍵詞</label>
                      <input type="text" id="bolded_keyword" placeholder="應該用逗號分隔" />
                  </div>

                  <div class="fps_checkbox-outer">
                      <div class="fps_checkbox-inner">
                          <input type="checkbox"  value="rating" name="rating" class="rating"  />
                          <label class="check"for="">顯示評級</label>
                      </div>
                      <div class="fps_checkbox-inner">
                          <input type="checkbox"  value="date" name="date" class="date"  />
                          <label class="check" for=""> 顯示日期</label>
                      </div>
                  </div>
              </form>

              <div class="fps_googlepage-outer">
                  <div class="fps_googlepage-inner">
                      <div class="searchWrap">
                          <div class="fps_googleImg">
                              <img src="https://firstpage.hk/wp-content/themes/firstpage/img/google-review-link-generator/googleImg.webp" alt="googleImg"/>
                           </div>
                          <div class="searchBox"><input type="text" /></div>
                      </div>

                      <div class="fps_menuBlock">
                          <ul>
                              <li class="active"><a href=""> All </a></li>
                              <li><a href=""> Images </a></li>
                              <li><a href=""> Videos </a></li>
                              <li><a href=""> News </a></li>
                              <li><a href=""> Maps </a></li>
                              <li><a href=""> More </a></li>
                          </ul>
                      </div>

                      <div class="googleData">
                          <p class="searchTime">About 45,800,00 results (0.48 seconds)</p>
                          <div class="google_desc_change">         <h6 class="link">https://firstpage.hk</h6>         </div>
                          
                          <div class="moblie_rating" >
                            <!-- <img src="./image/star.png" alt="rating_star"> -->
                            <img src="/wp-content/themes/firstpage/img/google-review-link-generator/star.png" alt="star" />
                          </div>
                          <div class="moblie_date" >
                            <p>May 30,2022</p>
                          </div>

                          <div class="google_desc_change">
                            <h5 class="pgTitle"> 舉例：#1 數碼營銷公司 - firstpage.hk </h5> </div>

                            <div class="google_meta_desc"><p class="desp"> 寫下您的元描述，讓Google用戶知道您是行業中的領先者！ 提示：內容應自然而非關鍵字堆砌。 </p>
                            </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>    
 

<!----- Imp of meta tag ------->
<section class="fps_metaTag_Section">
  <div class="fps_metaTag_Container">
      <!--meta tag  Container 1-->
      <div class="fps_metaTag_outer">
          <div class="fps_metaTag_innerTxtBlock">
              <div class="fps_metaTag_innerTxt">
                  <h2>元標記對每個企業網站的重要性</h2>
                  <div class="fps_banner-innerImg showhide  metaTagImg_resp">
                      <img src="/wp-content/themes/firstpage/img/google-review-link-generator/fps_banner-innerImg_resp.png" alt=" Importance of Meta Tag Banner" />
                   </div> 

                <p>雖然元標記對您來說可能很普通，但它們對搜尋引擎和潛在客戶查看網站時有著巨大的影響。這些標籤雖然未有顯示在網頁上，但它們提供了重要信息，例如頁面標題和元描述。</p>
                <p>元標題充當了搜尋引擎結果網頁的可點擊標題，對於吸引潛在客戶訪問您的網站至關重要。元描述則為網站頁面內容的簡短摘要，搜尋引擎結果網頁亦會出現相關資訊。因此，請不要忽視元標記，因為它們可能會為您吸引新客戶訪問您的網站。</p>

              </div>
          </div>

          <div class="fps_metaTag_inneeImgBlock">
              <div class="fps_metaTag_inneeImg">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metatagInp.png" alt="metatagInp" />
                  <!-- <img src="/google-review-link-generator/metatagInp.png" alt=""> -->

              </div>
          </div>
      </div>

      <!--meta tag  Container 2-->

      <div class="metatagsContainer">
          <div class="metatagsImgBlock">
              <div class="metaTagsImg">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metacodeImg.png" alt="metacodeImg" />
                  <!-- <img src="./google-review-link-generator/metacodeImg.png" alt=""> -->
              </div>
          </div>

          <div class="metatagsTxtBlock">
              <div class="metatagsTxt">

                  <h2>什麼是元標記？</h2>
                  <div class="metaTagsImg showhide">
                      <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metacodeImg.png"  alt="Meta tag Image" />
                      <!-- <img src="./google-review-link-generator/metacodeImg.png" alt="Meta Tag SERP"> -->
                  </div>
                <p>您是否曾經在網上搜尋過某些內容，並注意到結果下方有簡短的描述？</p>
                <p>元標記為您提供了該描述。它們是一些HTML代碼，為相關網頁提供了網頁的信息，例如其標題和描述。它們可以幫助網站的搜尋引擎優化 （SEO），使網站更有可能出現在搜尋引擎結果網頁的最高位置。</p>
                <p>元描述的標籤，允許網站所有者選擇出現在其頁面標題下方的描述，從而使他們能夠通過吸引人的摘要來吸引潛在訪問者。因此，下次您在網絡搜尋中注意到這些標題下的文字時，您便能知道它們是因元標記所產生的。</p>
                </div>
          </div>

      </div>


      <!--meta tag  Container 3-->
      <!--- Prob in TXT-->
      <div class="fps_metadesp_outer">
          <div class="   fps_metadesp_innerTxtBlock">
              <div class="fps_metadesp_innerTxt">
                  <h2>什麼是標題標籤，為什麼它們那麼重要？</h2>
                  <div class="metadesp-innerImg showhide imgborder">
                      <img src="/wp-content/themes/firstpage/img/google-review-link-generator/titletagImg1_resp.png" alt="Title Tag Example" />
                   </div>

                  <div class="metadesp-innerImg showhide imgborder">
                    <img src="/wp-content/themes/firstpage/img/google-review-link-generator/mobile1.png" alt="SERP Title Example" />
                  </div>
                    <p>無論您是希望為網站增加自然搜尋引擎流量，還是改善網站的搜尋引擎優化（SEO），標題標籤都是至關重要的。標題標籤是一段HTML代碼，用於為特定頁面分配標題，而它同時是搜尋引擎結果網頁上顯示的可點擊標題。</p>
                    <p>此標題應準確、精準地描述頁面內容，並使用與您的業務或行業相關的關鍵字。通過將相關關鍵字合併到標題標籤中，能增加您的頁面顯示在搜尋結果中的可能性。除了改善SEO之外，準確的標題標籤還可以增加網絡用戶點擊您的頁面的機會，從而為您的網站帶來更多流量。</p>
                    <p>總括而言，使用標題標籤能顯著地增加您的網站在Google自然搜尋結果中的可見度。</p>

                </div>
          </div>

          <div class="fps_metadesp_inneeImgBlock ">
    
              <div class="fps_metadesp_inneeImg">  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/impeta2.png" alt="impMeta" />

              </div>
          </div>


      </div>


      <!--meta tag  Container 4-->
      <div class="fps_bestPracticeContainer">
          <h2 class="mb32">編寫標題標籤時的最佳做法是什麼？</h2>

          <div class="fps_bestPractice-outer">

              <div class="bestPractice-inner">
                  <h6>保持簡潔、切中要點</h6>
                  <p>Google會切斷過長的標題標籤，並以簡單的「...」代替無法顯示的內容。標題標籤被切斷的話，看起來很糟糕。要避免這個情況，請您將標題標籤的長度保持在50至60個字符，並使用我們的工具以確保您的標題標籤不會被切斷。</p>
                  <h6>無需要嘩眾取寵</h6>
                  <p>雖然誇張的標題標籤看起來能更容易吸引注意力，但其實消費者會覺得您只是嘩眾取寵。使用平實的文字並強調重點便可。</p>
                  <h6>使其變得獨一無二</h6>
                  <p>為您網站的每個頁面建立一個獨一無二的標題標籤，並避免使用重複的標題標籤，以免日後引起問題。</p>
              </div>

              <div class="bestPractice-inner">
                  <h6>為人而非機器寫作</h6>

                  <p>不要在標題標籤中塞滿關鍵字，這或許在幾十年前很湊效，但毫無疑問地，這個做法在今時今日是無用的，並且會令訪問者抗拒訪問您的網站。</p>
                  <p>在創建標題標籤時，請從受眾的角度出發。假如您看見搜尋頁面的標題只是塞滿關鍵字，您又會點擊它嗎？</p>
              </div>


          </div>
      </div>

  </div>


  <!--meta descriptions   Container 5 -->

  <div class="fps_metadesp_outer metadespContainer">

      <div class="fps_metadesp_inneeImgBlock         ">
 

          <div class="fps_metadesp_inneeImg">
              <img src="/wp-content/themes/firstpage/img/google-review-link-generator/whyMetadesp.png" alt="whyMetadesp" />
              <!-- <img src="./google-review-link-generator/titletagImg2.png" alt=""> -->

          </div>
      </div>

      <div class="   fps_metadesp_innerTxtBlock  mw545 ">
          <div class="fps_metadesp_innerTxt">
              <h2 class="mb_5">什麼是元描述標籤，為什麼它如此重要？</h2>
              <div class="metadesp-innerImg showhide  imgborder  ">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metadesp_resp-bor.png" alt="Meta description tag example" />
 
              </div>

              <div class="metadesp-innerImg showhide  imgborder mb16">
                <img src="/wp-content/themes/firstpage/img/google-review-link-generator/metadesp2_res.png"  alt="Meta description SERP example" />

            </div>
            <p>元描述標籤是一個HTML元素，為網頁內容提供了簡潔的頁面描述。它不僅為用戶提供了有價值的信息，更對搜尋引擎優化有著重大影響。這是因為元描述會充當搜尋引擎結果網頁的文字，讓搜尋引擎能了解頁面的內容和與特定搜尋查詢的相關性。</p>
            <p>此外，元描述亦會影響網站的點擊率。為了優化這項重要的元素，元描述應保持簡潔但具有描述性，最理想長度介乎50至160個字符之間。您亦可以使用我們提供的工具，確保您的元描述長度維持在顯示範圍內，並吸引搜尋引擎和目標受眾的注意力。</p>

        </div>
      </div>


  </div>



  <!--meta tag  Container 6 out from container-->
  <div class="fps_bestPracticeContainer fps_writing_meta_Container">
      <h2 class="mb17">編寫元描述的最佳做法是什麼？</h2>

      <div class="fps_bestPractice-outer">

          <div class="bestPractice-inner">
          <h6>避免長篇大論</h6>
          <p>沒有人想要閱讀長篇大論！因此建議您將字符數（包括空格）限制在160個內。Google會將過長的元描述切斷，並以「...」代替，如同標題標籤的情況。不過，您亦不要將元描述寫得太短，並只需要向Google和您的潛在客戶提供有關頁面內容的信息，且最好與標題標籤相得益彰。</p>
          <p>要查看您的元描述將如何出現在Google桌面和移動設備上，請立即使用我們的Google SERP預覽工具！</p>
        </div>

          <div class="bestPractice-inner">
            <h6>加入幾個關鍵詞</h6>
            <p>雖然Google早已聲明元描述中的關鍵字與網站的排名無關，但您仍應該在當中加入一兩個與頁面內容相關的關鍵字。</p>
            <p>如果您這樣做，用戶便能更好地了解他們預期的內容，而若元描述中包含他們有興趣的關鍵字，他們將更傾向點擊。</p>
            <h6>讓它們專為每個頁面而設</h6>
            <p>如同標題標籤一樣，您亦希望為每個頁面編寫一個獨特的元描述。特別要考慮的是，如果有人點擊進入頁面，卻發現元描述的內容與頁面內容不符，他們將會立即跳出。</p>    
          </div>

      </div>
  </div>

  <!--meta tag  Container 7-->
  <div class="fps_careContainer">
      <div class="fps_careImgBlock">
          <div class="fps_careImg">
              <img src="/wp-content/themes/firstpage/img/google-review-link-generator/care.png" alt="care" />
              <!-- <img src="./google-review-link-generator/care.png" alt=""> -->
          </div>
      </div>

      <div class="fps_careTxtBlock">
          <div class="fps_careTxt">
              <h2>讓First Page來助您處理這一切</h2>
              <div class="fps_careImg showhide">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/care.png" alt="First Page SEO Team" />
                  <!-- <img src="./google-review-link-generator/care.png" alt=""> -->
              </div>
                <p>您是否正忙著經營自己的事業？我們深明要騰出時間完成一些永無止境的事情，對您來說是很困難的。倒不如讓我們的專家來為您處理一些繁瑣的營銷工作。他們會專注於為您吸引潛在客戶並進行銷售！</p>
                <p>First Page擁有數十年的營銷經驗，能為各行各業的客戶創建最佳的元標記，並能為您解決不同問題。</p>
                <p>專注您的業務發展，將繁瑣的營銷工作留給First Page的專家。立即致電 +852 2356 3200 與我們聯繫，以了解更多。</p>
            </div>
      </div>
  </div>




  </div>
</section>

<!-- ---------- fps_valueSection ----------------------->
<section class="fps_valueSection">
  <div class="fps_valueContainer">

      <div class="fps_value_inner">
          <div class="fps_value_inner_box">
              <div class="fps_value_inner_img">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/search.png" alt="search" />
                  <!-- <img src="./google-review-link-generator/search.png" alt=""> -->
              </div>
              <div class="fps_value_innerTxt">
                  <h4>萬無一失的策略</h4>
                  <p>
                  憑藉在該領域超過10年的經驗，我們知道如何讓您的網站在搜索引擎中名列前茅。 我們的 SEO專家是該領域的專家，隨時準備迎接您向我們提出的任何挑戰。
                  </p>
              </div>
          </div>
      </div>

      <div class="fps_value_inner">
          <div class="fps_value_inner_box">
              <div class="fps_value_inner_img">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/buy.png"  alt="buy" />
                  <!-- <img src="./google-review-link-generator/buy.png" alt=""> -->

              </div>
              <div class="fps_value_innerTxt">
                  <h4>一流的成績</h4>
                  <p>
                  與依賴過時技術的營銷公司不同，我們利用證實<a href="https://wordpress-771589-2747572.cloudwaysapps.com/resources/blog/why-partner-with-an-award-winning-digital-marketing-agency-in-singapore/">可取得成果的尖端策略</a>。我們將使您的業務更上一層樓。在我們的幫助下，您將看到網絡流量、潛在客戶和銷售額得到顯著的增加。
                  </p>
              </div>
          </div>
      </div>

      <div class="fps_value_inner">
          <div class="fps_value_inner_box">
              <div class="fps_value_inner_img">
                  <img src="/wp-content/themes/firstpage/img/google-review-link-generator/profit.png"  alt="profit" />
                  <!-- <img src="./google-review-link-generator/profit.png" alt=""> -->

              </div>
              <div class="fps_value_innerTxt">
                  <h4>無與倫比的支持</h4>
                  <p>
                  從關鍵字研究到<a href="https://wordpress-771589-2747572.cloudwaysapps.com/resources/seo/your-guide-to-an-seo-campaign-everything-you-need-to-know/">活動優化</a>，我們擁有可幫助您取得成功的工具和專業知識。我們的團隊隨時準備幫助您實現營銷目標。
                  </p>
              </div>
          </div>
      </div>
  </div>
</section>

<?php endif; ?>

<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////// CN ENDS /////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////// -->

<section id="content" class="site__content p-0" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
	<?php endwhile; ?>
</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  

<script>
  function copyFunction(element) {
    var copied_value = jQuery(element).text();
    var $temp = jQuery("<input>");
    jQuery("body").append($temp);
    $temp.val(jQuery(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
  }
//   $(window).scroll(function () {
//     var nav = $(".navbar");
//     // Is at top
//     if ($(window).scrollTop() === 0 && nav.hasClass("min-header")) {
//       nav.removeClass("min-header");
//       $("#scroll-nav-logo").hide();
//       $(".fixed-top-no-nav").addClass("fixed-top-margin");
//       // Is not
//     } else {
//       nav.addClass("min-header");
//       $("#scroll-nav-logo").show();
//       $(".fixed-top-no-nav").removeClass("fixed-top-margin");
//     }
//   });
//   if ($(window).scrollTop() > 0) {
//     $(".navbar").addClass("min-header");
//   }


 
  $(".fps_formData input").on("keydown keyup change", function (e, text) {
    let showError = $(this).parents(".fps_formData").find(".error");
    var char = $(this).val();
    var charLength = $(this).val().length;
    if ($(this).attr("id") == "page_title") {
      $(".pgTitle").text(char);
      var minLength = 5;
      var maxLength = 60;
      if (charLength < minLength) {
        $(showError).text(
          "Length is short, minimum " + minLength + " required."
        );
      } else if (charLength >= maxLength) {
        $(showError).text(
          "Length is not valid, maximum " + maxLength + " allowed."
        );
        $(this).val(char.substring(0, maxLength));
      } else {
        $(showError).text("");
      }
      if (charLength == 0) {
        $(".google_page_title p").text(
          "For Example: #1 Digital Marketing Company - firstpage.hk"
        );
      }
    } else if ($(this).attr("id") == "page_url") {
      $(".google_desc_change h6").text(char);
      var pattern = new RegExp(
        "^(https?:\\/\\/)?" + // protocol
          "((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|" + // domain name
          "((\\d{1,3}\\.){3}\\d{1,3}))" + // OR ip (v4) address
          "(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*" + // port and path
          "(\\?[;&a-z\\d%_.~+=-]*)?" + // query string
          "(\\#[-a-z\\d_]*)?$",
        "i"
      ); // fragment locator
      var validurl = pattern.test(e.target.value);
      if (!validurl) {
        $(showError).text("Please provide a valid URL");
      } else {
        $(showError).text("");
      }
      if (charLength == 0) {
        $(".google_page_link p").text("http://www.example.com");
      }
    } else if ($(this).attr("id") == "bolded_keyword") {
      var get_meta_desc = $(".google_meta_desc p").text();
      const term = $("#bolded_keyword").val();
      const result = get_meta_desc.replace(
        new RegExp(`(${term})`, "gi"),
        "<strong>$1</strong>"
      );
      $(".google_meta_desc p").html(result);
    }
  });
  $(".fps_formData textarea").on("keydown keyup change", function () {
    let showError = $(this).parents(".user_box").find(".error");
    var char = $(this).val();
    if ($(this).attr("id") == "meta_desc") {
      $(".google_meta_desc p").text(char);
      var charLength = $(this).val().length;
      var minLength = 5;
      var maxLength = 160;
      if (charLength < minLength) {
        $(showError).text(
          "Length is short, minimum " + minLength + " required."
        );
      } else if (charLength >= maxLength) {
        $(showError).text(
          "Length is not valid, maximum " + maxLength + " allowed."
        );
        $(this).val(char.substring(0, maxLength));
      } else {
        $(showError).text("");
      }
    }
    if (charLength == 0) {
      $(".google_meta_desc p").text(
        "Write your meta description to tell the Google users that you are the best in your industry! Tip: Use natural language rather than keyword stuffing."
      );
    }
  });

  //rating star

  $(".moblie_rating").hide();
  $(".rating").click(function () {
    if ($(this).is(":checked")) {
      $(".moblie_rating").show();
       
    } else {
      $(".moblie_rating").hide();
    }
  });
  //date



  $(".moblie_date").hide();
  $(".date").click(function () {
    var dateStr;
    const month = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
    if ($(this).is(":checked")) {
      var now = new Date();
      dateStr =
        month[now.getMonth()] + " " + now.getDate()  +  ", "  + now.getFullYear();
      $(".moblie_date p").text(dateStr);
      $(".moblie_date").show();
    } else {
      $(".moblie_date").hide();
    }
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
        <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
		    <h4 class="mb-3 h1"><strong>Still in doubt?</strong></h4>
			<h4 class="mb-3 h2"><strong>Claim your 100% free REVENUE GROWTH strategy session
					with an experienced digital strategist valued at $2800HKD.</strong></h4>
			<p class="mb-2" style="font-size: 20px; font-weight:normal; line-height: 23px;">We outline bulletproof tactics that dramatically increase website traffic and revenue, even during tough economic times. </p>
			<p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">Hurry! Limited spots available.</p>
			<a href="<?php echo get_home_url(); ?>/free-growth-strategy/" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session">Get my free revenue growth session</a>
        <?php endif; ?>
		<?php if(ICL_LANGUAGE_CODE == 'zh'): ?>
            <h4 class="mb-3 h1"><strong>還有疑問？</strong></h4>
			<h4 class="mb-3 h2"><strong>費獲取由經驗豐富的數碼策略專家提供的營業額增長策略課程（價值HKD$2800）。</strong></h4>
			<p class="mb-2" style="font-size: 20px; font-weight:normal; line-height: 23px;">我們將會教授於經濟不景氣期間，能顯著提升網站流量及營業額的策略。</p>
			<p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">名額有限，立即報名！</p>
			<a href="<?php echo get_home_url(); ?>/free-growth-strategy/" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session">獲取我的免費營業額增長課程</a>
        <?php endif; ?>
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



<?php get_footer(); ?>