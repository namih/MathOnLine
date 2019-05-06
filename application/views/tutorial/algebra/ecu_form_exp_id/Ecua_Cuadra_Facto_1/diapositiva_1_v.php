<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_facto_1.js"></script>
<div class="container-fluid">
	<p>Cuando tenemos una ecuación cuadrática del tipo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>, una manera de encontrar los valores de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> es <b>factorizar</b> la expresión <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>x</mi></math>.</p>
    <p>Si no recuerdas cómo factorizar una expresión con factor común consulta la primera parte de este tutorial.</p>
    <p>Completa lo que falta:</p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mi>x</mi><mo>(</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>
        <semantics>
          <annotation-xml encoding="application/xhtml+xml">
            <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="1" />
          </annotation-xml>
        </semantics>
    </mi><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>