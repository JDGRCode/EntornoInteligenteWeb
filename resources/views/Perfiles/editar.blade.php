@extends('layout.plantilla')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Editar perfil</h2>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
				<a href="{{url('/perfil')}}" class="btn btn-secondary btn-round">Atras</a>

			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="col mt--2">
		<div class="col-md-6 mx-auto">
			<div class="card full-height">
				<div class="card-body">
        {!! Form::model($perfil, ['method' => 'PATCH', 'route' => ['perfil.update', $perfil->id], 'files' => true ]) !!}
        <div class="form-group">
             {!! Form::label('ID del componente', 'ID del componente :') !!}
            {!! Form::text('componentes_id',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('ID del estado', 'ID del estado :') !!}
         {!! Form::text('estados_id',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('ID del usuario', 'ID del usuario :') !!}
         {!! Form::text('usuario_id',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}

</div>
		</div>
	</div>
</div>
@stop