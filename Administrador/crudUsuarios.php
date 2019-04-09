<form action="" id="crudUsuarios" method="POST">
    <div class="container">
        <div class="row col-md-12" style="padding-top: 20px">
            <div class="col-md-12" style="text-align: center">
                <h4><b>Administrar Usuarios</b></h4>
                <hr>
            </div>
            <input type="submit" class="btn btn-success col-md-12" value="Crear nuevo usuario" name="crearUsuario">
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
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Tipo usuario</th>
                            <th scope="col">Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "./Controllers/cargarUsuariosC.php";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>