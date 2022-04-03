<?php

require_once "conexion.php";

class Datos extends Conexion
{

    # Registrar Usuarios
    public static function registroUsuarioModel($datos, $tabla)
    {
        $stnt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, password, email) VALUES (:nombre, :password, :email)");
        $stnt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stnt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stnt->bindParam(":email", $datos["email"], PDO::PARAM_STR);

        if ($stnt->execute()) {
            return "success";
        } else {
            $stnt->errorInfo();
        }
    }

    # Cargar usuarios en la vista
    public static function vistaUsuariosModel($tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT id, nombre, email FROM $tabla where id > 83");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    # Borrar un usuario
    public static function borrarUsuarioModel($datos, $tabla)
    {
        $stnt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stnt->bindParam(":id", $datos, PDO::PARAM_INT);

        if ($stnt->execute()) {
            return "success";
        } else {
            return $stnt->errorInfo();
        }
    }

    # Traer una vista para editar un usuario
    public static function editarUsuarioModel($datos, $tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT id, nombre, email FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $datos, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    # Actualizar un usuario
    public static function actualizarUsuarioModel($datos, $tabla)
    {
        $stnt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, email = :email WHERE id = :id");
        $stnt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $stnt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stnt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stnt->bindParam(":email", $datos["email"], PDO::PARAM_STR);

        if ($stnt->execute()) {
            return "success";
        } else {
            $stnt->errorInfo();
        }
    }

    # Validar ingreso de un usuario
    public static function ingresarUsuarioModel($datos, $tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT nombre, password FROM $tabla WHERE nombre = :nombre");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    # Validar en caso de coincidencias de un usuario (AJAX) (Nombre)
    public static function validarUsuarioModel($datos)
    {
        $stmt = Conexion::conectar()->prepare("SELECT count(nombre) FROM usuarios WHERE nombre = :nombre");
        $stmt->bindParam(":nombre", $datos, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    # Validar en caso de coincidencias de un usuario (AJAX) (Email)
    public static function validarEmailModel($datos)
    {
        $stmt = Conexion::conectar()->prepare("SELECT count(email) FROM usuarios WHERE email = :email");
        $stmt->bindParam(":email", $datos, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }


    ///////////////////////////////////////////////////
    // Parte de los empleados \\
    //////////////////////////////////////////////////

    # Registrar a un empleado
    public static function registroEmpleadoModel($datos, $tabla)
    {
        $stnt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, apellidos, familiares, telefonos, vacaciones, perfilAcademico, vacunas, cedula, licencias) VALUES (:nombre, :apellidos, :familiares, :telefonos, :vacaciones, :perfilAcademico, :vacunas, :cedula, :licencias)");
        $stnt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stnt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
        $stnt->bindParam(":familiares", $datos["familiares"], PDO::PARAM_STR);
        $stnt->bindParam(":telefonos", $datos["telefonos"], PDO::PARAM_STR);
        $stnt->bindParam(":vacaciones", $datos["vacaciones"], PDO::PARAM_STR);
        $stnt->bindParam(":perfilAcademico", $datos["perfilAcademico"], PDO::PARAM_STR);
        $stnt->bindParam(":vacunas", $datos["vacunas"], PDO::PARAM_STR);
        $stnt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
        $stnt->bindParam(":licencias", $datos["licencias"], PDO::PARAM_STR);

        if ($stnt->execute()) {
            return "success";
        } else {
            $stnt->errorInfo();
        }
    }

    # Mostrar a los empleados
    public static function vistaEmpleadosModel($tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT id, nombre, apellidos, familiares, telefonos, vacaciones, perfilAcademico, fechaIngreso, vacunas, cedula, licencias FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    # Traer vista para editar a un empleado
    public static function editarEmpleadoModel($datos, $tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT id, nombre, apellidos, familiares, telefonos, vacaciones, fechaIngreso, perfilAcademico, vacunas, cedula, licencias FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $datos, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    # Actualizar un empleado
    public static function actualizarEmpleadoModel($datos, $tabla)
    {
        $stnt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellidos = :apellidos, familiares = :familiares, telefonos = :telefonos, vacaciones = :vacaciones, fechaIngreso = :fechaIngreso, perfilAcademico = :perfilAcademico, vacunas = :vacunas, cedula = :cedula, licencias = :licencias WHERE id = :id");
        $stnt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $stnt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stnt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
        $stnt->bindParam(":familiares", $datos["familiares"], PDO::PARAM_STR);
        $stnt->bindParam(":telefonos", $datos["telefonos"], PDO::PARAM_STR);
        $stnt->bindParam(":vacaciones", $datos["vacaciones"], PDO::PARAM_STR);
        $stnt->bindParam(":fechaIngreso", $datos["fechaIngreso"], PDO::PARAM_STR);
        $stnt->bindParam(":perfilAcademico", $datos["perfilAcademico"], PDO::PARAM_STR);
        $stnt->bindParam(":vacunas", $datos["vacunas"], PDO::PARAM_STR);
        $stnt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
        $stnt->bindParam(":licencias", $datos["licencias"], PDO::PARAM_STR);

        if ($stnt->execute()) {
            return "success";
        } else {
            $stnt->errorInfo();
        }
    }

    # Borrar a un empleado
    public static function borrarEmpleadoModel($datos, $tabla)
    {
        $stnt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stnt->bindParam(":id", $datos, PDO::PARAM_INT);

        if ($stnt->execute()) {
            return "success";
        } else {
            return $stnt->errorInfo();
        }
    }
}
