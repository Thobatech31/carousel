<!doctype html>
<html lang="en"> 
	<head>
		<title>boostrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--BOOTSRAP-->
		<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
		
		
		<style>
			#myCarousel{
				margin-left:100px;
				margin-top:70px;
				border:3px solid black;
				border-radius:15px;
				background-color:gray;
			}
			
			#image{
				width:60%;
				margin-left:100px;
			}
		</style>
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
				
					<div id="myCarousel" class="carousel slide" data-ride= "carousel" data-interval="2000">    
		
						<!-- Carousel indicators -->    
						<ol class="carousel-indicators">       
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>       
							<li data-target="#myCarousel" data-slide-to="1" class="active"></li>       
							<li data-target="#myCarousel" data-slide-to="2" class="active"></li>   
						</ol>       
		
						<!-- Carousel items -->    
						<div class="carousel-inner" role="listbox">       
							<div class="item active">          
								<img src="my1.jpeg" id="image" alt="first slide">        
								<div class="carousel-caption">This Caption 1</div>       
							</div>
		
			
							<div class="item">          
								<img src="my1.jpeg" id="image" alt="Second slide">          
								<div class="carousel-caption">This Caption 2</div>       
							</div>       
			
							<div class="item">          
								<img src="my1.jpeg" id="image" alt="Third slide">          
								<div class="carousel-caption">This Caption 3</div>       
							</div>    
						</div>   

						<!-- Carousel nav -->   
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> 
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a> 
		
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a> 
					</div> 

						<script type="text/javascript" src="js/jquery.js"></script>
						<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
				</div>
			</div>
		</div>
	</body>
 </html>
