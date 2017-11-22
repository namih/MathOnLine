<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet2 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() {
        applet2.inject('applet_container2');	
    });
</script>

<!-- <script src="<?php echo base_url(); ?>statics/js/geogebraweb/web/web.nocache.js"></script> -->
<script type="text/javascript">
	 	function create_straight() {
	 		var applet = document.ggbApplet;
	 		var point_a = document.getElementById('point_a').value;
	 		var point_b = document.getElementById('point_b').value;
	 		var draw_a = 'A = '+ point_a;
	 		var draw_b = 'B = '+ point_b;
	 		applet.evalCommand(draw_a); 
	 		applet.evalCommand(draw_b); 
	 		//applet.evalCommand("s = Line[A, B]"); 
	 	}
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
		<div class="pregunta"><p>1. La señora Rosales está a dieta. Va de compras al supermercado para comprar jamón de pavo y le dan 8 rebanadas que pesan 300 gramos en total.</p>
		</div>
		<div class="instruccion">
		<p>Completa la siguiente tabla que relaciona el número de rebanadas con el peso total.</p>
		</div>
		<div align="left"><p><label>Ejemplos</label></p></div>		
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center">
			<table class="table table-responsive table-striped table-bordered table-condensed" style="max-width:0%; margin:0 auto;">
	            <thead>
	                <tr class="success">
	                    
	                    <th>Rebanadas</th>
	                    <th>Gramos</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<tr>
	            		<td>
	            			<input class="input-sm2" type="text" id="point_a" />
	            		</td>
	            		<td>
	            			<input class="input-sm2" type="text" id="point_b"/>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>
	            			<input class="input-sm2" type="text" id="reb_2" />
	            		</td>
	            		<td>
	            			<input class="input-sm2" type="text" id="gram_2" />
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>
	            			<input class="input-sm2" type="text" id="reb_3" />
	            		</td>
	            		<td>
	            			<input class="input-sm2" type="text"  id="gram_3"/>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>
	            			<input class="input-sm2" type="text" id="reb_4" />
	            		</td>
	            		<td>
	            			<input class="input-sm2" type="text"  id="gram_4"/>
	            		</td>
	            	</tr>
	            </tbody>
	        </table>
			
		<button onclick="create_straight()" type="button" class="btn btn-primary">Construir</button>
		</div>

		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
			
			<div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container2"></div>
		</div>		
	</div>
  </div>