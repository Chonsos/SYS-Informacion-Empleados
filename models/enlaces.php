<?php

class Paginas
{

	static public function enlacesPaginasModel($enlaces)
	{

		switch ($enlaces) {
			case "ingresar":
			case "usuarios":
			case "editar":
			case "salir":
			case "registroEmpleado":
			case "empleados":
			case "admin":
			case "registro":
				$module =  "views/modules/" . $enlaces . ".php";
				break;
			case "index":
				$module =  "views/modules/ingresar.php";
				break;
				//////////////////////////////////////
			case "registro_ok":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "registro_error":
				$module =  "views/modules/registro.php";
				break;
				//////////////////////////////////////
			case "registro_error_invalido":
				$module =  "views/modules/registro.php";
				break;
				//////////////////////////////////////
			case "registro_error_vacio":
				$module =  "views/modules/registro.php";
				break;
				//////////////////////////////////////
			case "eliminado_ok":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "eliminado_error":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "eliminarIdUsuario_error_invalido":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "eliminarIdUsuario_error_vacio":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "actualizado_ok":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "actualizado_error":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "actualizado_error_vacio":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "actualizado_error_invalido":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "obtenerIdUpdate_error_invalido":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "obtenerIdUpdate_error_vacio":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "ingresar_ok":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "ingresar_error":
				$module =  "views/modules/ingresar.php";
				break;
				//////////////////////////////////////
			case "ingresar_error_invalido":
				$module =  "views/modules/ingresar.php";
				break;
				//////////////////////////////////////
			case "ingresar_error_vacio":
				$module =  "views/modules/ingresar.php";
				break;
				//////////////////////////////////////
			case "registroEmpleado_ok":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "registroEmpleado_error":
				$module =  "views/modules/registroEmpleado.php";
				break;
				//////////////////////////////////////
			case "registroEmpleado_error_invalido":
				$module =  "views/modules/registroEmpleado.php";
				break;
				//////////////////////////////////////
			case "registroEmpleado_error_vacio":
				$module =  "views/modules/registroEmpleado.php";
				break;
				//////////////////////////////////////
			case "actualizadoEmpleado_ok":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "actualizadoEmpleado_error":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "actualizadoEmpleado_error_invalido":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "actualizadoEmpleado_error_vacio":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "obtenerIdUpdateEmpleado_error_invalido":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "obtenerIdUpdateEmpleado_error_vacio":
				$module =  "views/modules/empleados.php";
				break;
				////////////////////////////////////// 
			case "eliminadoEmpleado_ok":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "eliminadoEmpleado_error":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "eliminarIdEmpleado_error_invalido":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "eliminarIdEmpleado_error_vacio":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "error_salir":
				$module =  "views/modules/ingresar.php";
				break;
				//////////////////////////////////////

			case "admin_ok":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "admin_error":
				$module =  "views/modules/admin.php";
				break;
				//////////////////////////////////////
			case "admin_error_invalido":
				$module =  "views/modules/admin.php";
				break;
				//////////////////////////////////////
			case "admin_error_vacio":
				$module =  "views/modules/admin.php";
				break;
				//////////////////////////////////////
			case "violacionEditarUsuarios":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "violacionVerUsuarios":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "violacionEditarEmpleados":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "violacionRegistroUsuarios":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "violacionLoginAdmin":
				$module =  "views/modules/empleados.php";
				break;
				//////////////////////////////////////
			case "violacionRegistroEmpleados":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			case "violacionVerEmpleados":
				$module =  "views/modules/usuarios.php";
				break;
				//////////////////////////////////////
			default:
				$module =  "views/modules/ingresar.php";
				break;
		}
		return $module;
	}
}
