<form action="" id="crudUsuarios" method="POST">
    <div class="container">
        <div class="row col-md-12" style="padding-top: 20px">
            <div class="col-md-12" style="text-align: center">
                <h4><b>Administrar Usuarios</b></h4>
                <hr>
            </div>
            <input type="submit" class="btn btn-info col-md-12" value="Crear nuevo usuario" name="btnModificar">
            <div class="col-md-12" style="padding-top: 5px">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="col"><b>#</b></td>
                            <td scope="col">Nombre</td>
                            <td scope="col">Apellido</td>
                            <td scope="col">Usuario</td>
                            <td scope="col">Tipo usuario</td>
                            <td scope="col">Opcion</td>
                        </tr>


                    </thead>
                    <tbody>
                        <?php include "./Controllers/cargarUsuarios.php" ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>