<?php
/****************function.php code******************/

/************ Student Meta Boxes***************/

function add_custom_meta_box() {
    add_meta_box(
        'custom_meta_box', // $id
        'Custom Meta Box', // $title 
        'show_custom_meta_box', // $callback
        'student', // post_type name
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



/***********************Display meta boxes value*****************/

$class=get_post_meta($post->ID, 'custom_class', true);
$roll=get_post_meta($post->ID, 'custom_roll', true);
$section=get_post_meta($post->ID, 'custom_section', true);


echo $class;

echo $roll;

echo $section;



?>