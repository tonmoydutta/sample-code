<?php 
/*****************Add Menu in admin panel********************/
add_action("admin_menu", "menuFunc_admin_init");
function menuFunc_admin_init() {
	add_menu_page('Registration Form','Registration Form',7, 'alluser', 'alluser');
}
function alluser()
{
	
	include ('datatable.php');
	//include ('application/application.php');
}
/*****************End********************/
?>