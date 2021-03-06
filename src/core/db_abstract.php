<?php

    require_once 'config/realpath.php';

    abstract class dbAbstractModel {

        private static $host, $user, $passwd, $charset; 
        
        protected $db, $query;
        protected $rows = array();
       
        abstract protected function get();
        abstract protected function getById();
        abstract protected function post();
        abstract protected function update();
        abstract protected function delete();

        private $conn;

        public function __construct () {

            $config_database = require_once CONFIG_PATH . '/config_database.php';
        
            self::$host = $config_database['host'] ?? 'localhost';
            self::$user = $config_database['user'] ?? 'root';
            self::$passwd = $config_database['passwd'] ?? '';
            
            self::$charset = $config_database['utf8'] ?? 'utf8';

            $this->db = $config_database['db'] ?? 'biblioteca-publica-agustin-codazzi';
        }

        protected function open_connection_db () {

            $this->conn = new mysqli(self::$host, self::$user, self::$passwd, $this->db);

            if ($this->conn->connect_errno) {
                echo 'Error al conectar a la base de datos ' . $this->conn->connect_errno;
                echo ' Not found ' . $this->conn->connect_error;
            }
            
            $this->conn->set_charset(self::$charset);
        }

        protected function close_connection_db () {
            $this->conn->close();
        }

        public function execute_single_query ($param, $row, $var=array()) {

            $this->open_connection_db();

            foreach ($row as $key => $value) {
                $var[$key] = $value;
            }

            $stmt = $this->conn->prepare($this->query);
            call_user_func_array(array($stmt, 'bind_param'), array_merge(array($param), $var));

            if (!$stmt->execute()) {
                echo $stmt->error;
            } else {
                echo 'Se ha ejecutado una funcion';
            }

            $this->close_connection_db();
        }

        public function get_result_from_query () {

            $this->open_connection_db();

            if (!$result = $this->conn->query($this->query)) echo $this->conn->error;
            while ($this->rows[] = $result->fetch_assoc());
            array_pop($this->rows);

            $this->close_connection_db();
        }
    }