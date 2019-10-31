<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body" style="background-image: url(<?php echo base_url(); ?>/public/assets/imagenes/formulario6.jpg); overflow: hidden;">

	<div class="m-grid__item m-grid__item--fluid m-wrapper">

		<div class="m-content">
			<div class="row">
				<div class="col-md-4">
					<?php echo form_open('Solicitudes/guarda', array('method'=>'POST', 'class' => 'm-form m-form--fit m-form--label-align-right', 'id' => 'form-1')); ?>
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
						<?php //vdebug($datos_credito, false, false, true) ?>
						<?php //campos ocultos para guardar en la base de datos ?>
							<input type="hidden" name="beneficiario_id" id="beneficiario_id" value="<?php echo $datos_credito['beneficiario_id']; ?>">
							<input type="hidden" name="condominio_id" id="condominio_id" value="<?php echo $datos_credito['condominio_id']; ?>">

							<!-- padre 1 -->
							<input type="hidden" name="padre_beneficiario_nombre_1" id="padre_beneficiario_nombre_1">
							<input type="hidden" name="padre_beneficiario_carnet_1" id="padre_beneficiario_carnet_1">
							<input type="hidden" name="tipo_1" id="tipo_1">
							<input type="hidden" name="combo_1" id="combo_1">
							<input type="hidden" name="ingreso_bruto_1" id="ingreso_bruto_1">
							<input type="hidden" name="gastos_1" id="gastos_1">
							<input type="hidden" name="monto_depedientes_1" id="monto_depedientes_1">
							<!-- fin padre 1 -->

							<!-- madre 2 -->
							<input type="hidden" name="madre_beneficiario_nombre_2" id="madre_beneficiario_nombre_2">
							<input type="hidden" name="madre_beneficiario_carnet_2" id="madre_beneficiario_carnet_2">
							<input type="hidden" name="tipo_2" id="tipo_2">
							<input type="hidden" name="combo_2" id="combo_2">
							<input type="hidden" name="ingreso_bruto_2" id="ingreso_bruto_2">
							<input type="hidden" name="gastos_2" id="gastos_2">
							<input type="hidden" name="monto_depedientes_2" id="monto_depedientes_2">
							<!-- fin madre 2 -->

							<!-- padre 3 -->
							<input type="hidden" name="padre_beneficiario_nombre_3" id="padre_beneficiario_nombre_3">
							<input type="hidden" name="padre_beneficiario_carnet_3" id="padre_beneficiario_carnet_3">
							<input type="hidden" name="tipo_3" id="tipo_3">
							<input type="hidden" name="combo_3" id="combo_3">
							<input type="hidden" name="ingreso_bruto_3" id="ingreso_bruto_3">
							<input type="hidden" name="gastos_3" id="gastos_3">
							<input type="hidden" name="monto_depedientes_3" id="monto_depedientes_3">
							<!-- fin padre 3 -->

							<!-- madre 4 -->
							<input type="hidden" name="madre_beneficiario_nombre_4" id="madre_beneficiario_nombre_4">
							<input type="hidden" name="madre_beneficiario_carnet_4" id="madre_beneficiario_carnet_4">
							<input type="hidden" name="tipo_4" id="tipo_4">
							<input type="hidden" name="combo_4" id="combo_4">
							<input type="hidden" name="ingreso_bruto_4" id="ingreso_bruto_4">
							<input type="hidden" name="gastos_4" id="gastos_4">
							<input type="hidden" name="monto_depedientes_4" id="monto_depedientes_4">
							<!-- fin madre 4 -->

							<input type="hidden" name="conyuge_id" id="conyuge_id">
							<input type="hidden" name="papabeneficiario_id" id="papabeneficiario_id">
							<input type="hidden" name="mamabeneficiario_id" id="mamabeneficiario_id">
							<input type="hidden" name="papaconyugue_id" id="papaconyugue_id">
							<input type="hidden" name="mamaconyugue_id" id="mamaconyugue_id">
							<input type="hidden" name="ingreso_beneficiario" id="ingreso_beneficiario" value="<?php echo number_format($datos_credito['ingreso_mensual'], 2); ?>">
							<input type="hidden" name="ingreso_conyugue"  id="ingreso_conyugue" value="<?php echo $datos_credito['ingreso_conyugue']; ?>">
							<input type="hidden" name="interes" id="interes">
							<input type="hidden" name="meses" id="meses">
							<input type="hidden" name="monto" id="monto">
							<input type="hidden" name="monto_total" id="monto_total">
							<input type="hidden" name="aprobado" id="aprobado" value="No">
							<input type="hidden" name="fecha" id="fecha">
							
						<?php //fin campos ocultos para guardar en la base de datos ?>

						<div class="m-portlet__body">
							<table class="table table-striped m-table" >
								<tbody>
									<tr>
										<th scope="row">Ingresos liquidos mensuales</th>
										<td align="right"><?php echo number_format($datos_credito['ingreso_mensual'], 2); ?></td>	
									</tr>
									<tr>
										<th scope="row">Ingresos liquidos mensuales conyugue</th>
										<td align="right"><?php echo $datos_credito['ingreso_conyugue']; ?></td>
										<?php 
											$total = 0;
											$total = $datos_credito['ingreso_mensual'] + $datos_credito['ingreso_conyugue'];
										?>
									</tr>
									<tr>
										<th scope="row">Ingresos padre beneficiario</th>
										<td align="right" id="diipb">0</td>
									</tr>
									<tr>
										<th scope="row">Ingresos madre beneficiario</th>
										<td align="right" id="diimb">0</td>
									</tr>
									<tr>
										<th scope="row">Ingresos padre conyugue</th>
										<td align="right" id="diipb2">0</td>
									</tr>
									<tr>
										<th scope="row">Ingresos madre conyugue</th>
										<td align="right" id="diipb3">0</td>
									</tr>
									<tr>
										<th scope="row">Total</th>
										<td align="right" id="total_ingresos"><?php echo number_format($total, 2); ?></td>
									</tr>
									<tr>
										<th scope="row">Tasa de interes</th>
										<td align="right">5.5%</td>
									</tr>
									<tr>
										<th scope="row">Plazo</th>
										<td align="right">25 a&nacute;os</td>
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
										</tr>
									</thead>
									<tbody>
										<?php $ingreso_total_solicitante = $datos_credito['ingreso_mensual']+$datos_credito['ingreso_conyugue'] ?>
										<?php //foreach ($condominios as $c): ?>
										<tr>
											<th scope="row"><?php echo $condominio['id'] ?></th>
											<td><?php echo $condominio['descripcion'] ?></td>
											<td><?php echo $condominio['ciudad'] ?></td>
											<td><?php echo number_format($condominio['valor'], 2); ?></td>
											<td><?php echo number_format($condominio['cuota_mensual'], 2); ?></td>
											<td><?php echo number_format($condominio['sueldo_prom'], 2); ?></td>
										</tr>
										<?php //endforeach; ?>

									</tbody>
								</table>

								<div class="m-portlet__foot m-portlet__foot--fit">
										<center>
											<div class="m-form__actions">
												<!-- <a href="<?php echo base_url(); ?>" type="button" class="btn m-btn--pill btn-success">Finalizar</a> -->
												<input type="submit" name="" class="btn m-btn--pill btn-success" value="GUARDAR">
											</div>
										</center>
									</div>

							</div>
						</div>

						<!--end::Form-->
					</div>

					<!--end::Portlet-->
				</form>
				</div>

				<div class="col-md-4 item">
					<!--begin::Portlet-->
					<div class="m-portlet m-portlet--tab" id="bloque_1">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon m--hide">
										<i class="la la-gear"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Registro ingresos padre o madre beneficiario
									</h3>
								</div>
							</div>
						</div>

						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-3 col-form-label">Carnet Identidad</label>
								<div class="col-4">
									<input type="text" class="form-control m-input m-input--air m-input--pill valcrt" name="ci_c" id="ci2" required>

								</div>

								<div class="col-3">								
										<div class="m-section__content m-demo-dropdowns" >
											<div class="m-dropdown m-dropdown--inline m-dropdown--large m-dropdown--arrow m-dropdown--align-left" m-dropdown-toggle="hover" >
												<button type="button" class="btn m-btn--pill btn-success " onclick="carnet_2();">Buscar</button>
											</div>
										</div>																	
									
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-3 col-form-label">Nombre</label>
								<div class="col-8">
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="name_2" id="name_2" readonly>

								</div>
								
							</div>

							<!--begin::Section-->
							<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_5" role="tablist">

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--danger">
									<div class="m-accordion__item-head collapsed" srole="tab" id="m_accordion_5_item_1_head" data-toggle="collapse" href="#m_accordion_5_item_1_body_1" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Independientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_1_body_1" role="tabpanel" aria-labelledby="m_accordion_5_item_1_head" data-parent="#m_accordion_5" style="">
										<div class="m-accordion__item-content">

										
										<div class="form-group m-form__group row">
											<div class="col-lg-4">
												<label class="">Categoria</label>
												<select class="form-control m-input" id="cb_ipb">
													<option value="Comercio">Comercio</option>
													<option value="Servicio">Servicio</option>
													<option value="Productivo">Productivo</option>
												</select>
											</div>
											<div class="col-lg-4">
												<label class="form-control-label">Ingreso mensual</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill valcrt" name="paterno_c" id="txt_impb" value="0">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
													<!-- <div class="form-control-feedback">Introduce un valor</div> -->
												</div>
											</div>

											<div class="col-lg-4">
												<label class="">Gastos mensuales</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill valcrt" name="paterno_c" id="txt_igpb" value="0">
													<!-- <span class="m-input-icon__icon m-input-icon__icon--right"></span> -->
												</div>
											</div>

										</div>
									
									<div class="m-portlet__foot--fit">
										<center>
											<div class="m-form__actions">
												<button type="submit" class="btn m-btn--pill btn-accent" onclick=padre_beneficiario_independiente();>Calcular</button>
												<button type="button" class="btn m-btn--pill btn-success btna_1" onclick="muestra2();" style="display: none;">Adicionar Colaborador</button>
											</div>
										</center>
									</div>
											
										</div>
									</div>
								</div>

								<!--end::Item-->

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--brand">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_5_item_3_head" data-toggle="collapse" href="#m_accordion_5_item_3_body_1" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa  flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Dependientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_3_body_1" role="tabpanel" aria-labelledby="m_accordion_5_item_3_head" data-parent="#m_accordion_5">
										<div class="m-accordion__item-content">
											<div class="form-group m-form__group row">

												<div class="col-lg-12">
													<label class="">Ingreso mensual</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_dmbp"  value="0">
														<span class="m-input-icon__icon m-input-icon__icon--right"></span>
													</div>
												</div>
											</div>
											<div class="m-portlet__foot--fit">
												<center>
													<div class="m-form__actions">
														<button type="submit" class="btn m-btn--pill btn-accent"  onclick="padre_beneficiario_dependiente();">Calcular</button>
														<button type="button" class="btn m-btn--pill btn-success btna_1" onclick="muestra2();" style="display: none;">Adicionar Colaborador</button>
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

					<div style="display: none;" id="bloque_2">
					<!--begin::Portlet-->
					<div class="m-portlet m-portlet--tab">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon m--hide">
										<i class="la la-gear"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Registro ingresos padre o madre beneficiario
									</h3>
								</div>
							</div>
						</div>

						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-3 col-form-label">Carnet Identidad</label>
								<div class="col-4">
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="ci_c" id="ci3" required>

								</div>

								<div class="col-3">								
										<div class="m-section__content m-demo-dropdowns" >
											<div class="m-dropdown m-dropdown--inline m-dropdown--large m-dropdown--arrow m-dropdown--align-left" m-dropdown-toggle="hover" >
												<button type="button" class="btn m-btn--pill btn-success " onclick="carnet_3();">Buscar</button>
											</div>
										</div>																	
									
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-3 col-form-label">Nombre</label>
								<div class="col-8">
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="name_3" id="name_3" readonly>

								</div>
								
							</div>
							
							<!-- <div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">Carnet Identidad:</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="ci_c" id="ci3" required>
									<button type="button" class="btn m-btn--pill btn-success" onclick="carnet_3();">Buscar</button>
								</div>
								<div class="col-lg-8">
									<label class="">Nombre</label>
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="name_3" id="name_3" readonly>
								</div>
							</div> -->

							<!--begin::Section-->
							<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_6" role="tablist">

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--danger">
									<div class="m-accordion__item-head collapsed" srole="tab" id="m_accordion_5_item_1_head" data-toggle="collapse" href="#m_accordion_5_item_1_body_2" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title">Formulario Independientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_1_body_2" role="tabpanel" aria-labelledby="m_accordion_5_item_1_head" data-parent="#m_accordion_6" style="">
										<div class="m-accordion__item-content">

										
										<div class="form-group m-form__group row">
											<div class="col-lg-4">
												<label class="">Categoria</label>
												<select class="form-control m-input" id="cb_i2">
													<option value="Comercio">Comercio</option>
													<option value="Servicio">Servicio</option>
													<option value="Productivo">Productivo</option>
												</select>
											</div>
											<div class="col-lg-4">
												<label class="">Ingreso mensual</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_ib2" value="0">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

											<div class="col-lg-4">
												<label class="">Gastos mensuales</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_gb2" value="0">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

										</div>

									<div class="m-portlet__foot--fit">
										<center>
											<div class="m-form__actions">
												<button type="submit" class="btn m-btn--pill btn-accent" onclick=padre_beneficiario_independiente2();>Calcular</button>
												<button type="button" class="btn m-btn--pill btn-success btna_2" onclick="muestra3()" style="display: none;">Adicionar Colaborador</button>
											</div>
										</center>
									</div>
											
										</div>
									</div>
								</div>

								<!--end::Item-->

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--brand">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_5_item_3_head" data-toggle="collapse" href="#m_accordion_5_item_3_body_2" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa  flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Dependientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_3_body_2" role="tabpanel" aria-labelledby="m_accordion_5_item_3_head" data-parent="#m_accordion_6">
										<div class="m-accordion__item-content">
											<div class="form-group m-form__group row">

												<div class="col-lg-12">
													<label class="">Monto:</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_md2" value="0">
														<span class="m-input-icon__icon m-input-icon__icon--right"></span>
													</div>
												</div>
											</div>
											<div class="m-portlet__foot--fit">
												<center>
													<div class="m-form__actions">
														<button type="submit" class="btn m-btn--pill btn-accent" onclick="padre_beneficiario_dependiente2();">Calcular</button>
														<button type="button" class="btn m-btn--pill btn-success btna_2" onclick="muestra3();" style="display: none;">Adicionar Colaborador</button>
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

				<div class="col-md-4 item">
					<!--begin::Portlet-->
					<div class="m-portlet m-portlet--tab" id="bloque_3" style="display: none;">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon m--hide">
										<i class="la la-gear"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Registro ingresos padre o madre beneficiario
									</h3>
								</div>
							</div>
						</div>

						<div class="m-portlet__body">

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-3 col-form-label">Carnet Identidad</label>
								<div class="col-4">
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="ci_c" id="ci4" required>

								</div>

								<div class="col-3">								
										<div class="m-section__content m-demo-dropdowns" >
											<div class="m-dropdown m-dropdown--inline m-dropdown--large m-dropdown--arrow m-dropdown--align-left" m-dropdown-toggle="hover" >
												<button type="button" class="btn m-btn--pill btn-success " onclick="carnet_4();">Buscar</button>
											</div>
										</div>																	
									
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-3 col-form-label">Nombre</label>
								<div class="col-8">
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="name_4" id="name_4" readonly>

								</div>
								
							</div>

							<!--begin::Section-->
							<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_7" role="tablist">

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--danger">
									<div class="m-accordion__item-head collapsed" srole="tab" id="m_accordion_5_item_1_head" data-toggle="collapse" href="#m_accordion_5_item_1_body_5" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Independientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_1_body_5" role="tabpanel" aria-labelledby="m_accordion_5_item_1_head" data-parent="#m_accordion_7" style="">
										<div class="m-accordion__item-content">

										
										<div class="form-group m-form__group row">
											<div class="col-lg-4">
												<label class="">Categoria</label>
												<select class="form-control m-input" id="cb_ipb3">
													<option value="Comercio">Comercio</option>
													<option value="Servicio">Servicio</option>
													<option value="Productivo">Productivo</option>
												</select>
											</div>
											<div class="col-lg-4">
												<label class="">Ingreso mensual</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_ib3" value="0">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

											<div class="col-lg-4">
												<label class="">Gastos mensuales</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_igb3" value="0">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

										</div>

									<div class="m-portlet__foot--fit">
										<center>
											<div class="m-form__actions">
												<button type="submit" class="btn m-btn--pill btn-accent" onclick=padre_beneficiario_independiente3();>Calcular</button>
												<button type="button" class="btn m-btn--pill btn-success btna_3" onclick="muestra4();" style="display: none;">Adicionar Colaborador</button>
											</div>
										</center>
									</div>
											
										</div>
									</div>
								</div>

								<!--end::Item-->

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--brand">
									<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_5_item_3_head" data-toggle="collapse" href="#m_accordion_5_item_3_body_6" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa  flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Dependientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_3_body_6" role="tabpanel" aria-labelledby="m_accordion_5_item_3_head" data-parent="#m_accordion_7">
										<div class="m-accordion__item-content">
											<div class="form-group m-form__group row">

												<div class="col-lg-12">
													<label class="">Monto:</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_dmbp3" value="0">
														<span class="m-input-icon__icon m-input-icon__icon--right"></span>
													</div>
												</div>
											</div>
											<div class="m-portlet__foot--fit">
												<center>
													<div class="m-form__actions">
														<button type="submit" class="btn m-btn--pill btn-accent" onclick="padre_beneficiario_dependiente3();">Calcular</button>
														<button type="button" class="btn m-btn--pill btn-success btna_3" onclick="muestra4();" style="display: none;">Adicionar colaborador</button>
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

					<div>
					<!--begin::Portlet-->
					<div class="m-portlet m-portlet--tab" style="display: none;" id="bloque_4">
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
								<label for="example-text-input" class="col-3 col-form-label">Carnet Identidad</label>
								<div class="col-4">
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="ci_c" id="ci5" required>

								</div>

								<div class="col-3">								
										<div class="m-section__content m-demo-dropdowns" >
											<div class="m-dropdown m-dropdown--inline m-dropdown--large m-dropdown--arrow m-dropdown--align-left" m-dropdown-toggle="hover" >
												<button type="button" class="btn m-btn--pill btn-success " onclick="carnet_5();">Buscar</button>
											</div>
										</div>																	
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-3 col-form-label">Nombre</label>
								<div class="col-8">
									<input type="text" class="form-control m-input m-input--air m-input--pill" name="name_5" id="name_5" readonly>

								</div>
								
							</div>

							<!--begin::Section-->
							<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_8" role="tablist">

								<!--begin::Item-->
								<div class="m-accordion__item m-accordion__item--danger">
									<div class="m-accordion__item-head collapsed" srole="tab" id="m_accordion_5_item_1_head" data-toggle="collapse" href="#m_accordion_5_item_1_body_7" aria-expanded="false">
										<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
										<span class="m-accordion__item-title"> Formulario Independientes</span>
										<span class="m-accordion__item-mode"></span>
									</div>
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_1_body_7" role="tabpanel" aria-labelledby="m_accordion_5_item_1_head" data-parent="#m_accordion_8" style="">
										<div class="m-accordion__item-content">

										
										<div class="form-group m-form__group row">
											<div class="col-lg-4">
												<label class="">Categoria</label>
												<select class="form-control m-input" id="cb_ipb4">
													<option value="Comercio">Comercio</option>
													<option value="Servicio">Servicio</option>
													<option value="Productivo">Productivo</option>
												</select>
											</div>
											<div class="col-lg-4">
												<label class="">Ingreso mensual</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_impb4" value="0">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

											<div class="col-lg-4">
												<label class="">Gastos mensuales</label>
												<div class="m-input-icon m-input-icon--right">
													<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_igpb4" value="0">
													<span class="m-input-icon__icon m-input-icon__icon--right"></span>
												</div>
											</div>

										</div>

									<div class="m-portlet__foot--fit">
										<center>
											<div class="m-form__actions">
												<button type="submit" class="btn m-btn--pill btn-accent" onclick="padre_beneficiario_independiente4();">Calcular</button>
												<!-- <button type="button" class="btn m-btn--pill btn-success btna_4" style="display: none;">Adicionar Colaborador</button> -->
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
									<div class="m-accordion__item-body collapse" id="m_accordion_5_item_3_body" role="tabpanel" aria-labelledby="m_accordion_5_item_3_head" data-parent="#m_accordion_8">
										<div class="m-accordion__item-content">
											<div class="form-group m-form__group row">

												<div class="col-lg-12">
													<label class="">Monto:</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input m-input--air m-input--pill" name="paterno_c" id="txt_dmbp4" value="0">
														<span class="m-input-icon__icon m-input-icon__icon--right"></span>
													</div>
												</div>
											</div>
											<div class="m-portlet__foot--fit">
												<center>
													<div class="m-form__actions">
														<button type="submit" class="btn m-btn--pill btn-accent" onclick="padre_beneficiario_dependiente4();">Calcular</button>
														<!-- <button type="button" class="btn m-btn--pill btn-success btna_4" style="display: none;">Adicionar colaborador</button> -->
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
<?php //vdebug($condominio, true, false, true); ?>
			<!-- end:: Body -->
<!-- mensajes solicitud -->
<div class="modal fade" id="modal_msg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header" align="center">
				<h2 class="m--font-info">Registro exitoso</h2>

			</div>
			<div class="modal-body">

				<div align="center">
					<img src="<?php echo base_url() ?>public/assets/img/happy.jpeg" alt="" width="50%">
				</div>
				<br>
				<div class="alert alert-primary" role="alert">
					Tu solicitud ha sido registrada exitosamente, se te ha enviado informacion importante al correo
					<?php echo $email; ?>
				</div>
				<p align="center">
					<img src="<?php echo base_url() ?>public/assets/img/check.png" alt="" width="15%">
					<span style="font-size: 16px;">Tu Numero de Tramite es</span><br />
					<span style="font-size: 38px; font-weight: 800;"> <?php echo str_pad($nro_tramite, 5, "0", STR_PAD_LEFT); ?> </span>
				</p>
			</div>
			<div class="modal-footer">
				<input type="submit" value="Guardar" onclick="envia_formulario()" class="btn btn-success">
				<!-- <a href="<?php //echo base_url(); ?>" type="button" class="btn btn-success" onclick="document.getElementById('form-1').submit();">Terminar</a> -->
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_error" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header" align="center">
				<!-- <h2 class="m--font-danger">Puedes solicitar ayuda</h2> -->
				<h3 class="modal-title m--font-info" id="exampleModalLabel">Informacion</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">

				<div align="center">
					<img src="<?php echo base_url() ?>public/assets/img/think.jpeg" alt="" width="50%">
				</div>
				<br>
				<div class="alert alert-info" role="alert">
					Tus ingresos totales no son suficientes para acceder al credito
				</div>
				Sin embargo podrias solicitar ayuda, llenando los formularios de ingresos de tus papas.
			</div>
			<!-- <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>																		
				</div> -->
		</div>
	</div>
</div>
<!-- fin mensajes solicitud -->

<script type="text/javascript">

	var ingresos_beneficiario = <?php echo $datos_credito['ingreso_mensual']; ?>;
	var ingresos_conyugue = <?php echo $datos_credito['ingreso_conyugue']; ?>;
	var ingresos_padre_beneficiario = 0;
	var ingresos_madre_beneficiario = 0;
	var ingresos_padre_conyugue = 0;
	var ingresos_madre_conyugue = 0;
	var couta_mes_condominio = <?php echo $cuota['cuota_total']; ?>;
	var total = 0;
	var sueldo_ideal = <?php echo $condominio['sueldo_prom']; ?>;

	$(".valcrt").on("keypress keyup blur", function (event) {
	 	//this.value = this.value.replace(/[^0-9\.]/g,'');
		$(this).val($(this).val().replace(/[^0-9\.]/g, ''));
		if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
			event.preventDefault();
		}
	});

    function agregarform() {
		$('.item').hide('slow');
		$("#bloque_1").show('slow');
    }
	function muestra_papab() 
	{
		// console.log(idCondominio);
		$("#bloque_1").show('slow');
		// $('#titulo_vivienda').html("<h4>CONDOMINIO: "+nombre+"</<h4>");
	}

	function muestra2()
	{
		$("#bloque_2").show('slow');
		// alert('entro');
	}

	function muestra3()
	{
		$("#bloque_3").show('slow');
		// alert('entro');
	}

	function muestra4()
	{
		$("#bloque_4").show('slow');
		// alert('entro');
	}


	

	function calcula_cuota(monto)
	{
		// $cuota_mensual = $monto_prestamo * (($porcentaje * Math.pow((1 + $porcentaje), $cuotas)) / (Math.pow((1 + $porcentaje), $cuotas) - 1));
		prestamo = <?php echo $condominio['valor']; ?>;
		var cuota_mensual = 0;
		cuota_mensual = prestamo * ((0.0045 * Math.pow((1 + 0.0045), 300)) / (Math.pow((1 + 0.0045), 300) - 1));
		// console.log(prestamo);
		cuota_redondeado = Math.round(parseFloat(cuota_mensual)*100) / 100;
		porcentaje_ajuste = cuota_redondeado * 0.035;
		monto_ajustado = cuota_mensual + porcentaje_ajuste;
		cuota_ajustado_redondeado = Math.round(monto_ajustado*100)/100;

		seguro_incendio = monto * 0.00015;
		cuota_total = cuota_ajustado_redondeado + seguro_incendio;

		// $("#diipb").html(cuota_total);

		sueldo_ideal = Math.round(cuota_total / 0.4, 2);
		// console.log(sueldo_ideal);

		// $resultados['cuota'] = $monto_redondeado;
		// $resultados['seguro'] = $seguro_incendio;
		// $resultados['cuota_total'] = $cuota_total;
		// $resultados['sueldo_ideal'] = $sueldo_ideal;

		// vdebug($sueldo_ideal, true, false, true);
		// return $resultados;
	}

    function calcula_independientes(tipo_ipb, monto_impb, gasto_igpb)
    {
    	// var tipo_ipb = $('#cb_ipb').val();
    	// var monto_impb = $('#txt_impb').val();
    	// var gasto_igpb = $('#txt_igpb').val();

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
		if (monto_adicionable < 0) {
			monto_validado = 0;
		} else {
			monto_validado = monto_adicionable;
		}
    	return monto_validado;
    	// $('#ayuda_pb').show('slow');
    	// console.log(monto_adicionable);

    	// console.log("monto "+monto_adicionable);
    	// $("#diipb").html(monto_adicionable);
    }

    $(document).ready(function() {
	  
	   ingresos_beneficiario = <?php echo $datos_credito['ingreso_mensual']; ?>;
	   ingreso_conyugue = <?php echo $datos_credito['ingreso_conyugue']; ?>;
    	
    	var subtotal = ingresos_beneficiario + ingreso_conyugue;
		$("#monto_total").val(subtotal);

		if(subtotal > parseFloat(sueldo_ideal)){
    		// alerta_alcanzo();
			// $("#modal_msg").show();
			$("#modal_msg").modal({backdrop: "static"});	
			$("#aprobado").val('Si');
    	}
	});
   

    function padre_beneficiario_independiente()
    {
    	var tipo_ipb = $('#cb_ipb').val();
    	var monto_impb = $('#txt_impb').val();
    	var gasto_igpb = $('#txt_igpb').val();
    	monto = calcula_independientes(tipo_ipb, monto_impb, gasto_igpb);
		$('#combo_1').val(tipo_ipb);
		$('#ingreso_bruto_1').val(monto_impb);
		$('#gastos_1').val(gasto_igpb);

    	ingresos_padre_beneficiario = monto;
    	var subtotal = ingresos_beneficiario + ingresos_conyugue + ingresos_padre_beneficiario + ingresos_madre_beneficiario + ingresos_padre_conyugue + ingresos_madre_conyugue;
		$("#diipb").html(formatoNumeros(monto));
		$("#monto_total").val(subtotal);
		$("#total_ingresos").html(formatoNumeros(subtotal));

		if(subtotal > parseFloat(sueldo_ideal)){
    		// alerta_alcanzo();
			// $("#modal_msg").show();
			$("#modal_msg").modal({backdrop: "static"});	
			$("#aprobado").val('Si');
    	}else{
    		falta();
			$(".btna_1").show('slow');
			$("#aprobado").val('No');
    	}
    }

    function padre_beneficiario_dependiente()
    {
    	var monto_bmbp = $('#txt_dmbp').val();
    	var monto_numerico = parseFloat(monto_bmbp);
    	var monto_descontado = monto_numerico*0.4;
    	var ingresos_padre_beneficiario = monto_descontado;
    	var subtotal = ingresos_beneficiario + ingresos_conyugue + ingresos_padre_beneficiario + ingresos_madre_beneficiario + ingresos_padre_conyugue + ingresos_madre_conyugue;
		$("#monto_total").val(subtotal);
    	$("#diipb").html(monto_bmbp);
    	$("#total_ingresos").html(formatoNumeros(subtotal));
    	$("#monto_depedientes_1").val(monto_bmbp);

    	if(subtotal > parseFloat(sueldo_ideal)){
    		// alerta_alcanzo();
			$("#modal_msg").modal({backdrop: "static"});
			$("#aprobado").val('Si');	
    	}else{
    		falta();
			$(".btna_1").show('slow');
    	}
    	// console.log(sueldo_ideal);
    }

    function padre_beneficiario_independiente2()
    {
    	var tipo_ipb2 = $('#cb_i2').val();
    	var monto_impb2 = $('#txt_ib2').val();
    	var gasto_igpb2 = $('#txt_gb2').val();
    	monto2 = calcula_independientes(tipo_ipb2, monto_impb2, gasto_igpb2);
		$('#combo_2').val(tipo_ipb2);
		$('#ingreso_bruto_2').val(monto_impb2);
		$('#gastos_2').val(gasto_igpb2);

    	// console.log(monto2);
    	ingresos_madre_beneficiario = monto2;
    	var subtotal = ingresos_beneficiario + ingresos_conyugue + ingresos_padre_beneficiario + ingresos_madre_beneficiario + ingresos_padre_conyugue + ingresos_madre_conyugue;
		$("#diimb").html(monto2);
		$("#total_ingresos").html(subtotal);

		if(subtotal > parseFloat(sueldo_ideal)){
    		$("#modal_msg").modal({backdrop: "static"});
    		$("#aprobado").val('Si');
    	}else{
    		falta();
			$(".btna_2").show('slow');
			// alert('Si');
    	}
    }

    function padre_beneficiario_dependiente2()
    {
    	var monto_bmbp = $('#txt_md2').val();
    	var monto_numerico = parseFloat(monto_bmbp);
    	var monto_descontado = monto_numerico*0.4;
    	var ingresos_padre_beneficiario = monto_descontado;
    	var subtotal = ingresos_beneficiario + ingresos_conyugue + ingresos_padre_beneficiario + ingresos_madre_beneficiario + ingresos_padre_conyugue + ingresos_madre_conyugue;
    	$("#monto_total").val(subtotal);
    	$("#diimb").html(monto_bmbp);
    	$("#total_ingresos").html(subtotal);
		$("#monto_depedientes_2").val(monto_bmbp);

    	if(subtotal > parseFloat(sueldo_ideal)){
    		$("#modal_msg").modal({backdrop: "static"});
    		$("#aprobado").val('Si');
    	}else{
    		falta();
			$(".btna_2").show('slow');
    	}
    	// console.log(sueldo_ideal);
    }

    function padre_beneficiario_independiente3()
    {
    	var tipo_ipb3 = $('#cb_ipb3').val();
    	var monto_impb3 = $('#txt_ib3').val();
    	var gasto_igpb3 = $('#txt_igb3').val();
    	monto3 = calcula_independientes(tipo_ipb3, monto_impb3, gasto_igpb3);
		$('#combo_3').val(tipo_ipb3);
		$('#ingreso_bruto_3').val(monto_impb3);
		$('#gastos_3').val(gasto_igpb3);

    	// console.log(monto3);
    	ingresos_padre_conyugue = monto3;
    	var subtotal = ingresos_beneficiario + ingresos_conyugue + ingresos_padre_beneficiario + ingresos_madre_beneficiario + ingresos_padre_conyugue + ingresos_madre_conyugue;
    	$("#monto_total").val(subtotal);
		$("#diipb2").html(monto3);
		$("#total_ingresos").html(subtotal);

		if(subtotal > parseFloat(sueldo_ideal)){
    		$("#modal_msg").modal({backdrop: "static"});
    		$("#aprobado").val('Si');
    	}else{
    		falta();
			$(".btna_3").show('slow');
    	}
    }

    function padre_beneficiario_dependiente3()
    {
    	var monto_bmbp = $('#txt_dmbp3').val();
    	var monto_numerico = parseFloat(monto_bmbp);
    	var monto_descontado = monto_numerico*0.4;
    	var ingresos_padre_conyugue = monto_descontado;
    	var subtotal = ingresos_beneficiario + ingresos_conyugue + ingresos_padre_beneficiario + ingresos_madre_beneficiario + ingresos_padre_conyugue + ingresos_madre_conyugue;
    	$("#monto_total").val(subtotal);
    	$("#diipb2").html(monto_bmbp);
    	$("#total_ingresos").html(subtotal);
		$("#monto_depedientes_3").val(monto_bmbp);

    	if(subtotal > parseFloat(sueldo_ideal)){
    		$("#modal_msg").modal({backdrop: "static"});
    		$("#aprobado").val('Si');
    	}else{
    		falta();
			$(".btna_3").show('slow');
    	}
    	// console.log(sueldo_ideal);
    }

    function padre_beneficiario_independiente4()
    {
    	var tipo_ipb3 = $('#cb_ipb4').val();
    	var monto_impb3 = $('#txt_impb4').val();
    	var gasto_igpb3 = $('#txt_igpb4').val();
    	monto4 = calcula_independientes(tipo_ipb3, monto_impb3, gasto_igpb3);
		$('#combo_4').val(tipo_ipb3);
		$('#ingreso_bruto_4').val(monto_impb3);
		$('#gastos_4').val(gasto_igpb3);

    	// console.log(monto3);
    	ingresos_madre_conyugue = monto4;
    	var subtotal = ingresos_beneficiario + ingresos_conyugue + ingresos_padre_beneficiario + ingresos_madre_beneficiario + ingresos_padre_conyugue + ingresos_madre_conyugue;
    	$("#monto_total").val(subtotal);
		$("#diipb3").html(monto4);
		$("#total_ingresos").html(subtotal);

		if(subtotal > parseFloat(sueldo_ideal)){
    		$("#modal_msg").modal({backdrop: "static"});
    		$("#aprobado").val('Si');
    	}else{
    		falta_final();
			// $(".btna_4").show('slow');
    	}
    }

    function padre_beneficiario_dependiente4()
    {
    	var monto_bmbp = $('#txt_dmbp4').val();
    	var monto_numerico = parseFloat(monto_bmbp);
    	var monto_descontado = monto_numerico*0.4;
    	var ingresos_madre_conyugue = monto_descontado;
    	var subtotal = ingresos_beneficiario + ingresos_conyugue + ingresos_padre_beneficiario + ingresos_madre_beneficiario + ingresos_padre_conyugue + ingresos_madre_conyugue;
    	$("#monto_total").val(subtotal);
    	$("#diipb3").html(monto_bmbp);
    	$("#total_ingresos").html(subtotal);
		$("#monto_depedientes_4").val(monto_bmbp);

    	if(subtotal > parseFloat(sueldo_ideal)){
    		$("#modal_msg").modal({backdrop: "static"});
    		$("#aprobado").val('Si');
    	}else{
    		falta_final();
			// $(".btna_4").show('slow');
    	}
    	// console.log(sueldo_ideal);
    }


    function alerta_alcanzo(){
    	Swal.fire({
		  title: 'Lo Lograste',
    	  text: 'Te alcanza para tu vivienda!',
		  imageUrl: '<?php echo base_url(); ?>public/imagenes/aprobado.jpeg',
		  imageWidth: 200,
		  imageHeight: 250,
		  imageAlt: 'Custom image',
		  animation: false
		})
	//location.reload();
	}

    function falta(){
    	Swal.fire({
		  // type: 'error',
		  title: 'Lo Siento',
		  text: 'Aun te falta!',
		  imageUrl: '<?php echo base_url(); ?>public/imagenes/mal.jpeg',
		  imageWidth: 200,
		  imageHeight: 250,
		  imageAlt: 'Custom image',
		  animation: false
		})

	//location.reload();
	}

	function falta_final() {
		Swal.fire({
			// type: 'error',
			title: 'Lo Siento',
			text: 'Se acabaron tus recursos puedes intentar en otra oportunidad!',
			imageUrl: '<?php echo base_url(); ?>public/imagenes/mal.jpeg',
			imageWidth: 200,
			imageHeight: 250,
			imageAlt: 'Custom image',
			animation: false
		})

		//location.reload();
	}

	function envia_formulario(){
		// alert('aqui');
		$("#form-1").submit();
	}


	function formatoNumeros(num) {
		return (num).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
	}

	console.log(formatoNumeros(123456789)) // output 1.234.567,89 €

</script>

<script type="text/javascript">
	function carnet_2()
	{
	        var ci = $("#ci2").val();
	        $("#padre_beneficiario_carnet_1").val(ci);
	        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
	        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

	        $.ajax({
	            url: '<?php echo base_url(); ?>Persona/ajax_veri/',
	            type: 'GET',
	            dataType: 'json',
	            data: {csrfName: csrfHash, param1: ci},
	            // data: {param1: cod_catastral},
	            success:function(data, textStatus, jqXHR) {
	            	//alert(data);
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
	                    var concatenados = data.nombres.concat(' ', data.paterno, ' ', data.materno);
	                    $('#name_2').val(concatenados);
	                    $("#padre_beneficiario_nombre_1").val(concatenados);
	                    // $('#paterno').val(data.paterno);
	                    // $('#materno').val(data.materno);
	                    // $('#fecha').val(data.fec_nacimiento);
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
	                alerta_ci();
	            }
	        });
	}
</script>

<script type="text/javascript">
	function carnet_3()
	{
	        var ci = $("#ci3").val();
			$("#madre_beneficiario_carnet_2").val(ci);
	        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
	        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

	        $.ajax({
	            url: '<?php echo base_url(); ?>Persona/ajax_veri/',
	            type: 'GET',
	            dataType: 'json',
	            data: {csrfName: csrfHash, param1: ci},
	            // data: {param1: cod_catastral},
	            success:function(data, textStatus, jqXHR) {
	            	//alert(data);
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
	                    var concatenados = data.nombres.concat(' ', data.paterno, ' ', data.materno);
	                    $('#name_3').val(concatenados);
						$("#madre_beneficiario_nombre_2").val(concatenados);
	                    // $('#paterno').val(data.paterno);
	                    // $('#materno').val(data.materno);
	                    // $('#fecha').val(data.fec_nacimiento);
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
	                alerta_ci();
	            }
	        });
	}
</script>

<script type="text/javascript">
	function carnet_4()
	{
	        var ci = $("#ci4").val();
			$("#padre_beneficiario_carnet_3").val(ci);
	        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
	        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

	        $.ajax({
	            url: '<?php echo base_url(); ?>Persona/ajax_veri/',
	            type: 'GET',
	            dataType: 'json',
	            data: {csrfName: csrfHash, param1: ci},
	            // data: {param1: cod_catastral},
	            success:function(data, textStatus, jqXHR) {
	            	//alert(data);
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
	                    var concatenados = data.nombres.concat(' ', data.paterno, ' ', data.materno);
	                    $('#name_4').val(concatenados);
						$("#padre_beneficiario_nombre_3").val(concatenados);
	                    // $('#paterno').val(data.paterno);
	                    // $('#materno').val(data.materno);
	                    // $('#fecha').val(data.fec_nacimiento);
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
	                alerta_ci();
	            }
	        });
	}
</script>

<script type="text/javascript">
	function carnet_5()
	{
	        var ci = $("#ci5").val();
			$("#madre_beneficiario_carnet_4").val(ci);
	        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
	        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

	        $.ajax({
	            url: '<?php echo base_url(); ?>Persona/ajax_veri/',
	            type: 'GET',
	            dataType: 'json',
	            data: {csrfName: csrfHash, param1: ci},
	            // data: {param1: cod_catastral},
	            success:function(data, textStatus, jqXHR) {
	            	//alert(data);
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
	                    var concatenados = data.nombres.concat(' ', data.paterno, ' ', data.materno);
	                    $('#name_5').val(concatenados);
						$("#madre_beneficiario_nombre_4").val(concatenados);
	                    // $('#paterno').val(data.paterno);
	                    // $('#materno').val(data.materno);
	                    // $('#fecha').val(data.fec_nacimiento);
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
	                alerta_ci();
	            }
	        });
	}
</script>

<script>
function alerta_ci(){
Swal.fire({
  type: 'error',
  title: 'Oops...',
  text: 'No es un Carnet Valido!'
})
//location.reload();
}
</script>

<script>
function myFunction() {
 if( <?php echo $condominio['sueldo_prom']; ?> <= <?php echo $ingreso_total_solicitante; ?> ){
 	$("#modal_msg").modal({backdrop: "static"});	
 }
 else{
 	$("#modal_error").modal({backdrop: "static"});
 }
  
}
</script>