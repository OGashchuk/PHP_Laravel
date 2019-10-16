@extends('layouts.index.default')

@section('content')
	
	<div class="content">
		@foreach($tours as $tour)
		<div class="box">
			<div class="title">
		        <h3 class="title">
					<a href="{{route('posts.show', $tour->id_tour)}}">{{$tour->title}}</a>
				</h3>
				<h2 class="cost" style="margin-left:0 auto; padding-right: 0px; margin-left: auto;">
							<img src="{{ url('img/icon/dollar_icon.png') }}" width="25" height="25" alt="">
						</h2>
				<h2 class="cost"  >
		            {{($tour->cost)}} 
				</h2>
			</div><!-- title -->
			<header class="header-box" style="background-image: url({{ url('img/icon/dollar_icon.png') }})">
    		</header>
    		<div class="date">
					<p><img src="{{ url('img/icon/list_icon.png') }}"  alt="">Курорт:</p>
					<p>{{$tour->curort_name}}</p>
			</div>
			<div class="date">
					<p><img src="{{ url('img/icon/list_icon.png') }}"  alt="">Страна:</p>
					<p>{{$tour->name_country}}</p>
				</div>

		        <div class="date">
		        	<p><img src="{{ url('img/icon/list_icon.png') }}"  alt="">Дата вылета:</p>
		            <p>{{$tour->departure_date}}</p>
		        </div>
				<div class="date">
					<p><img src="{{ url('img/icon/list_icon.png') }}"  alt="">Тип:</p>
		            <p>{{$tour->type_name}}</p>
		        </div>
		        <div class="date">
					<p><img src="{{ url('img/icon/list_icon.png') }}"  alt="">Длительность дней:</p>
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


@stop