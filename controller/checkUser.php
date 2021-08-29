<?php 
    $user = $_POST["user"];
    $password = $_POST["password"];

    require_once("../model/Usuario.php");
    $user = new User($user, $password, "","");

    require_once("../dao/UserDAO.php");
    $userDAO = new UserDAO();
    $guardoOk = $userDAO->guardarUsuario($user, $password);

    if ($guardoOk) {
        echo "El usuario se agregó correctamente <br>";
    } else {
        echo "Error en agregar usuario <br>";
    }    
?>