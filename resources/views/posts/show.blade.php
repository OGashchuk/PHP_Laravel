@extends('layouts.index.default')
@section('content')

<div class="content">
			<div class="box-art">
				<div class="title">
						<h3 class="title">
							<a href="">{{$tour->title}}</a>
						</h3>
						
						<h2 class="cost" style="margin-left:0 auto; padding-right: 0px; margin-left: auto;">
							<img src="{{ url('img/icon/dollar_icon.png') }}" width="25" height="25" alt="">
						</h2>
						<h2 class="cost" style="padding-left: 5px; ">
							{{$tour->cost}}
						</h2>
				</div>
				<header class="header-box-art" style="background-image: url('{{asset('/storage/'.$tour->image)}}')">
				</header>
					<div class="date-full" style="padding-top: 15px">
						<p class="p-tab"><img src="{{ url('img/icon/list_icon.png') }}"  alt=""> Курорт:</p>
						<p class="description-min">{{$tour->curort_name}}</p>
					</div>
					<div class="date-full">
						<p class="p-tab"><img src="{{ url('img/icon/list_icon.png') }}"  alt=""> Страна:</p>
						<p class="description-min">{{$tour->name_country}}</p>
					</div>

			        <div class="date-full">
			        	<p class="p-tab"><img src="{{ url('img/icon/list_icon.png') }}"  alt=""> Дата вылета:</p>
			            <p class="description-min" >{{$tour->departure_date}}</p>
			        </div>
					<div class="date-full">
						<p class="p-tab"><img src="{{ url('img/icon/list_icon.png') }}"  alt=""> Тип:</p>
			            <p class="description-min">{{$tour->type_name}}</p>
			        </div>
			        <div class="date-full">
						<p class="p-tab"><img src="{{ url('img/icon/list_icon.png') }}"  alt=""> Длительность:</p>
			            <p class="description-min">{{$tour->number_of_days}}</p>
			        </div>


			        <div class="date-fulldescription">
						<p class="p-tab"><img src="{{ url('img/icon/list_icon.png') }}"  alt=""> Описание:</p>
			            <p class="description">{{$tour->description}}</p>
			        </div>
					<div class="btn-go">
						<button id="go">Заказать</button>
					</div>

					<div id="modal_form" style="display: none; top: 45%; opacity: 0; background: #202020;">
						<p>Заказ<span id="modal_close">X</span></p>
							<form action="{{route('orders.store')}}" method="post" enctype="multipart/modal_form" onsubmit="orderStore();">
								{{csrf_field()}}
								<p><input type="text" name="tour" value="{{$tour->title}}" style="display: none"></p>
								<p><input type="text" name="type" value="{{$tour->name_country}}" style="display: none"></p>
								<p><input type="text" name="curort" value="{{$tour->title}}" style="display: none"></p>
								<p><input type="text" name="country" value="{{$tour->name_country}}" style="display: none"></p>
								<p><input type="text" name="cost" value="{{$tour->title}}" style="display: none"></p>
								<p><input type="text" name="departure_date" value="{{$tour->name_country}}" style="display: none"></p>
								<p><input type="text" name="duration" value="{{$tour->title}}" style="display: none"></p>
								
								
								<p>Тур: <span>{{$tour->title}}</span></p>
								<p>Тип: <span>{{$tour->type_name}}</span></p>
					            <p>Курорт: <span>{{$tour->curort_name}}</span></p>
								<p>Страна: <span>{{$tour->name_country}}</span></p>
								<p>Стоимость: <span>${{$tour->cost}}</span></p>
								<p>Дата вылета: <span>{{$tour->departure_date}}</span></p>
								<p>Длительность (дней): <span>{{$tour->number_of_days}}</span></p>
								<br>
								<p>Фамилия<br><input type="text" name="first_name" size="40" required class="rfield"></p>
								<br>
								<p>Имя<br><input type="text" name="last_name" size="40" required class="rfield"></p>
								<br>
								<p>Отчество<br><input type="text" name="middle_name" size="40" required class="rfield"></p>
								<br>
								<p>Номер телефона<br><input type="number" name="phone" size="40" required class="rfield"></p>
								<br>
								<p>Email<br><input type="Email" name="email" size="40" required class="rfield"></p>
								<br>
								<p>Количество человек <br><input type="number" name="number_of_persons" value="" size="40" required class="rfield"></p>
								<br>
								
								<p style="text-align: center; padding-bottom: 10px;">
									<input class="btn_submit" id="submit" type="submit" value="Заказать">
								</p>
							</form>
					</div>
					<div id="overlay" style="display: none;"></div>


	



			</div>
			
</div>



<script type="text/javascript" src="{{ url('js/order_modal_window.js') }}"></script>
@stop