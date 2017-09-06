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
	            <div class="row">
	              <div class="col-md-10 col-md-offset-1" style="border: solid 1px;">
	                <center><h2 style="text-decoration: underline;"><?php echo $value['title']; ?></h2></center>
	                <div class="col-md-3" align="right" style="margin-bottom: 10px;">
	                	<?php if(isset($value['book_image']) && trim($value['book_image'])!=''){ ?>
	                  		<img class="img-responsive" src="<?php echo base_url().$value['book_image']; ?>">
	                  	<?php }else{ ?>
	                  		<i class="fa fa-book" aria-hidden="true" style="font-size: 12em; color: #cccccc;"></i>
	                  	<?php } ?>	                
	                </div>
	                <div class="col-md-9" align="left"><br> 
	                  <ul style="list-style: circle; font-size: 20px;">
	                    <li><label class="for">Autor: </label> <span> <?php echo $value['author']; ?></span></li>
	                    <li><label>Lugar: </label> <span> <?php echo $value['place_publication']; ?></span></li>
	                    <li><label>Editorial: </label> <span> <?php echo $value['editorial']; ?></span></li>
	                    <li><label>Año: </label> <span> <?php echo $value['year']; ?></span></li>
	                  </ul> 
	                </div>
	              </div>
	            </div>
	            <br>
	          <?php   } 
	        } ?>
	      </div>
	    </div>
	</div>