@extends('admin')
@section('content')

<div class="container">
	<h3>Редактировать тур № - {{$country->id_country}}</h3>
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route'=>['countries.update', $country->id_country], 'method'=>'PUT']) !!}

			<div class="form-group">
				<input type="text" class="form-control" name="name_country" placeholder="Название страны"
				 value="{{$country->name_country}}">
				<br>
	
				<button class="btn btn-success">Сохранить</button>
			</div>
			
			{!! Form::close() !!}

		</div>
	</div>
</div>


@endsection