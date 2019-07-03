<?php
/*
Theme Name :  blue
*/
function blue_setup() {
add_theme_support( 'custom-header', array(
    'video' => true
) );    
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 825, 510, true );
add_theme_support( 'html5', array(
'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );
add_theme_support( 'page','post-formats', array(
'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
) );
}
add_action( 'after_setup_theme', 'blue_setup' );


////////////////Menu Register///////////

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main_menu' => __( 'Header Menu' ),
      //'footer_menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );


/////////////Header.php///////////

                         wp_nav_menu( array( 
                        'theme_location' => 'main_menu', 
                        'menu_class' => 'nav navbar-nav' ) ); 
                     


//////////////End Menu//////////////


/////////////// Logo//////////////////////

function mytheme_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'mytheme_setup');


add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));


//////////Header.php//////////////

the_custom_logo();

// No Custom Logo, just display the site's name
if (!has_custom_logo()) {
    ?>
    <h1><?php bloginfo('name'); ?><!-- </h1> -->
    <?php
}

/////////////End Logo///////////////////



add_action('init','allabout_post_type');
function allabout_post_type()
{

 register_post_type( 'sponsors',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Sponsors' ),
                'singular_name' => __( 'Sponsors' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-desktop',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );

    }



    add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  );    
 
  register_taxonomy('types',array('sponsors'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}




/////////////////// Css and Js Include//////////////

function add_theme_scripts(){

/*******************************************css******************************************/  

wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(),'1.1','all');
wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.min.css', array(),'1.1','all');
wp_enqueue_style( 'owl', get_template_directory_uri() .'/css/owl.carousel.css', array(),'1.1','all');
wp_enqueue_style( 'responsive', get_template_directory_uri() .'/css/responsive.css', array(),'1.1','all');

/********************************************js******************************************/

wp_enqueue_script( 'owl-carousel', get_template_directory_uri() .'/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() .'/js/jquery.sticky.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'jquery-easing', get_template_directory_uri() .'/js/jquery.easing.1.3.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'main', get_template_directory_uri() .'/js/main.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'bxslider', get_template_directory_uri() .'/js/bxslider.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script-slider', get_template_directory_uri() .'/js/script.slider.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts','add_theme_scripts');

//////////////////////End/////////////////////
///////////////////////////////////////////////


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );




////////////////////Display Post type in Template///////////////////////

 query_posts('posts_per_page=-1&post_type=sponsors&post_status=publish&order=ASC');

           while(have_posts()) : the_post(); ?>

    <div class="item"><div class="spons">
   <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid',160,65));?>
      <!-- <img class="img-fluid" src="<?php //bloginfo('template_directory'); ?>/images/spons1.jpg" alt="speaker"> --></div>
                      or
        <?php image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                      echo '<img src="' . $image_src[0]  . '" width="100%"  />'; ?>
    </div>

                <?php  endwhile; 
                 wp_reset_postdata(); 
                ?>
        
        
        
