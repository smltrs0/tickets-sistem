<?php
//Contiene funcion que conecta a la base de datos
    include "../config/config.php";
    
    $action = (isset($_REQUEST['action']) && $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
    if (isset($_GET['id'])){
        $id_del=intval($_GET['id']);
        $query=mysqli_query($con, "SELECT * from piezas where id='".$id_del."'");
        $count=mysqli_num_rows($query);
            if ($delete1=mysqli_query($con,"DELETE FROM piezas WHERE id='".$id_del."'")){
            ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Aviso!</strong> Datos eliminados exitosamente.
            </div>
    <?php 
        }else {
    ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Error!</strong> No se pudo eliminar ésta  Pieza. Existen gastos vinculadas a ésta Pieza. 
            </div>
<?php
        } //end else
    } //end if
?>

<?php
    if($action == 'ajax'){
        // escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
         $aColumns = array('nombre_pieza');//Columnas de busqueda
         $sTable = "piezas";
         $sWhere = "";
        if ( $_GET['q'] != "" )
        {
            $sWhere = "WHERE (";
            for ( $i=0 ; $i<count($aColumns) ; $i++ )
            {
                $sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
            }
            $sWhere = substr_replace( $sWhere, "", -3 );
            $sWhere .= ')';
        }
        $sWhere.=" order by nombre_pieza desc";
        include 'pagination.php'; //include pagination file
        //pagination variables
        $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
        $per_page = 10; //how much records you want to show
        $adjacents  = 4; //gap between pages after number of adjacents
        $offset = ($page - 1) * $per_page;
        //Count the total number of row in your table*/
        $count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
        $row= mysqli_fetch_array($count_query);
        $numrows = $row['numrows'];
        $total_pages = ceil($numrows/$per_page);
        $reload = './piezas.php';
        //main query to fetch the data
        $sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
        $query = mysqli_query($con, $sql);
        //loop through fetched data
        if ($numrows>0){
            
            ?>
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                    <tr class="headings">
                        <th class="column-title">Piezas </th>
                        <th class="column-title">Detalles </th>
                         <th class="column-title">Precio </th>
                          <th class="column-title">Cantidad Existente </th>
                            <th class="column-title">Fecha Agregado </th>
                        <th class="col-sm-2 column-title no-link last"><span class="nobr"></span></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    while ($r=mysqli_fetch_array($query)) {
                        $id=$r['id'];
                        $nombre_pieza=$r['nombre_pieza'];
                        $precio=$r['precio_pieza'];
                        $descripcion=$r['descripcion_pieza'];
                        $cantidad=$r['cantidad_producto'];
                         $fecha=$r['fecha'];
                ?>
                    <input type="hidden" value="<?php echo $id;?>" id="id<?php echo $id;?>">
                    <input type="hidden" value="<?php echo $nombre_pieza;?>" id="nombre_pieza<?php echo $id;?>">
                    <input type="hidden" value="<?php echo $descripcion;?>" id="descripcion_pieza<?php echo $id;?>">
                     <input type="hidden" value="<?php echo $precio;?>" id="precio<?php echo $id;?>">
                      <input type="hidden" value="<?php echo $cantidad;?>" id="cantidad<?php echo $id;?>">


                    <tr class="even pointer">
                        <td ><?php echo $nombre_pieza; ?></td>
                        <td ><?php echo $descripcion; ?></td>
                         <td ><?php echo $precio; ?></td>
                         <td ><?php echo $cantidad; ?></td>
                         <td ><?php echo $fecha; ?></td>
                        <td ><span class="pull-right">
                        <a href="#" class='btn btn-default' title='Editar Pieza' onclick="obtener_datos('<?php echo $id;?>');" data-toggle="modal" data-target=".bs-example-modal-lg-udp"><i class="glyphicon glyphicon-edit"></i></a> 
                        <a href="#" class='btn btn-default' title='Borrar Pieza' onclick="eliminar('<?php echo $id; ?>')"><i class="glyphicon glyphicon-trash"></i> </a></span></td>
                    </tr>
            <?php
                } //end while
            ?>
              </table> <div class='pull-right'><?php echo paginate($reload, $page, $total_pages, $adjacents);?> 
          </div>
            </div>
            <?php
        }else{
           ?> 
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Aviso!</strong> No hay datos para mostrar
            </div>
        <?php    
        }
    }
?>