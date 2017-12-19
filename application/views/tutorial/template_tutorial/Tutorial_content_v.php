    <?php $avance=($paginador['actual']*100)/count($tutorial_content['diapositivas']);
    //echo count($tutorial_content['diapositivas']); echo "<pre>"; print_r($paginador['actual']); echo "</pre>"; ?>
    <div id="tutorial_content">
      <div class="col-md-12">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="container-fluid">          
              <center>
                <h1><?php echo $tutorial_content['nombre_tutorial']; ?></h1>
              </center>
                <div class="col-md-12">
                  <div class="panel panel-success"  align="center">
                    <div class="panel-heading"><b><?php echo $tutorial_content['diapositivas'][$paginador['actual']]['titulo']; ?></b></div>
                    <div class="panel-body">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="progress">
                           <div class="progress-bar progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $avance; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $avance; ?>%">Avance <?php echo round($avance,0); ?>%
                           </div>
                        </div>
                      </div>                      
                      <?php echo $diapositiva_actual; ?>
                    </div>
                    <?php if(isset($paginador)){ ?>
                      <div class="panel-footer" style="margin: 0px;" id="content_paginator">
                          <ul class="pagination">
                            <?php if($paginador['anterior']!=''){ ?>
                              <li><a href="<?php echo base_url(); ?>inicio_tutorial/<?php echo $id_tutorial ?>/<?php echo $paginador['anterior']; ?>/<?php echo $id_blog_actual; ?>/1" >&laquo; Anterior</a></li>
                           <?php } ?>
                            <?php if($paginador['siguiente']!=''){ ?>
                              <li><a href="<?php echo base_url(); ?>inicio_tutorial/<?php echo $id_tutorial ?>/<?php echo $paginador['siguiente']; ?>/<?php echo $id_blog_actual; ?>/2" >Siguiente &raquo;</a></li>
                            <?php } ?>
                          </ul>
                      </div>
                    <?php } ?>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div><!-- cierra el div #user_main_content que inicia despues del menú-->