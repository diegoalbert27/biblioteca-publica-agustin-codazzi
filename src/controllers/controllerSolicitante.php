<?php

    class controllerSolicitante extends controllerBase {

        public function __construct () {
            parent::__construct();
        }

        public function index () {
            $solicitante = new solicitanteModel;
            $allSolicitantes = $solicitante->get();
            $this->view('solicitantesView/solicitantes', array(
                '$allSolicitantes' => $allSolicitantes,
                'title' => 'Solicitantes'
            ));
        }

        public function viewbyid () {
            if (isset($_GET['id'])) {
                $solicitante = new solicitanteModel;
                $allsolicitante = $solicitante->getById();
                $this->view('solicitantesView/solicitantes', array(
                    '$allsolicitante' => $allsolicitante,
                    'title' => 'Ver Solicitante'
                ));
            }
        }

        public function form () {
            $instituciones = new depFunc('instituciones');
            $ocupacion = new depFunc('ocupacion');

            $allOcupacion = $ocupacion->get();
            $allInstituciones = $instituciones->get();

            $this->view('solicitantesView/solicitantes', array(
                '$allInstituciones' => $allInstituciones,
                '$allOcupacion' => $allOcupacion,
                'title' => 'Registro'
            ));
        }

        public function formupdate () {
            $instituciones = new depFunc('instituciones');
            $ocupacion = new depFunc('ocupacion');
            $solicitante = new solicitanteModel;
            
            $allsolicitante = $solicitante->getById();
            $allOcupacion = $ocupacion->get();
            $allInstituciones = $instituciones->get();

            $this->view('solicitantesView/solicitantes', array(
                '$allInstituciones' => $allInstituciones,
                '$allOcupacion' => $allOcupacion,
                '$allsolicitante' => $allsolicitante,
                'title' => 'Modificar'
            ));
        }

        public function crear () {
            if (isset($_POST['nombre'])) {
                $solicitante = new solicitanteModel;
                $solicitante->post();
            }
            $this->redirect();
        }

        public function actualizar () {
            if (isset($_POST['id'])) {
                $solicitante = new solicitanteModel;
                $solicitante->update();
            }
            $this->redirect();
        }

        public function delete () {
            if (isset($_GET['id'])) {
                $solicitante = new solicitanteModel;
                $solicitante->delete();
            }
            $this->redirect();
        }
    }