@extends('admin')
@section('content')

<div class="container">
	<h3>Создать тип</h3>
	<div class="row">
		<div class="col-md-12">
			<!-- //{!! Form::open(['route' => 'tours.store']) !!} -->
		<form action="{{ route('types.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Название">
				<br>
				
				<button class="btn btn-success">Сохранить</button>

			
		
			</div>
		</form>
			
		
		</div>
	</div>
</div>


@endsection