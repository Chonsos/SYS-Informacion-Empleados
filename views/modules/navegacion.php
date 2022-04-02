<?php
if (isset($_GET["action"])) {
    if (
        $_GET["action"] == "usuarios" || $_GET["action"] == "admin_ok" || $_GET["action"] == "registro_ok"
        || $_GET["action"] == "actualizado_ok" || $_GET["action"] == "actualizado_error"
        || $_GET["action"] == "actualizado_error_vacio" || $_GET["action"] == "actualizado_error_invalido"
        || $_GET["action"] == "obtenerIdUpdate_error_invalido" || $_GET["action"] == "obtenerIdUpdate_error_vacio"
        || $_GET["action"] == "eliminado_ok" || $_GET["action"] == "eliminado_error"
        || $_GET["action"] == "eliminarIdUsuario_error_invalido"  || $_GET["action"] == "eliminarIdUsuario_error_vacio" 
        || $_GET["action"] == "violacionEditarEmpleados" || $_GET["action"] == "violacionVerEmpleados" || $_GET["action"] == "violacionRegistroEmpleados"
    ) {
        echo '
	<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
	<div class="brand-logo">
		<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
		<h5 class="logo-text">Seccion de Usuarios</h5>
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
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Ingrese lo que desea buscar">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
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
';
    } else if ($_GET["action"] == "editar") {
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
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Ingrese lo que desea buscar">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
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
	';
    } else if (
        $_GET["action"] == "registroEmpleado" || $_GET["action"] == "registroEmpleado_error" 
        || $_GET["action"] == "registroEmpleado_error_invalido"
        || $_GET["action"] == "registroEmpleado_error_vacio"
    ) {
        echo '
		<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
	<div class="brand-logo">
		<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
		<h5 class="logo-text">Registro de Empleados</h5>
	</div>
	<ul class="sidebar-menu do-nicescrol">
		<li class="sidebar-header">SECCION DE NAVEGACION</li>
        <li>
			<a href="empleados">
				<i class="zmdi zmdi-invert-colors"></i> <span>Ver empleados</span>
			</a>
		</li>
        <li>
			<a href="registroEmpleado">
				<i class="zmdi zmdi-invert-colors"></i> <span>Registrar un empleado</span>
			</a>
		</li>
	</ul>

</div>

<header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Ingrese lo que desea buscar">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
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
	';
    } else if (
        $_GET["action"] == "empleados" || $_GET["action"] == "ingresar_ok" || $_GET["action"] == "registroEmpleado_ok" || $_GET["action"] == "actualizadoEmpleado_ok" 
        || $_GET["action"] == "actualizadoEmpleado_error" || $_GET["action"] == "actualizadoEmpleado_error_invalido"
        || $_GET["action"] == "actualizadoEmpleado_error_vacio" || $_GET["action"] == "obtenerIdUpdateEmpleado_error_invalido"
        || $_GET["action"] == "obtenerIdUpdateEmpleado_error_vacio" || $_GET["action"] == "eliminadoEmpleado_ok"
        || $_GET["action"] == "eliminadoEmpleado_error"  || $_GET["action"] == "eliminarIdEmpleado_error_invalido"
        || $_GET["action"] == "eliminarIdEmpleado_error_vacio" || $_GET["action"] == "violacionEditarUsuarios" || $_GET["action"] == "violacionRegistroUsuarios" || $_GET["action"] == "violacionLoginAdmin"
        || $_GET["action"] == "violacionVerUsuarios"
    ) {
        echo '
		<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
	<div class="brand-logo">
		<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
		<h5 class="logo-text">Ver Empleados</h5>
	</div>
	<ul class="sidebar-menu do-nicescrol">
		<li class="sidebar-header">SECCION DE NAVEGACION</li>
        <li>
			<a href="empleados">
				<i class="zmdi zmdi-invert-colors"></i> <span>Ver empleados</span>
			</a>
		</li>
        <li>
			<a href="registroEmpleado">
				<i class="zmdi zmdi-invert-colors"></i> <span>Registrar un empleado</span>
			</a>
		</li>
	</ul>

</div>

<header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                    <div id="buscador">
                            <input type="text" name="search" id="buscar" class="form-control" placeholder="Ingrese lo que desea buscar">
                            <a><i class="iconoBuscador icon-magnifier"></i></a>
                    </div>
                    </li>
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
	';
    } else if (
        $_GET["action"] == "registro" || $_GET["action"] == "registro_error" 
        || $_GET["action"] == "registro_error_invalido"
        || $_GET["action"] == "registro_error_vacio"
    ) {
        echo '
		<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
	<div class="brand-logo">
		<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
		<h5 class="logo-text">Seccion de Usuarios</h5>
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
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Ingrese lo que desea buscar">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
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
        </header>
	';
    }
}
