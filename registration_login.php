<?php
ob_start();
/*
Template name: Registration
*/
get_header(); ?>

<?php

 /* if(isset($_POST['submit1'])){
	echo 'bbbbbbbbb';
	exit;
}  */

if(isset($_POST['submit'])){
	

	
       global $wpdb;


		$data=array(
	
        'name' => $_POST['username'], 
        'email' => $_POST['email'],
        'password' =>md5($_POST['password']), 
        'phone_no' => $_POST['phone'],
		'gender' => $_POST['gender'], 
        
       );
	   
	   $data1=array(
	   
	   'user_login' => $_POST['username'], 
       'user_email' => $_POST['email'],
       'user_pass' => md5($_POST['password']), 
       
	   
	   );
	   
		   
$insert=$wpdb->insert('wp_new_user',$data);
$insert=$wpdb->insert('wp_users',$data1);
echo $insert;

if($insert){
	
	echo 'Insert Successfull';
}
else{
	echo 'Insert Failed';
}  
}


//////////////Login//////////////
if(isset($_POST['login'])){
	
	

   global $wpdb;
 
   $uname=$_POST['user_username'];
   $password=$_POST['user_password'];
					
 
$mylink = $wpdb->get_row( "SELECT * FROM wp_new_user WHERE email ='".$uname."'");

$val=$wpdb->num_rows;

	if($val>0)
	 {
		 
	/* echo $login_data['user_password'];
	exit; */	
	$login_data = array();
	$login_data['user_login'] =  $uname;
	$login_data['user_password'] = $password;
	
	
     $user_verify = wp_signon($login_data,false); 
	 if (is_wp_error($user_verify))
		{
		 echo 'Sorry, we could not verify your email and password.';
		}
	 else{
		 
		 //echo 'login successfull';
		// exit;
		 
		//$loginpagelink = get_permalink( get_page_by_path('registration'));
		$loginpagelink=site_url();
		wp_redirect( $loginpagelink); 
	 }
	 }
	 else
	 {
		  $umsg="<font color='#FF0000'>Sorry, we couldn't verify your email and password.</font>";
	 }

 
} 

?>

   <!--<form method="post" action="">
   Name: <input type="text" name="name1" required>
   <br>
   <br>
   Email: <input type="email" name="email" required>
   <br>
   <br>
   Mobile: <input type="mobile" name="mobile" required>
   <br>
   <br>
   <input type="submit" name="submit1" value="Submit">
   
   </form>-->



       <div class="wrap">
        <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div id="register_form">
        <form method="post" action="" id="">
		Name: <input type="text" name="username" required>
		<br>	
		Email: <input type="email" name="email" required>
		<br>
		Pssword: <input type="password" name="password" required>
		<br>
		Phone No: <input type="text" name="phone">
		<br>
		Gender: <input type="radio" name="gender" value="male"> Male
		        <input type="radio" name="gender" value="female"> Female
		<br>		
		<br>
		<input type="submit" name="submit1" value="submit">
        </form>
		<br>
		<br>
		<button id="login_button">Login</button>
		</div>
		</main>
		
 </div>
</div>





<div class="clearfix"></div>
<div class="wrap">
 <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div id="login_form" style="display:none">
<form method="post" action="">
		Email: <input type="text" name="user_username">
		<br>	
		Password: <input type="password" name="user_password">
		<br>
		<br>
		<input type="submit" name="login" value="Login">
		<br>
		</form>
		<br>
		<button id="register_button">Register</button>
		</div>
		</main><!-- #main -->
		
 </div><!-- #primary -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$("#login_button").click(function(){
	//alert('gdg'); 
	$("#login_form").css("display","block");
	$("#register_form").css("display","none");
 });

 $("#register_button").click(function(){
	$("#register_form").css("display","block"); 
	$("#login_form").css("display","none");
 });
});
</script>


<?php get_footer();
