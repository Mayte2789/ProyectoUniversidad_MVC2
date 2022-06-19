<?php

class Controladornotas{
/*=============================================
	REGISTRO DE NOTAS 
	=============================================*/
    static public function ctrRegistroNotas(){
        if(isset($_POST["RegistroNotas"])){

            $tabla = "nota";

            $datos = array(
				           "Nota1" => $_POST["registroNota1"],
				           "Nota2" => $_POST["registroNota2"],
				           "Nota3" => $_POST["registroNota3"],
						   "IdEstudiante" =>$_POST["registroIdEstudiante"],
				           "IdCurso" =>$_POST["registroIdCurso"]
						    
						); 


			$respuesta = ModeloNotas::mdlRegistroNotas($tabla, $datos);

			return $respuesta;


		}
        
    }

    	/*=============================================
	SELECCIONAR REGISTROS DE NOTAS 
	=============================================
	POSIBLE DE ELIMINAR */

    static public function ctrSeleccionarRegistrosNotas($item, $valor){

		$tabla = "nota";

		$respuesta = ModeloNotas::mdlSeleccionarRegistroNotas($tabla, $item, $valor);

		return $respuesta;

	}

		/*=============================================
	ACTUALIZAR REGISTRO DE NOTAS
	=============================================*/
	static public function ctrActualizarRegistroNotas(){

		if(isset($_POST["actualizarNota"])){

			$tabla = "nota";

			$datos = array (
				"IdNota"-> $_POST["actualizarIdNota"],
				"Nota1"-> $_POST["actualizarNota1"],
				"Nota2"-> $_POST["actualizarNota2"],
				"Nota3"-> $_POST["actualizarNota3"]
			);
			$respuesta = ModeloNotas::mdlActualizarRegistroNotas($tabla,$datos);

			return $respuesta;

		}


	}
	static public function ctrCalcularPromedio(){

		if(isset($_POST["actualizarNota"])){

			$tabla = "nota";

			$datos = array (
				"IdNota"-> $_POST["actualizarIdNota"],
				"Nota1"-> $_POST["actualizarNota1"],
				"Nota2"-> $_POST["actualizarNota2"],
				"Nota3"-> $_POST["actualizarNota3"]
			);
			$respuesta = ModeloNotas::mdlActualizarRegistroNotas($tabla,$datos);

			return $respuesta;

		}


	}


}


?>