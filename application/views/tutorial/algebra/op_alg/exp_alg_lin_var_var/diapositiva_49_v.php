<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_var_var/var_variables.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>Selecciona los valores para <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>,</mo><mo>&#xA0;</mo><mi>m</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi></math> necesarios para formar una figura que tenga el valor que se indica:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>n</mi></math></p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
					<div  class=" col-lg-4 col-md-4  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="uno" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<p id="n"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
						</div>					
						<div class="btn-group" id="opciones1">
							<button onclick="decrementar_49_1()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_1()" type="button" class="btn btn-info">></button>
						</div>
					</div>
					<div  class=" col-lg-4 col-md-4  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="dos" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m.png"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<p id="m"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
						</div>					
						<div class="btn-group" id="opciones2">
							<button onclick="decrementar_49_2()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_2()" type="button" class="btn btn-info">></button>
						</div>
					</div>
					<div  class=" col-lg-4 col-md-4  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="tres" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<p id="c"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
						</div>					
						<div class="btn-group" id="opciones3">
							<button onclick="decrementar_49_3()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_3()" type="button" class="btn btn-info">></button>
						</div>
					</div>		
		</div>
		<div class="btn-group" id="opciones4">
			<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
		</div>
		<div class="btn-group" id="opciones5">
			<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br />
		</div>
	</div>
	
	<div id="ejercicio2" style='display:none;'>
		<p>Selecciona los valores para <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>,</mo><mo>&#xA0;</mo><mi>m</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi></math> necesarios para formar una figura que tenga el valor que se indica:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mi>n</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>m</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn></math></p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
					<div  class=" col-lg-4 col-md-4  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="uno2" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<p id="n2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
						</div>					
						<div class="btn-group" id="opciones1">
							<button onclick="decrementar_49_1()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_1()" type="button" class="btn btn-info">></button>
						</div>
					</div>
					<div  class=" col-lg-4 col-md-4  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="dos2" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m.png"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<p id="m2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
						</div>					
						<div class="btn-group" id="opciones2">
							<button onclick="decrementar_49_2()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_2()" type="button" class="btn btn-info">></button>
						</div>
					</div>
					<div  class=" col-lg-4 col-md-4  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="tres2" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<p id="c2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
						</div>					
						<div class="btn-group" id="opciones3">
							<button onclick="decrementar_49_3()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_3()" type="button" class="btn btn-info">></button>
						</div>
					</div>		
		</div>
		<div class="btn-group" id="opciones4">
			<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
		</div>
		<div class="btn-group" id="opciones5">
			<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br />
		</div>
	</div>
	<div id="ejercicio3" style='display:none;'>
		<p>Selecciona los valores para <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>,</mo><mo>&#xA0;</mo><mi>m</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi></math> necesarios para formar una figura que tenga el valor que se indica:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>(</mo><mi>n</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mo>)</mo><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mo>(</mo><mi>m</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>1</mn><mo>)</mo></math></p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
					<div  class=" col-lg-4 col-md-4  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="uno3" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<p id="n3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
						</div>					
						<div class="btn-group" id="opciones1">
							<button onclick="decrementar_49_1()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_1()" type="button" class="btn btn-info">></button>
						</div>
					</div>
					<div  class=" col-lg-4 col-md-4  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="dos3" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m.png"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<p id="m3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
						</div>					
						<div class="btn-group" id="opciones2">
							<button onclick="decrementar_49_2()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_2()" type="button" class="btn btn-info">></button>
						</div>
					</div>
					<div  class=" col-lg-4 col-md-4  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="tres3" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<p id="c3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
						</div>					
						<div class="btn-group" id="opciones3">
							<button onclick="decrementar_49_3()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_3()" type="button" class="btn btn-info">></button>
						</div>
					</div>		
		</div>
		<div class="btn-group" id="opciones4">
			<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
		</div>
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>