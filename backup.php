<?php
    $title ="Backup | ";
    include "head.php";
    include "sidebar.php";
?>  
    <div class="right_col" role="main"><!-- page content -->
        <div class="">
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="animated headShake x_panel">
                        <div class="x_title">
                            <h2>Backup</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

    <a href="#"><div class="animated flipInY col-sm-6 col-xs-12" id="save">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-save"></i></div>
                          <div class="count"> </div>
                          <h3>Respaldas Base de Datos</h3>
                        </div>
                    </div></a>
    <a  href="#" role="button" data-toggle="modal" data-target="#myModal"><div class="animated flipInY col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-undo"></i></div>
                          <div class="count"> </div>
                          <h3>Restaurar Base de Datos</h3>
                        </div>
                    </div>
                </a>
<?php
include 'modal/restaurardb.php';
?>
                            </div>
</div>
            <div id="result">            </div>  

            <div class="x_panel animated headShake">
                <div class="x_title">
                            <h2>Lista Disponibles para Descargar</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                <?php
                //Esta funcion se encarga de listar los respaldo generados
function listar_archivos($carpeta){
    if(is_dir($carpeta)){
        if($dir = opendir($carpeta)){
            echo "<ul class='list-group'>";
            while(($archivo = readdir($dir)) !== false){
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
                    echo "<li class='list-group-item'><a target='_blank' href='$carpeta/$archivo'><i class='fa fa-download'></i> $archivo </a> | <a class='btn btn-danger btn-xs' href='action/borrar_archivo.php?archivo=$archivo&dir=$carpeta'>Borrar<i class='fa fa-remove'></i></a> </li>";
                }
            }
            echo "</ul>";
            closedir($dir);
            
        }
    }
}
echo listar_archivos('action/BackupLogs');
                ?>
            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- /page content -->

<?php include "footer.php" ?>
<script>
document.getElementById("save").onclick = function() {myFunction()};

function myFunction() {
  document.getElementById("result").innerHTML = "<div class='alert alert-info'>Respaldo Realizado Exitosamente! Actualiza para ver los cambios <input class='btn btn-success' type='button' value='Actualizar' onclick ='location.reload()' /></div>";   
   window.open("action/generar_backup.php", "_blank", "toolbar=0,scrollbars=yes,resizable=0,top=400,left=400,width=400,height=400"); 
}
</script>