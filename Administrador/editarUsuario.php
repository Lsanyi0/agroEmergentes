<?php include './Controllers/editarUsuarioC.php';
?>

<div class="row contenido">
  <div class="col-md-12" style="padding-top: 10px">
    <form action="" id="usuarios" method="POST">
      <h3 class="titulo" align="center">Editar usuario</h3>
      <div class="form-group">
        <label for="listBuscar" class="textoN">Tipo de usuario</label>
        <select class="custom-select" name="tipo[]">
          <?php
          if ($result[5] = 0) {
              echo '<option value="0" class="textoN" selected>Normal</option>';
              echo '<option value="1" class="textoN">Privilegios</option>';
            } else {
              echo '<option value="0" class="textoN">Normal</option>';
              echo '<option value="1" class="textoN" selected>Privilegios</option>';
            }
          ?>
        </select>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="txtProducto" class="textoN">Nombre</label>
          <input type="text" name="nombre" class="form-control producto" value="<?php echo $result[1]; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="txtCantidad" class="textoN">Apellido</label>
          <input type="text" name="apellido" class="form-control producto" value="<?php echo  $result[2] ?>">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="txtProducto" class="textoN">Usuario</label>
          <input type="text" name="usuario" class="form-control producto" value="<?php echo $result[3] ?>" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="contrasena" class="textoN">Contraseña</label>
          <input type="password" name="contrasena" class="form-control producto" value="<?php echo $result[4] ?>">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="txtCantidad" class="textoN">Telefono</label>
          <input type="tel" name="telefono" class="form-control producto">
        </div>
      </div>
      <div class="form-group">
        <label for="txtCantidad" class="textoN">DUI</label>
        <input type="text" name="dui" class="form-control producto">
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="txtCantidad" class="textoN">Salario</label>
          <input type="text" name="salario" class="form-control producto">
        </div>
      </div>
      <div class="d-flex justify-content-around" style="padding-top: 10px">
        <button type="submit" class="btn btn-info col-md-3" value="<?php echo $result[0]; ?>" name="btnEditarU">Guardar cambios</button>
        <input type="reset" class="btn btn-warning col-md-3" value="Cancelar" name="btnCancelar">
        <input type="submit" class="btn btn-outline-danger col-md-3" value="Regresar" name="Usuarios">
      </div>
    </form>
  </div>
</div>