<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Wisdom Tree :: Home</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kids Kindergarten, Kids School" />
<?php// include"includes/all-css.php"; ?>
<!-- Favicon -->
<link rel="icon" type="img/png"  href="images/favicon.png">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo get_template_directory_uri();?>/css/font-awesome.css" rel="stylesheet"> 
<link href="<?php echo get_template_directory_uri();?>/css/lsb.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flexslider.css" type="text/css" media="screen" property="" />
<link href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/css/hover.css" rel="stylesheet" />
 <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
 <?php wp_head(); ?>
 

 
</head>
<body>


<!-- banner -->
<div class="banner" id="home">
    
    <video poster="<?php echo get_template_directory_uri();?>/images/bg3.jpg" preload="auto" autoplay id="bgvid" loop muted="" class="home-video hidden">
  
   <source src="<?php echo get_template_directory_uri();?>/images/kids_school.mp4" type="video/mp4">
    <source src="<?php echo get_template_directory_uri();?>/images/kids_school.m4v" type="video/m4v">
    <source src="<?php echo get_template_directory_uri();?>/images/kids_school.webm" type="video/webm">
    <source src="<?php echo get_template_directory_uri();?>/images/kids_school.ogv" type="video/ogv">
    </video>
	
	<div class="top-header-agile">
        <h1><a class="col-md-4 navbar-brand" href="<?php echo site_url();?>" data-sb="fadeInLeft" data-sb-hide="fadeOutUp" data-speed="100"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="logo hvr-bounce-in" /></a></h1>
        <div class="col-md-4 top-header-agile-right">
             <?php dynamic_sidebar('Header1');?>   

            </div>
            <div class="col-md-4 top-header-agile-left" data-sb="fadeInRight" data-sb-hide="fadeOutUp" data-speed="100">
                
              <?php dynamic_sidebar('Header2');?> 
                <div class="w3ls_search hidden">
                        <div class="cd-main-header">
                            <ul class="cd-header-buttons">
                                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                            </ul> <!-- cd-header-buttons -->
                        </div>
                        <div id="cd-search" class="cd-search">
                            <form action="#" method="post">
                                <input name="Search" type="search" placeholder="Search...">
                            </form>
                        </div>
                    </div>
                </div>
            
            <div class="clearfix"></div>
            
</div>
    
    <?php //include"includes/header.php"; ?>

    <div class="container">
    		
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <nav class="link-effect-3" id="link-effect-3">
        

                       <?php wp_nav_menu(array( 
                                'theme_location' => 'main_menu', 
                                'menu_class'     => 'nav navbar-nav',        
                                'walker'         => new My_Custom_Nav_Walker(),
                         ));  
                         ?>
    </nav>
</div>
			</nav>
			<div class="col-md-12" style="margin-top:25px;">
    		<span><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">We have a unique day boarding and after school programme. </marquee></span>	
            </div>
            <div class="w3l_banner_info">
                <section class="slider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo get_template_directory_uri();?>/images/banner_1.png" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri();?>/images/banner_2.png" alt="Chicago">
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri();?>/images/banner_3.png" alt="New York">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri();?>/images/banner_4.png" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    <!--<div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="wthree_banner_info_grid">
                                    <h3><span>Genius</span>Welcome to <br>The Wisdom Tree</h3>
                                    <p>Your child can be a genius</p>
                                    <img src="<?php echo get_template_directory_uri();?>/images/banner_1.png" class="img-responsive" />
                                </div>
                            </li>
                            <li>
                                <div class="wthree_banner_info_grid">
                                    <h3><span>Genius</span>Education <br>for everyone</h3>
                                    <p>Your child can be a genius</p>
                                    <img src="<?php echo get_template_directory_uri();?>/images/banner_2.png" class="img-responsive" />
                                </div>
                            </li>
                            <li>
                                <div class="wthree_banner_info_grid">
                                    <h3><span>Genius</span>Welcome to <br>The Wisdom Tree</h3>
                                    <p>Your child can be a genius</p>
                                    <img src="<?php echo get_template_directory_uri();?>/images/banner_3.png" class="img-responsive" />
                                </div>
                            </li>
                            <li>
                                <div class="wthree_banner_info_grid">
                                    <h3><span>Genius</span>Education <br>for everyone</h3>
                                    <p>Your child can be a genius</p>
                                    <img src="<?php echo get_template_directory_uri();?>/images/banner_4.png" class="img-responsive" />
                                </div>
                            </li>
                        </ul>
                    </div>-->
                </section> 
			</div>	
		</div>
		<a href="#about-layout" class="scroll arrow bounce arrow-next hidden-xs"><span class="glyphicon glyphicon-menu-down"></span> <span class="glyphicon glyphicon-menu-down fa-lg"></span></a>
</div>