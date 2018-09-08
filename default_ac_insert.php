
<?php 
require_once "db_common.php";
require_once "session.php";
if(isset($_POST['default_for_user'])){
	$user_id=$_POST['default_for_user'];
	$default_insert_query="
	INSERT INTO accounts (ac_name,ac_type,ac_balance,user_id) VALUES 
	('Cash','real',0,{$user_id}),
	('Capital','personal',0,{$user_id}),
	('Sales','real',0,{$user_id}),
	('Purchase','real',0,{$user_id}),
	('Sales Return','real',0,{$user_id}),
	('Purchase Return','real',0,{$user_id})
	";
}
$user_id=$userData['id'];
	$default_insert_query="
	INSERT INTO accounts (ac_name,ac_type,ac_balance,user_id) VALUES 
	('Cash','real',0,{$user_id}),
	('Capital','personal',0,{$user_id}),
	('Sales','real',0,{$user_id}),
	('Purchase','real',0,{$user_id}),
	('Sales Return','real',0,{$user_id}),
	('Purchase Return','real',0,{$user_id})
	";
	$res=mysql_query($default_insert_query);
	echo $res;

?>