<?php

    class controllerSession extends controllerBase {
        public function __construct() {
            parent::__construct();
        }

        public function index () {
            $this->view('sessionView/session', array(
                'title' => 'login'
            ));
        }

        public function signup () {
            $this->view('sessionView/session', array(
                'title' => 'sign up'
            ));
        }

        public function crear () {
            if (isset($_POST['name'])) {
                $session = new sessionModel;
                $session->post();
            }
            $this->redirect();
        }

        public function iniciar () {
            if (isset($_POST['email'])) {
                $session = new sessionModel;
                $allsession = $session->getById();
                if (count($allsession) > 0 && password_verify($_POST['password'], $allsession[0]['passwd_user'])) {
                    $_SESSION['user_id'] = $allsession[0]['id_user'];
                    $this->redirect();
                } else {
                    $this->redirect();
                }
            }
        }

        public function cerrar () {
            session_start();
            session_unset();
            session_destroy();
            $this->redirect();
        }
    }