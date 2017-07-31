<?php //echo '<pre>'; print_r($menu_user); ?>
<div class="col-md-12">  
      <nav class="navbar navbar-green">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand visible-xs" href="#">Mate en linea</a>-->
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <?php if(isset($menu_user)){ ?>
              <ul class="nav navbar-nav navbar-right">
                <?php foreach ($menu_user as $idMenu => $datosMenu) {
                    if(empty($datosMenu['submenu'])){//si no hay submenu se pinta un link sencillo ?>
                      <li class="<?php if(trim($datosMenu['clase'])!=''){ echo trim($datosMenu['clase']); };?>"><a href="<?php if(trim($datosMenu['href'])==''){ echo '#'; }else { echo trim($datosMenu['href']); };?>" <?php if(trim($datosMenu['onclick'])!=''){ echo $datosMenu['onclick']; }  ?> ><?php echo $datosMenu['nombre']; ?></a></li>
                    <?php }else{ ?>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $datosMenu['nombre']; ?></a>
                        <ul class="dropdown-menu" role="menu">
                          <?php foreach ($datosMenu['submenu'] as $idSubMenu => $dtsSubMenu) { ?>
                            <li><a href="<?php if(trim($dtsSubMenu['href'])==''){ echo '#'; }else { echo trim($dtsSubMenu['href']); };?>" <?php if(trim($dtsSubMenu['onclick'])!=''){ echo 'onclick="loadContent(\''.base_url().$dtsSubMenu['onclick'].'\');"'; }  ?> ><?php echo $dtsSubMenu['nombre']; ?></a></li>
                          <?php } ?>
                        </ul>
                      </li>
                    <?php }
                }?>
                <!--<li><a href="#">Tutoriales</a></li>
                <li><a href="#">Pruebas de evaluación</a></li>
                <li><a href="#" onclick="loadContent('<?php echo base_url(); ?>Home_student_c/material_complementario');" >Material complementario</a></li>
                <li><a href="#">Estadísticas</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"> </span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" onclick="loadContent('<?php echo base_url(); ?>Perfil_usuario_c/Perfil_usuario/<?php echo $user_log[0]['id_user']; ?>');"><span class="glyphicon glyphicon-user"> </span> Consultar perfil</a></li>
                    <li><a href="<?php echo base_url();?>/logout"><span class="glyphicon glyphicon-log-in"> </span> Cerrar sesión</a></li>
                  </ul>
                </li>-->
              </ul>
            <?php } ?>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav> 
</div>
<div id="section_main_content" style="min-height: 890px;">
    <?php //echo '<pre>'; print_r($user_log); print_r($temas); ?>

 