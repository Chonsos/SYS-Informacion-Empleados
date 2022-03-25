<?php

if (isset($_SESSION)) {
	if (!$_SESSION["usuarioActivo"]) {
		echo '<script>
                window.location.href = "violacionEliminarEmpleados";
              </script>';
		exit();
	}
} 

$empleados = new MvcController();

?>

<?php
$empleados->borrarEmpleadoController();
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

	.bordeAbajo {
		border-bottom: 2px solid grey;
	}

	.tablitaAjax {
		position: relative;
		left: 420px;
		width: 720px;
		top: 50px;
	}

	.tablita {
		position: relative;
		left: 420px;
		width: 720px;
		top: 50px;
	}

	.data {
		margin-bottom: 23px;
	}

	.editar {
		position: relative;
		right: 265px;
		top: 80px;
	}

	.borrar {
		position: relative;
		left: 265px;
		top: 31px;
	}

	#buscador {
		width: 600px;
		position: relative;
		top: 10px;
		left: 80px;
	}

	.iconoBuscador {
		position: relative;
		left: 578px;
		bottom: 28px;
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

			<div class="p-5 formm tablita justify-content-center text-center">

				<?php
				$empleados->vistaEmpleadosController();
				?>

			</div>



			<div class="p-5 tablitaAjax form justify-content-center text-center">
				<div class="col">
					<div class="form card">
						<div class="card-body">
							<!-- <div class="table-responsive"> -->

								<!-- <tbody> -->

									<div id="resultado">

									</div>

								<!-- </tbody> -->
								<!-- </table> -->
							<!-- </div> -->
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
	if ($_GET["action"] == "registroEmpleado_ok") {
		echo '<script>
alertify.set("notifier","position", "bottom-left");
alertify.success("Empleado registrado correctamente");
</script>';
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "violacionEditarUsuarios") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Usted no debe estar aqui");
                      </script>';
	}
	if ($_GET["action"] == "violacionRegistroUsuarios") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Usted no debe estar aqui");
                      </script>';
	}
	if ($_GET["action"] == "violacionLoginAdmin") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Usted no debe estar aqui");
                      </script>';
	}
	if ($_GET["action"] == "violacionVerUsuarios") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Usted no debe estar aqui");
                      </script>';
	}
	if ($_GET["action"] == "eliminadoEmpleado_ok") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.success("Empleado eliminado correctamente");
                      </script>';
	} else if ($_GET["action"] == "eliminadoEmpleado_error") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Ocurrio un error al eliminar al empleado");
                      </script>';
	} else if ($_GET["action"] == "eliminarIdEmpleado_error_invalido") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Ocurrio una invalidacion al eliminar al empleado si persiste el problema llame a administracion para que le colaboren");
                      </script>';
	} else if ($_GET["action"] == "eliminarIdEmpleado_error_vacio") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Aparentemente el sistema no encuentra su id, si persiste el problema llame a administracion para que le colaboren");
                      </script>';
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "actualizadoEmpleado_ok") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.success("Empleado actualizado correctamente");
                   </script>';
	} else if ($_GET["action"] == "actualizadoEmpleado_error") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Ocurrio un error al actualizar al empleado");
                   </script>';
	} else if ($_GET["action"] == "actualizadoEmpleado_error_invalido") {
		echo '<script>
				       alertify.set("notifier","position", "bottom-left");
				       alertify.error("Ocurrio una invalidacion al actualizar, si persiste el problema llame a administracion para que le colaboren");
                   </script>';
	} else if ($_GET["action"] == "actualizadoEmpleado_error_vacio") {
		echo '<script>
				    	alertify.set("notifier","position", "bottom-left");
				    	alertify.error("Ocurrio un error, existe un campo vacio");
                   </script>';
	} else if ($_GET["action"] == "obtenerIdUpdateEmpleado_error_invalido") {
		echo '<script>
				    	alertify.set("notifier","position", "bottom-left");
				    	alertify.error("Ocurrio un problema al obtener el id del empleado para actualizar, por favor intente ingresar de nuevo");
                   </script>';
	} else if ($_GET["action"] == "obtenerIdUpdateEmpleado_error_vacio") {
		echo '<script>
				    	alertify.set("notifier","position", "bottom-left");
				    	alertify.error("Aparentemente el sistema no encuentra su id, llame a administracion para que le colaboren con el asunto");
                   </script>';
	}
}

?>