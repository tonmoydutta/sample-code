<?php 
/**************************** header.php code *******************/
 
                       wp_nav_menu(array( 
                                'theme_location' => 'main_menu', 
                                'menu_class'     => 'nav navbar-nav',        
                                'walker'         => new My_Custom_Nav_Walker(),
                         ));


/*********************End*************************/	


/**********************functions.php code************************/

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

$element->classes[] = 'dropdown-submenu ';
}
}
parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
}
}	

/*****************************end**********************/				 
                         ?>