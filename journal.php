<?php 
require_once "db_common.php";
require_once "session.php";
//echo "you are logged in ".$_SESSION['user_data']['name'];
?>

<html>
	<?php 
	
	include "header.php"; 
	echo "<script> window.allAc=JSON.parse('".allAccountsJson()."');</script>";
	?>
		<div class="main-body" style="background:white;">
			<table width="100%" border="1">
				<tr>
					<th>From</th>
					<th>To</th>
					<th width="15%">Amount Dr.</th>
					<th width="15%">Amount Cr.</th>
				</tr>
				<tr>
					<td><input type="text" class="input-ac"></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
	</body>
</html>