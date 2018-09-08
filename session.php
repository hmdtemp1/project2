<?php 
if(!isset($_SESSION['user_logged'])){
	echo "You are not logged in. <a href='login.php'>login here</a>";
	exit;
}
$userData = sData("user_data");
?>