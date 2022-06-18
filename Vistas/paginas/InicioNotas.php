<?php


$usuarios = Controladornotas::ctrSeleccionarRegistrosNotas(null, null);


?>



<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Codigo Estudiante</th>
			<th>Codigo Curso</th>
			<th>Nota 1</th>
            <th>Nota 2</th>
			<th>Nota 3</th>
            <th>Promedio</th>
            <th>Acciones</th>
		</tr>
	</thead>

	<tbody>

	<?php foreach ($usuarios as $key => $value): ?>

		<tr>
			<td><?php echo ($key+1); ?></td>
			<td><?php echo $value["IdEstudiante"]; ?></td>
			<td><?php echo $value["IdCurso"]; ?></td>
			<td><?php echo $value["Nota1"]; ?></td>
            <td><?php echo $value["Nota2"]; ?></td>
            <td><?php echo $value["Nota3"]; ?></td>
            <td><?php echo $value["Promedio"]; ?></td>
			<td>

			<div class="btn-group">

				<div class="px-1">
				
				<a href="index.php?pagina=editarNotas&IdNota=<?php echo $value["IdNota"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

				</div>

				
			
				

			</div>
			
				

			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>