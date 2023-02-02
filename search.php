<?php get_header(); ?>

<section class="banner pad-header">
    <div class="container">
        <h1 class="text-center">Learning Centre</h1>
    </div>
</section>


<section id="content" class="site__content p-0" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
    <?php endwhile; ?>
</section>


<?php
	$search_s = get_search_query();


    $category_args = array(
        'post_type' => 'post'
    );

    $categories = get_categories( $category_args );

    $args = array(
        'numberposts'	=> -1,
        'post_type' => 'post',
        'orderby' => 'date', // we will sort posts by date
		'order'	=> 'DESC', // ASC or DESC
        'posts_per_page' => 10,
        'paged' => $paged,
		's' => $search_s
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
                        <input type="text" placeholder="Search..." name="s">
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
                        <h5>SELECT TO FILTER</h5>
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
                            Clear All Filters
                        </button>
                    </div>
                    <div class="card-body topics">
                        <h5>TOPICS</h5>
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
                            <button id="applyFilter" hidden>Apply filter</button>
                            <input type="hidden" name="action" value="myfilter">
                        </form>
                    </div>
                </div>
                <div class="blog-sidebar-banner">
                    <img src="https://firstpage.com.au/wp-content/themes/firstpage-au/assets/img/img_nick_blog@2x.png"
                        class="img-fluid" alt="First Page" />
                    <p class="p-tag-h2-style">Get your FREE revenue growth strategy session <br> valued at $2000.</p>
                    <p>Limited spots available!</p>
                    <a href="/free-growth-strategy/"
                        class="btn btn-block fp-btn fp-btn-orange fp-btn-shadow promoted-banner-lcenter">GET YOUR FREE
                        REVENUE <br> GROWTH SESSION</a>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-6">
                        <div class="dropdown category-filter-dropdown d-lg-none" data-toggle="modal"
                            data-target="#select-to-filter-modal">
                            <a class="dropdown-toggle" href="#" role="button">
                                Filter by topic
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
                        <img src="/wp-content/themes/firstpage/assets/img/icn_no_blog_posts_found.svg" alt="First Page" />
                        <h2>No Posts Found</h2>
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
                            <a class="image-wrapper post-thumbnail <?php // echo $video_cat; ?>"
                                href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>"
                                    alt="<?php echo $post->post_title; ?>">
                                <span id="post-length-<?php echo $post->ID ?>" class="post-length eta"><?php echo get_field('post_length'); ?> </br> minute </br> read </span>
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
                                    <a href="<?php echo get_permalink(); ?>">Read more</a>
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
        <div class="pagination w-100">
            <div class="nav-links mx-auto">
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
            <h5 class="modal-title" data-dismiss="modal" aria-label="Close">SELECT TO FILTER</h5>
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
                            Clear All Filters
                        </button>
                    </div>
                    <div class="card-body topics">
                        <h5>TOPICS</h5>
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
                            <button id="applyFilter" hidden>Apply filter</button>
                            <input type="hidden" name="action" value="myfilter">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>