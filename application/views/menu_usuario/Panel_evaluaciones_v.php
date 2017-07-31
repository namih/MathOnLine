            <div class="container-fluid"><br><br>
              <div id="all_evaluaciones" class="col-lg-12">
                <div id="main_panel_evaluaciones">
                  <div class="panel panel-success">
                    <div class="panel-heading" style="background-color: #ffffff !important;">
                          <center>
                            <h1>Módulo de evaluaciones</h1>
                          </center>
                    </div>
                    <div class="panel-body">
                      <?php if(isset($temas) && !empty($temas)){ 
                        foreach ($temas as $key => $value) { ?>
                          <div class="col-lg-6">
                            <a href="#" onclick="loadOptionMenu('<?php echo base_url() ?>Aux_mimi_c/carga_evaluacion_tema/<?php echo $value['id_tema']; ?>');">
                              <div class="panel panel-info">
                                <div class="panel-heading" style="background-color: #ffffff !important; min-height: 200px; padding: 40px; ">
                                      <center>
                                        <h1><?php echo $value['nombre']; ?></h1>
                                      </center>
                                </div>
                              </div>
                            </a>
                          </div>
                        <?php }
                      }?>
      				      </div>
      				    </div>            
                </div>
              </div>
            </div>