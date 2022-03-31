<?php

if (isset($_SESSION)) {
	if (!$_SESSION["adminActivo"]) {
		echo '<script>
                window.location.href = "violacionVerUsuarios";
              </script>';
		exit();
	}
} 

$usuarios = new MvcController();

?>



<?php
$usuarios->borrarUsuarioController();
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plantilla de Alonso Villalobos</title>
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

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

	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- simplebar CSS-->
	<!-- <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" /> -->
	<!-- Bootstrap core CSS-->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- animate CSS-->
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
	<!-- Icons CSS-->
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- Sidebar CSS-->
	<link href="assets/css/sidebar-menu.css" rel="stylesheet" />
	<!-- Custom Style-->
	<link href="assets/css/app-style.css" rel="stylesheet" />
</head>

<!-- CSS -->
<style>
	.tablita {
		position: relative;
		left: 350px;
		width: 720px;
	}

	.formUsuarios {
		position: relative;
		top: 50px;
	}

	.banderaBlanca {
		position: relative;
		right: 7px;
	}

	.alinearBuscador {
		position: relative;
		left: 370px;
	}

	.spinner {
		position: relative;
		top: 0px;
	}
	
</style>
<!-- Fin CSS -->

<body class="bg-theme bg-theme1">

	<div id="wrapper">

		<div id="wrapper">

			<div class="d-flex p-5 tablita justify-content-center text-center">
				<div class="col">
					<div class="formUsuarios card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">Usuario</th>
											<th scope="col">Email</th>
											<th scope="col"></th>
											<th scope="col"></th>
										</tr>
									</thead>

									<tbody>

										<?php
										$usuarios->vistaUsuariosController();
										?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

			<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>

			<!--start color switcher-->
			<div class="right-sidebar">
				<div class="switcher-icon">
					<i class="spinner zmdi zmdi-settings zmdi-hc-spin"></i>
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
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- sidebar-menu js -->
		<script src="assets/js/sidebar-menu.js"></script>

		<!-- Custom scripts -->
		<script src="assets/js/app-script.js"></script>

</body>

</html>
<?php
if (isset($_GET["action"])) {
	if ($_GET["action"] == "admin_ok") {
		echo '<script>
alertify.set("notifier","position", "bottom-left");
alertify.success("Bienvenido admin");
</script>';
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "eliminado_ok") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.success("Usuario eliminado correctamente");
                      </script>';
	} else if ($_GET["action"] == "eliminado_error") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Ocurrio un error inesperado al eliminar");
                      </script>';
	} else if ($_GET["action"] == "eliminarIdUsuario_error_invalido") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Ocurrio una invalidacion al eliminar, si persiste el problema llame a administracion para que le colaboren");
                      </script>';
	} else if ($_GET["action"] == "eliminarIdUsuario_error_vacio") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Aparentemente el sistema no encuentra su id, si persiste el problema llame a administracion para que le colaboren");
                      </script>';
	} else if ($_GET["action"] == "violacionEditarEmpleados") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Usted no debe estar aqui");
                      </script>';
	} else if ($_GET["action"] == "violacionRegistroEmpleados") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Usted no debe estar aqui");
                      </script>';
	} else if ($_GET["action"] == "violacionVerEmpleados") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Usted no debe estar aqui");
                      </script>';
	} 
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "actualizado_ok") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.success("Usuario actualizado correctamente");
                   </script>';
	} else if ($_GET["action"] == "actualizado_error") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Ocurrio un error inesperado al actualizar al usuario");
                   </script>';
	} else if ($_GET["action"] == "actualizado_error_invalido") {
		echo '<script>
	                   alertify.set("notifier","position", "bottom-left");
	                   alertify.error("Ocurrio una invalidacion al actualizar, si persiste el problema llame a administracion para que le colaboren");
	</script>';
	} else if ($_GET["action"] == "actualizado_error_vacio") {
		echo '<script>
					   alertify.set("notifier","position", "bottom-left");
	                   alertify.error("Ocurrio un error, existe un campo vacio");
              </script>';
	} else if ($_GET["action"] == "obtenerIdUpdate_error_invalido") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Ocurrio un problema al obtener el id del usuario para actualizar, por favor intente ingresar de nuevo");
                   </script>';
	} else if ($_GET["action"] == "obtenerIdUpdate_error_vacio") {
		echo '<script>
				    	alertify.set("notifier","position", "bottom-left");
				    	alertify.error("Aparentemente el sistema no encuentra su id, llame a administracion para que le colaboren con el asunto");
                   </script>';
	}
}
?>