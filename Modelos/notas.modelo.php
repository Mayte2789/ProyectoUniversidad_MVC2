<?php

require_once "conexion.php";


class ModeloNotas{
/*=============================================
	REGISTRO DE NOTAS 
	=============================================*/
	static public function mdlRegistroNotas($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nota1, Nota2, Nota3,IdEstudiante,IdCurso ) VALUES (:Nota1, :Nota2, :Nota3,:IdEstudiante,:IdCurso)");

		$stmt->bindParam(":Nota1", $datos["Nota1"], PDO::PARAM_STR);
		$stmt->bindParam(":Nota2", $datos["Nota2"], PDO::PARAM_STR);
		$stmt->bindParam(":Nota3", $datos["Nota3"], PDO::PARAM_STR);
        $stmt->bindParam(":IdEstudiante", $datos["IdEstudiante"], PDO::PARAM_STR);
		$stmt->bindParam(":IdCurso", $datos["IdCurso"], PDO::PARAM_STR);
       

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

    }

	/*=============================================
	SELECCIONAR REGISTRO DE NOTAS 
	=============================================
	POSIBLE DE ELIMINAR */

	static public function mdlSeleccionarRegistroNotas($tabla, $item, $valor){

		if($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT IdNota, Nota1, Nota2, Nota3,((Nota1 + Nota2 + Nota3)/3) AS Promedio, IdEstudiante, IdCurso FROM $tabla ORDER BY IdNota ");
			
			$stmt->execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT IdNota, Nota1, Nota2, Nota3,((Nota1 + Nota2 + Nota3)/3) AS Promedio, IdEstudiante, IdCurso  FROM $tabla WHERE $item = :$item ORDER BY IdNota ");

			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetch();
		}

		$stmt->close();

		$stmt = null;	

	}

	/*=============================================
	ACTUALIZAR REGISTRO DE NOTAS 
	=============================================*/

	static public function mdlActualizarRegistroNotas($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nota1=:Nota1, Nota2=:Nota2, Nota3=:Nota3,IdEstudiante=:IdEstudiante,IdCurso=:IdCurso WHERE IdNota = :IdNota");

		$stmt->bindParam(":Nota1", $datos["Nota1"], PDO::PARAM_STR);
		$stmt->bindParam(":Nota2", $datos["Nota2"], PDO::PARAM_STR);
		$stmt->bindParam(":Nota3", $datos["Nota3"], PDO::PARAM_STR);
		$stmt->bindParam(":IdNota", $datos["IdNota"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	



}
}