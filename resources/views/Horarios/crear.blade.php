@extends('layout.plantilla')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Crear Usuarios</h2>
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
    <div>
    {!! Form::open(['url' => 'horarios', 'files' => true]) !!}
    <div class="form-group">
         {!! Form::label('id', 'id:') !!}
         {!! Form::text('Idhorarioxdia',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('fecha', 'Fecha:') !!}
         {!! Form::date('fecha',null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('hora', 'Hora:') !!}
        {!! Form::time('hora',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('Cargo', 'Cargo:') !!}
         {!! Form::text('tipodeCargo',null,['class' => 'form-control', 'required' => 'required']) !!}

     <div class="form-group">
         {!! Form::label('instructor', 'instructor:') !!}
         <select name="instructor" id="inputTipoId"class="form-control">
          <option value="instructor">Seleccione</option>
          @foreach ($horarios as $usuarios)
          <option>{{$usuarios->nomusuario}}</option>
          @endforeach
          </select>
      
      <div class="form-group">
          {!! Form::label('perfil', 'perfil:') !!}
         <select name="tipo" id="inputTipoId" class="form-control">
          <option value="perfil">Seleccione</option> 
          @foreach ($horarios as $perfil)
          <option>{{$perfil->id}}</option>
          @endforeach
          </select>
   
    <div class="form-group">
         {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    
    {!! Form::close() !!}
    </div>
    </div>
    </div>	
	</div>
</div>
</div>
</div>
</div>
</div>
    @stop