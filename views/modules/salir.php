<?php

if (isset($_SESSION)) {
	if (!$_SESSION["usuarioActivo"] && !$_SESSION["adminActivo"]) {
		echo '<script>
                 window.location.href = "error_salir";
              </script>';
		exit();
	}
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<style>
	.salir {
		position: relative;
		left: 101px;
	}
</style>

<body>

</body>

</html>

<body class="bg-theme bg-theme1">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
			<div class="card-content p-2">
				<div class="text-center">
					<img src="assets/images/logo-icon.png" alt="logo icon">
				</div>
				<h1 class="card-title text-uppercase text-center py-3">¡HAZ SALIDO DE LA APLICACION!</h1>
				<a href="ingresar" class="salir card-title text-uppercase text-center py-3">Volver a inicio</a>
				<form method="post">
					<div class="form-group">
						<div class="position-relative has-icon-right">
						</div>
					</div>
					<?php
					if (isset($_GET["action"])) {
						if ($_GET["action"] == "salir") {
							echo '<script>
						alertify.set("notifier","position", "bottom-left");
						alertify.success("Ha sido un placer");
              	  	  </script>';
							$_SESSION = array("");
							session_destroy();
						}
					}
					?>