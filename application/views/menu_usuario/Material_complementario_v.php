	<div class="col-md-10 col-md-offset-1">
 	    <center><h2>Material complementario</h2></center>
	    <p>En esta sección podras consultar...</p>

	    <ul class="nav nav-tabs">
	      <li class="active"><a data-toggle="tab" href="#ligas_interes">Ligas de interes</a></li>
	      <li><a data-toggle="tab" href="#bibliografia">Bibliografía</a></li>
	    </ul>

	    <div class="tab-content"><br><br>
	      <div id="ligas_interes" class="tab-pane fade in active">
	        <?php if(isset($ligas_interes) && $ligas_interes!=false){ 
	          foreach ($ligas_interes as $key => $value) { ?>
	            <div class="row link">
	              <div class="col-md-10 col-md-offset-1">
	                <a href="<?php echo $value['link']; ?>" target="_blanc" style="text-decoration: none;"><h4><?php echo $value['title']; ?></h4>
	                </a>
	                <p class="col-md-9" align="justify" style="text-decoration: none; color: #000000;"><?php echo $value['description']; ?> </p>
	              </div>
	            </div>
	            <br>
	          <?php   } 
	        } ?>
	      </div>
	      <div id="bibliografia" class="tab-pane fade">
	        <?php if(isset($bibliografia) && $bibliografia!=false){ 
	          foreach ($bibliografia as $key => $value) { ?>
	            <div class="row link">
	              <div class="col-md-10 col-md-offset-1">
	              	<a href="#" style="text-decoration: none;"><h4><?php echo $value['title']; ?></h4>
	                </a>
	                <p align="justify" style="text-decoration: none; color: #000000;"><?php if(isset($value['description'])) echo $value['description']; ?> </p>
	                <p>
	                    <label>Autor: </label> <span> <?php echo $value['author']; ?></span><br>
	                    <label>Lugar: </label> <span> <?php echo $value['place_publication']; ?></span><br>
	                    <label>Editorial: </label> <span> <?php echo $value['editorial']; ?></span><br>
	                    <label>Año: </label> <span> <?php echo $value['year']; ?></span><br>
	                </p>
	              </div>
	            </div>
	            <br>
	          <?php   } 
	        } ?>
	      </div>
	    </div>
	</div>