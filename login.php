<?php
require_once "db_common.php";
if(isset($_SESSION['user_logged'])){
	header("Location: dashboard.php");
}
?>
<html>
	<form action="user_operations.php" method="POST">
			<table>
			<caption>Login form</caption>
	
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username" placeholder="Username"> </td>
			</tr>
		
			<tr>
				<td>Password: </td>
				<td><input type="password" name="password"> </td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" name="form_login"> </td>
			</tr>
		</table>

	</form>
</html>