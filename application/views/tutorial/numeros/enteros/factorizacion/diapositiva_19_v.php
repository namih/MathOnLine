<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_19.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="panel-body">
	<div>
		<p> Ahora vamos a encontrar todos los factores de 18 de una manera ordenada.
			Para hacerlo, podemos escribir las parejas de 2 enteros que al  multiplicarse den 18 en orden, empezando con el 1:
		</p>
	 	<p>1 X 18 = 18</p>
	</div>
	<br/><br/><br />
	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<p>Después nos preguntamos: ¿Es el 2 un factor de 18?.</p>
		 <form method="post" action="#">
			<table>
				<td align="left">
					<form>
					    <div class="radio">
					      <label><input type="radio" id="optradio" name="optradio" value="S" onclick="valida()">SI</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" id="optradio" name="optradio" value="N" onclick="valida()">NO</label>
					    </div>
					</form>
				</td>
		  	</table>
		</form>
	</div>	
	<div class="col-md-6  col-xs-12 table-responsive" id="tab" align="center">
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th>Num 1</th>
                    <th>Num 2</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area1" readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" />
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area2"  readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area3" readonly/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
