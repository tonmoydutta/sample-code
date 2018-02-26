<?php
ob_start();
 /*
 Template Name:Test
 */
 ?>
<?php

header('Access-Control-Allow-Origin: *');
//header( 'Content-type: application/json' );
//if($_SERVER['REQUEST_METHOD'] == 'GET' && empty($_GET)) $_GET = json_decode(file_get_contents('php://input'), true);

switch ($_GET['op']) {
	case 'slider':
		$args = array(
			'post_type' => 'slider',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			'orderby' => 'title',
			'order' => 'ASC'
		);
		$query = new WP_Query( $args );
		$cars = array();
		while( $query->have_posts() ) : $query->the_post();
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image=$src[0];
		// Add a car entry
		$cars[] = array(
			'name' => get_the_title(),
			'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
			'image' => $image
		);
		endwhile;
		wp_reset_query();
		echo json_encode( $cars );
	break;

	case 'res_news':
		//echo 'Option Test 1';
		
		$args1 = array(
			'post_type' => 'news',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query1 = new WP_Query( $args1 );
		$cars1 = array();
		while( $query1->have_posts() ) : $query1->the_post();
		$src1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image1=$src1[0];
		$category = get_the_category( $post->ID );
        $cat_name=$category[0]->cat_name;
		// Add a car entry
		$cars1[] = array(
			'name' => get_the_title(),
			'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
			'image' => $image1,
			'category' =>$cat_name
		);
		endwhile;
		wp_reset_query();
		echo json_encode( $cars1 );
	
	break;
	
	case 'about':
	$args1 = array(
			'post_type' => 'about',
			'post_status' => 'publish',
			'posts_per_page' =>-1, // all
			'orderby' => 'date',
			'order' => 'ASC'
			
		);
		$query1 = new WP_Query( $args1 );
		
		while( $query1->have_posts() ) : $query1->the_post();
		
		// Add a car entry
		$cars1[] = array(
			'name' => get_the_title(),
			//'content' => strip_tags(get_the_content()),
			'content' => get_the_content(),
			'author' => get_the_author()
			
		);
		endwhile;
		wp_reset_query();
		
		echo json_encode( $cars1 );
    break;
   case 'events':
	$args15 = array(
			'post_type' => 'events',
			'post_status' => 'publish',
			'posts_per_page' =>-1, // all
			'orderby' => 'date',
			'order' => 'ASC'
			
		);
		$query15 = new WP_Query( $args15 );
		
		while( $query15->have_posts() ) : $query15->the_post();
		$date=get_post_meta($post->ID, 'date', true);
               $src21 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image21=$src21[0];
		// Add a car entry
		$cars15[] = array(
			'name' => get_the_title(),
			'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
                        'date' => $date,
                        'image' => $image21
			
		);
		endwhile;
		wp_reset_query();
		
		echo json_encode( $cars15 );
         break;
	case 'start_up':
	$args5 = array(
			'post_type' => 'start',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			//'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query5 = new WP_Query( $args5 );
		
		while( $query5->have_posts() ) : $query5->the_post();
		$src5 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image5=$src5[0];
		// Add a car entry
		$cars5[] = array(
			'name' => get_the_title(),
			'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
			'image' => $image5
		);
		endwhile;
		wp_reset_query();
		echo json_encode( $cars5 );
	break;
	
	case 'partner':
	$args6 = array(
			'post_type' => 'partners',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query6 = new WP_Query( $args6 );
		
		while( $query6->have_posts() ) : $query6->the_post();
		$src6 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image6=$src6[0];
		// Add a car entry
		$cars6[] = array(
			'name' => get_the_title(),
			
			'image' => $image6
		);
		endwhile;
		wp_reset_query();
		echo json_encode( $cars6 );
	break;
	
	case 'faq':
	$args7 = array(
			'post_type' => 'faq',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			//'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query7 = new WP_Query( $args7 );
		
		while( $query7->have_posts() ) : $query7->the_post();
		$src7 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image7=$src7[0];
		// Add a car entry
		$cars7[] = array(
			'name' => get_the_title(),
			//'content' => strip_tags(get_the_content()),
			'content' => get_the_content(),
			
		);
		endwhile;
		wp_reset_query();
		echo json_encode( $cars7 );
	break;
	
	case 'case_studies':
	$args8 = array(
			'post_type' => 'studies',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query8 = new WP_Query( $args8 );
		
		while( $query8->have_posts() ) : $query8->the_post();
		$src8 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image8=$src8[0];
		$category1 = get_the_category( $post->ID );
        $cat_name1=$category1[0]->cat_name;
		// Add a car entry
		$cars8[] = array(
			'name' => get_the_title(),
			'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
			'image' => $image8,
			'category' =>$cat_name1
		);
		endwhile;
		wp_reset_query();
		echo json_encode( $cars8 );
	break;
	case 'contact':
	$args1 = array(
			'post_type' => 'cstart',
			'post_status' => 'publish',
			'posts_per_page' => 1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query1 = new WP_Query( $args1 );
		//$cars1 = array();
		while( $query1->have_posts() ) : $query1->the_post();
		$src1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image1=$src1[0];
		// Add a car entry
		$cars1[0] = array(
			'name' => get_the_title(),
			'content' => str_replace("&nbsp;","",strip_tags(get_the_content())),
			'author' => get_the_author(),
			'image' => $image1
		);
		endwhile;
		wp_reset_query();
		
		
		$args2 = array(
			'post_type' => 'cmentor',
			'post_status' => 'publish',
			'posts_per_page' => 1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query2 = new WP_Query( $args2 );
		//$cars1 = array();
		while( $query2->have_posts() ) : $query2->the_post();
		$src2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image2=$src2[0];
		// Add a car entry
		$cars1[1] = array(
			'name' => get_the_title(),
			'content' => str_replace("&nbsp;","",strip_tags(get_the_content())),
			'author' => get_the_author(),
			'image' => $image2
		);
		endwhile;
		wp_reset_query();
		
		
		$args3 = array(
			'post_type' => 'cinvestor',
			'post_status' => 'publish',
			'posts_per_page' => 1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query3 = new WP_Query( $args3 );
		//$cars3 = array();
		while( $query3->have_posts() ) : $query3->the_post();
		$src3 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image3=$src3[0];
		// Add a car entry
		$cars1[2] = array(
			'name' => get_the_title(),
			'content' => str_replace("&nbsp;","",strip_tags(get_the_content())),
			'author' => get_the_author(),
			'image' => $image3
		);
		endwhile;
		wp_reset_query();
		
		
		$args4 = array(
			'post_type' => 'cslider',
			'post_status' => 'publish',
			'posts_per_page' => 1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query4 = new WP_Query( $args4 );
		//$cars4 = array();
		while( $query4->have_posts() ) : $query4->the_post();
		$src4 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image4=$src4[0];
		// Add a car entry
		$cars1[3] = array(
			'name' => get_the_title(),
			'content' => str_replace("&nbsp;","",strip_tags(get_the_content())),
			'author' => get_the_author(),
			'image' => $image4
		);
		endwhile;
		wp_reset_query();
		
		$args4 = array(
			'post_type' => 'aslider',
			'post_status' => 'publish',
			'posts_per_page' => 1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query4 = new WP_Query( $args4 );
		//$cars4 = array();
		while( $query4->have_posts() ) : $query4->the_post();
		$src4 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image4=$src4[0];
		// Add a car entry
		$cars1[3] = array(
			'name' => get_the_title(),
			'content' => str_replace("&nbsp;","",strip_tags(get_the_content())),
			'author' => get_the_author(),
			'image' => $image4
		);
		endwhile;
		wp_reset_query();
		echo json_encode( $cars1 );
	break;

  case 'mentor':
	$args10 = array(
			'post_type' => 'mentors',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query10 = new WP_Query( $args10 );
		
		while( $query10->have_posts() ) : $query10->the_post();
		$src10 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image10=$src10[0];
		$mail_box=get_post_meta($post->ID, 'mail_box', true);
		
		// Add a car entry
		$cars10[] = array(
			'name' => get_the_title(),
			'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
			'image' => $image10,
			'email' => $mail_box
		);
		endwhile;
		wp_reset_query();
		echo json_encode( $cars10 );
		break;


          
                case 'investors':
		$args16 = array(
			'post_type' => 'pmentor',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			//'orderby' => 'title',
			'order' => 'ASC'
		);
		$query16 = new WP_Query( $args16 );
		$cars16 = array();
		while( $query16->have_posts() ) : $query16->the_post();
                 //$designation11=get_post_meta($post->ID, 'designation', true);
		$designation11 = explode("|", get_post_meta($post->ID, 'designation', true));

		$src16 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image16=$src16[0];
		// Add a car entry
		$cars16[] = array(
			'name' => get_the_title(),
			'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
			'image' => $image16,
                        'designation'=> $designation11[0],
                        'company'=> $designation11[1]
		); 
		endwhile;
		wp_reset_query();
		echo json_encode( $cars16 );
        break;
		
		
		case 'experts':
		$args17 = array(
			'post_type' => 'expert',
			'post_status' => 'publish',
			'posts_per_page' => -1, 
			
			'order' => 'ASC'
		);
		$query17 = new WP_Query( $args17 );
		$cars17 = array();
		while( $query17->have_posts() ) : $query17->the_post();
                //$designation12=get_post_meta($post->ID, 'designation', true);
		$designation12 = explode("|", get_post_meta($post->ID, 'designation', true));

		$src17 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image17=$src17[0];
		// Add a car entry
		$cars17[] = array(
			'name' => get_the_title(),
			//'content' => strip_tags(get_the_content()),
			'content' => get_the_content(),
			'author' => get_the_author(),
			'image' => $image17,
                         'designation' =>$designation12[0],
			'company' => $designation12[1]
		);  
		endwhile;
		wp_reset_query();
		echo json_encode( $cars17 );
        break;

    case 'contacts':
		$args18 = array(
			'post_type' => 'cstart',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			'orderby' => 'title',
			'order' => 'ASC'
		);
		$query18 = new WP_Query( $args18 );
		$cars18 = array();
		while( $query18->have_posts() ) : $query18->the_post();
                 
		// Add a car entry
		$cars18[] = array(
			
			//'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
			'content' => get_the_content(),
			
                        
		);  
		endwhile;
		wp_reset_query();
		echo json_encode( $cars18 );
        break;
    case 'alliances':
   $args19 = array(
			'post_type' => 'alliances',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			'orderby' => 'title',
			'order' => 'ASC'
			
		);
		$query19 = new WP_Query( $args19 );
		
		while( $query19->have_posts() ) : $query19->the_post();
		$src19 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image19=$src19[0];
		// Add a car entry
		$cars19[] = array(
			'name' => get_the_title(),
			
			'image' => $image19
		);
		endwhile;
		wp_reset_query();
		echo json_encode( $cars19 );
                break;
             
               case 'angel':
		$args20 = array(
			'post_type' => 'angel',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			//'orderby' => 'title',
			'order' => 'ASC'
		);
		$query20 = new WP_Query( $args20 );
		$cars20 = array();
		while( $query20->have_posts() ) : $query20->the_post();
                 //$designation20=get_post_meta($post->ID, 'designation', true);
		$designation20 = explode("|", get_post_meta($post->ID, 'designation', true));

		$src20 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image20=$src20[0];
		// Add a car entry
		$cars20[] = array(
			'name' => get_the_title(),
			'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
			'image' => $image20,
                        'designation'=> $designation20[0],
                        'company'=> $designation20[1]
		); 
		endwhile;
		wp_reset_query();
		echo json_encode( $cars20 );
                break;
              

               case 'director':
		$args21 = array(
			'post_type' => 'director',
			'post_status' => 'publish',
			'posts_per_page' => -1, // all
			//'orderby' => 'title',
			'order' => 'ASC'
		);
		$query21 = new WP_Query( $args21 );
		$cars21 = array();
		while( $query21->have_posts() ) : $query21->the_post();
                 //$designation21=get_post_meta($post->ID, 'designation', true);
		$designation21 = explode("|", get_post_meta($post->ID, 'designation', true));

		$src21 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		$image21=$src21[0];
		// Add a car entry
		$cars21[] = array(
			'name' => get_the_title(),
			'content' => strip_tags(get_the_content()),
			'author' => get_the_author(),
			'image' => $image21,
                        'designation'=> $designation21[0],
                        'company'=> $designation21[1]
		); 
		endwhile;
		wp_reset_query();
		echo json_encode( $cars21 );
                break;
                

                case 'applyAndEmail':

		$to = 'mobileapp@mayabious.com';
		$subject = 'New User Application';

		
		$message = '<b>Name</b>:' . $_GET['name1'] . '<br />';
		$message .= '<b>Email</b>' . $_GET['email1'] . '<br />';
		$message .= '<b>Mobile</b>' . $_GET['mobile1'] . '<br />';
		$message .= '<b>Location</b>' . $_GET['location1'] . '<br />';
		$message .= '<b>Age</b>' . $_GET['age1'] . '<br />';
		$message .= '<b>Idea</b>' . $_GET['idea'] . '<br />';


		//$header = 'From:abc@somedomain.com\r\n';
		//$header .= 'MIME-Version: 1.0\r\n';
		//$header .= 'Content-type: text/html';

		$header = 'MIME-Version: 1.0' . "\r\n";
		$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$header.= 'From:abc@somedomain.com' . "\r\n";

		echo mail($to, $subject, $message, $header) ? 1 : 0;
				
		break;


}
	





?>

