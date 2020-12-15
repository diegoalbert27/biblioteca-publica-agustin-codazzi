<?php

    class sessionModel extends dbAbstractModel {

        public function get () {}

        public function post() {
            if ($_POST) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                    $this->query = 'INSERT INTO usuario (name_user, email_user, passwd_user) VALUES (?,?,?)';
                    $this->rows = array($_POST['name'], $_POST['email'], password_hash($_POST['password'], PASSWORD_BCRYPT));
                    $this->execute_single_query('sss', $this->rows);
                }
            }
        }

        public function update() {}
        public function delete() {}
        
        public function getById () {
            if ($_POST) {
                if (!empty($_POST['email']) && !empty($_POST['password'])) {
                    $correo = $_POST['email'];
                    $this->query = "SELECT * FROM usuario WHERE email_user = '$correo'";
                    $this->get_result_from_query();
                    return $this->rows;
                }
            }
        }
    }