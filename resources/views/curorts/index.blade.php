@extends('admin')
@section('content')

<div class="container">
	<h3>Все курорты</h3>
		
	<div class="row">
		<div class="col-md-10 col-md-offset-0">
			<table class="table">
				<thead> 
					<tr>
						<td>ID</td>
						<td>curort name</td>
						<td>country_id</td>
						<td>type id</td>
						<td>Actions</td>
					</tr>
				</thead>
				<tbody>
					@foreach($curorts as $curort)
						<tr>
							<td>{{$curort->id_curort}}</td>
							<td>{{$curort->curort_name}}</td>
							<td>{{$curort->country_id}}</td>
							<td>{{$curort->type_id}}</td>
							<td>
							
								<a href="{{route('curorts.edit', $curort->id_curort)}}"><i class="glyphicon glyphicon-edit" style="color: blue; height: 20px;width: 20px;"></i></a>
								
								{!! Form::open(['method' => 'DELETE', 'class' => 'form-inline',
									'route' => ['curorts.destroy', $curort->id_curort]])!!} 
								<button onclick="return confirm('Вы уверены что хотите удалить запись?')" style="color: blue; height: 20px;width: 20px;display: inline; background: transparent; padding: 0px;border: 0px;">
									<i class="glyphicon glyphicon-remove"></i>
								</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<a href="{{route('curorts.create')}}" class="btn btn-success">Создать</a>
	<a href="{{route('admin')}}" class="btn btn-success">Админ панель</a>
</div>


@endsection