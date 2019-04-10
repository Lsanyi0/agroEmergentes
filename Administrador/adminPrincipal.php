<?php
if(session_status() == PHP_SESSION_NONE){session_start();}
if (!isset($_SESSION["infoUsuario"])) {
  header("location: /agroEmergentes/");
} else if (isset($_SESSION["infoUsuario"]))
{
  if ($_SESSION["infoUsuario"][0]==0)
  {
    header("location: /agroEmergentes/ventas.php");
  }
}
?>
<form id="adminPrincipal" action="" method="POST">
  <div style="padding-top: 150px">
    <div class="container">
      <div class="row col-md-12 justfy-content-center" style="text-align: center">
        <div class="col-md-6">
          <button type="submit" class="btn btn-light fas fa-users fa-3x" name="Usuarios">Usuarios</button>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-light fas fa-box-open fa-3x" name="Inventario">Inventario</button>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-light fas fa-shopping-cart fa-3x" name="Ventas">Ventas</button>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-light fas fa-shopping-bag fa-3x" name="Compras" value="Compras">Compras</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</form>