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
                      <div class="panel panel-success tema_mes" >
                        <div class="panel-heading" align="center"><?php echo $value['mes']; ?></div>
                        <div class="panel-body">
                          <div class="titulo_tema_mes" style="background-image: url('<?php echo base_url().$value['image']; ?>');"><br>
                            <h3 class="titulo_tema"><?php echo $value['title']; ?> </h3><br><br>
                            <!--<img class="img-responsive" style="max-height: 200px; max-width: 80%; " src="<?php echo base_url().$value['image']; ?>"/>-->
                          </div>
                          <br><br>
                          <p style="text-indent: 20px;">
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
                <div class="panel-heading"><b>Pregunta de la semana</b></div>
                <div class="panel-body">
                    <div class="col-lg-12"><br>
                      <!--<form method="POST" onsubmit="return validacion();" action="#">-->
                      <form action="#">
                        <?php if(isset($question_week) && $question_week!=false){ ?>
                          <div class="form-group pregunta_home" id="preg_<?php echo $question_week['id_evaluation']; ?>">
                            <label><?php echo $question_week['question']; ?></label>
                          </div>
                          <div class="checkbox" id="respuestas" align="left">
                            <ul style="list-style: none;">
                              <?php foreach ($question_week['answers'] as $llave => $valor) { ?>
                                  <input type="radio" id="<?php echo $llave; ?>" name="answers_preg_home" value="<?php echo $valor['is_correct']; ?>" onclick="limpiarRespuesta();" ><label><li style="font-weight: bold;"><span style="font-weight: normal;"><?php echo $valor['description']; ?></span></li></label><br>
                              <?php } ?>
                            </ul>
                            <br>
                          </div>
                          <div id="error_preg_home"></div>
                          <?php } ?>
                        <div id="btn_respuesta_p" align="right" style="display: none;">
                          <!--<button type="submit" class="btn btn-success">Evaluar</button>-->
                          <a class="btn btn-success" onclick="validaRespuestaPregunta();" >Responder</a>
                        </div>
                      </form>
                    </div>                  
                </div>
              </div>              
            </div>
            <div class="col-md-4">
             <div class="panel panel-success tema_footer"  align="center">
                <div class="panel-heading"><b>¿Qué es Mate en Línea?</b></div>
                <div class="panel-body">
                  <div class="col-md-12">
                    <p align="justify"> 
                      Es una plataforma electrónica diseñada para apoyarte en los temas de <b>números, álgebra, geometría/trigonometría y geometría analítica</b>, que te ayudará a elevar tu nivel de competencia, ahora que inicias una carrera universitaria.<br><br>

                      En esencia, te ofrece <b>tutoriales y pruebas de evaluación</b> para que los tomes a tu ritmo y de la manera que juzgues más conveniente. Nadie supervisa tu desempeño. Nadie revisa tus resultados. Eres tú, exclusivamente tú, el o la que sabe cuánto has recorrido y qué resultados has obtenido.<br><br>

                      <b>Mate en Línea</b> también tiene otras secciones, como son <b>tema del mes</b>, la <b>pregunta semanal</b>, <b>material complementario</b>, diseñadas para que tu participación en el portal sea divertida y obtengas el mayor provecho.<br><br>

                      Los <b>tutoriales</b> son cortos para que repases aquellos temas de matemáticas acerca de los cuales tengas dudas. Puedes cursar estos <b>tutoriales</b> tantas veces como lo desees, resolviendo distintos ejercicios hasta que te sientas seguro.<br><br> 

                      Una vez que domines uno de los temas, puedes tomar las <b>pruebas de evaluación</b>, que son pruebas de 15 preguntas, siempre distintas, cuyo resultado únicamente tú conocerás. Las puedes tomar cuantas veces lo desees y te van a servir para ver cómo está tu nivel de matemáticas comparado con el resto de la población UAM.<br><br>

                       Dentro de <b>Mate en Línea</b> existen ligas en las cuales iras accediendo en cuanto vayas avanzando dentro de los <b>tutoriales y pruebas de evaluación</b>. Estas ligas se verán reflejadas en tu perfil adornando tu avatar de usuario con uno de los siguientes emblemas:<br><br>
                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                      <div><label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Liga IV</label></div>
                      <img class="img-responsive" src="statics/img/ligas/liga_IV.jpg" alt="Liga IV" title="Liga IV" align="absmiddle">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                      <div><label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Liga III</label></div>
                      <img class="img-responsive" src="statics/img/ligas/liga_III.jpg" alt="Liga III" title="Liga III" align="absmiddle">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                      <div><label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Liga II</label></div>
                      <img class="img-responsive" src="statics/img/ligas/liga_II.jpg" alt="Liga II" title="Liga II" align="absmiddle">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                      <div><label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Liga I</label></div>
                      <img class="img-responsive" src="statics/img/ligas/liga_I.jpg" alt="Liga I" title="Liga I" align="absmiddle">
                    </div>
                  </div>
                </div>
              </div>               
            </div>            
            <div class="col-md-4">
             <div class="panel panel-success tema_footer"  align="center">
                <div class="panel-heading"><b>Calendario escolar</b></div>
                <div class="panel-body">
                  <div class="col-sm-4 col-sm-offset-4 col-md-12 col-md-offset-0">
                    <a href="#" data-toggle="modal" data-target="#calendarModal" data-keyboard="true">  
                      <img class="calendario img-responsive" src="statics/img/otros/calendar-97868_1280.png" alt="Calendario escolar UAM" title="Calendario escolar UAM" align="absmiddle">
                    </a>
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
    <!-- Modal -->
    <div id="recuperaPassModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="panel panel-success">
            <div class="panel-heading">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Recuperar contraseña</h4>
              </div>
            </div>
            <div class="modal-body">
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                    <form id="login-form">
                      <div class="form-group">
                        <input type="text" name="email-user" id="email_user" tabindex="1" class="form-control" placeholder="Email del usuario" onKeyDown="return tab_btn(event,'envia_pass');" autofocus>
                      </div>
                    </form>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-lg-12" id="error_valid_form">
                  </div>
                </div>                  
              </div>
            </div>
            <div align="center" id="error_recover_pass"></div>
            <div align="center">
              <button type="button" id="envia_pass" onclick="recover_pass();" class="btn btn-success" onKeyDown="return tab_btn(event,'email_user');">Enviar contraseña</button><br><br>
            </div>
          </div>      
        </div>
      </div>
      <script type="text/javascript">
        function tab_btn(event,element){
            var t = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
            if (t == 9){
                $('#'+element).focus();
                return false;
              }
              return true;
          }
      </script>
    </div>
    <!-- Modal calendar-->
    <div id="calendarModal" class="modal fade" role="dialog" tabindex='-1'>
      <div class="modal-dialog" style="width: 80% !important;">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="panel panel-success">
            <div class="panel-heading">
              <div style="height: 10px !important;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
            </div>
            <div class="modal-body">
              <div class="panel-body">
                <div class="row">
                  <img src="statics/files/calendario_uam.png" width="100%" height="100%">
                </div>                  
              </div>
            </div>
          </div>      
        </div>
      </div>

    </div>     