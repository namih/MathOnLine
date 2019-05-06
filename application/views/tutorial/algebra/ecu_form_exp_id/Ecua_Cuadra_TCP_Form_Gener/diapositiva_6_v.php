<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_tcp_form_gener.js"></script>
<div class="container-fluid">
    <p>Nuevamente a partir del trinomio, intenta escribir un binomio al cuadrado. Prueba con varios números y observa lo que sucede al efectuar el producto.</p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>
      <semantics>
          <annotation-xml encoding="application/xhtml+xml">
            <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="1" />
          </annotation-xml>
        </semantics>
    </mi><msup><mo>)</mo><mn>2</mn></msup></math></p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="SIMPLIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>