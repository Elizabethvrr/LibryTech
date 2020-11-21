<?php
//seguridad de ssesiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if($varsesion== null || $varsesion=''){
    header("location:index.php");
    die();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librytech</title>
</head>
<body>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>

    <nav> 
        <div class="container">
            <nav class="nav-main">
                    <img src="img/logo libretech.png" alt="Librytech logo" class="nav-brand">
                <ul class="nav-menu show">
                    <li>
                        <a href="#">Librytech</a>
                        <!-- FONT AWOZONE (CLASE) -->
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
                        <!--FONT OSWALD-->
                        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
                        <!--CUSTOM CSS-->
                        <link rel="stylesheet" href="styles2.css">
                    </li>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="registro.php">Registro</a>
                    </li>
                    <li>
                        <a href="proximamente.php">Entregas</a>
                    </li>
                    <li>
                        <a href="cerrar_sesion.php">Cerrar sesión</a>
                    </li>
                </ul>
                <ul class="nav-menu-right">
                    <li>
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <hr>
            
            <!--SHOWCASSE-->
            <header class="showcase">
            <h2>¡Bienvenido a Librytech!</h2>
            <p>En este sitio encontrarás tu registro sobre el apartado de libros de la biblioteca</p>
            <a href="registro.php" class="btn">Comenzar Registro<i class="fas fa-angle-double-right"></i></a></header>
            <!--NEWS CARDS-->
            <div class="news-cards">
                <div>
                    <img src="img/lopo azul.png" alt="">
                    <h3>¿Cómo es su función?</h3>
                    <p>En la sección de <strong>Registro</strong> puedes ir registrando en una base de datos los libros que tomarán prestados.</p>
                    <a href="registro.php">Registro <i class="fas fa-angle-double-rigth"></i></a>
                </div>
                <div>
                    <img src="img/portada13.png" alt="">
                    <h3>¿Cómo sabre cuándo deben devolver el libro prestado?</h3>
                    <p>En la sección <strong>Entregas</strong> se almacenan los registros, en el apartado <strong>Entregas recientes</strong>se muestran las entregas más recientes</p>
                    <a href="#">Entregas <i class="fas fa-angle-double-rigth"></i></a>
                </div>
                <div>
                    <img src="img/DatosMaestrosClave.jpg" alt="">
                    <h3>¿Cómo sabrán ellos cuándo deben devolver el libro prestado?</h3>
                    <p>Llegará a su correo electronico un mensaje un día antes de la entrega avisándole.</p>
                </div>
                <div>
                    <img src="img/unnamed.jpg" alt="">
                    <h3>¿Cómo se le notifica al correo electronico del alumno?</h3>
                    <p>Al momento de hacer el registro de datos el alumno pondrá su correo electronico y ese lo tomaremos para que se le notifique.</p>
                </div>
                <section class="cards-banner-one">
                    <div class="content">
                        <h2></h2>
                    </div>
                </section>
            </div>
                        <!--NEWS CARDS-->
                        <div class="news-cards">
                            <div>
                                <img src="img/virtual.jpg" alt="">
                                <h3>¡No olvidarán de hacer la entrega!</h3>
                                <p>Al alumno le llega automáticamente un correo sobre la entrega del libro</p>
                            </div>
                            <div>
                                <img src="img/unnamed (1).jpg" alt="">
                                <h3>Libros</h3>
                                <p>¡Se puede registrar cualquier libro!</p>
                            </div>
                            <div>
                                <img src="img/pc.jpg" alt="">
                                <h3>Sobre la entrega...</h3>
                                <p>Alumnos que aún no entregan el libro y ya se les notificó se quedarán registrados hasta finalizar la entrega</p>
                            </div>
                            <div>
                                <img src="img/pl.jpeg" alt="">
                                <h3>Más de la entrega</h3>
                                <p>Los que no entreguen el libro seguirán registrados con todos sus datos para localizarlos</p>
                            </div>

                            <section class="cards-banner-two">
                                <div class="cards-banner-two">
                                    <div class="content">
                                        <h2>La web...</h2>
                                        <p>Este sitio está programado especialmente para el registro de datos de bibliotecas</p>
                                    </div>
                                </div>
                            </section>
        </div>
    </nav>
        </div>
    </section>
    <div class="footer-links">
        <div class="footer-container">
            <ul>
                <li>
                    <p href="#" class="epa">Cuanto</p>
                </li>
                <li>
                    <p href="#" class="epa">más lees,</p>
                </li>
                <li>
                    <p href="#" class="epa">más cosas sabrás</p>
                </li>
                <li>
                    <p href="#" class="epa"> Cuantas más </p>
                </li>
                <li>
                    <p href="#" class="epa">cosas aprendas</p>
                </li>
                <li>
                    <p href="#" class="epa">a más lugares viajaras.</p>
                </li>
                <li>
                    <p href="#">
                        <h3 class="epa">Abraham Lincoln.</h3>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <p href="#" class="epa">Un lector vive</p>
                </li>
                <li>
                    <p href="#" class="epa">mil vidas</p>
                </li>
                <li>
                    <p href="#" class="epa">antes de morir.</p>
                </li>
                <li>
                    <p href="#" class="epa">El que nunca</p>
                </li>
                <li>
                    <p href="#" class="epa">lee </p>
                </li>
                <li>
                    <p href="#" class="epa">solo vive una.</p>
                </li>
                <li>
                    <a href="#">
                        <h3 class="epa">-George R.R. Martin.</h3>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <p href="#" class="epa">La lectura de</p>
                </li>
                <li>
                    <p href="#" class="epa"> todos los buenos libros</p>
                </li>
                <li>
                    <p href="#" class="epa"> es como una conversación</p>
                </li>
                <li>
                    <p href="#" class="epa">con las mejores</p>
                </li>
                <li>
                    <p href="#" class="epa">personas de </p>
                </li>
                <li>
                    <p href="#" class="epa">los siglos pasados.</p>
                </li>
                <li>
                    <a href="#">
                        <h3 class="epa">-René Descartes.</h3>
                    </a>
                </li>
            </ul>
                        <ul>
                <li>
                    <a href="#">Pienso en la vida</a>
                </li>
                <li>
                    <a href="#">como un buen libro. </a>
                </li>
                <li>
                    <a href="#">Cuanto más lejos llegas,</a>
                </li>
                <li>
                    <a href="#"> más comienza</a>
                </li>
                <li>
                    <a href="#"> a tener</a>
                </li>
                <li>
                    <a href="#">sentido</a>
                </li>
                <li>
                    <a href="#">
                        <h3>-Harold Kushner.</h3>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <footer class="footer"><h3>Librytech Copyright</h3></footer>
    <!--SCROLL REVEAL-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--CUSTOM JS-->
    <script src="main.js"></script>

</body>
</html>