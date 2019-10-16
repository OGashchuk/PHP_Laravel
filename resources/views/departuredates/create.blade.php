@extends('admin')
@section('content')

<div class="container">
	<h3>Добавить дату</h3>
	
	<div class="row">
		<div class="col-md-12">
			<!-- //{!! Form::open(['route' => 'tours.store']) !!} -->
		<form action="{{ route('departuredates.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<input type="date" class="form-control" name="departure_date">
				<br>
				
				<button class="btn btn-success">Сохранить</button>

			
		
			</div>
		</form>
			
		
		</div>
	</div>
</div>


@endsection