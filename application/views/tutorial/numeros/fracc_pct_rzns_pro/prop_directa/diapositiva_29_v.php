<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Resuelve con regla de 3:</p>
    <p>En el supermercado Los Ahorros, Marcos pagó $28.50 por 3 kilos de manzanas Gala. ¿Cuántos habria pagado por 5 kilos?</p>
			<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:13%; margin:0 auto;">
				<tr class="success">
                    <th class="text-center">Kilos</th>
                    <th class="text-center">Precio</th>
                </tr>
                <tr>
                    <td>
                        <b>3</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="1" size="3" /></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="2" size="3" />
                    </td>
                    <td>
                        <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math></b>
                    </td>
                </tr>
			</table></br>
    <h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>
        <semantics>
          <annotation-xml encoding="application/xhtml+xml">
            <input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="3" />
          </annotation-xml>
        </semantics>
    </mi><mo>(</mo><mi>
    	<semantics>
		  <annotation-xml encoding="application/xhtml+xml">
			<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="4" />
		  </annotation-xml>
		</semantics>
    </mi><mo>)</mo></mrow><mi>
    	<semantics>
		  <annotation-xml encoding="application/xhtml+xml">
			<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="5" />
		  </annotation-xml>
		</semantics>
    </mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center; color: black;" id="6" size="3" /></h4><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>