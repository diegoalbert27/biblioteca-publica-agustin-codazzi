<?php

  include_once 'views/partials/header.php';

  if(isset($_GET['action'])) {
    switch($_GET['action']) {
      case 'form':
        $resultInst = $response['$allInstituciones'];
        $resultOcup = $response['$allOcupacion'];
        include_once 'partialsSolicitantes/solicitanteForm.php';
      break;
      case 'viewbyid':
        $result = $response['$allsolicitante'];
        include_once 'partialsSolicitantes/solicitanteViewById.php';
      break;
      case 'formupdate':
        $resultInst = $response['$allInstituciones'];
        $resultOcup = $response['$allOcupacion'];
        $result = $response['$allsolicitante'];
        include_once 'partialsSolicitantes/solicitanteFormUpdate.php';
      break;
      default:
        $result = $response['$allSolicitantes'];
        include_once 'partialsSolicitantes/solicitanteView.php';
    }
  } else {
    $result = $response['$allSolicitantes'];
    include_once 'partialsSolicitantes/solicitanteView.php';
  }

  include_once 'views/partials/footer.php';

?>