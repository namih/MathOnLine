<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_tcp_form_gener.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>5</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
    		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="1" size="4" /> &emsp;&emsp; <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="2" size="4" /> &emsp;&emsp; <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="3" size="4" /></p>
    		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>b</mi><mn>2</mn></msup><mo>-</mo><mn>4</mn><mo>(</mo><mi>a</mi><mo>)</mo><mo>(</mo><mi>c</mi><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mi>
	      		<semantics>
	              <annotation-xml encoding="application/xhtml+xml">
	                <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="4" />
	              </annotation-xml>
	            </semantics>
    		</mi><msup><mo>)</mo><mn>2</mn></msup><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>4</mn><mo>(</mo><mi>
	      		<semantics>
	              <annotation-xml encoding="application/xhtml+xml">
	                <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="5" />
	              </annotation-xml>
	            </semantics>
    		</mi><mo>)</mo><mo>(</mo><mi>
	      		<semantics>
	              <annotation-xml encoding="application/xhtml+xml">
	                <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="6" />
	              </annotation-xml>
	            </semantics>
    		</mi><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mi>
	      		<semantics>
	              <annotation-xml encoding="application/xhtml+xml">
	                <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="7" />
	              </annotation-xml>
	            </semantics>
    		</mi></math></p>
    		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><msup><mi>b</mi><mn>2</mn></msup><mo>-</mo><mn>4</mn><mo>(</mo><mi>a</mi><mo>)</mo><mo>(</mo><mi>c</mi><mo>)</mo></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msqrt><mi>
    			<semantics>
	              <annotation-xml encoding="application/xhtml+xml">
	                <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="8" />
	              </annotation-xml>
	            </semantics>
    		</mi></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>&#xB1;</mo></math></p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
    		<p>Escribe los valores de los coeficientes <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi></math>, <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi></math>.</p>
    		<p>Calcula el valor del discriminante, es decir, la expresión <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>b</mi><mn>2</mn></msup><mo>-</mo><mn>4</mn><mo>(</mo><mi>a</mi><mo>)</mo><mo>(</mo><mi>c</mi><mo>)</mo></math>.</p>
    		<p>Observa que, debido a que el discriminante la raóz es <b>negativo</b>, la raíz cuadrada no tiene solución en los números reales.</p>
    		<p>Debemos concluir entonces que la ecuación <b>no tiene solución real</b>.</p>
		</div>	
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>