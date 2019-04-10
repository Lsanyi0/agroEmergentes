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
<form action="" id="crudProducto" method="POST">
    <div class="container">
        <div class="row col-md-12" style="padding-top: 20px">
            <div class="col-md-12" style="text-align: center">
                <h4><b>Compras</b></h4>
            </div>
            <div class="col-md-12" style="padding-top: 5px">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"><b>#</b></th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad a agregar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "./Controllers/comprasC.php";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>