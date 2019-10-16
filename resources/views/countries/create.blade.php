@extends('admin')
@section('content')

<div class="container">
	<h3>Добавить страну</h3>
	<div class="row">
		<div class="col-md-12">
			<!-- //{!! Form::open(['route' => 'tours.store']) !!} -->
		<form action="{{ route('countries.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" class="form-control" name="name_country" placeholder="Название">
				<br>
				</div>
				<button class="btn btn-success">Сохранить</button>
			</div>
		</form>
			<!--//{!! Form::close() !!}-->
		</div>
	</div>
</div>


@endsection