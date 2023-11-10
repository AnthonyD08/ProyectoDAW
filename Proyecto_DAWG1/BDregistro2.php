<?php

include_once "conexion.php";
//misma funcion que bdregistro solo que esta funcion se utiliza para el formulario de registeruser.
class BDregistro2{
    public static function InsertarUsuario2(){
        
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

        if($query->execute()){
           echo "Ingreso Correcto";
           header("location: login.php");
        }
        else{
            echo "Ingreso Incorrecto";
            header("location: registeruser.php");
        }



    }


}


if(array_key_exists('registrar2',$_POST)){
    BDregistro2::InsertarUsuario2();
  

}

?>