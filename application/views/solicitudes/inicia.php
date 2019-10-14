<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body" style="background-image: url(<?php echo base_url(); ?>/public/assets/imagenes/formulario1.jpg); overflow: hidden;">

	<div class="m-grid__item m-grid__item--fluid m-wrapper">

		<div class="m-content">
			<div class="row">
				<div class="col-md-4">

					<!--begin::Portlet-->
					<div class="m-portlet m-portlet--brand m-portlet--head-solid-bg m-portlet--bordered">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon m--hide">
										<i class="la la-gear"></i>
									</span>
									<h3 class="m-portlet__head-text">
										CALCULO DE CUOTA
									</h3>
								</div>
							</div>
						</div>

						<div class="m-portlet__body">
							<table class="table table-striped m-table">
								<tbody>
									<tr>
										<th scope="row">Ingresos liquidos mensuales</th>
										<td><?php echo $datos_credito['ingreso_mensual']; ?></td>
									</tr>
									<tr>
										<th scope="row">Ingresos liquidos mensuales conyugue</th>
										<td><?php echo $datos_credito['ingreso_conyugue']; ?></td>
									</tr>
									<tr style="display: none;" id="ayuda_pb">
										<th scope="row">Ingresos liquidos mensuales papa</th>
										<td id="monto_pb"></td>
									</tr>
									<tr>
										<th scope="row">Cuota Mensual</th>
										<td><?php echo $cuota['cuota_total']; ?></td>
									</tr>
									<tr>
										<th scope="row">Tasa de interes</th>
										<td>5.5%</td>
									</tr>
									<tr>
										<th scope="row">Plazo</th>
										<td>25 a&nacute;os</td>
									</tr>
								</tbody>
							</table>

						</div>

						<?php // echo vdebug($cuota, false, false, true); ?>

						<!--begin::Form-->
						<!-- <form class="m-form m-form--fit m-form--label-align-right" action="/"> -->

									<!--begin::Preview-->
									<div class="m-demo">

										<div class="m-portlet__body">
											Listado Condominios
										<table class="table m-table m-table--head-bg-warning">
										<thead>
											<tr>
												<th>#</th>
												<th>Descripcion</th>
												<th>Ciudad</th>
												<th>Valor Inmueble</th>
												<th>Cuota Mensual</th>
												<th>Sueldo ideal</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										<?php $ingreso_total_solicitante = $datos_credito['ingreso_mensual']+$datos_credito['ingreso_conyugue'] ?>
										<?php foreach ($condominios as $c): ?>
											<tr>
												<th scope="row"><?php echo $c['id'] ?></th>
												<td><?php echo $c['descripcion'] ?></td>
												<td><?php echo $c['ciudad'] ?></td>
												<td><?php echo $c['valor'] ?></td>
												<td><?php echo $c['cuota_mensual'] ?></td>
												<td><?php echo $c['sueldo_prom'] ?></td>
												<td>
													<?php if ($c['sueldo_prom'] <= $ingreso_total_solicitante): ?>
														<a href="#" class="btn btn-success m-btn m-btn--icon btn-sm m-btn--icon-only">
															<i class="fa fa-check"></i>
														</a>
													<?php else: ?>
														<a href="#" class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only" onclick="muestra_papab(<?php echo $c['id'] ?>, '<?php echo $c['descripcion'] ?>')">
															<i class="fa fa-ban"></i>
														</a>
													<?php endif; ?>
												</td>
											</tr>
										<?php endforeach; ?>
											
										</tbody>
									</table>
								</div>
									</div>

									<!--end::Preview-->
							
							<!-- <div class="m-portlet__foot m-portlet__foot--fit" >
								<center>
								<div class="m-form__actions">
									<button type="submit" class="btn m-btn--pill    btn-accent">Siguiente</button>
									<button type="button" onclick="agregarform()" class="btn m-btn--pill    btn-success">Agregar Conyugue</button>
								</div>
								</center>
							</div> -->
						<!-- </form> -->

						<!--end::Form-->
					</div>

					<!--end::Portlet-->
				</div>

				<div class="col-md-4 item" id="bloque_1" style="display: block;">
					<a href="#" class="btn btn-block btn-success" id='titulo_vivienda'></a>
					<!--begin::Portlet-->
					<div class="m-portlet m-portlet--tab">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon m--hide">
										<i class="la la-gear"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Registro Ingresos del papa
									</h3>
								</div>
							</div>
						</div>

						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">Carnet Identidad:</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="ci_c" id="ci2" required>
								</div>
								<div class="col-lg-8">
									<label class="">Nombre</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" value="Juan Carlos Perez Zuaso" name="ci_c" id="ci2" readonly>
								</div>
							</div>

							<!--begin::Section-->
							<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_5" role="tablist">

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--danger">
									<div class="m-accordion__item-head collapsed" srole="tab" id="m_accordion_5_item_1_head" data-toggle="collapse" href="#m_accordion_5_item_1_body" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Independientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_1_body" role="tabpanel" aria-labelledby="m_accordion_5_item_1_head" data-parent="#m_accordion_5" style="">
										<div class="m-accordion__item-content">

										
										<div class="form-group m-form__group row">
											<div class="col-lg-4">
												<label class="">Tipo:</label>
												<select class="form-control m-input" id="cb_ipb">
													<option value="Comercio">Comercio</option>
													<option value="Servicio">Servicio</option>
													<option value="Productivo">Productivo</option>
												</select>
											</div>
											<div class="col-lg-4">
												<label class="">Ingreso Bruto:</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_impb">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

											<div class="col-lg-4">
												<label class="">Gastos:</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_igpb">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

										</div>

									<div class="m-portlet__foot m-portlet__foot--fit">
										<center>
											<div class="m-form__actions">
												<button type="submit" class="btn m-btn--pill btn-accent" onclick=calcula_cuota();>Calcular</button>
												<button type="button" class="btn m-btn--pill btn-success" onclick="muestra2();">Pedir Ayuda</button>
											</div>
										</center>
									</div>
											
										</div>
									</div>
								</div>

								<!--end::Item-->

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--brand">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_5_item_3_head" data-toggle="collapse" href="#m_accordion_5_item_3_body" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa  flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Dependientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_3_body" role="tabpanel" aria-labelledby="m_accordion_5_item_3_head" data-parent="#m_accordion_5">
										<div class="m-accordion__item-content">
											<div class="form-group m-form__group row">

												<div class="col-lg-12">
													<label class="">Monto:</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_dmbp">
														<span class="m-input-icon__icon m-input-icon__icon--right"></span>
													</div>
												</div>
											</div>
											<div class="m-portlet__foot m-portlet__foot--fit">
												<center>
													<div class="m-form__actions">
														<button type="submit" class="btn m-btn--pill btn-accent">Calcular</button>
														<button type="button" class="btn m-btn--pill btn-success" onclick="muestra2();">Pedir Ayuda</button>
													</div>
												</center>
											</div>
										</div>
									</div>
								</div>

								<!--end::Item-->
							</div>

							<!--end::Section-->
						</div>

						<!--begin::Form-->

						<!--end::Form-->
					</div>

					<div style="display: block;" id="bloque_2">
					<a href="#" class="btn btn-block btn-success" id='titulo_vivienda'></a>
					<!--begin::Portlet-->
					<div class="m-portlet m-portlet--tab">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon m--hide">
										<i class="la la-gear"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Registro Ingresos del mama
									</h3>
								</div>
							</div>
						</div>

						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">Carnet Identidad:</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="ci_c" id="ci2" required>
								</div>
								<div class="col-lg-8">
									<label class="">Nombre</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" value="Juan Carlos Perez Zuaso" name="ci_c" id="ci2" readonly>
								</div>
							</div>

							<!--begin::Section-->
							<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_5" role="tablist">

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--danger">
									<div class="m-accordion__item-head collapsed" srole="tab" id="m_accordion_5_item_1_head" data-toggle="collapse" href="#m_accordion_5_item_1_body" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Independientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_1_body" role="tabpanel" aria-labelledby="m_accordion_5_item_1_head" data-parent="#m_accordion_5" style="">
										<div class="m-accordion__item-content">

										
										<div class="form-group m-form__group row">
											<div class="col-lg-4">
												<label class="">Tipo:</label>
												<select class="form-control m-input" id="cb_ipb">
													<option value="Comercio">Comercio</option>
													<option value="Servicio">Servicio</option>
													<option value="Productivo">Productivo</option>
												</select>
											</div>
											<div class="col-lg-4">
												<label class="">Ingreso Bruto:</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_impb">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

											<div class="col-lg-4">
												<label class="">Gastos:</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_igpb">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

										</div>

									<div class="m-portlet__foot m-portlet__foot--fit">
										<center>
											<div class="m-form__actions">
												<button type="submit" class="btn m-btn--pill btn-accent" onclick=calcula_cuota();>Calcular</button>
												<button type="button" class="btn m-btn--pill btn-success" onclick="muestra2()">Pedir Ayuda</button>
											</div>
										</center>
									</div>
											
										</div>
									</div>
								</div>

								<!--end::Item-->

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--brand">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_5_item_3_head" data-toggle="collapse" href="#m_accordion_5_item_3_body" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa  flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Dependientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_3_body" role="tabpanel" aria-labelledby="m_accordion_5_item_3_head" data-parent="#m_accordion_5">
										<div class="m-accordion__item-content">
											<div class="form-group m-form__group row">

												<div class="col-lg-12">
													<label class="">Monto:</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_dmbp">
														<span class="m-input-icon__icon m-input-icon__icon--right"></span>
													</div>
												</div>
											</div>
											<div class="m-portlet__foot m-portlet__foot--fit">
												<center>
													<div class="m-form__actions">
														<button type="submit" class="btn m-btn--pill btn-accent">Calcular</button>
														<button type="button" class="btn m-btn--pill btn-success" onclick="muestra2();">Pedir Ayuda</button>
													</div>
												</center>
											</div>
										</div>
									</div>
								</div>

								<!--end::Item-->
							</div>

							<!--end::Section-->
						</div>

						<!--begin::Form-->

						<!--end::Form-->
					</div>

					</div>

				
		
				</div>

				<div class="col-md-4 item" id="bloque_1" style="display: block;">
					<a href="#" class="btn btn-block btn-success" id='titulo_vivienda'></a>
					<!--begin::Portlet-->
					<div class="m-portlet m-portlet--tab">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon m--hide">
										<i class="la la-gear"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Registro Ingresos del papa
									</h3>
								</div>
							</div>
						</div>

						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">Carnet Identidad:</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="ci_c" id="ci2" required>
								</div>
								<div class="col-lg-8">
									<label class="">Nombre</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" value="Juan Carlos Perez Zuaso" name="ci_c" id="ci2" readonly>
								</div>
							</div>

							<!--begin::Section-->
							<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_5" role="tablist">

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--danger">
									<div class="m-accordion__item-head collapsed" srole="tab" id="m_accordion_5_item_1_head" data-toggle="collapse" href="#m_accordion_5_item_1_body" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Independientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_1_body" role="tabpanel" aria-labelledby="m_accordion_5_item_1_head" data-parent="#m_accordion_5" style="">
										<div class="m-accordion__item-content">

										
										<div class="form-group m-form__group row">
											<div class="col-lg-4">
												<label class="">Tipo:</label>
												<select class="form-control m-input" id="cb_ipb">
													<option value="Comercio">Comercio</option>
													<option value="Servicio">Servicio</option>
													<option value="Productivo">Productivo</option>
												</select>
											</div>
											<div class="col-lg-4">
												<label class="">Ingreso Bruto:</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_impb">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

											<div class="col-lg-4">
												<label class="">Gastos:</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_igpb">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

										</div>

									<div class="m-portlet__foot m-portlet__foot--fit">
										<center>
											<div class="m-form__actions">
												<button type="submit" class="btn m-btn--pill btn-accent" onclick=calcula_cuota();>Calcular</button>
												<button type="button" class="btn m-btn--pill btn-success" onclick="muestra2();">Pedir Ayuda</button>
											</div>
										</center>
									</div>
											
										</div>
									</div>
								</div>

								<!--end::Item-->

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--brand">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_5_item_3_head" data-toggle="collapse" href="#m_accordion_5_item_3_body" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa  flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Dependientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_3_body" role="tabpanel" aria-labelledby="m_accordion_5_item_3_head" data-parent="#m_accordion_5">
										<div class="m-accordion__item-content">
											<div class="form-group m-form__group row">

												<div class="col-lg-12">
													<label class="">Monto:</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_dmbp">
														<span class="m-input-icon__icon m-input-icon__icon--right"></span>
													</div>
												</div>
											</div>
											<div class="m-portlet__foot m-portlet__foot--fit">
												<center>
													<div class="m-form__actions">
														<button type="submit" class="btn m-btn--pill btn-accent">Calcular</button>
														<button type="button" class="btn m-btn--pill btn-success" onclick="muestra2();">Pedir Ayuda</button>
													</div>
												</center>
											</div>
										</div>
									</div>
								</div>

								<!--end::Item-->
							</div>

							<!--end::Section-->
						</div>

						<!--begin::Form-->

						<!--end::Form-->
					</div>

					<div style="display: block;" id="bloque_2">
					<a href="#" class="btn btn-block btn-success" id='titulo_vivienda'></a>
					<!--begin::Portlet-->
					<div class="m-portlet m-portlet--tab">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon m--hide">
										<i class="la la-gear"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Registro Ingresos del mama
									</h3>
								</div>
							</div>
						</div>

						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">Carnet Identidad:</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="ci_c" id="ci2" required>
								</div>
								<div class="col-lg-8">
									<label class="">Nombre</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" value="Juan Carlos Perez Zuaso" name="ci_c" id="ci2" readonly>
								</div>
							</div>

							<!--begin::Section-->
							<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_5" role="tablist">

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--danger">
									<div class="m-accordion__item-head collapsed" srole="tab" id="m_accordion_5_item_1_head" data-toggle="collapse" href="#m_accordion_5_item_1_body" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Independientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_1_body" role="tabpanel" aria-labelledby="m_accordion_5_item_1_head" data-parent="#m_accordion_5" style="">
										<div class="m-accordion__item-content">

										
										<div class="form-group m-form__group row">
											<div class="col-lg-4">
												<label class="">Tipo:</label>
												<select class="form-control m-input" id="cb_ipb">
													<option value="Comercio">Comercio</option>
													<option value="Servicio">Servicio</option>
													<option value="Productivo">Productivo</option>
												</select>
											</div>
											<div class="col-lg-4">
												<label class="">Ingreso Bruto:</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_impb">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

											<div class="col-lg-4">
												<label class="">Gastos:</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_igpb">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

										</div>

									<div class="m-portlet__foot m-portlet__foot--fit">
										<center>
											<div class="m-form__actions">
												<button type="submit" class="btn m-btn--pill btn-accent" onclick=calcula_cuota();>Calcular</button>
												<button type="button" class="btn m-btn--pill btn-success" onclick="muestra2()">Pedir Ayuda</button>
											</div>
										</center>
									</div>
											
										</div>
									</div>
								</div>

								<!--end::Item-->

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--brand">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_5_item_3_head" data-toggle="collapse" href="#m_accordion_5_item_3_body" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa  flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Dependientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_3_body" role="tabpanel" aria-labelledby="m_accordion_5_item_3_head" data-parent="#m_accordion_5">
										<div class="m-accordion__item-content">
											<div class="form-group m-form__group row">

												<div class="col-lg-12">
													<label class="">Monto:</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_dmbp">
														<span class="m-input-icon__icon m-input-icon__icon--right"></span>
													</div>
												</div>
											</div>
											<div class="m-portlet__foot m-portlet__foot--fit">
												<center>
													<div class="m-form__actions">
														<button type="submit" class="btn m-btn--pill btn-accent">Calcular</button>
														<button type="button" class="btn m-btn--pill btn-success" onclick="muestra2();">Pedir Ayuda</button>
													</div>
												</center>
											</div>
										</div>
									</div>
								</div>

								<!--end::Item-->
							</div>

							<!--end::Section-->
						</div>

						<!--begin::Form-->

						<!--end::Form-->
					</div>

					</div>

				
		
				</div>
			</div>
		</div>
	</div>
</div>
			<!-- end:: Body -->
<script type="text/javascript">

    $("#ci1").focusout(function(){
        var ci = $("#ci1").val();
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            url: '<?php echo base_url(); ?>persona/ajax_verifica/',
            type: 'GET',
            dataType: 'json',
            data: {csrfName: csrfHash, param1: ci},
            // data: {param1: cod_catastral},
            success:function(data, textStatus, jqXHR) {
                //alert("Se envio bien");
                // csrfName = data.csrfName;
                // csrfHash = data.csrfHash;
                // alert(data.message);
              if (data.estado == 'segip') {
                        $("#msg_error_catastral").hide();
                    $("#msg_sucess_catastral").show();
                    $("#msg_alerta_catastral").show();
                        $("#ci").val(data.ci);
                    $("#msg_sucess_catastral").html('Esta registrado en el SEGIP la persona con Cedula de Identidad Numero: '+data.ci);
                    $('#nombres').val(data.nombres);
                    $('#paterno').val(data.paterno);
                    $('#materno').val(data.materno);
                    $('#fecha').val(data.fec_nacimiento);
                    }else{
                    $("#msg_sucess_catastral").hide();
                     $("#msg_error_catastral").show();
                     $("#msg_alerta_catastral").hide();
                    $("#msg_error_catastral").html('La persona no existe ni en la base de datos ni en el segip: '+data.ci);
                    $('#nombres').val('');
                    $('#paterno').val('');
                    $('#materno').val('');
                    $("#nombres").prop("disabled", false);

                    $("#paterno").prop("disabled", false);

                    $("#materno").prop("disabled", false);
                }
            },
            error:function(jqXHR, textStatus, errorThrown) {
                // alert("error");
            }
        });
    });

   
</script>

<script type="text/javascript">

    $("#ci2").focusout(function(){
        var ci = $("#ci2").val();
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            url: '<?php echo base_url(); ?>persona/ajax_verifica/',
            type: 'GET',
            dataType: 'json',
            data: {csrfName: csrfHash, param1: ci},
            // data: {param1: cod_catastral},
            success:function(data, textStatus, jqXHR) {
                //alert("Se envio bien");
                // csrfName = data.csrfName;
                // csrfHash = data.csrfHash;
                // alert(data.message);
              if (data.estado == 'segip') {
                        $("#msg_error_catastral").hide();
                    $("#msg_sucess_catastral").show();
                    $("#msg_alerta_catastral").show();
                        $("#ci").val(data.ci);
                    $("#msg_sucess_catastral").html('Esta registrado en el SEGIP la persona con Cedula de Identidad Numero: '+data.ci);
                    $('#nombres_c').val(data.nombres);
                    $('#paterno_c').val(data.paterno);
                    $('#materno_c').val(data.materno);
                    $('#fecha_c').val(data.fec_nacimiento);
                    }else{
                    $("#msg_sucess_catastral").hide();
                     $("#msg_error_catastral").show();
                     $("#msg_alerta_catastral").hide();
                    $("#msg_error_catastral").html('La persona no existe ni en la base de datos ni en el segip: '+data.ci);
                    $('#nombres_c').val('');
                    $('#paterno_c').val('');
                    $('#materno_c').val('');
                    $("#nombres_c").prop("disabled", false);

                    $("#paterno_c").prop("disabled", false);

                    $("#materno_c").prop("disabled", false);
                }
            },
            error:function(jqXHR, textStatus, errorThrown) {
                // alert("error");
            }
        });
    });

   
</script>

<script type="text/javascript">
    function agregarform()
        {
              $('.item').hide('slow');
              $("#bloque_1").show('slow');
        }
	function muestra_papab(idCondominio, nombre) 
	{
		// console.log(idCondominio);
		$("#bloque_1").show('slow');
		$('#titulo_vivienda').html("<h4>CONDOMINIO: "+nombre+"</<h4>");
	}

	function muestra2()
	{
		$("#bloque_2").show('slow');
		// alert('entro');
	}

	function calcula_cuota(monto)
	{
		// $cuota_mensual = $monto_prestamo * (($porcentaje * Math.pow((1 + $porcentaje), $cuotas)) / (Math.pow((1 + $porcentaje), $cuotas) - 1));
		// monto_prestamo = 
		var cuota_mensual = 0;
		cuota_mensual = 208800 * ((0.0045 * Math.pow((1 + 0.0045), 300)) / (Math.pow((1 + 0.0045), 300) - 1));
		cuota_redondeado = Math.round(parseFloat(cuota_mensual)*100) / 100;
		porcentaje_ajuste = cuota_redondeado * 0.01;
		monto_ajustado = cuota_mensual + porcentaje_ajuste;
		cuota_ajustado_redondeado = Math.round(monto_ajustado*100)/100;

		// console.log(monto_ajustado_redondeado);
		// calcula_independientes();
		// $monto_redondeado = round($monto_ajustado, 2);

		seguro_incendio = monto * 0.00015;
		cuota_total = cuota_ajustado_redondeado + seguro_incendio;

		// $sueldo_ideal = round($cuota_total / 0.4, 2);

		// $resultados['cuota'] = $monto_redondeado;
		// $resultados['seguro'] = $seguro_incendio;
		// $resultados['cuota_total'] = $cuota_total;
		// $resultados['sueldo_ideal'] = $sueldo_ideal;

		// vdebug($sueldo_ideal, true, false, true);
		// return $resultados;
	}

    function muestra()
    {
    	alert('Si entro');
    }

    function calcula_independientes()
    {
    	var tipo_ipb = $('#cb_ipb').val();
    	var monto_impb = $('#txt_impb').val();
    	var gasto_igpb = $('#txt_igpb').val();

    	switch (tipo_ipb) {
    		case 'Comercio':
    			porcentaje = 0.25;
    			break;

			case 'Servicio':
    			porcentaje = 0.75;
    			break;

			case 'Productivo':
    			porcentaje = 0.45;
    			break;
    	}

    	porcentaje_monto = monto_impb*porcentaje;
    	monto_adicionable = porcentaje_monto - gasto_igpb; 
    	$('#ayuda_pb').show('slow');
    	// console.log(porcentaje_monto);
    	// console.log("monto "+monto_adicionable);
    	$("#monto_pb").html(monto_adicionable);
    }
</script>