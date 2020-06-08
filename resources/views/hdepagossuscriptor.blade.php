<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="../plantilla/css/bootstrap.min.css">
<link rel="stylesheet" href="../plantilla/css/tabla.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISTORIAL DE PAGOS</title>
</head>
<body background="../plantilla/images/bg.jpg" width="1000" height="100">
<center><img src="../plantilla/images/tipospagos.jpg" width="1000" height="130"></img> </center>

<div id="main-container">
<center> <h2><b><i><p style="color:#FFFFFF";>HISTORIAL DE PAGOS DE LUIS</p></h2></b></i></center>
<table>
    <thead>
        <tr>
            <th>Servicio</th>
            <th>Cantidad en<br> meses contratado</th>
            <th>Precio por mes</th>
            <th>Último pago</th>
            <th>Monto pendiente</th>
        </tr>
    </thead>

    <tr>
        <td>Spinnig</td>
        <td>5</td>
        <td>$300.00</td>
        <td><div class="control">
  <label class="radio">
    <input type="radio" >
    Si
  </label>  <label class="radio">
    <input type="radio"  checked>
    No
  </label>
</div></td>
        <td>$300.00</td>
    </tr>

    <tr>
        <td>Gym</td>
        <td>1</td>
        <td>$250.00</td>
        <td><div class="control">
  <label class="radio">
    <input type="radio" checked >
    Si
  </label>  <label class="radio">
    <input type="radio"  >
    No
  </label>
</div></td>
        <td>$0.00</td>
    </tr>

    <tr>
        <td>Pilates</td>
        <td>6</td>
        <td>$150.00</td>
        <td><div class="control">
  <label class="radio">
    <input type="radio"  >
    Si
  </label>  <label class="radio">
    <input type="radio" checked >
    No
  </label>
</div></td>
        <td>$150.00</td>
    </tr>
  </table><br>
  <center><a href="/suscriptor" class="btn btn-warning" >LIQUIDAR AHORA</a>
  <a href="/" class="btn btn-danger" >Cerrar</a></center>
</div>
</body>
</html>