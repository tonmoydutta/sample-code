<?php
/*
Template Name: Home

*/
 get_header();

?>

<!--/poem-->
<div class="poem-sec">
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-6 img-pos-con"><img src="<?php echo get_template_directory_uri();?>/images/slopes.svg" class="img-responsive img-pos" /></div>
        	<div class="col-md-6 poem-left">
          <?php query_posts('posts_per_page=1&post_type=poem&post_status=publish&order=ASC');

            while(have_posts()) : the_post();
	       ?>
            	<div class="services-info pull-right" data-sb="fadeInRight" data-sb-hide="fadeOutUp">
                <?php the_content();?>
            	</div>

              <?php  endwhile; 
                  wp_reset_postdata();
              ?>
        	</div>
        </div>
    </div>
</div>
<!--//poem-->

<!-- banner ad -->
<div class="banner_ad_wrapper hidden">
<div class="container">
	<div class="row">
    	<div class="col-sm-4">
        	<br>
        	<p>
            Established in 2017, by Dasarathi Naik Foundation for Excellence, The Wisdom Tree Global
School Kindergarten is an English-medium, co-educational pre-primary school in Kalinga
Nagar, Bhubaneswar, Odisha, which embraces a global perspective of education. Through a
blend of traditional and modern learning methods, Wisdom Tree Global School aims to
make learning a joyful experience for the little ones. 
            </p><br>
            
            <button type="button" class="btn btn-primary active" data-toggle="modal" data-target="#myModal3">Read More</button>
            
            <!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body" style="top:30px;">
      	<button type="button" class="close" data-dismiss="modal" style="margin-top:-20px;">&times;</button>
        
        <p>Established in 2017, by Dasarathi Naik Foundation for Excellence, The Wisdom Tree Global
School Kindergarten is an English-medium, co-educational pre-primary school in Kalinga
Nagar, Bhubaneswar, Odisha, which embraces a global perspective of education. Through a
blend of traditional and modern learning methods, Wisdom Tree Global School aims to
make learning a joyful experience for the little ones. The School commits itself to creating a
harmonious and stimulating environment in which every child is encouraged to develop
maximally his or her intellectual ability and academic performance potential. It is
committed towards bench-marking pre-primary education at the highest level by helping
the children expand their creative energy ; physical skills ; notions of justice ; affiliation to
his or her cultural roots and heritage ; and a spirit of empathy for the less fortunate ; with
readiness to work constructively for social good from a tender age. The progressive
curriculum and age-appropriate extra-curricular activities foster knowledge along with
inculcation of values, thereby empowering the young minds to become the best version of
themselves.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

        </div>
        <div class="col-sm-8">
        	<div id="myCarousel5" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel5" data-slide-to="1"></li>
                <li data-target="#myCarousel5" data-slide-to="2"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="<?php bloginfo(template_url);?>/images/banner_1.jpg" alt="">
                </div>
            
                <div class="item">
                  <img src="<?php bloginfo(template_url);?>/images/banner_2.jpg" alt="">
                </div>
            
                <div class="item">
                  <img src="<?php bloginfo(template_url);?>/images/banner_3.jpg" alt="">
                </div>
                
                <div class="item">
                  <img src="<?php bloginfo(template_url);?>/images/banner_4.jpg" alt="">
                </div>
              </div>
            
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel5" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel5" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
</div>
</div>

<!-- //banner ad -->

<div class="about-w3layouts" id="about-layout">
		<div class="container">
	<?php query_posts('posts_per_page=1&post_type=why&post_status=publish&order=ASC');

    while(have_posts()) : the_post();
	?>
			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids1 wow slideInLeft">
				<div class="">
					<div class="gallery-grid gallery-grid-1 history-grid-image" data-sb="fadeInDown" data-sb-hide="fadeOutUp" data-speed="100">
						<!--<img src="<?php echo get_template_directory_uri();?>/images/graph1.svg" class="img-responsive" />-->
						<?php the_post_thumbnail(array('class' => "img-responsive"));?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids2" data-sb="fadeInUp" data-sb-hide="fadeOutUp" data-speed="100">
				<h2 class="tittle-agileits-w3layouts gallery-grid-images"><?php the_title();?></h2>
				<ul class="para-w3-agile">
					<?php the_content();?>
                	
                </ul>
			</div>
			<div class="clearfix"></div>
			<?php  endwhile; 
                  wp_reset_postdata(); 
             ?>
		</div>
	</div>
	<!-- //about -->

<!--/services-->
<div class="services-w3-agileits w3agileits-ref">
	<div class="col-md-6 services-left">
		<div class="service-grid1">
			<?php query_posts('posts_per_page=-1&post_type=features&post_status=publish&order=ASC');

            while(have_posts()) : the_post();
	?>
			<div class="col-md-4 service-grids-w3ls text-center" data-sb="fadeInUp" data-sb-hide="fadeOutUp">
				<?php the_post_thumbnail();?>
				<h5><?php the_title();?></h5>
			</div>
			<?php  endwhile; 
                  wp_reset_postdata();
             ?>
			
			
			<div class="clearfix"></div>
		</div>
				
	</div>
	<div class="col-md-6  services-right" style="min-height: 432px;">
		<?php query_posts('posts_per_page=1&post_type=services&post_status=publish&order=ASC');

            while(have_posts()) : the_post();
	?>
		<!--<div class="services-info" data-sb="fadeInRight" data-sb-hide="fadeOutUp">
			<h3 class="tittle-agileits-w3layouts white-w3ls"><?php the_title();?></h3>
			<p class="para-w3-agile white-w3ls"><?php remove_filter( 'the_content', 'wpautop' ); the_content(); ?></p>
			<a href="intro.php" class="button-w3layouts hvr-rectangle-out hvr-wobble-vertical">Learn more</a>
		</div>-->
		<?php  endwhile; 
                  wp_reset_postdata();
             ?>
	</div>
	<div class="clearfix"></div>
</div>
<!--//services-->
<!-- Register -->
<div class="register-wthree">
	<div class="container">
	<div class="col-md-6 regstr-l-w3-agileits">
	<h3 class="tittle-agileits-w3layouts white-w3ls" data-sb="fadeInDown" data-sb-hide="fadeOutUp">Make your <span>Enquiry TODAY</span></h3>
	<h4 data-sb="fadeInUp" data-sb-hide="fadeOutUp">Hurry Up!</h4>
	<!--timer-->
    <section class="examples">
        <div class="simply-countdown-losange" id="simply-countdown-losange" data-sb="bounceInUp" data-sb-hide="fadeOutUp"></div>
        <div class="clear"></div>
    </section>
    <div class="clearfix"></div>
	<!--//timer-->
	</div>
	<div class="col-md-6 regstr-r-w3-agileits">
	<div class="form-bg-w3ls" data-sb="fadeInRight" data-sb-hide="fadeOutUp">
		<h3>Online Registration </h3>
		<p class="para-w3-agile white-w3ls">Please fill in the form below. We'll contact you as soon as possible. </p>
		<!--<form action="#" method="post">
			<input type="text"  name="Name" placeholder="Full name" required />
			<input type="email"  name="Email" placeholder="Email" required />
			<select class="form-control">
				<option>Select Option</option>
				<option>Pre-Nursery</option>
				<option>Nursery</option>
				<option>Kindergarten I</option>
                <option>Kindergarten II</option>
			</select>
			<input type="submit" value="Submit" class="button-w3layouts hvr-rectangle-out">
		</form>-->
	<?php	echo do_shortcode( '[contact-form-7 id="41" title="Register Form"]' ); ?>
	</div>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
<!-- //Register -->

<!-- agile_testimonials -->
<div class="test hidden">
	<div class="container">
	<div class="col-md-3 test-left-agileinfo mail-svg">
	<h3 class="tittle-agileits-w3layouts" data-sb="fadeInDown" data-sb-hide="fadeOutUp">Testimonials <div class="svg-wrapper hidden"></div></h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
							
          <?php query_posts('posts_per_page=-1&post_type=testimonial&post_status=publish&order=ASC');

            while(have_posts()) : the_post();
	       ?>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"><?php the_content();?></p>
										<h4><?php the_title();?></h4>
										
									</div>	
									<div class="col-md-4 test-grid2">
									<?php the_post_thumbnail(array(250,350),array('class'=> 'img-r'));?>	
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<?php  endwhile; 
                                  wp_reset_postdata();
                             ?>
	
					</div>
				</div>	
		</div>
	</div>
</div>
<!-- //agile_testimonials -->
<!--footer-->
<?php get_footer(); ?>
