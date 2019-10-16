<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/../css/style.css">
	<link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>

	<script>
		$(document).ready(function(){
		  $('.your-class').slick({
		    slidesToShow: 1,
		  	slidesToScroll: 1,
		  	arrows: true
		  });
		});
	</script>
</head>
<body>
	<div class="wrapper">
		<header class="main-header">
				<div class="head-bg-img">
					
					<div class="your-class" style="height: 200px;">
					  <img src="https://www.ittour.com.ua/images/itt_country_image_rotation/6/5/1/file_name/4.jpg" alt="" style="height: 200px;">
					   <img src="https://www.ittour.com.ua/images/itt_country_image_rotation/6/5/1/file_name/4.jpg" alt="" style="height: 200px;">
					   <img src="https://www.ittour.com.ua/images/itt_country_image_rotation/6/5/1/file_name/4.jpg" alt="" style="height: 200px;">
					</div>
		



				<nav>
					<ul>
						<li><a href="/">Главная</a></li>
						
						<form action="{{ route('search.show')}}" method="GET" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group" style="display: block; margin-left: 200px;">
				
								<input type="text" class="form-control" name="title" placeholder="Название">
								<input type="number" class="form-control" name="cost" placeholder="Максимальная Цена">
								<input type="text" class="form-control" name="country_name" placeholder="Страна">
								<input type="submit" class="btn-poisk" value="Искать" required>
							</div>
								
							
						</form>

					</ul>
			
		</header>

	
