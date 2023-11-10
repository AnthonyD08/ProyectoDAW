<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TuristeandoSJO</title>
    <script src="https://kit.fontawesome.com/05b4deed5b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css_proyecto/style_proyecto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="csspopup/estilospopup.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body>

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
            <td rowspan="3" style="width: 9%;" class="izquierda" id="izquierda">

                <!-- Con base en el video de MagtimusPro (2021) nos referenciamos para hacer el menú lateral -->
                <header>
                    <div class="icon__menu">
                        <i class="fas fa-bars" id="btn_open"></i>
                    </div>
                </header>

                    <div class="menu__side" id="menu_side">
                
                        <div class="options__menu">
                            
                        <a href="#">
                            <div class="option">
                                <a class="fa-solid fa-user" title="Registro" href="register.php"></a>
                                <a title="Registro" href="registeruser.php"><h4>Registro</h4></a>
                            </div>
                
                            <a href="#" class="selected">
                                <div class="option">
                                    <a class="fas fa-home" title="Inicio" href="Proyecto_DAW.php"></a>
                                    <a title="Inicio" href="Proyecto_DAW.php"><h4>Inicio</h4></a>
                                </div>
                            </a>
                                           
                        </div>
                    <script src="JavaScript/menulateral.js"></script>
                    </ul>
                </div>
            </td>
            <td colspan="3" class="mainTop">
                <div class="contenedor">
                    <header>
                        <form action="">
                            <input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
                        </form>
                        <div class="categorias" id="categorias">
                            <a href="#" class="activo">Todos</a>
                            <a href="#">Museos</a>
                            <a href="#">Teatros</a>
                            <a href="#">Cafeterías</a>
                        </div>
                    </header> 
            </td>
        </tr>
        <tr>
            <td colspan="3" rowspan="1">

                <!-- Div del Contenedor(header, section(donde se encuentra la galería) y footer)-->

                <!--INICIO DE LA SECCION DE IMAGENES EN LOS DIVS-->
                <!-- Con base en el video de Sin Rueda Tecnológica (2022), nos referenciamos para trabajar con PHP en la creación de los cruds, crear la base de datos de MySQL, entre otras cosas. -->
                <!--Se crea la tabla en donde se va a mostrar la informacion proveniente de la base de datos.
                    Se llama a lugares.php y se utiliza el metodo que ahi se declaro para hacer un select a la tabla
                    Y despues se inserta la informacion mediante el foreach-->
                <div class="contenedor">

                <section class="grid" id="grid">
                    <div class="item" data-categoria="museos" data-etiquetas="museos museo de jade jade"
                        data-descripcion="<h2>Museo de Jade</h2>

                       
                        <div>
                            <table>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Horario</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Dirección</th>
                                    <th>Link</th>
                                </tr>
                                <tbody>

                                

                                    <?php
                                    include_once "Lugares.php";

                                    $consulta = BDLugares::mostrarLugares();

                                    foreach($consulta as $fila){
                                        echo "<tr>";
                                        echo "<td>".$fila['Nombre_Lugar']."</td>";
                                        echo "<td>".$fila['Horario_Lugar']."</td>";
                                        echo "<td>".$fila['Correo_Lugar']."</td>";
                                        echo "<td>".$fila['telefono_Lugar']."</td>";
                                        echo "<td>".$fila['Direccion_Lugar']."</td>";   
                                        echo "<td><a href=".$fila['Link_lugar'].">Link</a></td>";                
                                        echo "</tr>";
                                        
                                    }
                                    ?>

                                    
                                </tbody>
                            </table>
                        </div>
                       
                                             ">
                        
                        <div class="item-contenido">
                            <img src="imagenes/museojade.jpg" alt="">
                        </div>
                    </div>

                     <!-- Con base en el video de FalconMasters (2019) nos referenciamos para hacer la galería de imágenes -->

                    <div class="item" data-categoria="museos" data-etiquetas="museos museo nacional"
                        data-descripcion=" <h2> Museo Nacional </h2> <br>Horario: Martes a Sábado de 8:30am a 4:30pm <br> Domingo de 9:00am a 4:30pm <br>
                        Correo: informacion@museocostarica.go.cr <br>
                        Teléfono: (+506) 2211-5700 <br>
                        Dirección: Cuesta de Moras, Av. Central, Bella Vista, San José, Costa Rica <br>
                        <a title='MuseoCR' href='https://www.museocostarica.go.cr/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/museonacional.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="museos" data-etiquetas="museos museo de oro "
                        data-descripcion="<h2> Museo de Oro </h2> <br>Horario: Lunes a Domingo de 9:30am a 4:50pm <br>
                        Correo: museos@bccr.fi.cr <br>
                        Teléfono: (+506) 2243-4202 <br>
                        Dirección: Bajos de la Plaza de la cultura, Avenida 0 y 2, Calle 5, San José, Costa Rica. <br>
                        <a title='MuseoOro' href='https://museosdelbancocentral.org/exhibiciones/museo-del-oro-precolombino/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/museooro.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="museos"
                        data-etiquetas="museos museo de arte y diseño contemporaneo"
                        data-descripcion="<h2> Museo de Arte y Diseño Contemporáneo </h2> <br>Horario: Martes a Sábado de 9:30am a 4:50pm <br>
                        Correo: info@madc.cr <br>
                        Teléfono: (+506) 2257-9370/2257-7202 <br>
                        Dirección: Avenida 3, Calle 15, San José, Costa Rica. <br>
                        <a title='MuseoArte' href='https://www.madc.cr/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/museo-arte-diseño-contemporaneo.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="museos" data-etiquetas="museos museo del arte costarricense"
                        data-descripcion="<h2> Museo del Arte Costarricense </h2> <br>Horario: Martes a Domingo de 9:00am a 4:00pm <br>
                        Correo: comunicacion@mac.go.cr <br>
                        Teléfono: (+506) 2257-9370/2257-7202 <br>
                        Dirección: Parque Metropolitano la Sabana, San José, San José, Costa Rica. <br>
                        <a title='MuseoArte2' href='http://www.mac.go.cr/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/museodelartecostarricense.png" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="museos"
                        data-etiquetas="museos museo de ciencias naturales la salle"
                        data-descripcion="<h2> Museo de Ciencias La Salle </h2> <br>Horario: Martes a Sábado de 8:00am a 4:00pm <br> Domingo de 9:00am a 5:00pm <br>
                        Correo: museo@lasalle.ed.cr <br>
                        Teléfono: (+506) 2232-1306 <br>
                        Dirección: Sabana Sur, dentro de las instalaciones del Ministerio de Agricultura y Ganadería (MAG), <br> San José, Costa Rica. <br>
                        <a title='MuseoCiencias' href='https://www.museolasalle.ed.cr/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/museocienciasnaturaleslasalle.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="teatros" data-etiquetas="teatros teatro nacional"
                        data-descripcion="<h2> Teatro Nacional </h2> <br>Horario: Lunes a Domingo de 8:30am a 4:30pm <br> Domingo de 9:00am a 5:00pm <br>
                        Teléfono: (+506) 2010-1100 <br>
                        Dirección: Avenida 2, Calle 5, Catedral, San José, Costa Rica. <br>
                        <a title='TeatroNacional' href='https://www.teatronacional.go.cr/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/teatronacional.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="teatros" data-etiquetas="teatros teatro melico salazar"
                        data-descripcion="<h2> Teatro Popular Melico Salazar </h2> <br>Horario: Martes a Sábado de 9:00am a 4:00pm <br> 
                        Teléfono: (+506) 2295-6000 <br>
                        Dirección: Avenida 2, Calle Central y Calle 2, San José, Costa Rica. <br>
                        <a title='TeatroMelico' href='https://teatromelico.go.cr/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/teatromelicosalazar.png" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="teatros" data-etiquetas="teatros teatro el triciclo"
                        data-descripcion="<h2> Teatro El Triciclo </h2> <br>Horario: Viernes a Domingo de 11:00am a 9:00pm <br> 
                        Teléfono: (+506) 2222-2624 <br>
                        Dirección: Calle 15, Avenida 8 y 10, San José, Costa Rica. <br>
                        <a title='TeatroTriciclo' href='https://www.teatroeltriciclo.com/es/Cartelera#/cartelera'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/teatroeltriciclo.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="teatros" data-etiquetas="teatros teatro torres"
                        data-descripcion="<h2> Teatro Torres </h2> <br>Horario: Viernes a Sábado de 5:00pm a 10:00pm <br> Domingo de 4:00pm a 10:00pm <br>
                        Teléfono: (+506) 8480-9999 <br>
                        Dirección:  Avenida 8, Calle 11 y 13, San José, Costa Rica. <br>
                        <a title='TeatroTorres' href='https://puestaenescena.cr/item/torres/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/teatrotorres.png" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="teatros" data-etiquetas="teatros teatro eugene o'neil"
                        data-descripcion="<h2> Teatro Eugene O'neil </h2> <br>Horario: Lunes a Viernes de 9:00am a 6:00pm <br> Sábado de 8:00am a 5:00pm <br>
                        Teléfono: (+506) 2207-7561 <br>
                        Dirección:  Centro Cultural Costarricense Norteamericano, Los Yoses, Costa Rica. <br>
                        <a title='TeatroEugene' href='https://teo.cr/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/teatroeugeneo'neil.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="teatros" data-etiquetas="teatros teatro expressivo"
                        data-descripcion="<h2> Teatro Expressivo </h2> <br>Horario: Lunes a Jueves de 11:00am a 7:00pm <br> Viernes de 9:00am a 8:00pm <br> Sábado de 8:00am a 8:00pm <br> Domingo de 10:00am a 7:00pm
                        Teléfono: (+506) 2267-1818 <br>
                        Dirección:  Centro Comercial Momentum Pinares, antigua carretera a Tres Ríos, San José, Curridabat, Costa Rica. <br>
                        <a title='TeatroExpressivo' href='https://espressivo.cr/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/teatroexpressivo.png" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="cafeterías" data-etiquetas="cafeterías cafe la mancha"
                        data-descripcion="<h2> Café La Mancha </h2> <br>Horario: Lunes a Sábado de 10:00am a 7:00pm <br> 
                        Teléfono: (+506) 2221-5591 <br>
                        Dirección:  Calle 1, Avenida 0 y 1 Edificio Steinvorth, San Jose, Costa Rica. <br>
                        <a title='CafeLaMancha' href='https://es-la.facebook.com/cafelamancha/'>Facebook</a>">
                        <div class="item-contenido">
                            <img src="imagenes/cafelamancha.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="cafeterías" data-etiquetas="cafeterías cafe more"
                        data-descripcion="<h2> Café More </h2> <br>Horario: Lunes a Viernes de 9:00am a 7:00pm <br> Sábado de 8:00am a 7:00pm <br>
                        Teléfono: (+506) 2221-7504 <br>
                        Dirección:  Calle 1, Avenida 0 y 1, San José, Costa Rica. <br>
                        <a title='CafeMore' href='https://es-la.facebook.com/cafelamancha/'>Facebook</a>">
                        <div class="item-contenido">
                            <img src="imagenes/cafemore.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="cafeterías" data-etiquetas="cafeterías cafe miel"
                        data-descripcion="<h2> Café Miel </h2> <br>Horario: Lunes a Viernes de 10:00am a 6:00pm <br> Sábado de 10:00am a 6:00pm <br>
                        Teléfono: (+506) 2221-0897 <br>
                        Dirección:  Detrás De La Casa Amarilla, San José, Costa Rica. <br>
                        <a title='CafeMiel' href='https://es-la.facebook.com/cafemielcostarica/'>Facebook</a>">
                        <div class="item-contenido">
                            <img src="imagenes/cafemiel.png" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="cafeterías" data-etiquetas="cafeterías cafe otoya"
                        data-descripcion="<h2> Café Otoya </h2> <br>Horario: Lunes a Viernes de 7:00am a 10:00pm <br> Sábado y Domingo de 8:30am a 10:00pm <br>
                        Teléfono: (+506) 7118-2762 <br>
                        Dirección:  Avenida 7, Junto a embajada de México, San José, Costa Rica. <br>
                        <a title='CafeOtoya' href='https://cafeotoya.com/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/cafeotoya.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="cafeterías" data-etiquetas="cafeterías cafe rojo"
                        data-descripcion="<h2> Café Rojo </h2> <br>Horario: Lunes a Domingo de 12:00pm a 8:00pm <br>
                        Teléfono: (+506) 2221-5591 <br>
                        Dirección:  Avenida 7, Amón, San José, Costa Rica. <br>
                        <a title='CafeRojo' href='https://www.caferojo.net/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/caferojo.jpg" alt="">
                        </div>
                    </div>

                    <div class="item" data-categoria="cafeterías" data-etiquetas="cafeterías cafe kracovia"
                        data-descripcion="<h2> Café Kracovia </h2> <br>Horario: Lunes a Sábado de 11:30am a 9:00pm <br> Domingo de 11:30am a 8:00pm
                        Teléfono: (+506) 2253-9093 <br>
                        Dirección:  50 metros norte de la Facultad de Derecho, UCR, San Pedro, San José, Costa Rica <br>
                        <a title='CafeKracovia' href='https://www.cafekracovia.com/'>Link de la página</a>">
                        <div class="item-contenido">
                            <img src="imagenes/cafekracovia.jpg" alt="">
                        </div>
                    </div>


                </section>
                <!--FINAL DE LA SECCION DE IMAGENES EN LOS DIVS-->

                 <!-- Con base en el video de FalconMasters (2019) nos referenciamos para hacer las ventanas emergentes con las imágenes y la información -->                        
                <!--INICIO DE VENTANA EMERGENTE AL DAR CLICK A LA IMAGEN-->
                <section class="overlay" id="overlay">
                    <div class="contenedor-img">
                        <button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
                        <img src="" alt="">
                    </div>
                    <p class="descripcion"></p>
                </section>
                <!--FINAL DE VENTANA EMERGENTE AL DAR CLICK A LA IMAGEN-->

                <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
                <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
                <script src="JavaScript/galeriaimg.js"></script>

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
<hr>

<!-- Con base en el video de MagtimusPro (2019) nos referenciamos para hacer las ventanas emergentes ccon la información de la empresa y el funcionamiento de la aplicación web --> 
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

<!--  Referencias: -->
<!--  FalconMasters. (2019). Como hacer un portafolio dinámico con HTML CSS y Javascript. [video]. Youtube.  https://www.youtube.com/watch?v=42T31laI9Qs&t=5749s -->
<!--  MagtimusPro. (2021). Como CREAR MENÚ LATERAL DESPLEGABLE con HTML - CSS - JS || 2021. [video]. Youtube.  https://www.youtube.com/watch?v=idRdAgNnC5Q&t=3005s -->
<!--  MagtimusPro. (2019). Como hacer Popup con PURO CSS . [video]. Youtube.  https://www.youtube.com/watch?v=XkicFDWDiLY -->
<!--  Sin Rueda Tecnológica. (2022). ¿Cómo Guardar, Mostrar, Actualizar y Eliminar Registros en PHP y MySQL?. [video]. Youtube. https://www.youtube.com/watch?v=wzB-2S1d32o&t=5s -->