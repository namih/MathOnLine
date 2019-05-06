<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_tcp_form_gener.js"></script>
<div class="container-fluid">
  <div id="ejercicio1">
    <p>A partir del TCP, escribe el binomio al cuadrado.</p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>4</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>
      <semantics>
          <annotation-xml encoding="application/xhtml+xml">
            <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="1" />
          </annotation-xml>
        </semantics>
    </mi><msup><mo>)</mo><mn>2</mn></msup></math></p>
  	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" />
    <input type="button" class="btn btn-success btn-sm" value="MÁS EJERCICIOS" onclick="mostrar()" ><br /><br />
  </div>
  <div id="ejercicio2" style='display:none;'>
    <p>A partir del TCP, escribe el binomio al cuadrado.</p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>10</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>25</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>
      <semantics>
          <annotation-xml encoding="application/xhtml+xml">
            <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="2" />
          </annotation-xml>
        </semantics>
    </mi><msup><mo>)</mo><mn>2</mn></msup></math></p>
    <input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" />
    <input type="button" class="btn btn-success btn-sm" value="MÁS EJERCICIOS" onclick="mostrar1()" ><br /><br />
  </div>
  <div id="ejercicio3" style='display:none;'>
    <p>A partir del TCP, escribe el binomio al cuadrado.</p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>16</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>64</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>
      <semantics>
          <annotation-xml encoding="application/xhtml+xml">
            <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="3" />
          </annotation-xml>
        </semantics>
    </mi><msup><mo>)</mo><mn>2</mn></msup></math></p>
    <input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
  </div>
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
</div>