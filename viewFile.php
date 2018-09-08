<?php  

if(isset($_POST['file-submit'])){
	//print_r($_FILES['uploadFile']);
	copy($_FILES['uploadFile']['tmp_name'],"temp/temp.pdf");
}
?>

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
		</style>
	</head>
	<body>
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
			
		<div class="container">
			<div class="row">		
				<div class="col-md-6 doc-view">
					<iframe src="temp/temp.pdf" height="100%" width="100%">
				</div>
				<div class="col-md-6 doc-options">
				</div>
			</div>
		</div>
	</body>
</html>

<script src="/tybca105/jquery3.js"></script>
<script src="/tybca105/bootstrap/dist/js/bootstrap.min.js"></script>
<script> 


</script>
