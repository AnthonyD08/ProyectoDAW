<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/05b4deed5b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css_proyecto/style_proyecto.css">
    <link rel="stylesheet" href="csspopup/estilospopup.css">
    <link rel="stylesheet" href="csslogin/style.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Inicio</title>
</head>
<body>
<!-- Con base en el video de Sin Rueda Tecnológica (2022), nos referenciamos para trabajar con PHP en la creación de los cruds, crear la base de datos de MySQL, entre otras cosas. -->

<table class="table1" cellspacing="0" cellpadding="0"
        style="height:100%;width:100.8%; position: relative; top: -8px; bottom: 0; left: -8px; right: 0; ">
        <tr>
            <td colspan="4" style="height: 7%;">

                <div class="titulo">
                    <img id="logoimg" src="imagenes/logo.png" width="60px" height="60px">
                    <div id="ul">
                        <div id="verde"></div>
                        <div id="morado"></div>
                        <div id="amarillo"></div>
                        <div id="rojo"></a> </div>
                    </div>
                </div>

            </td>
        </tr>
        <tr>
            </td>
            <td colspan="3" class="mainTop">
            </td>
        </tr>
        <tr>
            <td colspan="3" rowspan="1" style="background-image: url('imagenes/teatrobg.jpg'); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
                <h1 style= "margin-top: 10%; color: white; font-size: 250%">¡Bienvenido a la página donde encontrarás de todo para todos!</h1>
                <br>
                <br>
                <h1 style= "color: white">Iniciar Sesión</h1>
    <?php
    /*include_once ('conexion.php');
    $consulta = CConexion::ConexionBD();*/
    ?>


<!-- Todos los inputs que vemos en el formulario estan dentro de un form al cual se le agrega 
el metodo de post para que este pueda interactuar con la base de datos-->
    <form class = "formulario" method="post" style="margin-top: -0.0%; background-color:white;">
        <h1>Inicio</h1>

                <div class="input-contenedor">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nombre de Usuario" name="username">
                </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-message"></i>
                        <input type="password" placeholder="Contraseña" name="clave">
                    </div>             
                        <input type="submit" value="Entrar" class="boton" name="save">
                        <p style="font-size: large; font-weight: bold;">Al entrar, aceptas nuestras Condiciones de uso y Politica de privacidad</p>
                        <p style= "font-size: large; font-weight: bold;">No tienes cuenta?<a class="link" href="registeruser.php">Registrarse</a></p>


                        <!--Aqui no se utiliza conexion.php para la conexion, si no que se hace con otro metodo mas simple -->
                        <!--En esta parte se validan el usuario y password que se ingresa para ver si esta correcto. -->
                        <?php
                        $connect=mysqli_connect("localhost","root","","daw") or die("Connection Failed");
                        if(!empty($_POST['save']))
                        {
                        $username = $_POST['username'];
                        $clave = $_POST['clave'];
        
                        $query ="select * from registro where Nombre_Usuario='$username' and Contraseña_Usuario='$clave'";
                        $result=mysqli_query($connect,$query);
                        $count=mysqli_num_rows($result);
                        if($count>0)
                        {
                            header ("location: Proyecto_DAW.php");
                        }
                        else
                        {
                            echo "Contraseña o usuario incorrectos" ;
                        }
    
                        }

    ?>
                        
    </form>


    </td>
        </tr>
    </table>

    <div id="sjvive">
        <img src="imagenes/Logo-SJO1.png" width="150px" height="130px">
    </div>

    <footer class="piedepagina">

<div class="header">
    <!-- Div del Logo-->
    <div class="logofooter">
        <img src="imagenes/logofooter.png" alt="">

    </div>
</div>

<!-- Div del Información de la empresa-->
<div class="section">
    <div>
        <h3 class="h3footer">Sobre turisteandosjo</h3>
        <a href="#modal" class="btn-open-popup">Acerca de turisteandosjo</a>
        <div class="container-all" id="modal">
            <div class="popup">
              <div class="imagenpopup"></div>
              <div class="container-text">
                <h1>Acerca de Turisteandosjo</h1>
                <p>
                  Turisteandosjo se creó con el objetivo principal de brindar
                  servicios de publicidad para los lugares turísticos en la provincia
                  de San José. Nuestro principal propósito es poder fomentar a los
                  ciudadanos nacionales y extranjeros que visiten lugares turísticos y así
                  poder contribuir al turismo en nuestra capital. 
                </p>
                <p>
                  En esta aplicación web encontrarás publicidad de lugares turísticos como
                  como los Museos, Teatros, Cafeterías, entre otros lugares que podrás visitar en el cantón de San José.
                </p>
              </div>
      
              <a href="#" class="btn-close-popup">X</a>
            </div>
          </div>
        <a href="#modal2" class="btn-open-popup">¿Cómo funciona?</a>
        <div class="container-all" id="modal2">
            <div class="popup">
              <div class="imagenpopup"></div>
              <div class="container-text2">
                <h1>¿Cómo funciona?</h1>
                <p>
                  Es muy simple. Nuestro objetivo es hacer que no perdás mucho tiempo
                  en la adquisición de tu cupón. Tenemos la preocupación de que
                  nuestros amigos disfruten de las promociones y siempre darles la
                  mejor variedad posible para todos los gustos.
                </p>
                <p>
                  1. Ingresa a la aplicación web.
                </p>
                <p>
                  2. Observa y elige el lugar turístico que deseas visitar.
                </p>
                <p>
                  3. Ingresa al link del lugar que querés visitar y realiza la reservación
                </p>
              </div>
              <a href="#" class="btn-close-popup">X</a>
            </div>
          </div>
    </div>

    <div>
        <h3 class="h3footer">Regulado por:</h3>
        <a href="https://www.msj.go.cr/Paginas/default.aspx"><img src="imagenes/Municipalidad1.png" alt="" style="height: 80%; width: 30%;"></a>

    </div>

    <div>
        <h3 class="h3footer">Contáctanos</h3>
        <a href="#">Teléfono: 2250-5674</a>

    </div>

    <div>
        <h3 class="h3footer">Con el respaldo de:</h3>
        <a href="https://mcj.go.cr/"><img src="imagenes/mincult.png" alt="" style="height: 80%; width: 90%;"></a>
    </div>
</div>

<!-- Div del los Derechos-->
<div class="derechos">
    <p>Copyright©2022 TuristeandoSJO. Todos los derechos reservados.</p>
   
</div>

</footer>
    
</body>
</html>

<!-- Referencias: -->
<!-- Sin Rueda Tecnológica. (2022). ¿Cómo Guardar, Mostrar, Actualizar y Eliminar Registros en PHP y MySQL?. [video]. Youtube. https://www.youtube.com/watch?v=wzB-2S1d32o&t=5s -->