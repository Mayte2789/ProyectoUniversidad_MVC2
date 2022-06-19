

<div class="d-flex justify-content-center text-center">

<form class="p-5 bg-light" method="post">
    <div class="form-group">
        <label for="Nota">Nota 1:</label>

        <div class="input-group">
            
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-book"></i>
                </span>
            </div>

            <input type="text" class="form-control" id="Nota1" name="registroNota1">

        </div>
        
    </div>

    <div class="form-group">

        <label for="Nota">Nota 2:</label>

        <div class="input-group">
            
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-book"></i>
                </span>
            </div>

            <input type="text" class="form-control" id="Nota2" name="registroNota2">
        
        </div>
        
    </div>

    <div class="form-group">
        <label for="Nota">Nota 3:</label>

        <div class="input-group">
            
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-book"></i>
                </span>
            </div>

            <input type="text" class="form-control" id="Nota3" name="registroNota3">
           
        </div>
        <div class="form-group">
        <label for="Nota">Id Estudiante:</label>

        <div class="input-group">
            
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user"></i>
                </span>
            </div>

            <input type="text" class="form-control" id="IdEstudiante" name="registroIdEstudiante">

        </div>
        
    </div>
<div class="form-group">
        <label for="Nota"> Id Curso:</label>

        <div class="input-group">
            
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user"></i>
                </span>
            </div>

            <input type="text" class="form-control" id="IdCurso" name="registroIdCurso">

        </div>
        
    </div>

    <?php 

    /*=============================================
    FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO NO ESTÁTICO 
    =============================================*/
    
    // $registro = new ControladorFormularios();
    // $registro -> ctrRegistro();

    /*=============================================
    FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO ESTÁTICO 
    =============================================*/

    $registro = ControladorNotas::ctrRegistroNotas();

    if($registro == "ok"){

        echo '<script>

            if ( window.history.replaceState ) {

                window.history.replaceState( null, null, window.location.href );

            }

        </script>';

        echo '<div class="alert alert-success">Las notas han sido registradas con exito</div>';
    
    }

    ?>
    
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

</div>