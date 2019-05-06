<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_tcp_form_gener.js"></script>
<div class="container-fluid">
  <div id="ejercicio1">
    <p>Escribe la ecuación cuadrática en la forma <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mi>c</mi></math></p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>10</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>9</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>10</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="1" size="4" /></p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" />
	<input type="button" class="btn btn-success btn-sm" value="MÁS EJERCICIOS" onclick="mostrar()" ><br /><br />
  </div>
  <div id="ejercicio2" style='display:none;'>
    <p>Escribe la ecuación cuadrática en la forma <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mi>c</mi></math></p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>3</mn><mi>x</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>5</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>3</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="2" size="4" /></p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" />
	<input type="button" class="btn btn-success btn-sm" value="MÁS EJERCICIOS" onclick="mostrar1()" ><br /><br />
  </div>
  <div id="ejercicio3" style='display:none;'>
    <p>Escribe la ecuación cuadrática en la forma <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mi>c</mi></math></p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>5</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>1</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>5</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="3" size="4" /></p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
  </div>
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
</div>