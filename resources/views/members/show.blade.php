@extends('app')

@section('content')
<?php use Carbon\Carbon; ?>

<div class="rightside bg-grey-100">
	<div class="page-head bg-grey-100 padding-top-15 no-padding-bottom">
		@include('flash::message')
	</div>
	<div class="container-fluid">

		<div class="row"><!-- Main row -->
			<div class="col-md-12"><!-- Main Col -->
				<div class="panel no-border ">
					<div class="panel-title">
						<div class="panel-head font-size-20">Datos del miembro</div>
						<div class="pull-right no-margin">
							@permission(['manage-gymie','manage-members','edit-member'])
							<a class="btn btn-primary" href="{{ action('MembersController@edit',['id' => $member->id]) }}">
								<span>Editar</span>                                          
							</a>
							@endpermission

							@permission(['manage-gymie','manage-members','delete-member'])
							<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal-{{$member->id}}" data-id="{{$member->id}}">
								<span>Delete</span> 
							</button>
							@endpermission

							<!-- Modal -->
							<div id="deleteModal-{{$member->id}}" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Comfirmar</h4>
										</div>
										<div class="modal-body">
											<p>¿Seguro que quieres borrarlo?</p>
										</div>
										<div class="modal-footer">
											{!! Form::Open(['action'=>['MembersController@archive',$member->id],'method' => 'POST','id'=>'archiveform-'.$member->id]) !!}
											<input type="submit" class="btn btn-danger" value="Yes" id="btn-{{ $member->id }}"/>
											<button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
											{!! Form::Close() !!}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel-body">
						<div class="row">				<!--Main row start-->
							<div class="col-sm-8">
								<div class="row">				
									<div class="col-sm-4">
										<!-- Spacer -->
										<div class="row visible-md visible-lg">
											<div class="col-sm-4">
												<label>&nbsp;</label>
											</div>
										</div>
										<?php 
										$images = $member->getMedia('profile'); 
										$profileImage = ($images->isEmpty() ? 'https://placeholdit.imgix.net/~text?txtsize=22&txt=NA&w=200&h=180' : url($images[0]->getUrl()));
										?>
										<img class="AutoFitResponsive" src="{{ $profileImage }}"/>
									</div>


									<div class="col-sm-8">			<!-- Outer Row Start -->

										<!-- Spacer -->
										<div class="row visible-md visible-lg">
											<div class="col-sm-4">
												<label>&nbsp;</label>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-4">
												<label>Nombre</label>
											</div>
											<div class="col-sm-8">
												<span class="show-data">{{$member->name}}</span>
											</div>
										</div>

										<hr class="margin-top-0 margin-bottom-10">

										<div class="row">
											<div class="col-sm-4">
												<label>Codigo</label>
											</div>
											<div class="col-sm-8">
												<span class="show-data">{{$member->member_code}}</span>
											</div>
										</div>
										<hr class="margin-top-0 margin-bottom-10">

										<div class="row">
											<div class="col-sm-4">
												<label>Fecha de nacimiento</label>
											</div>
											<div class="col-sm-8">
												<span class="show-data">{{$member->DOB->format('Y-m-d')}}</span>
											</div>
										</div>
										<hr class="margin-top-0 margin-bottom-10">
										<div class="row">
											<div class="col-sm-4">
												<label>Género</label>
											</div>
											<div class="col-sm-8">
												<span class="show-data">{{Utilities::getGender($member->gender)}}</span>
											</div>
										</div>
										<hr class="margin-top-0 margin-bottom-10">

										<div class="row">
											<div class="col-sm-4">
												<label>Numero de contacto</label>
											</div>
											<div class="col-sm-8">
												<span class="show-data">{{$member->contact}}</span>
											</div>
										</div>

										<hr class="margin-top-0 margin-bottom-10">
										<div class="row">
											<div class="col-sm-4">
												<label>Email</label>
											</div>
											<div class="col-sm-8">
												<span class="show-data">{{$member->email}}</span>
											</div>
										</div>

										<hr class="margin-top-0 margin-bottom-10">
										<div class="row">
											<div class="col-sm-4">
												<label>Miembro desde</label>
											</div>
											<div class="col-sm-8">
												<span class="show-data">{{$member->created_at->toFormattedDateString()}}</span>
											</div>
										</div>
										<hr class="margin-top-0 margin-bottom-10">
										<div class="row">
											<div class="col-sm-4">
												<label>Contacto de emergencia</label>
											</div>
											<div class="col-sm-8">
												<span class="show-data">{{$member->emergency_contact}}</span>
											</div>
										</div>



									</div>  <!-- End of outer Row -->
								</div>
							</div>   <!-- End of Outer Column -->

							<div class="col-sm-4">
								<div class="row"><!-- Main row -->
									<div class="col-md-12"><!-- Main Col -->
										<div class="panel bg-grey-50">
											<div class="panel-title bg-transparent">
												<div class="panel-head"><strong><span class="fa-stack">
													<i class="fa fa-circle-thin fa-stack-2x"></i>
													<i class="fa fa-ellipsis-h fa-stack-1x"></i>
												</span> Datos adicionales</strong></div>
											</div>
											<div class="panel-body">

												<div class="row">
													<?php 
													$subscriptions = $member->subscriptions;
													$plansArray = array();
													foreach($subscriptions as $subscription)
													{
														$plansArray[] = $subscription->plan->plan_name;
													}
													?>
													<div class="col-sm-4">
														<label>Nombre del plan</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{implode(",",$plansArray)}}</span>
													</div>
												</div>
												<hr class="margin-top-0 margin-bottom-10">					

												<div class="row">
													<div class="col-sm-4">
														<label>Estado</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{Utilities::getStatusValue ($member->status)}}</span>
													</div>
												</div>
												<hr class="margin-top-0 margin-bottom-10">
												<div class="row">
													<div class="col-sm-4">
														<label>Objetivo</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{Utilities::getAim ($member->aim)}}</span>
													</div>
												</div>
												<hr class="margin-top-0 margin-bottom-10">
												<div class="row">
													<div class="col-sm-4">
														<label>Prueba de Identificación</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->proof_name}}</span>
													</div>
												</div>
												<hr class="margin-top-0 margin-bottom-10">
												<div class="row">
													<div class="col-sm-4">
														<label>Dirección</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->address}}</span>
													</div>
												</div>
												<hr class="margin-top-0 margin-bottom-10">
												<div class="row">
													<div class="col-sm-4">
														<label>Problemas de salud</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->health_issues}}</span>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>

							</div>

						</div>   <!-- End Of Main Row -->
						<!--######################### Medidas the member ################################# -->
						<div class="row">
							<div class="col-md-12"><!-- Main Col -->
								<div class="panel no-border ">
									<div class="panel-title">
										<div class="panel-head font-size-20">Medidas del miembro</div>
									</div>
									<div class="panel-body">
										<div class="row">	
											<div class="col-sm-2">
											</div>			<!--Main row start-->
											<div class="col-sm-4">			<!-- Outer Row Start -->

												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Altura</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->height}} Cm</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Hombros:</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->shoulder_measurements}} Cm</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Brazos:</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->arm_measurements}} Cm</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Cintura:</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->waist_measurements}} Cm</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Muslos:</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->thigt_measurements}} Cm</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
											</div>

											<div class="col-sm-4">			<!-- Outer Row Start -->

												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Peso</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->weight}} Kg</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Pecho:</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->chest_measurements}} Cm</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Antebrazos:</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->forearm_measurements}} Cm</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Caderas:</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->hip_measurements}} Cm</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
												<!-- Spacer -->
												<div class="row visible-md visible-lg">
													<div class="col-sm-4">
														<label>&nbsp;</label>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														<label>Pantorrillas:</label>
													</div>
													<div class="col-sm-8">
														<span class="show-data">{{$member->calf_measurements}} Cm</span>
													</div>
												</div>

												<hr class="margin-top-0 margin-bottom-10">
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--######################### Medidas the member ################################# -->
					</div>
				</div>
			</div>
		</div>

		<!--######################### Subscription history for the member ################################# -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel no-border ">
					<div class="panel-title">
						<div class="panel-head font-size-20">Historial de suscripciones para el miembro.</div>
					</div>
					<div class="panel-body">
						<table id="_payment" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Número de factura</th>
									<th>Nombre del plan</th>
									<th>Fecha de inicio</th>
									<th>Fecha de fin</th>
									<th>Estado</th>
									<th>Estado del pago</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($member->subscriptions->sortByDesc('created_at') as $subscription)  
								<tr>                                         
									<td><a href="{{ action('InvoicesController@show',['id' => $subscription->invoice_id]) }}">{{ $subscription->invoice->invoice_number }}</a></td>           
									<td>{{ $subscription->plan->plan_name }}</td>           
									<td>{{ $subscription->start_date->format('Y-m-d') }}</td>           
									<td>{{ $subscription->end_date->format('Y-m-d') }}</td>           
									<td><span class="{{ Utilities::getSubscriptionLabel ($subscription->status) }}">{{ Utilities::getSubscriptionStatus ($subscription->status) }}</span></td>           
									<td>{{ Utilities::getInvoiceStatus ($subscription->invoice->status) }}</td>           
								</tr>
								@endforeach
							</tbody>	
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@stop