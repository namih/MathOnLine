    <div id="tutorial_content">
      <div class="col-md-12">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="container-fluid">
              <center>
                <h1><?php echo $tutorial_content['nombre_tutorial']; ?></h1>
              </center>
                <div class="col-md-12">
                  <div class="panel panel-success tema_footer"  align="center">
                    <div class="panel-heading"><b><?php echo $tutorial_content['diapositivas'][$paginador['actual']]['titulo']; ?></b></div>
                    <div class="panel-body">
                      <?php echo $tutorial_content['diapositivas'][$paginador['actual']]['vista']; ?>
                    </div>
                    <?php if(isset($paginador)){ ?>
                      <div class="panel-footer" style="margin: 0px;">
                          <ul class="pagination">
                            <?php if($paginador['anterior']!=''){ ?>
                              <li><a href="#">&laquo; Aterior</a></li>
                            <?php } ?>
                            <?php if($paginador['siguiente']!=''){ ?>
                              <li><a href="#">Siguiente &raquo;</a></li>
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