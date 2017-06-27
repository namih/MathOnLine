      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
          <hr style="height: 2px; border: 0; color: #666; background-color: #008c00; margin-top: 0px !important;  margin-bottom: 0px !important; ">
      </div> 
    <div id="contentInicio">
      <div class="col-md-12"><br>
        <div class="row">
          <div class="col-md-8">
          <?php if(isset($themes) && $themes!=false){ ?>
            <center><h3>Tema del mes</h3></center>
            <div id="temaMes" class="carousel slide" data-ride="carousel" data-interval="false">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#temaMes" data-slide-to="0"></li>
                <li data-target="#temaMes" data-slide-to="1"  class="active"></li>
                <li data-target="#temaMes" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <?php if(isset($themes) && $themes!=false){ 
                  foreach ($themes as $key => $value) { ?>
                    <div class="item <?php if($key==1) echo "active"; ?>">
                      <div class="panel panel-success tema_mes"  align="center">
                        <div class="panel-heading" align="center"><?php echo $value['mes']; ?></div>
                        <div class="panel-body">
                          <h3><?php echo $value['title']; ?> </h3><br><br>
                          <p>
                            <img src="<?php echo $value['image']; ?>"/>
                          </p>
                          <p>
                            <?php echo $value['description']; ?> 
                          </p>
                        </div>
                      </div>
                    </div>
                <?php } }?>
              </div>
            </div>                     
          <?php } ?>
          </div>
          <div class="col-md-4">
            <div class="col-md-11 col-md-offset-1">
              <div class="panel panel-login">
                <div class="panel-heading">
                  <div class="col-md-12" align="center">
                    <h1>BIENVENIDO</h1>
                    <hr>
                  </div>
                </div>
                <!--$_SERVER['DOCUMENT_ROOT'].str_replace('//','/',dirname($_SERVER['SCRIPT_NAME']).'/')-->
                <form method="post" if="form_login" role="form" action="<?php echo base_url('login'); ?>">
                  <div class="panel-body">
                    <div class="row">
                        <div class="row">
                          <div class="col-md-12 col-sm-12">
                            <div class="col-md-4 col-sm-4" align="center"><img class="img-login img-responsive" width="75%" src="<?php echo base_url(); ?>statics/img/iniciar_session/people-145129_1280.png"/></div>
                            <div class="col-md-8 col-sm-8">
                                <div class="form-group">
                                  <input type="text" name="username-user" id="username_user" tabindex="1" class="form-control" placeholder="Nombre del usuario">
                                </div>
                                <div class="form-group">
                                  <input type="password" name="password-user" id="password_user" tabindex="2" class="form-control" placeholder="Contraseña">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12" id="error_valid_form">
                          </div>
                          <div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4">
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-12" align="center">
                                    <button type="submit" class="btn btn-success">Iniciar</button>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="text-center">
                                      <a href="#" data-toggle="modal" data-target="#recuperaPassModal">Recuperar contraseña</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="text-center">
                                      <a href="<?php echo base_url(); ?>registro">Registrar</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4">
             <div class="panel panel-success tema_footer"  align="center">
                <div class="panel-heading">Pregunta de la semana</div>
                <div class="panel-body">
                  ¿Para ser genio hay que estar loco?<br><br>
                  Pues sí. La evidencia científica vincula a los maniaco-depresivos y bipolares con la creatividad y un alto coeficiente intelectual. Un estudio realizado por expertos del Instituto de Psiquiatría de King`s College de Londres y el Instituto Karolinska en Estocolmo concluye que los estudiantes con... <a href="#">Ver mas</a>
                </div>
              </div>              
            </div>
            <div class="col-md-4">
             <div class="panel panel-success tema_footer"  align="center">
                <div class="panel-heading">Que es mate en linea?</div>
                <div class="panel-body">
                  <p>Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro.<br><br>

                  Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca.<br>
                  </p>
                </div>
              </div>               
            </div>            
            <div class="col-md-4">
             <div class="panel panel-success tema_footer"  align="center">
                <div class="panel-heading">Calendario escolar</div>
                <div class="panel-body">
                  <div class="col-sm-4 col-sm-offset-4 col-md-12 col-md-offset-0">
                    <img class="calendario img-responsive" src="statics/img/calendario_uam/calendar-97868_1280.png" alt="Calendario escolar UAM" title="Calendario escolar UAM" align="absmiddle">
                  </div>
                  <div class="col-sm-12 col-md-12">
                    <div class="col-sm-12 col-md-12 col-lg-6 form-group">
                      <a class="btn btn-success btn-block" href="statics/files/calendario_uam.doc">Descargar Word</a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 form-group">
                      <a class="btn btn-success btn-block" href="statics/files/calendario_uam.pdf" target="_blanc">Descargar PDF</a>
                    </div>
                  </div>
                </div>
              </div>                
            </div>
          </div>
        </div>
      </div>
    </div>