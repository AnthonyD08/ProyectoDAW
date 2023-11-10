<!-- Con base en el video de Sin Rueda Tecnológica (2022), nos referenciamos para trabajar con PHP en la creación de los cruds, crear la base de datos de MySQL, entre otras cosas. -->
<!-- Registro vista administrador -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="csslogin/style.css">
    <title>Registro</title>
</head>
<body>
<h1>Registrar</h1>
    <?php
    /*include_once ('conexion.php');
    $consulta = CConexion::ConexionBD();*/
    ?>
         <!-- Todos los inputs se meten dentro de un form y se referencia el archivo BDregistro y el metodo post.-->
    <form class = "formulario" action="BDregistro.php" method ="post">

    <div class = "contenedor">

   
    <div class = "contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="ID" name="ID" id="ID" readonly="readonly">
                </div>
        
        <div class = "contenedor">
            <div class="input-contenedor">
                <img id="user2" src="IMAGENES/user.png" height= "25px"   >
                <input type="text" placeholder="Nombre y Apellidos" name="nombre" id="nombre">
            </div>

            <div class = "contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Correo electronico" name="correo" id="correo">
                </div>

                <div class = "contenedor">
                    <div class="input-contenedor">
                        <i class="fa-solid fa-message"></i>
                        <input type="text" placeholder="Usuario" name="usuario" id="usuario">
                    </div>
                    <div class = "contenedor">
                        <div class="input-contenedor">
                            <i class="fa-solid fa-message"></i>
                            <input type="password" placeholder="Password" name="contrasena" id="contrasena">
                        </div>
                    
                    <div class = "contenedor">
                        <div class="input-contenedor">
                            <i class="fa-solid fa-message"></i>
                            Desea formar parte de nuestra lista de correos?<input type="radio" name="boletin" id="boletin" value="Si">Si
                            <input type="radio" name="boletin" id="boletin"  value="No">No
                        </div>
                        </form>
                        <!-- Botones de registrar, modificar y eliminar -->
                        <input type="submit" value="Registrar" class="boton" name="registrar" id="registrar">
                        <input type="submit" value="Modificar" class="boton" name="modificar" id="modificar">
                        <input type="submit" value="Eliminar" class="boton" name="eliminar" id="eliminar">
                        
                    <!--  Se crea la tabla para poder mostrar ahi la informacion que proviene de la base de datos.  -->
                        <h2>Lista de Usuarios</h2>
                        <div>
                            <table id="tabla1">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>correo</th>
                                    <th>Usuario</th>
                                    <th>Password</th>
                                    <th>Boletin</th>
                                    <th>Accion</th>
                                </tr>
                                <tbody>         <!-- Se llama al archivo bdregistro y se corre la funcion para mostrar los usuarios
                                                    Despues esta informacion se agrega a la tabla mediante el ciclo foreach   -->
                                    <?php
                                    include_once('BDRegistro.php');

                                    $consulta = BDregistro::mostrarUsuariosRegistrados();

                                    foreach($consulta as $fila){
                                        echo "<tr>";
                                        echo "<td>".$fila['ID_Usuario']."</td>";
                                        echo "<td>".$fila['Nombre_Completo']."</td>";
                                        echo "<td>".$fila['Correo_Usuario']."</td>";
                                        echo "<td>".$fila['Nombre_Usuario']."</td>";
                                        echo "<td>".$fila['Contraseña_Usuario']."</td>";
                                        echo "<td>".$fila['Recibir_Correos']."</td>";
                                        echo "<td>"."<input type =\"button\" value=\"Seleccionar\" onClick = \"Seleccionar()\"><input>".
                                        "</td>";



                                        echo "</tr>";

                                    }
                                    

                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <p>Al registrarte, aceptas nuestras Condiciones de uso y Politica de provacidad</p>
                        <p>Ya tienes cuenta? <a class="link" href="login.php">Iniciar Sesion</a></p>
                       
        
        
        </div>                           
    
</body>
</html>


<style>
    table,
    th,
    td{
        border : 1px solid black
    }

    
</style>


<!--  Boton de seleccionar en la tabla   -->
<!--  Se crea la funcion que se referencia en el boton y cuando se hae click se ejecuta.
Cuenta la cantidad de filas que hay en la tabla e inserta los elementos en los inputs por su nombre.   -->
<script>
    function Seleccionar(){
        var table = document.getElementById("tabla1");
        for (var i=1;i<table.rows.length;i++){
            table.rows[i].onclick = function()
            {
                document.getElementById('ID').value= this.cells[0].innerHTML;
                document.getElementById('nombre').value= this.cells[1].innerHTML;
                document.getElementById('correo').value= this.cells[2].innerHTML;
                document.getElementById('usuario').value= this.cells[3].innerHTML;
                document.getElementById('contrasena').value= this.cells[4].innerHTML;
                document.getElementById('boletin').value= this.cells[5].innerHTML;
            };
        }

    }
</script>

<!-- Referencias: -->
<!-- Sin Rueda Tecnológica. (2022). ¿Cómo Guardar, Mostrar, Actualizar y Eliminar Registros en PHP y MySQL?. [video]. Youtube. https://www.youtube.com/watch?v=wzB-2S1d32o&t=5s -->