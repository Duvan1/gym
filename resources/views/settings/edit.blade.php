@extends('app')

@section('content')

<div class="rightside bg-grey-100">
	<!-- BEGIN PAGE HEADING -->
	<div class="page-head bg-grey-100 padding-top-15 no-padding-bottom">
		@include('flash::message')
		<h1 class="page-title">Configuración</h1>
	</div>

	<div class="container-fluid">
		{!! Form::Open(['url' => 'settings/save','id'=>'settingsform','files'=>'true']) !!}
		<!-- General Settings -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel no-border">
					<div class="panel-title">
						<div class="panel-head font-size-15"><i class="fa fa-cogs"></i> General</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<!--Main row start-->
							<div class="col-sm-4">
								<div class="form-group">
									{!! Form::label('gym_name','Nombre del Gym') !!}
									{!! Form::text('gym_name',$settings['gym_name'],['class'=>'form-control', 'id' => 'gym_name']) !!}
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									{!! Form::label('financial_start','Inicio año financiero') !!}
									{!! Form::text('financial_start',$settings['financial_start'],['class'=>'form-control datepicker-default', 'id' => 'financial_start']) !!}
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="form-group">
									{!! Form::label('financial_end','Fin año financiero') !!}
									{!! Form::text('financial_end',$settings['financial_end'],['class'=>'form-control datepicker-default', 'id' => 'financial_end']) !!}
								</div>
							</div>

							
						</div>

						<div class="row">
							@if($settings['gym_logo'] != "")
							<div class="col-sm-4">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											{!! Form::label('gym_logo','Logo') !!}<br>
											<img alt="gym logo" src="{{url('/images/Invoice/'.'gym_logo'.'.jpg') }}"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											{!! Form::file('gym_logo',['class'=>'form-control', 'id' => 'gym_logo']) !!}
										</div>
									</div>
								</div>
							</div>
							@else
							<div class="col-sm-4">
								<div class="form-group">
									{!! Form::label('gym_logo','Gym Logo') !!}
									{!! Form::file('gym_logo',['class'=>'form-control', 'id' => 'gym_logo']) !!}
								</div>
							</div>
							@endif

							<div class="col-sm-8">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											{!! Form::label('gym_address_1','Gym dirección linea 1') !!}
											{!! Form::text('gym_address_1',$settings['gym_address_1'],['class'=>'form-control', 'id' => 'gym_address_1']) !!}
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											{!! Form::label('gym_address_2','Gym dirección Linea 2') !!}
											{!! Form::text('gym_address_2',$settings['gym_address_2'],['class'=>'form-control', 'id' => 'gym_address_2']) !!}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Invoice Settings -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel no-border">
					<div class="panel-title">
						<div class="panel-head font-size-15"><i class="fa fa-file"></i> Factura</div>
					</div>
					<div class="panel-body">
						<div class="row">				<!--Main row start-->
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											{!! Form::label('invoice_prefix','Prefijo de la factura') !!}
											{!! Form::text('invoice_prefix',$settings['invoice_prefix'],['class'=>'form-control', 'id' => 'invoice_prefix']) !!}
										</div>
									</div>

									<div class="col-sm-3">
										<div class="form-group">
											{!! Form::label('invoice_last_number','Ultimo numero de la factura') !!}
											{!! Form::text('invoice_last_number',$settings['invoice_last_number'],['class'=>'form-control', 'id' => 'invoice_last_number']) !!}
										</div>
									</div>

									<div class="col-sm-3">
										<div class="form-group">
											{!! Form::label('invoice_name_type','Nombre de la factura') !!}
											{!! Form::select('invoice_name_type',array('gym_logo' => 'Gym Logo', 'gym_name' => 'Gym Name'),$settings['invoice_name_type'],['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'invoice_name_type']) !!}
										</div>
									</div>

									<div class="col-sm-3">
										<div class="form-group">
											{!! Form::label('invoice_number_mode','Generar el numero de factura de forma') !!}
											{!! Form::select('invoice_number_mode',array('0' => 'Manual', '1' => 'Automatic'),$settings['invoice_number_mode'],['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'invoice_number_mode']) !!}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- member Settings -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel no-border">
					<div class="panel-title">
						<div class="panel-head font-size-15"><i class="fa fa-users"></i> Miembros</div>
					</div>
					
					<div class="panel-body">
						<div class="row"><!--Main row start-->
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											{!! Form::label('member_prefix','Prefijo') !!}
											{!! Form::text('member_prefix',$settings['member_prefix'],['class'=>'form-control', 'id' => 'member_prefix']) !!}
										</div>
									</div>

									<div class="col-sm-4">
										<div class="form-group">
											{!! Form::label('member_last_number','Ultimo numero') !!}
											{!! Form::text('member_last_number',$settings['member_last_number'],['class'=>'form-control', 'id' => 'member_last_number']) !!}
										</div>
									</div>

									<div class="col-sm-4">
										<div class="form-group">
											{!! Form::label('member_number_mode','Generar de forma') !!}
											{!! Form::select('member_number_mode',array('0' => 'Manual', '1' => 'Automatic'),$settings['member_number_mode'],['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'member_number_mode']) !!}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Charges Settings -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel no-border">
					<div class="panel-title">
						<div class="panel-head font-size-15"><i class="fa fa-dollar"></i> Cargos</div>
					</div>
					
					<div class="panel-body">
						<div class="row"><!--Main row start-->
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											{!! Form::label('admission_fee','Cuota de Admisión') !!}
											<div class="input-group">
												<div class="input-group-addon"><i class="fa fa-inr"></i></div>
												{!! Form::text('admission_fee',$settings['admission_fee'],['class'=>'form-control', 'id' => 'admission_fee']) !!}
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="form-group">
											{!! Form::label('taxes','Impuesto') !!}
											<div class="input-group">
												{!! Form::text('taxes',$settings['taxes'],['class'=>'form-control', 'id' => 'taxes']) !!}
												<div class="input-group-addon"><i class="fa fa-percent"></i></div>
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="form-group">
											{!! Form::label('discounts','Porcentaje de descuento disponible') !!}
											{!! Form::text('discounts',$settings['discounts'],['class'=>'form-control tokenfield', 'id' => 'discounts', 'placeholder' => 'Escribe el % de descuento y pulsa enter']) !!}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>





		<!-- Form Submission -->
		<div class="row">
			<div class="col-sm-2 pull-right">
				<div class="form-group">
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary pull-right']) !!}
				</div>
			</div>
		</div>
		{!! Form::Close() !!}
	</div>
</div>
@stop

@section('footer_scripts') 
<script src="{{ URL::asset('assets/js/setting.js') }}" type="text/javascript"></script>
@stop

@section('footer_script_init')
<script type="text/javascript">
	gymie.loadBsTokenInput();
</script>
@stop