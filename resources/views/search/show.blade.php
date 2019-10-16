@extends('layouts.index.default')


@section('content')
	<div style="width: 100px; height: 50px; margin: 0 auto;"><h3>Найдено {{count($tours)}}</h3></div>
	
	<div class="content">
		@foreach($tours as $tour)
		<div class="box">
			<div class="title">
		        <h3 class="title">
					<a href="{{route('posts.show', $tour->id_tour)}}">{{$tour->title}}</a>
				</h3>

				<h2 class="cost" >
		            ${{($tour->cost)}} 
				</h2>
			</div><!-- title -->
			<header class="header-box" style="background-image: url('{{asset('/storage/'.$tour->image)}}')">
    		</header>
    		<div class="date">
					<p>Курорт:</p>
					<p>{{$tour->curort_name}}</p>
			</div>
			<div class="date">
					<p>Страна:</p>
					<p>{{$tour->name_country}}</p>
				</div>

		        <div class="date">
		        	<p>Дата вылета:</p>
		            <p>{{$tour->departure_date}}</p>
		        </div>
				<div class="date">
					<p>Тип:</p>
		            <p>{{$tour->type_name}}</p>
		        </div>
		        <div class="date">
					<p>Длительность дней:</p>
		            <p>{{$tour->number_of_days}}</p>
		        </div>
		        <div class="date-mindescription">
			        
			        	<p class="description-home">
			            	 {{mb_substr($tour->description, 0, 100, 'utf-8') . '...'}}
						</p>
			      
		        </div>
		          
					

		</div><!-- box -->
		@endforeach
		
		<br>
	
	</div>
	<nav>
		{{$tours->links()}}</nav>


@endsection