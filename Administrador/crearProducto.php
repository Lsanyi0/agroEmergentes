<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["infoUsuario"])) {
    header("location: /agroEmergentes/");
} else if (isset($_SESSION["infoUsuario"])) {
        if ($_SESSION["infoUsuario"][0] == 0) {
                header("location: /agroEmergentes/ventas.php");
            }
    }
?>
<div class="row contenido">
    <div class="col-md-12" style="padding-top: 10px">
        <form action="" id="usuarios" method="POST">
            <h3 class="titulo" align="center">Agregar producto</h3>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="txtProducto" class="textoN">Producto</label>
                    <input type="text" name="producto" class="form-control producto">
                </div>
                <div class="form-group col-md-6">
                    <label for="txtPrecio" class="textoN">Precio</label>
                    <input type="text" name="precio" class="form-control producto">
                </div>
                <div class="form-group col-md-6">
                    <label for="txtCantidad" class="textoN">Existencia</label>
                    <input type="text" name="existencia" class="form-control producto">
                </div>
            </div>
            <div class="d-flex justify-content-center" style="padding-top: 10px">
                <?php
                include './Controllers/crearProductoC.php'
                ?>
            </div>
            <div class="d-flex justify-content-around" style="padding-top: 10px">
                <input type="submit" class="btn btn-info col-md-3" value="Crear" name="btnModificarP">
                <input type="reset" class="btn btn-warning col-md-3" value="Cancelar" name="btnCancelar">
                <input type="submit" class="btn btn-outline-danger col-md-3" value="Regresar" name="Usuarios">
            </div>
        </form>
    </div>
</div>