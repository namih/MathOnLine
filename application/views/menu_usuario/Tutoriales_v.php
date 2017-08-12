            <div class="container-fluid">
              <center>
                <h1>Tutoriales</h1>
              </center>
              <div id="all_tutorial" class="col-lg-12">
                <div id="main_temas">
                  <div class="list-group panel">
                    <?php if(isset($temas) && $temas!=false){ 
                      foreach ($temas as $key => $tema) { ?>
                        <a href="#main_tema_<?php echo $tema['id_tema']; ?>" class="tema list-group-item list-group-item-success collapsed" data-toggle="collapse" data-parent="#main_temas" aria-expanded="false"><?php echo $tema['nombre']; ?> <i class="fa fa-chevron-down"></i></a>
                        <div class="collapse" id="main_tema_<?php echo $tema['id_tema']; ?>">
                          <?php if(isset($tema['subtemas']) && $tema['subtemas']!=false){ 
                            foreach ($tema['subtemas'] as $llave => $subtema) { ?>
                              <a href="#subtema_<?php echo $subtema['id_subtema']; ?>" class="subtema list-group-item" data-toggle="collapse" data-parent="#main_tema_<?php echo $subtema['id_subtema']; ?>">
                                <?php echo $subtema['nombre']; ?> <i class="fa fa-caret-down"></i><span class="badge"><?php echo count($subtema['tutoriales']); ?></span>
                              </a>
                                <div class="collapse list-group-submenu" id="subtema_<?php echo $subtema['id_subtema']; ?>">
                                  <?php if(isset($subtema['tutoriales']) && $subtema['tutoriales']!=false){ 
                                    foreach ($subtema['tutoriales'] as $id_tutorial => $dts_tutorial) { ?>
                                      <div href="#" class="tutorial list-group-item <?php if($dts_tutorial['concluido']==1) echo "list-group-item-warning"; ?>" data-parent="#subtema_<?php echo $subtema['id_subtema']; ?>" >
                                        <?php echo $dts_tutorial['nombre']; ?>
                                        <?php if($dts_tutorial['concluido']==1){ ?>
                                          <a style="float: right;"><span class="badge" style="background-color: #61bf74;"><i class="fa fa-check" aria-hidden="true"></i></span></a> 
                                        <?php }else{ ?>
                                          <a style="float: right;"><span class="badge" style="background-color: #cccccc;"><i class="fa fa-flag-o" aria-hidden="true"></i></span></a> 
                                        <?php } ?>
                                      </div>
                                    <?php } 
                                  }?>
                                </div>
                            <?php } 
                          }?>
                        </div>
                      <?php } 
                    }?>
                  </div>
                </div>
              </div>
            </div>