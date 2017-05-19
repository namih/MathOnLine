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
                          <input type="text" name="email-user" id="email_user" tabindex="1" class="form-control" placeholder="email del usuario">
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
                <button type="button" onclick="recover_pass();" class="btn btn-success">Enviar contraseña</button>
              </div>
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
          <div class="col-sm-4 col-md-4">
            <div style="margin-left: 20px;">
              <label>@2017 División de CBI UAM-I Todos los derechos reservados<br> Contactanos</label>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div style="margin-left: 20px;">
              <label>Desarrollado por: </label>
              <img width="50%" src="<?php echo base_url();?>statics/img/logo_sb/Sis-256.png">
            </div>
          </div>
        </div>
      </footer>
      <script src="<?php echo base_url() ?>statics/js/home.js"></script>
  </body>
</html> 