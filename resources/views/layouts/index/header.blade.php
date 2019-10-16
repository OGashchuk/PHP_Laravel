<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="{{ url('slick-1.8.1/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ url('slick-1.8.1/slick/slick-theme.css') }}">
	<link rel="stylesheet" href="{{ url('css/style.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('slick-1.8.1/slick/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/myslider.js') }}"></script>
	
	

</head>
<body>
	<div class="wrapper">
		<header class="main-header">
				<div class="head-bg-img">
					
					<div class="autoplay" style="height: 200px;">
					  	<img src="{{ url('img/slider/1.jpg') }}" alt="" style="height: 200px;">
					   	<img src="{{ url('img/slider/2.jpg') }}" alt="" style="height: 200px;">
					   	<img src="{{ url('img/slider/3.jpg') }}" alt="" style="height: 200px;">
					</div>
				<nav>
					<a href="/" style="display: block;float: left; margin-top: 15px; margin-left: 10px;">Главная</a>
					
					<form action="{{ route('search.show')}}" method="GET" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group" style="display: block; float: right; margin: 0px 5px;">
								<div class="slidecontainer" style="padding: 0px;">
								 	<div class="cost_slider" style="height: 40px;">
									 	<p style="margin-top: 3px; margin-right: 5px;">Максимальная цена:</p>
										<input class="slider" id="cost" name="cost" type="range" min="1" max="5000" value="5000">
	    								<output id="ong" for="cost" value="{{old('cost')}}"></output>
									</div>
										<select class="selectpicker" style="margin-top: 14px;" name="type_name">
											<option value="default">Выберите тип</option>
											@foreach($types as $type)
											<option value="{{$type->type_name}}">{{$type->type_name}}</option>
											@endforeach
										</select>
									
										<select class="selectpicker" style="margin-top: 14px;" name="country_name" value="{{old('country_name')}}">
											<option value="default">Выберите страну</option>
											@foreach($countries as $country)
											<option value="{{$country->name_country}}">{{$country->name_country}}</option>
											@endforeach
										</select>
						
									<input type="submit" class="btn-poisk" style="margin-top: 14px; float: right;" value="Искать" required>	
								</div>
							</div>
						</form>
			</nav>
			
		</header>

	
