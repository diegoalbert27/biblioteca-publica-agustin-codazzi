<section class="my-4 container">
    <div class="float-right col-xl-10">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Registro de nuevos solicitantes</h2>
        </div>

        <form action="<?php echo $helpers->url('solicitante', 'crear') ?>" method="post">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Datos personales:</h6>
                </div>

                <div class="card-body">
                    <div class="p-2">
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombres">
                            </div>
                            <div class="col">
                                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="cedula" class="form-control" id="cedula" placeholder="Cédula" onkeypress="solonumeros(event);">
                            </div>
                            <div class="col">
                                <select name="sexo" class="form-control" id="sexo">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="number" name="edad" id="dia" class="form-control" min="0" max="200" placeholder="Edad" onkeypress="solonumeros(event);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Contacto:</h6>
                </div>

                <div class="card-body">
                    <div class="p-2">
                        <div class="row mb-3">
                            <div class="col">
                                <input type="tel" name="telefono" class="form-control" id="tlf" placeholder="Telefono:" onkeypress="solonumeros(event);">
                            </div>
                            <div class="col">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Correo Electronico:">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ingresar Dirección:">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ocupación:</h6>
                </div>

                <div class="card-body">
                    <div class="p-2">
                        <div class="row mb-3">
                            <div class="col-md-10">
                                <select name="ocupacion" class="form-control" id="ocupacion">
                                    <?php foreach ($resultOcup as $clave) : ?>
                                        <option value="<?php echo $clave['id_ocup'] ?>"><?php echo $clave['nom_ocup'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-7">
                                <select name="institucion" class="form-control" id="ocupacion">
                                    <?php foreach ($resultInst as $clave) : ?>
                                        <option value="<?php echo $clave['id_inst'] ?>"><?php echo $clave['nom_inst'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                                    Agregar Nueva Institución
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">
                    Agregar Registro
                </button>
                <button type="reset" class="btn btn-outline-secondary">
                    Restablecer Campos
                </button>
            </div>

        </form>



        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva Institución</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="institucion.php" method="post">

                            <div class="form-group">
                                <label for="institucion-name" class="col-form-label">Nombre de Institución:</label>
                                <input type="text" class="form-control" name="nom_inst" id="institucion-name">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="institucion-tel-name" class="col-form-label">Telefono de Institución:</label>
                                        <input type="text" class="form-control" name="tel_inst" id="institucion-tel-name" onkeypress="solonumeros(event);">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="direccion-text" class="col-form-label">Dirección:</label>
                                <input type="text" name="dir_inst" class="form-control" id="direccion-text">
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>