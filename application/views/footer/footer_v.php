     <!-- Modal Contacto -->
      <div id="contacto" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Contacto</h4>
                </div>
              </div>
              <div class="modal-body">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <form id="login-form">
                        <div class="form-group">
                          <input type="text" name="email-user" id="email" tabindex="1" class="form-control" placeholder="Correo electrónico" onKeyDown="return tab_btn(event,'comentario');">
                          <br/>
                          <textarea type="text" class="form-control" rows="8" id="comentario" placeholder="Comentario" onKeyDown="return tab_btn(event,'envia_contacto');"></textarea>
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
              <div align="center">
                <button type="button" id="envia_contacto" onclick="enviar_contacto()" class="btn btn-success" onKeyDown="return tab_btn(event,'email');">Enviar</button>
              </div>
              </form>
            </div>      
          </div>
        </div>
      </div>
      
      <footer style="padding: 5px;">
        <div class="col-md-12">
          <hr style="height: 1px; border: 0; color: #666; background-color: #008c00;">
          <div class="col-sm-4 col-md-4">
            <div style="margin-left: 20px;">
              <img width="50%" src="<?php echo base_url();?>statics/img/logo_uam/variacion3Izt.png">
            </div>
          </div>
          <div class="col-sm-8 col-md-8">
            <div style="margin-left: 20px;">
              <label>@2018 División de CBI UAM-I Todos los derechos reservados<br>  
              	<a href="#" data-toggle="modal" data-target="#contacto" style="text-decoration: none; color: #000000;"><i class="fa fa-envelope" aria-hidden="true"></i> Contactanos</a> 
              </label>
            </div>
          </div>
        </div>
      </footer>
      <script src="<?php echo base_url() ?>statics/js/home.js"></script>
      <script src="<?php echo base_url() ?>statics/js/contacto.js"></script>
  </body>
</html> 