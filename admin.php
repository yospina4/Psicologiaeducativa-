<?php

$conexion=mysqli_connect('localhost','root','','smc_datos');

error_reporting(E_ALL);
ini_set('display_errors', '1');

$sql = 'SELECT * FROM usuarios';
$result = $conexion->query($sql);
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Usuarios </title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>	
        <link href="style\style.css" rel="stylesheet" type="text/css">
        <!-- CSS only -->
        <link href="C:\Users\57319\OneDrive\Escritorio\Proyecto\style\style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
               <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
</head>
<body>
<!-- Navbar -->
<nav class="navbar  navbar-expand-lg navbar-light bg-dark" id="menu">
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
      <div class="d-flex align-items-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link" href="index.php">Ir al sitio web</a>
          </li>
        </ul>
      </div>
      <br>
      <div class="d-flex align-items-center">

        
        <a href="logout.php?cerrar=yes">Cerrar sesión<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>Cerrar sesión</a>
        </svg>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<br>
<div class="container ">
	    <div class="modal-content">

      <div class="modal-body">
	<div class="row clearfix">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-12 ">
			
			<?php if( isset($_SESSION['msg']) ) { ?>
				<br>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['msg']; ?>
				</div>
			<?php  session_destroy(); } ?>
			<a href="insert.php" class="btn btn-success"> Agregar usuario </a>
			<br><br>
			<h1> Usuarios Regsitrados </h1>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead class="">
					<tr class="table-primary">
						<th scope="col">Identificación</th>
						<th scope="col">Nombres Completos</th>
						<th scope="col">Edad</th>
						<th scope="col">Modalidad de terapia</th>
						<th scope="col">Telefono</th>
						<th scope="col">Nivel de estudio</th>
						<th scope="col">¿Algún tratamiento psicologico ?</th>
						<th scope="col">Describe el problema</th>
						<th scope="col">Opciones</th>
					</tr>
				</thead>
				<tbody>
				
				<?php while ($row = $result->fetch_assoc()) { ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nombres']; ?></td>
						<td><?php echo $row['edad']; ?></td>
						<td><?php echo $row['modalidad']; ?></td>
						<td><?php echo $row['telefono']; ?></td>
						<td><?php echo $row['nvl_estudio']; ?></td>
						<td><?php echo $row['opciones']; ?></td>
						<td><?php echo $row['descripcion']; ?></td>												
						<td>
							<a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"> Editar </a>
							<a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Vas a eliminar un usuario?')" class="btn btn-danger btn-sm"> Eliminar </a>



						</td>
					</tr>
				<?php } ?>

				</tbody>
				

			</table>


		</div>	
			
      </div>
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
              <a href="https://mdbootstrap.com/docs/standard/extended/social-media/" class="text-white"><b>Telefono : </b>xxxxxx</a>
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
</html>