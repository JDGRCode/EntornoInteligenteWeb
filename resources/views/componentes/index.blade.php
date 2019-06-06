
<html>
@extends('layout/plantilla')
@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">componentes</h2>
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="{{url('/componentes/create')}}" class="btn btn-secondary btn-round">Crear componentes</a>

			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="col mt--2">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-body">
						<table class="table table-striped table-bordered table-hover">
	<thead class="bg-primary text-white">
		<tr>
			<th>Nombre del componente</th>
			<th>tipo del componente</th>
			<th>estado del componente</th>
		</tr>
	</thead>
	<tbody>
	
		@foreach ($componentes as $componentes)
		<tr>
		
			<td>{{$componentes->nombrecomp}}</td>
			<td>{{$componentes->tipocomp_id}}</td>
			<td>{{$componentes->estado_id}}</td>
			
			</tr>
		
			
			@endforeach 
	
	


				
				{!! Form::close() !!}
				</td>
			</tr>	
		
	</tbody>
</table>
						</div>
			</div>
		</div>
	</div>
</div>

@endsection

</html>