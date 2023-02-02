<?php
    /**
     * Template Name: Schema Markup Generator
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
            min-height: 800px;
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
            .fps_bannerSection {
                min-height: 1000px;
            }

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
            position: relative;
            width: 100%;
            box-shadow: 0px 0px 10px rgb(0,0,0,0.15);
            margin: 0;
            padding: 3%;
            line-height: 0;
            background: var(--background-color-grey);
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

    <!-- SCHEMA FORM ------>
    <style>
        /* SCHEMA TAB LINKS */
        #schema-tabs {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 40px;
            justify-content: center;
            align-items: center;
            gap: 15px 2.5%;
            position: relative;
            z-index: 1;
        }

        #schema-tabs .schema-tab {
            width: 22.5%;
            color: #427FE0;
            display: block;
            text-align: center;
            text-decoration: none;
            height: 50px;
            line-height: 50px;
            border-radius: 30px;
            font-style: normal;
            font-weight: 700;
            font-size: 14px;
        }

        #schema-tabs .schema-tab::before {
            content: '';
            display: inline-block;
            height: 32px;
            width: 32px;
            margin-right: 6px;
            position: relative;
            top: 8px;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: 80%;
        }

        #schema-tabs .schema-tab[data-schema-target="Article"]::before { background-image: url(/wp-content/themes/firstpage/assets/img/icon-schema-markup-generator-article.png); }
        #schema-tabs .schema-tab[data-schema-target="BreadcrumbList"]::before { background-image: url(/wp-content/themes/firstpage/assets/img/icon-schema-markup-generator-breadcrumb.png); }
        #schema-tabs .schema-tab[data-schema-target="FAQPage"]::before { background-image: url(/wp-content/themes/firstpage/assets/img/icon-schema-markup-generator-faq.png); }
        #schema-tabs .schema-tab[data-schema-target="Product"]::before { background-image: url(/wp-content/themes/firstpage/assets/img/icon-schema-markup-generator-product.png); }
        #schema-tabs .schema-tab[data-schema-target="Person"]::before { background-image: url(/wp-content/themes/firstpage/assets/img/icon-schema-markup-generator-person.png); }
        #schema-tabs .schema-tab[data-schema-target="LocalBusiness"]::before { background-image: url(/wp-content/themes/firstpage/assets/img/icon-schema-markup-generator-localbusiness.png); }
        #schema-tabs .schema-tab[data-schema-target="HowTo"]::before { background-image: url(/wp-content/themes/firstpage/assets/img/icon-schema-markup-generator-howto.png); }
        #schema-tabs .schema-tab[data-schema-target="Organization"]::before { background-image: url(/wp-content/themes/firstpage/assets/img/icon-schema-markup-generator-organization.png); }

        #schema-tabs .schema-tab.active,
        #schema-tabs .schema-tab:hover {
            background: #E3EEFF;
        }

        /* SCHEMA CONTAINER */
        #schema-wrapper {
            display: flex;
            gap: 20px;
            align-items: stretch;
        }

        /* GENERATED SCHEMA CODE */
        #schema-generated {
            width: 45%;
            padding-top: 34px;
        }

        #schema-generated code {
            background: #FFFFFF;
            border: 1px solid #C4C4C4;
            border-radius: 5px;
            display: block;
            white-space: pre-line;
            font-size: 20px;
            font-family: proxima-nova, sans-serif;
            font-style: normal;
            font-weight: 400;
            box-sizing: border-box;
            padding: 20px;
            overflow: scroll;
            max-height: 85%;
            color: #000000;
        }

        #schema-generated code span {
            line-height: 100%;
        }

        #schema-generated code .code-purple { color: #881276; }
        #schema-generated code .code-orange { color: #994500; }

        #schema-generated code .code-block,
        #schema-generated code .code-line {
            display: inline-block;
            padding-left: 1em;
            width: 100%;
            box-sizing: border-box;
            line-height: 30px;
            word-break: break-all;
        }

        #schema-generated #code-actions {
            text-align: right;
            margin-top: 20px;
        }

        #schema-generated #code-actions .code-action-button {
            display: inline-block;
            margin-left: 4px;
            background: #427FE0;
            padding: 8px 20px;
            border-radius: 30px;
            cursor: pointer;
        }

        #schema-generated #code-actions #delete-code {
            background: #FF5254;
        }

        #schema-generated #code-actions .code-action-button svg { 
            fill: #ffffff; 
        }

        #schema-generated #code-actions .code-action-button:hover {
            background: #ffffff;
            box-shadow: inset 0 0 0 2px #427FE0;
        }

        #schema-generated #code-actions #delete-code:hover {
            background: #ffffff;
            box-shadow: inset 0 0 0 2px #FF5254;
        }

        #schema-generated #code-actions .code-action-button:hover svg { 
            fill: #427FE0; 
            stroke: #427FE0;
            stroke-width: .5;
        }

        #schema-generated #code-actions #delete-code:hover svg {
            fill: #FF5254; 
            stroke: #FF5254;
        }
        
        #validator { display: none; }

        /* SCHEMA FORM */
        #schema-form {
            width: 55%;
        }

        #schema-form .form-tab { 
            display: none;
            padding-top: 240px;
            position: relative;
            top: -240px;
        }

        #schema-form .form-tab.active-tab { display: block; }

        #schema-form fieldset {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            border: none; 
            align-items: flex-end;
        }

        #schema-form .schema_form_repeater[data-repeater-name="howto_supplies"] {
            align-items: flex-start;
        }

        /* FLEX BREAK */
        #schema-form .flex-break {
            flex-basis: 100%;
            height: 0;
        }

        /* FORM FIELDS & GROUPS */
        #schema-form .schema_form_repeater,
        #schema-form .field-group {
            display: flex;
            width: 100%;
            gap: 20px;
            flex-wrap: wrap;
            align-items: flex-end;
        }

        #HowTo fieldset > .field-group {
            align-items: flex-start;
        }

        #schema-form .schema_form_repeater {
            flex-direction: column;
        }

        #schema-form .schema_form_field {
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            display: inline-block;
            width: 100%;
            flex-grow: 2;
            margin-top: 6px;
            position: relative;
        }

        #schema-form .flexed {
            flex: 1 0 auto;
        }

        #schema-form .repeated-field,
        #schema-form .to-clone {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            align-content: flex-start;
            width: 100%;
        }

        #schema-form .repeated-field:not(.no-border), 
        #schema-form .field-group:not(.no-border), 
        #schema-form .to-clone:not(.no-border) {
            border: 1px solid #e4e4e4;
            border-radius: 4px;
            padding: 20px;
            box-sizing: border-box;
        }

        #schema-form .schema_form_repeater[data-repeater-name="article_images"] .repeated-field,
        #schema-form .schema_form_repeater[data-repeater-name="howto_supplies"] .repeated-field,
        #schema-form .schema_form_repeater[data-repeater-name="howto_tools"] .repeated-field {
            height: 50px;
            border: none;
            border-radius: 0;
            padding: 0;
        }

        #schema-form .schema_form_repeater[data-repeater-name="howto_tools"] .repeated-field,
        #schema-form .schema_form_repeater[data-repeater-name="howto_supplies"] .repeated-field {
            height: 74px;
        }

        #schema-form .schema_form_repeater[data-repeater-name="product_reviews"] .to-clone,
        #schema-form .schema_form_repeater[data-repeater-name="business_hours"] .to-clone {
            height: 0;
            margin-bottom: -20px;
        }

        fieldset > .field-group:first-child, fieldset > .schema_form_repeater:first-child {
            margin-top: 30px;
        }

        #schema-form .hidden_field_container {
            display: none;
            gap: 20px;
            width: 100%;
        }

        #schema-form .hidden_field_container.wrap {
            flex-wrap: wrap;
        }

        #schema-form .hidden_field_container.reveal {
            display: flex !important;
        }

        #schema-form .hidden_field_container .hidden_field {
            display: none;
        }

        #schema-form .repeated-field a.remove {
            display: inline-block;
            height: 35px !important;
            line-height: 35px !important;
            font-size: 20px;
            text-align: center;
            border-radius: 25px;
            background: #BDBDBD;
            border-color: #BDBDBD;
            color: #FFFFFF;
            position: relative;
            cursor: pointer;
            flex-basis: content;
            order: 2;
        }

        #schema-form .repeated-field:has(> .schema_form_field label) a.remove,
        #schema-form .repeated-field:has(> .field_group .schema_form_field label) a.remove {
            top: 14px;
        }

        #schema-form .schema_form_repeater[data-repeater-name="howto_steps"] .repeated-field a.remove,
        #schema-form .schema_form_repeater[data-repeater-name="organization_contacts"] .repeated-field a.remove {
            top: 0 !important;
        }

        #schema-form .repeated-field a.remove span {
            width: 60px;
            display: block;
        }

        #schema-form .repeated-field a.remove:hover {
            background: #FF5254 !important;
            border-color: #FF5254 !important;
            color: #FFFFFF !important;
        }

        #schema-form .schema_form_repeater[data-repeater-name="breadcrumb_page"] .repeated-field .schema_form_field:nth-child(2),
        #schema-form .schema_form_repeater[data-repeater-name="faq_items"] .repeated-field .schema_form_field:nth-child(2) {
            order: 3 !important;
        }

        #schema-form .schema_form_repeater[data-repeater-name="product_reviews"] .repeated-field {
            align-items: flex-start !important;
        }

        /* WIDTHS */
        #schema-form .w-10 { width: 10% !important; }
        #schema-form .w-20 { width: 20% !important; }
        #schema-form .w-30 { width: 30% !important; }
        #schema-form .w-40 { width: 40% !important; }
        #schema-form .w-50 { width: 50% !important; }
        #schema-form .w-60 { width: 60% !important; }
        #schema-form .w-70 { width: 70% !important; }
        #schema-form .w-80 { width: 80% !important; }
        #schema-form .w-90 { width: 90% !important; }

        #schema-form .mt-0 { margin-top: 0px !important; }
        #schema-form .mt-20 { margin-top: 20px !important; }
        #schema-form .mt-40 { margin-top: 40px !important; }

        #schema-form .d-none { display: none !important; }

        /* MAX VALUE COUNTERS */
        #schema-form .schema_form_field .counter {
            position: absolute;
            top: 0;
            right: 0;
        }

        /* SCHEMA FORM LABELS */
        #schema-form .schema_form_field label {
            color: #000000;
            display: block;
        }

        #schema-form .howto_supply,
        #schema-form .howto_tool {
            margin-bottom: 10px;
        }

        /* SCHEMA FORM INPUTS, SELECTS & TEXTAREAS */
        #schema-form .schema_form_field input:not(.multiselect_checkbox),
        #schema-form .schema_form_field select,
        #schema-form .schema_form_field textarea {
            background: #FFFFFF;
            border: 1px solid #C4C4C4;
            border-radius: 5px;
            height: 45px;
            width: 100%;
            box-sizing: border-box;
            padding: 10px 15px;
            color: #00225D;
            font-family: proxima-nova, sans-serif;
        }

        #schema-form .schema_form_field textarea {
            resize: none;
            height: 146px;
        }

        #schema-form .schema_form_field input[type="date"] {
            text-transform: uppercase;
            color: #CECECE !important;
        }

        #schema-form .schema_form_field input[type="date"].date-picked {
            color: #00225D !important;
        }

        #schema-form .schema_form_field select,
        #schema-form .schema_form_field .multiselect_input {
            -webkit-padding-end: 40px !important;
            appearance: none !important;
            -moz-appearance: none !important;
            -webkit-appearance: none !important;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAyMCAxMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEuNDkzNzQgMC4wMTEzNTI0QzEuODY0OTggLTAuMDEyNzIzOCAyLjE4OTI3IDAuMjI4MDM4IDIuNDkwMDcgMC41MTgzNjlDNC44MzE5NyAyLjc3ODcgNy4xNzM4NiA1LjAzNzYyIDkuNTE0MjkgNy4yOTc5NUM5LjU1Njg0IDcuMzM5MDIgOS42MDA4NiA3LjM4MTUxIDkuNjQzNDEgNy40MjI1OEM5Ljg4MzA4IDcuNjUyOTYgMTAuMTE5OCA3LjY1NTc5IDEwLjM1MzYgNy40MzEwOEMxMi43NjU5IDUuMTA1NiAxNS4xNzUzIDIuNzc3MjkgMTcuNTg5MSAwLjQ1MzIyMkMxOC4xNjU4IC0wLjEwMzM2NCAxOC45ODAyIC0wLjE1MDEgMTkuNTMwNCAwLjMzMDAwOEMyMC4xNDA4IDAuODYzOTM0IDIwLjE2MTQgMS43MTc5MyAxOS41NjEyIDIuMzA5OTJDMTguODQyMiAzLjAxODA1IDE4LjExMTUgMy43MTM0MyAxNy4zODUyIDQuNDEzMDVDMTUuMzM2NyA2LjM5MDEzIDEzLjI4OTggOC4zNjcyMiAxMS4yMzk5IDEwLjM0MjlDMTEuMTEwOCAxMC40Njc1IDEwLjk3NTggMTAuNTg5MyAxMC44MjkgMTAuNjk0MUMxMC4yMjc0IDExLjEyODkgOS41NjU2NCAxMS4xMDQ4IDkuMDM1OTMgMTAuNTk1QzYuMTYyODUgNy44MzA0NiAzLjI5NTY1IDUuMDYwMjggMC40Mjk5MTEgMi4yODg2OEMtMi4yNzM5OWUtMDUgMS44NzM3MiAtMC4xMTMwMDkgMS4zNjY3IDAuMTE1ODk4IDAuODI3MTExQzAuMzQ2MjcyIDAuMjg0Njg4IDAuNzg3OTQ1IDAuMDA3MTAzNjYgMS40OTM3NCAwLjAxMTM1MjRaIiBmaWxsPSIjQzRDNEM0Ii8+Cjwvc3ZnPgo=) !important;
            background-repeat: no-repeat !important;
            background-position: center right 15px !important;
            background-size: 20px !important;
            text-overflow: ellipsis;
        }

        #schema-form .schema_form_field input::placeholder {
            font-style: italic;
            color: #CECECE;
        }

        .schema_form_field:has(> input[id="product_price"])::after,
        .schema_form_field:has(> input[id="product_low_price"])::after,
        .schema_form_field:has(> input[id="product_high_price"])::after {
            position: absolute;
            bottom: 10px;
            left: 10px;
            content: "$";
            font-size: 120%;
            color: #CECECE;
            pointer-events: none;
        }

        input#product_price,
        input#product_low_price,
        input#product_high_price {
            text-indent: 10px;
        }

        .schema_form_field > label:has(> input) {
            height: 45px;
            line-height: 45px;
        }

        .schema_form_repeater[data-repeater-name="organization_contacts"] .schema_form_field > label:has(> input) {
            line-height: 125%;
            display: flex !important;
            align-items: center;
            width: 100%;
        }

        .schema_form_field > label input {
            float: left;
            width: 20px !important;
            margin: 0 15px 0 0;
        }

        .schema_form_field.minimal > label:not(:first-child) {
            display: inline-block !important;
            margin-right: 20px;
            font-size: 80%;
        }

        .schema_form_field.minimal > label:not(:first-child) input {
            width: 16px !important;
        }

        .multiselect {
            position: relative;
        }

        .multiselect .multiselect_input_wrapper {
            position: relative;
            z-index: 2;
        }

        .multiselect .checkboxes {
            display: none;
            width: 100%;
            box-shadow: inset 0 0 0 1px #C4C4C4;
            border-radius: 0 0 5px 5px;
            border-top: none;
            top: 42px;
            position: absolute;
            z-index: 1;
            background: #FFFFFF;
            max-height: 120px;
            overflow-y: scroll;
        }

        .multiselect.expand .checkboxes {
            display: block;
        }

        .multiselect .checkboxes label {
            display: block;
            padding: 10px;
            cursor: pointer;
        }

        .multiselect .checkboxes label:nth-child(1) {
            padding-top: 14px;
        }

        .multiselect .checkboxes label:hover {
            background-color: #427FE0;
        }

        .multiselect .checkboxes input {
            margin-right: 5%;
        }

        #schema-form .field-repeater-button {
            padding: 8px 20px;
            background: #427FE0;
            color: #FFFFFF;
            display: inline-block;
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            line-height: 150%;
            border-radius: 30px;
            cursor: pointer;
        }

        #schema-form .field-repeater-button.disable {
            pointer-events: none;
            background: #C4C4C4;
        }

        #schema-form .field-repeater-button:hover {
            color: #427FE0;
            background: #FFFFFF;
            box-shadow: inset 0 0 0 2px #427FE0;
        }

        #schema-form .field-repeater-button::before {
            content: '+';
            position: relative;
            top: -1.5px;
            margin-right: 4px;
        }

        #schema-form .field-repeater-button[data-repeater="breadcrumb_page"]::before,
        #schema-form .field-repeater-button[data-repeater="faq_items"]::before {
            display: none;
        }


        /* REFERENCE LINKS */
        ul.references {
            list-style: none;
            display: flex;
            padding: 20px;
            margin-top: 20px;
        }

        ul.references > li {
            display: block;
            width: 50%;
            font-size: 14px;
            font-weight: 400;
            font-style: normal;
            line-height: 125%;
        }

        ul.references li ul {
            list-style: none;
            padding: 10px 0 0 0;
        }

        ul.references li ul li {
            line-height: 200%;
            padding: 0;
        }

        ul.references li ul li a {
            font-style: normal;
            font-weight: 700;
            color: #427FE0;
            text-decoration: none;
        }

        @media only screen and (max-width: 866px) {
            #schema-tabs .schema-tab {
                text-indent: 100%;
                white-space: nowrap;
                overflow: hidden;
                position: relative;
            }

            #schema-tabs .schema-tab::before {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -16px;
                margin-left: -16px;
            }

            #schema-wrapper {
                flex-wrap: wrap;
            }

            #schema-form {
                width: 100%;
            }

            #schema-generated {
                width: 100%;
                padding: 0;
                display: flex;
                flex-wrap: wrap;
                flex-direction: column-reverse;
            }

            #schema-generated code {
                font-size: 1.1em;
            }

            #schema-generated #code-actions {
                margin: 0 0 20px 0;
            }

            /* WIDTHS */
            #schema-form .w-80 { width: 70% !important; }
            #schema-form .w-90 { width: 80% !important; }
        }
    </style>

    <!-- PAGINATION ------->
    <style>
        .section-services {
            padding-top: var(--section-padding-y);
            padding-left: var(--section-padding-x);
            padding-right: var(--section-padding-x);
        }

        .section-services .row {
            gap: 30px;
            flex-wrap: no-wrap;
        }

        .section-services .card {
            flex: 0 0 30%;
            box-shadow: 1px 4px 15px 0 rgba(0,0,0,0.3);
            background-color: var(--background-color-white);
            border-radius: 0;
            border: none;
        }

        .section-services .card .card-body {
            padding: 30px 15px;
        }

        .section-services .card .card-body .card-title {
            font-size: 35px;
            line-height: 40px;
            font-weight: 700;
            color: var(--text-color-dark-blue);
            text-align: center;
        }

        .section-services .card .card-body .card-text {
            padding: 0 15px;
            font-size: 16px;
            line-height: 26px;
            color: var(--text-color-dark-blue);
            text-align: center;
        }

        .box-pagination .pagination_wrapper {
            width: 100%;
            align-items: center;
            align-content: center;
            justify-content: center;
            gap: 10px;
            display: flex;
        }

        .box-pagination .pagination_wrapper .box_pag {
            height: 14px;
            width: 14px;
            background: #C4C4C4;
            display: block;
            border: 1px solid #C4C4C4;
            border-radius: 50%;
        }

        .box-pagination .pagination_wrapper .box_pag.active-pag {
            background: #427fe0;
        }

        .box-pagination .row > div.active-pag {
            order: -1;
        }
        
        @media only screen and (max-width: 991px) {
            section.section-services .row > div {
                max-width: 100%;
                flex-basis: 100%;
            }

            .section-services .row {
                padding: 15px;
                overflow: hidden;
            }

            .section-services .card {
                height: auto;
            }

            .section-services .card .card-body {
                display: flex;
                flex-wrap: wrap;
                align-content: center;
                justify-content: center;
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
                <h1>The Schema Markup Generator Testing Tool (JSON-LD)</h1>
                <p>Whether you’re a local business or a large organization, if you want your website to perform better in Google’s search results and generate more clicks, adding structured data with Schema markups is an absolute must.</p>
                <p>Create JSON-LD Schema code for everything including an article, breadcrumbs, FAQ page and more with our free Schema markup generator tool now!</p>
            </div>
            <div class="fps_banner-innerImg">
                <img src="/wp-content/themes/firstpage/assets/img/img-schema-markup-generator.png" class="img-fluid" alt="The Schema Markup Generator Testing Tool (JSON-LD)" />
            </div>
        </div>
    </section>

    <!----------------------- Schema Markup Generator ----------------------->
    <section class="fps_formSection">
        <div class="fps_formWrap-outer">
            <div class="fps_formWrap-inner">
                <div id="schema-tabs">
                    <a href="#Article" class="schema-tab active" data-schema-target="Article">Article</a>
                    <a href="#BreadcrumbList" class="schema-tab" data-schema-target="BreadcrumbList">Breadcrumb</a>
                    <a href="#FAQPage" class="schema-tab" data-schema-target="FAQPage">FAQ</a>
                    <a href="#Product" class="schema-tab" data-schema-target="Product">Product</a>
                    <a href="#Person" class="schema-tab" data-schema-target="Person">Person</a>
                    <a href="#LocalBusiness" class="schema-tab" data-schema-target="LocalBusiness">Local Business</a>
                    <a href="#HowTo" class="schema-tab" data-schema-target="HowTo">How To</a>
                    <a href="#Organization" class="schema-tab" data-schema-target="Organization">Organization</a>
                </div>
                <div id="schema-wrapper">
                    <form id="schema-form">
                        <div id="Article" class="active-tab form-tab">
                            <fieldset>
                                <div class="schema_form_field w-20">
                                    <label for="article_type">Article @type</label>
                                    <select id="article_type">
                                        <option value="Article" selected>Article</option>
                                        <option value="NewsArticle">News Article</option>
                                        <option value="BlogPosting">Blog Post</option>
                                    </select>
                                </div>
                                <div class="schema_form_field w-70">
                                    <label for="article_url">URL</label>
                                    <input type="url" id="article_url" placeholder="http://" />
                                </div>
                                <div class="schema_form_field">
                                    <label for="article_headline">Headline<span class="counter" data-max="110">0 / 110</span></label>
                                    <input type="text" id="article_headline" placeholder="Maximum of 110 characters" maxlength="110" />
                                </div>
                                <div class="schema_form_field">
                                    <label for="article_description">Description<span class="counter" data-max="110">0 / 110</span></label>
                                    <input type="text" id="article_description" placeholder="Maximum of 110 characters" maxlength="110" />
                                </div>
                                <div class="schema_form_repeater" data-repeater-name="article_images" data-child-count="1">
                                    <div class="to-clone no-border">
                                        <div class="schema_form_field w-80" style="width: 100% !important;">
                                            <label for="article_img_url_1">Image URL</label>
                                            <input type="url" class="article_img" id="article_img_url_1" data-n-i="2" placeholder="Image URL #1" />
                                        </div>
                                    </div>
                                </div>
                                <a class="field-repeater-button" data-repeater="article_images">IMAGE</a>
                                <div class="flex-break"></div>
                                <div class="schema_form_field w-20">
                                    <label for="article_author_type">Author @type</label>
                                    <select id="article_author_type">
                                        <option value="Person" selected>Person</option>
                                        <option value="Organization">Organization</option>
                                    </select>
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="article_author_name">Author</label>
                                    <input type="text" id="article_author_name" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="article_author_url">Author URL</label>
                                    <input type="url" id="article_author_url" placeholder="http://" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="article_publisher_name">Publisher</label>
                                    <input type="text" id="article_publisher_name" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="article_publisher_logo">Publisher Logo URL</label>
                                    <input type="url" id="article_publisher_logo" placeholder="http://" />
                                </div>
                                <div class="schema_form_field w-20">
                                    <label for="article_date_published">Date Published</label>
                                    <input type="date"  id="article_date_published" onchange="ifDateSelected(this)" />
                                </div>
                                <div class="schema_form_field w-20">
                                    <label for="article_date_modified">Date Modified</label>
                                    <input type="date"  id="article_date_modified" onchange="ifDateSelected(this)" />
                                </div>
                            </fieldset>
                            <ul class="references">
                                <li>Schema.org's reference(s)
                                    <ul>
                                        <li><a href="https://schema.org/Article">Article</a></li>
                                        <li><a href="https://schema.org/NewsArticle">NewsArticle</a></li>
                                        <li><a href="https://schema.org/BlogPosting">Article</a></li>
                                    </ul>
                                </li>
                                <li>Google's reference(s)
                                    <ul>
                                        <li><a href="https://developers.google.com/search/docs/appearance/structured-data/article">Article</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="BreadcrumbList" class="form-tab">
                            <fieldset>
                                <div class="field-group">
                                    <div class="schema_form_field">
                                        <label for="breadcrumb_name_1">Page #1 Name</label>
                                        <input type="text" class="breadcrumb_name" id="breadcrumb_name_1" placeholder="Page #1 name" />
                                    </div>
                                    <div class="schema_form_field">
                                        <label for="breadcrumb_url_1">URL</label>
                                        <input type="url" class="breadcrumb_url" id="breadcrumb_url_1" placeholder="http://" />
                                    </div>
                                </div>
                                <div class="schema_form_repeater" data-repeater-name="breadcrumb_page" data-child-count="2">
                                    <div class="to-clone">
                                        <div class="schema_form_field w-80" style="width: 100% !important;">
                                            <label for="breadcrumb_name_2" class="keep-in-clone" data-n-i="1">Page #2 Name</label>
                                            <input type="text" class="breadcrumb_name" id="breadcrumb_name_2" data-n-i="1" placeholder="Page #2 name" />
                                        </div>
                                        <div class="schema_form_field">
                                            <label for="breadcrumb_url_2" class="keep-in-clone">URL</label>
                                            <input type="url" class="breadcrumb_url" id="breadcrumb_url_2" placeholder="http://" />
                                        </div>
                                    </div>
                                </div>
                                <a class="field-repeater-button" data-repeater="breadcrumb_page">ADD URL</a>
                            </fieldset>
                            <ul class="references">
                                <li>Schema.org's reference(s)
                                    <ul>
                                        <li><a href="https://schema.org/BreadcrumbList">BreadcrumbList</a></li>
                                    </ul>
                                </li>
                                <li>Google's reference(s)
                                    <ul>
                                        <li><a href="https://developers.google.com/search/docs/appearance/structured-data/breadcrumb">Breadcrumb</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="FAQPage" class="form-tab">
                            <fieldset>
                                <div class="schema_form_repeater" data-repeater-name="faq_items" data-child-count="1">
                                    <div class="to-clone">
                                        <div class="schema_form_field w-70" style="width: 100 !important;">
                                            <label for="faq_question_1" class="keep-in-clone" data-n-i="1">Question #1</label>
                                            <input type="text" class="faq_question" id="faq_question_1" />
                                        </div>
                                        <div class="schema_form_field">
                                            <label for="faq_answer_1" class="keep-in-clone" data-n-i="1">Answer #1</label>
                                            <input type="text" class="faq_answer" id="faq_answer_1" />
                                        </div>
                                    </div>
                                </div>
                                <a class="field-repeater-button" data-repeater="faq_items">ADD QUESTION</a>
                            </fieldset>
                            <ul class="references">
                                <li>Schema.org's reference(s)
                                    <ul>
                                        <li><a href="https://schema.org/FAQPage">FAQPage</a></li>
                                    </ul>
                                </li>
                                <li>Google's reference(s)
                                    <ul>
                                        <li><a href="https://developers.google.com/search/docs/appearance/structured-data/faqpage">FAQ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="Product" class="form-tab">
                            <fieldset>
                                <div class="schema_form_field w-40">
                                    <label for="product_name">Name</label>
                                    <input type="text" id="product_name" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="product_image_url">Image URL</label>
                                    <input type="url" id="product_image_url" placeholder="http://" />
                                </div>
                                <div class="field-group w-40 no-border">
                                    <div class="schema_form_field">
                                        <label for="product_brand">Brand</label>
                                        <input type="text" id="product_brand" />
                                    </div>
                                    <div class="schema_form_field">
                                        <label for="product_id">Identification Properties</label>
                                        <div class="multiselect">
                                            <div class="multiselect_input_wrapper">
                                                <input disabled id="product_id" class="multiselect_input" />
                                            </div>
                                            <div class="checkboxes">
                                                <label for="product_id_sku"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="identification_sku" id="product_id_sku" />SKU</label>
                                                <label for="product_id_gtin8"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="identification_gtin8" id="product_id_gtin8" />GTIN8</label>
                                                <label for="product_id_gtin13"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="identification_gtin13" id="product_id_gtin13" />GTIN13</label>
                                                <label for="product_id_gtin14"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="identification_gtin14" id="product_id_gtin14" />GTIN14</label>
                                                <label for="product_id_mpn"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="identification_mpn" id="product_id_mpn" />MPN</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="product_description">Product's Description</label>
                                    <textarea id="product_description"></textarea>
                                </div>
                                <div class="hidden_field_container">
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="identification_sku">SKU</label>
                                        <input type="text" id="identification_sku" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="identification_gtin8">GTIN8</label>
                                        <input type="text" id="identification_gtin8" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="identification_gtin13">GTIN13</label>
                                        <input type="text" id="identification_gtin13" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="identification_gtin14">GTIN14</label>
                                        <input type="text" id="identification_gtin14" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="identification_mpn">MPN</label>
                                        <input type="text" id="identification_mpn" />
                                    </div>
                                </div>
                                <div class="schema_form_field w-20">
                                    <label for="product_type">Offer @type</label>
                                    <select id="product_type" class="view_switcher">
                                        <option value="None" selected>None</option>
                                        <option value="Offer" data-linked-value="Offer">Offer</option>
                                        <option value="AggregateOffer" data-linked-value="Aggregate">Aggregate Offer</option>
                                    </select>
                                </div>
                                <div class="hidden_field_container linked-view w-70" data-linked-switcher="product_type" data-linked-value="Offer Aggregate">
                                    <div class="schema_form_field hidden_field">
                                        <label for="product_url">URL</label>
                                        <input type="url" id="product_url" placeholder="http://" />
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-20 flexed" data-linked-switcher="product_type" data-linked-value="Offer Aggregate">
                                    <div class="schema_form_field hidden_field">
                                        <label for="product_currency">Price Currency</label>
                                        <select id="product_currency">
                                            <option value="USD">United States Dollar</option>
                                            <option value="GBP">British Pound Sterling</option>
                                            <option value="CAD">Canadian Dollar</option>
                                            <option value="EUR">Euro</option>
                                            <option value="AED">United Arab Emirates Dirham</option>
                                            <option value="AFN">Afghan Afghani</option>
                                            <option value="ALL">Albanian Lek</option>
                                            <option value="AMD">Armenian Dram</option>
                                            <option value="ANG">Netherlands Antillean Guilder</option>
                                            <option value="AOA">Angolan Kwanza</option>
                                            <option value="ARS">Argentine Peso</option>
                                            <option value="AUD" selected>Australian Dollar</option>
                                            <option value="AWG">Aruban Florin</option>
                                            <option value="AZN">Azerbaijani Manat</option>
                                            <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                                            <option value="BBD">Barbadian Dollar</option>
                                            <option value="BDT">Bangladeshi Taka</option>
                                            <option value="BGN">Bulgarian Lev</option>
                                            <option value="BHD">Bahraini Dinar</option>
                                            <option value="BIF">Burundian Franc</option>
                                            <option value="BMD">Bermudan Dollar</option>
                                            <option value="BND">Brunei Dollar</option>
                                            <option value="BOB">Bolivian Boliviano</option>
                                            <option value="BRL">Brazilian Real</option>
                                            <option value="BSD">Bahamian Dollar</option>
                                            <option value="BTC">Bitcoin</option>
                                            <option value="BTN">Bhutanese Ngultrum</option>
                                            <option value="BWP">Botswanan Pula</option>
                                            <option value="BYN">Belarusian Ruble</option>
                                            <option value="BZD">Belize Dollar</option>
                                            <option value="CDF">Congolese Franc</option>
                                            <option value="CHF">Swiss Franc</option>
                                            <option value="CLF">Chilean Unit of Account (UF)</option>
                                            <option value="CLP">Chilean Peso</option>
                                            <option value="CNH">Chinese Yuan (Offshore)</option>
                                            <option value="CNY">Chinese Yuan</option>
                                            <option value="COP">Colombian Peso</option>
                                            <option value="CRC">Costa Rican Colón</option>
                                            <option value="CUC">Cuban Convertible Peso</option>
                                            <option value="CUP">Cuban Peso</option>
                                            <option value="CVE">Cape Verdean Escudo</option>
                                            <option value="CZK">Czech Republic Koruna</option>
                                            <option value="DJF">Djiboutian Franc</option>
                                            <option value="DKK">Danish Krone</option>
                                            <option value="DOP">Dominican Peso</option>
                                            <option value="DZD">Algerian Dinar</option>
                                            <option value="EGP">Egyptian Pound</option>
                                            <option value="ERN">Eritrean Nakfa</option>
                                            <option value="ETB">Ethiopian Birr</option>
                                            <option value="FJD">Fijian Dollar</option>
                                            <option value="FKP">Falkland Islands Pound</option>
                                            <option value="GEL">Georgian Lari</option>
                                            <option value="GGP">Guernsey Pound</option>
                                            <option value="GHS">Ghanaian Cedi</option>
                                            <option value="GIP">Gibraltar Pound</option>
                                            <option value="GMD">Gambian Dalasi</option>
                                            <option value="GNF">Guinean Franc</option>
                                            <option value="GTQ">Guatemalan Quetzal</option>
                                            <option value="GYD">Guyanaese Dollar</option>
                                            <option value="HKD">Hong Kong Dollar</option>
                                            <option value="HNL">Honduran Lempira</option>
                                            <option value="HRK">Croatian Kuna</option>
                                            <option value="HTG">Haitian Gourde</option>
                                            <option value="HUF">Hungarian Forint</option>
                                            <option value="IDR">Indonesian Rupiah</option>
                                            <option value="ILS">Israeli New Sheqel</option>
                                            <option value="IMP">Manx pound</option>
                                            <option value="INR">Indian Rupee</option>
                                            <option value="IQD">Iraqi Dinar</option>
                                            <option value="IRR">Iranian Rial</option>
                                            <option value="ISK">Icelandic Króna</option>
                                            <option value="JEP">Jersey Pound</option>
                                            <option value="JMD">Jamaican Dollar</option>
                                            <option value="JOD">Jordanian Dinar</option>
                                            <option value="JPY">Japanese Yen</option>
                                            <option value="KES">Kenyan Shilling</option>
                                            <option value="KGS">Kyrgystani Som</option>
                                            <option value="KHR">Cambodian Riel</option>
                                            <option value="KMF">Comorian Franc</option>
                                            <option value="KPW">North Korean Won</option>
                                            <option value="KRW">South Korean Won</option>
                                            <option value="KWD">Kuwaiti Dinar</option>
                                            <option value="KYD">Cayman Islands Dollar</option>
                                            <option value="KZT">Kazakhstani Tenge</option>
                                            <option value="LAK">Laotian Kip</option>
                                            <option value="LBP">Lebanese Pound</option>
                                            <option value="LKR">Sri Lankan Rupee</option>
                                            <option value="LRD">Liberian Dollar</option>
                                            <option value="LSL">Lesotho Loti</option>
                                            <option value="LYD">Libyan Dinar</option>
                                            <option value="MAD">Moroccan Dirham</option>
                                            <option value="MDL">Moldovan Leu</option>
                                            <option value="MGA">Malagasy Ariary</option>
                                            <option value="MKD">Macedonian Denar</option>
                                            <option value="MMK">Myanma Kyat</option>
                                            <option value="MNT">Mongolian Tugrik</option>
                                            <option value="MOP">Macanese Pataca</option>
                                            <option value="MRO">Mauritanian Ouguiya</option>
                                            <option value="MUR">Mauritian Rupee</option>
                                            <option value="MVR">Maldivian Rufiyaa</option>
                                            <option value="MWK">Malawian Kwacha</option>
                                            <option value="MXN">Mexican Peso</option>
                                            <option value="MYR">Malaysian Ringgit</option>
                                            <option value="MZN">Mozambican Metical</option>
                                            <option value="NAD">Namibian Dollar</option>
                                            <option value="NGN">Nigerian Naira</option>
                                            <option value="NIO">Nicaraguan Córdoba</option>
                                            <option value="NOK">Norwegian Krone</option>
                                            <option value="NPR">Nepalese Rupee</option>
                                            <option value="NZD">New Zealand Dollar</option>
                                            <option value="OMR">Omani Rial</option>
                                            <option value="PAB">Panamanian Balboa</option>
                                            <option value="PEN">Peruvian Nuevo Sol</option>
                                            <option value="PGK">Papua New Guinean Kina</option>
                                            <option value="PHP">Philippine Peso</option>
                                            <option value="PKR">Pakistani Rupee</option>
                                            <option value="PLN">Polish Zloty</option>
                                            <option value="PYG">Paraguayan Guarani</option>
                                            <option value="QAR">Qatari Rial</option>
                                            <option value="RON">Romanian Leu</option>
                                            <option value="RSD">Serbian Dinar</option>
                                            <option value="RUB">Russian Ruble</option>
                                            <option value="RWF">Rwandan Franc</option>
                                            <option value="SAR">Saudi Riyal</option>
                                            <option value="SBD">Solomon Islands Dollar</option>
                                            <option value="SCR">Seychellois Rupee</option>
                                            <option value="SDG">Sudanese Pound</option>
                                            <option value="SEK">Swedish Krona</option>
                                            <option value="SGD">Singapore Dollar</option>
                                            <option value="SHP">Saint Helena Pound</option>
                                            <option value="SLL">Sierra Leonean Leone</option>
                                            <option value="SOS">Somali Shilling</option>
                                            <option value="SRD">Surinamese Dollar</option>
                                            <option value="SSP">South Sudanese Pound</option>
                                            <option value="STD">São Tomé and Príncipe Dobra</option>
                                            <option value="SVC">Salvadoran Colón</option>
                                            <option value="SYP">Syrian Pound</option>
                                            <option value="SZL">Swazi Lilangeni</option>
                                            <option value="THB">Thai Baht</option>
                                            <option value="TJS">Tajikistani Somoni</option>
                                            <option value="TMT">Turkmenistani Manat</option>
                                            <option value="TND">Tunisian Dinar</option>
                                            <option value="TOP">Tongan Pa'anga</option>
                                            <option value="TRY">Turkish Lira</option>
                                            <option value="TTD">Trinidad and Tobago Dollar</option>
                                            <option value="TWD">New Taiwan Dollar</option>
                                            <option value="TZS">Tanzanian Shilling</option>
                                            <option value="UAH">Ukrainian Hryvnia</option>
                                            <option value="UGX">Ugandan Shilling</option>
                                            <option value="UYU">Uruguayan Peso</option>
                                            <option value="UZS">Uzbekistan Som</option>
                                            <option value="VEF">Venezuelan Bolívar Fuerte</option>
                                            <option value="VND">Vietnamese Dong</option>
                                            <option value="VUV">Vanuatu Vatu</option>
                                            <option value="WST">Samoan Tala</option>
                                            <option value="XAF">CFA Franc BEAC</option>
                                            <option value="XAG">Silver Ounce</option>
                                            <option value="XAU">Gold Ounce</option>
                                            <option value="XCD">East Caribbean Dollar</option>
                                            <option value="XDR">Special Drawing Rights</option>
                                            <option value="XOF">CFA Franc BCEAO</option>
                                            <option value="XPD">Palladium Ounce</option>
                                            <option value="XPF">CFP Franc</option>
                                            <option value="XPT">Platinum Ounce</option>
                                            <option value="YER">Yemeni Rial</option>
                                            <option value="ZAR">South African Rand</option>
                                            <option value="ZMW">Zambian Kwacha</option>
                                            <option value="ZWL">Zimbabwean Dollar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-70" data-linked-switcher="product_type" data-linked-value="Offer">
                                    <div class="schema_form_field w-40 hidden_field">
                                        <label for="product_price">Price</label>
                                        <input type="number" id="product_price" />
                                    </div>
                                    <div class="schema_form_field w-40 hidden_field">
                                        <label for="product_price_until">Price valid until</label>
                                        <input type="date"  id="product_price_until" onchange="ifDateSelected(this)" />
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view" data-linked-switcher="product_type" data-linked-value="Offer">
                                    <div class="schema_form_field w-40 hidden_field">
                                        <label for="product_availability">Availability</label>
                                        <select id="product_availability">
                                            <option selected>Not Specified</option>
                                            <option value="InStock">In Stock</option>
                                            <option value="OutOfStock">Out Of Stock</option>
                                            <option value="OnlineOnly">Online Only</option>
                                            <option value="InStoreOnly">In Store Only</option>
                                            <option value="PreOrder">Pre-Order</option>
                                            <option value="PreSale">Pre-Sale</option>
                                            <option value="LimitedAvailability">Limited Availability</option>
                                            <option value="SoldOut">Sold Out</option>
                                            <option value="Discontinued">Discontinued</option>
                                        </select>
                                    </div>
                                    <div class="schema_form_field w-40 hidden_field">
                                        <label for="product_condition">Item Condition</label>
                                        <select id="product_condition">
                                            <option selected>Not Specified</option>
                                            <option value="NewCondition">New</option>
                                            <option value="UsedCondition">Used</option>
                                            <option value="RefurbishedCondition">Refurbished</option>
                                            <option value="DamagedCondition">Damaged</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-70" data-linked-switcher="product_type" data-linked-value="Aggregate">
                                    <div class="schema_form_field w-30 hidden_field">
                                        <label for="product_low_price">Low Price</label>
                                        <input type="number" id="product_low_price" />
                                    </div>
                                    <div class="schema_form_field w-30 hidden_field">
                                        <label for="product_high_price">High Price</label>
                                        <input type="number" id="product_high_price" />
                                    </div>
                                    <div class="schema_form_field w-30 hidden_field">
                                        <label for="product_no_offers">Number Of Offers</label>
                                        <input type="number" id="product_no_offers" />
                                    </div>
                                </div>
                                <div class="field-group no-border">
                                    <div class="schema_form_field w-20">
                                        <label for="product_rating_value">Aggregate Rating Value</label>
                                        <input type="number" id="product_rating_value" />
                                    </div>
                                    <div class="schema_form_field w-20">
                                        <label for="product_no_ratings">Number of Ratings</label>
                                        <input type="number" id="product_no_ratings" />
                                    </div>
                                    <div class="schema_form_field w-20">
                                        <label for="product_highest_value">Highest Value Allowed</label>
                                        <input type="number" id="product_highest_value" />
                                    </div>
                                    <div class="schema_form_field w-20">
                                        <label for="product_lowest_value">Lowest Value Allowed</label>
                                        <input type="number" id="product_lowest_value" />
                                    </div>
                                </div>
                                <div class="schema_form_field">
                                    <label for="product_aggregate_reviews"><input type="checkbox" id="product_aggregate_reviews" />Aggregate Review Ratings</label>
                                </div>
                                <div class="schema_form_repeater hidden_field_container" data-repeater-name="product_reviews" data-child-count="0">
                                    <div class="to-clone no-border">
                                        <div class="field_group w-60 include-remover">
                                            <div class="schema_form_field hidden_field">
                                                <label for="review_name_0" class="keep-in-clone" data-n-i="2">Review's Name #0</label>
                                                <input type="text" id="review_name_0" class="review_name" />
                                            </div>
                                            <div class="schema_form_field hidden_field">
                                                <label for="review_body_0" class="keep-in-clone" data-n-i="2">Review's Body #0</label>
                                                <textarea id="review_body_0" class="review_body"></textarea>
                                            </div>
                                        </div>
                                        <div class="field_group w-30 flexed">
                                            <div class="schema_form_field hidden_field">
                                                <label for="review_rating_0" class="keep-in-clone" data-n-i="2">Review Rating #0</label>
                                                <input type="number" id="review_rating_0" class="review_rating" />
                                            </div>
                                            <div class="schema_form_field hidden_field">
                                                <label for="review_date_0" class="keep-in-clone" data-n-i="2">Review Date #0</label>
                                                <input type="date"  id="review_date_0" class="review_date" onchange="ifDateSelected(this)" />
                                            </div>
                                            <div class="schema_form_field hidden_field">
                                                <label for="review_author_0" class="keep-in-clone" data-n-i="2">Review Author #0</label>
                                                <input type="text" id="review_author_0" class="review_author" />
                                            </div>
                                            <div class="schema_form_field hidden_field">
                                                <label for="review_publisher_0" class="keep-in-clone" data-n-i="2">Review Publisher #0</label>
                                                <input type="text" id="review_publisher_0" class="review_publisher" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="field-repeater-button" data-repeater="product_reviews">ADD REVIEW</a>
                            </fieldset>
                            <ul class="references">
                                <li>Schema.org's reference(s)
                                    <ul>
                                        <li><a href="https://schema.org/Product">Product</a></li>
                                        <li><a href="https://schema.org/Review">Review</a></li>
                                    </ul>
                                </li>
                                <li>Google's reference(s)
                                    <ul>
                                        <li><a href="https://developers.google.com/search/docs/appearance/structured-data/product">Product</a></li>
                                        <li><a href="https://developers.google.com/search/docs/appearance/structured-data/review-snippet">Review snippet</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="Person" class="form-tab">
                            <fieldset>
                                <div class="schema_form_field w-40">
                                    <label for="person_name">Name</label>
                                    <input type="text" id="person_name" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="person_url">URL</label>
                                    <input type="url" id="person_url" placeholder="http://" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="person_image_url">Picture URL</label>
                                    <input type="url" id="person_image_url" placeholder="http://" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="person_socials">Social Profiles</label>
                                    <div class="multiselect">
                                        <div class="multiselect_input_wrapper">
                                            <input disabled id="person_socials" class="multiselect_input" />
                                        </div>
                                        <div class="checkboxes">
                                            <label for="person_socials_fb"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_facebook" id="person_socials_fb" />Facebook</label>
                                            <label for="person_socials_tw"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_twitter" id="person_socials_tw" />Twitter</label>
                                            <label for="person_socials_ig"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_instagram" id="person_socials_ig" />Instagram</label>
                                            <label for="person_socials_yt"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_youtube" id="person_socials_yt" />YouTube</label>
                                            <label for="person_socials_li"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_linkedin" id="person_socials_li" />LinkedIn</label>
                                            <label for="person_socials_pn"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_pinterest" id="person_socials_pn" />Pinterest</label>
                                            <label for="person_socials_sc"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_soundcloud" id="person_socials_sc" />SoundCloud</label>
                                            <label for="person_socials_tb"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_tumblr" id="person_socials_tb" />Tumblr</label>
                                            <label for="person_socials_wk"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_wikipedia" id="person_socials_wk" />Wikipedia</label>
                                            <label for="person_socials_gh"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_github" id="person_socials_gh" />Github</label>
                                            <label for="person_socials_wb"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="person_website" id="person_socials_wb" />Website</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden_field_container wrap">
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_facebook">Facebook</label>
                                        <input type="text" id="person_facebook" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_twitter">Twitter</label>
                                        <input type="text" id="person_twitter" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_instagram">Instagram</label>
                                        <input type="text" id="person_instagram" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_youtube">YouTube</label>
                                        <input type="text" id="person_youtube" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_linkedin">LinkedIn</label>
                                        <input type="text" id="person_linkedin" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_pinterest">Pinterest</label>
                                        <input type="text" id="person_pinterest" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_soundcloud">SoundCloud</label>
                                        <input type="text" id="person_soundcloud" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_tumblr">Tumblr</label>
                                        <input type="text" id="person_tumblr" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_wikipedia">Wikipedia</label>
                                        <input type="text" id="person_wikipedia" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_github">Github</label>
                                        <input type="text" id="person_github" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="person_website">Website</label>
                                        <input type="text" id="person_website" />
                                    </div>
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="person_job">Job Title</label>
                                    <input type="text" id="person_job" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="person_company">Company</label>
                                    <input type="text" id="person_company" />
                                </div>
                            </fieldset>
                            <ul class="references">
                                <li>Schema.org's reference(s)
                                    <ul>
                                        <li><a href="https://schema.org/Person">Person</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="LocalBusiness" class="form-tab">
                            <fieldset>
                                <div class="schema_form_field w-40">
                                    <label for="business_type">Business Type</label>
                                    <select id="business_type" class="view_switcher">
                                        <option value="LocalBusiness" data-linked-value="Local" selected>Local Business</option>
                                        <option value="AnimalShelter" data-linked-value="Animal">Animal Shelter</option>
                                        <option value="ArchiveOrganization" data-linked-value="Archive">Archive Organization</option>
                                        <option value="AutomotiveBusiness" data-linked-value="Automotive">Automotive Business</option>
                                        <option value="ChildCare" data-linked-value="ChildCare">Child Care</option>
                                        <option value="Dentist" data-linked-value="Dentist">Dentist</option>
                                        <option value="DryCleaningOrLaundry" data-linked-value="Cleaning">Dry Cleaning Or Laundry</option>
                                        <option value="EmergencyService" data-linked-value="Emergency">Emergency Service</option>
                                        <option value="EmploymentAgency" data-linked-value="Employment">Employment Agency</option>
                                        <option value="EntertainmentBusiness" data-linked-value="Entertainment">Entertainment Business</option>
                                        <option value="FinancialService" data-linked-value="Financial">Financial Service</option>
                                        <option value="FoodEstablishment" data-linked-value="Food">Food Establishment</option>
                                        <option value="GovernmentOffice" data-linked-value="Governement">Government Office</option>
                                        <option value="HealthAndBeautyBusiness" data-linked-value="Health">Health And Beauty Business</option>
                                        <option value="HomeAndConstructionBusiness" data-linked-value="Construction">Home And Construction Business</option>
                                        <option value="InternetCafe" data-linked-value="Cafe">Internet Cafe</option>
                                        <option value="LegalService" data-linked-value="Legal">Legal Service</option>
                                        <option value="Library" data-linked-value="Library">Library</option>
                                        <option value="LodgingBusiness" data-linked-value="Lodging">Lodging Business</option>
                                        <option value="MedicalBusiness" data-linked-value="Medical">Medical Business</option>
                                        <option value="ProfessionalService" data-linked-value="Professional">Professional Service</option>
                                        <option value="RadioStation" data-linked-value="Radio">Radio Station</option>
                                        <option value="RealEstateAgent" data-linked-value="Estate">Real Estate Agent</option>
                                        <option value="RecyclingCenter" data-linked-value="Recycling">Recycling Center</option>
                                        <option value="SelfStorage" data-linked-value="Storage">Self Storage</option>
                                        <option value="ShoppingCenter" data-linked-value="Shopping">Shopping Center</option>
                                        <option value="SportsActivityLocation" data-linked-value="Sports">Sports Activity Location</option>
                                        <option value="Store" data-linked-value="Store">Store</option>
                                        <option value="TelevisionStation" data-linked-value="Television">Television Station</option>
                                        <option value="TouristInformationCenter" data-linked-value="Tourist">Tourist Information Center</option>
                                        <option value="TravelAgency" data-linked-value="Travel">Travel Agency</option>
                                    </select>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Automotive">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Automotive">Specific Type</label>
                                        <select id="business_type-Automotive">
                                            <option value="AutomotiveBusiness" selected>Automotive Business</option>
                                            <option value="AutoBodyShop">Auto Body Shop</option>
                                            <option value="AutoDealer">Auto Dealer</option>
                                            <option value="AutoPartsStore">Auto Parts Store</option>
                                            <option value="AutoRental">Auto Rental</option>
                                            <option value="AutoRepair">Auto Repair</option>
                                            <option value="AutoWash">Auto Wash</option>
                                            <option value="GasStation">Gas Station</option>
                                            <option value="MotorcycleDealer">Motorcycle Dealer</option>
                                            <option value="MotorcycleRepair">Motorcycle Repair</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Emergency">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Emergency">Specific Type</label>
                                        <select id="business_type-Emergency">
                                            <option value="EmergencyService" selected>Emergency Service</option>
                                            <option value="FireStation">Fire Station</option>
                                            <option value="Hospital">Hospital</option>
                                            <option value="PoliceStation">Police Station</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Entertainment">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Entertainment">Specific Type</label>
                                        <select id="business_type-Entertainment">
                                            <option value="EntertainmentBusiness" selected>Entertainment Business</option>
                                            <option value="AdultEntertainment">Adult Entertainment</option>
                                            <option value="AmusementPark">Amusement Park</option>
                                            <option value="Art Gallery">Art Gallery</option>
                                            <option value="Casino">Casino</option>
                                            <option value="ComedyClub">Comedy Club</option>
                                            <option value="MovieTheater">Movie Theater</option>
                                            <option value="NightClub">Night Club</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Financial">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Financial">Specific Type</label>
                                        <select id="business_type-Financial">
                                            <option value="FinancialService" selected>Financial Service</option>
                                            <option value="AccountingService">Accounting Service</option>
                                            <option value="AutomatedTeller">Automated Teller</option>
                                            <option value="BankOrCreditUnion">Bank Or Credit Union</option>
                                            <option value="InsuranceAgency">Insurance Agency</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Food">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Food">Specific Type</label>
                                        <select id="business_type-Food">
                                            <option value="FoodEstablishment" selected>Food Establishment</option>
                                            <option value="Bakery">Bakery</option>
                                            <option value="BarOrPub">Bar Or Pub</option>
                                            <option value="Brewery">Brewery</option>
                                            <option value="CafeOrCoffeeShop">Cafe Or Coffee Shop</option>
                                            <option value="Distillery">Distillery</option>
                                            <option value="FastFoodRestaurant">Fast Food Restaurant</option>
                                            <option value="IceCreamShop">Ice Cream Shop</option>
                                            <option value="Restaurant">Restaurant</option>
                                            <option value="Winery">Winery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Governement">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Governement">Specific Type</label>
                                        <select id="business_type-Governement">
                                            <option value="GovernmentOffice" selected>Government Office</option>
                                            <option value="PostOffice">Post Office</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Health">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Health">Specific Type</label>
                                        <select id="business_type-Health">
                                            <option value="HealthAndBeautyBusiness" selected>Health And Beauty Business</option>
                                            <option value="BeautySalon">Beauty Salon</option>
                                            <option value="DaySpa">Day Spa</option>
                                            <option value="HairSalon">Hair Salon</option>
                                            <option value="HealthClub">Health Club</option>
                                            <option value="NailSalon">Nail Salon</option>
                                            <option value="TattooParlor">Tattoo Parlor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Construction">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Construction">Specific Type</label>
                                        <select id="business_type-Construction">
                                            <option value="HomeAndConstructionBusiness" selected>Home And Construction Business</option>
                                            <option value="Electrician">Electrician</option>
                                            <option value="GeneralContractor">General Contractor</option>
                                            <option value="HVACBusiness">HVAC Business</option>
                                            <option value="HousePainter">House Painter</option>
                                            <option value="Locksmith">Locksmith</option>
                                            <option value="MovingCompany">Moving Company</option>
                                            <option value="Plumber">Plumber</option>
                                            <option value="RoofingContractor">Roofing Contractor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Legal">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Legal">Specific Type</label>
                                        <select id="business_type-Legal">
                                            <option value="LegalService" selected>Legal Service</option>
                                            <option value="Attorney">Attorney</option>
                                            <option value="Notary">Notary</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Lodging">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Lodging">Specific Type</label>
                                        <select id="business_type-Lodging">
                                            <option value="LodgingBusiness" selected>Lodging Business</option>
                                            <option value="BedAndBreakfast">Bed And Breakfast</option>
                                            <option value="Campground">Campground</option>
                                            <option value="Hostel">Hostel</option>
                                            <option value="Hotel">Hotel</option>
                                            <option value="Motel">Motel</option>
                                            <option value="Resort">Resort</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Medical">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Medical">Specific Type</label>
                                        <select id="business_type-Medical">
                                            <option value="MedicalBusiness" selected>Medical Business</option>
                                            <option value="CommunityHealth">Community Health</option>
                                            <option value="Dermatology">Dermatology</option>
                                            <option value="DietNutrition">Diet Nutrition</option>
                                            <option value="Emergency">Emergency</option>
                                            <option value="Geriatric">Geriatric</option>
                                            <option value="Gynecologic">Gynecologic</option>
                                            <option value="MedicalClinic">Medical Clinic</option>
                                            <option value="CovidTestingFacility">Covid Testing Facility</option>
                                            <option value="Midwifery">Midwifery</option>
                                            <option value="Nursing">Nursing</option>
                                            <option value="Obstetric">Obstetric</option>
                                            <option value="Oncologic">Oncologic</option>
                                            <option value="Optician">Optician</option>
                                            <option value="Optometric">Optometric</option>
                                            <option value="Otolaryngologic">Otolaryngologic</option>
                                            <option value="Pediatric">Pediatric</option>
                                            <option value="Pharmacy">Pharmacy</option>
                                            <option value="Physician">Physician</option>
                                            <option value="Physiotherapy">Physiotherapy</option>
                                            <option value="PlasticSurgery">Plastic Surgery</option>
                                            <option value="Podiatric">Podiatric</option>
                                            <option value="PrimaryCare">Primary Care</option>
                                            <option value="Psychiatric">Psychiatric</option>
                                            <option value="PublicHealth">Public Health</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Sports">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Sports">Specific Type</label>
                                        <select id="business_type-Sports">
                                            <option value="SportsActivityLocation" selected>Sports Activity Location</option>
                                            <option value="BowlingAlley">BowlingAlley</option>
                                            <option value="ExerciseGym">Exercise Gym</option>
                                            <option value="GolfCourse">Golf Course</option>
                                            <option value="PublicSwimmingPool">Public Swimming Pool</option>
                                            <option value="SkiResort">Ski Resort</option>
                                            <option value="SportsClub">Sports Club</option>
                                            <option value="StadiumOrArena">Stadium Or Arena</option>
                                            <option value="TennisComplex">Tennis Complex</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_type" data-linked-value="Store">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_type-Store">Specific Type</label>
                                        <select id="business_type-Store">
                                            <option value="Store" selected>Store</option>
                                            <option value="BikeStore">Bike Store</option>
                                            <option value="BookStore">Book Store</option>
                                            <option value="ClothingStore">Clothing Store</option>
                                            <option value="ComputerStore">Computer Store</option>
                                            <option value="ConvenienceStore">Convenience Store</option>
                                            <option value="DepartmentStore">Department Store</option>
                                            <option value="ElectronicsStore">Electronics Store</option>
                                            <option value="Florist">Florist</option>
                                            <option value="FurnitureStore">Furniture Store</option>
                                            <option value="GardenStore">Garden Store</option>
                                            <option value="GroceryStore">Grocery Store</option>
                                            <option value="HardwareStore">Hardware Store</option>
                                            <option value="HobbyShop">Hobby Shop</option>
                                            <option value="HomeGoodsStore">Home Goods Store</option>
                                            <option value="JewelryStore">Jewelry Store</option>
                                            <option value="LiquorStore">Liquor Store</option>
                                            <option value="MensClothingStore">Mens Clothing Store</option>
                                            <option value="MobilePhoneStore">Mobile Phone Store</option>
                                            <option value="MovieRentalStore">Movie Rental Store</option>
                                            <option value="MusicStore">Music Store</option>
                                            <option value="OfficeEquipmentStore">Office Equipment Store</option>
                                            <option value="OutletStore">Outlet Store</option>
                                            <option value="PawnShop">Pawn Shop</option>
                                            <option value="PetStore">Pet Store</option>
                                            <option value="ShoeStore">Shoe Store</option>
                                            <option value="SportingGoodsStore">Sporting Goods Store</option>
                                            <option value="TireShop">Tire Shop</option>
                                            <option value="ToyStore">Toy Store</option>
                                            <option value="WholesaleStore">Wholesale Store</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40 reveal" data-linked-switcher="business_type" data-linked-value="Local Animal Archive ChildCare Dentist Cleaning Employment Cafe Library Professional Radio Estate Recycling Storage Shopping Television Tourist Travel">
                                    <div class="schema_form_field">
                                        <label for="business_type-None">Specific Type</label>
                                        <select id="business_type-None" disabled>
                                            <option selected>Not specified</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="business_name">Name</label>
                                    <input type="text" id="business_name" />
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="business_image_url">Image URL</label>
                                    <input type="url" id="business_image_url" placeholder="http://" />
                                </div>
                                <div class="schema_form_field w-20">
                                    <label for="business_id_url">id (URL)</label>
                                    <input type="url" id="business_id_url" />
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="business_url">URL</label>
                                    <input type="url" id="business_url" placeholder="http://" />
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="business_phone">Phone</label>
                                    <input type="number" id="business_phone" />
                                </div>
                                <div class="schema_form_field w-20">
                                    <label for="business_pricing">Price Range</label>
                                    <input type="text" id="business_pricing" />
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="business_street">Street</label>
                                    <input type="text" id="business_street" />
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="business_street">City</label>
                                    <input type="text" id="business_city" />
                                </div>
                                <div class="schema_form_field w-20">
                                    <label for="business_zipcode">Zipcode</label>
                                    <input type="number" id="business_zipcode" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="business_country">Country</label>
                                    <select id="business_country" class="view_switcher">
                                        <option value="AF" data-linked-value="AF">Afghanistan</option>
                                        <option value="AX" data-linked-value="AX">Aland Islands</option>
                                        <option value="AL" data-linked-value="AL">Albania</option>
                                        <option value="DZ" data-linked-value="DZ">Algeria</option>
                                        <option value="AS" data-linked-value="AS">American Samoa</option>
                                        <option value="AD" data-linked-value="AD">Andorra</option>
                                        <option value="AO" data-linked-value="AO">Angola</option>
                                        <option value="AI" data-linked-value="AI">Anguilla</option>
                                        <option value="AQ" data-linked-value="AQ">Antarctica</option>
                                        <option value="AG" data-linked-value="AG">Antigua and Barbuda</option>
                                        <option value="AR" data-linked-value="AR">Argentina</option>
                                        <option value="AM" data-linked-value="AM">Armenia</option>
                                        <option value="AW" data-linked-value="AW">Aruba</option>
                                        <option value="AU" data-linked-value="AU">Australia</option>
                                        <option value="AT" data-linked-value="AT">Austria</option>
                                        <option value="AZ" data-linked-value="AZ">Azerbaijan</option>
                                        <option value="BS" data-linked-value="BS">Bahamas</option>
                                        <option value="BH" data-linked-value="BH">Bahrain</option>
                                        <option value="BD" data-linked-value="BD">Bangladesh</option>
                                        <option value="BB" data-linked-value="BB">Barbados</option>
                                        <option value="BY" data-linked-value="BY">Belarus</option>
                                        <option value="BE" data-linked-value="BE">Belgium</option>
                                        <option value="BZ" data-linked-value="BZ">Belize</option>
                                        <option value="BJ" data-linked-value="BJ">Benin</option>
                                        <option value="BM" data-linked-value="BM">Bermuda</option>
                                        <option value="BT" data-linked-value="BT">Bhutan</option>
                                        <option value="BO" data-linked-value="BO">Bolivia</option>
                                        <option value="BQ" data-linked-value="BQ">Bonaire, Saint Eustatius and Saba </option>
                                        <option value="BA" data-linked-value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW" data-linked-value="BW">Botswana</option>
                                        <option value="BV" data-linked-value="BV">Bouvet Island</option>
                                        <option value="BR" data-linked-value="BR">Brazil</option>
                                        <option value="IO" data-linked-value="IO">British Indian Ocean Territory</option>
                                        <option value="VG" data-linked-value="VG">British Virgin Islands</option>
                                        <option value="BN" data-linked-value="BN">Brunei</option>
                                        <option value="BG" data-linked-value="BG">Bulgaria</option>
                                        <option value="BF" data-linked-value="BF">Burkina Faso</option>
                                        <option value="BI" data-linked-value="BI">Burundi</option>
                                        <option value="KH" data-linked-value="KH">Cambodia</option>
                                        <option value="CM" data-linked-value="CM">Cameroon</option>
                                        <option value="CA" data-linked-value="CA">Canada</option>
                                        <option value="CV" data-linked-value="CV">Cape Verde</option>
                                        <option value="KY" data-linked-value="KY">Cayman Islands</option>
                                        <option value="CF" data-linked-value="CF">Central African Republic</option>
                                        <option value="TD" data-linked-value="TD">Chad</option>
                                        <option value="CL" data-linked-value="CL">Chile</option>
                                        <option value="CN" data-linked-value="CN">China</option>
                                        <option value="CX" data-linked-value="CX">Christmas Island</option>
                                        <option value="CC" data-linked-value="CC">Cocos Islands</option>
                                        <option value="CO" data-linked-value="CO">Colombia</option>
                                        <option value="KM" data-linked-value="KM">Comoros</option>
                                        <option value="CK" data-linked-value="CK">Cook Islands</option>
                                        <option value="CR" data-linked-value="CR">Costa Rica</option>
                                        <option value="HR" data-linked-value="HR">Croatia</option>
                                        <option value="CU" data-linked-value="CU">Cuba</option>
                                        <option value="CW" data-linked-value="CW">Curacao</option>
                                        <option value="CY" data-linked-value="CY">Cyprus</option>
                                        <option value="CZ" data-linked-value="CZ">Czech Republic</option>
                                        <option value="CD" data-linked-value="CD">Democratic Republic of the Congo</option>
                                        <option value="DK" data-linked-value="DK">Denmark</option>
                                        <option value="DJ" data-linked-value="DJ">Djibouti</option>
                                        <option value="DM" data-linked-value="DM">Dominica</option>
                                        <option value="DO" data-linked-value="DO">Dominican Republic</option>
                                        <option value="TL" data-linked-value="TL">East Timor</option>
                                        <option value="EC" data-linked-value="EC">Ecuador</option>
                                        <option value="EG" data-linked-value="EG">Egypt</option>
                                        <option value="SV" data-linked-value="SV">El Salvador</option>
                                        <option value="GQ" data-linked-value="GQ">Equatorial Guinea</option>
                                        <option value="ER" data-linked-value="ER">Eritrea</option>
                                        <option value="EE" data-linked-value="EE">Estonia</option>
                                        <option value="ET" data-linked-value="ET">Ethiopia</option>
                                        <option value="FK" data-linked-value="FK">Falkland Islands</option>
                                        <option value="FO" data-linked-value="FO">Faroe Islands</option>
                                        <option value="FJ" data-linked-value="FJ">Fiji</option>
                                        <option value="FI" data-linked-value="FI">Finland</option>
                                        <option value="FR" data-linked-value="FR">France</option>
                                        <option value="GF" data-linked-value="GF">French Guiana</option>
                                        <option value="PF" data-linked-value="PF">French Polynesia</option>
                                        <option value="TF" data-linked-value="TF">French Southern Territories</option>
                                        <option value="GA" data-linked-value="GA">Gabon</option>
                                        <option value="GM" data-linked-value="GM">Gambia</option>
                                        <option value="GE" data-linked-value="GE">Georgia</option>
                                        <option value="DE" data-linked-value="DE">Germany</option>
                                        <option value="GH" data-linked-value="GH">Ghana</option>
                                        <option value="GI" data-linked-value="GI">Gibraltar</option>
                                        <option value="GR" data-linked-value="GR">Greece</option>
                                        <option value="GL" data-linked-value="GL">Greenland</option>
                                        <option value="GD" data-linked-value="GD">Grenada</option>
                                        <option value="GP" data-linked-value="GP">Guadeloupe</option>
                                        <option value="GU" data-linked-value="GU">Guam</option>
                                        <option value="GT" data-linked-value="GT">Guatemala</option>
                                        <option value="GG" data-linked-value="GG">Guernsey</option>
                                        <option value="GN" data-linked-value="GN">Guinea</option>
                                        <option value="GW" data-linked-value="GW">Guinea-Bissau</option>
                                        <option value="GY" data-linked-value="GY">Guyana</option>
                                        <option value="HT" data-linked-value="HT">Haiti</option>
                                        <option value="HM" data-linked-value="HM">Heard Island and McDonald Islands</option>
                                        <option value="HN" data-linked-value="HN">Honduras</option>
                                        <option value="HK" data-linked-value="HK" selected>Hong Kong</option>
                                        <option value="HU" data-linked-value="HU">Hungary</option>
                                        <option value="IS" data-linked-value="IS">Iceland</option>
                                        <option value="IN" data-linked-value="IN">India</option>
                                        <option value="ID" data-linked-value="ID">Indonesia</option>
                                        <option value="IR" data-linked-value="IR">Iran</option>
                                        <option value="IQ" data-linked-value="IQ">Iraq</option>
                                        <option value="IE" data-linked-value="IE">Ireland</option>
                                        <option value="IM" data-linked-value="IM">Isle of Man</option>
                                        <option value="IL" data-linked-value="IL">Israel</option>
                                        <option value="IT" data-linked-value="IT">Italy</option>
                                        <option value="CI" data-linked-value="CI">Ivory Coast</option>
                                        <option value="JM" data-linked-value="JM">Jamaica</option>
                                        <option value="JP" data-linked-value="JP">Japan</option>
                                        <option value="JE" data-linked-value="JE">Jersey</option>
                                        <option value="JO" data-linked-value="JO">Jordan</option>
                                        <option value="KZ" data-linked-value="KZ">Kazakhstan</option>
                                        <option value="KE" data-linked-value="KE">Kenya</option>
                                        <option value="KI" data-linked-value="KI">Kiribati</option>
                                        <option value="XK" data-linked-value="XK">Kosovo</option>
                                        <option value="KW" data-linked-value="KW">Kuwait</option>
                                        <option value="KG" data-linked-value="KG">Kyrgyzstan</option>
                                        <option value="LA" data-linked-value="LA">Laos</option>
                                        <option value="LV" data-linked-value="LV">Latvia</option>
                                        <option value="LB" data-linked-value="LB">Lebanon</option>
                                        <option value="LS" data-linked-value="LS">Lesotho</option>
                                        <option value="LR" data-linked-value="LR">Liberia</option>
                                        <option value="LY" data-linked-value="LY">Libya</option>
                                        <option value="LI" data-linked-value="LI">Liechtenstein</option>
                                        <option value="LT" data-linked-value="LT">Lithuania</option>
                                        <option value="LU" data-linked-value="LU">Luxembourg</option>
                                        <option value="MO" data-linked-value="MO">Macao</option>
                                        <option value="MK" data-linked-value="MK">Macedonia</option>
                                        <option value="MG" data-linked-value="MG">Madagascar</option>
                                        <option value="MW" data-linked-value="MW">Malawi</option>
                                        <option value="MY" data-linked-value="MY">Malaysia</option>
                                        <option value="MV" data-linked-value="MV">Maldives</option>
                                        <option value="ML" data-linked-value="ML">Mali</option>
                                        <option value="MT" data-linked-value="MT">Malta</option>
                                        <option value="MH" data-linked-value="MH">Marshall Islands</option>
                                        <option value="MQ" data-linked-value="MQ">Martinique</option>
                                        <option value="MR" data-linked-value="MR">Mauritania</option>
                                        <option value="MU" data-linked-value="MU">Mauritius</option>
                                        <option value="YT" data-linked-value="YT">Mayotte</option>
                                        <option value="MX" data-linked-value="MX">Mexico</option>
                                        <option value="FM" data-linked-value="FM">Micronesia</option>
                                        <option value="MD" data-linked-value="MD">Moldova</option>
                                        <option value="MC" data-linked-value="MC">Monaco</option>
                                        <option value="MN" data-linked-value="MN">Mongolia</option>
                                        <option value="ME" data-linked-value="ME">Montenegro</option>
                                        <option value="MS" data-linked-value="MS">Montserrat</option>
                                        <option value="MA" data-linked-value="MA">Morocco</option>
                                        <option value="MZ" data-linked-value="MZ">Mozambique</option>
                                        <option value="MM" data-linked-value="MM">Myanmar</option>
                                        <option value="NA" data-linked-value="NA">Namibia</option>
                                        <option value="NR" data-linked-value="NR">Nauru</option>
                                        <option value="NP" data-linked-value="NP">Nepal</option>
                                        <option value="NL" data-linked-value="NL">Netherlands</option>
                                        <option value="NC" data-linked-value="NC">New Caledonia</option>
                                        <option value="NZ" data-linked-value="NZ">New Zealand</option>
                                        <option value="NI" data-linked-value="NI">Nicaragua</option>
                                        <option value="NE" data-linked-value="NE">Niger</option>
                                        <option value="NG" data-linked-value="NG">Nigeria</option>
                                        <option value="NU" data-linked-value="NU">Niue</option>
                                        <option value="NF" data-linked-value="NF">Norfolk Island</option>
                                        <option value="KP" data-linked-value="KP">North Korea</option>
                                        <option value="MP" data-linked-value="MP">Northern Mariana Islands</option>
                                        <option value="NO" data-linked-value="NO">Norway</option>
                                        <option value="OM" data-linked-value="OM">Oman</option>
                                        <option value="PK" data-linked-value="PK">Pakistan</option>
                                        <option value="PW" data-linked-value="PW">Palau</option>
                                        <option value="PS" data-linked-value="PS">Palestinian Territory</option>
                                        <option value="PA" data-linked-value="PA">Panama</option>
                                        <option value="PG" data-linked-value="PG">Papua New Guinea</option>
                                        <option value="PY" data-linked-value="PY">Paraguay</option>
                                        <option value="PE" data-linked-value="PE">Peru</option>
                                        <option value="PH" data-linked-value="PH">Philippines</option>
                                        <option value="PN" data-linked-value="PN">Pitcairn</option>
                                        <option value="PL" data-linked-value="PL">Poland</option>
                                        <option value="PT" data-linked-value="PT">Portugal</option>
                                        <option value="PR" data-linked-value="PR">Puerto Rico</option>
                                        <option value="QA" data-linked-value="QA">Qatar</option>
                                        <option value="CG" data-linked-value="CG">Republic of the Congo</option>
                                        <option value="RE" data-linked-value="RE">Reunion</option>
                                        <option value="RO" data-linked-value="RO">Romania</option>
                                        <option value="RU" data-linked-value="RU">Russia</option>
                                        <option value="RW" data-linked-value="RW">Rwanda</option>
                                        <option value="BL" data-linked-value="BL">Saint Barthelemy</option>
                                        <option value="SH" data-linked-value="SH">Saint Helena</option>
                                        <option value="KN" data-linked-value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC" data-linked-value="LC">Saint Lucia</option>
                                        <option value="MF" data-linked-value="MF">Saint Martin</option>
                                        <option value="PM" data-linked-value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC" data-linked-value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS" data-linked-value="WS">Samoa</option>
                                        <option value="SM" data-linked-value="SM">San Marino</option>
                                        <option value="ST" data-linked-value="ST">Sao Tome and Principe</option>
                                        <option value="SA" data-linked-value="SA">Saudi Arabia</option>
                                        <option value="SN" data-linked-value="SN">Senegal</option>
                                        <option value="RS" data-linked-value="RS">Serbia</option>
                                        <option value="SC" data-linked-value="SC">Seychelles</option>
                                        <option value="SL" data-linked-value="SL">Sierra Leone</option>
                                        <option value="SG" data-linked-value="SG">Singapore</option>
                                        <option value="SX" data-linked-value="SX">Sint Maarten</option>
                                        <option value="SK" data-linked-value="SK">Slovakia</option>
                                        <option value="SI" data-linked-value="SI">Slovenia</option>
                                        <option value="SB" data-linked-value="SB">Solomon Islands</option>
                                        <option value="SO" data-linked-value="SO">Somalia</option>
                                        <option value="ZA" data-linked-value="ZA">South Africa</option>
                                        <option value="GS" data-linked-value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="KR" data-linked-value="KR">South Korea</option>
                                        <option value="SS" data-linked-value="SS">South Sudan</option>
                                        <option value="ES" data-linked-value="ES">Spain</option>
                                        <option value="LK" data-linked-value="LK">Sri Lanka</option>
                                        <option value="SD" data-linked-value="SD">Sudan</option>
                                        <option value="SR" data-linked-value="SR">Suriname</option>
                                        <option value="SJ" data-linked-value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ" data-linked-value="SZ">Swaziland</option>
                                        <option value="SE" data-linked-value="SE">Sweden</option>
                                        <option value="CH" data-linked-value="CH">Switzerland</option>
                                        <option value="SY" data-linked-value="SY">Syria</option>
                                        <option value="TW" data-linked-value="TW">Taiwan</option>
                                        <option value="TJ" data-linked-value="TJ">Tajikistan</option>
                                        <option value="TZ" data-linked-value="TZ">Tanzania</option>
                                        <option value="TH" data-linked-value="TH">Thailand</option>
                                        <option value="TG" data-linked-value="TG">Togo</option>
                                        <option value="TK" data-linked-value="TK">Tokelau</option>
                                        <option value="TO" data-linked-value="TO">Tonga</option>
                                        <option value="TT" data-linked-value="TT">Trinidad and Tobago</option>
                                        <option value="TN" data-linked-value="TN">Tunisia</option>
                                        <option value="TR" data-linked-value="TR">Turkey</option>
                                        <option value="TM" data-linked-value="TM">Turkmenistan</option>
                                        <option value="TC" data-linked-value="TC">Turks and Caicos Islands</option>
                                        <option value="TV" data-linked-value="TV">Tuvalu</option>
                                        <option value="VI" data-linked-value="VI">U.S. Virgin Islands</option>
                                        <option value="UG" data-linked-value="UG">Uganda</option>
                                        <option value="UA" data-linked-value="UA">Ukraine</option>
                                        <option value="AE" data-linked-value="AE">United Arab Emirates</option>
                                        <option value="GB" data-linked-value="GB">United Kingdom</option>
                                        <option value="US" data-linked-value="US">United States</option>
                                        <option value="UM" data-linked-value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY" data-linked-value="UY">Uruguay</option>
                                        <option value="UZ" data-linked-value="UZ">Uzbekistan</option>
                                        <option value="VU" data-linked-value="VU">Vanuatu</option>
                                        <option value="VA" data-linked-value="VA">Vatican</option>
                                        <option value="VE" data-linked-value="VE">Venezuela</option>
                                        <option value="VN" data-linked-value="VN">Vietnam</option>
                                        <option value="WF" data-linked-value="WF">Wallis and Futuna</option>
                                        <option value="EH" data-linked-value="EH">Western Sahara</option>
                                        <option value="YE" data-linked-value="YE">Yemen</option>
                                        <option value="ZM" data-linked-value="ZM">Zambia</option>
                                        <option value="ZW" data-linked-value="ZW">Zimbabwe</option>
                                        <option value="002" data-linked-value="002">Africa</option>
                                        <option value="015" data-linked-value="015">Northern Africa</option>
                                        <option value="419" data-linked-value="419">Latin America</option>
                                        <option value="142" data-linked-value="142">Asia</option>
                                        <option value="143" data-linked-value="143">Central Asia</option>
                                        <option value="030" data-linked-value="030">Eastern Asia</option>
                                        <option value="035" data-linked-value="035">South-eastern Asia</option>
                                        <option value="034" data-linked-value="034">Southern Asia</option>
                                        <option value="145" data-linked-value="145">Western Asia</option>
                                        <option value="150" data-linked-value="150">Europe</option>
                                        <option value="151" data-linked-value="151">Eastern Europe</option>
                                        <option value="154" data-linked-value="154">Northern Europe</option>
                                        <option value="039" data-linked-value="039">Southern Europe</option>
                                    </select>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_country" data-linked-value="US">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_state-US">State</label>
                                        <select id="business_state-US">
                                            <option>Not Specified</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="GU">Guam</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_country" data-linked-value="CA">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_state-CA">Province Or Territory</label>
                                        <select id="business_state-CA">
                                            <option>Not Specified</option>
                                            <option value="AB">Alberta</option>
                                            <option value="AB">Alberta</option>
                                            <option value="BC">British Columbia</option>
                                            <option value="BC">Colombie-Britannique</option>
                                            <option value="MB">Manitoba</option>
                                            <option value="MB">Manitoba</option>
                                            <option value="NB">New Brunswick</option>
                                            <option value="NL">Newfoundland and Labrador</option>
                                            <option value="NT">Northwest Territories</option>
                                            <option value="NB">Nouveau-Brunswick</option>
                                            <option value="NS">Nouvelle-Écosse</option>
                                            <option value="NS">Nova Scotia</option>
                                            <option value="NU">Nunavut</option>
                                            <option value="NU">Nunavut</option>
                                            <option value="ON">Ontario</option>
                                            <option value="ON">Ontario</option>
                                            <option value="PE">Prince Edward Island</option>
                                            <option value="QC">Quebec</option>
                                            <option value="QC">Québec</option>
                                            <option value="SK">Saskatchewan</option>
                                            <option value="SK">Saskatchewan</option>
                                            <option value="NL">Terre-Neuve-et-Labrador</option>
                                            <option value="NT">Territoires du Nord-Ouest</option>
                                            <option value="YT">Yukon</option>
                                            <option value="YT">Yukon</option>
                                            <option value="PE">Île-du-Prince-Édouard</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40" data-linked-switcher="business_country" data-linked-value="AU">
                                    <div class="schema_form_field hidden_field">
                                        <label for="business_state-AU">State Or Territory</label>
                                        <select id="business_state-AU">
                                            <option>Not Specified</option>
                                            <option value="NSW">New South Wales</option>
                                            <option value="QLD">Queensland</option>
                                            <option value="SA">South Australia</option>
                                            <option value="TAS">Tasmania</option>
                                            <option value="VIC">Victoria</option>
                                            <option value="WA">Western Australia</option>
                                            <option value="ACT">Australian Capital Territory</option>
                                            <option value="NT">Northern Territory</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view w-40 reveal" data-linked-switcher="business_country" data-linked-value="AF AL DZ AS AD AO AI AQ AG AR AM AW  AT AZ BS BH BD BB BY BE BZ BJ BM BT BO BQ BA BW BV BR IO BN BG BF BI CV KH CM  KY CF TD CL CN CX CC CO KM CD CG CK CR HR CU CW CY CZ CI DK DJ DM DO EC EG SV GQ ER EE SZ ET FK FO FJ FI FR GF PF TF GA GM GE DE GH GI GR GL GD GP GU GT GG GN GW GY HT HM VA HN HK HU IS IN ID IR IQ IE IM IL IT JM JP JE JO KZ KE KI KP KR KW KG LA LV LB LS LR LY LI LT LU MO MG MW MY MV ML MT MH MQ MR MU YT MX FM MD MC MN ME MS MA MZ MM NA NR NP NL NC NZ NI NE NG NU NF MP NO OM PK PW PS PA PG PY PE PH PN PL PT PR QA MK RO RU RW RE BL SH KN LC MF PM VC WS SM ST SA SN RS SC SL SG SX SK SI SB SO ZA GS SS ES LK SD SR SJ SE CH SY TW TJ TZ TH TL TG TK TO TT TN TR TM TC TV UG UA AE  UM  UY UZ VU VE VN VG VI WF EH YE ZM ZW AX 002 015 419 142 143 030 035 034 145 150 151 154 039">
                                    <div class="schema_form_field">
                                        <label for="business_state-XX">State (ALPHA-2)</label>
                                        <input type="text" id="business_state-XX" maxlength="2" />
                                    </div>
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="business_socials">Social Profiles</label>
                                    <div class="multiselect">
                                        <div class="multiselect_input_wrapper">
                                            <input disabled id="business_socials" class="multiselect_input" />
                                        </div>
                                        <div class="checkboxes">
                                            <label for="business_socials_fb"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_facebook" id="business_socials_fb" />Facebook</label>
                                            <label for="business_socials_tw"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_twitter" id="business_socials_tw" />Twitter</label>
                                            <label for="business_socials_ig"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_instagram" id="business_socials_ig" />Instagram</label>
                                            <label for="business_socials_yt"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_youtube" id="business_socials_yt" />YouTube</label>
                                            <label for="business_socials_li"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_linkedin" id="business_socials_li" />LinkedIn</label>
                                            <label for="business_socials_pn"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_pinterest" id="business_socials_pn" />Pinterest</label>
                                            <label for="business_socials_sc"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_soundcloud" id="business_socials_sc" />SoundCloud</label>
                                            <label for="business_socials_tb"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_tumblr" id="business_socials_tb" />Tumblr</label>
                                            <label for="business_socials_wk"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_wikipedia" id="business_socials_wk" />Wikipedia</label>
                                            <label for="business_socials_gh"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_github" id="business_socials_gh" />Github</label>
                                            <label for="business_socials_wb"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="business_website" id="business_socials_wb" />Website</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden_field_container wrap">
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_facebook">Facebook</label>
                                        <input type="text" id="business_facebook" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_twitter">Twitter</label>
                                        <input type="text" id="business_twitter" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_instagram">Instagram</label>
                                        <input type="text" id="business_instagram" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_youtube">YouTube</label>
                                        <input type="text" id="business_youtube" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_linkedin">LinkedIn</label>
                                        <input type="text" id="business_linkedin" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_pinterest">Pinterest</label>
                                        <input type="text" id="business_pinterest" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_soundcloud">SoundCloud</label>
                                        <input type="text" id="business_soundcloud" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_tumblr">Tumblr</label>
                                        <input type="text" id="business_tumblr" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_wikipedia">Wikipedia</label>
                                        <input type="text" id="business_wikipedia" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_github">Github</label>
                                        <input type="text" id="business_github" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="business_website">Website</label>
                                        <input type="text" id="business_website" />
                                    </div>
                                </div>
                                <div class="schema_form_field">
                                    <label for="business_open247"><input type="checkbox" id="business_open247" class="disabler" data-disable-target="add-opening-hours" />Open 24/7</label>
                                </div>
                                <div class="schema_form_repeater hidden_field_container" data-repeater-name="business_hours" data-child-count="0">
                                    <div class="to-clone no-border">
                                        <div class="schema_form_field hidden_field minimal">
                                            <label class="keep-in-clone">Day(s) Of The Week</label>
                                            <label class="keep-in-clone"><input type="checkbox" id="opening_hours_monday_0" class="opening_days" value="Monday" />Monday</label>
                                            <label class="keep-in-clone"><input type="checkbox" id="opening_hours_tuesday_0" class="opening_days" value="Tuesday" />Tuesday</label>
                                            <label class="keep-in-clone"><input type="checkbox" id="opening_hours_wednesday_0" class="opening_days" value="Wednesday" />Wednesday</label>
                                            <label class="keep-in-clone"><input type="checkbox" id="opening_hours_thursday_0" class="opening_days" value="Thursday" />Thursday</label>
                                            <label class="keep-in-clone"><input type="checkbox" id="opening_hours_friday_0" class="opening_days" value="Friday" />Friday</label>
                                            <label class="keep-in-clone"><input type="checkbox" id="opening_hours_saturday_0" class="opening_days" value="Saturday" />Saturday</label>
                                            <label class="keep-in-clone"><input type="checkbox" id="opening_hours_sunday_0" class="opening_days" value="Sunday" />Sunday</label>
                                        </div>
                                        <div class="schema_form_field hidden_field w-30">
                                            <label for="opening_hour_1" class="keep-in-clone">Open</label>
                                            <input type="time" id="opening_hour_0" class="opening_hour" />
                                        </div>
                                        <div class="schema_form_field hidden_field w-30">
                                            <label for="closing_hour_1" class="keep-in-clone">Close</label>
                                            <input type="time" id="closing_hour_0" class="closing_hour" />
                                        </div>
                                    </div>
                                </div>
                                <a class="field-repeater-button" data-repeater="business_hours" id="add-opening-hours">ADD OPENING HOURS</a>
                            </fieldset>
                            <ul class="references">
                                <li>Schema.org's reference(s)
                                    <ul>
                                        <li><a href="https://schema.org/LocalBusiness">LocalBusiness</a></li>
                                    </ul>
                                </li>
                                <li>Google's reference(s)
                                    <ul>
                                        <li><a href="https://developers.google.com/search/docs/appearance/structured-data/local-business">Local business</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="HowTo" class="form-tab">
                            <fieldset>
                                <div class="field-group w-40 no-border mt-0">
                                    <div class="schema_form_field">
                                        <label for="howto_name">Name</label>
                                        <input type="text" id="howto_name" />
                                    </div>
                                    <div class="schema_form_field">
                                        <label for="howto_image_url">Image URL</label>
                                        <input type="url" id="howto_image_url" placeholder="http://" />
                                    </div>
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="howto_description">Description</label>
                                    <textarea id="howto_description"></textarea>
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="howto_time">Total Time</label>
                                    <input type="number" id="howto_time" />
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="howto_cost">Estimated Cost</label>
                                    <input type="number" id="howto_cost" />
                                </div>
                                <div class="schema_form_field w-30">
                                    <label for="howto_currency">Currency</label>
                                    <select id="howto_currency">
                                        <option value="USD">United States Dollar</option>
                                        <option value="GBP">British Pound Sterling</option>
                                        <option value="CAD">Canadian Dollar</option>
                                        <option value="EUR">Euro</option>
                                        <option value="AED">United Arab Emirates Dirham</option>
                                        <option value="AFN">Afghan Afghani</option>
                                        <option value="ALL">Albanian Lek</option>
                                        <option value="AMD">Armenian Dram</option>
                                        <option value="ANG">Netherlands Antillean Guilder</option>
                                        <option value="AOA">Angolan Kwanza</option>
                                        <option value="ARS">Argentine Peso</option>
                                        <option value="AUD">Australian Dollar</option>
                                        <option value="AWG">Aruban Florin</option>
                                        <option value="AZN">Azerbaijani Manat</option>
                                        <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                                        <option value="BBD">Barbadian Dollar</option>
                                        <option value="BDT">Bangladeshi Taka</option>
                                        <option value="BGN">Bulgarian Lev</option>
                                        <option value="BHD">Bahraini Dinar</option>
                                        <option value="BIF">Burundian Franc</option>
                                        <option value="BMD">Bermudan Dollar</option>
                                        <option value="BND">Brunei Dollar</option>
                                        <option value="BOB">Bolivian Boliviano</option>
                                        <option value="BRL">Brazilian Real</option>
                                        <option value="BSD">Bahamian Dollar</option>
                                        <option value="BTC">Bitcoin</option>
                                        <option value="BTN">Bhutanese Ngultrum</option>
                                        <option value="BWP">Botswanan Pula</option>
                                        <option value="BYN">Belarusian Ruble</option>
                                        <option value="BZD">Belize Dollar</option>
                                        <option value="CDF">Congolese Franc</option>
                                        <option value="CHF">Swiss Franc</option>
                                        <option value="CLF">Chilean Unit of Account (UF)</option>
                                        <option value="CLP">Chilean Peso</option>
                                        <option value="CNH">Chinese Yuan (Offshore)</option>
                                        <option value="CNY">Chinese Yuan</option>
                                        <option value="COP">Colombian Peso</option>
                                        <option value="CRC">Costa Rican Colón</option>
                                        <option value="CUC">Cuban Convertible Peso</option>
                                        <option value="CUP">Cuban Peso</option>
                                        <option value="CVE">Cape Verdean Escudo</option>
                                        <option value="CZK">Czech Republic Koruna</option>
                                        <option value="DJF">Djiboutian Franc</option>
                                        <option value="DKK">Danish Krone</option>
                                        <option value="DOP">Dominican Peso</option>
                                        <option value="DZD">Algerian Dinar</option>
                                        <option value="EGP">Egyptian Pound</option>
                                        <option value="ERN">Eritrean Nakfa</option>
                                        <option value="ETB">Ethiopian Birr</option>
                                        <option value="FJD">Fijian Dollar</option>
                                        <option value="FKP">Falkland Islands Pound</option>
                                        <option value="GEL">Georgian Lari</option>
                                        <option value="GGP">Guernsey Pound</option>
                                        <option value="GHS">Ghanaian Cedi</option>
                                        <option value="GIP">Gibraltar Pound</option>
                                        <option value="GMD">Gambian Dalasi</option>
                                        <option value="GNF">Guinean Franc</option>
                                        <option value="GTQ">Guatemalan Quetzal</option>
                                        <option value="GYD">Guyanaese Dollar</option>
                                        <option value="HKD" selected>Hong Kong Dollar</option>
                                        <option value="HNL">Honduran Lempira</option>
                                        <option value="HRK">Croatian Kuna</option>
                                        <option value="HTG">Haitian Gourde</option>
                                        <option value="HUF">Hungarian Forint</option>
                                        <option value="IDR">Indonesian Rupiah</option>
                                        <option value="ILS">Israeli New Sheqel</option>
                                        <option value="IMP">Manx pound</option>
                                        <option value="INR">Indian Rupee</option>
                                        <option value="IQD">Iraqi Dinar</option>
                                        <option value="IRR">Iranian Rial</option>
                                        <option value="ISK">Icelandic Króna</option>
                                        <option value="JEP">Jersey Pound</option>
                                        <option value="JMD">Jamaican Dollar</option>
                                        <option value="JOD">Jordanian Dinar</option>
                                        <option value="JPY">Japanese Yen</option>
                                        <option value="KES">Kenyan Shilling</option>
                                        <option value="KGS">Kyrgystani Som</option>
                                        <option value="KHR">Cambodian Riel</option>
                                        <option value="KMF">Comorian Franc</option>
                                        <option value="KPW">North Korean Won</option>
                                        <option value="KRW">South Korean Won</option>
                                        <option value="KWD">Kuwaiti Dinar</option>
                                        <option value="KYD">Cayman Islands Dollar</option>
                                        <option value="KZT">Kazakhstani Tenge</option>
                                        <option value="LAK">Laotian Kip</option>
                                        <option value="LBP">Lebanese Pound</option>
                                        <option value="LKR">Sri Lankan Rupee</option>
                                        <option value="LRD">Liberian Dollar</option>
                                        <option value="LSL">Lesotho Loti</option>
                                        <option value="LYD">Libyan Dinar</option>
                                        <option value="MAD">Moroccan Dirham</option>
                                        <option value="MDL">Moldovan Leu</option>
                                        <option value="MGA">Malagasy Ariary</option>
                                        <option value="MKD">Macedonian Denar</option>
                                        <option value="MMK">Myanma Kyat</option>
                                        <option value="MNT">Mongolian Tugrik</option>
                                        <option value="MOP">Macanese Pataca</option>
                                        <option value="MRO">Mauritanian Ouguiya</option>
                                        <option value="MUR">Mauritian Rupee</option>
                                        <option value="MVR">Maldivian Rufiyaa</option>
                                        <option value="MWK">Malawian Kwacha</option>
                                        <option value="MXN">Mexican Peso</option>
                                        <option value="MYR">Malaysian Ringgit</option>
                                        <option value="MZN">Mozambican Metical</option>
                                        <option value="NAD">Namibian Dollar</option>
                                        <option value="NGN">Nigerian Naira</option>
                                        <option value="NIO">Nicaraguan Córdoba</option>
                                        <option value="NOK">Norwegian Krone</option>
                                        <option value="NPR">Nepalese Rupee</option>
                                        <option value="NZD">New Zealand Dollar</option>
                                        <option value="OMR">Omani Rial</option>
                                        <option value="PAB">Panamanian Balboa</option>
                                        <option value="PEN">Peruvian Nuevo Sol</option>
                                        <option value="PGK">Papua New Guinean Kina</option>
                                        <option value="PHP">Philippine Peso</option>
                                        <option value="PKR">Pakistani Rupee</option>
                                        <option value="PLN">Polish Zloty</option>
                                        <option value="PYG">Paraguayan Guarani</option>
                                        <option value="QAR">Qatari Rial</option>
                                        <option value="RON">Romanian Leu</option>
                                        <option value="RSD">Serbian Dinar</option>
                                        <option value="RUB">Russian Ruble</option>
                                        <option value="RWF">Rwandan Franc</option>
                                        <option value="SAR">Saudi Riyal</option>
                                        <option value="SBD">Solomon Islands Dollar</option>
                                        <option value="SCR">Seychellois Rupee</option>
                                        <option value="SDG">Sudanese Pound</option>
                                        <option value="SEK">Swedish Krona</option>
                                        <option value="SGD">Singapore Dollar</option>
                                        <option value="SHP">Saint Helena Pound</option>
                                        <option value="SLL">Sierra Leonean Leone</option>
                                        <option value="SOS">Somali Shilling</option>
                                        <option value="SRD">Surinamese Dollar</option>
                                        <option value="SSP">South Sudanese Pound</option>
                                        <option value="STD">São Tomé and Príncipe Dobra</option>
                                        <option value="SVC">Salvadoran Colón</option>
                                        <option value="SYP">Syrian Pound</option>
                                        <option value="SZL">Swazi Lilangeni</option>
                                        <option value="THB">Thai Baht</option>
                                        <option value="TJS">Tajikistani Somoni</option>
                                        <option value="TMT">Turkmenistani Manat</option>
                                        <option value="TND">Tunisian Dinar</option>
                                        <option value="TOP">Tongan Pa'anga</option>
                                        <option value="TRY">Turkish Lira</option>
                                        <option value="TTD">Trinidad and Tobago Dollar</option>
                                        <option value="TWD">New Taiwan Dollar</option>
                                        <option value="TZS">Tanzanian Shilling</option>
                                        <option value="UAH">Ukrainian Hryvnia</option>
                                        <option value="UGX">Ugandan Shilling</option>
                                        <option value="UYU">Uruguayan Peso</option>
                                        <option value="UZS">Uzbekistan Som</option>
                                        <option value="VEF">Venezuelan Bolívar Fuerte</option>
                                        <option value="VND">Vietnamese Dong</option>
                                        <option value="VUV">Vanuatu Vatu</option>
                                        <option value="WST">Samoan Tala</option>
                                        <option value="XAF">CFA Franc BEAC</option>
                                        <option value="XAG">Silver Ounce</option>
                                        <option value="XAU">Gold Ounce</option>
                                        <option value="XCD">East Caribbean Dollar</option>
                                        <option value="XDR">Special Drawing Rights</option>
                                        <option value="XOF">CFA Franc BCEAO</option>
                                        <option value="XPD">Palladium Ounce</option>
                                        <option value="XPF">CFP Franc</option>
                                        <option value="XPT">Platinum Ounce</option>
                                        <option value="YER">Yemeni Rial</option>
                                        <option value="ZAR">South African Rand</option>
                                        <option value="ZMW">Zambian Kwacha</option>
                                        <option value="ZWL">Zimbabwean Dollar</option>
                                    </select>
                                </div>
                                <div class="field-group no-border">
                                    <div class="w-40 flexed">
                                        <div class="schema_form_repeater hidden_field_container" data-repeater-name="howto_supplies" data-child-count="0">
                                            <div class="to-clone no-border d-none">
                                                <div class="schema_form_field hidden_field w-40">
                                                    <label for="howto_supply_0" class="keep-in-clone" data-n-i="1">Supply #0</label>
                                                    <input type="text" id="howto_supply_0" class="howto_supply" />
                                                </div>
                                            </div>
                                        </div>
                                        <a class="field-repeater-button mt-40" data-repeater="howto_supplies">ADD SUPPLY</a>
                                    </div>
                                    <div class="w-40 flexed">
                                        <div class="schema_form_repeater hidden_field_container" data-repeater-name="howto_tools" data-child-count="0">
                                            <div class="to-clone no-border d-none">
                                                <div class="schema_form_field hidden_field w-40">
                                                    <label for="howto_tool_0" class="keep-in-clone" data-n-i="1">Tool #0</label>
                                                    <input type="text" id="howto_tool_0" class="howto_tool" />
                                                </div>
                                            </div>
                                        </div>
                                        <a class="field-repeater-button mt-40" data-repeater="howto_tools">ADD TOOL</a>
                                    </div>
                                </div>
                                <div class="schema_form_repeater" data-repeater-name="howto_steps" data-child-count="1">
                                    <div class="to-clone">
                                        <div class="schema_form_field">
                                            <label for="howto_step_name_1" class="keep-in-clone" data-n-i="1">Step #1 Name</label>
                                            <input type="text" id="howto_step_name_1" class="howto_step_name" />
                                        </div>
                                        <div class="schema_form_field w-40">
                                            <label for="howto_step_url_1" class="keep-in-clone">URL</label>
                                            <input type="url" id="howto_step_url_1" class="howto_step_url" placeholder="http://" />
                                        </div>
                                        <div class="schema_form_field w-40">
                                            <label for="howto_step_url_image_1" class="keep-in-clone">Image URL</label>
                                            <input type="url" id="howto_step_url_image_1" class="howto_step_image_url" placeholder="http://" />
                                        </div>
                                        <div class="schema_form_field">
                                            <label for="howto_step_instructions_1" class="keep-in-clone">Instructions</label>
                                            <textarea id="howto_step_instructions_1" class="howto_step_instructions"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <a class="field-repeater-button" data-repeater="howto_steps">ADD STEP</a>
                            </fieldset>
                            <ul class="references">
                                <li>Schema.org's reference(s)
                                    <ul>
                                        <li><a href="https://schema.org/HowTo">HowTo</a></li>
                                    </ul>
                                </li>
                                <li>Google's reference(s)
                                    <ul>
                                        <li><a href="https://developers.google.com/search/docs/appearance/structured-data/how-to">How-to</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="Organization" class="form-tab">
                            <fieldset>
                                <div class="schema_form_field">
                                    <label for="organization_type">Business Type</label>
                                    <select id="organization_type" class="view_switcher">
                                        <option value="Organization" data-linked-value="Organization" selected>Organization</option>
                                        <option value="Airline" data-linked-value="Airline">Airline</option>
                                        <option value="Consortium" data-linked-value="Consortium">Consortium</option>
                                        <option value="Corporation" data-linked-value="Corporation">Corporation</option>
                                        <option value="EducationalOrganization" data-linked-value="Educational">Educational Organization</option>
                                        <option value="FundingScheme" data-linked-value="Funding">Funding Scheme</option>
                                        <option value="GovernmentOrganization" data-linked-value="Government">Government Organization</option>
                                        <option value="LibrarySystem" data-linked-value="Library">Library System</option>
                                        <option value="MedicalOrganization" data-linked-value="Medical">Medical Organization</option>
                                        <option value="NGO" data-linked-value="NGO">NGO</option>
                                        <option value="NewsMediaOrganization" data-linked-value="News">News Media Organization</option>
                                        <option value="PerformingGroup" data-linked-value="Performing">Performing Group</option>
                                        <option value="Project" data-linked-value="Project">Project</option>
                                        <option value="SportsOrganization" data-linked-value="Sports">Sports Organization</option>
                                        <option value="WorkersUnion" data-linked-value="Workers">Workers Union</option>
                                    </select>
                                </div>
                                <div class="hidden_field_container linked-view" data-linked-switcher="organization_type" data-linked-value="Educational">
                                    <div class="schema_form_field hidden_field">
                                        <label for="organization_type-Educational">Specific Type</label>
                                        <select id="organization_type-Educational">
                                            <option value="EducationalOrganization" selected>Educational Organization</option>
                                            <option value="CollegeOrUniversity">College Or University</option>
                                            <option value="ElementarySchool">Elementary School</option>
                                            <option value="HighSchool">High School</option>
                                            <option value="MiddleSchool">Middle School</option>
                                            <option value="Preschool">Preschool</option>
                                            <option value="School">School</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view" data-linked-switcher="organization_type" data-linked-value="Medical">
                                    <div class="schema_form_field hidden_field">
                                        <label for="organization_type-Medical">Specific Type</label>
                                        <select id="organization_type-Medical">
                                            <option value="MedicalOrganization" selected>Medical Organization</option>
                                            <option value="DiagnosticLab">Diagnostic Lab</option>
                                            <option value="VeterinaryCare">Veterinary Care</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view" data-linked-switcher="organization_type" data-linked-value="Performing">
                                    <div class="schema_form_field hidden_field">
                                        <label for="organization_type-Performing">Specific Type</label>
                                        <select id="organization_type-Performing">
                                            <option value="PerformingGroup" selected>Performing Group</option>
                                            <option value="DanceGroup">Dance Group</option>
                                            <option value="MusicGroup">Music Group</option>
                                            <option value="TheaterGroup">Theater Group</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view" data-linked-switcher="organization_type" data-linked-value="Project">
                                    <div class="schema_form_field hidden_field">
                                        <label for="organization_type-Project">Specific Type</label>
                                        <select id="organization_type-Project">
                                            <option value="Project" selected>Project</option>
                                            <option value="FundingAgency">Funding Agency</option>
                                            <option value="ResearchProject">Research Project</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view" data-linked-switcher="organization_type" data-linked-value="Sports">
                                    <div class="schema_form_field hidden_field">
                                        <label for="organization_type-Sports">Specific Type</label>
                                        <select id="organization_type-Sports">
                                            <option value="SportsOrganization" selected>Sports Organization</option>
                                            <option value="SportsTeam">Sports Team</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden_field_container linked-view reveal" data-linked-switcher="organization_type" data-linked-value="Organization Airline Consortium Corporation Funding Governement Library NGO News Workers">
                                    <div class="schema_form_field">
                                        <label for="organization_type-None">Specific Type</label>
                                        <select id="organization_type-None" disabled>
                                            <option selected>Not specified</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="organization_name">Name</label>
                                    <input type="text" id="organization_name" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="organization_alt_name">Alternate Name</label>
                                    <input type="text" id="organization_alt_name" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="organization_url">URL</label>
                                    <input type="url" id="organization_url" placeholder="http://" />
                                </div>
                                <div class="schema_form_field w-40">
                                    <label for="organization_logo">Logo URL</label>
                                    <input type="url" id="organization_logo" placeholder="http://" />
                                </div>
                                <div class="schema_form_field w-40" id="organization_socials_wrapper">
                                    <label for="organization_socials">Social Profiles</label>
                                    <div class="multiselect">
                                        <div class="multiselect_input_wrapper">
                                            <input disabled id="organization_socials" class="multiselect_input" />
                                        </div>
                                        <div class="checkboxes">
                                            <label for="organization_socials_fb"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_facebook" id="organization_socials_fb" />Facebook</label>
                                            <label for="organization_socials_tw"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_twitter" id="organization_socials_tw" />Twitter</label>
                                            <label for="organization_socials_ig"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_instagram" id="organization_socials_ig" />Instagram</label>
                                            <label for="organization_socials_yt"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_youtube" id="organization_socials_yt" />YouTube</label>
                                            <label for="organization_socials_li"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_linkedin" id="organization_socials_li" />LinkedIn</label>
                                            <label for="organization_socials_pn"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_pinterest" id="organization_socials_pn" />Pinterest</label>
                                            <label for="organization_socials_sc"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_soundcloud" id="organization_socials_sc" />SoundCloud</label>
                                            <label for="organization_socials_tb"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_tumblr" id="organization_socials_tb" />Tumblr</label>
                                            <label for="organization_socials_wk"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_wikipedia" id="organization_socials_wk" />Wikipedia</label>
                                            <label for="organization_socials_gh"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_github" id="organization_socials_gh" />Github</label>
                                            <label for="organization_socials_wb"><input type="checkbox" class="multiselect_checkbox revealer" data-target-id="organization_website" id="organization_socials_wb" />Website</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden_field_container wrap">
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_facebook">Facebook</label>
                                        <input type="text" id="organization_facebook" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_twitter">Twitter</label>
                                        <input type="text" id="organization_twitter" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_instagram">Instagram</label>
                                        <input type="text" id="organization_instagram" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_youtube">YouTube</label>
                                        <input type="text" id="organization_youtube" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_linkedin">LinkedIn</label>
                                        <input type="text" id="organization_linkedin" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_pinterest">Pinterest</label>
                                        <input type="text" id="organization_pinterest" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_soundcloud">SoundCloud</label>
                                        <input type="text" id="organization_soundcloud" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_tumblr">Tumblr</label>
                                        <input type="text" id="organization_tumblr" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_wikipedia">Wikipedia</label>
                                        <input type="text" id="organization_wikipedia" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_github">Github</label>
                                        <input type="text" id="organization_github" class="org_social" />
                                    </div>
                                    <div class="schema_form_field w-20 hidden_field">
                                        <label for="organization_website">Website</label>
                                        <input type="text" id="organization_website" class="org_social" />
                                    </div>
                                </div>
                                <div class="flex-break"></div>
                                <div class="schema_form_repeater hidden_field_container" data-repeater-name="organization_contacts" data-child-count="0">
                                    <div class="to-clone d-none">
                                        <div class="schema_form_field hidden_field w-40">
                                            <label for="organization_contact_type_0" class="keep-in-clone">Type</label>
                                            <select id="organization_contact_type_0" class="organization_contact_type">
                                                <option selected>Not Specified</option>
                                                <option value="customer service">Customer Service</option>
                                                <option value="technical support">Technical Support</option>
                                                <option value="billing support">Billing Support</option>
                                                <option value="bill payment">Bill Payment</option>
                                                <option value="sales">Sales</option>
                                                <option value="reservations">Reservations</option>
                                                <option value="credit card support">Credit Card Support</option>
                                                <option value="emergency">Emergency</option>
                                                <option value="baggage tracking">Baggage Tracking</option>
                                                <option value="roadside assistance">Roadside Assistance</option>
                                                <option value="package tracking">Package Tracking</option>
                                            </select>
                                        </div>
                                        <div class="schema_form_field hidden_field w-40">
                                            <label for="organization_phone_0" class="keep-in-clone">Phone</label>
                                            <input type="number" id="organization_phone_0" class="organization_phone" />
                                        </div>
                                        <div class="schema_form_field hidden-field w-40">
                                            <label for="organization_country_0" class="keep-in-clone">Area(s) Served</label>
                                            <div class="multiselect">
                                                <div class="multiselect_input_wrapper">
                                                    <input disabled id="organization_country_0" class="multiselect_input" />
                                                </div>
                                                <div class="checkboxes organization_country">
                                                    <label for="organization_serving-AF-0"><input type="checkbox" class="multiselect_checkbox" value="AF" id="organization_serving-AF-0" />Afghanistan</label>
                                                    <label for="organization_serving-AX-0"><input type="checkbox" class="multiselect_checkbox" value="AX" id="organization_serving-AX-0" />Aland Islands</label>
                                                    <label for="organization_serving-AL-0"><input type="checkbox" class="multiselect_checkbox" value="AL" id="organization_serving-AL-0" />Albania</label>
                                                    <label for="organization_serving-DZ-0"><input type="checkbox" class="multiselect_checkbox" value="DZ" id="organization_serving-DZ-0" />Algeria</label>
                                                    <label for="organization_serving-AS-0"><input type="checkbox" class="multiselect_checkbox" value="AS" id="organization_serving-AS-0" />American Samoa</label>
                                                    <label for="organization_serving-AD-0"><input type="checkbox" class="multiselect_checkbox" value="AD" id="organization_serving-AD-0" />Andorra</label>
                                                    <label for="organization_serving-AO-0"><input type="checkbox" class="multiselect_checkbox" value="AO" id="organization_serving-AO-0" />Angola</label>
                                                    <label for="organization_serving-AI-0"><input type="checkbox" class="multiselect_checkbox" value="AI" id="organization_serving-AI-0" />Anguilla</label>
                                                    <label for="organization_serving-AQ-0"><input type="checkbox" class="multiselect_checkbox" value="AQ" id="organization_serving-AQ-0" />Antarctica</label>
                                                    <label for="organization_serving-AG-0"><input type="checkbox" class="multiselect_checkbox" value="AG" id="organization_serving-AG-0" />Antigua and Barbuda</label>
                                                    <label for="organization_serving-AR-0"><input type="checkbox" class="multiselect_checkbox" value="AR" id="organization_serving-AR-0" />Argentina</label>
                                                    <label for="organization_serving-AM-0"><input type="checkbox" class="multiselect_checkbox" value="AM" id="organization_serving-AM-0" />Armenia</label>
                                                    <label for="organization_serving-AW-0"><input type="checkbox" class="multiselect_checkbox" value="AW" id="organization_serving-AW-0" />Aruba</label>
                                                    <label for="organization_serving-AU-0"><input type="checkbox" class="multiselect_checkbox" value="AU" id="organization_serving-AU-0" checked />Australia</label>
                                                    <label for="organization_serving-AT-0"><input type="checkbox" class="multiselect_checkbox" value="AT" id="organization_serving-AT-0" />Austria</label>
                                                    <label for="organization_serving-AZ-0"><input type="checkbox" class="multiselect_checkbox" value="AZ" id="organization_serving-AZ-0" />Azerbaijan</label>
                                                    <label for="organization_serving-BS-0"><input type="checkbox" class="multiselect_checkbox" value="BS" id="organization_serving-BS-0" />Bahamas</label>
                                                    <label for="organization_serving-BH-0"><input type="checkbox" class="multiselect_checkbox" value="BH" id="organization_serving-BH-0" />Bahrain</label>
                                                    <label for="organization_serving-BD-0"><input type="checkbox" class="multiselect_checkbox" value="BD" id="organization_serving-BD-0" />Bangladesh</label>
                                                    <label for="organization_serving-BB-0"><input type="checkbox" class="multiselect_checkbox" value="BB" id="organization_serving-BB-0" />Barbados</label>
                                                    <label for="organization_serving-BY-0"><input type="checkbox" class="multiselect_checkbox" value="BY" id="organization_serving-BY-0" />Belarus</label>
                                                    <label for="organization_serving-BE-0"><input type="checkbox" class="multiselect_checkbox" value="BE" id="organization_serving-BE-0" />Belgium</label>
                                                    <label for="organization_serving-BZ-0"><input type="checkbox" class="multiselect_checkbox" value="BZ" id="organization_serving-BZ-0" />Belize</label>
                                                    <label for="organization_serving-BJ-0"><input type="checkbox" class="multiselect_checkbox" value="BJ" id="organization_serving-BJ-0" />Benin</label>
                                                    <label for="organization_serving-BM-0"><input type="checkbox" class="multiselect_checkbox" value="BM" id="organization_serving-BM-0" />Bermuda</label>
                                                    <label for="organization_serving-BT-0"><input type="checkbox" class="multiselect_checkbox" value="BT" id="organization_serving-BT-0" />Bhutan</label>
                                                    <label for="organization_serving-BO-0"><input type="checkbox" class="multiselect_checkbox" value="BO" id="organization_serving-BO-0" />Bolivia</label>
                                                    <label for="organization_serving-BQ-0"><input type="checkbox" class="multiselect_checkbox" value="BQ" id="organization_serving-BQ-0" />Bonaire, Saint Eustatius and Saba </label>
                                                    <label for="organization_serving-BA-0"><input type="checkbox" class="multiselect_checkbox" value="BA" id="organization_serving-BA-0" />Bosnia and Herzegovina</label>
                                                    <label for="organization_serving-BW-0"><input type="checkbox" class="multiselect_checkbox" value="BW" id="organization_serving-BW-0" />Botswana</label>
                                                    <label for="organization_serving-BV-0"><input type="checkbox" class="multiselect_checkbox" value="BV" id="organization_serving-BV-0" />Bouvet Island</label>
                                                    <label for="organization_serving-BR-0"><input type="checkbox" class="multiselect_checkbox" value="BR" id="organization_serving-BR-0" />Brazil</label>
                                                    <label for="organization_serving-IO-0"><input type="checkbox" class="multiselect_checkbox" value="IO" id="organization_serving-IO-0" />British Indian Ocean Territory</label>
                                                    <label for="organization_serving-VG-0"><input type="checkbox" class="multiselect_checkbox" value="VG" id="organization_serving-VG-0" />British Virgin Islands</label>
                                                    <label for="organization_serving-BN-0"><input type="checkbox" class="multiselect_checkbox" value="BN" id="organization_serving-BN-0" />Brunei</label>
                                                    <label for="organization_serving-BG-0"><input type="checkbox" class="multiselect_checkbox" value="BG" id="organization_serving-BG-0" />Bulgaria</label>
                                                    <label for="organization_serving-BF-0"><input type="checkbox" class="multiselect_checkbox" value="BF" id="organization_serving-BF-0" />Burkina Faso</label>
                                                    <label for="organization_serving-BI-0"><input type="checkbox" class="multiselect_checkbox" value="BI" id="organization_serving-BI-0" />Burundi</label>
                                                    <label for="organization_serving-KH-0"><input type="checkbox" class="multiselect_checkbox" value="KH" id="organization_serving-KH-0" />Cambodia</label>
                                                    <label for="organization_serving-CM-0"><input type="checkbox" class="multiselect_checkbox" value="CM" id="organization_serving-CM-0" />Cameroon</label>
                                                    <label for="organization_serving-CA-0"><input type="checkbox" class="multiselect_checkbox" value="CA" id="organization_serving-CA-0" />Canada</label>
                                                    <label for="organization_serving-CV-0"><input type="checkbox" class="multiselect_checkbox" value="CV" id="organization_serving-CV-0" />Cape Verde</label>
                                                    <label for="organization_serving-KY-0"><input type="checkbox" class="multiselect_checkbox" value="KY" id="organization_serving-KY-0" />Cayman Islands</label>
                                                    <label for="organization_serving-CF-0"><input type="checkbox" class="multiselect_checkbox" value="CF" id="organization_serving-CF-0" />Central African Republic</label>
                                                    <label for="organization_serving-TD-0"><input type="checkbox" class="multiselect_checkbox" value="TD" id="organization_serving-TD-0" />Chad</label>
                                                    <label for="organization_serving-CL-0"><input type="checkbox" class="multiselect_checkbox" value="CL" id="organization_serving-CL-0" />Chile</label>
                                                    <label for="organization_serving-CN-0"><input type="checkbox" class="multiselect_checkbox" value="CN" id="organization_serving-CN-0" />China</label>
                                                    <label for="organization_serving-CX-0"><input type="checkbox" class="multiselect_checkbox" value="CX" id="organization_serving-CX-0" />Christmas Island</label>
                                                    <label for="organization_serving-CC-0"><input type="checkbox" class="multiselect_checkbox" value="CC" id="organization_serving-CC-0" />Cocos Islands</label>
                                                    <label for="organization_serving-CO-0"><input type="checkbox" class="multiselect_checkbox" value="CO" id="organization_serving-CO-0" />Colombia</label>
                                                    <label for="organization_serving-KM-0"><input type="checkbox" class="multiselect_checkbox" value="KM" id="organization_serving-KM-0" />Comoros</label>
                                                    <label for="organization_serving-CK-0"><input type="checkbox" class="multiselect_checkbox" value="CK" id="organization_serving-CK-0" />Cook Islands</label>
                                                    <label for="organization_serving-CR-0"><input type="checkbox" class="multiselect_checkbox" value="CR" id="organization_serving-CR-0" />Costa Rica</label>
                                                    <label for="organization_serving-HR-0"><input type="checkbox" class="multiselect_checkbox" value="HR" id="organization_serving-HR-0" />Croatia</label>
                                                    <label for="organization_serving-CU-0"><input type="checkbox" class="multiselect_checkbox" value="CU" id="organization_serving-CU-0" />Cuba</label>
                                                    <label for="organization_serving-CW-0"><input type="checkbox" class="multiselect_checkbox" value="CW" id="organization_serving-CW-0" />Curacao</label>
                                                    <label for="organization_serving-CY-0"><input type="checkbox" class="multiselect_checkbox" value="CY" id="organization_serving-CY-0" />Cyprus</label>
                                                    <label for="organization_serving-CZ-0"><input type="checkbox" class="multiselect_checkbox" value="CZ" id="organization_serving-CZ-0" />Czech Republic</label>
                                                    <label for="organization_serving-CD-0"><input type="checkbox" class="multiselect_checkbox" value="CD" id="organization_serving-CD-0" />Democratic Republic of the Congo</label>
                                                    <label for="organization_serving-DK-0"><input type="checkbox" class="multiselect_checkbox" value="DK" id="organization_serving-DK-0" />Denmark</label>
                                                    <label for="organization_serving-DJ-0"><input type="checkbox" class="multiselect_checkbox" value="DJ" id="organization_serving-DJ-0" />Djibouti</label>
                                                    <label for="organization_serving-DM-0"><input type="checkbox" class="multiselect_checkbox" value="DM" id="organization_serving-DM-0" />Dominica</label>
                                                    <label for="organization_serving-DO-0"><input type="checkbox" class="multiselect_checkbox" value="DO" id="organization_serving-DO-0" />Dominican Republic</label>
                                                    <label for="organization_serving-TL-0"><input type="checkbox" class="multiselect_checkbox" value="TL" id="organization_serving-TL-0" />East Timor</label>
                                                    <label for="organization_serving-EC-0"><input type="checkbox" class="multiselect_checkbox" value="EC" id="organization_serving-EC-0" />Ecuador</label>
                                                    <label for="organization_serving-EG-0"><input type="checkbox" class="multiselect_checkbox" value="EG" id="organization_serving-EG-0" />Egypt</label>
                                                    <label for="organization_serving-SV-0"><input type="checkbox" class="multiselect_checkbox" value="SV" id="organization_serving-SV-0" />El Salvador</label>
                                                    <label for="organization_serving-GQ-0"><input type="checkbox" class="multiselect_checkbox" value="GQ" id="organization_serving-GQ-0" />Equatorial Guinea</label>
                                                    <label for="organization_serving-ER-0"><input type="checkbox" class="multiselect_checkbox" value="ER" id="organization_serving-ER-0" />Eritrea</label>
                                                    <label for="organization_serving-EE-0"><input type="checkbox" class="multiselect_checkbox" value="EE" id="organization_serving-EE-0" />Estonia</label>
                                                    <label for="organization_serving-ET-0"><input type="checkbox" class="multiselect_checkbox" value="ET" id="organization_serving-ET-0" />Ethiopia</label>
                                                    <label for="organization_serving-FK-0"><input type="checkbox" class="multiselect_checkbox" value="FK" id="organization_serving-FK-0" />Falkland Islands</label>
                                                    <label for="organization_serving-FO-0"><input type="checkbox" class="multiselect_checkbox" value="FO" id="organization_serving-FO-0" />Faroe Islands</label>
                                                    <label for="organization_serving-FJ-0"><input type="checkbox" class="multiselect_checkbox" value="FJ" id="organization_serving-FJ-0" />Fiji</label>
                                                    <label for="organization_serving-FI-0"><input type="checkbox" class="multiselect_checkbox" value="FI" id="organization_serving-FI-0" />Finland</label>
                                                    <label for="organization_serving-FR-0"><input type="checkbox" class="multiselect_checkbox" value="FR" id="organization_serving-FR-0" />France</label>
                                                    <label for="organization_serving-GF-0"><input type="checkbox" class="multiselect_checkbox" value="GF" id="organization_serving-GF-0" />French Guiana</label>
                                                    <label for="organization_serving-PF-0"><input type="checkbox" class="multiselect_checkbox" value="PF" id="organization_serving-PF-0" />French Polynesia</label>
                                                    <label for="organization_serving-TF-0"><input type="checkbox" class="multiselect_checkbox" value="TF" id="organization_serving-TF-0" />French Southern Territories</label>
                                                    <label for="organization_serving-GA-0"><input type="checkbox" class="multiselect_checkbox" value="GA" id="organization_serving-GA-0" />Gabon</label>
                                                    <label for="organization_serving-GM-0"><input type="checkbox" class="multiselect_checkbox" value="GM" id="organization_serving-GM-0" />Gambia</label>
                                                    <label for="organization_serving-GE-0"><input type="checkbox" class="multiselect_checkbox" value="GE" id="organization_serving-GE-0" />Georgia</label>
                                                    <label for="organization_serving-DE-0"><input type="checkbox" class="multiselect_checkbox" value="DE" id="organization_serving-DE-0" />Germany</label>
                                                    <label for="organization_serving-GH-0"><input type="checkbox" class="multiselect_checkbox" value="GH" id="organization_serving-GH-0" />Ghana</label>
                                                    <label for="organization_serving-GI-0"><input type="checkbox" class="multiselect_checkbox" value="GI" id="organization_serving-GI-0" />Gibraltar</label>
                                                    <label for="organization_serving-GR-0"><input type="checkbox" class="multiselect_checkbox" value="GR" id="organization_serving-GR-0" />Greece</label>
                                                    <label for="organization_serving-GL-0"><input type="checkbox" class="multiselect_checkbox" value="GL" id="organization_serving-GL-0" />Greenland</label>
                                                    <label for="organization_serving-GD-0"><input type="checkbox" class="multiselect_checkbox" value="GD" id="organization_serving-GD-0" />Grenada</label>
                                                    <label for="organization_serving-GP-0"><input type="checkbox" class="multiselect_checkbox" value="GP" id="organization_serving-GP-0" />Guadeloupe</label>
                                                    <label for="organization_serving-GU-0"><input type="checkbox" class="multiselect_checkbox" value="GU" id="organization_serving-GU-0" />Guam</label>
                                                    <label for="organization_serving-GT-0"><input type="checkbox" class="multiselect_checkbox" value="GT" id="organization_serving-GT-0" />Guatemala</label>
                                                    <label for="organization_serving-GG-0"><input type="checkbox" class="multiselect_checkbox" value="GG" id="organization_serving-GG-0" />Guernsey</label>
                                                    <label for="organization_serving-GN-0"><input type="checkbox" class="multiselect_checkbox" value="GN" id="organization_serving-GN-0" />Guinea</label>
                                                    <label for="organization_serving-GW-0"><input type="checkbox" class="multiselect_checkbox" value="GW" id="organization_serving-GW-0" />Guinea-Bissau</label>
                                                    <label for="organization_serving-GY-0"><input type="checkbox" class="multiselect_checkbox" value="GY" id="organization_serving-GY-0" />Guyana</label>
                                                    <label for="organization_serving-HT-0"><input type="checkbox" class="multiselect_checkbox" value="HT" id="organization_serving-HT-0" />Haiti</label>
                                                    <label for="organization_serving-HM-0"><input type="checkbox" class="multiselect_checkbox" value="HM" id="organization_serving-HM-0" />Heard Island and McDonald Islands</label>
                                                    <label for="organization_serving-HN-0"><input type="checkbox" class="multiselect_checkbox" value="HN" id="organization_serving-HN-0" />Honduras</label>
                                                    <label for="organization_serving-HK-0"><input type="checkbox" class="multiselect_checkbox" value="HK" id="organization_serving-HK-0" />Hong Kong</label>
                                                    <label for="organization_serving-HU-0"><input type="checkbox" class="multiselect_checkbox" value="HU" id="organization_serving-HU-0" />Hungary</label>
                                                    <label for="organization_serving-IS-0"><input type="checkbox" class="multiselect_checkbox" value="IS" id="organization_serving-IS-0" />Iceland</label>
                                                    <label for="organization_serving-IN-0"><input type="checkbox" class="multiselect_checkbox" value="IN" id="organization_serving-IN-0" />India</label>
                                                    <label for="organization_serving-ID-0"><input type="checkbox" class="multiselect_checkbox" value="ID" id="organization_serving-ID-0" />Indonesia</label>
                                                    <label for="organization_serving-IR-0"><input type="checkbox" class="multiselect_checkbox" value="IR" id="organization_serving-IR-0" />Iran</label>
                                                    <label for="organization_serving-IQ-0"><input type="checkbox" class="multiselect_checkbox" value="IQ" id="organization_serving-IQ-0" />Iraq</label>
                                                    <label for="organization_serving-IE-0"><input type="checkbox" class="multiselect_checkbox" value="IE" id="organization_serving-IE-0" />Ireland</label>
                                                    <label for="organization_serving-IM-0"><input type="checkbox" class="multiselect_checkbox" value="IM" id="organization_serving-IM-0" />Isle of Man</label>
                                                    <label for="organization_serving-IL-0"><input type="checkbox" class="multiselect_checkbox" value="IL" id="organization_serving-IL-0" />Israel</label>
                                                    <label for="organization_serving-IT-0"><input type="checkbox" class="multiselect_checkbox" value="IT" id="organization_serving-IT-0" />Italy</label>
                                                    <label for="organization_serving-CI-0"><input type="checkbox" class="multiselect_checkbox" value="CI" id="organization_serving-CI-0" />Ivory Coast</label>
                                                    <label for="organization_serving-JM-0"><input type="checkbox" class="multiselect_checkbox" value="JM" id="organization_serving-JM-0" />Jamaica</label>
                                                    <label for="organization_serving-JP-0"><input type="checkbox" class="multiselect_checkbox" value="JP" id="organization_serving-JP-0" />Japan</label>
                                                    <label for="organization_serving-JE-0"><input type="checkbox" class="multiselect_checkbox" value="JE" id="organization_serving-JE-0" />Jersey</label>
                                                    <label for="organization_serving-JO-0"><input type="checkbox" class="multiselect_checkbox" value="JO" id="organization_serving-JO-0" />Jordan</label>
                                                    <label for="organization_serving-KZ-0"><input type="checkbox" class="multiselect_checkbox" value="KZ" id="organization_serving-KZ-0" />Kazakhstan</label>
                                                    <label for="organization_serving-KE-0"><input type="checkbox" class="multiselect_checkbox" value="KE" id="organization_serving-KE-0" />Kenya</label>
                                                    <label for="organization_serving-KI-0"><input type="checkbox" class="multiselect_checkbox" value="KI" id="organization_serving-KI-0" />Kiribati</label>
                                                    <label for="organization_serving-XK-0"><input type="checkbox" class="multiselect_checkbox" value="XK" id="organization_serving-XK-0" />Kosovo</label>
                                                    <label for="organization_serving-KW-0"><input type="checkbox" class="multiselect_checkbox" value="KW" id="organization_serving-KW-0" />Kuwait</label>
                                                    <label for="organization_serving-KG-0"><input type="checkbox" class="multiselect_checkbox" value="KG" id="organization_serving-KG-0" />Kyrgyzstan</label>
                                                    <label for="organization_serving-LA-0"><input type="checkbox" class="multiselect_checkbox" value="LA" id="organization_serving-LA-0" />Laos</label>
                                                    <label for="organization_serving-LV-0"><input type="checkbox" class="multiselect_checkbox" value="LV" id="organization_serving-LV-0" />Latvia</label>
                                                    <label for="organization_serving-LB-0"><input type="checkbox" class="multiselect_checkbox" value="LB" id="organization_serving-LB-0" />Lebanon</label>
                                                    <label for="organization_serving-LS-0"><input type="checkbox" class="multiselect_checkbox" value="LS" id="organization_serving-LS-0" />Lesotho</label>
                                                    <label for="organization_serving-LR-0"><input type="checkbox" class="multiselect_checkbox" value="LR" id="organization_serving-LR-0" />Liberia</label>
                                                    <label for="organization_serving-LY-0"><input type="checkbox" class="multiselect_checkbox" value="LY" id="organization_serving-LY-0" />Libya</label>
                                                    <label for="organization_serving-LI-0"><input type="checkbox" class="multiselect_checkbox" value="LI" id="organization_serving-LI-0" />Liechtenstein</label>
                                                    <label for="organization_serving-LT-0"><input type="checkbox" class="multiselect_checkbox" value="LT" id="organization_serving-LT-0" />Lithuania</label>
                                                    <label for="organization_serving-LU-0"><input type="checkbox" class="multiselect_checkbox" value="LU" id="organization_serving-LU-0" />Luxembourg</label>
                                                    <label for="organization_serving-MO-0"><input type="checkbox" class="multiselect_checkbox" value="MO" id="organization_serving-MO-0" />Macao</label>
                                                    <label for="organization_serving-MK-0"><input type="checkbox" class="multiselect_checkbox" value="MK" id="organization_serving-MK-0" />Macedonia</label>
                                                    <label for="organization_serving-MG-0"><input type="checkbox" class="multiselect_checkbox" value="MG" id="organization_serving-MG-0" />Madagascar</label>
                                                    <label for="organization_serving-MW-0"><input type="checkbox" class="multiselect_checkbox" value="MW" id="organization_serving-MW-0" />Malawi</label>
                                                    <label for="organization_serving-MY-0"><input type="checkbox" class="multiselect_checkbox" value="MY" id="organization_serving-MY-0" />Malaysia</label>
                                                    <label for="organization_serving-MV-0"><input type="checkbox" class="multiselect_checkbox" value="MV" id="organization_serving-MV-0" />Maldives</label>
                                                    <label for="organization_serving-ML-0"><input type="checkbox" class="multiselect_checkbox" value="ML" id="organization_serving-ML-0" />Mali</label>
                                                    <label for="organization_serving-MT-0"><input type="checkbox" class="multiselect_checkbox" value="MT" id="organization_serving-MT-0" />Malta</label>
                                                    <label for="organization_serving-MH-0"><input type="checkbox" class="multiselect_checkbox" value="MH" id="organization_serving-MH-0" />Marshall Islands</label>
                                                    <label for="organization_serving-MQ-0"><input type="checkbox" class="multiselect_checkbox" value="MQ" id="organization_serving-MQ-0" />Martinique</label>
                                                    <label for="organization_serving-MR-0"><input type="checkbox" class="multiselect_checkbox" value="MR" id="organization_serving-MR-0" />Mauritania</label>
                                                    <label for="organization_serving-MU-0"><input type="checkbox" class="multiselect_checkbox" value="MU" id="organization_serving-MU-0" />Mauritius</label>
                                                    <label for="organization_serving-YT-0"><input type="checkbox" class="multiselect_checkbox" value="YT" id="organization_serving-YT-0" />Mayotte</label>
                                                    <label for="organization_serving-MX-0"><input type="checkbox" class="multiselect_checkbox" value="MX" id="organization_serving-MX-0" />Mexico</label>
                                                    <label for="organization_serving-FM-0"><input type="checkbox" class="multiselect_checkbox" value="FM" id="organization_serving-FM-0" />Micronesia</label>
                                                    <label for="organization_serving-MD-0"><input type="checkbox" class="multiselect_checkbox" value="MD" id="organization_serving-MD-0" />Moldova</label>
                                                    <label for="organization_serving-MC-0"><input type="checkbox" class="multiselect_checkbox" value="MC" id="organization_serving-MC-0" />Monaco</label>
                                                    <label for="organization_serving-MN-0"><input type="checkbox" class="multiselect_checkbox" value="MN" id="organization_serving-MN-0" />Mongolia</label>
                                                    <label for="organization_serving-ME-0"><input type="checkbox" class="multiselect_checkbox" value="ME" id="organization_serving-ME-0" />Montenegro</label>
                                                    <label for="organization_serving-MS-0"><input type="checkbox" class="multiselect_checkbox" value="MS" id="organization_serving-MS-0" />Montserrat</label>
                                                    <label for="organization_serving-MA-0"><input type="checkbox" class="multiselect_checkbox" value="MA" id="organization_serving-MA-0" />Morocco</label>
                                                    <label for="organization_serving-MZ-0"><input type="checkbox" class="multiselect_checkbox" value="MZ" id="organization_serving-MZ-0" />Mozambique</label>
                                                    <label for="organization_serving-MM-0"><input type="checkbox" class="multiselect_checkbox" value="MM" id="organization_serving-MM-0" />Myanmar</label>
                                                    <label for="organization_serving-NA-0"><input type="checkbox" class="multiselect_checkbox" value="NA" id="organization_serving-NA-0" />Namibia</label>
                                                    <label for="organization_serving-NR-0"><input type="checkbox" class="multiselect_checkbox" value="NR" id="organization_serving-NR-0" />Nauru</label>
                                                    <label for="organization_serving-NP-0"><input type="checkbox" class="multiselect_checkbox" value="NP" id="organization_serving-NP-0" />Nepal</label>
                                                    <label for="organization_serving-NL-0"><input type="checkbox" class="multiselect_checkbox" value="NL" id="organization_serving-NL-0" />Netherlands</label>
                                                    <label for="organization_serving-NC-0"><input type="checkbox" class="multiselect_checkbox" value="NC" id="organization_serving-NC-0" />New Caledonia</label>
                                                    <label for="organization_serving-NZ-0"><input type="checkbox" class="multiselect_checkbox" value="NZ" id="organization_serving-NZ-0" />New Zealand</label>
                                                    <label for="organization_serving-NI-0"><input type="checkbox" class="multiselect_checkbox" value="NI" id="organization_serving-NI-0" />Nicaragua</label>
                                                    <label for="organization_serving-NE-0"><input type="checkbox" class="multiselect_checkbox" value="NE" id="organization_serving-NE-0" />Niger</label>
                                                    <label for="organization_serving-NG-0"><input type="checkbox" class="multiselect_checkbox" value="NG" id="organization_serving-NG-0" />Nigeria</label>
                                                    <label for="organization_serving-NU-0"><input type="checkbox" class="multiselect_checkbox" value="NU" id="organization_serving-NU-0" />Niue</label>
                                                    <label for="organization_serving-NF-0"><input type="checkbox" class="multiselect_checkbox" value="NF" id="organization_serving-NF-0" />Norfolk Island</label>
                                                    <label for="organization_serving-KP-0"><input type="checkbox" class="multiselect_checkbox" value="KP" id="organization_serving-KP-0" />North Korea</label>
                                                    <label for="organization_serving-MP-0"><input type="checkbox" class="multiselect_checkbox" value="MP" id="organization_serving-MP-0" />Northern Mariana Islands</label>
                                                    <label for="organization_serving-NO-0"><input type="checkbox" class="multiselect_checkbox" value="NO" id="organization_serving-NO-0" />Norway</label>
                                                    <label for="organization_serving-OM-0"><input type="checkbox" class="multiselect_checkbox" value="OM" id="organization_serving-OM-0" />Oman</label>
                                                    <label for="organization_serving-PK-0"><input type="checkbox" class="multiselect_checkbox" value="PK" id="organization_serving-PK-0" />Pakistan</label>
                                                    <label for="organization_serving-PW-0"><input type="checkbox" class="multiselect_checkbox" value="PW" id="organization_serving-PW-0" />Palau</label>
                                                    <label for="organization_serving-PS-0"><input type="checkbox" class="multiselect_checkbox" value="PS" id="organization_serving-PS-0" />Palestinian Territory</label>
                                                    <label for="organization_serving-PA-0"><input type="checkbox" class="multiselect_checkbox" value="PA" id="organization_serving-PA-0" />Panama</label>
                                                    <label for="organization_serving-PG-0"><input type="checkbox" class="multiselect_checkbox" value="PG" id="organization_serving-PG-0" />Papua New Guinea</label>
                                                    <label for="organization_serving-PY-0"><input type="checkbox" class="multiselect_checkbox" value="PY" id="organization_serving-PY-0" />Paraguay</label>
                                                    <label for="organization_serving-PE-0"><input type="checkbox" class="multiselect_checkbox" value="PE" id="organization_serving-PE-0" />Peru</label>
                                                    <label for="organization_serving-PH-0"><input type="checkbox" class="multiselect_checkbox" value="PH" id="organization_serving-PH-0" />Philippines</label>
                                                    <label for="organization_serving-PN-0"><input type="checkbox" class="multiselect_checkbox" value="PN" id="organization_serving-PN-0" />Pitcairn</label>
                                                    <label for="organization_serving-PL-0"><input type="checkbox" class="multiselect_checkbox" value="PL" id="organization_serving-PL-0" />Poland</label>
                                                    <label for="organization_serving-PT-0"><input type="checkbox" class="multiselect_checkbox" value="PT" id="organization_serving-PT-0" />Portugal</label>
                                                    <label for="organization_serving-PR-0"><input type="checkbox" class="multiselect_checkbox" value="PR" id="organization_serving-PR-0" />Puerto Rico</label>
                                                    <label for="organization_serving-QA-0"><input type="checkbox" class="multiselect_checkbox" value="QA" id="organization_serving-QA-0" />Qatar</label>
                                                    <label for="organization_serving-CG-0"><input type="checkbox" class="multiselect_checkbox" value="CG" id="organization_serving-CG-0" />Republic of the Congo</label>
                                                    <label for="organization_serving-RE-0"><input type="checkbox" class="multiselect_checkbox" value="RE" id="organization_serving-RE-0" />Reunion</label>
                                                    <label for="organization_serving-RO-0"><input type="checkbox" class="multiselect_checkbox" value="RO" id="organization_serving-RO-0" />Romania</label>
                                                    <label for="organization_serving-RU-0"><input type="checkbox" class="multiselect_checkbox" value="RU" id="organization_serving-RU-0" />Russia</label>
                                                    <label for="organization_serving-RW-0"><input type="checkbox" class="multiselect_checkbox" value="RW" id="organization_serving-RW-0" />Rwanda</label>
                                                    <label for="organization_serving-BL-0"><input type="checkbox" class="multiselect_checkbox" value="BL" id="organization_serving-BL-0" />Saint Barthelemy</label>
                                                    <label for="organization_serving-SH-0"><input type="checkbox" class="multiselect_checkbox" value="SH" id="organization_serving-SH-0" />Saint Helena</label>
                                                    <label for="organization_serving-KN-0"><input type="checkbox" class="multiselect_checkbox" value="KN" id="organization_serving-KN-0" />Saint Kitts and Nevis</label>
                                                    <label for="organization_serving-LC-0"><input type="checkbox" class="multiselect_checkbox" value="LC" id="organization_serving-LC-0" />Saint Lucia</label>
                                                    <label for="organization_serving-MF-0"><input type="checkbox" class="multiselect_checkbox" value="MF" id="organization_serving-MF-0" />Saint Martin</label>
                                                    <label for="organization_serving-PM-0"><input type="checkbox" class="multiselect_checkbox" value="PM" id="organization_serving-PM-0" />Saint Pierre and Miquelon</label>
                                                    <label for="organization_serving-VC-0"><input type="checkbox" class="multiselect_checkbox" value="VC" id="organization_serving-VC-0" />Saint Vincent and the Grenadines</label>
                                                    <label for="organization_serving-WS-0"><input type="checkbox" class="multiselect_checkbox" value="WS" id="organization_serving-WS-0" />Samoa</label>
                                                    <label for="organization_serving-SM-0"><input type="checkbox" class="multiselect_checkbox" value="SM" id="organization_serving-SM-0" />San Marino</label>
                                                    <label for="organization_serving-ST-0"><input type="checkbox" class="multiselect_checkbox" value="ST" id="organization_serving-ST-0" />Sao Tome and Principe</label>
                                                    <label for="organization_serving-SA-0"><input type="checkbox" class="multiselect_checkbox" value="SA" id="organization_serving-SA-0" />Saudi Arabia</label>
                                                    <label for="organization_serving-SN-0"><input type="checkbox" class="multiselect_checkbox" value="SN" id="organization_serving-SN-0" />Senegal</label>
                                                    <label for="organization_serving-RS-0"><input type="checkbox" class="multiselect_checkbox" value="RS" id="organization_serving-RS-0" />Serbia</label>
                                                    <label for="organization_serving-SC-0"><input type="checkbox" class="multiselect_checkbox" value="SC" id="organization_serving-SC-0" />Seychelles</label>
                                                    <label for="organization_serving-SL-0"><input type="checkbox" class="multiselect_checkbox" value="SL" id="organization_serving-SL-0" />Sierra Leone</label>
                                                    <label for="organization_serving-SG-0"><input type="checkbox" class="multiselect_checkbox" value="SG" id="organization_serving-SG-0" />Singapore</label>
                                                    <label for="organization_serving-SX-0"><input type="checkbox" class="multiselect_checkbox" value="SX" id="organization_serving-SX-0" />Sint Maarten</label>
                                                    <label for="organization_serving-SK-0"><input type="checkbox" class="multiselect_checkbox" value="SK" id="organization_serving-SK-0" />Slovakia</label>
                                                    <label for="organization_serving-SI-0"><input type="checkbox" class="multiselect_checkbox" value="SI" id="organization_serving-SI-0" />Slovenia</label>
                                                    <label for="organization_serving-SB-0"><input type="checkbox" class="multiselect_checkbox" value="SB" id="organization_serving-SB-0" />Solomon Islands</label>
                                                    <label for="organization_serving-SO-0"><input type="checkbox" class="multiselect_checkbox" value="SO" id="organization_serving-SO-0" />Somalia</label>
                                                    <label for="organization_serving-ZA-0"><input type="checkbox" class="multiselect_checkbox" value="ZA" id="organization_serving-ZA-0" />South Africa</label>
                                                    <label for="organization_serving-GS-0"><input type="checkbox" class="multiselect_checkbox" value="GS" id="organization_serving-GS-0" />South Georgia and the South Sandwich Islands</label>
                                                    <label for="organization_serving-KR-0"><input type="checkbox" class="multiselect_checkbox" value="KR" id="organization_serving-KR-0" />South Korea</label>
                                                    <label for="organization_serving-SS-0"><input type="checkbox" class="multiselect_checkbox" value="SS" id="organization_serving-SS-0" />South Sudan</label>
                                                    <label for="organization_serving-ES-0"><input type="checkbox" class="multiselect_checkbox" value="ES" id="organization_serving-ES-0" />Spain</label>
                                                    <label for="organization_serving-LK-0"><input type="checkbox" class="multiselect_checkbox" value="LK" id="organization_serving-LK-0" />Sri Lanka</label>
                                                    <label for="organization_serving-SD-0"><input type="checkbox" class="multiselect_checkbox" value="SD" id="organization_serving-SD-0" />Sudan</label>
                                                    <label for="organization_serving-SR-0"><input type="checkbox" class="multiselect_checkbox" value="SR" id="organization_serving-SR-0" />Suriname</label>
                                                    <label for="organization_serving-SJ-0"><input type="checkbox" class="multiselect_checkbox" value="SJ" id="organization_serving-SJ-0" />Svalbard and Jan Mayen</label>
                                                    <label for="organization_serving-SZ-0"><input type="checkbox" class="multiselect_checkbox" value="SZ" id="organization_serving-SZ-0" />Swaziland</label>
                                                    <label for="organization_serving-SE-0"><input type="checkbox" class="multiselect_checkbox" value="SE" id="organization_serving-SE-0" />Sweden</label>
                                                    <label for="organization_serving-CH-0"><input type="checkbox" class="multiselect_checkbox" value="CH" id="organization_serving-CH-0" />Switzerland</label>
                                                    <label for="organization_serving-SY-0"><input type="checkbox" class="multiselect_checkbox" value="SY" id="organization_serving-SY-0" />Syria</label>
                                                    <label for="organization_serving-TW-0"><input type="checkbox" class="multiselect_checkbox" value="TW" id="organization_serving-TW-0" />Taiwan</label>
                                                    <label for="organization_serving-TJ-0"><input type="checkbox" class="multiselect_checkbox" value="TJ" id="organization_serving-TJ-0" />Tajikistan</label>
                                                    <label for="organization_serving-TZ-0"><input type="checkbox" class="multiselect_checkbox" value="TZ" id="organization_serving-TZ-0" />Tanzania</label>
                                                    <label for="organization_serving-TH-0"><input type="checkbox" class="multiselect_checkbox" value="TH" id="organization_serving-TH-0" />Thailand</label>
                                                    <label for="organization_serving-TG-0"><input type="checkbox" class="multiselect_checkbox" value="TG" id="organization_serving-TG-0" />Togo</label>
                                                    <label for="organization_serving-TK-0"><input type="checkbox" class="multiselect_checkbox" value="TK" id="organization_serving-TK-0" />Tokelau</label>
                                                    <label for="organization_serving-TO-0"><input type="checkbox" class="multiselect_checkbox" value="TO" id="organization_serving-TO-0" />Tonga</label>
                                                    <label for="organization_serving-TT-0"><input type="checkbox" class="multiselect_checkbox" value="TT" id="organization_serving-TT-0" />Trinidad and Tobago</label>
                                                    <label for="organization_serving-TN-0"><input type="checkbox" class="multiselect_checkbox" value="TN" id="organization_serving-TN-0" />Tunisia</label>
                                                    <label for="organization_serving-TR-0"><input type="checkbox" class="multiselect_checkbox" value="TR" id="organization_serving-TR-0" />Turkey</label>
                                                    <label for="organization_serving-TM-0"><input type="checkbox" class="multiselect_checkbox" value="TM" id="organization_serving-TM-0" />Turkmenistan</label>
                                                    <label for="organization_serving-TC-0"><input type="checkbox" class="multiselect_checkbox" value="TC" id="organization_serving-TC-0" />Turks and Caicos Islands</label>
                                                    <label for="organization_serving-TV-0"><input type="checkbox" class="multiselect_checkbox" value="TV" id="organization_serving-TV-0" />Tuvalu</label>
                                                    <label for="organization_serving-VI-0"><input type="checkbox" class="multiselect_checkbox" value="VI" id="organization_serving-VI-0" />U.S. Virgin Islands</label>
                                                    <label for="organization_serving-UG-0"><input type="checkbox" class="multiselect_checkbox" value="UG" id="organization_serving-UG-0" />Uganda</label>
                                                    <label for="organization_serving-UA-0"><input type="checkbox" class="multiselect_checkbox" value="UA" id="organization_serving-UA-0" />Ukraine</label>
                                                    <label for="organization_serving-AE-0"><input type="checkbox" class="multiselect_checkbox" value="AE" id="organization_serving-AE-0" />United Arab Emirates</label>
                                                    <label for="organization_serving-GB-0"><input type="checkbox" class="multiselect_checkbox" value="GB" id="organization_serving-GB-0" />United Kingdom</label>
                                                    <label for="organization_serving-US-0"><input type="checkbox" class="multiselect_checkbox" value="US" id="organization_serving-US-0" />United States</label>
                                                    <label for="organization_serving-UM-0"><input type="checkbox" class="multiselect_checkbox" value="UM" id="organization_serving-UM-0" />United States Minor Outlying Islands</label>
                                                    <label for="organization_serving-UY-0"><input type="checkbox" class="multiselect_checkbox" value="UY" id="organization_serving-UY-0" />Uruguay</label>
                                                    <label for="organization_serving-UZ-0"><input type="checkbox" class="multiselect_checkbox" value="UZ" id="organization_serving-UZ-0" />Uzbekistan</label>
                                                    <label for="organization_serving-VU-0"><input type="checkbox" class="multiselect_checkbox" value="VU" id="organization_serving-VU-0" />Vanuatu</label>
                                                    <label for="organization_serving-VA-0"><input type="checkbox" class="multiselect_checkbox" value="VA" id="organization_serving-VA-0" />Vatican</label>
                                                    <label for="organization_serving-VE-0"><input type="checkbox" class="multiselect_checkbox" value="VE" id="organization_serving-VE-0" />Venezuela</label>
                                                    <label for="organization_serving-VN-0"><input type="checkbox" class="multiselect_checkbox" value="VN" id="organization_serving-VN-0" />Vietnam</label>
                                                    <label for="organization_serving-WF-0"><input type="checkbox" class="multiselect_checkbox" value="WF" id="organization_serving-WF-0" />Wallis and Futuna</label>
                                                    <label for="organization_serving-EH-0"><input type="checkbox" class="multiselect_checkbox" value="EH" id="organization_serving-EH-0" />Western Sahara</label>
                                                    <label for="organization_serving-YE-0"><input type="checkbox" class="multiselect_checkbox" value="YE" id="organization_serving-YE-0" />Yemen</label>
                                                    <label for="organization_serving-ZM-0"><input type="checkbox" class="multiselect_checkbox" value="ZM" id="organization_serving-ZM-0" />Zambia</label>
                                                    <label for="organization_serving-ZW-0"><input type="checkbox" class="multiselect_checkbox" value="ZW" id="organization_serving-ZW-0" />Zimbabwe</label>
                                                    <label for="organization_serving-002-0"><input type="checkbox" class="multiselect_checkbox" value="002" id="organization_serving-002-0" />Africa</label>
                                                    <label for="organization_serving-015-0"><input type="checkbox" class="multiselect_checkbox" value="015" id="organization_serving-015-0" />Northern Africa</label>
                                                    <label for="organization_serving-419-0"><input type="checkbox" class="multiselect_checkbox" value="419" id="organization_serving-419-0" />Latin America</label>
                                                    <label for="organization_serving-142-0"><input type="checkbox" class="multiselect_checkbox" value="142" id="organization_serving-142-0" />Asia</label>
                                                    <label for="organization_serving-143-0"><input type="checkbox" class="multiselect_checkbox" value="143" id="organization_serving-143-0" />Central Asia</label>
                                                    <label for="organization_serving-030-0"><input type="checkbox" class="multiselect_checkbox" value="030" id="organization_serving-030-0" />Eastern Asia</label>
                                                    <label for="organization_serving-035-0"><input type="checkbox" class="multiselect_checkbox" value="035" id="organization_serving-035-0" />South-eastern Asia</label>
                                                    <label for="organization_serving-034-0"><input type="checkbox" class="multiselect_checkbox" value="034" id="organization_serving-034-0" />Southern Asia</label>
                                                    <label for="organization_serving-145-0"><input type="checkbox" class="multiselect_checkbox" value="145" id="organization_serving-145-0" />Western Asia</label>
                                                    <label for="organization_serving-150-0"><input type="checkbox" class="multiselect_checkbox" value="150" id="organization_serving-150-0" />Europe</label>
                                                    <label for="organization_serving-151-0"><input type="checkbox" class="multiselect_checkbox" value="151" id="organization_serving-151-0" />Eastern Europe</label>
                                                    <label for="organization_serving-154-0"><input type="checkbox" class="multiselect_checkbox" value="154" id="organization_serving-154-0" />Northern Europe</label>
                                                    <label for="organization_serving-039-0"><input type="checkbox" class="multiselect_checkbox" value="039" id="organization_serving-039-0" />Southern Europe</label>
                                                </div>
                                            </div>
                                            <label for="organization_area_all_0" class="keep-in-clone"><input type="checkbox" id="organization_area_all_0" class="select-all" data-selection-target="organization_country_0" />Select All</label>
                                        </div>
                                        <div class="schema_form_field hidden-field w-40">
                                            <label for="organization_lang_0" class="keep-in-clone">Language(s)</label>
                                            <div class="multiselect">
                                                <div class="multiselect_input_wrapper">
                                                    <input disabled id="organization_lang_0" class="multiselect_input" />
                                                </div>
                                                <div class="checkboxes organization_lang">
                                                    <label for="organization_lang-AA-0"><input type="checkbox" class="multiselect_checkbox" value="AA" id="organization_lang-AA-0" />Afar</label>
                                                    <label for="organization_lang-AB-0"><input type="checkbox" class="multiselect_checkbox" value="AB" id="organization_lang-AB-0" />Abkhazian</label>
                                                    <label for="organization_lang-AE-0"><input type="checkbox" class="multiselect_checkbox" value="AE" id="organization_lang-AE-0" />Avestan</label>
                                                    <label for="organization_lang-AF-0"><input type="checkbox" class="multiselect_checkbox" value="AF" id="organization_lang-AF-0" />Afrikaans</label>
                                                    <label for="organization_lang-AK-0"><input type="checkbox" class="multiselect_checkbox" value="AK" id="organization_lang-AK-0" />Akan</label>
                                                    <label for="organization_lang-AM-0"><input type="checkbox" class="multiselect_checkbox" value="AM" id="organization_lang-AM-0" />Amharic</label>
                                                    <label for="organization_lang-AN-0"><input type="checkbox" class="multiselect_checkbox" value="AN" id="organization_lang-AN-0" />Aragonese</label>
                                                    <label for="organization_lang-AR-0"><input type="checkbox" class="multiselect_checkbox" value="AR" id="organization_lang-AR-0" />Arabic</label>
                                                    <label for="organization_lang-AS-0"><input type="checkbox" class="multiselect_checkbox" value="AS" id="organization_lang-AS-0" />Assamese</label>
                                                    <label for="organization_lang-AV-0"><input type="checkbox" class="multiselect_checkbox" value="AV" id="organization_lang-AV-0" />Avaric</label>
                                                    <label for="organization_lang-AY-0"><input type="checkbox" class="multiselect_checkbox" value="AY" id="organization_lang-AY-0" />Aymara</label>
                                                    <label for="organization_lang-AZ-0"><input type="checkbox" class="multiselect_checkbox" value="AZ" id="organization_lang-AZ-0" />Azerbaijani</label>
                                                    <label for="organization_lang-BA-0"><input type="checkbox" class="multiselect_checkbox" value="BA" id="organization_lang-BA-0" />Bashkir</label>
                                                    <label for="organization_lang-BE-0"><input type="checkbox" class="multiselect_checkbox" value="BE" id="organization_lang-BE-0" />Belarusian</label>
                                                    <label for="organization_lang-BG-0"><input type="checkbox" class="multiselect_checkbox" value="BG" id="organization_lang-BG-0" />Bulgarian</label>
                                                    <label for="organization_lang-BH-0"><input type="checkbox" class="multiselect_checkbox" value="BH" id="organization_lang-BH-0" />Bihari</label>
                                                    <label for="organization_lang-BI-0"><input type="checkbox" class="multiselect_checkbox" value="BI" id="organization_lang-BI-0" />Bislama</label>
                                                    <label for="organization_lang-BM-0"><input type="checkbox" class="multiselect_checkbox" value="BM" id="organization_lang-BM-0" />Bambara</label>
                                                    <label for="organization_lang-BN-0"><input type="checkbox" class="multiselect_checkbox" value="BN" id="organization_lang-BN-0" />Bengali</label>
                                                    <label for="organization_lang-BO-0"><input type="checkbox" class="multiselect_checkbox" value="BO" id="organization_lang-BO-0" />Tibetan</label>
                                                    <label for="organization_lang-BR-0"><input type="checkbox" class="multiselect_checkbox" value="BR" id="organization_lang-BR-0" />Breton</label>
                                                    <label for="organization_lang-BS-0"><input type="checkbox" class="multiselect_checkbox" value="BS" id="organization_lang-BS-0" />Bosnian</label>
                                                    <label for="organization_lang-CA-0"><input type="checkbox" class="multiselect_checkbox" value="CA" id="organization_lang-CA-0" />Catalan</label>
                                                    <label for="organization_lang-CE-0"><input type="checkbox" class="multiselect_checkbox" value="CE" id="organization_lang-CE-0" />Chechen</label>
                                                    <label for="organization_lang-CH-0"><input type="checkbox" class="multiselect_checkbox" value="CH" id="organization_lang-CH-0" />Chamorro</label>
                                                    <label for="organization_lang-CO-0"><input type="checkbox" class="multiselect_checkbox" value="CO" id="organization_lang-CO-0" />Corsican</label>
                                                    <label for="organization_lang-CR-0"><input type="checkbox" class="multiselect_checkbox" value="CR" id="organization_lang-CR-0" />Cree</label>
                                                    <label for="organization_lang-CS-0"><input type="checkbox" class="multiselect_checkbox" value="CS" id="organization_lang-CS-0" />Czech</label>
                                                    <label for="organization_lang-CU-0"><input type="checkbox" class="multiselect_checkbox" value="CU" id="organization_lang-CU-0" />Church Slavic</label>
                                                    <label for="organization_lang-CV-0"><input type="checkbox" class="multiselect_checkbox" value="CV" id="organization_lang-CV-0" />Chuvash</label>
                                                    <label for="organization_lang-CY-0"><input type="checkbox" class="multiselect_checkbox" value="CY" id="organization_lang-CY-0" />Welsh</label>
                                                    <label for="organization_lang-DA-0"><input type="checkbox" class="multiselect_checkbox" value="DA" id="organization_lang-DA-0" />Danish</label>
                                                    <label for="organization_lang-DE-0"><input type="checkbox" class="multiselect_checkbox" value="DE" id="organization_lang-DE-0" />German</label>
                                                    <label for="organization_lang-DV-0"><input type="checkbox" class="multiselect_checkbox" value="DV" id="organization_lang-DV-0" />Divehi</label>
                                                    <label for="organization_lang-DZ-0"><input type="checkbox" class="multiselect_checkbox" value="DZ" id="organization_lang-DZ-0" />Dzongkha</label>
                                                    <label for="organization_lang-EE-0"><input type="checkbox" class="multiselect_checkbox" value="EE" id="organization_lang-EE-0" />Ewe</label>
                                                    <label for="organization_lang-EL-0"><input type="checkbox" class="multiselect_checkbox" value="EL" id="organization_lang-EL-0" />Greek</label>
                                                    <label for="organization_lang-EN-0"><input type="checkbox" class="multiselect_checkbox" value="EN" id="organization_lang-EN-0" checked />English</label>
                                                    <label for="organization_lang-EO-0"><input type="checkbox" class="multiselect_checkbox" value="EO" id="organization_lang-EO-0" />Esperanto</label>
                                                    <label for="organization_lang-ES-0"><input type="checkbox" class="multiselect_checkbox" value="ES" id="organization_lang-ES-0" />Spanish</label>
                                                    <label for="organization_lang-ET-0"><input type="checkbox" class="multiselect_checkbox" value="ET" id="organization_lang-ET-0" />Estonian</label>
                                                    <label for="organization_lang-EU-0"><input type="checkbox" class="multiselect_checkbox" value="EU" id="organization_lang-EU-0" />Basque</label>
                                                    <label for="organization_lang-FA-0"><input type="checkbox" class="multiselect_checkbox" value="FA" id="organization_lang-FA-0" />Persian</label>
                                                    <label for="organization_lang-FF-0"><input type="checkbox" class="multiselect_checkbox" value="FF" id="organization_lang-FF-0" />Fulah</label>
                                                    <label for="organization_lang-FI-0"><input type="checkbox" class="multiselect_checkbox" value="FI" id="organization_lang-FI-0" />Finnish</label>
                                                    <label for="organization_lang-FJ-0"><input type="checkbox" class="multiselect_checkbox" value="FJ" id="organization_lang-FJ-0" />Fijian</label>
                                                    <label for="organization_lang-FO-0"><input type="checkbox" class="multiselect_checkbox" value="FO" id="organization_lang-FO-0" />Faroese</label>
                                                    <label for="organization_lang-FR-0"><input type="checkbox" class="multiselect_checkbox" value="FR" id="organization_lang-FR-0" />French</label>
                                                    <label for="organization_lang-FY-0"><input type="checkbox" class="multiselect_checkbox" value="FY" id="organization_lang-FY-0" />Western Frisian</label>
                                                    <label for="organization_lang-GA-0"><input type="checkbox" class="multiselect_checkbox" value="GA" id="organization_lang-GA-0" />Irish</label>
                                                    <label for="organization_lang-GD-0"><input type="checkbox" class="multiselect_checkbox" value="GD" id="organization_lang-GD-0" />Scottish Gaelic</label>
                                                    <label for="organization_lang-GL-0"><input type="checkbox" class="multiselect_checkbox" value="GL" id="organization_lang-GL-0" />Galician</label>
                                                    <label for="organization_lang-GN-0"><input type="checkbox" class="multiselect_checkbox" value="GN" id="organization_lang-GN-0" />Guarani</label>
                                                    <label for="organization_lang-GU-0"><input type="checkbox" class="multiselect_checkbox" value="GU" id="organization_lang-GU-0" />Gujarati</label>
                                                    <label for="organization_lang-GV-0"><input type="checkbox" class="multiselect_checkbox" value="GV" id="organization_lang-GV-0" />Manx</label>
                                                    <label for="organization_lang-HA-0"><input type="checkbox" class="multiselect_checkbox" value="HA" id="organization_lang-HA-0" />Hausa</label>
                                                    <label for="organization_lang-HE-0"><input type="checkbox" class="multiselect_checkbox" value="HE" id="organization_lang-HE-0" />Hebrew</label>
                                                    <label for="organization_lang-HI-0"><input type="checkbox" class="multiselect_checkbox" value="HI" id="organization_lang-HI-0" />Hindi</label>
                                                    <label for="organization_lang-HO-0"><input type="checkbox" class="multiselect_checkbox" value="HO" id="organization_lang-HO-0" />Hiri Motu</label>
                                                    <label for="organization_lang-HR-0"><input type="checkbox" class="multiselect_checkbox" value="HR" id="organization_lang-HR-0" />Croatian</label>
                                                    <label for="organization_lang-HT-0"><input type="checkbox" class="multiselect_checkbox" value="HT" id="organization_lang-HT-0" />Haitian</label>
                                                    <label for="organization_lang-HU-0"><input type="checkbox" class="multiselect_checkbox" value="HU" id="organization_lang-HU-0" />Hungarian</label>
                                                    <label for="organization_lang-HY-0"><input type="checkbox" class="multiselect_checkbox" value="HY" id="organization_lang-HY-0" />Armenian</label>
                                                    <label for="organization_lang-HZ-0"><input type="checkbox" class="multiselect_checkbox" value="HZ" id="organization_lang-HZ-0" />Herero</label>
                                                    <label for="organization_lang-IA-0"><input type="checkbox" class="multiselect_checkbox" value="IA" id="organization_lang-IA-0" />Interlingua</label>
                                                    <label for="organization_lang-ID-0"><input type="checkbox" class="multiselect_checkbox" value="ID" id="organization_lang-ID-0" />Indonesian</label>
                                                    <label for="organization_lang-IE-0"><input type="checkbox" class="multiselect_checkbox" value="IE" id="organization_lang-IE-0" />Interlingue</label>
                                                    <label for="organization_lang-IG-0"><input type="checkbox" class="multiselect_checkbox" value="IG" id="organization_lang-IG-0" />Igbo</label>
                                                    <label for="organization_lang-II-0"><input type="checkbox" class="multiselect_checkbox" value="II" id="organization_lang-II-0" />Sichuan Yi</label>
                                                    <label for="organization_lang-IK-0"><input type="checkbox" class="multiselect_checkbox" value="IK" id="organization_lang-IK-0" />Inupiaq</label>
                                                    <label for="organization_lang-IO-0"><input type="checkbox" class="multiselect_checkbox" value="IO" id="organization_lang-IO-0" />Ido</label>
                                                    <label for="organization_lang-IS-0"><input type="checkbox" class="multiselect_checkbox" value="IS" id="organization_lang-IS-0" />Icelandic</label>
                                                    <label for="organization_lang-IT-0"><input type="checkbox" class="multiselect_checkbox" value="IT" id="organization_lang-IT-0" />Italian</label>
                                                    <label for="organization_lang-IU-0"><input type="checkbox" class="multiselect_checkbox" value="IU" id="organization_lang-IU-0" />Inuktitut</label>
                                                    <label for="organization_lang-JA-0"><input type="checkbox" class="multiselect_checkbox" value="JA" id="organization_lang-JA-0" />Japanese</label>
                                                    <label for="organization_lang-JV-0"><input type="checkbox" class="multiselect_checkbox" value="JV" id="organization_lang-JV-0" />Javanese</label>
                                                    <label for="organization_lang-KA-0"><input type="checkbox" class="multiselect_checkbox" value="KA" id="organization_lang-KA-0" />Georgian</label>
                                                    <label for="organization_lang-KG-0"><input type="checkbox" class="multiselect_checkbox" value="KG" id="organization_lang-KG-0" />Kongo</label>
                                                    <label for="organization_lang-KI-0"><input type="checkbox" class="multiselect_checkbox" value="KI" id="organization_lang-KI-0" />Kikuyu; Gikuyu</label>
                                                    <label for="organization_lang-KJ-0"><input type="checkbox" class="multiselect_checkbox" value="KJ" id="organization_lang-KJ-0" />Kuanyama</label>
                                                    <label for="organization_lang-KK-0"><input type="checkbox" class="multiselect_checkbox" value="KK" id="organization_lang-KK-0" />Kazakh</label>
                                                    <label for="organization_lang-KL-0"><input type="checkbox" class="multiselect_checkbox" value="KL" id="organization_lang-KL-0" />Kalaallisut</label>
                                                    <label for="organization_lang-KM-0"><input type="checkbox" class="multiselect_checkbox" value="KM" id="organization_lang-KM-0" />Central Khmer</label>
                                                    <label for="organization_lang-KN-0"><input type="checkbox" class="multiselect_checkbox" value="KN" id="organization_lang-KN-0" />Kannada</label>
                                                    <label for="organization_lang-KO-0"><input type="checkbox" class="multiselect_checkbox" value="KO" id="organization_lang-KO-0" />Korean</label>
                                                    <label for="organization_lang-KR-0"><input type="checkbox" class="multiselect_checkbox" value="KR" id="organization_lang-KR-0" />Kanuri</label>
                                                    <label for="organization_lang-KS-0"><input type="checkbox" class="multiselect_checkbox" value="KS" id="organization_lang-KS-0" />Kashmiri</label>
                                                    <label for="organization_lang-KU-0"><input type="checkbox" class="multiselect_checkbox" value="KU" id="organization_lang-KU-0" />Kurdish</label>
                                                    <label for="organization_lang-KV-0"><input type="checkbox" class="multiselect_checkbox" value="KV" id="organization_lang-KV-0" />Komi</label>
                                                    <label for="organization_lang-KW-0"><input type="checkbox" class="multiselect_checkbox" value="KW" id="organization_lang-KW-0" />Cornish</label>
                                                    <label for="organization_lang-KY-0"><input type="checkbox" class="multiselect_checkbox" value="KY" id="organization_lang-KY-0" />Kirghiz; Kyrgyz</label>
                                                    <label for="organization_lang-LA-0"><input type="checkbox" class="multiselect_checkbox" value="LA" id="organization_lang-LA-0" />Latin</label>
                                                    <label for="organization_lang-LB-0"><input type="checkbox" class="multiselect_checkbox" value="LB" id="organization_lang-LB-0" />Luxembourgish</label>
                                                    <label for="organization_lang-LG-0"><input type="checkbox" class="multiselect_checkbox" value="LG" id="organization_lang-LG-0" />Ganda</label>
                                                    <label for="organization_lang-LI-0"><input type="checkbox" class="multiselect_checkbox" value="LI" id="organization_lang-LI-0" />Limburgish</label>
                                                    <label for="organization_lang-LN-0"><input type="checkbox" class="multiselect_checkbox" value="LN" id="organization_lang-LN-0" />Lingala</label>
                                                    <label for="organization_lang-LO-0"><input type="checkbox" class="multiselect_checkbox" value="LO" id="organization_lang-LO-0" />Lao</label>
                                                    <label for="organization_lang-LT-0"><input type="checkbox" class="multiselect_checkbox" value="LT" id="organization_lang-LT-0" />Lithuanian</label>
                                                    <label for="organization_lang-LU-0"><input type="checkbox" class="multiselect_checkbox" value="LU" id="organization_lang-LU-0" />Luba-Katanga</label>
                                                    <label for="organization_lang-LV-0"><input type="checkbox" class="multiselect_checkbox" value="LV" id="organization_lang-LV-0" />Latvian</label>
                                                    <label for="organization_lang-MG-0"><input type="checkbox" class="multiselect_checkbox" value="MG" id="organization_lang-MG-0" />Malagasy</label>
                                                    <label for="organization_lang-MH-0"><input type="checkbox" class="multiselect_checkbox" value="MH" id="organization_lang-MH-0" />Marshallese</label>
                                                    <label for="organization_lang-MI-0"><input type="checkbox" class="multiselect_checkbox" value="MI" id="organization_lang-MI-0" />Maori</label>
                                                    <label for="organization_lang-MK-0"><input type="checkbox" class="multiselect_checkbox" value="MK" id="organization_lang-MK-0" />Macedonian</label>
                                                    <label for="organization_lang-ML-0"><input type="checkbox" class="multiselect_checkbox" value="ML" id="organization_lang-ML-0" />Malayalam</label>
                                                    <label for="organization_lang-MN-0"><input type="checkbox" class="multiselect_checkbox" value="MN" id="organization_lang-MN-0" />Mongolian</label>
                                                    <label for="organization_lang-MR-0"><input type="checkbox" class="multiselect_checkbox" value="MR" id="organization_lang-MR-0" />Marathi</label>
                                                    <label for="organization_lang-MS-0"><input type="checkbox" class="multiselect_checkbox" value="MS" id="organization_lang-MS-0" />Malay</label>
                                                    <label for="organization_lang-MT-0"><input type="checkbox" class="multiselect_checkbox" value="MT" id="organization_lang-MT-0" />Maltese</label>
                                                    <label for="organization_lang-MY-0"><input type="checkbox" class="multiselect_checkbox" value="MY" id="organization_lang-MY-0" />Burmese</label>
                                                    <label for="organization_lang-NA-0"><input type="checkbox" class="multiselect_checkbox" value="NA" id="organization_lang-NA-0" />Nauru</label>
                                                    <label for="organization_lang-NB-0"><input type="checkbox" class="multiselect_checkbox" value="NB" id="organization_lang-NB-0" />Norwegian Bokmål</label>
                                                    <label for="organization_lang-ND-0"><input type="checkbox" class="multiselect_checkbox" value="ND" id="organization_lang-ND-0" />North Ndebele</label>
                                                    <label for="organization_lang-NE-0"><input type="checkbox" class="multiselect_checkbox" value="NE" id="organization_lang-NE-0" />Nepali</label>
                                                    <label for="organization_lang-NG-0"><input type="checkbox" class="multiselect_checkbox" value="NG" id="organization_lang-NG-0" />Ndonga</label>
                                                    <label for="organization_lang-NL-0"><input type="checkbox" class="multiselect_checkbox" value="NL" id="organization_lang-NL-0" />Dutch</label>
                                                    <label for="organization_lang-NN-0"><input type="checkbox" class="multiselect_checkbox" value="NN" id="organization_lang-NN-0" />Norwegian Nynorsk</label>
                                                    <label for="organization_lang-NO-0"><input type="checkbox" class="multiselect_checkbox" value="NO" id="organization_lang-NO-0" />Norwegian</label>
                                                    <label for="organization_lang-NR-0"><input type="checkbox" class="multiselect_checkbox" value="NR" id="organization_lang-NR-0" />South Ndebele</label>
                                                    <label for="organization_lang-NV-0"><input type="checkbox" class="multiselect_checkbox" value="NV" id="organization_lang-NV-0" />Navajo</label>
                                                    <label for="organization_lang-NY-0"><input type="checkbox" class="multiselect_checkbox" value="NY" id="organization_lang-NY-0" />Chichewa</label>
                                                    <label for="organization_lang-OC-0"><input type="checkbox" class="multiselect_checkbox" value="OC" id="organization_lang-OC-0" />Occitan</label>
                                                    <label for="organization_lang-OJ-0"><input type="checkbox" class="multiselect_checkbox" value="OJ" id="organization_lang-OJ-0" />Ojibwa</label>
                                                    <label for="organization_lang-OM-0"><input type="checkbox" class="multiselect_checkbox" value="OM" id="organization_lang-OM-0" />Oromo</label>
                                                    <label for="organization_lang-OR-0"><input type="checkbox" class="multiselect_checkbox" value="OR" id="organization_lang-OR-0" />Oriya</label>
                                                    <label for="organization_lang-OS-0"><input type="checkbox" class="multiselect_checkbox" value="OS" id="organization_lang-OS-0" />Ossetian</label>
                                                    <label for="organization_lang-PA-0"><input type="checkbox" class="multiselect_checkbox" value="PA" id="organization_lang-PA-0" />Panjabi</label>
                                                    <label for="organization_lang-PI-0"><input type="checkbox" class="multiselect_checkbox" value="PI" id="organization_lang-PI-0" />Pali</label>
                                                    <label for="organization_lang-PL-0"><input type="checkbox" class="multiselect_checkbox" value="PL" id="organization_lang-PL-0" />Polish</label>
                                                    <label for="organization_lang-PS-0"><input type="checkbox" class="multiselect_checkbox" value="PS" id="organization_lang-PS-0" />Pashto</label>
                                                    <label for="organization_lang-PT-0"><input type="checkbox" class="multiselect_checkbox" value="PT" id="organization_lang-PT-0" />Portuguese</label>
                                                    <label for="organization_lang-QU-0"><input type="checkbox" class="multiselect_checkbox" value="QU" id="organization_lang-QU-0" />Quechua</label>
                                                    <label for="organization_lang-RM-0"><input type="checkbox" class="multiselect_checkbox" value="RM" id="organization_lang-RM-0" />Romansh</label>
                                                    <label for="organization_lang-RN-0"><input type="checkbox" class="multiselect_checkbox" value="RN" id="organization_lang-RN-0" />Rundi</label>
                                                    <label for="organization_lang-RO-0"><input type="checkbox" class="multiselect_checkbox" value="RO" id="organization_lang-RO-0" />Romanian</label>
                                                    <label for="organization_lang-RU-0"><input type="checkbox" class="multiselect_checkbox" value="RU" id="organization_lang-RU-0" />Russian</label>
                                                    <label for="organization_lang-RW-0"><input type="checkbox" class="multiselect_checkbox" value="RW" id="organization_lang-RW-0" />Kinyarwanda</label>
                                                    <label for="organization_lang-SA-0"><input type="checkbox" class="multiselect_checkbox" value="SA" id="organization_lang-SA-0" />Sanskrit</label>
                                                    <label for="organization_lang-SC-0"><input type="checkbox" class="multiselect_checkbox" value="SC" id="organization_lang-SC-0" />Sardinian</label>
                                                    <label for="organization_lang-SD-0"><input type="checkbox" class="multiselect_checkbox" value="SD" id="organization_lang-SD-0" />Sindhi</label>
                                                    <label for="organization_lang-SE-0"><input type="checkbox" class="multiselect_checkbox" value="SE" id="organization_lang-SE-0" />Northern Sami</label>
                                                    <label for="organization_lang-SG-0"><input type="checkbox" class="multiselect_checkbox" value="SG" id="organization_lang-SG-0" />Sango</label>
                                                    <label for="organization_lang-SI-0"><input type="checkbox" class="multiselect_checkbox" value="SI" id="organization_lang-SI-0" />Sinhala</label>
                                                    <label for="organization_lang-SK-0"><input type="checkbox" class="multiselect_checkbox" value="SK" id="organization_lang-SK-0" />Slovak</label>
                                                    <label for="organization_lang-SL-0"><input type="checkbox" class="multiselect_checkbox" value="SL" id="organization_lang-SL-0" />Slovenian</label>
                                                    <label for="organization_lang-SM-0"><input type="checkbox" class="multiselect_checkbox" value="SM" id="organization_lang-SM-0" />Samoan</label>
                                                    <label for="organization_lang-SN-0"><input type="checkbox" class="multiselect_checkbox" value="SN" id="organization_lang-SN-0" />Shona</label>
                                                    <label for="organization_lang-SO-0"><input type="checkbox" class="multiselect_checkbox" value="SO" id="organization_lang-SO-0" />Somali</label>
                                                    <label for="organization_lang-SQ-0"><input type="checkbox" class="multiselect_checkbox" value="SQ" id="organization_lang-SQ-0" />Albanian</label>
                                                    <label for="organization_lang-SR-0"><input type="checkbox" class="multiselect_checkbox" value="SR" id="organization_lang-SR-0" />Serbian</label>
                                                    <label for="organization_lang-SS-0"><input type="checkbox" class="multiselect_checkbox" value="SS" id="organization_lang-SS-0" />Swati</label>
                                                    <label for="organization_lang-ST-0"><input type="checkbox" class="multiselect_checkbox" value="ST" id="organization_lang-ST-0" />Southern Sotho</label>
                                                    <label for="organization_lang-SU-0"><input type="checkbox" class="multiselect_checkbox" value="SU" id="organization_lang-SU-0" />Sundanese</label>
                                                    <label for="organization_lang-SV-0"><input type="checkbox" class="multiselect_checkbox" value="SV" id="organization_lang-SV-0" />Swedish</label>
                                                    <label for="organization_lang-SW-0"><input type="checkbox" class="multiselect_checkbox" value="SW" id="organization_lang-SW-0" />Swahili</label>
                                                    <label for="organization_lang-TA-0"><input type="checkbox" class="multiselect_checkbox" value="TA" id="organization_lang-TA-0" />Tamil</label>
                                                    <label for="organization_lang-TE-0"><input type="checkbox" class="multiselect_checkbox" value="TE" id="organization_lang-TE-0" />Telugu</label>
                                                    <label for="organization_lang-TG-0"><input type="checkbox" class="multiselect_checkbox" value="TG" id="organization_lang-TG-0" />Tajik</label>
                                                    <label for="organization_lang-TH-0"><input type="checkbox" class="multiselect_checkbox" value="TH" id="organization_lang-TH-0" />Thai</label>
                                                    <label for="organization_lang-TI-0"><input type="checkbox" class="multiselect_checkbox" value="TI" id="organization_lang-TI-0" />Tigrinya</label>
                                                    <label for="organization_lang-TK-0"><input type="checkbox" class="multiselect_checkbox" value="TK" id="organization_lang-TK-0" />Turkmen</label>
                                                    <label for="organization_lang-TL-0"><input type="checkbox" class="multiselect_checkbox" value="TL" id="organization_lang-TL-0" />Tagalog</label>
                                                    <label for="organization_lang-TN-0"><input type="checkbox" class="multiselect_checkbox" value="TN" id="organization_lang-TN-0" />Tswana</label>
                                                    <label for="organization_lang-TO-0"><input type="checkbox" class="multiselect_checkbox" value="TO" id="organization_lang-TO-0" />Tonga</label>
                                                    <label for="organization_lang-TR-0"><input type="checkbox" class="multiselect_checkbox" value="TR" id="organization_lang-TR-0" />Turkish</label>
                                                    <label for="organization_lang-TS-0"><input type="checkbox" class="multiselect_checkbox" value="TS" id="organization_lang-TS-0" />Tsonga</label>
                                                    <label for="organization_lang-TT-0"><input type="checkbox" class="multiselect_checkbox" value="TT" id="organization_lang-TT-0" />Tatar</label>
                                                    <label for="organization_lang-TW-0"><input type="checkbox" class="multiselect_checkbox" value="TW" id="organization_lang-TW-0" />Twi</label>
                                                    <label for="organization_lang-TY-0"><input type="checkbox" class="multiselect_checkbox" value="TY" id="organization_lang-TY-0" />Tahitian</label>
                                                    <label for="organization_lang-UG-0"><input type="checkbox" class="multiselect_checkbox" value="UG" id="organization_lang-UG-0" />Uighur; Uyghur</label>
                                                    <label for="organization_lang-UK-0"><input type="checkbox" class="multiselect_checkbox" value="UK" id="organization_lang-UK-0" />Ukrainian</label>
                                                    <label for="organization_lang-UR-0"><input type="checkbox" class="multiselect_checkbox" value="UR" id="organization_lang-UR-0" />Urdu</label>
                                                    <label for="organization_lang-UZ-0"><input type="checkbox" class="multiselect_checkbox" value="UZ" id="organization_lang-UZ-0" />Uzbek</label>
                                                    <label for="organization_lang-VE-0"><input type="checkbox" class="multiselect_checkbox" value="VE" id="organization_lang-VE-0" />Venda</label>
                                                    <label for="organization_lang-VI-0"><input type="checkbox" class="multiselect_checkbox" value="VI" id="organization_lang-VI-0" />Vietnamese</label>
                                                    <label for="organization_lang-VO-0"><input type="checkbox" class="multiselect_checkbox" value="VO" id="organization_lang-VO-0" />Volapük</label>
                                                    <label for="organization_lang-WA-0"><input type="checkbox" class="multiselect_checkbox" value="WA" id="organization_lang-WA-0" />Walloon</label>
                                                    <label for="organization_lang-WO-0"><input type="checkbox" class="multiselect_checkbox" value="WO" id="organization_lang-WO-0" />Wolof</label>
                                                    <label for="organization_lang-XH-0"><input type="checkbox" class="multiselect_checkbox" value="XH" id="organization_lang-XH-0" />Xhosa</label>
                                                    <label for="organization_lang-YI-0"><input type="checkbox" class="multiselect_checkbox" value="YI" id="organization_lang-YI-0" />Yiddish</label>
                                                    <label for="organization_lang-YO-0"><input type="checkbox" class="multiselect_checkbox" value="YO" id="organization_lang-YO-0" />Yoruba</label>
                                                    <label for="organization_lang-ZA-0"><input type="checkbox" class="multiselect_checkbox" value="ZA" id="organization_lang-ZA-0" />Zhuang</label>
                                                    <label for="organization_lang-ZH-0"><input type="checkbox" class="multiselect_checkbox" value="ZH" id="organization_lang-ZH-0" />Chinese</label>
                                                    <label for="organization_lang-ZU-0"><input type="checkbox" class="multiselect_checkbox" value="ZU" id="organization_lang-ZU-0" />Zulu</label>
                                                </div>
                                            </div>
                                            <label for="organization_lang_all_0" class="keep-in-clone"><input type="checkbox" id="organization_lang_all_0" class="select-all" data-selection-target="organization_lang_0" />Select All</label>
                                        </div>
                                        <div class="schema_form_field hidden_field w-20">
                                            <label for="organization_toll_0" class="keep-in-clone"><input type="checkbox" id="organization_toll_0" class="organization_toll contact_option" value="TollFree" />Toll Free</label>
                                        </div>
                                        <div class="schema_form_field hidden_field w-60">
                                            <label for="organization_hearing_0" class="keep-in-clone"><input type="checkbox" id="organization_hearing_0" class="organization_hearing contact_option" value="HearingImpairedSupported" />Hearing Impaired Support</label>
                                        </div>
                                    </div>
                                </div>
                                <a class="field-repeater-button" data-repeater="organization_contacts">ADD CONTACT</a>
                            </fieldset>
                            <ul class="references">
                                <li>Schema.org's reference(s)
                                    <ul>
                                        <li><a href="https://schema.org/Organization">Organization</a></li>
                                    </ul>
                                </li>
                                <li>Google's reference(s)
                                    <ul>
                                        <li><a href="https://developers.google.com/search/docs/appearance/structured-data/logo">Logo</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </form>

                    <div id="schema-generated">
                        <code>
                            <span class="code-purple">&lt;script</span> <span class="code-orange">type</span>="application/ld+json"<span class="code-purple">&gt;</span>
                                <span class="code-block">{
                                    <span class="code-line">"@context": "https://schema.org",</span>
                                    <span class="code-line">"@type": "Article",</span>
                                    <span class="code-line">"headline": "",</span>
                                    <span class="code-line">"image": "",</span>
                                    <span class="code-block">"author": {
                                        <span class="code-line">"@type": "",</span>
                                        <span class="code-line">"name": ""</span>
                                    },</span>
                                    <span class="code-block">"publisher": {
                                        <span class="code-line">"@type": "Organization",</span>
                                        <span class="code-line">"name": "",</span>
                                        <span class="code-block">"logo": {
                                            <span class="code-line">"@type": "ImageObject",</span>
                                            <span class="code-line">"url": ""</span>
                                        }</span>
                                    },</span>
                                    <span class="code-line">"datePublished": ""</span>
                                }</span>
                            <span class="code-purple">&lt;/script&gt;</span>
                        </code>
                        <div id="code-actions">
                            <a id="check-code" class="code-action-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                    <g>
                                        <path d="M11.5 22.2813C9.36767 22.2813 7.28323 21.6489 5.51026 20.4643C3.7373 19.2796 2.35544 17.5958 1.53943 15.6258C0.723421 13.6558 0.509917 11.488 0.925914 9.39669C1.34191 7.30533 2.36872 5.38429 3.87651 3.87651C5.38429 2.36872 7.30533 1.34191 9.39669 0.925914C11.488 0.509917 13.6558 0.723421 15.6258 1.53943C17.5958 2.35544 19.2796 3.7373 20.4643 5.51026C21.6489 7.28323 22.2813 9.36767 22.2813 11.5C22.2781 14.3584 21.1412 17.0988 19.12 19.12C17.0988 21.1412 14.3584 22.2781 11.5 22.2813ZM11.5 2.15625C9.65199 2.15625 7.84547 2.70426 6.3089 3.73096C4.77232 4.75767 3.57471 6.21696 2.86751 7.92431C2.1603 9.63165 1.97526 11.5104 2.33579 13.3229C2.69632 15.1354 3.58623 16.8003 4.89298 18.107C6.19972 19.4138 7.86462 20.3037 9.67713 20.6642C11.4896 21.0247 13.3684 20.8397 15.0757 20.1325C16.7831 19.4253 18.2423 18.2277 19.2691 16.6911C20.2958 15.1545 20.8438 13.348 20.8438 11.5C20.841 9.02275 19.8556 6.64775 18.1039 4.89606C16.3523 3.14438 13.9773 2.15905 11.5 2.15625Z" />
                                        <path d="M9.4875 14.8062L7.33125 11.9312C7.27462 11.8557 7.23341 11.7698 7.20999 11.6784C7.18656 11.5869 7.18138 11.4918 7.19472 11.3983C7.20807 11.3049 7.23969 11.215 7.28778 11.1338C7.33587 11.0526 7.39949 10.9816 7.475 10.925C7.6275 10.8106 7.81919 10.7615 8.0079 10.7885C8.10134 10.8018 8.19123 10.8334 8.27245 10.8815C8.35367 10.9296 8.42462 10.9932 8.48125 11.0687L10.1056 13.2341L14.5532 8.15161C14.6145 8.07778 14.69 8.01698 14.7752 7.97278C14.8603 7.92858 14.9535 7.90187 15.0491 7.89424C15.1448 7.88661 15.241 7.89821 15.3321 7.92836C15.4231 7.9585 15.5073 8.00657 15.5795 8.06975C15.6517 8.13292 15.7106 8.20992 15.7525 8.2962C15.7945 8.38247 15.8188 8.47628 15.824 8.57209C15.8291 8.6679 15.815 8.76378 15.7826 8.85406C15.7501 8.94434 15.6998 9.02721 15.6348 9.09777L10.6036 14.8478C10.5332 14.9285 10.4457 14.9924 10.3474 15.0349C10.2491 15.0774 10.1426 15.0974 10.0356 15.0934C9.92862 15.0895 9.82387 15.0616 9.72904 15.0119C9.6342 14.9622 9.55167 14.8919 9.4875 14.8062Z" />
                                    </g>
                                </svg>
                            </a>
                            <a id="copy-code" class="code-action-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                    <g>
                                        <path d="M18.6875 22.2812H7.1875C6.80639 22.2808 6.44101 22.1292 6.17152 21.8597C5.90203 21.5902 5.75044 21.2249 5.75 20.8438V5.03125C5.75044 4.65014 5.90203 4.28476 6.17152 4.01527C6.44101 3.74578 6.80639 3.59419 7.1875 3.59375H18.6875C19.0686 3.59426 19.4339 3.74588 19.7034 4.01535C19.9729 4.28482 20.1245 4.65016 20.125 5.03125V20.8438C20.1245 21.2248 19.9729 21.5902 19.7034 21.8596C19.4339 22.1291 19.0686 22.2807 18.6875 22.2812ZM7.1875 5.03125V20.8438H18.6875V5.03125H7.1875Z" />
                                        <path d="M3.59375 19.4062C3.40313 19.4062 3.22031 19.3305 3.08552 19.1957C2.95073 19.0609 2.875 18.8781 2.875 18.6875V2.875C2.87563 2.30332 3.10301 1.75523 3.50724 1.35099C3.91148 0.946755 4.45957 0.719378 5.03125 0.71875H16.5312C16.7219 0.71875 16.9047 0.794475 17.0395 0.929267C17.1743 1.06406 17.25 1.24688 17.25 1.4375C17.25 1.62812 17.1743 1.81094 17.0395 1.94573C16.9047 2.08052 16.7219 2.15625 16.5312 2.15625H5.03125C4.84068 2.15642 4.65796 2.2322 4.52321 2.36696C4.38845 2.50171 4.31267 2.68443 4.3125 2.875V18.6875C4.3125 18.8781 4.23677 19.0609 4.10198 19.1957C3.96719 19.3305 3.78437 19.4062 3.59375 19.4062Z" />
                                    </g>
                                </svg>
                            </a>
                            <a id="delete-code" class="code-action-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                    <g>
                                        <path d="M21.5625 5.03125H19.205L18.0958 1.70214C18.0007 1.41566 17.8178 1.16644 17.5729 0.989899C17.3281 0.813358 17.0338 0.71848 16.732 0.718751H6.268C5.96626 0.718506 5.67211 0.813309 5.4273 0.989703C5.18248 1.1661 4.99945 1.41512 4.90418 1.70143L3.79435 5.03125H1.4375C1.24688 5.03125 1.06406 5.10698 0.929267 5.24177C0.794475 5.37656 0.71875 5.55938 0.71875 5.75C0.71875 5.94063 0.794475 6.12344 0.929267 6.25823C1.06406 6.39303 1.24688 6.46875 1.4375 6.46875H3.68518L5.67173 21.0385C5.72003 21.3824 5.89063 21.6973 6.15226 21.9255C6.41389 22.1537 6.74902 22.28 7.09622 22.2812H15.9038C16.2512 22.2802 16.5865 22.1538 16.8483 21.9254C17.11 21.697 17.2806 21.3819 17.3286 21.0378L19.3152 6.46875H21.5625C21.7531 6.46875 21.9359 6.39303 22.0707 6.25823C22.2055 6.12344 22.2812 5.94063 22.2812 5.75C22.2812 5.55938 22.2055 5.37656 22.0707 5.24177C21.9359 5.10698 21.7531 5.03125 21.5625 5.03125ZM6.268 2.15625H16.732L17.6901 5.03125H5.30955L6.268 2.15625ZM15.9038 20.8438H7.09593L5.13583 6.46875H17.8642L15.9038 20.8438Z" />
                                        <path d="M9.34375 19.4062C9.53437 19.4062 9.71719 19.3305 9.85198 19.1957C9.98677 19.0609 10.0625 18.8781 10.0625 18.6875V8.625C10.0625 8.43438 9.98677 8.25156 9.85198 8.11677C9.71719 7.98198 9.53437 7.90625 9.34375 7.90625C9.15313 7.90625 8.97031 7.98198 8.83552 8.11677C8.70073 8.25156 8.625 8.43438 8.625 8.625V18.6875C8.625 18.8781 8.70073 19.0609 8.83552 19.1957C8.97031 19.3305 9.15313 19.4062 9.34375 19.4062Z" />
                                        <path d="M13.6562 19.4062C13.8469 19.4062 14.0297 19.3305 14.1645 19.1957C14.2993 19.0609 14.375 18.8781 14.375 18.6875V8.625C14.375 8.43438 14.2993 8.25156 14.1645 8.11677C14.0297 7.98198 13.8469 7.90625 13.6562 7.90625C13.4656 7.90625 13.2828 7.98198 13.148 8.11677C13.0132 8.25156 12.9375 8.43438 12.9375 8.625V18.6875C12.9375 18.8781 13.0132 19.0609 13.148 19.1957C13.2828 19.3305 13.4656 19.4062 13.6562 19.4062Z" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <form id="validator" method="post" target="_blank" action="https://validator.schema.org">
                        <textarea name="code"></textarea>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section-services box-pagination">
		<div class="container">
			<div class="section-title">
				<h2>People Also Ask</h2>
			</div>
			<div class="row">
				<div class="card">
                    <div class="card-body">
                        <h3 class="card-title">What is the purpose of Schema markup?</h3>
                        <p class="card-text text-center text-md-left">The First Page Schema markup generator enables you to take particular bits of information on your website and transform it into the Schema markup JSON-LD format or structured data, which you then input into the code of your organization’s website. When you create JSON-LD markups using our advanced Schema markup generator and add it to your site, this allows search engines like Google to understand the content better on it, boosting its search results visibility and promoting more traffic to your web page.</p>
                    </div>
                </div>
				<div class="card">
                    <div class="card-body">
                        <h3 class="card-title">What are rich snippets?</h3>
                        <p class="card-text text-center text-md-left">When you use Google or other search engines, rich snippets are the regular results you see that also display additional data. For example, when a local business comes up in the search results, rich results will include further information for users that shows the relevance of the local business to their search. This can include an address, telephone number, business description, select business hours, prices, reviews and more.</p>
                    </div>
                </div>
				<div class="card">
                    <div class="card-body">
                        <h3 class="card-title">How can I test the Schema markup?</h3>
                        <p class="card-text text-center text-md-left">After you’ve used our structured data generator to create relevant Schema markup, you can test it easily here using the Structured Data Testing Tool by Google! Simply copy and paste the URL of the page you’d like to test and the Schema markup testing tool will let you know if the structured data on that HTML web page is valid or not. It’s even got a rich snippet test to boot!</p>
                    </div>
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

    <script type="text/javascript">
        function ifDateSelected(datepicker) {
            if ($(datepicker).val()) {
                if(!$(datepicker).hasClass('date-picked'))
                    $(datepicker).addClass('date-picked');
            }
            else {
                if(!$(datepicker).hasClass('date-picked'))
                    $(datepicker).removeClass('date-picked');
            }
        }

        $(function() {

            var loc_hash = window.location.hash;
            var sG;

            if (loc_hash && $(loc_hash).length > 0) {
                $('.active-tab').removeClass('active-tab');
                $(loc_hash).addClass('active-tab');
                $('.schema-tab.active').removeClass('active');
                $('.schema-tab[data-schema-target="' + loc_hash.substring(1) + '"]').addClass('active');
                sG = new schemaGenerator(loc_hash.substring(1));
            } else {
                sG = new schemaGenerator('Article');
            }

            $('#schema-tabs .schema-tab').each(function(index, tab) {
                $(tab).on('click', function(e) {
                    if ($(e.target).hasClass('active'))
                        return false;

                    $('#schema-tabs .schema-tab.active').removeClass('active');
                    $(e.target).addClass('active');

                    $('#schema-form .active-tab').removeClass('active-tab');
                    $($(e.target).attr('href')).addClass('active-tab');

                    sG.Purge();
                    sG = new schemaGenerator(e.target.getAttribute('data-schema-target'));
                });
            });

            $('#check-code').on('click', function() {
                $('#validator textarea').text(prettyCode());
                $('#validator').submit();
                $('#validator')[0].reset();
            });

            $('#copy-code').on('click', function() {
                var code = jQuery('<div>');
                var script = jQuery('<script>', { type: 'application/ld+json' });

                $(script).append('\n' + prettyCode() + '\n');
                $(code).append(script);
                
                navigator.clipboard.writeText($(code).html().toString());
            });

            $('#delete-code').on('click', function() {
                $('#schema-form').trigger('reset');

                $('.repeated-field').each(function(i, e) {
                    $(e).remove();
                });

                $('.multiselect_checkbox.revealer').each(function(i, e) {
                    var target = $('#' + $(e).attr('data-target-id'));
                    $(target).parent().addClass('hidden_field');
                    $(target).parent().parent().removeClass('reveal');

                    sG.Purge();
                    target = $('.schema-tab.active').first();
                    sG = new schemaGenerator($(target).attr('data-schema-target'));
                });
            });

            $(window).on('load', function() {
                if ($(window).width() <= 991) {
                    var pagination = jQuery('<div>', { class: 'pagination_wrapper' });

                    var tallest = $('.box-pagination .row > div').map(function() { return parseFloat($(this).height()); }).get().sort().pop();

                    $('.box-pagination .row').css({ 'height': (tallest + 30) + 'px' });

                    $('.box-pagination .row > div').each(function(i, e) {
                        $(e).css({ 'height': tallest + 'px' });

                        if (i == 0)
                            pagination.append('<span class="box_pag active-pag"></span>');
                        else
                            pagination.append('<span class="box_pag"></span>');
                    });

                    $('.box-pagination').append(pagination);

                    $('.box-pagination .pagination_wrapper .box_pag').each(function(index, pag) {
                        $(pag).on('click', function(e) {
                            changePag(index);
                        });
                    });
                }
            });

            function changePag(index) {
                $('.box-pagination .row > div.active-pag').removeClass('active-pag');
                $($('.box-pagination .row > div')[index]).addClass('active-pag');
                $('.box-pagination .pagination_wrapper .box_pag.active-pag').removeClass('active-pag');
                $($('.box-pagination .pagination_wrapper .box_pag')[index]).addClass('active-pag');
            }

            function prettyCode() {
                var code = $('#schema-generated code > .code-block').text();

                output = JSON.stringify(JSON.parse(code), null, 2);

                return output;
            }
        });
    </script>
    
    <script type="text/javascript" src="/wp-content/themes/firstpage/assets/js/schemaGenerator.min.js"></script>

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