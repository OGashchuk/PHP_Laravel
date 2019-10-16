@extends('admin')
@section('content')

<div class="container">
	<h3>Добавить курорт</h3>
	<div class="row">
		<div class="col-md-12">
			<!-- //{!! Form::open(['route' => 'tours.store']) !!} -->
		<form action="{{ route('curorts.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" class="form-control" name="curort_name" placeholder="Название">
				<br>
				<div>Страна: 
					<select name="name_country">Страна</option>
						<option value="default">Выберите страну</option>
						@foreach($countries as $country)
						<option value="{{$country->name_country}}">{{$country->name_country}}</option>
						@endforeach
					</select>
				</div>
				<div>Тип: 
					<select name="type_name">
						<option value="default">Выберите тип</option>
						@foreach($types as $type)
						<option value="{{$type->type_name}}">{{$type->type_name}}</option>
						@endforeach
					</select>
				</div>
			</div>

				<button class="btn btn-success">Сохранить</button>
			</div>
		</form>
			<!--//{!! Form::close() !!}-->
		</div>
	</div>
</div>


@endsection