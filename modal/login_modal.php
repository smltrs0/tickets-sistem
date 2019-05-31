    <div> 
      <?php 
                        $invalid=sha1(md5("contrasena y email invalido"));
                        if (isset($_GET['invalid']) && $_GET['invalid']==$invalid) {
                            echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                                <strong>Error!</strong> Contraseña o correo Electrónico invalido
                                </div>";
                        }
                    ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-new"><i class="fa fa-plus-circle"></i> Entar al sistema</button>
    </div>
    <div class="modal fade bs-example-modal-lg-new" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        	
      <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Loguearse</h4>
                </div>
                <div class="modal-body">
                     <form class="d-flex justify-content-center align-items-center container" action="action/login.php" method="post">
<div class="form-group">
    <label for="email" class="col-4 ">Correo</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control ">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-4 col-form-label">Contraseña</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-key"></i>
          </div>
        </div> 
        <input id="password" name="password" type="password" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group">
    <div class="offset-4 col-8">
        <button type="submit" name="token" value="Login" class="">Iniciar Sesion</button>
    </div>
  </div>
<br>
    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div> <!-- /Modal -->