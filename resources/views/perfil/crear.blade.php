@extends('layout.plantilla')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Crear Perfil</h2>
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
    <div>
    {!! Form::open(['url' => 'perfil', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('Nombre del componentes', 'Nombre del componentes :') !!}
         {!! Form::text('componentes_id',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('estado del componentes', 'Nombre del componentes :') !!}
         {!! Form::text('estados_id',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('usuario del componentes', 'Nombre del componentes :') !!}
         {!! Form::text('usuarios_id',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
         {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>
			</div>
		</div>
	</div>
</div>
    @stop