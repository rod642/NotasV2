<?php

use App\Conexion;

class VisualizarProfesor extends Conexion
{
    //metodo que muestra quien es el que está teniendo acceso a la pagina
    public function ver(){
        //conexion DB
        $this->conexionDB();

        $profe = $_SESSION['profe'];
        $query = "SELECT profesor.*, materia.id AS idmateria, materia.nombre AS materia FROM profesor INNER JOIN materia ON profesor.Idmateria= materia.Id  WHERE profesor.Id=$profe";
        $result = mysqli_query($this->con, $query);
        while($imp = mysqli_fetch_array($result)){
            echo $imp['Nombre'], " " ,$imp['Apellido'] . "<br>";
            echo $imp['materia'] . "<br>";
        }
    }
}