<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_11.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="container-fluid">
	<div   class="col-md-12  col-xs-12" id="tab" align="center">
		
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
            			1
            		</td>
            		<td>
            			5
            		</td>
            		<td>
            			5
            		</td>
            	</tr>
            	<tr>
            		<td>
            			5
            		</td>
            		<td>
            			1
            		</td>
            		<td>
            			5
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
	</div>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="VERIFICAR" />
</div>
