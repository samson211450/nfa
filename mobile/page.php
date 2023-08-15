<?php
if(isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
	
	switch($page){
		case "login":
			include('pages/login.php');
			break;
			
		case "register":
			include('pages/register.html');
			break;
			
		case "verify":
			include('pages/verify.php');
			break;
			
		case "confirmPwd":
			include('pages/password.php');
			break;
			
		case "status":
			include('pages/status.php');
			break;
			
		case "apply":
			include('pages/apply.php');
			break;
			
		case "profile":
			include('pages/profile.php');
			break;
			
		default:
			include('pages/login.php');
	}
}else{
	include('pages/login.php');
}
?>