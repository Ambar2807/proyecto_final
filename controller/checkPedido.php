<?php 
    $nombre = $_POST['firstName'];
    $apellido = $_POST['lastName'];
    $usuario = $_POST['username'];
    $mail = $_POST['email'];
    $lugar_entrega = $_POST['address'];
    $localidad = $_POST['location'];
    $provincia = $_POST['state'];
    $cod_postal = $_POST['zip'];
    $forma_pago = $_POST['paymentMethod'];
    $tarj_titular = $_POST['cc-name'];
    $tarj_numero = $_POST['cc-number'];
    $tarj_vencimiento = $_POST['cc-expiration'];
    $tarj_clave = $_POST['cc-cvv'];

    //Este paso es necesario porque trabajamos con POO
    //Creamos un objeto Pedido para luego guardarlo en la DB
    require_once("../model/Pedido.php");
    $pedido = new Pedido($nombre, $apellido, $usuario, $mail, $lugar_entrega, $localidad, $provincia, $cod_postal, $forma_pago, $tarj_titular, $tarj_numero, $tarj_vencimiento, $tarj_clave);
    //var_dump($listaPedidos);die();
    require_once("../dao/PedidoDAO.php");

    $pedidoDAO = new PedidoDAO();
    $guardoOk = $pedidoDAO->guardarPedido($pedido);

    if ($guardoOk) {
        echo "El pedido se agregó correctamente <br>";
    } else {
        echo "Error en agregar pedido <br>";
    }
  
?>