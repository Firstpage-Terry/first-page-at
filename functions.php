<?php
define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());
require get_template_directory() . '/inc/default-setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/acf-functions.php';
/********/
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

//datepicker
function wpse_enqueue_datepicker() {
    // Load the datepicker script (pre-registered in WordPress).
    wp_enqueue_script( 'jquery-ui-datepicker' );
    // You need styling for the datepicker. For simplicity I've linked to Google's hosted jQuery UI CSS.
    wp_register_style( 'jquery-ui', 'https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css' );
    wp_enqueue_style( 'jquery-ui' );
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_datepicker' );

//enqueue admin style
function enqueue_admin_style() {
	if(is_admin()) {
		wp_enqueue_style( 'custom-admin-style', get_template_directory_uri() . '/lib/css/custom-admin-style.css?time=' . filemtime(get_stylesheet_directory() . "/lib/css/custom-admin-style.css") );
	}
}
add_action('init', 'enqueue_admin_style');

// wordpress login logo change
function login_css() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/lib/css/custom-admin-style.css?time=' . filemtime(get_stylesheet_directory() . "/lib/css/custom-admin-style.css") );
}
add_action('login_head', 'login_css');

/*** Remove Query String from Static Resources ***/
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );


function my_scripts() {
    // Register the script like this for a theme:
  wp_register_script( 'custom-script', get_template_directory_uri() . '/assets/js/defaults/custom-script.js?v=' . filemtime(get_stylesheet_directory()) );
	wp_enqueue_script( 'custom-script' );
	wp_register_script( 'map', get_template_directory_uri() . '/assets/js/defaults/map.js?v1.01' );
	wp_enqueue_script( 'map' );
	wp_register_script( 'navigation', get_template_directory_uri() . '/assets/js/defaults/navigation.js' );
	wp_enqueue_script( 'navigation' );
  //   wp_register_script( 'strategy-forms', get_template_directory_uri() . '/js/defaults/strategy-forms.js' );
	// wp_enqueue_script( 'strategy-forms' );
  // wp_register_script( 'strategy-form-free-proposal', get_template_directory_uri() . '/js/defaults/strategy-form-free-proposal.js' );
	// wp_enqueue_script( 'strategy-form-free-proposal' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// This theme uses wp_nav_menu() in two locations.  
register_nav_menus( array(  
'primary_navigation' => __( 'First Page Primary Navigation', 'firstpage' ),
'mobile_seo' => __( 'Mobile SEO Navigation', 'firstpage' ),
'mobile_google_ads' => __( 'Mobile Google Ads Navigation', 'firstpage' ),
'mobile_social' => __( 'Mobile Social Navigation', 'firstpage' ),
'mobile_other_services' => __( 'Other Services Navigation', 'firstpage' ),
'mobile_free_tools' => __( 'Mobile Free Tools Navigation', 'firstpage' ),
'mobile_about_us' => __( 'Mobile About Us Navigation', 'firstpage' ),
'footer_services_menu' => __( 'Footer Services Navigation', 'firstpage' ),
'footer_company_menu' => __( 'Footer Company Navigation', 'firstpage' ),
) ); 


//
add_action('wp_ajax_myfilter', 'blog_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'blog_filter_function');
 
function blog_filter_function(){
	$args = array(
        'posts_per_page' => -1,
		'orderby' => 'date', // we will sort posts by date
		'order'	=> 'DESC' // ASC or DESC
	);
 
	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
            // 'relation' => 'AND',
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryfilter']
			)
		);
 
	$query = new WP_Query( $args );
    $author_id=$post->post_author;
 
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
        
echo '<div class="blog-cont col-12 col-md-6">';
echo '<div class="blog-content blog-content-card">';
if(in_category("1") ) {
  echo '<a class="image-wrapper post-thumbnail is-video" href="' . get_permalink( get_the_ID() ) . '">';
} else {
  echo '<a class="image-wrapper post-thumbnail" href="' . get_permalink( get_the_ID() ) . '">';
}
echo '<img src="' . get_the_post_thumbnail_url( get_the_ID() ) . '" alt="' . $query->post->post_title . '">';
echo '<span id="post-length" class="post-length eta">' .get_post_meta( get_the_ID(), 'post_length', true). ' </br> minute </br> read </span>';
echo '</a>';
echo '<div class="post-desc">';
echo '<div class="post-avatar" style="background-image: url(' . get_avatar_url( get_the_author_meta( 'ID' ) ) . ')"></div>';
echo '<div class="post-info"><span class="post-author">'. get_the_author_meta( 'display_name' , $author_id ) .'</span><br><span class="post-date">'. get_the_date("d/m/Y") .'</span></div>';
echo '</div>';
echo '<div class="post-content">';
echo '<h2 class="post-title"><a href="' . get_permalink( get_the_ID() ) . '">' . $query->post->post_title . '</a></h2>';
echo '<div class="blog-link">';
echo '<a href="' . get_permalink( get_the_ID() ) . '">Read more</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';


endwhile;
wp_reset_postdata();
else :
echo 'No posts found';
endif;

die();
}

remove_filter('pre_user_description', 'wp_filter_kses');  
add_filter( 'pre_user_description', 'wp_filter_post_kses' ); 

//Title Filter
function title_filter( $where, &$wp_query ){
  global $wpdb;
  if ( $search_term = $wp_query->get( 'search_prod_title' ) ) {
      $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'';
  }
  return $where;
}



function simpay_custom_add_default_coupon() {
    $default = "1.00";
    $url_var = 'amt';
    $amt = isset( $_GET[ $url_var ] ) ? sanitize_text_field( $_GET[ $url_var ] ) : $default;
    $disabled = isset( $_GET[ $url_var ] ) ? true : false;
      wp_add_inline_script(
        'simpay-public-pro',
        "jQuery( document ).on( 'simpayBindCoreFormEventsAndTriggers', function( e, spFormElem, formData ) {
            spFormElem.find( '.simpay-amount-input' ).val( '{$amt}'  );
            spFormElem.find( '.simpay-amount-input' ).prop('disabled', $disabled);
            console.log($disabled)
            const fireEvent = (element, eventType='blur') => element && element.dispatchEvent(new Event(eventType));
            var input_title = document.getElementById( 'simpay-form-13064-field-6' );
            fireEvent(input_title)
        } );"
      );
  }
  add_action( 'wp_enqueue_scripts', 'simpay_custom_add_default_coupon' );

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
remove_action( 'template_redirect', 'rest_output_link_header', 11 );

function itsme_disable_feed() {
    wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
}
add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

// add_filter( 'wpseo_title', '__return_false' );

add_action('wp_head', 'get_the_POSTID', 1);
function get_the_POSTID() {
    $post = get_post();
    $blog_id = $post->ID;
    $author = $post->post_author;
    $author_name = get_the_author_meta( 'display_name' , $author );
    $date = $post->post_date;
    $author_image = get_field('post_author',$post->ID);
    $feature_image = get_post_thumbnail_id( $post->ID );
    $feature_image_url = wp_get_attachment_url( $feature_image );
?>
    <?php if(is_singular('post')): ?>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
  "mainEntityOfPage": [{
    "@type": "WebPage",
    "@id": "<?php echo get_permalink(); ?>"
  }],
      "headline": "<?php echo get_the_title( $blog_id ); ?>",
      "description": "<?php echo $content; ?>",
      "image": [
        <?php echo '"' .$feature_image_url. '"' ; ?>
       ],
      "datePublished": "<?php echo $date; ?>",
      "author": [{
          "@type": "Person",
          "name": "<?php echo $author_name; ?>",
          "url": "<?php echo $author_image; ?>"
        }]
    }
    </script>
    <?php endif; ?>
<?php
    return ! empty( $post ) ? $post->ID : false;
}

// Language functions
function lang_switcher() {
  $langs = apply_filters( 'wpml_active_languages', null, 'order=asc');

  if( !empty( $langs ) ) { ?>	
    <ul class="language-switchers">
    <?php
      foreach( $langs as $lang ){
        $langName = '';
        $missing = $lang['missing'];

        if ($lang['code'] == 'en') {
          $langName = 'EN';
        } elseif ( $lang['code'] == 'de' ) {
          $langName = 'DE';
        } ?>

        <?php if($missing != '1'): ?>
          <li class="lang-item lang-item-first <?php if ($lang['active']): echo 'current-lang'; endif; ?>">
            <?php if (!$lang['active']) {
              echo '<a lang="en" href="' . $lang['url'] . '">' . $langName . '</a>';
            } else {
              echo '<span>' . $langName . '</span>';
            } 
            ?>
          </li>
        <?php endif; ?>

      <?php }
    ?>
    </ul>
  <?php }
}

function trans($en, $zh) {
  if(ICL_LANGUAGE_CODE == 'en') {
    echo $en;
  } else if (ICL_LANGUAGE_CODE == 'zh'){
    echo $zh;
  }
}
