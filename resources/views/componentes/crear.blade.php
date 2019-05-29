@extends('layout.plantilla')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Crear Componente</h2>
               </div>
               <div class="ml-md-auto py-2 py-md-0">
				<a href="{{url('/componentes')}}" class="btn btn-secondary btn-round">Atras</a>

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
    {!! Form::open(['url' => 'componentes', 'files' => true]) !!}
    <div class="form-group">
         {!! Form::label('Nombre del componente', 'Nombre del componente:') !!}
         {!! Form::text('Nombrecomp',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('tipo de componente', 'tipo de componente:') !!}
         {!! Form::text('Idtipocomp',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('estado del componente', 'estado del componente:') !!}
        {!! Form::text('Idestado',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('otra cosa', 'Rol:') !!}
         {!! Form::text('Idatrixtipo',null,['class' => 'form-control', 'required' => 'required']) !!}
   
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