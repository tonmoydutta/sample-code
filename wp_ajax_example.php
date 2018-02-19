<?php

/*********************** Footer.php Code******************/

?>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.4.min.js"></script>


<script>
$(document).ready(function(){
$("#school_fee_modal").click(function(){
	
var roll=$("#rno").val();
if(roll==""){
$("#error_message").show().html('<span style="color:red">Please enter roll number.</span>');
return false;
}
else{
	$("#error_message").hide();
	
	var modalurl = '<?php echo admin_url('admin-ajax.php'); ?>';

					$.ajax({
                            url: modalurl,
                            type:'POST',
                            data: ({ 
                            action: 'show_modal',
                            'rollno' :roll
                          }),

                          success:function(result){
							  $("#school_fee_ajax_modal").show();
                                     $("#school_fee_ajax_modal").html(result);
                               }
                             });
			        				 
  return false;
}


});	
	
});
</script>
<?php

/****************************End***************************/

/*********************** Function.php Code******************/
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


/************************End************************/

/******************Main Template Code****************/ ?>

<div id="school_fee_ajax_modal" style="display:none;">
</div>

<?php
 /********************End***********************/
?>