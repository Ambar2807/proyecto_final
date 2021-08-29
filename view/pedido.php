<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registro de Pedido</title>

  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="py-4 text-center">
    <h2>Formulario de Pedido</h2>
    <p class="lead">La fecha de entrega será coordinada telefónicamente.</p>
  </div>
 
  <div class="col-md-12 text-center">
    <h4 class="mb-3">Tu pedido</h4>
    <form class="needs-validation" novalidate action="../controller/checkPedido.php" method="POST">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">Nombre</label>
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Tu nombre" value="" required>
          <div class="invalid-feedback">
            Debe ingresar su nombre.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Apellido</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Tu apellido" value="" required>
          <div class="invalid-feedback">
            Faltó ingresar el apellido.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 mb-3">
          <label for="username">Nombre de Usuario</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <!-- <span class="input-group-text">@</span> -->
            </div>
            <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" required>
            <div class="invalid-feedback" style="width: 100%;">
              Faltó ingresar el usuario.
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email"  name="email" placeholder="tumail@gmail.com">
          <div class="invalid-feedback">
            El e-mail es inválido.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 mb-3">
          <label for="address">Lugar de Entrega</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Calle, n°, localidad..." required>
          <div class="invalid-feedback">
            Faltó ingresar el domicilio de entrega.
          </div>
        </div>
      </div>

      <div class="row">
      
      <div class="col-md-4 mb-3">
        <label for="state">Provincia</label>
        <select class="custom-select d-block w-100" id="state" name="state" required>
          <option value="">Seleccioná...</option>

           <?php
            require_once("../dao/PedidoDAO.php");
            $pedidoDAO = new PedidoDAO();
            $listaProvincias = $pedidoDAO->listarProvincias();
     
            for ($i=0; $i<count($listaProvincias); $i++) {
            ?>
              <?php echo '<option value="'.$listaProvincias[$i]['id_provincia'].'">'.$listaProvincias[$i]['name']."</option>"; ?>

            <?php  } ?>  

        </select>
        <div class="invalid-feedback">
          Seleccioná una provincia válida.
        </div>
      </div>

      <div class="col-md-5 mb-3">
          <label for="location">Localidad</label>
          <select class="custom-select d-block w-100" id="location" name="location" required>
            <option value="">Seleccioná...</option>
          </select>
          <div class="invalid-feedback">
            Seleccioná una localidad válida.
          </div>
        </div>
      
        
        <div class="col-md-3 mb-3">
          <label for="zip">Cod.Postal</label>
          <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
          <div class="invalid-feedback">
            Faltó ingresar el Código Postal.
          </div>
        </div>
      </div>


      <hr class="mb-6">

      <h4 class="mb-3">Forma de Pago</h4>

      <div class="d-block my-3">
        <div class="custom-control custom-radio">
          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="T" checked required>
          <label class="custom-control-label" for="credit">Tarjeta de Crédito</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="M" required>
          <label class="custom-control-label" for="debit">Mercado Pago</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="cc-name">Nombre del Titular de la Tarjeta</label>
          <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="" required>
          <small class="text-muted">Nombre como se muestra en la tarjeta</small>
          <div class="invalid-feedback">
            El nombre debe ser ingresado.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="cc-number">Número de la tarjeta</label>
          <input type="text" class="form-control" id="cc-number" name="cc-number" placeholder="" required>
          <div class="invalid-feedback">
            El n° es obligatorio.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3"></div>
        <div class="col-md-3 mb-3">
          <label for="cc-expiration">Fecha de Vto.</label>
          <input type="text" class="form-control" id="cc-expiration" name="cc-expiration" placeholder="" required>
          <div class="invalid-feedback">
            Falta ingresar la fecha de Vto.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="cc-cvv">Código</label>
          <input type="text" class="form-control" id="cc-cvv" name="cc-cvv" placeholder="" required>
          <div class="invalid-feedback">
            N° de seguridad obligatorio.
          </div>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Ingresar la Solicitud</button>
        </div>
      </div>
    </form>
  </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy;Ambar Rivas</p>
  </footer>
  </div>
 
  <script src="./js/form-validation.js"></script>

  <script>

    var http_request = false;
    var provincia = document.querySelector('#state');
    provincia.addEventListener('change', buscarLocalidad);


    function buscarLocalidad() {

      var url = '../controller/checkLocalidad.php?provincia='+provincia.value;
      http_request = false;

    if (window.XMLHttpRequest) { // Mozilla, Safari,...
      
      http_request = new XMLHttpRequest();

      if (http_request.overrideMimeType) {

        http_request.overrideMimeType('text/xml');

      }
    } 
    else if (window.ActiveXObject) { // IE

      try {

        http_request = new ActiveXObject("Msxml2.XMLHTTP");

      } catch (e) {

        try {

          http_request = new ActiveXObject("Microsoft.XMLHTTP");

        } catch (e) {}

      }

    }

  if (!http_request) {

    alert('Falla :( No es posible crear una instancia XMLHTTP');

    return false;

  }

  http_request.onreadystatechange = llenaLocalidades;

  http_request.open('GET', url, false);

  http_request.send();

 

}

 

function llenaLocalidades() {

if (http_request.readyState == 4) {

  if (http_request.status == 200) {
    var localidad = document.querySelector('#location');

    response = http_request.response;

    if (typeof response == "string") {
      response = JSON.parse(response);
    } else{
      response = response;
    }
    
    var array = response;
    
    while (localidad.length > 0) {
      localidad.remove(0);
    }

    for (value in array) {
      var option = document.createElement("option");
      option.text = array[value].name_localidades;
      option.value = array[value].id_localidades;
      localidad.add(option);
    }

  } else {

    alert('Hubo problemas con la petición.');

  }

}

}
  </script>
</body>

</html>
