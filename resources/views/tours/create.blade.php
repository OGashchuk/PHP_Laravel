@extends('admin')
@section('content')
@include('errors')
<div class="container">
	<h3>Создать тур</h3>
	<div class="row">
		<div class="col-md-12">
			<!-- //{!! Form::open(['route' => 'tours.store']) !!} -->
		<form action="{{ route('tours.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" class="form-control" name="title" placeholder="Название">
				<br>
				<div>Курорт: 
					<select name="curort_name">Курорт</option>
						<option value="">Выберите курорт</option>
						@foreach($curorts as $curort)
						<option value="{{$curort->curort_name}}">{{$curort->curort_name}}</option>
						@endforeach
					</select>
				</div>
				<div>Дата отправки: 
					<select name="departuredate">
						<option value="">Выберите дату</option>
						@foreach($departuredates as $departuredate)
						<option value="{{$departuredate->departure_date}}">{{$departuredate->departure_date}}</option>
						@endforeach
					</select>
				</div>
				<div>Длительность: 
					<select name="duration">
						<option value="">Выберите длительность</option>
						@foreach($durations as $duration)
						<option value="{{$duration->number_of_days}}">{{$duration->number_of_days}}</option>
						@endforeach
					</select>
				</div>


			
				

				<br>
				<textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Описание"></textarea>
				<br>
				<input type="text" class="form-control" name="cost" placeholder="Цена">
				Картинка: <input type="file" name="image">
				<br>
				<button class="btn btn-success">Сохранить</button>

			
		
			</div>
		</form>
			<!--//{!! Form::close() !!}-->
		
		</div>
	</div>
</div>


@endsection