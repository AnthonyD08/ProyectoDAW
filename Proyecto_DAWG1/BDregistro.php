<!-- Con base en el video de Sin Rueda Tecnológica (2022), nos referenciamos para trabajar con PHP en la creación de los cruds, crear la base de datos de MySQL, entre otras cosas. -->
<?php


//Incluir conexion
include_once "conexion.php";

class BDregistro{

//funcion para hacer el select de la tabla y mostrar los usuarios
    public static function mostrarUsuariosRegistrados(){
        $query = Cconexion::ConexionBD()->prepare("select * from registro");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
//funcion para insertar lo que se puso en los inputs a la base de datos
    public static function InsertarUsuario(){
        
        $Nombre_Completo = $_POST['nombre'];
        $Correo_Usuario = $_POST['correo'];
        $Nombre_Usuario = $_POST['usuario'];
        $Contrasena_Usuario = $_POST['contrasena'];
        $Recibir_Correos = $_POST['boletin'];



        $query = Cconexion::ConexionBD()->prepare("insert into registro(Nombre_Completo,Correo_Usuario,Nombre_Usuario,Contraseña_Usuario,Recibir_Correos) values(?,?,?,?,?)");
        
        $query->bindParam(1, $Nombre_Completo,PDO::PARAM_STR);
        $query->bindParam(2, $Correo_Usuario,PDO::PARAM_STR);
        $query->bindParam(3, $Nombre_Usuario,PDO::PARAM_STR);
        $query->bindParam(4, $Contrasena_Usuario,PDO::PARAM_STR);
        $query->bindParam(5, $Recibir_Correos,PDO::PARAM_STR);
//lo deja en la pagina de registro admin
        if($query->execute()){
           echo "Ingreso Correcto";
           header("location: register.php");
        }
        else{
            echo "Ingreso Incorrecto";
            header("location: register.php");
        }



    }
//funcion para hacer modificaciones en la base de datos
    public static function ModificarUsuario(){
        $ID_Usuario= $_POST['ID'];
        $Nombre_Completo = $_POST['nombre'];
        $Correo_Usuario = $_POST['correo'];
        $Nombre_Usuario = $_POST['usuario'];
        $Contrasena_Usuario = $_POST['contrasena'];
        $Recibir_Correos = $_POST['boletin'];

        $query = Cconexion::ConexionBD()->prepare("update registro SET registro.Nombre_Completo=?,registro.Correo_Usuario=?,registro.Nombre_Usuario=?,registro.Contraseña_Usuario=?,registro.Recibir_Correos=? WHERE registro.ID_Usuario=?;");
        
        $query->bindParam(1, $Nombre_Completo,PDO::PARAM_STR);
        $query->bindParam(2, $Correo_Usuario,PDO::PARAM_STR);
        $query->bindParam(3, $Nombre_Usuario,PDO::PARAM_STR);
        $query->bindParam(4, $Contrasena_Usuario,PDO::PARAM_STR);
        $query->bindParam(5, $Recibir_Correos,PDO::PARAM_STR);
        $query->bindParam(6, $ID_Usuario,PDO::PARAM_STR);

        if($query->execute()){
           echo "Ingreso Correcto";
           header("location: register.php");
        }
        else{
            echo "Ingreso Incorrecto";
            header("location: register.php");
        }



    }



//funcion para eliminar elementos de la base de datos basados en el id
public static function EliminarUsuario(){
    $ID_Usuario= $_POST['ID'];
    

    $query = Cconexion::ConexionBD()->prepare("DELETE FROM registro WHERE registro.ID_Usuario=?;");
    
    $query->bindParam(1, $ID_Usuario,PDO::PARAM_STR);

    if($query->execute()){
       echo "Ingreso Correcto";
       header("location: register.php");
    }
    else{
        echo "Ingreso Incorrecto";
        header("location: register.php");
    }



}

}


//cuando se le hace click al boton de registrar,modificar o eliminar, que se ejecute su respectiva funcion.
if(array_key_exists('registrar',$_POST)){
    BDregistro::InsertarUsuario();
  

}

if(array_key_exists('modificar',$_POST)){
    BDregistro::ModificarUsuario();

}

if(array_key_exists('eliminar',$_POST)){
    BDregistro::EliminarUsuario();

}


?>

<!-- Referencias: -->
<!-- Sin Rueda Tecnológica. (2022). ¿Cómo Guardar, Mostrar, Actualizar y Eliminar Registros en PHP y MySQL?. [video]. Youtube. https://www.youtube.com/watch?v=wzB-2S1d32o&t=5s -->