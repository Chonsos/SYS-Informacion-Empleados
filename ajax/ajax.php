<?php

require_once "../controllers/controller.php";
require_once "../models/crud.php";

class Ajax
{

    public $validar_usuario;
    public $validar_email;


    public function validarUsuarioAjax()
    {
        $datos = $this->validar_usuario;

        $respuesta = MvcController::validarUsuarioController($datos);

        echo $respuesta;
    }

    public function validarEmailAjax()
    {
        $datos = $this->validar_email;

        $respuesta = MvcController::validarEmailController($datos);

        echo $respuesta;
    }
}

if (isset($_POST["nombre"])) {
    $a = new Ajax();
    $a->validar_usuario = $_POST["nombre"];
    $a->validarUsuarioAjax();
}

if (isset($_POST["email"])) {
    $a = new Ajax();
    $a->validar_email = $_POST["email"];
    $a->validarEmailAjax();
}

if (isset($_FILES["file"])) {
    if (!empty($_FILES["file"])) {
        if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
            $dir_destino = "../uploads/";
            $tamano = $_FILES["file"]["size"];
            $tipo = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            $nombre = $_FILES["file"]["name"];
            $destino = $dir_destino . $nombre;
            if ($tipo != "jpg" && $tipo != "jpeg" && $tipo != "png" && $tipo != "gif") {
                echo "300";
            } else if ($tamano > 26214400) {
                echo "301";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $destino);
                echo $destino;
            }
        } else {
            echo "302";
        }
    } else {
        echo "303";
    }
}

# Seccion del buscador
if (isset($_POST['search'])) {
    $link = mysqli_connect('localhost', 'root', '', 'pdophp');

    $search = $_POST['search'];

    if (!empty($search)) {
        $query = "SELECT * FROM empleados WHERE nombre LIKE '$search%' 
        OR apellidos LIKE '$search%'
        OR familiares LIKE '$search%'
        OR telefonos LIKE '$search%' 
        OR vacaciones LIKE '$search%' 
        OR perfilAcademico LIKE '$search%' 
        OR fechaIngreso LIKE '$search%'
        OR vacunas LIKE '$search%' 
        OR cedula LIKE '$search%' 
        OR licencias LIKE '$search%' ";

        $resultado = mysqli_query($link, $query);

        if (!$resultado) {
            die('Error en la consulta' . mysqli_error($link));
        }

        $informacion = array();
        while ($campo = mysqli_fetch_array($resultado)) {
            $informacion[] = array(
                'id' => $campo['id'],
                'nombre' => $campo['nombre'],
                'apellidos' => $campo['apellidos'],
                'familiares' => $campo['familiares'],
                'telefonos' => $campo['telefonos'],
                'vacaciones' => $campo['vacaciones'],
                'perfilAcademico' => $campo['perfilAcademico'],
                'fechaIngreso' => $campo['fechaIngreso'],
                'vacunas' => $campo['vacunas'],
                'cedula' => $campo['cedula'],
                'licencias' => $campo['licencias'],
            );
        }
        $convertirJson = json_encode($informacion);
        echo $convertirJson;
    }
}
