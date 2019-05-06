<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
    <p>Si suponemos que la distancia entre México y Acapulco es de 350 kilómetros, ¿qué sucede con el tiempo de recorrido si la velocidad de un auto (auto 1) es dos veces la del otro (auto 2)?</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="1" /> El auto 2 tarda la mitad de tiempo en llegar a Acapulco que el auto 1<br />
                <input type="checkbox" id="2" /> El auto 1 tarda el doble de tiempo en llegar a Acapulco que el auto 2<br />
                <input type="checkbox" id="3" /> El auto 1 tarda la mitad de tiempo en llegar a Acapulco que el auto 2<br /><br />
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