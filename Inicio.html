<?php
session_start(); // Inicia la sesión para utilizar una variable de sesión

if (!isset($_SESSION['clicks'])) {
    $_SESSION['clicks'] = 0; // Inicializa la variable de sesión 'clicks' si aún no existe
}

// Si se ha hecho clic en el botón 'clicked', incrementa la variable de sesión 'clicks'
if (isset($_POST['clicked'])) {
    $_SESSION['clicks']++;
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <title>Inicio | UFA-ESPE</title>
</head>
<style>
    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .card {
        border-radius: 20px;
        border: none;
    }

    .card-body {
        text-align: center;
        padding: 2rem;

    }

    .wel {
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
    }

    .btn {
        font-family: 'Roboto', sans-serif;
        background-color: green;
        border-color: green;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }

    .parrafo {
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
    }

    .strong {
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
    }

    /* Estilos para el título central */
    #ufa-espe {
        font-family: 'Roboto', sans-serif;
        font-size: 5rem;
        font-weight: bold;
        border-color: greenyellow;
        color: black;
        text-shadow: 2px 2px #000;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        cursor: pointer;
        transition: transform 0.5s ease-in-out;
    }

    #ufa-espe:hover {
        transform: scale(1.2);
    }

    img {
        width: 100%;
        height: 100%;
    }

    hr {
        border: 1px solid green;
    }
    body {
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
        }
        form {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ccc;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ddd;
        }
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

</style>
<script>

    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    //animar al strong
    $(document).ready(function() {
        $('strong').mouseenter(function() {
            $(this).animate({
                fontSize: '+=5px'
            });
        });
        $('strong').mouseleave(function() {
            $(this).animate({
                fontSize: '-=5px'
            });
        });
    });

    //animar al h1
    $(document).ready(function() {
        $('h1').mouseenter(function() {
            $(this).animate({
                fontSize: '+=5px'
            });
        });
        $('h1').mouseleave(function() {
            $(this).animate({
                fontSize: '-=5px'
            });
        });
    });
    //Cambiar de los botones a rojo al pasar el mouse 
    $(document).ready(function() {
        $('button').mouseenter(function() {
            $(this).css("background-color", "red");
        });
        $('button').mouseleave(function() {
            $(this).css("background-color", "green");
        });
    });

    //Al dar doble click desaparecen los parrafos y al dar en las imagenes aparecen
    $(document).ready(function() {
        $('p').dblclick(function() {
            $(this).hide();
        });
        $('img').dblclick(function() {
            $(this).show();
        });
    });
    //Cambiar las etiquetas "a" a amarillo al pasar el mouse
    $(document).ready(function() {
        $('a').mouseenter(function() {
            $(this).css("color", "yellow");
        });
        $('a').mouseleave(function() {
            $(this).css("color", "black");
        });
    });
    //Hacer desbanecer las imagenes al pasar el mouse
    $(document).ready(function() {
        $('img').mouseenter(function() {
            $(this).fadeTo("slow", 0.5);
        });
        $('img').mouseleave(function() {
            $(this).fadeTo("slow", 1);
        });
    });
    document.addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', window.location.href);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('clicked=true');
    });

    // Función que se ejecuta cuando se hace click en el botón de reiniciar clicks debe reiniciar inclusive los clicks almacenados en la base de datos
    function resetClicks() {
        // Haces una petición AJAX para enviar un comando al servidor para reiniciar el contador de clicks
        // Por ejemplo, utilizando la librería jQuery:
        $.ajax({
            url: 'inicio.php', // Ruta del script PHP que reinicia el contador
            method: 'POST',
            success: function(response) {
                // Si la petición fue exitosa, actualizas el contador de clicks en el frontend
                document.getElementById('clicks').innerHTML = 0;
            },
            error: function(xhr, status, error) {
                // Si hubo un error en la petición, muestras un mensaje de error
                alert('Hubo un error al reiniciar los clicks.');
            }
        });
    }
</script>

<body>

    <!--Inicio de la barra de navegacion-->
    <div class="superNav border-bottom py-2 bg-light wel">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">

                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm wel">
            <div class="container">
                <a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>UFA-ESPE</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
                    <div class="input-group">
                        <span class="border-warning input-group-text bg-success text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control border-warning" style="color:lightgreen">
                        <button class="btn btn-success text-white">Search</button>
                    </div>
                </div>
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="ms-auto d-none d-lg-block">
                        <div class="input-group">
                            <span class="border-warning input-group-text bg-success text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" class="form-control border-warning" style="color:lightgreen">
                            <button class="btn btn-success text-white">BUSCAR</button>
                        </div>
                    </div>

                    <ul class="navbar-nav ms-auto wel ">
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase active wel" aria-current="page" href="#">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="estudiantes.html">ESTUDIANTES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="profesores.html">DOCENTES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="contacto.html">CONTACTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="nosotros.html">ACERCA DE NOSOTROS</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto ">
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <br>

    <!--Insertar y centrar el titulo-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 id="ufa-espe">UFA-ESPE</h1>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>

    <!--crear un contenedor para un parrafo y y que el parrado este centrado-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="text-center">La Universidad de las Fuerzas Armadas ESPE es una institución de educación superior pública, autónoma, descentralizada, de carácter técnico profesional, con autonomía académica, administrativa y financiera, que tiene como misión formar profesionales de excelencia, con sentido de pertenencia a la patria, con conciencia social y comprometidos con el desarrollo del país.</p>
            </div>
        </div>
    </div>
    <br>

    <!--Crea un Main pero usando los estilos de Boostrap usa 3 contenedores con estilos geniales y lujosos-->
    <main class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5" style="background-color: rgba(0, 128, 0, 0.2);">
                        <h1 class="font-weight-light">Estudiantes</h1>
                        <p class="lead">¡Bienvenidos a nuestra universidad! Aquí encontrarás una amplia variedad de cursos y programas de grado que te ayudarán a prepararte para una carrera exitosa. También ofrecemos una variedad de servicios y recursos para estudiantes, desde tutorías hasta oportunidades de prácticas laborales.</p>
                        <a href="estudiantes.html" class="btn btn-success btn-lg">Ingresar</a> 
                    </div>
                </div>
            </div>
        </div>
    </main>

    <article class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5" style="background-color: rgba(0, 128, 0, 0.2);">
                        <h1 class="font-weight-light">Docentes</h1>
                        <p class="lead">¡Bienvenidos al departamento de docentes de nuestra universidad! Aquí encontrarás información sobre los programas académicos, las oportunidades de investigación y los recursos para profesionales de la educación.</p>
                        <p class="lead">También ofrecemos programas de formación continua y talleres para ayudar a nuestros profesores a mantenerse actualizados sobre las últimas tendencias en pedagogía y tecnología educativa.</p>
                        <a href="nosotros.html" class="btn btn-success btn-lg">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <section class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5" style="background-color: rgba(0, 128, 0, 0.2);">
                        <h1 class="font-weight-light">Contactos</h1>
                        <p class="lead">¿Tienes preguntas o comentarios? ¡Estamos aquí para ayudarte! Nuestro equipo de atención al cliente está disponible las 24 horas del día, los 7 días de la semana para responder cualquier pregunta que tengas sobre nuestra universidad, nuestros programas y nuestros servicios.</p>
                        <p class="lead">También puedes contactarnos a través de correo electrónico o por teléfono para obtener más información sobre cómo unirte a nuestra comunidad universitaria.</p>
                        <a href="nosotros.html" class="btn btn-success btn-lg">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Crear un carrete de imagenes con boostrap y con estilos deja los espacio entre las imagenes-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5" style="background-color: rgba(0, 128, 0, 0.2);">
                        <h1 class="font-weight-light">Estudiantes</h1>
                        <img src="https://ed100.org/img/auth/featured/2.0-e1394399884521.jpg" alt="Estudiantes">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5" style="background-color: rgba(0, 128, 0, 0.2);">
                        <h1 class="font-weight-light">Docentes</h1>
                        <img src="https://humanidades.com/wp-content/uploads/2017/03/buen-docente-caracteristicas-min-e1564597256335.jpg" alt="Docentes">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5" style="background-color: rgba(0, 128, 0, 0.2);">
                        <h1 class="font-weight-light">Contactos</h1>
                        <img src="https://www.clasesdeperiodismo.com/wp-content/uploads/2016/05/contactos.jpg" alt="Contactos">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Crear campos para la aplicacion de las funciones-->
    <form method="post" action="">
        <legend style="text-align: center;">ENCUESTA RÁPIDA</legend>

        <label for="nombre">Nombres:</label>
        <input type="text" name="nombre" id="numeros"><br><br>

        <!--Crear dos campos uno para apellido-->
        <label for="apellido">Apellidos:</label>
        <input type="text" name="apellido" id="apellido"><br><br>

        <!--Crear un campo para saber de que ciudad es-->
        <label for="ciudad">Ciudad:</label>
        <select name="ciudad" id="ciudad">
            <option value="sele">Seleccione una ciudad</option>
            <option value="Azuay">Azuay</option>
            <option value="Bolivar">Bolivar</option>
            <option value="Cañar">Cañar</option>
            <option value="Carchi">Carchi</option>
            <option value="Chimborazo">Chimborazo</option>
            <option value="Cotopaxi">Cotopaxi</option>
            <option value="El Oro">El Oro</option>
            <option value="Esmeraldas ">Esmeraldas</option>
            <option value="Galápagos">Galápagos</option>
            <option value="Guayas">Guayas</option>
            <option value="Imbabura">Imbabura</option>
            <option value="Loja">Loja</option>
            <option value="Los Rios">Los Rios</option>
            <option value="Manabí">Manabí</option>
            <option value="Morona Santiago">Morona Santiago</option>
            <option value="Napo">Napo</option>
            <option value="Orellana">Orellana</option>
            <option value="Pastaza">Pastaza</option>
            <option value="Pichincha">Pichincha</option>
            <option value="Santa Elena">Santa Elena</option>
            <option value="Santo Domingo de los Tsáchilas">Santo Domingo de los Tsáchilas</option>
            <option value="Sucumbíos">Sucumbíos</option>
            <option value="Tungurahua">Tungurahua</option>
            <option value="Zamora Chinchipe">Zamora Chinchipe</option>
        </select><br><br>
        
        <label for="estudiante">Eres Estudiante:</label>
        <select name="estudiante" id="estudiante"><br>
            <option value="si">Si</option>
            <option value="no">No</option>
        </select><br><br>

        <!--Crear un campo para Opciones con el texto definido de ampliar-->
        <label for="modo">Opciones:</label>
        <select name="modo" id="modo"><br>
            <option value="ampliar">Ampliar</option>
        </select><br><br>

        <!--Crear un boton para enviar los datos-->
        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
       function escribirNOmbre ($nombre, $apellido, $estudiante, $ciudad, $modo) {
        $nombre_archivo ="DatosGuardadosProyecto.txt"; 
        $abrir_modos = array(
            'sobreescribir' => 'w',
            'ampliar' => 'a'
        );
        if (isset($abrir_modos[$modo])) { 
            // abrir el archivo en el modo especificado
            $archivo = fopen($nombre_archivo, $abrir_modos[$modo]);
            // escribir cada ingreso de todos los campos en una línea separada
            foreach ($nombre as $key => $value) {
                fwrite($archivo, "----------------------------------------" . "\r\n");
                fwrite($archivo, "Nombre: " . $nombre[$key] . "\r \n");
                fwrite($archivo, "Apellido: " . $apellido[$key] . "\r \n");
                fwrite($archivo, "Estudiante: " . $estudiante[$key] . "\r \n");
                fwrite($archivo, "Ciudad: " . $ciudad[$key] . "\r \n");
            }
            // cerrar el archivo
            fclose($archivo);
            // mostrar mensaje de éxito en un párrafo con estilos y con alerta de javascript
            echo "<script>alert('Datos guardados con éxito.');</script>";
            echo "<p style='color: green; text-align: center;'>Datos guardados con éxito.</p>";

        } else {
            // mostrar mensaje de error en un párrafo con estilos
            echo "<p style='color: red; text-align: center;'>No se ha podido guardar los datos.</p>";
        }
    }
    // comprobar si el formulario ha sido enviado
    if (isset($_POST['nombre'])) {
        // obtener los valores del formulario de todos los campos
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $estudiante = $_POST['estudiante'];
        $ciudad = $_POST['ciudad'];
        $modo = $_POST['modo'];
        // convertir los campos en un array
        $nombre = explode(',', $nombre);
        $apellido = explode(',', $apellido);
        $estudiante = explode(',', $estudiante);
        $ciudad = explode(',', $ciudad);
        // llamar a la función escribirNOmbre()
        escribirNOmbre($nombre, $apellido, $estudiante, $ciudad ,$modo);
    }
    ?>
        <!--Crear un div que tenga de titulo el total de clicks hechos en la pagina-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card border-0 shadow my-5">
                        <div class="card-body p-5" style="background-color: rgba(0, 128, 0, 0.2);">
                            <h1 class="font-weight-light">Total de clicks</h1>
                            <p class="lead">Total de clicks: <span id="clicks"><?php echo $_SESSION['clicks']; ?></span></p>
                            <!--Boton para reiniciar el contador-->
                            <button class="btn btn-primary btn-lg" id="btnReset" onclick="resetClicks()">Reiniciar contador</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; UFA - ESPE</p>
            </div>
            <p class="m-0 text-center text-white">Brandon Joseph Bermello Maldonado</p>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/funciones.js"></script>
    

</body>

</html>
