<?php
/**
 * Template Name: Faqs
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

<style>
.faqs-banner .search-form button {
    font-weight: 700;
    font-size: 1.2rem;
}

.faqs-banner input[type="text"] {
    font-size: 1.2rem;
    color: #555;
}

.faqs-banner input[type="text"]::placeholder {
    color: #ccc;
}

.faqs-banner input::placeholder {
    color: #D8D8D8;
}

.faqs-banner input::focus {
    color: #555;
}

.top-faqs-term {
    background: #FF5254;
    border-radius: 6px 6px 0 0;
    text-align: center;
    text-transform: uppercase;
}

.top-faqs-term h2 {
    color: #fff;
    font-size: 34px;
    margin-bottom: 0;
}

.faqs-bg-item {
    background: #fff;
    margin-top: -2px;
    margin-bottom: 40px;
    background-clip: content-box;
}

.top-faqs-list ul {
    margin: 0;
    padding: 20px 30px;
}

.top-faqs-list li {
    background: url(/wp-content/themes/firstpage/assets/img/FAQs/icon-q.svg) no-repeat;
    padding: 6px 0 20px 60px;
    font-size: 24px;
    list-style: none;
    margin-bottom: 10px;
}

.faqs-post-list a {
    color: #427FE0;
    text-decoration: underline;
}

.top-faqs-term .icon_faqs_seo {
    background: url(/wp-content/themes/firstpage/assets/img/FAQs/icn_faqs_seo.svg) no-repeat;
    height: 34px;
    width: 34px;
}

.top-faqs-term .icon_faqs_social {
    background: url(/wp-content/themes/firstpage/assets/img/FAQs/icn_faqs_social.svg) no-repeat;
    height: 35px;
    width: 35px;
}

.top-faqs-term .icon_faqs_google-ads {
    background: url(/wp-content/themes/firstpage/assets/img/FAQs/icn_faqs_google.svg) no-repeat;
    height: 39px;
    width: 39px;
}

.search_results {
    background: url(/wp-content/themes/firstpage/assets/img/FAQs/icn_search_results.svg) no-repeat;
    padding-left: 56px;
}

.top-faqs-term .icon_faqs_others {
    background: url(/wp-content/themes/firstpage/assets/img/FAQs/icn_faqs_other.svg) no-repeat;
    height: 37px;
    width: 49px;
}

.top-faqs-term .f-list-icon {
    margin-right: 5px;
    display: inline-flex;
    margin-bottom: 10px;
    vertical-align: middle;
}

.row-eq-height {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.faqs-container {
    display: block;
    height: 100%;
    box-shadow: 1px 6px 7px #ddd;
    border-radius: 0 0 6px 6px;
}

@media only screen and (max-width: 600px) {

    .faqs-banner .input-group {
        display: block;
    }

    .faqs-banner input[name="s"] {
        width: 100%;
        border-radius: 6px !important;
    }

    .faqs-banner button[type="submit"] {
        margin-top: 10px;
        width: 100%;
        border-radius: 6px !important;
        padding: 23px;
    }

    .top-faqs-list li {
        font-size: 16px;
    }

}
</style>



<?php
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $post->ID,
        'order'          => 'DESC',
    );

    $parent = new WP_Query( $args );

    if ( $parent->have_posts() ) : ?>

<section class="section-bloglist">
    <div class="container">


        <div class="row mt-4 row-eq-height pr-md-5 pl-md-5">

            <div class="col-12 col faqs-bg-item">
                <div class="faqs-container">
                    <div class="top-faqs-term p-3">
                        <h2 class="f-icon"><span class="f-list-icon icon_faqs_seo"></span> FAQS</h2>
                    </div>
                    <div class="top-faqs-list">
                        <ul>

                            <?php while ( $parent->have_posts() ) :  $parent->the_post();  ?>

                            <li class="faqs-post-list">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <span> <?php the_title(); ?></span>
                                </a>
                            </li>

                            <?php endwhile; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="content" class="site__content" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
    <?php endwhile; ?>

</section>



<?php endif; ?>





<?php get_footer(); ?>