<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Restaurar Base de Datos</h4>
                </div><div class="modal-body">


<?php
if (! empty($_FILES)) {
    // Validating SQL file type by extensions
    if (! in_array(strtolower(pathinfo($_FILES["backup_file"]["name"], PATHINFO_EXTENSION)), array(
        "sql"
    ))) {
        $response = array(
            "type" => "error",
            "message" => "Invalid File Type"
        );
    } else {
        if (is_uploaded_file($_FILES["backup_file"]["tmp_name"])) {
            move_uploaded_file($_FILES["backup_file"]["tmp_name"], $_FILES["backup_file"]["name"]);
            $response = restoreMysqlDB($_FILES["backup_file"]["name"], $con);
        }
    }
}

function restoreMysqlDB($filePath, $con)
{
    $sql = '';
    $error = '';
    
    if (file_exists($filePath)) {
        $lines = file($filePath);
        
        foreach ($lines as $line) {
            
            // Ignoring comments from the SQL script
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }
            
            $sql .= $line;
            
            if (substr(trim($line), - 1, 1) == ';') {
                $result = mysqli_query($con, $sql);
                if (! $result) {
                    $error .= mysqli_error($con) . "\n";
                }
                $sql = '';
            }
        } // end foreach
        
        if ($error) {
            $response = array(
                "type" => "error",
                "message" => $error
            );
        } else {
            $response = array(
                "type" => "success",
                "message" => "<script type='text/javascript'>alert('Base de datos restaurada con exito.');</script>"
            );
        }
        exec('rm ' . $filePath);
    } // end if file exists
    
    return $response;
}

?>


<?php
if (! empty($response)) {
    ?>
<div class="response <?php echo $response["type"]; ?>">
<?php echo nl2br($response["message"]); ?>
</div>
<?php
}
?>
    <form method="post" action="" enctype="multipart/form-data"
        id="frm-restore">
        <div class="form-row">
            <div>
                <input type="file" name="backup_file" class="input-file" />
            </div>
        </div>
        <div class="modal-footer">
            <input type="submit" name="restore" value="Restaurar"
                class="btn btn-primary" />
        </div>
    </form>

        </div>
    </div>
</div>