<?php 
session_start();
$con=mysql_connect("localhost","root","");
if(!$con){
	die("Db Connection Error: ".mysql_error());
}
mysql_select_db("acpp");

function sData($name){
	return $_SESSION[$name];
}

function allAccountsJson(){
	$res=mysql_query("select * from accounts where user_id=".sData("user_data")['id']);
	$arr=[];
	while($row=mysql_fetch_assoc($res)){
		$arr[]=$row;
	}
	return json_encode($arr);
}
function addAccount($ac_name,$ac_type,$ac_balance){
	$user_id=sData("user_data")['id'];
	$query="insert into accounts (ac_name,ac_type,ac_balance,user_id) values ('{$ac_name}','{$ac_type}',{$ac_balance},{$user_id})";
	$res=mysql_query($query);
	if(!$res){
		return false;
	}
	return true;
}
function updateAccount($ac_name,$ac_type,$ac_balance,$id){
	$query="update accounts set ac_name='{$ac_name}', ac_type='{$ac_type}', ac_balance={$ac_balance} where id={$id}";
	$res=mysql_query($query);
	if(!$res){
		return false;
	}
	return true;
}
function deleteAccount($id){
	$query="delete from accounts where id=".$id;
	return mysql_query($query);
}
?>