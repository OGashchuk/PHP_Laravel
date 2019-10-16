@extends('admin')
@section('content')

<div class="container">
	<h3>Все туры</h3>
		
	<div class="row">
		<div class="col-md-10 col-md-offset-0">
			<table class="table">
				<thead> 
					<tr>
						<td>ID</td>
						<td>Title</td>
						<td>Image</td>
						<td>Country</td>
						<td>Cost</td>
						<td>Actions</td>
					</tr>
				</thead>
				<tbody>
				
					@foreach($tours as $tour)
						
						<tr>
							<td>{{$tour->id_tour}}</td>
							<td>{{$tour->title}}</td>
							<td><img src="{{asset('/storage/'.$tour->image)}}" alt="" height="30" width="50"></td>
							<td>{{$tour->name_country}}</td>
							<td>{{$tour->cost}}</td>
							<td>

								<!-- <a href="#"><i class="glyphicon glyphicon-eye-open"></i></a> -->
								<a href="{{route('tours.edit', $tour->id_tour)}}"><i class="glyphicon glyphicon-edit" style="color: blue; height: 20px;width: 20px;"></i></a>
								<!-- <a href="#"><i class="glyphicon glyphicon-remove"></i></a> -->

								{!! Form::open(['method' => 'DELETE', 'class' => 'form-inline',
									'route' => ['tours.destroy', $tour->id_tour]])!!} 
								
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
	<a href="{{route('tours.create')}}" class="btn btn-success">Создать</a>
	<a href="{{route('admin')}}" class="btn btn-success">Админ панель</a>
</div>


@endsection