<?php
$archivo = $_GET['archivo'];
$resultado =__DIR__ .'/BackupLogs/'.$archivo;
if(file_exists($resultado))
{
if(unlink($resultado))

	
	 echo "<script>alert('Respaldo Eliminado Correctamente');</script>";
	echo ("<script>location.href='../backup.php'</script>");
}
else
print "<h2>Ups! ocurrio un error al intentar liminar el fichero:'$resultado', puede que no exista o que no tenga permisos para eliminarlo</h2>";

?>