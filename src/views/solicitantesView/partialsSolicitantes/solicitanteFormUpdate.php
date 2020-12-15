<div class="card">
    <div class="card-header text-center text-light bg-success">
        <h2>Modificar</h2>
    </div>
    
    <?php foreach($result as $clave): ?>
    
        <div class="card-body">
        <form action="<?php echo $helpers->url('solicitante', 'actualizar') ?>" method="post">
            <div class="form-group bg-light p-3" style="border-radius: 6px;">
                <h5>Datos Personales:</h5>
                <div class="row mb-3">
                    <div class="col">
                        <input type="hidden" name="id" value="<?php echo $clave['idSol'] ?>">
                        <input type="text" name="nombre" value="<?php echo $clave['nomSol'] ?>" class="form-control" id="nombre" placeholder="Ingresar Nombre:">
                    </div>
                    <div class="col">
                        <input type="text" name="apellido" value="<?php echo $clave['apeSol'] ?>" class="form-control" id="apellido" placeholder="Ingresar Apellido:">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="cedula" value="<?php echo $clave['cedSol'] ?>" class="form-control" id="cedula" placeholder="Ingresar Cedula:" onkeypress="solonumeros(event);">
                    </div>
                    <div class="col">
                        <select name="sexo" class="form-control" id="sexo">
                            <?php if ($clave['sexSol'] === 'Masculino') : ?>
                                <option value="<?php echo $clave['sexSol'] ?>"><?php echo $clave['sexSol'] ?></option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otros">Otros</option>
                            <?php endif; ?>
                            <?php if ($clave['sexSol'] === 'Femenino') : ?>
                                <option value="<?php echo $clave['sexSol'] ?>"><?php echo $clave['sexSol'] ?></option>
                                <option value="Femenino">Masculino</option>
                                <option value="Otros">Otros</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <input type="number" name="edad" value="<?php echo $clave['edadSol'] ?>" id="dia" class="form-control" min="0" max="200" placeholder="Edad:" onkeypress="solonumeros(event);">
                    </div>
                </div>
            </div>
            <div class="form-group bg-light p-3">
                <h5>Contacto:</h5>
                <div class="row mb-3">
                    <div class="col">
                        <input type="tel" name="telefono" value="<?php echo $clave['teleSol'] ?>" class="form-control" id="tlf" placeholder="Teléfono" onkeypress="solonumeros(event);">
                    </div>
                    <div class="col">
                        <input type="email" name="email" value="<?php echo $clave['corrSol'] ?>" class="form-control" id="email" placeholder="Correo Electrónico">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="direccion" value="<?php echo $clave['dirSol'] ?>" class="form-control" id="direccion" placeholder="Dirección">
                    </div>
                </div>
            </div>
            <div class="form-group bg-light p-3">
                <h5>Ocupación</h5>
                <div class="row mb-3">
                    <div class="col-md-10">
                        <select name="ocupacion" class="form-control" id="ocupacion">
                            <option value="<?php echo $clave['idOcup'] ?>"><?php echo $clave['nomOcup'] ?></option>
                            <?php foreach ($resultOcup as $claveOcup) : ?>
                                <?php if ($claveOcup['nom_ocup'] === $clave['nomOcup']) unset($claveOcup) ?>
                                <?php if (isset($claveOcup)) : ?>
                                    <option value="<?php echo $claveOcup['id_ocup'] ?>"><?php echo $claveOcup['nom_ocup'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-7">
                        <select name="institucion" class="form-control" id="ocupacion">
                            <option value="<?php echo $clave['idInst'] ?>"><?php echo $clave['nomInst'] ?></option>
                            <?php foreach ($resultInst as $claveInst): ?>
                                <?php if ($claveInst['nom_inst'] === $clave['nomInst']) unset($claveInst) ?>
                                <?php if (isset($claveInst)) : ?>
                                    <option value="<?php echo $claveInst['id_inst'] ?>"><?php echo $claveInst['nom_inst'] ?></option>
                                <?php endif; ?>
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
            <div class="text-center">
                <button type="submit" class="btn btn-success">
                    Modificar Registro
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

    <?php endforeach; ?>

</div>