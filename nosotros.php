<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <title>Acerca de nosotros</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".boton").click(function () {
                $("#panel").slideToggle("slow");
            });
            $(document).ready(function () {
                $(".text-success").click(function () {
                    $("#img1").animate({
                        height: 'toggle'
                    });
                });
            });
            $(document).ready(function () {
                $("#img2").width(60).height(30).click(function () {
                    $(this).animate(
                        {
                            marginLeft: "10px",
                            width: "600px",
                            height: "300px"
                        }, 2000);
                })
            });
        });
    </script>
    <style>
        #panel {
            padding: 20px;
            display: none;
        }

        #par1 {
            color: blue;
        }

        #par2 {
            color: rgb(48, 158, 34);
        }

        #par3 {
            color: rgb(1, 44, 42);
        }

        #par4 {
            color: rgb(184, 61, 61);
        }
    </style>
</head>

<body>
    <header class="top">
        <div class="header-area two header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="logo">
                            <a href="Inicio.html"><img src="img/espe.png" alt="espe" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-6">
                        <div class="content-wrapper text-right">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="Inicio.html">Inicio</a></li>
                                        <li><a href="estudiantes.html">Estudiantes</a></li>
                                        <li><a href="profesores.html">Carreras</a></li>
                                        <li><a href="contacto.html">Contactos</a></li>
                                        <li><a href="nosotros.html">Acerca de nosotros</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <center>
                    <h2 class="text-success">Acerca de nosotros</h2>
                </center>
                <center>
                    <p class="text-secondary">"Confía en ti mismo sin importar lo que los demás piensen."</p>
                </center>
            </div>
            <div class="position-relative mt-4">
                <img src="educacion-a-distancia-Jose-Laparra-1080x560.jpg"
                    class="img-fluid rounded-4 border border-success" alt="" id="img1">
            </div>
            <br><br>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <img src="about.jpg" class="img-fluid rounded-4 mb-4 border border-success" alt="" id="img2">
                    <p class="text-bg-light">Misión
                        Garantizar el acceso y calidad de la educación a los y las habitantes del territorio nacional,
                        mediante la
                        formación integral, holística e inclusiva de niños, niñas, jóvenes y adultos, tomando en cuenta
                        la
                        interculturalidad, la plurinacionalidad, las lenguas ancestrales y género desde un enfoque de
                        derechos y
                        deberes para fortalecer el desarrollo social, económico y cultural, el ejercicio de la
                        ciudadanía y la
                        unidad en la diversidad de la sociedad ecuatoriana.
                    </p>
                    <p class="text-bg-light">Visión
                        El Sistema Nacional de Educación brindará una educación centrada en el ser humano, con calidad,
                        calidez,
                        integral, holística, crítica, participativa, democrática, inclusiva e interactiva, con equidad
                        de género,
                        basado en la sabiduría ancestral, plurinacionalidad, con identidad y pertinencia cultural que
                        satisface las
                        necesidades de aprendizaje individual y social, que contribuye a fortalecer la identidad
                        cultural, la
                        construcción de ciudadanía, y que articule los diferentes niveles y modalidades del sistema de
                        educación.
                    </p>
                    <form method="post">
                        <h1>Dejanos tu opinión</h1>
                        <input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
                        <br>
                        <input type="txt" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                        <br>
                        <input type="txt" name="apellido" id="apellido" placeholder="Ingrese su apellido">
                        <br>
                        <input type="txt" name="genero" id="genero" placeholder="Ingrese su genero">
                        <br>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10"
                            placeholder="Ingrese su mensaje"></textarea>

                        <br>
                        <input type="submit" name="btn" id="btn" value="Enviar">
                    </form>
<br>
                   



                    <?php

if (isset($_POST ['abrir'])){
    $archivo = $_POST['namefile'];
    if(file_exists ($archivo)){
        $contenido =file_get_contents($archivo);
        // echo $contenido; //esto va ir comentando ya que nos sal en ela parte de arriba
    }
 }



                    ?>


                    <br><br>

                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <p class="boton">
                            <input type="button" value="Valores" class="btn btn-primary"
                                style="height: 30px; width: 80px; font-size: 15px;">
                        </p>
                        <ul id="panel">
                            <p id="par1"><i class="bi bi-check-circle-fill">Honestidad, para tener comportamientos
                                    transparentes –honradez,
                                    sinceridad, autenticidad, integridad­– con nuestros semejantes y permitir que la
                                    confianza colectiva se
                                    transforme en una fuerza de gran valor.</i></p>
                            <p id="par2"><i class="bi bi-check-circle-fill">Justicia, para reconocer y fomentar las
                                    buenas acciones y
                                    causas, condenar aquellos comportamientos que hacen daño a los individuos y a la
                                    sociedad, y velar por
                                    la justicia a fin de que no se produzcan actos de corrupción.</i></p>
                            <p id="par3"><i class="bi bi-check-circle-fill">Respeto, empezando por el que nos debemos a
                                    nosotros mismos y a
                                    nuestros semejantes, al ambiente, a los seres vivos y a la naturaleza, sin olvidar
                                    las leyes, normas
                                    sociales y la memoria de nuestros antepasados.</i></p>
                            <p id="par4"><i class="bi bi-check-circle-fill">Responsabilidad, para darnos cuenta de las
                                    consecuencias que
                                    tiene todo lo que hacemos o dejamos de hacer, sobre nosotros mismos o sobre los
                                    demás, y como garantía
                                    de los compromisos adquiridos.</i></p>
                        </ul>
                        <div class="position-relative mt-4">
                            <img src="about-2.jpg" class="img-fluid rounded-4 border border-warning" alt="">
                            <br> <br>
                            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
                        <input type="file" name="namefile" id="">
                        <input type="submit" name="abrir" value="abrir archivo">
                    </form>
                            <br>
                            <textarea name="mensaje" id="contenido" cols="30" rows="10">
                            <?php global $contenido; 
                        if (!empty($contenido)) {
                            echo $contenido;
                        }
                        ?>
                            </textarea>
                        </div>

                    </div>

                </div>


            </div>
            <br>





        </div>


    </section>




    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; UFA - ESPE</p>
        </div>
        <p class="m-0 text-center text-white">Nicolás Andrés Lara Caicedo</p>
    </footer>
</body>
<script src="script.js"></script>

</html>

<?php
#guardar todos los datos del formulario en txt
if (isset($_POST['btn'])) {
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $genero = $_POST['genero'];
    $mensaje = $_POST['mensaje'];

    $archivo = fopen("Lara.txt", "a+");
    fwrite($archivo, "Correo: " . $correo . "\r\n");
    fwrite($archivo, "Nombre: " . $nombre . "\r\n");
    fwrite($archivo, "Apellido: " . $apellido . "\r\n");
    fwrite($archivo, "Genero: " . $genero . "\r\n");
    fwrite($archivo, "Mensaje: " . $mensaje . "\r\n");
    fwrite($archivo, "----------------------------------------" . "\r\n");
    fclose($archivo);


}
#cargar archivo txt y mostrar en textarea





#bloquear el ingreso de numeros por teclado en nombre con javascript
echo "<script>
    document.getElementById('nombre').addEventListener('keypress', () => {
        if(event.keyCode >= 48 && event.keyCode <= 57){
            event.returnValue = false;
        }
    });

    document.getElementById('apellido').addEventListener('keypress', () => {
        if(event.keyCode >= 48 && event.keyCode <= 57){
            event.returnValue = false;
        }
    });

    document.getElementById('genero').addEventListener('keypress', () => {
        if(event.keyCode >= 48 && event.keyCode <= 57){
            event.returnValue = false;
        }
    });

    document.getElementById('mensaje').addEventListener('keypress', () => {
        if(event.keyCode >= 48 && event.keyCode <= 57){
            event.returnValue = false;
        }
    });

</script>";





?>



<?php

echo "<style>
    form{
        width: 500px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }
    form h1{
        text-align: center;
        color: #000;
        text-transform: uppercase;
        margin-bottom: 30px;
    }
    form input{
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        outline: none;
    }
     textarea{
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        outline: none;
    }
    form input[type=submit]{
        background: #000;
        border: 0;
        color: #fff;
        cursor: pointer;
    }
    form input[type=submit]:hover{
        background: #666;
        transition: .6s;
    }
    </style>";
?>
