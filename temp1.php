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
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
					  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
					</ol>
					<div class="carousel-inner" role="listbox">
					  <div class="item active">
						<img class="slider-img"  alt="First slide [1140x500]" src="img/6.jpg" style="width:1180px;height:500px;" data-holder-rendered="true">
					  </div>
					  <div class="item">
						<img  class="slider-img"  alt="Second slide [1140x500]" src="img/2.jpg" style="width:1180px;height:500px;" data-holder-rendered="true">
					  </div>
					  <div class="item">
						<img  class="slider-img"  alt="Third slide [1140x500]" src="img/3.jpg" style="width:1180px;height:500px;" data-holder-rendered="true">
					  </div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
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
<iframe src="pdf/unix1.pdf" width="100%;">
				</iframe>
<script src="/tybca105/jquery3.js"></script>
<script src="/tybca105/bootstrap/dist/js/bootstrap.min.js"></script>