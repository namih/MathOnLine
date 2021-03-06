<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_4.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<div>
		<p> Encuentra todos los diferentes rectángulos con un área de 10 unidades cuadradas. Completa la tabla con las medidas.</p>
	 	<p>Coloca el número correspondiente en la base y la altura para obtener el área igual a 10.</p>
	</div>
		Base : <input type="text" id="columncount" />
		Altura : <input type="text" id="rowcount" />
		<input type="button"  class="btn btn-success btn-sm" onclick="createTable();" value="Crear tabla" />
		<br/><br/><br />
	<div   class="col-md-6  col-xs-12" id="box" align="center">
	</div>	
	<div   class="col-md-6  col-xs-12 table-responsive" id="tab" align="center"> 
		 <table class="table table-striped table-bordered table-condensed " id="myTable" style="width:50%; margin:0 auto;">
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
            			<input class="input-sm2" type="text" readonly id="base1" value="10"/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" readonly id="altura1" value="1"/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" readonly id="area1" readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input  class="input-sm2" type="text" id="base2" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura2" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area2" readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base3"/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="area3" readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base4"/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="area4" readonly/>
            		</td>
            	</tr>
        </table>
	</div>
	<br /><br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
