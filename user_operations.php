<?php
require_once "db_common.php";
//print_r($_POST);return;
if(isset($_POST['form_register'])){
	$username=$_POST['username'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$passwd=md5($password);
	$query_string="INSERT INTO USERS (name,email,username,password) VALUES ('{$name}','{$email}','{$username}','{$passwd}')";
	
	
	$in_user=mysql_query($query_string);
	if(!$in_user){
		echo "There is problem in registration ".mysql_error();
		exit;
	}
	echo "Registration Successful place <a href='login.php'>login here</a>";
	
}else
if(isset($_POST['form_login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$passwd=md5($password);
	$query_string="select * from users where username='{$username}'";
	
	
	$user_data=mysql_query($query_string);
	if(!$user_data){
		echo "There is problem in fetching data. ".mysql_error();
		exit;
	}
	if(mysql_num_rows($user_data)<=0){
		echo "User not with found with username <b>{$username}</b>.please<a href='login.php'>login again</a>";
		exit;
	}
	$row=mysql_fetch_array($user_data);
	$passwd2=$row['password'];
	if($passwd==$passwd2){
		$_SESSION['user_logged']=$username;
		$_SESSION['user_data']=array("name"=>$row['name'],"id"=>$row['id'],"email"=>$row['email']);
		header("Location: dashboard.php");
		exit;
	}
	echo "Password Not matched please login again <a href='login.php'>login again</a>";
	
}
?>

