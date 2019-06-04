@extends('layout.plantilla')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Editar Horario</h2>
               </div>
               <div class="ml-md-auto py-2 py-md-0">
				<a href="{{url('/horarios')}}" class="btn btn-secondary btn-round">Atras</a>

			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="col mt--2">
		<div class="col-md-6 mx-auto">
			<div class="card full-height">
				<div class="card-body">
    <hr>
 <div class="row">
  @if (count($errors) > 0) 
  <div class="alert alert-danger"> 
 <ul> 
 @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
   @endforeach 
   </ul> 
   </div>
    @endif {!! Form::model($horarios, ['method' => 'PATCH', 'route' => ['horarios.update', $horarios->id], 'files' => true ]) !!}
    <div class="col-md-6"> 
    <div class="form-group"> 
    {!! Form::label('id', 'id:') !!} 
    {!! Form::text('titulo',null,['class' => 'form-control', 'required' => 'required','rows'=>'20', 'style'=>'resize:nome;text-align:justify;']) !!}
 </div> 
 <div class="row"> 
    <div class="col-md-8"> 
    <div class="form-group"> 
    {!! Form::label('fechainicio', 'inicio Fecha:') !!} 
    {!! Form::date('fecha',null,['class' => 'form-control', 'required' => 'required']) !!} 
    </div> 
 </div>
 </div>
 <div class="row"> 
  <div class="col-md-6">
   <div class="form-group"> 
   {!! Form::label('fechafin', 'fin fecha:') !!} 
   {!! Form::date('genero',null,['class'=>'form-control','rows'=>'16', 'style'=>'resize:nome;text-align:justify;']) !!}
    </div> 
 </div>  
</div class="col-md-2">
<div class="form-group">
         {!! Form::label('horainicio', 'inicio Hora:') !!}
        {!! Form::time('hora',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('horafin', 'fin Hora:') !!}
        {!! Form::time('hora',null,['class'=>'form-control','rows'=>'16', 'style'=>'resize:nome;text-align:justify;']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('diasemana', 'dia de la semana:') !!} 
    {!! Form::text('titulo',null,['class' => 'form-control', 'required' => 'required','rows'=>'16', 'style'=>'resize:nome;text-align:justify;']) !!}
 </div> 
    <div class="row"> 
    <div class="form-group">
         {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    </div>
     
    {!! Form::close() !!} 
    </div>
    </div>
 @stop
