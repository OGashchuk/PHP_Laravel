@extends('admin')
@section('content')

<div class="container">
	<h3>Редактировать тур № - {{$curort->id_curort}}</h3>
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route'=>['curorts.update', $curort->id_curort], 'method'=>'PUT']) !!}
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" class="form-control" name="curort_name" placeholder="Название"
				 value="{{$curort->curort_name}}">
				<br>
				<div>Страна: 
					<select name="name_country">Страна</option>
						@foreach($countries as $country)
							@if ($curort->country_id === $country->id_country)
	    						<option value="{{$country->name_country}}" selected>{{$country->name_country}}</option>
	    					@else
	    						<option value="{{$country->name_country}}">{{$country->name_country}}</option>
	    					@endif
						@endforeach
					</select>
				</div>
				<div>Тип: 
					<select name="type_name">Тип</option>
						@foreach($types as $type)
							@if ($curort->type_id === $type->id_type)
	    						<option value="{{$type->type_name}}" selected>{{$type->type_name}}</option>
	    					@else
	    						<option value="{{$type->type_name}}">{{$type->type_name}}</option>
	    					@endif
						@endforeach
					</select>
				</div>


				<button class="btn btn-success">Сохранить</button>
			</div>
			
			{!! Form::close() !!}

		</div>
	</div>
</div>


@endsection