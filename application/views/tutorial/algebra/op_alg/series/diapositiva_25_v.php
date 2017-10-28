<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>Ahora sí ya podemos resolver el problema que planteamos al inicio del tutorial de Sucesiones:</p>
		<p>Si colocamos $1.00 en el primer cuadro de un tablero de ajedrez, $2.00 en el segundo cuadro, $4.00 en el tercero, y continuamos duplicando la cantidad de dinero hasta llenar el tablero de 64 cuadros, ¿cuánto dinero habrá en todo el tablero?</p>
		<p><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" /> trillones de pesos</p>
		<img class="img-responsive" width="35%" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/sucesiones/diapositiva_1.png" align="center"/>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
	</div>
 </div>		
