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
<div class="row contenido">
  <div class="col-md-12" style="padding-top: 10px">
    <form action="" id="usuarios" method="POST">
      <h3 class="titulo" align="center">Agregar usuario</h3>
      <div class="form-group">
        <label for="listBuscar" class="textoN">Tipo de usuario</label>
        <select class="custom-select" name="tipo[]">
          <option value="0" class="textoN">Normal</option>
          <option value="1" class="textoN">Privilegios</option>
        </select>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="txtProducto" class="textoN">Nombre</label>
          <input type="text" name="nombre" class="form-control producto">
        </div>
        <div class="form-group col-md-6">
          <label for="txtCantidad" class="textoN">Apellido</label>
          <input type="text" name="apellido" class="form-control producto">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="txtProducto" class="textoN">Usuario</label>
          <input type="text" name="usuario" class="form-control producto">
        </div>
        <div class="form-group col-md-6">
          <label for="contrasena" class="textoN">Contraseña</label>
          <input type="password" name="contrasena" class="form-control producto">
        </div>
      </div>
      <div class="d-flex justify-content-center" style="padding-top: 10px">
      <?php
        include './Controllers/crearUsuarioC.php'
      ?>
      </div>
      <div class="d-flex justify-content-around" style="padding-top: 10px">
        <input type="submit" class="btn btn-info col-md-3" value="Crear" name="btnModificar">
        <input type="reset" class="btn btn-warning col-md-3" value="Cancelar" name="btnCancelar">
        <input type="submit" class="btn btn-outline-danger col-md-3" value="Regresar" name="Usuarios">
      </div>
    </form>
  </div>
</div>