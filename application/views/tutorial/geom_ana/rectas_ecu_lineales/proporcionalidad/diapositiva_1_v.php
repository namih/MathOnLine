<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet0 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet0.inject('applet_container0'); });
	var applet1 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet1.inject('applet_container1'); });
	var applet2 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet2.inject('applet_container2'); });
	var applet3 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet3.inject('applet_container3'); });	

	/*var applet2 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() {
        applet2.inject('applet_container2');	
    });*/    
</script>
<script type="text/javascript">
	var ejemplo=1;
</script>
<!-- <script src="<?php echo base_url(); ?>statics/js/geogebraweb/web/web.nocache.js"></script> -->
<script type="text/javascript">
	 	/*function create_straight() {
	 		var applet = document.ggbApplet;
	 		var point_a = '(2,5)';
	 		var point_b = '(3,7)';
	 		var draw_a = 'A = '+ point_a;
	 		var draw_b = 'B = '+ point_b;
	 		applet.evalCommand(draw_a); 
	 		applet.evalCommand(draw_b); 
	 		//applet.evalCommand("s = Line[A, B]"); 
	 	}*/
	 </script>



<div class="container-fluid">
	<style type="text/css">
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
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center">
							<table class="table table-responsive table-striped table-bordered table-condensed" style="max-width:0%; margin:0 auto;">
					            <thead>
					                <tr class="success">
					                    
					                    <th>Rebanadas</th>
					                    <th>Gramos</th>
					                </tr>
					            </thead>
					            <tbody>
					            	<?php
					            		for ($i=1; $i <=8 ; $i++) { ?>        		
							            	<tr id="row_<?php echo $i; ?>">
							            		<td><input onchange="pintaCoordenada('<?php echo "row_".$i."_td_1"; ?>');" class="input-sm2" type="text" id="row_<?php echo $i; ?>_td_1" /></td>
							            		<td><input onchange="pintaCoordenada('<?php echo "row_".$i."_td_2"; ?>');" class="input-sm2" type="text" id="row_<?php echo $i; ?>_td_2" /></td>
							            	</tr>
					            	<?php } ?>
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
			<div id="box_1_ejemplo_1" style="display: none;">
				<div class="pregunta"><p>1. La señora Rosales está a dieta. Va de compras al supermercado para comprar jamón de pavo y le dan 8 rebanadas que pesan 300 gramos en total.</p>
				</div>
				<div class="instruccion">
				<p>Completa la siguiente tabla que relaciona el número de rebanadas con el peso total.</p>
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo</label></p></div>		
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center">
							<table class="table table-responsive table-striped table-bordered table-condensed" style="max-width:0%; margin:0 auto;">
					            <thead>
					                <tr class="success">
					                    
					                    <th>Rebanadas</th>
					                    <th>Gramos</th>
					                </tr>
					            </thead>
					            <tbody>
					            	<?php
					            		for ($i=1; $i <=8 ; $i++) { ?>        		
							            	<tr id="row_<?php echo $i; ?>">
							            		<td><input onchange="pintaCoordenada('<?php echo "row_".$i."_td_1"; ?>');" class="input-sm2" type="text" id="row_<?php echo $i; ?>_td_1" /></td>
							            		<td><input onchange="pintaCoordenada('<?php echo "row_".$i."_td_2"; ?>');" class="input-sm2" type="text" id="row_<?php echo $i; ?>_td_2" /></td>
							            	</tr>
					            	<?php } ?>
					            </tbody>
					        </table>
					        <br>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
							<div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container1"></div>
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
			<div id="box_1_ejemplo_2" style="display: none;">
				<div class="pregunta"><p>1. La señora Rosales está a dieta. Va de compras al supermercado para comprar jamón de pavo y le dan 8 rebanadas que pesan 300 gramos en total.</p>
				</div>
				<div class="instruccion">
				<p>Completa la siguiente tabla que relaciona el número de rebanadas con el peso total.</p>
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo</label></p></div>		
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center">
							<table class="table table-responsive table-striped table-bordered table-condensed" style="max-width:0%; margin:0 auto;">
					            <thead>
					                <tr class="success">
					                    
					                    <th>Rebanadas</th>
					                    <th>Gramos</th>
					                </tr>
					            </thead>
					            <tbody>
					            	<?php
					            		for ($i=1; $i <=8 ; $i++) { ?>        		
							            	<tr id="row_<?php echo $i; ?>">
							            		<td><input onchange="pintaCoordenada('<?php echo "row_".$i."_td_1"; ?>');" class="input-sm2" type="text" id="row_<?php echo $i; ?>_td_1" /></td>
							            		<td><input onchange="pintaCoordenada('<?php echo "row_".$i."_td_2"; ?>');" class="input-sm2" type="text" id="row_<?php echo $i; ?>_td_2" /></td>
							            	</tr>
					            	<?php } ?>
					            </tbody>
					        </table>
					        <br>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
							<div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container2"></div>
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
			<div id="box_1_ejemplo_3" style="display: none;">
				<div class="pregunta"><p>1. La señora Rosales está a dieta. Va de compras al supermercado para comprar jamón de pavo y le dan 8 rebanadas que pesan 300 gramos en total.</p>
				</div>
				<div class="instruccion">
				<p>Completa la siguiente tabla que relaciona el número de rebanadas con el peso total.</p>
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo</label></p></div>		
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center">
							<table class="table table-responsive table-striped table-bordered table-condensed" style="max-width:0%; margin:0 auto;">
					            <thead>
					                <tr class="success">
					                    
					                    <th>Rebanadas</th>
					                    <th>Gramos</th>
					                </tr>
					            </thead>
					            <tbody>
					            	<?php
					            		for ($i=1; $i <=8 ; $i++) { ?>        		
							            	<tr id="row_<?php echo $i; ?>">
							            		<td><input onchange="pintaCoordenada('<?php echo "row_".$i."_td_1"; ?>');" class="input-sm2" type="text" id="row_<?php echo $i; ?>_td_1" /></td>
							            		<td><input onchange="pintaCoordenada('<?php echo "row_".$i."_td_2"; ?>');" class="input-sm2" type="text" id="row_<?php echo $i; ?>_td_2" /></td>
							            	</tr>
					            	<?php } ?>
					            </tbody>
					        </table>
					        <br>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
							<div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container3"></div>
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
			</div>
			<div id="btn_mas_ejemplos" style="display: none;">
				<button id="btn_box_1" class="btn btn-info" onclick="siguienteEjemplo();">Ver otro ejemplo</button>
			</div>
		</div>
	</div>
	<br><br>
  </div>

  <script type="text/javascript">
  	function pintaCoordenada(id_input){
		var arr_opt = id_input.split("_");
		var id_row = arr_opt[1];
		var point_x = $('#row_'+id_row+'_td_1').val();
		var point_y = $('#row_'+id_row+'_td_2').val();
		
		if(Number(point_x) && Number(point_y)){
			create_coordenada(point_x,point_y,id_row);
		}

  	} 
	
	function create_coordenada(point_x,point_y,id_row) {
	 		var applet = document.ggbApplet;
	 		console.log(applet);
	 		var point = '('+point_x+','+point_y+')';
	 		var draw_p = 'P'+id_row+' = '+ point;
	 		applet.evalCommand(draw_p); 
	 		//applet.evalCommand("s = Line[A, B]"); 
	}
  </script>

  <script type="text/javascript">
	/*validar floats tab*/

	function validarSoloNumero(elEvento){
		  // Variables que definen los caracteres permitidos
	  var permitidos = "0123456789";
	  var teclas_especiales = [8, 37, 39]; // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
	  // Obtener la tecla pulsada 
	  var evento = elEvento || window.event;
	  var codigoCaracter = evento.charCode || evento.keyCode;
	  var caracter = String.fromCharCode(codigoCaracter);
	 
	 // Comprobar si la tecla pulsada es alguna de las teclas especiales
	// (teclas de borrado y flechas horizontales)
	var tecla_especial = false;
	for(var i in teclas_especiales) {
		if(codigoCaracter == teclas_especiales[i]) {tecla_especial = true;break;}
	}

	
	// Comprobar si la tecla pulsada se encuentra en los caracteres permitidos o si es una tecla especial
	return permitidos.indexOf(caracter) != -1 || tecla_especial;

	}

	function validarSoloFlotante(elEvento,elElemento){
		console.log(elEvento);
	  // Variables que definen los caracteres permitidos
	  var permitidos = "0123456789.";
	  var teclas_especiales = [8, 37, 39,9]; // 9=tab, 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
	  //si la cadena ya tiene un punto no se deben permitir mas
	  if($('#'+elElemento).val().indexOf('.')!=-1)
	  	permitidos=permitidos.replace('.','');

	  // Obtener la tecla pulsada 
	  var evento = elEvento || window.event;
	  var codigoCaracter = evento.charCode || evento.keyCode;
	  var keyCaracter=evento.key;
	  var caracter = String.fromCharCode(codigoCaracter);
	 
	  // Comprobar si la tecla pulsada es alguna de las teclas especiales
	// (teclas de borrado y flechas horizontales)
	var tecla_especial = false;
	for(var i in teclas_especiales) {
		if(codigoCaracter == teclas_especiales[i]) {tecla_especial = true;break;}
	}

	// Comprobar si la tecla pulsada se encuentra en los caracteres permitidos o si es una tecla especial
	return permitidos.indexOf(caracter) != -1 || tecla_especial;

	}

	function siguienteEjemplo(box){
		console.log('#box_'+box+'_ejemplo_'+ejemplo);
		if(	$('#box_'+box+'_ejemplo_'+ejemplo).html() !=undefined ){
			$('#box_'+box+'_ejemplo_'+ejemplo).show();
			ejemplo++;
			if( $('#box_'+box+'_ejemplo_'+ejemplo).html() == undefined ){
				$('#btn_box_'+box).hide();
			}
		}
	}

	function ocultaElemento(id_elemento){
		if( $('#'+id_elemento).html() == undefined ){
			$('#'+id_elemento).hide();
		}
	}
	
	function muestraElemento(id_elemento){
		if( $('#'+id_elemento).html() == undefined ){
			$('#'+id_elemento).show();
		}
	}	
</script>