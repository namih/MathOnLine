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
        <p>Si se aumenta el diámetro de la manguera (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>d</mi></math>) al triple, el tiempo (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi></math>):</p>
			<form method="post" action="#">
				<table>
					<td align="left">
						<input type="checkbox" id="1" /> Aumenta al doble<br />
						<input type="checkbox" id="2" /> Disminuye a la tercera parte<br />
						<input type="checkbox" id="3" /> Aumenta al triple<br /><br />
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