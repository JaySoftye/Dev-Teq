<?php

include_once 'lib/bootstrap-four-wp-navwalker.php';

global $bootstrap_four_version;

$bootstrap_four_version = '4.0.0';

add_theme_support( 'post-thumbnails' );

if ( ! isset( $content_width ) ) $content_width = 837;


if ( ! function_exists( 'bootstrap_four_widgets_init' ) ) :
  function bootstrap_four_widgets_init() {
    register_sidebar( array(
      'name' => __( 'Right Sidebar', 'bootstrap-four' ),
      'id' => 'right-sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ) );
  }
endif;
add_action( 'widgets_init', 'bootstrap_four_widgets_init' );

if ( ! function_exists( 'bootstrap_four_setup' ) ) :
  function bootstrap_four_setup() {

    add_theme_support( 'custom-background', array(
      'default-color' => 'ffffff',
    ) );

    $header_defaults = array(
    	'default-image'          => '',
    	'width'                  => 0,
    	'height'                 => 0,
    	'flex-height'            => false,
    	'flex-width'             => false,
    	'uploads'                => true,
    	'random-default'         => false,
    	'header-text'            => false,
    	'default-text-color'     => '',
    	'wp-head-callback'       => '',
    	'admin-head-callback'    => '',
    	'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-header', $header_defaults );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );

    register_nav_menus( array(
      'main_menu' => __( 'Main Menu', 'bootstrap-four' ),
      // 'footer_menu' => 'Footer Menu'
    ) );

    add_editor_style( 'css/bootstrap.min.css' );
  }
endif; // bootstrap_four_setup
add_action( 'after_setup_theme', 'bootstrap_four_setup' );


if ( ! function_exists( 'bootstrap_four_theme_styles' ) ) :
  function bootstrap_four_theme_styles() {
    global $bootstrap_four_version;
    wp_enqueue_style( 'bootstrap-four-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.4.0' );
    wp_register_style( 'bootstrap-four-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $bootstrap_four_version );
    wp_enqueue_style( 'bootstrap-four-styles', get_stylesheet_uri(), array( 'bootstrap-four-bootstrap' ), '1' );
    wp_enqueue_style( 'bootstrap-four-flex', get_template_directory_uri() . '/css/bootstrap-flex.min.css' );
  }
endif;
add_action('wp_enqueue_scripts', 'bootstrap_four_theme_styles');


if ( ! function_exists( 'bootstrap_four_theme_scripts' ) ) :
  function bootstrap_four_theme_scripts() {
    global $bootstrap_four_version;
    wp_enqueue_script( 'bootstrap-four-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), $bootstrap_four_version, true );
  }
endif;
add_action('wp_enqueue_scripts', 'bootstrap_four_theme_scripts');


function bootstrap_four_nav_li_class( $classes, $item ) {
  $classes[] .= ' nav-item';
  return $classes;
}
add_filter( 'nav_menu_css_class', 'bootstrap_four_nav_li_class', 10, 2 );


function bootstrap_four_nav_anchor_class( $atts, $item, $args ) {
  $atts['class'] .= ' nav-link';
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'bootstrap_four_nav_anchor_class', 10, 3 );


function bootstrap_four_comment_form_before() {
  echo '<div class="card"><div class="card-block">';
}
add_action( 'comment_form_before', 'bootstrap_four_comment_form_before', 10, 5 );


function bootstrap_four_comment_form( $fields ) {
  $fields['fields']['author'] = '
  <fieldset class="form-group comment-form-email">
    <label for="author">' . __( 'Name', 'bootstrap-four' ) . '</label>
    <input type="text" class="form-control" name="author" id="author" placeholder="' . __( 'name', 'bootstrap-four' ) . '" aria-required="true" required>
  </fieldset>';
  $fields['fields']['email'] ='
  <fieldset class="form-group comment-form-email">
    <label for="email">' . __( 'Email address ', 'bootstrap-four' ) . '<small class="text-muted">' . __( 'your email address will not be published.', 'bootstrap-four' ) . '</small></label>
    <input type="email" class="form-control" id="email" placeholder="' . __( 'email', 'bootstrap-four' ) . '" aria-required="true" required>
  </fieldset>';
  $fields['fields']['url'] = '
  <fieldset class="form-group comment-form-email">
    <label for="url">' . __( 'School, District, or Company Website', 'bootstrap-four' ) . '</label>
    <input type="text" class="form-control" name="url" id="url" placeholder="' . __( 'http://example.org', 'bootstrap-four' ) . '">
  </fieldset>';
  $fields['comment_field'] = '
  <fieldset class="form-group">
    <label for="comment">' . __( 'Comment', 'bootstrap-four' ) . '</label>
    <textarea class="form-control" id="comment" name="comment" rows="3" aria-required="true" required></textarea>
  </fieldset>';
  $fields['comment_notes_before'] = '';
  $fields['class_submit'] = 'btn btn-primary';
  return $fields;
}
add_filter( 'comment_form_defaults', 'bootstrap_four_comment_form', 10, 5 );


function bootstrap_four_comment_form_after() {
  echo '</div><!-- .card-block --></div><!-- .card -->';
}
add_action( 'comment_form_after', 'bootstrap_four_comment_form_after', 10, 5 );

function my_theme_slug_add_post_formats_to_page(){
    add_post_type_support( 'page', 'post-formats' );
    register_taxonomy_for_object_type( 'post_format', 'page' );
}

/*
* Creating a function to create our Custom Post Types
*/

function custom_post_type_teq_tip() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Teq-Tips', 'Post Type General Name', 'bootstrap-four' ),
		'singular_name'       => _x( 'Teq-Tip', 'Post Type Singular Name', 'bootstrap-four' ),
		'menu_name'           => __( 'Teq Tips', 'bootstrap-four' ),
		'parent_item_colon'   => __( 'Parent Teq-Tip', 'bootstrap-four' ),
		'all_items'           => __( 'All Teq Tips', 'bootstrap-four' ),
		'view_item'           => __( 'View Teq-Tip', 'bootstrap-four' ),
		'add_new_item'        => __( 'Add New Teq-Tip', 'bootstrap-four' ),
		'add_new'             => __( 'Add New', 'bootstrap-four' ),
		'edit_item'           => __( 'Edit Teq-Tip', 'bootstrap-four' ),
		'update_item'         => __( 'Update Teq-Tip', 'bootstrap-four' ),
		'search_items'        => __( 'Search Teq-Tip', 'bootstrap-four' ),
		'not_found'           => __( 'Not Found', 'bootstrap-four' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'bootstrap-four' ),
	);
// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'Teq-Tips', 'bootstrap-four' ),
		'description'         => __( 'Teq-Tip', 'bootstrap-four' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'comments', 'revisions' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
    'menu_icon'           => 'dashicons-money',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
    'taxonomies'          => array('post_tag')
	);
	// Registering your Custom Post Type
	register_post_type( 'Teq-Tips', $args );
}

function custom_post_type_nedm_survey() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'NEDM-Survey', 'Post Type General Name', 'bootstrap-four' ),
		'singular_name'       => _x( 'NEDM-Survey', 'Post Type Singular Name', 'bootstrap-four' ),
		'menu_name'           => __( 'NEDM Survey', 'bootstrap-four' ),
		'parent_item_colon'   => __( 'Parent NEDM-Survey', 'bootstrap-four' ),
		'all_items'           => __( 'All NEDM-Surveys', 'bootstrap-four' ),
		'view_item'           => __( 'View NEDM-Survey', 'bootstrap-four' ),
		'add_new_item'        => __( 'Add New NEDM-Survey', 'bootstrap-four' ),
		'add_new'             => __( 'Add New', 'bootstrap-four' ),
		'edit_item'           => __( 'Edit NEDM-Survey', 'bootstrap-four' ),
		'update_item'         => __( 'Update NEDM-Survey', 'bootstrap-four' ),
		'search_items'        => __( 'Search NEDM-Survey', 'bootstrap-four' ),
		'not_found'           => __( 'Not Found', 'bootstrap-four' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'bootstrap-four' ),
	);
// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'NEDM-Surveys', 'bootstrap-four' ),
		'description'         => __( 'NEDM-Surveys', 'bootstrap-four' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'author', 'custom-fields', 'revisions' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
    'menu_icon'           => 'dashicons-analytics',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
    'taxonomies'          => array('post_tag')
	);
	// Registering your Custom Post Type
	register_post_type( 'NEDM-Surveys', $args );
}

function custom_post_type_famis_product() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'FAMIS-Product', 'Post Type General Name', 'bootstrap-four' ),
		'singular_name'       => _x( 'FAMIS-Product', 'Post Type Singular Name', 'bootstrap-four' ),
		'menu_name'           => __( 'FAMIS-Product', 'bootstrap-four' ),
		'parent_item_colon'   => __( 'Parent FAMIS-Product', 'bootstrap-four' ),
		'all_items'           => __( 'All FAMIS-Products', 'bootstrap-four' ),
		'view_item'           => __( 'View FAMIS-Product', 'bootstrap-four' ),
		'add_new_item'        => __( 'Add New FAMIS-Product', 'bootstrap-four' ),
		'add_new'             => __( 'Add New', 'bootstrap-four' ),
		'edit_item'           => __( 'Edit FAMIS-Product', 'bootstrap-four' ),
		'update_item'         => __( 'Update FAMIS-Product', 'bootstrap-four' ),
		'search_items'        => __( 'Search FAMIS-Product', 'bootstrap-four' ),
		'not_found'           => __( 'Not Found', 'bootstrap-four' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'bootstrap-four' ),
	);
// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'FAMIS-Products', 'bootstrap-four' ),
		'description'         => __( 'FAMIS-Products', 'bootstrap-four' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'author', 'custom-fields', 'revisions', 'thumbnail', 'excerpt' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 7,
    'menu_icon'           => 'dashicons-forms',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
    'taxonomies'          => array( 'category' )
	);
	// Registering your Custom Post Type
	register_post_type( 'FAMIS-Products', $args );
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'custom_post_type_teq_tip', 0 );
add_action( 'init', 'custom_post_type_nedm_survey', 0 );
add_action( 'init', 'custom_post_type_famis_product', 0 );

/* add action for email notification
* anytime a CPT NEDM Survey is published or changed
*/
add_action( 'transition_post_status', 'send_mails_on_publish', 10, 3 );

function send_mails_on_publish( $new_status, $old_status, $post ) {
  if ( 'publish' !== $new_status or 'publish' === $old_status or 'nedm-surveys' !== get_post_type( $post ) )

    return;
      $to = 'NEDM@teq.com';
      $headers = 'CC: jay@teq.com.com, paulprincipato@teq.com';
      $body = sprintf( 'Hey there is a new entry!' . "\n\n");
      $body .= sprintf( 'See <%s>', get_permalink( $post ));

    wp_mail( $to, 'New Network-Enabled Device Management Survey', $body, $headers );
}

/* search filter for search
*only search in the custom post type Teq Tips
*/
add_action("wp_ajax_get_search_list_via_ajax","get_search_list_via_ajax");
add_action("wp_ajax_nopriv_get_search_list_via_ajax","get_search_list_via_ajax");
function get_search_list_via_ajax(){
 $value  = $_POST['text'];
 $output = "<div class='col-sm'>";

  $argsAjax = array(
                   's'              => $value,
                   'posts_per_page' => -1,
                   'post_type'      => 'Teq-Tips'
                   );
  $queryAjax = new WP_Query($argsAjax);
  if($queryAjax->have_posts()):
    while ($queryAjax->have_posts()) : $queryAjax->the_post();

     $output .="<a href='".get_permalink()."'>".get_the_title()."</a>";

   endwhile;

    else :
      echo '<h5 class="padding cloudgenixRed bold">Sorry, no tips found. Try searching another term</h5>';

    endif;
   wp_reset_query();
 $output .= "</div>";
 echo $output;
 die(0);
}

/* * * * * * * * * * * * * * *
 * BS4 Utility Functions
 * * * * * * * * * * * * * * */

function bootstrap_four_get_posts_pagination( $args = '' ) {
  global $the_query;
  $pagination = '';

  if ( $GLOBALS['wp_query']->max_num_pages > 1 ) :

    $defaults = array(
      'total'     => isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1,
      'current'   => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
      'type'      => 'array',
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;',
    );

    $params = wp_parse_args( $args, $defaults );

    $paginate = paginate_links( $params );

    if( $paginate ) :
      $pagination .= "<ul class='pagination'>";
      foreach( $paginate as $page ) :
        if( strpos( $page, 'current' ) ) :
          $pagination .= "<li class='active'>$page</li>";
        else :
          $pagination .= "<li>$page</li>";
        endif;
      endforeach;
      $pagination .= "</ul>";
    endif;

  endif;

  return $pagination;
}


function bootstrap_four_the_posts_pagination( $args = '' ) {
  echo bootstrap_four_get_posts_pagination( $args );
}

/** Add Post Featured Image URL to an RSS feed. **/

function add_rss_item_image() {
    global $post;
    if(has_post_thumbnail($post->ID))
    {
        $thumbnail = get_the_post_thumbnail_url($post->ID);
        echo"\t<image>{$thumbnail}</image>\n";
    }
}

add_action('rss2_item', 'add_rss_item_image');
add_action('rss_item', 'add_rss_item_image');

/** Display template for breadcrumbs. **/

function bootstrapwp_breadcrumbs()
  {

    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '<span class="divider">/</span>'; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<li class="active"><span class="current">'; // tag before the current crumb
    $after = '</span></li>'; // tag after the current crumb

    global $post;
      $homeLink = get_bloginfo('url');

        if (is_home() || is_front_page()) {

          if ($showOnHome == 1) echo '<ul class="breadcrumb"><li><a href="' . $homeLink . '">' . $home . '</a></li></ul>';

        } else {

          echo '<ul class="breadcrumb"><li><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . '</li> ';

            if ( is_category() ) {

              $thisCat = get_category(get_query_var('cat'), false);

                if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
                  echo $before . '' . single_cat_title('', false) . '' . $after;

                } elseif ( is_search() ) {
                  echo $before . 'Search results for "' . get_search_query() . '"' . $after;

                } elseif ( is_day() ) {
                  echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . '</li> ';
                  echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . '</li> ';
                  echo $before . get_the_time('d') . $after;

                } elseif ( is_month() ) {
                  echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . '</li> ';
                  echo $before . get_the_time('F') . $after;

                } elseif ( is_year() ) {
                  echo $before . get_the_time('Y') . $after;

                } elseif ( is_single() && !is_attachment() ) {
                  if ( get_post_type() != 'post' ) {

                    $post_type = get_post_type_object(get_post_type());
                    $slug = $post_type->rewrite;

                      echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                  if ($showCurrent == 1) echo ' ' . $delimiter . '</li> ' . $before . get_the_title() . $after;

                } else {
                  $cat = get_the_category(); $cat = $cat[0];
                  $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . '</li> ');

                    if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                      echo $cats;

                    if ($showCurrent == 1) echo $before . get_the_title() . $after;
                  }

                } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {

                  $post_type = get_post_type_object(get_post_type());
                    echo $before . $post_type->labels->singular_name . $after;

                } elseif ( is_attachment() ) {

                  $parent = get_post($post->post_parent);
                  $cat = get_the_category($parent->ID); $cat = $cat[0];
                    echo get_category_parents($cat, TRUE, ' ' . $delimiter . '</li> ');
                    echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';

                    if ($showCurrent == 1) echo ' ' . $delimiter . '</li> ' . $before . get_the_title() . $after;

                } elseif ( is_page() && !$post->post_parent ) {

                  if ($showCurrent == 1) echo $before . get_the_title() . $after;

                } elseif ( is_page() && $post->post_parent ) {

                  $parent_id = $post->post_parent;
                  $breadcrumbs = array();

                    while ($parent_id) {

                      $page = get_page($parent_id);
                      $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                      $parent_id = $page->post_parent;
                    }

                  $breadcrumbs = array_reverse($breadcrumbs);

                    for ($i = 0; $i < count($breadcrumbs); $i++) {
                      echo $breadcrumbs[$i];

                      if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . '</li> ';
                        }

                      if ($showCurrent == 1) echo ' ' . $delimiter . '</li> ' . $before . get_the_title() . $after;

                    } elseif ( is_tag() ) {

                      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

                    } elseif ( is_author() ) {

                      global $author;
                      $userdata = get_userdata($author);
                        echo $before . 'Articles posted by ' . $userdata->display_name . $after;

                    } elseif ( is_404() ) {

                      echo $before . 'Error 404' . $after;
                    }

                    echo '</ul>';
        }

      }

 function wp_post_password_expires() {
     return time() + 5; // Expire in 10 seconds
 }
 add_filter( 'post_password_expires', 'wp_post_password_expires' );

/**
 * Login Page Edits.
 *
 */

function my_login_logo() { ?>
    <style type="text/css">
		body.login {
			background-color: #3c4852;
		}
		body.login div#login form#loginform {
			background-color: #4b5760;
		}
        #login h1 a, .login h1 a {
            background-image: url('<?php echo get_template_directory_uri();?>/_img/teq-logo-icon.svg');
            padding-bottom: 30px;
        }
		body.login div#login form#loginform p label {
			color: #0075c9;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
