<!-- Con base en el video de Sin Rueda Tecnológica (2022), nos referenciamos para trabajar con PHP en la creación de los cruds, crear la base de datos de MySQL, entre otras cosas. -->
<!-- Aqui se hace la conexion con la base de datos mediante el metodo PDO.  -->
<?php

class Cconexion{
    public static function ConexionBD(){
        $host = 'localhost';
        $dbname = 'daw';
        $username = 'root';
        $password = '';

        try{
            $conn = new PDO ("mysql:host=$host;port=3306;dbname=$dbname",$username,$password);
            
        }
        
        catch(PDOException $pe){
            die ("No se logro conectar al servidor".$pe->getMessage);
        
        }
        return $conn;

    }
    
}



?>
<!-- Referencias: -->
<!-- Sin Rueda Tecnológica. (2022). ¿Cómo Guardar, Mostrar, Actualizar y Eliminar Registros en PHP y MySQL?. [video]. Youtube. https://www.youtube.com/watch?v=wzB-2S1d32o&t=5s -->