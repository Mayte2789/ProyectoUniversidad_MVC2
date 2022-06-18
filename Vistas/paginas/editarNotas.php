<?php

if(isset($_GET["IdNota"])){

	$item = "IdNota";
	$valor = $_GET["IdNota"];

	$usuario = ControladorNotas::ctrSeleccionarRegistrosNotas($item, $valor);

}

?>


<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">
         <div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $usuario["IdNota"]; ?>" placeholder="Escriba el numero de Curso:" id="Curso" name="actualizarIdNota">

			</div>
			
		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="number" class="form-control" value="<?php echo $usuario["Nota1"]; ?>" placeholder="Escriba la nueva nota 1:" id="Nota1" name="actualizarNota1">

			</div>
			
		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="number" class="form-control" value="<?php echo $usuario["Nota2"]; ?>" placeholder="Escriba la nueva nota 2:" id="Nota2" name="actualizarNota2">
			
			</div>
			
		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-phone"></i>
					</span>
				</div>

				<input type="number" class="form-control" value="<?php echo $usuario["Nota3"]; ?>" placeholder="Escriba la nueva nota 3:" id="Nota3" name="actualizarNota3">
			     

			</div>


		<?php

		$actualizar = ControladorNotas::ctrActualizarRegistroNotas();

		if($actualizar == "ok"){

			echo '<script>

			if ( window.history.replaceState ) {

				window.history.replaceState( null, null, window.location.href );

			}

			</script>';

			echo '<div class="alert alert-success">El Estudiante ha sido actualizado</div>


			<script>

				setTimeout(function(){
				
					window.location = "index.php?pagina=inicioEstudiante";

				},3000);

			</script>

			';

		}

		?>
		
		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>

</div>