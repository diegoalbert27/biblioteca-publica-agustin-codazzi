<?php

    class solicitanteModel extends dbAbstractModel {

        # public $nombre, $apellido, $sexo, $cedula, $email, $ocupacion, $institucion, $edad;

        # private $telefono, $id, $direccion;

        public function get () {
            $this->query = 'SELECT s.id_sol AS idSol, s.nom_sol AS nomSol, s.ape_sol AS apeSol,  s.ced_sol AS cedSol, s.corr_sol AS corrSol, s.dir_sol AS dirSol, s.edad_sol AS edadSol, s.sex_sol AS sexSol, s.tlf_sol AS teleSol, o.id_ocup AS idOcup, o.nom_ocup AS nomOcup, i.id_inst AS idInst, i.nom_inst AS nomInst FROM solicitantes s INNER JOIN ocupacion o ON s.ocup_sol = o.id_ocup INNER JOIN instituciones i ON s.inst_sol = i.id_inst';

            $this->get_result_from_query();
            return $this->rows;
        }

        public function getById () {
            $this->query = 'SELECT s.id_sol AS idSol, s.nom_sol AS nomSol, s.ape_sol AS apeSol,  s.ced_sol AS cedSol, s.corr_sol AS corrSol, s.dir_sol AS dirSol, s.edad_sol AS edadSol, s.sex_sol AS sexSol, s.tlf_sol AS teleSol, o.id_ocup AS idOcup, o.nom_ocup AS nomOcup, i.id_inst AS idInst, i.nom_inst AS nomInst FROM solicitantes s INNER JOIN ocupacion o ON s.ocup_sol = o.id_ocup INNER JOIN instituciones i ON s.inst_sol = i.id_inst WHERE id_sol=' . $_GET['id'];

            $this->get_result_from_query();
            return $this->rows;
        }

        public function post () {
            if ($_POST) {
                if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['cedula']) && !empty($_POST['sexo']) && !empty($_POST['edad']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['direccion']) && !empty($_POST['ocupacion']) && !empty($_POST['institucion'])) {

                    $this->query = 'INSERT INTO `solicitantes` (nom_sol, ape_sol, ced_sol, edad_sol, tlf_sol, dir_sol, corr_sol, sex_sol, ocup_sol, inst_sol) VALUES (?,?,?,?,?,?,?,?,?,?)';
                
                    $this->rows = array($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['edad'], $_POST['telefono'], $_POST['direccion'], $_POST['email'], $_POST['sexo'],$_POST['ocupacion'], $_POST['institucion']);

                    $this->execute_single_query('ssiissssii', $this->rows);
                }
            }
        }

        public function update () {
            if ($_POST) {
                if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['cedula']) && !empty($_POST['sexo']) && !empty($_POST['edad']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['direccion']) && !empty($_POST['ocupacion']) && !empty($_POST['institucion']) && !empty($_POST['id'])) {

                    $this->query = 'UPDATE `solicitantes` SET nom_sol=?, ape_sol=?, ced_sol=?, edad_sol=?, tlf_sol=?, dir_sol=?, corr_sol=?, sex_sol=?, ocup_sol=?, inst_sol=? WHERE id_sol=?';
                
                    $this->rows = array($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['edad'], $_POST['telefono'], $_POST['direccion'], $_POST['email'], $_POST['sexo'],$_POST['ocupacion'], $_POST['institucion'], $_POST['id']);

                    $this->execute_single_query('ssiissssiii', $this->rows);
                }
            }
        }

        public function delete () {
            if ($_GET) {
                $this->query = 'DELETE FROM solicitantes WHERE id_sol=?';
                $this->rows = array($_GET['id']);
                $this->execute_single_query('i', $this->rows);
            }
        }
    }