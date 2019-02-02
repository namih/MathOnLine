<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
	<p>Si queremos conocer ahora el tiempo que tardan 5 pintores en terminar el trabajo, podemos escribir una tabla como la siguiente:</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:20%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Número de pintores</th>
                    <th class="text-center">Tiempo (dias)</th>
                </tr>
            	<tr>
                    <td>
                        <b>2</b>
                    </td>
            		<td>
            			<b>4</b>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>5</b>
            		</td>
            		<td>
            			<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi></math>
            		</td>
            	</tr>
        </table><br />
        <p>Como sabemos que las cantidades están relacionadas de manera inversamente proporcional y que los productos deben ser iguales, podemos escribir la siguiente ecuación: 2(4) = 5(<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi></math>)</p>
        <p>Despeja para obtener el valor de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi></math>:</p>
        <h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>
            <semantics>
          <annotation-xml encoding="application/xhtml+xml">
            <input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="1" />
          </annotation-xml>
        </semantics>
        </mi><mi>
            <semantics>
          <annotation-xml encoding="application/xhtml+xml">
            <input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="2" />
          </annotation-xml>
        </semantics>
        </mi></mfrac></math></h4><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>