@extends('layout/plantilla')
@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Horarios</h2>
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="{{url('/horarios/create')}}" class="btn btn-secondary btn-round">Crear Horarios</a>
			</div>
		wss</div>
	</div>
</div>

<div class="page-inner mt--5">
	<div class="col mt--2">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-body"> 
 

 
  <table class="table table-striped table-bordered table-hover">
	<thead class="bg-primary text-white">
        <th>Horario</th> 
        <th>Codigo</th>
        <th>Instructor</th>
        <th>Preferencias</th> 
        <th colspan="2">Acciones</th>
 </tr>
    </thead>
         <tbody> 
         @foreach ($horarios as $horario) 
         <tr>
         <td>{{ $horario->id }}</td>
        <td>{{ $horario->horainicio }}</td>
        <td>{{ $horario->horafin}}</td>
         <td>{{ $horario->Idperfiles }}</td>

      
        
         <td> {!! Form::open(['method' => 'DELETE', 'route'=>['horarios.destroy', $horario->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} {!! Form::close() !!} </td> 
             <td><a href="{{ route('horarios.edit', $horario->id) }}" class="btn btn-warning">Editar</a></td>
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