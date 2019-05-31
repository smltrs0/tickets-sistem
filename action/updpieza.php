<?php
	if (empty($_POST['mod_id'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['mod_name'])) {
           $errors[] = "Nombre vacío";
        } else if (empty($_POST['mod_precio'])) {
           $errors[] = "Precio vacío";
        }else if (empty($_POST['mod_cantidad'])) {
           $errors[] = "Cantidad vacío";
        }else if (
			!empty($_POST['mod_name'])
		){

		include "../config/config.php";//Contiene función que conecta a la base de datos
// mysqli_real_escape_string se usa para convertir la variable en texto plano y evitar sqlinyectionn
// strip_tags se utiliza para eliminar las etiquetas como por ejemplo <script>y evitar otros tipos ataques
		$name=mysqli_real_escape_string($con,(strip_tags($_POST["mod_name"],ENT_QUOTES)));
		$detalle=mysqli_real_escape_string($con,(strip_tags($_POST["description"],ENT_QUOTES)));
		$precio=mysqli_real_escape_string($con,(strip_tags($_POST["mod_precio"],ENT_QUOTES)));
		$cantidad=mysqli_real_escape_string($con,(strip_tags($_POST["mod_cantidad"],ENT_QUOTES)));
		$id=$_POST['mod_id'];

		$sql="UPDATE piezas SET nombre_pieza = '$name', descripcion_pieza= '$detalle', precio_pieza ='$precio', cantidad_producto='$cantidad' WHERE id=$id";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "La Pieza ha sido actualizada satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>