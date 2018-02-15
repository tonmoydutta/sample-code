<?php 
/*
Theme Name :  Brandshoots
*/
function tree_setup() {
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
add_action( 'after_setup_theme', 'tree_setup' );

function tree_menu()
{ 
register_nav_menus(array(
'main_menu' => 'Main Menu',
//'footer-menu' => 'Footer Menu',
));
}
add_action('init','tree_menu');

add_action('init','brand_post_type');
function brand_post_type()
{

 register_post_type( 'why',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Why Wisdom Tree' ),
                'singular_name' => __( 'Why Wisdom Tree' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-pressthis',
            'supports'  => array('title','editor','thumbnail'),
            
        )
    );

 register_post_type( 'features',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Features' ),
                'singular_name' => __( 'Features' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-generic',
            'supports'  => array('title','editor','thumbnail'),
            
        )
    );

 register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Our Best Services' ),
                'singular_name' => __( 'Our Best Services' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-products',
            'supports'  => array('title','editor','thumbnail'),
            
        )
    );

 register_post_type( 'poem',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Home Page Poem' ),
                'singular_name' => __( 'Home Page Poem' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
            'supports'  => array('title','editor','thumbnail'),
            
        )
    );

 register_post_type( 'testimonial',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-quote',
            'supports'  => array('title','editor','thumbnail'),
            
        )
    );

 /*register_post_type( 'slider',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
            'supports'  => array(),
            
        )
    );*/
	
	register_post_type( 'gallery',
   
        array(
            'labels' => array(
                'name' => __( 'Gallery' ),
                'singular_name' => __( 'Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-products',
            'supports'  => array('title','editor','thumbnail'),
            
        )
    );
	
	/*register_post_type( 'curriculum',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Curriculum' ),
                'singular_name' => __( 'Curriculum' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-multisite',
            'supports'  => array('title','editor','thumbnail'),
            
        )
    );*/
	
	/*register_post_type( 'campus',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Architecture &amp; Campus' ),
                'singular_name' => __( 'Architecture &amp; Campus' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-editor-customchar',
            'supports'  => array('title','editor','thumbnail'),
            
        )
    );*/
	register_post_type( 'faculty',
   
        array(
            'labels' => array(
             'name' => __( 'Our Faculty' ),
             'singular_name' => __( 'Our Faculty' )
             ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-settings',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );
	
	
	register_post_type( 'student',
   
        array(
            'labels' => array(
                'name' => __( 'Students' ),
                'singular_name' => __( 'Students' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-users',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );
	
/**********For About Us inner page***********/	

	register_post_type( 'advisors',
   
        array(
            'labels' => array(
                'name' => __('Board Of Advisors'),
                'singular_name' => __('Board Of Advisors')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-users',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );
	
	register_post_type( 'twigs',
   
        array(
            'labels' => array(
                'name' => __('Team Twigs'),
                'singular_name' => __('Team Twigs')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-users',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );
	
	
	
	
/**********End About Us inner page***********/	

register_post_type( 'health',
   
        array(
            'labels' => array(
                'name' => __('Health & Safety'),
                'singular_name' => __('Health & Safety')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-users',
            'supports'  => array('title','editor','thumbnail','custom-fields'),
            
        )
    );
}

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Footer1',
'before_widget' => '<ul>',
'after_widget' => ' </ul>',

));

register_sidebar(array(
'name' => 'Footer2',
'before_widget' => '<ul class="b-nav">',
'after_widget' => ' </ul>',

));


register_sidebar(array(
'name' => 'Footer3',
'before_widget' => '<div class="col-md-3 footer-grids w3l-agileits" data-sb="fadeInDown" data-sb-hide="fadeOutUp">',
'after_widget' => ' </div>',
'before_title' => '<h3>',
'after_title' => '</h3>'

));

register_sidebar(array(
'name' => 'Copyright',
'before_widget' => '<p data-sb="fadeInUp" data-sb-hide="fadeOutUp">',
'after_widget' => ' </p>',


));

register_sidebar(array(
'name' => 'Header1',
'before_widget' => '<ul data-sb="bounceInDown" data-sb-hide="fadeOutUp" data-speed="100">',
'after_widget' => ' </ul>',

));

register_sidebar(array(
'name' => 'Header2',
'before_widget' => '<ul class="num-w3ls">',
'after_widget' => ' </ul>',

));

}
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/* For sub Menu*/

class My_Custom_Nav_Walker extends Walker_Nav_Menu {
function start_lvl(&$output, $depth = 0, $args = array()) {
//$output .= "\n<li class=\"dropdown\">\n";
$output .= "\n<ul class=\"dropdown-menu \">\n";
}
function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
$item_html = '';
parent::start_el($item_html, $item, $depth, $args);
if ( $item->is_dropdown && $depth === 0 ) {
$item_html = str_replace( '<a', '<a class="dropdown-toggle" data-toggle="dropdown"', $item_html );
$item_html = str_replace( '</a>', ' <b class="caret  hvr-wobble-horizontal"></b></a>', $item_html );
}
$output .= $item_html;
}
function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
if ( $element->current )
$element->classes[] = 'active';
$element->is_dropdown = !empty( $children_elements[$element->ID] );
if ( $element->is_dropdown ) {
if ( $depth === 0 ) {
$element->classes[] = 'dropdown';
} elseif ( $depth === 1 ) {
// Extra level of dropdown menu, 
// as seen in http://twitter.github.com/bootstrap/components.html#dropdowns
$element->classes[] = 'dropdown-submenu ';
}
}
parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
}
}

/*End Code*/




function wpb_disable_comment_url($fields)
{
unset($fields['url']);
     return $fields;
}
add_filter('comment_form_default_fields','wpb_disable_comment_url');

add_filter('wpcf7_form_elements', function($content) {

 $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

 

    return $content;

});





/************ Student Meta Boxes***************/

function add_custom_meta_box() {
    add_meta_box(
        'custom_meta_box', // $id
        'Custom Meta Box', // $title 
        'show_custom_meta_box', // $callback
        'student', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_meta_box');
$prefix = 'custom_';
$custom_meta_fields = array(
    array(
        'label'=> 'Class Name',
        'desc'  => 'Add Class Name. ',
        'id'    => $prefix.'class',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Roll Number',
        'desc'  => 'Add Roll Number.',
        'id'    => $prefix.'roll',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Section',
        'desc'  => 'Add Section Name.',
        'id'    => $prefix.'section',
        'type'  => 'text'
    )
    
);
function show_custom_meta_box() {
global $custom_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
     
    // Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($custom_meta_fields as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
                switch($field['id']) {
                    
				case 'custom_class':
    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
        <br /><span class="description">'.$field['desc'].'</span>';
    break;
   case 'custom_roll':
    echo  '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
        <br /><span class="description">'.$field['desc'].'</span>';
   break;
   case 'custom_section':
    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
        <br /><span class="description">'.$field['desc'].'</span>';
   break;	
					
                } //end switch
        echo '</td></tr>';
    } // end foreach
    echo '</table>'; // end table
}

function save_custom_meta($post_id) {
    global $custom_meta_fields;
     
    // verify nonce
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) 
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }
     
    // loop through fields and save the data
    foreach ($custom_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_meta');


/*******************End Student Meta Box*******************/

/***************For School Fee Ajax Modal*********************/

function show_modal(){
	 
session_start();	
global $post;
$rollno=$_POST['rollno'];
//	echo $roll;

query_posts('posts_per_page=-1&post_type=student&post_status=publish&order=ASC');
$i1=0;
while(have_posts()) : the_post();

$class=get_post_meta($post->ID, 'custom_class', true);
$roll=get_post_meta($post->ID, 'custom_roll', true);
$section=get_post_meta($post->ID, 'custom_section', true);
if($rollno==$roll){ 

$title=get_the_title();
$_SESSION['roll']=$roll;
$_SESSION['title']= $title;
$_SESSION['class']=$class;
$_SESSION['section']=$section;
?>
	
<div class="modal-body">
                 <center>
                <?php// echo $_SESSION['rollnumber'];?>
				<?php the_post_thumbnail(array(140,140),array('class'=> "img-circle"));?>
                <h3 class="media-heading"><?php the_title();?> <small></small></h3>
                <span><strong>Short Details: </strong></span>
                	<span class="label label-info">Class: <?php echo $class;?></span>
                    <span class="label label-warning">Roll: <?php echo $roll;?></span>
                    <span class="label label-success">Section: <?php echo $section;?></span>
                </center>
				
				
               
				<hr>
                <center>
                   <p class="text-left"><strong>Description: </strong></p>
				    <p class="text-left"><?php remove_filter ('the_content', 'wpautop');
					the_content();?></p>
				
                   </p>
                    
                </center>
				</div>
				 <div class="modal-footer">
                <center>
				
         <a href="http://192.168.1.250/wisdomtree/payment" class="btn btn-default button-w3layouts hvr-rectangle-out">PAY NOW</a>
  
                </center>
            </div>
				
	
<?php 
$i1++;
}



endwhile;
if($i1===0){   ?>

<div class="alert alert-danger">
                  <strong>Sorry!</strong> No result found.
                </div>
				
	
	
<?php 

}
wp_reset_postdata();
	
	
die();	
}
add_action('wp_ajax_show_modal', 'show_modal');
add_action('wp_ajax_nopriv_show_modal', 'show_modal');


/***************End For School Fee Ajax Modal*********************/


/*****************Add Menu in admin panel********************/
add_action("admin_menu", "menuFunc_admin_init");
function menuFunc_admin_init() {
	add_menu_page('Registration Form','Registration Form',7, 'alluser', 'alluser',$icon_url1 );
}
function alluser()
{
	
	include ('datatable.php');
	//include ('application/application.php');
}
/*****************End********************/

?>