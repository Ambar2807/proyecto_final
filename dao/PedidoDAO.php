<?php 
class PedidoDAO {

    public function guardarPedido($pedido) {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","id17375979_root","ambarRivas12345.","id17375979_proyecto_final");
        $conexionDB->conectar();
    
        $sql = "INSERT INTO pedidos 
        (`nombre`, `apellido`, `usuario`, `mail`, `lugar_entrega`, `localidad`, `provincia`, `cod_postal`, `forma_pago`, `tarj_titular`, `tarj_numero`, `tarj_vencimiento`, `tarj_clave`) 
        VALUES (
        '{$pedido->getNombre()}', 
        '{$pedido->getApellido()}', 
        '{$pedido->getUsuario()}', 
        '{$pedido->getMail()}', 
        '{$pedido->getLugarEntrega()}', 
         '{$pedido->getLocalidad()}',
         '{$pedido->getProvincia()}', 
         '{$pedido->getCodPostal()}', 
         '{$pedido->getFormaPago()}',
         '{$pedido->getTarjTitular()}', 
         '{$pedido->getTarjNumero()}', 
         '{$pedido->getTarjVencimiento()}', 
         {$pedido->getTarjClave()})";
        
         //var_dump($sql); die();
        $conexionDB->ejecutar($sql); 

        return $conexionDB->cantFilas() > 0;
    }

    public function listarPedidos() {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","id17375979_root","ambarRivas12345.","id17375979_proyecto_final");
        $conexionDB->conectar();

        $sql = "SELECT * FROM pedidos";
        $result = $conexionDB->ejecutar($sql); 

        while($pedido = $result->fetch_assoc()) {
            $listaPedidos[] = $pedido;
        }
           
        return $listaPedidos;
    }

    /** Método o Función que devuelve todos los pedidos de 
     * la tabla Pedidos de la Base de Datos.
     * El método se conecta a la BD, obtiene todos los pedidos
     * y devuelve un array asociativo.
     */
    public function listarPedidosEC() {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","id17375979_root","ambarRivas12345.","id17375979_proyecto_final");
        $conexionDB->conectar();

        $sql = "SELECT * FROM pedidos ORDER BY apellido";
        $result = $conexionDB->ejecutar($sql);

        while ($pedido = $result->fetch_assoc()) {
            $pedido[] = $pedido;
        }

        return $pedido;
    }

    public function listarLocalidades($provincia) {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","id17375979_root","ambarRivas12345.","id17375979_proyecto_final");
        $conexionDB->conectar();

        $sql = "SELECT * FROM localidades where id_provinlocal = ".$provincia;
        $result = $conexionDB->ejecutar($sql); 

        while($localidad = $result->fetch_assoc()) {
            $listaLocalidad[] = $localidad;
        }
           
        return $listaLocalidad;
    }

    public function listarProvincias() {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","id17375979_root","ambarRivas12345.","id17375979_proyecto_final");
        $conexionDB->conectar();

        $sql = "SELECT * FROM provincias";
        $result = $conexionDB->ejecutar($sql);

        while ($provincias = $result->fetch_assoc()) {
            $provinciass[] = $provincias;
        }
        return $provinciass;
    }
}


?>
