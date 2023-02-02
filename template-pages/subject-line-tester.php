<?php
    /**
     * Template Name: Email Subject Line Tester
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
    
    <!-- SECTION STYLING -->
    <style>
        /******************* fps_bannerSection *************************/
        .fps_bannerSection {
            position: relative;
            padding: 203px 0 0;
            background: url("/wp-content/themes/firstpage/assets/img/bg.png");
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

        @media (min-width: 1273px) {
            .fps_bannerSection {
                min-height: 700px;
            }
        }

        @media (max-width: 1272px) {
            .fps_bannerSection {
                min-height: 760px;
            }
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
                padding: 120px 0;
                min-height: 600px;
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
                background: url("/wp-content/themes/firstpage/assets/img/bg-shap-2.png") no-repeat;
                background-size: cover;
            }

            .fps_bannerSection::before {
                pointer-events: none;
                position: absolute;
                content: '';
                width: 100%;
                height: 731px;
                background: url("/wp-content/themes/firstpage/assets/img/bg-shape1.png") no-repeat;
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
            margin-top: -174px;
            max-width: 1310px;
            width: 100%;
        }

        .fps_formWrap-inner {
            position: relative;
            width: 100%;
            box-shadow: 0px 0px 10px rgb(0,0,0,0.15);
            margin: 0;
            padding: 3%;
            line-height: 0;
            background: var(--background-color-grey);
            padding-bottom: 0;
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
        }

        @media (max-width: 991px) {
            .fps_formWrap-outer {
                margin-top: -170px;
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
                margin-top: -10%;
            }

            .fps_formWrap-inner {
                flex-direction: column;
                align-items: center;
            }            
        }

        @media (max-width:460px) {
            .fps_formWrap-outer {
                margin-top: 0;
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

        .benefits-section.grid-30 .benefits-items-wrapper {
            flex-direction: row;
            flex-wrap: wrap;
        }

        .benefits-section .benefits-items-wrapper .benefit-item {
            width: 100%;
            background: var(--background-color-white);
            box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.15);
            display: flex;
            border-radius: 0.25rem;
            align-items: center;
        }

        .benefits-section.grid-30 .benefits-items-wrapper .benefit-item {
            flex: 0 0 30%;
            width: 30%;
            flex-direction: column;
            justify-content: flex-start;
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

        .benefits-section.grid-30 .benefits-items-wrapper .benefit-item .benefit-image > img {
            padding: 40px;
        }

        .benefits-section .benefits-items-wrapper .benefit-item .benefit-text {
            flex: 1 1 100%;
            padding: 1.25rem;
        }

        .benefits-section.grid-30 .benefits-items-wrapper .benefit-item .benefit-text {
            flex: 1 1 100%;
        }

        .benefits-section .benefits-items-wrapper .benefit-item .benefit-text h4 {
            font-style: normal;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1.2;
            color: var(--text-color-dark-blue);
            text-align: center;
        }

        .benefits-section .benefits-items-wrapper .benefit-item .benefit-text p {
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
            color: var(--text-color-dark-blue);
            letter-spacing: .01rem;
            text-align: center;
        }

        .benefits-section .benefits-items-wrapper .benefit-item .benefit-text ul {
            margin: 0 20px;
            text-align: left;
        }

        @media (max-width: 991px) {
            .benefits-section.grid-30 .benefits-items-wrapper {
                justify-content: center;
            }

            .benefits-section.grid-30 .benefits-items-wrapper .benefit-item {
                flex: 0 0 45%;
                width: 45%;
            }
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

            .benefits-section.grid-30 .benefits-items-wrapper .benefit-item {
                flex: 1 1 100%;
                width: 100%;
            }
        }
    </style>

    <!-- SUBJECT FORM ----->
    <style>
        #subjectLineTester #subject_form {
            padding-bottom: 3%;
        }

        #subjectLineTester {
            color: #00225D;
        }

        /* Subject Form */
        #subjectLineTester #subject_form fieldset {
            display: flex;
            flex-wrap: wrap;
            border: none;
        }

        #subjectLineTester #subject_form input {
            height: 73px;
            line-height: 73px;
            box-sizing: border-box;
            font-family: proxima-nova, sans-serif;
            border: none;
            outline: none;
        }

        #subjectLineTester #subject_form input::placeholder {
            font-style: italic;
            color: #CECECE;
        }

        #subjectLineTester #subject_form #subject_line {
            width: 50%;
            flex: 1 0 auto;
            text-indent: 2em;
            background: #FFFFFF;
            border: 1px solid #C4C4C4;
            border-right: none;
            border-radius: 5px 0 0 5px;
            color: #00225D;
        }

        #subjectLineTester #subject_form #test_now {
            padding: 0 25px;
            border-radius: 0 5px 5px 0;
            color: #FFFFFF;
            background: #FF5254;
            font-weight: 700;
            cursor: pointer;
        }

        #subjectLineTester #subject_form #test_now:hover {
            background: #ff6265;
        }

        /* Results */
        #subjectLineTester #results {
            display: none;
            flex-wrap: wrap;
            gap: 20px 100px;
            padding: 30px 5%;
            overflow: hidden;
        }
        
        #subjectLineTester #results.reveal {
            display: flex;
        }

        #subjectLineTester #results .results_row {
            width: 100%;
            position: relative;
        }

        #subjectLineTester #results .results_row.line-break {
            border: 3px solid #FFFFFF;
        }

        #subjectLineTester #results .results_col {
            width: 40%;
            flex: 1 0 auto;
        }

        #subjectLineTester #results .results_col.sub_cols {
            display: flex;
            flex-wrap: nowrap;
            gap: 40px;
            align-items: flex-start;
        }

        #subjectLineTester #results .bubble-blue,
        #subjectLineTester #results .bubble-green {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            height: 50px;
            line-height: 50px;
            border-radius: 30px;
            font-style: normal;
            font-weight: 700;
            font-size: 14px;
            padding: 0 30px;
            white-space: nowrap;
        }

        #subjectLineTester #results .bubble-blue {
            color: #427FE0;
            background: #E3EEFF;
        }

        #subjectLineTester #results .bubble-green {
            color: #81C93E;
            background: #DCF2CF;
        }

        #subjectLineTester #results .results_col.error .bubble-green {
            color: #FF5254 !important;
            background: #F2D1CF !important;
        }

        #subjectLineTester #results #total_score {
            font-weight: 700;
            line-height: 100%;
            font-size: 100px;
            margin: 20px 0;
        }

        #subjectLineTester #results #re_subject {
            font-weight: 700;
            line-height: 100%;
            font-size: 30px;
            white-space: wrap;
            padding-top: 20px;
        }

        #subjectLineTester #results progress {
            width: 100%;
            height: 40px;
            -webkit-appearance: none;
            appearance: none;
            border: 1px solid #C4C4C4;
            border-radius: 6px;
        }

        #subjectLineTester #results progress[value]::-webkit-progress-bar {
            background-color: #FFFFFF;
            border-radius: 5px;
        }

        #subjectLineTester #results progress[value]::-webkit-progress-value {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
        }

        #subjectLineTester #results #score_value[value]::-webkit-progress-value {
            background: #427FE0;
            border-color: #427FE0;
        }

        #subjectLineTester #results progress.green-bar[value]::-webkit-progress-value {
            background: #81C93E;
            border-color: #81C93E;
        }

        #subjectLineTester #results .results_col.error progress::-webkit-progress-value {
            background: #FF5254 !important;
            border-color: #FF5254 !important;
        }

        #subjectLineTester #results .progress_wrapper {
            width: 100%;
        }

        #subjectLineTester #results .progress_wrapper .step_wrapper {
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
        }

        #subjectLineTester #results .progress_wrapper .step_wrapper .progress_step {
            font-size: .9em;
            line-height: 2em;
            font-weight: 400;
            color: #C4C4C4;
            position: relative;
        }

        #subjectLineTester #results .progress_wrapper .step_wrapper .step_line::before {
            height: 40px;
            width: 5px;
            content: '';
            position: absolute;
            bottom: 100%;
            left: 50%;
            margin-left: -2.5px;
            background: #F6F6F6;
            border: 1px solid #C4C4C4;
            border-bottom-color: #fcfcfc;
            border-top-color: #fcfcfc;
        }

        #subjectLineTester #results #score_value ~ .step_wrapper .progress_step {
            font-weight: 700;
            color: #00225D;
        }

        #subjectLineTester #results .score_message {
            width: 90%;
            margin: 20px auto;
            text-align: center;
            white-space: wrap;
            font-weight: 700;
            font-size: 15px;
        }

        #subjectLineTester #results h3 {
            font-weight: 700;
            font-size: 40px;
            line-height: 45px;
            text-align: center;
            margin: 30px 0;
        }

        #subjectLineTester #results h3 ~ p {
            text-align: center;
        }

        #subjectLineTester #results h4 {
            font-weight: 400;
            font-size: 40px;
            line-height: 60px;
            margin: 0;
            color: #81C93E;
        }

        #subjectLineTester #results h4 span {
            font-weight: 700;
        }

        #subjectLineTester #results .results_col.error h4 {
            color: #FF5254 !important;
        }

        #subjectLineTester #results .no-margin .message_heading {
            margin-top: 0;
        }

        #subjectLineTester #results .message_heading {
            font-weight: 700;
            font-size: 15px;
            line-height: 24px;
            margin-bottom: 0;
        }

        #subjectLineTester #results .message {
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            margin-top: 0;
        }

        #subjectLineTester #results #mockup {
            width: 95%;
            margin-right: auto;
            aspect-ratio: 1 / 0.6;
            border-radius: 13px;
            background: #FFFFFF;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            margin-bottom: -100px;
            align-items: flex-start;
            align-content: flex-start;
            justify-content: flex-start;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        #subjectLineTester #results #mobile_mockup {
            width: 35%;
            aspect-ratio: 1 / 1.3;
            border-radius: 13px 13px 0 0;
            background: #FFFFFF;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: -30px;
            align-items: flex-start;
            align-content: flex-start;
            justify-content: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            position: absolute;
            right: 0;
            bottom: -150px;
        }

        #subjectLineTester #results #mockup .mockup_header {
            height: 57px;
            background: #427FE0;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
            box-sizing: border-box;
            padding-left: 2%;
            width: 100%;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_header {
            width: 50%;
            height: 60px;
            border-radius: 0 0 13px 13px;
            background: #427FE0;
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: center;
        }

        #subjectLineTester #results #mockup .mockup_header span {
            height: 16px;
            width: 16px;
            display: block;
            background: #FFFFFF;
            border-radius: 8px;
        }

        #subjectLineTester #results #mockup .mockup_header span:nth-child(1):hover { background: #FF605C; }
        #subjectLineTester #results #mockup .mockup_header span:nth-child(2):hover { background: #FFBD44; }
        #subjectLineTester #results #mockup .mockup_header span:nth-child(3):hover { background: #00CA4E; }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_header span { 
            height: 12px; 
            border-radius: 6px;
            display: block;
            background: #FFFFFF;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_header span:nth-child(1) { width: 50%; }
        #subjectLineTester #results #mobile_mockup .mobile_mockup_header span:nth-child(2) { 
            height: 16px;
            width: 16px;
            border-radius: 8px;
        }

        #subjectLineTester #results #mockup .mockup_sidebar {
            width: 20%;
            box-sizing: border-box;
            padding-top: 3%;
            padding-left: 5%;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }

        #subjectLineTester #results #mockup .mockup_sidebar svg {
            margin-bottom: 30px;
        }

        #subjectLineTester #results #mockup .mockup_sidebar span {
            height: 16px;
            background: #EEF0F0;
            display: block;
            margin: 20px 0;
        }

        #subjectLineTester #results #mockup .mockup_sidebar span:hover { background: #d2d2d2; }

        #subjectLineTester #results #mockup .mockup_sidebar span:nth-child(1) { width: 80% }
        #subjectLineTester #results #mockup .mockup_sidebar span:nth-child(2) { width: 95% }
        #subjectLineTester #results #mockup .mockup_sidebar span:nth-child(3) { width: 86% }
        #subjectLineTester #results #mockup .mockup_sidebar span:nth-child(4) { width: 78% }
        #subjectLineTester #results #mockup .mockup_sidebar span:nth-child(5) { width: 98% }
        #subjectLineTester #results #mockup .mockup_sidebar span:nth-child(6) { width: 82% }

        #subjectLineTester #results #mockup .mockup_body {
            width: 80%;
            max-height: 100%;
            overflow: hidden;
            padding-top: 3%;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body {
            width: 100%;
            max-height: 100%;
            overflow: hidden;
        }

        #subjectLineTester #results #mockup .mockup_body ul {
            list-style: none;
            margin: 0;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            gap: 20px;
            margin: 0;
            padding: 0;
            padding-top: 5%;
        }

        #subjectLineTester #results #mockup .mockup_body ul li {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            border-bottom: 1px solid #EEF0F0;
            padding-left: 3%;
            height: 66px;
            box-sizing: border-box;
            width: 100%;
            gap: 10px;
        }

        #subjectLineTester #results #mockup .mockup_body ul li p {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            padding-right: 10%;
            margin: 0;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: center;
            justify-content: flex-start;
            padding: 15%;
            height: 120px;
            box-sizing: border-box;
            width: 100%;
            gap: 10px;
            position: relative;
        }

        #subjectLineTester #results #mockup .mockup_body ul li:first-child {
            background: #FFFFFF;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            border-bottom: none;
            position: relative;
            z-index: 1;
            font-size: 18px;
            font-weight: 400;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li:first-child {
            background: #FFFFFF;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            z-index: 1;
            font-size: 14px;
            font-weight: 400;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li:not(:first-child)::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 10%;
            width: 80%;
            height: .5px;
            background: #EEF0F0;
        }

        #subjectLineTester #results #mockup .mockup_body ul li svg {
            width: 2.5%;
            height: auto;
        }

        #subjectLineTester #results #mockup .mockup_body ul li span,
        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li span {
            display: block;
            height: 8px;
            border-radius: 4px;
            width: 10%;
            background: #EEF0F0;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li .breaker {
            width: 60%;
            flex: 1 0 auto;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li p {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            margin: 0;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li > *:not(p):not(.breaker):nth-child(1) { 
            width: 30%;
            position: relative;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li > *:not(p):not(.breaker):nth-child(1)::before { 
            content: '';
            position: absolute;
            top: 0;
            left: -34px;
            margin-top: -6px;
            height: 18px;
            width: 18px;
            border-radius: 9px;
            background: #427FE0;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li > *:not(p):not(.breaker):nth-child(2) { 
            width: 80%; 
            margin: 10px 0;
        }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li > *:not(p):not(.breaker):nth-child(3),
        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li > *:not(p):not(.breaker):nth-child(4),
        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li > *:not(p):not(.breaker):nth-child(5) { width: 100%; }

        #subjectLineTester #results #mockup .mockup_body ul li:hover span,
        #subjectLineTester #results #mockup .mockup_body ul li:hover::after { background: #d2d2d2; }
        #subjectLineTester #results #mockup .mockup_body ul li:hover svg path { stroke: #d2d2d2; }

        #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li:hover span { background: #d2d2d2; }

        @media only screen and (max-width: 571px) {
            #subjectLineTester #results .results_col:nth-child(2) {
                order: -1;
            }

            #subjectLineTester #results .results_col:nth-child(1),
            #subjectLineTester #results .results_col:nth-child(2) {
                text-align: center;
            }
        }

        @media only screen and (max-width: 879px) {
            #subjectLineTester #results {
                padding-bottom: 0;
            }

            #subjectLineTester #results .results_col.sub_cols {
                flex-wrap: wrap;
                justify-content: center;
                position: relative;
                padding-top: 50px;
                margin-top: 20px;
                text-align: center;
            }

            #subjectLineTester #results .results_col.sub_cols .bubble-green {
                position: absolute;
                top: 15px;
            }

            #subjectLineTester #results .results_col.sub_cols .message_heading {
                position: relative;
                top: -70px;
            }

            #subjectLineTester #results h4 {
                font-size: 32px;
            }

            #subjectLineTester #results #mockup {
                margin: 0 auto;
                aspect-ratio: 1 / 0.7;
            }

            #subjectLineTester #results #mockup .mockup_header {
                padding-left: 4%;
                height: 42px;
                gap: 4px;
            }

            #subjectLineTester #results #mockup .mockup_header span {
                height: 12px;
                width: 12px;
            }

            #subjectLineTester #results #mockup .mockup_sidebar {
                display: none;
            }

            #subjectLineTester #results #mockup .mockup_body {
                width: 100%;
                padding-top: 4%;
            }

            #subjectLineTester #results #mockup .mockup_body ul {
                padding: 0;
            }

            #subjectLineTester #results #mockup .mockup_body ul li {
                height: 34px;
                position: relative;
            }

            #subjectLineTester #results #mockup .mockup_body ul li::after {
                content: '';
                position: absolute;
                right: 3%;
                top: 50%;
                margin-top: -2px;
                height: 4px;
                display: block;
                border-radius: 4px;
                width: 8%;
                background: #EEF0F0;
            }

            #subjectLineTester #results #mockup .mockup_body ul li p {
                padding-right: 14%;
                font-size: 12px;
                line-height: 100%;
                margin: 0;
            }

            #subjectLineTester #results #mockup .mockup_body ul li:first-child span {
                width: 3.5%;
            }

            #subjectLineTester #results #mockup .mockup_body ul li:not(:first-child) span {
                height: 4px;
            }

            #subjectLineTester #results #mobile_mockup {
                position: relative;
                margin: 20px auto;
                bottom: -30px;
                aspect-ratio: 1 / 1.6;
                width: 38%;
            }

            #subjectLineTester #results #mobile_mockup .mobile_mockup_header {
                height: 20px;
            }

            #subjectLineTester #results #mobile_mockup .mobile_mockup_header span:nth-child(1) {
                height: 4px;
            }

            #subjectLineTester #results #mobile_mockup .mobile_mockup_header span:nth-child(2) {
                height: 5px;
                width: 5px;
            }

            #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul {
                padding-top: 10%;
                gap: 0;
            }

            #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li {
                padding: 0 15%;
                gap: 3px;
                height: 70px;
            }

            #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li p {
                font-size: 7px;
                line-height: 100%;
                margin: 0;
            }

            #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li span {
                height: 3px;
            }

            #subjectLineTester #results #mobile_mockup .mobile_mockup_body ul li > *:not(p):not(.breaker):nth-child(1)::before {
                left: -13px;
                height: 6px;
                width: 6px;
                margin-top: -1px;
            }
        }

        @media only screen and (min-width: 1300px) {
            #subjectLineTester #results #mobile_mockup {
                margin-bottom: -50px;
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
                <h1>Boost email campaign ROI with our intuitive subject line tester!</h1>
                <p>Email subject lines that aren’t attention-grabbing won’t achieve clicks. The more effective your subject lines, the better your email marketing campaigns will perform! Ensure your next email campaign achieves the best possible results with this awesome free subject line tester software.</p>
            </div>
            <div class="fps_banner-innerImg">
                <img src="/wp-content/themes/firstpage/assets/img/img-subject-line-tester.png" class="img-fluid" alt="Boost email campaign ROI with our intuitive subject line tester!" />
            </div>
        </div>
    </section>

    <!----------------------- Subject Line Tester ----------------------->
    <section class="fps_formSection">
        <div class="fps_formWrap-outer">
            <div class="fps_formWrap-inner">
                <div id="subjectLineTester">
                    <form id="subject_form">
                        <fieldset>
                            <input type="text" id="subject_line" placeholder="Enter your email subject here..." />
                            <input type="button" id="test_now" value="Test Now" />
                        </fieldset>
                    </form>
                    <div id="results">
                        <div class="results_col">
                            <span class="bubble-blue">Your Score</span>
                            <p id="total_score">0%</p>
                        </div>
                        <div class="results_col">
                            <span class="bubble-blue">Your Subject Line</span>
                            <p id="re_subject"></p>
                        </div>
                        <div class="results_row">
                            <div class="progress_wrapper" data-progress-start="0" data-progress-end="100" data-progress-metric-start="%" data-progress-metric-end="%">
                                <progress id="score_value" value="98" max="100"></progress>
                            </div>
                            <p id="score_message" class="score_message"></p>
                        </div>
                        <div class="results_row line-break"></div>
                        <div class="results_row">
                            <h3>Length</h3>
                        </div>
                        <div class="results_col">
                            <h4><span id="character_count">0</span> characters</h4>
                            <div class="progress_wrapper" data-progress-start="0" data-progress-end="40" data-progress-metric-end="+" data-progress-step="10" data-progress-steps="5">
                                <progress id="score_characters" class="green-bar" value="20" max="40"></progress>
                            </div>
                            <p class="message_heading">Character count</p>
                            <p id="character_message" class="message"></p>
                        </div>
                        <div class="results_col">
                            <h4><span id="word_count">0</span> words</h4>
                            <div class="progress_wrapper" data-progress-start="0" data-progress-end="6" data-progress-metric-end="+" data-progress-step="2" data-progress-steps="4">
                                <progress id="score_words" class="green-bar" value="1" max="6"></progress>
                            </div>
                            <p class="message_heading">Word count</p>
                            <p id="word_message" class="message"></p>
                        </div>
                        <div class="results_row line-break"></div>
                        <div class="results_row">
                            <h3>Scannability</h3>
                        </div>
                        <div class="results_col sub_cols">
                            <span class="bubble-green">Sentence Case</span>
                            <div class="no-margin">
                                <p class="message_heading">Capitalization Style</p>
                                <p id="sentence_message" class="message"></p>
                            </div>
                        </div>
                        <div class="results_col sub_cols">
                            <span class="bubble-green" id="number_count">None</span>
                            <div class="no-margin">
                                <p class="message_heading">Use of Numbers</p>
                                <p id="numbers_message" class="message"></p>
                            </div>
                        </div>
                        <div class="results_row line-break"></div>
                        <div class="results_row">
                            <h3>Subject Line Preview</h3>
                            <p>Don't forget to think of how your subject line will look on different size screens.</p>
                            <p>Here's a preview of how it looks on desktop and mobile screens:</p>
                        </div>
                        <div class="results_row">
                            <div id="mockup">
                                <div class="mockup_header">
                                    <?php
                                        for ($w = 0; $w < 3; $w++) {
                                            ?><span></span><?php
                                        }
                                    ?>
                                </div>
                                <div class="mockup_sidebar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="62" viewBox="0 0 52 40" fill="none">
                                        <mask id="mask0_408_11" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="52" height="40">
                                            <rect width="52" height="40" rx="3" fill="#D9D9D9"/>
                                        </mask>
                                        <g mask="url(#mask0_408_11)">
                                            <rect width="52" height="40" rx="2" fill="#F2F2F2"/>
                                            <rect x="46" y="2" width="6" height="38" fill="#D32E2A"/>
                                            <rect y="2" width="6" height="38" fill="#F14336"/>
                                            <rect x="-3.06445" y="8.31592" width="5.14641" height="11" transform="rotate(-80.7328 -3.06445 8.31592)" fill="#D32E2A"/>
                                            <path d="M-2.62061 3.37568L1.32702 -2L30.1293 19.1509L26 24.5L-2.62061 3.37568Z" fill="#F14336"/>
                                            <path d="M54.75 3.37568L50.8024 -2L22.0001 19.1509L26 24.5L54.75 3.37568Z" fill="#F14336"/>
                                        </g>
                                    </svg>
                                    <?php
                                        for ($x = 0; $x < 6; $x++) {
                                            ?><span></span><?php
                                        }
                                    ?>
                                </div>
                                <div class="mockup_body">
                                    <ul>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                <path d="M3.90402 6.25143C4.44217 6.25143 4.98032 6.25339 5.51748 6.25045C5.93332 6.24752 6.21805 6.01954 6.34525 5.62425C6.69554 4.5323 7.04974 3.4423 7.4098 2.35329C7.55364 1.91886 7.94697 1.64098 8.36868 1.64783C8.78746 1.65468 9.1671 1.94723 9.30897 2.38167C9.65926 3.45796 10.0056 4.53425 10.352 5.61153C10.49 6.03911 10.7698 6.2485 11.2238 6.24947C12.2345 6.25143 13.2453 6.2485 14.256 6.25241C14.4429 6.25241 14.6298 6.271 14.8157 6.29253C15.2257 6.33949 15.5211 6.54692 15.6356 6.952C15.7599 7.39035 15.6709 7.77879 15.2893 8.06352C14.845 8.39423 14.3959 8.71712 13.9478 9.04295C13.4733 9.38736 12.9958 9.72884 12.5242 10.0762C12.1161 10.3766 12.0173 10.7357 12.1758 11.2131C12.5271 12.2708 12.8666 13.3325 13.2159 14.3911C13.4185 15.0046 13.0975 15.5868 12.3862 15.7316C12.1367 15.7825 11.9175 15.6749 11.7238 15.5379C11.0526 15.0633 10.3882 14.578 9.72188 14.0966C9.45085 13.9009 9.1808 13.7043 8.91074 13.5096C8.5223 13.2288 8.18571 13.2327 7.78944 13.5184C6.85894 14.1906 5.93137 14.8677 4.99695 15.534C4.586 15.8275 4.20049 15.8089 3.80324 15.5066C3.48231 15.262 3.37077 14.8148 3.51068 14.3843C3.82868 13.4019 4.14081 12.4186 4.45587 11.4353C4.47544 11.3736 4.50479 11.3149 4.52827 11.2542C4.7132 10.7699 4.5997 10.3756 4.1819 10.0723C3.28564 9.42161 2.38938 8.77289 1.49214 8.12418C0.873765 7.67703 0.830713 6.91482 1.40506 6.46963C1.67316 6.26219 2.00192 6.26317 2.31698 6.25437C2.84632 6.23969 3.37664 6.25045 3.90598 6.24947L3.90402 6.25143Z" stroke="#EEF0F0" stroke-width="2"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none">
                                                <path d="M7.23837 1.83401C8.67327 1.83401 10.1068 1.84069 11.5404 1.82867C11.8714 1.826 12.1424 1.9141 12.392 2.13034C13.3824 2.98861 14.3809 3.83754 15.3766 4.68914C15.689 4.9561 15.9973 5.22706 16.315 5.48868C17.2533 6.26419 17.2427 7.53091 16.315 8.31444C14.9989 9.42499 13.6988 10.5529 12.3987 11.6808C12.1691 11.8797 11.9248 11.9905 11.6165 11.9891C8.70397 11.9851 5.79012 11.9891 2.8776 11.9851C2.26092 11.9851 1.89919 11.6261 1.89919 11.0121C1.89519 8.2784 1.89519 5.5434 1.89786 2.80841C1.89786 2.1904 2.25692 1.83668 2.86959 1.83535C4.32585 1.83268 5.78211 1.83535 7.23837 1.83535V1.83401Z" stroke="#EEF0F0" stroke-width="2"/>
                                            </svg>
                                            <p id="mockup_subject"></p>
                                        </li>
                                        <?php
                                            for ($y = 0; $y < 10; $y++) {
                                                ?>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                        <path d="M3.90402 6.25143C4.44217 6.25143 4.98032 6.25339 5.51748 6.25045C5.93332 6.24752 6.21805 6.01954 6.34525 5.62425C6.69554 4.5323 7.04974 3.4423 7.4098 2.35329C7.55364 1.91886 7.94697 1.64098 8.36868 1.64783C8.78746 1.65468 9.1671 1.94723 9.30897 2.38167C9.65926 3.45796 10.0056 4.53425 10.352 5.61153C10.49 6.03911 10.7698 6.2485 11.2238 6.24947C12.2345 6.25143 13.2453 6.2485 14.256 6.25241C14.4429 6.25241 14.6298 6.271 14.8157 6.29253C15.2257 6.33949 15.5211 6.54692 15.6356 6.952C15.7599 7.39035 15.6709 7.77879 15.2893 8.06352C14.845 8.39423 14.3959 8.71712 13.9478 9.04295C13.4733 9.38736 12.9958 9.72884 12.5242 10.0762C12.1161 10.3766 12.0173 10.7357 12.1758 11.2131C12.5271 12.2708 12.8666 13.3325 13.2159 14.3911C13.4185 15.0046 13.0975 15.5868 12.3862 15.7316C12.1367 15.7825 11.9175 15.6749 11.7238 15.5379C11.0526 15.0633 10.3882 14.578 9.72188 14.0966C9.45085 13.9009 9.1808 13.7043 8.91074 13.5096C8.5223 13.2288 8.18571 13.2327 7.78944 13.5184C6.85894 14.1906 5.93137 14.8677 4.99695 15.534C4.586 15.8275 4.20049 15.8089 3.80324 15.5066C3.48231 15.262 3.37077 14.8148 3.51068 14.3843C3.82868 13.4019 4.14081 12.4186 4.45587 11.4353C4.47544 11.3736 4.50479 11.3149 4.52827 11.2542C4.7132 10.7699 4.5997 10.3756 4.1819 10.0723C3.28564 9.42161 2.38938 8.77289 1.49214 8.12418C0.873765 7.67703 0.830713 6.91482 1.40506 6.46963C1.67316 6.26219 2.00192 6.26317 2.31698 6.25437C2.84632 6.23969 3.37664 6.25045 3.90598 6.24947L3.90402 6.25143Z" stroke="#EEF0F0" stroke-width="2"/>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none">
                                                        <path d="M7.23837 1.83401C8.67327 1.83401 10.1068 1.84069 11.5404 1.82867C11.8714 1.826 12.1424 1.9141 12.392 2.13034C13.3824 2.98861 14.3809 3.83754 15.3766 4.68914C15.689 4.9561 15.9973 5.22706 16.315 5.48868C17.2533 6.26419 17.2427 7.53091 16.315 8.31444C14.9989 9.42499 13.6988 10.5529 12.3987 11.6808C12.1691 11.8797 11.9248 11.9905 11.6165 11.9891C8.70397 11.9851 5.79012 11.9891 2.8776 11.9851C2.26092 11.9851 1.89919 11.6261 1.89919 11.0121C1.89519 8.2784 1.89519 5.5434 1.89786 2.80841C1.89786 2.1904 2.25692 1.83668 2.86959 1.83535C4.32585 1.83268 5.78211 1.83535 7.23837 1.83535V1.83401Z" stroke="#EEF0F0" stroke-width="2"/>
                                                    </svg>
                                                    <span></span>
                                                </li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div id="mobile_mockup">
                                <div class="mobile_mockup_header">
                                    <span></span><span></span>
                                </div>
                                <div class="mobile_mockup_body">
                                    <ul>
                                        <li>
                                            <span></span>
                                            <div class="breaker"></div>
                                            <p id="mockup_mobile_subject"></p>
                                            <span></span>
                                            <span></span>
                                        </li>
                                        <?php
                                            for ($z = 0; $z < 4; $z++) {
                                                ?><li><span></span><span></span><span></span><span></span></li><?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------------- Paragraph Section #1 ----------------------->
    <section class="paragraph-section">
        <div class="paragraph-row reverse">
            <div class="paragraph-row-heading">
                <h2>Why does the subject line matter so much?</h2>
            </div>
            <div class="paragraph-row-text">
                <h2>Why does the subject line matter so much?</h2>

                <img src="/wp-content/themes/firstpage/assets/img/img-subject-line-tester-mobile-email.png" alt="Why does the subject line matter so much?" />

                <p>In a world saturated with emails coming from all kinds of brands, you need to make sure you’re cutting through the clutter, and the email subject line is your opportunity to do just that. </p>
                <p>Captivating subject lines are vital when you’re looking to maximise open rates and see better outcomes overall. Because when your subscribers are quickly scanning over the umpteen emails in their inbox, yours needs to stick out and make them want to find out more.</p>
                <p>But how exactly can you create the ideal subject line when building your digital marketing campaigns?</p>
            </div>

            <div class="paragraph-row-image">
                <img src="/wp-content/themes/firstpage/assets/img/img-subject-line-tester-mobile-email.png" alt="Why does the subject line matter so much?" />
            </div>
        </div>
	</section>

    <!----------------------- Benefits Section ----------------------->
    <section class="benefits-section grid-30">

        <div class="benefits-heading">
            <h2>What goes into writing a high-converting email subject line?</h2>
        </div>

        <div class="benefits-items-wrapper">

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-subject-line-tester-personalise.svg" alt="Personalise it" />
                </div>
                <div class="benefit-text">
                    <h4>Personalise it</h4>
                    <p>When you write your email subject lines, consider bringing in some emotional value to your message by doing something to personalise it. This might include using their name at the start or targeting segments from particular locations that are relevant to your campaign.</p>
                </div>
            </div>

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-subject-line-tester-ruler.svg" alt="Make it short" />
                </div>
                <div class="benefit-text">
                    <h4>Make it short</h4>
                    <p>You don’t want to overshare and give everything away in the email subject line; write with a word mixture mixture that intrigues will garner more clicks.</p>
                    <p>Also, keep word count between 4 to 6 words, and the character count at 40 characters maximum to avoid word cutoff in the email subject line.</p>
                </div>
            </div>

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-subject-line-tester-dice.svg" alt="Use numbers" />
                </div>
                <div class="benefit-text">
                    <h4>Use numbers</h4>
                    <p>Studies suggest that using a number, especially odd, at the start of the email subject line can lead to increased email open rates.</p>
                </div>
            </div>

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-subject-line-tester-emoji.svg" alt="Take the right approach" />
                </div>
                <div class="benefit-text">
                    <h4>Take the right approach</h4>
                    <p>Within the subject line as well as the email copy, the words you choose to use (power words, positive words, negative words, etc.) are going to dramatically affect campaign results. Boost open rates and achieve optimum results with a word mixture that aligns with the type of subject line you’re aiming for:</p>
                    <ul>
                        <li>Belonging</li>
                        <li>Anticipation</li>
                        <li>FOMO</li>
                        <li>Curiosity</li>
                        <li>Hope</li>
                    </ul>
                </div>
            </div>

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-subject-line-tester-offer.svg" alt="Promote offers and discounts" />
                </div>
                <div class="benefit-text">
                    <h4>Promote offers and discounts</h4>
                    <p>We all love not paying full price, buy-one-get-one-free promotions and other similar discounts and offers. A subject line based on a current promotion you’re running is sure to garner a much higher open rate.</p>
                </div>
            </div>

            <div class="benefit-item">
                <div class="benefit-image">
                    <img src="/wp-content/themes/firstpage/assets/img/img-subject-line-tester-magnifying-glass.svg" alt="Make use of a email subject line tester" />
                </div>
                <div class="benefit-text">
                    <h4>Make use of a email subject line tester</h4>
                    <p>Marketers and company operators will both benefit from a quality email subject line tester. When you test your subject lines with one, it’ll flag potentially spammy words and other spam related issues within your word mixture, show reading grade level, character count and word count, and offer a score out of 100.</p>
                    <p>Use the intuitive and 100% FREE tool to test subject lines at the top of this page now!</p>
                </div>
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
			<h4 class="mb-3 h2"><strong>Claim your 100% free REVENUE GROWTH strategy session with an experienced digital strategist valued at $2000.</strong></h4>
			<p class="mb-2" style="font-size: 20px; font-weight:normal; line-height: 23px;">We outline bulletproof tactics that dramatically increase website traffic and revenue, even during tough economic times. </p>
			<p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">Hurry! Limited spots available.</p>
			<a href="https://wordpress-684516-3076839.cloudwaysapps.com/free-growth-strategy/" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session">Get my free revenue growth session</a>
		<a href="#" id="close" class="exit-intent-popup-close">X</a>
	  </div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {
            var subject_line = $('#subject_line');

            $('#test_now').click(function() {
                if ($(subject_line).val().length > 0) {
                    var subject = $('#subject_line').val().toString();
                    var count_c = subject.length;
                    var count_w = subject.split(' ').length;
                    var count_n = subject.replace(/[^0-9]/g,'').length;
                    var first_letter = subject.match(/[a-zA-Z]/)[0];
                    var score = 0;

                    $('#re_subject').text(subject);
                    $('#mockup_subject').text(subject);
                    $('#mockup_mobile_subject').text(subject);

                    // Change text for word count
                    if (count_w >= 4 && count_w <= 6) {
                        score += (10 * (count_w - 3));
                        if ($('#word_message').parent().hasClass('error'))
                            $('#word_message').parent().removeClass('error');
                        $('#word_message').text('This is the ideal number of words. Nice work!');
                    } else if (count_w > 6) {
                        if (!$('#word_message').parent().hasClass('error'))
                            $('#word_message').parent().addClass('error');
                        $('#word_message').text('Your subject line contains more than 6 words. Your entire subject line may not be seen. We recommend you aim for 4-6 words.');
                    } else if (count_w < 4) {
                        if (!$('#word_message').parent().hasClass('error'))
                            $('#word_message').parent().addClass('error');
                        $('#word_message').text('Your subject line contains fewer than 4 words. This might affect your open rates. We recommend you aim for 4-6 words.');
                    }

                    // Change text for character count
                    if (count_c >= 21 && count_c <= 40) {
                        score += (2 * (count_c - 20));
                        if ($('#character_message').parent().hasClass('error'))
                            $('#character_message').parent().removeClass('error');
                        $('#character_message').text('Not too long, not too short. Your subject line is the ideal length. Subject lines this long look good on all devices and see higher open rates.');
                    } else if (count_c > 40) {
                        if (!$('#character_message').parent().hasClass('error'))
                            $('#character_message').parent().addClass('error');
                        $('#character_message').text('Your subject line is a bit long. Subject lines with 21-40 characters tend to see higher open rates. Can you make yours any shorter?');
                    } else if (count_c < 21) {
                        if (!$('#character_message').parent().hasClass('error'))
                            $('#character_message').parent().addClass('error');
                        $('#character_message').text('Your subject line is a bit short. Subject lines with 21-40 characters tend to see higher open rates. Can you make yours any longer?');
                    }

                    // Change text for number count
                    if (count_n > 0) {
                        score += 10;
                        if ($('#numbers_message').parent().parent().hasClass('error'))
                            $('#numbers_message').parent().parent().removeClass('error');
                        $('#numbers_message').text('Numbers are proven to increase open rates. Good job including one in yours!');
                    } else {
                        if (!$('#numbers_message').parent().parent().hasClass('error'))
                            $('#numbers_message').parent().parent().addClass('error');
                        $('#numbers_message').text('Numbers help subject lines stand out and are proven to increase open rates. Using one in yours could make all the difference! If it fits the context, of course.');
                    }

                    // Change text for sentence casing
                    if (first_letter.match('[A-Z]')) {
                        score += 20;
                        if ($('#sentence_message').parent().parent().hasClass('error'))
                            $('#sentence_message').parent().parent().removeClass('error');
                        $('#sentence_message').text('Bravo! Subject lines perform best when they’re written in sentence case – like yours.');
                    } else {
                        if (!$('#sentence_message').parent().parent().hasClass('error'))
                            $('#sentence_message').parent().parent().addClass('error');
                        $('#sentence_message').text('Your subject line doesn’t seem to be written in sentence case. Subject lines written in sentence case perform best.');
                    }

                    $('#score_value').val(score);
                    $('#total_score').text(score + '%');

                    // Change count for results score
                    if (score >= 90) {
                        $('#score_message').text('Incredible! You’ve mastered the art of writing the perfect subject line.');
                    } else if (score >= 75) {
                        $('#score_message').text('Almost perfect! There’s just one thing you might want to change. See below for our suggestion on how to make your subject line more impactful.');
                    } else if (score >= 50) {
                        $('#score_message').text('Nice! A few small tweaks and you’re good to go. See below for suggestions on how to make your subject line more impactful.');
                    } else {
                        $('#score_message').text('Good try! Try rewording your subject line differently. See below for suggestions on how to make your subject line more impactful.');
                    }

                    // Update Counts
                    $('#character_count').text(count_c);
                    $('#word_count').text(count_w);

                    var plural = count_n > 1 ? ' Numbers' : ' Number';
                    count_n = count_n > 0 ? (count_n + plural) : 'None';
                    $('#number_count').text(count_n);

                    // Update Progresses
                    $('#score_characters').val(count_c);
                    $('#score_words').val(count_w);

                    // Reveal content
                    if (!$('#results').hasClass('reveal')) {
                        $('#results').addClass('reveal');
                    }
                }
            });

            $('.progress_wrapper').each(function(i, e) {
                var single_step;
                var end          = $(e).attr('data-progress-end');
                var step         = $(e).attr('data-progress-step');
                var start        = $(e).attr('data-progress-start');
                var steps        = $(e).attr('data-progress-steps');
                var metric_end   = $(e).attr('data-progress-metric-end');
                var metric_start = $(e).attr('data-progress-metric-start');
                var step_wrapper = jQuery('<div>', { class : 'step_wrapper' });

                metric_start = metric_start ? metric_start : '';
                $(step_wrapper).append('<span class="progress_step">' + start + metric_start + '</span>');

                if (steps) {
                    single_step = end / steps;

                    for (var x = 1; x < (steps - 1); x++) {
                        $(step_wrapper).append('<span class="progress_step step_line">' + (step * x) + '</span>');
                    }
                }

                metric_end = metric_end ? metric_end : '';
                $(step_wrapper).append('<span class="progress_step">' + end + metric_end + '</span>');

                $(e).append($(step_wrapper));
            });
        });
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