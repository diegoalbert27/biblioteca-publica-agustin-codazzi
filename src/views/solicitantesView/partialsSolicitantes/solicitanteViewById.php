<div class="container mt-3">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Solicitantes de la biblioteca</h1>
    </div>

    <?php foreach ($result as $clave) : ?>

        <div class="card ml-5 mb-5 shadow">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold"><?php echo $clave['nomSol'] ?> <?php echo $clave['apeSol'] ?></h5>
            </div>

            <div class="card-body">
                <div class="row mb-5">
                    <div class="col">
                        <h6>Cédula: </h6>
                        <?php echo $clave['cedSol'] ?>
                    </div>
                    <div class="col">
                        <h6>Edad: </h6>
                        <?php echo $clave['edadSol'] ?>
                    </div>
                    <div class="col">
                        <h6>Sexo: </h6>
                        <?php echo $clave['sexSol'] ?>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <h6>Dirección: </h6>
                        <?php echo $clave['dirSol'] ?>
                    </div>
                    <div class="col">
                        <h6>Telefono: </h6>
                        <?php echo $clave['teleSol'] ?>
                    </div>
                    <div class="col">
                        <h6>Correo:</h6>
                        <?php echo $clave['corrSol'] ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <h6>Ocupación:</h6>
                        <?php echo $clave['nomOcup'] ?>
                    </div>
                    <div class="col">
                        <h6>Institución:</h6>
                        <?php echo $clave['nomInst'] ?>
                    </div>
                    <div class="col">
                        <p> </p>
                    </div>
                </div>

            <?php endforeach ?>

            </div>