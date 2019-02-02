<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Número de pintores (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>)</th>
                    <th class="text-center">Tiempo (dias) (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math>)</th>
                </tr>
            	<tr>
                    <td>
                        <b>1</b>
                    </td>
            		<td>
            			<b>8</b>
            		</td>
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
                        <b>3</b>
                    </td>
                    <td>
                        <b>8/3</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>4</b>
                    </td>
                    <td>
                        <b>2</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>5</b>
                    </td>
                    <td>
                        <b>8/5</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>6</b>
                    </td>
                    <td>
                        <b>8/6</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>7</b>
                    </td>
                    <td>
                        <b>8/7</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>8</b>
                    </td>
                    <td>
                        <b>1</b>
                    </td>
                </tr>
        </table><br />
        <p>¿Qué observas en la tabla?</p>
        <p>Elige la ecuación que relaciona el número de pintores (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>) con el tiempo que tardan en pintar el muro (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math>).</p>
    <form method="post" action="#">
            <table>
                <td align="left">
                    <input type="checkbox" id="1" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>8</mn><mi>x</mi></math><br />
                    <input type="checkbox" id="2" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>8</mn></math><br />
                    <input type="checkbox" id="2" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>8</mn><mi>x</mi></mfrac></math><br />
                    <input type="checkbox" id="4" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>1</mn><mrow><mi>x</mi></mrow></mfrac><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>8</mn></math><br /><br />
                </td>
            </table>
    </form>
    <p>¿Cuánto tiempo tardarán 9 pintores en pintar el muro? <input type="text" style="text-align: center; color: black;" id="1" size="4" /> dia.</p>
    <p>¿Y 10 pintores? <input type="text" style="text-align: center; color: black;" id="2" size="4" /> dia.</p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>