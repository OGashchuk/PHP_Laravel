@extends('admin')
@section('content')

<div class="container">
	<h3>Редактировать тур № - {{$departuredate->id_departure_date}}</h3>
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route'=>['departuredates.update', $departuredate->id_departure_date], 'method'=>'PUT']) !!}
			{{csrf_field()}}
			<div class="form-group">
				<input type="date" class="form-control" name="departure_date"
				 value="{{$departuredate->departure_date}}">
				<br>
				<button class="btn btn-success">Сохранить</button>
			</div>		
			{!! Form::close() !!}
		</div>
	</div>
</div>


@endsection