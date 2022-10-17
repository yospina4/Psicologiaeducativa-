<?php

$conexion=mysqli_connect('localhost','root','','smc_datos');

error_reporting(E_ALL);
ini_set('display_errors', '1');

$sql = 'SELECT * FROM usuarios';
$result = $conexion->query($sql);
session_start();



?>


<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <title>
            La psicología educativa
        </title>
        <link href="style\style.css" rel="stylesheet" type="text/css">
        <!-- CSS only -->
        <link href="C:\Users\57319\OneDrive\Escritorio\Proyecto\style\style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
       <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"  rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
    </head>

<body>

<!-- Navbar -->
      <!--Codigo menù-->
<!-- Navbar -->
<nav class="navbar  navbar-expand-lg navbar-light bg-dark " id="menu">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="index.php">
      <img
        src="imagenes\img-banner-4.png"
        height="80"
        width="150"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     
      </ul>
      <!-- Left links -->
      <div class="d-flex align-items-center col-md-8 " id="navbarNavDropdown">
        <b><ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link" href="metodo-aplicacion.html">Método de aplicación</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="terapia.html">Terapia psicologica </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="asesoramiento.html">Asesoramiento </a>
          </li>

          <li class="nav-item">
             <u> <a class="nav-link"  href="insert.php" > Dejános tus datos</a> </u>
          </li>
        </ul></b>

      </div>




      <div class="d-flex align-items-center">
        
        <a href="login.php">Iniciar sesión<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>Iniciar sesión</a>
        </svg>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>

    <div class="col-md-6" align="center">
      
      <?php if( isset($_SESSION['msg']) ) { ?>
        <br>
        <div class="alert alert-success" role="alert">
          <?php echo $_SESSION['msg']; ?>
        </div>
      <?php  session_destroy(); } ?>
     </div>


      <!--fin de menù-->

        <div class="container-fluid">
            <!-- Codigo corrusel -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imagenes\terapia-slider2.jpg" class="d-block w-100" alt=""  style="height: 500px;">
                  </div>
                  <div class="carousel-item">
                    <img src="imagenes\asesoramiento1.jpg" class="d-block w-100" alt=""  style="height: 600px;">
                  </div>
                  <div class="carousel-item">
                    <img src="imagenes\img-banner-3.jpg" class="d-block w-100" alt=""  style="height: 500px;">
                  </div>
                </div>
                
            </div>
            <!--fin carrusel 3-->
           
          <!-- frase-->
          <div class="container text-center" id="container-frase">
            <h5 id="frase" >Cree en ti mismo y en lo que eres, se consiente de que hay algo en tu interior que es mas grande que cualquier obstáculo, 
              recuerda que estoy para ayudarte y lograr una transformación en tu vida, no estás solo/a.
                </h5>  
                <br>
            
          </div>
          <br>
          <!-- fin frase-->
          
          
          <div class="container text-justify" id="container-Informacion-psicologica">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                        <div class="card"> 
                          
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" id="iconos">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <div class="card-body">
                            <h5 class="card-title" style="font-family: cursive;">Terapia psicológica</h5>
                            <p class="card-text" style="font-family: cursive;">
                              Por medio de la terapia psicológica vamos a poner en práctica formas eficaces de solucionar, afrontar, manejar, superar o prevenir aquellos problemas psicológicos o situaciones problemáticas y dificultades, 
                              tanto internas como externas, que hacen que te sientas mal en algún momento de tu vida.
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" id="iconos"> 
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <div class="card-body">
                            <h5 class="card-title" style="font-family: cursive;">Asesoramiento a tus problemas</h5>
                            <p class="card-text" style="font-family: cursive;">Para comprender y solucionar situaciones en las que te sientes perdido/a, no sabes decidir, no te adaptas bien a determinados acontecimientos y/o relaciones,te sientes sin motivación,te sientes mal contigo mismo,por medio del asesoramiento voy a mejorar tu calidad, 
                              inclusión social y lo mas importante, tu bienestar emocional.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" id="iconos">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <div class="card-body">
                            <h5 class="card-title" style="font-family: cursive;">Test de personalidad</h5>
                            <p class="card-text" style="font-family: cursive;">Mi objetivo es evaluar la cantidad y calidad de tu capacidad intelectual como individuo, es decir tu nivel de conocimientos en áreas específicas como verbal, 
                              numérica y abstracta, para conocer el tipo de actividades en las que presentas más habilidades. </p>
                           <button type="button" class="btn btn-success text-center"  data-bs-toggle="modal" data-bs-target="#test">Realiza el test </button>
                              
                              

                            </div>
                        </div>
                        </div>
                    

             </div>
             

            </div> 
             <br>
             <br>
             <!-- Video y texto -->
            <div class="container text-justify">
                    <div class="row row-cols-2">
                           <div class="col" style="font-family: cursive;">
                            <h2>Sabías que..!</h2>
                            <ul>
                                <li> Por medio del video quiero que tengas un acercamiento más real sobre el objetivo principal de mi acompañamiento durante tu proceso, no tengas miedo, 
                                llenando el formulario quedaras registrado para así mismo poder evaluar de
                                manera eficaz tus problemas y como juntos lo podemos cambiar tu forma de ver las 
                                situaciones en las que te encuentras.</li>
                            
                            <li> Una vez que llenes el formulario, dentro de la institución educativa se 
                              llevara a cabo una intervención para mejorar tu bienestar.</li>
                              </ul>
                            
                            
                            </div>
                            <div class="col">
                                <iframe width="500" height="350" src="https://www.youtube.com/embed/KsTMBN99BUQ" title="Bienestar personal" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                
                            </div>
                           
                            
                    </div>
            </div>
           <!--fin video--> 
        </div>

<!-- Modal Test -->
<div class="modal fade" id="test" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: cursive;">Test de psicologia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="font-family: cursive;">
          <p>El test ha sido creado para conocer a qué tipo de patrón de personalidad perteneces tu. Es importante que la respuesta sea lo más sincera posible.</p>
          <p>Un test psicológico de personalidad sirve para evaluar cómo trabajas, aprendes y te comunicas con tu entorno. Este tipo de información se obtiene a medir las respuestas que ofrece en relación a determinados factores.</p>

      </div>
      <div class="modal-footer">
        <a href="https://pasespana.org/test-ninos-altamente-sensibles/" target="_blank"><button type="button" class="btn btn-danger">Iniciar</button></a>
      </div>
    </div>
  </div>
</div>

    </body> 
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">      
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contacto</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white"><b>Telefono : </b>3197438086</a>
              </li>
              <li>
                <a href="#!" class="text-white"><b>Email : </b> pao.ospina@gmai.com</a>
              </li>
              <li>
                <a href="#!" class="text-white"><b>Dirección : </b> Calle 40 sur - Bogotá</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
            <h5 class="text-uppercase">Siguenos</h5>
  
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>
        <!-- Twitter -->
        <a class="btn btn-primary" style="background-color: #419cab;" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>
        <!-- WhatsApp -->
        <a class="btn btn-primary" style="background-color: #1cb319;" href="#!" role="button"
        ><i class="fab fa-whatsapp"></i
      ></a>        

  
        <!-- Instagram -->
        <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>   
      </section>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
            <ul class="list-unstyled mb-0">
            <li>
              <a href="https://mdbootstrap.com/docs/standard/extended/social-media/" class="text-white"><b> Instagram: </b>https://www.instagram.com/</a>
            </li>
            <li>
              <a href="#!" class="text-white"><b>Facebook: </b> https://www.facebook.com/</a>
            </li>
            <li>
              <a href="#!" class="text-white"><b> Whatsapp </b> 3197438086</a>
            </li>
          </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Yesika Paola Ospina</a>
    </div>
    <!-- Copyright -->
</footer>
  <!-- Footer -->    
</html>







