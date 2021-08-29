<?php 

    require_once("../dao/PedidoDAO.php");
    $provincia = $_GET['provincia'];
    $pedidoDAO = new PedidoDAO();
    $localidad = $pedidoDAO->listarLocalidades($provincia);

    if ($localidad) {
        header('Content-Type: application/json');
        echo json_encode($localidad);
        exit();
    } else {
        return 'error';
    }
  
?>
