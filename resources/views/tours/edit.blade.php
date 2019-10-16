@extends('admin')
@section('content')

<div class="container">
	<h3>Редактировать тур № - {{$tour->id_tour}}</h3>
	
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route'=>['tours.update', $tour->id_tour], 'method'=>'PUT']) !!}
			
			<div class="form-group">
				<input type="text" class="form-control" name="title" placeholder="Название"
				 value="{{$tour->title}}">
				<br>
				<textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Описание">{{$tour->description}}</textarea>
				<br>
				<div>Курорт: 
					<select name="curort_name">Курорт</option>
						@foreach($curorts as $curort)
							@if ($tour->curort_id === $curort->id_curort)
	    						<option value="{{$curort->curort_name}}" selected>{{$curort->curort_name}}</option>
	    					@else
	    						<option value="{{$curort->curort_name}}">{{$curort->curort_name}}</option>
	    					@endif
						@endforeach
					</select>
				</div>
				<div>Дата отправки: 
					<select name="departuredate">
						
						@foreach($departuredates as $departuredate)
							@if ($tour->departure_date_id === $departuredate->id_departure_date)
								<option value="{{$departuredate->departure_date}}" selected>{{$departuredate->departure_date}}</option>
							@else
								<option value="{{$departuredate->departure_date}}">{{$departuredate->departure_date}}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div>Длительность: 
					<select name="duration">
						
						@foreach($durations as $duration)
							@if ($tour->duration_id === $duration->id_duration)
								<option value="{{$duration->number_of_days}}" selected>{{$duration->number_of_days}}</option>
							@else
								<option value="{{$duration->number_of_days}}">{{$duration->number_of_days}}</option>
							@endif
						@endforeach
					</select>
				</div>
				<input type="text" class="form-control" name="cost" placeholder="Цена" value="{{$tour->cost}}">
				<br>
				<button class="btn btn-success">Сохранить</button>
			</div>
			
			{!! Form::close() !!}

		</div>
	</div>
</div>


@endsection