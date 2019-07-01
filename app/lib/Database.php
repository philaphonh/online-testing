<?php
    class Database {
        private $host = DB_HOST;
        private $admin = DB_USER;
        private $pass = DB_PASSWORD;
        private $db = DB_NAME;

        private $dbhandler;
        private $stm;
        private $err;

        public function __construct() {
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try {
                $this->dbhandler = new PDO($dsn, $this->admin, $this->pass, $options);
            } catch (PDOException $e) {
                $this->err = $e->getMessage();
                echo $this->err;
            }
        }

        public function query($sql) {
            $this->stm = $this->dbhandler->prepare($sql);
        }

        public function bind($param, $value, $type = null) {
            if(is_null($type)) {
                switch (true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                        break;
                }
            }
            $this->stm->bindValue($param, $value, $type);
        }

        public function execute() {
            return $this->stm->execute();
        }

        public function resultSet() {
            $this->execute();
            return $this->stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function result() {
            $this->execute();
            return $this->stm->fetch(PDO::FETCH_OBJ);
        }

        public function rowCount() {
            return $this->stm->rowCount();
        }
    }