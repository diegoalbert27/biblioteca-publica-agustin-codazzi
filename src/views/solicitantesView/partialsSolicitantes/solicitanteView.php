<div class="container">
  <section class="mt-4 col-xl-10 cuerpo">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Solicitantes de la biblioteca</h1>
    </div>

    <div class="card">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">C.I.</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $clave) : ?>
            <tr>
              <th scope="row"><?php echo $clave['idSol']; ?></th>
              <td><?php echo $clave['nomSol'] ?></td>
              <td><?php echo $clave['apeSol'] ?></td>
              <td><?php echo $clave['cedSol'] ?></td>
              <td>
                <div class="btn-group botones">
                  <a class="btn btn-sm btn-primary mb-1" href="/biblioteca-publica-agustin-codazzi/src/index.php?controller=solicitante&action=viewbyid&id=<?php echo $clave['idSol'] ?>">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-success mb-1" href="/biblioteca-publica-agustin-codazzi/src/index.php?controller=solicitante&action=formupdate&id=<?php echo $clave['idSol'] ?>">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="/biblioteca-publica-agustin-codazzi/src/index.php?controller=solicitante&action=delete&id=<?php echo $clave['idSol'] ?>" class="btn btn-sm btn-danger mb-1">
                    <i class="fas fa-trash-alt ico"></i>
                  </a>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Esta Seguro de <b>Eliminar Este Registro?</b>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
              <a href="/biblioteca-publica-agustin-codazzi/src/index.php?controller=solicitante&action=delete&id=<?php echo $clave['idSol'] ?>" class="btn btn-danger">Si</a>
            </div>
          </div>
        </div>
      </div>


      <div class="btn-group">
        <a href="<?php echo $helpers->url('solicitante', 'form'); ?>" class="d-none d-inline-block btn btn-primary shadow-sm"> Añadir Nuevo Solicitante</a>
      </div>

    </div>
  </section>
</div>