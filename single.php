<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('common'); ?>

<div class="w3l_inner_section about-w3layouts">
					<div class="container">
					<h3 class="tittle-agileits-w3layouts">Single <span>Page</span></h3>
						  <div class="inner_w3l_agile_grids">
						      



         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          

          
				<div class="blog-w3ls col-md-9">
				<!-- Single-page -->
					<div class="blog-to1 service_info">		
					
						<div  class="callbacks_container">
							<!--<img src="" class="img-responsive" />-->
				<?php 
				      $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );

                      echo '<img src="' . $image_src[0]  . '" width="100%"  />'; 
                   ?>
						</div>

							<div class="blog-top">
							<div class="blog-left_w3_agileinfo">
								<b><?php echo get_the_date('d');?></b>
								<span><?php echo get_the_date('M');?></span>
							</div>
							<div class="top-blog_wthree_agileits">
								<h5 class="w3ls_single_agileinfo"><?php the_title();?></h5>
								<p>Posted by <a href="#"><?php echo get_the_author();?></a>  | <a href="#"><?php echo get_comments_number();?> Comments</a></p> 
								<p class="para-w3-agile"><?php the_content();?></p>
							
						
						<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
					</div>
					</div>	
		


		

		<div class="single-bottom">
		
			<?php if ( comments_open() || get_comments_number() ) {

            comments_template();

        	}  
			?>
			</div>
<!-- //Single-page -->
			</div>
<?php endwhile; 



else: ?>

 

<p>Sorry, no posts matched your criteria.</p>

 

<?php endif; ?>




 <?php get_template_part('sidebar');?>

			
			<div class="clearfix"> </div>

		         </div>
	        </div>
       </div>
<?php get_footer(); ?>
