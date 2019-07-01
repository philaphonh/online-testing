<?php
    class Users {
        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function register($data) {
            $sql = 'INSERT INTO users (user_firstName, user_lastName, user_email, username, user_password) VALUES(:firstName, :lastName, :email, :username, :password)';
            $this->db->query($sql);
            $this->db->bind(':firstName', $data['firstName']);
            $this->db->bind(':lastName', $data['lastName']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);

            return $this->db->execute() ? true : false;
        }

        public function edit($data) {
            $sql = "UPDATE users SET user_firstName = :firstName, user_lastName = :lastName, user_email = :email, username = :username WHERE user_id = :id";
            $this->db->query($sql);
            $this->db->bind(':firstName', $data['firstName']);
            $this->db->bind(':lastName', $data['lastName']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':id', $_SESSION['user_id']);

            return $this->db->execute() ? true : false;
        }

        public function findUserById($id) {
            $sql = "SELECT * FROM users WHERE user_id = :id";
            $this->db->query($sql);
            $this->db->bind(':id', $id);

            $result = $this->db->result();

            return $result ? $result : false;
        }

        public function login($username, $password) {
            $sql = "SELECT * FROM users WHERE username = :username";
            $this->db->query($sql);
            $this->db->bind(':username', $username);

            $result = $this->db->result();

            $hashedPassword = $result->user_password;

            return password_verify($password, $hashedPassword) ? $result : false;

        }

        public function findUserByEmail($email) {
            $sql = "SELECT * FROM users WHERE user_email = :email";
            $this->db->query($sql);
            $this->db->bind(':email', $email);

            $result = $this->db->result();

            return $result ? $result : false;
        }
        public function findUserByUsername($username) {
            $sql = "SELECT * FROM users WHERE username = :username";
            $this->db->query($sql);
            $this->db->bind(':username', $username);

            $result = $this->db->result();

            return $result ? true : false;
        }

        public function deleteUserById($id) {
            $sql = "DELETE FROM users WHERE user_id = :id";
            $this->db->query($sql);
            $this->db->bind(':id', $id);

            return $this->db->execute() ? true : false;
        }

    }
