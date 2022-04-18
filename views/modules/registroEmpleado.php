<?php

if (isset($_SESSION)) {
	if (!$_SESSION) {
		echo '<script>
                window.location.href = "ingresar";
              </script>';
		exit();
	}
	else if (!$_SESSION["usuarioActivo"]) {
		echo '<script>
                window.location.href = "violacionRegistroEmpleados";
              </script>';
		exit();
	}
}

$registro = new MvcController();
$registro->registroEmpleadoController();

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

</head>

<!-- CSS -->
<style>
	.formRegistroEmpleado {
		position: relative;
		top: 50px;
		width: 900px;
		left: 100px;
		height: 535px;
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
		bottom: 460px;
	}

	.spinner {
		position: relative;
		top: 0px;
	}
</style>
<!-- Fin CSS -->

<body class="bg-theme bg-theme1">

	<!-- Start Main Wrapper-->
	<div id="wrapper">

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
			<form method="post">
				<div class="formRegistroEmpleado card card-authentication1 mx-auto my-4">
					<div class="card-body">
						<div class="card-content p-2">
							<div class="text-center">
								<img src="assets/images/logo-icon.png" alt="logo icon">
							</div>
							<div class="card-title text-uppercase text-center py-3">Registro de Empleados</div>
							<div class="form-group">
								<div class="position-relative has-icon-right">
									<input type="text" name="nombre" class="form-control inputslateralesizquierdos input-shadow " placeholder="Nombre del empleado">
									<div class="form-control-position">
										<i class="iconoslateralesizquierdos fas fa-solid fa-user"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="position-relative has-icon-right">
										<input type="text" name="apellidos" class="form-control inputslateralesizquierdos input-shadow " placeholder="Apellidos del empleado">
										<div class="form-control-position">
											<i class="iconoslateralesizquierdos fas fa-solid fa-user"></i>
										</div>
									</div>
									<div class="form-group">
										<div class="position-relative has-icon-right">
											<input type="text" name="familiares" class="form-control inputslateralesizquierdos input-shadow " placeholder="Datos de los familiares">
											<div class="form-control-position">
												<i class="iconoslateralesizquierdos fas fa-solid fa-house-user"></i>
											</div>
										</div>
										<div class="form-group">
											<div class="position-relative has-icon-right">
												<input type="text"  name="telefonos" class="form-control inputslateralesizquierdos input-shadow " placeholder="Contacto telefonico">
												<div class="form-control-position">
													<i class="iconoslateralesizquierdos fas fa-solid fa-phone"></i>
												</div>
											</div>
											<div class="form-group">
												<div class="position-relative has-icon-right">
													<input type="text" name="vacaciones" class="form-control inputslateralesizquierdos input-shadow " placeholder="Vacaciones">
													<div class="form-control-position">
														<i class="iconoslateralesizquierdos fas fa-solid fa-plane"></i>
													</div>
												</div>
												<div class="form-group">
													<div class="position-relative has-icon-right">
														<input type="text" name="perfilAcademico" class="form-control inputslateralesderechos input-shadow " placeholder="Perfil academico">
														<div class="form-control-position">
															<i class="iconoslateralesderechos fas fa-solid fa-school"></i>
														</div>
													</div>
													<div class="form-group">
														<div class="position-relative has-icon-right">
															<input type="text" name="vacunas" class="form-control inputslateralesderechos input-shadow " placeholder="Vacunas">
															<div class="form-control-position">
																<i class="iconoslateralesderechos fas fa-solid fa-syringe"></i>
															</div>
														</div>
														<div class="form-group">
															<div class="position-relative has-icon-right">
																<input type="text" name="cedula" class="form-control campoCedula inputslateralesderechos input-shadow " placeholder="Cedula">
																<div class="form-control-position">
																	<i class="iconoslateralesderechos fas fa-solid fa-id-card"></i>
																</div>
															</div>
															<div class="form-group">
																<div class="position-relative has-icon-right">
																	<input type="text" name="licencias" class="form-control inputslateralesderechos input-shadow " placeholder="Licencias">
																	<div class="form-control-position">
																		<i class="iconoslateralesderechos fas fa-solid fa-id-badge"></i>
																	</div>
																</div>

																<button type="submit" class="button btn btn-light btn-block waves-effect waves-light">Registrar empleado</button>
			</form>

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
	if ($_GET["action"] == "registroEmpleado_error") {
		echo '<script>
alertify.set("notifier","position", "bottom-left");
alertify.error("Ocurrio un error a la hora de registrar al empleado");
</script>';
	} else if ($_GET["action"] == "registroEmpleado_error_invalido") {
		echo '<script>
alertify.set("notifier","position", "bottom-left");
alertify.error("Ocurrio un error a la hora de registrar al empleado, verifique bien sus datos");
</script>';
	} else if ($_GET["action"] == "registroEmpleado_error_vacio") {
		echo '<script>
alertify.set("notifier","position", "bottom-left");
alertify.error("Ocurrio un error, existe un campo vacio");
</script>';
	}
}

?>