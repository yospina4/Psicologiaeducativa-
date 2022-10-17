<?php
session_start();
$conexion=mysqli_connect('localhost','root','','smc_datos');
$email = '';
$password = '';

if (isset($_POST['email']) && isset($_POST['password'])){
  $email = ($_POST['email']);
  $password = ($_POST['password']);
};

$sql = 'SELECT * FROM administradores where correo = "'.$email.'" and password = "'.$password.'"';
$result = $conexion->query($sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == 1){  

  $_SESSION['email']=$row['nombre'];
  $_SESSION['password']=$row['password'];
  header("location: admin.php");
}  
  
?>



<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <title>
            Inicio de Sesión
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
              <a class="nav-link"  href="insert.php" > Dejános tus datos</a>
          </li>
        </ul></b>

      </div>




      <div class="d-flex align-items-center">
        
        <a href="login.php">Iniciar sesión <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>Iniciar sesión</a>
        </svg>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>


<br>
<br>
        <div class="container">
            <div class="container text-justify col-md-6" id="container-Informacion-psicologica">                  
                <form method="post" action="login.php">
                    <div class="form-group">
                      <b><label for="exampleInputEmail1">Email</label></b>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresa tu  email" name="email" required="true">
                      
                    </div>
                    <div class="form-group">
                      <b><label for="exampleInputPassword1">Password</label></b>
                      <input type="password" class="form-control" id="password" placeholder="********" name="password" required="true">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                  </form>

            </div> 

        </div>


<br><br>
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
                <a href="#!" class="text-white"><b>Telefono : </b>xxxxxx</a>
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







