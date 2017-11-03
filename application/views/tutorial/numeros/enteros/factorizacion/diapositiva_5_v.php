<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_5.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros3.css">
<div class="container-fluid">
	<div   class="col-md-12  col-xs-12 table-responsive" id="tab" align="center">
		
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>BASE</th>
                    <th>ALTURA</th>
                    <th>AREA</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<b>10</b>
            		</td>
            		<td class="modif">
            			<b>1</b>
            		</td>
            		<td class="modif">
            			<b>10</b>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<b>5</b>
            		</td>
            		<td class="modif">
            			<b>2</b>
            		</td>
            		<td class="modif">
            			<b>10</b>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<b>2</b>
            		</td>
            		<td class="modif">
            			<b>5</b>
            		</td>
            		<td class="modif">
            			<b>10</b>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<b>1</b>
            		</td>
            		<td class="modif">
            			<b>10</b>
            		</td>
            		<td class="modif">
            			<b>10</b>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<div>
		<p> Escribe cada uno de los diferentes números que anotaste en las columnas de la tabla (sin repetir).</p>
		<br />
		<input class"input-sm2" type="text"  id="1"/>
		<input class"input-sm2" type="text"  id="2"/>
		<input class"input-sm2" type="text"  id="3"/>
		<input class"input-sm2" type="text"  id="4"/>
	</div>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
