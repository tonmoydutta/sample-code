<?php 
/************** Blog Template Code***************/			
			function get_url_var($name)
{
    $strURL = $_SERVER['REQUEST_URI'];
    $arrVals = split("/",$strURL);
    $found = 0;
    foreach ($arrVals as $index => $value) 
    {
        if($value == $name) $found = $index;
    }
    $place = $found + 1;
	 
    return $arrVals[$place];
}
			$page = get_url_var('page');
				if(is_numeric($page))
				{
					$pgnum=$page;
				}
				else
				{
					$pgnum=1;
				}
			
			query_posts("posts_per_page=3&post_type=post&post_status=publish&order=ASC&paged=$pgnum"); 
			
			while(have_posts()) : the_post();
			
			?>
			
			<div class="col-sm-12">
                <?php blog_pagination(); ?>

                </div>
				

<?php

/************************ Function.php page code***************/

function blog_pagination() {
    if( is_singular() )
        return;
    global $wp_query;
    /* Stop the code if there is only a single page page */
    if( $wp_query->max_num_pages <= 1 )
        return;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    /*Add current page into the array */
    if ( $paged >= 1 )
        $links[] = $paged;
    /*Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="navigation"><ul>' . "\n";
    /*Display Previous Post Link */
    if ( get_previous_posts_link() ){
        printf( '<li><a href='.get_pagenum_link($paged - 1).'>%s</a></li>' . "\n", get_previous_posts_link() );
    /*Display Link to first page*/
	}
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
    /* Link to current page */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
    /* Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
    /** Next Post Link */
    if ( get_next_posts_link() )
       printf( '<li><a href='.get_pagenum_link($paged + 1).'>&raquo;</a</li>') ;
		
    echo '</ul></div>' . "\n";
}

/*************************End**************************/
?>				