@extends('admin')
@section('content')

<div class="container">
	<h3>Все типы</h3>
		
	<div class="row">
		<div class="col-md-10 col-md-offset-0">
			<table class="table">
				<thead> 
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Actions</td>
					</tr>
				</thead>
				<tbody>
				
					@foreach($types as $type)
						<tr>
							<td>{{$type->id_type}}</td>
							<td>{{$type->type_name}}</td>
							<td>
								
								<a href="{{route('types.edit', $type->id_type)}}"><i class="glyphicon glyphicon-edit" style="color: blue; height: 20px;width: 20px;"></i></a>
								{!! Form::open(['method' => 'DELETE', 'class' => 'form-inline',
									'route' => ['types.destroy', $type->id_type]])!!} 
								
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
	<a href="{{route('types.create')}}" class="btn btn-success">Создать</a>
	<a href="{{route('admin')}}" class="btn btn-success">Админка</a>
</div>


@endsection