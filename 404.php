<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package roi
 */
get_header(); ?>

<!--BEGIN custom HTML code below -->
<section class="banner not-found-section">
        <div class="container text-center ">
            <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                <h2>Hello,</h2>
                <p>it's not me you're <br class="d-block d-sm-none">looking for</p>
            <?php endif; ?>
            <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                <h2>你好，</h2>
                <p>相信我不是你尋找的頁面</p>
            <?php endif; ?>
            <div class="not-found-main row mt-5">
                <div class="col-12 col-md-8"> <img src="/wp-content/uploads/2021/12/404_Lionel-Richie_Final.svg" alt=""></div>
                <div class="col-12 col-md-4">
                        <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                            <a href="/" class="btn fp-btn fp-btn-orange">Go to Homepage</a>
                        <?php endif; ?>
                        <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                            <a href="/" class="btn fp-btn fp-btn-orange">返回首頁</a>
                        <?php endif; ?>
                </div>


            </div>
        </div>
    </section>
<!--END custom HTML code below -->
    <style>
        footer {
            margin-top: 0;
        }
    </style>

<?php get_footer(); ?>
