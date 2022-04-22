<?php

$ingresar = new MvcController();
$ingresar->ingresarUsuarioController();

if (isset($_SESSION)) {
	if (!$_SESSION) {
		
	}
	else if ($_SESSION["adminActivo"] && !$_SESSION["usuarioActivo"]) {
		echo '<script>
                window.location.href = "usuarios";
              </script>';
		exit();
	} else if ($_SESSION["usuarioActivo"]) {
		echo '<script>
                window.location.href = "empleados";
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
	<title>Plantilla de Alonso Villalobos</title>

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

</head>

<!-- CSS -->
<style>
	.formIngresar {
		position: relative;
		top: 50px;
	}
	.spinner {
		position: relative;
		top: 0px;
	}
</style>
<!-- Fin CSS -->

<body class="bg-theme bg-theme1">

	<div id="wrapper">


		<!-- start loader -->
		<div id="pageloader-overlay" class="visible incoming">
			<div class="loader-wrapper-outer">
				<div class="loader-wrapper-inner">
					<div class="loader"></div>
				</div>
			</div>
		</div>
		<!-- end loader -->

		<!-- Start wrapper-->
		<div id="wrapper">

			<div class="loader-wrapper">
				<div class="lds-ring">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="formIngresar card card-authentication1 mx-auto my-5">
				<div class="card-body">
					<div class="card-content p-2">
						<div class="text-center">
							<img src="assets/images/logo-icon.png" alt="logo icon">
						</div>
						<div class="card-title text-uppercase text-center py-3">Ingresar</div>
						<form method="post">
							<div class="form-group">
								<div class="position-relative has-icon-right">
									<input type="text" name="nombre" class="form-control input-shadow" placeholder="Ingrese su nombre de usuario" required>
									<div class="form-control-position">
										<i class="icon-user"></i>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="position-relative has-icon-right">
									<input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Ingrese su contraseña" required>
									<div class="form-control-position">
										<i class="icon-lock"></i>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-6">
									<div class="icheck-material-white">
										<input type="checkbox" id="user-checkbox" checked="" />
									</div>
								</div>
								<div class="form-group col-6 text-right">
								</div>
							</div>
							<button type="submit" class="btn btn-light btn-block">Ingresar</button>

							<div class="form-row mt-4">
								<div class="form-group mb-0 col-6">
								</div>
								<div class="form-group mb-0 col-6 text-right">
								</div>
							</div>
						</form>
					</div>
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
<?php

if (isset($_GET["action"])) {
	if ($_GET["action"] == "ingresar_error") {
		echo '<script>
				alertify.set("notifier","position", "bottom-left");
				alertify.error("Ocurrio un error a la hora de ingresar");
              </script>';
	} else if ($_GET["action"] == "error_salir") {
		echo '<script>
				alertify.set("notifier","position", "bottom-left");
				alertify.error("Ocurrio un error, esta ruta no puede ser accesada en este momento");
              </script>';
	} else if ($_GET["action"] == "ingresar_error_invalido") {
		echo '<script>
				alertify.set("notifier","position", "bottom-left");
				alertify.error("Error al ingresar, su usuario o contraseña no cumple con los requerimientos minimos (Usuarios: letras, numeros y guiones. Contraseña: Minimo 8 caracteres, una letra y un numero.)");
              </script>';
	} else if ($_GET["action"] == "ingresar_error_bacio") {
		echo '<script>
				alertify.set("notifier","position", "bottom-left");
				alertify.error("Error al ingresar, debe de ingresar un usuario y una contraseña");
              </script>';
	} else if ($_GET["action"] == "ingresoIncorrecto") {
		echo '<script>
				alertify.set("notifier","position", "bottom-left");
				alertify.error("Accion incorrecta");
              </script>';
	}
	
}
?>