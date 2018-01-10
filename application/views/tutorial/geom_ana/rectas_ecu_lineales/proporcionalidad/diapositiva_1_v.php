<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas_ecu_lineales/rectas_ecu_lineales.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet0 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>

<div class="container-fluid">
	<style type="text/css">
		.tema{
			color: #224EB5;
			text-align: justify;
			font-weight: bold;
		}
		.pregunta{
			color: #2e75b6;
			text-align: justify;
			font-weight: bold;
		}
		.instruccion{
			color: #000000;
			text-align: justify;
			font-weight: normal;
		}
	</style>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
		<div class="tema"><p>Proporcionalidad</p>
		</div>
		<div class="instruccion">
			<p>	En este tutorial aprenderás cómo distinguir si existe una relación de proporcionalidad directa entre dos conjuntos de números.
			<br>
			Lee con atención cada paso de las explicaciones y dedícale suficiente tiempo a los ejercicios hasta que domines el tema.<br></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p>1. La señora Rosales está a dieta. Va de compras al supermercado para comprar jamón de pavo y le dan 8 rebanadas que pesan 300 gramos en total.</p>
				</div>
				<div class="instruccion">
				<p>Completa la siguiente tabla que relaciona el número de rebanadas con el peso total.</p>
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo</label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<table class="table table-responsive table-striped table-bordered table-condensed" style="max-width:0%; margin:0 auto;">
					            <thead>
					                <tr class="success">

					                    <th>Rebanadas</th>
					                    <th>Gramos</th>
					                </tr>
					            </thead>
					            <tbody>
					            	<tr id="row_1">
					            		<td><input onchange="pintaCoordenada('row_1_td_1');" class="input-sm2" type="text" id="row_1_td_1" value="0" disabled="disabled" /></td>
					            		<td><input onchange="pintaCoordenada('row_1_td_2');" class="input-sm2" type="text" id="row_1_td_2" /></td>
					            	</tr>
					            	<tr id="row_2">
					            		<td><input onchange="pintaCoordenada('row_2_td_1');" class="input-sm2" type="text" id="row_2_td_1" /></td>
					            		<td><input onchange="pintaCoordenada('row_2_td_2');" class="input-sm2" type="text" id="row_2_td_2" /></td>
					            	</tr>
					            	<tr id="row_3">
					            		<td><input onchange="pintaCoordenada('row_3_td_1');" class="input-sm2" type="text" id="row_3_td_1" /></td>
					            		<td><input onchange="pintaCoordenada('row_3_td_2');" class="input-sm2" type="text" id="row_3_td_2" /></td>
					            	</tr>
					            	<tr id="row_4">
					            		<td><input onchange="pintaCoordenada('row_4_td_1');" class="input-sm2" type="text" id="row_4_td_1" /></td>
					            		<td><input onchange="pintaCoordenada('row_4_td_2');" class="input-sm2" type="text" id="row_4_td_2" value="150" disabled="disabled" /></td>
					            	</tr>
					            	<tr id="row_5">
					            		<td><input onchange="pintaCoordenada('row_5_td_1');" class="input-sm2" type="text" id="row_5_td_1" value="6" disabled="disabled" /></td>
					            		<td><input onchange="pintaCoordenada('row_5_td_2');" class="input-sm2" type="text" id="row_5_td_2" /></td>
					            	</tr>
					            	<tr id="row_6">
					            		<td><input onchange="pintaCoordenada('row_6_td_1');" class="input-sm2" type="text" id="row_6_td_1" value="8" disabled="disabled" /></td>
					            		<td><input onchange="pintaCoordenada('row_6_td_2');" class="input-sm2" type="text" id="row_6_td_2" value="300" disabled="disabled" /></td>
					            	</tr>
					            	<tr id="row_7">
					            		<td><input onchange="pintaCoordenada('row_7_td_1');" class="input-sm2" type="text" id="row_7_td_1" /></td>
					            		<td><input onchange="pintaCoordenada('row_7_td_2');" class="input-sm2" type="text" id="row_7_td_2" /></td>
					            	</tr>
					            	<tr id="row_8">
					            		<td><input onchange="pintaCoordenada('row_8_td_1');" class="input-sm2" type="text" id="row_8_td_1" /></td>
					            		<td><input onchange="pintaCoordenada('row_8_td_2');" class="input-sm2" type="text" id="row_8_td_2" value="1200" disabled="disabled" /></td>
					            	</tr>
					            </tbody>
					        </table>
					        <br>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
							<div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container0"></div>
						</div>
					</div>
				</div><br>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left"><br>
							<label>Los puntos parecen formar:</label>
							<select id="tipo_grafica">
								<option>Seleccione una opción</option>
								<option>Una línea recta que pasa por el origen</option>
								<option>Una línea recta que NO pasa por el origen</option>
								<option>Una curva</option>
							</select><br>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="justify">
						<p>Si "x" indica el número de rebanadas y "y" indica la cantidad de gramos de jamón, escribe la ecuación que indique cómo se relacionan los gramos de jamón de pavo con el número de rebanadas.</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
						<label> y= <input class="n_float" type="text" name="constant_ecu" id="constant_ecu" onkeypress="return validarSoloFlotante(event,'constant_ecu');"> x </label>

					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
						<div id="respuesta"></div>
					</div>
				</div>
			</div><br><br>
		</div>
	</div>
	<br><br>
  </div>
