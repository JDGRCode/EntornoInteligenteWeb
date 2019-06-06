@extends('layout/plantilla')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Perfil</h2>
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="{{url('/perfil/create')}}" class="btn btn-secondary btn-round">Crear Perfil</a>

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
			<th>ID COMPONENTE</th>
			<th>ID ESTADO</th>
			<th>ID USUARIO</th>
			<th colspan="2">Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($perfil as $perfil)

		<tr>
			<td>{{$perfil->componentes_id}}</td>
			<td>{{$perfil->estados_id}}</td>
			<td>{{$perfil->usuario_id}}</td>
			<td><a href="{{ route('perfil.edit', $perfil->id) }}" class="btn btn-warning">Editar</a></td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route'=>['perfil.destroy', $perfil->id]]) !!}
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