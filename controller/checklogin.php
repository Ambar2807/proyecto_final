<?php
    //obtiene los valores enviados desde login.html mediante POST
    $user = $_POST['inputUser'];
    $password = $_POST['inputPass'];

    //debug
    echo $user;
    echo "<br>";
    echo $password;
    echo "<br>";

    require_once("../dao/UserDAO.php");

    $UserDAO = new UserDAO();
    $usuValido = $UserDAO->validarUserYPass($user, $password);

    if($usuValido) {
        //header("Location: ../view/pedido.php");
        echo "Usuario logueado, ve a <a href='../view/pedido.php'>pedidos</a><br>";
        exit;
    } else {
        echo "Usuario o contraseña incorrectos <br>";
        //header("Location: ../view/errLogin.html");
    }


?>