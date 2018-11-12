<?php use Carbon\Carbon; ?>

<!-- Hidden Fields -->
@if(Request::is('members/create'))
{!! Form::hidden('invoiceCounter',$invoiceCounter) !!}
{!! Form::hidden('memberCounter',$memberCounter) !!}
@endif

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('member_code','Codigo') !!}
			{!! Form::text('member_code',null,['class'=>'form-control', 'id' => 'member_code']) !!}		
		</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('name','Nombre',['class'=>'control-label']) !!}
			{!! Form::text('name',null,['class'=>'form-control', 'id' => 'name']) !!}		
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
			{!! Form::label('gender','Género') !!}
			{!! Form::select('gender',array('m' => 'Masculino', 'f' => 'Femenino'),null,['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'gender']) !!}
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
			{!! Form::label('emergency_contact','Contacto de emergency ') !!}
			{!! Form::text('emergency_contact',null,['class'=>'form-control', 'id' => 'emergency_contact']) !!}											
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('health_issues','Problemas de salud') !!}
			{!! Form::text('health_issues',null,['class'=>'form-control', 'id' => 'health_issues']) !!}
		</div>								
	</div>								
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('proof_name','Nombre de prueba') !!}
			{!! Form::text('proof_name',null,['class'=>'form-control', 'id' => 'proof_name']) !!}		
		</div>
	</div>

	@if(isset($member))
	<?php
	$media = $member->getMedia('proof');
	$image = ($media->isEmpty() ? 'https://placeholdit.imgix.net/~text?txtsize=18&txt=NA&w=70&h=70' : url($media[0]->getUrl('form')));
	?>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label('proof_photo','Proof photo') !!}
			{!! Form::file('proof_photo',['class'=>'form-control', 'id' => 'proof_photo']) !!}	
		</div>								
	</div>
	<div class="col-sm-2">
		<img alt="proof Pic" class="pull-right" src="{{ $image }}"/>
	</div>
	@else
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('proof_photo','Proof photo') !!}
			{!! Form::file('proof_photo',['class'=>'form-control', 'id' => 'proof_photo']) !!}	
		</div>								
	</div>
	@endif								
</div>

<div class="row">
	@if(isset($member))
	<?php
	$media = $member->getMedia('profile');
	$image = ($media->isEmpty() ? 'https://placeholdit.imgix.net/~text?txtsize=18&txt=NA&w=70&h=70' : url($media[0]->getUrl('form')));
	?>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label('photo','Photo') !!}
			{!! Form::file('photo',['class'=>'form-control', 'id' => 'photo']) !!}	
		</div>								
	</div>
	<div class="col-sm-2">
		<img alt="profile Pic" class="pull-right" src="{{ $image }}"/>
	</div>
	@else
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('photo','Photo') !!}
			{!! Form::file('photo',['class'=>'form-control', 'id' => 'photo']) !!}	
		</div>								
	</div>
	@endif

	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('status','Estado') !!}
			<!--0 for inactive , 1 for active-->
			{!! Form::select('status',array('1' => 'Active', '0' => 'InActive'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'status']) !!}
		</div>								
	</div>								
</div>



<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('aim','¿Qué plan deseas?',['class'=>'control-label']) !!}
			{!! Form::select('aim',array('0' => 'Fitness', '1' => 'Networking', '2' => 'Body Building', '3' => 'Fatloss', '4' => 'Weightgain', '5' => 'Others'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'aim']) !!}		
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('source','¿Cómo nos conociste?',['class'=>'control-label']) !!}
			{!! Form::select('source',array('0' => 'Promoción', '1' => 'Boca a boca', '2' => 'Otro'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'source']) !!}		
		</div>
	</div>
</div>

<div class="row">	
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					{!! Form::label('occupation','Ocupación') !!}
					{!! Form::select('occupation',array('0' => 'Estudiante', '1' => 'Ama de casa','2' => 'Trabajador por cuenta propia','3' => 'Profesional','4' => 'Freelancer','5' => 'Otros'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'occupation']) !!}											
				</div>
			</div>


			<div class="col-sm-12">
				<div class="form-group">
					{!! Form::label('pin_code','Pin Code',['class'=>'control-label']) !!}
					{!! Form::text('pin_code',$memberCounter,['class'=>'form-control', 'id' => 'pin_code', 'readonly' => 'true']) !!}		
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

<div class="row">
	<div class="col-md-12">
		<h4>Medidas Corporales</h4>
	</div>
</div>
<br>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('height','Altura (cm)') !!}
			{!! Form::text('height',null,['class'=>'form-control', 'id' => 'height']) !!}									
		</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label('weight','Peso(kg)',['class'=>'control-label']) !!}
			{!! Form::text('weight',null,['class'=>'form-control', 'id' => 'weight']) !!}		
		</div>
	</div>
</div>
<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('shoulder_measurements','Hombros (cm)') !!}
					{!! Form::text('shoulder_measurements',null,['class'=>'form-control', 'id' => 'shoulder_measurements']) !!}									
				</div>
			</div>


			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('chest_measurements','Pecho (cm)',['class'=>'control-label']) !!}
					{!! Form::text('chest_measurements',null,['class'=>'form-control', 'id' => 'chest_measurements']) !!}		
				</div>
			</div>
</div>
<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('arm_measurements','Brazos (cm)') !!}
					{!! Form::text('arm_measurements',null,['class'=>'form-control', 'id' => 'arm_measurements']) !!}									
				</div>
			</div>


			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('forearm_measurements','Antebrazos (cm)',['class'=>'control-label']) !!}
					{!! Form::text('forearm_measurements',null,['class'=>'form-control', 'id' => 'forearm_measurements']) !!}		
				</div>
			</div>
</div>
<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('hip_measurements','Caderas (cm)') !!}
					{!! Form::text('hip_measurements',null,['class'=>'form-control', 'id' => 'hip_measurements']) !!}									
				</div>
			</div>


			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('waist_measurements','Cintura (cm)',['class'=>'control-label']) !!}
					{!! Form::text('waist_measurements',null,['class'=>'form-control', 'id' => 'waist_measurements']) !!}		
				</div>
			</div>
</div>
<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('thigt_measurements','Muslos (cm)') !!}
					{!! Form::text('thigt_measurements',null,['class'=>'form-control', 'id' => 'thigt_measurements']) !!}									
				</div>
			</div>


			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('calf_measurements','Pantorrillas (cm)',['class'=>'control-label']) !!}
					{!! Form::text('calf_measurements',null,['class'=>'form-control', 'id' => 'calf_measurements']) !!}		
				</div>
			</div>
</div>
