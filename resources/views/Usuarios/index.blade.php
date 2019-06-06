@extends('layout/plantilla')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Usuarios</h2>
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="{{url('/usuarios/create')}}" class="btn btn-secondary btn-round">Crear usuarios</a>

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
			<th>Nombre </th>
			<th>Apellido</th>
			<th>Telefono</th>
			<th>Rol</th>
			<th colspan="2">Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($usuarios as $usuario)

		<tr>
			<td>{{$usuario->NomUsuario}}</td>
			<td>{{$usuario->ApeUsuario}}</td>
			<td>{{$usuario->Telefono}}</td>
			<td>{{$usuario->IdRol}}</td>
			<td><a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar</a></td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route'=>['usuarios.destroy', $usuario->id]]) !!}
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