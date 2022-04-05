<?php

class MvcController
{

    #LLAMADA A LA PLANTILLA
    #-------------------------------------

    static public function pagina()
    {
        include "views/template.php";
    }

    #ENLACES
    #-------------------------------------

    public static function enlacesPaginasController()
    {
        if (isset($_GET['action'])) {
            $enlaces = $_GET['action'];
        } else {
            $enlaces = "index";
        }

        $respuesta = Paginas::enlacesPaginasModel($enlaces);

        include $respuesta;
    }

    # Registro Usuarios

    public static function registroUsuarioController()
    {
        if (
            isset($_POST["nombre"]) && isset($_POST["password"]) &&
            isset($_POST["email"])
        ) {

            if (!empty($_POST["nombre"]) && !empty($_POST["password"]) && !empty($_POST["email"])) {

                if (
                    preg_match('/^[A-Za-z0-9\-\_\.]{3,20}$/', $_POST["nombre"]) &&
                    preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,20}$/', $_POST["password"]) &&
                    preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $_POST["email"])
                ) { 

                    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

                    $datos = array(
                        "nombre" => $_POST["nombre"],
                        "password" => $password,
                        "email" => $_POST["email"],
                    );

                    $respuesta = Datos::registroUsuarioModel($datos, "usuarios");
                
                    if ($respuesta == "success") {
                        echo '<script>
                                        window.location.href = "registro_ok";
                                      </script>';
                    } else {
                        echo '<script>
                                        window.location.href = "registro_error";
                                      </script>';
                    }
                } else {
                    echo '<script>
                                    window.location.href = "registro_error_invalido";
                                    </script>';
                }
            } else {
                echo '<script>
                                window.location.href = "registro_error_vacio";
                              </script>';
            }
        }
    }

    # Ver usuarios
    public static function vistaUsuariosController()
    {

        $respuesta = Datos::vistaUsuariosModel("usuarios");

        foreach ($respuesta as $key => $value) {
            echo '
                        <tr>
                            <td>' . $value["nombre"] . '</td>
                            <td>' . $value["email"] . '</td>
                            <td>
                                <a href="editar&idEditar=' . $value["id"] . '">
                                    <button class="btn btn-warning">
                                        <i class="fas fa-marker"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="usuarios&idBorrar=' . $value["id"] . '">
                                    <button class="btn btn-danger">
                                        <i class="fas fa-eraser"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    ';
        }
    }

    #Eliminar usuarios

    public static function borrarUsuarioController()
    {

        if (isset($_GET["idBorrar"])) {

            if (!empty($_GET["idBorrar"])) {

                if (preg_match('/^[0-9]{1,20}$/', $_GET["idBorrar"])) {

                    $datos = $_GET["idBorrar"];

                    if ($datos == "83"){
                        echo '<script>
                                     window.location.href = "usuarios";
                                  </script>';
                    } else {

                    

                    $respuesta = Datos::borrarUsuarioModel($datos, "usuarios");
                }
                    if ($respuesta == "success") {
                        echo '<script>
                                     window.location.href = "eliminado_ok";
                                  </script>';
                    } else {
                        echo '<script>
                                     window.location.href = "eliminado_error";
                                  </script>';
                    }
                } else {
                    echo '<script>
                                window.location.href = "eliminarIdUsuario_error_invalido";
                              </script>';
                }
            } else {
                echo '<script>
                           window.location.href = "eliminarIdUsuario_error_invalido";
                          </script>';
            }
        }
    }

    #ObtenerId Usuarios Editar
    public static function editarUsuarioController()
    {

        if (isset($_GET["idEditar"])) {

            if (!empty($_GET["idEditar"])) {

                if (preg_match('/^[0-9]{1,20}$/', $_GET["idEditar"])) {

                    $datos = $_GET["idEditar"];

                    $respuesta = Datos::editarUsuarioModel($datos, "usuarios");
                    echo '
                                  <input type="hidden" name="id" value="' . $respuesta["id"] . '" required>
                                    
                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="nombre" class="form-control input-shadow usernameValidation" value="' . $respuesta["nombre"] . '" required>
				                                <div class="form-control-position">
					                                <i class="icon-user"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="email" class="form-control input-shadow emailValidation" value="' . $respuesta["email"] . '" required>
				                                <div class="form-control-position">
					                                <i class="icon-envelope-open"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="password" id="exampleInputName" name="password" class="form-control input-shadow" required>
				                                <div class="form-control-position">
					                                <i class="icon-lock"></i>
				                                </div>
			                            </div>
			                      </div>
                                  <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Guardar cambios</button>
                                 ';
                } else {
                    echo '<script>
                               window.location.href = "obtenerIdUpdate_error_invalido";
                              </script>';
                }
            } else {
                echo '<script>
                           window.location.href = "obtenerIdUpdate_error_vacio";
                          </script>';
            }
        }
    }

    # Actualizar Usuario
    public static function actualizarUsuarioController()
    {

        if (
            isset($_POST["id"]) && isset($_POST["nombre"]) &&
            isset($_POST["password"]) && isset($_POST["email"])
        ) {

            if (!empty($_POST["id"]) && !empty($_POST["nombre"]) && !empty($_POST["password"]) && !empty($_POST["email"])) {

                if (
                    preg_match('/^[0-9]{1,20}$/', $_POST["id"]) &&
                    preg_match('/^[A-Za-z0-9\-\_\.]{3,20}$/', $_POST["nombre"]) &&
                    preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,20}$/', $_POST["password"]) &&
                    preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $_POST["email"])
                ) {
                        
                    

                    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

                    $datos = array(
                        "id" => $_POST["id"],
                        "nombre" => $_POST["nombre"],
                        "password" => $password,
                        "email" => $_POST["email"],
                    );

                    $respuesta = Datos::actualizarUsuarioModel($datos, "usuarios");
                

                    if ($respuesta == "success") {
                        echo '<script>
                                           window.location.href = "actualizado_ok";
                                          </script>';
                    } else {
                        echo '<script>
                                           window.location.href = "actualizado_error";
                                          </script>';
                    }
                } else {
                    echo '<script>
                                   window.location.href = "actualizado_error_invalido";
                                  </script>';
                }
            } else {
                echo '<script>
                               window.location.href = "actualizado_error_vacio";
                              </script>';
            }
        }
    }

    # Ingresar Usuario ya registrado
    public static function ingresarUsuarioController()
    {

        if (isset($_POST["nombre"]) && isset($_POST["password"])) {

            if (!empty($_POST["nombre"]) && !empty($_POST["password"])) {

                if (
                    preg_match('/^[A-Za-z0-9\-\_\.]{3,20}$/', $_POST["nombre"]) &&
                    preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,20}$/', $_POST["password"])
                ) {

                    $password = $_POST["password"];

                    $datos = array(
                        "nombre" => $_POST["nombre"],
                        "password" => $password,
                    );

                    $respuesta = Datos::ingresarUsuarioModel($datos, "usuarios");

                    if (
                        $respuesta["nombre"] == "Admin"
                        && password_verify($password, $respuesta["password"])
                    ) {
                        echo '<script>
                                       window.location.href = "ingresoIncorrecto";
                                      </script>';
                    } else if (
                        $respuesta["nombre"] == $datos["nombre"]
                        && password_verify($password, $respuesta["password"])
                    ) {

                        $_SESSION["usuarioActivo"] = true;
                        $_SESSION["adminActivo"] = false;

                        echo '<script>
                                       window.location.href = "ingresar_ok";
                                      </script>';
                    } else {
                        echo '<script>
                                       window.location.href = "ingresar_error";
                                      </script>';
                    }
                } else {
                    echo '<script>
                               window.location.href = "ingresar_error_invalido";
                              </script>';
                }
            } else {
                echo '<script>
                           window.location.href = "ingresar_error_vacio";
                          </script>';
            }
        }
    }

    # Ingresar Usuario ya registrado
    public static function ingresarAdminController()
    {

        if (isset($_POST["nombre"]) && isset($_POST["password"])) {

            if (!empty($_POST["nombre"]) && !empty($_POST["password"])) {

                if (
                    preg_match('/^[A-Za-z0-9\-\_\.]{3,20}$/', $_POST["nombre"]) &&
                    preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,20}$/', $_POST["password"])
                ) {

                    $password = $_POST["password"];

                    $datos = array(
                        "nombre" => $_POST["nombre"],
                        "password" => $password,
                    );

                    $respuesta = Datos::ingresarUsuarioModel($datos, "usuarios");

                    if (
                        $respuesta["nombre"] == "Admin"
                        && password_verify($password, $respuesta["password"])
                    ) {

                        $_SESSION["adminActivo"] = true;
                        $_SESSION["usuarioActivo"] = false;

                        echo '<script>
                                       window.location.href = "admin_ok";
                                      </script>';
                    } else {
                        echo '<script>
                                       window.location.href = "admin_error";
                                      </script>';
                    }

                } else {
                    echo '<script>
                               window.location.href = "admin_error_invalido";
                              </script>';
                }
            } else {
                echo '<script>
                           window.location.href = "admin_error_vacio";
                          </script>';
            }
        }
    }

    # Validar existencia de un nombre (AJAX)
    public static function validarUsuarioController($datos)
    {
        $respuesta = 0;
        if (!empty($datos)) {
            if (preg_match('/^[A-Za-z0-9\-\_\.]{3,20}$/', $datos)) {

                $respuesta = Datos::validarUsuarioModel($datos);
                if ($respuesta[0] > 0) {
                    $respuesta = 1;
                } else {
                    $respuesta = 0;
                }
            }
        }
        return $respuesta;
    }

    # Validar existencia de un email (AJAX)
    public static function validarEmailController($datos)
    {
        $respuesta = 0;
        if (!empty($datos)) {
            if (preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $datos)) {
                $respuesta = Datos::validarEmailModel($datos);
                if ($respuesta[0] > 0) {
                    $respuesta = 1;
                } else {
                    $respuesta = 0;
                }
            }
        }
        return $respuesta;
    }

    

    ///////////////////////////////////////////////////
    // Parte de los empleados \\
    //////////////////////////////////////////////////

    # Registrar a un empleado
    public static function registroEmpleadoController()
    {

        if (
            isset($_POST["nombre"]) && isset($_POST["apellidos"]) &&
            isset($_POST["familiares"]) && isset($_POST["telefonos"]) 
            && isset($_POST["vacaciones"]) && isset($_POST["perfilAcademico"]) 
            && isset($_POST["vacunas"]) && isset($_POST["cedula"]) 
            && isset($_POST["licencias"])
        ) {

            if (
                !empty($_POST["nombre"]) && !empty($_POST["apellidos"])
                && !empty($_POST["familiares"]) && !empty($_POST["telefonos"]) 
                && !empty($_POST["vacaciones"]) && !empty($_POST["perfilAcademico"]) 
                && !empty($_POST["vacunas"]) && !empty($_POST["cedula"]) 
                && !empty($_POST["licencias"])
            ) {

                if (
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()]{3,100}$/', $_POST["nombre"]) &&
                    preg_match('/^[A-Za-z0-9\s]{3,100}$/', $_POST["apellidos"]) &&
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()\,]{3,100}$/', $_POST["familiares"]) &&
                    preg_match('/^[0-9\s\-\_\.\()\,]{3,100}$/', $_POST["telefonos"]) &&
                    preg_match('/^[A-Za-z0-9\s]{1,100}$/', $_POST["vacaciones"]) &&
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()\,]{3,100}$/', $_POST["perfilAcademico"]) &&
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()\,]{3,100}$/', $_POST["vacunas"]) &&
                    preg_match('/^[A-Za-z0-9\-]{3,100}$/', $_POST["cedula"]) &&
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()\,]{2,100}$/', $_POST["licencias"])
                ) {

                    $datos = array(
                        "nombre" => $_POST["nombre"],
                        "apellidos" => $_POST["apellidos"],
                        "familiares" => $_POST["familiares"],
                        "telefonos" => $_POST["telefonos"],
                        "vacaciones" => $_POST["vacaciones"],
                        "perfilAcademico" => $_POST["perfilAcademico"],
                        "vacunas" => $_POST["vacunas"],
                        "cedula" => $_POST["cedula"],
                        "licencias" => $_POST["licencias"],
                    );

                    $respuesta = Datos::registroEmpleadoModel($datos, "empleados");

                    if ($respuesta == "success") {
                        echo '<script>
                                        window.location.href = "registroEmpleado_ok";
                                      </script>';
                    } else {
                        echo '<script>
                                        window.location.href = "registroEmpleado_error";
                                      </script>';
                    }
                } else {
                    echo '<script>
                                    window.location.href = "registroEmpleado_error_invalido";
                                    </script>';
                }
            } else {
                echo '<script>
                                window.location.href = "registroEmpleado_error_vacio";
                              </script>';
            }
        }
    }

    # Mostrar a los empleados
    public static function vistaEmpleadosController()
    {

        $respuesta = Datos::vistaEmpleadosModel("empleados");

        foreach ($respuesta as $key => $value) {
            echo '
            <div class="col">
					<div class="card">
						<div class="card-body">

                            <h3 class="data">' . $value["nombre"] ." ".  $value["apellidos"] .'</h3>
                            <h6 class="data"> Familiares: ' . $value["familiares"] . '</h6>
                            <h6 class="data"> Telefonos: ' . $value["telefonos"] . '</h6>
                            <h6 class="data"> Vacaciones: ' . $value["vacaciones"] . ' dias</h6>
                            <h6 class="data"> Perfil Academico: ' . $value["perfilAcademico"] . '</h6>
                            <h6 class="data"> Fecha de Ingreso: ' . $value["fechaIngreso"] . '</h6>
                            <h6 class="data"> Vacunas: ' . $value["vacunas"] . '</td>
                            <h6 class="data"> Cedula: ' . $value["cedula"] . '</td>
                            <h6 class="data"> Licencias: ' . $value["licencias"] . '</td>
                            <p class="editar">
                                <a href="editar&idEditarEmpleado=' . $value["id"] . '">
                                    <button class="btn btn-warning">
                                        <i class="fas fa-marker"></i>
                                    </button>
                                </a>
                            </p>
                            <p class="borrar">
                                <a href="empleados&idBorrar=' . $value["id"] . '">
                                    <button class="btn btn-danger">
                                        <i class="fas fa-eraser"></i>
                                    </button>
                                </a>
                            </p>
                            </div>
                            </div>
                            </div>

                    ';
        }
    }

    # Traer la vista para editar a un empleado
    public static function editarEmpleadoController()
    {

        if (isset($_GET["idEditarEmpleado"])) {

            if (!empty($_GET["idEditarEmpleado"])) {

                if (preg_match('/^[0-9]{1,20}$/', $_GET["idEditarEmpleado"])) {

                    $datos = $_GET["idEditarEmpleado"];

                    $respuesta = Datos::editarEmpleadoModel($datos, "empleados");
                    echo '
                                  <input type="hidden" name="id" value="' . $respuesta["id"] . '" required>
                                    
                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="nombre" class="inputslateralesizquierdos form-control input-shadow " value="' . $respuesta["nombre"] . '" required>
				                                <div class="form-control-position">
					                                <i class="iconoslateralesizquierdos fas fa-solid fa-user"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="apellidos" class="inputslateralesizquierdos form-control input-shadow " value="' . $respuesta["apellidos"] . '" required>
				                                <div class="form-control-position">
					                                <i class="iconoslateralesizquierdos fas fa-solid fa-user"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="familiares" class="inputslateralesizquierdos form-control input-shadow " value="' . $respuesta["familiares"] . '" required>
				                                <div class="form-control-position">
					                                <i class="iconoslateralesizquierdos fas fa-solid fa-house-user"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="telefonos" class="inputslateralesizquierdos form-control input-shadow " value="' . $respuesta["telefonos"] . '" required>
				                                <div class="form-control-position">
					                                <i class="iconoslateralesizquierdos fas fa-solid fa-phone"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="vacaciones" class="inputslateralesizquierdos form-control input-shadow " value="' . $respuesta["vacaciones"] . '" required>
				                                <div class="form-control-position">
					                                <i class="iconoslateralesizquierdos fas fa-solid fa-plane"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <input type="hidden" name="fechaIngreso" value="' . $respuesta["fechaIngreso"] . '" required>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="perfilAcademico" class="inputslateralesderechos form-control input-shadow " value="' . $respuesta["perfilAcademico"] . '" required>
				                                <div class="form-control-position">
					                                <i class="iconoslateralesderechos fas fa-solid fa-school"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="vacunas" class="inputslateralesderechos form-control input-shadow " value="' . $respuesta["vacunas"] . '" required>
				                                <div class="form-control-position">
					                                <i class="iconoslateralesderechos fas fa-solid fa-syringe"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="cedula" class="inputslateralesderechos form-control input-shadow " value="' . $respuesta["cedula"] . '" required>
				                                <div class="form-control-position">
					                                <i class="iconoslateralesderechos fas fa-solid fa-id-card"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <div class="form-group">
			                            <div class="position-relative has-icon-right">
				                            <input type="text" id="exampleInputName" name="licencias" class="inputslateralesderechos form-control input-shadow " value="' . $respuesta["licencias"] . '" required>
				                                <div class="form-control-position">
					                                <i class="iconoslateralesderechos fas fa-solid fa-id-badge"></i>
				                                </div>
			                            </div>
			                      </div>

                                  <button type="submit" class="button btn btn-light btn-block waves-effect waves-light">Guardar cambios</button>
                                 ';
                } else {
                    echo '<script>
                               window.location.href = "obtenerIdUpdateEmpleado_error_invalido";
                              </script>';
                }
            } else {
                echo '<script>
                           window.location.href = "obtenerIdUpdateEmpleado_error_vacio";
                          </script>';
            }
        }
    }

    # Actualizar a un empleado
    public static function actualizarEmpleadoController()
    {


        if (
            isset($_POST["nombre"]) && isset($_POST["apellidos"]) &&
            isset($_POST["familiares"]) && isset($_POST["telefonos"]) 
            && isset($_POST["vacaciones"]) && isset($_POST["fechaIngreso"]) 
            && isset($_POST["perfilAcademico"]) 
            && isset($_POST["vacunas"]) && isset($_POST["cedula"]) 
            && isset($_POST["licencias"])
        ) {

            if (
                !empty($_POST["nombre"]) && !empty($_POST["apellidos"])
                && !empty($_POST["familiares"]) && !empty($_POST["telefonos"]) 
                && !empty($_POST["vacaciones"]) && !empty($_POST["perfilAcademico"]) 
                && !empty($_POST["vacunas"]) && !empty($_POST["cedula"]) 
                && !empty($_POST["licencias"])
            ) {

                if (
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()]{3,100}$/', $_POST["nombre"]) &&
                    preg_match('/^[A-Za-z0-9\s]{3,100}$/', $_POST["apellidos"]) &&
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()\,]{3,100}$/', $_POST["familiares"]) &&
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()\,]{3,100}$/', $_POST["telefonos"]) &&
                    preg_match('/^[A-Za-z0-9\s]{1,100}$/', $_POST["vacaciones"]) &&
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()\,]{3,100}$/', $_POST["perfilAcademico"]) &&
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()\,]{3,100}$/', $_POST["vacunas"]) &&
                    preg_match('/^[A-Za-z0-9\-]{3,100}$/', $_POST["cedula"]) &&
                    preg_match('/^[A-Za-z0-9\s\-\_\.\()\,]{2,100}$/', $_POST["licencias"])
                ) {


                    $datos = array(
                        "id" => $_POST["id"],
                        "nombre" => $_POST["nombre"],
                        "apellidos" => $_POST["apellidos"],
                        "familiares" => $_POST["familiares"],
                        "telefonos" => $_POST["telefonos"],
                        "vacaciones" => $_POST["vacaciones"],
                        "fechaIngreso" => $_POST["fechaIngreso"],
                        "perfilAcademico" => $_POST["perfilAcademico"],
                        "vacunas" => $_POST["vacunas"],
                        "cedula" => $_POST["cedula"],
                        "licencias" => $_POST["licencias"],
                    );

                    $respuesta = Datos::actualizarEmpleadoModel($datos, "empleados");

                    if ($respuesta == "success") {
                        echo '<script>
                                           window.location.href = "actualizadoEmpleado_ok";
                                          </script>';
                    } else {
                        echo '<script>
                                           window.location.href = "actualizadoEmpleado_error";
                                          </script>';
                    }
                } else {
                    echo '<script>
                                   window.location.href = "actualizadoEmpleado_error_invalido";
                                  </script>';
                }
            } else {
                echo '<script>
                               window.location.href = "actualizadoEmpleado_error_vacio";
                              </script>';
            }
        }
    }

    # Borrar a un empleado
    public static function borrarEmpleadoController()
    {

        if (isset($_GET["idBorrar"])) {

            if (!empty($_GET["idBorrar"])) {

                if (preg_match('/^[0-9]{1,20}$/', $_GET["idBorrar"])) {

                    $datos = $_GET["idBorrar"];

                    $respuesta = Datos::borrarEmpleadoModel($datos, "empleados");

                    if ($respuesta == "success") {
                        echo '<script>
                                     window.location.href = "eliminadoEmpleado_ok";
                                  </script>';
                    } else {
                        echo '<script>
                                     window.location.href = "eliminadoEmpleado_error";
                                  </script>';
                    }
                } else {
                    echo '<script>
                                window.location.href = "eliminarIdEmpleado_error_invalido";
                              </script>';
                }
            } else {
                echo '<script>
                           window.location.href = "eliminarIdUsuarioEmpleado_error_invalido";
                          </script>';
            }
        }
    }
}
