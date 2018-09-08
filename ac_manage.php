<?php 
require_once "db_common.php";
require_once "session.php";
//echo "you are logged in ".$_SESSION['user_data']['name'];

?>

<html>
	<?php include "header.php"; ?>
		<div class="row">
			<div class="container"> 
				<div class="row">
					<div class="col">
						<button class="btn btn-primary" type="button" style="margin:10px;float:right;" onclick="addAccountDialog()">Add Account</button>
					</div>
				</div>
				<table class="table table-candenced">
					<thead style="background:white"> 
						<tr> 
							<th># </th>
							<th>Name</th>
							<th>Type</th>
							<th>Balance</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody id="acListBody"> 
					
					</tbody>
					
				</table>
			</div>
		</div>
		<div class="container add-ac" id="addAcDialog" style="display:none"> 
			<div class="close-btn btn btn-primary" onclick="$(this).parent().hide(500)" >
				X
			</div>
			<table class="table">
				<caption>Account Operation </caption>
				<tr>
					<td>Account Name:</td>
					<td><input type="text" name="ac-name" class="form-control" id="acName"> </td>
				</tr>
				<tr>
					<td>Account Type:</td>
					<td>
						<select class="form-control" name="ac-type" id="acType">
							<option value="personal"> Personal</option>
							<option value="real"> Real</option>
							<option value="nominal"> Nominal </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Opening Balance:</td>
					<td><input type="number" name="ac-balance" value="0" class="form-control" id="acBalance"> </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="ac-add" value="Add Account" id="addAcBtn" class="btn btn-primary"> </td>
				</tr>
			</table>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	loadAccounts();
	$("#addAcBtn").click(function(){
		if(window.updateAccount){
			updateAccountRequest();
		}
		else{
			addAccountRequest();
		}
	});
});

function addAccountDialog(){
	$("#addAcDialog").show(500);
}


function loadAccounts(){
	$.ajax({
		url: "dataProvider.php",
		type: "POST",
		data:{all_accounts:"yes"},
		success:function(data){
			var jData=JSON.parse(data);
			$("#acListBody").empty();
			for(i in jData){
					$("#acListBody").append('<tr> \
						<td>'+jData[i].id+'</td>\
						<td>'+jData[i].ac_name+'</td>\
						<td>'+jData[i].ac_type+'</td>\
						<td>'+jData[i].ac_balance+'</td>\
						<td>'
						
						+"<button class='btn btn-info' style='margin-right:20px;' onclick='updateAccountFunction(this)'>Update </button>"
						+"<button class='btn btn-danger' onclick='deleteAccountRequest("+jData[i].id+")'>Delete </button>"+
						
						'</td>\
					</tr>');
			}
			
		},
		error: function(){
			alert("Problem with request");
		}
	});
}
function addAccountRequest(){
if($("#acName").val()==""){
	alert("Enter Name");
	return;
}
	$.ajax({
		url:"dataProvider.php",
		type: "POST",
		data:{
			"ac-add":"true",
			"ac-name": $("#acName").val(),
			"ac-type": $("#acType").val(),
			"ac-balance": $("#acBalance").val()
		},
		success:function(data){
			console.log(data);
			if(data=="success"){
				//alert("Account Added Successfully");
				loadAccounts();
				$("#addAcDialog").hide(500);
			}
			else{
				alert("Error occured: ",data);
			}
		},
		error:function(err){
			console.log("er: ",err)
		}
	});
}
function deleteAccountRequest(id){
	$.ajax({
		url:"dataProvider.php",
		type: "POST",
		data:{
			"ac-delete":true,
			id: id
		},
		success:function(data){
			console.log(data);
			if(data=="success"){
				//alert("Account Deleted Successfully");
				loadAccounts();
			}
			else{
				alert("Error occured: ",data);
			}
		},
		error:function(err){
			console.log("er: ",err)
		}
	});
}
function updateAccountRequest(){
window.updateAccount=false;
if($("#acName").val()==""){
	alert("Enter Name");
	return;
}
	$.ajax({
		url:"dataProvider.php",
		type: "POST",
		data:{
			"ac-update":"true",
			"ac-name": $("#acName").val(),
			"ac-type": $("#acType").val(),
			"id": window.id,
			"ac-balance": $("#acBalance").val()
		},
		success:function(data){
			console.log(data);
			if(data=="success"){
				//alert("Account Added Successfully");
				loadAccounts();
				$("#addAcDialog").hide(500);
			}
			else{
				alert("Error occured: ",data);
			}
		},
		error:function(err){
			console.log("er: ",err)
		}
	});
}
function updateAccountFunction(e){
	window.e=e;
	allTds=$(e).parents("tr").eq(0).children();
	window.updateAccount=true;
	window.id=parseInt(allTds[0].innerHTML);
	$("#acName").val(allTds[1].innerHTML);
	$("#acType").val(allTds[2].innerHTML);
	$("#acBalance").val(allTds[3].innerHTML);
	$("#addAcDialog").show(500);
}
</script>


