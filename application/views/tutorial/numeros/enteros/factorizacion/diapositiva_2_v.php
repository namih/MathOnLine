<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="panel-body">
	<div>
		<p> Encuentra 6 diferentes rectángulos con un área de 12 unidades cuadradas. Completa la tabla con las medidas.</p>
	 	<p>Coloca el número correspondiente en la base y la altura para obtener el área igual a 12.</p>
	</div>
	Base : <input type="text" id="columncount" />
	Altura : <input type="text" id="rowcount" />
	<input type="button"  class="btn btn-success btn-sm" onclick="createTable();" value="Create Table" />
	<br/><br/><br />
	<div   class="col-md-6  col-xs-12" id="box" align="center">
	</div>	
	<div   class="col-md-6  col-xs-12 table-responsive" id="tab" align="center">
		
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
            		<td>
            			<input type="text" id="base1" />
            		</td>
            		<td>
            			<input  type="text" id="altura1" />
            		</td>
            		<td>
            			<input type="text" id="area1" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')"/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input type="text" id="base2" />
            		</td>
            		<td>
            			<input type="text" id="altura2" />
            		</td>
            		<td>
            			<input type="text" idid="area2" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input type="text"  id="base3"/>
            		</td>
            		<td>
            			<input type="text" id="altura3" />
            		</td>
            		<td>
            			<input type="text"  id="area3"/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input type="text"  id="base4"/>
            		</td>
            		<td>
            			<input type="text" id="altura4" />
            		</td>
            		<td>
            			<input type="text"  id="area4"/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input type="text"  id="base5"/>
            		</td>
            		<td>
            			<input type="text" id="altura5" />
            		</td>
            		<td>
            			<input type="text"  id="area5"/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input type="text"  id="base6"/>
            		</td>
            		<td>
            			<input type="text" id="altura6" />
            		</td>
            		<td>
            			<input type="text"  id="area6"/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="VERIFICAR" />
</div>
