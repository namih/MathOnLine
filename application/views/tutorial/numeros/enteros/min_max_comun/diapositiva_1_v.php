 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_1.js"></script>
 <link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="container-fluid">
	<div class="col-md-12  col-xs-12" id="box" align="center">
		<p>Otra manera de escribir un número como el producto de factores primos es mediante una tabla y preguntándonos si el número es divisible entre los primos consecutivos, empezando desde el 2:</p>
		<p>¿Es divisible el 150 entre 2?</p>
		<!--Imagen de arbol -->
		 <div class="btn-group-vertical" align="left">
		    <button type="button" class="btn btn-default">SI</button>
		    <button type="button" class="btn btn-default">NO</button>
  		</div>

	<div   class="col-md-6  col-xs-12 table-responsive" id="tab" align="center">
		
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:20%; margin:0 auto;">
            <thead>
                <tr class="success">
                    
                    <th>ALTURA</th>
                    <th>AREA</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')"/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class="input-sm2" type="text" id="altura2" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" idid="area2" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class="input-sm2" type="text" id="altura3" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text"  id="area3"/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class="input-sm2" type="text" id="altura4" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text"  id="area4"/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br/><br/><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="VERIFICAR" />
	</div>
  </div>		

