<?php 
require_once "db_common.php";
require_once "session.php";
if(isset($_POST['all_accounts'])){
	echo allAccountsJson();
}
else if(isset($_POST['ac-add'])){
	$ac_name=$_POST['ac-name'];
	$ac_type=$_POST['ac-type'];
	$ac_balance=$_POST['ac-balance'];
	$res=addAccount($ac_name,$ac_type,$ac_balance);
	if($res){
		echo "success";
	}
	else{
		echo "error";
	}
	
}
else if(isset($_POST['ac-update'])){
	$id=$_POST['id'];
	$ac_name=$_POST['ac-name'];
	$ac_type=$_POST['ac-type'];
	$ac_balance=$_POST['ac-balance'];
	$res=updateAccount($ac_name,$ac_type,$ac_balance,$id);
	if($res){
		echo "success";
	}
	else{
		echo "error";
	}
	
}
else if(isset($_POST['ac-add'])){
	echo "nothon";
}
else if(isset($_POST['ac-delete'])){
	$id=$_POST['id'];
	$res=deleteAccount($id);
	if($res){
		echo "success";
	}
	else{
		echo "error";
	}
}

?>