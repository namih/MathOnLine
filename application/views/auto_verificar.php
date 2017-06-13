<DOCTYPE html>  
<html lang="es">  
    <head>  
        <meta charset="utf-8"/>  
        <title>Verificar Nombre de usuario</title>  
        <link rel="shortcut icon" href="favicon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    </head>  
    <body>  
        <header>  
            <h1>Vista para pruebas</h1>
        </header>  
        <div class="container">
        	<div class="col-md-6 col-xs-12">
        		<h3>Temas</h3>
        		<table class="table">
        			<thead>
        				<tr>
        					<th>Mes</th>
        					<th>Titulo</th>
        					<th>Editar</th>
        				</tr>
        			</thead>
        			<tbody>
        				<?php for ($i=0; $i < count($temas); $i++) { ?>
							<tr>
								<td> <?php echo $temas[$i]['mounth'] ?> </td>
								<td> <?php echo $temas[$i]['title'] ?> </td>
								<td> <a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a> </td>
							</tr>
						<?php }  
        				
        				?>
	        		</tbody>
	        	</table>
        	</div>
        	<div class="col-md-6 col-xs-12" align="center">
        		<h3>Calendario escolar</h3>
        		<img class="img-responsive" width="75%" src="http://www.uam.mx/calendario/cal_2016-2017_ses401.png" />
        		<form method="post" enctype="multipart/form-data">
            <label for="file">Filename:</label>
            <input type="file" name="file1" id="file1" /> 
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form>
        <?php 
        
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$target_dir = "statics/files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
         ?>
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
                
                <div class="panel-body">
                  <div class="row">
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <div class="col-md-4 col-sm-4" align="center"><img class="img-responsive" style="max-width: 149.55px" width="75%" src="https://pixabay.com/get/e831b40e2afd1c22d2524518a33219c8b66ae3d110b7184293f3c070/people-145129_1280.png"/></div>
                          <div class="col-md-8 col-sm-8">
                              <div class="form-group">
                                <input type="text" name="username-user" id="username_user" tabindex="1" class="form-control" placeholder="nombre del usuario">
                              </div>
                              <div class="form-group">
                                <input type="password" name="password-user" id="password_user" tabindex="2" class="form-control" placeholder="contraseña">
                              </div>
                          </div>
                        </div>
                        <div class="col-md-12" id="error_valid_form">
                        </div>
                        <div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-12" align="center">
                                  <button class="btn btn-success" onclick="login_user();">Iniciar</button>
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
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
          	 
          </div>
          
          
        </div>
        
        <footer>  
            <h2>FOOTER</h2>  
            <p>Aqui todo el contenido del footer</p>  
        </footer>  
    </body>  
</html>