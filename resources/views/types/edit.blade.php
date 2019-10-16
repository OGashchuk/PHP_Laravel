@extends('admin')
@section('content')

<div class="container">
	<h3>Редактировать тур № - {{$type->id_type}}</h3>
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route'=>['types.update', $type->id_type], 'method'=>'PUT']) !!}
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" class="form-control" name="type_name" placeholder="Название"
				 value="{{$type->type_name}}">
				<br>
				<button class="btn btn-success">Сохранить</button>
			</div>		
			{!! Form::close() !!}
		</div>
	</div>
</div>


@endsection