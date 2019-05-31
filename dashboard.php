<?php 
    $title ="Dashboard - "; 
    include "head.php";
    include "sidebar.php";

    $TicketData=mysqli_query($con, "select * from ticket where status_id=1");
    $contadorinv=mysqli_query($con, "select sum(cantidad_producto) from piezas");
    $row=mysqli_fetch_array($contadorinv);
    $Ready=mysqli_query($con, "select * from ticket where status_id=3");
    $UserData=mysqli_query($con, "select * from user order by created_at desc");
?>
    <div class="right_col" role="main"> <!-- page content -->
        <div class="">
            <div class="page-title">
                <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-ticket"></i></div>
                          <div class="count"><?php echo mysqli_num_rows($TicketData) ?></div>
                          <h3>Tickets Pendientes</h3>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-dropbox"></i></div>
                          <div class="count"><?php echo $row[0]; ?></div>
                          <h3>Inventario actual</h3>
                        </div>
                    </div>
                    <div class="<?php if (mysqli_num_rows($Ready)>0) {
                                echo "animated infinite pulse";
                            }
                            else echo "animated flipInY" ;
                             ?> col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            
                          <div class="icon"><i class="fa fa-info"></i></div>
                          <div class="count"><?php echo mysqli_num_rows($Ready) ?></div>
                          <h3 >Listo para Entregar</h3>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-users"></i></div>
                          <div class="count"><?php echo mysqli_num_rows($UserData) ?></div>
                          <h3>Usuarios</h3>
                        </div>
                    </div>
                </div>
                <div class="x_panel">
                <div class="col-lg-9 col-md-7 col-sm-6 col-xs-9">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                <h2>Bar Chart Example</h2></div>
              <div class="card-body">
                <canvas id="myBarChart" width="70%" height="50"></canvas>
              </div>
              <div class="card-footer small text-muted">Actualizado <?php echo date("j F, Y, g:i a");  ?></div>
            </div>
          </div>
              <div class="col-lg-3">
                <div class="card-header"><h4>Articulos por agotarse</h4><p>Se recomienda reabastecer <i class="fa fa-info"></i></p></div>
                    <li></li>
                    <li></li>
                    <li></li>

                  </div>
          </div>
                <!-- content -->
            </div>
        </div>
    </div><!-- /page content -->

<?php include "footer.php" ?>