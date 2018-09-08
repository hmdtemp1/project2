<html>
	<head> 
		<link rel="stylesheet" href="/tybca105/bootstrap/dist/css/bootstrap.min.css">
		<style>
			.menu-item:hover{
				background:lightgrey;
			}
			.side-nav{
				border-right:2px solid black;
			}
			.slider{
				height:500px;
				background:#333311;
			}
			.slider-img{
				width:100%;
				height:100%;
			}
			.slider-div{
				display:inline;
			}
			@media (max-width: 500px){
				.slider-img{
					height:300px;
				}
			}
			#nonPdf{
				
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="navbar navbar-default">
					<div class="">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							  <span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Title </a>
							
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li class="menu-item"> <a href="#">Menu1 </a></li>
								<li class="menu-item"> <a href="#">Menu1 </a></li>
								<li class="menu-item"> <a href="#">Menu1 </a></li>
								<li class="menu-item"> <a href="#">Menu1 </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
					<form id="fileUploadForm" action="viewFile.php" method="POST" enctype="multipart/form-data">
						<input type="file" name="uploadFile" id="uploadFile" style="display:none">
						<input type="submit" name="file-submit" value="yes" style="display:none">
						<input type="submit" name="non-pdf" id="cbNonPdf" value="yes" style="display:none">
					</form>
				<div class="panel" style="text-align:center;border:1px solid blue;padding:40px;background:rgb(53, 104, 196)">
					<div class="one-border" style="border:1px dashed blue;width:50%;margin:auto;background:white">
						<label for="uploadFile" class="btn btn-primary btn-responsive" style="margin:40px;width:30%;white-space:normal" >Upload File</label>
						Non paf <label for="cbNonPdf" id="#nonPdf"> </label>
					</div>
					
				</div>
				
			</div>
			
			<div class="row" style="">
				<div class="col-md-4"  style="background:blue;height:300px;">
					
				</div>
				<div class="col-md-4" style="background:pink;height:300px;">
					
				</div>
				<div class="col-md-4" style="background:green;height:300px;">
					
				</div>
			</div>
		</div>
	</body>
</html>

<script src="/tybca105/jquery3.js"></script>
<script src="/tybca105/bootstrap/dist/js/bootstrap.min.js"></script>
<script> 
$(document).ready(function(){
	$("#uploadFile").change(uploadFileFunction);
});

function uploadFileFunction(){
	$("#fileUploadForm")[0]['file-submit'].click();
	return;
	var r=new FileReader();
	r.readAsBinaryString(this.files[0]);
	r.onload=function(res){
		var data=res.target.result;
		
	}
}

</script>
