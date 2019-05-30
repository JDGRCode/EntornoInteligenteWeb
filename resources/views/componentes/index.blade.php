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
		<th>ID </th>
			<th>Nombre del componente </th>
			<th>tipo de componente</th>
			<th>atributos del componente</th>
			
			<th colspan="2">Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($componentes as $componentes)

		<tr>
		<td>{{$componentes->Idcomp}}</td>
			<td>{{$componentes->Nombrecomp}}</td>
			<td>{{$componentes->Idtipocomp}}</td>
			<td>{{$componentes->Idatrixtipo}}</td>
			
			<td><a href="{{ route('componentes.edit', $componentes->Idcomp) }}" class="btn btn-warning">Editar</a></td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route'=>['componentes.destroy', $componentes->Idcomp]]) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
						</div>
			</div>
		</div>
	</div>
</div>

@endsection