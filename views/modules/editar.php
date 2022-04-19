<?php

if (isset($_SESSION)) {
	if (!$_SESSION["adminActivo"] && !$_SESSION["usuarioActivo"]) {
		echo '<script>
                window.location.href = "ingresar";
              </script>';
		exit();
	} 
} 

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>

	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

	<!-- 
    			RTL version
			-->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css" />
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css" />
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css" />
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css" />

	<link rel="stylesheet" href="{PATH}/alertify.min.css" />
	<!-- include a theme -->
	<link rel="stylesheet" href="{PATH}/themes/default.min.css" />

	<!-- loader-->
	<!-- <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script> -->
	<link href="assets/css/sidebar-menu.css" rel="stylesheet" />
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- animate CSS-->
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
	<!-- Icons CSS-->
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- Custom Style-->
	<link href="assets/css/app-style.css" rel="stylesheet" />

	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- animate CSS-->
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
	<!-- Icons CSS-->
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- Custom Style-->
	<link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<!-- CSS -->
<style>

	.mensajeEditarEmpleado{
		position: relative;
		bottom: 436px;
	}

	.spinner {
		position: relative;
		top: 0px;
	}
	.formUsuario {
		position: relative;
		top: 55px;
		height: 424px;
	}

	.formEmpleado {
		position: relative;
		top: 50px;
		width: 900px;
		left: 100px;
		height: 580px;
	}

	.inputslateralesizquierdos {
		width: 320px;
		position: relative;
		margin-bottom: 50px;
		bottom: 20px;
	}

	.inputslateralesderechos {
		width: 320px;
		position: relative;
		left: 518px;
		margin-bottom: 50px;
		bottom: 460px;
	}

	.iconoslateralesizquierdos {
		position: relative;
		right: 510px;
		/* bottom: 30px; */
		top: -19px;
	}

	.iconoslateralesderechos {
		position: relative;
		right: -8px;
		/* bottom: 30px; */
		top: -460px;
	}

	.button {
		width: 321px;
		position: relative;
		left: 518px;
		bottom: 461px;
	}
</style>
<!-- Fin CSS -->

<body class="bg-theme bg-theme1">

	<div id="wrapper">

		<!-- Start wrapper-->
		<div id="wrapper">

			<form method="post">
				<?php
				

				if (isset($_GET["idEditar"]) && $_SESSION["adminActivo"]) {
					echo '
					<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
						<div class="brand-logo">
							<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
							<h5 class="logo-text">Seccion de Editar</h5>
						</div>
							<ul class="sidebar-menu do-nicescrol">
								<li class="sidebar-header">SECCION DE NAVEGACION</li>

        						<li>
									<a href="registro">
										<i class="zmdi zmdi-invert-colors"></i> <span>Registrar un usuario</span>
									</a>
								</li>
        						<li>
									<a href="usuarios">
										<i class="zmdi zmdi-invert-colors"></i> <span>Usuarios</span>
									</a>
								</li>
							</ul>

					</div>

<header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Alonso Villalobos León</h6>
                                            <p class="user-subtitle">redalonso2001@gmail.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
						<li class="dropdown-divider"></li>
					    <li class=""><a alt="Salir" href="salir"><i class="fas fa-door-open text-white"></i></a></li>
                    </li>
                </ul>
            </nav>
        </header> 

							<div class="formUsuario card card-authentication1 mx-auto my-4">
							<div class="card-body">
								<div class="card-content p-2">
									<div class="text-center">
										<img src="assets/images/logo-icon.png" alt="logo icon">
									</div>
									<div class="card-title text-uppercase text-center py-3">Editar</div>';
					$editar = new MvcController();
					$editar->editarUsuarioController();
					$editar->actualizarUsuarioController();

					
					echo '
						<div class="card-footer text-center py-3">
							<p class="text-warning mb-0">No quiere modificar algo? <a href="usuarios"> Devuelvase a usuarios aqui</a></p>
						</div>
					';
				} else if (isset($_GET["idEditar"]) && !$_SESSION["adminActivo"]) {
					echo '<script>
                window.location.href = "violacionEditarUsuarios";
              			  </script>';
				}

				if (isset($_GET["idEditar"]) && $_GET["idEditar"] == "83"){
					echo '<script>
                window.location.href = "usuarios";
              			  </script>';
				}
				
				if (isset($_GET["idEditarEmpleado"]) && $_SESSION["usuarioActivo"]) {
					echo '
					<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
						<div class="brand-logo">
							<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
							<h5 class="logo-text">Seccion de Editar</h5>
						</div>
							<ul class="sidebar-menu do-nicescrol">
								<li class="sidebar-header">SECCION DE NAVEGACION</li>

        						<li>
									<a href="registroEmpleado">
										<i class="zmdi zmdi-invert-colors"></i> <span>Registrar un empleado</span>
									</a>
								</li>
        						<li>
									<a href="empleados">
										<i class="zmdi zmdi-invert-colors"></i> <span>Empleados</span>
									</a>
								</li>
							</ul>

					</div>

<header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Alonso Villalobos León</h6>
                                            <p class="user-subtitle">redalonso2001@gmail.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
						<li class="dropdown-divider"></li>
					    <li class=""><a alt="Salir" href="salir"><i class="fas fa-door-open text-white"></i></a></li>
                    </li>
                </ul>
            </nav>
        </header> 
					
							<div class="formEmpleado card card-authentication1 mx-auto my-4">
							<div class="card-body">
								<div class="card-content p-2">
									<div class="text-center">
										<img src="assets/images/logo-icon.png" alt="logo icon">
									</div>
									<div class="card-title text-uppercase text-center py-3">Editar</div>';
					$editarEmpleado = new MvcController();
					$editarEmpleado->editarEmpleadoController();
					$editarEmpleado->actualizarEmpleadoController();
					echo '
						<div class="mensajeEditarEmpleado card-footer text-center py-3">
							<p class="text-warning mb-0">No quiere modificar algo? <a href="empleados"> Devuelvase a empleados aqui</a></p>
						</div>
					';
				} else if (isset($_GET["idEditarEmpleado"]) && !$_SESSION["usuarioActivo"]) {
					echo '<script>
                window.location.href = "violacionEditarEmpleados";
              			  </script>';
				}
				?>

				<?php
				if (isset($_GET["action"])) {
					if ($_GET["action"] == "editar&idEditar") {
						echo '<script>
					alertify.set("notifier","position", "bottom-left");
					alertify.error("Invalidacion durante la actualizacion");
              	  </script>';
					}  
				}

				?>
			</form>
		</div>
	</div>

	<!--Start Back To Top Button-->
	<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	<!--End Back To Top Button-->

	<!--start color switcher-->
	<div class="right-sidebar">
		<div class="switcher-icon">
			<i class="zmdi zmdi-settings zmdi-hc-spin"></i>
		</div>
		<div class="right-sidebar-content">

			<p class="mb-0">Gaussion Texture</p>
			<hr>

			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>

			<p class="mb-0">Gradient Background</p>
			<hr>

			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			</ul>

		</div>
	</div>
	<!--end color switcher-->

	</div>
	<!--wrapper-->

	<!-- Bootstrap core JavaScript-->
	<?php include "footer.php"; ?>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- sidebar-menu js -->
	<script src="assets/js/sidebar-menu.js"></script>

	<!-- Custom scripts -->
	<script src="assets/js/app-script.js"></script>

</body>

</html>
