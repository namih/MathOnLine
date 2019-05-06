<div class="container-fluid">
	<p>Se quiere llenar un tanque de 200 litros y se esta verificando la calidad de la bomba de agua. Para ello, se utilizan mangueras con diferetes diámentros
		 (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>d</mi></math>) y se mide el tiempo necesario (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi></math>) 
		 para llenar el tanque <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>L</mi></math>. Los datos se dan en la tabla:</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
            	<tr>
                    <td class="success">
                        <b>Diámetro (pulgadas)</b>
                    </td>
            		<td>
            			<b>0.5</b>
            		</td>
            		<td>
            			<b>1</b>
            		</td>
            		<td>
            			<b>3</b>
            		</td>
            		<td>
            			<b>6</b>
            		</td>
            	</tr>
            	<tr>
                    <td class="success">
                        <b>Tiempo (min)</b>
                    </td>
            		<td>
            			<b>60</b>
            		</td>
            		<td>
            			<b>30</b>
            		</td>
            		<td>
            			<b>10</b>
            		</td>
            		<td>
            			<b>5</b>
            		</td>
            	</tr>
        </table><br />
        <p>¿Cuánto tiempo tardaría en llenarse el tanque con una manguera de 2 pulgardas de diámetro?</p>
			<form method="post" action="#">
				<table>
					<td align="left">
						<input type="checkbox" id="1" /> 60 minutos<br />
						<input type="checkbox" id="2" /> 20 minutos<br />
						<input type="checkbox" id="3" /> 15 minutos<br /><br />
					</td>
				</table>
			</form>
        <p>Eñoge una ecuación que relacione el diámetro de la manguera (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>d</mi></math>) con el tiempo de llegano (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi></math>):</p>
            <form method="post" action="#">
                <table>
                    <td align="left">
                        <input type="checkbox" id="4" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>30</mn><mi>d</mi></math><br />
                        <input type="checkbox" id="5" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>d</mi><mn>30</mn></mfrac></math><br />
                        <input type="checkbox" id="6" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>30</mn><mi>d</mi></mfrac></math><br /><br />
                    </td>
                </table>
            </form>
        <p>En esta situación, el tiempo y el diámetro de la manguera están relacionados de manera:</p>
            <form method="post" action="#">
                <table>
                    <td align="left">
                        <input type="checkbox" id="7" /> Directamente proporcional<br />
                        <input type="checkbox" id="8" /> Inversamente proporcional<br /><br />
                    </td>
                </table>
            </form>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>