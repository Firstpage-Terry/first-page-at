<?php get_header(); ?>

<section class="banner pad-header">
    <div class="container">
    <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
        <h1 class="text-center">Learning Centre</h1>
    <?php endif; ?>
    <?php if(ICL_LANGUAGE_CODE == 'de'): ?>
        <h1 class="text-center">教學中心</h1>
    <?php endif; ?>
    </div>
</section>

<section id="content" class="site__content p-0" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
    <?php endwhile; ?>
</section>


<?php
    $category_args = array(
        'post_type' => 'post'
    );

    $categories = get_categories( $category_args );
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $args = array(
        'numberposts'	=> -1,
        'post_type' => 'post',
        'orderby' => 'date', // we will sort posts by date
		'order'	=> 'DESC', // ASC or DESC
        'posts_per_page' => 10,
        'paged' => $paged

    );
    $query = new WP_Query( $args );
    $all_posts = $query->posts;
    
?>



<!-- Blogs Grid -->
<section class="section-bloglist section-grey">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 blog-sidebar d-none d-lg-block">
                <form method="get" role="search" action="<?php echo site_url() ?>">
                    <div class="search-form">
                        <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                            <input type="text" placeholder="Search..." name="s">
                        <?php endif; ?>
                        <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                            <input type="text" placeholder="搜索..." name="s">
                        <?php endif; ?>
                        <button type="submit">
                            <svg style="width:36px;height:36px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                            </svg>
                        </button>
                    </div>
                    <input type="hidden" name="post_type" value="post">
                </form>
                <div class="card">
                    <div class="card-body select-to-filter" style="display: none;">
                        <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                            <h5>SELECT TO FILTER</h5>
                        <?php endif; ?>
                        <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                            <h5>選擇篩選</h5>
                        <?php endif; ?>
                        <?php foreach($categories as $category) { ?>
                        <button class="category-filter-button <?php echo $category->term_id; ?>" style="display: none;"
                            id="<?php echo $category->term_id; ?>">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                            </svg>
                            <?php echo $category->name; ?>
                        </button>
                        <?php } ?>
                        <button class="category-filter-button clear-all-filters">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                            </svg>
                            <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                                Clear All Filters
                            <?php endif; ?>
                            <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                                清除所有篩選條件
                            <?php endif; ?>
                        </button>
                    </div>
                    <div class="card-body topics">
                        <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                            <h5>TOPICS</h5>
                        <?php endif; ?>
                        <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                            <h5>論題</h5>
                        <?php endif; ?>
                        
                        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                            <?php foreach($categories as $category) { ?>
                            <div class="custom-control custom-radio">
                                <input
                                    class="input-category-filter <?php echo $category->term_id; ?> custom-control-input"
                                    type="checkbox" value="<?php echo $category->term_id; ?>"
                                    id="<?php echo $category->slug; ?>" name="categoryfilter[]">
                                <label class="custom-control-label" for="<?php echo $category->slug; ?>">
                                    <?php echo $category->name;?>
                                </label>
                            </div>
                            <?php } ?>
                            <button id="applyFilter" hidden>
                                <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                                    Apply filter
                                <?php endif; ?>
                                <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                                    <h5>應用篩選條件</h5>
                                <?php endif; ?>
                            </button>
                            <input type="hidden" name="action" value="myfilter">
                        </form>
                    </div>
                </div>
                <div class="blog-sidebar-banner">
                    <img src="/wp-content/themes/firstpage/assets/img/img_nick_blog@2x.png"
                        class="img-fluid" alt="First Page" style="margin-bottom: -100px;"/>
                    <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                        <p class="p-tag-h2-style">Get your FREE revenue growth strategy session<br>valued at $2000HKD.</p>
                        <p>Limited spots available!</p>
                        <a href="/free-growth-strategy/"
                            class="btn btn-block fp-btn fp-btn-orange fp-btn-shadow promoted-banner-lcenter">GET YOUR FREE
                            REVENUE <br> GROWTH SESSION</a>
                    <?php endif; ?>
                    <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                        <p class="p-tag-h2-style">免費領取一節價值港幣＄2000的行銷策略課堂，<br>增加公司收益！</p>
                        <p>名額有限！</p>
                        <a href="/zh/free-growth-strategy/"
                            class="btn btn-block fp-btn fp-btn-orange fp-btn-shadow promoted-banner-lcenter">立即領取</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-6">
                        <div class="dropdown category-filter-dropdown d-lg-none" data-toggle="modal"
                            data-target="#select-to-filter-modal">
                            <a class="dropdown-toggle" href="#" role="button">
                            <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                                Filter by topic
                            <?php endif; ?>
                            <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                                按主題過濾
                            <?php endif; ?>
                                <svg style="width:40px;height:40px;margin-left: auto;" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="row" id="response">
                    <?php if (count($all_posts) == 0) { ?>
                    <div class="no-posts-found">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icn_no_blog_posts_found.svg" alt="First Page" />
                        <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                            <h2>No Posts Found</h2>
                        <?php endif; ?>
                        <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                            <h2>未找到帖子</h2>
                        <?php endif; ?>
                    </div>
                    <?php } ?>
                    <?php foreach($all_posts as $post) { ?>
                    <?php setup_postdata($post); ?>
                    <?php
                    $author_id = get_the_author_meta('ID', $post->post_author);
                    $author_image = get_field('profile_image', 'user_'. $author_id );
                    ?>
                    <div class="blog-cont col-12 col-md-6">
                        <div class="blog-content blog-content-card" data-file="<?php echo get_permalink(); ?>">
                            <a class="image-wrapper post-thumbnail <?php echo $video_cat; ?>"
                                href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>"
                                    alt="<?php echo $post->post_title; ?>">
                                    <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                                        <span id="post-length-<?php echo $post->ID ?>" class="post-length eta"><?php echo get_field('post_length'); ?> </br> minute </br> read </span>
                                    <?php endif; ?>
                                    <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                                        <span id="post-length-<?php echo $post->ID ?>" class="post-length eta"><?php echo get_field('post_length'); ?>分鐘</br>閱讀時間</span>
                                    <?php endif; ?>
                            </a>
                            <div class="post-desc">
                                <div class="post-avatar"
                                    style="background-image: url('<?php echo $author_image['url']; ?>')">
                                </div>
                                <div class="post-info"><span
                                        class="post-author"><?php echo get_the_author_meta('display_name', $post->post_author); ?></span><br><span
                                        class="post-date"><?php $t = strtotime($post->post_date); echo date('d/m/Y',$t);; ?></span>
                                </div>
                            </div>

                            <div class="post-content">
                                <h2 class="post-title"><a
                                        href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></h2>
                                <div class="blog-link">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                                            Read more
                                        <?php endif; ?>
                                        <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                                            閱讀更多
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                    <?php } ?>
                </div>
            </div>
        </div>



    </div>
    <div class="row" id="posts-pagination">
        <div class="pagination">
            <div class="nav-links w-100">
                <?php echo paginate_links( array(

        'prev_text' => '<i class="fa fa-caret-left" aria-hidden="true"></i>',
        'next_text' => '<i class="fa fa-caret-right" aria-hidden="true"></i>'

        )); ?></div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="select-to-filter-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content blog-sidebar">
            <h5 class="modal-title" data-dismiss="modal" aria-label="Close">
                <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                    SELECT TO FILTER
                <?php endif; ?>
                <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                    選擇篩選
                <?php endif; ?>
            </h5>
            <button id="button-select-to-filter" type="button" class="modal-close close" data-dismiss="modal"
                aria-label="Close">
                <svg style="width:30px;height:30px" viewBox="0 0 24 24">
                    <path fill="#00225D"
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </button>

            <div class="modal-body">
                <div class="card">
                    <div class="card-body select-to-filter" style="display: none;">
                        <?php foreach($categories as $category) { ?>
                        <button class="category-filter-button <?php echo $category->term_id;?>" style="display: none;"
                            id="<?php echo $category->term_id;?>">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                            </svg>
                            <?php echo $category->name;  ?>
                        </button>
                        <?php } ?>
                        <button class="category-filter-button clear-all-filters">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                            </svg>
                            <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                                Clear All Filters
                            <?php endif; ?>
                            <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                                清除所有篩選條件
                            <?php endif; ?>
                        </button>
                    </div>
                    <div class="card-body topics">
                        <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                            <h5>TOPICS</h5>
                        <?php endif; ?>
                        <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                            <h5>論題</h5>
                        <?php endif; ?>
                        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                            <?php foreach($categories as $category) { ?>
                            <div class="custom-control custom-radio">
                                <input
                                    class="input-category-filter <?php echo $category->term_id;?> custom-control-input"
                                    type="checkbox" value="<?php echo $category->term_id;?>"
                                    id="<?php echo $category->slug;?>" name="categoryfilter[]">
                                <label class="custom-control-label <?php echo $category->term_id;?>"
                                    for="<?php echo $category->slug;?>">
                                    <?php echo $category->name;  ?>
                                </label>
                            </div>
                            <?php } ?>
                            <button id="applyFilter" hidden>
                                <?php if(ICL_LANGUAGE_CODE == "en"): ?>
                                    Apply filter
                                <?php endif; ?>
                                <?php if(ICL_LANGUAGE_CODE == "zh"): ?>
                                    <h5>應用篩選條件</h5>
                                <?php endif; ?>
                            </button>
                            <input type="hidden" name="action" value="myfilter">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- <script>
/*!

Name: Reading Time
Dependencies: jQuery
Author: Michael Lynch
Author URL: http://michaelynch.com
Date Created: August 14, 2013
Date Updated: June 19, 2015
Licensed under the MIT license

*/
!(function(e) {
    e.fn.readingTime = function(n) {
        var t = {
                readingTimeTarget: ".eta",
                wordCountTarget: null,
                wordsPerMinute: 270,
                round: !0,
                lang: "en",
                lessThanAMinuteString: "",
                prependTimeString: "\n minute \n read",
                prependWordString: "",
                remotePath: null,
                remoteTarget: null,
                success: function() {},
                error: function() {},
            },
            i = this,
            r = e(this);
        i.settings = e.extend({}, t, n);
        var a = i.settings;
        if (!this.length) return a.error.call(this), this;
        if ("it" == a.lang)
            var s = a.lessThanAMinuteString || "Meno di un minuto",
                l = "";
        else
            var s = a.lessThanAMinuteString || "1 </br> minute </br> read",
                l = "";
        var u = function(n) {
            if ("" !== n) {
                var t = n.trim().split(/\s+/g).length,
                    i = a.wordsPerMinute / 60,
                    r = t / i;
                if (a.round === !0) var u = Math.round(r / 60);
                else var u = Math.floor(r / 60);
                var g = Math.round(r - 60 * u);
                if (a.round === !0) e(a.readingTimeTarget).text(u > 0 ? u + a.prependTimeString + " " + l :
                    a.prependTimeString + s);
                else {
                    var o = u + ":" + g;
                    e(a.readingTimeTarget).text(a.prependTimeString + o);
                }
                "" !== a.wordCountTarget && void 0 !== a.wordCountTarget && e(a.wordCountTarget).text(a
                    .prependWordString + t), a.success.call(this);
            } else a.error.call(this, "The element is empty.");
        };
        r.each(function() {
            null != a.remotePath && null != a.remoteTarget ?
                e.get(a.remotePath, function(n) {
                    u(e("<div>").html(n).find(a.remoteTarget).text());
                }) :
                u(r.text());
        });
    };
})(jQuery);
</script>

<script async>
		
function getEstimate(){
    var elems = $('.blog-content').nextAll(), count = elems.length;
    var currentCount = 0;
        $(function() {

            $('.blog-content').each(function() {
                currentCount += 1;
                $(this).readingTime({
                    readingTimeAsNumber: true,
                    wordsPerMinute: 1000,
                    round: true,
                    readingTimeTarget: $(this).find('.post-length'),
                    remotePath: $(this).attr('data-file'),
                    remoteTarget: '.post-content'
                });

                if (currentCount == count){
                    doMyThing();
                } 


            });
            
        });
}

getEstimate();

</script> -->


<?php get_footer(); ?>