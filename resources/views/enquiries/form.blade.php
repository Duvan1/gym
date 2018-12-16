<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			{!! Form::label('name','Nombre',['class'=>'control-label']) !!}
			{!! Form::text('name',null,['class'=>'form-control', 'id' => 'name']) !!}		
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('contact','Contacto') !!}
			{!! Form::text('contact',null,['class'=>'form-control', 'id' => 'contact']) !!}
		</div>								
	</div>	

	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('email','Email') !!}
			{!! Form::text('email',null,['class'=>'form-control', 'id' => 'email']) !!}		
		</div>
	</div>							
</div>


<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('DOB','Fecha de nacimiento') !!}
			{!! Form::text('DOB',null,['class'=>'form-control datepicker-default', 'id' => 'DOB']) !!}		
		</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('gender','Genero') !!}
			{!! Form::select('gender',array('m' => 'Masculino', 'f' => 'Femenino'),null,['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'gender']) !!}											
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('occupation','Ocupacion') !!}
{!! Form::select('occupation',array('0' => 'Estudiante', '1' => 'Ama de casa','2' => 'Trabajador independiente','3' => 'Profesional','4' => 'Freelancer','5' => 'Otros'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'Ocupación']) !!}											
		</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('start_by','Inicia el') !!}
			{!! Form::text('start_by',null,['class'=>'form-control datepicker-default', 'id' => 'start_by']) !!}											
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<?php $services = App\Service::lists('name', 'id'); ?>
			{!! Form::label('interested_in','Interesado en') !!}
			{!! Form::select('interested_in[]',$services,1,['class'=>'form-control selectpicker show-tick show-menu-arrow','multiple' => 'multiple','id' => 'interested_in']) !!}		
		</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('aim','¿Qué pan deseas seguir?',['class'=>'control-label']) !!}
			{!! Form::select('aim',array('0' => 'Fitness', '1' => 'Networking', '2' => 'Body Building', '3' => 'Fatloss', '4' => 'Weightgain', '5' => 'Others'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'aim']) !!}		
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-6">
	<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			{!! Form::label('source','¿Cómo nos conoció?',['class'=>'control-label']) !!}
			{!! Form::select('source',array('0' => 'Promoción', '1' => 'Boca a boca', '2' => 'Otros'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'source']) !!}
		</div>	
	</div>	
	<div class="col-sm-12">
		<div class="form-group">
			{!! Form::label('pin_code','Pin Code',['class'=>'control-label']) !!}
			{!! Form::text('pin_code',null,['class'=>'form-control', 'id' => 'pin_code']) !!}		
		</div>
	</div>						
	</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('address','Dirección') !!}
			{!! Form::textarea('address',null,['class'=>'form-control', 'id' => 'address', 'rows' => 5]) !!}		
		</div>
	</div>								
</div>
