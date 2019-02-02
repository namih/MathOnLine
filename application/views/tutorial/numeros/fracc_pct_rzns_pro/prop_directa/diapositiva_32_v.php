<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>¿Cuál será la estatura de una persona cuya sombra mide 2.25 m en Egipto a la misma hora que la sombra de la vara utilizada por Thales media 1.50 m?</p>
    <p>Resuelve con regla de tres.</p>
			<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:30%; margin:0 auto;">
				<tr class="success">
                    <th class="text-center"></th>
                    <th class="text-center">Altura de</th>
                    <th class="text-center">Longitud de la sombra de</th>
                </tr>
                <tr>
                    <td class="success">
                        <b>vara</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="1" size="3" /></br>
                    </td>
                    <td>
                        <b>1.50 m</b>
                    </td>
                </tr>
                <tr>
                    <td class="success">
                        <b>persona</b>
                    </td>
                    <td>
                        <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math></b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="2" size="3" />
                    </td>
                </tr>
			</table></br>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>1m</mi><mo>(</mo><mi>
    	<semantics>
		  <annotation-xml encoding="application/xhtml+xml">
			<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="3" />
		  </annotation-xml>
		</semantics>
    </mi><mo>)</mo></mrow><mi>
    	<semantics>
		  <annotation-xml encoding="application/xhtml+xml">
			<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="4" />
		  </annotation-xml>
		</semantics>
    </mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center; color: black;" id="5" size="4" /> m</p><br />
    <p>¿Y si la sombra de la persona midiera 3 m? <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math></math><input type="text" style="text-align: center; color: black;" id="6" size="4" /></p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>