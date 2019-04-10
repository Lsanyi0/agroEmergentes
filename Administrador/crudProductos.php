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
<form action="" id="crudUsuarios" method="POST">
    <div class="container">
        <div class="row col-md-12" style="padding-top: 20px">
            <div class="col-md-12" style="text-align: center">
                <h4><b>Administrar productos</b></h4>
                <hr>
            </div>
            <input type="submit" class="btn btn-success col-md-12" value="Crear nuevo producto" name="crearProducto">
            <div class="col-md-12" style="text-align: center">
                <?php
                if (isset($_POST['borrar'])) {
                    include './Controllers/eliminarUsuarioC.php';
                }
                ?>
            </div>
            <div class="col-md-12" style="padding-top: 5px">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"><b>#</b></th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Existencia</th>
                            <th scope="col">Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "./Controllers/cargarProductosC.php";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>