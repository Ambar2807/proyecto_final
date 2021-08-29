<?php 

/**
 * Clase donde se realizan todas las consultas, altas y
 * modificaciones en la tabla Usuario
 */
class UserDAO {

    public function validarUserYPass($user, $password) {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost","id17375979_root","ambarRivas12345.","id17375979_proyecto_final");
        $conexionDB->conectar(); //conecta php con la base de datos MySql
    
        $sql = "SELECT * FROM users WHERE user = '$user' AND password = '$password'";
        $conexionDB->ejecutar($sql);
    
        return $conexionDB->cantFilas() > 0;
    }

    public function validarUsuario($user) {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost","id17375979_root","ambarRivas12345.","id17375979_proyecto_final");
        $conexionDB->conectar();
    
        $sql = "SELECT * FROM users WHERE user = $user";
        $conexionDB->ejecutar($sql);
    
        return $conexionDB->cantFilas() > 0;        
    }

    public function validarPassword($password) {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost","id17375979_root","ambarRivas12345.","id17375979_proyecto_final");
        $conexionDB->conectar();
    
        $sql = "SELECT * FROM users WHERE password = $password";
        $conexionDB->ejecutar($sql);
    
        return $conexionDB->cantFilas() > 0;        
    }

    public function guardarUsuario($user , $password) {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","id17375979_root","ambarRivas12345.","id17375979_proyecto_final");
        $conexionDB->conectar();

        $sql = "INSERT INTO `users`(`user`, `password`, `name_urname`) 
        VALUES (
            '{$user->getUser()}', 
            '{$user->getPassword()}', 
            '')";

        $conexionDB->ejecutar($sql);    

        return $conexionDB->cantFilas() > 0;
    }

}
?>
