<!-- Con base en el video de Sin Rueda Tecnológica (2022), nos referenciamos para trabajar con PHP en la creación de los cruds, crear la base de datos de MySQL, entre otras cosas. -->
<!-- Esta funcion se encarga de mostrar la informacion que se encuentra en la tabla de lugares de la base de datos -->
<?php

include_once "conexion.php";

class BDLugares{
public static function mostrarLugares(){
        $query = Cconexion::ConexionBD()->prepare("select * from lugares");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

}

    ?>

<!-- Referencias: -->
<!-- Sin Rueda Tecnológica. (2022). ¿Cómo Guardar, Mostrar, Actualizar y Eliminar Registros en PHP y MySQL?. [video]. Youtube. https://www.youtube.com/watch?v=wzB-2S1d32o&t=5s -->